<x-login-lay>
    <div class="h-screen flex justify-center items-center">
        <div class="flex flex-row justify-center">
            <div class="bg-white/25 p-[5rem] flex-col rounded-xl">
                <div class="text-center text-[2rem] font-bold pb-[3rem] text-white">Create Account</div>

                <div class="bg-white p-[3rem] flex flex-col justify-center rounded-lg gap-[2rem] ">
                    <div>
                        <p class="text-left">Email</p>
                        <input class="rounded-lg p-[.5rem] bg-white/10 ring-2 ring-[#2B86C5] border-none outline-none"
                            type="text" id="email" required autocomplete="off">
                    </div>
                    <div>
                        <p class="text-left">Password</p>
                        <input class="rounded-lg p-[.5rem] bg-white/10 ring-2 ring-[#2B86C5] border-none outline-none"
                            type="text" id="email" required autocomplete="off">
                    </div>
                    <div
                        class="bg-slate-700 p-[1rem] text-center rounded-lg hover:bg-[#003C43] text-white cursor-pointer">
                        <a href="{{ route('home') }}">SIGN IN</a>
                    </div>
                    <p>Not have an account?<a class="hover:text-[blue]" href="{{ route('register') }}"> Register</a></p>
                </div>
            </div>
        </div>
    </div>
</x-login-lay>
