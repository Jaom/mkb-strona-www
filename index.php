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
		echo '<title>60th International Baltic Congress</title>';
	else
		echo '<title>60. Międzynarodowy Kongres Bałtycki</title>';
	?>
</head>


<body>
<div id="page-wrapper">
	<header>
		<?php require_once('index_header.php'); ?>
	</header>
	
	<div class="alert alert-warning" role="alert" style="text-align: center;">
		<a class="alert-link" href="https://docs.google.com/forms/d/e/1FAIpQLScIdRbiQ93VdsbPkuk-0iqUUuUXCUkldvzVPsDNuGcVy1xxmw/viewform?vc=0&c=0&w=1&flr=0" target="_blank">⚠️📝 Ankieta dla uczestników </a>
	</div>

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
</div>
</body>
</html>
