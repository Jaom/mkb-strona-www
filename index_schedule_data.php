<?php

// those values will be used as dots before the torunaments
define('amator',	'<span class="circle amator"></span>');
define('blue',	'<span class="circle kongresowy"></span>');
define('green',	'<span class="circle otwarty"></span>');
define('mpt',		'<span class="circle mpt"></span>');
define('halfHalf','<span class="left kongresowy"></span><span class="right otwarty"></span>');
define('gppp',	'<span class="circle gppp"></span>');
define('blank',	'<span class="circle blank"></span>');

// defining 
function record($short,$godz,$title,$circle,$suffix='',$path='./',$linkFlag=false)
{
	return array(
		'short'=>$short,
		'godz'=>$godz,
		'title'=>$title,		// can be bilingual (use | to separate)
		'circle'=>$circle,
		'suffix'=>$suffix,		// can be bilingual (use | to separate)
		'path'=>$path,
		'linkFlag'=>$linkFlag, 	// 0 - try to link, 1 - force $short link; value 0 attempts to link W-$short.html & $short.html if those exist (in that order) otherwise it returns <span> around ( $title + ' ' + $suffix )
	);
}

//schedule
$s[1]['d'] = '06.08.2021 <span class="day">piątek</span>|06.08.2021 <span class="day">Friday<span>';
$s[1][t][] = record('o01','10:00','I Otwarty Turniej Par|Side Game Series - 1<sup>st</sup> tournament',green,'(3x10)');
$s[1][t][] = record('k01','17:00','I Kongresowy Turniej Par|Main Series - 1<sup>st</sup> tournament',blue,'(3x10)');
$s[1][t][] = record('a01','17:15','I Turniej Par Amatorów|Newcomer Series - 1<sup>st</sup> tournament',amator,'');
$s[2]['d'] = '07.08.2021 <span class="day">sobota</span>|07.08.2021 <span class="day">Saturday<span>';
$s[2][t][] = record('k02','10:00','II Kongresowy Turniej Par|Main Series - 2<sup>nd</sup> tournament',blue,'(3x10)');
$s[2][t][] = record('k03','17:00','III Kongresowy Turniej Par|Main Series - 3<sup>rd</sup> tournament',blue,'(3x10)');
$s[3]['d'] = '08.08.2021 <span class="day">niedziela</span>|08.08.2021 <span class="day">Sunday<span>';
$s[3][t][] = record('k04','10:00','<strong>Budimex Grand Prix Polski</strong> - IV Kongresowy Turniej Par|<strong>Budimex Grand Prix of Poland</strong> - Main Series - 4<sup>th</sup> tournament',gppp,'(5x10)');
$s[4]['d'] = '09.08.2021 <span class="day">poniedziałek</span>|09.08.2021 <span class="day">Monday<span>';
$s[4][t][] = record('mpt05','10:00','V KTT - Mistrzostwa Polski Teamów - eliminacje cz. I|Polish Open Team Championship',mpt,'');
$s[4][t][] = record('mpt05','16:30','V KTT - Mistrzostwa Polski Teamów - eliminacje cz. II|Polish Open Team Championship',mpt,'');
$s[5]['d'] = '10.08.2021 <span class="day">wtorek</span>|10.08.2021 <span class="day">Tuesday<span>';
$s[5][t][] = record('o02','10:00','II Otwarty Turniej Par|Side Game Series - 2<sup>nd</sup> tournament',green,'(3x10)');
$s[5][t][] = record('mpt05','10:00','V KTT - Mistrzostwa Polski Teamów – 1/4+1/8|Polish Open Team Championship',mpt,'');
$s[5][t][] = record('k06','17:00','VI Kongresowy Turniej Par|Main Series - 6<sup>th</sup> tournament',blue,'(3x10)');
$s[5][t][] = record('a02','17:15','II Turniej Par Amatorów|Newcomer Series - 2<sup>nd</sup> tournament',amator,'');
$s[6]['d'] = '11.08.2021 <span class="day">środa</span>|11.08.2021 <span class="day">Wednesday<span>';
$s[6][t][] = record('o03','10:00','III Otwarty Turniej Par|Side Game Series - 3<sup>rd</sup> tournament',green,'(3x10)');
$s[6][t][] = record('mpt05','10:00','V KTT - Mistrzostwa Polski Teamów – półfinał|Polish Open Team Championship',mpt,'');
$s[6][t][] = record('k07','17:00','VII Kongresowy Turniej Par Mikstowych|Main Series - 7<sup>th</sup> tournament',blue,'(3x10)');
$s[6][t][] = record('o04','17:00','IV Otwarty Turniej Par|Side Game Series - 4<sup>th</sup> tournament',green,'(3x10)');
$s[7]['d'] = '12.08.2021 <span class="day">czwartek</span>|12.08.2021 <span class="day">Thursday<span>';
$s[7][t][] = record('o05','10:00','V Otwarty Turniej Par|Side Game Series - 5<sup>th</sup> tournament',green,'(3x10)');
$s[7][t][] = record('mpt05','10:00','V KTT - Mistrzostwa Polski Teamów finał i mecz o 3m.|Polish Open Team Championship',mpt,'');
$s[7][t][] = record('k08','17:00','VIII Kongresowy Turniej Par - na zapis średni|Main Series - 8<sup>th</sup> tournament',blue,'(3x10)');
$s[7][t][] = record('a03','17:15','III Turniej Par Amatorów|Newcomer Series - 3<sup>rd</sup> tournament',amator,'(3x10)');
$s[8]['d'] = '13.08.2021 <span class="day">piątek</span>|13.08.2021 <span class="day">Friday<span>';
$s[8][t][] = record('k09','10:00','IX Kongresowy Turniej Indywidualny|Main Series - 9<sup>th</sup> tournament',blue,'(3x10)');
$s[8][t][] = record('k10','17:00','X Kongresowy Turniej Par|Main Series - 10<sup>th</sup> tournament',blue,'(3x10)');
$s[9]['d'] = '14.08.2021 <span class="day">sobota</span>|14.08.2021 <span class="day">Saturday<span>';
$s[9][t][] = record('k11','10:00','XI Kongresowy Turniej Par|Main Series - 11<sup>th</sup> tournament',blue,'(4x10)');
$s[9][t][] = record('','16:30','Ceremonia zakończenia Kongresu|Prize Giving Ceremony',blank,' ');