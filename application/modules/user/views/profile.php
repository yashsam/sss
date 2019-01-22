<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
            <?php if($this->session->flashdata("messagePr")){?>
    <div class="alert alert-info">      
      <?php echo $this->session->flashdata("messagePr")?>
    </div>
  <?php } ?>
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">

                            <?php  
              if(file_exists('assets/images/'.$user_data[0]->profile_pic) && isset($user_data[0]->profile_pic)){
              $profile_pic = $user_data[0]->profile_pic;
              }else{
              $profile_pic = 'user.png';}?>
              <img  src="<?php echo base_url();?>/assets/images/<?php echo isset($profile_pic)?$profile_pic:'user.png';?>" alt="User profile picture" style="width:200px;height:200px">
                   
                            </div>
                            <div class="content-area">
                                <h3><?php echo $user_data[0]->name;?></h3>
                                <p><?php echo $user_data[0]->email;?></p>
                                <p><?php echo $user_data[0]->user_type;?></p>
                            </div>
                        </div>
                        <!--div class="profile-footer">
                            <ul>
                                <li>
                                    <span>Followers</span>
                                    <span>1.234</span>
                                </li>
                                <li>
                                    <span>Following</span>
                                    <span>1.201</span>
                                </li>
                                <li>
                                    <span>Friends</span>
                                    <span>14.252</span>
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
                        </div -->
                    </div>

                    <!-- div class="card card-about-me">
                        <div class="header">
                            <h2>ABOUT ME</h2>
                        </div>
                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">library_books</i>
                                        Education
                                    </div>
                                    <div class="content">
                                        B.S. in Computer Science from the University of Tennessee at Knoxville
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">location_on</i>
                                        Location
                                    </div>
                                    <div class="content">
                                        Malibu, California
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">edit</i>
                                        Skills
                                    </div>
                                    <div class="content">
                                        <span class="label bg-red">UI Design</span>
                                        <span class="label bg-teal">JavaScript</span>
                                        <span class="label bg-blue">PHP</span>
                                        <span class="label bg-amber">Node.js</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">notes</i>
                                        Description
                                    </div>
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div-->
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" area-expanded="true" role="tab" data-toggle="tab">Profile Settings</a></li>
                                    <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                        <form class="form-horizontal" action="<?php echo base_url().'user/add_edit' ?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Name </label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="name" value="<?php echo (isset($user_data[0]->name)?$user_data[0]->name:'');?>"  placeholder="Name Surname" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo (isset($user_data[0]->email)?$user_data[0]->email:'');?>" placeholder="Email"  required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="profile" class="col-sm-2 control-label">Change Picture</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                    <input id="fileUpload" class="upload" name="profile_pic" type="file" accept="image/*" /><br />
                                                    <input type="hidden" name="fileOld" value="<?php echo isset($user_data[0]->profile_pic)?$user_data[0]->profile_pic:'';?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                  <input type="hidden" name="users_id" value="<?php echo isset($user_data[0]->users_id)?$user_data[0]->users_id:''; ?>">
                                                  <input type="hidden" name="user_type" value="<?php echo isset($user_data[0]->user_type)?$user_data[0]->user_type:''; ?>">
                                                  <button type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <form class="form-horizontal" action="<?php echo base_url().'user/add_edit' ?>" method="POST">
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <!-- input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required -->
                                                        <input id="pass11" class="form-control" pattern=".{6,}" type="password" placeholder="********" name="currentpassword" title="6-14 characters">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="New Password (Confirm)" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <input type="hidden" name="users_id" value="<?php echo isset($user_data[0]->users_id)?$user_data[0]->users_id:''; ?>">
                                                  <input type="hidden" name="user_type" value="<?php echo isset($user_data[0]->user_type)?$user_data[0]->user_type:''; ?>">                                             
                                                  <button type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>































