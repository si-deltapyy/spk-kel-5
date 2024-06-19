<?php

namespace Database\Seeders;

use App\Models\Comparisons;
use Illuminate\Database\Seeder;

class ComparisonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comparisons::create([
            'noStaff' => 'A001',
            'nama' => 'Budi Siswanto',
            'jabatan' => 'Staff Akademik',
            'kinerja' => '2',
            'kedisiplinan' => '3',
            'inisiatif' => '2',
            'kerjasama' => '1',
            'presensi' => '2',
        ]);
        Comparisons::create([
            'noStaff' => 'A002',
            'nama' => 'Harun Pambudi',
            'jabatan' => 'Staff Akademik',
            'kinerja' => '3',
            'kedisiplinan' => '3',
            'inisiatif' => '2',
            'kerjasama' => '3',
            'presensi' => '3',
        ]);
        Comparisons::create([
            'noStaff' => 'A003',
            'nama' => 'Siti Maimunah',
            'jabatan' => 'Staff Kemahasiswaan',
            'kinerja' => '2',
            'kedisiplinan' => '2',
            'inisiatif' => '1',
            'kerjasama' => '1',
            'presensi' => '2',
        ]);
        Comparisons::create([
            'noStaff' => 'A004',
            'nama' => 'Jako Priyono',
            'jabatan' => 'Admin Akademik',
            'kinerja' => '2',
            'kedisiplinan' => '1',
            'inisiatif' => '2',
            'kerjasama' => '2',
            'presensi' => '2',
        ]);
        Comparisons::create([
            'noStaff' => 'A005',
            'nama' => 'Inayah Nur',
            'jabatan' => 'Staff Prodi',
            'kinerja' => '1',
            'kedisiplinan' => '2',
            'inisiatif' => '2',
            'kerjasama' => '3',
            'presensi' => '2',
        ]);
    }
}
