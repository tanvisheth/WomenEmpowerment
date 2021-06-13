<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
</head>


<body <?php body_class();?>>


<header class="main">
    <?php
        /*wp_nav_menu(array(
            'theme_location' => 'top-menu',
        ));*/
		
		$img='http://localhost/Project/wp-content/uploads/2021/04/women.jpg';
		echo "<table>
		<tr>
		<td>";
		echo "<img src=$img height='70' width='80' style='margin:0 320px 0 20px'>
		</td>
		
		<td>";
        wp_nav_menu(array(
            'theme_location' => 'top-menu',
        ));
		echo "</td>
	</tr>
	</table>";
    ?>
	
</header>