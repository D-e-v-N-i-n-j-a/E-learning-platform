<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-blue-100">
        <div class="bg-white rounded-lg shadow-lg w-3/4 h-[700px] flex">
            @include('components.flash-message')
            <!-- Left side with illustration -->
            <div class="hidden md:flex md:w-1/2 items-center justify-center p-10 bg-blue-50 rounded-l-lg">
                <img src="{{ asset('student.svg') }}" alt="Student illustration" class="w-3/4">
            </div>
            <!-- Right side with login form -->
            <div class="w-2/4  p-8 flex flex-col justify-center items-center">
                <h2 class="text-2xl font-bold text-center mb-4">Student Registration</h2>
                <p class="text-center mb-6">Hey, enter your details to register an your account</p>
                <form class="w-2/3" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-semibold mb-1" for="email">Username</label>
                        <input name="username" type="text" id="email" class="w-full p-2 border border-gray-300 rounded" placeholder="John Okarfo" required>
                        @error('username')
                            <p class="text-red-400">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-semibold mb-1" for="email">Email</label>
                        <input name="email" type="email" id="email" class="w-full p-2 border border-gray-300 rounded" placeholder="example@mail.com" required>
                        @error('email')
                        <p class="text-red-400">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-semibold mb-1" for="email">Country</label>
                        <input name="country" type="text" id="email" class="w-full p-2 border border-gray-300 rounded" placeholder="USA" required>
                        @error('country')
                            <p class="text-red-400">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-semibold mb-1" for="password">Password</label>
                        <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded" placeholder="********" required>
                        @error('password')
                        <p class="text-red-400">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-semibold mb-1" for="password">Password</label>
                        <input type="password" name="password_confirmed" id="password" class="w-full p-2 border border-gray-300 rounded" placeholder="********" required>
                    </div>
                    <div class="flex justify-between items-center mb-6">
                        <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
                    </div>
                    <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded hover:bg-blue-600">Register</button>
                </form>
                <p class="text-center mt-4">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>





