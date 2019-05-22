@extends('layouts.master')

@section('title')
    <title>Buat Pengajuan - Dashboard</title>
@endsection

@section('css')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

@endsection

@section('content')
    <div class="container-fluid">
        <form action="">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-info">
                            <h2>
                                PENGAJUAN
                                <small>input data pengajuan descripsi pada form berikut</small>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="titile" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="description" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 style="padding-left: 10px; color: black">Detail Pengajuan</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Barang</th>
                                        <th>Jenis</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
                                        <th class="text-center"><a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-plus addRow"></i></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="baris">
                                        <td><input type="text" class="form-control barang" name="barang[]"></td>
                                        <td><input type="text" class="form-control jensi" name="jenis[]"></td>
                                        <td><input type="text" class="form-control harga" name="harga[]"></td>
                                        <td><input type="text" class="form-control jumlah" name="jumlah[]"></td>
                                        <td><input type="text" class="form-control total" name="total[]" readonly></td>
                                        <td><a href="#" class="btn btn-danger btn-xs remove"><i class="glyphicon glyphicon-remove"></i></a></td>
                                    </tr>  
                                </tbody>
                                
                                {{-- <tr id="baris1">
                                        <td><input type="text" class="form-control" name="barang[]"></td>
                                        <td><input type="text" class="form-control" name="jenis[]"></td>
                                        <td><input type="text" class="form-control" name="harga[]"></td>
                                        <td><input type="text" class="form-control" name="jumlah[]"></td>
                                        <td><input type="text" class="form-control" name="total[]" readonly></td>
                                        <td><a href="#" id="removeRaw" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a></td>
                                </tr> --}}
                                <thead>
                                    <tr>
                                        <th colspan="3"></th>
                                        <th class="text-right" style="font-size: 18px">
                                            SUBTOTAL
                                        </th>
                                        <th colspan="2">
                                                <input type="text" name="subtotal" class="form-control" readonly>
                                        </th>
                                    </tr>
                                </thead>
                                
                            </table>
                            <div>
                                <button class="btn btn-success btn-lg" style="width: 100%">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    
    {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> --}}
    {{-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
    {{-- <script src="{{ asset('assets/plugins/boostrap/js/bootstrap.min.js') }}"></script> --}}
    {{-- <script type="text/javascript">
        var room = 1;
        function add_form() {
            room++;
            var objTo   = document.getElementById('add_form');
            var divtest = document.createElement('div');

            divtest.setAttribute("class", "form-group removeClass" +room);
            var rdiv    = 'removeClass'+room;
            divtest.innerHTML = '<div class="row">' +
                                '<div class="col-md-4">' +
                                    '<div class="form-group">' +
                                        '<label for="">Nama Barang</label>' +
                                        '<div class="form-line">' +
                                            '<input name="nama_barang[]" type="text" class="form-control" placeholder="barang" />' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="col-md-4">' +
                                    '<div class="form-group">' +
                                        '<label for="">Jenis Satuan</label>' +
                                        '<div class="form-line">' +
                                            '<input name="jenis_satuan[]" type="text" class="form-control" placeholder="jenis satuan" />' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="col-md-4">' +
                                    '<div class="form-group">' +
                                        '<label for="">Keterangan</label>' +
                                        '<div class="form-line">' +
                                            '<input name="keterangan[]" type="text" class="form-control" placeholder="keterangan" />' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="col-md-4">' +
                                    '<div class="form-group">' +
                                        '<label for="">Harga Satuan</label>' +
                                        '<div class="form-line">' +
                                            '<input name="harga_satuan[]" type="text" class="form-control" placeholder="harga satuan" />' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="col-md-4">' +
                                    '<div class="form-group">' +
                                        '<label for="">Jumlah</label>' +
                                        '<div class="form-line">' +
                                            '<input name="jumlah[]" type="text" class="form-control" placeholder="jumlah" />' +
                                        '</div>' +
                                   '</div>' +
                                '</div>' +
                                '<div class="col-md-4">' +
                                    '<div class="form-group">' +
                                        '<label for="">Total</label>' +
                                        '<div class="form-line">' +
                                            '<input name="total[]" type="text" class="form-control" placeholder="total harga" />' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="text-right">' +
                                '<button class="btn btn-warning btn-lg" onclick="delete_form('+ room +');">Tambah</button>' +
                            '</div>';

            objTo.appendChild(divtest);
        }

        // function delete_form(rid) {
        //     $.('.removeClass' + rid).remove();
        // }
    </script> --}}

    <script type="text/javascript">
    
        $(document).ready(function () {
            $(".addRow").on("click",function() {
                addRow();
            });
            function addRow()
            {
                var tr = '<tr class="baris">' +
                                '<td><input type="text" class="form-control barang" name="barang[]"></td>' +
                                '<td><input type="text" class="form-control jensi" name="jenis[]"></td>' +
                                '<td><input type="text" class="form-control harga" name="harga[]"></td>' +
                                '<td><input type="text" class="form-control jumlah" name="jumlah[]"></td>' +
                                '<td><input type="text" class="form-control total" name="total[]" readonly></td>' +
                                '<td><a href="#" class="btn btn-danger btn-xs remove"><i class="glyphicon glyphicon-remove"></i></a></td>' +
                            '</tr>';
                $('tbody').append(tr);
            };
            $('.remove').on('click', function() {
                $(this).parent().parent().remove(tr)
            });
        });
    </script>
@endsection