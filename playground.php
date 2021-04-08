<?php
function bool_to_string( $bool ) {
	return $bool ? 'true' : 'false';
}

// $server_headers = array(
//   'SERVER_SOFTWARE'       => 'Apache/2.2.15 (Linux) Whatever/4.0 PHP/5.2.13',
//   'REQUEST_METHOD'        => 'POST',
//   'HTTP_HOST'             => 'home.ghita.org',
//   'HTTP_X_REAL_IP'        => '1.2.3.4',
//   'HTTP_X_FORWARDED_FOR'  => '1.2.3.5',
//   'HTTP_CONNECTION'       => 'close',
//   'HTTP_USER_AGENT'       => 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0_1 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A523 Safari/8536.25',
//   // 'HTTP_ACCEPT'           => 'text/vnd.wap.wml, application/json, text/javascript, */*; q=0.01',
//   'HTTP_ACCEPT_LANGUAGE'  => 'en-us,en;q=0.5',
//   'HTTP_ACCEPT_ENCODING'  => 'gzip, deflate',
//   'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
//   'HTTP_REFERER'          => 'http://mobiledetect.net',
//   'HTTP_PRAGMA'           => 'no-cache',
//   'HTTP_CACHE_CONTROL'    => 'no-cache',
//   'REMOTE_ADDR'           => '11.22.33.44',
//   'REQUEST_TIME'          => '01-10-2012 07:57'
// );

// Mobile.
$pixel_3_xl = array(
  'SERVER_SOFTWARE'       => 'Apache/2.2.15 (Linux) Whatever/4.0 PHP/5.2.13',
  'REQUEST_METHOD'        => 'POST',
  'HTTP_HOST'             => 'home.ghita.org',
  'HTTP_SAVE_DATA'        => 'on',
  'HTTP_X_REAL_IP'        => '1.2.3.4',
  'HTTP_X_FORWARDED_FOR'  => '1.2.3.5',
  'HTTP_UPGRADE_INSECURE_REQUESTS' => '1',
  'HTTP_CONNECTION'       => 'keep-alive',
  'HTTP_USER_AGENT'       => 'Mozilla/5.0 (Linux; Android 11; sdk_gphone_x86_arm) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36',
  'HTTP_ACCEPT'           => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'HTTP_ACCEPT_LANGUAGE'  => 'en-us,en;q=0.5',
  'HTTP_ACCEPT_ENCODING'  => 'gzip, deflate',
  'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
  'HTTP_REFERER'          => 'http://mobiledetect.net',
  'HTTP_PRAGMA'           => 'no-cache',
  'HTTP_CACHE_CONTROL'    => 'no-cache',
  'REMOTE_ADDR'           => '11.22.33.44',
  'REQUEST_TIME'          => '01-10-2012 07:57'
);

// Tablet.
$pixel_c = array(
  'SERVER_SOFTWARE'       => 'Apache/2.2.15 (Linux) Whatever/4.0 PHP/5.2.13',
  'REQUEST_METHOD'        => 'POST',
  'HTTP_HOST'             => 'home.ghita.org',
  'HTTP_SAVE_DATA'        => 'on',
  'HTTP_X_REAL_IP'        => '1.2.3.4',
  'HTTP_X_FORWARDED_FOR'  => '1.2.3.5',
  'HTTP_UPGRADE_INSECURE_REQUESTS' => '1',
  'HTTP_CONNECTION'       => 'keep-alive',
  'HTTP_USER_AGENT'       => 'Mozilla/5.0 (Linux; Android 11; sdk_gphone_x86_arm) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36',
  'HTTP_ACCEPT'           => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'HTTP_ACCEPT_LANGUAGE'  => 'en-us,en;q=0.5',
  'HTTP_ACCEPT_ENCODING'  => 'gzip, deflate',
  'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
  'HTTP_REFERER'          => 'http://mobiledetect.net',
  'HTTP_PRAGMA'           => 'no-cache',
  'HTTP_CACHE_CONTROL'    => 'no-cache',
  'REMOTE_ADDR'           => '11.22.33.44',
  'REQUEST_TIME'          => '01-10-2012 07:57'
);


require_once 'Mobile_Detect.php';
// $md = new Mobile_Detect( $pixel_3_xl );
$md = new Mobile_Detect( $pixel_c );

// echo '$detect->isMobile() && ! $detect->isTablet(): ' . bool_to_string( $md->isMobile() && ! $md->isTablet() ) . PHP_EOL;
echo '$detect->isTablet(): ' . bool_to_string( $md->isTablet() ) . PHP_EOL;
echo '$detect->isMobile(): ' . bool_to_string( $md->isMobile() ) . PHP_EOL;


// $regex   = '#\biPhone\b|\biPod\b#is';
// // $regex   = '\biPhone\b|\biPod\b';
// $ua      = 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0_1 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A523 Safari/8536.25';
// $matches = array();
// $match   = (bool) preg_match(
//   $regex,
//   $ua,
//   $matches
// );
// echo $match ? 'true' : 'false' . PHP_EOL . PHP_EOL;
// echo var_dump( $matches );