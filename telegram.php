<?php


header('Content-Type: text/html; charset=utf-8');

// подрубаем API
require_once("vendor/autoload.php");
// дебаг
if(true){
	error_reporting(E_ALL & ~(E_NOTICE | E_USER_NOTICE | E_DEPRECATED));
	ini_set('display_errors', 1);
}

// echo $_POST['user_name'];
$text=$_POST['user_name'];   //// Тут пишем текст вашего сообщения


// создаем переменную бота
$token = "1703039607:AAF_V9WC363-_objT_Cci92Obgt-VwmN7s8";  //// токен бота
$grupa='@autopostingt';  //// название паблика пример @remover
$bot = new \TelegramBot\Api\Client($token,null);

$bot->sendMessage($grupa,$text);

if (!$_POST['user_link']){
    $pic="https://lh3.googleusercontent.com/proxy/DGklKU6LZqvuqNd4rrkEw6wsFTByzp_bBqnLhwO7eTDt0bn5mmIdCg136ru-tUBLgh-wm41tanerCOZjhVFDdUic2iWy4qfAdQjZE1gi8Ag";
}else{
    $pic = $_POST['user_link']; /// Прямая ссылка на фото котрую постить
}

$textfoto=$_POST['user_message'];   //// тут пишем текст фото

$bot->sendPhoto($grupa, $pic,$textfoto);

//$bot->run();

echo "Перевіряй канал в телеграм!";

echo "<br><br><a href='/'>Назад</a>";


//echo '<p style="color: blue;"> Текст вашего поста </p>';
//echo '<span id="post-text"> ' . $postText . '</span>';
//echo '<p style="color: blue;"> Ссылка на пост </p>';
//echo '<p id="post-link"> ' . $postLink . '</p>';
//echo '<p> Введите здесь ID страницы, куда будет размещаться пост. Он потребуется как для размещения поста, так и для получения токена доступа Facebook </p>';
//echo '<input id="pageid-fb"></br>';
//
//echo '<a id="fb-token" href="' . htmlspecialchars($loginUrl) . '"  target="_blank">Получить токен facebook ( пользовательский и страницы ) ( при отсутствии )</a>';
//echo '<p> Если у вас нет токена для вашей страницы Facebook, получите его по ссылке выше. Если у вас есть токен, просто введите его в поле ниже. </p>';
//echo '<p> Впишите сюда ваш токен страницы Facebook </p>';
//echo '<input id="accesstoken-fb"></br>';
//echo '<button id="facebook-post"> Разместить пост в Facebook </button>';