<?php
/**
 * Created by PhpStorm.
 * User: 王金陆
 * Date: 2018/8/23
 * Time: 22:16
 */

namespace app\api\server;


use app\api\lib\exception\ApiException;
use think\Exception;

class WxToken
{
    protected  $code;
    protected $AppId;
    protected $AppSecret;
    protected  $GetTokenUrl;
        public  function  __construct($code)
        {
                $this->code=$code;
                $this->AppId=config('server.appId');
                $this->AppSecret=config('server.appSecret');

                $this->GetTokenUrl=sprintf(config('server.url'),$this->AppId,$this->AppSecret,$this->code);
        }
        public  function  request(){

            $result=curl_get($this->GetTokenUrl);//需要开启curl 扩展
            $returnwx=json_decode($result,true);

           if (empty($returnwx)){
               throw  new  ApiException('获取openid失败 服务器内部错误');
           }else{

                $final=array_key_exists('errcode',$returnwx);

                if ($final){
//                        失败返回错误信息
                    return return_json($returnwx['errcode'],$returnwx['errmsg'],[],500);
                }else{
//                         成功后 存入缓存中
                    echo "hlaf";
                }

           }


        }
}