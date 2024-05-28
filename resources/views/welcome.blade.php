<x-default-layout>
    <x-header/>
    <section class="relative py-20">
        <img class="hidden lg:block absolute top-0 left-0 mt-20" src="zeus-assets/icons/dots/blue-dot-left-bars.svg"
             alt="">
        <img class="hidden lg:block absolute top-0 right-0 mt-52"
             src="zeus-assets/icons/dots/yellow-dot-right-shield.svg" alt="">
        <div class="container px-4 mx-auto">
            <div class="max-w-2xl mx-auto mb-20 text-center">
                <h2 class="mt-8 mb-10 text-4xl font-semibold font-heading">دوراتنا.</h2>

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
                            <span
                                class="ml-auto text-sm font-normal">ر. سSAR  {{number_format($course['price'])}}</span>
                        </h2>

                        <a class="text-md font-medium text-red-500 underline hover:no-underline"
                           href="{{route('course', $course)}}">Enroll</a>
                    </div>

                @endforeach

            </div>
        </div>
    </section>

    {{--    <section class="py-20">--}}
    {{--        <div class="container px-4 mx-auto">--}}
    {{--            <div class="flex flex-wrap items-center -mx-4">--}}
    {{--                <div class="w-full lg:w-1/2 px-4 mb-12 md:mb-16 lg:mb-0">--}}
    {{--                    <div class="max-w-md">--}}

    {{--                        <h2 class="mt-8 mb-10 text-4xl font-semibold font-heading">Industry Partners</h2>--}}
    {{--                        <p class="text-xl text-gray-500">Unlock Your Inner Game Designer: Discover the Power of Gda--}}
    {{--                            Service for Online Game Development Education!</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="w-full lg:w-1/2 px-4">--}}
    {{--                    <div class="flex flex-wrap -m-4">--}}

    {{--                        <div class="w-1/2 p-4">--}}
    {{--                            <div class="bg-gray-50 rounded-xl">--}}
    {{--                                <img class="mx-auto" src="images/cloud3.jpeg" alt="">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="w-1/2 p-4">--}}
    {{--                            <div class="bg-gray-50 rounded-xl overflow-clip">--}}
    {{--                                <img class="mx-auto" src="images/cloud4.jpeg" alt="">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="w-1/2 p-4">--}}
    {{--                            <div class="bg-gray-50 rounded-xl">--}}
    {{--                                <img class="mx-auto" src="images/cloud2.jpg" alt="">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="w-1/2 p-4">--}}
    {{--                            <div class="bg-gray-50 rounded-xl">--}}
    {{--                                <img class="mx-auto" src="images/cloud1.png" alt="">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="py-20">
        <div class="container mx-auto grid lg:grid-cols-2 w-full gap-6 px-2" x-data="

{{--        بشكل عام ممتاز ، والملفت تسلسل الدروس حتى الآن والوضوح في الشرح بالتفصيل ، جهد تشكرو عليه ، بارك الله في مسعاكم ونفع بكم وبنا جميعاً--}}
{{--نوره عبدالحميد--}}

{{--معسكر جميل واعطانا كل مايحتاجه المصمم في بلندر وزاد ايضاً من خبرتي في البرنامج--}}
{{--Reem Hassan yusef--}}

{{--رائع جدا شكرا لكم على مجهودكم الآن عندي هواية أضافية اقضي فيها وقت فراغي--}}
{{--Sultan bashammakh--}}

{{--المعسكر جدا مفيد وشامل لكل شيء عن البرنامج اشكر كل القائمين عليه--}}
{{--فايزه عبدالله جراح--}}

        {

            tabs: [
                {
                    name: 'نوره عبدالحميد',
                    message: 'بشكل عام ممتاز ، والملفت تسلسل الدروس حتى الآن والوضوح في الشرح بالتفصيل ، جهد تشكرو عليه ، بارك الله في مسعاكم ونفع بكم وبنا جميعاً'
                },
                {
                    name: 'Reem Hassan yusef',
                    message: 'معسكر جميل واعطانا كل مايحتاجه المصمم في بلندر وزاد ايضاً من خبرتي في البرنامج'
                },
                {
                    name: 'Sultan bashammakh',
                    message: 'رائع جدا شكرا لكم على مجهودكم الآن عندي هواية أضافية اقضي فيها وقت فراغي'
                },
                {
                    name: 'فايزه عبدالله جراح',
                    message: 'المعسكر جدا مفيد وشامل لكل شيء عن البرنامج اشكر كل القائمين عليه'
                }

            ]
        }

        ">

            <template x-for="tab in tabs" :key="tab.name">

                <div class="w-full  flex items-end  gap-2 rounded-lg shadow-sm p-6 bg-gray-50">

                    <div class="w-16">
                        <img class="w-full  object-cover rounded-full"
                             src="images/avatar.jpeg"
                             alt="">
                    </div>

                    <div class="flex-1">
                        <p class="text-lg text-gray-600" x-text="tab.message"></p>
                        <div class="w-full mt-2 ">
                            <p class=" text-lg font-semibold font-heading" x-text="tab.name"></p>
                            </p>
                            <p class="text-gray-500">from SA</p>
                        </div>
                    </div>
                </div>

            </template>


        </div>
    </section>
</x-default-layout>
