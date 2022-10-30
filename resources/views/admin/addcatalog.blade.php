@extends('admin.components.wrapper')

@section('content')
<section class="content-wrapper" style="padding: 10px;">
    <form method="POST" enctype="multipart/form-data">
        @csrf
        @if (Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{{ Session::get('success') }}</li>
            </ul>
        </div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-danger">
            <ul>
                <li>{{ Session::get('error') }}</li>
            </ul>
        </div>
        @endif
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br />
            @endforeach
        </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <label for="inputName">Judul</label>
                            <input type="text" name="judul" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Deskripsi</label>
                            <input type="hidden" name="deskripsi" value="">
                            <div id="editor" style="min-height: 160px;"></div>

                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Kategori</label>
                            <select name="kategori" class="form-control custom-select" required>
                                <option selected disabled>Select one</option>
                                <option value="Skin Care">Skin Care</option>
                                <option value="Treatment">Treatment</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" required>
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputProjectLeader">Harga</label>
                            <input type="number" name="harga" class="form-control" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Input</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Review</label>
                            <input type="number" name="review" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Bintang</label>
                            <select name="star" class="form-control custom-select" required>
                                <option selected disabled>Select one</option>
                                <option value="1">Bintang 1</option>
                                <option value="1.5">Bintang 1 Setengah</option>
                                <option value="2">Bintang 2</option>
                                <option value="2.5">Bintang 2 Setengah</option>
                                <option value="3">Bintang 3</option>
                                <option value="3.5">Bintang 3 Setengah</option>
                                <option value="4">Bintang 4</option>
                                <option value="4.5">Bintang 4 Setengah</option>
                                <option value="5">Bintang 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedDuration">Url</label>
                            <input type="text" name="url" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedDuration">Ukuran</label>
                            <input type="text" name="ukuran" class="form-control" required>
                            <span>contoh 150 ml/ 150 gram</span>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Project" class="btn btn-success float-right">
            </div>
        </div>
    </form>
</section>
@endsection

@section('css')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection

@section('js')
<script src="{{env('APP_URL')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
$(function() {
    bsCustomFileInput.init();
});
</script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
var quill = new Quill('#editor', {
    theme: 'snow',
    modules: {
        toolbar: [
            [{
                header: [1, 2, 3, 4, 5, 6, false]
            }],
            [{
                font: []
            }],
            ["bold", "italic"],
            ["link", "blockquote", "code-block", "image"],
            [{
                list: "ordered"
            }, {
                list: "bullet"
            }],
            [{
                script: "sub"
            }, {
                script: "super"
            }],
            [{
                color: []
            }, {
                background: []
            }],
        ]
    },
});
quill.on('text-change', function(delta, oldDelta, source) {
    document.querySelector("input[name='deskripsi']").value = quill.root.innerHTML;
});
</script>
@endsection