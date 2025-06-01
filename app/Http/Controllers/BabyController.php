<?php

namespace App\Http\Controllers;

use App\Models\Baby;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BabyController extends Controller
{
    public function index()
    {
        $babies = Baby::all();
        return view('bayi.index', compact('babies'));
    }

    public function create()
    {
        return view('bayi.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'nama_bayi' => 'required|string|max:255',
                'nama_ibu' => 'required|string|max:255',
                'nama_ayah' => 'required|string|max:255',
                'alamat_lengkap' => 'required|string|max:255',
                'tanggal_lahir' => 'required|date',
                'jawaban_kuisioner' => 'required|array',
                'ragu' => 'required|string|in:ya,tidak'
            ]);

            // Hitung nilai total
            $nilai_total = array_sum(array_map(fn($v) => $v === 'ya' ? 1 : 0, $data['jawaban_kuisioner']));
            $data['nilai_total'] = $nilai_total;

            // Tentukan status berdasarkan nilai total
            if ($nilai_total > 3 && $data['ragu'] === 'ya') {
                $data['status'] = 'Meragukan';
            } elseif ($nilai_total > 3) {
                $data['status'] = 'Normal';
            } else {
                $data['status'] = 'Kemungkinan GPPH';
            }

            // Simpan data
            Baby::create($data);
            Log::info("Data berhasil disimpan: " . json_encode($data));

            return redirect('/')->with('add_success', 'Data bayi berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error("Gagal menyimpan data bayi: " . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Gagal menyimpan data bayi.']);
        }
    }


    public function destroy(Request $request, $id)
    {
        $baby = Baby::findOrFail($id);
        $delete_code = $request->input('delete_code');

        // Validasi dengan kode konstan
        if ($delete_code === '2023') {
            $baby->delete();
            return redirect('/')->with('delete_success', 'Data bayi berhasil dihapus.');
        }

        return redirect('/')->with('error', 'Kode hapus salah. Data bayi tidak dapat dihapus.');
    }
}
