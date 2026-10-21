		<?php
				
				include("autoload.php");
				$db		=	new MySql();
				$db->connect();

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
                    <h2 class="element-title" style="font-size: 26px;font-weight: normal;font-family: Georgia,Times New Roman, Times, serif;font-style: italic;padding-top: 20px;">Welcome</h2>
                                


		<?php
		
			$cbner  = new Anthology();
			$anthlyContent= $cbner->getAnthologybsedCata(1);
			//print_r($cbnerContent);exit;
			$anthlyCount = count($anthlyContent);
			
				
				
				for($i = 0; $i<$anthlyCount; $i++)
								{
			?>


						<div class="col-sm-3 smres" style="">
								<a href="book_detail.php?b_id=<?php echo $anthlyContent[$i]["anthology_sid"];?>">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/<?php echo $anthlyContent[$i]['anthology_image'];?>"></img>
								</a>
			
						</div>
					
								
								
			<?php } ?>
			
				<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Write%20,%20My%20Son,%20Write%20(Bengali%20Translation).pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="images/Capture.PNG"></img>
								</a>
			
						</div>
							<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/K.%20V.%20Dominic%20Criticism--Word%20file.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="images/K V DOMINIC CRITICISM AND COMMENTARY.jpg"></img>
								</a>
			
						</div>
						<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/WRITE%20MY%20SON%20WRITE--TEXT%20AND%20INTERPRETATION--BOOK.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="images/Write My Son,Write--cover page.jpg"></img>
								</a>
			
						</div>
						<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Cataracts of Compassion.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/2f3d9b531032.png"></img>
								</a>
			
						</div>
						<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/WINGED REASON --SCANNED BOOK.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/81930c541073.png"></img>
								</a>
			
						</div>
					<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/WRITE SON, WRITE--SCANNED BOOK.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/write-son-write-collection-of-poems-7515.png"></img>
								</a>
			
						</div>	
						<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Multicultural Symphony by KV Dominic GNOSIS.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/e9b82e4d1037.png"></img>
								</a>
			
						</div>
						<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Contemporary Concerns and Beyond --PDF.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/3cfbdf461079.png"></img>
								</a>
			
						</div> 	
								 	<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Who is Responsible--Book.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/12a1d0731027.png"></img>
								</a>
			
						</div> 	 
							
								 	<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Aapni Abhipsa.docx.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="images/Aapni-Abhipsa.jpg"></img>
								</a>
			
						</div> 	 
						
								 	<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Tamil Translation of Winged Reason.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="images/Winged Reason Barati Srinivasan--ed .jpg	"></img>
								</a>
			
						</div> 
	 	<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Musings on Covid Pandemic and Beyond (Collection of Poems)(1).pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="images/Resized Cover page of Musings on Covid Pandemic(1).jpg	"></img>
								</a>
			
						</div> 
					
								<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/എഴുതൂ മകേന, എഴുതൂ--BOOK.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="images/COVEPAGEFOWEB.jpg	"></img>
								</a>
			
						</div>
						<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/ആരാണ് ഉത്തരവാദി.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="images/ആരാണ് ഉത്തരവാദി--cover page.jpg"></img>
								</a>
			
						</div>
						<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Nirbachito Chotogalpo--book.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="images/books/Cover page ofNirbachito Chotogalpo--K V Dominic's Selected Short Stories in Bengali.jpeg"></img>
								</a>
			
						</div>
						<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/English -French Selected Short Storiesof Prof. K. V. Dominic --BOOK.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="images/Cover page of English French short story book.jpg"></img>
								</a>
			
						</div>
						<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Short Stories during Covid- 19 (press copy)HQR111.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="images/Short Story during Covid-19--cover page.jpg"></img>
								</a>
			
						</div>
						<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Selected Lyrics of GIEWEC's Poets--editorial and contents.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/selected-lyrics-of-giewecspoets-4506.jpg"></img>
								</a>
			
						</div>
							<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/प्रोफेसर के. वी. डोमिनिक की चुनी हुई कहानियां (finao draft)R.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/hindi story book cover page.jpg"></img>
								</a>
			
						</div>
						<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Tales_Unraveled_PDF_book.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/Tales_Unraveled_Cover_Page.jpg"></img>
								</a>
			
						</div>
							<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Thorns and Agonies--PDF.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/Thorns and Agonies_full cover.jpg"></img>
								</a>
			
						</div>
							<div class="col-sm-3 smres" style="">
								<a href="http://www.profkvdominic.com/pdf/Tales of Ethos-pdf.pdf" target="_blank">
								<img style="margin-bottom:0px;width:96%;height:165px;padding-top:10px" src="profkvdominic_admin/upload/Books/Tales of Ethos-full cover.jpg"></img>
								</a>
			
						</div>
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
