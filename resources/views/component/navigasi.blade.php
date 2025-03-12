<nav class="bg-black">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
              <div class="shrink-0 flex items-center">
                  <img class="size-8 float-left mr-4" src="{{ asset('img/uil_globe.png') }}" alt="Your Company">
                  <h1 class="text-lg font-bold text-white">ATLAS Project</h1>
              </div>
          </div>
          <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                  <a href="/home" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white {{ $title === 'Home' ? 'bg-gray-900' :  '' }}">Home</a>
                  <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white {{ $title === 'About' ? 'bg-gray-900' :  '' }}">About</a>
              </div>
          </div>
      </div>
  </div>
</nav>