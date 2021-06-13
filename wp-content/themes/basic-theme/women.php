<?php 
	/* Template Name: Women */
	get_header();
	$r1=get_field('reason1');
	$r2=get_field('reason2');
	$r3=get_field('reason3');
	$r4=get_field('reason4');
	$r5=get_field('reason5');
?>
<head>
<style>
		div{
			background: black;
			
		}
		header{
			background:#ff0066;
		}
		.page .container {
			padding: 3rem;
			margin-top:20px;
			background: transparent;
		}
		body{
			background-image:url("http://localhost/Project/wp-content/uploads/2021/04/womenc.jpg");
			background-size: cover;
		}
		h5{
			color:white;
		}
		li a:hover {
			background-color: #ff0066;
			text-decoration:none;
		}	
	</style>
</head>
<body>
<section class="page">
    <div class="container">
		<h2 style="color:red"><center><b> REASON 1 </b></center></h2><br/>
		<?php echo "<h5>" , $r1; "</h5>"?><br><br><hr/><hr/>
		
		<h2 style="color:red"><center><b> REASON 2 </b></center></h2><br/>
		<?php echo "<h5>" , $r2; "</h5>"?><br><br><hr/><hr/>
		
		<h2 style="color:red"><center><b> REASON 3 </b></center></h2><br/>
		<?php echo "<h5>" , $r3; "</h5>"?><br><br><hr/><hr/>
		
		<h2 style="color:red"><center><b> REASON 4 </b></center></h2><br/>
		<?php echo "<h5>" , $r4; "</h5>"?><br><br><hr/><hr/>
		
		<h2 style="color:red"><center><b> REASON 5 </b></center></h2><br/>
		<?php echo "<h5>" , $r5; "</h5>"?>
	</div>
</section>
</body>
<?php get_footer();?>