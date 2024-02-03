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

</head>

<body>
    @include('reusecomp/navbar')



    <div class="post_form_container pt-[5rem] bg-blue-900 flex flex-col h-[100vh]">
        <form id="regForm" method="POST" action="{{ route('helpform') }}" enctype="multipart/form-data">
            @csrf
            <h1 class="text-2xl text-white">Fill the form with correct details</h1>
            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="title" id="post_title"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="post_title"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Title</label>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="fname" id="floating_first_name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_first_name"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Needy First name</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="mname" id="middlename"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "/>
                        <label for="middlename"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Needy middle name</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="lname" id="lname"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_last_name"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Needy
                            Last name</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="relation" id="relation"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="relation"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Relation
                            with Needy</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phonenumber" id="floating_phone"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_phone"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                            number (123-456-7890)</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <textarea name="description" id="description"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder="Description" rows="1" required></textarea>

                    </div>
                </div>
            </div>


            <div class="tab">
                <div class="relative my-5">

                    <div class="provience my-5">
                        <label for="prov" class="text-white m-2">Select Provience:</label>

                        <select id="province" name="province" class="bg-gray-800 text-white p-1 w-full"
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
                        <label for="dis" class="text-white m-2 ">Select District:</label>

                        <select id="district" name="district" class="bg-gray-800 text-white p-1 w-full">
                            <option value="" selected disabled>Select District</option>
                        </select>
                    </div>
                    <!-- <div class="municipality my-5">
                        <label for="mun" class="text-white m-2 ">Select Municipality:</label>
    
                        <select id="mun" name="municipality" class="bg-gray-800 text-white p-1 w-full">
                            <option value="Rupandehi">Rupandehi</option>
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Lalitput">Lalitput</option>
                            <option value="Bhaktapur">Bhaktapur</option>
    
                        </select>
                    </div> -->

                    <div class="tagret my-5">
                        <label for="tgt" class="text-white m-2 ">Select Target Amount:</label>
                        <div class=" justify-between">
                            <input type="text" name="amountw" class="w-1/2  bg-gray-900 text-white"
                                placeholder="Target Amount" id="trg_amt">

                            <input type="range" name="amounta" min="5" max="100000" id="tgt"
                                class="w-1/2  bg-gray-900" />
                        </div>
                    </div>





                </div>
            </div>

            <div class="tab">
                <div class="citizenship_container my-5 flex justify-around">
                    <div class="w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                            Citizenship</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-500 rounded-lg cursor-pointer bg-gray-900 dark:text-gray-400 focus:outline-none  dark:placeholder-gray-400"
                            type="file" name="citizenship[]" multiple>
                    </div>
                    <div class="w-1/2 ml-3">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                            Official Document</label>
                        <input type="file" name="officialdocs[]"
                            class="block w-full text-sm text-gray-900 border border-gray-500 rounded-lg cursor-pointer bg-gray-900 dark:text-gray-400 focus:outline-none  dark:placeholder-gray-400"
                            id="file_input" type="file">
                    </div>




                </div>
                <div class="images_container my-5">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                        Photos</label>
                    <input type="file" name="photos[]"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-900 text-white dark:placeholder-gray-400"
                        type="file" multiple>

                </div>
                <div class="video_container my-5">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                        Videos</label>
                    <input name="video"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-blur-900 dark:text-gray-400 focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400"
                        id="multiple_files" type="file" multiple>

                </div>
            </div>
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Next</button>
                </div>
            </div>
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>

            </div>
        </form>
    </div>

    </div>
</body>

<script>


</script>


<script>
    var slider = document.getElementById("tgt");
    var output = document.getElementById("trg_amt");

    output.innerText = slider.value;

    slider.oninput = function () {
        console.log(slider.value)
        output.value = slider.value;
    }

    output.oninput = function () {
        console.log(slider.value)
        slider.value = output.value;
    }

</script>


<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>



</html>