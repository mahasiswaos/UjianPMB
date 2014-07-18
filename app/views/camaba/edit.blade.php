@extends('layout.bootstrapcamaba.index')

@section('content')
<div class="col-sm-15">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Edit Camaba</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/camaba/proses_edit/".$isi->id); ?>" method="post">
                <input type="hidden" name="id" value="{{ $isi->id }}"/>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control " placeholder="nama" value="<?php echo $isi->nama?>"> 
                        <p style="color: red"> {{ $errors->first('nama') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="gender">
                            <option value="" disabled="" selected="">Pilih Gender...!</option>
                            <option value="L" <?php if ($isi->gender=="L"){?>selected=""<?php } ?>>L</option>
                            <option value="P" <?php if ($isi->gender=="P"){?>selected=""<?php } ?>>P</option>
                        </select>
                        <p style="color: red"> {{ $errors->first('gender') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-5">
                        <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $isi->alamat?></textarea>                      
                        <p style="color: red"> {{ $errors->first('alamat') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">No.Telp</label>
                    <div class="col-sm-5">
                        <input type="text" name="telp" class="form-control" placeholder="No. Telp" value="<?php echo $isi->telp?>">
                        <p style="color: red"> {{ $errors->first('telp') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10" class="btn-group">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Save</button>
                        <a href="{{ URL::to('/camaba/view/')}}" class="btn btn-warning">
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