<?php
	// split incoming strings by separator
	// and pick right language

	
	// process schedule
	foreach($s as $day)
	{
		// day header
		echo '
		<section>
			<header>
				<h3>'.bilingual($day['d']).'</h3>
			</header>
			
			<ol>';
		
		// show thournaments of the day
		if(is_array($day['t']))
		foreach($day['t'] as $turn)
		{
			
			// setting 	$end, $begin & $icon	for auto-linking
			
			if($turn['linkFlag']) // hardcoded link CAREFULL - it adds 'html'
			{
				$end = '</a>';
				$begin = '<a href="'.$turn['path'].$turn['short'].'.html?'.$t.'" target="_blank">';
				$icon = '';
			}
			else if(file_exists($turn['path'].'W-'.$turn['short'].'.html')) // finished torunament
			{
				$end = '</a>';
				$begin = '<a href="'.$turn['path'].'W-'.$turn['short'].'.html?'.$t.'" target="_blank">';
				$icon = '';
			}
			else if(file_exists($turn['path'].$turn['short'].'.html')) // live torunament
			{
				$end = '</a>';
				$begin = '<a href="'.$turn['path'].$turn['short'].'.html" target="_blank">';
				$icon = '<i class="fa fa-refresh fa-spin"></i>';
			}
			else // scheduled torunament
			{
				$end = '';
				$begin = '';
				$icon = '';
			}
			
			// debugging code (?)
			//if($turn['path']) echo $turn['path'].$turn['short'];
			
			// torunament entry basing on $end, $begin & $icon
			echo '
			<li>'.$turn['circle'].'
				<time datetime="PLACEHOLDER">'.$turn['godz'].'</time>
					'.$icon.' '.$begin.' '.bilingual($turn['title']).' '.bilingual($turn['suffix']).' '.$end.'';
		}
		
		// close the day
		echo '
		</section>
		';
	}
?>