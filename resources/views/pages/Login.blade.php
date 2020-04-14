
@extends('layout.master')

@section('noidung')

	<div class="row" style="margin-top: 10px;">
       <div class="container">
		<div class="content">

			
			 <div class="home_login">
			  <div class="btn_button">
				  	 <div class ="btn"></div>
				  	 <button class="btn_sub">Đăng Nhập</button> 
				  	 <button class="btn_sub">Đăng Ký</button> 
			  </div>
		  	<form action="dangnhap" class="login_form" method="POST" id="login">
		  		<input type="hidden" name="_token" value="{{csrf_token()}}">
		  		<input class="txt" type="text" name="user" placeholder="Email Hoặc SDT"/>
		  		<input class="txt" type="password" name="password" placeholder="Mật Khẩu"/>
		  		<input class="submit" type="submit" name="submit" value="Đăng Nhập">
		  	</form>

		  	<form action="dangky" class="register_form" method="POST" id="register">
		  		

		  		 @if(session('thongbao'))
                           <div class="alert alert-success tb" style="overflow: hidden;">
                               {{session('thongbao')}}
                           </div>
                        @endif
		  		<input type="hidden" name="_token" value="{{csrf_token()}}">
		  		<input class="txt" type="text" name="name" placeholder="Tên Đăng Nhập"/>
		  		<input class="txt" type="text" name="user" placeholder="Email Hoặc SDT"/>
		  		<input class="txt" type="password" name="pass" id="password" placeholder="Mật Khẩu"/>
		  		<input class="txt" type="password" name="passreset" placeholder="Nhập Lại Mật Khẩu"/>
		  		
		  		<input class="submit" type="submit" name="submit" value="Đăng Ký">
		  	</form>
		 

	  </div>
		
	</div>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".btn_sub").click(function(){
				$(".login_form").toggleClass("showed");
		});

		$(".btn_sub").click(function(){
				$(".register_form").toggleClass("showeds");
		});

		$(".btn_sub").click(function(){
				$(".btn").toggleClass("show");
		});

	});



	if($("#login").length >0){
		$("#login").validate({
			 rules:{
              user:{
                 required:true,
              },
              password:{
              	required:true,
              }
   	   	  },
   	   	  messages:{
              user:{
              	required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống"
              },
              password:{
              	required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống"
              },
   	   	  },
		});
	}
   
   if($("#register").length>0){
   	  $("#register").validate({
			 rules:{
   	   	  	  name:{
                 required:true,
                 minlength:3,
                 maxlength:32,
              },
              user:{
                 required:true,
                 email:true,
              },
              pass:{
                 required:true,
                 minlength:6,
              },
              passreset:{
              	required:true,
              	equalTo: "#password"
              },
              
   	   	  },
   	   	  messages:{
	              name:{
	              	required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống",
	              	minlength:"Tên Quá Ngắn, Phải Có Ít Nhất 3 Kí Tự",
	              	maxlength:"Tên Không Được Quá 32 Kí Tự"
	              },

	              user:{
	              	required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống",
	              	email:"Sai Định Dạng Email"
	              },
	              pass:{
	              	required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống",
	              	minlength:"Mật Khẩu Quá Ngắn ,Phải Có Ít Nhất 6 Kí Tự"
	              },
	              passreset:{
	                required:"<span><i class='fas fa-exclamation-triangle'></i></span> Trường Này Không Được Để Trống",
	              	equalTo:"Mật Khẩu Không Trùng Khớp"
	              },
	              
   	   	 }
		});
   }
     
	
</script>

@endsection


<style type="text/css">
		*{
			font-family: "montserrat",sans-serif;
		}
		
		
      /*phân đăng nhập với đăng ký*/
		.home_login{
			position: relative;
			left:32%;
			width: 380px;
			height: 600px;	
			overflow: hidden;	
		}

		 .btn_button{
            width:280px;
            margin: 30px auto;
            box-shadow:0 0 10px 0 #353331;
            border-radius: 20px;
            position: relative;
          
		}

		.btn{
        	position: absolute;
        	top:0;
        	left:0;
        	width:140px;
        	border-radius:10px;
        	transition: .3s;
        	background-color: red;
           
        }

		 .btn_sub{
			padding: 10px 30px;
			cursor: pointer;
			color:black;
			background: transparent;
			outline: none;
			position: relative;
			border :none;
		}
         
         .login_form{
        	position: absolute;
        	top:150px;
        	left: 0;
        	width: 300px;
        	transition: .4s;
        	margin: 0 44px;
        	
        }

         .register_form{
        	position: absolute;
        	top:100px;
        	right:-100%;
        	width: 300px;
        	transition: .4s;
        	margin: 0 44px;

        }
         .txt{
        	width: 100%;
        	border-top: 0;
        	border-left: 0;
        	border-right: 0;
        	border-bottom: 1px solid #738685;
        	background:transparent;
        	padding: 10px 0;
        	margin: 5px 0;
        	outline:none;

        }
        /*nút đănh nhập với đăng kí*/
          .submit{
         	background-color:#3366FF ;
         	display: block;
         	width: 100%;
         	padding: 5px 0;
         	border-radius: 20px;
         	margin: 10px 0;
         	border:none;
            cursor: pointer;
            color:black;
         }
	
		.showed{
			left:-100%;
		}

		.showeds{
			right:0;
		}
		.show{
			left:140px;

		}

		.error{
			font-size: 14px;
			color: #f3cd46;

		}
		 
	</style>
