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
    <h3>Edit Spp</h3>
    <form action="/admin/spp/{{$spp->id}}/update" method="post">
        @csrf
        <div class="form-group">
            <label for="">Tahun Ajaran</label>
            <input class="form-control" required type="number" name="tahun" id="" value="{{$spp->tahun}}">
        </div>

        <div class="form-group">
            <label for="">Nominal</label>
            <input class="form-control" required type="number" name="nominal" id="" value="{{$spp->nominal}}">
        </div>
     
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="/admin/spp" class="btn btn-second">Cancel</a>
    </form>
</body>
</html>