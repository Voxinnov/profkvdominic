<?php
				
				include("autoload.php");
				$db		=	new MySql();
				$db->connect();

		?>
	<?php
If(isset($_POST["search_btn"])){
				
				$search = $_POST["search"];
		  		
			$cbner  = new Anthology();
			$anthlyContent= $cbner->ListAllBookSearch($search);
			//print_r($anthlyContent);exit;
			$anthlyCount = count($anthlyContent);
									  
			}
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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="css/responsive.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/modernizr.custom.js"></script>
    

        <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel='stylesheet' type='text/css'>

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
	
	


	
    
<body>

<div class="kopa-pattern"></div>




<div class="wrapper kopa-shadow">
    
    <div class="row-fluid">
        
        <div class="span12 clearfix">
        
            <?php include('menu.php'); ?>
			
				<div id="main-content">            	
                   <div class="row-fluid">
                            <div class="span8 mb-20" style="border-right:1px solid #eeeeee">
                                    <h2 class="element-title" style="font-size: 26px;font-weight: normal;font-family: Georgia,Times New Roman, Times, serif;font-style: italic;padding-top: 20px;">Books Review List</h2><br>
                             
							 
			<!------------------------------------- books publications  starts ----------------------------------------->
			<?php if($anthlyCount==0) { ?>
			<h3 align="center" style="padding-top:25px"> Sorry No Matches</h3>
			
			<?php } else {?>
										<?php
		
		
			
				
				
				for($i = 0; $i<$anthlyCount; $i++)
								{
			?>
											
											<div class="col-sm-12">
													<p>
						<a href="book_review_detail.php?b_id=<?php echo $anthlyContent[$i]["anthology_sid"];?>">
						<?php echo $anthlyContent[$i]["anthology_tte"];?>
						</a>
					</p>
											</div>
											
											
											
			<?php } }?>
			<!------------------------------------ books publications  ends ---------------------------------------->
						
								
								</div><!--span8-->
                                <div class="span4 mb-20">
                                    <h2 class="element-title"></h2>
                       
					   
								
								
								<?php include('sidemenu.php'); ?>
										
								
								

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
