@extends('layouts.header-footer')
@section('content')
<div class="container max-w-lg px-4 py-40 pt-80  text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center max-w-screen-md"
        style="background-image: url('https://images.unsplash.com/photo-1517495306984-f84210f9daa8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')">
        <h1
            class="italic text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-300 to-orange-600 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block"><p class="welcome-heading">Travel Australia with Thapa Travels</p></span>
        </h1>
        <div class="mx-auto mt-2 text-gray-500 md:text-center lg:text-lg">
            Welcome! Find and plan your next destination with us.
        </div>
        
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
                        <h3 class="text-xl">OUR STORY
                        </h3>
                        <h2 class="text-4xl text-green-600">Welcome</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                        2022, we start our journey to provide amazing travels and tours for our clients. We try to think about the little things that make the big differences, so our motto is providing a great service from making your travel booking with us to the end of the trip. 
                        </p>
                        <div class="flex">
                            <a href="{{ route('about.index') }}"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl ">
                        <img               
                                 src="https://images.unsplash.com/photo-1511762996499-16c647c36eee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&q=80" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="container flex items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16 ">
            <div class="flex flex-wrap items-center -mx-3">
            <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full overflow-hidden rounded-md shadow-xl"
                        src="https://images.unsplash.com/photo-1464851707681-f9d5fdaccea8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80"
                        alt="feature image"></div>
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0 ">
                    <div class="w-full lg:max-w-md">
                        <!-- <h2 class="mb-4 text-2xl font-bold">About Us</h2> -->
                        <h2
                            class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-blue-500">
                            WHY TRAVEL WITH US?</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Make your journey fun and adventurous when you travel with us. Visit Australia's sandy stretches are home to world-class surfing, unique marine life, striking ocean pools and unbeatable beach culture. So, it's no wonder Australian beaches regularly rank among the best in the world. Surf, swim, snorkel, sun-worship – there are endless ways to enjoy Australia's beautiful beaches and islands.</p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Travel Management</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-medium text-gray-500">Easy Payments</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Passenger Assistance</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Favourite Destinations</h2>
        </div>
        
    </section> -->
    <section class="py-20 px-4">
  <div class="container mx-auto max-w-6xl items-center px-8 xl:px-5">
    <div class="mt-10 text-center">
      <h2 class="bg-gradient-to-r from-red-600 to-pink-200 bg-clip-text text-3xl font-bold text-transparent">FAVOURITE DESTINATIONS</h2>
      <hr class="mt-5 mb-5" />
    </div>
    <div class="container mx-auto w-full px-5 py-6">
      <div class="grid gap-y-6 pt-3 lg:grid-cols-3">
        <div class="mx-4 mb-2 max-w-xs rounded-lg bg-white shadow-lg">
          <img class="h-48 w-full" src="https://images.unsplash.com/photo-1535796726072-82d5a7395525?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="Image" />
          <div class="px-6 py-4">
            <h4 class="mb-3 text-xl font-semibold uppercase tracking-tight text-green-600">Great Ocean Road</h4>
            <p class="mb-10 object-contain leading-normal text-gray-700">World famous for surf breaks, incredible wildlife and ancient rainforests.</p>
          </div>
        </div>
        <div class="mx-4 mb-2 max-w-xs rounded-lg bg-white shadow-lg">
          <img class="h-48 w-full" src="https://images.unsplash.com/photo-1536575022997-5a02e65ffb9f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Image" />
          <div class="px-6 py-4">
            <h4 class="mb-3 text-xl font-semibold uppercase tracking-tight text-green-600">Yarra Ranges</h4>
            <p class="mb-10 object-contain leading-normal text-gray-700">One of the world's premier wine growing regions.</p>
          </div>
        </div>
        <div class="mx-4 mb-2 max-w-xs rounded-lg bg-white shadow-lg">
          <img class="h-48 w-full" src="https://images.unsplash.com/photo-1596038196915-8295458aa050?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80" alt="Image" />
          <div class="px-6 py-4">
            <h4 class="mb-3 text-xl font-semibold uppercase tracking-tight text-green-600">Mornington Peninsula</h4>
            <p class="mb-10 object-contain leading-normal text-gray-700">A beachy kind of place where the drawcards may be the hot springs, wineries, local produce or markets.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection