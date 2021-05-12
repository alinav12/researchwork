<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use TelegramBot\Api\BotApi;

class NewPostController extends Controller
{
    public function makeNewPost(){



        if($_POST['telegram'] != '') {
            require_once("vendor/autoload.php");

            if (true) {
                error_reporting(E_ALL & ~(E_NOTICE | E_USER_NOTICE | E_DEPRECATED));
                ini_set('display_errors', 1);
            }

            //$newPost = new Post();

            $text = $_POST['postBody'];



            $token = "1703039607:AAF_V9WC363-_objT_Cci92Obgt-VwmN7s8";
            $grupa = '@autopostingt';
            $bot = new \TelegramBot\Api\Client($token, null);

            $bot->sendMessage($grupa, $text);

            if ($_POST['link']) {
                $pic = $_POST['link'];
            } else {
                $uploadname=basename($_FILES['file']['name']);//записываем имя файла
                $uploadpath='files/'.$uploadname; //указываем куда грузить файл
                if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadpath)) { //перемещение загруженного файла из временной папки сервера в папку, которую указали (uploadpath)
                    $pic = $uploadpath;
                }

            }

            $textfoto = $_POST['photoDescription'];

            $bot->sendPhoto($grupa, $pic, $textfoto);

            //$bot->run();

            //$newPost->save();
        }
    }
}








