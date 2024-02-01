@extends('layouts.masterU')
@section('title')
Utilisateur
    
@endsection
@section('main')

   <div class=" max-w-screen-xl mx-auto p-4 service-section " >
<div class="flex justify-between" >
 <h1 class="text-4xl text-center mt-6 font-bold " >Mes Aventures</h1>

<button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="px-4 py-2 text-sm rounded-full font-bold text-black border-2 border-red bg-blue-200 transition-all ease-in-out duration-300 hover:bg-transparent hover:text-red" type="button">
Ajouter une aventure
</button>
  
  <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 max-w-md max-h-full">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Aventure
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <form method="POST" action=" {{ route('utilisateur') }} " class="p-4 md:p-5"  enctype="multipart/form-data" >
                @csrf
                  <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ville</label>
                        <input type="text" name="ville" id="ville" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Exemple : Safi" required="">
                    </div>
                      <div class="col-span-2 sm:col-span-1">
                          <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paye</label>
                          <input type="text" name="paye" id="paye" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Exemple : Maroc" required="">
                      </div>
                      <div class="col-span-2 sm:col-span-1">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Continent</label>
                        <input type="text" name="continent" id="continent" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Exemple : Afrique" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Images</label>
                        <input type="file" name="images[]" id="images" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Inserer des images" multiple required >
                    </div>
                    
                    <div class="col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description"></textarea>                    
                    </div>

                      <div class="col-span-2">
                          <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Conseils</label>
                          <textarea name="conseils" id="Conseils" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Conseils"></textarea>                    
                      </div>
                  </div>
                  <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                       Ajouter
                  </button>
              </form>
          </div>
      </div>
  </div> 
</div>
    

    
<div class="flex flex-row gap-4 mx-auto mt-20">
    @foreach ($aventures as $aventure)
        <div class="w-full border rounded-md md:w-1/2 lg:w-1/3 p-4">
            @foreach ($aventure->images as $image)
            <img class="rounded-t-lg h-25 " src="{{ URL('/storage/images/'.$image->image) }}" alt=""   />
            @break
            @endforeach
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$aventure->ville}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">{{$aventure->description}}</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    @endforeach
</div>


   </div>
        
    
@endsection