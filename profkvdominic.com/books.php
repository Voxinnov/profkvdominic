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
                                    <h2 class="element-title" style="font-size: 26px;font-weight: normal;font-family: Georgia,Times New Roman, Times, serif;font-style: italic;padding-top: 20px;">Books</h2><br>
                             
							 
			<!------------------------------------- books publications  starts ----------------------------------------->
			
				<?php
		
			$cbner  = new Anthology();
			$anthlyContent= $cbner->getAnthologybsedCata(1);
			//print_r($cbnerContent);exit;
			$anthlyCount = count($anthlyContent);
			
				
				
				for($i = 0; $i<$anthlyCount; $i++)
								{
			?>
			
			
				<div class="col-sm-12">
					<p>
						<a href="book_detail.php?b_id=<?php echo $anthlyContent[$i]["anthology_sid"];?>">
						<?php echo $anthlyContent[$i]["anthology_tte"];?>
						</a>
					</p>
				</div>
					<?php } ?>
					
					<div class="col-sm-12">
					<p>
						<a href="http://www.profkvdominic.com/pdf/Write%20,%20My%20Son,%20Write%20(Bengali%20Translation).pdf" target="_blank">Write, My Son, Write (Bengali Version)</a>
											
					</p>
				</div>
				<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/Tamil%20Translation%20of%20Winged%20Reason%20(press%20copy).pdf" target="_blank">	ஞானச் சிறகுகள்  (Winged Reason) </a>
										</p>	</div>
				<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/K. V. Dominic Criticism--Word file.pdf" target="_blank">K.V.DominicCriticismandCommentary:EssentialReadingsCompanion </a>
										</p>	</div>
									
				<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/WRITE MY SON WRITE--TEXT AND INTERPRETATION--BOOK.pdf" target="_blank">Write My Son, WriteText and Interpretation</a>
										</p>	</div>
			<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/Cataracts of Compassion.pdf" target="_blank">Cataracts of Compassion</a>
										</p>	</div>
			<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/WINGED REASON --SCANNED BOOK.pdf" target="_blank">WINGED REASON</a>
										</p>	</div>
			<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/WRITE SON, WRITE--SCANNED BOOK.pdf" target="_blank">WRITE SON, WRITE</a>
										</p>	</div>
			<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/Multicultural Symphony by KV Dominic GNOSIS.pdf" target="_blank">Multicultural Symphony (A Collection of Poems) </a>
										</p>	</div>
						<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/Contemporary Concerns and Beyond --PDF.pdf" target="_blank">Contemporary Concerns and Beyond </a>
										</p>	</div>
									<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/Who is Responsible--Book.pdf" target="_blank">Who is Responsible?</a>
										</p>	</div>
																			<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/K. V. Dominic's Aapni Abhipsa.pdf" target="_blank">AAPNI ABHIPSA (Gujarati Translated Poems)</a>
										</p>	</div>
								<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/Musings on Covid Pandemic and Beyond (Collection of Poems)(1).pdf" target="_blank">Musings on Covid Pandemic and Beyond (Collection of Poems)</a>
										</p>	</div>
										
										
												<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/എഴുതൂ മകേന, എഴുതൂ--BOOK.pdf" target="_blank">Ezhuthoo Makane, Ezhuthoo (Malayalam translation of Selected English Poems) 										</p>	</div>
									
									<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/ആരാണ് ഉത്തരവാദി.pdf" target="_blank">ആരാണ് ഉത്തരവാദി</p>	</div>
			<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/Nirbachito Chotogalpo--book.pdf" target="_blank">Nirbachito Chotogalpo (Bengali Short Stories)</p>	</div>
									
									<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/Short Stories during Covid- 19 (press copy)HQR111.pdf" target="_blank">Short Stories during Covid-19</p>	
									</div>
			
									<div class="col-sm-12">
								<p>		<a href="http://www.profkvdominic.com/pdf/प्रोफेसर के. वी. डोमिनिक की चुनी हुई कहानियां (finao draft)R.pdf" target="_blank">प्रोफे सर के. वी. डोमिमिक
की चुिी हुई कहामियाां   </a></p>
									</div>
			
			<!------------------------------------ books publications  ends ---------------------------------------->
							<div class="col-sm-12">
									<p>		<a href="http://www.profkvdominic.com/pdf/Selected Lyrics of GIEWEC's Poets--editorial and contents.pdf" target="_blank">Selected Lyrics of GIEWEC's Poets</p>	</div>
									
								
							
								<div class="col-sm-12">
								<p>		<a href="http://www.profkvdominic.com/pdf/Tales_Unraveled_PDF_book.pdf" target="_blank">Tales Unraveled: Sufferings and Pangs of the Downtrodden in the Short Stories of K. V. Dominicां   </a></p>
									</div>
									<div class="col-sm-12">
								<p>		<a href="http://www.profkvdominic.com/pdf/Thorns and Agonies--PDF.pdf" target="_blank">Thorns and Agonies   </a></p>
									</div>
										<div class="col-sm-12">
								<p>		<a href="http://www.profkvdominic.com/pdf/Tales of Ethos-pdf.pdf" target="_blank">Tales of Ethos   </a></p>
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
