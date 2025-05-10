<style>
    @keyframes fade-up {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    
    .animate-fade-up {
      opacity: 0;
      animation: fade-up 0.8s ease-out forwards;
    }
    
    .animate-fade-up:nth-child(1) {
      animation-delay: 0s;
    }
    .animate-fade-up:nth-child(2) {
      animation-delay: 0.2s;
    }
    .animate-fade-up:nth-child(3) {
      animation-delay: 0.4s;
    }
    .animate-fade-up:nth-child(4) {
      animation-delay: 0.8s;
    }
</style>


<section class="h-[calc(100vh-4rem)] overflow-hidden">
    <div class="w-[200%] h-full -translate-x-1/4 overflow-hidden">
        <div class="w-full h-full bg-no-repeat bg-inherit bg-center responsive-bg"
             style="background-image: url('./assets/images/home-1-slider-image-1.jpg')">
            <div class="w-full h-full flex flex-col">
                <div class="relative max-w-xs sm:max-w-xl mx-auto flex flex-col flex-1 justify-start mt-16 sm:justify-center sm:mt-0 text-white text-center">
                    <h1
                        class="animate-fade-up title-intro">
                        Coffee in Bed
                    </h1>
                    <h2 class="animate-fade-up hidden sm:block mt-2 text-2xl font-bold leading-8 drop-shadow-lg">
                        Cà phê – Không gian – Riêng tư
                    </h2>
                    <h3 class="animate-fade-up mt-6 sm:text-lg text-semibold drop-shadow-lg">
                        Thoát khỏi nhịp sống vội vã, tận hưởng khoảng lặng của riêng bạn trong không gian yên tĩnh, riêng tư.
                    </h3>
                    <a class="animate-fade-up mt-12 text-md w-max mx-auto btn bg-vintage-50 px-8 py-4 text-white font-bold rounded-full hover:scale-105 transition-all duration-300"
                        target="_blank" href="/reservation">
                        Đặt không gian cho riêng bạn
                    </a>
                    {{-- <a class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-max bg-blue-500 text-white px-4 py-2 rounded"> --}}
                    <a class="absolute bottom-36 sm:bottom-0 left-1/2 -translate-x-1/2" href="#about-us">
                        <div class="flex flex-col items-center -space-y-4">
                            <svg class="w-12 h-12 text-white animate-bounce [animation-delay:0.2s]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>