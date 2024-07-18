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

                    </div>
                    <div class="px-5">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session()->has('failed'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('failed') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('product.create') }}" class="btn btn-primary btn-md mb-4">Create
                                    Product</a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Jenis Barang</th>
                                            <th class="col-4">Deskripsi</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $item)
                                            <tr>
                                                <td><img src="{{ asset('Storage/' . $item->image) }}"
                                                        style="width: 80px; height: 80px;" alt=""></td>
                                                <td>{{ $item->nama_barang }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>Rp. {{ $item->price }}</td>
                                                <td>

                                                    {{-- ini button edit --}}
                                                    <a href="{{ route('product.edit', $item->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>

                                                    {{-- ini button delete --}}
                                                    <form action="{{ route('product.destroy', $item->id) }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>{{ $products->links() }}</div>
                            </div>
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
