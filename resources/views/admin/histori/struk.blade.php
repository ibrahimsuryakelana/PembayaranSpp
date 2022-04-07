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
    <div class="card" align="center">
        <div class="card-header">
          Struk Pembayaran Siswa {{$histori->nama}}
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <td>Nisn </td>
                    <td>:</td>
                    <td>{{$histori->nisn}}</td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td>{{$histori->nama}}</td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td>:</td>
                    <td>{{$histori->alamat}}</td>
                </tr>
                <tr>
                    <td>Nama Petugas </td>
                    <td>:</td>
                    <td>{{$histori->name}}</td>
                </tr>
                <tr>
                    <td>Bulan Bayar</td>
                    <td>:</td>
                    <td>{{$histori->bulan_bayar}}</td>
                </tr>
                <tr>
                    <td>Tahun Bayar</td>
                    <td>:</td>
                    <td>{{$histori->tahun_bayar}}</td>
                </tr>
                <tr>
                    <td>Jumlah Bayar</td>
                    <td>:</td>
                    <td>Rp.{{$histori->jumlah_bayar}}</td>
                </tr>
                <tr>
                    <td>
                        <a onclick="window.print()" class="btn btn-primary">Cetak</a>
                        <a href="/admin/histori" class="btn btn-second">Back</a>
                    </td>
                </tr>
            </table>
        </div>
      </div>
</body>
</html>