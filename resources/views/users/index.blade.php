<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
@include('navbar')
@extends('users.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <br>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('users.create') }}">Tambah Transaksi</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nohp</th>
            <th>Provider</th>
            <th>Nominal</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->nohp }}</td>
            <td>{{ $user->provider }}</td>
            <td>{{ $user->id_nominal }}</td>
            <td>{{ $user->status }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Cetak Struk</a>
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="text-center">
        {!! $users->links() !!}
    </div>
@endsection
</body>
</html>