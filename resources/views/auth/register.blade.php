<x-login-lay>
        <div class="h-screen flex justify-center items-center">
            <div class="flex flex-row justify-center">
                <div class="bg-white/25 p-[5rem] flex-col rounded-xl">
                    <div class="text-center text-[2rem] font-bold pb-[3rem] text-white">Create Account</div>

                    <form method="POST" action="{{ route('auth.register') }}" class="bg-white p-[3rem] flex flex-col justify-center rounded-lg gap-[2rem] ">
                        @csrf
                        <div>
                            <p class="text-left">Nama</p>
                            <input
                                class="rounded-lg p-[.5rem] bg-white/10 ring-2 ring-[#2B86C5] border-none outline-none"
                                type="text" name="nama" id="name" required autocomplete="off">
                        </div>
                        <div>
                            <p class="text-left">Email</p>
                            <input
                                class="rounded-lg p-[.5rem] bg-white/10 ring-2 ring-[#2B86C5] border-none outline-none"
                                type="text" name="email" id="email" required autocomplete="off">
                        </div>
                        <div>
                            <p class="text-left">Password</p>
                            <input
                                class="rounded-lg p-[.5rem] bg-white/10 ring-2 ring-[#2B86C5] border-none outline-none"
                                type="text" name="password" id="email" required autocomplete="off">
                        </div>
                        <div
                            class="bg-[#222831] p-[1rem] text-center rounded-lg hover:bg-[#00ADB5] text-white cursor-pointer">

                            <button type="submit" href="{{ route('auth.register') }}">Create</button>
                        </div>
                        <p>Sudah Punya Akun?<a class="hover:text-[#00ADB5]" href="{{ route('auth.login') }}"> Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

</x-login-lay>
