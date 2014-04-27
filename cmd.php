<?php

function cmd($cmd="ping")
{
$fp=fsockopen('localhost','6600',$err,$errstr,10);
$tb=array();
if ($fp) {
	fgets($fp,128);
	fputs($fp,"$cmd\r\n");
	while (!feof($fp))
	{
		$aaa= fgets($fp,256);
		$tb[]=trim($aaa);
		if (preg_match('/(OK|ACK)/',$aaa)) fputs($fp,"close\r\n");
	}
	fclose($fp);	
}
array_pop($tb);
array_pop($tb);
return $tb;
}

/*$info =cmd("command_list_begin
playlist
command_list_end");
print_r($info); 
*/

#print_r(cmd("listall"));


?>
