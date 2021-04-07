<?php
$server_headers = array(
  'SERVER_SOFTWARE'       => 'Apache/2.2.15 (Linux) Whatever/4.0 PHP/5.2.13',
  'REQUEST_METHOD'        => 'POST',
  'HTTP_HOST'             => 'home.ghita.org',
  'HTTP_X_REAL_IP'        => '1.2.3.4',
  'HTTP_X_FORWARDED_FOR'  => '1.2.3.5',
  'HTTP_CONNECTION'       => 'close',
  'HTTP_USER_AGENT'       => 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0_1 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A523 Safari/8536.25',
  // 'HTTP_ACCEPT'           => 'text/vnd.wap.wml, application/json, text/javascript, */*; q=0.01',
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
$md = new Mobile_Detect( $server_headers );
$is_mobile = $md->isMobile();
echo $is_mobile ? 'true' : 'false';

// $regex = '; \bPixel\b';
// $foo = sprintf('#%s#is', $regex);
// echo $foo;