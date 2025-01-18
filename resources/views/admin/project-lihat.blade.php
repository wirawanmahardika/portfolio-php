<x-admin-layout>
    <div class="w-full p-5 gap-5 overflow-y-auto flex flex-col">
        <span class="font-bold text-5xl text-center">Projects</span>

        <div class="grid grid-cols-3 gap-3 p-2">
            @foreach ($projects as $p)
                <div class="border-2 border-black rounded">
                    <img src="{{asset('storage/'.$p->image)}}" alt="image">
                    <div class="p-3 bg-white text-black">
                        <h3 class="font-semibold text-center text-lg mb-3">({{$p->id}}) {{$p->nama}}</h3>
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
    </div>
  
  </x-admin-layout>