@extends('back.layout.template')


@section('title', 'Tambah Artikel -Admin')

@section('content')
    {{-- content body --}}
    <main class="col-md-12 ms-sm-auto col-lg-20 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Artikel</h1>

        </div>

        <div class="mt-3">
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
        </div>
        <form action="{{ url('artikeladmin') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control"
                            value="{{ old('judul') }}">
                    </div>

                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="katefori_id">Kategori</label>
                        <select name="kategori_id" id="kategori_id" class="form-control">
                            <option value="" hidden>--Pilih Kategori--</option>
                            @foreach ($kategoris as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="myeditor" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="img">Image (max 3MB)</label>
                <input type="file" name="img" id="img" class="form-control">

                <div class="mt-1">
                    <img src="" alt="" class="img-thumnail img-preview" width="180px">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="" hidden>--Pilih Status--</option>
                            <option value="0">Private</option>
                            <option value="1">Publish</option>
                        </select>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="tanggal_publish">Tanggal Publish</label>
                        <input type="date" name="tanggal_publish" id="tanggal_publish" class="form-control">
                    </div>
                </div>
            </div>

            <div class="float-end">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ url('artikeladmin') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
        </div>
    </main>
    {{-- footer --}}
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
            clipboard_handleImages: false
        }
    </script>

    <script>
        //CK Editor
        $(document).ready(function() {
            CKEDITOR.replace('myeditor', options);
        });

        //IMG PREVIEW
        $("#img").change(function() {
            previewImage(this);
        });

        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
