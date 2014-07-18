@extends('layout.bootstrapsoal.index')

@section('content')

@if (Session::has('message'))
<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  {{ Session::get('message') }}
</div>
@endif

<div class="panel panel-danger">
    <!-- Default panel contents -->
    <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tabel Soal</div>

    <div class="table table-hover">
        <table class="table">
            <thead class="warning">
                <th>ID</th>
                <th>Bidang Study</th>               
                <th>Action</th>
            </thead>
            <?php
            foreach ($soal as $dtsoal) {
                ?>
                <tr>
                    <td><?php echo $dtsoal['id']; ?></td>
                    <td><?php echo $dtsoal['bid_study']; ?></td>                 
                    <td>
                        <div class="btn-group">
                            <a href="{{ URL::to('/soal/edit/' . $dtsoal->id) }}" class="btn btn-warning">
                                <span class="glyphicon glyphicon-edit"></span>
                                Edit
                            </a>
                            <a href="{{ URL::to('/soal/delete/' . $dtsoal->id) }}" class="btn btn-danger">
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
<?php //echo $data->links;?>
@stop

