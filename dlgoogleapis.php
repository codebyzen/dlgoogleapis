<?php
/**
 * Author: codebyzyen
 * URL: https://github.com/codebyzyen/dlgoogleapis
 * URL to get info about hosted libraries https://developers.google.com/speed/libraries
 */

$url = "https://ajax.googleapis.com/ajax/libs/";

$versions = array_map('trim', explode(", ",'1.4.5, 1.4.4, 1.4.3, 1.4.2, 1.4.1, 1.4.0'));
$files = ["jquery.mobile.min.js","jquery.mobile.min.css"];
$path = "jquerymobile";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'3.4.1, 3.4.0, 3.3.1, 3.2.1, 3.2.0, 3.1.1, 3.1.0, 3.0.0, 2.2.4, 2.2.3, 2.2.2, 2.2.1, 2.2.0, 2.1.4, 2.1.3, 2.1.1, 2.1.0, 2.0.3, 2.0.2, 2.0.1, 2.0.0, 1.12.4, 1.12.3, 1.12.2, 1.12.1, 1.12.0, 1.11.3, 1.11.2, 1.11.1, 1.11.0, 1.10.2, 1.10.1, 1.10.0, 1.9.1, 1.9.0, 1.8.3, 1.8.2, 1.8.1, 1.8.0, 1.7.2, 1.7.1, 1.7.0, 1.6.4, 1.6.3, 1.6.2, 1.6.1, 1.6.0, 1.5.2, 1.5.1, 1.5.0, 1.4.4, 1.4.3, 1.4.2, 1.4.1, 1.4.0, 1.3.2, 1.3.1, 1.3.0, 1.2.6, 1.2.3'));
$files = ["jquery.min.js"];
$path = "jquery";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'1.12.1, 1.12.0, 1.11.4, 1.11.3, 1.11.2, 1.11.1, 1.11.0, 1.10.4, 1.10.3, 1.10.2, 1.10.1, 1.10.0, 1.9.2, 1.9.1, 1.9.0, 1.8.24, 1.8.23, 1.8.22, 1.8.21, 1.8.20, 1.8.19, 1.8.18, 1.8.17, 1.8.16, 1.8.15, 1.8.14, 1.8.13, 1.8.12, 1.8.11, 1.8.10, 1.8.9, 1.8.8, 1.8.7, 1.8.6, 1.8.5, 1.8.4, 1.8.2, 1.8.1, 1.8.0, 1.7.3, 1.7.2, 1.7.1, 1.7.0, 1.6.0, 1.5.3, 1.5.2'));
$files = ["jquery-ui.min.js","themes/smoothness/jquery-ui.css"];
$path = "jqueryui";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'5.9.7, 5.9.2, 5.9.0, 5.8.0, 5.7.0, 4.13.0, 3.5.17'));
$files = ["d3.min.js"];
$path = "d3js";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'1.13.0, 1.12.3, 1.12.2, 1.12.1, 1.11.5, 1.11.4, 1.11.3, 1.11.2, 1.11.1, 1.10.9, 1.10.8, 1.10.7, 1.10.6, 1.10.5, 1.10.4, 1.10.3, 1.10.2, 1.10.1, 1.10.0, 1.9.11, 1.9.10, 1.9.9, 1.9.8, 1.9.7, 1.9.6, 1.9.5, 1.9.4, 1.9.3, 1.9.2, 1.9.1, 1.9.0, 1.8.14, 1.8.13, 1.8.12, 1.8.11, 1.8.10, 1.8.9, 1.8.8, 1.8.7, 1.8.6, 1.8.5, 1.8.4, 1.8.3, 1.8.2, 1.8.1, 1.8.0, 1.7.12, 1.7.11, 1.7.10, 1.7.9, 1.7.8, 1.7.7, 1.7.6, 1.7.5, 1.7.4, 1.7.3, 1.7.2, 1.7.1, 1.7.0, 1.6.5, 1.6.4, 1.6.3, 1.6.2, 1.6.1, 1.6.0, 1.5.6, 1.5.5, 1.5.4, 1.5.3, 1.5.2, 1.5.1, 1.5.0, 1.4.8, 1.4.7, 1.4.6, 1.4.5, 1.4.4, 1.4.3, 1.4.1, 1.4.0, 1.3.2, 1.3.1, 1.3.0, 1.2.3, 1.2.0, 1.1.1'));
$files = ["dojo/dojo.js"];
$path = "dojo";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'3.1.0, 3.0.0'));
$files = ["ext-core.js"];
$path = "ext-core";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'2.0.8'));
$files = ["hammer.min.js"];
$path = "hammerjs";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'1.6.0, 1.5.2, 1.5.1, 1.5.0, 1.4.5, 1.4.4, 1.4.3, 1.4.2, 1.4.1, 1.4.0, 1.3.2, 1.3.1, 1.3.0, 1.2.5, 1.2.4, 1.2.3, 1.2.2, 1.2.1, 1.1.2, 1.1.1'));
$files = ["mootools.min.js", "mootools-yui-compressed.js"];
$path = "mootools";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'1.0.1, 1.1.0, 1.1.1'));
$files = ["zawgyi_detector.min.js", "zawgyi_converter.min.js"];
$path = "myanmar-tools";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'1.7.3.0, 1.7.2.0, 1.7.1.0, 1.7.0.0, 1.6.1.0, 1.6.0.3, 1.6.0.2'));
$files = ["prototype.js"];
$path = "prototype";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'1.9.0, 1.8.3, 1.8.2, 1.8.1'));
$files = ["scriptaculous.js"];
$path = "scriptaculous";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'2.5.5, 2.5.4, 2.5.3, 2.5.2, 2.5.1, 2.5.0, 2.5.0-beta3, 2.5.0-beta2, 2.5.0-beta, 2.4.7, 2.4.6, 2.4.5, 2.4.4, 2.4.3, 2.4.2, 2.4.1, 2.4.0, 2.3.10, 2.3.9, 2.3.8, 2.3.7, 2.3.6, 2.3.5, 2.3.4, 2.3.3, 2.3.2, 2.3.1, 2.3.0, 2.2.10, 2.2.9, 2.2.8, 2.2.7, 2.2.6, 2.2.5, 2.2.4, 2.2.1, 2.2.0, 2.1.9, 2.1.8, 2.1.7, 2.1.6, 2.1.5, 2.1.4, 2.1.3, 2.1.2, 2.1.1, 2.1.0, 2.0.9, 2.0.8, 2.0.6, 1.6.5'));
$files = ["shaka-player.compiled.js"];
$path = "shaka-player";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'2.4.0, 2.3.2, 2.3.1, 2.3.0, 2.2.0, 2.1.2, 2.1.1, 2.1.0, 2.0.1, 2.0.0'));
$files = ["spf.js"];
$path = "spf";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'2.2, 2.1'));
$files = ["swfobject.js"];
$path = "swfobject";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'r84, r83, r82, r81, r80, r79, r78, r77, r76, r75, r74, r73, r72, r71, r70, r69, r68, r67, r49'));
$files = ["threejs.min.js"];
$path = "threejs";
ajaxgoogleapisdownload($versions,$url,$files,$path);


$versions = array_map('trim', explode(", ",'1.6.26, 1.6.16, 1.5.18, 1.5.10, 1.5.6, 1.5.3, 1.5.2, 1.5.0'));
$files = ["webfont.js"];
$path = "webfont";
ajaxgoogleapisdownload($versions,$url,$files,$path);


/* ================================== */

function ajaxgoogleapisdownload($versions,$url,$files,$path) {
	echo strtoupper($path).PHP_EOL;
	$path = 'ajax.googleapis.com/ajax/libs/'.$path;
	@mkdir('./'.$path);
	foreach($versions as $ver) {
		if (file_exists('./'.$path.'/'.$ver.'/'.$files[0])) {
			echo $ver."\t - EXIST".PHP_EOL;
			continue;
		}
		mkdir('./'.$path.'/'.$ver, 0777, true);
		foreach($files as $file) {
			if (pathinfo($file)['dirname']!=='.' && pathinfo($file)['dirname']!=='./') {
				@mkdir($path.'/'.$ver.'/'.pathinfo($file)['dirname'],0777,true);
			}

			$fdata=@file_get_contents($url.$path.'/'.$ver.'/'.$file);
			if (strlen($fdata)==0 || $fdata===0) {
				echo $file."\t - SKIP".PHP_EOL;
			} else {
				file_put_contents('./'.$path.'/'.$ver.'/'.$file,$fdata);
			}
		}
		echo $ver."\t - DOWNLOADED".PHP_EOL;
	}
}