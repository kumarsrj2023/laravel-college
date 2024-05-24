@extends('layouts.guest')

@section('title', 'Register Page')

@section('content')



<div class="relative h-screen">

    <div
        class="max-w-lg w-full mx-auto border border-gray-200 shadow-sm rounded-lg absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
        
        <div class="bg-gray-200 p-3">
            <h1 class="text-3xl font-semibold">Register Here!</h1>
        </div>

        <form class="p-5" action="{{ route('user.register') }}" method="POST">
            @csrf()
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                <input type="text" id="base-input" name="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Full Name">

                @error('name')
                <div class="text-sm font-normal text-red-500">
                    <span class="inline-block">
                        <i class="fa-solid fa-circle-exclamation text-sm text-red-500"></i>
                    </span>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" id="email" name="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="name@domain.com" />
                @error('email')
                <div class="text-sm font-normal text-red-500">
                    <span class="inline-block">
                        <i class="fa-solid fa-circle-exclamation text-sm text-red-500"></i>
                    </span>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    password</label>
                <input type="password" id="password" name="password" placeholder="xxxxxxxx"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                @error('password')
                <div class="text-sm font-normal text-red-500">
                    <span class="inline-block">
                        <i class="fa-solid fa-circle-exclamation text-sm text-red-500"></i>
                    </span>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat
                    password</label>
                <input type="password" id="repeat-password" name="password_confirmation"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                @error('password_confirmation')
                <div class="text-sm font-normal text-red-500">
                    <span class="inline-block">
                        <i class="fa-solid fa-circle-exclamation text-sm text-red-500"></i>
                    </span>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-5">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" type="checkbox" value="" name="terms"
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                    </div>
                    <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with
                        the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and
                            conditions</a></label>
                </div>
                @error('terms')
                <div class="text-sm font-normal text-red-500">
                    <span class="inline-block">
                        <i class="fa-solid fa-circle-exclamation text-sm text-red-500"></i>
                    </span>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
                    new account</button>
            </div>
        </form>
    </div>
</div>
@endsection