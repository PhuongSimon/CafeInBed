<div class="w-screen" data-carousel-target="slide">
    <div class="max-w-6xl  mx-auto px-4 flex flex-wrap-reverse sm:flex-nowrap sm:space-x-10 gap-6 sm:gap-0">
        {{-- Details --}}
        <div class="w-full sm:w-1/2 lg:w-1/3 sm:pt-8">
            <span class="uppercase text-blue-400 text-xs font-bold tracking-wider">Không gian</span>
            <h4 class="text-blue-900 font-bold text-2xl">{{ $title }}</h4>
            <p class="mt-2">{{ $description }}</p>
            <ul class="mt-6 flex flex-wrap justify-between">
                @foreach ($features as $feature)
                    <li class="w-1/2 p-2 text-center text-beige-700 font-semibold text-sm">
                        <img class="h-24 w-24 mx-auto object-contain" loading="lazy" src="{{ $feature['icon'] }}">
                        <p>{{ $feature['text'] }}</p>
                    </li>
                @endforeach
            </ul>
            {{-- <div class="mt-8 flex flex-col space-y-2">
                <a class="btn bg-blue-100 hover:bg-blue-200 text-blue-700 hover:text-blue-600 rounded-full"
                   href="{{ $link }}">Xem chi tiết</a>
            </div> --}}
        </div>

        {{-- Images --}}
        <div class="w-full sm:w-1/2 lg:w-2/3 h-auto mx-auto">
            <div class="grid grid-cols-2 gap-2 p-4 bg-white rounded-2xl shadow-lg">
                @foreach ($images as $image)
                    <div class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ $image['src'] }}"
                             alt="{{ $image['alt'] }}"
                             class="w-full h-[120px] sm:h-[200px] lg:h-[300px] object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
