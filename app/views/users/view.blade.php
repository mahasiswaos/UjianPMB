@extends('layout.bootstrapadmin.index')

@section('content')
@if (Session::has('message'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif
<div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tabel Users</div>

    <!-- Table -->
    <div class="">
        <table class="table table-bordered">
            <tr class="panel-default">
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Level</th>
                <th style="text-align: center">Action</th>
            </tr>
            <?php
            $i = 1;
            foreach ($users as $value) {
                ?>
                <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['username']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['level']; ?></td>
                    <td style="text-align: center;">
                        <?php
                        if (Auth::check()) {
                            $user = Auth::user();
                            if ($user->username == $value['username']) {
                                ?>
                                <a class="btn btn-small btn-primary" title="Update" href="{{ URL::to('/users/edit/' . $value->id) }}"><span class=" glyphicon glyphicon-edit"></span> </a>
        <?php } else { ?>
                                <div class="btn btn-group">
                                    <a class="btn btn-small btn-danger" title="Delete" href="{{ URL::to('/users/delete/' . $value->id) }}"><span class="glyphicon glyphicon-trash"></span> </a>
                                    <a class="btn btn-small btn-primary" title="Update" href="{{ URL::to('/users/edit/' . $value->id) }}"><span class=" glyphicon glyphicon-edit"></span> </a>
                                </div>
                            <?php
                            }
                        }
                        ?>

                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
        
        <div style="text-align: center">
            <?php echo $users->links(); ?>
        </div>
    </div>
</div>
@stop