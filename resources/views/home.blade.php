<x-layout>
    <div class="py-6">
        <p class="mb-3">
            Hi! I'm Caio (pronunciation is close to "Kyle", but not quite). Nice to have you here!
        </p>
        <p class="mb-3">
            I'm a quantitative researcher based in São Paulo, Brazil, with a background in economics, programming and law.
            You can find me on <a href="http://">Github</a>, <a href="http://">Twitter</a> and <a href="http://">LinkedIn</a>.
            If you prefer email, feel free to reach out at <a href="http://">contact@notkyle.dev</a>
        </p>
        <p class="mb-3">
            Here, we'll mostly talk about finance and programming. I'll share my professional insights,
            as well as findings from hobby projects (like this dev blog). Whether it's exploring data-driven strategies,
            building tools, or learning new skills, we'll document our journey of discovery, 
            so that future-me (and future-you?) can follow along for times to come.
        </p>
        <p class="mb-3">
            Grab a cup of your favorite beverage, and happy reading :)
        </p>
    </div>
    @foreach ($posts as $post)
        <x-blog-card :post="$post"></x-blog-card>
    @endforeach
</x-layout>
