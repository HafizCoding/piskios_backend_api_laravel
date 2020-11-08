@extends('users.layout')
  
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            
            <div class="card-body">
                <ul class="list-group list-group-flush">
                <center>PisKios<br>
                **namatoko**<br>
                tanggalTransaksi<br>
                <br>
                Struk Pembelian Pulsa Isi ulang
                -----------------------------------------</center>
                  <center>  <b>Nomer Handphone:</b> {{$user->nohp}}</center>
                  <center>  <b>Provider:</b> {{$user->provider}}</center>
                  <center>  <b>Nominal:</b> {{$user->id_nominal}}</center>
                <center>-----------------------------------------<br>
                Terima Kasih<br>Telah Berbelanja, Ditunggu<br> Transaksi Berikutnya</center>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
