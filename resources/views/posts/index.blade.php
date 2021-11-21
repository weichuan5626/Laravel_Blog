<x-layout>
    @include('posts._header')

    
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">No posts yet. Please back later.</p>
        @endif
        

       
    </main>
    {{-- @foreach ($posts as $post)

        <article>

            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>              
            </p>

            <div>
                {{ $post->excerpt }}
            </div>

        </article>
    @endforeach --}}
</x-layout>