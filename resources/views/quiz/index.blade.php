<x-head-lay>


    <section>
        <div class="rounded-xl overflow-hidden text-end p-5">
            <a href="{{ route('quiz.create') }}">
                <button class="p-[.5rem] rounded-lg bg-[#ffffff] w-auto">Tambah</button>
            </a>
        </div>
    </section>

    <section>
        <div class="rounded-xl overflow-hidden">
            <table class="min-w-full bg-[#393E46]">
                <thead>
                    <tr>
                        <th
                            class="text-center py-2 px-4 border-b-2 border-gray-200 bg-gray-100 text-sm leading-4 text-gray-600 uppercase tracking-wider">
                            Judul Quiz</th>
                        <th
                            class="text-center py-2 px-4 border-b-2 border-gray-200 bg-gray-100 text-sm leading-4 text-gray-600 uppercase tracking-wider">
                            Kode Quiz</th>
                        <th
                            class="text-center py-2 px-4 border-b-2 border-gray-200 bg-gray-100 text-sm leading-4 text-gray-600 uppercase tracking-wider">
                            Nama Guru</th>
                        <th
                            class="text-center py-2 px-4 border-b-2 border-gray-200 bg-gray-100 text-sm leading-4 text-gray-600 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="text-white">
                    @foreach ($quiz as $kuis)

                    <tr>
                        <td class=" text-center p-6 border-b border-gray-200">{{ $kuis->quiz_judul }}</td>
                        <td class=" text-center p-6 border-b border-gray-200">{{ $kuis->quiz_code }}</td>
                        <td class=" text-center p-6 border-b border-gray-200">{{ $kuis->quiz_maker }}</td>
                        <td class=" text-center p-6 border-b border-gray-200">
                            <div class="flex gap-[1rem] justify-center">
                                <a href="{{ route('quiz.edit', $kuis->id) }}">
                                    <button class="p-[.5rem] rounded-lg bg-[#00ADB5]">Edit</button>
                                </a>

                                <form action="{{ route('quiz.destroy', $kuis->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="p-[.5rem] rounded-lg bg-[#00ADB5]">Hapus</button>
                                </form>

                                <a href="{{ route('quiz.soal.index', $kuis->id) }}">
                                    <button class="p-[.5rem] rounded-lg bg-[#00ADB5]">Lihat Soal</button>
                                </a>

                                <a href="{{ route('quiz.show', $kuis->id) }}">
                                    <button class="p-[.5rem] rounded-lg bg-[#00ADB5]">Buat Soal</button>
                                </a>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>




</x-head-lay>
