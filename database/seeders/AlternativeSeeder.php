<?php

namespace Database\Seeders;
use App\Models\Alternative;
use App\Models\Hasil;
use Illuminate\Database\Seeder;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kurang, Baik , Sangat Baik

        Alternative::create([
            'noStaff' => 'A001',
            'nama' => 'Budi Siswanto',
            'jabatan' => 'Staff Akademik',
            'kinerja' => 'Baik',
            'kedisiplinan' => 'Sangat Baik',
            'inisiatif' => 'Baik',
            'kerjasama' => 'Kurang',
            'presensi' => '78',
        ]);
        Alternative::create([
            'noStaff' => 'A002',
            'nama' => 'Harun Pambudi',
            'jabatan' => 'Staff Akademik',
            'kinerja' => 'Sangat Baik',
            'kedisiplinan' => 'Sangat Baik',
            'inisiatif' => 'Baik',
            'kerjasama' => 'Sangat Baik',
            'presensi' => '90',
        ]);
        Alternative::create([
            'noStaff' => 'A003',
            'nama' => 'Siti Maimunah',
            'jabatan' => 'Staff Kemahasiswaan',
            'kinerja' => 'Kurang',
            'kedisiplinan' => 'Baik',
            'inisiatif' => 'Kurang',
            'kerjasama' => 'Kurang',
            'presensi' => '15',
        ]);
        Alternative::create([
            'noStaff' => 'A004',
            'nama' => 'Jako Priyono',
            'jabatan' => 'Admin Akademik',
            'kinerja' => 'Baik',
            'kedisiplinan' => 'Kurang',
            'inisiatif' => 'Baik',
            'kerjasama' => 'Baik',
            'presensi' => '80',
        ]);
        Alternative::create([
            'noStaff' => 'A005',
            'nama' => 'Inayah Nur',
            'jabatan' => 'Staff Prodi',
            'kinerja' => 'Kurang',
            'kedisiplinan' => 'Baik',
            'inisiatif' => 'Baik',
            'kerjasama' => 'Sangat Baik',
            'presensi' => '66',
        ]);
    }
}
