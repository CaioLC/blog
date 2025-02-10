<x-layout>
    <div class="py-12">Hi! I'm Caio nice to meet you.</div>
    @foreach ($posts as $post)
        <x-blog-card :post="$post"></x-blog-card>
    @endforeach
</x-layout>
