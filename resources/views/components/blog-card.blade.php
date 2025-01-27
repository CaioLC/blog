@props(['post'])

<a href="posts/{{$post['slug']}}">
<div class="w-full px-4 sm:max-w-xl lg:max-w-[60%] mx-auto mb-4 bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
    <div class="flex justify-between items-center mb-3">
      <h2 class="text-xl font-bold text-amber-700">{{$post['title']}}</h2>
      <span class="text-sm text-amber-500">{{$post['created_at']}}</span>
    </div>
    
    <div class="flex space-x-2 mb-3">
      <span class="bg-amber-100 text-amber-700 px-2 py-1 rounded-full text-xs">Technology</span>
      <span class="bg-amber-100 text-amber-700 px-2 py-1 rounded-full text-xs">Web Development</span>
    </div>
    
    <p class="text-amber-800 leading-relaxed">
      {{$post['excerpt']}}
    </p>
</div>
</a>