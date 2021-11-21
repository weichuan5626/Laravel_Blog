<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register!</h1>

                <form action="/register" method="post" class="mt-10">
                    @csrf

                    <x-form.input name="name"></x-form.input>
                    <x-form.input name="username"></x-form.input>
                    <x-form.input name="email" type="email"></x-form.input>
                    <x-form.input name="password" type="password"></x-form.input>
                                    
                    <x-form.button>Submit</x-form.button>
                </form>

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>                
                @endif
            </x-panel>
        </main>        
    </section>
</x-layout>