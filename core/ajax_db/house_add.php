<?php
include('../init.php');
// $users->preventUsersAccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),realpath($_SERVER['SCRIPT_FILENAME']));

if(isset($_POST['price_range'])){
    $user_id= $_POST['user_id'];
    $pages = $_POST['pages'];
    // $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    // $vowels = array("[", "]", "$");
    // $priceRange= str_replace($vowels,"", $_POST['price_range']);
    // var_dump(explode('-',$priceRange));
    if($pages === 0 || $pages < 1){
        $showpages = 0 ;
    }else{
        $showpages = ($pages*10)-10;
    }
    
    //Include database configuration file
    $priceRange= $_POST['price_range'];
    //set conditions for filter by price range
    $whereSQL = $orderSQL = '';
    if(!empty($priceRange)){
        $vowels = array("[", "]",",","Frw");
        // $vowels = array("[", "]","Frw");
        $priceRangeArr_= str_replace($vowels,"", $priceRange);
        $priceRangeArr= explode('-',$priceRangeArr_);
        $whereSQL = "WHERE price BETWEEN '".$priceRangeArr[0]."' AND '".$priceRangeArr[1]."'";
        $orderSQL = " ORDER BY price ASC ,rand() Desc Limit $showpages,10";
    }else{
        $orderSQL = " ORDER BY created DESC ,rand() Desc Limit $showpages,10";
    }
    
    //get product rows
    $query = $db->query("SELECT * FROM house H
            Left JOIN provinces P ON H. province = P. provincecode
            Left JOIN districts M ON H. districts = M. districtcode
            Left JOIN sectors T ON H. sector = T. sectorcode
            Left JOIN cells C ON H. cell = C. codecell
            Left JOIN vilages V ON H. village = V. CodeVillage $whereSQL $orderSQL");
    
    if($query->num_rows > 0){
        $priceRangeArr_= number_format($priceRangeArr[0]);
        $priceRangeArrs= number_format($priceRangeArr[1]);
        echo "<h4 style='padding: 0px 10px;text-align:center;'>FROM <span style='color:black;'> $priceRangeArr_ Frw </span> TO <span style='color:black;'> $priceRangeArrs Frw</span> </h4> "; 
        ?>
        <div class="timeline">

        <?php while($row= $query->fetch_array()) { ?>
                     
        <div class="single-property-item ">

            <?php echo $house->buychangesColor($row['buy']); ?>
            <!-- <i class="bg-success text-light require" >Sale </i> -->
            <i class="fa fa-user"></i>

            <?php if($row['discount'] != 0){ ?>
            <?php echo $house->PercentageDiscount($row['discount']); ?>
            <?php }else { echo ''; ?>
                <!-- <span class="bg-info text-light" > 0% </span>  -->
            <?php } ?>

            <div class="row timeline-item">

                <div class="col-md-4 px-0">
                    <div class="property-pic">
                        <?php echo $house->banner($row['banner']) ;
                        $file = $row['photo']."=".$row['other_photo'];
                                        $expode = explode("=",$file);  ?>
                        <img class="propertyPicture" src="<?php echo BASE_URL.'uploads/house/'.$expode[0]; ?>" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                <?php if ($row['buy'] == 'sold') { ?>
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
                        <?php echo $house->edit_delete_house($user_id,$row['user_id3'],$row['house_id']); ?>
                        
                        <h5 class="r-title" style="display: inline-block;">
                        <i class="fa fa-home" aria-hidden="true"></i>
                            <?php 
                            $subect = $row['categories_house'];
                            $replace = " ";
                            $searching = "_";
                            echo str_replace($searching,$replace, $subect);
                            ?>
                        </h5> |
                        
                        <span class="h6 text-success text-uppercase ml-2"> <?php echo $row['equipment']; ?> </span>
                        
                        <div> From:<span class="room-price price-change"> <?php echo number_format($row['price']); ?> Frw
                            <?php  echo (substr($row['categories_house'],-4) == 'sale')? '':'/month';?>
                            </span>
                            <?php if($row['price_discount'] != 0){ ?>
                                
                            <span class="text-danger price-change" style="text-decoration: line-through;">
                            <?php echo number_format($row['price_discount']); ?> Frw </span> <?php } ?>
                        </div>
                        
                        <h5 class="r-title pt-3">
                            <?php $titlex= $row['name_of_house'];
                            if (strlen($titlex) > 25) {
                            echo $titlex = substr($titlex,0,25).'..';
                            }else{ 
                            echo $titlex;
                            } ?>
                        </h5>

                        <a class="properties-location"  href="javascript:void(0)" id="house-readmore" data-house="<?php echo $row['house_id']; ?>" ><i class="icon_pin"></i>
                        <!-- < ?php echo $row['provincename']; ?> /  -->
                        <?php echo $row['namedistrict']; ?> District/ 
                        <?php echo $row['namesector']; ?> Sector
                        <!-- < ?php echo $row['nameCell']; ?> Cell  -->
                        </a>

                        <div style="margin-bottom:18px;font-size: 11px;">
                            <i class="fa fa-clock-o" style="color: #2cbdb8;margin-right: 4px;" aria-hidden="true"></i> Created on <?php echo $house->timeAgo($row['created_on3'])." By ".$row['authors']; ?>
                        </div>

                        <!-- <p>
                        < ?php 
                            $titlex= $row['text'];
                            if (strlen($titlex) > 20) {
                            echo $titlex = substr($titlex,0,87).'..
                            <a class="properties-location"  href="javascript:void(0)" id="house-readmore" data-house="'.$row['house_id'].'" >Read more</a>
                            ';
                            }else{ 
                            echo $titlex;
                            } ?>

                            </p> -->
                        <ul class="room-features">
                            <li>
                                <i class="fa fa-bed"></i>
                                <p><?php echo $row['bedroom']; ?>  Bed Room</p>
                            </li>
                            <li>
                                <i class="fa fa-bath"></i>
                                <p><?php echo $row['bathroom']; ?> Baths Bed</p>
                            </li>
                            <li>
                                <i class="fa fa-car"></i>
                                <p><?php echo $row['car_in_garage']; ?> Garage</p>
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
                                        <img src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png" alt="User Image">
                                    </div>
                                </div>
                                <span class="username tooltips">
                                    <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo">faysal shema</a>
                                </span>
                                <span class="description">Shared publicly - Sep 17, 2019</span>
                            </div>
                            <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i> Message
                            </a>
                            For Request this property
                        </div>
                        <div class="card-body pt-0">
                            <table class="table  table-responsive-sm table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>lastname</th>
                                        <th>email</th>
                                        <th>phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>fayzo</td>
                                        <td><i class="fa fa-envelope-o" aria-hidden="true"></i> </td>
                                        <td>+25097794388</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>fayzo</td>
                                        <td><i class="fa fa-envelope-o" aria-hidden="true"></i> </td>
                                        <td>+25097794388</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

                    <!-- END timeline item -->
                    <?php }
                    
                    $query1= $db->query("SELECT COUNT(*) FROM house $whereSQL $orderSQL ");
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

        <?php if($post_Perpage > 1){ ?>
         <nav>
             <ul class="pagination justify-content-center mt-3">
                 <?php if ($pages > 1) { ?>
                     <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="houseRange('<?php echo $priceRange; ?>',<?php echo $pages-1; ?>)">Previous</a></li>
                 <?php } ?>
                 <?php for ($i=1; $i <= $post_Perpage; $i++) { 
                         if ($i == $pages) { ?>
                      <li class="page-item active"><a href="javascript:void(0)"  class="page-link" onclick="houseRange('<?php echo $priceRange; ?>',<?php echo $i; ?>)" ><?php echo $i; ?> </a></li>
                      <?php }else{ ?>
                     <li class="page-item"><a href="javascript:void(0)"  class="page-link" onclick="houseRange('<?php echo $priceRange; ?>',<?php echo $i; ?>)" ><?php echo $i; ?> </a></li>
                 <?php } } ?>
                 <?php if ($pages+1 <= $post_Perpage) { ?>
                     <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="houseRange('<?php echo $priceRange; ?>',<?php echo $pages+1; ?>)">Next</a></li>
                 <?php } ?>
             </ul>
         </nav>
        <?php } 

    }else{
        $priceRangeArr_= number_format($priceRangeArr[0]);
        $priceRangeArrs= number_format($priceRangeArr[1]);
        echo "<h4 style='padding: 0px 10px;text-align:center;'>FROM <span style='color:black;'> $priceRangeArr_ Frw </span> TO <span style='color:black;'> $priceRangeArrs Frw</span> </h4> "; 
        echo 'House(s) not found';
        // echo 'Product(s) not found';
    }
}


?>