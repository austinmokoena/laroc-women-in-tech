
    


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
                    <div
                        class="tw-mt-6 tw-flex tw-max-w-[80%] tw-flex-wrap tw-place-content-center tw-gap-8 max-lg:tw-flex-col"
                    >
    
                    <h1 style="font-size: 20px">fill in your details to apply for the program</h1><br>
                    <div class="create">
                        <h1>Upload Documents</h1>

                        <form action="{{ route('womenintech.storeDocuments') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <label class="form-label" for="id_document">ID Document (PDF, PNG, JPG, DOCX)</label>
                                <input class="form-label" type="file" name="id_document" id="id_document" required>
                            </div>
                            <div class="input-group">
                                <label class="form-label" for="proof_of_address">Proof of Address (PDF, PNG, JPG, DOCX)</label>
                                <input class="form-label" type="file" name="proof_of_address" id="proof_of_address" required>
                            </div>
                            <button class="login-button" type="submit">Apply</button>
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
    
            <section
                class="tw-relative tw-flex tw-min-h-[80vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden tw-p-6"
            >
                <div
                    class="reveal-up tw-flex tw-min-h-[60vh] tw-place-content-center tw-place-items-center tw-gap-[10%] max-lg:tw-flex-col max-lg:tw-gap-10"
                >
                    <div class="tw-flex">
                        <div
                            class="tw-max-h-[650px] tw-max-w-[850px] tw-overflow-hidden tw-rounded-lg tw-shadow-lg tw-shadow-[rgba(170,49,233,0.44021358543417366)]"
                        >
                            <img
                                src="../assets/images/home/dash.png"
                                alt="coding"
                                class="tw-h-full tw-w-full tw-object-cover"
                            />
                        </div>
                    </div>
                    <div
                        class="tw-mt-6 tw-flex tw-max-w-[450px] tw-flex-col tw-gap-4"
                    >
                        <h3 class="tw-text-4xl tw-font-medium max-md:tw-text-2xl">
                            Simple to use plugins
                        </h3>
    
                        <div class="tw-mt-4 tw-flex tw-flex-col tw-gap-3">
                            <h4 class="tw-text-xl tw-font-medium">
                                <i class="bi bi-check-all !tw-text-2xl"></i>
                                AI powered
                            </h4>
                            <span
                                class="tw-text-lg tw-text-gray-300 max-md:tw-text-base"
                            >
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Reiciendis commodi temporibus at? Aspernatur,
                                a necessitatibus?
                            </span>
                        </div>
                        <div class="tw-mt-4 tw-flex tw-flex-col tw-gap-3">
                            <h4 class="tw-text-xl tw-font-medium">
                                <i class="bi bi-check-all !tw-text-2xl"></i>
                                Locally run
                            </h4>
                            <span
                                class="tw-text-lg tw-text-gray-300 max-md:tw-text-base"
                            >
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Reiciendis commodi temporibus at? Aspernatur,
                                a necessitatibus?
                            </span>
                        </div>
                    </div>
                </div>
            </section>
    
            <section
                class="tw-relative tw-flex tw-min-h-[80vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden tw-p-6"
            >
                <div
                    class="reveal-up tw-flex tw-min-h-[60vh] tw-place-content-center tw-place-items-center tw-gap-[10%] max-lg:tw-flex-col max-lg:tw-gap-10"
                >
                    <div
                        class="tw-mt-6 tw-flex tw-max-w-[450px] tw-flex-col tw-gap-4"
                    >
                        <h3 class="tw-text-4xl tw-font-medium max-md:tw-text-2xl">
                            Powerful Insights
                        </h3>
    
                        <div class="tw-mt-4 tw-flex tw-flex-col tw-gap-3">
                            <h4 class="tw-text-xl tw-font-medium">
                                <i class="bi bi-check-all !tw-text-2xl"></i>
                                Easy to use
                            </h4>
                            <span
                                class="tw-text-lg tw-text-gray-300 max-md:tw-text-base"
                            >
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Reiciendis commodi temporibus at? Aspernatur,
                                a necessitatibus?
                            </span>
                        </div>
                        <div class="tw-mt-4 tw-flex tw-flex-col tw-gap-3">
                            <h4 class="tw-text-xl tw-font-medium">
                                <i class="bi bi-check-all !tw-text-2xl"></i>
                                All in one panel
                            </h4>
                            <span
                                class="tw-text-lg tw-text-gray-300 max-md:tw-text-base"
                            >
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Reiciendis commodi temporibus at? Aspernatur,
                                a necessitatibus?
                            </span>
                        </div>
                    </div>
    
                    <div class="tw-flex">
                        <div
                            class="tw-max-h-[650px] tw-max-w-[850px] tw-overflow-hidden tw-rounded-lg tw-shadow-lg tw-shadow-[rgba(170,49,233,0.44021358543417366)]"
                        >
                            <img
                                src="../assets/images/home/insights.png"
                                alt="coding"
                                class="tw-h-full tw-w-full tw-object-cover"
                            />
                        </div>
                    </div>
                </div>
            </section>
    
            <section
                class="tw-mt-5 tw-flex tw-min-h-[80vh] tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-p-[2%]"
            >
                <h3
                    class="tw-text-4xl tw-font-medium tw-text-gray-200 max-md:tw-text-2xl"
                >
                    You're in good hands
                </h3>
                <!-- Testimonials -->
                <div
                    class="tw-mt-8 tw-gap-10 tw-space-y-8 max-md:tw-columns-1 lg:tw-columns-2 xl:tw-columns-3"
                >
                    <div
                        class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-4 max-lg:tw-w-[320px]"
                    >
                        <p class="tw-mt-4 tw-text-gray-300">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Beatae, vero.
                        </p>
    
                        <div class="tw-flex tw-place-items-center tw-gap-3">
                            <div
                                class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full"
                            >
                                <img
                                    src="./assets/images/people/women.jpg"
                                    class="tw-h-full tw-w-full tw-object-cover"
                                    alt="women"
                                />
                            </div>
                            <div class="tw-flex tw-flex-col tw-gap-1">
                                <div class="tw-font-semibold">Trich B</div>
                                <div class="tw-text-gray-400">AMI, ceo</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-4 max-lg:tw-w-[320px]"
                    >
                        <p class="tw-mt-4 tw-text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Inventore deserunt delectus consectetur enim cupiditate
                            ab nemo voluptas repellendus qui quas..
                        </p>
    
                        <div class="tw-flex tw-place-items-center tw-gap-3">
                            <div
                                class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full"
                            >
                                <img
                                    src="./assets/images/people/man.jpg"
                                    class="tw-h-full tw-w-full tw-object-cover"
                                    alt="man"
                                />
                            </div>
                            <div class="tw-flex tw-flex-col tw-gap-1">
                                <div class="tw-font-semibold">John B</div>
                                <div class="tw-text-gray-400">ABC, cto</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-4 max-lg:tw-w-[320px]"
                    >
                        <p class="tw-mt-4 tw-text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quidem, numquam.
                        </p>
    
                        <div class="tw-flex tw-place-items-center tw-gap-3">
                            <div
                                class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full"
                            >
                                <img
                                    src="./assets/images/people/man2.jpg"
                                    class="tw-h-full tw-w-full tw-object-cover"
                                    alt="man"
                                />
                            </div>
                            <div class="tw-flex tw-flex-col tw-gap-1">
                                <div class="tw-font-semibold">Mante</div>
                                <div class="tw-text-gray-400">xyz, cto</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-4 max-lg:tw-w-[320px]"
                    >
                        <p class="tw-mt-4 tw-text-gray-300">
                            Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Soluta, saepe illum. Dicta quisquam praesentium
                            quod!
                        </p>
    
                        <div class="tw-flex tw-place-items-center tw-gap-3">
                            <div
                                class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full"
                            >
                                <img
                                    src="./assets/images/people/women.jpg"
                                    class="tw-h-full tw-w-full tw-object-cover"
                                    alt="man"
                                />
                            </div>
                            <div class="tw-flex tw-flex-col tw-gap-1">
                                <div class="tw-font-semibold">Lara</div>
                                <div class="tw-text-gray-400">xz, cto</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-4 max-lg:tw-w-[320px]"
                    >
                        <p class="tw-mt-4 tw-text-gray-300">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Fuga accusamus non enim debitis rem neque beatae
                            explicabo corrupti porro ullam?
                        </p>
    
                        <div class="tw-flex tw-place-items-center tw-gap-3">
                            <div
                                class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full"
                            >
                                <img
                                    src="./assets/images/people/man.jpg"
                                    class="tw-h-full tw-w-full tw-object-cover"
                                    alt="man"
                                />
                            </div>
                            <div class="tw-flex tw-flex-col tw-gap-1">
                                <div class="tw-font-semibold">James</div>
                                <div class="tw-text-gray-400">app, cto</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-4 max-lg:tw-w-[320px]"
                    >
                        <p class="tw-mt-4 tw-text-gray-300">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Fuga accusamus non enim debitis rem neque beatae
                            explicabo corrupti porro ullam?
                        </p>
    
                        <div class="tw-flex tw-place-items-center tw-gap-3">
                            <div
                                class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full"
                            >
                                <img
                                    src="./assets/images/people/man2.jpg"
                                    class="tw-h-full tw-w-full tw-object-cover"
                                    alt="man"
                                />
                            </div>
                            <div class="tw-flex tw-flex-col tw-gap-1">
                                <div class="tw-font-semibold">Ron</div>
                                <div class="tw-text-gray-400">marketplace, cto</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <section
                class="tw-mt-5 tw-flex tw-w-full tw-flex-col tw-place-items-center tw-p-[2%]"
                id="pricing"
            >
                <h3
                    class="tw-text-3xl tw-font-medium tw-text-gray-300 max-md:tw-text-2xl"
                >
                    Simple pricing
                </h3>
                <!-- pricing -->
                <div
                    class="tw-mt-10 tw-flex tw-flex-wrap tw-place-content-center tw-gap-8 max-lg:tw-flex-col"
                >
                    <div
                        class="reveal-up tw-flex tw-w-[380px] tw-flex-col tw-place-items-center tw-gap-2 tw-rounded-lg tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-8 tw-shadow-xl max-lg:tw-w-[320px]"
                    >
                        <h3 class="">
                            <span class="tw-text-5xl tw-font-semibold">$9</span>
                            <span class="tw-text-2xl tw-text-gray-400">/mo</span>
                        </h3>
                        <p class="tw-mt-3 tw-text-center tw-text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ab, explicabo!
                        </p>
                        <hr />
                        <ul
                            class="tw-mt-4 tw-flex tw-flex-col tw-gap-2 tw-text-center tw-text-lg tw-text-gray-200"
                        >
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum dolor.</li>
                            <li>Lorem ipsum dolor sit.</li>
                        </ul>
                        <a
                            href="http://"
                            class="btn tw-mt-8 !tw-w-full tw-transition-transform tw-duration-[0.3s] hover:tw-scale-x-[1.02]"
                        >
                            Get now
                        </a>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-w-[380px] tw-flex-col tw-place-items-center tw-gap-2 tw-rounded-lg tw-border-2 tw-border-primary tw-bg-secondary tw-p-8 tw-shadow-xl max-lg:tw-w-[320px]"
                    >
                        <h3 class="">
                            <span class="tw-text-5xl tw-font-semibold">$19</span>
                            <span class="tw-text-2xl tw-text-gray-400">/mo</span>
                        </h3>
                        <p class="tw-mt-3 tw-text-center tw-text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ab, explicabo!
                        </p>
                        <hr />
                        <ul
                            class="tw-mt-4 tw-flex tw-flex-col tw-gap-2 tw-text-center tw-text-lg tw-text-gray-200"
                        >
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum dolor.</li>
                            <li>Lorem ipsum dolor sit.</li>
                        </ul>
                        <a
                            href="http://"
                            class="btn tw-mt-8 !tw-w-full tw-transition-transform tw-duration-[0.3s] hover:tw-scale-x-[1.02]"
                        >
                            Get now
                        </a>
                    </div>
                    <div
                        class="reveal-up tw-flex tw-w-[380px] tw-flex-col tw-place-items-center tw-gap-2 tw-rounded-lg tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-8 tw-shadow-xl max-lg:tw-w-[320px]"
                    >
                        <h3 class="">
                            <span class="tw-text-5xl tw-font-semibold">$49</span>
                            <span class="tw-text-2xl tw-text-gray-400">/mo</span>
                        </h3>
                        <p class="tw-mt-3 tw-text-center tw-text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ab, explicabo!
                        </p>
                        <hr />
                        <ul
                            class="tw-mt-4 tw-flex tw-flex-col tw-gap-2 tw-text-center tw-text-lg tw-text-gray-200"
                        >
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum dolor.</li>
                            <li>Lorem ipsum dolor sit.</li>
                        </ul>
                        <a
                            href="http://"
                            class="btn tw-mt-8 !tw-w-full tw-transition-transform tw-duration-[0.3s] hover:tw-scale-x-[1.02]"
                        >
                            Get now
                        </a>
                    </div>
                </div>
            </section>
    
            <section
                class="tw-mt-5 tw-flex tw-min-h-[80vh] tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-p-[2%] max-lg:tw-p-3"
            >
                <h3
                    class="reveal-up tw-text-center tw-text-4xl tw-font-medium max-md:tw-text-2xl"
                >
                    Read our articles ✨
                </h3>
                <!-- articles -->
                <div
                    class="reveal-up tw-mt-10 tw-flex tw-flex-wrap tw-place-content-center tw-gap-10 max-lg:tw-flex-col"
                >
                    <a
                        href=""
                        class="tw-flex tw-h-[400px] tw-w-[400px] tw-flex-col tw-gap-4 tw-overflow-clip tw-rounded-lg tw-p-4 max-lg:tw-w-[300px]"
                    >
                        <div
                            class="tw-h-[250px] tw-w-full tw-overflow-hidden tw-rounded-md"
                        >
                            <img
                                src="./assets/images/home/forest.jpg"
                                alt="article image"
                                class="tw-h-full tw-w-full tw-object-cover tw-transition-transform tw-duration-[0.3s] hover:tw-scale-[1.04]"
                                srcset=""
                            />
                        </div>
                        <h3
                            class="tw-mt-2 tw-text-2xl tw-font-semibold max-md:tw-text-xl"
                        >
                            Article 1
                        </h3>
                        <p class="tw-text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ab, explicabo!
                        </p>
                        <span>
                            <span>Learn more</span>
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </a>
                    <a
                        href=""
                        class="tw-flex tw-h-[400px] tw-w-[400px] tw-flex-col tw-gap-4 tw-overflow-clip tw-rounded-lg tw-p-4 max-lg:tw-w-[300px]"
                    >
                        <div
                            class="tw-h-[250px] tw-w-full tw-overflow-hidden tw-rounded-md"
                        >
                            <img
                                src="./assets/images/home/mountain.jpg"
                                alt="article image"
                                class="tw-h-full tw-w-full tw-object-cover tw-transition-transform tw-duration-[0.3s] hover:tw-scale-[1.04]"
                                srcset=""
                            />
                        </div>
                        <h3
                            class="tw-mt-2 tw-text-2xl tw-font-semibold max-md:tw-text-xl"
                        >
                            Article 2
                        </h3>
                        <p class="tw-text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ab, explicabo!
                        </p>
                        <span>
                            <span>Learn more</span>
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </a>
                    <a
                        href=""
                        class="tw-flex tw-h-[400px] tw-w-[400px] tw-flex-col tw-gap-4 tw-overflow-clip tw-rounded-lg tw-p-4 max-lg:tw-w-[300px]"
                    >
                        <div
                            class="tw-h-[250px] tw-w-full tw-overflow-hidden tw-rounded-md"
                        >
                            <img
                                src="./assets/images/home/photography.jpg"
                                alt="article image"
                                class="tw-h-full tw-w-full tw-object-cover tw-transition-transform tw-duration-[0.3s] hover:tw-scale-[1.04]"
                                srcset=""
                            />
                        </div>
                        <h3
                            class="tw-mt-2 tw-text-2xl tw-font-semibold max-md:tw-text-xl"
                        >
                            Article 3
                        </h3>
                        <p class="tw-text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ab, explicabo!
                        </p>
                        <span>
                            <span>Learn more</span>
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </section>
    
            <section
                class="tw-flex tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-gap-[10%] tw-p-[5%] tw-px-[10%]"
            >
                <h3
                    class="tw-text-4xl tw-font-medium tw-text-gray-300 max-md:tw-text-2xl"
                >
                    Faq
                </h3>
                <div
                    class="tw-mt-5 tw-flex tw-min-h-[300px] tw-w-full tw-max-w-[850px] tw-flex-col tw-gap-4"
                >
                    <div
                        class="faq tw-w-full tw-rounded-md tw-border-[1px] tw-border-solid tw-border-[#1F2123] tw-bg-[#080808]"
                    >
                        <div
                            class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg"
                        >
                            <span>What license are the source code?</span>
                            <i class="bi bi-plus tw-ml-auto tw-font-semibold"></i>
                        </div>
                        <div class="content">
                            All the templates are under MIT license
                        </div>
                    </div>
    
                    <div
                        class="faq tw-w-full tw-rounded-md tw-border-[1px] tw-border-solid tw-border-[#1F2123] tw-bg-[#080808]"
                    >
                        <div
                            class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg"
                        >
                            <span>Can I request new templates?</span>
                            <i class="bi bi-plus tw-ml-auto tw-font-semibold"></i>
                        </div>
                        <div class="content">
                            you can request a generic template from
                            <a
                                href="https://github.com/PaulleDemon/landing-pages/issues/new/choose"
                                class="tw-underline"
                            >
                                Github template request</a
                            >. If you are looking for Custom design you should
                            <a href="https://tally.so/r/woO0Kx" class="tw-underline"
                                >contact here</a
                            >
                        </div>
                    </div>
    
                    <div
                        class="faq tw-w-full tw-rounded-md tw-border-[1px] tw-border-solid tw-border-[#1F2123] tw-bg-[#080808]"
                    >
                        <div
                            class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg"
                        >
                            <span>I need a custom template?</span>
                            <i class="bi bi-plus tw-ml-auto tw-font-semibold"></i>
                        </div>
                        <div class="content">
                            If you are looking for Custom design you can
                            <a href="https://tally.so/r/woO0Kx" class="tw-underline"
                                >contact here</a
                            >
                        </div>
                    </div>
    
                    <div
                        class="faq tw-w-full tw-rounded-md tw-border-[1px] tw-border-solid tw-border-[#1F2123] tw-bg-[#080808]"
                    >
                        <div
                            class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg"
                        >
                            <span>Will you add new templates?</span>
                            <i class="bi bi-plus tw-ml-auto tw-font-semibold"></i>
                        </div>
                        <div class="content">
                            New templates are added every Friday. So star ⭐️
                            <a
                                href="https://github.com/PaulleDemon/awesome-landing-pages"
                                class="tw-underline"
                                >Github</a
                            >
                        </div>
                    </div>
                </div>
    
                <div
                    class="tw-mt-20 tw-flex tw-flex-col tw-place-items-center tw-gap-4"
                >
                    <div class="tw-text-3xl max-md:tw-text-2xl">
                        Still have questions?
                    </div>
                    <a
                        href="http://"
                        class="btn !tw-rounded-full !tw-border-[1px] !tw-border-solid !tw-border-gray-300 !tw-bg-transparent tw-transition-colors tw-duration-[0.3s]"
                    >
                        Contact
                    </a>
                </div>
            </section>
    
            <section
                class="tw-flex tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-gap-[10%] tw-p-[5%] tw-px-[10%] max-md:tw-px-2"
            >
                <div
                    class="tw-flex tw-w-full tw-max-w-[80%] tw-place-content-center tw-place-items-center tw-justify-between tw-gap-3 tw-rounded-lg tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-6 max-md:tw-max-w-full max-md:tw-flex-col"
                >
                    <div class="tw-flex tw-flex-col tw-gap-1">
                        <h2 class="tw-text-3xl tw-text-gray-300 max-md:tw-text-xl">
                            Join our newsletter
                        </h2>
                        <div class="tw-text-gray-300">Lorem ipsum dolor sit.</div>
                    </div>
    
                    <div
                        class="tw-flex tw-h-[60px] tw-place-items-center tw-gap-2 tw-overflow-hidden tw-p-2"
                    >
                        <input
                            type="email"
                            class="input tw-h-full tw-w-full !tw-border-gray-600 tw-p-2 tw-outline-none"
                            placeholder="email"
                        />
                        <a
                            class="btn !tw-rounded-full !tw-border-[1px] !tw-border-solid !tw-border-gray-300 !tw-bg-transparent tw-transition-colors tw-duration-[0.3s]"
                            href=""
                        >
                            Signup
                        </a>
                    </div>
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
    
