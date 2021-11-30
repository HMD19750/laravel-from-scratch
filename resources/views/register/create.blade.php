<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 ">
            <x-panel>
                <h1 class="text-xl font-bold text-center">Register!</h1>
                <form method="POST" action="/register" class="mt-10">

                    @csrf

                    <x-form.input name="name" />
                    <x-form.input name="username" />
                    <x-form.input name="email" autocomplete="username" />
                    <x-form.input name="password" type="password" autocomplete="password" />


                    <div class="m-6">
                        <x-form.button>Submit</x-form.button>
                    </div>
                </form>
            </x-panel>
        </main>
    </section>

</x-layout>
