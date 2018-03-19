<?php 


require_once "resources/php/arr.php";

$name = $_POST['name'];
$surname = $_POST['surname'];

echo "Добро пожаловать $name $surname <br>";

$animal = isset($_POST['animal']) ? $_POST['animal']: '';
foreach ($animal as $key) {
	echo "Повезло же : $key <br/>";
}

echo "Ваш запрос  {$_SERVER['QUERY_STRING']}";

echo htmlspecialchars(print_r($_POST, true));


// $myCurl = curl_init();
// curl_setopt_array($myCurl, array(
//     CURLOPT_URL => 'https://b24-ydddhc.bitrix24.ua/rest/1/3e684e8vv622d1ix/crm.lead.add',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_POST => true,
//     CURLOPT_POSTFIELDS => http_build_query(array(
//     	'TITLE'=>'LEAD FROM PHP',
//     	'NAME'=>'PHP'
//     ))
// ));
// $response = curl_exec($myCurl);
// curl_close($myCurl);

// echo "Ответ на Ваш запрос: ".$response;

// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, "https://www.google.ru");

// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);

// $response = curl_exec($ch);

// curl_close($ch);

// print_r($response);

$url = 'http://jstest/receiver.php';
$fields = array(
'TITLE' => 'Boris',
'Theme' => 'I think PHP loves me'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

$response = curl_exec($ch);

if($response === false){
	echo "u failed";
}

echo "<br /> Ответ на POST : $response";

curl_close($ch);


?>