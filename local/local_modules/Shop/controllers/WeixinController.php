<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\shop\controllers;

use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;
use yii\mongodb\Query;
use yii\data\Pagination;


/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 账户管理控制器
class WeixinController extends AppfrontController
{

    public function actionTest()
    {
        $get = Yii::$app->request;
        $timestamp = $get->get("timestamp");
        $nonce = $get->get("nonce");
        $token = "weixin";
        $signature = $get->get("signature");
        $array = array($timestamp, $nonce, $token);
        sort($array);
        $str = implode("", $array);
        $str = sha1($str);
        if ($str == $signature && $get->get("echostr")) {
            echo $get->get('echostr');
            exit();
        } else {
            $this->actionResmes();
        }
       
    }

    //接受事件推送 并恢复
    public function actionResmes()
    {
        $postArr = $GLOBALS["HTTP_RAW_POST_DATA"];

        /*
         * <xml>
             * <ToUserName>< ![CDATA[toUser] ]></ToUserName>
             * <FromUserName>< ![CDATA[FromUser] ]></FromUserName>
             * <CreateTime>123456789</CreateTime>
             * <MsgType>< ![CDATA[event] ]></MsgType>
             * <Event>< ![CDATA[subscribe] ]></Event>
         * </xml>
         *
         * */
        $postObj = simplexml_load_string($postArr);
        if (strtolower($postObj->MsgType) == "event") {
            $toUser = $postObj->FromUserName;
            $formUser = $postObj->ToUserName;
            $time = time();
            $MsgType = "text";
            $Content = "";
            if (strtolower($postObj->Event) == "subscribe") {
                $Content = "热烈欢迎五十七同学";
            } else if (strtolower($postObj->Event) == "unsubscribe") {
                $Content = "哈哈哈哈哈";
            } else {
                $Content = "ooooo";
            }
            $info = "<xml><ToUserName><![CDATA[$toUser]]></ToUserName><FromUserName><![CDATA[$formUser]]></FromUserName><CreateTime>$time</CreateTime><MsgType><![CDATA[$MsgType]]></MsgType><Content><![CDATA[$Content]]></Content></xml>";
            echo $info;
        } else if (strtolower($postObj->MsgType) == "text") {
            $toUser = $postObj->FromUserName;
            $formUser = $postObj->ToUserName;
            $time = time();
            switch (trim($postObj->Content)) {
                case 1:
                    $Content = "数字 1";
                    break;
                case 2:
                    $Content = "数字 2";
                    break;
                case 3:
                    $Content = "<a href='http://www.qq.com'></a>";
                    break;
                default:
                    if (trim($postObj->Content) == "图文") {
                        $arr = [
                            [
                                "title" => "qq",
                                "description" => "qq is very good",
                                "picur" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=2108513205,3409536885&fm=27&gp=0.jpg",
                                "url" => "http://www.imooc.com"
                            ],
                            [
                                "title" => "qq",
                                "description" => "qq is very good",
                                "picur" => "https://www.baidu.com/img/bd_logo1.png",
                                "url" => "http://www.qq.com"
                            ]
                        ];
                        $info = "<xml><ToUserName><![CDATA[$toUser]]></ToUserName><FromUserName><![CDATA[$formUser]]></FromUserName><CreateTime>$time</CreateTime><MsgType><![CDATA[news]]></MsgType><ArticleCount>" . count($arr) . "</ArticleCount><Articles>";
                        foreach ($arr as $k => $v) {
                            $info .= "<item><Title><![CDATA[" . $v["title"] . "]]></Title><Description><![CDATA[" . $v["description"] . "]]></Description><PicUrl><![CDATA[" . $v["picur"] . "]]></PicUrl><Url><![CDATA[" . $v["url"] . "]]></Url></item>";
                        }
                        $info .= "</Articles></xml>";
                        
                        echo $info;
                        exit();
                    } else {
                       
                        $Content = "您输入的信息无效";
                    }


            }
            $MsgType = "text";
            $info = "<xml><ToUserName><![CDATA[$toUser]]></ToUserName><FromUserName><![CDATA[$formUser]]></FromUserName><CreateTime>$time</CreateTime><MsgType><![CDATA[$MsgType]]></MsgType><Content><![CDATA[$Content]]></Content></xml>";
            echo $info;
        }
    }
    public function getAccessToken()
    {
        $appId = "wxf36ada315a71afe1";
        $AppSecret = "56e4ca8920febe0acbff1ac19d8080b5";
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appId}&secret={$AppSecret}";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $res = curl_exec($ch);
        if (curl_errno($ch)) {
            dump(curl_errno($ch));
        }
        curl_close($ch);
        $res = json_decode($res,true);
        dump($res);
    }

}