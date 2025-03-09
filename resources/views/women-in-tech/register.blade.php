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
                @if(auth()->check())
                    @php
                        $registration = auth()->user()->programRegistration;
                    @endphp
                    @if($registration && (is_null($registration->id_document) || is_null($registration->proof_of_address)))
                        <div class="alert alert-warning" style="padding: 10px; background-color: #f8d7da; color: #721c24;">
                            Outstanding Documents: Please upload your ID Document and Proof of Address. <a href="{{ route('womenintech.storeDocuments')}}"><b>Upload</b></a>
                        </div>
                    @endif
                @endif

                    <h2
                        class="tw-text-4xl tw-font-medium tw-text-gray-200 max-md:tw-text-2xl"
                    >
                    Welcome to Larocs' Women in Tech
                    </h2>
                </div>
                <div
                    class="tw-mt-6 tw-flex tw-max-w-[80%] tw-flex-wrap tw-place-content-center tw-gap-8 max-lg:tw-flex-col"
                >

                <h1 style="font-size: 20px">fill in your details to apply for the program</h1><br>
                <div class="create">
                    <form action="{{ route('womenintech.storeDetails') }}" method="POST">
                        @csrf
                        
                        <div class="input-group">
                            <label for="full_names" class="form-label">Full Names</label>
                            <input class="form-control" type="text" name="full_names" id="full_names" value="{{ old('full_names') }}" required>
                        </div>
                        <div class="input-group">
                            <label for="surname">Surname</label>
                            <input class="form-label" type="text" name="surname" id="surname" value="{{ old('surname') }}" required>
                        </div>
                        <div class="input-group">
                            <label for="cell_number">Cell Number</label>
                            <input class="form-label" type="text" name="cell_number" id="cell_number" value="{{ old('cell_number') }}" required>
                        </div>
                        <div class="input-group">
                            <label for="id_number">ID Number</label>
                            <input class="form-label" type="text" name="id_number" id="id_number" value="{{ old('id_number') }}" required>
                        </div>
                        <div class="input-group">
                            <label for="age">Age</label>
                            <input class="form-label" type="number" name="age" id="age" value="{{ old('age') }}" required min="16">
                        </div>
                        <div class="input-group">
                            <label for="address">Address</label>
                            <input class="form-label" type="text" name="address" id="address" value="{{ old('address') }}" required>
                        </div>
                        <button type="submit" class="login-button">Next</button>
                    </form>
                </div>
                    {{-- <div
                        class="reveal-up tw-flex tw-h-[200px] tw-w-[450px] tw-gap-8 tw-rounded-xl tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-8 max-md:tw-w-[320px]"
                    >
                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-globe"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">
                                Global
                            </h3>
                            <p class="tw-text-gray-300 max-md:tw-text-sm">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Animi quasi consequuntur,
                                distinctio
                            </p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        @include('layouts.footer')
</html>
