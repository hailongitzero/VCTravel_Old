<?php

/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 10/11/2016
 * Time: 8:53 AM
 */
namespace App\Http\Middleware\Admin;

use App\Models;
use Closure;
use Illuminate\Support\Facades\App;

class AdminReg
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $commonModel = new Models\CommonModel();

        $fail = "Vui lòng nhập email và thử lại.";
        $fail1 = "Email của bạn quá dài, vui lòng nhập lại.";
        $fail2 = "Email của bạn đã được đăng ký.";

        if($request->input('email') == null || $request->input('email') == '' ){
            return response()->json(['info' => 'Fail', 'Content' =>  $fail ], 200);
        }elseif(strlen($request->input('email')) > 50){
            return response()->json(['info' => 'Fail', 'Content' =>  $fail1 ], 200);
        }else{
            $exist = $commonModel->checkExistEmail($request->input('email'));
            if($exist > 0){
                return response()->json(['info' => 'Fail', 'Content' =>  $fail2 ], 200);
            }else{
                return $next($request);
            }
        }
    }
}