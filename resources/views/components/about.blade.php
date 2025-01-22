<div id="about">
    <div class="hidden md:grid md:grid-cols-3 p-5 gap-3 pb-0 ">
      <img
        src="/img/about.png"
        alt="my picture"
        class="h-full"
      />
      <div class="col-span-2 h-full flex items-center flex-col justify-center gap-y-4">
        <h2 class="mx-auto text-4xl font-bold mt-10">
          About Me
        </h2>
        <p class="mt-20 sm:mt-10 text-justify leading-8">{{$slot}}</p>
      </div>
    </div>

    <div
      style="background-image: url('/img/about.png')"
      class="p-5 flex flex-col items-center gap-y-4 relative z-0  min-h-screen bg-cover bg-center sm:bg-[center_top_0.5rem] sm:bg-no-repeat bg-fixed sm:text-lg md:hidden"
    >
      <h2 class="mx-auto text-4xl font-bold mt-10">
        About Me
      </h2>
      <p class="mt-20 sm:mt-10 text-justify">
        {{$slot}}
      </p>
    </div>
  </div>