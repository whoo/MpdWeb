<?php
header('Content-Type: application/json');
$cmd=(isset($_GET['cmd']))?$_GET['cmd']:null;

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


$tb=cmd($cmd);
$final=array();
$b=0;
foreach ($tb as $val)
{
list($champ,$value)=preg_split('/:/',$val,2);
if (!isset($final[$champ]))
	$final[$champ]=ltrim($value);
	else $final[$champ.$b++]=ltrim($value);

}
print json_encode($final);
?>
