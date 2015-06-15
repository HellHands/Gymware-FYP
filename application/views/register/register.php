<!-- MetisMenu CSS -->
<link href="<?php echo base_url('assets/css/metisMenu.min.css');?>" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Not a member? Register now.</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="<?php echo base_url('Register/reg_User'); ?>">
                        <fieldset>
                            <div class="form-group">                                
                                <input class="form-control" placeholder="First Name" name="fname" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Last Name" name="lname" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Confirm Password" name="cpassword" type="password" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Package (Platinum/Gold/Silver)" name="pkg" type="text" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" value="Register" class="btn btn-lg btn-success btn-block">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets/js/metisMenu.min.js');?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url('assets/js/sb-admin-2.js');?>"></script>