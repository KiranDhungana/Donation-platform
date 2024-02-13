<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFG | ChangeProfile</title>
    @include('globallink')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">
    <script src="{{ asset('assets/js/fetchProvience.js') }}"></script>

</head>

<body>
    @include('reusecomp/navbar')
    <div class="w-[60%] mx-auto pt-[5rem]">


        <form>
            <div class="space-y-8 m-8">
                <div class="border-b border-gray-900/10 pb-5">
                    <h2 class="text-base font-semibold leading-7 text-[#13476f]">Profile</h2>
                    <p class="mt-1 text-sm leading-6 text-[#13476f]">This information will be displayed publicly so be
                        careful what you share.</p>

                    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="username"
                                class="block text-sm font-medium leading-6 text-[#13476f]">Username</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                    <input disabled type="text" name="username" id="username" autocomplete="username" value="{{ucfirst($userinfo->fname)}}{{ucfirst($userinfo->lname)}}"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="Enter your username">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="photo" class="block text-sm font-medium leading-6 text-[#13476f]">Photo</label>
                            <div class="mt-2 flex items-center gap-x-3">
                                @if ($userinfo->profileimg)
                                <img  class="rounded-full h-12 w-12" src="{{asset('public/profilepic/'.$userinfo->profileimg)}}" alt="profilepic">
                                    
                                @else
                                     <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                @endif
                              
                               
                                <input type="file" id="imageUpload" >
                                <button  id="uploadButton"  type="button"
                                    class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-[#13476f] shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-[#13476f] ">Personal Information</h2>


                    <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2">
                            <label for="first-name" class="block text-sm font-medium leading-6 text-[#13476f]">First
                                name</label>
                            <div class="mt-2">
                                <input disabled type="text" value="{{ucfirst($userinfo->fname)}}" name="first-name" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            
                                </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="last-name" class="block text-sm font-medium leading-6 text-[#13476f]">Last
                                name</label>
                            <div class="mt-2">
                                <input disabled value="{{ucfirst($userinfo->lname)}}" type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="email" class="block text-sm font-medium leading-6 text-[#13476f]">Email
                                address</label>
                            <div class="mt-2">
                                <input disabled value="{{ucfirst($userinfo->email)}}" id="email" name="email" type="email" autocomplete="email"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>




                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="city" class="block text-sm font-medium leading-6 text-[#13476f]">Phone-Number</label>
                            <div class="mt-2">
                                <input disabled value="{{ucfirst($userinfo->pnumber)}}" type="text" name="city" id="city" autocomplete="address-level2"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        {{-- <div class="sm:col-span-2">
                            <label for="region" class="block text-sm font-medium leading-6 text-[#13476f]">State /
                                Province</label>
                            <div class="mt-2">
                                <input type="text" name="region" id="region" autocomplete="address-level1"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div> --}}


                    </div>
                </div>



            </div>


            <div class="m-7 flex items-center justify-end gap-x-6">
                <button type="button"
                    class="shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 text-sm font-semibold  rounded-md px-2 py-1 text-[#13476f]">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-[#13476f] px-4 py-1 text-sm font-semibold text-[#f4f4ee] shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
    <script>
     document.getElementById('uploadButton').addEventListener('click', function() {
    var fileInput = document.getElementById('imageUpload');
   
    var file = fileInput.files[0];
    var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token from meta tag

    if (file) {
        var formData = new FormData();
        formData.append('image', file);
       // Send AJAX request
        $.ajax({
             headers: {
        'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
    },
            url: '/upload-image',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response.message);
               
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    } else {
        console.log('No file selected.');
    }
});
    </script>

</body>

</html>