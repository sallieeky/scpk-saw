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

    }
}
