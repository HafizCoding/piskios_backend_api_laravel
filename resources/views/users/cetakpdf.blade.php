@extends('users.layout')
</html>
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail User
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                <center>PisKios<br>
                **namatoko**<br>
                tanggalTransaksi<br>
                <br>
                Struk Pembelian Pulsa Isi ulang
                -----------------------------------------</center>
                <li class="list-group-item"><b>nohp: </b>{{$user->nohp}}</li>
                <center>-----------------------------------------<br>
                Terima Kasih<br>Telah Berbelanja, Ditunggu<br> Transaksi Berikutnya</center>
                </ul>
            </div>
            
            <a class="btn btn-success mt-3" href="{{ route('users.index') }}">Kembali</a>
            
        </div>
    </div>
</div>