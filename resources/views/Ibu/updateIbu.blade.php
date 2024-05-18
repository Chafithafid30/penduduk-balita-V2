@extends('menu')


@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Tabel Edit Data Ibu</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('menu') }}">Home</a></li>
                                <li class="breadcrumb-item active">Tabel Edit Data Ibu</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Data Ibu</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('/Ibu/ibu/update/' . $ibus->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        {{-- Perubahan Data Nama Ibu --}}
                                        <div class="form-group">
                                            <label for="PerubahanNamaIbu">Nama Ibu</label>
                                            <input type="text" name="nama_ibu" class="form-control" id="PerubahanNamaIbu"
                                                placeholder="Nama Ayah" value="{{ $ibus->nama_ibu }}">
                                        </div>
                                        {{-- Perubahan Data Tanggal Lahir Ibu --}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="PerubahanTanggalLahirIbu">Tanggal Lahir Ibu</label>
                                                    <input type="date" name="tanggal_lahir_ibu" class="form-control"
                                                        id="PerubahanTanggalLahirAyah" placeholder="Tanggal Lahir Ibu"
                                                        value="{{ $ibus->tanggal_lahir_ibu }}">
                                                </div>

                                                {{-- Perubahan Data Pekerjaan Ibu --}}
                                                <div class="col-6">
                                                    <label for="PerubahanPekerjaanIbu">Pekerjaan Ibu</label>
                                                    <input type="text" name="pekerjaan_ibu" class="form-control"
                                                        id="PerubahanPekerjaanIbu" placeholder="Pekerjaan Ibu"
                                                        value="{{ $ibus->pekerjaan_ibu }}">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Perubahan Data Alamat Ibu --}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="PerubahanAlamatIbu">
                                                        Alamat</label>
                                                    <input type="text" name="alamat_ibu" class="form-control"
                                                        id="PerubahanAlamatIbu" placeholder="Alamat Ibu"
                                                        value="{{ $ibus->alamat_ibu }}">
                                                </div>
                                                {{-- Perubahan Data RT Ibu --}}
                                                <div class="col-2">
                                                    <label for="PerubahanRTIbu">
                                                        RT Ibu</label>
                                                    <input type="text" name="RT_ibu" class="form-control"
                                                        id="PerubahanRTIbu" placeholder="RT Ibu"
                                                        value="{{ $ibus->RT_ibu }}">
                                                </div>
                                                {{-- Perubahan Data RW Ibu --}}
                                                <div class="col-2">
                                                    <label for="PerubahanRWIbu">
                                                        RW Ibu</label>
                                                    <input type="text" name="RW_ibu" class="form-control"
                                                        id="PerubahanRWIbu" placeholder="RW Ibu"
                                                        value="{{ $ibus->RW_ibu }}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">

                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
<!-- ./wrapper -->

@section('script')
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    alert("Form successful submitted!");
                }
            });
        });
    </script>
@endsection
