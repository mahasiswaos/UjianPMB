@extends('layout.bootstrapnilai.index')

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
    <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tabel Nilai Calon Mahasiswa Baru</div>

    <div class="table table-bordered">
        <table class="table">
            <tr class="warning">
                <th>ID</th>
                <th>Nama</th>
                <th>Soal</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($nilai as $dtnilai) {
                ?>
                <tr>
                    <td><?php echo $dtnilai['id']; ?></td>
                    <td><?php echo $dtnilai->camaba->nama ?></td>
                    <td><?php echo $dtnilai->soal->bid_study; ?></td>
                    <td><?php echo $dtnilai['nilai']; ?></td>
                    <td><?php echo $dtnilai['ket']; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ URL::to('/nilai/edit/' . $dtnilai->id) }}" class="btn btn-warning">
                                <span class="glyphicon glyphicon-edit"></span>
                                Edit
                            </a>
                            <a href="{{ URL::to('/nilai/delete/' . $dtnilai->id) }}" class="btn btn-danger">
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
