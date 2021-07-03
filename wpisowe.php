<?php
	require_once('index_bootstrap.php');
?>
<!DOCTYPE HTML>

<html lang="pl"> 
<head>
	<?php require_once('index_head.php'); ?>
	<?php
	if($english)
		echo '<title>59th International Baltic Congress - entry fees</title>';
	else
		echo '<title>59. Międzynarodowy Kongres Bałtycki - wpisowe</title>';
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
			<h1>Wpisowe (od osoby)</h1>
			<!--<p>Wyciąg z Regulaminu 58. Międzynarodowego Kongresu Bałtyckiego</p>
					<p>Organizator ustala wpisowe od zawodnika jak następuje:</p>-->
						<table class="entryFeesTable">
						<tr>
							<th></th>
							<th>Niezrzeszeni</th>
							<th>Członek PZBS<br/>zaw. zagraniczny<sup><font color="red">1</font></sup></th>
							<th>Ulgowe <sup><font color="red">2</font></sup></th>
							<th>Uczniowie<br/>do 19 lat<sup><font color="red">3</font></sup></th>
						</tr>
						<tr>
							<td><span class="circle gppp"></span> Grand Prix Polski Par</td>
							<td>100 zł</td>
							<td>75 zł</td>
							<td>55 zł</td>
							<td>25 zł</td>
						</tr>
						<tr>
							<td><span class="circle kongresowy"></span> Turniej Kongresowy (3x10)</td>
							<td>65 zł</td>
							<td>55 zł</td>
							<td>40 zł</td>
							<td>10 zł</td>
						</tr>
						<tr>
							<td><span class="circle kongresowy"></span>XI Turniej Kongresowy (4x10)</td>
							<td>80 zł</td>
							<td>65 zł</td>
							<td>45 zł</td>
							<td>10 zł</td>
						</tr>
						<tr>
							<td><span class="circle otwarty"></span> Turniej Otwarty</td>
							<td>55 zł</td>
							<td>40 zł</td>
							<td>25 zł</td>
							<td>5 zł </td>
						</tr>
						<tr>
							<td><span class="circle mpt"></span> MPT - eliminacje <sup><font color="red">4</font></sup></td>
							<td>160 zł</td>
							<td>110 zł</td>
							<td>80 zł</td>
							<td>40 zł</td>
						</tr>
						<tr>
							<td><span class="circle amator"></span> Turniej Amatorów<sup><font color="red">5</font></sup></td>
							<td>20 zł</td>
							<td>20 zł</td>
							<td>20 zł</td>
							<td>5 zł</td>
						</tr>
						<tr>
							<td><span class="circle kongresowy"></span> Pakiet 11 Turniejów Kongresowych </td>
							<td>-</td>
							<td>650 zł</td>
							<td>460 zł</td>
							<td>-</td>
						</tr>
						<tr>
							<td><span class="circle kongresowy"></span> Pakiet 10 Turniejów Kongresowych<sup><font color="red">6</font></sup></td>
							<td>-</td>
							<td>600 zł</td>
							<td>430 zł</td>
							<td>-</td>
						</tr>
						</table>				
							
							<script>
								function op(obj) {
								x=document.getElementById(obj);
								if(x.style.display == "none") x.style.display = "block";
								else x.style.display = "none"}
							</script>
								<div align="center"><a style="font-weight:bold;" href="/" onClick="op('poka'); return false;">ZNIŻKA NA MPT DLA AMATORÓW i DRUŻYN POMORSKIEJ IV LIGI</a>
							<div id="poka" style="display:none; background-color:#66ff33; padding:15px; border-radius:15px; text-align:justify;">
							<b>Zawodnikom drużyn Ligi Okręgowej grających w sezonie 2018/2019 zarejestrowanym
							w PWZBS, a także amatorom (brak w bazie MSC Cezar lub zarejestrowanymi do WK
							0.5) przysługuje zniżka do MPT odpowiadająca wg tabeli opłat wpisowego w kolumnie
							ULGOWE. Zniżki nie kumulują się.</b>
							</div>
							</div>
							
						<ol>
						<li>Za zawodnika zagranicznego uważa się zawodnika o odpowiednim wpisie w systemie MSC CEZAR lub niezarejestrowanego w PZBS, ale o stałym miejscu pobytu poza granicami Polski. Ewentualne przypadki sporne rozstrzyga Sędzia Główny.</li>
						<li>Dla osób z opłaconą bieżącą składką PZBS i wpisem w baze CEZAR ULGI: TAK. Ulgi przysługują również juniorom zagranicznym.</li>
						<li>Przysługuje zawodnikom z opłaconą składką PZBS i ważną legitymacją szkolną.</li>
						<li>Za każdą kolejną fazę jak za turniej kongresowy.</li>
						<li>Uprawnieni do udziału w turnieju są amatorzy, tzn. gracze niezrzeszeni w PZBS lub zrzeszeni w PZBS o WK nie przekraczającym 0.5.</li>
						<li>Wszystkie turnieje kongresowe bez jednego kongresowego 3x10</li>
						</ol>
						Sprzedaż pakietów imiennych przez Internet do 30 lipca 2019 włącznie. Opłaty za pakiety prosimy wpłacać na konto PWZBS, w tytule przelewu podając PZBS PID, imię i nazwisko. <br><center>Nr konta: <strong>14 1930 1884 2800 0412 2243 0001</strong></center>
						Sprzedaż pakietów imiennych <strong>w biurze zawodów do 2.08 do g.16:00</strong><br>
						W przypadku niewykorzystanego pakietu gracz otrzymuje zwrot pakietu pomniejszony o&nbsp;indywidualne wpisowe za każdy rozegrany turniej według tabeli wpisowego.
									
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
	