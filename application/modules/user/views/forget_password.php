<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password" action="<?php echo base_url().'user/forgetpassword'?>" method="POST">
                    <div class="msg">
                        Enter your email address that you used to register. We'll send you an email with your username and a
                        link to reset your password.
                    </div>
                      <?php if($this->session->flashdata('forgotpassword')):?>
                        <div class="callout callout-success">
                          <h5 style='color:red;' class="fa fa-close">  <?php echo $this->session->flashdata('forgotpassword'); ?></h5>
                        </div>
                      <?php endif ?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">RESET MY PASSWORD</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="<?php echo site_url('user/login');?>">Sign In!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>







