@extends('layouts.master')
@section('title')
Aventure
    
@endsection
@section('main')

<div class="container my-24 mx-auto md:px-6">
    <section class="mb-32">
      <h2 class="mb-16 text-center text-2xl font-bold">Aventure name </h2>
  
      <div class="mb-16 flex flex-wrap">
        <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
          <div
            class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/028.jpg" class="w-full" alt="Louvre" />
            <a href="#!">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </a>
          </div>
        </div>
  
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6">
          <h3 class="mb-4 text-2xl font-bold">That's the news!</h3>
          <div class="mb-4 flex items-center text-sm font-medium text-danger dark:text-danger-500">
            Travels
          </div>
          <p class="mb-6 text-sm text-neutral-500 dark:text-neutral-400">
            Published <u>14.01.2022</u> by
            <a href="#!">Lisa McCartney</a>
          </p>
          <p class="mb-6 text-neutral-500 dark:text-neutral-300">
            Ut pretium ultricies dignissim. Sed sit amet mi eget urna placerat
            vulputate. Ut vulputate est non quam dignissim elementum. Donec a
            ullamcorper diam.
          </p>
          <p class="text-neutral-500 dark:text-neutral-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quae
            nulla saepe rerum aspernatur odio amet perferendis tempora
            mollitia? Ratione unde magni omnis quaerat blanditiis cumque
            dolore placeat rem dignissimos?
          </p>
        </div>
      </div>
  
      <div class="mb-16 flex flex-wrap lg:flex-row-reverse">
        <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pl-6">
          <div
            class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/033.jpg" class="w-full" alt="Louvre" />
            <a href="#!">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </a>
          </div>
        </div>
  
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pr-6">
          <h3 class="mb-4 text-2xl font-bold">Exhibition in Paris</h3>
          <div class="mb-4 flex items-center text-sm font-medium text-primary dark:text-primary-400">
            Art
          </div>
          <p class="mb-6 text-sm text-neutral-500 dark:text-neutral-400">
            Published <u>12.01.2022</u> by
            <a href="#!">Anna Doe</a>
          </p>
          <p class="text-neutral-500 dark:text-neutral-300">
            Duis sagittis, turpis in ullamcorper venenatis, ligula nibh porta
            dui, sit amet rutrum enim massa in ante. Curabitur in justo at
            lorem laoreet ultricies. Nunc ligula felis, sagittis eget nisi
            vitae, sodales vestibulum purus. Vestibulum nibh ipsum, rhoncus
            vel sagittis nec, placerat vel justo. Duis faucibus sapien eget
            tortor finibus, a eleifend lectus dictum. Cras tempor convallis
            magna id rhoncus. Suspendisse potenti. Nam mattis faucibus
            imperdiet. Proin tempor lorem at neque tempus aliquet. Phasellus
            at ex volutpat, varius arcu id, aliquam lectus. Vestibulum mattis
            felis quis ex pharetra luctus. Etiam luctus sagittis massa, sed
            iaculis est vehicula ut.
          </p>
        </div>
      </div>
  
      <div class="flex flex-wrap">
        <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
          <div
            class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/079.jpg" class="w-full" alt="Louvre" />
            <a href="#!">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </a>
          </div>
        </div>
  
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6">
          <h3 class="mb-4 text-2xl font-bold">Stock market boom</h3>
          <div class="mb-4 flex items-center text-sm font-medium text-yellow-600">
            
            Business
          </div>
          <p class="mb-6 text-sm text-neutral-500 dark:text-neutral-400">
            Published <u>10.01.2022</u> by
            <a href="#!">Joe Svan</a>
          </p>
          <p class="text-neutral-500 dark:text-neutral-300">
            Sed sollicitudin purus sed nulla dignissim ullamcorper. Aenean
            tincidunt vulputate libero, nec imperdiet sapien pulvinar id.
            Nullam scelerisque odio vel lacus faucibus, tincidunt feugiat
            augue ornare. Proin ac dui vel lectus eleifend vestibulum et
            lobortis risus. Nullam in commodo sapien. Curabitur ut erat congue
            sem finibus eleifend egestas eu metus. Sed ut dolor id magna
            rutrum ultrices ut eget libero. Duis vel porttitor odio. Ut
            pulvinar sed turpis ornare tincidunt. Donec luctus, mi euismod
            dignissim malesuada, lacus lorem commodo leo, tristique blandit
            ante mi id metus. Integer et vehicula leo, vitae interdum lectus.
            Praesent nulla purus, commodo at euismod nec, blandit ultrices
            erat. Aliquam eros ipsum, interdum et mattis vitae, faucibus vitae
            justo. Nulla condimentum hendrerit leo, in feugiat ipsum
            condimentum ac. Maecenas sed blandit dolor.
          </p>
        </div>
      </div>
    </section>
  </div>

@endsection