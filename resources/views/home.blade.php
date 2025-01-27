<x-layout>
    @foreach ($posts as $post)
        <x-blog-card :post="$post"></x-blog-card>
    @endforeach
</x-layout>
