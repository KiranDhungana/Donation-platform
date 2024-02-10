<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail page</title>

    @include('globallink')
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">
    <style>
        .like-btn {
            cursor: pointer;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #eee;
            color: #333;
        }

        .liked {
            background-color: #4CAF50;
            color: white;
        }


        #donation_bar {
            background-color: #13476f;
            width: 100%;
            height: 20px;
            border-bottom: 1px solid gray;

        }

        #amount_filled {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;

            height: 100%;
            background-color: #d3d2b5;
        }
    </style>
</head>

<body>
    @include('reusecomp/navbar')
    <div class="flexContainer pt-[5rem]">

        <div class="postDetail_container flex flex-col">
            <div class="postdetail_wrapper">

                <div>
                    <h1 class="text-3xl text-[#13476f] py-3">Cancer Patient</h1>
                    <div class=" flex space-x-1.5 pb-3">

                        <div>

                            <i style="color: #13476f;" class="fa-regular fa-eye"></i>

                        </div>
                        <div>26 views</div>
                    </div>
                </div>



                <div id="controls-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-[450px]">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.pexels.com/photos/39517/rose-flower-blossom-bloom-39517.jpeg?cs=srgb&dl=pexels-pixabay-39517.jpg&fm=jpg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="https://images.pexels.com/photos/39517/rose-flower-blossom-bloom-39517.jpeg?cs=srgb&dl=pexels-pixabay-39517.jpg&fm=jpg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.pexels.com/photos/39517/rose-flower-blossom-bloom-39517.jpeg?cs=srgb&dl=pexels-pixabay-39517.jpg&fm=jpg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.pexels.com/photos/39517/rose-flower-blossom-bloom-39517.jpeg?cs=srgb&dl=pexels-pixabay-39517.jpg&fm=jpg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
<iframe class="w-full h-full"
                                src="https://www.youtube.com/embed/d3sfcA2-QuU?si=-RK6zAAQTbNlOL_E"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div class="mt-3 text-[#13476f] text-justify">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi at harum exercitationem
                        consequuntur
                        reprehenderit, provident pariatur nulla, autem dolorum sint, amet magni vero cumque ratione?
                        Eius,
                        praesentium magnam voluptatem similique sint et, unde reprehenderit sunt aut cupiditate eligendi
                        deleniti neque dolore nam est sit inventore animi consequatur quod ratione maxime aliquid
                        excepturi.
                        Odit officia nobis ad perferendis deserunt earum autem dolorum totam, velit ipsum atque
                        consequuntur. Unde dolorem voluptas libero inventore maiores velit laudantium, eligendi delectus
                        reprehenderit? Incidunt assumenda aperiam esse et ratione sunt quasi odio enim perspiciatis
                        deserunt
                        repellat molestiae nisi consequatur distinctio non magni iusto, rem, ut officiis. Aliquam rerum
                        dolorem numquam atque, in delectus quis debitis pariatur dolorum iste fugiat illo accusamus
                        veritatis nisi sequi laboriosam eveniet.</p>
                </div>
                <div class="flex space-x-2 ">
                    <div class="mt-1">
                        <button id="likeButton" class="like-btn" data-post-id="{{ $campaindata->id }}"
                            onclick="toggleLike()">
                            like
                        </button>
                    </div>
                    <div id="likediv" class="mt-2 text-[#13476f]">0</div>
                    <!-- <i class="fa-regular fa-heart"></i> blank heart -->
                </div>
            </div>
        </div>
        <div class="flexChild sideBox">
            <div class="donation_bar" id="donation_bar">
                <div class="amount_filled" id="amount_filled"></div>
                <!-- <input type="range" name="raisedamt" min="0" max="4699" id="slider_value" class="bg-gray-900" disabled/> -->
            </div>
            <div class="bg-[#13476f]">
                <div class="flex felx-col place-content-between text-white pt-2 px-3">
                    <div class="font-bold">Rs. <span id="raised">{{ $totalamount }} </span> </div>
                    <div class="font-bold">23</div>
                    <div class="font-bold">Rs. <span id="goal">4000</span> </div>
                </div>
                <div class="flex felx-col place-content-between px-3 pb-1 text-white ">

                    <div class="">Raised </div>
                    <div>Donation</div>
                    <div class="">Goal</div>
                </div>
            </div>
            <div class="mt-4 mx-3">
                <a href="my.pdf" class="text-[#13476f] underline download">View Document </a>
            </div>
            <div class="mt-3 mx-3 ">
                <a href="/pay/{{ $campaindata->id }}"
                    class="text-white bg-[#13476f] font-medium rounded text-sm px-3 py-1.5 text-center me-2 mb-2">Donate</a>
            </div>
            <div></div>
            <div class="px-3 ">
                <small>Share with</small>
            </div>
            <div class="flex felx-col justify-evenly ">
                <div>
                    <button type="button"><i style="color:#316FF6"
                            class="fa-brands fa-facebook text-3xl m-3 colorf"></i></button>
                </div>
                <div>
                    <button type="button"><i style="color: #962fbf;"
                            class="fa-brands fa-instagram text-3xl m-3"></i></button>
                </div>
                <div>
                    <button type="button"><i style="color: #1DA1F2"
                            class="fa-brands fa-twitter text-3xl m-3 colorf"></i></button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        //         var img = document.createElement("img");
        // img.src = 
        // 
        // img.alt = "Image Alt Text";
        // img.width = "50"; 
        // var button = document.getElementById("likediv");
        // console.log(button);

        // button.appendChild(img);
        var userlikestatus;
        var isLiked;

        $(document).ready(function() {
            var myDiv = document.getElementById('likediv');
            $.ajax({
                url: '/getlikes/{{ $campaindata->id }}',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    newdata = JSON.stringify(data);

                    userlikestatus = (data?.[1]?.[0]?.likes) ?? 0
                    console.log(userlikestatus);
                    totallikes = console.log(data[0]);
                    // console.log(newdata);
                    myDiv.textContent = data[0];
                    if (userlikestatus == 1) {
                        const likeButton1 = document.getElementById('likeButton');
                        likeButton1.classList.add("liked");
                        likeButton.innerHTML = 'Liked';
                        isLiked = true;
                        console.log("userliked");
                    } else {
                        isLiked = false;
                    }
                },
                error: function(error) {
                    console.error(error);
                }
            });
        })

        function toggleLike() {
            const likeButton = document.getElementById('likeButton');
            console.log("okay");
            console.log(isLiked);
            isLiked = !isLiked;
            console.log(isLiked);
            if (isLiked) {
                //  debugger
                likeButton.classList.add('liked');
                likeButton.innerHTML = 'Liked';
                sendLikeToDatabase();
            } else {
                //  debugger
                likeButton.classList.remove('liked');
                likeButton.innerHTML = 'Like';
                senddisliketodb();
            }
        }

        function senddisliketodb() {
            //  var postId = $(this).data('post-id');

            $.ajax({

                type: "POST",
                url: '/like',
                dataType: 'json',

                data: {
                    liked: false,
                    postid: '{{ $campaindata->id }}',
                    userid: '{{ Auth::user()->id }}',
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $.ajax({
                        url: '/getlikes/{{ $campaindata->id }}',
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            var myDiv = document.getElementById('likediv');

                            newdata = JSON.stringify(data);
                            console.log(newdata);
                            myDiv.textContent = data[0];

                        },
                        error: function(error) {
                            console.error(error);
                        }
                    });
                    console.log(data);
                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });
        }

        function sendLikeToDatabase() {
            //  var postId = $(this).data('post-id');

            $.ajax({
                type: "POST",
                url: '/like',
                data: {
                    liked: true,
                    postid: '{{ $campaindata->id }}',
                    userid: '{{ Auth::user()->id }}',
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    var myDiv = document.getElementById('likediv');
                    $.ajax({
                        url: '/getlikes/{{ $campaindata->id }}',
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {

                            newdata = JSON.stringify(data);
                            console.log(newdata);
                            myDiv.textContent = data[0];

                        },
                        error: function(error) {
                            console.error(error);
                        }
                    });
                    console.log(data);
                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });
        }
    </script>




    <script>
        var amt = document.getElementById("amount_filled");
        var raised = document.getElementById("raised").innerText;
        var goal = document.getElementById("goal").innerText;
        var width_value = (parseInt(raised) / parseInt(goal)) * 100;

        amt.style.width = width_value + "%"
    </script>


</body>

</html>