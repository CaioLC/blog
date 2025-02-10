<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/css/prism.css'])
    
    <title>NotKyle's DevBlog</title>
    
    {{-- Highlight.js --}}
    <link rel="stylesheet" href="/resources/prism.css">
</head>
<body>
<div>
  <main>
    <div class="mx-auto max-w-6xl md:max-w-4xl p-4">
        {{ $slot }}
    </div>
  </main>
</div>


@vite(['resources/js/prism.js'])
</body>
</html>
