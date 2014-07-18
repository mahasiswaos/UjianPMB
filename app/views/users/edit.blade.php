@extends('layout.bootstrapadmin.index')

@section('content')
<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-edit"></i> 
            Form Update Users
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/users/update/". $isi->id); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-4">
                        <input type="text" name="username" value="<?php echo $isi->username ?>" class="form-control ">
                        <p style="color: red"> {{ $errors->first('username') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-4">
                        <input type="text" name="password" value="<?php echo Crypt::decrypt($isi->password) ?>" class="form-control">
                        <p style="color: red"> {{ $errors->first('password') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="email" name="email" value="<?php echo $isi->email ?>" class="form-control">
                        <p style="color: red"> {{ $errors->first('email') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop