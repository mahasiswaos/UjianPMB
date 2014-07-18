@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add Users</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/users/proses_add"); ?>" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-4">
                        <input type="text" name="username" class="form-control " placeholder="Username">
                        <p style="color: red"> {{ $errors->first('username') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-4">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <p style="color: red"> {{ $errors->first('password') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <p style="color: red"> {{ $errors->first('email') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Level</label>
                    <div class="col-sm-5">
                        <select name="level" class="form-control">
                            <option value="admin">Administrator</option>
                            <option value="user">User</option>
                        </select>
                        <p style="color: red"> {{ $errors->first('level') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop