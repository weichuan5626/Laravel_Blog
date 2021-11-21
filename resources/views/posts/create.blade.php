<x-layout>
    <section class="px-6 py-8 max-w-lg mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <x-panel>
            <form action="/admin/posts" method="post" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title"></x-form.input>
                <x-form.input name="slug"></x-form.input>
                <x-form.input name="thumbnail" type="file"></x-form.input>
                <x-form.textarea name="excerpt"></x-form.textarea>
                <x-form.textarea name="body"></x-form.textarea>
                
                <x-form.field>
                    <x-form.label name="category_id">Category</x-form.label>

                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected':'' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category_id"></x-form.error>
                </x-form.field>

                <x-form.button>Publish</x-form.button>
            </form>
        </x-panel>        
    </section>
</x-layout>