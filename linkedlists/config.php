<?php

// $data_url = "https://gist.githubusercontent.com/alliyya/d43b8cd389eec3e6306f35eac5733076/raw/fc9b897f93a59e7267d8e9be17bc1f8d8a7f38ad/clode_data.csv"; // leave empty if local data.csv is used
$data_url = "https://gist.githubusercontent.com/alliyya/d43b8cd389eec3e6306f35eac5733076/raw/5d11c698eb0fa1a5b837554aaefc7e0bbeb96d46/clode_data_extra.csv"; // This has the additional data including organizations

$website_title = "LINCS Connections";
$website_url = "https://mariandoerk.de/linkedlists/globalvoics/"; // with trailing slash

$website_description = "Dataset and visualization by the Linked Infrastructure for Networked Cultural Scholarship (LINCS)";

$about_section = 'Visualizing the links within our network of collaborators to highlight the breadth, depth, and connectedness of our partnership';

$contact_details ='
<a href="https://lincsproject.ca/">lincsproject.ca</a><br>
<a id="email" href="mailto:lincs@uoguelph.ca?subject=Linked%20List%20Visualization">lincs@uoguelph.ca</a><br>
<a href="https://twitter.com/lincsproject">@lincsproject</a>';

// should match column names in data.csv
$facet_left = "keywords";
$facet_right = "organizations";
$facet_middle = "";

// should be used in type column
$types = array("Events", "Projects", "Publications");

?>