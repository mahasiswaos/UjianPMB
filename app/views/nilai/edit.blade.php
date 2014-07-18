@extends('layout.bootstrapcamaba.index')

@section('content')
<div class="col-sm-15">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add Camaba</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to('/nilai/proses_edit/'.$nilai->id); ?>" method="post">
                <input type="hidden" name="id" value="<?php $nilai->id ?>"/>
                <p style="color: red"> {{ $errors->first('camaba_id') }} </p>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Camaba</label>
                    <div class="col-sm-4">
                        <select name="camaba_id" class="form-control">
                            <option value="{{$nilai->camaba_id}}">{{$nilai->camaba->nama}}</option>
                            <?php foreach ($camaba as $fkey) { ?>
                                <option value="<?php echo $fkey->id ?>"><?php echo $fkey->nama ?></option>
                            <?php } ?>
                        </select> 
                        <p style="color: red"> {{ $errors->first('canaba_id') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Soal</label>
                    <div class="col-sm-4">
                        <select name="soal_id" class="form-control">
                            <option value="{{$nilai->soal_id}}">{{$nilai->soal->bid_study}}</option>
                            <?php foreach ($soal as $fkeys) { ?>
                                <option value="<?php echo $fkeys->id ?>"><?php echo $fkeys->bid_study ?></option>
                            <?php } ?>
                        </select> 
                        <p style="color: red"> {{ $errors->first('soal_id') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nilai</label>
                    <div class="col-sm-5">
                        <input type="text" name="nilai" class="form-control" placeholder="nilai" value="<?php echo $nilai->nilai;?>">
                        <p style="color: red"> {{ $errors->first('nilai') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10" class="btn-group">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Save</button>
                        <a href="{{ URL::to('/nilai/view/')}}" class="btn btn-warning">
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