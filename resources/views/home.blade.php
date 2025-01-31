<x-layout>
    <x-slot:title>Home</x-slot:title>

    <x-navbar></x-navbar>
    <div class="bg-bgBlack min-h-screen font-quicksand text-gray-200 overflow-hidden">
        <div class="flex flex-col gap-y-10">
            <div class="h-screen w-full bg-black relative">
                <div class=' lg:grid lg:grid-cols-2 lg:mt-10 justify-items-center'>
                    <div
                        class="w-[88%] mx-auto rounded-full bg-red-600 overflow-hidden shadow-sm shadow-slate-500 mt-3 sm:w-[60%] md:order-2">
                        <img src="/img/dika.png" alt="dika" class="w-5/6 mx-auto" />
                    </div>

                    <div class="flex flex-col p-5 lg:order-1 lg:justify-center">
                        <p class="font-medium text-lg sm:text-xl md:text-2xl mb-1">
                            <span class="text-red-600 font-quicksand">Hello</span> my name
                            is
                        </p>
                        <h1 class="font-bold text-3xl font-josefin-sans sm:text-4xl md:text-5xl -mb-1">
                            Wirawan Mahar<span class="text-red-600">dika</span>
                        </h1>
                        <p class="text-lg sm:text-xl md:text-2xl">
                            I am a <span class="text-red-600 font-quicksand">Backend </span>
                            Developer
                        </p>

                        <a href="/contact"
                            class="rounded-full transition-colors hover:bg-red-900 py-2 px-4 mt-4  w-fit bg-red-600">Contact
                            Me</a>
                    </div>
                </div>

                <div
                    class="absolute -translate-x-1/2 left-1/2 -bottom-11 rounded-full bg-neutral-900 shadow-md shadow-slate-900 p-4 flex gap-x-4 px-7">
                    <div class="rounded-full bg-orange-600 p-2">
                        <img src="/img/project.png" alt="project" class="size-10">
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="font-bold text-lg">Total Project</span>
                        <span>20</span>
                    </div>
                </div>
            </div>


            {{-- about --}}
            <div id="about">
                <div class="hidden md:grid md:grid-cols-3 p-5 gap-3 pb-0 ">
                    <img src="/img/about.png" alt="my picture" class="h-full" />
                    <div class="col-span-2 h-full flex items-center flex-col justify-center gap-y-4">
                        <h2 class="mx-auto text-4xl font-bold mt-10">
                            About Me
                        </h2>
                        <p class="mt-20 sm:mt-10 text-justify leading-8">{{ $about }}</p>
                    </div>
                </div>

                <div style="background-image: url('/img/about.png')"
                    class="p-5 flex flex-col items-center gap-y-4 relative z-0  min-h-screen bg-cover bg-center sm:bg-[center_top_0.5rem] sm:bg-no-repeat bg-fixed sm:text-lg md:hidden">
                    <h2 class="mx-auto text-4xl font-bold mt-10">
                        About Me
                    </h2>
                    <p class="mt-20 sm:mt-10 text-justify">
                        {{ $about }}
                    </p>
                </div>
            </div>

            {{-- skills --}}
            <div class="w-full flex gap-y-8 items-center flex-col p-5 min-h-screen py-20 mt-20">
                <h3 class="font-bold text-4xl uppercase">Experience</h3>
                <div class="w-full md:w-4/5 lg:w-2/3">
                    <h2 class="font-semibold text-lg">Backend Developer</h2>
                    <div class="w-full rounded-full border overflow-hidden">
                        <div class="w-[90%] h-6 pl-5 bg-gradient-to-r from-red-900 to-red-600">
                            90%
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/5 lg:w-2/3">
                    <h2 class="font-semibold text-lg">Frontend Developer</h2>

                    <div class="w-full rounded-full border overflow-hidden">
                        <div class="w-[80%] h-6 pl-5 bg-gradient-to-r from-red-900 to-red-600">
                            80%
                        </div>
                    </div>
                </div>

                <div
                    class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 justify-items-start gap-5 mt-20">
                    <span class="col-span-2 sm:col-span-3 md:col-span-4 lg:col-span-5 font-bold text-xl mx-auto">Used
                        Technologies</span>
                    @foreach ($skills as $s)
                        <div class="text-center sm:text-xl bg-zinc-900 shadow-lg shadow-slate-900 rounded p-5">
                            <img src="{{ asset('storage/' . $s->image) }}" alt="{{ $s->name }}"
                                class="mx-auto w-1/2" />
                            <p class="text-sm sm:text-base">{{ $s->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div
                class="hover:bg-gray-900 hover:ring-1 ring-red-500 fixed cursor-pointer text-black w-fit h-fit z-50 bottom-3 right-3 md:bottom-10 md:right-10 bg-gray-800 p-2 rounded">
                <a href="#home">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={2}
                        stroke="white" class="w-6 h-6 ">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</x-layout>
