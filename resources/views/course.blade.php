@php use Illuminate\Support\Facades\Storage; @endphp
<x-default-layout>


    <section class="py-20">
        <div class="container px-4 mx-auto ">
            <div class="  flex justify-between ">
                <img class=" h-40 w-40 object-contain  rounded-lg bg-white"
                     src="{{asset(Storage::url($course['image']))}}"
                     alt="{{$course['name']}}">

                @if($course->canView)
                    <div class="hidden lg:block"><a
                            class="inline-block py-3 px-8 text-sm leading-normal font-medium bg-red-50 hover:bg-red-100 text-red-500 rounded transition duration-200"
                            href="{{route('register')}}">View Course</a></div>
                @else
                    <div class="hidden lg:block"><a
                            class="inline-block py-3 px-8 text-sm leading-normal font-medium bg-red-50 hover:bg-red-100 text-red-500 rounded transition duration-200"
                            href="{{route('register')}}">Get Course</a></div>
                @endif


            </div>

            <h1 class="mb-10 text-3xl font-semibold font-heading mt-3">{{$course['name']}}</h1>

            <div class="prose prose-slate w-full  max-w-none ">
                {!! $course['description'] !!}
            </div>


        </div>
    </section>
</x-default-layout>
