<x-layout>
    <x-slot:title>Projects</x-slot:title>

    <x-navbar></x-navbar>

    <main class="bg-bgBlack min-h-screen pt-10 text-white px-20 w-full">
        <h2 class="font-semibold text-3xl text-center">Projects</h2>

        <div class="grid grid-cols-3 gap-3 p-10">
            <span class="col-span-3 font-semibold text-2xl">Websites</span>
            @foreach ($projects as $p)
                <div class="border-2 border-slate-500 rounded bg-white">
                    <img src="{{asset('storage/'.$p->image)}}" alt="image" class="border-b border-black">
                    <div class="p-3 text-black">
                        <h3 class="font-semibold text-center text-lg mb-3">{{$p->nama}}</h3>
                        <p class="mb-5">{{$p->deskripsi}}</p>

                        @if (isset($p->github) || $p->web) <span class="font-bold mt-4">View in : </span><br> @endif

                        <div class="flex gap-x-3 w-full pt-2">
                            @if (isset($p->github))
                                <a href="{{$p->github}}"><img class="size-7" src="/img/github.png"></a>
                            @endif
                            @if (isset($p->web))
                                <a href="{{$p->web}}"><img class="size-7" src="/img/internet.png"></a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-full grid grid-cols-3 gap-3">
            <span class="col-span-3 font-semibold text-2xl">APIs</span>

            <div class="flex flex-col gap-y-2 bg-slate-900 border-2 border-red-800 rounded p-5  ">
                <span class="font-bold text-center">Perpustakaan</span>
                <a class="hover:text-blue-600" href="github.com/wirawanmahardika/perpustakaan">github.com/wirawanmahardika/perpustakaan</a>
            </div>
            <div class="flex flex-col gap-y-2 bg-slate-900 border-2 border-red-800 rounded p-5  ">
                <span class="font-bold text-center">Perpustakaan</span>
                <a class="hover:text-blue-600" href="github.com/wirawanmahardika/perpustakaan">github.com/wirawanmahardika/perpustakaan</a>
            </div>
            <div class="flex flex-col gap-y-2 bg-slate-900 border-2 border-red-800 rounded p-5  ">
                <span class="font-bold text-center">Perpustakaan</span>
                <a class="hover:text-blue-600" href="github.com/wirawanmahardika/perpustakaan">github.com/wirawanmahardika/perpustakaan</a>
            </div>
        </div>


    </main>
</x-layout>