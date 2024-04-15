<nav {{ $attributes->class(['flex justify-between items-center py-8 px-4 xl:px-10 container mx-auto']) }}><a
        class="text-lg font-semibold" href="/">
        <img class="h-12" src="{{asset('/images/gda.jpeg')}}" alt="" width="auto"></a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center p-3 hover:bg-gray-50 rounded">
            <svg class="block h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Mobile
                    menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden lg:flex lg:ml-auto lg:mr-12 lg:items-center lg:w-auto lg:space-x-12">

        @foreach($navs as $nav)
            <li><a class="text-sm font-medium capitalize" href="{{route($nav)}}">{{$nav}}</a></li>

        @endforeach

        @guest()
            <li><a class="text-sm font-medium capitalize" href="{{route('login')}}">login</a></li>

        @endguest


    </ul>

    @guest()
        <div class="hidden lg:block"><a
                class="inline-block py-3 px-8 text-sm leading-normal font-medium bg-red-50 hover:bg-red-100 text-red-500 rounded transition duration-200"
                href="{{route('register')}}">Register</a></div>

    @endguest

    @auth()
        <div class="hidden lg:block"><a
                class="inline-block py-3 px-8 text-sm leading-normal font-medium bg-red-50 hover:bg-red-100 text-red-500 rounded transition duration-200"
                href="{{route('profile.edit')}}">Profile</a></div>

    @endauth


    <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="relative flex flex-col py-6 px-6 w-full h-full bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-lg font-semibold leading-none" href="#">
                    <img class="h-7" src="{{asset('/zeus-assets/logo/logo-zeus-red.svg')}}" alt="" width="auto"></a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-500 cursor-pointer hover:text-gray-500"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    @foreach($navs as $nav)
                        <li class="mb-1"><a class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded"
                                            href="{{route($nav)}}">{{$nav}}</a></li>
                    @endforeach
                    @guest()
                        <li class="mb-1"><a class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded"
                                            href="{{route('login')}}">login</a></li>

                    @endguest


                </ul>
            </div>
            <div class="mt-auto">
                @guest()
                    <div class="pt-6"><a
                            class="block py-3 text-center text-sm leading-normal bg-red-50 hover:bg-red-100 text-red-300 font-semibold rounded transition duration-200"
                            href="{{route('register')}}">Register</a></div>
                @endguest

                @auth()
                    <div class="pt-6"><a
                            class="block py-3 text-center text-sm leading-normal bg-red-50 hover:bg-red-100 text-red-300 font-semibold rounded transition duration-200"
                            href="{{route('profile.edit')}}">Profile</a></div>

                @endauth


            </div>
        </nav>
    </div>

</nav>
