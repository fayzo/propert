<?php
include('../init.php');
// $users->preventUsersAccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),realpath($_SERVER['SCRIPT_FILENAME']));

if (isset($_REQUEST['sectorcode']) && !empty($_REQUEST['sectorcode'])) {

	$get_cell = mysqli_query($db,"SELECT * FROM  cells WHERE sectorcode ='".$_REQUEST['sectorcode']."'");

	echo "<select name=\"codecell\" id=\"codecell\" class=\"form-control\">" ;
	if(mysqli_fetch_array($get_cell)==0){
		echo "<option value=\"No Cell Available\">No Cell Available</option>";
	}else{
	
	    echo "<option value=\"\">------Select cell------</option>";
		while($row=mysqli_fetch_array($get_cell)){
			echo "<option value=\"".$row['codecell']."\">".$row['nameCell']."</option>";
		}
	}
	echo "</select><br>";

}


if (isset($_POST['sector']) && !empty($_POST['sector'])) {

	$pages= $_POST['pages'];
	$categories= $_POST['type_Property_select'];
	$user_id = $_POST['user_id'];

	if($pages === 0 || $pages < 1){
		$showpages = 0 ;
	}else{
		$showpages = ($pages*10)-10;
	}

	$mysqli= $db;
	$categories = $_POST['type_Property_select'];
	$province= $_POST['province'];
	$district = $_POST['district'];
	$sector = $_POST['sector'];

	$query= $mysqli->query("SELECT * FROM house H
		Left JOIN provinces P ON H. province = P. provincecode
		Left JOIN districts M ON H. districts = M. districtcode
		Left JOIN sectors T ON H. sector = T. sectorcode
	WHERE H. categories_house ='$categories'
	and H. province= '{$_POST['province']}' and H. districts= '{$_POST['district']}'
	and H. sector= '{$_POST['sector']}' ORDER BY H. buy='sold' ,rand() Desc Limit $showpages,10"); ?>

	<div class="tab-content">
	<div class="active tab-pane" id="<?php echo $categories; ?>">

	<div class="row">
	
	<?php 
	   if ($query->num_rows > 0) {

		   while ($houses = $query->fetch_array()) { ?>

   <div class="col-md-4 col-lg-4">
   <div class="single_property bg-light">
	   <div class="property_thumb">
		   <?php if ($houses['buy'] == "sale") { ?>
			   <div class="property_tag">
					   For Sale
			   </div>
			   <?php }else if ($houses['buy'] == "rent") { ?>
				   <div class="property_tag bg-success">
						   For Rent
				   </div>
			   <?php }else {  ?>
				   <div class="property_tag red">
						   Sold
				   </div>
		   <?php } ?>
		   <?php 
		   // echo $house->banner($houses['banner']) ;
				   $file = $houses['photo']."=".$houses['other_photo'];
								   $expode = explode("=",$file);  ?>
		   <img src="<?php echo BASE_URL.'uploads/house/'.$expode[0]; ?>" alt="">
	   </div>
	   <div class="property_content">
		   <div class="main_pro">
				   <?php echo $house->edit_delete_house($user_id,$houses['user_id3'],$houses['house_id']); ?>
				   <h3><a href="javascript:void(0)" id="house-readmore" data-house="<?php echo $houses['house_id']; ?>">
						   <?php 
							   $subect = $houses['categories_house'];
							   $replace = " ";
							   $searching = "_";
							   echo str_replace($searching,$replace, $subect);
							   ?>
				   </a>
				   <span class="h6 text-success text-uppercase ml-2"><?php echo $houses['equipment']; ?></span>
				   </h3>
				   <div class="mark_pro">
					   <!-- <img src="<?php echo BASE_URL; ?>assets/icon/svg_icon/location.svg" alt=""> -->
					   <span>
					   <a class="properties-location" href="javascript:void(0)" id="house-readmore" data-house="<?php echo $houses['house_id']; ?>" ><i class="icon_pin"></i>
					   <?php echo $houses['namedistrict']; ?> / 
					   <?php echo $houses['namesector']; ?>
					   </a></span>
				   </div>
				   <span class="amount">
					   From:<span class="room-price price-change"> <?php echo $house->nice_number(number_format($houses['price'])); ?> Frw
					   <?php  echo (substr($houses['categories_house'],-4) == 'sale')? '':'/month';?>
					   </span>
					   <?php if($houses['price_discount'] != 0){ ?>
						   
					   <div class="text-danger price-change" style="text-decoration: line-through;">
					   <?php echo number_format($houses['price_discount']); ?> Frw </div><?php } ?>
				   </span>
		   </div>
		   Publish <?php echo $house->timeAgo($houses['created_on3']); ?>
	   </div>
	   <div class="footer_pro">
		   <ul>
			   <li>
				   <div class="single_info_doc">
					   <img src="<?php echo BASE_URL; ?>assets/icon/svg_icon/bed.svg" alt="">
					   <span><?php echo $houses['bedroom']; ?> Bed</span>
				   </div>
			   </li>
			   <li>
				   <div class="single_info_doc">
					   <img src="<?php echo BASE_URL; ?>assets/icon/svg_icon/bath.svg" alt="">
					   <span><?php echo $houses['bathroom']; ?>  Bath</span>
				   </div>
			   </li>
			   <li>
				   <div class="single_info_doc">
				   <i class="fa fa-car"></i>
					   <!-- <img src="< ?php echo BASE_URL; ?>assets/icon/svg_icon/car.png" alt=""> -->
					   <span><?php echo $houses['car_in_garage']; ?>  car</span>
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
			   $query1= $mysqli->query("SELECT COUNT(*) FROM house WHERE categories_house ='$categories'
				and province= '{$_POST['province']}' and districts= '{$_POST['district']}'
				and sector= '{$_POST['sector']}' ORDER BY buy='sold',rand() Desc ");

			   $row_Paginaion = $query1->fetch_array();
			   $total_Paginaion = array_shift($row_Paginaion);
			   $post_Perpages = $total_Paginaion/10;
			   $post_Perpage = ceil($post_Perpages); ?> 
</div>
</div>
</div>

	<?php if($post_Perpage > 1){ ?>
	 <nav>
		 <ul class="pagination justify-content-center mt-3">
			 <?php if ($pages > 1) { ?>
				 <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="houseCategoriesHomeSearch('<?php echo $categories,$province,$district,$sector,$user_id; ?>',<?php echo $pages-1; ?>)">Previous</a></li>
			 <?php } ?>
			 <?php for ($i=1; $i <= $post_Perpage; $i++) { 
					 if ($i == $pages) { ?>
				  <li class="page-item active"><a href="javascript:void(0)"  class="page-link" onclick="houseCategoriesHomeSearch('<?php echo $categories,$province,$district,$sector,$user_id; ?>',<?php echo $i; ?>)" ><?php echo $i; ?> </a></li>
				  <?php }else{ ?>
				 <li class="page-item"><a href="javascript:void(0)"  class="page-link" onclick="houseCategoriesHomeSearch('<?php echo $categories,$province,$district,$sector,$user_id; ?>',<?php echo $i; ?>)" ><?php echo $i; ?> </a></li>
			 <?php } } ?>
			 <?php if ($pages+1 <= $post_Perpage) { ?>
				 <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="houseCategoriesHomeSearch('<?php echo $categories,$province,$district,$sector,$user_id; ?>',<?php echo $pages+1; ?>)">Next</a></li>
			 <?php } ?>
		 </ul>
	 </nav>
	<?php } 
	

} ?>


	
