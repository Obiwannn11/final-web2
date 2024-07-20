<x-login-lay>
    <div class="h-screen flex justify-center items-center">
        <div class="flex flex-row justify-center mt-[4rem] mr-[3rem]">
            <div class="bg-white/25 p-[5rem] flex-col rounded-xl">
                <div class="text-center text-[2rem] font-bold pb-[3rem] text-white">Create Account</div>

                <form action="{{ route('auth.login') }}" method="POST">
                    @csrf
                <div class="bg-white p-[3rem] flex flex-col justify-center rounded-lg gap-[2rem] ">
                    <div>
                        <p class="text-left">Email</p>
                        <input class="rounded-lg p-[.5rem] bg-white/10 ring-2 ring-[#2B86C5] border-none outline-none"
                            type="text" name="email" id="email" required autocomplete="off">
                    </div>
                    <div>
                        <p class="text-left">Password</p>
                        <input class="rounded-lg p-[.5rem] bg-white/10 ring-2 ring-[#2B86C5] border-none outline-none"
                            type="password" name="password" id="email" required autocomplete="off">
                    </div>
                    <div
                        class="bg-slate-700 p-[1rem] text-center rounded-lg hover:bg-[#003C43] text-white cursor-pointer" type="submit">
                        <button type="submit">
                            Login
                        </button>
                    </div>
                </form>

                    <p>Belum punya akun?<a class="hover:text-[blue]" href="{{ route('auth.register') }}"> Buat Akun</a></p>
                </div>
            </div>
        </div>
    </div>
</x-login-lay>
