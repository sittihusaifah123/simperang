@extends('layouts.master')

@section('title')
    <title>User - Dashboard</title>
@endsection

@section('css')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DATA USER
            </h2>
        </div>

        <div class="row clearfix">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header bg-info"></div>
                        <div class="body">
                            <form action="" >
                                <div class="form-group">
                                    <label for="">Nama User</label>
                                    <div class="form-line">
                                        <input type="text" id="" class="form-control" placeholder="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">E-Mail</label>
                                    <div class="form-line">
                                        <input type="email" id="" class="form-control" placeholder="email@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <div class="form-line">
                                        <input type="password" id="" class="form-control" placeholder="*******">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Pilih Role</label>
                                    <div class="demo-radio-button">
                                        <input name="group5" type="radio" id="radio_30" class="with-gap radio-col-red" checked />
                                        <label for="radio_30">Admin</label>
                                        <input name="group5" type="radio" id="radio_31" class="with-gap radio-col-pink" />
                                        <label for="radio_31">Pimpinan</label>
                                        
                                        <input name="group5" type="radio" id="radio_32" class="with-gap radio-col-purple" />
                                        <label for="radio_32">Keuangan</label>
                                        <input name="group5" type="radio" id="radio_33" class="with-gap radio-col-deep-purple" />
                                        <label for="radio_33">User</label>
                                    </div>
                                </div>
                                <div class="form-line">
                                    <input type="submit" id="" value="Tambah User" class="btn btn-info" style="width: 100%">
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="header bg-info">
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table" id="users-table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>             
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button class="btn btn-warning btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection