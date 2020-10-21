<?php

$data_url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vTjgIjA2npCEQrqKQWMjVjZE0pdSa9wdQ6_GkHPz3y4eEuDw2-DBErcAZx0KkleFNSNXNNhnr7FWtws/pub?gid=0&single=true&output=csv"; // directly from spreadsheet

$website_title = "Linked Open Cultural Data in Canada";
$website_url = "https://mariandoerk.de/temp/lod3/"; // with trailing slash

$website_description = "Recent activity related to linked open cultural data, with a focus on Canadian initiatives and diversity matters over the past 5 years.";

$about_section = 'Recent activity related to linked open cultural data, with a focus on Canadian initiatives and diversity matters over the past 5 years. This is a work-in-progress and we want it to grow: <a href="https://forms.gle/kgw3B4B5oKLpovwRA">suggest an addition</a>.';

$contact_details ='
This version of the <a href="https://github.com/nrchtct/linkedlists">Linked Lists</a> tool emerges from a collaboration between the <a href="https://uclab.fh-potsdam.de/">UCLAB</a> and <a href="http://lincsproject.ca/">LINCS</a>, which will extend the <a href="https://github.com/nrchtct/linkedlists_lod3">code</a> to work with linked data.<br><br>		
	
Connect with LINCS: <a href="https://lincsproject.ca/">Web</a> · 
<a id="email" href="mailto:lincs@uoguelph.ca?subject=Linked%20List%20Visualization">Email</a> · 
<a href="https://twitter.com/lincsproject">Twitter</a>';

// should match column names in data.csv
$facet_left = "organizations";
$facet_middle = "collaborators";
$facet_right = "keywords";

// should be used in type column
$types = array("Events", "Projects", "Publications");

?>