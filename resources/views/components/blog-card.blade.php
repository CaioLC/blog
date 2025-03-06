@props(['post'])

<a href="posts/{{$post['slug']}}">
<div class="mb-6 pl-4 border-s-2 border-white hover:border-orange-600 duration-300">
  <div>
    <span class="text-stone-50">{{$post['created_at']}}: </span>
    <span class="font-title text-xl text-blue-700">{{$post['title']}}</span>
  </div>
  
  <p class="">
    {{$post['excerpt']}}
  </p>
</div>
</a>