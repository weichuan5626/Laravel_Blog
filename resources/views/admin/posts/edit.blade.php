<x-layout>
    <x-setting heading="Edit Post: {{ $post->title }}">
        <form action="/admin/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)"></x-form.input>
            <x-form.input name="slug" :value="old('slug', $post->slug)"></x-form.input>
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)"></x-form.input>
                </div>
               
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="120">
            </div>
            
            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>
            
            <x-form.field>
                <x-form.label name="category"></x-form.label>

                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $post->category->id) == $category->id ? 'selected':'' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-form.error name="category_id"></x-form.error>
            </x-form.field>
            
            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>    
</x-layout>