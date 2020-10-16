<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Xác nhận email thành công') }}
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ url('/') }}">{{ __('Đến trang chủ') }}</a>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
