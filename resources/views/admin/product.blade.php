@extends('admin.components.wrapper')

@section('content')
<?php
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka);
	return $hasil_rupiah;
 
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
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
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Product</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th>
                                Judul
                            </th>
                            <th>
                                Deskripsi
                            </th>
                            <th>
                                Harga
                            </th>
                            <th>
                                Star
                            </th>
                            <th>
                                Review
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $products)
                        <tr>
                            <td>
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar"
                                        src="{{env('APP_URL')}}/product/{{$products->image}}">
                                </li>
                            </td>
                            <td>
                                <a>
                                    {{$products->judul}}
                                </a>

                            </td>
                            <td>
                                <a>
                                    <?=$products->deskripsi?>
                                </a>
                            </td>
                            <td>
                                <a>
                                    {{rupiah($products->harga)}}
                                </a>
                            </td>
                            <td>
                                {{$products->star}}
                            </td>
                            <td>
                                <a>
                                    {{$products->review}}
                                </a>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="/catalog/<?=$products->url?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="product/edit/<?=$products->id?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#modal-default-<?=$products->id?>">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="modal-default-<?=$products->id?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="<?=$products->id?>">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Hapus <?=$products->judul?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="card-body">
                                                <p>Apakah Ada yakin ingin menghapus data <?=$products->judul?></p>

                                            </div>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                            <input type="submit" value="Hapus" class="btn btn-danger float-right">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.content -->
                            </div>
                        </div>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection