@extends('Admin.layout.main')
@section('container')

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            @include('Admin.layout.components.sidebar')
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    @include('Admin.layout.components.topbar')
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
                        </div>

                        <div class="col-lg-3">
                            <form action="{{ route('product-kami.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="jenis_barang" class="form-label">Jenis Barang</label>
                                    <input type="text" class="form-control" id="jenis_barang" name="jenis_barang"
                                        placeholder="Isi disini" required autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                        placeholder="Isi disini" required>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price" name="price"
                                        placeholder="Isi disini" required>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>
                                <button class="btn btn-primary btn-sm" type="submit"> Create Jenis Produck</button>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->

                @include('Admin.layout.components.footer')

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    @endsection
