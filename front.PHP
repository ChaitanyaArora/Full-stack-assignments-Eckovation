<?php
$start = "timesofindia.com";
$already_crawled = array();
$crawling = array();
function get_details($url) {
	foreach ($crawling as $site) {
		follow_links($site);
	}
}

follow_links($start);