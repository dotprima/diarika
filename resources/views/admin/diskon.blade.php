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
                    <h1>Diskon</h1>
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
                                Kategori
                            </th>
                            <th>
                                Harga
                            </th>
                            <th>
                                Diskon
                            </th>
                            <th>
                                Review
                            </th>

                            <th style="width: 15%;text-align:center">
                                Action
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
                                    <?=$products->kategori?>
                                </a>
                            </td>
                            <td>
                                <a>
                                    {{rupiah($products->harga)}}
                                </a>
                            </td>
                            <td>
                                <?php
                                    if(isset($products->diskon)){
                                        echo '<span class="badge bg-success">'.rupiah($products->diskon).'</span>';
                                    }else{
                                        echo '<span class="badge bg-danger">NULL</span>';
                                    }
                                ?>
                            </td>
                            <td>
                                <a>
                                    <?php
                                    if(isset($products->status)){
                                        echo '<span class="badge bg-success">'.$products->status.'</span>';
                                    }else{
                                        echo '<span class="badge bg-danger">NULL</span>';
                                    }
                                    ?>
                                </a>
                            </td>
                            <td class="project-actions text-center">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modal-default-<?=$products->_id?>">
                                    Status
                                </button>
                                <a class="btn btn-primary btn-sm" href="/catalog/<?=$products->url?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                            </td>
                        </tr>
                        <div class="modal fade" id="modal-default-<?=$products->_id?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST">
                                        @csrf
                                        <input type="hidden" name="_id" value="<?=$products->_id?>">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Status <?=$products->judul?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Harga lama</label>
                                                    <input type="number" class="form-control" name="diskon"
                                                        value="<?=$products->diskon?>" required>
                                                        <span>masukan 0 jika ingin menghapus</span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputStatus">Kategori</label>
                                                    <select name="status" class="form-control custom-select" required>
                                                        <option selected disabled>Select one</option>
                                                        <option
                                                            <?php if(!empty($products->status)){ echo $products->status == 'NEW' ? 'selected':''; } ?>
                                                            value="NEW">New</option>
                                                        <option
                                                            <?php if(!empty($products->status)){ echo $products->status == 'HOT' ? 'selected':''; } ?>
                                                            value="HOT">HOT</option>
                                                        <option <?php if(!isset($products->status)){ echo 'selected';}?>
                                                            value="">None</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                            <input type="submit" value="Create new Project"
                                                class="btn btn-success float-right">
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
</div>

@endsection