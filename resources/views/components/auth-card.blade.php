<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 bg-base-300 sm:pt-0">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md bg-base-100 mt-6 px-6 py-4 shadow-xl overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
