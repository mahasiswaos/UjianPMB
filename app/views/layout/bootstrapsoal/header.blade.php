<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo URL::to("/index"); ?>">
            <i class="glyphicon glyphicon-home"></i>
            Home
        </a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a href="<?php echo URL::to("/soal/view"); ?>">
                    <i class="glyphicon glyphicon-refresh"></i>
                    Refresh
                </a>
            </li>
            <li>
                <a href="<?php echo URL::to("/soal/add"); ?>">
                    <i class="glyphicon glyphicon-plus"></i>
                    Tambah Data
                </a>
            </li>                                            
        </ul>
    </div> 
</nav>