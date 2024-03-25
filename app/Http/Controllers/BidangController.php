<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\bidang;

class BidangController extends Controller
{
    public function tambahBidang(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_bidang' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $bidang = bidang::create([
            'nama_bidang' => $request->nama_bidang,
        ]);
        return back()->with(['success' => 'berhasil menambahkan bidang']);

    }
}
