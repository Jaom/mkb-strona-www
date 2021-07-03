<?php

// those values will be used as dots before the torunaments
define(amator,	'<span class="circle amator"></span>');
define(blue,	'<span class="circle kongresowy"></span>');
define(green,	'<span class="circle otwarty"></span>');
define(mpt,		'<span class="circle mpt"></span>');
define(halfHalf,'<span class="left kongresowy"></span><span class="right otwarty"></span>');
define(gppp,	'<span class="circle gppp"></span>');
define(blank,	'<span class="circle blank"></span>');

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

// schedule
$s[1]['d'] = '4.08.2017 <span class="day">piątek</span>|4.08.2017 <span class="day">Friday</span>';
$s[1][t][] = record('o01','10:00',' I Otwarty Turniej Par|Side Game Series - 1<sup>st</sup> tournament',green,'(3x10)');
$s[1][t][] = record('k01','17:00','I Kongresowy Turniej Par <strong>im. Leszka Wesołowskiego</strong>|Main Series - 1<sup>st</sup> tournament <strong>in memory of Leszek Wesołowski</strong>',blue,'(3x10)');

$s[2]['d'] = '5.08.2017 <span class="day">sobota</span>|5.08.2017 <span class="day">Saturday</span>';
$s[2][t][] = record('k02','10:00','II Kongresowy Turniej Par|Main Series - 2<sup>nd</sup> tournament',blue,'(3x10)');
$s[2][t][] = record('k03','17:00','FUN<strong>BRIDGE</strong> - III Kongresowy Turniej Par|FUN<strong>BRIDGE</strong> - Main Series - 3<sup>rd</sup> tournament',blue,'(3x10)');

$s[3]['d'] = '6.08.2017 <span class="day">niedziela</span>|6.08.2017 <span class="day">Sunday</span>';
$s[3][t][] = record('k04','10:00','<strong>Budimex GPPP</strong> - IV Kongresowy Turniej Par|<strong>Budimex Grand Prix of Poland</strong> - Main Series - 4<sup>th</sup> tournament',gppp,'(5x10)');

$s[4]['d'] = '7.08.2017 <span class="day">poniedziałek</span>|7.08.2017 <span class="day">Monday</span>';
$s[4][t][] = record('elleaderb','10:00','V KTT - Mistrzostwa Polski Teamów - eliminacje|Polish Open Team Championship - qualifications',mpt,'(8x4)','t/',1);
$s[4][t][] = record('r16runda1','17:00','V KTT - Mistrzostwa Polski Teamów - knockout Ro16|Polish Open Team Championship - knock-out Ro16',mpt,'(2x16)','t/',1);
$s[4][t][] = record('grupyleaderb','17:00','V KTT - Mistrzostwa Polski Teamów - grupy|Polish Open Team Championship - groups',mpt,'(7x4)','t/',1);
$s[4][t][] = record('qfrunda1','19:00','V KTT - Mistrzostwa Polski Teamów - ćwierćfinał i repasaże|Polish Open Team Championship - quarterfinal',mpt,'(2x16)','t/',1);


$s[5]['d'] = '8.08.2017 <span class="day">wtorek</span>|8.08.2017 <span class="day">Tuesday</span>';
$s[5][t][] = record('sfrunda1','10:00','V KTT - Mistrzostwa Polski Teamów - półfinał|Polish Open Team Championship - semifinal',mpt,'(4x8)','t/',1);
$s[5][t][] = record('rep2runda1','10:00','V KTT - Mistrzostwa Polski Teamów - repasaże|Polish Open Team Championship - loosers\' bracket',mpt,'(R2)','t/',1);
$s[5][t][] = record('rep3runda1','13:00','V KTT - Mistrzostwa Polski Teamów - repasaże|Polish Open Team Championship - loosers\' bracket',mpt,'(R3)','t/',1);
$s[5][t][] = record('o02','10:00','II Otwarty Turniej Par|Side Game Series - 2<sup>nd</sup> tournament',green,'(3x10)');
$s[5][t][] = record('k06','17:00','FUN<strong>BRIDGE</strong> - VI Kongresowy Turniej Par Mixtowych|FUN<strong>BRIDGE</strong> - Mixt - Main Series - 6<sup>th</sup> tournament',blue,'(3x10)');
$s[5][t][] = record('o03','17:00','FUN<strong>BRIDGE</strong> - III Otwarty Turniej Par|FUN<strong>BRIDGE</strong> - Side Game Series - 3<sup>rd</sup> tournamen',green,'(3x10)');

$s[6]['d'] = '9.08.2017 <span class="day">środa</span>|9.08.2017 <span class="day">Wednesday</span>';
$s[6][t][] = record('frunda1','10:00','V KTT - Mistrzostwa Polski Teamów - finał|Polish Open Team Championship - final',mpt,'','t/',1);
$s[6][t][] = record('rep4runda1','10:00','V KTT - Mistrzostwa Polski Teamów - repasaże|Polish Open Team Championship - loosers\' bracket',mpt,'(R4)','t/',1);
$s[6][t][] = record('rep5runda1','13:00','V KTT - Mistrzostwa Polski Teamów - mecz o trzecie miejsce|Polish Open Team Championship - loosers\' bracket',mpt,'','t/',1);
$s[6][t][] = record('o04','10:00','IV Otwarty Turniej Par - Cavendish uśr.|Side Game Series - 4<sup>th</sup> tournament - cross-IMPs',green,'(3x10)');
$s[6][t][] = record('k07','17:00','VII Kongresowy Turniej Par <strong>im. Jerzego Komorowskiego</strong>|Main Series - 7<sup>th</sup> tournament <strong>in memory of Jerzy Komorowski</strong>',blue,'(3x10)');
$s[6][t][] = record('a01','17:15','I Turniej Par Amatorów|Newcomer Series - 1<sup>st</sup> tournament',amator,'(2x10)');

$s[7]['d'] = '10.08.2017 <span class="day">czwartek</span>|10.08.2017 <span class="day">Thursday</span>';
$s[7][t][] = record('k08','10:00','VIII Kongresowy i Otwarty Turniej Indywidualny|Individual - Open & Main Series - 8<sup>th</sup> tournament',halfHalf,'(30)');
$s[7][t][] = record('k09','17:00','<strong>Compensa</strong> - IX Kongresowy Turniej Par - Cavendish uśr.|<strong>Compensa</strong> - Main Series - 9<sup>th</sup> tournament - cross-IMPs',blue,'(3x10)');
$s[7][t][] = record('a02','17:15','II Turniej Par Amatorów|Newcomer Series - 2<sup>nd</sup> tournament',amator,'(2x10)');
$s[7][t][] = record('a02_max','17:15','II Turniej Par Amatorów - MAXy|Newcomer Series - 2<sup>nd</sup> tournament - match points',amator,'(2x10)');

$s[8]['d'] = '11.08.2017 <span class="day">piątek</span>|11.08.2017 <span class="day">Friday</span>';
$s[8][t][] = record('o05','10:00','V Otwarty Turniej Par|Side Game Series - 5<sup>th</sup> tournament',green,'(3x10)');
$s[8][t][] = record('k10','17:00','FUN<strong>BRIDGE</strong> - X Kongresowy Turniej Par|FUN<strong>BRIDGE</strong> - Main Series - 10<sup>th</sup> tournament',blue,'(3x10)');
$s[8][t][] = record('a03','17:15','III Turniej Par Amatorów|Newcomer Series - 3<sup>rd</sup> tournament',amator,'(2x10)');

$s[9]['d'] = '12.08.2017 <span class="day">sobota</span>|12.08.2017 <span class="day">Saturday</span>';
$s[9][t][] = record('k11','10:00','<strong>PWZBS</strong> - XI Kongresowy Turniej Par o Puchar Prezesa|<strong>The Gdańsk Bridge Union Cup</strong> - Main Series - 11<sup>th</sup> tournament',blue,'(4x10)');
$s[9][t][] = record('','17:10','Ceremonia zakończenia Kongresu|Prize Giving Ceremony',blank);
