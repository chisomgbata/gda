<x-default-layout>
    <x-header/>
    <section class="relative py-20">
        <img class="hidden lg:block absolute top-0 left-0 mt-20" src="zeus-assets/icons/dots/blue-dot-left-bars.svg"
             alt="">
        <img class="hidden lg:block absolute top-0 right-0 mt-52"
             src="zeus-assets/icons/dots/yellow-dot-right-shield.svg" alt="">
        <div class="container px-4 mx-auto">
            <div class="max-w-2xl mx-auto mb-20 text-center">
                <span class="text-xs text-blue-400 font-semibold">What's new at Shuffle</span>
                <h2 class="mt-8 mb-10 text-4xl font-semibold font-heading">Our Courses</h2>

            </div>
            <div class="flex flex-wrap -mx-4 -mb-16">


                @foreach($topCourses as $course)

                    <div class="w-full lg:w-1/3 px-4 mb-16">
                        <div class="flex h-80 mb-5">
                            <img class="w-full h-full object-cover rounded-xl"
                                 src="{{Storage::url($course['image'])}}"
                                 alt="{{$course['name']}}">
                        </div>
                        <span class="inline-block mb-2 text-xs text-gray-500">{{$course['created_at']}}</span>
                        <h2 class="mb-1 text-xl font-semibold font-heading w-full flex items-center">{{$course['name']}}
                            <span class="ml-auto text-sm font-normal">$ {{number_format($course['price'])}}</span></h2>

                        <a class="text-md font-medium text-red-500 underline hover:no-underline"
                           href="{{route('course', $course)}}">Enroll</a>
                    </div>

                @endforeach

            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full lg:w-1/2 px-4 mb-12 md:mb-16 lg:mb-0">
                    <div class="max-w-md">

                        <h2 class="mt-8 mb-10 text-4xl font-semibold font-heading">Industry Partners</h2>
                        <p class="text-xl text-gray-500">Unlock Your Inner Game Designer: Discover the Power of Gda
                            Service for Online Game Development Education!</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <div class="flex flex-wrap -m-4">

                        <div class="w-1/2 p-4">
                            <div class="bg-gray-50 rounded-xl">
                                <img class="mx-auto" src="images/cloud3.jpeg" alt="">
                            </div>
                        </div>
                        <div class="w-1/2 p-4">
                            <div class="bg-gray-50 rounded-xl overflow-clip">
                                <img class="mx-auto" src="images/cloud4.jpeg" alt="">
                            </div>
                        </div>

                        <div class="w-1/2 p-4">
                            <div class="bg-gray-50 rounded-xl">
                                <img class="mx-auto" src="images/cloud2.jpg" alt="">
                            </div>
                        </div>
                        <div class="w-1/2 p-4">
                            <div class="bg-gray-50 rounded-xl">
                                <img class="mx-auto" src="images/cloud1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container px-4 mx-auto">
            <div class="flex items-center">

                <div class="max-w-3xl mx-auto flex flex-wrap items-center">
                    <div class="w-full lg:w-2/5 mb-6 lg:mb-0 flex flex-wrap items-center justify-between">
                        <div>
                            <img class="mb-6 h-14 w-14 rounded-full object-cover object-top"
                                 src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                                 alt="">
                            <p class="mb-2 text-2xl font-semibold font-heading">Esther Howards</p>
                            <p class="text-gray-500">Students</p>
                        </div>
                        <div class="lg:hidden pt-4">
                            <button class="w-12 h-12 mr-2 rounded-full border hover:bg-gray-50">
                                <svg class="mx-auto" width="24" height="24" viewbox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12L5 12" stroke="#556B7A" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path d="M12 19L5 12L12 5" stroke="#556B7A" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <button class="w-12 h-12 rounded-full border hover:bg-gray-50">
                                <svg class="mx-auto" width="24" height="24" viewbox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12L19 12" stroke="#556B7A" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path d="M12 5L19 12L12 19" stroke="#556B7A" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full lg:w-3/5">
                        <p class="text-xl">I have always been interested in game development, but I never knew where to
                            start or how to learn the necessary skills. That is until I found Gda Service. This online
                            platform has completely transformed my game development journey.The courses offered by Gda
                            Service are comprehensive and easy to follow.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-default-layout>
