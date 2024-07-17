<x-layout>
    <div class="flex flex-row">
        <div class="flex flex-col bg-slate-300 rounded-lg p-[2rem] gap-[3rem]">
            <div class="flex flex-col">
                <p class="font-black text-lg mb-[2rem] ">Soal No.1 Essay</p>
                <p class="text-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam repudiandae
                    dignissimos id,
                    neque cupiditate
                    atque repellendus excepturi, aspernatur omnis reiciendis dolore, iusto tempore consectetur esse.
                    Nostrum
                    deleniti debitis autem commodi?</p>
            </div>
            <div class="flex flex-col gap-[3rem]">
                <p class="font-black text-lg">Jawaban</p>
                {{-- Kalau Essay tampilkan text area --}}
                {{-- <textarea class="p-[1rem] rounded-lg" name="jawaban" id="jawaban" cols="30" rows="10"></textarea> --}}
                {{-- !!! --}}


                {{-- Kalau pilgan tampilkan opsi --}}
                <div class="flex flex-row justify-between pr-[30vw]">
                    <div class="flex flex-col gap-[2rem] ">
                        <div class="p-[1rem] rounded-lg bg-white hover:bg-gray-200 cursor-pointer">A. Ini adalah itu
                        </div>
                        <div class="p-[1rem] rounded-lg bg-white hover:bg-gray-200 cursor-pointer">B. itu adalah ini
                        </div>
                    </div>
                    <div class="flex flex-col gap-[2rem] ">
                        <div class="p-[1rem] rounded-lg bg-white hover:bg-gray-200 cursor-pointer">C. ini bukan itu
                        </div>
                        <div class="p-[1rem] rounded-lg bg-white hover:bg-gray-200 cursor-pointer">D. itu bukan ini
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-slate-400 rounded-lg p-[2rem] gap-[1rem] flex flex-col pl-[3rem]">
            <div class="bg-white rounded-[1rem] shadow-lg hover:bg-gray-200 cursor-pointer p-[1rem]">
                <p class="font-black text-lg text-nowrap">Soal 1</p>
            </div>
            <div class="bg-white rounded-[1rem] shadow-lg hover:bg-gray-200 cursor-pointer p-[1rem]">
                <p class="font-black text-lg text-nowrap">Soal 2</p>
            </div>
            <div class="bg-white rounded-[1rem] shadow-lg hover:bg-gray-200 cursor-pointer p-[1rem]">
                <p class="font-black text-lg text-nowrap">Soal 3</p>
            </div>
            <div class="bg-white rounded-[1rem] shadow-lg hover:bg-gray-200 cursor-pointer p-[1rem]">
                <p class="font-black text-lg text-nowrap">Soal 4</p>
            </div>
            <div class="bg-white rounded-[1rem] shadow-lg hover:bg-gray-200 cursor-pointer p-[1rem]">
                <p class="font-black text-lg text-nowrap">Soal 5</p>
            </div>
            <div class="bg-white rounded-[1rem] shadow-lg hover:bg-gray-200 cursor-pointer p-[1rem]">
                <p class="font-black text-lg text-nowrap">Soal 6</p>
            </div>
        </div>
    </div>
</x-layout>
