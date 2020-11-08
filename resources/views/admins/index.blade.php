<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
@extends('admins.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <br>
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
        @foreach ($admins as $admin)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $admin->nohp }}</td>
            <td>{{ $admin->provider }}</td>
            <td>{{ $admin->id_nominal }}</td>
            <td>{{ $admin->status}}</td>
            <td>
                <form action="{{ route('admins.destroy',$admin->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-primary" href="{{ route('admins.edit',$admin->id) }}">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="text-center">
        {!! $admins->links() !!}
    </div>
@endsection
</body>
</html>