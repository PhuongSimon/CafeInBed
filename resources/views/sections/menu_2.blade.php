<section id="menu" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-blue-900 mb-4">Thực đơn của chúng tôi</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Khám phá hương vị tuyệt vời từ những món đồ uống và món ăn được chế biến tinh tế</p>
        </div>

        <img src="{{ asset('assets/images/menu_katinat.png') }}" alt="">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Column 1 -->
            <div class="space-y-6">
                {{-- <div class="bg-white rounded-lg shadow-md overflow-hidden"> --}}
                    {{-- <img src="{{ asset('assets/images/menu/coffee-1.jpg') }}" alt="Cà phê đen" class="w-full h-48 object-cover"> --}}
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-md font-bold">Dừa tươi</h3>
                            <h3 class="text-md font-normal italic">Fresh coconut</h3>
                        </div>
                        <p class="font-semibold mt-2">27</p>
                    </div>
                {{-- </div> --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('assets/images/menu/coffee-2.jpg') }}" alt="Cappuccino" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-blue-900">Cappuccino</h3>
                        <p class="text-yellow-600 font-bold mt-2">55.000đ</p>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('assets/images/menu/coffee-3.jpg') }}" alt="Latte" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-blue-900">Latte</h3>
                        <p class="text-yellow-600 font-bold mt-2">55.000đ</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('assets/images/menu/coffee-4.jpg') }}" alt="Mocha" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-blue-900">Mocha</h3>
                        <p class="text-yellow-600 font-bold mt-2">60.000đ</p>
                    </div>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('assets/images/menu/tea-1.jpg') }}" alt="Trà đào" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-blue-900">Trà đào</h3>
                        <p class="text-yellow-600 font-bold mt-2">45.000đ</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('assets/images/menu/tea-2.jpg') }}" alt="Trà vải" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-blue-900">Trà vải</h3>
                        <p class="text-yellow-600 font-bold mt-2">45.000đ</p>
                    </div>
                </div>
            </div>

            <!-- Column 4 -->
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('assets/images/menu/cake-1.jpg') }}" alt="Bánh ngọt" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-blue-900">Bánh ngọt</h3>
                        <p class="text-yellow-600 font-bold mt-2">35.000đ</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('assets/images/menu/cake-2.jpg') }}" alt="Bánh mì sandwich" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-blue-900">Bánh mì sandwich</h3>
                        <p class="text-yellow-600 font-bold mt-2">45.000đ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 