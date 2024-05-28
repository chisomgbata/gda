<x-default-layout>
    <section class="relative py-20">
        <img class="hidden lg:block absolute top-0 left-0 mt-16 z-10"
             src="zeus-assets/icons/dots/blue-dot-left-bars.svg" alt="">
        <img class="hidden lg:block absolute bottom-0 right-0 mb-16"
             src="zeus-assets/icons/dots/yellow-dot-right-shield.svg" alt="">
        <div class="absolute top-0 left-0 lg:bottom-0 h-128 lg:h-auto w-full lg:w-8/12 bg-gray-50"></div>
        <div class="relative container px-4 mx-auto">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full lg:w-1/2 px-4 mb-12 lg:mb-0">
                    <div class="max-w-lg">
                        <h2 class="mb-10 text-4xl font-semibold font-heading">تسجيل الدخول في منصة سكيب التعليمية</h2>

                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <div class="lg:max-w-md p-6 lg:px-10 lg:py-12 bg-white text-center border rounded-xl">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <span class="inline-block mb-4 text-xs text-blue-400 font-semibold">Sign In</span>
                            <h3 class="mb-12 text-3xl font-semibold font-heading">
                                تسجيل الدخول

                            </h3>

                            <div class="relative flex flex-wrap mb-6">
                                <input class="relative mb-2 md:mb-0 w-full py-4 pl-4 text-sm border rounded"
                                       type="email" placeholder="e.g hello@shuffle.dev" name="email">
                                <span
                                    class="absolute top-0 left-0 ml-4 -mt-2 px-1 inline-block bg-white text-gray-500 text-xs">Your email address</span>
                            </div>
                            <div class="relative flex flex-wrap mb-6">
                                <input class="relative mb-2 md:mb-0 w-full py-4 pl-4 text-sm border rounded"
                                       type="password" placeholder="******" name="password">
                                <span
                                    class="absolute top-0 left-0 ml-4 -mt-2 px-1 inline-block bg-white text-gray-500 text-xs">Password</span>
                            </div>


                            <button
                                class="w-full inline-block py-4 text-sm text-white font-medium leading-normal bg-red-400 hover:bg-red-300 rounded transition duration-200">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-default-layout>
