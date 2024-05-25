<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('layouts.styles')

</head>

<body>

    @include('layouts.navbar')
    @include('layouts.sidebar')

    <main>
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
               @yield('content')
            </div>
        </div>

    </main>

    @include('layouts.scripts')
    @stack('scripts')

</body>

</html>