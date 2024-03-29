<?php
/**
 * Created by GE.
 * User: GE
 * Date: 2018/7/14 我去，情人节，886214
 * Time: 1:03
 */

namespace app\lib\exception;

/**
 * token验证失败时抛出此异常 
 */
class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 10001;
}