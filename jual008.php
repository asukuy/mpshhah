<?php
set_time_limit(100);
error_reporting(0);
ignore_user_abort(1);
session_start();
require_once('fungsi.php');
$TimeZone="+7";
$_time=gmdate("H", time() + ($TimeZone * 60 * 60));
$jml = 0;
$_SESSION['data'] = array('cookies' => 'ds_user=jualfollowers_indo008;shbid=18600;shbts=1537675823.1577463;rur=PRN;mid=W6cSLgABAAE5RZqJmUOWWfTk1jZ8;ds_user_id=3064940313;urlgen="{}:1g3vix:H-QXQ1bGcSYRpLWOjazuGD-6lzw";sessionid=IGSC74dd11a9871d3849a4a0c18f3184e32003f7ad7ff69019503a62ab3fcf0b26b2%3AhWQCUaCx9YUzkdzj8I4scy9xKnk8DNTP%3A%7B%22_auth_user_id%22%3A3064940313%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223064940313%3AUnU15o4mmwPXXvaf2q2gRsmXUCUtywFL%3A441bd68272bebe14fdfe207c603c005ae904a9743321183dc30213d262adcbf7%22%2C%22last_refreshed%22%3A1537675823.1662318707%7D;mcd=3;csrftoken=XuX1El4HVDmlGVJEzgUrAKCEtUsKqJh9;', 'useragent' => 'Instagram 6.22.0 Android (11/1.5.5; 320; 1024x768; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-0fd600c953cde8121262e322ef09f70e8', 'username' => 'jualfollowers_indo008', 'id' => '3064940313');
while(true){
	if($_time>6){
      $jumlah= "3";
        $_POST['tipe'] = "followers";
        $target = "3261799";
	$data_session = $_SESSION['data'];
	$getinfo = proccess(1, $data_session['useragent'], 'users/'.$target.'/info/');
	$getinfo = json_decode($getinfo[1]);
	if($_POST['tipe']=='followers'):
		if(!is_numeric($jumlah))
			$limit = 1;
		elseif($jumlah>($getinfo->user->follower_count-1))
			$limit = $getinfo->user->follower_count-1;
		else
			$limit = $jumlah-1;
		$tipe = 'followers';
	else:
		if(!is_numeric($jumlah))
			$limit = 1;
		elseif($jumlah>($getinfo->user->follower_count-1))
			$limit = $getinfo->user->follower_count-1;
		else
			$limit = $jumlah-1;
		$tipe = 'followers';
	endif;
	$c = 0;
	$listids = array();
	do{
		$parameters = ($c>0) ? '?max_id='.$c : '';
		$req = proccess(1, $data_session['useragent'], 'friendships/'.$target.'/'.$tipe.'/'.$parameters, $data_session['cookies']);
		$req = json_decode($req[1]);
		for($i=0;$i<count($req->users);$i++):
			if(count($listids)<=$limit)
				$listids[count($listids)] = $req->users[$i]->pk;
		endfor;
		$c = (isset($req->next_max_id)) ? $req->next_max_id : 0;
	}while(count($listids)<=$limit);
	for($i=0;$i<count($listids);$i++):
			$cross = proccess(1, $data_session['useragent'], 'friendships/create/'.$listids[$i].'/', $data_session['cookies'], hook('{"user_id":"'.$listids[$i].'"}'));
			$cross = json_decode($cross[1]);
			print ++$jml.'. <b>@'.$data_session['username'].' Follow => '.$listids[$i].PHP_EOL;
			flush();
     $rand = [97,101,103,93,107,111,113,117];
     		sleep($rand[rand(0,7)]);
	endfor;
}
else
{
        $jumlah= "200";
        $_POST['tipe'] = "following";
	$target = $_SESSION['data']['id'];
	$data_session = $_SESSION['data'];
	$getinfo = proccess(1, $data_session['useragent'], 'users/'.$target.'/info/');
	$getinfo = json_decode($getinfo[1]);
	if($_POST['tipe']=='following'):
		if(!is_numeric($jumlah))
			$limit = 1;
		elseif($jumlah>($getinfo->user->following_count-1))
			$limit = $getinfo->user->following_count-1;
		else
			$limit = $jumlah-1;
		$tipe = 'following';
	else:
		if(!is_numeric($jumlah))
			$limit = 1;
		elseif($jumlah>($getinfo->user->follower_count-1))
			$limit = $getinfo->user->follower_count-1;
		else
			$limit = $jumlah-1;
		$tipe = 'followers';
	endif;
	$c = 0;
	$listids = array();
	do{
		$parameters = ($c>0) ? '?max_id='.$c : '';
		$req = proccess(1, $data_session['useragent'], 'friendships/'.$target.'/'.$tipe.'/'.$parameters, $data_session['cookies']);
		$req = json_decode($req[1]);
		for($i=0;$i<count($req->users);$i++):
			if(count($listids)<=$limit)
				$listids[count($listids)] = $req->users[$i]->pk;
		endfor;
		$c = (isset($req->next_max_id)) ? $req->next_max_id : 0;
	}while(count($listids)<=$limit);
	for($i=0;$i<count($listids);$i++):
			$cross = proccess(1, $data_session['useragent'], 'friendships/destroy/'.$listids[$i].'/', $data_session['cookies'], hook('{"user_id":"'.$listids[$i].'"}'));
			$cross = json_decode($cross[1]);
			print $i.'. <b>@'.$data_session['username'].'</b> <font color="green">Sukses Follow => </font><b style="color:gray;">[ @'.$listids[$i].' ]</b><br>';
			flush();
	endfor;
}
	
	
	
}
?>
