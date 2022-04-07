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
    <h3>Edit Siswa</h3>
    <form action="/admin/siswa/{{$siswa->nisn}}/update" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nisn</label>
            <input class="form-control" type="number" required name="nisn" id="" value="{{$siswa->nisn}}">
        </div>

        <div class="form-group">
            <label for="">Nis</label>
            <input class="form-control" type="number" required name="nis" id="" value="{{$siswa->nis}}">
        </div>
        
        <div class="form-group">
            <label for="">Nama Siswa</label>
            <input class="form-control" type="text" required name="nama" id="" value="{{$siswa->nama}}">
        </div>
        
        <div class="form-group">
            <label for="">Nama Kelas</label>
            <select class="form-control" name="id_kelas" id="">
                @foreach ($kelas as $a)
                    <option @if ($siswa->id_kelas == $a->id)
                        selected
                        @endif
                        value="{{$a->id}}">{{$a->nama_kelas}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="">Alamat</label>
            <input class="form-control" type="text" required name="alamat" id="" value="{{$siswa->alamat}}">
        </div>
        
        <div class="form-group">
            <label for="">No Telepon</label>
            <input class="form-control" type="number" required name="no_telp" id="" value="{{$siswa->no_telp}}">
        </div>

        <div class="form-group">
            <label for="">Tahun Ajaran</label>
            <select class="form-control" name="id_spp" id="">
                @foreach ($spp as $a)
                    <option
                    @if ($siswa->id_spp == $a->id)
                    selected
                    @endif
                    value="{{$a->id}}">{{$a->tahun}}</option>
                @endforeach
            </select>
        </div>
        
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="/admin/siswa" class="btn btn-second">Cancel</a>
    </form>
</body>
</html>