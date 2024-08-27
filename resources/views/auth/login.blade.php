<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Klipaa | Login</title>
    <!-- End | Title -->

    <!-- Tailwindcss -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- End | Tailwindcss -->

</head>

<body class="bg-white flex flex-col justify-center items-center min-h-screen p-6">

    <!-- Container -->
    <div class="grid md:grid-cols-2 items-center gap-8 bg-white max-w-4xl w-full shadow-lg rounded-md overflow-hidden" style="box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.55);
-webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.55);
-moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.55);">
        <!-- Konten Kiri -->
        <div class="flex flex-col justify-center p-8 bg-varBlue w-full h-full">
            <div class="max-w-md space-y-12 mx-auto">
                <div>
                    <h4 class="text-white text-lg font-semibold">Selamat Datang di Klipa</h4>
                    <p class="text-sm text-white mt-2">Silakan login untuk melanjutkan.</p>
                </div>
                <div>
                    <h4 class="text-white text-lg font-semibold">Akses Mudah dan Aman</h4>
                    <p class="text-sm text-white mt-2">Dengan menggunakan akun Anda, Anda dapat mengakses semua fitur dan informasi yang kami tawarkan.</p>
                </div>
                <div>
                    <h4 class="text-white text-lg font-semibold">Privasi Anda Terjaga</h4>
                    <p class="text-sm text-white mt-2">Kami menjaga data Anda dengan sangat hati-hati sesuai dengan kebijakan privasi kami.</p>
                </div>
            </div>
        </div>
        <!-- End | Konten Kiri -->

        <!-- Konten Kanan -->
        <div class="p-8">
            <div class="flex justify-center mb-6">
            <img src="{{ asset('img/L-Klipaa.png') }}" alt="Klipa Logo" class="h-[40%] w-[40%]">
            </div>
            <h3 class="text-varBlue text-3xl font-extrabold mb-6 text-center">Login Akun Klipa</h3>




            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="space-y-6">
                    <div>
                        <label for="email" class="text-gray-800 text-sm mb-2 block">{{ __('Email Address') }}</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Masukkan email Anda" required>
                        @error('email')
                                <span class="feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="text-gray-800 text-sm mb-2 block">{{ __('Password') }}</label>
                        <input id="password" type="password" name="password" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Masukkan password Anda" required>
                        @error('password')
                                <span class="feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center mt-6">
                    <input class="h-4 w-4 rounded" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="ml-3 block text-sm" for="remember">{{ __('Tetap Login') }}</label>
                </div>

                <div class="mt-6">
                            <button type="submit" class="w-full py-3 px-6 text-sm tracking-wide font-semibold rounded-md text-white bg-varBlue hover:bg-blue-500 focus:outline-none transition-all">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
            </form>






            <div class="mt-6 text-center">
                <p>Lupa Password? <a href="/reset" class="text-varBlue hover:underline">Reset</a></p>
            </div>
        </div>
        <!-- End | Konten Kanan -->

    </div>
    <!-- End | Container -->

</body>

</html>