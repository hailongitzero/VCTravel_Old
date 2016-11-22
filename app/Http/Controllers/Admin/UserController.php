<?php

/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 10/11/2016
 * Time: 9:11 AM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models;
use App\Http\Controllers\Auth;

class UserController extends Controller
{
    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->intended('dashboard');
        }
    }

    public function login(Request $request){

        $adminUserModel = new Models\Admin\AdminUserModel();

        $validate = $this->validate($request,[
            'username' =>'required|max:100',
            'password' => 'required'
        ],[
            'username.required' => 'Vui lòng nhập tên đăng nhập.',
            'username.max' => 'Tên đăng nhập tối đa 20 ký tự.',
            'password.required' => 'Vui lòng nhập password.',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');
        $remember = $request->input('remember');

        $passReturn = $adminUserModel->loginModel($username);
        if(Hash::check($password, $passReturn)){
            session(['username' => $username, 'password' => $password]);
            return response()->json(['info' => 'Success', 'Content' =>  'Đăng nhập thành công.', 'Error' => $passReturn ], 200);
        }else{
            return response()->json(['info' => 'Fail', 'Content' =>  'Thông tin đăng nhập không chính xác.', 'Error' => $passReturn ], 200);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function userRegister(Request $request){

        $adminUserModel = new Models\Admin\AdminUserModel();

        $validate = $this->validate($request, [
            'username' => 'required|unique:tb_admin,AD_USER_NAME|max:100',
            'password' => 'required',
            'email' => 'required|unique:tb_admin,AD_USER_EMAIL|max:255',
        ], [
            'username.required' => 'Vui lòng nhập tên đăng nhập.',
            'username.unique' => 'Tên đăng nhập đã tồn tại.',
            'username.max' => 'Tên đăng nhập tối đa 20 ký tự.',
            'password.required' => 'Vui lòng nhập password.',
            'email.required' => 'Vui lòng nhập email.',
            'email.unique' => 'Email đã tồn tại.',
            'email.max' => 'Tối đa 255 ký tự.',
        ]);

        $inserArr = array(
            "AD_USER_NAME" => $request->input('username'),
            "AD_USER_PASS" => Hash::make($request->input('password')),
            "AD_USER_EMAIL" => $request->input('email'),
            "AD_USER_ROLE" => $request->input('role'),
            "AD_USER_TOKEN" => $request->input('_token'),
        );

        $insetResult = $adminUserModel->addUserModel($inserArr);

        if($insetResult == true){
            return response()->json(['info' => 'Success', 'Content' =>  'Tạo mới user thành công.' ], 200);
        }else{
            return response()->json(['info' => 'Fail', 'Content' =>  'Tạo mới user thất bại, vui lòng thử lại sau.' ], 200);
        }
    }
}