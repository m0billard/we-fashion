<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>Edit</title>
</head>

<body>
    @if (isset($product))
        <form class="w-full max-w-sm md:mt-6" method="POST" action="{{ route('products.update', $product->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                        Nom
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="form-control bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="name" type="text" name="name" value="{{ $product->name }}">
                </div>
            </div>
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="description">
                        Description
                    </label>
                </div>
                <div class="md:w-2/3">
                    <textarea
                        class="form-control bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="description" type="text" name="description">{{ $product->description }}</textarea>
                </div>
            </div>
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="price">
                        Prix
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="form-control bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="price" type="number" name="price" value="{{ $product->price }}">
                </div>
            </div>
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="visible">
                        Visiblité
                    </label>
                </div>
                <div class="md:w-2/3">
                    <select
                        class="form-control bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="visible" name="visible">
                        <option value="0">Masqué</option>
                        <option value="1">Visible</option>
                    </select>
                </div>
            </div>
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="state">
                        État
                    </label>
                </div>
                <div class="md:w-2/3">
                    <select
                        class="form-control bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="state" name="state">
                        <option value="0">Non soldé</option>
                        <option value="1">Soldé</option>
                    </select>
                </div>
            </div>
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="reference">
                        Référence
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="form-control bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="reference" type="text" name="reference" value="{{ $product->reference }}" required>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button type="submit"
                        class="flex py-2 px-4 text-white bg-[#66EB9A] border-0 py-2 px-6 focus:outline-none hover:scale-95 rounded"
                        type="button">
                        Éditer le produit
                    </button>
                </div>
            </div>
        </form>
    @else
        <form class="w-full max-w-sm md:mt-6" method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                        Nom
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="form-control bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="name" type="text" name="name" required>
                </div>
            </div>
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="description">
                        Description
                    </label>
                </div>
                <div class="md:w-2/3">
                    <textarea
                        class="form-control bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="description" type="text" name="description" required></textarea>
                </div>
            </div>
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="price">
                        Prix
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="form-control bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="price" type="number" name="price" required>
                </div>
            </div>
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="visible">
                        Visiblité
                    </label>
                </div>
                <div class="md:w-2/3">
                    <select
                        class="form-control bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="visible" name="visible">
                        <option value="0">Masqué</option>
                        <option value="1">Visible</option>
                    </select>
                </div>
            </div>
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="state">
                        État
                    </label>
                </div>
                <div class="md:w-2/3">
                    <select
                        class="form-control bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="state" name="state">
                        <option value="0">Non soldé</option>
                        <option value="1">Soldé</option>
                    </select>
                </div>
            </div>
            <div class="form-group md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="reference">
                        Référence
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="form-control bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-[#66EB9A]"
                        id="reference" type="text" name="reference" required>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button type="submit"
                        class="flex py-2 px-4 text-white bg-[#66EB9A] border-0 py-2 px-6 focus:outline-none hover:scale-95 rounded"
                        type="button">
                        Créer le produit
                    </button>
                </div>
            </div>
    @endif
</body>

</html>
