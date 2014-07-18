@extends('layout.bootstrapcamaba.index')

@section('content')

@if (Session::has('message'))
<div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" 
            data-dismiss="alert" aria-hidden="true">
        &times;
    </button>
    {{ Session::get('message') }}
</div>
@endif

<div class="panel panel-danger">
    <!-- Default panel contents -->
    <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tabel Calon Mahasiswa Baru</div>

    <div class="table table-bordered">
        <table class="table">
            <tr class="warning">
                <td>ID</td>
                <td>Nama</td>
                <td>Gender</td>
                <td>Alamat</td>
                <td>Telp.</td>
                <td>Action</td>
            </tr>
            <?php
            foreach ($camaba as $dtcmb) {
                ?>
                <tr>
                    <td><?php echo $dtcmb['id']; ?></td>
                    <td><?php echo $dtcmb['nama']; ?></td>
                    <td><?php echo $dtcmb['gender']; ?></td>
                    <td><?php echo $dtcmb['alamat']; ?></td>
                    <td><?php echo $dtcmb['telp']; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ URL::to('/camaba/edit/' . $dtcmb->id) }}" class="btn btn-warning">
                                <span class="glyphicon glyphicon-edit"></span>
                                Edit
                            </a>
                            <a href="{{ URL::to('/camaba/delete/' . $dtcmb->id) }}" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                                Delete
                            </a>
                        </div> 
                    </td>
                </tr>
                <?php
            }
            ?>
        </table> 
    </div>
</div>
@stop
