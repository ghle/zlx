<?php
/**
 * Created by PhpStorm.
 * User: 王金陆
 * Date: 2018/8/22
 * Time: 22:28
 */

namespace app\api\lib;

use think\Exception;
class ApiException extends  Exception
{
    protected  $message='';
    protected  $code =0;
    protected  $httpCode=500;

    public  function  __construct($message='',$httpCode=0,$code=0)
    {
        $this->httpCode = $httpCode;
        $this->message = $message;
        $this->code = $code;
    }
}