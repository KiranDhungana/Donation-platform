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
    
    <div class="flexContainer pt-[5rem] flex-col md:flex-row w-[90%] mx-auto pb-4">

        <div class="sideBox p-4 border-r-2">
            <div class="container">
                <div class="card">
                  <div class="profile-picture">
                    <img src="https://cinnepal.org.np/storage/207/logo-header.png" alt="Profile Picture" class="my-2">
                  </div>
                  <h2 class="name">Club President: Roshan Pokhrel</h2>
                  <h3 class="phonenumber">Phone number: 9862722281</h3>
                  <p class="email">Email:   imroshan224@gmail.com</p>

                </div>
            </div>
        </div>

        <div class="postDetail_container flex flex-col">
            <div class="postdetail_wrapper">

                <div>
                    <h1 class="text-3xl text-[#13476f] py-3">Creative Institute Nepal</h1>
                    
                </div>



                <div id="controls-carousel" class="relative w-full" data-carousel="static">
                  
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-[450px]">
                       
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.pexels.com/photos/39517/rose-flower-blossom-bloom-39517.jpeg?cs=srgb&dl=pexels-pixabay-39517.jpg&fm=jpg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="https://images.pexels.com/photos/39517/rose-flower-blossom-bloom-39517.jpeg?cs=srgb&dl=pexels-pixabay-39517.jpg&fm=jpg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                      
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.pexels.com/photos/39517/rose-flower-blossom-bloom-39517.jpeg?cs=srgb&dl=pexels-pixabay-39517.jpg&fm=jpg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                       
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.pexels.com/photos/39517/rose-flower-blossom-bloom-39517.jpeg?cs=srgb&dl=pexels-pixabay-39517.jpg&fm=jpg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
<iframe class="w-full h-full"
                                src="https://www.youtube.com/embed/d3sfcA2-QuU?si=-RK6zAAQTbNlOL_E"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                   
                    <button type="button"
                        class="absolute top-0 start-0  flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none crousel_controller"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30">
                            <svg class="w-4 h-4 text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0  flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none crousel_controller"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50">
                            <svg class="w-4 h-4 text-white" aria-hidden="true"
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
              
            </div>
        </div>
        
    </div>
    </div>
  





</body>

</html>