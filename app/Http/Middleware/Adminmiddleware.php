<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Adminmiddleware
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
        if(Auth::check()){
            $user=Auth::user();
            if($user->quyen==1){
              return $next($request);
           }else{
              return redirect('admin/dangnhap')->with('thongbao','Đăng Nhập Thất Bại, Bạn Không Phải Admin');
           }
        }else
        return redirect('admin/dangnhap');
        
    }
}
