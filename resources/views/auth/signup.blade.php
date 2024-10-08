@php
    $dangerText = 'text-red-600';
    $dangerClass =
        'border-red-600 focus:outline-none focus:ring-0 focus:border-red-600 text-red-600 placeholder:text-red-600';
@endphp

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center px-6 py-8 mx-auto lg:py-0 my-10">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create an account
                    </h1>

                    <form class="space-y-4 md:space-y-6" action="/auth/signup" method="POST">
                        @csrf
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white 
                                @error('name')
                                    {{ $dangerText }}
                                @enderror
                                ">
                                Your Full Name
                            </label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 border-gray-300 focus:border-primary-600 
                                @error('name')
                                {{ $dangerClass }}
                                @enderror
                                "
                                placeholder="Name" autofocus />

                            @error('name')
                                <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="username"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('username')
                                    {{ $dangerText }}
                                @enderror
                                ">
                                Your Username
                            </label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}"
                                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 border-gray-300 focus:border-primary-600 
                                @error('username')
                                {{ $dangerClass }}
                                @enderror
                                "
                                placeholder="Username" required>

                            @error('username')
                                <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('email')
                                    {{ $dangerText }}
                                @enderror
                                ">
                                Your Email
                            </label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 border-gray-300 focus:border-primary-600 
                                @error('email') 
                                {{ $dangerClass }}
                                @enderror
                                "
                                placeholder="name@company.com" required>

                            @error('email')
                                <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('password')
                                    {{ $dangerText }}
                                @enderror
                                ">
                                Your Password
                            </label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 border-gray-300 focus:border-primary-600 
                                @error('password') 
                                {{ $dangerClass }}
                                @enderror
                                "
                                required>

                            @error('password')
                                <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('password')
                                    {{ $dangerText }}
                                @enderror
                                ">
                                Confirm Your Password
                            </label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="••••••••"
                                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 border-gray-300 focus:border-primary-600 
                                @error('password') 
                                {{ $dangerClass }}
                                @enderror
                                "
                                required>

                            @error('password')
                                <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create
                            an account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="/auth/signin"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">
                                Login here
                            </a>
                        </p>
                    </form>


                </div>
            </div>
        </div>
    </section>

</x-layout>
