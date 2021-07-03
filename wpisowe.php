<?php
	require_once('index_bootstrap.php');
?>
<!DOCTYPE HTML>

<html lang="pl"> 
<head>
	<?php require_once('index_head.php'); ?>
	<?php
	if($english)
		echo '<title>57th International Baltic Congress - entry fees</title>';
	else
		echo '<title>57. Międzynarodowy Kongres Bałtycki - wpisowe</title>';
	?>
</head>

<body>
<div id="page-wrapper">
	<header>
		<?php require_once('index_header.php'); ?>
	</header>
	
	<div class="flex-horizontal">
		<main role="main">	
			<section class="entryFeesSection">
			<h1>II. Wpisowe</h1>
			<p>Wyciąg z Regulaminu 57. Międzynarodowego Kongresu Bałtyckiego</p>
				<ol>
					<li>Organizator ustala wpisowe jak następuje:
						<table class="entryFeesTable">
						<tr>
							<th></th>
							<th>Normalne</th>
							<th>Członek PZBS<br/>Zawodnik zagraniczny</th>
							<th>Ulgowe</th>
							<th>Uczniowie<br/>do 19 lat</th>
						</tr>
						<tr>
							<td><span class="circle gppp"></span> Grand Prix Polski Par</td>
							<td>100 zł</td>
							<td>75 zł</td>
							<td>55 zł</td>
							<td>25 zł</td>
						</tr>
						<tr>
							<td><span class="circle kongresowy"></span> Turniej Kongresowy, faza KO MPT</td>
							<td>75 zł</td>
							<td>50 zł</td>
							<td>35 zł</td>
							<td>10 zł</td>
						</tr>
						<tr>
							<td><span class="circle kongresowy"></span> XI Kongresowy Turniej Par (4x10)</td>
							<td>90 zł</td>
							<td>65 zł</td>
							<td>45 zł</td>
							<td>10 zł</td>
						</tr>
						<tr>
							<td><span class="circle otwarty"></span> Turniej Otwarty</td>
							<td>60 zł</td>
							<td>40 zł</td>
							<td>25 zł</td>
							<td>5 zł</td>
						</tr>
						<tr>
							<td><span class="circle mpt"></span> MPT - eliminacje</td>
							<td>160 zł</td>
							<td>110 zł</td>
							<td>80 zł</td>
							<td>35 zł</td>
						</tr>
						<tr>
							<td><span class="circle amator"></span> Turniej Amatorów</td>
							<td>20 zł</td>
							<td>20 zł</td>
							<td>20 zł</td>
							<td>0 zł</td>
						</tr>
						</table>
					<li>Wpisowe ulgowe przysługuje jedynie zawodnikom z opłaconą składką PZBS i prawem do zniżek wg standardów PZBS (adnotacja „przysługują zniżki” w systemie MSC CEZAR).
					<li>Wpisowe dla uczniów do lat 19 przysługuje zawodnikom z opłaconą składką PZBS i ważną legitymacją szkolną.
					<li>Opłata za MPT pokrywa wyłącznie pierwszy dzień grania. Każdy kolejny dzień podlega dodatkowej opłacie w wysokości odpowiadającej wpisowemu do Turnieju Kongresowego dla danego zawodnika.
					<li>Za zawodnika zagranicznego uważa się zawodnika o odpowiednim wpisie w systemie MSC CEZAR lub niezarejestrowanego w PZBS, ale o stałym miejscu pobytu poza granicami Polski. Ewentualne przypadki sporne rozstrzyga sędzia główny wedle własnego uznania.
				</ol>
				<div class="bs-callout bs-callout-danger" id="callout-helper-pull-navbar">
					<h4>Uwaga - różnica względem ulotki</h4>
					<p>
						Turniej 40 rozdaniowy grany ostatniego dnia, jako że jest turniejem dłuższym od zwykłego turnieju kongresowego, podlega podwyższonej opłacie.
						W wyniku błędu nie udało się zawrzeć w drukowanej wersji ulotki reklamującej Kongres tej informacji, za co serdecznie przepraszamy.	
					</p>
				</div>
			</section>
		</main>
		
		<aside>
			<?php require_once('index_aside.php'); ?>
		</aside>

	</div> <!-- end of flex-horizontal -->

	<footer>
		<?php require_once('index_footer.php'); ?>
	</footer>
</div> 
</body>

</html>
	