<?php
								
								include("autoload.php");
								$db		=	new MySql();
								$db->connect();
								
								
								$g_id=	$_GET["b_id"];
								//print_r($g_id);exit;
							?>




<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <title>Prof. K V DOMINIC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" />
        <link rel="stylesheet" href="css/icoMoon.css" media="all" />
        <link rel="stylesheet" href="css/superfish.css" media="screen" />
        <link rel="stylesheet" href="css/prettyPhoto.css" media="screen" />
        <link rel="stylesheet" href="css/flexslider.css" media="screen" />
		<link rel="stylesheet" href="css/theme-options.css" media="screen" />
        <link rel="stylesheet" href="style.css">        
        <link rel="stylesheet" href="css/bootstrap-responsive.css" media="all">
        <link href="css/responsive.css" rel="stylesheet">
		
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		
		
        <script src="js/modernizr.custom.js"></script>
    

        <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
            <link rel="stylesheet" href="css/ie.css" type="text/css" media="all" />
			<script src="js/PIE_IE678.js"></script>
        <![endif]-->
		
		<!-- Colors style -->
    	<link rel="stylesheet" href="css/colors/default.css" type="text/css" id="colors" />

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="img/favicon.html">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    </head>
    
<body class="kopa-gallery-page">

<div class="kopa-pattern"></div>



<div class="wrapper kopa-shadow">
    
    <div class="row-fluid">
        
        <div class="span12 clearfix">
        
 <?php include('menu.php'); ?>
            
				<!-------------- Banner below menu starts ------>

				<!--<div style="background-image:url('images/banner/banner.png');background-size:cover;background-repeat:no-repeat;min-height:365px"></div>-->
			

			<!-------------- Banner below menu ends --------->		
			
			
					<?php
		
			$glry  = new GalleryImage();
			$glryContent= $glry->getGalleryImage($g_id);
		
			//print_r($glryContent);exit;
			//$glryCount = count($glryContent);
			$glryimgCount = count($glryContent);
		//print_r($glryimgCount);exit;
			?>
			
			
			
            <div id="main-content">
            	
                <div class="row-fluid">
                    <div class="span12">
                    
					
                    </div><!--span12-->
                </div><!--row-fluid-->
                
                <div class="row-fluid">
                	<div class="span8">
                        
						<div class="flexslider kp-gallery-slider">
						  <ul class="slides">
						  
						  
						  
						  <?php for($i=0;$i<$glryimgCount;$i++) {?>
						  
						  
							<li>
								<div class="mask">
									<a href="profkvdominic_admin/upload/Gallery/<?php echo $glryContent[$i]["glry_imge"];?>" rel="prettyPhoto[kp-gallery]">
										<img src="profkvdominic_admin/upload/Gallery/<?php echo $glryContent[$i]["glry_imge"];?>" alt="" /></a>
										
								</div>
							
							</li>
						
						
						<?php } ?>
						
						
						
						</ul>
						</div>
						<div class="flexslider kp-gallery-carousel">
						  <ul class="slides">
						  
						   <?php for($j=0;$j<$glryimgCount;$j++) {?>
						   
							<li><img src="profkvdominic_admin/upload/Gallery/<?php echo $glryContent[$j]["glry_imge"];?>" alt="" /></li>
							<?php } ?>
						  </ul>
						</div><!--kp-gallery-slider-->
						  
						
                                        
                    </div><!--span8-->
					<div class="span4 mb-20">
                                    <h2 class="element-title"></h2>
						
						 <?php include('sidemenu.php'); ?>
                </div><!--row-fluid-->
                
                <div class="widget-area-12">
                
                	<div class="kopa-divider"></div>
                    
                 
				 
                	
                </div><!--widget-area-12-->
                
            </div><!--main-content-->
            


	
	
            <p id="back-top">
                <a href="#top">Back to Top</a>
            </p>

		</div><!--span12-->
                
	</div><!--row-fluid-->
            
</div><!--wrapper-->  

    
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.carouFredSel-6.0.4-packed.js"></script>
    <script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/tweetable.jquery.js"></script>
    <script src="js/jquery.timeago.js"></script>
    <script src="js/jquery.backstretch.js"></script>
	<script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.form.js"></script>	
	<script src="js/styleswitch.js"></script>	
    <script src="js/custom.js" charset="utf-8"></script>
    
    <script>
		new UISearch( document.getElementById( 'sb-search' ) );
	</script>
    
</body>

</html>
