<?php
/**
 * Created by GE
 * Author: GE
 * Date: 2018/7/18
 * Time: 13:47
 */

namespace app\lib\exception;


class OrderException extends BaseException
{
    public $code = 404;
    public $msg = '订单不存在，请检查ID';
    public $errorCode = 80000;
}