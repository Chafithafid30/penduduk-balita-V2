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
                            <h1>Tabel Edit Data Anak</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('menu') }}">Home</a></li>
                                <li class="breadcrumb-item active">Tabel Edit Data Anak</li>
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
                                    <h3 class="card-title">Edit Data Anak</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('/Anak/anak/update/' . $anaks->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        {{-- Perubahan Data Nama Anak --}}
                                        <div class="form-group">
                                            <label for="PerubahanNamaAnak">Nama Anak</label>
                                            <input type="text" name="nama_anak" class="form-control"
                                                id="PerubahanNamaAnak" placeholder="Nama Anak"
                                                value="{{ $anaks->nama_anak }}">
                                        </div>
                                        {{-- Perubahan Data Tanggal Lahir Anak --}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="PerubahanTanggalLahirAnak">Tanggal Lahir Anak</label>
                                                    <input type="date" name="tanggal_lahir_anak" class="form-control"
                                                        id="PerubahanTanggalLahirAnak" placeholder="Tanggal Lahir Anak"
                                                        value="{{ $anaks->tanggal_lahir_anak }}">
                                                </div>

                                                {{-- Perubahan Data Jenis Kelamin Anak --}}
                                                <div class="col-6">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <select class="form-control" name="jenis_kelamin">
                                                            <option value="L"
                                                                {{ $anaks->jenis_kelamin == 'L' ? 'selected' : '' }}>L
                                                            </option>
                                                            <option value="P"
                                                                {{ $anaks->jenis_kelamin == 'P' ? 'selected' : '' }}>P
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Perubahan Data Keterangan Anak --}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label>Status Keterangan Anak</label>
                                                    <select class="form-control" name="keterangan_anak">
                                                        <option value="Anak Adopsi"
                                                            {{ $anaks->keterangan_anak == 'Anak Adopsi' ? 'selected' : '' }}>
                                                            Anak Adopsi
                                                        </option>
                                                        <option value="Anak Kandung"
                                                            {{ $anaks->keterangan_anak == 'Anak Kandung' ? 'selected' : '' }}>
                                                            Anak Kandung
                                                        </option>
                                                    </select>

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
