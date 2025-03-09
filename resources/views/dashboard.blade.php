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
        @include('layouts.nav')

        

        <section
            class="tw-relative tw-flex tw-min-h-[80vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden tw-p-6"
        >
        

            <div
                class="tw-mt-8 tw-flex tw-flex-col tw-place-items-center tw-gap-5"
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
                <div
                    class="reveal-up tw-mt-5 tw-flex tw-flex-col tw-gap-3 tw-text-center"
                >
                    
                    <div class="box">
                        <div class="inner">
                          <span>Women in Tech</span>
                        </div>
                        <div class="inner">
                          <span>Women in Tech</span>
                        </div>
                      </div>
                      <h4
                        class="tw-text-4xl tw-font-medium tw-text-gray-200 max-md:tw-text-2xl"
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

        {{-- <section
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
        </section> --}}

        {{-- <section
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
        </section> --}}

        @include('layouts.footer')
</html>
