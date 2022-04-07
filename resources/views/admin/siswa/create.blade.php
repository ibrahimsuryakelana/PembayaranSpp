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
    <h3>Input Siswa</h3>
    <form action="/admin/siswa/store" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nisn</label>
            <input class="form-control" type="number" required name="nisn" id="">
        </div>

        <div class="form-group">
            <label for="">Nis</label>
            <input class="form-control" type="number" required name="nis" id="">
        </div>
        
        <div class="form-group">
            <label for="">Nama Siswa</label>
            <input class="form-control" type="text" required name="nama" id="">
        </div>
        
        
        <div class="form-group">
            <label for="">Nama Kelas</label>
            <select required class="form-control" name="id_kelas" id="">
                <option  value="">--Silahkan Pilih Kelas</option>
                @foreach ($kelas as $a)
                    <option value="{{$a->id}}">{{$a->nama_kelas}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="">Alamat</label>
            <input class="form-control" type="text" required name="alamat" id="">
        </div>
        
        <div class="form-group">
            <label for="">No Telepon</label>
            <input class="form-control" type="number" required name="no_telp" id="">
        </div>

        <div class="form-group">
            <label for="">Tahun Ajaran</label>
            <select required class="form-control" required name="id_spp" id="">
                <option value="">--Silahkan Pilih Tahun Ajaran</option>
                @foreach ($spp as $a)
                <option value="{{$a->id}}">{{$a->tahun}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
        <a class="btn btn-second" href="/admin/siswa">Cancel</a>
    </form>
</body>
</html>