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
    @include('reusecomp/navbar')

    <div class="main_view flex justify-center w-auto items-center flex-col">
        <h1 class="main_heading text-yellow text-xl font-bold my-3 w-auto mx-auto text-center md:w-3/4 md:text-4xl">
            Donation is not just about giving;</h1>
        <h1 class="main_heading text-blue text-xl font-bold  w-auto mx-auto text-center md:w-6/12 md:text-4xl">
            It's about making a difference.</h1>

        <p class="main_heading text-yellow text-xl mx-auto text-center my-3 w-full md:w-1/2">Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Velit nam, quas placeat enim, omnis quisquam suscipit minima eveniet modi
            exce</p>

        <div class="main_view_btns flex min-w-1/2 justify-center my-3">
            <a href="/view-campaigns" class="bg-blue text-yellow rounded-md px-4 py-2 text-xl  mx-8">Campaigns</a>
            <a href="/signups" class="bg-yellow text-blue rounded-md px-4 py-2 text-xl ">Organizations</a>

        </div>
    </div>

    <div class="homepage_campaign bg-yellow py-8">
        <h1 class="container_heading_blue py-3 text-small md:text-large">Trending Campaign</h1>
        <div class="campaign_gallery flex justify-center">
            <div class="gallery_box m-0 md:m-3">
                <img class="hover:opacity-50 rounded-2xl h-[97%]"
                    src="{{ asset('assets/images/kidney.jpg') }}"
                    alt="">
                <p class="text-blue font-bold text-center">Cancer Patient</p>
            </div>
            <div class="gallery_wrapper flex flex-wrap w-1/2">
                <div class="gallery_box w-[48%]  mt-3 md:mr-3">
                    <img src="https://scx1.b-cdn.net/csz/news/800a/2016/survivalofqu.jpg" class="hover:opacity-50 rounded-2xl">
                    <p class="text-blue font-bold  text-center">Earthquake Victim</p>
                </div>
                <div class="gallery_box w-[48%]  mt-3 md:mr-3">
                    <img src="{{ asset('assets/images/flood.jpg') }}" class="hover:opacity-50 rounded-2xl">
                    <p class="text-blue font-bold  text-center">Flood Victim</p>
                </div>
                <div class="gallery_box w-[48%]  mt-3 md:mr-3">
                    <img src="{{ asset('assets/images/cancer.jpg') }}" class="hover:opacity-50 rounded-2xl">
                    <p class="text-blue font-bold  text-center">Kidney Victim</p>
                </div>
                <div class="gallery_box w-[48%]  mt-3 md:mr-3">
                    <img src="https://scx1.b-cdn.net/csz/news/800a/2016/survivalofqu.jpg" class="hover:opacity-50 rounded-2xl">
                    <p class="text-blue font-bold  text-center">Earthquake Victim</p>
                </div>


            </div>
        </div>
    </div>





    <!-- Main modal -->
   

    <div class="homepage_clubs bg-blue py-12 px-[1rem] md:px-0">


        <h1 class="container_heading_yellow py-3">Social Clubs</h1>
        <div class="card_container flex justify-around pb-8">


            <div class="max-w-sm  border border-gray-200 rounded-lg bg-blue border-none campaign_box_homepage my-4 md:my-0">
                <a href="#">
                    <img class="rounded-t-lg"
                        src="https://www.openglobalrights.org/userfiles/image/Burnett_Image2_03-10-21.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-white">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-blue bg-yellow rounded-lg">
                        View Profile
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm  border border-gray-200 rounded-lg bg-blue border-none campaign_box_homepage my-4 md:my-0">
                <a href="#">
                    <img class="rounded-t-lg"
                        src="https://www.openglobalrights.org/userfiles/image/Burnett_Image2_03-10-21.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-white">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-blue bg-yellow rounded-lg">
                        View Profile
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm  border border-gray-200 rounded-lg bg-blue border-none campaign_box_homepage my-4 md:my-0">
                <a href="#">
                    <img class="rounded-t-lg"
                        src="https://www.openglobalrights.org/userfiles/image/Burnett_Image2_03-10-21.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-white">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-blue bg-yellow rounded-lg ">
                        View Profile
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>


        </div>
    </div>

    <div class="homepage_testimonial bg-yellow py-8">
        <div id="fullWidthTabContent" class="">
            <div class="p-4">
                <div class="flex justify-around py-8  testi_container">
                    <div class="flex flex-col items-center justify-center testi_box">
                        <dt class="mb-2 text-3xl text-blue font-extrabold">50+</dt>
                        <dd class="text-gray-500 text-blue">Campaigns</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center testi_box">
                        <dt class="mb-2 text-3xl text-blue font-extrabold">$200+</dt>
                        <dd class="text-gray-500 text-blue">Fund Raised</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center testi_box">
                        <dt class="mb-2 text-3xl text-blue font-extrabold">100+</dt>
                        <dd class="text-gray-500 text-blue">Registered Social CLubs</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center testi_box">
                        <dt class="mb-2 text-3xl text-blue font-extrabold">1000+</dt>
                        <dd class="text-gray-500 text-blue">Donors</dd>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="footer_container">


        <footer class="bg-yellow">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="" class="flex items-center">
                            <img src="{{ asset('assets/Images/logo.png') }}" class="h-8 me-3" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue">Raise For
                                Good</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold uppercase text-blue">Follow us
                            </h2>
                            <ul class="text-blue font-medium">
                                <li class="mb-4">
                                    <a href="" class="hover:underline ">Facebook</a>
                                </li>
                                <li>
                                    <a href="" class="hover:underline">Twitter</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold  uppercase text-blue">Legal</h2>
                            <ul class="text-blue font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto border-[#234E70] lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-center">
                    <span class="text-sm text-blue sm:text-center ">© 2024 <a href=""
                            class="hover:underline">Raise For Good</a>. All Rights Reserved.
                    </span>

                </div>
            </div>
        </footer>









    </div>
</body>

</html>