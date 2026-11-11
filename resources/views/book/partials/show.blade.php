<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('books.update', $book) }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="title" :value="__('Titulo')" />
            <x-text-input id="title" name="title" type="text" readonly class="mt-1 block w-full disabled:opacity-25" autocomplete="title" value="{{ $book->title }}"/>
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label for="publication_year" :value="__('Año de publicaci&oacute;n')" />
            <x-text-input id="publication_year" readonly name="publication_year" type="number" class="mt-1 block disabled:opacity-25 w-full" autocomplete="publication_year" value="{{ $book->publication_year }}"/>
            @error('publication_year')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label for="category_id" :value="__('Categoria')" />
            <x-text-input id="title" name="title" type="text" readonly class="mt-1 block w-full disabled:opacity-25" autocomplete="title" value="{{ $book->category->name }}"/>

            @error('category_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label for="author_id" :value="__('Autor')" />
            <x-text-input id="title" name="title" type="text" readonly class="mt-1 block w-full disabled:opacity-25" autocomplete="title" value="{{ $book->author->name }}"/>
            @error('author_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label for="description" :value="__('Descripci&oacute;n')" />
            <textarea cols="2" readonly rows="4" name="description" class="w-full p-3 disabled:opacity-25 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                      placeholder="Escribe tu mensaje aquí...">{{$book->description}}</textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <a href="{{ route('books.index') }}">
                Volver
            </a>
        </div>
    </form>
</section>
