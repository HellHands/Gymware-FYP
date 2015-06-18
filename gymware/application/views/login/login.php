<!-- MetisMenu CSS -->
<link href="<?php echo base_url('assets/css/metisMenu.min.css');?>" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            
            <h2><?php echo validation_errors(); ?></h2>
                        
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">                    
                    <?php echo form_open('verifylogin'); ?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                        </fieldset>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets/js/metisMenu.min.js');?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url('assets/js/sb-admin-2.js');?>"></script>