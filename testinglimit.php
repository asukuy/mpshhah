<?php
header("Refresh:600");
set_time_limit(100);
//error_reporting(0);
ignore_user_abort(1);
session_start();
require_once('fungsi.php');





$TimeZone="+7";

$_time=gmdate("H", time() + ($TimeZone * 60 * 60));


$agen1 = array('cookies' => 'ds_user=agenfollowers_1;shbid=18600;shbts=1544338498.0283096;rur=PRN;mid=XAy8QAABAAH1yaQdmSDCQA59PNmc;ds_user_id=5809110785;urlgen="{\"182.1.121.81\": 23693}:1gVszS:5MII0PywCkO5ET_7Br7y-tUYWqU";sessionid=IGSC30a842d4b5dbcba083696b7765bc7de4c549c433f2677ab71f33023dcf391a62%3AtamPwCXirrYI7CYRcdBbPLU7Gj9u1vlA%3A%7B%22_auth_user_id%22%3A5809110785%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%225809110785%3AczBaPErKOoTGGBoLAxFf3DQZRPyLIOh4%3A29d733434429ddb6f33dd732b296df706965ba2e9fb5ec45002fa0248f38d36b%22%2C%22last_refreshed%22%3A1544338498.036734581%7D;mcd=3;csrftoken=1Fggy7kbltMJ2Y3pDgpqpZ6Pape03yX9;', 'useragent' => 'Instagram 6.22.0 Android (10/2.5.0; 120; 1024x768; samsung; GT-N7000; GT-N7000; smdkc210; en_US)', 'device_id' => 'android-3a077e8acfc4a2b463c47f2125fdfac52', 'username' => 'agenfollowers_1', 'id' => '5809110785');

$agen2 = array('cookies' => 'ds_user=agenfollowers_2;shbid=18600;shbts=1544338608.3093984;rur=PRN;mid=XAy8rwABAAH-JhewGEQVdZP8MUQb;ds_user_id=7552529546;urlgen="{\"182.1.121.81\": 23693}:1gVt1E:iBu5A-rOW4-zsdI91VBcOj9xRNk";sessionid=IGSC825c15011b3f6a33c670c4cbe53b8c5de14cb733215e563d8c84e20670442152%3AuTHrdNbfDu8Pz3asxLPALued23Ka0rZc%3A%7B%22_auth_user_id%22%3A7552529546%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%227552529546%3A3xEWA1uKNZhSutTwZ7KZJJDOLBuRR8rK%3Adb13f816b6abd5fa74ca2064f228def5abfcdee08b71c7f91944e486052c3a44%22%2C%22last_refreshed%22%3A1544338608.324352026%7D;mcd=3;csrftoken=7BX4EohDIGZ0V3VPrPoPtNoZCaaqh9KH;', 'useragent' => 'Instagram 6.22.0 Android (10/2.5.3; 160; 720x1280; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-b035d6563a2adac9f822940c145263ce6', 'username' => 'agenfollowers_2', 'id' => '7552529546');

$agen3 =  array('cookies' => 'ds_user=agenfollowers_3;shbid=1636;shbts=1544338719.1427147;rur=PRN;mid=XAy9HgABAAFVcMYgT0Zr6nN2TOV3;ds_user_id=3013641682;urlgen="{\"182.1.121.81\": 23693}:1gVt31:WKQ2Oz62DfkHpwlDpXKz9ofcdo4";sessionid=IGSC057c8f58ba20f66a43c9f5dd271171cfb2d1db86e89dca47d6602867270fdb49%3AzKBSMxqZJ1xXAKG9lD0S1mwpH8fskCkm%3A%7B%22_auth_user_id%22%3A3013641682%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223013641682%3AN28iYew7jGWD4VpYxXu0Ei87LXr89ift%3A4874139324be6105b7e26176d88174d36eea39f605353b51d1ecc77c261ab2b1%22%2C%22last_refreshed%22%3A1544338719.1549510956%7D;mcd=3;csrftoken=qJcx0FPWlU3m3F9McQ6Wtat7Q8ppISbK;', 'useragent' => 'Instagram 6.22.0 Android (10/1.5.1; 160; 1080x1776; samsung; GT-N7000; GT-N7000; smdkc210; en_US)', 'device_id' => 'android-7f6caf1f0ba788cd7953d817724c2b6e9', 'username' => 'agenfollowers_3', 'id' => '3013641682');

$jual1 = array('cookies' => 'ds_user=agenfollowers_6;shbid=18600;shbts=1544338886.6620114;rur=FRC;mid=XAy9xQABAAEG8KS07q_Oox56fpjy;ds_user_id=3176983775;urlgen="{\"182.1.109.78\": 23693}:1gVt5i:NITxmgT6TU3DTEtbTTrPAYqXY8Y";sessionid=IGSC7d073187c58374352450be25e0923c3a1244f84a1c6a3e4d5c55791db41c3ee8%3APv3A1cKEpYs1WQveJ7PQNxVIt7cJF1EQ%3A%7B%22_auth_user_id%22%3A3176983775%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223176983775%3ACZYaOVwcJH2xHHW9gM4fCeVaOnTXinbV%3A420875d5fbc2a9fcaca810c64e7adfd974132b410ba765ec854001f7946fd888%22%2C%22last_refreshed%22%3A1544338886.6743876934%7D;mcd=3;csrftoken=qDDONZjVm83e2Ypj3KJpMFNMAZ3pyUFO;', 'useragent' => 'Instagram 6.22.0 Android (11/1.5.1; 320; 480x800; samsung; GT-I9220; GT-I9220; smdkc210; en_US)', 'device_id' => 'android-31bd51a7403b980bf1039518120712e04', 'username' => 'agenfollowers_6', 'id' => '3176983775');


$jual2 = array('cookies' => 'ds_user=agenfollowers_7;rur=FTW;mid=XAy-aQABAAEzEZdwFIBFm4ELDYIW;ds_user_id=1645284584;urlgen="{\"114.124.246.50\": 23693}:1gVt8M:VHoYJ9XS4EiyAmzNJ1FUHG6n8ww";sessionid=IGSC918b5c24243e14bcec897b7aaff2580f3dcdff06d28a6401fcc612c1c154c939%3AcmR70p9n12XfBUJOJImIUhzPamvFYQdo%3A%7B%22_auth_user_id%22%3A1645284584%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%221645284584%3AFnqwFMe5GykU6DZF5z7ic70wApp80d8J%3A1ba68b4f632dc0adf4a86be76c8dc0605bd6747735476dcd6ea506c5e35b8284%22%2C%22last_refreshed%22%3A1544339050.3041985035%7D;mcd=3;csrftoken=XJVf5by5MXYXJFV7yrwLMeFyxEEEQnjT;', 'useragent' => 'Instagram 6.22.0 Android (11/2.4.4; 320; 1080x1776; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-d7f6db68da03fee4df7856f3323dd3806', 'username' => 'agenfollowers_7', 'id' => '1645284584');

$jual3 = array('cookies' => 'ds_user=agenfollowers_8;shbid=18600;shbts=1544339907.0090292;rur=ATN;mid=XAzBwgABAAGBDxLgMZBGiLGnxSnb;ds_user_id=3064940313;urlgen="{\"114.124.211.51\": 23693}:1gVtMB:XYjYb71pdQdLCqHnSZitac1m7XI";sessionid=IGSC426cb68f3d7cf1af7dfe3f029ea6eb0038ac2fbbdbb1d1e05b7d9faf93e7f639%3ARAOgUMqlOtY0BAX1m2hHdILe7bCoRMcl%3A%7B%22_auth_user_id%22%3A3064940313%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223064940313%3AMrtQVbRrM7HMl1KIbWM1ixyXLEJ5zUdX%3Aa14ede2a704cb4a1aa71c9a237de0d2f768f4f25d4113df9f0ede24b5193d983%22%2C%22last_refreshed%22%3A1544339907.0172097683%7D;mcd=3;csrftoken=8scDWQ83hxKv3KDsqmmht964qgYDfANF;', 'useragent' => 'Instagram 6.22.0 Android (11/3.4.3; 120; 480x800; samsung; GT-I9100; GT-I9100; smdkc210; en_US)', 'device_id' => 'android-c133fb1bb634af68c5088f3438848bfd6', 'username' => 'agenfollowers_8', 'id' => '3064940313');


$jual4 = array('cookies' => 'ds_user=agenfollowers_9;rur=FTW;mid=XAzCDAABAAEbpmtCOcYO23s4vNja;ds_user_id=2535286616;urlgen="{\"114.124.246.50\": 23693}:1gVtNM:U2Aakl6DuFEHsUgE7hoPaVIUrYM";sessionid=IGSC690859b399d075d7a2169e4526ecbe2ddf50e881f09ecd19bf371458258180c9%3AxxSvttktRO4Jw0WiZ7YUqvbO7bIxZPVm%3A%7B%22_auth_user_id%22%3A2535286616%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%222535286616%3Aj4TDnH5qRncHm3dbtkXmMkE6M69OgBtp%3A63331dc66c2fffd563557b5c57353f425f187f01d851d7f64cbae19b99a74cdb%22%2C%22last_refreshed%22%3A1544339980.9590935707%7D;mcd=3;csrftoken=Zc4UBwaVWs72Ih3jK4ZpdC6catxLqvTu;', 'useragent' => 'Instagram 6.22.0 Android (10/3.5.2; 160; 1080x1920; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-fc0de4e0396fff257ea362983c2dda5a7', 'username' => 'agenfollowers_9', 'id' => '2535286616');

$jual5 = array('cookies' => 'ds_user=agenfollowers_10;shbid=18600;shbts=1544343310.2200952;rur=FTW;mid=XAzPDQABAAHz90oKFETQMDD2EF8R;ds_user_id=2901403596;urlgen="{\"114.125.76.125\": 23693}:1gVuF4:dACX2W0yUTbGW9HXxrN9ub3wtO8";sessionid=IGSCa4910656c71c4d1d0b75c854d30a7feab1e3b7331e413e0d6d6831c59dae7f28%3AqfREORSRNWgSW6JT9WGERYpvCr1GtXBg%3A%7B%22_auth_user_id%22%3A2901403596%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%222901403596%3AKn1kRXQVSSwCIN4y0KYTZA5Qr0l1wQzc%3Ab286e94ca14f307d737416aca59f321b037f7fb10c221e256e27f2cf1cc7d267%22%2C%22last_refreshed%22%3A1544343310.2289297581%7D;mcd=3;csrftoken=S9Y1bPTmCsrfYY7TdKzc438ZcDlacmWd;', 'useragent' => 'Instagram 6.22.0 Android (10/1.3.1; 240; 1024x768; samsung; GT-I9220; GT-I9220; smdkc210; en_US)', 'device_id' => 'android-b1adda14824f50ef24ff1c05bb66faf38', 'username' => 'agenfollowers_10', 'id' => '2901403596');

$jual6 = array('cookies' => 'ds_user=agenfollowers_11;shbid=18600;shbts=1544343286.7521546;rur=FTW;mid=XAzO9QABAAHCjDh_y7xEUlqRtAaT;ds_user_id=2148275435;urlgen="{\"114.125.76.125\": 23693}:1gVuEg:VHAOzBMMLj-wZSYJD_08d5YkWCU";sessionid=IGSCd08a6ae63790c416d616203880173a527cf7bbdfc1688879e216550ebcbba312%3A19WgdWgGc3FQWx6G0y3HETRjoMOpITrc%3A%7B%22_auth_user_id%22%3A2148275435%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%222148275435%3An7ZiJ9WNfHLJEw3HuEIbT4xw4f7ytIDf%3A5d84240e8416f3d01b4b8936aaae58344a67744c01b4a8ccea8d5d40be5c866d%22%2C%22last_refreshed%22%3A1544343286.7614579201%7D;mcd=3;csrftoken=970QADBHuN7yi4NGhQ9XELtSWN51IMxc;', 'useragent' => 'Instagram 6.22.0 Android (11/1.5.2; 320; 720x1280; samsung; GT-I9220; GT-I9220; smdkc210; en_US)', 'device_id' => 'android-e8d92f99edd25e2cef48eca48320a1a52', 'username' => 'agenfollowers_11', 'id' => '2148275435');

  

 $token = array($agen1,$agen2,$agen3,$jual1,$jual2,$jual3,$jual4, $jual5, $jual6);

    $limit = 100;

    $target = "522969993";

    for($i=0;$i<5;$i++){
    foreach ($token as $data) {
                        eksekusi('followers',$data,$target);
                sleep(20);
    }

    sleep(600);
    }
    
 	//$getinfo = proccess(1, $data['useragent'], 'users/'.$target.'/info/');
 	

	function eksekusi($tipe,$data,$target){	
				$target = ($tipe=='following') ? $data['id'] : $target;
				$jumlah= "25";
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
			print 25-$GLOBALS['limit'].' '.$data['username'].' succes follow '.$listids[$i].' status-> '.$cross->status.''.PHP_EOL;

	if($cross->status != 'ok'){
		$GLOBALS['limit']=0;
		break;	
		
	}
	$GLOBALS['limit']--;
	sleep(1);
	endfor; 	

	}


?>
