@extends('back.layout.template')

@section('title', 'List Kategori -Admin')

@section('content')
    {{-- content body --}}
    <main class="col-md-12 ms-sm-auto col-lg-20 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Kategori</h1>

        </div>

        <div class="mt-3">
            <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#ModalCreate">Tambah</button>
            @if ($errors->any())
                <div class="my-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            @if (session('success'))
                <div class="my-3">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Slug</th>
                    <th>Created at</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <div class="text-center">
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ModalUpdate{{ $item->id }}">edit</button>
                                <button class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#ModalDelete{{ $item->id }}">Hapus</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>

        <!-- Modal tambah -->
        @include('back.kategori.tambah-modal')
        <!-- Modal edit -->
        @include('back.kategori.edit-modal')
        <!-- Modal Hapus -->
        @include('back.kategori.hapus-modal')

    </main>
    {{-- footer --}}
@endsection
