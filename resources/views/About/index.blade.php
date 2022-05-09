@extends('layouts.header-footer') 
@section('content')
<div class="container max-w-lg px-4 py-40 pt-80  text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center max-w-screen-md"
        style="background-image: url('https://images.unsplash.com/uploads/14114640960629b5c3fa0/116dc05a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')">
        <h1
            class="italic text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-300 to-orange-600 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block"><p class="welcome-heading">About Us</p></span>
        </h1>
        <div class="mx-auto mt-2 text-gray-500 md:text-center lg:text-lg">
            2022, we started our journey to provide amazing travels and tours for our clients. We try to think about the little things that make the big differences, so our motto is providing a great service from making your travel booking with us to the end of the trip.
        </div>
        
    </div>
<section class="bg-gray-50 py-20">
  <div class="container mx-auto flex max-w-6xl items-center px-4 px-10 sm:px-20 md:px-32 lg:px-16">
    <div class="-mx-3 flex flex-wrap items-center">
      <div class="order-0 mb-12 w-full px-3 lg:order-1 lg:mb-0 lg:w-1/2"><img class="mx-auto overflow-hidden rounded-md shadow-xl sm:max-w-sm lg:max-w-full" src="https://images.unsplash.com/photo-1437846972679-9e6e537be46e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="feature image" /></div>
      <div class="lg:order-0 order-1 w-full px-3 lg:w-1/2">
        <div class="w-full lg:max-w-md">
          <!-- <h2 class="mb-4 text-2xl font-bold">About Us</h2> -->
          <h2 class="mb-4 text-3xl text-green-600">WE MAKE YOUR TRAVEL EASY</h2>
          <hr class="mb-4" />

          <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Make your journey fun and adventurous when you travel with us. Visit Australia's sandy stretches are home to world-class surfing, unique marine life, striking ocean pools and unbeatable beach culture. So, it's no wonder Australian beaches regularly rank among the best in the world. Surf, swim, snorkel, sun-worship – there are endless ways to enjoy Australia's beautiful beaches and islands.</p>
          <ul>
            <li class="flex items-center space-x-4 py-2 xl:py-3">
              <svg class="h-8 w-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
              </svg>
              <span class="font-medium text-gray-500">Travel Management</span>
            </li>
            <li class="flex items-center space-x-4 py-2 xl:py-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="font-medium text-gray-500">Easy Payments</span>
            </li>
            <li class="flex items-center space-x-4 py-2 xl:py-3">
              <svg class="h-8 w-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
              </svg>
              <span class="font-medium text-gray-500">Passenger Assistance</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-white py-20">
  <div class="container mx-auto flex max-w-6xl items-center px-4 px-10 sm:px-20 md:px-32 lg:px-16">
    <div class="-mx-3 flex flex-wrap items-center">
      <div class="lg:order-0 order-1 w-full px-3 lg:w-1/2">
        <div class="w-full lg:max-w-md">
          <!-- <h2 class="mb-4 text-2xl font-bold">About Us</h2> -->
          <h2 class="mb-4 text-3xl text-green-600">We Make Your Travel Memorable</h2>
          <hr class="mb-4" />
          <p class="mb-4 font-medium tracking-tight text-gray-500 xl:mb-6">We plan all the small details for your trip, so you can enjoy your trip without thinking minor details. We make sure that you enjoy all the time spent on your favourite travel locations.</p>
        </div>
      </div>
      <div class="order-0 mb-12 w-full px-3 lg:order-1 lg:mb-0 lg:w-1/2"><img class="mx-auto overflow-hidden rounded-md shadow-xl sm:max-w-sm lg:max-w-full" src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="feature image" /></div>
    </div>
  </div>
</section>
@endsection
