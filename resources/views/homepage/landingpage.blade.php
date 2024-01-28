<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
   @include('globallink') 
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">
    </head>
<body>
 <nav class="bg-transparent fixed min-w-full">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                    <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>

                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex flex-1 items-center justify-between sm:items-stretch sm:justify-between ">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-10 w-10 rounded-full logo" src={{asset('assets/images/logo.png')}} alt="Raise for good"">
                  </div>
                  <div class=" hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="#" class=" text-blue rounded-md px-3 py-2 text-sm font-medium"
                                aria-current="page">Homepage</a>
                            <a href="#"
                                class="text-gray-300  hover:text-blue rounded-md px-3 py-2 text-sm font-medium">Campaign</a>
                            <a href="#"
                                class="text-gray-300  hover:text-blue rounded-md px-3 py-2 text-sm font-medium">About</a>
                            <a href="#"
                                class="text-gray-300  hover:text-blue rounded-md px-3 py-2 text-sm font-medium">Contact</a>
                        </div>
                    </div>

                    <div class="flex justify-center align-center">
                        <a href="#" class="bg-yellow text-white rounded-md px-3 py-2 text-sm font-medium"
                            aria-current="page">Login</a>


                    </div>
                </div>

            </div>
        </div>


        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page">Dashboard</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
            </div>
        </div>
    </nav>

    <div class="main_view flex justify-center w-auto items-center flex-col">
        <h1 class="main_heading text-white text-xl font-bold my-3 w-auto mx-auto text-center md:w-3/4 md:text-4xl">
            Donating isn't just about making a difference;</h1>
        <h1 class="main_heading text-blue text-xl font-bold  w-auto mx-auto text-center md:w-6/12 md:text-4xl">
            It's about being the difference.</h1>

        <p class="main_heading text-white text-xl mx-auto text-center my-3 w-full md:w-1/2">Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Velit nam, quas placeat enim, omnis quisquam suscipit minima eveniet modi
            exce</p>

        <div class="main_view_btns flex w-1/2 justify-center my-3">
            <a href="" class="bg-blue text-white rounded-md px-4 py-2 text-xl  mx-8">Donate</a>
            <a href="" class="bg-yellow text-white rounded-md px-4 py-2 text-xl ">SignUp</a>

        </div>
    </div>

    <div class="homepage_campaign bg-blue py-8">
        <h1 class="container_heading py-3">Trending Campaign</h1>
        <div class="campaign_gallery flex justify-center">
            <div class="gallery_box m-3">
                <img class="hover:opacity-50" src="https://www.fredhutch.org/en/news/center-news/2020/05/what-happens-when-cancer-patients-get-covid-19-/_jcr_content/root/responsivegrid/textimage/image.coreimg.jpeg/1638427334811/im6col-200528-cancer-covid19.jpeg" alt="">
                <p class="text-white text-center">Cancer Patient</p>
            </div>
            <div class="gallery_wrapper flex flex-wrap w-1/2">
                <div class="gallery_box w-fit  mt-3 mr-3">
                    <img src="https://scx1.b-cdn.net/csz/news/800a/2016/survivalofqu.jpg" class="hover:opacity-50">
                    <p class="text-white text-center">Earthquake Victim</p>
                </div>
                <div class="gallery_box w-fit  mt-3 mr-3">
                    <img src="https://scx1.b-cdn.net/csz/news/800a/2016/survivalofqu.jpg" class="hover:opacity-50">
                    <p class="text-white text-center">Earthquake Victim</p>
                </div>
                <div class="gallery_box w-fit  mt-3 mr-3">
                    <img src="https://scx1.b-cdn.net/csz/news/800a/2016/survivalofqu.jpg" class="hover:opacity-50">
                    <p class="text-white text-center">Earthquake Victim</p>
                </div>
                <div class="gallery_box w-fit  mt-3 mr-3">
                    <img src="https://scx1.b-cdn.net/csz/news/800a/2016/survivalofqu.jpg" class="hover:opacity-50">
                    <p class="text-white text-center">Earthquake Victim</p>
                </div>
              
               
            </div>
        </div>
    </div>





</body>

</html>