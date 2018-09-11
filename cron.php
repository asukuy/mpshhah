<?php
header("Refresh:1");
set_time_limit(500);
ignore_user_abort(1);
session_start();

echo "string";
$file = file_get_contents("./count.txt");
$edit = fopen("count.txt","w");
$txt = cek($file);

fwrite($edit,$txt);
fclose($edit);

if($txt<10)
{
    $url= "followergratiscekbio00$txt.php";
}

else{
    $url= "followergratiscekbio0$txt.php";
}


 $curl_handle=curl_init();
  curl_setopt($curl_handle,CURLOPT_URL,'localhost/php/bot/'.$url.'');
  curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
  curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
  $buffer = curl_exec($curl_handle);
  curl_close($curl_handle);
  if (empty($buffer)){
      print "Nothing returned from url.<p>";
  }
  else{
      print $buffer;
  }

function cek ($param)
{

if($param>13)
{
    return 2;

}

else

return $param+1;

}


?>