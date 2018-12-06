<?php
header("Refresh:600");
set_time_limit(100);
//error_reporting(0);
ignore_user_abort(1);
session_start();
require_once('fungsi.php');






$TimeZone="+7";

$_time=gmdate("H", time() + ($TimeZone * 60 * 60));

$jual1 = array('cookies' => 'ds_user=jualfollowers_indo01;shbid=18600;shbts=1542643868.0739284;rur=FTW;mid=W_LgmgABAAHnCfKklg23V5zD36Jh;ds_user_id=3176983775;urlgen="{}:1gOm8i:sdWN-KypKvMcZeND3AnJ1yg_1WU";sessionid=IGSCba312c72f0852b1610f21be4cb06b85903e001215c7c4e22a81ba9817eb8b774%3A4QoV2q5hTjSdCKWtDaCndXHSzxHhmgBT%3A%7B%22_auth_user_id%22%3A3176983775%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223176983775%3AbjgKvjBaHr2LAPMKPMVfQeGoNthwmzmC%3A7c49bb7b0980f116b4591b5298d48e8d7ff4ec416b4bb337591b75f12d13b57b%22%2C%22last_refreshed%22%3A1542643868.0860495567%7D;mcd=3;csrftoken=cF4NW1s6DUFuqI7q8tfMgfxHVKPHLbit;', 'useragent' => 'Instagram 6.22.0 Android (11/2.5.4; 320; 480x800; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-7230b2b03e2da37352abf1a659545b447', 'username' => 'jualfollowers_indo01', 'id' => '3176983775');

$jual2 = array('cookies' => 'ds_user=jualfollowers_indo02;rur=ATN;mid=W_LgzwABAAHPPqqMJvOfUItR5KSz;ds_user_id=1645284584;urlgen="{}:1gOm9Y:qdizpiS9IBHlHtUNHYRBzbKLY8o";sessionid=IGSC6ebb93bb9290604feedc34a0393c9f7a8afcbc2df3da1e96d5d84de218cd71f6%3AA0tXlNdoRXnQEdF3NhVu9QE5ZFNp7MGS%3A%7B%22_auth_user_id%22%3A1645284584%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%221645284584%3AVNsBEAIxK2qKLEHhhwfYkq5S1jwBHGuo%3A2cadbcbfe19e138e8e8db3041a0936cf34b6bb3bccf5cd691afd1d8c95c0efda%22%2C%22last_refreshed%22%3A1542643920.0920348167%7D;mcd=3;csrftoken=2CO0HgKfFOVtFICFKvo98qsmBhQnT04Y;', 'useragent' => 'Instagram 6.22.0 Android (11/1.3.1; 160; 480x320; samsung; GT-N7000; GT-N7000; smdkc210; en_US)', 'device_id' => 'android-466473650870501e3600d9a1b4ee5d447', 'username' => 'jualfollowers_indo02', 'id' => '1645284584');

$jual3 = array('cookies' => 'ds_user=jualfollowers_indo03;shbid=18600;shbts=1542643985.6444218;rur=FTW;mid=W_LhEAABAAFRaHGgp0f_emE_p60L;ds_user_id=3064940313;urlgen="{}:1gOmAb:lg_or-mjP-E4hcUqq6lVtsPvwA0";sessionid=IGSCd5dc2dae139ac171fc4a5fe3cb5e72d0a5b738f5d167aa777d1bfc19d9267af8%3A28LogKAxGCvlQKS2vEb4BnxtfJgGs3t8%3A%7B%22_auth_user_id%22%3A3064940313%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223064940313%3AnPN5ohyBFMkHSOLNxraD9YCOye1NsJ6y%3A4519c78aab90e90dd8a4b97e31a1d2ca296311ca1903ffd9aff72bf36397c6d7%22%2C%22last_refreshed%22%3A1542643985.6590006351%7D;mcd=3;csrftoken=f4TZbXkeHdKghaVeVlj5TypEgfrh0PjO;', 'useragent' => 'Instagram 6.22.0 Android (10/1.3.5; 240; 480x320; samsung; GT-N7000; GT-N7000; smdkc210; en_US)', 'device_id' => 'android-5a16bce575f3ddce9c819de125ba00297', 'username' => 'jualfollowers_indo03', 'id' => '3064940313');

$jual4 = array('cookies' => 'ds_user=jualfollowers_indo04;rur=ATN;mid=W_LhMwABAAHgGhZ2Q8PdCmuYrzNq;ds_user_id=2535286616;urlgen="{}:1gOmBA:CzbZEBbOZg3OkLVKBRdmnBfKn0Y";sessionid=IGSC9c9778f8e4d2cba14ff68df85ba2234e1560bc7f649b057d29ecc692836fee21%3AiBkqE8LdA0yMU3nWC4dHcXiWPdmCQGRQ%3A%7B%22_auth_user_id%22%3A2535286616%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%222535286616%3AEN9h6Q7oVkzPpnp4hBbSDJiAI5TFgRlU%3Ad9b3700142232956af54d83db0218e7e7aeb966d5096fcbd84513e639f3885bd%22%2C%22last_refreshed%22%3A1542644020.3660786152%7D;mcd=3;csrftoken=FX5evQ8XG2RQzj56rURskJH8k0gsnquG;', 'useragent' => 'Instagram 6.22.0 Android (10/1.5.0; 120; 1280x720; samsung; GT-I9100; GT-I9100; smdkc210; en_US)', 'device_id' => 'android-1f187c8bc462403c4646ab271007edf47', 'username' => 'jualfollowers_indo04', 'id' => '2535286616');

$jual5 = array('cookies' => 'ds_user=jualfollowers_indo05;rur=ATN;mid=W_LhWAABAAGnAGU5PY-0FFCVAFQ2;ds_user_id=1532645397;urlgen="{}:1gOmBl:FaZucEsmZSxL0utI9zmPjVCuR4U";sessionid=IGSCba783b4256d0d327b2ba73e24555c4a2929a12096977d5b019de1dea3656b0cb%3And7hm9sbrLVA4bbV3RHfGf12AnD1zQJg%3A%7B%22_auth_user_id%22%3A1532645397%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%221532645397%3AyX43G9SjQPSvEl0vsHnn26ulBbLMkPZ2%3A6f33326ac133e1edb14d5ca0b43470881226df964c3ce0693b1469d88e94f200%22%2C%22last_refreshed%22%3A1542644057.059194088%7D;mcd=3;csrftoken=8wWBFg4nSRVqian7WyCHdY0d9396vUXl;', 'useragent' => 'Instagram 6.22.0 Android (11/1.3.5; 240; 1080x1920; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-5e5dd00d770ef3e9154a4257edcb80b82', 'username' => 'jualfollowers_indo05', 'id' => '1532645397');

$jual6 = array('cookies' => 'ds_user=jualfollowers_indo06;shbid=18600;shbts=1542644814.474719;rur=FRC;mid=W_LkTQABAAEqcd9qBnKSUqZoojgX;ds_user_id=2901403596;urlgen="{}:1gOmNy:l2XKIDU0Zk83Cr5ySYP1IbkH0jg";sessionid=IGSC76881f0da4c30bd3034fc83b492705b33afa7ece801b68c5f1f36624eb95d64c%3Ac2JkH86yNGm4AW1zkWVfGYz8j3zIFbSi%3A%7B%22_auth_user_id%22%3A2901403596%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%222901403596%3A4b7PEoB8YLEZSS6LKVGzY6LlVQGk9N8w%3A2666106d2628012e5184e33e5d3b6e9ff849ba7ed47cdaa6b5906b3d6f20e449%22%2C%22last_refreshed%22%3A1542644814.4917042255%7D;mcd=3;csrftoken=K6y6X6UOVTdxbRagwOieDWzCC33KWtXK;', 'useragent' => 'Instagram 6.22.0 Android (10/3.4.1; 240; 480x320; samsung; GT-I9100; GT-I9100; smdkc210; en_US)', 'device_id' => 'android-41a60377ba920919939d83326ebee5a14', 'username' => 'jualfollowers_indo06', 'id' => '2901403596');

$jual7 = array('cookies' => 'ds_user=jualfollowers_indo07;shbid=18600;shbts=1542644871.6090705;rur=FRC;mid=W_LkhgABAAFBCOVG5ldj_KcdFL64;ds_user_id=2148275435;urlgen="{}:1gOmOt:pHiocJNViYPH3qXMrH_RcCTamKE";sessionid=IGSCea4a1a6e3568826d68edc82ed224f3dc6ca9c9f13a968e6fc3f18b9171e6712b%3AmunpEuTBCsvLMnUpt4YRgpGFcZSaCaQv%3A%7B%22_auth_user_id%22%3A2148275435%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%222148275435%3A9pSQ0UDiWRKV2vy0oWUE0eRGqquXMpyq%3A693f9f8e82226e77eb2e363b869a37b32eff521531dcc4662be8119ca4d7f82e%22%2C%22last_refreshed%22%3A1542644871.6192400455%7D;mcd=3;csrftoken=U9qT5dqOPrnALTwD3IyVBDN3slzPCwFM;', 'useragent' => 'Instagram 6.22.0 Android (10/1.5.3; 120; 1280x720; samsung; GT-N7000; GT-N7000; smdkc210; en_US)', 'device_id' => 'android-250b164d84ea39a488422da8500786e66', 'username' => 'jualfollowers_indo07', 'id' => '2148275435');

$agen1 = array('cookies' => 'ds_user=agenfollowersindo1;shbid=1413;shbts=1542645025.563884;rur=FRC;mid=W_LlIAABAAEogRr_CJ3Kiii9_TpX;ds_user_id=5809110785;urlgen="{}:1gOmRN:306raoxaG_USMP-ch5BI9ziYxb0";sessionid=IGSC6930dbccaa2ac772f0a89fcddcc5c19059e6ae42f28a5b641477960d060be66a%3AjoFO1hk2633YHOVo7bPKiz85IjNy2d0I%3A%7B%22_auth_user_id%22%3A5809110785%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%225809110785%3Ab7FJuj8WaIw2wMab31qWJ8LaIuI7QiLh%3A8e82d8d01749e7d1b447e9a37265245598561990a8610a74c06bf71063a50972%22%2C%22last_refreshed%22%3A1542645025.5737202168%7D;mcd=3;csrftoken=aXouyE6MlwUFLCNrzv73GxNSCgkqFLix;', 'useragent' => 'Instagram 6.22.0 Android (11/3.4.0; 240; 1080x1776; samsung; GT-I9220; GT-I9220; smdkc210; en_US)', 'device_id' => 'android-1bc0249a6412ef49b07fe6f62e6dc8de4', 'username' => 'agenfollowersindo1', 'id' => '5809110785');

$agen2 = array('cookies' => 'ds_user=agenfollowersindo2;shbid=18600;shbts=1542645070.7345562;rur=ATN;mid=W_LlTQABAAG45lwWSpNxmfF0cdPo;ds_user_id=7552529546;urlgen="{}:1gOmS6:0nOT_7v1m7ZX03Py4a996prOm6I";sessionid=IGSC56bcfaf7cc839f2d8c2502c27470e8891f0bf501455f63853e232df0f916bcf7%3Aig4aZNqVfdHQQGneIQU7yDjJP9jRZHYv%3A%7B%22_auth_user_id%22%3A7552529546%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%227552529546%3AWV6MsIeifgVaCQINHq0bmvNLmYrmftF6%3A4d858da024e2b325ad98dc5bbf4d6cd377c7bfcf477d774b243d8d87eff52f6b%22%2C%22last_refreshed%22%3A1542645070.7437462807%7D;mcd=3;csrftoken=pHzrACzDrZaiJ8wnUwxNr1MRiIoz0t6n;', 'useragent' => 'Instagram 6.22.0 Android (10/3.3.2; 120; 1080x1920; samsung; GT-I9100; GT-I9100; smdkc210; en_US)', 'device_id' => 'android-6abcc8f24321d1eb8c95855eab78ee958', 'username' => 'agenfollowersindo2', 'id' => '7552529546');

$agen3 = array('cookies' => 'ds_user=agenfollowersindo3;shbid=1636;shbts=1542645101.3463833;rur=FRC;mid=W_LlbAABAAFg22nMkSiNaIVNY93Y;ds_user_id=3013641682;urlgen="{}:1gOmSb:m9_YO5CULY3x6e_VsCDd_qiF7Co";sessionid=IGSC330adea53e294c44ec419b86e038a6e963abf618104cf1b649e6a0d42bb0c694%3A8yrf8kgydFngGUu6D4wvWLFaKCOZ836d%3A%7B%22_auth_user_id%22%3A3013641682%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223013641682%3A9C0B5vsN29B8BkIUa6vyrWkFyi9hAqt7%3Af17751edcc12f15ab5ed11c2aeeecc54dfa1721fb95cf834f9d1af78a7d7112a%22%2C%22last_refreshed%22%3A1542645101.3555672169%7D;mcd=3;csrftoken=AVAOJeiIH90ZFRJoHkg7Dp3zlmkCxbCF;', 'useragent' => 'Instagram 6.22.0 Android (10/2.5.0; 160; 720x1280; samsung; GT-N7000; GT-N7000; smdkc210; en_US)', 'device_id' => 'android-cff02a74da64d145a4aed3a577a106ab2', 'username' => 'agenfollowersindo3', 'id' => '3013641682');

$agen4 = array('cookies' => 'ds_user=agenfollowersindo4;shbid=18600;shbts=1542645138.9244816;rur=FRC;mid=W_LlkQABAAEcZ-lw_q-KKyaUhmOO;ds_user_id=5843301631;urlgen="{}:1gOmTC:ISD_hHhm8iFIu5wz3t-3iDk4FCk";sessionid=IGSC80468d0a8c35d52666c43250f8fc2ec77fa0fd6f4d968cbde5cedc689fcc72df%3AobCXYqhytfl0jBkzDrobXACFogUQ0z9R%3A%7B%22_auth_user_id%22%3A5843301631%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%225843301631%3AEk8ZoojJk5l6T7v0Txz2fJUMP1U2JpmS%3A7eda89651338663bd68ffb4f3016915cbba7b973f9ec600ea0ff259cc0a09993%22%2C%22last_refreshed%22%3A1542645138.9386777878%7D;mcd=3;csrftoken=LFF7Gs9ywE5jh4o3TuPXQNuUcBXp2fGL;', 'useragent' => 'Instagram 6.22.0 Android (10/3.5.1; 240; 1080x1776; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-2056d8c1dec3d12cbce646b348d189d14', 'username' => 'agenfollowersindo4', 'id' => '5843301631');

$agen5 = array('cookies' => 'ds_user=agenfollowersindo5;shbid=5680;shbts=1542645214.6916406;rur=FRC;mid=W_Ll3QABAAFeUi22EXiOyAPjlpp6;ds_user_id=3210662220;urlgen="{}:1gOmUQ:dYDoMLmaoQGYyEDCyUV-Qi7L7cI";sessionid=IGSC1f6bf5c7b27c04f5c59709b983ab3542eb3edb5a990fe98c0f95a9d48b029cac%3AIzasN0TPRhf9R37xIjDcA4owI4jEOHi7%3A%7B%22_auth_user_id%22%3A3210662220%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223210662220%3ANYeA3sp2vQO4MT1GjmKzNKcl2btW5wWI%3A90e2911ae08dd85da0c4bcf7478dba405ff0c4769739f67312d41d56c8617974%22%2C%22last_refreshed%22%3A1542645214.7063195705%7D;mcd=3;csrftoken=v1JUuqcOTne7PVdSc16z6dxVfB6zRK4p;', 'useragent' => 'Instagram 6.22.0 Android (10/3.5.3; 160; 1024x768; samsung; GT-I9100; GT-I9100; smdkc210; en_US)', 'device_id' => 'android-04600eed1bd16e8fe259baa0a436ed023', 'username' => 'agenfollowersindo5', 'id' => '3210662220');

    $token = array($agen1, $agen2, $agen3, $agen4, $agen5, $jual1, $jual2, $jual3, $jual4, $jual5, $jual6, $jual7);

    $limit = 100;

    $target = "522969993";

    while($limit > 0){
    foreach ($token as $data) {
 		        eksekusi('followers',$data,$target);
                sleep(20);
    }
        $limit -= 25
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
			print 100-$GLOBALS['limit'].' '.$data['username'].' succes follow '.$listids[$i].' status-> '.$cross->status.''.PHP_EOL;

	if($cross->status != 'ok'){
		$GLOBALS['limit']=0;
		break;

	}
	$GLOBALS['limit']--;
	sleep(1);
	endfor;

	}


?>
