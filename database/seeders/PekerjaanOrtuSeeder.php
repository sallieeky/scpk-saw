<?php

namespace Database\Seeders;

use App\Models\PekerjaanOrtu;
use Illuminate\Database\Seeder;

class PekerjaanOrtuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PekerjaanOrtu::create([
            "golongan" => "GOL 1",
            "deskripsi" => "Pejabat Tinggi Negara, Rektor, Anggota Legislatif Guru Besar,Perwira Tinggi, Professional, Pejabat Eselon I, Kepala Daerah, Pengusaha Besar dan Menengah, Direksi, Manager.",
        ]);
        PekerjaanOrtu::create([
            "golongan" => "GOL 2",
            "deskripsi" => "Pejabat Eselon II, Dekan, Asisten Manager, Kepala Dinas, Perwira Menengah,Pengusaha Kecil.",
        ]);
        PekerjaanOrtu::create([
            "golongan" => "GOL 3",
            "deskripsi" => "Pejabat Eselon III, Supervisor, Kabiro, Kabag, PNS Gol IV, Perwira Pertama, Pengusaha Mikro.",
        ]);
        PekerjaanOrtu::create([
            "golongan" => "GOL 4",
            "deskripsi" => "Pejabat Eselon IV, Bintara Tinggi, Kasubag, PNS Gol III, Pensiunan PNS Gol IV.",
        ]);
        PekerjaanOrtu::create([
            "golongan" => "GOL 5",
            "deskripsi" => "Bintara, PNS Gol II, Kaur, Kasi, Pensiunan PNS Gol III.",
        ]);
        PekerjaanOrtu::create([
            "golongan" => "GOL 6",
            "deskripsi" => "Tamtama, PNS Gol I, Pensiunan PNS Gol II, Pengemudi.",
        ]);
        PekerjaanOrtu::create([
            "golongan" => "GOL 7",
            "deskripsi" => "Anak Yatim Piatu, Ibu Rumah Tangga, Kuli Bangunan, Tukang Parkir, Buruh Tani, Tukang Becak, Pekerja Sektor Informal, Pensiunan PNS Gol I.",
        ]);
    }
}
