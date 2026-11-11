<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Crear') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>


    <form method="post" action="{{ route('books.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div>
            <x-input-label for="title" :value="__('Titulo')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" autocomplete="title" value="{{old('title')}}"/>
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label for="publication_year" :value="__('Año de publicaci&oacute;n')" />
            <x-text-input id="publication_year" name="publication_year" type="number" class="mt-1 block w-full" autocomplete="publication_year" value="{{old('publication_year')}}"/>
            @error('publication_year')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label for="category_id" :value="__('Categoria')" />
            <select name="category_id" class="block w-full appearance-none rounded-lg border border-gray-300
                bg-white py-2.5 pl-3 pr-10 text-sm text-gray-900
                focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
                <option >Elige una opción</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            @error('category_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label for="author_id" :value="__('Autor')" />
            <select name="author_id" class="block w-full appearance-none rounded-lg border border-gray-300
                bg-white py-2.5 pl-3 pr-10 text-sm text-gray-900
                focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
                <option >Elige una opción</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>

            @error('author_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label for="description" :value="__('Descripci&oacute;n')" />
            <textarea cols="2" rows="4" name="description" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                      placeholder="Escribe tu mensaje aquí..."></textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
