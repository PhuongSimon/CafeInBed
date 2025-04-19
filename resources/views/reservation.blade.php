@extends('layouts')

@section('content')
    <div class="min-h-screen bg-[#3e261399] flex items-center justify-center px-4 py-10">
        <div class="w-full max-w-4xl bg-white/90 rounded-2xl shadow-xl p-8 space-y-8">
            <h2 class="text-3xl font-semibold text-center text-[#3e2613]">Đặt Chỗ Cafe Bed</h2>

            <form action="#" method="POST" class="space-y-8">
                @csrf

                <!-- Wrapper: Thông tin liên hệ -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Họ và tên</label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 w-full rounded-xl border border-gray-300 p-3 text-sm shadow-sm focus:border-[#3e2613] focus:ring-[#3e2613]" />
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Số điện thoại</label>
                        <input type="text" name="phone" id="phone" required
                            class="mt-1 w-full rounded-xl border border-gray-300 p-3 text-sm shadow-sm focus:border-[#3e2613] focus:ring-[#3e2613]" />
                    </div>
                </div>

                <!-- Wrapper: Thông tin đặt chỗ -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700">Dịch vụ</label>
                        <!-- Custom Select với AlpineJS - đã đồng bộ màu -->
                        <div x-data="{
                            open: false,
                            selected: null,
                            options: [
                                { value: 'cafe_bed', label: 'Cafe Bed' },
                                { value: 'nghi_ngan', label: 'Nghỉ ngắn' },
                                { value: 'lam_viec', label: 'Làm việc yên tĩnh' }
                            ],
                            toggle() { this.open = !this.open },
                            choose(option) {
                                this.selected = option
                                this.open = false
                            }
                        }" class="relative w-full">
                            <!-- Hidden real select for form submit -->
                            <input type="hidden" name="service" :value="selected ? selected.value : ''">

                            <!-- Button trigger -->
                            <div @click="toggle"
                                class="flex items-center justify-between rounded-xl border border-gray-300 p-3 text-sm shadow-sm transition focus-within:ring-2 focus-within:ring-[#3e2613] focus-within:border-[#3e2613]">
                                <span x-text="selected?.label || '-- Chọn dịch vụ --'" class="text-gray-800"></span>
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>

                            <!-- Dropdown -->
                            <ul x-show="open" @click.outside="open = false" x-transition
                                class="absolute z-10 mt-2 w-full rounded-xl border border-gray-200 bg-white shadow-xl max-h-60 overflow-auto text-sm">
                                <template x-for="option in options" :key="option.value">
                                    <li @click="choose(option)"
                                        class="cursor-pointer px-4 py-2 transition hover:bg-[#3e2613] hover:text-white"
                                        :class="{ 'bg-[#3e261310] text-[#3e2613] font-medium': selected?.value === option
                                            .value }"
                                        x-text="option.label">
                                    </li>
                                </template>
                            </ul>
                        </div>

                    </div>
                    <div>
                        <label for="hours" class="block text-sm font-medium text-gray-700">Số giờ</label>
                        <input type="number" name="hours" id="hours" min="1" required
                            class="mt-1 w-full rounded-xl border border-gray-300 p-3 text-sm shadow-sm focus:border-[#3e2613] focus:ring-[#3e2613]" />
                    </div>

                    <div>
                        <label for="date" class="block text-sm font-medium text-gray-700">Ngày đến</label>
                        <input type="date" name="date" id="date" required
                            class="mt-1 w-full rounded-xl border border-gray-300 p-3 text-sm shadow-sm focus:border-[#3e2613] focus:ring-[#3e2613]" />
                    </div>
                    <div>
                        <label for="time" class="block text-sm font-medium text-gray-700">Thời gian đến</label>
                        <input type="time" name="time" id="time" required
                            class="mt-1 w-full rounded-xl border border-gray-300 p-3 text-sm shadow-sm focus:border-[#3e2613] focus:ring-[#3e2613]" />
                    </div>

                    <div class="md:col-span-2">
                        <label for="note" class="block text-sm font-medium text-gray-700">Lời nhắn</label>
                        <textarea name="note" id="note" rows="4"
                            class="mt-1 w-full rounded-xl border border-gray-300 p-3 text-sm shadow-sm focus:border-[#3e2613] focus:ring-[#3e2613]"></textarea>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="inline-block rounded-xl bg-[#3e2613] px-6 py-3 text-white text-sm font-medium shadow-md hover:bg-[#2c1a0f] transition">
                        Đặt chỗ ngay
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
