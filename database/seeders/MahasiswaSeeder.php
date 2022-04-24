<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'user_id' => '1',
            'nama' => 'Admin',
        ]);

        Mahasiswa::create([
            'user_id' => '2',
            'nama' => 'Sallie Mansurina',
            'nik' => '6474020212121212',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '081212121212',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.0012',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'INSTITUT TEKNOLOGI KALIMANTAN',
            'prodi' => 'Teknik Informatika',

            'akre_ptn' => 'B',
            'akre_prodi' => 'B',
            'ipk' => '3.00',
            'ukt' => '5000000',
            'pekerjaan_ortu' => 'GOL 2',
            'prestasi' => 'GOL 3',

            'status' => "Diverifikasi",
        ]);
        Mahasiswa::create([
            'user_id' => '3',
            'nama' => 'Challisya Nurdianti',
            'nik' => '6474020122222222',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '081313131313',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'INSTITUT TEKNOLOGI KALIMANTAN',
            'prodi' => 'Teknik Informatika',

            'akre_ptn' => 'A',
            'akre_prodi' => 'A',
            'ipk' => '3.52',
            'ukt' => '4000000',
            'pekerjaan_ortu' => 'GOL 1',
            'prestasi' => 'GOL 2',

            'status' => "Diverifikasi",
        ]);
        Mahasiswa::create([
            'user_id' => '4',
            'nama' => 'Eka Nurul Huda',
            'nik' => '6474020133333333',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '081414141414',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'INSTITUT TEKNOLOGI KALIMANTAN',
            'prodi' => 'Teknik Perkapalan',

            'akre_ptn' => 'B',
            'akre_prodi' => 'C',
            'ipk' => '3.04',
            'ukt' => '2000000',
            'pekerjaan_ortu' => 'GOL 6',
            'prestasi' => '-',
            
            'status' => "Diverifikasi",
        ]);

        Mahasiswa::create([
            'user_id' => '5',
            'nama' => 'Fajar Nurul Huda',
            'nik' => '6474020144444444',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '081515151515',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'INSTITUT TEKNOLOGI KALIMANTAN',
            'prodi' => 'Teknik Kelautan',

            'akre_ptn' => 'B',
            'akre_prodi' => 'A',
            'ipk' => '3.94',
            'ukt' => '9000000',
            'pekerjaan_ortu' => 'GOL 2',
            'prestasi' => 'GOL 3',

            'status' => "Diverifikasi",
        ]);

        Mahasiswa::create([
            'user_id' => '6',
            'nama' => 'Gita Nurul Huda',
            'nik' => '6474020155555555',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '081616161616',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'POLITEKNIK NEGERI BALIKPAPAN',
            'prodi' => 'Ilmu Komunikasi',

            'akre_ptn' => 'C',
            'akre_prodi' => 'B',
            'ipk' => '3.54',
            'ukt' => '3500000',
            'pekerjaan_ortu' => 'GOL 6',
            'prestasi' => '-',

            'status' => "Diverifikasi",
        ]);

        Mahasiswa::create([
            'user_id' => '7',
            'nama' => 'Hendra Nurul Huda',
            'nik' => '6474020166666666',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '081717171717',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'POLITEKNIK NEGERI BALIKPAPAN',
            'prodi' => 'Ilmu Komunikasi',

            'akre_ptn' => 'KHUSUS',
            'akre_prodi' => 'C',
            'ipk' => '3.21',
            'ukt' => '6500000',
            'pekerjaan_ortu' => 'GOL 3',
            'prestasi' => 'GOL 1',
        ]);

        Mahasiswa::create([
            'user_id' => '8',
            'nama' => 'Ika Nurul Huda',
            'nik' => '6474020177777777',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '081818181818',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'UNIVERSITAS BALIKPAPAN',
            'prodi' => 'Digital Marketing',

            'akre_ptn' => 'B',
            'akre_prodi' => 'A',
            'ipk' => '3.73',
            'ukt' => '3000000',
            'pekerjaan_ortu' => 'GOL 5',
            'prestasi' => 'GOL 4',

            'status' => "Diverifikasi",
        ]);

        Mahasiswa::create([
            'user_id' => '9',
            'nama' => 'Joko Nurul Huda',
            'nik' => '6474020188888888',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '081919191919',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'UNIVERSITAS BALIKPAPAN',
            'prodi' => 'Ilmu Komunikasi',

            'akre_ptn' => 'B',
            'akre_prodi' => 'KHUSUS',
            'ipk' => '3.86',
            'ukt' => '4500000',
            'pekerjaan_ortu' => 'GOL 4',
            'prestasi' => '-',

            'status' => "Diverifikasi",
        ]);

        Mahasiswa::create([
            'user_id' => '10',
            'nama' => 'Kiki Nurul Huda',
            'nik' => '6474020199999999',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '082020202020',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'UNIVERSITAS BALIKPAPAN',
            'prodi' => 'Ilmu Komunikasi',

            'akre_ptn' => 'A',
            'akre_prodi' => 'A',
            'ipk' => '3.42',
            'ukt' => '5500000',
            'pekerjaan_ortu' => 'GOL 4',
            'prestasi' => 'GOL 1',
        ]);

        Mahasiswa::create([
            'user_id' => '11',
            'nama' => 'Lala Nurul Huda',
            'nik' => '6474020200000000',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '082121212121',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'UNIVERSITAS BALIKPAPAN',
            'prodi' => 'Ilmu Sosial',

            'akre_ptn' => 'B',
            'akre_prodi' => 'C',
            'ipk' => '3.94',
            'ukt' => '9000000',
            'pekerjaan_ortu' => 'GOL 2',
            'prestasi' => 'GOL 3',

            'status' => "Diverifikasi",
        ]);

        Mahasiswa::create([
            'user_id' => '12',
            'nama' => 'Mala Nurul Huda',
            'nik' => '6474020222222222',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '082222222222',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'UNIVERSITAS BALIKPAPAN',
            'prodi' => 'Sistem Informasi',

            'akre_ptn' => 'B',
            'akre_prodi' => 'B',
            'ipk' => '3.54',
            'ukt' => '3500000',
            'pekerjaan_ortu' => 'GOL 6',
            'prestasi' => '-',

            'status' => "Diverifikasi",
        ]);

        Mahasiswa::create([
            'user_id' => '13',
            'nama' => 'Nana Nurul Huda',
            'nik' => '6474020233333333',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '082323232323',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'INSTITUT TEKNOLOGI KALIMANTAN',
            'prodi' => 'Teknik Industri',

            'akre_ptn' => 'B',
            'akre_prodi' => 'C',
            'ipk' => '3.21',
            'ukt' => '6500000',
            'pekerjaan_ortu' => 'GOL 3',
            'prestasi' => '-',

            'status' => "Diverifikasi",
        ]);

        Mahasiswa::create([
            'user_id' => '14',
            'nama' => 'Oki Nurul Huda',
            'nik' => '6474020244444444',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '082424242424',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'UNIVERSITAS BALIKPAPAN',
            'prodi' => 'Teknik Informatika',

            'akre_ptn' => 'B',
            'akre_prodi' => 'C',
            'ipk' => '3.73',
            'ukt' => '7500000',
            'pekerjaan_ortu' => 'GOL 5',
            'prestasi' => 'GOL 4',
        ]);

        Mahasiswa::create([
            'user_id' => '15',
            'nama' => 'Pai Nurul Huda',
            'nik' => '6474020255555555',
            'alamat' => 'Jl. Kebon Kacang',
            'no_telp' => '082525252525',
            'tempat_lahir' => 'Bontang',
            'tanggal_lahir' => '1996-12-12',

            'nim' => '16.01.00123',
            'strata' => 'S1',
            'jenis_ptn' => 'Institute',
            'ptn' => 'UNIVERSITAS BALIKPAPAN',
            'prodi' => 'Teknik Informatika',

            'akre_ptn' => 'B',
            'akre_prodi' => 'B',
            'ipk' => '3.21',
            'ukt' => '6500000',
            'pekerjaan_ortu' => 'GOL 5',
            'prestasi' => '-',

            'status' => "Diverifikasi",
        ]);

        
        $strata = ["D-III", "D-IV", "S1"];
        $jenis_ptn = ["Luar Negeri", "Politekkes", "Universitas", "Poltekkes", "Institut", "Politeknik", "Akademi", "Sekolah Tinggi"];
        $ptn = ["INSTITUT TEKNOLOGI KALIMANTAN", "POLITEKNIK NEGERI BALIKPAPAN", "UNIVERSITAS BALIKPAPAN"];
        $prodi = ["Sistem Informasi", "Informatika", "Teknik Mesin", "Teknik Industri", "Matematika", "Bisnis Digital", "Arsitektur", "Ilmu Komputer", "Teknik Elektro", "Teknik Kimia", "Teknik Sipil", "Teknik Lingkungan", "Teknik Geologi", "Teknik Geofisika", "Teknik Geomatika", "Teknik Perkapalan", "Teknik Perminyakan", "Teknik Pertambangan", "Teknik Pertanian", "Teknik Pertambangan", "Teknik Perkapalan", "Teknik Perminyakan", "Teknik Pertambangan", "Teknik Pertanian", "Teknik Pertambangan", "Teknik Perkapalan", "Teknik Perminyakan", "Teknik Pertambangan", "Teknik Pertanian", "Teknik Pertambangan", "Teknik Perkapalan", "Teknik Perminyakan", "Teknik Pertambangan", "Teknik Pertanian", "Teknik Pertambangan", "Teknik Perkapalan", "Teknik Perminyakan", "Teknik Pertambangan", "Teknik Pertanian", "Teknik Pertambangan", "Teknik Perkapalan", "Teknik Perminyakan", "Teknik Pertambangan", "Teknik Pertanian", "Teknik Pertambangan", "Teknik Perkapalan", "Teknik Perminyakan", "Teknik Pertambangan", "Teknik Pertanian", "Teknik Pertambangan", "Teknik Perkapalan", "Teknik Perminyakan", "Teknik Pertambangan", "Teknik Pertanian", "Teknik Pertambangan", "Teknik Perkapalan", "Teknik Perminyakan", "Teknik Pertambangan", "Teknik Pertanian", "Teknik Pertambangan", "Teknik Perkapalan", "Teknik Perminyakan", "Teknik Pertambangan", "Teknik Pertanian"];
        $akre_ptn = ["A", "B", "C", "KHUSUS"];
        $akre_prodi = ["A", "B", "C", "KHUSUS"];
        $ipk = [3.00, 3.01, 3.02, 3.03, 3.04, 3.05, 3.06, 3.07, 3.08, 3.09, 3.10, 3.11, 3.12, 3.13, 3.14, 3.15, 3.16, 3.17, 3.18, 3.19, 3.20, 3.21, 3.22, 3.23, 3.24, 3.25, 3.26, 3.27, 3.28, 3.29, 3.30, 3.31, 3.32, 3.33, 3.34, 3.35, 3.36, 3.37, 3.38, 3.39, 3.40, 3.41, 3.42, 3.43, 3.44, 3.45, 3.46, 3.47, 3.48, 3.49, 3.50, 3.51, 3.52, 3.53, 3.54, 3.55, 3.56, 3.57, 3.58, 3.59, 3.60, 3.61, 3.62, 3.63, 3.64, 3.65, 3.66, 3.67, 3.68, 3.69, 3.70, 3.71, 3.72, 3.73, 3.74, 3.75, 3.76, 3.77, 3.78, 3.79, 3.80, 3.81, 3.82, 3.83, 3.84, 3.85, 3.86, 3.87, 3.88, 3.89, 3.90, 3.91, 3.92, 3.93, 3.94, 3.95, 3.96, 3.97, 3.98, 3.99, 4.00];
        // ukt kelipatan 500000 dari 1000000 sampai 10000000
        $ukt = [500000, 1000000, 1500000, 2000000, 2500000, 3000000, 3500000, 4000000, 4500000, 5000000, 5500000, 6000000, 6500000, 7000000, 7500000, 8000000, 8500000, 9000000, 9500000, 10000000];
        $pekerjaan_ortu = ["GOL 1", "GOL 2", "GOL 3", "GOL 4", "GOL 5", "GOL 6", "GOL 7"];
        $prestasi = ["-", "GOL 1", "GOL 2", "GOL 3", "GOL 4", "GOL 5"];
        $status = ["Menunggu", "Diverifikasi"];
        for($i=16; $i<=500; $i++) {
            Mahasiswa::create([
                'user_id' => $i,
                'nama' => 'Mahasiswa '.$i,
                'nik' => '6474020212121212',
                'alamat' => 'Jl. Kebon Kacang',
                'no_telp' => '081212121212',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '1996-12-12',

                'nim' => '16.01.00' . $i,
                'strata' => $strata[rand(0, 2)],
                'jenis_ptn' => $jenis_ptn[rand(0, 7)],
                'ptn' => $ptn[rand(0, 2)],
                'prodi' => $prodi[rand(0, 49)],

                'akre_ptn' => $akre_ptn[rand(0, 3)],
                'akre_prodi' => $akre_prodi[rand(0, 3)],
                'ipk' => $ipk[rand(0, 49)],
                'ukt' => $ukt[rand(0, 19)],
                'pekerjaan_ortu' => $pekerjaan_ortu[rand(0, 6)],
                'prestasi' => $prestasi[rand(0, 5)],
                
                'status' => $status[rand(0, 1)],
            ]);
        }
    }
}
