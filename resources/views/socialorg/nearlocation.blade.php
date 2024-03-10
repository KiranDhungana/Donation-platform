<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('globallink')
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">
</head>
@include('reusecomp/navbar')

<body>
    <div class="mt-[64px]">

    </div>


    <div class="postpage_containe flex flex-col ">

        <div class="postpage_body flex w-[80%] mx-auto">

            <div class="post_container w-full flex flex-col" id="default_data">


                <div class="campaigns_card_container flex flex-row flex-wrap my-3 justify-center items-center">


                    @foreach ($nearclub as $item)
                    @foreach ($item as $json => $value)
                    @php
                    $decodedData = json_decode($json, true);
                    @endphp

                    <div class="club_card m-5  rounded-lg w-[30%] h-[350px]" >
                        <div class="max-w-sm bg-white  rounded-lg shadow ">
                            <a href="#">
                                <img class="rounded-t-lg"
                                    src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202401/japan-earthquake-044751828-16x9_0.jpg?VersionId=RBM6I1Flkjgb8On.fmy3IlKcXUMLAhNG&size=690:388"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue">
                                        {{ $decodedData['name'] }}
                                    </h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700">

                                <p>Distance: {{ number_format($value, 2) }} km</p>

                                </p>
                                <a href=""
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Details
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>


                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>
            </div>


        </div>
    </div>
</body>

</html>