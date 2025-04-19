<style>
@keyframes fade-up {
  0% { opacity: 0; transform: translateY(20px); }
  100% { opacity: 1; transform: translateY(0); }
}

.animate-fade-up {
  animation: fade-up 0.8s ease-out forwards;
}
</style>

<section class="h-[calc(100vh-4rem)] overflow-hidden">
    <div class="w-[200%] h-full rounded-t-[50%] -translate-x-1/4 overflow-hidden">
        <div class="w-full h-full bg-no-repeat bg-inherit bg-center"
            style="background-image: url('./assets/images/hero-banner.jpg')">
            <div class="w-full h-full flex flex-col bg-beige-900/60">
                <div class="max-w-xs sm:max-w-xl mx-auto flex flex-col flex-1 justify-center text-white text-center">
                    <h1
                        class="animate-fade-up w-max mx-auto px-2 sm:px-4 text-2xl sm:text-4xl font-bold leading-10 bg-beige-600 drop-shadow-lg">
                        Coffee in Bed®
                    </h1>
                    <h2 class="hidden sm:block mt-2 text-2xl font-bold leading-8 drop-shadow-lg">
                        Cà phê trong không gian của riêng bạn
                    </h2>
                    <h3 class="mt-6 sm:text-lg text-semibold drop-shadow-lg">
                        Tận hưởng kỳ nghỉ ngắn gần nhà và dịch vụ tiêu chuẩn Nhật Bản với chi phí chỉ bằng một ly cà phê
                    </h3>
                    <a class="mt-12 text-md w-max mx-auto btn bg-white px-8 py-4 text-beige-700 hover:text-beige-600 font-bold rounded-full hover:scale-105 transition-all duration-300"
                        target="_blank" href="#">
                        Đặt không gian cho riêng bạn
                    </a>
                </div>

                <a class="mx-auto flex flex-col justify-center items-center space-y-2 sm:space-y-4 py-4 px-8 bg-beige-500/50 hover:bg-beige-500/60 rounded-t-[500px] text-white"
                    href="#spaces">
                    <div class="flex flex-col items-center -space-y-2">
                        <svg class="w-12 h-12 text-white animate-bounce [animation-delay:0.2s]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <span class="font-bold text-xs sm:text-base underline underline-offset-4 opacity-90 hover:opacity-100">
                        Xem các loại hình không gian
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>