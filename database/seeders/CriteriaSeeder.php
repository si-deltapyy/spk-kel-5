<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Criteria::create([
            'code' => 'K001',
            'name' => 'Kinerja'
        ]);
        Criteria::create([
            'code' => 'K002',
            'name' => 'Kedisiplin'
        ]);
        Criteria::create([
            'code' => 'K003',
            'name' => 'Inisiatif'
        ]);
        Criteria::create([
            'code' => 'K004',
            'name' => 'Kerjasama'
        ]);
        Criteria::create([
            'code' => 'K005',
            'name' => 'Presensi'
        ]);
    }
}
