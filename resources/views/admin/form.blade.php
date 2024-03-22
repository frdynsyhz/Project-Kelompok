@extends('admin.layouts.app')
@section('title', 'Perusahaan mart')

@section('content')

    <h2 class="title">Tambah Bidang</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Bidang</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_bidang"
            placeholder="nama_bidang">
        </div>

        <button type="button" class="btn btn-info">tambah</button>
    </form>
<br>
<br>
    <h2 class="title">Tambah Tempat PKL</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Bidang</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_bidang"
            placeholder="nama_bidang">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_perusahaan"
            placeholder="nama_bidang">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat"
            placeholder="alamat">
        </div>

        <button type="button" class="btn btn-info">tambah</button>
    </form>


@endsection
