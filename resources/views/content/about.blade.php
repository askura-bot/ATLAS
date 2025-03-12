<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>ATLAS | {{ $title }}</title>
</head>
<body class="h-full"> 

<div class="min-h-full">
  {{-- NAVIGASI --}}
  @include('component.navigasi')
  {{-- END NAVIGASI --}}

  {{-- HEADER --}}
  @include('component.header')
  {{-- END HEADER --}}

    {{-- CONTENT --}}

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="shrink-0 flex items-start mt-8">  
          <img src="img/kota-lama1.jpg" alt="kota-lama" class="w-96 float-left rounded-lg">
          <p class="text-justify ml-4 text-2xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quidem reprehenderit optio. Maiores distinctio earum placeat repellendus quae architecto mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. At minima, expedita repellat, commodi ducimus sed animi id ab dolore harum explicabo sunt, dolorum doloremque nobis quo? Ducimus soluta voluptatibus asperiores adipisci vitae eius. Atque quas ipsa ea quaerat consectetur cumque earum dicta, adipisci, sint est, neque sapiente. Delectus, quis doloribus.</p>
        </div>
        <div class="mt-10">
          <iframe width="100%" height="700px" src="https://www.youtube.com/embed/RBVqCnxuINI?si=WnmecC5RhILzWyq4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <p class="text-justify text-2xl mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam minus cumque temporibus perspiciatis rem magni maiores a laudantium quia voluptates? Nisi, iure deserunt perferendis deleniti velit fuga architecto laborum cumque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, magnam debitis quidem dolorum voluptatum fugiat deleniti enim dolor nesciunt, dignissimos repellat blanditiis adipisci eaque quaerat exercitationem reiciendis iste delectus illum esse, ipsam nobis culpa veniam! Quos odio at eveniet nisi!. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem assumenda asperiores vitae omnis minus dolores ullam cumque explicabo cupiditate pariatur consequatur earum, libero enim odit suscipit velit vel molestias consequuntur sapiente laudantium aperiam eveniet. Perspiciatis harum deserunt, ratione doloribus sed cum, reiciendis modi dolorem maxime quibusdam hic maiores est atque.
          </p>
        </div>
        <img src="img/kota-lama2.jpeg" alt="kota-lama" class="w-full mt-8">
        <div class="shrink-0 flex items-start mt-8">
          <p class="text-2xl text-justify mr-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis deleniti fugit suscipit vel placeat et ullam, nisi, sit minus, doloribus veritatis officiis cupiditate! Natus consequatur quisquam temporibus facilis a accusamus nisi, repudiandae non corrupti eaque, illo dolores inventore, recusandae repellat! .Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea vitae, quo nemo enim, deleniti non rerum totam quod quas ducimus voluptatem modi? Fuga repellat voluptas eligendi aperiam dolorum, suscipit nemo vel officia placeat perferendis sapiente veritatis.</p>
          <img src="img/kota-lama3.jpg" alt="kota-lama" class="w-96 float-left rounded-lg">
        </div>
        <p class="text-2xl text-justify mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque accusantium aliquam sed. Odit, dicta tenetur cumque facere ea sint doloribus eius? Ducimus non voluptatem illo iusto voluptates dolorum iure aliquam, vitae numquam facere voluptatibus expedita maxime quia cumque earum obcaecati dolore optio ullam ipsa praesentium pariatur laudantium veritatis corrupti nostrum. Sed fugit cupiditate architecto? Obcaecati velit nemo doloribus dicta, blanditiis ipsam a similique voluptatum aspernatur dignissimos illum, debitis ab assumenda.</p>
      </div>
    </main>
    {{-- END CONTENT --}}

    {{-- FOOTER --}}
    @include('component.footer')
    {{-- END FOOTER --}}
  </div>
</div>  
</body>
</html>