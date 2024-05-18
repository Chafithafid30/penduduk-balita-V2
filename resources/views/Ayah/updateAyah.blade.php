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
                            <h1>Halaman Ubah Data Ayah</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('menu') }}">Menu Utama</a></li>
                                <li class="breadcrumb-item active">Halaman Ubah Data Ayah</li>
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
                                    <h3 class="card-title">Ubah Data Ayah</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('/Ayah/ayah/update/' . $ayahs->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        {{-- Perubahan Data Nama Ayah --}}
                                        <div class="form-group">
                                            <label for="PerubahanNamaAyah">Nama Ayah</label>
                                            <input type="text" name="nama_ayah" class="form-control"
                                                id="PerubahanNamaAyah" placeholder="Masukkan Nama Ayah"
                                                value="{{ $ayahs->nama_ayah }}">
                                        </div>
                                        {{-- Perubahan Data Tanggal Lahir Ayah --}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="PerubahanTanggalLahirAyah">Tanggal Lahir Ayah</label>
                                                    <input type="date" name="tanggal_lahir_ayah" class="form-control"
                                                        id="PerubahanTanggalLahirAyah" placeholder="Tanggal Lahir Ayah"
                                                        value="{{ $ayahs->tanggal_lahir_ayah }}">
                                                </div>

                                                {{-- Perubahan Data Pekerjaan Ayah --}}
                                                <div class="col-6">
                                                    <label for="PerubahanPekerjaanAyah">Pekerjaan Ayah</label>
                                                    <input type="text" name="pekerjaan_ayah" class="form-control"
                                                        id="PerubahanPekerjaanAyah" placeholder="Masukkan  Pekerjaan Ayah"
                                                        value="{{ $ayahs->pekerjaan_ayah }}">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Perubahan Data Alamat Ayah --}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="PerubahanAlamatAyah">
                                                        Alamat</label>
                                                    <input type="text" name="alamat_ayah" class="form-control"
                                                        id="PerubahanAlamatAyah" placeholder="Masukkan Alamat Ayah"
                                                        value="{{ $ayahs->alamat_ayah }}">
                                                </div>
                                                {{-- Perubahan Data RT Ayah --}}
                                                <div class="col-2">
                                                    <label for="PerubahanRTAyah">
                                                        RT Ayah</label>
                                                    <input type="text" name="RT_ayah" class="form-control"
                                                        id="PerubahanRTAyah" placeholder="Masukkan RT Ayah"
                                                        value="{{ $ayahs->RT_ayah }}">
                                                </div>
                                                {{-- Perubahan Data RW Ayah --}}
                                                <div class="col-2">
                                                    <label for="PerubahanRWAyah">
                                                        RW Ayah</label>
                                                    <input type="text" name="RW_ayah" class="form-control"
                                                        id="PerubahanRWAyah" placeholder="Masukkan RW Ayah"
                                                        value="{{ $ayahs->RW_ayah }}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Iya Ubah Data!</button>
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
