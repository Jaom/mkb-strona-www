<?php
	require_once('index_bootstrap.php');
	require_once('index_schedule_data.php');
?>
<!DOCTYPE HTML>

<html lang="<?php echo $english?'en':'pl'?>"> 
<head>
	<?php require_once('index_head.php'); ?>
	<?php
	if($english)
		echo '<title>57th International Baltic Congress</title>';
	else
		echo '<title>57. Międzynarodowy Kongres Bałtycki</title>';
	?>
</head>


<body>
<div id="page-wrapper">
	<header>
		<?php require_once('index_header.php'); ?>
	</header>

<div class="flex-horizontal">
	<main role="main">
		<?php require_once('index_schedule.php'); ?>
	</main>
	
	<aside>
		<?php require_once('index_aside.php'); ?>
	</aside>
	
	<footer>
		<?php require_once('index_footer.php'); ?>
	</footer>
</div>
</body>
</html>
