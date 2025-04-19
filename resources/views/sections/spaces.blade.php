<div class="py-16 sm:pt-28" id="spaces">
    <div class="max-w-6xl px-4 sm:px-6 mx-auto">
        <div class="max-w-3xl w-full text-center mx-auto">
            <h2 class="mb-0 text-blue-800 font-bold text-2xl">
                Không gian ở Chidori
            </h2>
            <h3 class="mt-2 text-lg text-blue-300">
                Bạn cần bao nhiêu riêng tư, Chidori cũng có!
            </h3>
        </div>
    </div>
    <div class="overflow-hidden" data-controller="carousel" data-carousel-active-slide-value="0">
        <div class="mt-8 sm:mt-4 flex justify-center">
            <button data-carousel-target="prev" data-action="carousel#prevSlide"
                class="!hidden lg:!block btn h-min whitespace-nowrap rounded-full mt-8 !py-1 !px-3 font-bold text-blue-700 border-2 border-blue-100 text-center cursor-pointer">
                Cởi mở hơn
            </button>
            <div class="flex sm:pt-12 overflow-x-scroll no-scrollbar">
                <button name="button" type="button" class="group active cursor-pointer"
                    data-action="carousel#goToSlide" data-carousel-target="indicator" data-carousel-index-param="0">
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

                <button name="button" type="button" class="group active-right cursor-pointer"
                    data-action="carousel#goToSlide" data-carousel-target="indicator" data-carousel-index-param="1">
                    <div class="relative hidden sm:flex justify-center items-center">
                        <div class="w-full grid grid-cols-2">
                            <hr
                                class="border-t-4 border-beige-100 group-[.active]:border-blue-300 group-[.active-left]:border-blue-300">
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
                        <img src="{{ asset('assets/images/study_box.svg') }}" class="w-full h-full z-0" alt="">
                    </div>
                    <div
                        class="mt-4 text-beige-800 text-center opacity-60 group-hover:opacity-100 group-[.active]:opacity-100 group-hover:text-blue-600 group-hover:font-bold group-[.active]:text-blue-600 group-[.active]:font-bold whitespace-nowrap transition-colors">
                        Study Box
                    </div>
                </button>

                <button name="button" type="button" class="group active-right cursor-pointer"
                    data-action="carousel#goToSlide" data-carousel-target="indicator" data-carousel-index-param="2">

                    <div class="relative hidden sm:flex justify-center items-center">
                        <div class="w-full grid grid-cols-2">
                            <hr
                                class="border-t-4 border-beige-100 group-[.active]:border-blue-300 group-[.active-left]:border-blue-300">
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
                        <img src="{{ asset('assets/images/meeting_room.svg') }}" class="w-full h-full z-0"
                            alt="">
                    </div>
                    <div
                        class="mt-4 text-beige-800 text-center opacity-60 group-hover:opacity-100 group-[.active]:opacity-100 group-hover:text-blue-600 group-hover:font-bold group-[.active]:text-blue-600 group-[.active]:font-bold whitespace-nowrap transition-colors">
                        Meeting Room
                    </div>
                </button>

                <button name="button" type="button" class="group active-right cursor-pointer"
                    data-action="carousel#goToSlide" data-carousel-target="indicator" data-carousel-index-param="3">
                    <div class="relative hidden sm:flex justify-center items-center">
                        <div class="w-full grid grid-cols-2">
                            <hr
                                class="border-t-4 border-beige-100 group-[.active]:border-blue-300 group-[.active-left]:border-blue-300">
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
                        <img src="{{ asset('assets/images/spaces/level_seat.svg') }}" class="w-full h-full z-0"
                            alt="">
                    </div>
                    <div
                        class="mt-4 text-beige-800 text-center opacity-60 group-hover:opacity-100 group-[.active]:opacity-100 group-hover:text-blue-600 group-hover:font-bold group-[.active]:text-blue-600 group-[.active]:font-bold whitespace-nowrap transition-colors">
                        Level Seat
                    </div>
                </button>

                <button name="button" type="button" class="group active-right cursor-pointer"
                    data-action="carousel#goToSlide" data-carousel-target="indicator" data-carousel-index-param="4">
                    <div class="relative hidden sm:flex justify-center items-center">
                        <div class="w-full grid grid-cols-2">
                            <hr
                                class="border-t-4 border-beige-100 group-[.active]:border-blue-300 group-[.active-left]:border-blue-300">
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
                        <img src="{{ asset('assets/images/spaces/in_bed.svg') }}" class="w-full h-full z-0"
                            alt="">
                    </div>
                    <div
                        class="mt-4 text-beige-800 text-center opacity-60 group-hover:opacity-100 group-[.active]:opacity-100 group-hover:text-blue-600 group-hover:font-bold group-[.active]:text-blue-600 group-[.active]:font-bold whitespace-nowrap transition-colors">
                        Coffee in Bed
                    </div>
                </button>

                <button name="button" type="button" class="group active-right cursor-pointer"
                    data-action="carousel#goToSlide" data-carousel-target="indicator" data-carousel-index-param="5">
                    <div class="relative hidden sm:flex justify-center items-center">
                        <div class="w-full grid grid-cols-2">
                            <hr
                                class="border-t-4 border-beige-100 group-[.active]:border-blue-300 group-[.active-left]:border-blue-300">
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
                        <img src="{{ asset('assets/images/spaces/studio_bed.svg') }}" class="w-full h-full z-0"
                            alt="">
                    </div>
                    <div
                        class="mt-4 text-beige-800 text-center opacity-60 group-hover:opacity-100 group-[.active]:opacity-100 group-hover:text-blue-600 group-hover:font-bold group-[.active]:text-blue-600 group-[.active]:font-bold whitespace-nowrap transition-colors">
                        Studio Bed
                    </div>
                </button>

                <button name="button" type="button" class="group active-right cursor-pointer"
                    data-action="carousel#goToSlide" data-carousel-target="indicator" data-carousel-index-param="6">

                    <div class="relative hidden sm:flex justify-center items-center">
                        <div class="w-full grid grid-cols-2">
                            <hr
                                class="border-t-4 border-beige-100 group-[.active]:border-blue-300 group-[.active-left]:border-blue-300">
                            <div></div>
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
                        <img src="{{ asset('assets/images/spaces/private_room.svg') }}" class="w-full h-full z-0"
                            alt="">
                    </div>
                    <div
                        class="mt-4 text-beige-800 text-center opacity-60 group-hover:opacity-100 group-[.active]:opacity-100 group-hover:text-blue-600 group-hover:font-bold group-[.active]:text-blue-600 group-[.active]:font-bold whitespace-nowrap transition-colors">
                        Private Room
                    </div>
                </button>
            </div>
            <button data-carousel-target="next" data-action="carousel#nextSlide"
                class="!hidden lg:!block btn h-min whitespace-nowrap rounded-full mt-8 !py-1 !px-3 font-bold text-blue-700 border-2 border-blue-100 text-center cursor-pointer">
                Riêng tư hơn
            </button>
        </div>

        <div class="pt-10 transition-transform ease-out flex"
            style="width: 700vw; transition-duration: 1000ms; transform: translateX(0vw);"
            data-carousel-target="slideContainer">
            {{-- Slide 1 --}}
            <div class="w-screen" data-carousel-target="slide">
                <div
                    class="max-w-6xl h-max sm:h-full mx-auto px-4 flex flex-wrap-reverse sm:flex-nowrap sm:space-x-10">
                    {{-- Details --}}
                    <div class="w-full sm:w-1/2 lg:w-1/3 sm:pt-8">
                        <span class="uppercase text-blue-400 text-xs font-bold tracking-wider">Không gian</span>
                        <h4 class="text-blue-900 font-bold text-2xl">Café Space</h4>
                        <p class="mt-2">Café Space là không gian chung, không giới hạn thời gian sử dụng tại mỗi chi
                            nhánh của Chidori. Như một góc cà phê thân thuộc cho những buổi gặp mặt của bạn cùng bạn bè.
                        </p>
                        <ul class="mt-6 flex flex-wrap justify-between">
                            <li class="w-1/2 p-2 text-center text-beige-700 font-semibold text-sm">
                                <img class="h-24 w-24 mx-auto object-contain" loading="lazy"
                                    src="{{ asset('assets/images/camera.png') }}">
                                <p>Hẹn hò cùng bạn bè</p>
                            </li>
                            <li class="w-1/2 p-2 text-center text-beige-700 font-semibold text-sm">
                                <img class="h-24 w-24 mx-auto object-contain" loading="lazy"
                                    src="{{ asset('assets/images/time.png') }}">
                                <p>Sử dụng không giới hạn thời gian</p>
                            </li>

                        </ul>
                        <div class="mt-8 flex flex-col space-y-2">
                            <a class="btn bg-blue-100 hover:bg-blue-200 text-blue-700 hover:text-blue-600 rounded-full"
                                href="/vi/spaces/cafe-space/">Xem chi tiết</a>
                        </div>
                    </div>

                    {{-- Images --}}
                    <div class="w-full sm:w-1/2 lg:w-2/3 h-[70vh] sm:h-auto mx-auto">
                        <div class="grid grid-cols-2 gap-2 p-4 bg-white rounded-2xl shadow-lg">
                            <div
                                class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                                <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24"
                                    alt="Cozy cafe interior"
                                    class="w-full h-auto sm:h-[300px] object-cover hover:scale-105 transition-transform duration-300">
                            </div>

                            <!-- Image 2 -->
                            <div
                                class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085"
                                    alt="Coffee and pastries"
                                    class="w-full h-auto sm:h-[300px] object-cover hover:scale-105 transition-transform duration-300">
                            </div>

                            <!-- Image 3 -->
                            <div
                                class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                                <img src="https://images.unsplash.com/photo-1600093463592-8e36ae95ef56"
                                    alt="Barista preparing coffee"
                                    class="w-full h-auto sm:h-[300px] object-cover hover:scale-105 transition-transform duration-300">
                            </div>

                            <!-- Image 4 -->
                            <div
                                class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                                <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8"
                                    alt="Coffee shop atmosphere"
                                    class="w-full h-auto sm:h-[300px] object-cover hover:scale-105 transition-transform duration-300">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @include('components.slides.room-slide', [
                'title' => 'Study Box',
                'description' => 'Study Box là giải pháp lý tưởng cho những ai cần không gian để tập trung làm việc hoặc “chạy deadlines” mà không giới hạn thời gian. Được bố trí như những chiếc kén nhỏ riêng biệt trong không gian cafe chung, Study Box mang lại cảm giác yên tĩnh, đảm bảo tập trung cao độ nhưng vẫn giữ được sự kết nối với không khí năng động xung quanh.',
                'features' => [
                    ['icon' => asset('assets/images/camera.png'), 'text' => 'Không giới hạn thời gian sử dụng'],
                    ['icon' => asset('assets/images/time.png'), 'text' => 'Làm việc trong không gian riêng biệt'],
                    ['icon' => asset('assets/images/time.png'), 'text' => 'Thích hợp cho làm việc dài hạn và tập trung tối đa'],
                ],
                'images' => [
                    ['src' => asset('assets/images/spaces/meeting_room_1.jpg'), 'alt' => 'Meeting Room 1'],
                    ['src' => asset('assets/images/spaces/meeting_room_2.jpg'), 'alt' => 'Meeting Room 2'],
                    ['src' => asset('assets/images/spaces/meeting_room_3.jpg'), 'alt' => 'Meeting Room 3'],
                    ['src' => asset('assets/images/spaces/meeting_room_4.jpg'), 'alt' => 'Meeting Room 4'],
                ],
                'link' => '/vi/spaces/meeting-room',
            ])

            @include('components.slides.room-slide', [
                'title' => 'Meeting Room',
                'description' => 'Không gian lý tưởng cho các cuộc họp và trao đổi nhóm.',
                'features' => [
                    ['icon' => asset('assets/images/camera.png'), 'text' => 'Phù hợp cho nhóm'],
                    ['icon' => asset('assets/images/time.png'), 'text' => 'Không gian riêng tư'],
                ],
                'images' => [
                    ['src' => asset('assets/images/spaces/meeting_room_1.jpg'), 'alt' => 'Meeting Room 1'],
                    ['src' => asset('assets/images/spaces/meeting_room_2.jpg'), 'alt' => 'Meeting Room 2'],
                    ['src' => asset('assets/images/spaces/meeting_room_3.jpg'), 'alt' => 'Meeting Room 3'],
                    ['src' => asset('assets/images/spaces/meeting_room_4.jpg'), 'alt' => 'Meeting Room 4'],
                ],
                'link' => '/vi/spaces/meeting-room',
            ])


        </div>
    </div>
</div>
