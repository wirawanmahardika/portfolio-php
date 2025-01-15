<x-layout>
    <x-slot:title>Home</x-slot:title>

    <div class="bg-black min-h-screen font-quicksand text-gray-200 overflow-hidden">
      <div class="flex flex-col gap-y-10">
        <div class="h-screen w-full">
            <x-navbar></x-navbar>
            <x-jumbotron></x-jumbotron>
        </div>
        <x-services></x-services>
        {{-- PROJECTS --}}
        <x-skill>
          @foreach ($skills as $s)
            <div class="text-center sm:text-xl">
              <img src="{{asset("storage/".$s->image)}}" alt="{{$s->name}}" class="mx-auto w-1/2 sm:w-[70%] md:w-[50%] lg:w-[40%]" />
              <p>{{$s->name}}</p>
            </div>
          @endforeach
        </x-skill>
        <x-about></x-about>
        {{-- <x-contact></x-contact> --}}
  
        <div class="hover:bg-gray-900 hover:ring-1 ring-red-500 fixed cursor-pointer text-black w-fit h-fit z-50 bottom-3 right-3 md:bottom-10 md:right-10 bg-gray-800 p-2 rounded">
          <a href="#home">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={2} stroke="white" class="w-6 h-6 ">
              <path strokeLinecap="round" strokeLinejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
            </svg>
          </a>
        </div>
      </div>
    </div>
</x-layout>