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

</style>

<body>
    <div class="page_container bg-yellow">


        <div class="search_bar_top w-[80%] mx-auto pt-[5rem]">
            @include('reusecomp/navbar')
            <div class="search_bar">

                <form id="searchForm" class="flex items-center">
                    <label for="voice-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 21 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M11.15 5.6h.01m3.337 1.913h.01m-6.979 0h.01M5.541 11h.01M15 15h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 2.043 11.89 9.1 9.1 0 0 0 7.2 19.1a8.62 8.62 0 0 0 3.769.9A2.013 2.013 0 0 0 13 18v-.857A2.034 2.034 0 0 1 15 15Z" />
                            </svg>
                        </div>
                        <input type="text" name="query" id="query"
                            class="bg-gray-50 z-[-99] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                            placeholder="Search Social Clubs" required>

                    </div>
                    <button type="submit"
                        class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
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

            <div class="postpage_body flex w-[95%] md:w-[80%] mx-auto">
                <div class="search_sidebar w-[25%]  p-3 mr-5">
                    <div class="search_type border-b border-gray-500 py-2">
                        <div class="saarch_heading">
                            <p class="text-xl text-blue font-bold my-2">Types</p>
                        </div>
                        <div class="search_items flex flex-col ">
                            <form action="/socialorganizations-nearby" method="post">
    @csrf
    <input id="lat" hidden type="text" name="latitude" value="">
    <input id="long" hidden type="text" name="longitude" value="">
    {{-- <label for="passwords">Password</label> --}}
    {{-- <input type="password"  name=""><br><br> --}}
    <input style="border:none;color:blue" type="submit" value="Nearby">
</form>
                            {{-- <a href="/recomended/{{Auth::id()}}" class="text-blue text-sm my-1">Recomended</a> --}}
                            {{-- <a href="/socialorganizations-nearby" class="text-blue text-sm my-1">Near by</a> --}}

                        </div>
                    </div>






                </div>
                <div id="searchResults" class="post_container w-full flex flex-row flex-wrap">
                    <div class="post_container w-full flex flex-col" id="default_data">


                        <div class="campaigns_card_container flex flex-wrap my-3 items-center"
                            id="campaigns">
                            @foreach ($socialorg as $item)
                                @if ($item['approvedstatus'] == 1)
                                    <div class="campaign_card m-5">
                                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                                            <a href="#">
                                                <img class="rounded-t-lg"
                                                    src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202401/japan-earthquake-044751828-16x9_0.jpg?VersionId=RBM6I1Flkjgb8On.fmy3IlKcXUMLAhNG&size=690:388"
                                                    alt="" />
                                            </a>
                                            <div class="p-5">
                                                <a href="#">
                                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue">
                                                        {{ $item['name'] }}
                                                    </h5>
                                                </a>
                                                <p class="mb-3 font-normal text-blue min-h-[5rem]">

                                                    {{ \Illuminate\Support\Str::limit($item['description'], $limit = 100, $end = '...') }}


                                                </p>
                                                <a href="/social-organization/{{ $item['id'] }}"
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                                    Details
                                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                    </svg>
                                                </a>
                                                <!-- <div class="views border-t py-2 mt-2 border-gray-500">
                                                    <div class="total_views w-1/2 flex">
                                                        <i class="fa-regular fa-eye mr-3"
                                                            style="font-size: 12px; color: [#13476f];"><span
                                                                class="text-sm ml-1">33</span></i>
                                                        <i class="fa-regular fa-heart"
                                                            style="font-size: 12px; color: [#13476f];"><span
                                                                class="text-sm ml-1"></span></i>
                                                    </div>
                                                </div> -->

                                            </div>
                                        </div>
                                    </div>
                                @else
                                @endif
                            @endforeach


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>




</body>
<script>
    

  const successCallback = (position) => {

var lat   =document.getElementById("lat");
var long   =document.getElementById("long");
lat.value =position.coords.latitude;
long.value=position.coords.longitude;
  console.log(position.coords.latitude);
  console.log(position.coords.longitude);
};

const errorCallback = (error) => {
  console.log(error);
};

navigator.geolocation.getCurrentPosition(successCallback, errorCallback);

</script>

</html>
