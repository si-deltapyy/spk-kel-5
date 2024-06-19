<?php

namespace Database\Seeders;

use App\Models\SubCriteria;
use Illuminate\Database\Seeder;

class SubCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCriteria::create([
            'code' => 'KS001',
            'name' => 'Kinerja',
            'nilaik' => '1',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS002',
            'name' => 'Kinerja',
            'nilaik' => '2',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'KS003',
            'name' => 'Kinerja',
            'nilaik' => '3',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS004',
            'name' => 'Kedisiplinan',
            'nilaik' => '1',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS005',
            'name' => 'Kedisiplinan',
            'nilaik' => '2',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'KS006',
            'name' => 'Kedisiplinan',
            'nilaik' => '3',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS007',
            'name' => 'Inisiatif',
            'nilaik' => '1',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS008',
            'name' => 'Inisiatif',
            'nilaik' => '2',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'KS009',
            'name' => 'Inisiatif',
            'nilaik' => '3',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS0010',
            'name' => 'Kerjasama',
            'nilaik' => '1',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS0011',
            'name' => 'Kerjasama',
            'nilaik' => '2',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'KS0012',
            'name' => 'Kerjasama',
            'nilaik' => '3',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS0013',
            'name' => 'Presensi',
            'nilaik' => '25',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS0014',
            'name' => 'Presensi',
            'nilaik' => '50',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'KS0015',
            'name' => 'Presensi',
            'nilaik' => '85',
            'nilaib' => '3',
        ]);
    }
}
