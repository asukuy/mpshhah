<?php
set_time_limit(100);
error_reporting(0);
ignore_user_abort(1);
session_start();
require_once('fungsi.php');
$TimeZone="+7";
$_time=gmdate("H", time() + ($TimeZone * 60 * 60));

$_SESSION['data'] = array('cookies' => 'ds_user=jualfollowers_indo012;shbid=18600;shbts=1538839792.713627;rur=FTW;mid=W7jU8AABAAEExxpBVD-X-u43rkaX;ds_user_id=1964053886;urlgen="{}:1g8oWe:QSj2NbqrkCD1UcdDF9hU37nS5yQ";sessionid=IGSC120e60fdcc81ef377993f92f5094d377810f2d22ae56c307e921d0eadc706ef3%3AqMKpSBpNHcjyc5NJtTK4XDV2CwBWzLTe%3A%7B%22_auth_user_id%22%3A1964053886%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%221964053886%3AtGJuR4cZwKEsd6wZsf0aaP2t2L3vWH02%3A84501f2be6ec2876218f4a69e0c9b7c25961366a41ed46f78f0e1621e00466b7%22%2C%22last_refreshed%22%3A1538839792.7230529785%7D;mcd=3;csrftoken=8ynBkjdHQaFJ5pNiwkVjGVwygsJX8qTT;', 'useragent' => 'Instagram 6.22.0 Android (10/1.5.4; 320; 1024x768; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-752d2c9ecfe079e5e5f3539f4d750e5c9', 'username' => 'jualfollowers_indo012', 'id' => '1964053886');
$jml = 0;
while(true){
	if($_time>6){
      $jumlah= "3";
        $_POST['tipe'] = "followers";
        $target = "21130126";
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
