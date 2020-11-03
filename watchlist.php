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
                <h1>Watch-List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo HOME; ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?php echo WATCH_LIST; ?>">WatchList</a></li>
                </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->

        <div class="container">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-9">
                    <?php echo $house->property_navListHome('House_For_sale',1,$user_id); ?>
                    <?php echo $house->houseListHome('House_For_sale',1,$user_id); ?>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
      
    </section>
    <!-- Property Section End -->

    
<?php include "footer.php"?>
