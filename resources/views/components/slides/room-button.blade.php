<button name="button" type="button" class="group {{ $active ? 'active' : ' active-right'}} cursor-pointer" data-action="carousel#goToSlide"
    data-carousel-target="indicator" data-carousel-index-param="{{ $index }}">
    <div class="relative hidden sm:flex justify-center items-center">
        <div class="w-full grid grid-cols-2">
            <div></div>
            <hr class="border-t-4 border-beige-100 group-[.active-left]:border-blue-300">
        </div>
        <div class="absolute">
            <div
                class="block group-[.active]:hidden w-4 h-4 rounded-full bg-beige-300 group-[.active-left]:bg-blue-300 border-2 border-white">
            </div>
            <div class="hidden group-[.active]:block text-4xl md:text-6xl -scale-x-100">
                🌥
            </div>
        </div>
    </div>
    <div
        class="relative overflow-hidden w-24 sm:w-28 h-24 sm:h-28 flex justify-center items-center sm:mt-12 mx-4 sm:mx-6 p-2 sm:p-3 rounded-full bg-beige-100 group-hover:bg-blue-100 group-[.active]:bg-blue-100 opacity-60 group-hover:opacity-100 group-[.active]:opacity-100 border-2 border-transparent group-hover:border-blue-600 group-[.active]:border-blue-600">
        <div
            class="absolute w-[150%] h-[150%] rotate-45 top-[70%] bg-beige-300 group-[.active]:bg-blue-200 group-hover:bg-blue-200">
        </div>
        <img src="{{ asset('assets/images/cafe_space.svg') }}" class="w-full h-full z-0" alt="">
    </div>
    <div
        class="mt-4 text-beige-800 text-center opacity-60 group-hover:opacity-100 group-[.active]:opacity-100 group-hover:text-blue-600 group-hover:font-bold group-[.active]:text-blue-600 group-[.active]:font-bold whitespace-nowrap transition-colors">
        Café Space
    </div>
</button>
