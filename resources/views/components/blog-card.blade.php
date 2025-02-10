@props(['post'])

<a href="posts/{{$post['slug']}}">
<div class="mb-6 pl-4 border-s-2 border-white hover:border-orange-600 duration-300">
  <div>
    <h2>{{$post['created_at']}}: <span class="font-serif text-xl text-blue-600">{{$post['title']}}</span></h2>
  </div>
  
  <p class="">
    {{$post['excerpt']}}
  </p>
</div>
</a>