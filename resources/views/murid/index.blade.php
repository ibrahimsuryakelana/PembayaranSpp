@extends('layouts.login')

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
    <div class="card mb-5" align="center">
        
        <div class="card-header">
          Pembayaran Terbaru Siswa
        </div>

        <div class="card-body">
            <table>
                <tr>
                    <td>Nisn </td>
                    <td>:</td>
                    <td>{{$a->nisn}}</td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td>{{$a->nama}}</td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td>:</td>
                    <td>{{$a->alamat}}</td>
                </tr>
                <tr>
                    <td>Nama Petugas </td>
                    <td>:</td>
                    <td>{{$a->name}}</td>
                </tr>
                <tr>
                    <td>Bulan Bayar</td>
                    <td>:</td>
                    <td>{{$a->bulan_bayar}}</td>
                </tr>
                <tr>
                    <td>Tahun Bayar</td>
                    <td>:</td>
                    <td>{{$a->tahun_bayar}}</td>
                </tr>
                <tr>
                    <td>Jumlah Bayar</td>
                    <td>:</td>
                    <td>Rp.{{$a->jumlah_bayar}}</td>
                </tr>
            </table>
        </div>
    </div>

    <h5>Seluruh Pembayaran Siswa</h5>
    
    <table class="table table-hover " id="table_id">
        <thead>
            <tr>
                <td>No</td>
                <td>NISN</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Nama Petugas</td>
                <td>Bulan Bayar</td>
                <td>Tahun Bayar</td>
                <td>Jumlah Bayar</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $a => $p)
                <tr>
                    <td>{{$a+1}}</td>
                    <td>{{$p->nisn}}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->bulan_bayar}}</td>
                    <td>{{$p->tahun_bayar}}</td>
                    <td>{{$p->jumlah_bayar}}</td>
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
