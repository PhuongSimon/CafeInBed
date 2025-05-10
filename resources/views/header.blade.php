<header class="h-16">
    <nav class="h-16 fixed w-full top-0 bg-white text-blue-900 font-bold flex items-center lg:block z-50">
        <div class="w-full mx-auto px-4 sm:px-8 flex items-center justify-between">
            <div class="flex flex-shrink-0 items-center ms-0 sm:ms-12">
                <a href="/">
                    <img class="h-12" src="{{ asset('assets/images/logo.svg') }}" alt="Logo">
                </a>
            </div>
            <div class="flex">
                <ul class="hidden lg:ml-6 lg:flex lg:items-center">
                    <li class="w-full sm:w-auto flex flex-col-reverse sm:flex-row items-start sm:items-center">
                        <a class="w-full transition-all underline-offset-4 hover:underline truncate py-4 px-4 sm:px-6 sm:py-5"
                            target="" href="#">Trang chủ</a>
                    </li>

                    <li class="w-full sm:w-auto flex flex-col-reverse sm:flex-row items-start sm:items-center">
                        <a class="w-full transition-all underline-offset-4 hover:underline truncate py-4 px-4 sm:px-6 sm:py-5"
                            target="" href="#about-us" id="about_us_link">Về chúng tôi</a>
                    </li>

                    <li class="w-full sm:w-auto flex flex-col-reverse sm:flex-row items-start sm:items-center">
                        <a class="w-full transition-all underline-offset-4 hover:underline truncate py-4 px-4 sm:px-6 sm:py-5"
                            target="" href="#spaces" id="spaces_link">Không gian</a>
                    </li>

                    <li class="w-full sm:w-auto flex flex-col-reverse sm:flex-row items-start sm:items-center">
                        <a class="w-full transition-all underline-offset-4 hover:underline truncate py-4 px-4 sm:px-6 sm:py-5"
                            target="" href="#menu">Thực đơn</a>
                    </li>

                    <li class="w-full sm:w-auto flex flex-col-reverse sm:flex-row items-start sm:items-center">
                        <a class="w-full transition-all underline-offset-4 hover:underline truncate py-4 px-4 sm:px-6 sm:py-5"
                            target="" href="#footer">Liên hệ</a>
                    </li>
                </ul>
            </div>
            <div class="hidden sm:me-12 lg:flex">
                <a target="_blank" class="text-white bg-vintage-50 hover:bg-beige-700 !py-2 !px-5 !text-sm font-bold rounded-lg" rel="noopener" href="/reservation">Đặt chỗ ngay</a>
            </div>
            <div x-data="{ open: false }" class="flex items-center lg:hidden">
                <button @click="open = !open" class="text-blue-900 focus:outline-none cursor-pointer">
                    <svg x-show="!open"
                        class="w-10 h-10 p-2 bg-yellow-500 text-white rounded"
                        fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>

                    <svg x-show="open" x-cloak 
                        class="w-10 h-10 p-2 bg-yellow-500 text-white rounded" 
                        fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <div x-show="open" x-transition class="absolute top-16 right-0 w-[80%] h-[1000px] bg-white/70 shadow-lg z-40 backdrop-blur-md cursor-pointer">
                    <ul class="flex flex-col divide-y divide-gray-300 text-right">
                        <li><a href="/" class="block px-6 py-4 hover:bg-gray-100">Trang chủ</a></li>
                        <li><a href="#" id="about_us_link" class="block px-6 py-4 hover:bg-gray-100">Về chúng tôi</a></li>
                        <li><a href="#spaces" id="spaces_link" class="block px-6 py-4 hover:bg-gray-100">Không gian</a></li>
                        <li><a href="#" class="block px-6 py-4 hover:bg-gray-100">Thức đơn</a></li>
                        <li><a href="#" class="block px-6 py-4 hover:bg-gray-100">Vị trí</a></li>
                        <li class="flex justify-between px-6 py-4">
                            <a href="/reservation" class="bg-vintage-50 hover:bg-beige-700 w-full text-center text-white font-bold text-sm px-4 py-2 rounded-lg">Đặt chỗ ngay</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>