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
        <link rel="stylesheet" href="./css/tailwind-build.css">
        <link rel="stylesheet" href="css/index.css" /> <!-- Styles / Scripts -->
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
                    src="./assets/logo/logo.png"
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
                <a class="header-links" href="{{ route('womenintech.register') }}"> Apply </a>
                    <a class="header-links" href="#pricing"> Pricing </a>
                    <a class="header-links" href=""> Solutions </a>
                    <a class="header-links" href=""> Features </a>
                    @if (Route::has('login'))
                        
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
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
                    <a
                        href="{{ route('womenintech.register') }}"
                        aria-label="signup"
                        class="tw-rounded-full tw-bg-white tw-px-3 tw-py-2 tw-text-black tw-transition-transform tw-duration-[0.3s] hover:tw-translate-x-2"
                    >
                        <span>Apply</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
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
            class="hero-section tw-relative tw-flex tw-min-h-[100vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-overflow-hidden max-md:tw-mt-[50px]"
            id="hero-section"
        >
            <div
                class="tw-flex tw-h-full tw-min-h-[100vh] tw-w-full tw-flex-col tw-place-content-center tw-gap-6 tw-p-[5%] max-xl:tw-place-items-center max-lg:tw-p-4"
            >
                <div
                    class="tw-flex tw-flex-col tw-place-content-center tw-items-center"
                >
                    <div
                        class="reveal-up gradient-text tw-text-center tw-text-6xl tw-font-semibold tw-uppercase tw-leading-[80px] max-lg:tw-text-4xl max-md:tw-leading-snug"
                    >
                        <span class=""> Welcome to </span>
                        <br />
                        <span class=""> Larocs' Women in Tech </span>
                    </div>
                    <div
                        class="reveal-up tw-mt-10 tw-max-w-[450px] tw-p-2 tw-text-center tw-text-gray-300 max-lg:tw-max-w-full"
                    >
                        Igniting the Tech spark in women through job ready skills dev
                    </div>

                    <div
                        class="reveal-up tw-mt-10 tw-flex tw-place-items-center tw-gap-4"
                    >
                        <a
                            class="btn tw-bg-[#7e22ce85] tw-shadow-lg tw-shadow-primary tw-transition-transform tw-duration-[0.3s] hover:tw-scale-x-[1.03]"
                            href=""
                        >
                            Get started
                        </a>
                        <a
                            class="btn tw-flex tw-gap-2 !tw-bg-black !tw-text-white tw-transition-colors tw-duration-[0.3s] hover:!tw-bg-white hover:!tw-text-black"
                            href=""
                        >
                            <i class="bi bi-play-circle-fill"></i>
                            <span>Learn more</span>
                        </a>
                    </div>
                </div>

                <div
                    class="reveal-up tw-relative tw-mt-8 tw-flex tw-w-full tw-place-content-center tw-place-items-center"
                    id="dashboard-container"
                >
                    <div
                        class="tw-relative tw-max-w-[80%] tw-overflow-hidden tw-rounded-xl tw-bg-transparent max-md:tw-max-w-full"
                        id="dashboard"
                    >
                        <img
                            src="./assets/images/home/dashboard.png"
                            alt="dashboard"
                            class="tw-h-full tw-w-full tw-object-cover tw-opacity-90 max-lg:tw-object-contain"
                        />
                    </div>

                    <div
                        class="hero-img-bg-grad tw-absolute tw-left-[20%] tw-top-5 tw-h-[200px] tw-w-[200px]"
                    ></div>
                </div>
            </div>
        </section>

        <section
            class="tw-relative tw-flex tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden tw-p-8"
        >
            <h2 class="reveal-up tw-text-3xl max-md:tw-text-xl">
                Trusted by brands you know
            </h2>

            <div class="reveal-up carousel-container">
                <div
                    class="carousel lg:w-place-content-center tw-mt-6 tw-flex tw-w-full tw-gap-5 max-md:tw-gap-2"
                >
                    <!-- add the brands using your app  -->
                    <div class="carousel-img tw-h-[30px] tw-w-[150px]">
                        <img
                            src="./assets/images/brand-logos/laroc.png"
                            alt="laroc"
                            class="tw-h-full tw-w-full tw-object-contain tw-grayscale tw-transition-colors hover:tw-grayscale-0"
                            srcset=""
                        />
                    </div>
                    <div class="carousel-img tw-h-[30px] tw-w-[150px]">
                        <img
                            src="./assets/images/brand-logos/lavalite.png"
                            alt="lavalite"
                            class="tw-h-full tw-w-full tw-object-contain tw-grayscale tw-transition-colors hover:tw-grayscale-0"
                            srcset=""
                        />
                    </div>
                    <div class="carousel-img tw-h-[30px] tw-w-[150px]">
                        <img
                            src="./assets/images/brand-logos/laroc.png"
                            alt="laroc"
                            class="tw-h-full tw-w-full tw-object-contain tw-grayscale tw-transition-colors hover:tw-grayscale-0"
                            srcset=""
                        />
                    </div>
                    <div class="carousel-img tw-h-[30px] tw-w-[150px]">
                        <img
                            src="./assets/images/brand-logos/lavalite.png"
                            alt="lavalite"
                            class="tw-h-full tw-w-full tw-object-contain tw-grayscale tw-transition-colors hover:tw-grayscale-0"
                            srcset=""
                        />
                    </div>
                    {{-- <div class="carousel-img tw-h-[30px] tw-w-[150px]">
                        <img
                            src="./assets/images/brand-logos/adobe.svg"
                            alt="Adobe"
                            class="tw-h-full tw-w-full tw-object-contain tw-grayscale tw-transition-colors hover:tw-grayscale-0"
                            srcset=""
                        />
                    </div>
                    <div class="carousel-img tw-h-[30px] tw-w-[150px]">
                        <img
                            src="./assets/images/brand-logos/airbnb.svg"
                            alt="Adobe"
                            class="tw-h-full tw-w-full tw-object-contain tw-grayscale tw-transition-colors hover:tw-grayscale-0"
                            srcset=""
                        />
                    </div>
                    <div class="carousel-img tw-h-[30px] tw-w-[150px]">
                        <img
                            src="./assets/images/brand-logos/stripe.svg"
                            alt="Adobe"
                            class="tw-h-full tw-w-full tw-object-contain tw-grayscale tw-transition-colors hover:tw-grayscale-0"
                            srcset=""
                        />
                    </div>
                    <div class="carousel-img tw-h-[30px] tw-w-[150px]">
                        <img
                            src="./assets/images/brand-logos/reddit.svg"
                            alt="Adobe"
                            class="tw-h-full tw-w-full tw-object-contain tw-grayscale tw-transition-colors hover:tw-grayscale-0"
                            srcset=""
                        />
                    </div> --}}
                </div>
            </div>
        </section>

        <section
            class="tw-relative tw-flex tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden tw-p-6"
        >
            <div
                class="tw-mt-8 tw-flex tw-flex-col tw-place-items-center tw-gap-5"
            >
            <div
            class="reveal-up tw-mt-5 tw-flex tw-flex-col tw-gap-3 tw-text-center"
        >
            
            
                The {{ date('Y') }} Larocs' Women in Tech Program course is
            </h4>
            <div class = "containert" style="margin-top: -20px">
                <h1></h1>
                <h1>Cybersecurity</h1>
              </div>
        </div>
        <div
            class="tw-mt-6 tw-flex tw-max-w-[80%] tw-flex-wrap tw-place-content-center tw-gap-8 max-lg:tw-flex-col"
        >
            <div
                class="reveal-up tw-flex tw-h-[200px] tw-w-[450px] tw-gap-8 tw-rounded-xl tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-8 max-md:tw-w-[320px]"
            >
                <div class="tw-text-4xl max-md:tw-text-2xl">
                    <i class="bi bi-globe"></i>
                </div>

                <div class="tw-flex tw-flex-col tw-gap-4">
                    <h3 class="tw-text-2xl max-md:tw-text-xl">
                        Network Security
                    </h3>
                    <p class="tw-text-gray-300 max-md:tw-text-sm">
                        Firewalls & Intrusion Detection/Prevention Systems (IDS/IPS): 
                        Monitor and control incoming/outgoing network traffic.
                    </p>
                </div>
            </div>

            <div
                class="reveal-up tw-flex tw-h-[200px] tw-w-[450px] tw-gap-8 tw-rounded-xl tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-8 max-md:tw-w-[320px]"
            >
                <div class="tw-text-4xl max-md:tw-text-2xl">
                    <i class="bi bi-bar-chart-fill"></i>
                </div>

                <div class="tw-flex tw-flex-col tw-gap-4">
                    <h3 class="tw-text-2xl max-md:tw-text-xl">
                        Endpoint Security
                    </h3>
                    <p class="tw-text-gray-300 max-md:tw-text-sm">
                        Antivirus & Anti-malware: Protect individual devices from malicious software.
                    </p>
                </div>
            </div>

            <div
                class="reveal-up tw-flex tw-h-[200px] tw-w-[450px] tw-gap-8 tw-rounded-xl tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-8 max-md:tw-w-[320px]"
            >
                <div class="tw-text-4xl max-md:tw-text-2xl">
                    <i class="bi bi-cloud-fill"></i>
                </div>

                <div class="tw-flex tw-flex-col tw-gap-4">
                    <h3 class="tw-text-2xl max-md:tw-text-xl">
                        Data Security
                    </h3>
                    <p class="tw-text-gray-300 max-md:tw-text-sm">
                        Encryption: Protects data at rest and in transit.
                        Data Loss Prevention (DLP): Monitors and safeguards sensitive information.
                        Access Controls: Ensure only authorized users can access critical data.
                    </p>
                </div>
            </div>

            <div
                class="reveal-up tw-flex tw-h-[200px] tw-w-[450px] tw-gap-8 tw-rounded-xl tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-8 max-md:tw-w-[320px]"
            >
                <div class="tw-text-4xl max-md:tw-text-2xl">
                    <i class="bi bi-fingerprint"></i>
                </div>

                <div class="tw-flex tw-flex-col tw-gap-4">
                    <h3 class="tw-text-2xl max-md:tw-text-xl">
                        Security Monitoring & Incident Response
                    </h3>
                    <p class="tw-text-gray-300 max-md:tw-text-sm">
                        Security Information and Event Management (SIEM): Aggregates and analyzes security data in real time.
                    </p>
                </div>
            </div>

            <div
                class="reveal-up tw-flex tw-h-[200px] tw-w-[450px] tw-gap-8 tw-rounded-xl tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-8 max-md:tw-w-[320px]"
            >
                <div class="tw-text-4xl max-md:tw-text-2xl">
                    <i class="bi bi-sliders"></i>
                </div>

                <div class="tw-flex tw-flex-col tw-gap-4">
                    <h3 class="tw-text-2xl max-md:tw-text-xl">
                        Vulnerability Management
                    </h3>
                    <p class="tw-text-gray-300 max-md:tw-text-sm">
                        Regular Scanning & Assessments: Identify weaknesses before attackers do.
                        Patch Management: Timely updates to software and systems to mitigate risks.
                    </p>
                </div>
            </div>

            <div
                class="reveal-up tw-flex tw-h-[200px] tw-w-[450px] tw-gap-8 tw-rounded-xl tw-border-[1px] tw-border-outlineColor tw-bg-secondary tw-p-8 max-md:tw-w-[320px]"
            >
                <div class="tw-text-4xl max-md:tw-text-2xl">
                    <i class="bi bi-gear-fill"></i>
                </div>

                <div class="tw-flex tw-flex-col tw-gap-4">
                    <h3 class="tw-text-2xl max-md:tw-text-xl">
                        Cloud Security
                    </h3>
                    <p class="tw-text-sm tw-text-gray-300">
                        Secure Configurations: Ensure cloud services are set up according to best practices.
                    </p>
                </div>
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
        <div class="tw-flex">
            <div
                class="tw-max-h-[650px] tw-max-w-[850px] tw-overflow-hidden tw-rounded-lg tw-shadow-lg tw-shadow-[rgba(170,49,233,0.44021358543417366)]"
            >
                <img
                    src="./assets/images/poster.png"
                    alt="coding"
                    class="tw-h-full tw-w-full tw-object-cover"
                />
            </div>
        </div>
        <div
            class="tw-mt-6 tw-flex tw-max-w-[450px] tw-flex-col tw-gap-4"
        >
            <h3 class="tw-text-4xl tw-font-medium max-md:tw-text-2xl">
                Cybersecurity Bootcamps
            </h3>

            <div class="tw-mt-4 tw-flex tw-flex-col tw-gap-3">
                <h4 class="tw-text-xl tw-font-medium">
                    <i class="bi bi-check-all !tw-text-2xl"></i>
                    CISCO Accredited
                </h4>
                <span
                    class="tw-text-lg tw-text-gray-300 max-md:tw-text-base"
                >
                    The Laroc Learning for Women in Tech Cybersecurity bootcamp
                    provides regulated curriculum which at the end you receive 
                    CISCO accreditation
                </span>
            </div>
            <div class="tw-mt-4 tw-flex tw-flex-col tw-gap-3">
                <h4 class="tw-text-xl tw-font-medium">
                    <i class="bi bi-check-all !tw-text-2xl"></i>
                    Industry Applicable
                </h4>
                <span
                    class="tw-text-lg tw-text-gray-300 max-md:tw-text-base"
                >
                    After this bootcamp, you would be ready to tackle live industry cybersecurity
                    treats and you would be job ready and certified.
                </span>

                <a href="{{ route('womenintech.register') }}" class="login-button" style="display: flex; justify-content: center; align-items: center;"><b>Apply</b></a>

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
        Junior Cybersecurity Analyst - Curriculum
    </h3>
    <!-- Testimonials -->
    <h1>6 Courses in total</h1>
    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-date">
                <div>
                    Week 1
                </div>
            </div>
            <div class="timeline-content">
                <h2>Introduction to Cybersecurity</h2>
                <p>This introductory course takes you inside the world of cybersecurity. 
                    You will learn cybersecurity basics to protect your personal digital life and gain 
                    insights into the biggest security challenges companies, governments, and educational 
                    institutions face today</p>
                <br>
                <i class="fas fa-rocket fa-icon"></i>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-date">
                <div>
                    Week 2
                </div>
            </div>
            <div class="timeline-content">
                <h2>Networking Basics</h2>
                <p>This course covers the foundation of networking and network devices, media, and protocols. 
                    You will observe data flowing through a network and configure devices to connect to networks. 
                    Finally, you will learn how to use different network applications and protocols to accomplish 
                    networking tasks</p>
                <br>
                <i class="fas fa-graduation-cap fa-icon"></i>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-date">
                <div>
                    Week 3
                </div>
            </div>
            <div class="timeline-content">
                <h2>Networking Devices and Initial Configuration</h2>
                <p>This course covers the essentials of network devices and how to configure them. 
                    Learn the characteristics and benefits of Cloud and Virtualization technologies. 
                    Explore how to provide Internet Protocol (IP) addresses to devices both manually and automatically.</p>
                <br>
                <i class="fas fa-power-off fa-icon"></i>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-date">
                <div>
                    Week 4
                </div>
            </div>
            <div class="timeline-content">
                <h2>Endpoint Security</h2>
                <p>Gain the foundational knowledge you will use in the workplace as a Junior Cybersecurity Analyst
                    Build the skills to secure your network all the way to the edge, including hardware, software, and media.</p>
                <br>
                <i class="fas fa-power-off fa-icon"></i>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-date">
                <div>
                    Week 5
                </div>
            </div>
            <div class="timeline-content">
                <h2>Network Defense</h2>
                <p>This course covers ways to monitor your network and how to evaluate security alerts.
                    Delve into the tools and techniques used to protect a network, including access control, firewalls, cloud security, and cryptography.</p>
                <br>
                <i class="fas fa-power-off fa-icon"></i>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-date">
                <div>
                    Week 6
                </div>
            </div>
            <div class="timeline-content">
                <h2>Cyber Threat Management</h2>
                <p>This course explores governance in cybersecurity and threat management.
                    You will also gain skills for managing threats, such as how to assess a network for vulnerabilities, manage risks, and respond to security incidents.</p>
                <br>
                <i class="fas fa-power-off fa-icon"></i>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-date">
                <div>
                    Week 7
                </div>
            </div>
            <div class="timeline-content">
                <h2>Final Exam</h2>
                <p>Successfully passing this exam earns you a digital badge to verify your cyber skills. Display your digital badge on your resume or LinkedIn to let employers know your knowledge is verified by Laroc Learning & Cisco</p>
                <br>
                <i class="fas fa-power-off fa-icon"></i>
            </div>
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
