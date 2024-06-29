<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WeightValue;
use Illuminate\Support\Facades\DB; // Import DB class here
class PostBobotController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'cbhg' => 'required|integer',
            'cbhs' => 'required|integer',
            'cbhk' => 'required|integer',
            'cbhl' => 'required|integer',
            'cbgh' => 'required|integer',
            'cbgs' => 'required|integer',
            'cbgk' => 'required|integer',
            'cbgl' => 'required|integer',
            'cbsh' => 'required|integer',
            'cbsg' => 'required|integer',
            'cbsk' => 'required|integer',
            'cbsl' => 'required|integer',
            'cbkh' => 'required|integer',
            'cbkg' => 'required|integer',
            'cbks' => 'required|integer',
            'cbkl' => 'required|integer',
            'cblh' => 'required|integer',
            'cblg' => 'required|integer',
            'cblk' => 'required|integer',
            'cbls' => 'required|integer'
            // Add validation rules for other fields as needed
        ]);

        try {
            // Start transaction
            DB::beginTransaction();

            // Create WeightValue instances and save them based on the form data
            WeightValue::create([
                'criteria_1' => 'Kinerja',
                'criteria_2' => 'Presensi',
                'weight_value' => $request->input('cbhg'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Kinerja',
                'criteria_2' => 'Kedisiplinan',
                'weight_value' => $request->input('cbhs'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Kinerja',
                'criteria_2' => 'Inisiatif',
                'weight_value' => $request->input('cbhk'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Kinerja',
                'criteria_2' => 'Kerjasama',
                'weight_value' => $request->input('cbhl'),
            ]);
            
            //test

            WeightValue::create([
                'criteria_1' => 'Presensi',
                'criteria_2' => 'Kinerja',
                'weight_value' => $request->input('cbgh'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Presensi',
                'criteria_2' => 'Kedisiplinan',
                'weight_value' => $request->input('cbgs'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Presensi',
                'criteria_2' => 'Inisiatif',
                'weight_value' => $request->input('cbgk'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Presensi',
                'criteria_2' => 'Kerjasama',
                'weight_value' => $request->input('cbgl'),
            ]);

            //test

            WeightValue::create([
                'criteria_1' => 'Kedisiplinan',
                'criteria_2' => 'Kinerja',
                'weight_value' => $request->input('cbsh'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Kedisiplinan',
                'criteria_2' => 'Presensi',
                'weight_value' => $request->input('cbsg'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Kedisiplinan',
                'criteria_2' => 'Inisiatif',
                'weight_value' => $request->input('cbsk'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Kedisiplinan',
                'criteria_2' => 'Kerjasama',
                'weight_value' => $request->input('cbsl'),
            ]);

            //test

            WeightValue::create([
                'criteria_1' => 'Inisiatif',
                'criteria_2' => 'Kinerja',
                'weight_value' => $request->input('cbkh'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Inisiatif',
                'criteria_2' => 'Presensi',
                'weight_value' => $request->input('cbkg'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Inisiatif',
                'criteria_2' => 'Kedisiplinan',
                'weight_value' => $request->input('cbks'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Inisiatif',
                'criteria_2' => 'Kerjasama',
                'weight_value' => $request->input('cbkl'),
            ]);

            //test

            WeightValue::create([
                'criteria_1' => 'Kerjasama',
                'criteria_2' => 'Kinerja',
                'weight_value' => $request->input('cblh'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Kerjasama',
                'criteria_2' => 'Presensi',
                'weight_value' => $request->input('cblg'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Kerjasama',
                'criteria_2' => 'Inisiatif',
                'weight_value' => $request->input('cblk'),
            ]);

            WeightValue::create([
                'criteria_1' => 'Kerjasama',
                'criteria_2' => 'Kedisiplinan',
                'weight_value' => $request->input('cbls'),
            ]);

            DB::commit();

            // Redirect back with success message
            return redirect()->back()->with('success', 'BOBOT TELAH DISIMPAN PADA DATABASE');
            } catch (\Exception $e) {
            // Rollback transaction if error occurs
        
            DB::rollback();

            // Redirect back with error message or handle the error appropriately
            return redirect()->back()->with('error', 'Failed to save weight values: ' . $e->getMessage());
        }
    }

    public function postbobot(Request $request)
    {
        try {
            // Ambil semua nilai bobot dari database
            $weightValues = WeightValue::all();

            // Inisialisasi variabel matriks
            $h = 1;
            $g = 1;
            $s = 1;
            $k = 1;
            $l = 1;

            // Ambil nilai matriks dari database berdasarkan kriteria
            $k1 = $l;
            $k2 = $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Presensi')->first()->weight_value / $weightValues->where('criteria_1', 'Presensi')->where('criteria_2', 'Kinerja')->first()->weight_value;
            $k3 = $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Kedisiplinan')->first()->weight_value / $weightValues->where('criteria_1', 'Kedisiplinan')->where('criteria_2', 'Kinerja')->first()->weight_value;
            $k4 = $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Inisiatif')->first()->weight_value / $weightValues->where('criteria_1', 'Inisiatif')->where('criteria_2', 'Kinerja')->first()->weight_value;
            $k5 = $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Kerjasama')->first()->weight_value / $weightValues->where('criteria_1', 'Kerjasama')->where('criteria_2', 'Kinerja')->first()->weight_value;
            
            $k6 = $weightValues->where('criteria_1', 'Presensi')->where('criteria_2', 'Kinerja')->first()->weight_value / $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Presensi')->first()->weight_value;
            $k7 = $weightValues->where('criteria_1', 'Presensi')->where('criteria_2', 'Presensi')->first()->weight_value;
            $k8 = $weightValues->where('criteria_1', 'Presensi')->where('criteria_2', 'Inisiatif')->first()->weight_value / $weightValues->where('criteria_1', 'Inisiatif')->where('criteria_2', 'Presensi')->first()->weight_value;
            $k9 = $weightValues->where('criteria_1', 'Presensi')->where('criteria_2', 'Kerjasama')->first()->weight_value / $weightValues->where('criteria_1', 'Kerjasama')->where('criteria_2', 'Presensi')->first()->weight_value;
            
            $k10 = $weightValues->where('criteria_1', 'Kedisiplinan')->where('criteria_2', 'Kinerja')->first()->weight_value / $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Kedisiplinan')->first()->weight_value;
            $k11 = $weightValues->where('criteria_1', 'Kedisiplinan')->where('criteria_2', 'Presensi')->first()->weight_value / $weightValues->where('criteria_1', 'Presensi')->where('criteria_2', 'Kedisiplinan')->first()->weight_value;
            $k12 = $weightValues->where('criteria_1', 'Kedisiplinan')->where('criteria_2', 'Inisiatif')->first()->weight_value / $weightValues->where('criteria_1', 'Inisiatif')->where('criteria_2', 'Kedisiplinan')->first()->weight_value;
            $k13 = $weightValues->where('criteria_1', 'Kedisiplinan')->where('criteria_2', 'Kerjasama')->first()->weight_value / $weightValues->where('criteria_1', 'Kerjasama')->where('criteria_2', 'Kedisiplinan')->first()->weight_value;
            
            $k14 = $weightValues->where('criteria_1', 'Inisiatif')->where('criteria_2', 'Kinerja')->first()->weight_value / $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Inisiatif')->first()->weight_value;
            $k15 = $weightValues->where('criteria_1', 'Inisiatif')->where('criteria_2', 'Presensi')->first()->weight_value / $weightValues->where('criteria_1', 'Presensi')->where('criteria_2', 'Inisiatif')->first()->weight_value;
            $k16 = $weightValues->where('criteria_1', 'Inisiatif')->where('criteria_2', 'Kedisiplinan')->first()->weight_value / $weightValues->where('criteria_1', 'Kedisiplinan')->where('criteria_2', 'Inisiatif')->first()->weight_value;
            $k17 = $weightValues->where('criteria_1', 'Inisiatif')->where('criteria_2', 'Kerjasama')->first()->weight_value / $weightValues->where('criteria_1', 'Kerjasama')->where('criteria_2', 'Inisiatif')->first()->weight_value;
            
            $k18 = $weightValues->where('criteria_1', 'Kerjasama')->where('criteria_2', 'Kinerja')->first()->weight_value / $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Kerjasama')->first()->weight_value;
            $k19 = $weightValues->where('criteria_1', 'Kerjasama')->where('criteria_2', 'Presensi')->first()->weight_value / $weightValues->where('criteria_1', 'Presensi')->where('criteria_2', 'Kerjasama')->first()->weight_value;
            $k20 = $weightValues->where('criteria_1', 'Kerjasama')->where('criteria_2', 'Inisiatif')->first()->weight_value / $weightValues->where('criteria_1', 'Inisiatif')->where('criteria_2', 'Kerjasama')->first()->weight_value;
            $k21 = $weightValues->where('criteria_1', 'Kerjasama')->where('criteria_2', 'Kedisiplinan')->first()->weight_value / $weightValues->where('criteria_1', 'Kedisiplinan')->where('criteria_2', 'Kerjasama')->first()->weight_value;
            
            // Lanjutkan untuk mengambil nilai matriks lainnya
            $k22 = $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Kerjasama')->first()->weight_value / $weightValues->where('criteria_1', 'Kerjasama')->where('criteria_2', 'Kinerja')->first()->weight_value;
            $k23 = $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Presensi')->first()->weight_value / $weightValues->where('criteria_1', 'Presensi')->where('criteria_2', 'Kinerja')->first()->weight_value;
            $k24 = $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Inisiatif')->first()->weight_value / $weightValues->where('criteria_1', 'Inisiatif')->where('criteria_2', 'Kinerja')->first()->weight_value;
            $k25 = $weightValues->where('criteria_1', 'Kinerja')->where('criteria_2', 'Kedisiplinan')->first()->weight_value / $weightValues->where('criteria_1', 'Kedisiplinan')->where('criteria_2', 'Kinerja')->first()->weight_value;

            // Hitung nilai matriks sesuai dengan rumus yang diinginkan
            $k26 = $k1 + $k6 + $k11 + $k16 + $k21;
            $k27 = $k2 + $k7 + $k12 + $k17 + $k22;
            $k28 = $k3 + $k8 + $k13 + $k18 + $k23;
            $k29 = $k4 + $k9 + $k14 + $k19 + $k24;
            $k30 = $k5 + $k10 + $k15 + $k20 + $k25;

            // Kirim nilai matriks ke view 'admin.package.ahp.index'
            return view('admin.package.ahp.index', [
                'k1' => $k1,
                'k2' => $k2,
                'k3' => $k3,
                'k4' => $k4,
                'k5' => $k5,
                'k6' => $k6,
                'k7' => $k7,
                'k8' => $k8,
                'k9' => $k9,
                'k10' => $k10,
                'k11' => $k11,
                'k12' => $k12,
                'k13' => $k13,
                'k14' => $k14,
                'k15' => $k15,
                'k16' => $k16,
                'k17' => $k17,
                'k18' => $k18,
                'k19' => $k19,
                'k20' => $k20,
                'k21' => $k21,
                'k22' => $k22,
                'k23' => $k23,
                'k24' => $k24,
                'k25' => $k25,
                'k26' => $k26,
                'k27' => $k27,
                'k28' => $k28,
                'k29' => $k29,
                'k30' => $k30
            ]);

        } catch (\Exception $e) {
            // Tangani exception jika terjadi kesalahan
            return redirect()->back()->with('error', 'Gagal menghitung matriks: ' . $e->getMessage());
        }
    }



}
