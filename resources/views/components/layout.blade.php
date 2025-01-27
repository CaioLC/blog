<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NotKyle's DevBlog</title>
    <script src="https://cdn.tailwindcss.com"></script>
{{-- 
COLOR TEMPLATES
dark: zinc-900
--}}
</head>
<body class="h-full">
<div class="min-h-full">
  {{-- NavBar --}}
  <nav class="flex justify-center items-center p-2 bg-zinc-900">
    <div class="px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="ml-10 flex items-baseline space-x-4">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
          <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </div>
      </div>
    </div>
  </nav>
  {{-- END NavBar --}}
  <main>
    <div class="bm-amber-50 mx-auto max-w-7xl sm:p-6 md:p-10 lg:p-14">
        {{ $slot }}
    </div>
  </main>
</div>


</body>
</html>
