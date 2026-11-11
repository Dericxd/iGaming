<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Actualización') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('authors.update', $author) }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name" value="{{ $author->name }}"/>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label for="birthday" :value="__('Fecha de Nacimiento')" />
            <x-text-input id="birthday" name="birthday" type="date" class="mt-1 block w-full" value="{{ $author->birthday }}" />
            @error('birthday')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label for="country" :value="__('country')" />
            <x-text-input id="country" name="country" type="text" class="mt-1 block w-full" autocomplete="country" value="{{ $author->country }}" />
            @error('country')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
