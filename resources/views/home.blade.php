<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee In Bed - Great coffee good vibes</title>
    <meta name="title" content="Coffee Break - Great coffee good vibes">
    <meta name="description" content="This is a coffee shop html template made by Hilario Junior Nengare">
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/2b35817260.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda&family=Oswald:wght@300;400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="preload" as="image" href="{{ asset('assets/images/logo.svg') }}">
</head>

<body class="relative">
    @include('header')

    <main>
        @include('sections.intro')
        @include('sections.about_us')
        @include('sections.spaces')
        @include('sections.menu')
    </main>

    @include('footer')

    <!-- Promotion Popup -->
{{-- <div id="promotion-popup" class="fixed inset-0 bg-black/60 flex items-center justify-center z-50">
    <div class="relative max-w-md w-full mx-4">
        <!-- Nút Đóng -->
        <button id="close-popup"
            class="absolute cursor-pointer -top-0 right-2 text-black text-5xl flex items-center justify-center">
            &times;
        </button>

        <!-- Ảnh + link -->
        <a href="https://example.com" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('assets/images/popup-promotion.png') }}" alt="Promotion"
                class="w-full h-auto rounded-2xl shadow-xl">
        </a>
    </div>
</div> --}}

</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const popup = document.getElementById('promotion-popup');
        const closeBtn = document.getElementById('close-popup');

        // Mở popup khi tải trang
        popup.style.display = 'flex';

        // Đóng popup khi click vào nút X
        closeBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            popup.style.display = 'none';
        });

        // Ngăn chặn đóng popup khi click ngoài vùng
        popup.addEventListener('click', function (e) {
            e.stopPropagation(); // Không làm gì cả
        });

        // Ngăn đóng khi click vào phần popup con
        popup.querySelector('a').addEventListener('click', function (e) {
            e.stopPropagation();
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</html>