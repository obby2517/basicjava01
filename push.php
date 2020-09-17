— — — — — — — — — code push_alert.php — — — — —
<?php
error_reporting(0);
date_default_timezone_set(“Asia/Bangkok”);
$date_ = date(“Y-m-d”);
$time_ = date(“H:i:s”);
$dates = $date_.’ ‘.$time_;
$user_id =$_REQUEST[‘U9b6e4ff917139d532a07af27473613a6’];
$message = $_REQUEST[‘text’];
if(empty($message)){
$text =”no text”;
}
$opts = [
“http” =>[
“header” => “Content-Type: application/json\r\n”.”Authorization: Bearer N8t6i8lw212tYg/L6Y86A/olA73dA3UDkxissPal9cZmFBzNAm38Ag+dRwokibuNJTb+ByfsQWl7mUn4AUsLSvlrjXMnvVl93B5wAPd2rsFUNAs1NTa44Ptg9/Hgd481O6QiXD60IgP9NMXzLvZw4gdB04t89/1O/w1cDnyilFU=”
]
];
$context = stream_context_create($opts);
$profile_json = file_get_contents(‘https://api.line.me/v2/bot/profile/'.$user_id,false,$context);
$profile_array = json_decode($profile_json,true);
$pic = $profile_array[pictureUrl];
$name = $profile_array[displayName];
$myfile = fopen(“logs.txt”, “a”) or die(“Unable to open file!”);
$log = $user_id.”\t”.$pic.”\t”.$message.”\t”.$dates.”\n”;
fwrite($myfile,$log);
fclose($myfile);
echo “___SILENT___”;
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => “https://api.line.me/v2/bot/message/push",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => “”,
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => “POST”,
CURLOPT_POSTFIELDS => “{\r\n\r\n \”to\”:\”user_lineId_admin\”,\r\n\r\n \”messages\”: [\r\n {\r\n \”type\”: \”flex\”,\r\n \”altText\”: \”คุณ $name ถามว่า $message\”,\r\n \”contents\”: {\r\n \”type\”: \”bubble\”,\r\n \”direction\”: \”ltr\”,\r\n \”header\”: {\r\n \”type\”: \”box\”,\r\n \”layout\”: \”vertical\”,\r\n \”contents\”: [\r\n {\r\n \”type\”: \”text\”,\r\n \”text\”: \”คุณ $name\”,\r\n \”align\”: \”center\”,\r\n \”wrap\”: true\r\n }\r\n ]\r\n },\r\n \”hero\”: {\r\n \”type\”: \”image\”,\r\n \”url\”: \”$pic\”,\r\n \”size\”: \”full\”,\r\n \”aspectRatio\”: \”4:3\”,\r\n \”aspectMode\”: \”fit\”,\r\n \”action\”: {\r\n \”type\”: \”uri\”,\r\n \”label\”: \”ส่ง 1:1\”,\r\n \”uri\”: \”https://url.com/push.php?id=$user_id\”\r\n }\r\n },\r\n \”body\”: {\r\n \”type\”: \”box\”,\r\n \”layout\”: \”vertical\”,\r\n \”contents\”: [\r\n {\r\n \”type\”: \”text\”,\r\n \”text\”: \”$message $dates\”,\r\n \”size\”: \”md\”,\r\n \”align\”: \”center\”,\r\n \”color\”: \”#837C7C\”,\r\n \”wrap\”: true\r\n }\r\n ]\r\n }\r\n }\r\n}\r\n]\r\n}\r\n\r\n\r\n”,
CURLOPT_HTTPHEADER => array(
“authorization: Bearer N8t6i8lw212tYg/L6Y86A/olA73dA3UDkxissPal9cZmFBzNAm38Ag+dRwokibuNJTb+ByfsQWl7mUn4AUsLSvlrjXMnvVl93B5wAPd2rsFUNAs1NTa44Ptg9/Hgd481O6QiXD60IgP9NMXzLvZw4gdB04t89/1O/w1cDnyilFU=”,
“cache-control: no-cache”,
“content-type: application/json”,
“postman-token: 880aec82–1063–8c31-a0b5–46a2e1a924b2”
),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
// echo “cURL Error #:” . $err;
} else {
// echo $response;
}
?>

— — — — — — push.php — —
<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
body {
background: #ccc;
}
input[type=text] {
width: 218px;
}
input[type=submit] {
background: #000;
color: #fff;
}
input[type=submit], input[type=text] {
padding: 9px;
font-size: 18px;
line-height: 18px;
float: left;
border: 0;
display: block;
margin: 0;
}
</style>
</head>
<body>
<br>
<table align=”center”>
<tr align=”center”>
<td align=”center”>
<form action=”” method=”post” align=”center”>
<input type=”text” name=”msg”><br><br>
<input type=”submit” name=”SubmitButton”>
</form>
</td>
</tr>

</table>
</body>
</html>
<?php
error_reporting(0);
$id = $_REQUEST[‘id’];
if(isset($_POST[‘SubmitButton’])){
$msg = $_POST[“msg”];

$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => “https://api.line.me/v2/bot/message/push",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => “”,
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => “POST”,
CURLOPT_POSTFIELDS => “{\r\n\r\n \”to\”: \”$id\”,\r\n\r\n \”messages\”: [{\r\n\r\n \”type\”: \”text\”,\r\n\r\n \”text\”: \”$msg\”\r\n\r\n }]\r\n\r\n}”,
CURLOPT_HTTPHEADER => array(
“authorization: Bearer N8t6i8lw212tYg/L6Y86A/olA73dA3UDkxissPal9cZmFBzNAm38Ag+dRwokibuNJTb+ByfsQWl7mUn4AUsLSvlrjXMnvVl93B5wAPd2rsFUNAs1NTa44Ptg9/Hgd481O6QiXD60IgP9NMXzLvZw4gdB04t89/1O/w1cDnyilFU=”,
“cache-control: no-cache”,
“content-type: application/json”,
“postman-token: 99e1d5c3-fd7a-8163-c413–687e5cb8e3c8”
),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
// echo “cURL Error #:” . $err;
} else {
// echo $response;
}
}
?>
