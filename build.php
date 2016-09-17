<?php

$pages = ['index'] + array_map(function($v) { return basename($v, '.php'); }, glob('pages/*.php'));

function process_page($html) {
	return preg_replace_callback('@((index\\.php)|((index\\.php)?\\?pg=([\\w\\-\\.]+)))@i', function($s) {
		if (isset($s[5])) {
			return "{$s[5]}.html";
		} else {
			return 'index.html';
		}
		//print_r($s);
		//exit;
		//return $s[0];
	}, $html);
	//return $html;
}



foreach ($pages as $MPAGE) {
	ob_start();
	$_GET = ($MPAGE == 'index') ? [] : ['pg' => $MPAGE];
	include 'index.php';
	$html = ob_get_clean();
	echo "$MPAGE.html\n";
	file_put_contents("$MPAGE.html", process_page($html));
}
print_r($pages);
