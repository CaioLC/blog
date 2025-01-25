@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8 bg-amber-50 text-amber-900">
    <article>
        <h1 class="text-3xl font-bold text-amber-700 mb-4">
            {{ $post->title }}
        </h1>
        
        <div class="flex items-center mb-4 space-x-2">
            <span class="text-sm text-amber-600">
                {{ $post->published_at->format('F j, Y') }}
            </span>
            
            @foreach($post->tags as $tag)
                <span class="bg-amber-100 text-amber-700 px-2 py-1 rounded-full text-xs">
                    {{ $tag->name }}
                </span>
            @endforeach
        </div>
        
        <div class="prose prose-amber">
            {!! $post->content !!}
            
            @if($post->code_snippet)
            <div class="relative bg-gray-800 text-white rounded-lg p-4 mb-4">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm">Code Snippet</span>
                    <button 
                        class="text-gray-300 hover:text-white transition-colors"
                        onclick="copyCodeSnippet()"
                    >
                        Copy
                    </button>
                </div>
                <pre class="text-sm overflow-x-auto"><code class="language-php">{{ $post->code_snippet }}</code></pre>
            </div>
            @endif
        </div>
    </article>
</div>

@push('scripts')
<script>
function copyCodeSnippet() {
    const codeElement = document.querySelector('pre code');
    const text = codeElement.textContent;
    navigator.clipboard.writeText(text);
}
</script>
@endpush
@endsection