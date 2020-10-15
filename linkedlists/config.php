<?php

// $data_url = "https://gist.githubusercontent.com/alliyya/d43b8cd389eec3e6306f35eac5733076/raw/fc9b897f93a59e7267d8e9be17bc1f8d8a7f38ad/clode_data.csv"; // leave empty if local data.csv is used
$data_url = "https://gist.githubusercontent.com/alliyya/d43b8cd389eec3e6306f35eac5733076/raw/5d11c698eb0fa1a5b837554aaefc7e0bbeb96d46/clode_data_extra.csv"; // This has the additional data including organizations

$website_title = "Linked Open Cultural Data in Canada";
$website_url = "https://mariandoerk.de/linkedlists/globalvoics/"; // with trailing slash

$website_description = "Recent activity related to linked open cultural data, with a focus on Canadian initiatives and diversity matters over the past 5 years.";

$about_section = 'This is a work-in-progress and we want it to grow: <a href="https://forms.gle/kgw3B4B5oKLpovwRA">suggest an addition</a>.<br>
This beta of the Linked Open Lists tool emerges from collaboration between the <a href="https://uclab.fh-potsdam.de/">Urban Complexity Lab</a> and <a href="http://lincsproject.ca/">LINCS</a>, which will extend the <a href="https://github.com/nrchtct/linkedlists_lod3">code</a> to work with linked data.';

$contact_details ='
<a href="https://lincsproject.ca/">lincsproject.ca</a><br>
<a id="email" href="mailto:lincs@uoguelph.ca?subject=Linked%20List%20Visualization">lincs@uoguelph.ca</a><br>
<a href="https://twitter.com/lincsproject">@lincsproject</a>';

// should match column names in data.csv
$facet_left = "keywords";
$facet_right = "organizations";
$facet_middle = "collaborators";

// should be used in type column
$types = array("Events", "Projects", "Publications");

?>