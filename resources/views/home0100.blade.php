@extends('layout0100')
@section('judul','home')
@section('isi')

<div class="container">
    <h1>Tugas Kegiatan 4</h1>
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID kamar</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Jabatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{$data->kamar_id}}</td>
                <td>{{$data->pasien_nama}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->dokter_nama}}</td>
                <td>{{$data->jabatan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{url('/home')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Export File:</label>
            <input class="form-control" type="file" id="formFile" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection