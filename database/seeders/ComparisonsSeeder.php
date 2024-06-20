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
            'kinerja' => '2',
            'kedisiplinan' => '3',
            'inisiatif' => '2',
            'kerjasama' => '1',
            'presensi' => '2',
        ]);
        Comparisons::create([
            'noStaff' => 'A002',
            'kinerja' => '3',
            'kedisiplinan' => '3',
            'inisiatif' => '2',
            'kerjasama' => '3',
            'presensi' => '3',
        ]);
        Comparisons::create([
            'noStaff' => 'A003',
            'kinerja' => '1',
            'kedisiplinan' => '2',
            'inisiatif' => '1',
            'kerjasama' => '1',
            'presensi' => '1',
        ]);
        Comparisons::create([
            'noStaff' => 'A004',
            'kinerja' => '2',
            'kedisiplinan' => '1',
            'inisiatif' => '2',
            'kerjasama' => '2',
            'presensi' => '2',
        ]);
        Comparisons::create([
            'noStaff' => 'A005',
            'kinerja' => '1',
            'kedisiplinan' => '2',
            'inisiatif' => '2',
            'kerjasama' => '3',
            'presensi' => '2',
            
        ]);
    }
}
