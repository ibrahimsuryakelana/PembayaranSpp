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
    <h3>Input Petugas</h3>
    <form action="/admin/user/store" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama Petugas</label>
            <input class="form-control" type="text" name="name" required id="">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email" required id="">
        </div>

        <div class="form-group">
            <label for="">Role</label>
            <select class="form-control" name="role" id="">
                <option value="">Silahkan Pilih Role</option>
                <option value="ADMIN">Admin</option>
                <option value="PETUGAS">Petugas</option>
                <option value="SISWA">Siswa</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">password</label>
            <input class="form-control" type="password" name="password" required id="">
        </div>
     
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="/admin/user" class="btn btn-second">Cancel</a>
    </form>
</body>
</html>