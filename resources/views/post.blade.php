<x-layout>
    <h1 class="
        {{-- text-center --}}
        text-blue-600
        font-serif
        lg:text-6xl lg:my-16
        md:text-5xl md:my-12 
        sm:text-3xl sm:my-8 
        text-2xl my-4"
    >Welcome to this tittle. This is a post</h1>

    {{-- Code snippet --}}
    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio libero voluptate voluptatem esse! Quia nostrum rerum tempora, exercitationem, corrupti qui harum facere dignissimos error, doloribus magni libero explicabo quo officiis?</p>
    <div>
        <pre class="text-sm overflow-x-auto">
          <code class="language-javascript">
            function greet(name) {
              console.log(`Hello, ${name}!`);
            }
            greet('Developer');
          </code>
        </pre>
    </div>
</x-layout>