<?php
 ob_start();
session_start();
include("autoload.php");
include("session.php");
$pasid  =   $_SESSION["LogUserID"];
//print_r($pasid); exit; 
$ad_name    =   $_SESSION["Loguser_name"];
$db		=	new MySql();
$db->connect();
$objA	=	new Admin();
$g_id=	$_GET["n_id"];
//print_r($g_id); 
//exit;
$data	=	$objA->getAdmin($pasid);
$cat	=	new Anthology();
			     
$getss	=	$cat->getAnthology($g_id);
//print_r($getss); exit; 
//exit;

If(isset($_POST["update"])){
	$title       =   $_POST['title'];
    $category       =   $_POST['category'];
    $yearofpublish       =   $_POST['yearofpublish'];
    $dscrptn       =   $_POST['dscrptn'];
    $status       =   $_POST['status'];
	   $photo	    =	$_FILES["upload"]["name"];
	     $absDirName	=	dirname(__FILE__).'/upload/Books'; 
			$relDirName	=	'upload/Books'; 
	
		$obj	=	new Uploader($absDirName.'/');
  		 $fileName = $title;
		 $fileName = seoTitle($fileName ); 
  		$obj->setSequence($fileName);
 	 	$obj->setExtensions(array('png','gif','jpg','jpeg' , 'mp3'));
 	  	$obj->setMaxSize(60000);
	
	     if(empty($title)){
	   	header("location:anthology_edit.php.php?n_id=$g_id");
			$message	=	new Message('Enter mandatory fields','error');
			$message->setMessage();
			exit; 
	   }
		  else{
		  if(empty($photo))
		  {
			$image=$_POST['hidding']; 
		  }
		  else{
	   	if($obj->uploadFile("upload")){ 
		         $image	=	$obj->getUploadName();
				 $cat->updateGalleryImage($g_id,$image);	
				 unlink('upload/Books/'.$getss[0]['photo']);
			    
				 }
		  }
		  
	    $inputs	=array(				 
		
									  'title'=>$title,
										'category'=>$category,
										'yearofpublish'=>$yearofpublish,
										'dscrptn'=>$dscrptn,
										'photo'=>$image,
										'status'=>$status,
									  'id'=>$g_id
									  );
									 
				if($cat->editAnthology($inputs)){
				
					
					$message	=	new Message('Gallery Image Updated ','message');
					$message->setMessage();
					header("Location:anthology_view.php");
					exit;
					
				}else{
					
					$message	=	new Message('Unknown error','error');
					$message->setMessage();
				}
				
		
	   }

}
?>
<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8" />
   <title>Prof k v Dominic </title>

    <meta name="description" content="blank page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://foliotek.github.io/Croppie/croppie.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="#" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300"
          rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="assets/css/beyond.min.css" rel="stylesheet" />
    <link href="assets/css/demo.min.css" rel="stylesheet" />
    <link href="assets/css/typicons.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="#" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="assets/js/skins.min.js"></script>
    
</head>
<!-- /Head -->
<!-- Body -->
<body>
  
    <!-- Navbar -->
	<?php include('header.php') ?>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
				<?php include('menu.php') ?>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->

            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>                        </li>
                        <li>
                            <a href="#">More Pages</a>                        </li>
                        <li class="active">Blank Page</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                           Update Anthology Data                      </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>                        </a>
                        <a class="refresh" id="refresh-toggler" href="#">
                            <i class="glyphicon glyphicon-refresh"></i>                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>                        </a>                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
				<div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                           
                            <div class="row">
							<div class="container">
                            <div class="col-lg-11 col-sm-11 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-top bordered-palegreen">
                                            <span class="widget-caption"> Update Anthology Image </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="collapse in">
                                                <form role="form" method="post" enctype="multipart/form-data">
												
																<br>
										<div class="row">
												<div class="col-sm-6">
											
													<label for="category" align="center">Select Category</label>
														<div class="input-group" style="width:100%">
															<select name="category" class="form-control select2" style="width:100%;">
														 
																<option value="1"<?php if($getss[0]["anthology_ctgry"]==1){ ?> selected="selected" <?php } ?>>Books</option>
																<option value="2"<?php if($getss[0]["anthology_ctgry"]==2){ ?> selected="selected" <?php } ?>>JOURNALS</option>
																<option value="3"<?php if($getss[0]["anthology_ctgry"]==3){ ?> selected="selected" <?php } ?>>POETRY</option>
																<option value="4"<?php if($getss[0]["anthology_ctgry"]==4){ ?> selected="selected" <?php } ?>>POEM AUDIO</option>
																<option value="5"<?php if($getss[0]["anthology_ctgry"]==5){ ?> selected="selected" <?php } ?>>FICTION</option>
																<option value="6"<?php if($getss[0]["anthology_ctgry"]==6){ ?> selected="selected" <?php } ?>>BOOK REVIEWS</option>
																<option value="7"<?php if($getss[0]["anthology_ctgry"]==7){ ?> selected="selected" <?php } ?>>Critical Analysis</option>
																<option value="8"<?php if($getss[0]["anthology_ctgry"]==8){ ?> selected="selected" <?php } ?>>CRITICAL STUDIES</option>
																		   
															</select>
															
													</div>
												
												</div>
												
												<div class="col-sm-6">
													<div class="form-group">
														<label for="yearofpublish"  align="center">Year of Publish</label>
															<input type="text" name="yearofpublish" class="form-control input-sm" id="sminput" value="<?php echo $getss[0]
                                                        ["anthology_year"];?>">
															
															</input>
													</div>
												</div>
												
										</div>
										
										<br>
												
												
												
												
												
												
												
												
												
												
												
                                                 <div class="form-group">
                                                        <label for="sminput">Title</label>
                                                        <input type="text" name="title" class="form-control input-sm" id="sminput" value="<?php echo $getss[0]
                                                        ["anthology_tte"];?>">
                                                    </div>  
													
													
													<div class="col-sm-12">
											<div class="mail-body">Description
												<div class="mail-compose">
													<div class="widget-body">
														<div class="widget-main no-padding">
															<textarea name="dscrptn" id="summernote2"><?php echo $getss[0]
                                                        ["anthology_dscription"];?></textarea><br>
														</div>
													</div>
												</div>
											</div> 
										</div>	
													
													
													
													<br>
													<br>
													<br>
													
                                                 
												 <div class="form-group">
                                                        <label for="sminput">Image</label>
                                                        
                                                  <?php if($getss[0]["anthology_image"]!=''){if($getss[0]
                                              ["anthology_ctgry"]!=4) { ?>

                                                  <div style="margin-top:10px; margin-bottom:5px;">
                                                   <img src="upload/Books/<?php echo $getss[0]["anthology_image"];?>" height=110px width=130px ></div>
												  <?php } ?>
												    <?php if($getss[0]
                                              ["anthology_ctgry"]==4) {?>
											  
											  						<audio controls>

  <source src="upload/Books/<?php echo $getss[0]['anthology_image'];?>" type="audio/mpeg">
 
</audio>
											  <?php } } ?>
                                                        <input type="file" name="upload" class="" id="sminput" >
                                                            <input type="hidden" value="<?php echo $getss[0]
                                                            ["anthology_image"];?>" name="hidding">
                                                    </div>



											<div class="row">
													<div class="col-sm-1">
													 <label>Status</label>
													</div>
														<div class="col-sm-5">
															<div class="input-group">
															<select name="status" class="form-control select2" style="width: 100%;">
															 
																			<option value="1" <?php if($getss[0]['anthology_stus']== 1){?> selected="selected"<?php }?> ><?php echo "Publish";?></option>
																			<option value="2" <?php if($getss[0]['anthology_stus']== 2){?> selected="selected"<?php }?> ><?php echo "Un Publish";?></option>
																			   
															</select>
                                                            </div>
														</div>
														<div class="col-sm-6">
														<input type="submit" name="update" class="btn btn-primary btn-block" value="update">
														
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
				</div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->
    </div>

     <!--Basic Scripts-->
    <script src="assets/js/jquery-2.0.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="assets/js/beyond.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://foliotek.github.io/Croppie/croppie.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

    <!--Page Related Scripts-->
    
    <!--Summernote Scripts-->
    <script src="assets/js/editors/summernote/summernote.js"></script>
    <script>
        $('#summernote').summernote({ height: 300 });
        $('#summernote1').summernote({ height: 300 });
        $('#summernote2').summernote({ height: 300 });
         $('#summernote3').summernote({ height: 300 });
    </script>
    <!--Google Analytics::Demo Only-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-60412744-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>

</html>
