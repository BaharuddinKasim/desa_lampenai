@extends('layout.v_template')
@section('title', 'User')

@section('content')
    <a href="/user/add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah User</a><br>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Rudi</td>
                <td>rudi@gmail.com</td>
                <td>Super Admin</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning fa fa-pencil"></a>
                    <button type="button" class="btn btn-sm btn-danger fa fa-trash" data-toggle="modal" data-target=""></button>
                </td>                   
            </tr>
        </tbody>
    </table>

@endsection
