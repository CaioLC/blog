<x-layout>
  <h1 class="
      {{-- text-center --}}
      text-blue-700
      font-title
      lg:text-6xl lg:my-16
      md:text-5xl md:my-12 
      sm:text-3xl sm:my-8 
      text-2xl my-4"
  >Welcome to this tittle. This is a post</h1>

<p class="text-justify">Lorem ipsum dolor sit amet, <code class="language-python">def my_func()</code> consectetur adipisicing elit. Distinctio libero voluptate voluptatem esse! Quia nostrum rerum tempora, exercitationem, corrupti qui harum facere dignissimos error, doloribus magni libero explicabo quo officiis?</p>

{{-- Code snippet --}}
<x-code language="language-python" cmd={{True}}>
import pandas as pd

def my_func(x: pd.DataFrame | None = None) -> pd.Series:
    return "Hello World"
</x-code>
<x-cmd>
sudo apt install postgresql postgresql-contrib
sudo apt install nodejs npm
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
laravel new your-project-name
cd your-project-name
npm install && npm run build
composer run dev
</x-cmd>

<x-note type='info'>This is a cool tip</x-note>
<x-note type='warn'>This is a warning note</x-note>


<div class="bg-white shadow-lg rounded-lg overflow-hidden my-6">
  <img src="https://picsum.photos/800/400" alt="Placeholder" class="w-full">
  <div class="p-6">
    <p class="text-sm text-gray-600">Ah, what a nice placeholder picture from <a href="https://picsum.photos/">picsum</a></p>
  </div>
</div>

<div class="border-l-4 border-stone-400 bg-stone-200 p-6 my-6">
  <blockquote class="text-stone-700 italic">
    "Any fool can write code that a computer can understand. Good programmers write code that humans can understand."
  </blockquote>
  <p class="mt-2 text-sm text-stone-600">— Martin Fowler</p>
</div>

</x-layout>
