<?php 
	/* Template Name: Mission */
	get_header();
	$mission=get_field('mission_statement');
	$vision=get_field('vision_statement');
	$values=get_field('some_values_of_the_ngo');
?>
<head>
<style>
		/* div{
			background: #ff0066;
			
		} */
		header{
			background:#ffffb3;
		}
		.page .container {
			padding: 3rem;
			margin-top:20px;
			background: transparent;
		}
		body{
			background-image:url("http://localhost/Project/wp-content/uploads/2021/04/we.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		h5{
			color:white;
		}
		
	</style>
</head>
<section class="page">
    <div class="container">
	
	<h2 style="color:#33ffff"><center><b> OUR MISSION STATEMENT </b></center></h2><br/>
	<?php echo "<h5>" , $mission; "</h5>"?><br><br><hr/><hr/>
	
	<h2 style="color:#33ffff"><center><b> OUR VISION STATEMENT </b></center></h2><br/>
	<?php echo "<h5>" , $vision; "</h5>"?><br><br><hr/><hr/>
	
	<h2 style="color:#33ffff"><center><b> OUR VALUES OF NGO </b></center></h2><br/>
	<?php echo "<h5>" , $values; "</h5>"?>
	</div>
</section>
<?php get_footer();?>