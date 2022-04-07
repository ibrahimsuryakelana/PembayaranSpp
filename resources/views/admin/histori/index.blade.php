@extends('layouts.app')

@section('title')
    Dashboard 
@endsection

@section('content') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css2.css')}}">

    <script src="{{asset('assets/jquery-3.6.0.slim.min.js')}}"></script>
    <script src="{{asset('assets/popper.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
    <script src="{{asset('assets/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/jquery.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('assets/jquery.dataTables.css')}}">
    <script src="{{asset('assets/jquery-3.6.0.slim.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('assets/select2.min.css')}}">
    <script src="{{asset('assets/select2.min.js')}}"></script>

    <title>Document</title>
</head>
<body>
        <div>
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                </div>
            @endif
        </div>
        <div>
            @if(session('sucsess'))
                <div class="alert alert-success" role="alert">
                    {{session('sucsess')}}
                </div>
            @endif
        </div>
        <div>
            @if(session('sucsesss'))
                <div class="alert alert-danger" role="alert">
                    {{session('sucsesss')}}
                </div>
            @endif
        </div>

    <h3>Histori Pembayaran</h3><br>

    <table id="table_id" class="table table-hover">
        <thead>
            <tr>
                <td>NO</td>
                <td>Nama Petugas</td>
                <td>Nisn</td>
                <td>Nama Siswa</td>
                <td>Tanggal Bayar</td>
                <td>Bulan Bayar</td>
                <td>Tahun Bayar</td>
                <td>Tahun Ajaran</td>
                <td>Jumlah Bayar</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_histori as $a => $q)
                <tr>
                    <td>{{$a+1}}</td>
                    <td>{{$q->name}}</td>
                    <td>{{$q->nisn}}</td>
                    <td>{{$q->nama}}</td>
                    <td>{{$q->tgl_bayar}}</td>
                    <td>{{$q->bulan_bayar}}</td>
                    <td>{{$q->tahun_bayar}}</td>
                    <td>{{$q->tahun}}</td>
                    <td>Rp.{{$q->jumlah_bayar}}</td>
                    <td>
                        <a class="btn btn-primary" href="/admin/histori/{{$q->id}}/struk" >Cetak Struk</a>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</body>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

</html>
@endsection
