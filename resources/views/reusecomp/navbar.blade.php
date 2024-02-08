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
      <a  href="/post-campaign" 
        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Post Campaign</a>

      <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
        class="flex text-sm  rounded-full md:me-0"
        type="button" style="margin-left:1rem">
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
            <a href="/profile/{{Auth::user()->id}}/{{Auth::user()->fname}}" class="block px-4 py-2 text-yellow">Profile</a>
          </li>
          <li>
            <a href="/setting/{{Auth::user()->id}}/{{Auth::user()->fname}}"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 text-yellow">Settings</a>
          </li>

        </ul>
        <div class="py-2">
          <a href="/logout"
            class="block px-4 py-2 text-sm  bg-blue dark:text-gray-200  text-yellow">Sign out</a>
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