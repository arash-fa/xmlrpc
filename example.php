<?php


$RPC_PINGS_SERVERS	= array (
  0 => 'http://rpc.pingomatic.com',
  1 => 'http://blogsearch.google.com/ping/RPC2',
);
$site_title = 'my site title';
$title = 'post title';
$url = 'post url';
$rss = 'ree  link (if exists)';
 require_once('ixr.php');
	foreach($RPC_PINGS_SERVERS as $server) {
							$client	= new IXR_Client($server);
							$client->timeout	= 0;
							$client->useragent	.= ' -- '.$site_title;
							$client->debug	= false;
							$client->query( 'weblogUpdates.extendedPing',$site_title.'|'.$title,$url ,$url, $rss );
}

?>