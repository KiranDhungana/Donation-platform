<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<link rel="stylesheet" href="{{ asset('assets/csss/globallink.blade.php') }}">
<link rel="stylesheet" href="{{ asset('assets/csss/customcss.css') }}">

@include('./reusecomp/loginmodal')


<nav class="bg-yellow  fixed w-full z-20 top-0 start-0">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('assets/Images/logo.png') }}" class="h-8" alt="Flowbite Logo">

    </a>
    <div class="flex flex-row gap-[5px] md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      @if(!Auth::user())
      <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" id="login"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
      @else

      @endif
      <!-- Dropdown menu -->
      @if (Auth::user())
      <a href="/post-campaign"
        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Post
        Campaign</a>
      <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
        class="relative inline-flex items-center text-sm font-medium text-center  focus:outline-none text-blue"
        type="button">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
          viewBox="0 0 14 20">
          <path
            d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
        </svg>

        <div
          class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">
        </div>
      </button>

      <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
        class="flex text-sm  rounded-full md:me-0" type="button" style="margin-left:1rem">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full "
          src="https://img.freepik.com/premium-photo/cartoon-game-avatar-logo-gaming-brand_902820-465.jpg"
          alt="user photo">
      </button>
      <div id="dropdownAvatar"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
          <div>{{Auth::user()->fname}}{{ Auth::user()->mname }} {{ Auth::user()->lname}}</div>
          <div class="font-medium truncate">{{Auth::user()->email}}</div>
        </div>
        <ul class="py-2 text-sm " aria-labelledby="dropdownUserAvatarButton">
          <li>
            <a href="/profile/{{Auth::user()->id}}/{{Auth::user()->fname}}"
              class="block px-4 py-2 text-yellow">Profile</a>
          </li>
          <li>
            <a href="/setting/{{Auth::user()->id}}/{{Auth::user()->fname}}"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 text-yellow">Settings</a>
          </li>

        </ul>
        <div class="py-2">
          <a href="/logout" class="block px-4 py-2 text-sm  bg-blue dark:text-gray-200  text-yellow">Sign out</a>
        </div>
      </div>
      @else
      <div>
      </div>
      @endif



      <button data-collapse-toggle="navbar-sticky" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul
        class="flex flex-col p-4 md:p-0 mt-4 font-medium  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0  ">
        <li>
          <a href="/" class="block py-2 px-3  rounded md:p-0" aria-current="page">Home</a>
        </li>
        <li>
          <a href="/view-campaigns"
            class="block py-2 px-3  rounded  md:p-0 text-blue dark:border-gray-700">Campaigns</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3  rounded  md:p-0 text-blue dark:border-gray-700">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3  rounded  md:p-0 text-blue dark:border-gray-700">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>





<!-- Dropdown menu -->
<div id="dropdownNotification"
  class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
  aria-labelledby="dropdownNotificationButton">
  <div
    class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
    Notifications
  </div>
  <div class="divide-y divide-gray-100 dark:divide-gray-700">
    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
   
      <div class="w-full ps-3">
        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span
            class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey, what's up? All set for the
          presentation?"</div>
        <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
      </div>
    </a>
    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
  
      <div class="w-full ps-3">
        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
            class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span> and <span
            class="font-medium text-gray-900 dark:text-white">5 others</span> started following you.</div>
        <div class="text-xs text-blue-600 dark:text-blue-500">10 minutes ago</div>
      </div>
    </a>
    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
      
      <div class="w-full ps-3">
        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
            class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span> and <span
            class="font-medium text-gray-900 dark:text-white">141 others</span> love your story. See it and view more
          stories.</div>
        <div class="text-xs text-blue-600 dark:text-blue-500">44 minutes ago</div>
      </div>
    </a>
    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
     
      <div class="w-full ps-3">
        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
            class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> mentioned you in a comment:
          <span class="font-medium text-blue-500" href="#">@bonnie.green</span> what do you say?</div>
        <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
      </div>
    </a>
    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
     
      <div class="w-full ps-3">
        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
            class="font-semibold text-gray-900 dark:text-white">Robert Brown</span> posted a new video: Glassmorphism -
          learn how to implement the new design trend.</div>
        <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
      </div>
    </a>
  </div>
  <a href="#"
    class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
    <div class="inline-flex items-center ">
  
      Clear All
    </div>
  </a>
</div>