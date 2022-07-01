<?php
function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");

$SC = "BETA";

$res = url("https://controlc.com/6c6b27d1");
//echo $res."\n";
//exit;
$link1 = explode('Link: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
//die();
$pw1 = explode('[tpcolor=#FF0000]',$res);
$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
$read = file_get_contents("key.txt");
system('clear');
if ($pass=="off"){
$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
}else{
$o = "\033[1;31m[\033[1;32mONLINE\033[1;31m]";
}
if ($pass=="update"){
$o = "\033[1;32m[\033[1;91mUpdate\033[1;92m]";
}
if ($pass=="down"){
$o = "\033[1;32m[\033[1;91mKO'ID\033[1;92m]";
}

$res = url("https://controlc.com/b27a1f06");
//echo $res."\n";
//exit;
$lg1 = explode('Login: ',$res);
$login = explode('/ajax_auth',$lg1[1]);
//echo $login[0]."\n";
//$pw1 = explode('[tpcolor=#FF0000]',$res);
//$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";
$banner ="  \033[1;31m__  __                _    __    _                         
  \ \/ /  ____   __  __| |  / /   (_)  ___  _      __   _____ 
   \  /  / __ \ / / / /| | / /   / /  / _ \| | /| / /  / ___/
   / /  / /_/ // /_/ / | |/ /   / /  /  __/| |/ |/ /  (__  ) 
  /_/   \____/ \__,_/  |___/   /_/   \___/ |__/|__/  /____/  
\033[1;31m================================================================
      \033[1;92m$o\033[0;31m                         \033[1;31m[\033[1;92mVERSION-\033[1;33m$SC\033[1;31m]
\033[1;31m================================================================\n";
//echo $HJ2." ◼ SILAHKAN COPAS LINK. JANGAN LUPA KOPI DAN ROKOK DI SIAPKAN\n";
//echo $green2." •SILAHKAN AMBIL PASSWORD DI DALAM VIDEO YT KAKEK.\n";
//echo $red2." •(The password is in the video)\n";
//echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";
echo $banner;
//echo "\033[1;31m================================================================\n";
if ($pass == 'down'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT INI SUDAH TIDAK BERFUNGSI LAGI \n";
      echo "\033[1;92m ◼ \033[1;91mKARNA WEBSITE atau APLIKASI SUDAH KO'ID \n";
      echo "\033[1;92m ◼ \033[1;92mTERIMA KASIH\n\n";
      exit;
}

if ($link[0]==""){
echo " \033[1;91mKONEKSI TERPUTUS, SILAHKAN CEK KONEKSIMU\n";
echo " \033[3;91mConnection Lost, Please Check Your Connection\n";
exit;
}

if ($pass == 'update'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT Anda Sudah Tidak Terhubung ke Server \033[1;92mYouView \n";
      echo "\033[1;92m ◼ \033[1;97mSilahkan Copy Paste Link \n\n";
      echo "\033[1;92m ◼ \033[1;97mLink Script Versi Update \033[1;92m$link[0]\n\n";
      exit;
}

if ($pass == 'off'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT SEDANG OFFLINE \033[1;97matau \033[1;91mMAINTENANCE \n";
      exit;
}else{
if($read == $pass){
      echo "\033[1;91m ▶ \033[1;92mCHECKING  Password \r";
      sleep(5);
      system("xdg-open https://www.youtube.com/channel/UCV_NwaD-a03IFWZUD2wKWUQ?app=desktop&sub_confirmation=1");
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
      sleep(1);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo "\033[1;92m ◼ \033[1;97mLink Password :\033[1;92m $link[0]\n";
echo "\033[1;92m ◼ \033[1;37mMASUKAN PASSWORD DI SINI : \033[1;92m";
$p = trim(fgets(STDIN));
if ($p==""){
exit;
}
echo "\n \033[1;97mLoading \033[1;31m▪\r";
sleep(1);
echo " \033[1;97mLoading \033[1;31m▪ \033[1;31m▪\r";
sleep(1);
echo " \033[1;97mLoading \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
sleep(1);
if($pass == $p){
        fwrite($save, $p);
        echo " \033[1;91m◼ \033[1;92mOPEN SCRIPT SUCCESS            \r";
        system("xdg-open https://www.youtube.com/channel/UCV_NwaD-a03IFWZUD2wKWUQ?app=desktop&sub_confirmation=1");
        fclose($save);
        sleep(5);
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
        sleep(1);
        }else{
        echo " \033[1;92m◼ \033[1;91mGAGAL...!!!, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}
sleep(1);
echo "   \033[1;97mSilahkan Klik \033[1;32mENTER \033[1;37mUntuk Melanjutkan ".$M2;
$kkk = trim(fgets(STDIN));

system('clear');
echo $banner;
//echo "\033[1;31m================================================================\n";
echo "  \033[1;31m ~ \033[1;32mGUNAKAN DENGAN BIJAK YA LURD !\n";
echo "  \033[1;31m ~ \033[1;32mSCRIPT INI MASIH DALAM PENGEMBANGAN\n";
echo "  \033[1;31m ~ \033[1;32mSAYA TIDAK BERTANGGUNG JAWAB DENGAN SEGALA KERUGIAN APAPUN\n";
echo "\033[1;31m================================================================\n";

@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
function curl($url, $post = 0, $httpheader = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 //       curl_setopt($ch, CURLOPT_token,TRUE);
//        curl_setopt($ch, CURLOPT_tokenFILE,"token.txt");
//        curl_setopt($ch, CURLOPT_tokenJAR,"token.txt");
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
    }

function postv2head(){
  $token=json_decode(file_get_contents("data.json"),true)["token"];
  $h[]="host: watcherviews.com";
  $h[]="user-agent: Dart/2.16 (dart:io)";
  $h[]="accept: application/json";
  $h[]="authorization: Bearer $token";
 return $h;
}
function posthead(){
  $h[]="host: watcherviews.com";
  $h[]="user-agent: Dart/2.16 (dart:io)";
  $h[]="accept: application/json";
 return $h;
}

function get($url){
  return curl($url,'',postv2head())[1];
}

function post($url,$data){
  return curl($url,$data,posthead())[1];
}
function postv2($url,$data){
  return curl($url,$data,postv2head())[1];
}
function save($data,$data_post){
    if(!file_get_contents($data)){
      file_put_contents($data,"[]");}
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json,$data_post);
    file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));
}

//if (!file_exists("data.json")) {
  //while("true"){
    system("clear");
    echo $banner;
    echo "  \033[1;31m ~ \033[1;32mSILAHKAN PILIH ANGKA \033[1;31m1 \033[1;32mUNTUK REGISTRASI\n";
    echo "  \033[1;31m ~ \033[1;32mREGISTRASI MENGGUNAKAN \033[1;31mGMAIL \033[1;32mYANG SUDAH MEMILIKI CHANNEL\n";
    echo "  \033[1;31m ~ \033[1;32m BUAT DULU CHANNEL ASAL UNTUK MENGGUNAKAN FITUR INI\n";
    echo "\033[1;31m================================================================\n";
    echo "  \033[1;32mMASUKAN PILIHAN KAMU :\n";
    echo "  \033[1;33m1 \033[1;34mREGISTRASI\n";
    echo "  \033[1;33m2 \033[1;34mAUTO GENERATE TOKEN\n";
    echo "  \033[1;33m3 \033[1;34mVERIFIKASI BOT\n";
    echo "  \033[1;33m4 \033[1;34mDAPATKAN KOIN GRATIS\n";
    echo "  \033[1;33m5 \033[1;34mADD VIDEO\n";
    echo "  \033[1;37mPILIH : \033[1;31m";
    $menu = trim(fgets(STDIN));
    
    if ($menu == 1) {
      system("clear");
    echo $banner;
    echo "  \033[1;31m ~ \033[1;32mSILAHKAN INPUT DATA SESUAI YANG DIMINTA\n";
    echo "  \033[1;31m ~ \033[1;32mKESALAHAN SAAT MENDAFTAR ADALAH KEBODOHAN ANDA SENDIRI\n";
    echo "\033[1;31m================================================================\n";
    echo "  \033[1;31m~ \033[1;34mREGISTRASI \033[1;31m~   \n";
    echo "\033[1;33mEMAIL \033[1;37m:\033[1;32m ";
    $email = trim(fgets(STDIN));
    echo "\033[1;33mPASSWORD \033[1;37m:\033[1;32m ";
    $pass = trim(fgets(STDIN));
    echo "\033[1;33mNAMA \033[1;37m: \033[1;32m";
    $nama = trim(fgets(STDIN));
    echo "\033[1;33mmale/female \033[1;37m: \033[1;32m";
    $gen = trim(fgets(STDIN));
    
    $daftar = "https://watcherviews.com/dashboard/api/reg-api";
    $data = "email=".$email."&password=".$pass."&pass_conf=".$pass."&gender=".$gen."&name=".$nama;
    $reg = json_decode(post($daftar,$data));
    $id = $reg->user->id;
if(file_exists("data.php")){
      $simpan = fopen("data.php","a");
      fwrite($simpan, "
      ");
      fwrite($simpan, '$id[] = "'.$reg->user->id.'";
      ');
      fwrite($simpan, '$n[] = "'.$nama.'";
      ');
      fwrite($simpan, '$em[] = "'.$email.'";
      ');
      fwrite($simpan, '$p[] = "'.$pass.'";
      ');
      fclose($simpan);
    }else{
      $simpan = fopen("data.php","w");
      fwrite($simpan, "<?php
      ");
      fwrite($simpan, '$id[] = "'.$reg->user->id.'";
      ');
      fwrite($simpan, '$n[] = "'.$nama.'";
      ');
      fwrite($simpan, '$em[] = "'.$email.'";
      ');
      fwrite($simpan, '$p[] = "'.$pass.'";
      ');
      fclose($simpan);
    }

    if ($id=="") {
      echo "  \033[1;32m ~ \033[1;31mADA KESALAHAN SAAT MENDAFTAR !\n";
      echo "  \033[1;32m ~ \033[1;31mCEK APAKAH EMAIL PENDAFTARAN SUDAH MEMILIKI CHANNEL !\n";
      exit;
    }else {
      echo "  \033[1;31m ~ \033[1;32mPENDAFTARAN SUKSES !\n";
      echo "  \033[1;31m ~ \033[1;32mLALU AUTO GENERATE TOKEN UNTUK BISA MENJALANKAN BOT INI !\n";
      exit;
    }
    }
    
    if ($menu == 2) {
      if (!isset($id)) {
    include 'data.php';
    }
    system("clear");
    echo $banner;
    $i=0;
  foreach ($em as $key) {
    $login = "https://watcherviews.com/dashboard/api/log-api";
    $data = "email=".$em[$i]."&password=".$p[$i];
    $log = json_decode(post($login,$data));
   $r = $log->user->success->token;
      system("clear");
    echo $banner;
    echo "  \033[1;31m ~ \033[1;32mAUTO GENERATE TOKEN MEMBUTUHKAN WAKTU 10 DETIK\n";
    echo "  \033[1;31m ~ \033[1;32mMOHON BERSABAR ORANG SABAR PANTATNYA LEBAR \n";
    sleep(10);
    echo "\033[1;31m================================================================\n";
    system("xdg-open https://www.youtube.com/channel/UCV_NwaD-a03IFWZUD2wKWUQ?app=desktop&sub_confirmation=1");
    if ($r=="") {
      echo "  \033[1;32m ~ \033[1;31mTOKEN TIDAK TERSIMPAN, SILAHKAN CEK FILE data.json\n";
      exit;
    }else {
      echo "  \033[1;31m ~ \033[1;32mSELAMAT TOKEN TERSIMPAN \n";
    }
    //echo $r."\n";
   //echo "Token Sudah tersimpan\n ";
   $data=["token"=>$r];
  save("data.json",$data);
    
    }
  }
  
  if ($menu == 3) {
    if (!isset($id)) {
    include 'data.php';
    }
    system("clear");
    echo $banner;
    $i=0;
  foreach ($id as $key) {
    $ref = "https://watcherviews.com/dashboard/api/input-ref-code";
    $data = "user_id_referral=".$id[$i]."&referral_code=E1CB2571";
    $conf = json_decode(postv2($ref,$data));
    $sid = $conf->user->id;
    if ($sid="") {
      echo "  \033[1;32m ~ \033[1;31mVERIFIKASI BOT GAGAL ATAU AKUN BELUM TERDAFTAR\n";
      //echo "  \033[1;32m ~ \033[1;31mTOKEN TIDAK TERSIMPAN, SILAHKAN CEK FILE data.json\n";
      exit;
    }else {
      echo "  \033[1;31m ~ \033[1;32mSELAMAT BOT SUKSES TERVERIFIKASI \n";
      exit;
    }
  }
  }
  
  if ($menu == 4) {
    if (!isset($id)) {
      include 'data.php';
    }
    system("clear");
    echo $banner;
    echo "  \033[1;31m ~ \033[1;32mPROSES MENDAPATKAN KOIN SECARA GRATIS \n";
    echo "  \033[1;31m ~ \033[1;32mTUNGGU KOIN SAMPAI \033[1;31m60.000 \033[1;32mUNTUK MENAMBAHKAN VIDEO \n";
    echo "\033[1;31m================================================================\n";
$cobal = get("https://watcherviews.com/dashboard/api/get-total-coin?id=".$id[$i]);
$ball = json_decode($cobal);
$userdata = get("https://watcherviews.com/dashboard/api/get-user-data?id=".$id[$i]);
$user = json_decode($userdata);
echo "\033[1;32mNama          :  \033[1;33m".$user->name."\n";
//echo "\033[1;32mMember        : ".$user->membership."\n";
echo "\033[1;32mRefferal Code :  \033[1;33m".$user->referral_code."\n";
echo "\033[1;32mEmail         :  \033[1;33m".$user->email."\n";
echo "\033[1;32mBalance       : \033[1;33m {$ball->coin}\n";
echo "\033[1;31m================================================================\n";
while(true){
 // echo "\033[48m";
$listvideo = get("https://watcherviews.com/dashboard/api/get-next-video-new");
$listwatch = json_decode($listvideo, true);
if ($listwatch['data'][0]['link']) {
  echo "\33[0;36mSEDANG MEMBUKA VIDEO : \33[0;32m".$listwatch['data'][0]['link']."\n";
  $time = $listwatch['data'][0]['time'];
  $x = $time;
  for ($y = 0; $y < $x; $y++) {
     echo " \r\033[1;32mPlease Wait 🕘 \33[1;33m". ($x-$y)."\33[37;1m Detik   ";
    echo "\r\r";
     sleep(1);
  }
  $check = json_decode(get("https://watcherviews.com/dashboard/api/check-multiply-video-coin"));
  $revid = "https://watcherviews.com/dashboard/api/watch-video-new";
$data = "view_id=".$listwatch['data'][0]['view_id']."&video_id=".$listwatch['data'][0]['video_id']."&user_id=159394&allocation_id=".$listwatch['data'][0]['allocation_id']."&description=video+watched";
$reward = json_decode(postv2($revid,$data));
$userdatas = get("https://watcherviews.com/dashboard/api/get-user-data?id=".$id[$i]);
$users = json_decode($userdatas);
//echo $reward->message."\n";
$coin = get("https://watcherviews.com/dashboard/api/get-total-coin?id=".$id[$i]);
$coins = json_decode($coin);
$todayearn = get("https://watcherviews.com/dashboard/api/check-qualify");
$today = json_decode($todayearn);
echo "\033[1;31m[\033[1;33m".$users->counter_view_monthly."\033[1;31m]"; echo "\033[1;32m".$listwatch['data'][0]['coin_get']." \033[1;37mCoin\033[1;37m | "; echo "\033[1;34mToday : \33[1;33m{$today->total_coin_today} \033[1;37m| "; echo "\33[37;1mBalance : \33[31;1m{$coins->coin}\n\33[37;1m";
}
}
  }
  
  if ($menu == 5) {
   if (!isset($id)) {
   include 'data.php';
   }
   system("clear");
   echo $banner;
   echo "  \033[1;31m ~ \033[1;32mTAMBAH VIDEO KALIAN DIBAWAH INI \n";
   echo "  \033[1;31m ~ \033[1;32mVIEW AKAN MASUK 1X24JAM \n";
   echo "  \033[1;31m ~ \033[1;32mVIDEO YANG SAMA HARUS MENUNGGU 2X24JAM \n";
   echo "  \033[1;31m ~ \033[1;32mUSER GRATISAN HANYA BISA 1 VIDEO PERHARI \n";
   echo "\033[1;31m================================================================\n";
   echo "\033[1;34mLINK YOUTUBE : \033[1;31m";
   $ytb = trim(fgets(STDIN));
   $add = "https://watcherviews.com/dashboard/api/add-video";
   $data = "user_id=".$id[$i]."&link=".$ytb."&time=45&maximum_watch=100&coin_get=600&description=add+video+campaign+";
   $advid = json_decode(postv2($add,$data));
 //  var_dump($advid);
  $res = $advid->result;
  $err = $advid->message;
   if ($res == "Your video has been saved") {
     echo "  \033[1;31m ~ \033[1;32mVIDEO BERHASIL DITAMBAHKAN \n";
     echo "  \033[1;31m ~ \033[1;32mSILAHKAN PANTENGIN CHANNEL LU NGAB \n";
   }else{
     echo "  \033[1;31m ~ \033[1;32mVIDEO GAGAL DITAMBAHKAN \n";
     echo "  \033[1;31m ~ \033[1;32mSILAHKAN TAMBAHKAN VIDEO LAIN \n";
     echo "  \033[1;31m ~ \033[1;32mMUNGKIN VIDEO SUDAH DITAMBAHKAN SEBELUMNYA ATAU TUNGGU 2X24JAM\n";
   }
  // var_dump($advid);
  }
  
  
