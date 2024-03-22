<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\tempat_pkl;

class TempatPklController extends Controller
{
    public function tambah(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $tempat_pkl = tempat_pkl::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
        ]);
        return back()->with(['success' => 'berhasil menambahkan tempat pkl']);
    }

}
