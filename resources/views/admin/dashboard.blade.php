
    


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
            <link rel="stylesheet" href="../css/admin.css" /> <!-- Styles / Scripts -->
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
        <header
        class="tw-max-w-lg:tw-px-4 tw-max-w-lg:tw-mr-auto tw-absolute tw-top-0 tw-z-20 tw-flex tw-h-[60px] tw-w-full tw-bg-opacity-0 tw-px-[5%] lg:tw-justify-around"
        >
            <a class="tw-h-[50px] tw-w-[50px] tw-p-[4px]" href="">
                <img
                    src="../assets/logo/logo.png"
                    alt="logo"
                    class="tw-object tw-h-full tw-w-full"
                />
            </a>
            <div
                class="collapsible-header animated-collapse max-lg:tw-shadow-md"
                id="collapsed-header-items" style="width: auto; height:100%"
            >
                <div
                    class="tw-flex tw-h-full tw-w-max tw-gap-5 tw-text-base max-lg:tw-mt-[30px] max-lg:tw-flex-col max-lg:tw-place-items-end max-lg:tw-gap-5 lg:tw-mx-auto lg:tw-place-items-center"
                >
                
                    <a class="header-links" href="{{ route('admin.pending') }}"> Pending </a>
                    <a class="header-links" href="{{ route('admin.accepted') }}"> Accepted </a>
                    <a class="header-links" href="{{ route('admin.rejected') }}"> Rejected </a>
                    <a class="header-links" href="{{ route('admin.missing-docs') }}"> Missing Docs </a>
                    <a href="{{ route('admin.users') }}">All Users</a>
                    @if (Route::has('login'))
                        
                            @auth
                                <a
                                    href="{{ url('/admin/dashboard') }}"
                                    class="header-links"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="header-links"
                                >
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="header-links" >
                                        Register
                                    </a>
                                @endif
                            @endauth
                    @endif
                </div>
                <div
                    class="tw-mx-4 tw-flex tw-place-items-center tw-gap-[20px] tw-text-base max-md:tw-w-full max-md:tw-flex-col max-md:tw-place-content-center"
                >
                <i class="bi bi-arrow-left"></i>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" class="tw-rounded-full tw-bg-white tw-px-3 tw-py-2 tw-text-black tw-transition-transform tw-duration-[0.3s] hover:tw-translate-x-2">
                            Logout
                        </a>
                    </form>
                        
                    
                </div>
            </div>
            <button
                class="bi bi-list tw-absolute tw-right-3 tw-top-3 tw-z-50 tw-text-3xl tw-text-white lg:tw-hidden"
                onclick="toggleHeader()"
                aria-label="menu"
                id="collapse-btn"
            ></button>
        </header>
    
            
    
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

                        






                        
                    </div>


                    {{-- <table class="table">
                        <thead>
                          <tr>
                            <th>User</th>
                            <th>Full Names</th>
                            <th>Surname</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($applications as $application)
                          <tr>
                            <td>{{ $application->user->name }}</td>
                            <td>{{ $application->full_names }}</td>
                            <td>{{ $application->surname }}</td>
                            <td>{{ $application->status }}</td>
                            <td>
                              <form method="POST" action="{{ route('admin.applications.updateStatus', $application) }}" class="d-inline">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="accepted">
                                <button type="submit" class="btn btn-success btn-sm">Accept</button>
                              </form>
                              <form method="POST" action="{{ route('admin.applications.updateStatus', $application) }}" class="d-inline">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="missing_documents">
                                <button type="submit" class="btn btn-warning btn-sm">Missing Docs</button>
                              </form>
                              <form method="POST" action="{{ route('admin.applications.updateStatus', $application) }}" class="d-inline">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="rejected">
                                <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
 --}}








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
    
            <footer
            class="tw-mt-auto tw-flex tw-w-full tw-place-content-around tw-gap-3 tw-p-[5%] tw-px-[10%] tw-text-white max-md:tw-flex-col"
        >
            <div
                class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-place-items-center tw-gap-6 max-md:tw-w-full"
            >
                <img
                    src="../assets/logo/logo.png"
                    alt="logo"
                    srcset=""
                    class="tw-max-w-[120px]"
                />
                <div>
                    2262 School Street,
                    <br />
                    Mashishing 1123,
                    <br />
                    Mpumalanga
                </div>
                <div class="tw-mt-3 tw-text-lg tw-font-semibold">Follow us</div>
                <div class="tw-flex tw-gap-4 tw-text-2xl">
                    <a href="" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a
                        href="#"
                        aria-label="Twitter"
                    >
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a
                        href="#"
                        class="tw-h-[40px] tw-w-[40px]"
                        aria-label="LinkedIn"
                    >
                        <i class="bi bi-linkedin"></i>
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

    <script src="../index.js"></script>
    </html>
    
