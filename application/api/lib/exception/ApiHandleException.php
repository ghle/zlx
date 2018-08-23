<?php
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 17/8/6
 * Time: 上午2:45
 */
namespace app\api\lib\exception;
use think\exception\Handle;

class ApiHandleException extends  Handle {

    public $httpCode = 500;

    public function render(\Exception $e) {

        if(config('app_debug') == true) {
            return parent::render($e);
        }
        if ($e instanceof ApiException) {
            $this->httpCode = $e->httpCode;
        }
        return  return_json(0, $e->getMessage(), [], $this->httpCode);
    }
}