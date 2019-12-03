<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;

class InternalException extends Exception
{
    protected $msgForUser;

    public function __construct(sting $message,sting $msgForUser='系统内部错误',int $code = 500)//第一个参数就是原本应该有的异常信息,第二个参数是展示给用户的信息
    {
      parent::__construct($message,$code);
      $this->$msgForUser=$msgForUser;
    }

    public function render(Request $request)
    {
      if($request->expectsJson()){
        return response()->json(['msg'=>$this->$msgForUser],$this->code);
      }
      return view('pages.error',['msg'=>$this->$msgForUser]);
    }
}
