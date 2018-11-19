<?php
header("Refresh:600");
set_time_limit(100);
//error_reporting(0);
ignore_user_abort(1);
session_start();
require_once('fungsi.php');






$TimeZone="+7";

$_time=gmdate("H", time() + ($TimeZone * 60 * 60));

$data = array('cookies' => 'ds_user=jualfollowers_indo014;shbid=18600;shbts=1542548489.3780446;rur=FRC;mid=W_FsCAABAAEusZKu5YLmL-oaXvzI;ds_user_id=2148275435;urlgen="{}:1gONKL:aLzyls1UDgvg3nEEMmviDwvEqTo";sessionid=IGSC1efe8a8b3c4027276295a183832485c6a2cb6121b4879a11ab47ffe4eb2e03d6%3A64x0qPnGCgeeEevaG9m0eN7sH9HiR5cb%3A%7B%22_auth_user_id%22%3A2148275435%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%222148275435%3AneHx6XToe3b1wl1D2AhSUps8U5RNQ33c%3A4b12ab5399e358057a0143563a3f629157c0d2a5b08a20be5130daab547df63a%22%2C%22last_refreshed%22%3A1542548489.3875849247%7D;mcd=3;csrftoken=1daDemVuLtXfdAty5CbUyC7WhMOMSQMU;', 'useragent' => 'Instagram 6.22.0 Android (11/1.5.0; 320; 1024x768; samsung; GT-I9100; GT-I9100; smdkc210; en_US)', 'device_id' => 'android-faf02b2358de8933f480a146f4d2d98e2', 'username' => 'jualfollowers_indo014', 'id' => '2148275435');

    $limit = 500;

    $target = "522969993";
 	//$getinfo = proccess(1, $data['useragent'], 'users/'.$target.'/info/');
 	while ($limit > 0) {
 		        eksekusi('followers',$data,$target);
 		        sleep(rand(20,30));
 		        	}

	function eksekusi($tipe,$data,$target){
				$target = ($tipe=='following') ? $data['id'] : $target;
				$jumlah= "5";
				$getinfo = proccess(1, $data['useragent'], 'users/'.$target.'/info/');
				$getinfo = json_decode($getinfo[1]);
		if($tipe=='followers'):

			if(!is_numeric($jumlah))
				$limit = 1;
			elseif($jumlah>($getinfo->user->follower_count-1))
				$limit = $getinfo->user->follower_count-1;
			else
				$limit = $jumlah-1;
		else:
			if(!is_numeric($jumlah))
				$limit = 1;
			elseif($jumlah>($getinfo->user->following_count-1))
				$limit = $getinfo->user->following_count-1;
		else
				$limit = $jumlah-1;
		endif;


	$c = 0;


	$listids = array();
	do{
		$parameters = ($c>0) ? '?max_id='.$c : '';
		$req = proccess(1, $data['useragent'], 'friendships/'.$target.'/'.$tipe.'/'.$parameters, $data['cookies']);
		$req = json_decode($req[1]);
		for($i=0;$i<count($req->users);$i++):
			if(count($listids)<=$limit)
				$listids[count($listids)] = $req->users[$i]->pk;
		endfor;
		$c = (isset($req->next_max_id)) ? $req->next_max_id : 0;
	}while(count($listids)<=$limit);


	for($i=0;$i<count($listids);$i++):
			if($tipe == 'followers')
				$cross = proccess(1, $data['useragent'], 'friendships/create/'.$listids[$i].'/', $data['cookies'], hook('{"user_id":"'.$listids[$i].'"}'));
			else
				$cross = proccess(1, $data['useragent'], 'friendships/destroy/'.$listids[$i].'/', $data['cookies'], hook('{"user_id":"'.$listids[$i].'"}'));

			$cross = json_decode($cross[1]);
			print 500-$GLOBALS['limit'].' '.$data['username'].' succes follow '.$listids[$i].' status-> '.$cross->status.''.PHP_EOL;

	if($cross->status != 'ok'){
		$GLOBALS['limit']=0;
		break;

	}
	$GLOBALS['limit']--;
	sleep(rand(20,30));
	endfor;

	}


?>
