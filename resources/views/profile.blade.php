<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFG | Posts</title>
    @include('globallink')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">

</head>

<body>
    @include('reusecomp/navbar')

    <div class="profile_container pt-[8rem] bg-yellow min-h-screen text-blue">
        <div class="profile_wrapper w-[80%] mx-auto flex">
            <div
                class="profile_info w-[25%] flex flex-col justify-start items-start mx-auto  border-r min-h-[50vh] mt-5">

                <img class="w-20 h-20 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500 mb-2 "
                    src="https://www.w3schools.com/howto/img_avatar.png" alt="Profile avatar">
                <h1 class="my-1 text-xl">
                    {{ucfirst($profileinfo->fname)}}{{ucfirst($profileinfo->mname)}}{{ucfirst($profileinfo->lname)}}
                </h1>
                <p class="my-1 text-sm">{{$profileinfo->pnumber}}</p>
                <small class="my-1">Member Since: {{$profileinfo->email_verified_at->format('Y-m-d')}}</small>
                {{-- <div>
                    <p class="my-1 text-sm"><i class="fa-solid fa-location-dot mr-2"></i>Butwal</p>

                </div> --}}

            </div>
            <div class="profile_post w-[65%]">


                <div class="mb-4 border-b ">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                        data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Active Post</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="false">Submitted Post</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">Donation History</button>
                        </li>
                        <li role="presentation">
                            <button
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                                aria-controls="contacts" aria-selected="false">Contacts</button>
                        </li>
                    </ul>
                </div>
                <div id="default-tab-content">
                    <div class="hidden p-4 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        @foreach ($userpost as $i)
                        @if ($i['approvedstatus']==1)
                        <a href="#"
                            class="my-2 flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4QtaKMX_5hfLnj5l7Kiykjhla3G44iYYJkw&usqp=CAU"
                                alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </div>
                        </a>
                        @endif
                        @endforeach


                    </div>
                    <div class="hidden p-4 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        @foreach ($userpost as $i)
                        @if ($i['approvedstatus']!=1)
                        <a href="#"
                            class="my-2 flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4QtaKMX_5hfLnj5l7Kiykjhla3G44iYYJkw&usqp=CAU"
                                alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </div>
                        </a>
                        @endif
                        @endforeach

                    </div>


                    <div class="hidden p-4 rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        @if(count($payhistory) != 0)
                        @foreach ($payhistory as $i)

                        <div class="flex items-center p-4 mb-1 text-sm text-blue border rounded-lg bg-yellow history_box"
                            role="alert">


                            <div>
                                You paid Rs. {{$i['amount'] }} on {{$i['paidtime']}} to <span> <a href="#"> This </a>
                                </span> Campaign .

                            </div>
                        </div>



                        <br>
                        @endforeach
                        <div class="total_donation " id="total_donation">
                            <div class="flex items-center p-4 mb-1 text-sm text-yellow border rounded-lg bg-blue w-1/2 float-right"
                                role="alert" >
                                <p class="dnt_box">Total Donations = <span class="donation_number ml-2"></span></p>
                            </div>
                        </div>
                        @else
                        {{ "You dont have any donation History" }}
                        @endif


                    </div>
                    <div class="hidden p-4 rounded-lg" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                      

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Post
                </th>
                <th scope="col" class="px-6 py-3">
                    Donor
                </th>
                <th scope="col" class="px-6 py-3">
                    Amount
                </th>
                
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Nandani
                </th>
                <td class="px-6 py-4">
                    Earthquake Victim
                </td>
                <td class="px-6 py-4">
                    Rs 50,000
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Cancer Patient
                </th>
                <td class="px-6 py-4">
                    Anish Pandu
                </td>
                <td class="px-6 py-4">
                    Rs. 10
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Kidney Patient
                </th>
                <td class="px-6 py-4">
                    Kiran Gandu
                </td>
                <td class="px-6 py-4">
                    Rs. 100
                </td>
            </tr>
        </tbody>
    </table>
</div>

                       

                    </div>
                </div>


            </div>
        </div>

    </div>




</body>

<script>
    var container_div = document.getElementById('settings');
var count = container_div.getElementsByTagName('div').length;
    document.querySelector('.donation_number').innerText = count
</script>




</html>