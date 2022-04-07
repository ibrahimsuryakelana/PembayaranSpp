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
        
    <h3>Input Data Spp</h3><br>
    <a class="btn btn-primary mb-4" href="/admin/spp/create">Create</a>
    <table id="table_id" class="table table-hover">
        <thead>
            <tr>
                <td>NO</td>
                <td>Tahun Ajaran</td>
                <td>Nominal</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_spp as $a => $q)
                <tr>
                    <td>{{$a+1}}</td>
                    <td>{{$q->tahun}}</td>
                    <td>Rp.{{$q->nominal}}</td>
                    <td>
                        <a class="btn btn-warning" href="/admin/spp/{{$q->id}}/edit">Edit</a>
                        <a class="btn btn-danger" href="/admin/spp/{{$q->id}}/delete" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
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
