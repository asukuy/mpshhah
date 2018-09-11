<?php

set_time_limit(100);
error_reporting(0);
ignore_user_abort(1);
session_start();
require_once('fungsi.php');





$TimeZone="+7";

$_time=gmdate("H", time() + ($TimeZone * 60 * 60));

$_SESSION['data'] = array('cookies' => 'ds_user=followergratis2019_001;shbid=5680;shbts=1536651690.61206;rur=ASH;mid=W5dxqQABAAFq8AVa8U3O4ad7gyVS;ds_user_id=3210662220;urlgen="{}:1fzdIg:Qvm3ntKyjBzGr_o3CWy7_eJ7qrY";sessionid=IGSC886a94dab9e846ad7ef9d0d063295522e499bea835df9e9ab35cad4f975265e6%3AuZa8Pljstv6bcbAEJzt9uzZU5XZIhYiR%3A%7B%22_auth_user_id%22%3A3210662220%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223210662220%3AVc4U8JW6CicZElpd4VIGnpZF8tHzUlf4%3A57bfed162d4f7f5c597c7489d58760c162342b84cc2dc7148334ff69e31b2cc4%22%2C%22last_refreshed%22%3A1536651690.6223759651%7D;mcd=3;csrftoken=24maFPfN2jnuHBmJspqsF0SBSijqZ6Kk;', 'useragent' => 'Instagram 6.22.0 Android (11/1.5.5; 240; 480x320; samsung; GT-N7000; GT-N7000; smdkc210; en_US)', 'device_id' => 'android-97e48472142cfdd1cd5d5b5ca6831cf42', 'username' => 'followergratis2019_001', 'id' => '3210662220');





while(true){
	if($_time>6){
      $jumlah= "15";
        $_POST['tipe'] = "followers";
        $target = "342582658";
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
			print $i.'. <b>@'.$data_session['username'].'</b> <font color="green">Sukses Follow => </font><b style="color:gray;">[ @'.$listids[$i].' ]</b><br>';
			flush();
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
	
	sleep(60);
	
}








?>
