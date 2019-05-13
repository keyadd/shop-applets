<?php
/**
 * Created by GE
 * Author: GE
 * Date: 2018/7/18
 * Time: 13:47
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定类目不存在，请检查商品ID';
    public $errorCode = 20000;
}