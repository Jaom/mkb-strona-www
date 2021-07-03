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
				$begin = '<a href="'.$turn['path'].$turn['short'].'.html?'.$t.'" target="_top">';
				$icon = '';
			}
			else 
				$plikTC = ($turn['path'].$turn['short'].'/settings.json');
				if(file_exists($plikTC)) //does TC exist?
			{
				$settings_string = file_get_contents($plikTC);
				if (strpos($settings_string,'"LiveResults":true')>0) 
				{
					$end = '</a>';
					$begin = '<a href="'.$turn['path'].$turn['short'].'" target="_top">';
					$icon = '<i class="fa fa-refresh fa-spin"></i>';
				}
				else 
				{
					$end = '</a>';
					$begin = '<a href="'.$turn['path'].$turn['short'].'" target="_top">';
					$icon = '';
				}
			}

			else if(file_exists($turn['path'].'W-'.$turn['short'].'.html')) // finished torunament
			{
				$end = '</a>';
				$begin = '<a href="'.$turn['path'].'W-'.$turn['short'].'.html?'.$t.'" target="_top">';
				$icon = '';
			}
			else if(file_exists($turn['path'].$turn['short'].'.html')) // live torunament
			{
				$end = '</a>';
				$begin = '<a href="'.$turn['path'].$turn['short'].'.html" target="_top">';
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