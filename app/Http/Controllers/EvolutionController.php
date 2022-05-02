<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Sessions;
use App\Models\Transactions;
use App\Models\Players;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class EvolutionController extends Controller
{

	public function main() 
	{
		return view('evolution');
	}
	
    public static function encryptCasinoToken($plaintext, $password) 
     {
        $method = "AES-256-CBC";
        $key = hash('sha256', $password, true);
        $iv = openssl_random_pseudo_bytes(16);

        $ciphertext = openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv);
        $hash = hash_hmac('sha256', $ciphertext . $iv, $key, true);

        return $iv . $hash . $ciphertext;
    }

    public static function decryptCasinoToken($ivHashCiphertext, $password) 
    {

        $method = "AES-256-CBC";
        $iv = substr($ivHashCiphertext, 0, 16);
        $hash = substr($ivHashCiphertext, 16, 32);
        $ciphertext = substr($ivHashCiphertext, 48);
        $key = hash('sha256', $password, true);

        if (!hash_equals(hash_hmac('sha256', $ciphertext . $iv, $key, true), $hash)) return null;

        return openssl_decrypt($ciphertext, $method, $key, OPENSSL_RAW_DATA, $iv);
    }

    /*
	|--------------------------------------------------------------------------
	| Main functions
	|--------------------------------------------------------------------------
	*/
	public static function genApiExternal($apikey, $slug, $userid)
	{
		$apiURL = 'https://api.dk.games/v2:709:1fCdsFe/createGame?apikey='.$apikey.'&userid='.$userid.'&game='.$slug.'&mode=real&nick=Name';
		//$apiURL = 'https://api.dk.games/v2/createSession?apikey=5D93B01151F1E5CDEA71DE2BC82A77SW&userid=61d2539a7db6404f6a2407a6-local_inr&game='.$slug.'&mode=real&nick=Hhihihinn';
		$response = Http::get($apiURL);
		Log::info($apiURL);
		Log::info($response);
		$url = $response['url'];
		$url_components = parse_url($url);
		// Use parse_str() function to parse the
		// string passed via URL
		parse_str($url_components['query'], $params);
		$url2 = $url;
		$curl = curl_init($url2);
		curl_setopt($curl, CURLOPT_URL, $url2);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt( $curl, CURLOPT_USERAGENT,      'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6'  );
		curl_setopt( $curl, CURLOPT_REFERER,        'https://babylonstk.evo-games.com/frontend/evo/r2/'  );
		$headers = array(
		   "Referer: https://babylonstk.evo-games.com/frontend/evo/r2/",
		   "Accept-Encoding: gzip, deflate, br",
		   "Accept-Language: en-US,en;q=0.9",
		   "Cookie: cdn=https://static.egcdn.com; lang=en; JSESSIONID=".$params['JSESSIONID'],
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

		$resp = curl_exec($curl);
		curl_close($curl);
		return [
			'url' => $url,
			'userID' => $userid,
			'token' => $params['params'],
			'sessionid' => $params['JSESSIONID'],
			'auth-headers' => $headers,
			'auth-resp' => $resp
		];
	}	


    /*
	|--------------------------------------------------------------------------
	| Main functions
	|--------------------------------------------------------------------------
	*/
	public static function genApi($apikey, $slug, $userid)
	{
		//$apiURL = 'https://api.dk.games/v2/createSession?apikey='.$apikey.'&userid='.$userid.'-btc&game='.$slug.'&mode=real&nick=Hhihihinn';
		$apiURL = 'https://api.dk.games/v2/createSession?apikey=5D93B01151F1E5CDEA71DE2BC82A77SW&userid=61d2539a7db6404f6a2407a6-local_inr&game='.$slug.'&mode=real&nick=Hhihihinn';
		$response = Http::get($apiURL);
		$url = $response['url'];
		$url_components = parse_url($url);
		// Use parse_str() function to parse the
		// string passed via URL
		parse_str($url_components['query'], $params);
		$url2 = $url;
		$curl = curl_init($url2);
		curl_setopt($curl, CURLOPT_URL, $url2);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt( $curl, CURLOPT_USERAGENT,      'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6'  );
		curl_setopt( $curl, CURLOPT_REFERER,        'https://babylonstk.evo-games.com/frontend/evo/r2/'  );
		$headers = array(
		   "Referer: https://babylonstk.evo-games.com/frontend/evo/r2/",
		   "Accept-Encoding: gzip, deflate, br",
		   "Accept-Language: en-US,en;q=0.9",
		   "Cookie: cdn=https://static.egcdn.com; lang=en; JSESSIONID=".$params['JSESSIONID'],
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

		$resp = curl_exec($curl);
		curl_close($curl);
		return [
			'url' => $url,
			'userID' => $userid,
			'token' => $params['params'],
			'sessionid' => $params['JSESSIONID'],
			'auth-headers' => $headers,
			'auth-resp' => $resp
		];
	}	
	
	public static function fakeClient($platform)
	{
		if($platform === 'stake') {
			$data = '{"query":"mutation AuthenticateEvolutionUser($slug: String!, $currency: CurrencyEnum!, $target: EvolutionTargetCurrencyEnum!) {\n  authenticateEvolutionUser(slug: $slug, currency: $currency, target: $target)\n}\n","operationName":"AuthenticateEvolutionUser","variables":{"slug":"evolution-blackjack-lobby","currency":"btc","target":"usd"}}';
			$response = Http::withBody($data, 'application/json')
			->withHeaders([
			   "accept" => "*/*",
			   "accept-encoding" => "gzip, deflate, br",
			   "accept-language" => "ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7",
			   "content-length" => "339",
			   "Content-Type" => "application/json",
			   "origin" => "https://stake.com",
			   "referer" => "https://stake.com/",
			   "sec-fetch-dest" => "empty",
			   "sec-fetch-mode" => "cors",
			   "sec-fetch-site" => "same-site",
			   "user-agent" => "Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_1 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.0 Mobile/14E304 Safari/602.1",
			   "x-access-token" => "234826fad7e295e405e36b00392057c3e583483c712c9461161918b4b44e309786fee1af19a6e1ce6c449acf56ed1e41",
			   "x-language" => "ru",
			   "x-lockdown-token" => "s5MNWtjTM5TvCMkAzxov",
			])->post('https://api.stake.com/graphql');
			$response = json_decode($response);
			$url_components = parse_url($response->data->authenticateEvolutionUser);
			parse_str($url_components['query'], $params);
			$evoid = self::evosessionid($params['JSESSIONID'], $params['params']);
			return $evoid;
		} else if($platform === 'our') {
			$apikey = 'DECB41CC90D2FECDA3FDE149B2F40C1';
			$genUsd = self::genApi($apikey, 'es_es-baccarat-a', rand(100, 99999));
			return self::evosessionid($genUsd['sessionid'], $genUsd['token']);
		}
	}


	public function startSessionExternal(Request $request)
	{
		$apikeyEncrypted = $request['cid'];
		$uid = $request['uid'];
		$keyEncrypted = $request['key'];
		$tableId = $request['table_id'] ?? null;
		$lang = $request['lang'] ?? 'en';

        $decryptUserid = self::decryptCasinoToken(hex2bin($uid), $keyEncrypted);
        $decryptApikey = self::decryptCasinoToken(hex2bin($apikeyEncrypted), $decryptUserid);

        Log::notice($decryptApikey);
        Log::notice($decryptUserid);

		$currency = $request['currency'] ?? 'USD';
		$game = 'es_es-baccarat-lobby';
		$gameId = $request['game'] ?? null;

        $explodeUserID = explode('!', $decryptUserid);

		$casinoid = $explodeUserID[0];
		$player = $explodeUserID[1];
		$nick = $request['nick'] ?? $player;
		$userk = DB::table('players')->where('player_id', $player)->first();
		$checkIfEntered = DB::table('sessions')->where('params', $uid)->first();
		

		if($checkIfEntered) {
			return redirect('/error');
		}
		$checkIfEntered = DB::table('sessions')->where('params', $uid)->first();


		$apikey = $decryptApikey ?? 'error';
		$api_data = $this->genApiExternal($apikey, $game, $decryptUserid);
		$cookie = Cookie::make('EVOSESSIONID', $this->evosessionid($api_data['sessionid'], $api_data['token']));
		if($api_data['sessionid']) {
			//$user = DB::table('players')->where('player_id', $player)->first();
			//$user->update(['latest_session' => $api_data['sessionid']]);
			$sessions = DB::table('sessions')->insert([
				'player_id' => $player,
				'casino_id' => $casinoid,
				'session_id' => $api_data['sessionid'],
				'tableid' => $game,
				'params' => $uid,
				'created_at' => now(),
				'updated_at' => now(),
			]);
		}
		$cookie2 = Cookie::make('lang', $lang);
		$cookie3 = Cookie::make('cdn', "https://static.egcdn.com");
		$getCasinoSettings = DB::table('gameoptions')->where('id', $casinoid)->first();
		if( $getCasinoSettings->logo === NULL) {
			$cookie4 = 'https://img.evogames.eu/v1/evogames/evogames-white.png?width=250';
		} else {
			$cookie4 = Cookie::make('logo', $getCasinoSettings->logo);
		}

		if( $getCasinoSettings->cashier_url === NULL) {
			$cookie5 = 'https://evogames.eu';
		} else {
			$cookie5 = Cookie::make('cashier_url', $getCasinoSettings->cashier_url);
		}

		if( $getCasinoSettings->operatorurl === NULL) {
			$cookie6 = 'https://evogames.eu';
		} else {
			$cookie6 = Cookie::make('operatorurl', $getCasinoSettings->operatorurl);
		}
		$cookie7 = Cookie::make('bluePreset', $getCasinoSettings->bluePreset);
		$cookie8 = Cookie::make('lobbycolor', $getCasinoSettings->bgcolor);
		$cookie9 = Cookie::make('chat_enabled', $getCasinoSettings->evoChat);
		$cookie10 = Cookie::make('recent_widget', $getCasinoSettings->evoRecentWidget);
		if($getCasinoSettings->native_currency !== 'USD') {
			return redirect('/error');
		}

		if($tableId !== null) {
		return redirect('/frontend/evo/r2/#table_id='.$tableId.'&category=top_games&lang='.$lang.'&game='.$gameId.'/')->withCookie($cookie)->withCookie($cookie2)->withCookie($cookie3)->withCookie($cookie4)->withCookie($cookie5)->withCookie($cookie6)->withCookie($cookie7)->withCookie($cookie8)->withCookie($cookie9)->withCookie($cookie10);
		} else {
		return redirect('/frontend/evo/r2/#category=top_games&lang='.$lang.'/')->withCookie($cookie)->withCookie($cookie2)->withCookie($cookie3)->withCookie($cookie4)->withCookie($cookie5)->withCookie($cookie6)->withCookie($cookie7)->withCookie($cookie8)->withCookie($cookie9)->withCookie($cookie10);
		}
	}

	public function createPlayerAndSession(Request $request)
	{
		$player = $request['player'] ?? rand(100, 99999);
		$currency = $request['currency'] ?? 'USD';
		$nick = $request['nick'] ?? $player;
		$game = $request['game'] ?? 'es_es-baccarat-a';
		$userid = $player.'-'.$currency;
		$casinoid = $request['casinoid'] ?? 'demo';
		$startingBalance = $request['startingBalance'] ?? 100;
		$userk = DB::table('players')->where('player_id', $player)->first();
		
		if(!$userk) {
			$userc = DB::table('players')->insert([
				'player_id' => $player,
				'casino_id' => $casinoid,
				'balance' => $startingBalance,
				'currency' => $currency,
				'nickname' => $nick,
				'latest_session' => null
			]);
		}
		$apikey = $request['apikey'] ?? '5A2F05295092D6CB0D43FF0C7C933D83';
		$api_data = $this->genApi($apikey, $game, $player);
		$cookie = Cookie::make('EVOSESSIONID', $this->evosessionid($api_data['sessionid'], $api_data['token']));
		if($api_data['sessionid']) {
			//$user = DB::table('players')->where('player_id', $player)->first();
			//$user->update(['latest_session' => $api_data['sessionid']]);
			$sessions = DB::table('sessions')->insert([
				'player_id' => $player,
				'casino_id' => $casinoid,
				'session_id' => $api_data['sessionid'],
				'tableid' => $game,
				'params' => '123'
			]);
		}
		$cookie2 = Cookie::make('lang', 'en');
		$cookie3 = Cookie::make('cdn', "https://static.egcdn.com");
		return redirect('/frontend/evo/r2/#category=top_games')->withCookie($cookie)->withCookie($cookie2)->withCooie($cookie3);
	}

    public static function evosessionid($jsessionid, $params)
    {
		if(!$jsessionid && !$params) return '{"error": true}';
		$url = 'https://babylonstk.evo-games.com/entry?cc=1&JSESSIONID='.$jsessionid.'&embedded&params='.$params;
		// Initialize a CURL session.
		$ch = curl_init();
		  
		// Grab URL and pass it to the variable.
		curl_setopt($ch, CURLOPT_URL, $url);
		  
		// Catch output (do NOT print!)
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		  
		// Return follow location true
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		$html = curl_exec($ch);
		  
		// Getinfo or redirected URL from effective URL
		$redirectedUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
		$correctUrl = implode("test?",explode("#",$redirectedUrl));
		// Close handle
		curl_close($ch);		
		$url_components = parse_url($correctUrl, PHP_URL_QUERY);
		// Use parse_str() function to parse the
		// string passed via URL
		parse_str($url_components, $params);
		// Display result
		return $params['EVOSESSIONID'] ?? 'User authentication failed, your session may be expired';
    }
	
	public static function sendRequest($sessionid, $base, $query)
	{
		$query = request()->getQueryString();
		$url = $base.$query;
		$response = Http::withHeaders([
		   "Accept" => "*/*",
		   "Accept-Encoding" => "gzip, deflate, br",
		   "Accept-Language" => "ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7",
		   "Connection" => "keep-alive",
		   "Cookie" => "EVOSESSIONID=".$sessionid."; cdn=https://static.egcdn.com; lang=en",
		   "Host" => "babylonstk.evo-games.com",
		   "Referer" => "https://babylonstk.evo-games.com/frontend/evo/r2/",
		   "Sec-Fetch-Dest" => "empty",
		   "Sec-Fetch-Mode" => "cors",
		   "Sec-Fetch-Site" => "same-origin",
		   "User-Agent" => "Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_1 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.0 Mobile/14E304 Safari/602.1",
		])->get($url);
		return $response;
	}


	public function setup(Request $request)
    {
    	$showChat = $_COOKIE["chat_enabled"] ?? false;
    	if($showChat === "true") {
    		$chatBoolean = true;
    	} else { $chatBoolean = false; }


    	$recentGamesView = $_COOKIE["recent_widget"] ?? false;
    	if($recentGamesView === "true") {
    		$recentGamesBoolean = true;
    	} else { $recentGamesBoolean = false; }
		$lang = $_COOKIE["lang"] ?? 'en';

		$sessionid = $_COOKIE["EVOSESSIONID"];
		$base = "https://babylonstk.evo-games.com/setup?";
		$query = request()->getQueryString();
		$origin = $this->sendRequest($sessionid, $base, $query);
		//$standin = $this->sendRequest($this->fakeClient('stake'), $base, $query);
		$data_origin = json_decode($origin);
		//$data_standin = json_decode($standin);
		//there is replaces
		//$data_origin->currencyCode = $data_standin->currencyCode;
		$data_origin->currencySymbol = "$";
		$data_origin->casino_id = "tollgate.io";
		$data_origin->currencyCode = "USD";
		$data_origin->lang = $lang;
		$data_origin->locale = $lang;
		//$data_origin->casinoConfig->freeGamesEnabled = "true";
		$data_origin->currencyMult = 1;
		$data_origin->chat->showPrivateChat = $chatBoolean;
		$data_origin->chat->showPublicChat = $chatBoolean;
		$data_origin->lobby->recentGamesWidgetEnabled = $recentGamesBoolean;
		$data_origin->lobby->rngEnabled = true;
		$data_origin->view = "view1";
		$data_origin->casinoConfig->compliance->mga = true;
		$data_origin->site = "3";

		//$data_origin->currencyMult = $data_standin->currencyMult;
		//$data_origin->lobby->multiplayWidget->chipStack = $data_standin->lobby->multiplayWidget->chipStack;
		//$data_origin->lobby->multiplayWidget->defaultChip = $data_standin->lobby->multiplayWidget->defaultChip;
		return response()->json($data_origin);
    }

	public function style(Request $request)
    {
 		$logo = $_COOKIE["logo"];
 		$cashier_url = $_COOKIE["cashier_url"];
 		$lobbycolor = $_COOKIE["lobbycolor"] ?? '#212425';
 		if($cashier_url === "false") {
 			$cashier_url = 'https://evogames.eu';
 			$cashier_enabled = false;
 		} else {
 			$cashier_enabled = true;
 		}
 		$operatorurl = $_COOKIE["operatorurl"];
 		if($_COOKIE["bluePreset"] === "true") {
 		$blueTheme = '"bg": {
			  		"phone":"/lobby-brandings/BabylonSTK-bg-phone.f6276fb.jpg",
			  		"desktop":"/lobby-brandings/BabylonSTK-bg-desktop.415e414.jpg",
			  		"tablet":"/lobby-brandings/BabylonSTK-tablet.fdff459.jpg"
			  		},';
		$blueThemeHeader = '"bannerSet": {
				"url": "/lobby-brandings/BabylonSTK-header.b36ec74.jpg"
				},';
		} else {
 		$blueTheme = ' ';
		$blueThemeHeader = ' ';
		}
		
		$lobbySettings = '{
		   "branding": {
			  "lobby": {
			  	'.$blueTheme.'
				 "bgColor": "'.$lobbycolor.'",
				 "logos": "'.$logo.'"
			  }
		   },
		   "cashier": {
			  "url": "'.$cashier_url.'",
			  "content": "'.$cashier_enabled.'"
		   },
		   "lobby3": {
				'.$blueThemeHeader.'
			  "background": {
				 "solidColor": "'.$lobbycolor.'"
			  }
		   },
		   "mobile_settings": {
			  "ecashier": {
				 "url": "'.$operatorurl.'"
			  },
			  "licensee_lobby": {
				 "url": "'.$operatorurl.'"
			  },
			  "session_timeout": {
				 "url": "'.$operatorurl.'"
			  }
		   },
		   "sessionTimeout": {
			  "url": "'.$operatorurl.'",
			  "content": "true"
		   },
		   "lobby4": {
				'.$blueThemeHeader.'
				"promoSet": [
				 {
					"url": "/lobby-brandings/crazy_time_lobby_banner_700x1000_2020_06_02.9e39bb5.png",
					"device": "desktop",
					"categoryIds": [
					   "blackjack"
					],
					"alignment": "left",
					"target": {
					   "type": "table",
					   "tableId": "CrazyTime0000001"
					},
					"format": "inline"
				 },
				 {
					"url": "/lobby-brandings/crazy_time_lobby_banner_700x1000_2020_06_02.9e39bb5.png",
					"device": "tablet",
					"categoryIds": [
					   "blackjack"
					],
					"alignment": "left",
					"target": {
					   "type": "table",
					   "tableId": "CrazyTime0000001"
					},
					"format": "inline"
				 },
				 {
					"url": {
					   "portrait": "/lobby-brandings/crazy_time_lobby_banner_726x200_2020_06_02.d2f1fb2.png",
					   "landscape": "/lobby-brandings/crazy_time_lobby_banner_494x344_2020_06_02.0cfbbd7.png"
					},
					"device": "phone",
					"categoryIds": [
					   "blackjack"
					],
					"alignment": "left",
					"target": {
					   "type": "table",
					   "tableId": "CrazyTime0000001"
					},
					"format": "inline"
				 },
				 {
					"url": "/lobby-brandings/promo-04_2018_banner_lobby_lightning_700x1000.bde58c9.png",
					"device": "desktop",
					"categoryIds": [
					   "baccarat_sicbo"
					],
					"alignment": "left",
					"target": {
					   "type": "table",
					   "tableId": "LightningTable01"
					},
					"format": "inline"
				 },
				 {
					"url": "/lobby-brandings/promo-04_2018_banner_lobby_lightning_700x1000.bde58c9.png",
					"device": "tablet",
					"categoryIds": [
					   "baccarat_sicbo"
					],
					"alignment": "left",
					"target": {
					   "type": "table",
					   "tableId": "LightningTable01"
					},
					"format": "inline"
				 },
				 {
					"url": {
					   "portrait": "/lobby-brandings/promo-04_2018_banner_lobby_lightning_726x200.3af258a.png",
					   "landscape": "/lobby-brandings/promo-04_2018_banner_lobby_lightning_344x344.6243428.png"
					},
					"device": "phone",
					"categoryIds": [
					   "baccarat_sicbo"
					],
					"alignment": "left",
					"target": {
					   "type": "table",
					   "tableId": "LightningTable01"
					},
					"format": "inline"
				 }
			  ]
		   },
		   "licensee_lobby": {
			  "content": "true"
		   }
		}';
		return $lobbySettings;
    }
	
	public function config(Request $request)
	{
		$tableId = $request->table_id ?? null;
		$divider = 20;
		$sessionid = $_COOKIE["EVOSESSIONID"];
		$base = "https://babylonstk.evo-games.com/config?";
		$query = request()->getQueryString();
		$origin = $this->sendRequest($sessionid, $base, $query);
		//$standin = $this->sendRequest($this->fakeClient('our'), $base, $query);
		$data_origin = json_decode($origin, true);
		//$data_standin = json_decode($standin);
		$data_origin['currencySymbol'] = "$";
		 $data_origin['currencyCode'] = "USD";
		$data_origin['currencyMult'] = 1;
		//$mergeCorrect['$$BaseCurrency'] = $data_origin['$$BaseCurrency']; //json_decode($standin, true); && json_decode($origin, true);
		if($tableId === 'qlrc3fq3v7p6awm4') {
			$data_origin['bj-bb-max-stake'] = $data_origin['bj-bb-max-stake'] / $divider;
			$data_origin['bj-bb-min-stake'] = $data_origin['bj-bb-min-stake'] / $divider;
			$data_origin['bj-sidebet-21-3-max-stake'] = $data_origin['bj-sidebet-21-3-max-stake']  / $divider;
			$data_origin['bj-sidebet-21-3-min-stake'] = $data_origin['bj-sidebet-21-3-min-stake'] / $divider;
			$data_origin['chipAmounts'] = "25,125,250,1000,5000,20000";
			$data_origin['table_bet_max_limit'] = "100000" / $divider;
			$data_origin['table_bet_min_limit'] = "10000" / $divider;
		}
		return response()->json($data_origin);
		//return $origin;
	}
	
	public function screenName(Request $request)
	{
		$sessionid = $_COOKIE["EVOSESSIONID"];
		$base = "https://babylonstk.evo-games.com/api/player/screenName?";
		$query = request()->getQueryString();
		return $this->sendRequest($sessionid, $base, $query);
	}
	
	public function screenNameSet(Request $request)
	{
		$sessionid = $_COOKIE["EVOSESSIONID"];
		$url = 'https://babylonstk.evo-games.com/api/player/screenName?EVOSESSIONID='.$sessionid.'&'.request()->getQueryString();
		$response = Http::withHeaders([
		   "Accept" => "*/*",
		   "Accept-Encoding" => "gzip, deflate, br",
		   "Accept-Language" => "ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7",
		   "Connection" => "keep-alive",
		   "Content-Length" => "25",
		   "Content-Type" => "application/json",
		   "Cookie" => "EVOSESSIONID=".$sessionid."; cdn=https://static.egcdn.com; lang=en",
		   "Host" => "babylonstk.evo-games.com",
		   "Origin" => "https://babylonstk.evo-games.com",
		   "Referer" => "https://babylonstk.evo-games.com/frontend/evo/r2/",
		   "Sec-Fetch-Dest" => "empty",
		   "Sec-Fetch-Mode" => "cors",
		   "Sec-Fetch-Site" => "same-origin",
		   "User-Agent" => "Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_1 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.0 Mobile/14E304 Safari/602.1",
		])->put($url, [ 'screenName' => $request->screenName ]);
		return $response;
	}
	
	public function log(Request $request)
    {
		$response = '{ "ping": ok }';
		return $response;
    }
	
	public function historyPlayer(Request $request)
	{
		$sessionid = $_COOKIE["EVOSESSIONID"];
		$base = "https://babylonstk.evo-games.com/api/player/history/days?";
		$query = request()->getQueryString();
		$response = $this->sendRequest($sessionid, $base, $query);
		$newresponse = str_replace('₺', '$', $response);
		return $newresponse;
	}
	
	public function historyPlayerDay(Request $request, $date)
	{
		$sessionid = $_COOKIE["EVOSESSIONID"];
		$base = "https://babylonstk.evo-games.com/api/player/history/day/".$date."?";
		$query = request()->getQueryString();
		$response = $this->sendRequest($sessionid, $base, $query);
		$newresponse = str_replace('₺', '$', $response);
		return $newresponse;
	}
	
	/*
	|--------------------------------------------------------------------------
	| User Callbacks
	|--------------------------------------------------------------------------
	*/

	public function balanceUSD(Request $request) 
	{
		Log::notice($request);
		$getBalance = 100000;
		$responsePayload = array('status' => 'ok', 'result' => array('balance' => $getBalance, 'freegames' => 0));
		echo json_encode($responsePayload);
	}
	
	public function getresultUSD(Request $request) 
	{
		Log::notice($request);
		$getBalance = 100000;
		$responsePayload = array('status' => 'ok', 'result' => array('balance' => $getBalance, 'freegames' => 0));
		echo json_encode($responsePayload);
	}

	public function balance(Request $request) 
	{
		Log::notice($request);
		$getBalance = 10000;
		$responsePayload = array('status' => 'ok', 'result' => array('balance' => $getBalance, 'freegames' => 0));
		echo json_encode($responsePayload);
	}
	
	public function getresult(Request $request) 
	{
		Log::notice($request);
		$getBalance = 10000;
		$responsePayload = array('status' => 'ok', 'result' => array('balance' => $getBalance, 'freegames' => 0));
		echo json_encode($responsePayload);
	}
	
}
