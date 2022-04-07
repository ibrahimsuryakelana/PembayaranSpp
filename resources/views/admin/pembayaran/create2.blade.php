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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="mb-3">
        <h3>Pembayaran Lebih Dari 1 Bulan</h3>
    </div>
    <div>
        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
        @endif
    </div>
    <form action="/admin/pembayaran/store" method="post">
        @csrf

        <div class="form-group">
            <label for="">Nama Siswa</label>
            <select required class="form-control" name="nisn" id="nisn" onchange="dataSiswa()">
                <option value="">--Silahkan Pilih Siswa</option>
                @foreach ($siswa as $a)
                    <option value="{{$a->nisn}}">{{$a->nama}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Harga Spp & Terakhir dibayar</label>
            <input type="text" readonly id="ket" class="form-control">
        </div>            

        <label for="">Bulan Bayar</label><br>
        <div class="form-check form-check-inline mb-3">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox1" value="januari">
            <label class="form-check-label" for="inlineCheckbox1">Januari</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox2" value="februari">
            <label class="form-check-label" for="inlineCheckbox2">Februari</label>
          </div> 
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox2" value="maret">
            <label class="form-check-label" for="inlineCheckbox2">maret</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox2" value="april">
            <label class="form-check-label" for="inlineCheckbox2">april</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox2" value="mei">
            <label class="form-check-label" for="inlineCheckbox2">mei</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox2" value="juni">
            <label class="form-check-label" for="inlineCheckbox2">juni</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox2" value="juli">
            <label class="form-check-label" for="inlineCheckbox2">juli</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox2" value="agustus">
            <label class="form-check-label" for="inlineCheckbox2">agustus</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox2" value="september">
            <label class="form-check-label" for="inlineCheckbox2">september</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox2" value="oktober">
            <label class="form-check-label" for="inlineCheckbox2">oktober</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox2" value="november">
            <label class="form-check-label" for="inlineCheckbox2">november</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="bulan_bayar" id="inlineCheckbox2" value="desember">
            <label class="form-check-label" for="inlineCheckbox2">desember</label>
          </div>

        {{-- <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            <input type="checkbox" class="btn-check" id="btncheck1" name="bulan_bayar" autocomplete="Januari">
            <label class="btn btn-outline-primary" for="btncheck1">Januari</label>
          
            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="Februari">
            <label class="btn btn-outline-primary" for="btncheck2">Februari</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="Maret">
            <label class="btn btn-outline-primary" for="btncheck3">Maret</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="April">
            <label class="btn btn-outline-primary" for="btncheck3">April</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="Mei">
            <label class="btn btn-outline-primary" for="btncheck3">Mei</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="Juni">
            <label class="btn btn-outline-primary" for="btncheck3">Juni</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="Juli">
            <label class="btn btn-outline-primary" for="btncheck3">Juli</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="Agustus">
            <label class="btn btn-outline-primary" for="btncheck3">Agustus</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="September">
            <label class="btn btn-outline-primary" for="btncheck3">September</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="Oktber">
            <label class="btn btn-outline-primary" for="btncheck3">Oktber</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="November">
            <label class="btn btn-outline-primary" for="btncheck3">November</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="Desember">
            <label class="btn btn-outline-primary" for="btncheck3">Desember</label>
          </div> --}}
        
        <div class="form-group">
            <label for="">Tahun Bayar</label>
            <select required class="form-control" name="tahun_bayar" id="">
                <option value="">--Silahkah Pilh Tahun Bayar--</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="">Jumlah Bayar</label>
            <input class="form-control" type="text" required name="jumlah_bayar" id="ket">
        </div>
     
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="/admin/pembayaran" class="btn btn-second">Cancel</a>
    </form>
</body>

<script>
    $(document).ready(function(){
    $('#nisn').select2();
    });
</script>

<script>
    function dataSiswa(){
         var nisn = $('#nisn').val();
         // alert(nisn);'get-data/{nisn}'
         $.ajax({
             url:"{{url('get-data/')}}"+ '/' + nisn,
             type:'GET',
             success: function(data){
                 console.log(data);
                 $('#ket').val("Rp." + data['siswa']['nominal'] +  " " + data['siswa']['bulan_bayar']+'/'+data['siswa']['tahun_bayar']);
             }                    
         });
     }
</script>


</html>