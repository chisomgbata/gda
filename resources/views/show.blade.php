<x-default-layout>

    @if($currentPage)
        <h1 class="text-3xl font-bold ">
            {{$course->name}}
        </h1>
        <div class="flex flex-col lg:flex-row gap-3  mt-6 px-2">

            <aside class="w-full  lg:w-1/4 bg-gray-50 py-5 px-4 rounded-lg min-h-20">
                <h2 class="mb-2 text-xs text-gray-600">
                    Course Topics
                </h2>
                <ul class="flex flex-col gap-2 w-full">

                    @foreach($course->pages as $page)
                        <li class="w-full ">

                            <a href="{{route('showCourse', [$course, $loop->index + 1])}}"
                               class="

                           {{ $currentPage['id'] == $page['id'] ? 'bg-indigo-600 text-white' : ' text-gray-800' }}

                         block w-full p-2 rounded-lg"
                            >
                                {{$page->title}}
                            </a>
                        </li>

                    @endforeach
                </ul>

            </aside>
            <main class="flex-1 ml-4">
                <h1 class="text-2xl font-bold">
                    {{$currentPage['title']}}
                </h1>
                @if($currentPage['media_url'])

                    <div class="w-full  aspect-video mt-6 rounded-xl overflow-clip">

                        <video controls class="w-full h-full rounded-lg">
                            <source src="{{asset(Storage::url($currentPage['media_url']))}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>


                    </div>
                @endif

                @if($currentPage['images'])
                    <div class="grid lg:grid-cols-4 grid-cols-3 gap-2 mt-6">
                        @foreach($currentPage['images'] as $image)
                            <a href="{{asset(Storage::url($image))}}" target="_blank">
                                <img src="{{asset(Storage::url($image))}}" alt=""
                                     class=" rounded-lg aspect-square object-cover">
                            </a>

                        @endforeach

                    </div>
                @endif


                <p class="mt-8 prose prose-slate">
                    {!! $currentPage['content'] !!}
                </p>

                @if($currentPage['additional_files'])
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5  mt-8">
                        <dt class="text-md font-medium text-gray-800">Additional Files</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">

                                @foreach($currentPage['additional_files'] as $file)
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
                                            <a href="{{asset(Storage::url($file))}}"
                                               download
                                               class="font-medium text-indigo-600 hover:text-indigo-500">
                                                Download
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </dd>
                    </div>

                @endif


            </main>
        </div>
    @else
        <div>
            <p>This Course currently has no topics</p>
            <a href="/courses">
                Go Back
            </a>
        </div>
    @endif

</x-default-layout>
