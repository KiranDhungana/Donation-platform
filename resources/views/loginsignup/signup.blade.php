<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFG | Register</title>
    @include('globallink')
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">

</head>

<body>
    @include('reusecomp/navbar')

    <div class="register_form_container">
        <section class="bg-yellow">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">
                <div
                    class="w-full bg-white rounded-lg shadow my-20 sm:w-1/2 xl:p-0 ">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                            Create an account
                        </h1>
                        <form action="{{ route('studentRegister') }}" method="post" class="space-y-4 md:space-y-6"
                            action="#">
                            @csrf
                            <div>
                                <label for="firstname"
                                    class="block mb-2 text-sm font-medium text-blue">First
                                    Name</label>
                                <input type="text" name="firstname" id="firstname"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="First Name" required="">
                            </div>
                            <div class="flex justify-between">
                                <div class="w-80">
                                    <label for="middlename"
                                        class="block mb-2 text-sm font-medium text-blue">Middle Name
                                    </label>
                                    <input type="text" name="middlename" id="middlename"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                        placeholder="Middle Name">
                                </div>

                                <div class="w-1/2 ml-3">
                                    <label for="lastname"
                                        class="block mb-2 text-sm font-medium text-blue">Last
                                        Name</label>
                                    <input type="text" name="lastname" id="lastname"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Last Name" required="">
                                </div>

                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-blue">Your
                                    email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="yourname@gmail.com" required>@error('email')
                                <div id="emailHelp" style="color:red" class="form-text">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="phonenumber"
                                    class="block mb-2 text-sm font-medium text-blue">Phone
                                    Number</label>
                                <input type="number" name="phonenumber" id="phonenumber"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                    placeholder="Enter Phone Number" required> @error('phonenumber')
                                <div id="emailHelp" style="color:red" class="form-text">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-blue">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                    required=""> @error('password')
                                <div id="emailHelp" style="color:red" class="form-text">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="confirm-password"
                                    class="block mb-2 text-sm font-medium text-blue">Confirm
                                    password</label>
                                <input type="confirm-password" name="confirmed" id="confirm-password"
                                    placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                    required=""> @error('password_confirmation')
                                <div id="emailHelp" style="color:red" class="form-text">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" aria-describedby="terms" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 "
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-lighttext-blue">I accept the
                                        <a class="font-medium text-primary-600 hover:underline "
                                            href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <button type="submit"
                                class="w-full bg-blue text-yellow font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                >Create
                                an account</button>
                            <p class="text-sm font-light text-blue">
                                Already have an account? <a data-modal-toggle="authentication-modal" href="#"
                                    class="font-medium text-primary-600 hover:underline">Login
                                    here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function () {

            toastr.options.timeOut = 1000;
            @if ($errors -> any())
                @foreach($errors -> all() as $error)
            toastr.error($error);
            <p style="color:red;">{{ $error }}</p>
            @endforeach
            @endif

    </script>

    <script>
            var fisrtDiv = document.getElementsByTagName('div')
            var loginBtn = document.getElementById('login')
            loginBtn.addEventListener('click',()=>{
                console.log("guhbjk")
                document.getElementByTagName('body').addClass('blur')
            })
    </script>

</body>

</html>