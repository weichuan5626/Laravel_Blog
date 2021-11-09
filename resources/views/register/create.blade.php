<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>

            

            <form action="/register" method="post" class="mt-10">
                @csrf

                <x-form.input name="name"></x-form.input>
                <x-form.input name="username"></x-form.input>
                <x-form.input name="email" type="email"></x-form.input>

                <x-form.field>
                    <x-form.label name="password">Password</x-form.label>

                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="password"
                           id="password"
                           name="password"
                           required>
                    
                    <x-form.error name="password"></x-form.error>
                </x-form.field>
                
                <x-form.button>Submit</x-form.button>
            </form>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 text-xs">{{ $error }}</li>
                    @endforeach
                </ul>                
            @endif

            
        </main>        
    </section>
</x-layout>