<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Signup</title>
</head>
<body>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Enter OTP</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" method="post" action="/checkotp">
    @csrf 
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Enter OTP</label>
        <div class="mt-2">
          <input type="hidden" name="email" value="{{ $email }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
 <div class="mt-2">
          <input type="hidden" name="id" value="{{$id}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
         <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Enter OTP</label>

        <div class="mt-2">
          <input type="number" name="otp" placeholder="Enter OTP" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      

      <div>
        <button  value="Verify"type="submit" class="flex w-full justify-center rounded-md bg-indigo px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo">Submit</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Didn't Got OTP?
      <button id="resendOtpVerification" class="font-semibold leading-6 text-indigo hover:text-indigo">Resend</button>
    </p>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


</body>
</html>