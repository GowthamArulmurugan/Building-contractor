<?php 
	require("pagelib.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<meta name="keywords" content="Gallery <?php Title();?>" />
	<meta name="description" content="Photo Gallery | <?php Title();?>" />
	<title>Gallery | <?php Title();?></title>
	<?php TopLink()?>
	<!-- FB OG Tag start-->
	<meta property="og:site_name" content="AG IT Services " />
<meta property="og:type" content="Website" />
<meta property="og:url"   content="http://girfa.co.in/" />
<meta property="og:title" content="Gallery" />
<meta property="og:image" content="http://girfa.co.in/img/page/slide/s1.pngg" />
<meta property="og:description" content="<?php Title();?>" />
	<!-- FB OG Tag end-->
	 <link href="css/lightbox.min.css" rel="stylesheet" />
    <script src="js/lightbox-plus-jquery.min.js"></script>
</head>
<body>
<?php Menu();?>
<div class="banner-inner">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item">
            <a href="Index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Gallery</li>
    </ol>

</div>

<section class="wthree-banner-bottom py-lg-5 py-3 text-center">
    <div class="container py-lg-4 py-3">
        
       
      
	<?php
		$j=1; 
		for($i=6;$i>0;$i--,$j++)
		{
			if($j==1)
			{					
	?>
	<div class="row">
	<?php 
			}
			
	?>
		<div class="col-md-4">
			<br>
			  <a class="example-image-link" href="images/gallery/<?php echo $i?>.jpg" data-lightbox="example-set" data-title="<?php Title();?> Media Gallery">
					   
						<img src="images/gallery/<?php echo $i?>.jpg" class="img-responsive example-image "  alt="<?php Title()?> Media Gallery" id="imgHanging" />
	
					</a>
	
			</div>
		<?php			
			if($j==3)
			{
			
				echo "</div><br>";	
				$j=0;		 
			}
		
	}
		?>
 	</div>
	<br><br>
 
       
       
        <br /><br />
    </div>
</section>
<?php Footer();?>
<?php BottomLink();?>
</body>
</html>