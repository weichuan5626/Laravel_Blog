<x-layout>
    <section class="px-6 py-8 max-w-lg mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <x-panel>
            <form action="/admin/posts" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="title">
                        Title
                    </label>

                    <input class="w-full p-2 border border-gray-400"
                           type="text"
                           id="title"
                           name="title"
                           value="{{ old('title') }}"
                           required>

                    @error('title')
                       <p class="text-red-500 text-xs mt-2">{{ $message }}
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="slug">
                        Slug
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="text"
                           id="slug"
                           name="slug"
                           value="{{ old('slug') }}"
                           required>
                    @error('slug')
                       <p class="text-red-500 text-xs mt-2">{{ $message }}
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="thumbnail">
                        Thumbnail
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="file"
                           id="thumbnail"
                           name="thumbnail"
                           required>
                    @error('thumbnail')
                       <p class="text-red-500 text-xs mt-2">{{ $message }}
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="excerpt">
                        Excerpt
                    </label>

                    <textarea class="w-full p-2 border border-gray-400"
                           type="text"
                           id="excerpt"
                           name="excerpt"
                           required>{{ old('excerpt') }}</textarea>

                    @error('excerpt')
                       <p class="text-red-500 text-xs mt-2">{{ $message }}
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="body">
                        Body
                    </label>

                    <textarea class="w-full p-2 border border-gray-400"
                           type="text"
                           id="body"
                           name="body"
                           required>{{ old('body') }}</textarea>

                    @error('body')
                       <p class="text-red-500 text-xs mt-2">{{ $message }}
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="category_id">
                        Category
                    </label>
                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected':'' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('category_id')
                       <p class="text-red-500 text-xs mt-2">{{ $message }}
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>
            </form>
        </x-panel>        
    </section>
</x-layout>