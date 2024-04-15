<x-default-layout>
    <section class="relative py-20">
        <img class="hidden lg:block absolute top-0 left-0 mt-20"
             src="{{asset('/zeus-assets/icons/dots/blue-dot-left-bars.svg')}}"
             alt="">
        <img class="hidden lg:block absolute top-0 right-0 mt-52"
             src="{{asset('/zeus-assets/icons/dots/yellow-dot-right-shield.svg')}}" alt="">
        <div class="container px-4 mx-auto">
            <div class="max-w-2xl mx-auto mb-20 text-center">
                <span class="text-xs text-blue-400 font-semibold">checkout our courses</span>
                <h2 class="mt-8 mb-10 text-4xl font-semibold font-heading">Our Courses</h2>

            </div>
            <div class="flex flex-wrap -mx-4 -mb-16">

                @foreach($courses as $course)

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
</x-default-layout>
