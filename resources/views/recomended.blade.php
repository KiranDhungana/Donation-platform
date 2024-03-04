<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('globallink')
</head>
@include('reusecomp/navbar')
<body>
     <div class="campaigns_card_container flex flex-wrap my-3 justify-center items-center mt-[50px]">
                        @foreach ($post as $item)
                        <div class="campaign_card m-5">
                            <div
                                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow  dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg"
                                        src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202401/japan-earthquake-044751828-16x9_0.jpg?VersionId=RBM6I1Flkjgb8On.fmy3IlKcXUMLAhNG&size=690:388"
                                        alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-blue">
                                            Help Needed !
                                        </h5>
                                    </a>
                                    <p class="mb-3 font-normal text-blue">

                                        {{ \Illuminate\Support\Str::limit($item->description, $limit = 100, $end =
                                        '...') }}


                                    </p>
                                    <a href="/view-post/{{$item->id}}"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
                                                style="font-size: 12px; color: [#13476f];"><span
                                                    class="text-sm ml-1">33</span></i>
                                            <i class="fa-regular fa-heart" style="font-size: 12px; color: [#13476f];"><span
                                                    class="text-sm ml-1"></span></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
    
</body>
</html>