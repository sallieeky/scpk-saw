<?php

namespace Database\Seeders;

use App\Models\Prestasi;
use Illuminate\Database\Seeder;

class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestasi::create([
            "golongan" => "GOL 1",
            "deskripsi" => "Sertifikat Prestasi Minimal Tingkat Kabupaten yang Diselenggarakan Oleh Pemerintah dan/atau Masyarakat.",
        ]);
        Prestasi::create([
            "golongan" => "GOL 2",
            "deskripsi" => "Sertifikat Prestasi Tingkat Nasional Finalis 10 Besar.",
        ]);
        Prestasi::create([
            "golongan" => "GOL 3",
            "deskripsi" => "Sertifikat Tingkat Nasional Juara 1, 2, 3.",
        ]);
        Prestasi::create([
            "golongan" => "GOL 4",
            "deskripsi" => "Sertifikat Tingkat Internasional Finalis 10 Besar.",
        ]);
        Prestasi::create([
            "golongan" => "GOL 5",
            "deskripsi" => "Sertifikat Tingkat Internasional Juara 1, 2, 3.",
        ]);

    }
}
