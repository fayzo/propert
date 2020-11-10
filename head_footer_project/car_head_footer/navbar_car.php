   <!-- <p>hello<br>< ?php echo $users->insert();?></p> <br> -->
   <div class="progress progress-navbar m-0 fixed-top" style="height: 6px;display:none">
        <span class="progress-bar bg-info" role="progressbar"
            style="width:0%;" id="progress_width" aria-valuenow="" aria-valuemin="0"
            aria-valuemax="100"></span>
    </div>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="language-bar">
            <div class="language-option">
                <img src="<?php echo BASE_URL;?>assets/image/img/rw-flag.jpg" alt="">
                <span>Rwanda</span>
            </div>
        </div>
        <nav class="main-menu">
            <ul>
                <li><a href="<?php echo BASE_URL;?>contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="nav-logo-right">
            <ul>
                <li>
                    <i class="icon_phone"></i>
                    <div class="info-text">
                        <span>Phone:</span>
                        <p>(+250) <?php echo $businessDetails['phone_business']; ?></p>
                    </div>
                </li>
                <li>
                    <i class="icon_map"></i>
                    <div class="info-text">
                        <span>Address:</span>
                        <p><?php echo $businessDetails['address_business']; ?>, <span>RW</span></p>
                    </div>
                </li>
                <li>
                    <i class="icon_mail"></i>
                    <div class="info-text">
                        <span>Email:</span>
                        <p><?php echo $businessDetails['email_business']; ?></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

        <div class="nav-logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                            <div class="logo">
                                <a href="<?php echo BASE_URL;?>index.php"> 
                                  <img src="<?php echo BASE_URL;?>assets/image/img/partner/partner-4.png" alt="">
                                </a>
                            </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="nav-logo-right">
                            <ul>
                                <li>
                                    <i class="icon_phone"></i>
                                    <div class="info-text">
                                        <span>Phone:</span>
                                        <p>(+250) <?php echo $businessDetails['phone_business']; ?></p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon_map"></i>
                                    <div class="info-text">
                                        <span>Address:</span>
                                        <p><?php echo $businessDetails['address_business']; ?>, <span>RW</span></p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon_mail"></i>
                                    <div class="info-text">
                                        <span>Email:</span>
                                       <p>
                                        <a href="javascript:void(0)" id="contacts_business" data-contacts="contacts_business"><?php echo $businessDetails['email_business']; ?></a>
                                       </p> 
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    
    <!-- Search Form Section Begin -->
    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-form-text">
                        <div class="search-text">
                            <i class="fa fa-search"></i>
                            Find Your Car
                        </div>
                        <span class="home-text language-option" >
                                <img src="<?php echo BASE_URL;?>assets/image/img/rw-flag.jpg" alt="">
                                <span style="color: #f9f7f5;">Rwanda</span>
                        </span>
                        <a href="javascript:void(0)" class="btn btn-sm btn-outline-success text-white border-0" id="contacts_business" data-contacts="contacts_business" >Contact Us</a>
                        <a href="<?php echo VIEW_MESSAGE; ?>" class="btn btn-sm btn-outline-success"  style="color:white;border: none;padding-top: 0px;position:relative;">
                            <i class="fa fa-envelope-o" style="font-size:16px"></i> Message<span id="messages"><?php if( $notific['total_agentmessage'] > 0){echo '<span  class="badge badge-danger navbar-badge">'.$notific['total_agentmessage'].'</span>'; } ?></span>
                        </a>
                        <a href="<?php echo WATCH_LIST; ?>" class="btn btn-sm btn-outline-success"  style="color:white;border: none;padding-top: 0px;position:relative;">
                            <i class="fa fa-list" style="font-size:16px;"></i> Watch-List<span id="notification"><?php if( $notific['total_watchlist_house'] > 0){echo '<span  class="badge badge-danger navbar-badge">'.$notific['total_watchlist_house'].'</span>'; } ?></span>
                        </a>

                            <div class="nav-float-right">
                                
                                <a style="color:white;border: none;" href="#" class="btn btn-sm btn-outline-primary"  id="contacts_us" data-contacts="contacts_us" >Request Property</a>
                                <!-- <a style="color:white;border: none;" href="#" class="btn btn-sm btn-outline-primary" id="property_request_clients" data-house="admin" >Request Property</a> -->
                                <a style="color:white;border: none;" href="#" class="btn btn-sm btn-outline-primary" id="add_house" data-house="<?php echo $_SESSION['key']; ?>" >Post Property</a>
                                <?php if (isset($_SESSION['key'])) { ?>
                                    <div class="dropdown user user-menu show">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <?php if (!empty($user['profile_img'])) { ?>
                                                <img src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$user['profile_img'] ;?>" alt="" class="user-image rounded-circle" alt="User Image" >
                                            <?php  }else{ ?>
                                                <img src="<?php echo BASE_URL_LINK.NO_PROFILE_IMAGE;?>" alt="User Image">
                                            <?php } ?>
                                            <span class="hidden-xs"><span id="welcome-json">welcome </span><?php echo $user['username']; ?></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <!-- User image -->
                                            <li class="user-header" style="background: url('http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/702caus.jpg') center center;background-size: cover; overflow: hidden; width: 100%;">
                                                <?php if (!empty($user['profile_img'])) { ?>
                                                    <img src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$user['profile_img'] ;?>" alt="" class="rounded-circle" alt="User Image" >
                                                <?php  }else{ ?>
                                                    <img src="<?php echo BASE_URL_LINK.NO_PROFILE_IMAGE;?>" alt="User Image">
                                                <?php } ?>
                                            <p>
                                            <?php echo $user['username']; ?> - Agent
                                        <small>Member since  <?php echo $users->timeAgo($user['username']); ?> </small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                        <div class="col-4 text-center">
                                            <a href="<?php echo SETTING; ?>">Settings</a>
                                        </div>
                                        <div class="col-4 text-center">
                                            <a href="<?php echo ADMIN; ?>">Admin</a>
                                        </div>
                                        <div class="col-4 text-center">
                                            <a href="<?php echo PROFILE_EDIT; ?>">Profile Edit</a>
                                        </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer main-active">
                                        <div class="pull-left">
                                        <a href="<?php echo PROFILE; ?>" class="btn btn-info btn-sm">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                        <!-- <a href="< ?php echo LOGOUT;?>" class="btn btn-danger btn-sm ">Sign out</a> -->
                                        <a href="<?php echo LOGOUT; ?>" class="btn btn-danger btn-sm ">Sign out</a>
                                        </div>
                                    </li>
                                    </ul>
                                    </div>
                                    <?php }else{ ?>
                                        <a style="color:white;border: none;" class="btn btn-sm btn-outline-success" href="<?php echo LOGIN; ?>">login</a>
                                    <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Search Form Section End -->