<?php
/**
 * Created by PhpStorm.
 * User: uka
 * Date: 2018/10/2
 * Time: 上午9:21
 */
//define('MAX_FILE_SIZE', 6000000);
include 'simple_html_dom.php';

ini_set('memory_limit', '1024M');

$TxtFileName = "Demo.txt";

$url1='https://www.ptt.cc/bbs/Gossiping/M.1538443797.A.A2C.html';
$url2='http://uat.omia.com.tw/';

curl_multi_init();
$ch=curl_init();

curl_setopt($ch,CURLOPT_URL,$url1);
curl_setopt($ch,CURLOPT_HEADER,false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

$tmp=curl_exec($ch);


//$html = file_get_html($url1);
$html=str_get_html($tmp);

//$id=$html->find('a');
//$html->save('kk.txt');
print_r($tmp);

curl_close($ch);

//var_dump($kk);

//
//if( ($TxtRes=fopen ($TxtFileName,"w ")) === FALSE){
//    echo("建立可寫檔案：".$TxtFileName."失敗");
//    exit();
//}
//echo ("建立可寫檔案".$TxtFileName."成功！</br>");
//$StrConents = $kk;//要 寫進檔案的內容
//if(!fwrite ($TxtRes,$StrConents)){ //將資訊寫入檔案
//    echo ("嘗試向檔案".$TxtFileName."寫入".$StrConents."失敗！");
//    fclose($TxtRes);
//    exit();
//}
//echo ("嘗試向檔案".$TxtFileName."寫入".$StrConents."成功！");
//fclose ($TxtRes); //關閉指標