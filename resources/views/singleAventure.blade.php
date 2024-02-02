@extends('layouts.master')
@section('title')
    Aventure
@endsection
@section('main')

    <div class="container my-24 mx-auto md:px-6">
        <section class="mb-32">
            <h1 class="mb-16 text-center text-4xl font-bold">{{ $singleAventure->ville }}</h1>

            <div class="mb-16 flex flex-wrap">
                <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
                    <div class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
                        data-te-ripple-init data-te-ripple-color="light">
                        <img src="{{ URL('/storage/images/' . $singleAventure->images[0]->image) }}" class="w-full"
                            alt="Louvre" />
                        <a href="#">
                            <div
                                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6">
                    <h3 class="mb-4 text-2xl font-bold">{{ $singleAventure->ville }}</h3>
                    <div class="mb-4 flex items-center text-sm font-medium text-danger dark:text-danger-500">
                        {{ $singleAventure->paye }}
                    </div>
                    <p class="mb-6 text-sm text-neutral-500 dark:text-neutral-400">
                        Publier le <u>{{ $singleAventure->created_at }}</u> par
                        @if ($singleAventure->user)
                            <a href="#">{{ $singleAventure->user->name }}</a>
                        @else
                            Utilisateur inconnu
                        @endif
                    </p>

                    <p class="text-neutral-500 dark:text-neutral-300">
                        {{ $singleAventure->description }}

                    </p>
                </div>
            </div>

            <div class="mb-16 flex flex-wrap lg:flex-row-reverse">
                <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pl-6">
                    <div class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
                        data-te-ripple-init data-te-ripple-color="light">
                        <img src=" {{ URL('/storage/images/' . $singleAventure->images[1]->image) }} " class="w-full"
                            alt="Louvre" />
                        <a href="#!">
                            <div
                                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pr-6">
                    <h3 class="mb-4 text-2xl font-bold">Conseils</h3>
                    <p class="text-neutral-500 dark:text-neutral-300">
                        {{ $singleAventure->conseils }}
                    </p>
                </div>
            </div>
            @if (count($singleAventure->images) > 1)
                <div class="flex flex-wrap">
                    @foreach ($singleAventure->images as $image)
                        <div class="mb-6 w-full p-4  shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
                            <div class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
                                data-te-ripple-init data-te-ripple-color="light">
                                <img src="{{ URL('/storage/images/' . $image->image) }}" class="w-full" alt="Louvre" />
                                <a href="#!">
                                    <div
                                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endsection
