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
                    @auth
                        @if (auth()->user()->programRegistrations()->where('status', 'accepted')->exists())
                            <a class="header-links" href="https://auth.netacad.com/...">Study</a>
                        @endif
                    @endauth
                    {{-- <a class="header-links" href=""> Solutions </a>
                    <a class="header-links" href=""> Features </a> --}}
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