<?php 
 if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){
       header('Location: ../../404.html');
 }

class House extends Home {

    // THIS IS ON FOR THE MAIN HOME IT HAVE BANNER AND PRICE DISCOUNT
    public function houseList_homeNavbarblack($categories,$pages,$user_id){ ?>

                
        <div class="property-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="javascript:void(0)"  onclick="houseCategories('House_For_sale',1,<?php echo $user_id ; ?>);">House For sale<span class="badge badge-primary"><?php echo $this->housecountPOSTS('House_For_sale');?></span></a></li>
                                <li><a href="javascript:void(0)" onclick="houseCategories('House_For_rent',1,<?php echo $user_id ; ?>);">House For rent<span class="badge badge-primary"><?php echo $this->housecountPOSTS('House_For_rent');?></span></a></li>
                                <li><a href="javascript:void(0)" onclick="houseCategories('Land_For_sale',1,<?php echo $user_id ; ?>);">Land & Plots<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Land_For_sale');?></span></a></li>
                                <li><a href="javascript:void(0)" onclick="houseCategories('Apartment_For_sale',1,<?php echo $user_id ; ?>);">Apartment For sale<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Apartment_For_sale');?></span></a></li>
                                <li><a href="javascript:void(0)" onclick="houseCategories('Apartment_For_rent',1,<?php echo $user_id ; ?>);">Apartment For rent<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Apartment_For_rent');?></span></a></li>
                                <li><a href="javascript:void(0)" onclick="houseCategories('room_For_rent',1,<?php echo $user_id ; ?>);">Room<span class="badge badge-primary"><?php echo $this->housecountPOSTS('room_For_rent');?></span></a></li>
                                <li><a href="javascript:void(0)" onclick="houseCategories('commerce_For_rent',1,<?php echo $user_id ; ?>);">Commerce<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Commerce_For_rent');?></span></a></li>
                                <li><a href="javascript:void(0)" onclick="houseCategories('Offices_For_rent',1,<?php echo $user_id ; ?>);">Offices<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Offices_For_rent');?></span></a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-12 mt-3">
                         <div class="price-range-wrap">
                            <div class="price-text">
                                <label for="priceRange">Price:</label>
                                <input type="text" id="priceRange" readonly>
                            </div>
                            <div id="price-range" class="slider"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    <?php }

    // THIS IS ONE FOR THE ADMIN AND AGENT TO VIEW MESSAGE IT HAVE BANNER AND PRICE DISCOUNT

    public function propertyView_HomeAdmin($categories,$pages,$user_id){ ?>

            
        <div class="property-navs border rounded" style="text-align: center;background:#f7f7f7;padding:10px 0 0;margin-bottom: 25px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="main-menus">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#House_For_sale" onclick="houseCategories('House_For_sale',1,<?php echo $user_id ; ?>);">House For sale<span class="badge badge-primary"><?php echo $this->housecountPOSTS('House_For_sale');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#House_For_rent" onclick="houseCategories('House_For_rent',1,<?php echo $user_id ; ?>);">House For rent<span class="badge badge-primary"><?php echo $this->housecountPOSTS('House_For_rent');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Land_For_sale" onclick="houseCategories('Land_For_sale',1,<?php echo $user_id ; ?>);">Land & Plots<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Land_For_sale');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Apartment_For_sale" onclick="houseCategories('Apartment_For_sale',1,<?php echo $user_id ; ?>);">Apartment For sale<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Apartment_For_sale');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Apartment_For_rent" onclick="houseCategories('Apartment_For_rent',1,<?php echo $user_id ; ?>);">Apartment For rent<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Apartment_For_rent');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#room_For_rent" onclick="houseCategories('room_For_rent',1,<?php echo $user_id ; ?>);">Room<span class="badge badge-primary"><?php echo $this->housecountPOSTS('room_For_rent');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Commerce_For_rent" onclick="houseCategories('commerce_For_rent',1,<?php echo $user_id ; ?>);">Commerce<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Commerce_For_rent');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Offices_For_rent" onclick="houseCategories('Offices_For_rent',1,<?php echo $user_id ; ?>);">Offices<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Offices_For_rent');?></span></a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-12 mt-3">
                         <div class="price-range-wrap">
                            <div class="price-text">
                                <label for="priceRange">Price:</label>
                                <input type="hidden" class="price_range-user_id" value="<?php echo $user_id; ?>" />
                                <!-- <input type="text" id="priceRange" value="0,100000000" readonly> -->
                                <input type="text" style="color:black" id="priceRange" readonly>
                            </div>
                            <div id="price-range" class="slider"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    <?php }
    // THIS IS ONE FOR THE ADMIN AND AGENT TO VIEW MESSAGE IT HAVE BANNER AND PRICE DISCOUNT


    public function houseListAdmin($categories,$pages,$user_id)
    {
        $pages= $pages;
        $categories= $categories;
        
        if($pages === 0 || $pages < 1){
            $showpages = 0 ;
        }else{
            $showpages = ($pages*10)-10;
        }
        $mysqli= $this->database;
        $query= $mysqli->query("SELECT * FROM house H
            Left JOIN provinces P ON H. province = P. provincecode
            Left JOIN districts M ON H. districts = M. districtcode
            Left JOIN sectors T ON H. sector = T. sectorcode
            Left JOIN cells C ON H. cell = C. codecell
            Left JOIN vilages V ON H. village = V. CodeVillage 
            Left JOIN users U ON H. user_id3 = U. user_id 
        WHERE H. categories_house ='$categories' ORDER BY H. buy='sold' ,rand() Desc Limit $showpages,10");
        ?>

        <div id="house-hide"> 
        
        <div class="tab-content">
        <div class="active tab-pane" id="<?php echo $categories; ?>">
        

        <div class="property-list" id="property-list">
        <div class="timeline">

        <?php while($house= $query->fetch_array()) { ?>
                     
        <div class="single-property-item ">

            <?php echo $this->buychangesColor($house['buy']); ?>
            <!-- <i class="bg-success text-light require" >Sale </i> -->
            <i class="fa fa-user"></i>

            <?php if($house['discount'] != 0){ ?>
            <?php echo $this->PercentageDiscount($house['discount']); ?>
            <?php }else { echo ''; ?>
                <!-- <span class="bg-info text-light" > 0% </span>  -->
            <?php } ?>

            <div class="row timeline-item">

                <div class="col-md-4 px-0">
                    <div class="property-pic">
                        <?php echo $this->banner($house['banner']) ;
                                    $file = $house['photo']."=".$house['other_photo'];
                                    $expode = explode("=",$file);  ?>
                        <img class="propertyPicture" src="<?php echo BASE_URL.'uploads/house/'.$expode[0]; ?>" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                <div id="response<?php echo $house['house_id']; ?>"></div>
                    <?php if ($house['buy'] == 'sold') { ?>
                        <div class="property-text"
                            style="background: url('<?php echo BASE_URL.'assets/image/background_image/sold.png'; ?>')no-repeat center center;
                                background-size:cover;height:100%;width:100%">
                    <?php }else {
                        # code...
                        echo ' 
                        <div class="property-text" >
                        ';
                    } ?>
                        <!-- <div class="s-text">For Sale</div> -->
                        <?php echo $this->edit_delete_house($user_id,$house['user_id3'],$house['house_id']); ?>
                        
                        <h5 class="r-title" style="display: inline-block;">
                        <i class="fa fa-home" aria-hidden="true"></i>
                            <?php 
                            $subect = $house['categories_house'];
                            $replace = " ";
                            $searching = "_";
                            echo str_replace($searching,$replace, $subect);
                            ?>
                        </h5> |
                        
                        <span class="h6 text-success text-uppercase ml-2"><?php echo $house['equipment']; ?></span>
                        
                        <div> From:<span class="room-price price-change"> <?php echo $this->nice_number(number_format($house['price'])); ?> Frw
                            <?php  echo (substr($house['categories_house'],-4) == 'sale')? '':'/month';?>
                            </span>
                            <?php if($house['price_discount'] != 0){ ?>
                                
                            <span class="text-danger price-change" style="text-decoration: line-through;">
                            <?php echo number_format($house['price_discount']); ?> Frw </span> <?php } ?>
                        </div>
                        
                        <h5 class="r-title pt-3"><a href="javascript:void(0)" id="house-readmore" data-house="<?php echo $house['house_id']; ?>" >
                            <?php $titlex= $house['name_of_house'];
                            if (strlen($titlex) > 25) {
                            echo $titlex = substr($titlex,0,25).'..';
                            }else{ 
                            echo $titlex;
                            } ?>
                          </a>
                          </h5>

                        <a class="properties-location"  href="javascript:void(0)" id="house-readmore" data-house="<?php echo $house['house_id']; ?>" ><i class="icon_pin"></i>
                        <!-- < ?php echo $house['provincename']; ?> /  -->
                        <?php echo $house['namedistrict']; ?> District/ 
                        <?php echo $house['namesector']; ?> Sector
                        <!-- < ?php echo $house['nameCell']; ?> Cell  -->
                        </a>

                        <div style="margin-bottom:18px;font-size: 11px;">
                            <i class="fa fa-clock-o" style="color: #2cbdb8;margin-right: 4px;" aria-hidden="true"></i> Created on <?php echo $this->timeAgo($house['created_on3'])." By ".$house['authors']; ?>
                        </div>

                        <!-- <p>
                        < ?php 
                            $titlex= $house['text'];
                            if (strlen($titlex) > 20) {
                            echo $titlex = substr($titlex,0,87).'..
                            <a class="properties-location"  href="javascript:void(0)" id="house-readmore" data-house="'.$house['house_id'].'" >Read more</a>
                            ';
                            }else{ 
                            echo $titlex;
                            } ?>

                            </p> -->
                        <ul class="room-features">
                            <li>
                                <i class="fa fa-bed"></i>
                                <p><?php echo $house['bedroom']; ?>  Bed Room</p>
                            </li>
                            <li>
                                <i class="fa fa-bath"></i>
                                <p><?php echo $house['bathroom']; ?> Baths Room</p>
                            </li>
                            <li>
                                <i class="fa fa-car"></i>
                                <p><?php echo $house['car_in_garage']; ?> Garage</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row  timeline-item">
                <div class="col-lg-12 p-0">
                    <div class="card  collapsed-box">
                        <div class="card-header" style="padding: 5px 10px;">
                            <div class="card-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="user-block">
                                <div class="user-blockImgBorder">
                                    <div class="user-blockImg">
                                        <?php if (!empty($house['profile_img'])) { ?>
                                            <img src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$house['profile_img']; ?>" alt="User Image">
                                        <?php  }else{ ?>
                                            <img src="<?php echo BASE_URL_LINK.NO_PROFILE_IMAGE;?>" alt="User Image">
                                        <?php } ?>
                                    </div>
                                </div>
                                <span class="username tooltips">
                                    <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo"> <?php echo $house['lastname']; ?></a>
                                </span>
                                <span class="description">Shared public - <?php echo $this->timeAgo($house['created_on3']); ?></span>
                            </div>
                            <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i> Message  
                                <?php  if($user_id == $house['user_id3']){  
                                    echo $this->CountsCommentToAgent($house['house_id']);
                                } ?>
                            </a>
                            For Request this property
                        </div>
                        <div class="card-body pt-0">

                        <?php  
                        if($user_id == $house['user_id3']){  
                            $this->commentsToAgent($house['house_id']);
                        } ?>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

                    <!-- END timeline item -->
                    <?php }
                    
                    $query1= $mysqli->query("SELECT COUNT(*) FROM house WHERE categories_house ='$categories' ");
                    $row_Paginaion = $query1->fetch_array();
                    $total_Paginaion = array_shift($row_Paginaion);
                    $post_Perpages = $total_Paginaion/10;
                    $post_Perpage = ceil($post_Perpages); ?> 
            <!-- END timeline item -->
            <div class="single-property-item ">
                <i class="fa fa-clock-o bg-info text-light"></i>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

        <?php if($post_Perpage > 1){ ?>
         <nav>
             <ul class="pagination justify-content-center mt-3">
                 <?php if ($pages > 1) { ?>
                     <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="houseCategories('<?php echo $categories; ?>',<?php echo $pages-1; ?>)">Previous</a></li>
                 <?php } ?>
                 <?php for ($i=1; $i <= $post_Perpage; $i++) { 
                         if ($i == $pages) { ?>
                      <li class="page-item active"><a href="javascript:void(0)"  class="page-link" onclick="houseCategories('<?php echo $categories; ?>',<?php echo $i; ?>)" ><?php echo $i; ?> </a></li>
                      <?php }else{ ?>
                     <li class="page-item"><a href="javascript:void(0)"  class="page-link" onclick="houseCategories('<?php echo $categories; ?>',<?php echo $i; ?>)" ><?php echo $i; ?> </a></li>
                 <?php } } ?>
                 <?php if ($pages+1 <= $post_Perpage) { ?>
                     <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="houseCategories('<?php echo $categories; ?>',<?php echo $pages+1; ?>)">Next</a></li>
                 <?php } ?>
             </ul>
         </nav>
        <?php } 
    }

    // THIS IS ONE FOR HOME IT HAVE BEST LAYOUT FOR HOUSE IT DOESN'T HAVE BANNER AND PRICE DISCOUNT
    // THIS IS ONE FOR HOME IT HAVE BEST LAYOUT FOR HOUSE IT DOESN'T HAVE BANNER AND PRICE DISCOUNT

    public function property_navListHome($categories,$pages,$user_id) { ?>

        <div class="property-navs border rounded" style="text-align: center;background:#f7f7f7;padding:10px 0 0;margin-bottom: 25px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="main-menus">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#House_For_sale" data-toggle="tab"  onclick="houseCategoriesHome('House_For_sale',1,<?php echo $user_id ; ?>);">House For sale<span class="badge badge-primary"><?php echo $this->housecountPOSTS('House_For_sale');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#House_For_rent" data-toggle="tab" onclick="houseCategoriesHome('House_For_rent',1,<?php echo $user_id ; ?>);">House For rent<span class="badge badge-primary"><?php echo $this->housecountPOSTS('House_For_rent');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#Land_For_sale" data-toggle="tab"  onclick="houseCategoriesHome('Land_For_sale',1,<?php echo $user_id ; ?>);">Land & Plots<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Land_For_sale');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#Apartment_For_sale" data-toggle="tab"  onclick="houseCategoriesHome('Apartment_For_sale',1,<?php echo $user_id ; ?>);">Apartment For sale<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Apartment_For_sale');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#Apartment_For_rent" data-toggle="tab"  onclick="houseCategoriesHome('Apartment_For_rent',1,<?php echo $user_id ; ?>);">Apartment For rent<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Apartment_For_rent');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#room_For_rent" data-toggle="tab"  onclick="houseCategoriesHome('room_For_rent',1,<?php echo $user_id ; ?>);">Room<span class="badge badge-primary"><?php echo $this->housecountPOSTS('room_For_rent');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#Commerce_For_rent" data-toggle="tab"  onclick="houseCategoriesHome('commerce_For_rent',1,<?php echo $user_id ; ?>);">Commerce<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Commerce_For_rent');?></span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#Offices_For_rent" data-toggle="tab"  onclick="houseCategoriesHome('Offices_For_rent',1,<?php echo $user_id ; ?>);">Offices<span class="badge badge-primary"><?php echo $this->housecountPOSTS('Offices_For_rent');?></span></a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-12 mt-3">
                         <div class="price-range-wrap">
                            <div class="price-text">
                                <label for="priceRange">Price:</label>
                                <input type="hidden" class="price_range-user_id" value="<?php echo $user_id; ?>" />
                                <!-- <input type="text" id="priceRange" value="0,100000000" readonly> -->
                                <input type="text" style="color:black" id="priceRange_" readonly>
                            </div>
                            <div id="price-range_" class="slider"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    <?php }

    // THIS IS ONE FOR HOME IT HAVE BEST LAYOUT FOR HOUSE IT DOESN'T HAVE BANNER AND PRICE DISCOUNT
    // THIS IS ONE FOR HOME IT HAVE BEST LAYOUT FOR HOUSE IT DOESN'T HAVE BANNER AND PRICE DISCOUNT

    public function houseListHome($categories,$pages,$user_id)
    {
        $pages= $pages;
        $categories= $categories;
        
        if($pages === 0 || $pages < 1){
            $showpages = 0 ;
        }else{
            $showpages = ($pages*10)-10;
        }
        $mysqli= $this->database;
        $query= $mysqli->query("SELECT * FROM house H
            Left JOIN provinces P ON H. province = P. provincecode
            Left JOIN districts M ON H. districts = M. districtcode
            Left JOIN sectors T ON H. sector = T. sectorcode
            Left JOIN cells C ON H. cell = C. codecell
            Left JOIN vilages V ON H. village = V. CodeVillage 
        WHERE H. categories_house ='$categories' ORDER BY H. buy='sold' ,rand() Desc Limit $showpages,10");
        ?>
       
        <div id="house-hide" class="property-list"> 
        
        <div class="tab-content">
        <div class="active tab-pane" id="<?php echo $categories; ?>">

        <div class="row">
        
         <?php 
            if ($query->num_rows > 0) {

                while ($house = $query->fetch_array()) {   ?>

        <div class="col-md-4 col-lg-4">
        <div class="single_property bg-light">
            <div class="property_thumb">
                <?php if ($house['buy'] == "sale") { ?>
                    <div class="property_tag">
                            For Sale
                    </div>
                    <?php }else if ($house['buy'] == "rent") { ?>
                        <div class="property_tag bg-success">
                                For Rent
                        </div>
                    <?php }else {  ?>
                        <div class="property_tag red">
                                Sold
                        </div>
                <?php } ?>
                <?php 
                // echo $this->banner($house['banner']) ;
                        $file = $house['photo']."=".$house['other_photo'];
                                        $expode = explode("=",$file);  ?>
                <img src="<?php echo BASE_URL.'uploads/house/'.$expode[0]; ?>" alt="">
            </div>
            <div class="property_content">
                <div id="response<?php echo $house['house_id']; ?>"></div>
                <div class="main_pro">
                        <?php echo $this->edit_delete_house($user_id,$house['user_id3'],$house['house_id']); ?>
                        <h3><a href="javascript:void(0)" id="house-readmore" data-house="<?php echo $house['house_id']; ?>">
                                <?php 
                                    $subect = $house['categories_house'];
                                    $replace = " ";
                                    $searching = "_";
                                    echo str_replace($searching,$replace, $subect);
                                    ?>
                        </a>
                        <span class="h6 text-success text-uppercase ml-2"><?php echo $house['equipment']; ?></span>
                        </h3>
                        <div class="mark_pro">
                            <!-- <img src="<?php echo BASE_URL; ?>assets/icon/svg_icon/location.svg" alt=""> -->
                            <span>
                            <a class="properties-location" href="javascript:void(0)" id="house-readmore" data-house="<?php echo $house['house_id']; ?>" ><i class="icon_pin"></i>
                            <?php echo $house['namedistrict']; ?> / 
                            <?php echo $house['namesector']; ?>
                            </a></span>
                        </div>
                        <span class="amount">
                            From:<span class="room-price price-change"> <?php echo $this->nice_number(number_format($house['price'])); ?> Frw
                            <?php  echo (substr($house['categories_house'],-4) == 'sale')? '':'/month';?>
                            </span>
                            <?php if($house['price_discount'] != 0){ ?>
                                
                            <div class="text-danger price-change" style="text-decoration: line-through;">
                            <?php echo number_format($house['price_discount']); ?> Frw </div><?php } ?>
                        </span>
                </div>
                Publish <?php echo $this->timeAgo($house['created_on3']); ?>
            </div>
            <div class="footer_pro">
                <ul>
                    <li>
                        <div class="single_info_doc">
                            <img src="<?php echo BASE_URL; ?>assets/icon/svg_icon/bed.svg" alt="">
                            <span><?php echo $house['bedroom']; ?> Bed</span>
                        </div>
                    </li>
                    <li>
                        <div class="single_info_doc">
                            <img src="<?php echo BASE_URL; ?>assets/icon/svg_icon/bath.svg" alt="">
                            <span><?php echo $house['bathroom']; ?>  Bath</span>
                        </div>
                    </li>
                    <li>
                        <div class="single_info_doc">
                        <i class="fa fa-car"></i>
                            <!-- <img src="< ?php echo BASE_URL; ?>assets/icon/svg_icon/car.png" alt=""> -->
                            <span><?php echo $house['car_in_garage']; ?>  car</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- single_property -->
        </div>
    <!-- col -->

    <?php } }else{
                    echo 'No record'; 
                }
                    $query1= $mysqli->query("SELECT COUNT(*) FROM house WHERE categories_house ='$categories' ");
                    $row_Paginaion = $query1->fetch_array();
                    $total_Paginaion = array_shift($row_Paginaion);
                    $post_Perpages = $total_Paginaion/10;
                    $post_Perpage = ceil($post_Perpages); ?> 
    </div>
    </div>
    </div>
    </div>

        <?php if($post_Perpage > 1){ ?>
         <nav>
             <ul class="pagination justify-content-center mt-3">
                 <?php if ($pages > 1) { ?>
                     <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="houseCategoriesHome('<?php echo $categories; ?>',<?php echo $pages-1; ?>)">Previous</a></li>
                 <?php } ?>
                 <?php for ($i=1; $i <= $post_Perpage; $i++) { 
                         if ($i == $pages) { ?>
                      <li class="page-item active"><a href="javascript:void(0)"  class="page-link" onclick="houseCategoriesHome('<?php echo $categories; ?>',<?php echo $i; ?>)" ><?php echo $i; ?> </a></li>
                      <?php }else{ ?>
                     <li class="page-item"><a href="javascript:void(0)"  class="page-link" onclick="houseCategoriesHome('<?php echo $categories; ?>',<?php echo $i; ?>)" ><?php echo $i; ?> </a></li>
                 <?php } } ?>
                 <?php if ($pages+1 <= $post_Perpage) { ?>
                     <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="houseCategoriesHome('<?php echo $categories; ?>',<?php echo $pages+1; ?>)">Next</a></li>
                 <?php } ?>
             </ul>
         </nav>
        <?php } 
    }

    public function commentsToAgent($house_id)
    {
        $mysqli= $this->database;
        $query= "SELECT * FROM agent_message A 
        LEFT JOIN house H ON A. house_id_msg = H. house_id
        LEFT JOIN users U ON A. user_id3 = U. user_id  
        WHERE A. house_id_msg = $house_id ORDER BY datetime DESC ";
        $result= $mysqli->query($query);
        // $comments= array();
        $increment=1;
        while ($row= $result->fetch_assoc()) { ?>
             <!-- $comments[] = $row; -->
             <table class="table  table-responsive-sm table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>name</th>
                        <th>email</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $increment++ ; ?></td>
                        <td><?php echo $row['name_client'] ; ?></td>
                        <td><?php echo $row['email_client'] ; ?><i class="fa fa-envelope-o" aria-hidden="true"></i> 
                            <div><?php echo $row['phone_client'] ; ?>
                            </div>
                        </td>
                        <td>
                            <input type="button" onclick="business_msg(<?php echo $row['message_id'];?>, 'agent_message_view')" value="View" class="btn">
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php }
        // return $comments;
    }

    public function MessageSentToAgent($user_id)
    {
        $mysqli= $this->database;
        $query= "SELECT * FROM agent_message A 
        LEFT JOIN house H ON A. house_id_msg = H. house_id
        LEFT JOIN users U ON A. user_id3 = U. user_id  
        WHERE A. user_id3 = $user_id ORDER BY datetime DESC ";
        $result= $mysqli->query($query);
        // $comments= array();
        $increment=1;
        ?>
        <table class="table  table-responsive-sm table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>House</th>
                    <th>name</th>
                    <th>email</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>

        <?php
        while ($row= $result->fetch_assoc()) { ?>
             <!-- $comments[] = $row; -->

                    <tr id="agent_msg<?php echo $row['message_id']; ?>">

                        <td><?php echo $increment++ ; ?></td>
                        <td class="text-center">
                            <div class="avatar">
                                <?php
                                $file = $row['photo'];
                                $expode = explode("=",$file);  ?>
                                <img class="img-avatar" width="80px" 
                                    src="<?php echo BASE_URL.'uploads/house/'.$expode[0]; ?>" alt="">
                            </div>
                        </td>
                        <td><?php echo $row['name_client'] ; ?></td>
                        <td><?php echo $row['email_client'] ; ?><i class="fa fa-envelope-o" aria-hidden="true"></i> 
                            <div><?php echo $row['phone_client'] ; ?>
                            </div>
                        </td>
                        <td>
                            <div><?php echo $this->timeAgo($row['datetime']); ?></div>
                            <input type="button" onclick="business_msg(<?php echo $row['message_id'];?>, 'agent_message_view')" value="View" class="btn">
                            <input type="button" onclick="deleteRowHouse(<?php echo $row['message_id'];?>, 'agent_message_delete')" value="Delete" class="btn btn-danger">
                        </td>
                    </tr>
              
              <?php } ?>

            </tbody>
        </table>
<?php  }
    
    public function CountsCommentToAgent($house_id){
      $db =$this->database;
      $query="SELECT COUNT(*) FROM agent_message WHERE house_id_msg= $house_id";
      $sql= $db->query($query);
      $row_Comment = $sql->fetch_array();
      $total_Comment= array_shift($row_Comment);
      $array= array(0,$total_Comment);
      $total_Comment= array_sum($array);
      if ($total_Comment >= 1) {
          echo $total_Comment;
        }
    }


      public function housecountPOSTS($categories)
    {
        $db =$this->database;
        $sql= $db->query("SELECT COUNT(*) FROM house WHERE categories_house ='$categories' ");
        $row_post = $sql->fetch_array();
        $total_post= array_shift($row_post);
        $array= array(0,$total_post);
        $total_posts= array_sum($array);
        echo $total_posts;
    }

      public function housecountAgentPOSTS($categories,$id)
    {
        $db =$this->database;
        $sql= $db->query("SELECT COUNT(*) FROM house WHERE categories_house ='$categories' AND user_id3=$id");
        $row_post = $sql->fetch_array();
        $total_post= array_shift($row_post);
        $array= array(0,$total_post);
        $total_posts= array_sum($array);
        echo $total_posts;
    }


    public function buychangesColor($variable){

    switch ($variable) {

        case $variable == 'sold' :
            # code...
            return '<span class="bg-danger p-1 text-light require" > '.$variable.' </span> ';
            break;

        case $variable == 'rent' :
            # code...
            return '<span class="bg-success p-1 text-light require" >For '.$variable.' </span> ';
            break;

        case $variable == 'sale' :
            # code...
            return '<span class="bg-success p-1 text-light require" >For '.$variable.' </span> ';
            break;
            
         default:
            # code...
            echo '';
            break;
        }
    }

    public function banner($variable){

        $banner = $variable;
        switch ($banner) {
            case $banner == 'new':
                # code...
                echo '<img class="discount"  src="'.BASE_URL_LINK.'image/img/banner/new.png" >';
                break;
            case $banner == 'great_deal':
                # code...
                echo '<img class="discount" src="'.BASE_URL_LINK.'image/img/banner/great-deal.png">';
                break;
            case $banner == 'new_arrival':
                # code...
                echo '<img class="discount"  src="'.BASE_URL_LINK.'image/img/banner/new-arrival.png">';
                break;
            case $banner == 'vegetables':
                # code...
                echo '<img class="discount" src="'.BASE_URL_LINK.'image/img/banner/new-arrival5.png">';
                break;
            case $banner == 'macedone':
                # code...
                echo '<img class="discount" src="'.BASE_URL_LINK.'image/img/banner/new-arrival5.png">';
                break;
             default:
                # code...
                echo '';
                break;
        }
          
    }

    public function categoriesBanner($categories){ ?>
        
        <div class="single-property-item" style="margin-bottom: 0px;">
            <span class="banner" style="margin-left: -10px;"> <img src="<?php echo BASE_URL_LINK.'image/img/banner/discount.png' ;?>" width="80px"> </span>
            <!-- categories of house banner  -->

    <?php  switch ($categories) { 
            case $categories == 'House_For_sale':
                # code...
                echo '<img src="'.BASE_URL_LINK.'image/img/banner/banners1.png" width="200px">
                      <img style="margin-top:15px;margin-right:25px;" src="'.BASE_URL_LINK.'image/img/banner/weekPrice.png" width="200px">
                    ';
                break;
            case $categories == 'House_For_rent':
                # code...
                echo '<img src="'.BASE_URL_LINK.'image/img/banner/photo1.png" width="200px">
                      <img style="margin-top:15px;margin-right:25px;" src="'.BASE_URL_LINK.'image/img/banner/weekPrice.png" width="200px">
                    ';
                break;
            case $categories == 'Land_For_sale':
                # code... 
                echo '<img src="'.BASE_URL_LINK.'image/img/banner/photo2.png" width="200px">
                      <img style="margin-top:15px;margin-right:25px;" src="'.BASE_URL_LINK.'image/img/banner/weekPrice.png" width="200px">
                    ';
                break;
            case $categories == 'Apartment_For_sale':
                # code...
                echo '<img src="'.BASE_URL_LINK.'image/img/banner/photo3.jpg" width="200px">
                      <img style="margin-top:15px;margin-right:25px;" src="'.BASE_URL_LINK.'image/img/banner/weekPrice.png" width="200px">
                    ';
                break;
            case $categories == 'Apartment_For_rent':
                # code...
                echo '<img src="'.BASE_URL_LINK.'image/img/banner/photo4.jpg" width="200px">
                      <img style="margin-top:15px;margin-right:25px;" src="'.BASE_URL_LINK.'image/img/banner/weekPrice.png" width="200px">
                    ';
                break;
            case $categories == 'Offices_stores':
                # code...
                echo '<img src="'.BASE_URL_LINK.'image/img/banner/photo4.jpg" width="200px">
                      <img style="margin-top:15px;margin-right:25px;" src="'.BASE_URL_LINK.'image/img/banner/weekPrice.png" width="200px">
                    ';
                break;
            
        } ?>
        </div>
    <?php
    }

    public function edit_delete_house($user_id,$userhouse_post,$house_id){
        
        if($user_id == $userhouse_post){ 
            $mysqli= $this->database;
            $query= $mysqli->query("SELECT * FROM house WHERE house_id = $house_id and user_id3 = $userhouse_post");
            $house= $query->fetch_array();
            ?>

            <ul class="list-inline ml-2  float-right" style="list-style-type: none;">  

                    <li  class=" list-inline-item">
                        <ul class="showcartButt" style="list-style-type: none; margin:0px;" >
                            <li>
                                <a href="javascript:void(0)" class="more"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                <ul style="list-style-type: none; margin:0px; margin:0px;width:250px;text-align:center;" >
                                    <li style="list-style-type: none; margin:0px;"> 
                                    <label class="deleteHouse"  data-house="<?php echo $house["house_id"];?>"  data-user="<?php echo $house["user_id3"];?>">Delete </label>
                                    </li>

                                    <li style="list-style-type: none; margin:0px;"> 
                                    <label for="">
                                    <div class="form-row">
                                        <div class="col">
                                                Banner
                                                <div class="input-group">
                                                      <select class="form-control" name="banner" id="banner<?php echo $house["house_id"];?>">
                                                        <option value="<?php echo $house['banner']; ?>" selected><?php echo $house['banner']; ?></option>
                                                        <option value="new">New</option>
                                                        <option value="new_arrival">New arrival</option>
                                                        <option value="great_deal">Great deal</option>
                                                        <option value="empty">empty</option>
                                                      </select>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" style="padding: 0px 10px;" aria-label="Username" aria-describedby="basic-addon1" >banner</span>
                                                    </div>
                                                </div> <!-- input-group -->
                                        </div>
                                    </div>
                                    </label>
                                    </li>

                                  <li style="list-style-type: none; margin:0px;"> 
                                    <label for="">
                                    <div class="form-row">
                                        <div class="col">
                                                Sale
                                                <div class="input-group">
                                                      <select class="form-control" name="available" id="available<?php echo $house["house_id"];?>">
                                                      <?php if ($house['buy'] == 'sold') { ?>
                                                        <option value="sold" selected>sold</option>
                                                        <option value="rent">rent</option>
                                                        <option value="sale">sale</option>
                                                      <?php }else { ?>
                                                        <option value="rent">rent</option>
                                                        <option value="sale">sale</option>
                                                      <?php } ?>
                                                      </select>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" style="padding: 0px 10px;" aria-label="Username" aria-describedby="basic-addon1" >Tpye</span>
                                                    </div>
                                                </div> <!-- input-group -->
                                            </label>
                                        </div>
                                        <div class="col">
                                            discount %
                                            <div class="input-group">
                                                <input  type="number" class="form-control form-control-sm" name="discount_change" id="discount_change<?php echo $house["house_id"];?>" value="<?php echo $house["discount"];?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" style="padding: 0px 10px;" aria-label="Username" aria-describedby="basic-addon1" >%</span>
                                                </div>
                                            </div> <!-- input-group -->
                                        </div>
                                    </div>
                                    </label>
                                    </li>
                                    
                                    <li style="list-style-type: none;"> 
                                    <label for="discount">
                                    <div class="form-row">
                                        <div class="col">
                                            discount price
                                            <div class="input-group">
                                                <input  type="number" class="form-control form-control-sm" name="discount_price" id="discount_price<?php echo $house["house_id"];?>" value="<?php echo $house["price_discount"];?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" style="padding: 0px 10px;" aria-label="Username" aria-describedby="basic-addon1">Frw</span>
                                                </div>
                                            </div> <!-- input-group -->
                                        </div>
                                        <div class="col">
                                                Price
                                            <div class="col">
                                                </div>
                                            <div class="input-group">
                                                <input  type="number" class="form-control form-control-sm" name="price" id="price<?php echo $house["house_id"];?>" value="<?php echo $house["price"];?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" style="padding: 0px 10px;"
                                                        aria-label="Username" aria-describedby="basic-addon1" >Frw</span>
                                                </div>
                                            </div> <!-- input-group -->
                                        </div>
                                    </div>
                                    </label>
                                    </li>

                                    <li style="list-style-type: none;"> 
                                    <label for="discount" class="update-house-btn" data-house="<?php echo $house["house_id"];?>" data-user="<?php echo $house["user_id3"];?>">submit</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
            </ul>
        <?php } ?>
<?php 
    }

      public function top_properties_carousel()
    {
        $mysqli= $this->database;
        $query= $mysqli->query("SELECT * FROM house H
            Left JOIN provinces P ON H. province = P. provincecode
            Left JOIN districts M ON H. districts = M. districtcode
            Left JOIN sectors T ON H. sector = T. sectorcode
            Left JOIN cells C ON H. cell = C. codecell
            Left JOIN vilages V ON H. village = V. CodeVillage 
            Left JOIN users U ON H. user_id3 = U. user_id 
        WHERE H. approval = 'on' ORDER BY rand() Desc Limit 0,2");

        while ($house= $query->fetch_array()) { ?>

        <div class="single-top-properties" >
            <div class="row">
                <div class="col-lg-6">
                    <div class="stp-pic">
                <?php    $file = $house['photo']."=".$house['other_photo'];
                         $expode = explode("=",$file);  ?>
                        <img src="<?php echo BASE_URL.'uploads/house/'.$expode[0]; ?>" >
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="stp-text">
                        <div class="s-text" <?php  echo (substr($house['categories_house'],-4) == 'sale')? 'style="background: #da3141;"':'' ;?> > <?php 
                            $subect = $house['categories_house'];
                            $replace = " ";
                            $searching = "_";
                            echo str_replace($searching,$replace, $subect);
                            ?>
                        </div>
                        <span class="h6 text-success text-uppercase ml-2"><?php echo $house['equipment']; ?></span>

                        <!-- <span class="s-text text-uppercase ml-2"> For < ?php echo $house['buy']; ?></span> -->
                        <h2><a href="javascript:void(0)" id="house-readmore" data-house="<?php echo $house['house_id']; ?>" ><?php echo $house['name_of_house']; ?></a></h2>
                        
                        <div class="room-price"> 
                            <span>From: </span>
                            <h4><?php echo $this->nice_number(number_format($house['price'])); ?> Frw
                                     <?php  echo (substr($house['categories_house'],-4) == 'sale')? '':'/month';?>
                            </h4>
                            <?php if($house['price_discount'] != 0){ ?>
                            <span class="text-danger price-change ml-2" style="text-decoration: line-through;">
                            <?php echo number_format($house['price_discount']); ?> Frw </span> <?php } ?>
                        </div>

                        <div class="properties-location"><i class="icon_pin"></i> 
                            <a href="javascript:void(0)" id="house-readmore" data-house="<?php echo $house['house_id']; ?>" >
                            <!-- < ?php echo $house['provincename']; ?> /  -->
                            <?php echo $house['namedistrict']; ?> District/ 
                            <?php echo $house['namesector']; ?> Sector
                            <!-- < ?php echo $house['nameCell']; ?> Cell  -->
                            </a>
                        </div>
                        <p>  <?php echo $house['text']; ?></p>
                        <ul class="room-features">
                            <li>
                                <i class="fa fa-bed"></i>
                                <p><?php echo $house['bedroom']; ?>  Bed Room</p>
                            </li>
                            <li>
                                <i class="fa fa-bath"></i>
                                <p><?php echo $house['bathroom']; ?> Baths Room</p>
                            </li>
                            <li>
                                <i class="fa fa-car"></i>
                                <p><?php echo $house['car_in_garage']; ?> Garage</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<?php   } 
}

      public function houseReadmore($house_id)
    {
        $mysqli= $this->database;
        $query= $mysqli->query("SELECT * FROM users U Left JOIN house H ON H. user_id3 = u. user_id 
            Left JOIN provinces P ON H. province = P. provincecode
            Left JOIN districts M ON H. districts = M. districtcode
            Left JOIN sectors T ON H. sector = T. sectorcode
            Left JOIN cells C ON H. cell = C. codecell
            Left JOIN vilages V ON H. village = V. CodeVillage 
        WHERE H. house_id = '$house_id' ");
        $row= $query->fetch_array();
        return $row;
    }

     function PercentageDiscount($variable)
    {

    switch ($variable) {
        case $variable <= 10 :
            # code...
            return '<span class="bg-danger text-light percertage" > '.$variable.'% </span> ';
            break;
        case $variable <= 20 :
            # code...
            return '<span class="bg-danger text-light percertage" > '.$variable.'% </span> ';
            break;
        case $variable <= 30 :
            # code...
            return '<span class="bg-info text-light percertage" > '.$variable.'% </span> ';
            break;
        case $variable <= 35:
            # code...
            return '<span class="bg-warning text-light percertage" > '.$variable.'% </span> ';
            break;
        case $variable <= 40:
            # code...
            return '<span class="bg-info text-light percertage" > '.$variable.'% </span> ';
            break;
        case $variable <= 50:
            # code...
            return '<span class="bg-success text-light percertage" > '.$variable.'% </span> ';
            break;
        case $variable <= 60:
            # code...
            return '<span class="bg-success text-light percertage" > '.$variable.'% </span> ';
            break;
        case $variable <= 75:
            # code...
            return '<span class="bg-success text-light percertage" > '.$variable.'% </span> ';
            break;
        default:
            # code...
            return '<span class="bg-success text-light percertage" > '.$variable.'% </span> ';
            break;
        }

    } 
    
    public function house_getPopupTweet($user_id,$house_id,$house_user_id)
    {
        $mysqli= $this->database;
        $result= $mysqli->query("SELECT * FROM users U Left JOIN house H ON H. user_id3 = u. user_id 
        Left JOIN provinces P ON H. province = P. provincecode
            Left JOIN districts M ON H. districts = M. districtcode
            Left JOIN sectors T ON H. sector = T. sectorcode
            Left JOIN cells C ON H. cell = C. codecell
            Left JOIN vilages V ON H. village = V. CodeVillage 
         WHERE H. house_id = $house_id AND H. user_id3 = $house_user_id ");
        // var_dump('ERROR: Could not able to execute'. $query.mysqli_error($mysqli));
        while ($row= $result->fetch_array()) {
            # code...
            return $row;
        }
    }


    public function deleteHouse($house_id)
    {
        $mysqli= $this->database;
        $query="DELETE FROM house WHERE house_id = '{$house_id}' ";

        $query1="SELECT * FROM house WHERE house_id = $house_id ";

        $result= $mysqli->query($query1);
        $rows= $result->fetch_assoc();

        if(!empty($rows['photo'])){
            $photo=$rows['photo'].'='.$rows['other_photo'];
            $expodefile = explode("=",$photo);
            $fileActualExt= array();
            for ($i=0; $i < count($expodefile); ++$i) { 
                $fileActualExt[]= strtolower(substr($expodefile[$i],-3));
            }
            $allower_ext = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf' , 'doc' , 'ppt'); // valid extensions
            if (array_diff($fileActualExt,$allower_ext) == false) {
                $expode = explode("=",$photo);
                $uploadDir = $_SERVER['DOCUMENT_ROOT'].'/twitter_ex/uploads/house/';
                for ($i=0; $i < count($expode); ++$i) { 
                      unlink($uploadDir.$expode[$i]);
                }
            }else if (array_diff($fileActualExt,$allower_ext)[0] == 'mp4') {
                $uploadDir = $_SERVER['DOCUMENT_ROOT'].'/twitter_ex/uploads/house/';
                      unlink($uploadDir.$photo);
            }else if (array_diff($fileActualExt,$allower_ext)[0] == 'mp3') {
                $uploadDir = $_SERVER['DOCUMENT_ROOT'].'/twitter_ex/uploads/house/';
                      unlink($uploadDir.$photo);
            }
        }

        $query= $mysqli->query($query);
        // var_dump("ERROR: Could not able to execute $query.".mysqli_error($mysqli));

        if($query){
                exit('<div class="alert alert-success alert-dismissible fade show text-center">
                    <button class="close" data-dismiss="alert" type="button">
                        <span>&times;</span>
                    </button>
                    <strong>SUCCESS DELETE</strong> </div>');
            }else{
                exit('<div class="alert alert-danger alert-dismissible fade show text-center">
                    <button class="close" data-dismiss="alert" type="button">
                        <span>&times;</span>
                    </button>
                    <strong>Fail to delete !!!</strong>
                </div>');
        }
    }

    public function update_house($banner,$available,$discount_change,$discount_price,$price,$house_id)
    {
        $mysqli= $this->database;
        $query= "UPDATE house SET banner= '$banner', buy = '$available', discount = $discount_change ,price_discount = $discount_price, price = $price WHERE house_id= $house_id ";
        $mysqli->query($query);

        if($query){
                exit('<div class="alert alert-success alert-dismissible fade show text-center" style="font-size:12px;padding:2px;">
                    <button class="close" data-dismiss="alert" type="button" style="top:-6px;">
                        <span>&times;</span>
                    </button>
                    <strong>SUCCESS</strong> </div>');
            }else{
                exit('<div class="alert alert-danger alert-dismissible fade show text-center" style="font-size:12px;padding:2px;">
                    <button class="close" data-dismiss="alert" type="button"  style="top:-6px;">
                        <span>&times;</span>
                    </button>
                    <strong>Fail to Edit !!!</strong>
                </div>');
        }
    }

    public function Message_activities(){ ?>

                <table class="table  table-responsive-sm table_adminLA3 table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>lastname</th>
                            <th>email/phone</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>

                <?php 
                
                $increment= 1;
                $mysqli = $this->database;
                $sql=  $mysqli->query("SELECT * FROM business_message ORDER BY datetime DESC");
                if ($sql->num_rows > 0) {

                    while ($row = $sql->fetch_array()) {
                            # code...
                       
                        ?>
                            <tr id="name_msg<?php echo $row['message_id']; ?>">

                                <td><?php echo  $increment++ ; ?></td>
                                <td><?php echo $row['name_client']; ?></td>
                                <td>
                                    <?php echo $row['email_client']; ?> |
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> 
                                    <div> <?php echo $row['phone_client']; ?></div>
                                </td>
                                <td><div><?php echo $this->timeAgo($row['datetime']); ?></div>
                                    <input type="button" onclick="business_msg(<?php echo $row['message_id'];?>, 'business_message_view')" value="View" class="btn">
                                    <input type="button" onclick="deleteRowHouse(<?php echo $row['message_id'];?>, 'business_message_delete')" value="Delete" class="btn btn-danger">
                                </td>
                            </tr>
                <?php
                      } }else{
                        # code...  ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>No record</td>
                            <td></td>
                        </tr>
                        
                <?php } ?>
                   
                </tbody>
            </table>
    
 <?php   }

    public function Message_sentToAgentAdmin(){ ?>

                <table class="table  table-responsive-sm table_adminLA5 table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>House</th>
                            <th>name</th>
                            <th>email/phone</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>

                <?php 
                
                $increment= 1;
                $mysqli = $this->database;
                $sql=  $mysqli->query("SELECT * FROM agent_message  A 
                LEFT JOIN house H ON A. house_id_msg = H. house_id ORDER BY datetime DESC");
                if ($sql->num_rows > 0) {

                    while ($row = $sql->fetch_array()) {
                            # code...
                       
                        ?>
                            <tr id="agent_msg<?php echo $row['message_id']; ?>">

                                <td><?php echo  $increment++ ; ?></td>
                                <td class="text-center">
                                    <div class="avatar">
                                        <?php
                                        $file = $row['photo'];
                                        $expode = explode("=",$file);  ?>
                                        <img class="img-avatar" width="80px" 
                                            src="<?php echo BASE_URL.'uploads/house/'.$expode[0]; ?>" alt="">
                                    </div>
                                </td>
                                <td><?php echo $row['name_client']; ?></td>
                                <td>
                                    <?php echo $row['email_client']; ?> |
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> 
                                    <div> <?php echo $row['phone_client']; ?></div>
                                </td>
                                <td><div><?php echo $this->timeAgo($row['datetime']); ?></div>
                                    <input type="button" onclick="business_msg(<?php echo $row['message_id'];?>, 'agent_message_view')" value="View" class="btn">
                                    <input type="button" onclick="deleteRowHouse(<?php echo $row['message_id'];?>, 'agent_message_delete')" value="Delete" class="btn btn-danger">
                                </td>
                            </tr>
                <?php
                      } }else{
                        # code...  ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>No record</td>
                            <td></td>
                        </tr>
                        
                <?php } ?>
                   
                </tbody>
            </table>
    
 <?php   }

    public function client_request_anyHouse(){ ?>

                <table class="table  table-responsive-sm table_adminLA2 table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email/phone</th>
                            <th>Property Type</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>

                <?php 
                
                $increment= 1;
                $mysqli = $this->database;
                $sql=  $mysqli->query("SELECT * FROM business_request_home ORDER BY datetime DESC");
               
                if ($sql->num_rows > 0) {

                    while ($row = $sql->fetch_array()) {
                            # code...
                        ?>
                            <tr id="name_rq<?php echo $row['business_request_id']; ?>">

                                <td><?php echo  $increment++ ; ?></td>
                                <td><?php echo $row['name_client']; ?></td>
                                <td>
                                    <?php echo $row['email_client']; ?> |
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> 
                                    <div> <?php echo $row['phone']; ?></div>
                                </td>
                                <td>
                                    <div> <?php echo $row['property_type']; ?></div>
                                    <?php echo $row['request_type']; ?> |
                                    <div> <?php echo $row['equipment']; ?></div>
                                </td>
                                <td><div><?php echo $this->timeAgo($row['datetime']); ?></div>
                                    <input type="button" onclick="business_msg(<?php echo $row['business_request_id'];?>, 'business_request_home')" value="View" class="btn">
                                    <input type="button" onclick="deleteRowHouse(<?php echo $row['business_request_id'];?>,'business_request_delete')" value="Delete" class="btn btn-danger">
                                </td>
                            </tr>
                <?php
                    } }else{

                        # code...  ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>No record</td>
                            <td></td>
                        </tr>
                <?php } ?>

                </tbody>
            </table>
    
 <?php   }


    public function newsletter_subscribe(){ ?>

                <table class="table  table-responsive-sm table_adminLA4 table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>

                <?php 
                
                $increment= 1;
                $mysqli = $this->database;
                $sql=  $mysqli->query("SELECT * FROM client_subscribe_email ORDER BY datetime DESC");
               
                if ($sql->num_rows > 0) {

                    while ($row = $sql->fetch_array()) {
                            # code...
                        ?>
                            <tr id="name_subscribe<?php echo $row['client_subscribe_id']; ?>">

                                <td><?php echo  $increment++ ; ?></td>
                                <td>
                                    <?php echo $row['email_subscribe']; ?> |
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> 
                                </td>
                                <td><div><?php echo $this->timeAgo($row['datetime']); ?></div>
                                    <input type="button" onclick="deleteRowHouse(<?php echo $row['client_subscribe_id'];?>,'client_subscribe_delete')" value="Delete" class="btn btn-danger">
                                </td>
                            </tr>
                <?php
                    } }else{

                        # code...  ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>No record</td>
                            <td></td>
                        </tr>
                <?php } ?>

                </tbody>
            </table>
    
 <?php   }

    public function profile_agent_house($categories_house,$pages,$user_id){ ?>

<?php switch ($categories_house) {
                    case 'House_For_sale':
                        # code... ?>

        <div class="col-md-4 col-lg-4">
        <div class="single_property">
            <div class="property_thumb">
                <div class="property_tag">
                        For Sale
                </div>
                <img src="<?php echo BASE_URL; ?>uploads/house/2020_38prop.jpg" alt="">
            </div>
            <div class="property_content">
                <div class="main_pro">
                        <h3><a href="#">Apartment in Palace</a></h3>
                        <div class="mark_pro">
                            <img src="<?php echo BASE_URL; ?>assets/icon/svg_icon/location.svg" alt="">
                            <span>Popular Properties</span>
                        </div>
                        <span class="amount">From $20k</span>
                </div>
            </div>
            <div class="footer_pro">
                <ul>
                    <li>
                        <div class="single_info_doc">
                            <img src="<?php echo BASE_URL; ?>assets/icon/svg_icon/bed.svg" alt="">
                            <span>2 Bed</span>
                        </div>
                    </li>
                    <li>
                        <div class="single_info_doc">
                            <img src="<?php echo BASE_URL; ?>assets/icon/svg_icon/bath.svg" alt="">
                            <span>2 Bath</span>
                        </div>
                    </li>
                    <li>
                        <div class="single_info_doc">
                        <i class="fa fa-car"></i>
                            <!-- <img src="< ?php echo BASE_URL; ?>assets/icon/svg_icon/car.png" alt=""> -->
                            <span>3 car</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- single_property -->
    </div>
    <!-- col -->

    <?php break; 
            
            
            default:
                # code...  ?>
                    <p>No record</p>
        <?php break;

         }
        //  switch end
    }

    public function edit_delete_Adminproperty($variable){ ?>

            <table class="table table-responsive-sm table_adminLA1 table-hover ">
                <thead class="main-active">
                    <tr>
                        <th>N0</th>
                        <th class="text-center">
                            <i class="icon-people"></i>
                        </th>
                        <th>PRICE/PROPERTY</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>

                <?php switch ($variable) {
                    case $variable :
                        # code... ?>
                        <?php 
                                $increment= 1;
                                $mysqli= $this->database;
                                $result= $mysqli->query("SELECT * FROM house WHERE categories_house= '$variable' ");
                            if ($result->num_rows > 0) {
                                while($row= $result->fetch_array()){ ?>
                            <tr id="house_n<?php echo $row['house_id']; ?>">
                                <td><?php echo  $increment++ ; ?></td>
                                <td class="text-center">
                                    <div class="avatar">
                                        <?php
                                        $file = $row['photo'];
                                        $expode = explode("=",$file);  ?>
                                        <img class="img-avatar" width="80px" 
                                            src="<?php echo BASE_URL.'uploads/house/'.$expode[0]; ?>" alt="">
                                    </div>
                                </td>
                                <td>
                                    <div><?php echo number_format($row['price']); ?> Frw 
                                        </div>
                                        <div> <?php echo $this->buychangesColor($row['buy']); ?></div>
                                        <?php if($row['price_discount'] != 0){ ?>
                                        <div class="text-danger price-change" style="text-decoration: line-through;">
                                            <?php echo number_format($row['price_discount']); ?> Frw 
                                        </div> 
                                    <?php } ?>
                                    <?php 
                                        $subect = $row['categories_house'];
                                        $replace = " ";
                                        $searching = "_";
                                        echo str_replace($searching,$replace, $subect);
                                    ?>
                                    <div class="text-danger price-change"><?php echo $row['equipment']; ?></div>
                                   <div>Approval: <span id="approvalHouse<?php echo $row["house_id"] ;?>"><?php echo $row["approval"];?></span></div> 
                                </td>
                                <td>
                                    <input type="button" onclick="viewOReditHouses(<?php echo $row['house_id'];?>, 'EditHouseAdmin')" value="Edit" class="btn btn-primary">
                                    <input type="button" id="house-readmore" data-house="<?php echo $row['house_id']; ?>" value="View" class="btn">
                                    <input type="button" onclick="deleteRow(<?php echo $row['house_id'];?>,'deleteRowHouse')" value="Delete" class="btn btn-danger">
                                    <input type="button" onclick="approvedHouses(<?php echo $row['house_id'];?>, 'off')" value="off" class="btn btn-warning btn-sm ">
                                    <input type="button" onclick="approvedHouses(<?php echo $row['house_id'];?>, 'on')" value="on" class="btn btn-success btn-sm">
                                </td>
                            </tr>
                    <?php 
                         } }else{ 
                           # code...  ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>No record</td>
                                <td></td>
                            </tr>
                        <?php    }
                    break;
                } ?>
                        </tbody>
                    </table>
    
 <?php   }

    public function edit_delete_Agentproperty($variable,$id){ ?>

            <table class="table table-responsive-sm table_adminLA table-hover ">
                <thead class="main-active">
                    <tr>
                        <th>N0</th>
                        <th class="text-center">
                            <i class="icon-people"></i>
                        </th>
                        <th>PRICE/PROPERTY</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>

                <?php switch ($variable) {
                    case $variable :
                        # code... ?>
                        <?php 
                                $increment= 1;
                                $mysqli= $this->database;
                                $result= $mysqli->query("SELECT * FROM house WHERE categories_house= '$variable' AND user_id3=$id ");
                            if ($result->num_rows > 0) {
                                while($row= $result->fetch_array()){ ?>
                           <tr id="house_n<?php echo $row['house_id']; ?>">
                                <td><?php echo  $increment++ ; ?></td>
                                <td class="text-center">
                                    <div class="avatar">
                                        <?php
                                        $file = $row['photo'];
                                        $expode = explode("=",$file);  ?>
                                        <img class="img-avatar" width="80px" 
                                            src="<?php echo BASE_URL.'uploads/house/'.$expode[0]; ?>" alt="">
                                    </div>
                                </td>
                                <td>
                                    <div><?php echo number_format($row['price']); ?> Frw 
                                        </div>
                                        <div> <?php echo $this->buychangesColor($row['buy']); ?></div>
                                        <?php if($row['price_discount'] != 0){ ?>
                                        <div class="text-danger price-change" style="text-decoration: line-through;">
                                            <?php echo number_format($row['price_discount']); ?> Frw 
                                        </div> 
                                    <?php } ?>
                                    <?php 
                                        $subect = $row['categories_house'];
                                        $replace = " ";
                                        $searching = "_";
                                        echo str_replace($searching,$replace, $subect);
                                    ?>
                                    <div class="text-danger price-change"><?php echo $row['equipment']; ?></div>
                                </td>
                                <td>
                                    <input type="button" onclick="viewOReditHouses(<?php echo $row['house_id'];?>, 'EditHouseAdmin')" value="Edit" class="btn btn-primary">
                                    <input type="button" id="house-readmore" data-house="<?php echo $row['house_id']; ?>" value="View" class="btn">
                                    <input type="button" onclick="deleteRow(<?php echo $row['house_id'];?>,'deleteRowHouse')" value="Delete" class="btn btn-danger">
                                </td>
                            </tr>
                    <?php 
                         } }else{ 
                           # code...  ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>No record</td>
                                <td></td>
                            </tr>
                        <?php    }
                    break;
                } ?>
                        </tbody>
                    </table>
    
 <?php   }

        public function agent_profile_home(){ ?>

        <div class="row">
            <div class="agent-carousel owl-carousel">
            <?php 
                $mysqli= $this->database;
                $result =$mysqli->query("SELECT * FROM users");
                
                while ($user= $result->fetch_array()) { ?>

            <div class="col-lg-3 single-agent">

            <!-- Profile Image -->
            <div class="card bg-light sa-pic">
                <div class="card-header text-muted border-bottom-0">
                  Real Estate Agent
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-7">
                    
                      <h2 class="lead"><b><?php echo $user['firstname']." ".$user['lastname']; ?></b></h2>
                      <!-- <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p> -->
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fa fa-lg fa-building"></i></span> Address: <?php echo $user['location']; ?><div>Kigali, Rwanda</div></li>
                        <li class="small"><span class="fa-li"><i class="fa fa-lg fa-phone"></i></span> Phone : <?php echo $user['telephone']; ?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center single-agent-profile">
                        <div class="sa-picz">
                            <?php if (!empty($user['profile_img'])) { ?>
                                <img src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$user['profile_img'] ;?>" alt="" class="img-circle img-fluid">
                            <?php  }else{ ?>
                                <img src="<?php echo BASE_URL_LINK.NO_PROFILE_IMAGE;?>" alt="User Image">
                            <?php } ?>
                            <!-- <img src="< ?php echo BASE_URL;?>assets/image/img/agent/agent-1.jpg" alt="" class="img-circle img-fluid"> -->
                            <div class="hover-social">
                                <a href="https://twitter.com/<?php echo $user['twitter']; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/<?php echo $user['facebook']; ?>" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.instagram.com/<?php echo $user['instagram']; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i> Message
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
            </div>
            </div>

        <?php  } ?>

            </div>
         </div>


    <?php  }


        public function request_property(){ ?>

        <div class="col-md-3 mb-3">
            <div class="card card-primary mb-3 ">
                        <div class="card-header">
                        PROPERTY REQUEST
                        </div>
                        <!-- /.card-header -->
                <div class="card-body message-color" style="padding-top: 2px;padding-bottom: 2px;">
                    <div class="row">

            <?php $mysqli= $this->database;
                  $result =$mysqli->query("SELECT * FROM business_request_home ORDER BY datetime DESC");
                
                    while ($user= $result->fetch_array()) { ?>
                        
                                <div class="col-12 px-0 border-bottom">
                                <div class="user-block mb-2 jobHover more"  href="javascript:void()" onclick="business_msg(<?php echo $user['business_request_id'];?>, 'business_request_home')" >
                                    <div class="user-jobImgBorder">
                                            <div class="user-jobImg">
                                                <img src="<?php echo BASE_URL;?>assets/image/users_profile_cover/empty-profile.png" alt="User Image">
                                            </div>
                                    </div>
                                    <span class="username">
                                    <!-- Job Title:  -->
                                        <a style="padding-right:3px;" href="#"><?php echo $user['name_client'];?></a> 
                                    </span>
                                    <div class="description"><span class="btn-sm btn-success"><?php echo $user['request_type'];?></span> <span class="btn-sm btn-primary"> <?php echo $user['equipment'];?></span></div>
                                    <div class="description"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $user['location'];?></div>
                                    <div class="description"><?php echo $user['bedroom']." ";?><i class="fa fa-bed" aria-hidden="true"></i>  <?php echo $user['bathroom']." ";?><i class="fa fa-bath" aria-hidden="true"></i>
                                        | <?php echo number_format($user['price']);?> <?php echo $user['currency'];?>
                                    </div>
                                    <div class="description">Publish <?php echo $this->timeAgo($user['datetime']);?></div>
                                </div>
                                </div>
                                <hr>
        <?php  } ?>
                    </div><!-- /.row -->
                </div> <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="http://localhost:80/Blog_nyarwanda_CMS/jobs0.php">View all Jobs</a>
                </div> <!-- /.card-footer -->
            </div>

        </div>
        <!-- /.col -->

    <?php  }

}

$house = new House();

/*
===========================================
         Notice
===========================================
# You are free to run the software as you wish
# You are free to help yourself study the source code and change to do what you wish
# You are free to help your neighbor copy and distribute the software
# You are free to help community create and distribute modified version as you wish

We promote Open Source Software by educating developers (Beginners)
use PHP Version 5.6.1 > 7.3.20  
===========================================
         For more information contact
=========================================== 
Kigali - Rwanda
Tel : (250)787384312 / (250)787384312
E-mail : shemafaysal@gmail.com

*/
?>