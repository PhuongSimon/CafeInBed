<style>
[data-reveal] {
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.8s ease-out;
}

[data-reveal].reveal-left { transform: translateX(-20px) translateY(0); }

[data-reveal].reveal-right { transform: translateX(100px) translateY(0); }

[data-reveal].revealed {
  opacity: 1;
  transform: translate(0);
}



</style>
<section class="bg-beige-50 py-16 sm:pt-28" id="about-us">
  <div class="container max-w-6xl px-4 sm:px-6 mx-auto">
    <div class="max-w-3xl w-full text-center mx-auto">
      <h2 class="mb-4 text-2xl font-bold">
        Ở Coffee In Bed, luôn có <span class="bg-amber-300 px-1"> không gian</span> dành riêng cho bạn
      </h2>
      <p class="sm:text-lg">Giữa chốn thành thị tấp nập, không gian riêng càng trở nên xa xỉ hơn. Coffee In Bed không chỉ là
        chốn yên bình dành cho những giờ phút nghỉ ngơi, khoảng lặng để hoàn thành công việc. Mà còn là nơi thắp lên
        tình yêu, tình bạn và ghi lại những kỷ niệm đáng nhớ.</p>
    </div>
    <div class="relative lg:flex mt-12 sm:mt-16">
      <div class="absolute top-0 right-0 lg:hidden w-4/5 sm:w-3/5 h-full ml-12 opacity-20 lg:opacity-100 flex flex-col justify-center items-center">
        <img class="w-full z-2 object-cover object-center reveal-right" data-reveal loading="lazy"
          src="{{ asset('assets/images/about-banner.png') }}">
        <div class="w-4/5 -mt-[40%] aspect-[1] bg-beige-200 rounded-full">
        </div>
        <div class="w-[72%] -mt-[76%] aspect-[1] border-2 border-white rounded-full z-1">
        </div>
        <img class="w-2/3 -mt-[32%] aspect-[1] object-cover object-center rounded-full z-0 reveal-right" data-reveal loading="lazy"
          src="{{ asset('assets/images/about_us_4.jpg') }}">
        <div class="w-3/5 -mt-[55%] -ml-[15%] aspect-[1] border border-beige-500 rounded-full">
        </div>
      </div>

      <div class="relative lg:w-2/5">
        <h4 class="text-lg sm:text-xl font-bold">Để giữ một góc nhỏ tại Coffee In Bed cho riêng bạn...</h4>
        <ul class="p-0 mt-8 sm:mt-16 flex flex-col space-y-12">
          <li class="flex items-start space-x-6 reveal-left" data-reveal>
            <div class="relative text-5xl font-bold text-beige-200">
              <div class="w-10 sm:w-12 h-4 sm:h-5"></div>
              <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-b-full bg-beige-200"></div>
              <div class="absolute top-0 w-full flex items-center justify-center">
                <h6 class="text-4xl sm:text-5xl text-beige-700">1</h6>
              </div>
            </div>
            <div>
              <h4 class="m-0 text-lg sm:text-xl font-bold text-beige-700">Chọn không gian yêu thích</h4>
              <p class="mt-2">Nhiều không gian được thiết kế cho các nhu cầu và mức độ riêng tư khác nhau.</p>
            </div>
          </li>
          <li class="flex items-start space-x-6 reveal-left" data-reveal>
            <div class="relative text-5xl font-bold text-beige-200">
              <div class="w-10 sm:w-12 h-4 sm:h-5"></div>
              <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-b-full bg-beige-200"></div>
              <div class="absolute top-0 w-full flex items-center justify-center">
                <h6 class="text-4xl sm:text-5xl text-beige-700">2</h6>
              </div>
            </div>
            <div>
              <h4 class="m-0 text-lg sm:text-xl font-bold text-beige-700">Đặt trọn thời gian “ẩn mình”</h4>
              <p class="mt-2">Dù chỉ để chợp mắt nghỉ trưa một chút, hay trú ẩn cả ngày dài, Coffee In Bed đều có combo phù
                hợp cho bạn.</p>
            </div>
          </li>
          <li class="flex items-start space-x-6 reveal-left" data-reveal>
            <div class="relative text-5xl font-bold text-beige-200">
              <div class="w-10 sm:w-12 h-4 sm:h-5"></div>
              <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-b-full bg-beige-200"></div>
              <div class="absolute top-0 w-full flex items-center justify-center">
                <h6 class="text-4xl sm:text-5xl text-beige-700">3</h6>
              </div>
            </div>
            <div>
              <h4 class="m-0 text-lg sm:text-xl font-bold text-beige-700">Thưởng thức trà ngon, bánh ngọt</h4>
              <p class="mt-2">Tất cả trà sử dụng tại Coffee In Bed (Sencha, Hojicha, Genmaicha) được tuyển chọn và nhập khẩu
                trực tiếp từ những nông trại trà lâu đời Nhật Bản, giữ nguyên hương vị nguyên bản 1000 năm tuổi đến với
                khách hàng.</p>
              <a class="text-beige-700 hover:text-beige-600 font-bold underline underline-offset-4 opacity-90 hover:opacity-100"
                href="#" target="_blank">
                Xem trước menu
              </a>
            </div>
          </li>
          <li class="flex items-start space-x-6 reveal-left" data-reveal>
            <div class="relative text-5xl font-bold text-beige-200">
              <div class="w-10 sm:w-12 h-4 sm:h-5"></div>
              <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-b-full bg-beige-200"></div>
              <div class="absolute top-0 w-full flex items-center justify-center">
                <h6 class="text-4xl sm:text-5xl text-beige-700">4</h6>
              </div>
            </div>
            <div>
              <h4 class="m-0 text-lg sm:text-xl font-bold text-beige-700">Trải nghiệm dịch vụ tiêu chuẩn Nhật Bản</h4>
              <p class="mt-2">Áp dụng triết lý Omotenashi Nhật Bản, Coffee In Bed cung cấp dịch vụ bằng lòng chân thành, quan
                tâm từ những điều nhỏ nhưng tinh tế để khách hàng cảm nhận được tiếp đón với sự chu đáo trên cả mong
                đợi.</p>
            </div>
          </li>
        </ul>
        <div class="flex justify-center">
          <a target="_blank" class="btn text-white bg-vintage-50 hover:bg-beige-700 font-bold mt-20 rounded-full text-xl py-3.5 px-8"
            rel="noopener" href="/reservation">Đặt chỗ trước</a>
        </div>
      </div>

      <div class="hidden sm:w-3/5 h-full lg:flex flex-col justify-center items-center ml-12 opacity-100 z-0">
        <img class="w-full z-2 object-cover object-center reveal-right" data-reveal loading="lazy"
          src="{{ asset('assets/images/about-banner.png') }}">
        <div class="w-4/5 -mt-[40%] aspect-[1] bg-beige-200 rounded-full">
        </div>
        <div class="w-[72%] -mt-[76%] aspect-[1] border-2 border-white rounded-full z-1">
        </div>
        <img class="w-2/3 -mt-[32%] aspect-[1] object-cover object-center rounded-full z-0 reveal-right" data-reveal loading="lazy"
          src="{{ asset('assets/images/about_us_4.jpg') }}">
        <div class="w-3/5 -mt-[55%] -ml-[15%] aspect-[1] border border-beige-500 rounded-full">
        </div>
      </div>
    </div>
  </div>
</section>
<script>

const revealElements = document.querySelectorAll("[data-reveal]");

const revealOnScroll = function () {
  for (let i = 0; i < revealElements.length; i++) {
    // add revealed class on element, when visible in window
    if (revealElements[i].getBoundingClientRect().top < window.innerHeight / 1.1) {
      revealElements[i].classList.add("revealed");

      // remove long transition from button, after 1 second
      if (revealElements[i].classList.contains("btn")) {
        setTimeout(function () {
          revealElements[i].style.transition = "0.25s ease";
        }, 1000);
      }
    }

  }
}

window.addEventListener("scroll", revealOnScroll);

revealOnScroll();
</script>