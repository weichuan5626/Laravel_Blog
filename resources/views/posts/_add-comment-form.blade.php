@auth
    <x-panel>                        
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-xl mr-3">

                <h2>Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring border border-gray-100 p-4" cols="30" rows="10" placeholder="Quick, thing of something to say!" required></textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                    
                @enderror
            </div>

            <div class="flex justify-end mt-6">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
    @else
    <x-panel class="bg-gray-50">
        <p>
            <a href="/register" class="text-blue-500 hover:underline">Register</a> or 
            <a href="/login" class="text-blue-500 hover:underline">Log in</a> to leave a comment.
        </p>
    </x-panel>
                            
@endauth