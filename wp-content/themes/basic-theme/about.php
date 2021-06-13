<?php 
	/* Template Name: About */
	get_header();
	$description=get_field('description');
	$image_data = get_field('image');
	$image_url = $image_data['sizes']['small'];
?>
<head>
	<style>
		div{
			background: black;
			
		}
		.page .container {
			padding: 3rem;
			margin-top:20px;
			background: transparent;
		}
		body{
			background-image:url("http://localhost/Project/wp-content/uploads/2021/04/womens.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<section class="page">
    <div class="container" >
	<h2><center><b> ABOUT US </b></center></h2><br>
	<h5 style="color:red"><?php echo $description; ?></h5>
	</div>
	
</section>

<?php get_footer();?>