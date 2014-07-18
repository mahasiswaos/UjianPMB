@extends('layout.bootstrapcamaba.index')

@section('content')
<div class="col-sm-15">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add Soal</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/soal/proses_add"); ?>" method="post">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Bidang Study</label>
                    <div class="col-sm-4">
                        <input type="text" name="bid_study" class="form-control " placeholder="nama"> 
                        <p style="color: red"> {{ $errors->first('bid_study') }} </p>
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10" class="btn-group">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Save</button>
                        <a href="{{ URL::to('/soal/view/')}}" class="btn btn-warning">
                            <span class="glyphicon glyphicon-refresh"></span>
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop