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
                                    <img alt="Avatar" class="table-avatar" src="product/{{$products->image}}">
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
                                @for ($i = 0; $i < (int)$products->star; $i++)
                                    <i class="fa fa-star"></i>
                                    @endfor
                                    @if ((float)$products->star-$i==0.5)
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                    @endif
                            </td>
                            <td>
                                <a>
                                    {{$products->review}}
                                </a>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="/product/<?=$products->_id?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
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