<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @include('globallink')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">
</head>
<body>
@include('reusecomp/navbar')
<div class="w-[80%] mx-auto">

   
<div class="flex flexContainer  ">


<div class=" block w-[70%]  bg-white  -gray-200 rounded-lg  p-[2rem]">
    <h4>How it started...</h4>
    <h1 class="text-3xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, architecto!</h1>
    
    <p class="mt-5 text-justify">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, nobis facilis. Consectetur, cum? Eos eaque
        necessitatibus commodi, rem temporibus impedit consectetur? Tenetur, quis eligendi? Sit atque necessitatibus
        iusto repudiandae vitae dignissimos illum rem nihil maxime est, quam, vero veritatis qui obcaecati error
        dolorem hic commodi, doloremque distinctio odit nemo. Non architecto, repudiandae, saepe amet eum voluptate
        aliquid optio ut vero excepturi doloribus ipsam placeat, reiciendis explicabo nihil.
    </p>
</div>

    <div class="">
        <div class="">

            <div>
                <img class="w-[800px] h-auto m-14  block max-w-sm  bg-white  -gray-200 rounded-lg  "
                src="https://mcshin.org/wp-content/uploads/2020/03/donations-2.jpg" alt="">
            </div>
            <div class=" flex flex-col h-[20rem] w-[28rem] flex flex-col justify-center items-center bg-white  -gray-200 rounded-lg  items-center justify-center  ">
                <div class="inline-flex items-center px-3 py-2 w-full justify-evenly">
                    
                    <div class=" block  w-[10rem] h-[5rem]  flex flex-col justify-center items-center bg-white  -gray-200 rounded-lg  ">
                        <div class="font-bold pl">3.5</div>
                        <div class="text-sm">Lorem ipsum </div>
                    </div>
                    <div class="block  w-[10rem] h-[5rem]  flex flex-col justify-center items-center bg-white  -gray-200 rounded-lg   ">
                        <div class="font-bold">23</div>
                        <div class="text-sm">Lorem ipsum </div>
                    </div>
                </div>
                <div class="inline-flex items-center px-3 py-2 my-2 w-full justify-evenly">
                    
                    <div class=" block  w-[10rem] h-[5rem]  flex flex-col justify-center items-center bg-white  -gray-200 rounded-lg  ">
                        <div class="font-bold pl">3.5</div>
                        <div class="text-sm">Lorem ipsum </div>
                    </div>
                    <div class="block  w-[10rem] h-[5rem]  flex flex-col justify-center items-center bg-white  -gray-200 rounded-lg   ">
                        <div class="font-bold">23</div>
                        <div class="text-sm">Lorem ipsum </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>