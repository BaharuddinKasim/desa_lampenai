@extends('layout.v_template')
@section('title', 'Add User')

@section('content')
    <a href="/user" class="btn btn-sm btn-warning">Kembali</a>
    <br>
    <br>

    <form action="/user/insert" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div class="row">
                <div class="col-sm-4">

                    <div class="form-group has-feedback">
                        <input name="name" class="form-control" placeholder="Name" autofocus>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        <div class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <input name="email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <div class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <div class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <input name="level_id" class="form-control" placeholder="Level">
                        <div class="form-text">     Level : 1. Kurir | 2. Kepala Desa | 4. Admin</div>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <div class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
