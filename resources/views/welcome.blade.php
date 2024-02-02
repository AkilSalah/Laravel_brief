@extends('layouts.master')
@section('title')
Acceuil
    
@endsection
@section('main')
<div class="relative bg-gradient-to-r  from-purple-900 to-indigo-800 py-16 font-[sans-serif]" id="home" >
    <div class="absolute inset-0">
      <img src=" {{ asset('images/homeCover.jpg') }} " alt="Background Image" class="w-full h-full object-cover opacity-50" />
    </div>
    <div class="relative max-w-screen-xl mx-auto px-8 z-10 text-center text-white">
      <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Welcome to Our World Discover Service</h1>
      <p class="text-lg md:text-xl mb-8">Welcome to Our World Discover Service, where every journey is an exploration, and every adventure is a discovery, creating unforgettable experiences for a lifetime</p>
      <button type="button" class="bg-indigo-600 hover:bg-indigo-700 text-white text-base font-semibold px-8 py-2.5 rounded-full transition duration-300 ease-in-out shadow-lg hover:shadow-xl">Get Started</button>
    </div>
    
  </div>

  <div class="px-8 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid grid-cols-2 row-gap-8 md:grid-cols-3 mx-auto grid text-center">
      <div class="md:border-r">
        <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">{{ $aventureCount }}</h6>
        <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base" id="aventure" >
          Aventures
        </p>
      </div grid>
      <div class="md:border-r">
        <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">{{$userCount}}</h6>
        <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
          Utilisateurs
        </p>
      </div>
      <div class="">
        <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">{{$DestinationsCount}}</h6>
        <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
          Destinations
        </p>
      </div>
    </div>
  </div>
  
   <div class=" max-w-screen-xl mx-auto p-4 service-section " >
    <h1 class="text-3xl lg:text-5xl xl:text-6xl text-center mt-6  font-bold " >Aventures</h1>
    <div class="flex flex-wrap justify-between">
      <div class="flex flex-wrap gap-6 mt-4 ">
        <form action="{{ route('desc') }}" method="GET">
          <button type="submit" name="sort_order" value="desc" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
              Nouveau Aventure
          </button>
      </form>
      
      <form action="{{ route('asc') }}" method="GET">
          <button type="submit" name="sort_order" value="asc" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
              Ancienne Aventure
          </button>
      </form>
      
      
    </div>
    <div class=" flex-end" >
      <form  class="flex gap-2 " action="{{ route('destination') }}" method="GET">
        <select id="countries" name="destination" class="mt-6 ml-auto bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected disabled>Sélectionnez un continent</option>
            <option value="Tout">Tout</option>
            <option value="Afrique">Afrique</option>
            <option value="Europe">Europe</option>
            <option value="Asie">Asie</option>
            <option value="Amérique du Nord">Amérique du Nord</option>
            <option value="Amérique du Sud">Amérique du Sud</option>
        </select>
        <div>
        <button type="submit" class="px-4 py-2 mt-7 text-sm font-medium text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            Filtrer
        </button> 
        </div>
        
    </form>
    </div>
    </div>
    
    

    <div class="flex flex-wrap gap-4 justify-center mt-20">
      @foreach ($aventures as $aventure)
          <div class="w-full md:w-1/3 p-4">
              @foreach ($aventure->images->take(1) as $image)
                  <img class="rounded-t-lg h-25" src="{{ URL('/storage/images/'.$image->image) }}" alt="" />
              @endforeach
              <div class="p-5">
                  <a href="#">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$aventure->ville}}</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700"> {{ substr($aventure->description,0,200)}}</p>
                  <a href="aventure?id={{$aventure->id}}"class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                      Découvrez plus
                      <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                      </svg>
                  </a>
              </div>
          </div>
      @endforeach
  </div>

        
    
@endsection