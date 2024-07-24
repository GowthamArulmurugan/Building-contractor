<?php 
	require("pagelib.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<meta name="keywords" content="About <?php Title();?>" />
	<meta name="description" content="About us | <?php Title();?>" />
	<title>About | <?php Title();?></title>
	<?php TopLink()?>
		<meta property="og:site_name" content="dashboard " />
<meta property="og:type" content="Website" />
<meta property="og:url"   content="http://girfa.co.in/" />
<meta property="og:title" content="About" />
<meta property="og:image" content="http://girfa.co.in/img/page/slide/s1.png" />
<meta property="og:description" content="<?php Title();?>" />
</head>
<body>
<?php Menu();?>
<div class="banner-inner">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item">
            <a href="Index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
    </ol>

</div>

<div class="container">
<br><br>
   <h3 class="tittle text-center mb-lg-4 mb-3">
            <span>Building Construction-Dashboard</span>About
        </h3>
   <div class="row">
   	
	<div class="col-md-8">
		<div class="container py-lg-4 py-3">
     

 <p class="pr">
            Our Company is one of the fastest growing  Building Construction and management companies in tamilnadu. It is an ISO 9001:2015 certified company.        </p><br />
        <p class="pr">
            We introduced engineering and architectural technologies from very earlier and infused techniques with futuristic practice as result it made ambitious and iconic residential segments        </p><br />
        <p class="pr">
            Our Company is a highly vibrant and varied company. Our team works hard to understand the real needs of customer and go above and beyond their expectations. Our service enabled us to make world-class creative designs and offer at the most modest prices in the industry.
        </p><br />
        <p class="pr">
            Many global powerful businesses are venturing into real estate business as an extension of their main business. On the other hand, our company has no other business than Constructing building. Our journey began in tamilnadu and we already have extended our business to different states.
        </p><br />
	</div>
   </div>
       <div class="col-md-4">
		<img src="images/page/girfa.jpg" style="width:100%;border-radius:50%;border:solid #3d3e48 1px;padding:3px;" alt="noor ahsan">
		<br>
		<p style="text-align:center">Founder: </p>
		<p style="text-align:center;font-weight:bold">Gowtham Arulmurugan</p>
	</div>
       
      
        <br /><br /><br /><br />
    </div>
</div>
<?php Footer();?>
<?php BottomLink();?>
</body>
</html>