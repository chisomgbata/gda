@php use Illuminate\Support\Facades\Storage; @endphp
<x-default-layout>


    <section class="py-20">
        <div class="container px-4 mx-auto ">
            <div class="  flex justify-between ">
                <img class=" h-40 w-40 object-contain  rounded-lg bg-white"
                     src="{{asset(Storage::url($course['image']))}}"
                     alt="{{$course['name']}}">


            </div>

            <h1 class="mb-10 text-3xl font-semibold font-heading mt-3">{{$course['name']}}</h1>

            <div class="prose prose-slate w-full  max-w-none ">
                {!! $course['description'] !!}
            </div>


        </div>
    </section>
</x-default-layout>
