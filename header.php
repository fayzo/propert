<?php
include "core/init.php";

if ($users->loggedin() == false) {
    header('location: '.LOGIN.'');
}else if($users->loggedin() == true) {
    $user= $home->userData($_SESSION['key']);
    $businessDetails= $home->businessData('1');
    $user_id= $_SESSION['key'];
    $notific= $notification->getNotificationCount($user_id);

}

echo $house->housecart_item(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <!-- Google Font -->
     <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<!-- Css Styles -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/login.css" >
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/plugin/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/dataTables.bootstrap4.min.css" type="text/css" >
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/responsive.bootstrap4.min.css" type="text/css" > -->
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/timeline.css" type="text/css">
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/imagePopup.css" type="text/css">
	<!-- <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/jquery.range.css" type="text/css"> -->
    <link rel="stylesheet" href="<?php echo BASE_URL_LINK ;?>css/ui.totop.css" >
	<link rel="stylesheet" href="<?php echo BASE_URL;?>profile.css" type="text/css">

    <script type="text/javascript">
    
    function showResult(){
		var provincecode=document.getElementById('provincecode').value;
		var params = "&provincecode="+provincecode+"";
		http=new XMLHttpRequest();
		http.open("POST","core/ajax_db/getdistrict.php",true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
		http.send(params);
		http.onreadystatechange = function() 
		{//Call a function when the province changes.
			
		document.getElementById("districtcode").innerHTML= http.responseText;
				
		if(document.getElementById('districtcode').value!=="No District Available")
		document.form.name.disabled=false;
		
		}		
	}
	    
		
	    //Get sectors list
		function showResult2(){
		var districtcode=document.getElementById('districtcode').value;
		var params = "&districtcode="+districtcode+"";
		http=new XMLHttpRequest();
		http.open("POST","core/ajax_db/getsector.php",true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
		http.send(params);
		http.onreadystatechange = function() 
		{//Call a function when the district changes.
			
		document.getElementById("sectorcode").innerHTML=http.responseText;
				
		if(document.getElementById('sectorcode').value!=="No Sector Available")
		document.form.name.disabled=false;
		
		}		
	}
	
    //Get cell list
    function showResult3(){
		var sectorcode=document.getElementById('sectorcode').value;
		var params = "&sectorcode="+sectorcode+"";
		http=new XMLHttpRequest();
		http.open("POST","core/ajax_db/getcell.php",true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
		http.send(params);
		http.onreadystatechange = function() 
		{//Call a function when the sector changes.
			
		document.getElementById("codecell").innerHTML=http.responseText;
				
		if(document.getElementById('codecell').value!=="No Cell Available")
		document.form.name.disabled=false;
		
		}		
    }

    //Get cell list
    function showResult3_search(){
        var pages = 1;
        var user_id = document.getElementById('user_id').value;
        var province = document.getElementById('provincecode').value;
        var district = document.getElementById('districtcode').value;
        var sector = document.getElementById('sectorcode').value;
        var categories = document.getElementById('type_Property_select').value;
        var params = '&pages='+pages+'&categories='+categories+'&province='+province+'&district='+district+'&sector='+sector+'&user_id='+user_id;
		http=new XMLHttpRequest();
		http.open("POST","core/ajax_db/getcell.php",true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
		http.send(params);
		http.onreadystatechange = function() 
		{//Call a function when the sector changes.
		// document.getElementById("codecell").innerHTML=http.responseText;
		// if(document.getElementById('codecell').value!=="No Cell Available")
		document.getElementById("house_hidden").innerHTML=http.responseText;
		document.form.name.disabled=false;
		
		}		
	}
  
    // THIS IS FOR PAGINATION PAGES

    function houseCategoriesHomeSearch(categories,province,district,sector,pages,user_id) {
        var params = '&pages=' + pages +'&categories='+categories+'&province='+province+'&district='+district+'&sector_list='+sector+'&user_id='+user_id;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'core/ajax_db/getcell.php',true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send(params);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                switch (categories) {
                    case categories:
                         var pagination = document.getElementById('house-hide');
                         pagination.innerHTML = xhr.responseText;
                        break;
                }
            }
        };
    }
	
    // THIS IS FOR CATEGORIES PROPERTY SEARCH SECTOR
	
    function houseCategories_SeachSector(categories,province,district,sector,pages,user_id) {
        var params = '&pages=' + pages +'&categories='+categories+'&province='+province+'&district='+district+'&sector_list='+sector+'&user_id='+user_id;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'core/ajax_db/getcell.php',true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send(params);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                switch (categories) {
                    case categories:
                         var pagination = document.getElementById('house-hide');
                         pagination.innerHTML = xhr.responseText;
                        //  console.log(xhr.responseText);
                        break;
                }
            }
        };
    }
	
		
	// Get Villages list
    function showResult4(){
		var codecell=document.getElementById('codecell').value;
		var params = "&codecell="+codecell+"";
		http=new XMLHttpRequest();
		http.open("POST","core/ajax_db/getvillage.php",true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		http.send(params);
		http.onreadystatechange = function() 
		{
            // Call a function when the cell changes.
			
		document.getElementById("CodeVillage").innerHTML=http.responseText;
				
		if(document.getElementById('CodeVillage').value!=="No village Available")
		document.form.name.disabled=false;
		
		}		
	}
	
    function houseCategories(categories,id,user_id) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'core/ajax_db/houseView_FecthPaginat.php?pages=' + id + '&categories=' + categories + '&user_id=' + user_id, true);
        xhr.send();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                switch (categories) {
                    case categories:
                         var pagination = document.getElementById('house-hide');
                         pagination.innerHTML = xhr.responseText;
                        break;
                }
            }
        };
          xhr.addEventListener('progress',function(e){
             var progress= Math.round((e.loaded/e.total)*100);
             $('.progress-navbar').show();
             $('#progress_width').css('width',progress +'%');
             $('#progress_width').html(progress +'%');
         }, false);

        xhr.addEventListener('load', function (e) { 
            $('.progress-bar').removeClass('bg-info').addClass('bg-danger').html('<span> completed  <span class="fa fa-check"></span></span>');
            setInterval(function () {
                $(".progress-navbar").fadeOut();
            }, 2000);
        }, false);
    }
	
	
    function houseCategoriesHome(categories,id,user_id) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'core/ajax_db/propertyView_FecthPaginat.php?pages=' + id + '&categories=' + categories + '&user_id=' + user_id, true);
        xhr.send();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                switch (categories) {
                    case categories:
                         var pagination = document.getElementById('house-hide');
                         pagination.innerHTML = xhr.responseText;
                        break;
                }
            }
        };
    }
  
    function houseRange(range,id,user_id) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'core/ajax_db/house_add.php?pages=' + id + '&price_range=' + range + '&user_id=' + user_id, true);
        xhr.send();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                switch (range) {
                    case range:
                         var pagination = document.getElementById('#property-list');
                         pagination.innerHTML = xhr.responseText;
                        break;
                }
            }
        };
    }
	
    function houseRangeLayout(range,id,user_id) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'core/ajax_db/propertyView_range.php?pages=' + id + '&price_range=' + range + '&user_id=' + user_id, true);
        xhr.send();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                switch (range) {
                    case range:
                         var pagination = document.getElementById('#property-list');
                         pagination.innerHTML = xhr.responseText;
                        break;
                }
            }
        };
    }

    
    function xxda(requests,formx, id) {
        var xhr = new XMLHttpRequest();
        var form = document.getElementById(formx);
        var formData = new FormData(form);
        // Add any event handlers here...
        xhr.open('POST', 'index.php?actions=' + requests + '&code=' + id, true);
        xhr.send(formData);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                $("#responseSubmitfooditerm").html('<div class="alert alert-success alert-dismissible fade show text-center">'+
                     '<button class="close" data-dismiss="alert" type="button">'+
                         '<span>&times;</span>'+
                     '</button> <strong>SUCCESS</strong>'+' </div>');
                var forms = document.getElementById('responseSubmitfooditermview');
                 setInterval(function () {
                    $("#responseSubmitfooditerm").fadeOut();
                            }, 2000);
                forms.innerHTML = xhr.responseText;
            }
        };
    }


    </script>
</head>