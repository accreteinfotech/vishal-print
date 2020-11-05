<?php
	ob_start();
?>
<!doctype html>
<html lang="en">
<?php
	session_start();
	if(!isset($_SESSION['admin_id']))
	{
		header("location:../index.php");
	}
	include '../include/connect.php';
	//echo $page_name;
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php echo $project_name; ?> | Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="../css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="../css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="../css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="../css/default-assets/select.bootstrap4.css">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="../style.css">
	<style>
	.clickable {
    cursor: pointer;
}
	</style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader"></div>

   

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        <?php
			include '../include/side_menu.php';
		?>

        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
           <?php
					include '../include/header.php';
		   ?>

            <div class="row">
                <div class="col-12">
                    <div class="dahboard-header-area d-sm-flex align-items-center justify-content-between">
                        <div class="dahboard-header-title d-flex align-items-center">
                            <h6 class="mb-0 mr-3">Dashboard</h6>
                        </div>
 
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="main-content dashboard-pt">
                <div class="container-fluid">
                    <div class="row">
					

                        <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
									<?php
										$sql=$link->rawQuery("select * from product where is_active1=1");
									?>
                                    <h4 class="card-title">Total Products</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h2 class="text-dark font-18 mb-0"><?php echo  $link->count; ?></h2> 
                                    </div>
								</div>
                            </div>
                        </div>
						 <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
									<?php
										$sql=$link->rawQuery("select * from order_product where is_active=1 and status_id=1");
									?>
                                    <h4 class="card-title">Active Orders</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h2 class="text-dark font-18 mb-0"><?php echo  $link->count; ?></h2> 
                                    </div>
								</div>
                            </div>
                        </div>
						<div class="col-12 col-sm-6 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
									<?php
										$sql=$link->rawQuery("select * from order_product where is_active=1");
									?>
                                    <h4 class="card-title">Total Orders</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h2 class="text-dark font-18 mb-0"><?php echo  $link->count; ?></h2> 
                                    </div>
								</div>
                            </div>
                        </div>
						<!-- Warning Alert -->
					<div id="warning" class="col-12 col-sm-12 col-md-12 col-xl-12">
					</div>
					
                    </div>

                </div>

                <!-- Footer Area -->
					<?php
						include '../include/footer.php';
					?>
				<!-- Footer Area End -->
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="../js/jquery.min.js"></script>
		<script>
	// A $( document ).ready() block.
	$( document ).ready(function() {
		$.ajax({
			 type: "POST",
		   url: "check_inventory.php",
		   	
				// serializes the form's elements.
		   success: function(data)
		   {
				if(data != '')
				{
					$("#warning").html(data);
				}
			
		   }
		});
	});
	
	function close()
	{
		var effect = $(this).data('effect');
		$(this).closest('#myToast')[effect]();
	}
	$('.clickable').on('click',function(){
		var effect = $(this).data('effect');
			$(this).closest('#myToast')[effect]();
		})
	
	</script>

    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bundle.js"></script>

	
    <!-- Active JS -->
    <script src="../js/default-assets/fullscreen.js"></script>
    <script src="../js/default-assets/active.js"></script>

    <!-- These plugins only need for the run this page -->
    <script src="../js/default-assets/jquery.flot.js"></script>
    <script src="../js/default-assets/jquery.flot.resize.js"></script>
    <script src="../js/default-assets/chart.min.js"></script>
    <script src="../js/default-assets/sparkline.min.js"></script>
    <script src="../js/default-assets/component-todo.js"></script>
    <script src="../js/default-assets/apexchart.min.js"></script>
    <script src="../js/default-assets/dashboard-active.js"></script>
    <script src="../js/default-assets/dashboard-active-2.js"></script>
    <script src="../js/default-assets/custom-sparkline.js"></script>
    <script src="../js/default-assets/dashboard-chat.js"></script>
    <script src="../js/default-assets/jquery.datatables.min.js"></script>
    <script src="../js/default-assets/datatables.bootstrap4.js"></script>
    <script src="../js/default-assets/datatable-responsive.min.js"></script>
    <script src="../js/default-assets/responsive.bootstrap4.min.js"></script>
    <script src="../js/default-assets/demo.datatable-init.js"></script>
</body>

</html>