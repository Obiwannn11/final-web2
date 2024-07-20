<x-layout>
    <div class="relative isolate px-6 pt-14 lg:px-8">
    </div>
    <div class="mx-auto max-w-2xl pt-[15dvh]">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        </div>
        <div class="text-center px-[10rem] py-[2rem] rounded-xl bg-[#D9D9D9]">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Quiz<span
                    class="font-extralight">App</span></h1>
            <p class="mt-6 text-[32px] font-black leading-8 text-gray-600 text-balance">Welcome To Our Site</p>
            <p class="mt-6 text-[32px]  leading-8 text-gray-600 text-balance">Join With Code !</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                {{-- <a href="{{ route('auth.register') }}"
                    class=" rounded-md bg-[#222831] p-[1rem] text-sm font-semibold text-white shadow-sm hover:bg-[#D9D9D9] hover:text-[#222831] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                    Up</a> --}}
                    <a href="{{ route('auth.login') }}"
                    class=" rounded-md bg-[#222831] p-[1rem] text-sm font-semibold text-white shadow-sm hover:bg-[#D9D9D9] hover:text-[#222831] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Join With Code
                    </a>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-layout>
