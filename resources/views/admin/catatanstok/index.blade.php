@extends('layouts.backend')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Data</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/libs/simple-datatables/style.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body data-menu-color="light" data-sidebar="default"

        <!-- Begin page -->
        <div id="app-layout">
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                     <!-- Start Content-->
                    <div class="container-fluid">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Table /</span> Catatan Stok</h4>
                 <div class="row">
                            <div class="col-md-12">
                                <div class="card overflow-hidden mb-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h5 class="card-title text-black mb-0">Catatan Stok</h5>
                                        <div class="d-flex ms-auto">
                                        <a href="{{route('catatanstok.create')}}" class="btn btn-primary me-2">+ Tambah Data</a>
                                        <a href="{{route('catatanstok.create')}}" class="btn btn-secondary ">
                                            <i class="mdi mdi-check-circle fs-14 text-light"></i> Cetak</a>
                                    </div>
                                </div>
                                  <div class="card-body mt-0">
                                        <div class="table-responsive table-card mt-0">
                                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-primary">
                                                <tr>
                                                    <th scope="col" class="cursor-pointer">No</th>
                                                    <th scope="col" class="cursor-pointer">Nama Barang</th>
                                                    <th scope="col" class="cursor-pointer">Jenis</th>
                                                    <th scope="col" class="cursor-pointer">Jumlah</th>
                                                    <th scope="col" class="cursor-pointer">Tanggal</th>
                                                    <th scope="col" class="cursor-pointer">Keterangan</th>
                                                    <th scope="col" class="cursor-pointer">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($catatanStok as $data)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $data->barang->nama_barang }}</td>
                                                    <td>{{ $data->jenis }}</td>
                                                    <td>{{ $data->jumlah }}</td>
                                                    <td>{{ $data->tanggal }}</td>
                                                    <td>{{ $data->keterangan }}</td>
                                                    <td>
                                                        <a href="{{ route('catatanstok.edit', $data->id) }}" aria-label="anchor" class="btn btn-sm bg-primary-subtle me-1" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                         <i class="mdi mdi-pencil-outline fs-14 text-primary"></i>
                                                        </a>
                                                        <form action="{{ route('catatanstok.destroy', $data->id) }}" method="POST"
                                                            style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"  aria-label="anchor" class="btn btn-sm bg-danger-subtle" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                <i class="mdi mdi-delete fs-14 text-danger"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                @include('layouts.backend.footer')

            </div>
        </div>
        <!-- END wrapper -->

        <!-- Vendor -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <!-- Simple Datatables JS -->
        <script src="assets/libs/simple-datatables/umd/simple-datatables.js"></script>

        <!-- Simple Datatables Init JS -->
        <script src="assets/js/pages/simple-datatables.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.js"></script>

    </body>
</html>
@endsection
