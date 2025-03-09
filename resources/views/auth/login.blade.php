











    


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="" />
        <link
            rel="shortcut icon"
            href="./assets/logo/logo.png"
            type="image/x-icon"
        />

        <!-- Open Graph / Facebook -->
        <meta property="og:title" content="Title of the project" />
        <meta property="og:description" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://github.com/PaulleDemon" />
        <!--Replace with the current website url-->
        <meta property="og:image" content="" />

        <!-- <link rel="stylesheet" href="../../tailwind-css/tailwind-runtime.css" /> -->
        <link rel="stylesheet" href="../css/tailwind-build.css">
        <link rel="stylesheet" href="../css/index.css" /> <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/js/app.js'])
        @else

        @endif


        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
            integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    <body
        class="tw-flex tw-min-h-[100vh] tw-flex-col tw-bg-black tw-text-white"
    >
        @include('layouts.nav')

        

        <section
            class="tw-relative tw-flex tw-min-h-[80vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden tw-p-6"
        >
            <div
                class="tw-mt-8 tw-flex tw-flex-col tw-place-items-center tw-gap-5"
            >
                <div
                    class="reveal-up tw-mt-5 tw-flex tw-flex-col tw-gap-3 tw-text-center"
                >
                    <h2
                        class="tw-text-4xl tw-font-medium tw-text-gray-200 max-md:tw-text-2xl"
                    >
                    Welcome to Larocs' Women in Tech
                    </h2>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
            
                    <div class="input-group">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="@error('email') input-error @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
            
                    <div class="input-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="@error('password') input-error @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
            
                    <div class="checkbox-group">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">{{ __('Remember Me') }}</label>
                    </div>
            
                    <button type="submit" class="login-button">{{ __('Login') }}</button>
            
                    @if (Route::has('password.request'))
                        <a class="forgot-password" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </form>
            </div>
        </section>

        <footer
            class="tw-mt-auto tw-flex tw-w-full tw-place-content-around tw-gap-3 tw-p-[5%] tw-px-[10%] tw-text-white max-md:tw-flex-col"
        >
            <div
                class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-place-items-center tw-gap-6 max-md:tw-w-full"
            >
                <img
                    src="./assets/logo/logo.png"
                    alt="logo"
                    srcset=""
                    class="tw-max-w-[120px]"
                />
                <div>
                    2 Lord Edward St,
                    <br />
                    D02 P634,
                    <br />
                    United States
                </div>
                <div class="tw-mt-3 tw-text-lg tw-font-semibold">Follow us</div>
                <div class="tw-flex tw-gap-4 tw-text-2xl">
                    <a href="" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a
                        href="https://twitter.com/@pauls_freeman"
                        aria-label="Twitter"
                    >
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a
                        href="https://instagram.com/"
                        class="tw-h-[40px] tw-w-[40px]"
                        aria-label="Instagram"
                    >
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-gap-4">
                <h2 class="tw-text-3xl max-md:tw-text-xl">Company</h2>
                <div class="tw-flex tw-flex-col tw-gap-3 max-md:tw-text-sm">
                    <a href="" class="footer-link">Use cases</a>
                    <a href="" class="footer-link">Integrations</a>
                    <a href="" class="footer-link">Change logs</a>
                    <a href="" class="footer-link">Blogs</a>
                    <a href="" class="footer-link">Contact</a>
                </div>
            </div>

            <div class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-gap-4">
                <h2 class="tw-text-3xl max-md:tw-text-xl">Resources</h2>
                <div class="tw-flex tw-flex-col tw-gap-3 max-md:tw-text-sm">
                    <a href="" class="footer-link">About us</a>
                    <a href="" class="footer-link">FAQ</a>
                    <a href="" class="footer-link">Contact Us</a>
                    <a href="" class="footer-link">Blogs</a>
                    <a href="" class="footer-link">Privacy policy</a>
                </div>
            </div>
        </footer>
    </body>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"
        integrity="sha512-B1lby8cGcAUU3GR+Fd809/ZxgHbfwJMp0jLTVfHiArTuUt++VqSlJpaJvhNtRf3NERaxDNmmxkdx2o+aHd4bvw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js"
        integrity="sha512-AY2+JxnBETJ0wcXnLPCcZJIJx0eimyhz3OJ55k2Jx4RtYC+XdIi2VtJQ+tP3BaTst4otlGG1TtPJ9fKrAUnRdQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    <script src="./index.js"></script>
</html>

