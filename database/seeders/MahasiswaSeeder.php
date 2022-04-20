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
        ]);
    }
}
