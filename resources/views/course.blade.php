@php use Illuminate\Support\Facades\Storage; @endphp
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
                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 mt-8">
                    <dt class="text-sm font-bold text-gray-800 ">Course Files</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                        <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
                            @foreach($course->files as $file)
                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                    <div class="flex w-0 flex-1 items-center">
                                        <!-- Heroicon name: mini/paper-clip -->
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-400"
                                             xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        <span class="ml-2 w-0 flex-1 truncate">{{$file}}</span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="{{Storage::url($file)}}" download
                                           class="font-medium text-red-600 hover:text-red-500">Download</a>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </dd>
                </div>
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
