@extends('layouts.master')
@section('title')
Aventure
    
@endsection
@section('main')

<div class="container my-24 mx-auto md:px-6">
    <section class="mb-32">
      @foreach ($singleAventure as $single)
      <h1 class="mb-16 text-center text-4xl font-bold">Aventure name </h1>
      @foreach ($single->images as $image)
        <div class="mb-16 flex flex-wrap">
        <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
          <div
            class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src="{{ URL('/storage/images/'.$image->image) }}" class="w-full" alt="Louvre" />
            <a href="#!">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </a>
          </div>
        </div>
  
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6">
          <h3 class="mb-4 text-2xl font-bold">{{$single->ville}}</h3>
          <div class="mb-4 flex items-center text-sm font-medium text-danger dark:text-danger-500">
            {{$single->paye}}
          </div>
          <p class="mb-6 text-sm text-neutral-500 dark:text-neutral-400">
            Publier le <u>{{$single->created_at}}</u> par
            @if ($single->user)
                <a href="#">{{ $single->user->name }}</a>
            @else
                Utilisateur inconnu
            @endif
          </p>
         
          <p class="text-neutral-500 dark:text-neutral-300">
            {{$single->description}}

          </p>
        </div>
      </div>
  
      <div class="mb-16 flex flex-wrap lg:flex-row-reverse">
        <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pl-6">
          <div
            class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src=" {{ URL('/storage/images/'.$image->image)}} " class="w-full" alt="Louvre" />
            <a href="#!">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </a>
          </div>
        </div>
  
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pr-6">
          <h3 class="mb-4 text-2xl font-bold">Conseils</h3>
          <div class="mb-4 flex items-center text-sm font-medium text-primary dark:text-primary-400">
            Art
          </div>
          <p class="mb-6 text-sm text-neutral-500 dark:text-neutral-400">
            Published <u>12.01.2022</u> by
            <a href="#!">Anna Doe</a>
          </p>
          <p class="text-neutral-500 dark:text-neutral-300">
            {{$single->conseils}}
          </p>
        </div>
      </div>
  
      <div class="flex flex-wrap">
        <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
          <div
            class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src="{{ URL('/storage/images/'.$image->image) }}" class="w-full" alt="Louvre" />
            <a href="#!">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </a>
          </div>
        </div>
  
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6">
          <div
          class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init data-te-ripple-color="light">
          <img src="{{ URL('/storage/images/'.$image->image) }}" class="w-full" alt="Louvre" />
          
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
            </div>
          </a>
        </div>
        @endforeach 
      @endforeach
      
  </div>

@endsection