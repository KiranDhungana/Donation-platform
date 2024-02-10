<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFG | Posts</title>
    @include('globallink')
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">

</head>
<style>
    #searchResults{
        display: none;
    }
</style>

<body>
    <div class="page_container bg-blue ">


        <div class="search_bar_top w-[80%] mx-auto pt-[5rem]">
            @include('reusecomp/navbar')
            <div class="search_bar">

                <form id="searchForm" class="flex items-center">
                    <label for="voice-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M11.15 5.6h.01m3.337 1.913h.01m-6.979 0h.01M5.541 11h.01M15 15h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 2.043 11.89 9.1 9.1 0 0 0 7.2 19.1a8.62 8.62 0 0 0 3.769.9A2.013 2.013 0 0 0 13 18v-.857A2.034 2.034 0 0 1 15 15Z" />
                            </svg>
                        </div>
                        <input type="text" name="query" id="query"
                            class="bg-gray-50 z-[-99] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Mockups, Logos, Design Templates..." required>
                        <button type="submit" class="absolute inset-y-0 end-0 flex items-center pe-3">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z" />
                            </svg>
                        </button>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>Search
                    </button>
                </form>
             

            </div>
        </div>
        <div class="postpage_containe flex flex-col">

            <div class="postpage_body flex w-[80%] mx-auto">
                <div class="search_sidebar w-[25%]  p-3 mr-5">
                    <div class="search_type border-b border-gray-500 py-2">
                        <div class="saarch_heading">
                            <p class="text-xl text-white font-bold my-2">Types</p>
                        </div>
                        <div class="search_items flex flex-col ">
                            <a href="" class="text-white text-sm my-1">Disaster</a>
                            <a href="" class="text-white text-sm my-1">Disease</a>
                            <a href="" class="text-white text-sm my-1">Startup</a>
                            <a href="" class="text-white text-sm my-1">Problem</a>

                        </div>
                    </div>
                    <div class="search_type border-b border-gray-500 py-2">
                        <div class="saarch_heading">
                            <p class="text-xl text-white font-bold my-2">Category</p>
                        </div>
                        <div class="search_items flex flex-col ">
                            <a href="" class="text-white text-sm my-1">Disaster</a>
                            <a href="" class="text-white text-sm my-1">Disease</a>
                            <a href="" class="text-white text-sm my-1">Startup</a>
                            <a href="" class="text-white text-sm my-1">Problem</a>

                        </div>
                    </div>
                    <div class="search_type border-b border-gray-500 py-2">
                        <div class="saarch_heading">
                            <p class="text-xl text-white font-bold my-2">Highest</p>
                        </div>
                        <div class="search_items flex flex-col ">
                            <a href="" class="text-white text-sm my-1">Dontaion</a>
                            <a href="" class="text-white text-sm my-1">Views</a>
                            <a href="" class="text-white text-sm my-1">Likes</a>
                            <a href="" class="text-white text-sm my-1">Money</a>

                        </div>
                    </div>
                    <div class="search_type border-b border-gray-500 py-2">
                        <div class="saarch_heading">
                            <p class="text-xl text-white font-bold my-2">Location</p>
                        </div>
                        <div class="search_items flex flex-col " id="filter_prov">
                            <a href="" class="text-white text-sm my-1">Province No. 1</a>
                            <a href="" class="text-white text-sm my-1">Madhesh</a>
                            <a href="" class="text-white text-sm my-1">Bagmati</a>
                            <a href="" class="text-white text-sm my-1">Gandaki</a>
                            <a href="" class="text-white text-sm my-1">Lumbini</a>
                            <a href="" class="text-white text-sm my-1">Karnali</a>
                            <a href="" class="text-white text-sm my-1">Sudurpashchim</a>

                        </div>
                    </div>



                </div>
                <div id="searchResults" class="post_container w-full flex flex-row flex-wrap">

                </div>
                <div class="post_container w-full flex flex-col" id="default_data">


                    <div class="campaigns_card_container flex flex-wrap my-3 justify-center items-center">
                        @foreach ($post as $item)
                        <div class="campaign_card m-5">
                            <div
                                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg"
                                        src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202401/japan-earthquake-044751828-16x9_0.jpg?VersionId=RBM6I1Flkjgb8On.fmy3IlKcXUMLAhNG&size=690:388"
                                        alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Help Needed !
                                        </h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
<<<<<<< HEAD
                                    
                                        {{ \Illuminate\Support\Str::limit($item['description'], $limit = 100, $end = '...') }}
                                        
                                       
=======

                                        {{ \Illuminate\Support\Str::limit($item['description'], $limit = 200, $end =
                                        '...') }}


>>>>>>> 3917c56ecb464dfa8623c5bfe17aa470715fb0ab
                                    </p>
                                    <a href="/view-post/{{$item['id']}}"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Details
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                    <div class="views border-t py-2 mt-2 border-gray-500">
                                        <div class="total_views w-1/2 flex">
                                            <i class="fa-regular fa-eye mr-3"
                                                style="font-size: 12px; color: white;"><span
                                                    class="text-sm ml-1">33</span></i>
                                            <i class="fa-regular fa-heart" style="font-size: 12px; color: white;"><span
                                                    class="text-sm ml-1"></span></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>

    </div>

    <script>
        $('#searchForm').submit(function (e) {
            debugger
            e.preventDefault();

            var query = $('#query').val();

            $.ajax({
                type: 'GET',
                url: '{{ route('search') }}',
                data: { query: query },
                success: function (response) {
                    $('#searchResults').empty();
                    $('#searchResults').css('display', 'flex');
                    $('#default_data').hide()

                    $.each(response, function (index, item) {
                        console.log(response);
                        desc = item.description
                        var maxLength = 80;
                        var truncatedText = desc.length > maxLength ? desc.substring(0, maxLength) + '...' : desc;
                        console.log(truncatedText)
                        $('#searchResults').append(

                            `<div class="campaign_card m-5">
                                <div
                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg"
                                            src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202401/japan-earthquake-044751828-16x9_0.jpg?VersionId=RBM6I1Flkjgb8On.fmy3IlKcXUMLAhNG&size=690:388"
                                            alt="" />
                                    </a>
                                    <div class="p-5">
                                        <a href="#">
                                            <h5
                                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                ${item.title}
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            ${truncatedText}
                                          


                                        </p>
                                        <a href="/view-post/${item.id}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Details
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                        <div class="views border-t py-2 mt-2 border-gray-500">
                                            <div class="total_views w-1/2 flex">
                                                <i class="fa-regular fa-eye mr-3"
                                                    style="font-size: 12px; color: white;"><span
                                                        class="text-sm ml-1">33</span></i>
                                                <i class="fa-regular fa-heart" style="font-size: 12px; color: white;"><span
                                                    class="text-sm ml-1"></span></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>`
                        );
                    });
                },
                error: function (xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    </script>



</body>

</html>