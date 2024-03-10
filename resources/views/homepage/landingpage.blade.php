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
                        src="data:image/png;base64,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" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white text-white">Creative Institute Nepal</h5>
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
                        src="https://static.vecteezy.com/system/resources/thumbnails/012/263/041/small/family-tree-logo-template-this-logo-combine-human-with-green-leaf-that-means-healthy-life-perfect-for-health-company-green-activist-charity-organization-social-community-activities-etc-vector.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white text-white">Family Tree</h5>
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
                        src="https://straightedgeworldwide.com/cdn/shop/files/SWC-Banner-SobrietySociety.jpg?v=1706587382" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white text-white">Sobriety Society
                           </h5>
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