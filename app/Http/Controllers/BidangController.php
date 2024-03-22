<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return back();
    }
}