<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFG | Posts</title>
    @include('globallink')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">
    <script src="{{ asset('assets/js/fetchProvience.js') }}"></script>
    <script src="{{ asset('assets/js/validateForm.js') }}"></script>

</head>

<body>
    @include('reusecomp/navbar')
    @if(isset($clubadded))
    <script>
       toastr.success('Club added successfully');

    </script>
@else
@endif


    <div class="post_form_container pt-[5rem] bg-yellow flex flex-col h-[100vh]">
        <form id="campaign_form" method="POST"  action="/regsiter-socialorganization" enctype="multipart/form-data"
            class="mt-5 w-4/5 mx-auto">
            @csrf
            <h1 class="text-2xl text-blue my-4">Fill the form with correct details</h1>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="title" id="Club_name"
                    class="block py-2.5 px-0 w-full text-sm text-blue bg-transparent border-0 border-b-2 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="Club_name"
                    class="peer-focus:font-medium absolute text-sm text-blue  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]  rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Club Name</label>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">

                    <label for="countries" class="block mb-2 text-sm font-medium text-blue">Select
                        an option</label>
                    <select id="countries" name="catagory"
                        class="bg-yellow border border-gray-300 text-blue text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option selected>Category</option>
                        <option value="youth">Young Club</option>
                        <option value="social">Social CLub</option>

                    </select>

                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <p class="text-sm text-blue">Accepted Items</p>
                    <div class="accepted  flex flex-wrap">
                        <div class="flex items-center ml-2">
                            <input name="item1" id="default-checkbox" type="checkbox" value="clothes"
                                class="w-4 h-4 text-blue bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-checkbox"
                                class="ms-2 text-sm font-medium text-blue">Clothes</label>
                        </div>
                        <div class="flex items-center ml-2">
                            <input  name="item2" id="checked-checkbox" type="checkbox" value="books"
                                class="w-4 h-4 text-blue bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="checked-checkbox"
                                class="ms-2 text-sm font-medium text-blue">Books</label>
                        </div>
                        <div class="flex items-center ml-2">
                            <input name="item3" id="default-checkbox" type="checkbox" value="furniture"
                                class="w-4 h-4 text-blue bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-checkbox"
                                class="ms-2 text-sm font-medium text-blue">Furniture</label>
                        </div>
                        <div class="flex items-center ml-2">
                            <input id="checked-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="checked-checkbox"
                                class="ms-2 text-sm font-medium text-blue">Books</label>
                        </div>
                    </div>
                    

                    
                </div>
            </div>
 <input class="hidden" type="text"  value="" name="latitude" id="latitude">
 <input  class="hidden" type="text" name="longitude" value="" id="longitude">

            <div class="relative z-0 w-full mb-5 group">
                <textarea name="description" id="description"
                    class="block py-2.5 px-0 w-full text-sm text-blue bg-transparent border-0 border-b-2 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder="Club Description" rows="3" cols="5" required></textarea>
            </div>


            <div class="relative my-5">

                <div class="provience my-5">
                    <label for="prov" class="text-blue m-2">Select Provience:</label>

                    <select id="province" name="province" class="bg-white text-blue p-1 w-full"
                        onchange="updateDistricts()">
                        <option value="" selected disabled>Select Province</option>
                        <option value="Province No. 1">Province No. 1</option>
                        <option value="Madhesh">Madhesh</option>
                        <option value="Bagmati">Bagmati</option>
                        <option value="Gandaki">Gandaki</option>
                        <option value="Lumbini">Lumbini</option>
                        <option value="Karnali">Karnali</option>

                    </select>
                </div>

                <div class="district my-5">
                    <label for="dis" class="text-blue m-2 ">Select District:</label>

                    <select id="district" name="district" class="bg-white text-blue p-1 w-full">
                        <option value="" selected disabled>Select District</option>
                    </select>
                </div>
                <div class="citizenship_container my-5 flex justify-around">

                    <div class="w-1/2 ml-3">
                        <label class="block mb-2 text-sm font-medium text-blue ">Upload
                            Official Document</label>
                        <input type="file" name="officialdocs[]"
                            class="block w-full text-sm text-blue border border-gray-500 rounded-lg cursor-pointer bg-white"
                            id="file_input" accept="application/pdf">
                    </div>
                    <div class="images_container w-1/2 ml-3">

                        <label class="block mb-2 text-sm font-medium text-blue">Upload
                            Photos</label>
                        <input type="file" name="photos[]"
                            class="block w-full text-sm text-blue border border-gray-300 rounded-lg cursor-pointer bg-white text-blue"
                            type="file" accept="image/png, image/gif, image/jpeg" multiple>

                    </div>



                </div>


            </div>
            <button type="submit" class="border bg-blue text-yellow px-4 py-2 rounded-lg float-right"
                style="background-color: #13476f   ;">Register</button>
        </form>
    </div>




    </form>
    </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
           
              const successCallback = (position) => {

var lat   =document.getElementById("latitude");
var long   =document.getElementById("longitude");
lat.value =position.coords.latitude;
long.value=position.coords.longitude;
  console.log(position.coords.latitude);
  console.log(position.coords.longitude);
};

const errorCallback = (error) => {
  console.log(error);
};

navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    console.log('Document is ready!');
});
var $clubadded = {!! isset($clubadded) ? json_encode($clubadded) : '{}' !!};
function isEmpty(obj) {
    return Object.entries(obj).length === 0;
}







 
    </script>
</body>










</html>