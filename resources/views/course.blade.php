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
                @endif


            </div>

            <h1 class="mb-10 text-3xl font-semibold font-heading mt-3">{{$course['name']}}</h1>

            <div class="prose prose-slate w-full  max-w-none ">
                {!! $course['description'] !!}
            </div>

            @if($course->canView)

                <h2 class=" font-bold text-gray-800 text-2xl mt-5">Course Files</h2>

                <section class="mt-8 pb-16" aria-labelledby="gallery-heading">
                    <h2 id="gallery-heading" class="sr-only">Recently viewed</h2>
                    <ul role="list"
                        class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2 sm:gap-x-6 md:grid-cols-4 lg:grid-cols-2 xl:grid-cols-2 xl:gap-x-8">
                        @foreach($course->files as $file)

                            @php
                                $fileType = Str::afterLast($file, '.');


                            @endphp

                            <li class="relative">
                                <!-- Current: "ring-2 ring-offset-2 ring-indigo-500", Default: "focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500" -->
                                <div
                                    class="ring-2 ring-offset-2 ring-indigo-500 group block w-full aspect-video  rounded-lg bg-gray-100 overflow-hidden">
                                    <!-- Current: "", Default: "group-hover:opacity-75" -->

                                    {{--                                    check if type is an image--}}
                                    @if($fileType == 'jpg' || $fileType == 'jpeg' || $fileType == 'png' || $fileType == 'gif' || $fileType == 'svg')
                                        <a href="
                                        {{Storage::url($file)}}"
                                           class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for {{$file}}</span>
                                        </a>
                                        <img
                                            src="{{Storage::url($file)}}"
                                            alt=""
                                            class="object-cover  "/>
                                    @elseif($fileType == 'mp4' || $fileType == 'mov' || $fileType == 'avi' || $fileType == 'mkv' || $fileType == 'webm')
                                        <video
                                            controls
                                            src="{{Storage::url($file)}}"
                                            type="{{Storage::mimeType($file)}}"
                                            class="object-cover  "/>
                                    @endif


                                </div>

                            </li>

                        @endforeach

                    </ul>
                </section>

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
