<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
    @include('globallink')
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">
 
</head>
<body>
@include('reusecomp/navbar')
@include('reusecomp/loginmodal')
    <div class="postbg flex flex-col justify-center  items-center pt-[5rem]">

<div class="border-2 border-rounded w-[32%] py-[3rem] px-[2rem] "> 


    <div>
        
        <h1 class="text-3xl text-[#234E70] text-center ">Forgot Password?</h1>
    </div>
    <form class="w-full mx-auto"  action="/forgetpassword" method="POST" >
        @csrf
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-[#234E70]">Email</label>
            <input type="email" name="email" id="email" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your Email" required>
            </div>
           
            <div class="flex items-start mb-1">
                
                
            </div>

            <div class="text-center">

                <input type="submit" class="text-white bg-[#234E70] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-3 py-2 text-center"> </input>
            </div>
          
        </form>
    </div>
    </div>
    
</body>
</html>