<?php
	/*NAMING CONVENTION
		This page 	=> lowercase with - (e.g. fixed-header)
		Github link => titlecase with - (e.g. Fixed-Header)
	*/

	$pageID 	= basename(__FILE__, '.php'); //Pick up from filename; 
	$pageTITLE 	= ucwords(str_replace("-"," ",$pageID)); //'Convert $pageID to title case e.g. Fixed Header';
	$pageDESC 	= 'Free open source Tailwind CSS '. $pageTITLE .' starter template';
	$pageURL 	= 'https://www.tailwindtoolbox.com/templates/'.$pageID;
	$pageImage	= 'https://www.tailwindtoolbox.com/templates/'.$pageID.'.png';

	$pageCODE 	= ''; //$pageID.'-code.php';
	$pageSRC 	= $pageID.'-demo.php';
	$pageGIT 	= 'https://github.com/tailwindtoolbox/'.str_replace(" ","-",$pageTITLE);
	$pageDL 	= 'https://github.com/tailwindtoolbox/'.str_replace(" ","-",$pageTITLE).'/archive/master.zip';

	$pageOFFSET = '0';
	$pageINTRO	= 'This starter template contains:<br>
                   <p>*Expanding sidebar menu (on hover)</p>
                   <p>*Three columns for dashboard elements, which all collapse into a single column on mobile.</p>
                   <p>*Based on a dribble shot - <a href="https://dribbble.com/shots/6531694-Marketing-Dashboard" target="_blank" rel="noopener">Marketing Dashboard</a> by <a href="https://dribbble.com/gregoirevella" target="_blank" rel="noopener">Gregoire Vella</a></p>
                   <p>*Placeholder graphs using <a href="https://gionkunz.github.io/chartist-js/" target="_blank" rel="noopener">Chartist.js</a></p>';


	$bulletCode = '<svg class="inline flex-none mb-1 mr-4 h-6 fill-current text-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
				   <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z" />
			   </svg>';		
?>

	<?php include '_template.php';?>