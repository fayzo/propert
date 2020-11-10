<?php include "header_if_login.php"?>
<?php include "header.php"?>
    
<!-- <body> -->
<body >
<!-- <body class="chair"> -->
    <div class="content">
    <?php include "navbar.php"?>
    <!-- navbar -->
    
    <!-- Property Section Begin -->
    <section class="property-section spad">

        <div class="container">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile Edit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo HOME; ?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?php echo BASE_URL.$user['username'] ;?>">Profile</a></li>
                <li class="breadcrumb-item active"><a href="<?php echo PROFILE_EDIT; ?>">Profile Edit</a></li>
                </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->

        <div class="container">
        <div class="row">

          <div class="col-md-3 mb-3">
              <!-- Profile Image -->
              <div class="card  bg-light mb-3">
                  <div class="card-body box-profile widget-user">
                  <?php 
                      $result =$db->query("SELECT * FROM users WHERE user_id= $user_id");
                      $user= $result->fetch_array();
                  ?>
                      <div class="img-relative">
                          <div class="profile-upload">
                              <!-- Hidden upload form -->
                              <form method="post" action="<?php echo BASE_URL;?>core/ajax_db/profileEdit.php" enctype="multipart/form-data" id="picUploadForm" target="uploadTarget">

                                  <input type="hidden" name="edit_profile" id="edit_profile" value="<?php echo $user_id;?>" style="display:none">
                                  <input type="file" name="picture" id="fileInput" style="display:none">
                              </form>

                              <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid black;"></iframe>
                              <!-- Profile image -->
                              <div class="text-center img-placeholder">
                                  <h4>Update image</h4>
                              </div>
                              <!-- Image update link -->
                              <a href="javascript:void(0);" class="img-upload-iconLinks" id="edit_linkUpload">
                                  <i class="fa fa-camera" aria-hidden="true"></i> </a>
                                  <?php if (!empty($user['profile_img'] )) {?>
                                      <img class="rounded-circle" id="imagePreview"
                                          src='<?php echo BASE_URL_LINK."image/users_profile_cover/".$user['profile_img'] ;?>'
                                          alt="User profile picture">
                                  <?php  }else{ ?>
                                    <img class="rounded-circle"  src="<?php echo BASE_URL_LINK.NO_PROFILE_IMAGE;?>" alt="User profile picture">
                                          <!-- src='< ?php echo BASE_URL_LINK.NO_PROFILE_IMAGE_URL ;?>' -->
                                  <?php } ?>
                          </div>
                      </div>

                      <h3 class="profile-username text-center"><?php echo $user['firstname']." ".$user['lastname'] ;?></h3>

                      <hr>
                      <form method="post">
                          <div class="form-group">

                              <label for="firstname">Firstname :</label>
                              <input type="hidden" name="id_career" id="id_career"
                              value="<?php echo $_SESSION['key'];?>" style="display:none" />
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i>
                                      </span>
                                  </div>
                                  <input type="text" class="form-control" name="firstname" id="firstname"
                                      aria-describedby="helpId" value="<?php echo $user['firstname']; ?>" placeholder="Firstname">
                                      <span id="response"></span>
                              </div>

                              <label for="lastname">Lastname :</label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i>
                                      </span>
                                  </div>
                                  <input type="text" class="form-control" name="lastname" id="lastname"
                                      aria-describedby="helpId" value="<?php echo $user['lastname']; ?>"  placeholder="Lastname">
                                      <span id="response"></span>
                              </div>

                              <label for="specialize">email :</label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2"><i class="fa fa-envelope"></i>
                                      </span>
                                  </div>
                                  <input type="email" class="form-control" name="email" id="email"
                                      aria-describedby="helpId" value="<?php echo $user['email']; ?>"  placeholder="@email">
                                      <span id="response"></span>
                              </div>
                              <label for="specialize">Telephone :</label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2"><i class="fa fa-phone"></i>
                                      </span>
                                  </div>
                                  <input type="text" class="form-control" name="telephone" id="telephone"
                                      aria-describedby="helpId" value="<?php echo $user['telephone']; ?>"  placeholder="Your phone number">
                                      <span id="response"></span>
                              </div>
                              <label for="specialize">Twitter :</label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2"><i class="fa fa-twitter"></i>
                                      </span>
                                  </div>
                                  <input type="text" class="form-control" name="twitter" id="twitter"
                                      aria-describedby="helpId" value="<?php echo $user['twitter']; ?>"  placeholder="Your twitter name">
                                      <span id="response"></span>
                              </div>
                              <label for="specialize">Facebook :</label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2"><i class="fa fa-facebook"></i>
                                      </span>
                                  </div>
                                  <input type="text" class="form-control" name="facebook" id="facebook"
                                      aria-describedby="helpId" value="<?php echo $user['facebook']; ?>"  placeholder="Your facebook name">
                                      <span id="response"></span>
                              </div>
                              <label for="specialize">Instagram :</label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2"><i class="fa fa-instagram"></i>
                                      </span>
                                  </div>
                                  <input type="text" class="form-control" name="instagram" id="instagram"
                                      aria-describedby="helpId" value="<?php echo $user['instagram']; ?>"  placeholder="Your instagram name">
                                      <span id="response"></span>
                              </div>
                          </div>
                              <button type="button" onclick="careers('career');" class="btn main-active btn-block"><b>Submit</b></button>
                              <span id="respone-success"></span>
                      </form>

                      <!-- btn-primary -->
                  </div>
                  <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- About Me Box -->
              <div class="card bg-light">
                  <div class="card-header p-1">
                      <h5 class="card-title text-center"><i> About Me</i></h5>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <form method="post">
                          <div class="form-group">

                              <label for="location"><strong><i class="fa fa-map-marker mr-1"></i>
                                      Location</strong> :</label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2"><i
                                              class="fa fa-map-marker"></i></span>
                                  </div>
                                  <input type="text" class="form-control" name="location" id="location"
                                      aria-describedby="helpId" value="<?php echo $user['location'] ;?>" placeholder="Street Number,Kigali, Rwanda">
                              </div>
                              <hr>

                              <label for="password"><strong><i class="fa fa-pencil mr-1"></i> Skills</strong>
                              </label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2"><i
                                              class="fa fa-pencil"></i>
                                      </span>
                                  </div>
                                  <input type="text" class="form-control" name="skills" id="skills"
                                      aria-describedby="helpId" value="<?php echo $user['skills'] ;?>"
                                      placeholder='UI Design ,Coding ,Javascript ,PHP ,Node.js'>
                              </div>
                              <hr>
                              <label for="password"><strong><i class="fa fa-file-text-o mr-1"></i>
                               Professional</strong></label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2"><i
                                              class="fa fa-file-text-o"></i>
                                      </span>
                                  </div>
                                  <input type="text" class="form-control" name="notes" id="notes"
                                      aria-describedby="helpId" value="<?php echo $user['notes'] ;?>"
                                      placeholder='studying ,played ,Dance ,Read.....'>
                              </div>
                              <!-- <a href="javascript:void(0);" data-user="< ?php echo $_SESSION['key']; ?>" class="profile-edit-more float-right">Edit more</a> -->
                              <hr>
                          </div> <!-- FORM-GROUP -->
                          <button type="button" onclick="aboutMe('aboutme');" class="btn main-active btn-block"><b>Submit</b></button>
                            <span id="responses"></span>
                      </form>
                  </div>
                  <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-9">
            <div class="card  mb-3">
                <div class="card-header">
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link  active" href="#House_For_sale"
                            data-toggle="tab">House For sale
                            <span class="badge badge-primary"><?php echo $house->housecountAgentPOSTS('House_For_sale',$user_id);?></span>
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#House_For_rent"
                            data-toggle="tab">House For rent
                            <span class="badge badge-primary"><?php echo $house->housecountAgentPOSTS('House_For_rent',$user_id);?></span>
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#House_Land"
                            data-toggle="tab">House Land
                            <span class="badge badge-primary"><?php echo $house->housecountAgentPOSTS('House_Land',$user_id);?></span>
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#Apartment_For_sale"
                            data-toggle="tab">apartment For Sale
                            <span class="badge badge-primary"><?php echo $house->housecountAgentPOSTS('Apartment_For_sale',$user_id);?></span>
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#Apartment_For_rent"
                            data-toggle="tab">apartment For Rent
                            <span class="badge badge-primary"><?php echo $house->housecountAgentPOSTS('Apartment_For_rent',$user_id);?></span>
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#room_For_rent"
                            data-toggle="tab">room
                            <span class="badge badge-primary"><?php echo $house->housecountAgentPOSTS('room_For_rent',$user_id);?></span>
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#commerce_For_rent"
                            data-toggle="tab">Commerce
                            <span class="badge badge-primary"><?php echo $house->housecountAgentPOSTS('commerce_For_rent',$user_id);?></span>
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#Offices_For_rent"
                            data-toggle="tab">Office
                            <span class="badge badge-primary"><?php echo $house->housecountAgentPOSTS('Offices_For_rent',$user_id);?></span>
                        </a></li>
                    </ul>
                    <!-- </div> -->
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active " id="House_For_sale">
                            <?php echo $house->edit_delete_Agentproperty('House_For_sale',$user_id); ?>
                        </div> 
                        <div class="tab-pane" id="House_For_rent">
                            <?php echo $house->edit_delete_Agentproperty('House_For_rent',$user_id); ?>
                        </div>
                        <div class="tab-pane" id="House_Land">
                        <?php echo $house->edit_delete_Agentproperty('House_Land',$user_id); ?>
                        </div>
                        <div class="tab-pane" id="Apartment_For_rent">
                        <?php echo $house->edit_delete_Agentproperty('Apartment_For_rent',$user_id); ?>
                        </div>
                        <div class="tab-pane" id="Apartment_For_sale">
                        <?php echo $house->edit_delete_Agentproperty('Apartment_For_sale',$user_id); ?>
                        </div>
                        <div class="tab-pane" id="room_For_rent">
                        <?php echo $house->edit_delete_Agentproperty('room_For_rent',$user_id); ?>
                        </div>
                        <div class="tab-pane" id="commerce_For_rent">
                        <?php echo $house->edit_delete_Agentproperty('commerce_For_rent',$user_id); ?>
                        </div>
                        <div class="tab-pane" id="Offices_For_rent">
                        <?php echo $house->edit_delete_Agentproperty('Offices_For_rent',$user_id); ?>
                        </div>
                    </div> <!-- /.tab-content -->
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      
    </section>
    <!-- Property Section End -->

    
    <?php include "footer.php"?>
