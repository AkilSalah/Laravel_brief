@extends('layouts.master')
@section('title')
Acceuil
    
@endsection
@section('main')
<div class="relative bg-gradient-to-r  from-purple-900 to-indigo-800 py-16 font-[sans-serif]">
    <div class="absolute inset-0">
      <img src=" {{ asset('images/homeCover.jpg') }} " alt="Background Image" class="w-full h-full object-cover opacity-50" />
    </div>
    <div class="relative max-w-screen-xl mx-auto px-8 z-10 text-center text-white">
      <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Welcome to Our Premium Service</h1>
      <p class="text-lg md:text-xl mb-8">Experience excellence like never before with our exclusive products and services.</p>
      <button type="button" class="bg-indigo-600 hover:bg-indigo-700 text-white text-base font-semibold px-8 py-2.5 rounded-full transition duration-300 ease-in-out shadow-lg hover:shadow-xl">Get Started</button>
    </div>
    .
  </div>
  
  <div class="px-8 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid grid-cols-2 row-gap-8 md:grid-cols-4 mx-auto grid text-center">
      <div class="md:border-r">
        <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">144K</h6>
        <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
          Aventures
        </p>
      </div grid>
      <div class="md:border-r">
        <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">12.9K</h6>
        <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
          Utilisateurs
        </p>
      </div>
      <div class="">
        <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">48.3K</h6>
        <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
          Destinations
        </p>
      </div>
    </div>
  </div>
  

   <div class=" max-w-screen-xl mx-auto p-4 service-section " >
    <h2 class="text-3xl text-center mt-6 font-bold " >Aventures</h2>
<div class=" max-w-sm mt-20 bg-white border border-gray-200 rounded-lg shadow">
    <a href="#">
        <img class="rounded-t-lg" src="{{ asset('images/kech.jpg') }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Marrakech</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

   </div>
        
    
@endsection