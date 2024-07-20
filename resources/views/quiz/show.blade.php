
<section>
        <x-head-lay>
            <div class="flex flex-col justify-center bg-white p-12 rounded-xl mb-[5rem] ">
                <div class="flex flex-col gap-4">
                    {{-- <h1 class="text-[3rem]">INFO</h1> --}}
                <h1 class="font-black">Judul : {{ $quiz->quiz_judul }}</h1>
                <h1 class="font-black">Code : {{ $quiz->quiz_code }}</h1>
                <h2 class="font-black">Dibuat Oleh : {{ $quiz->quiz_maker }}</h2>
                </div>
                <div>

                </div>
            </div>
        <div class="rounded-xl overflow-hidden text-center">
            <table class="min-w-full bg-[#393E46]">
                <thead>
                    <tr>
                        <th
                            class="text-center py-2 px-4 border-b-2 border-gray-200 bg-gray-100 text-sm leading-4 text-gray-600 uppercase tracking-wider">
                            Question</th>
                        <th
                            class="text-center py-2 px-4 border-b-2 border-gray-200 bg-gray-100 text-sm leading-4 text-gray-600 uppercase tracking-wider">
                            Answer</th>
                        <th
                            class="text-center py-2 px-4 border-b-2 border-gray-200 bg-gray-100 text-sm leading-4 text-gray-600 uppercase tracking-wider">
                            Add/Delete
                        </th>
                    </tr>
                </thead>
                <tbody class="text-white">
                    <tr>
                        <td class="text-center p-6 border-b border-gray-200">apakah ini?</td>
                        <td class="text-center p-6 border-b border-gray-200">ini adalah itu</td>
                        <td class="text-center p-6 border-b border-gray-200">
                            <div class="flex justify-center gap-[1rem]">
                                <button class="p-[.5rem] rounded-lg bg-[#00ADB5] ">Add</button>
                                <button class="p-[.5rem] rounded-lg bg-[#00ADB5]">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-6 border-b border-gray-200">apakah ini?</td>
                        <td class="p-6 border-b border-gray-200">ini adalah itu</td>
                        <td class="p-6 border-b border-gray-200">
                            <div class="flex justify-center gap-[1rem]">
                                <button class="p-[.5rem] rounded-lg bg-[#00ADB5]">Add</button>
                                <button class="p-[.5rem] rounded-lg bg-[#00ADB5]">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-6 border-b border-gray-200">apakah ini?</td>
                        <td class="p-6 border-b border-gray-200">ini adalah itu</td>
                        <td class="p-6 border-b border-gray-200">
                            <div class="flex justify-center gap-[1rem]">
                                <button class="p-[.5rem] rounded-lg bg-[#00ADB5]">Add</button>
                                <button class="p-[.5rem] rounded-lg bg-[#00ADB5]">Delete</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-head-lay>
