@props(['heading'])

<section class="px-6 py-8 max-w-3xl mx-auto">
    <h1 class="text-lg font-bold border-b mb-8 pb-2">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-32">
            <h4 class="font-semibold mb-4">
                Links
            </h4>
            <ul>
                <li>
                    <a href="/admin/posts/create">Dashboard</a>
                </li>

                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">Add Post</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>  
        </main>
        
    </div>
          
</section>