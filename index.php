<?php 

include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='index.html') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='about.html') {
	include $browser_t.'/about.html';
	}
elseif ($page_name=='bloginner.html') {
	include $browser_t.'/bloginner.html';
	}
elseif ($page_name=='blogsingle.html') {
	include $browser_t.'/blogsingle.html';
	}
elseif ($page_name=='icons.html') {
	include $browser_t.'/icons.html';
	}
elseif ($page_name=='iconsingle.html') {
	include $browser_t.'/iconsingle.html';
	}
elseif ($page_name=='contact.html') {
	include $browser_t.'/contact.html';
	}
elseif ($page_name=='contact-post.html') {
	include $browser_t.'/contact.html';
	include 'app/contact.php';
	}
//else
	//{
		//include $browser_t.'/404.html';  //comentada porque tira un warning hasta entender el porque!!!!
	//}

?>