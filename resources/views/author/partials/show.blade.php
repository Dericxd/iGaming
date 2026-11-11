<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('authors.update', $author) }}" class="mt-6 space-y-6">
        @csrf


        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" readonly name="name" type="text" class="mt-1 block w-full disabled:opacity-25" autocomplete="name" value="{{ $author->name }}"/>
            <x-input-error :messages="$errors->name->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="birthday" :value="__('Fecha de Nacimiento')" />
            <x-text-input id="birthday" readonly name="birthday" type="date" class="mt-1 block w-full disabled:opacity-25" value="{{ $author->birthday }}" />
            <x-input-error :messages="$errors->birthday->get('birthday')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="country" :value="__('country')" />
            <x-text-input id="country" readonly name="country" type="text" class="mt-1 block w-full disabled:opacity-25" autocomplete="country" value="{{ $author->country }}" />
            <x-input-error :messages="$errors->country->get('country')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <a href="{{ route('categories.index') }}">
                Volver
            </a>
        </div>
    </form>
</section>
