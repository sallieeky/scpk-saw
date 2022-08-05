<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function insertDataProfile()
    {
        $tes = "awd;";
        return view("dashboard.insert-data-profile");
    }
    public function insertDataProfilePost(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect('/')->with("pesan", "Selamat Anda Telah Terdaftar Sebagai Calon Penerima Beasiswa!");
    }

    public function index()
    {
        $user = User::where("id", "!=", "1")->get()->count();
        $mahasiswa = Mahasiswa::where("user_id", "!=", "1")->get()->count();
        $data = array_slice($this->rankSaw(), 0, 10);
        $authSaw = $this->authSaw();

        $belumDiverifikasi = Mahasiswa::where([["status", "Menunggu"], ["user_id", "!=", "1"]])->count();

        return view("dashboard.home", compact("user", "mahasiswa", "data", "authSaw", "belumDiverifikasi"));
        
    }

    public function profile()
    {
        return view("dashboard.profile");
    }
    public function gantiGambar(Request $request)
    {
        Mahasiswa::where("user_id", Auth::user()->id)
            ->update([
                "foto" => $request->file("foto")->getClientOriginalName()
            ]);
        $request->file("foto")->storeAs("public/foto", $request->file("foto")->getClientOriginalName());
        return back();
    }

    public function cekPendaftar()
    {
        $pendaftarBelumVerifikasi = Mahasiswa::where([["status", "Menunggu"], ['user_id', "!=", "1"]])->get();
        $jumlah = $pendaftarBelumVerifikasi->count();
        return view("dashboard.cek-pendaftar", compact("pendaftarBelumVerifikasi", "jumlah"));
    }
    public function verifikasi(Mahasiswa $mahasiswa)
    {
        $mahasiswa->update([
            "status" => "Diverifikasi"
        ]);
        return back();
    }
    public function profileMahasiswa(Mahasiswa $mahasiswa)
    {
        return view("dashboard.profile-mahasiswa", compact("mahasiswa"));
    }
    
    public function urutanPendaftar()
    {
        $pendaftar = $this->rankSaw();
        return view("dashboard.urutan-pendaftar", compact("pendaftar"));
    }



    public function sawCount()
    {
        $mahasiswa = Mahasiswa::where([["user_id", "!=", "1"], ["status", "!=", "Menunggu"]])->get();
        $bobot_kriteria = [
            "akre_ptn" => 0.25,
            "akre_prodi" => 0.5,
            "ipk" => 1,
            "ukt" => 0.25,
            "pekerjaan_ortu" => 0.75,
            "prestasi" => 1,
        ];
        $kriteria = [
            "akre_ptn" => [],
            "akre_prodi" => [],
            "ipk" => [],
            "ukt" => [],
            "pekerjaan_ortu" => [],
            "prestasi" => [],
        ];
        foreach ($mahasiswa as $mhs) {
            $nama[] = $mhs->nama;
            $kriteria["akre_ptn"][] = $mhs->akre_ptn;
            $kriteria["akre_prodi"][] = $mhs->akre_prodi;
            $kriteria["ipk"][] = $mhs->ipk;
            $kriteria["ukt"][] = $mhs->ukt;
            $kriteria["pekerjaan_ortu"][] = $mhs->pekerjaan_ortu;
            $kriteria["prestasi"][] = $mhs->prestasi;
        }

        $fuzzy_kriteria = [
            "akre_ptn" => [],
            "akre_prodi" => [],
            "ipk" => [],
            "ukt" => [],
            "pekerjaan_ortu" => [],
            "prestasi" => [],
        ];
        foreach ($kriteria["akre_ptn"] as $aptn ) {
            $temp = null;
            switch ($aptn) {
                case 'KHUSUS':
                    $temp = 0.25;
                    break;
                
                case 'C':
                    $temp = 0.5;
                    break;
                
                case 'B':
                    $temp = 0.75;
                    break;
                
                case 'A':
                    $temp = 1;
                    break;
            }
            $fuzzy_kriteria["akre_ptn"][] = $temp;
        }
        foreach ($kriteria["akre_prodi"] as $aprodi ) {
            $temp = null;
            switch ($aprodi) {
                case 'KHUSUS':
                    $temp = 0.25;
                    break;
                
                case 'C':
                    $temp = 0.5;
                    break;
                
                case 'B':
                    $temp = 0.75;
                    break;
                
                case 'A':
                    $temp = 1;
                    break;
            }
            $fuzzy_kriteria["akre_prodi"][] = $temp;
        }
        foreach ($kriteria["ipk"] as $ipk ) {
            $temp = null;
            if($ipk >= 3.0 and $ipk <= 3.2) {
                $temp = 0.2;
            } else if($ipk > 3.2 and $ipk <= 3.4) {
                $temp = 0.4;
            } else if($ipk > 3.4 and $ipk <= 3.6) {
                $temp = 0.6;
            } else if($ipk > 3.6 and $ipk <= 3.8) {
                $temp = 0.8;
            } else if($ipk > 3.8 and $ipk <= 4.0) {
                $temp = 1;
            }
            $fuzzy_kriteria["ipk"][] = $temp;
        }
        foreach ($kriteria["ukt"] as $ukt ) {
            $temp = null;
            if($ukt <= 500000) {
                $temp = 0.2;
            } else if($ukt > 500000 and $ukt <= 2500000) {
                $temp = 0.4;
            } else if($ukt > 2500000 and $ukt <= 4500000) {
                $temp = 0.6;
            } else if($ukt > 4500000 and $ukt <= 6500000) {
                $temp = 0.8;
            } else if($ukt > 6500000) {
                $temp = 1;
            }
            $fuzzy_kriteria["ukt"][] = $temp;
        }
        foreach ($kriteria["pekerjaan_ortu"] as $pkerja ) {
            $temp = null;
            switch ($pkerja) {
                case 'GOL 1':
                    $temp = 0.1;
                    break;
                
                case 'GOL 2':
                    $temp = 0.25;
                    break;
                
                case 'GOL 3':
                    $temp = 0.4;
                    break;
                
                case 'GOL 4':
                    $temp = 0.55;
                    break;
                
                case 'GOL 5':
                    $temp = 0.7;
                    break;
                
                case 'GOL 6':
                    $temp = 0.85;
                    break;
                
                case 'GOL 7':
                    $temp = 1;
                    break;
            }
            $fuzzy_kriteria["pekerjaan_ortu"][] = $temp;
        }
        foreach ($kriteria["prestasi"] as $prestasi ) {
            $temp = null;
            switch ($prestasi) {
                case 'GOL 1':
                    $temp = 0.2;
                    break;
                
                case 'GOL 2':
                    $temp = 0.4;
                    break;
                
                case 'GOL 3':
                    $temp = 0.6;
                    break;
                
                case 'GOL 4':
                    $temp = 0.8;
                    break;
                
                case 'GOL 5':
                    $temp = 1;
                    break;
                
                default:
                    $temp = 0;
                    break;
            }
            $fuzzy_kriteria["prestasi"][] = $temp;
        }

        $normalisasi_fuzzy = [
            "akre_ptn" => [],
            "akre_prodi" => [],
            "ipk" => [],
            "ukt" => [],
            "pekerjaan_ortu" => [],
            "prestasi" => [],
        ];
        foreach ($fuzzy_kriteria["akre_ptn"] as $faptn) {
            $temp = $faptn / max($fuzzy_kriteria["akre_ptn"]);
            $normalisasi_fuzzy["akre_ptn"][] = $temp;
        }
        foreach ($fuzzy_kriteria["akre_prodi"] as $faprodi) {
            $temp = $faprodi / max($fuzzy_kriteria["akre_prodi"]);
            $normalisasi_fuzzy["akre_prodi"][] = $temp;
        }
        foreach ($fuzzy_kriteria["ipk"] as $fipk) {
            $temp = $fipk / max($fuzzy_kriteria["ipk"]);
            $normalisasi_fuzzy["ipk"][] = $temp;
        }
        foreach ($fuzzy_kriteria["ukt"] as $fukt) {
            $temp = min($fuzzy_kriteria["ukt"]) / $fukt ;
            $normalisasi_fuzzy["ukt"][] = $temp;
        }
        foreach ($fuzzy_kriteria["pekerjaan_ortu"] as $fpkerja) {
            $temp = $fpkerja / max($fuzzy_kriteria["pekerjaan_ortu"]);
            $normalisasi_fuzzy["pekerjaan_ortu"][] = $temp;
        }
        foreach ($fuzzy_kriteria["prestasi"] as $fprestasi) {
            $temp = $fprestasi / max($fuzzy_kriteria["prestasi"]);
            $normalisasi_fuzzy["prestasi"][] = $temp;
        }

        $nilai_preferensi = [];
        for($i=0; $i<count($nama); $i++) {
            $w1r1 = $normalisasi_fuzzy["akre_ptn"][$i] * $bobot_kriteria["akre_ptn"];
            $w2r2 = $normalisasi_fuzzy["akre_prodi"][$i] * $bobot_kriteria["akre_prodi"];
            $w3r3 = $normalisasi_fuzzy["ipk"][$i] * $bobot_kriteria["ipk"];
            $w4r4 = $normalisasi_fuzzy["ukt"][$i] * $bobot_kriteria["ukt"];
            $w5r5 = $normalisasi_fuzzy["pekerjaan_ortu"][$i] * $bobot_kriteria["pekerjaan_ortu"];
            $w6r6 = $normalisasi_fuzzy["prestasi"][$i] * $bobot_kriteria["prestasi"];
            $nilai_preferensi[] = [
                "mahasiswa" => $mahasiswa[$i],
                "nilai" => round(($w1r1 + $w2r2 + $w3r3 + $w4r4 + $w5r5 + $w6r6), 3)
            ];
        }
        return $nilai_preferensi;
    }

    public function rankSaw()
    {
        $data = $this->sawCount();
        usort($data, function($a, $b) {
            return $a['nilai'] < $b['nilai'];
        });
        return $data;
    }

    public function authSaw()
    {
        $data = $this->rankSaw();
        $user = Auth::user()->mahasiswa->nama;

        $authSaw = [];
        for($i=0; $i<count($data); $i++) {
            if($data[$i]['mahasiswa']->nama == $user) {
                $authSaw["nilai"] = $data[$i]["nilai"];
                $authSaw["rank"] = $i+1;
                break;
            }
        }
        return $authSaw;
    }
}
