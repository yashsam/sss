<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small>
        </div>
        <div class="card">
		<?php if($this->session->flashdata("messagePr")){?>
	  		<div class="alert alert-danger alert-dismissible" role="alert">  
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <?php echo $this->session->flashdata("messagePr")?>
		    </div>
		    <?php } ?>
            <div class="body">
                <form id="sign_in" action="<?php echo base_url().'user/auth_user'; ?>" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email / Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="<?php echo site_url('user/registration')?>">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="<?php echo site_url('user/forgetpassword'); ?>">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

		</body>


