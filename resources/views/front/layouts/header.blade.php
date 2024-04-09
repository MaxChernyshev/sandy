<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sandy's Ukrainian Kitchen</title>

    @vite([
        'resources/front/css/app.css',
        'resources/front/js/app.js',
        'resources/front/js/bootstrap.js',
        ])

</head>

<body>

<header class="bg-gray-800 py-4">
    <div class="container mx-auto flex items-center justify-between px-4">
        <!-- Logo -->
        <div class="w-1/4">
            <img src="logo.png" alt="Logo" class="h-10">
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex w-3/4 items-center justify-end space-x-4">
            <ul class="flex flex-wrap space-x-4 text-white text-sm">
                <li><a href="#" class="hover:text-gray-300">Item 1</a></li>
                <li><a href="#" class="hover:text-gray-300">Item 2</a></li>
                <li><a href="#" class="hover:text-gray-300">Item 3</a></li>
                <li><a href="#" class="hover:text-gray-300">Item 4</a></li>
            </ul>
        </nav>

        <!-- Hamburger Menu (SM & MD) -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-white focus:outline-none">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M4 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 5h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 5h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Dropdown Menu (SM & MD) -->
    <div id="mobile-menu" class="md:hidden hidden bg-gray-800">
        <ul class="text-white text-sm">
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-700">Item 1</a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-700">Item 2</a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-700">Item 3</a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-700">Item 4</a></li>
        </ul>
    </div>
</header>


