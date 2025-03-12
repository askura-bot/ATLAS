<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    @include('component.navigasi')
    @include('component.header_detail')
    {{-- CONTENT --}}
    <main>  
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <div class="shrink-0 flex items-start mt-8">  
            <img src="{{ asset ('img/gb2.jpg') }}" alt="kota-lama" class="w-96 float-left rounded-lg">
            <p class="text-justify ml-4 text-2xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quidem reprehenderit optio. Maiores distinctio earum placeat repellendus quae architecto mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. At minima, expedita repellat, commodi ducimus sed animi id ab dolore harum explicabo sunt, dolorum doloremque nobis quo? Ducimus soluta voluptatibus asperiores adipisci vitae eius. Atque quas ipsa ea quaerat consectetur cumque earum dicta, adipisci, sint est, neque sapiente. Delectus, quis doloribus.</p>
          </div>
          <div class="mt-10">
            <p class="text-justify text-2xl mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam minus cumque temporibus perspiciatis rem magni maiores a laudantium quia voluptates? Nisi, iure deserunt perferendis deleniti velit fuga architecto laborum cumque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, magnam debitis quidem dolorum voluptatum fugiat deleniti enim dolor nesciunt, dignissimos repellat blanditiis adipisci eaque quaerat exercitationem reiciendis iste delectus illum esse, ipsam nobis culpa veniam! Quos odio at eveniet nisi!. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem assumenda asperiores vitae omnis minus dolores ullam cumque explicabo cupiditate pariatur consequatur earum, libero enim odit suscipit velit vel molestias consequuntur sapiente laudantium aperiam eveniet. Perspiciatis harum deserunt, ratione doloribus sed cum, reiciendis modi dolorem maxime quibusdam hic maiores est atque. <br><br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus accusamus, corporis saepe nihil laudantium amet sunt reprehenderit consequatur sequi obcaecati magni labore nobis libero earum odio. Ipsam voluptas labore error. Necessitatibus fuga ullam deleniti odit? Cum nulla quasi atque eligendi voluptas, dolorum debitis, fugit aspernatur quod quisquam in beatae autem quidem mollitia amet dolor nemo, maxime sit? Aspernatur, sequi totam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis unde corporis, eaque laudantium quo delectus eveniet eum quasi harum deserunt enim, placeat repellat fugit ipsum, reprehenderit laboriosam vero blanditiis porro.
            </p>
          </div>
          <div class="shrink-0 flex items-start mt-8">  
              <p class="text-justify mr-4 text-2xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quidem reprehenderit optio. Maiores distinctio earum placeat repellendus quae architecto mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. At minima, expedita repellat, commodi ducimus sed animi id ab dolore harum explicabo sunt, dolorum doloremque nobis quo? Ducimus soluta voluptatibus asperiores adipisci vitae eius. Atque quas ipsa ea quaerat consectetur cumque earum dicta, adipisci, sint est, neque sapiente. Delectus, quis doloribus.</p>
              <img src="{{ asset ('img/gb3.webp') }}" alt="kota-lama" class="w-96 float-right rounded-lg">
          </div>
          <div class="mt-10">
            <p class="text-justify text-2xl mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam minus cumque temporibus perspiciatis rem magni maiores a laudantium quia voluptates? Nisi, iure deserunt perferendis deleniti velit fuga architecto laborum cumque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, magnam debitis quidem dolorum voluptatum fugiat deleniti enim dolor nesciunt, dignissimos repellat blanditiis adipisci eaque quaerat exercitationem reiciendis iste delectus illum esse, ipsam nobis culpa veniam! Quos odio at eveniet nisi!. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem assumenda asperiores vitae omnis minus dolores ullam cumque explicabo cupiditate pariatur consequatur earum, libero enim odit suscipit velit vel molestias consequuntur sapiente laudantium aperiam eveniet. Perspiciatis harum deserunt, ratione doloribus sed cum, reiciendis modi dolorem maxime quibusdam hic maiores est atque.
            </p>
          </div>
        </div>
      </div>
      </main>
      {{-- END CONTENT --}}
      
      {{-- VIRTUAL TOUR --}}
          <div class="relative mx-auto my-4 max-w-7xl px-4 py-4 sm:px-6 lg:px-8 w-8/12 h-64 rounded-lg overflow-hidden flex items-center justify-center">
              <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/header.jpg') }}');"></div>
              <div class="absolute inset-0 bg-black opacity-50 backdrop-blur-md"></div> <!-- Overlay dengan blur -->       
              <h1 class="relative z-10 text-white font-bold text-5xl flex items-center">
                  <!-- Ikon dari Heroicons -->
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3.75H6A2.25 2.25 0 0 0 3.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0 1 20.25 6v1.5m0 9V18A2.25 2.25 0 0 1 18 20.25h-1.5m-9 0H6A2.25 2.25 0 0 1 3.75 18v-1.5M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>                  
                  Virtual Tour
              </h1>
          </div>
      {{-- END VIRTUAL TOUR --}}

      
    @include('component.footer')
</body>
</html>