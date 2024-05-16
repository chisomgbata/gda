@php use Illuminate\Support\Facades\Storage;use Illuminate\Support\Str; @endphp
<x-default-layout>


    <section class="py-20">
        <div class="container px-4 mx-auto ">
            <div class="  flex justify-between ">
                <img class=" h-40 w-40 object-contain  rounded-lg bg-white"
                     src="{{asset(Storage::url($course['image']))}}"
                     alt="{{$course['name']}}">

                @if(!$course->canView)
                    <div class="hidden lg:block"><a
                            class="inline-block py-3 px-8 text-sm leading-normal font-medium bg-red-50 hover:bg-red-100 text-red-500 rounded transition duration-200"
                            href="{{route('register')}}">Get Course</a></div>
                @else

                @endif


            </div>

            <h1 class="mb-10 text-3xl font-semibold font-heading mt-3">{{$course['name']}}</h1>

            <div class="prose prose-slate w-full  max-w-none ">
                {!! $course['description'] !!}
            </div>

            @if($course->canView)

                <a href="{{route('showCourse', [$course])}}"
                   class="inline-block py-3 px-8 text-sm leading-normal font-medium bg-red-50 hover:bg-red-100 text-red-500 rounded transition duration-200 mt-8"
                >
                    View Course
                </a>

            @else

                <div class="w-full h-60 bg-white grid place-items-center shadow-lg shadow-red-200 rounded-md mt-8">
                    <div class="flex flex-col items-center"><p>
                            You need to buy this course to access the course files
                        </p>
                        <div class="hidden lg:block mt-3"><a
                                class="inline-block py-3 px-8 text-sm leading-normal font-medium bg-red-50 hover:bg-red-100 text-red-500 rounded transition duration-200"
                                href="{{route('register')}}">Get Course</a></div>
                    </div>
                </div>

                {{--                Pay button to access files--}}

            @endif


        </div>
    </section>
</x-default-layout>
