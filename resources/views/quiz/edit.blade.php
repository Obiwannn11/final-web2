
<x-head-lay>

    <section class="flex justify-center">
        <div class="rounded-xl overflow-hidden">
            <table class="min-w-fit bg-[#393E46]">
                <thead>
                    <tr>
                        <th
                            class="text-center py-2 px-4 border-b-2 border-gray-200 bg-gray-100 text-sm leading-4 text-gray-600 uppercase tracking-wider">
                            Tambah Quiz</th>

                    </tr>
                </thead>
                <tbody class="text-white">
                    <form action="{{ route('quiz.update', $quiz->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                    <tr>
                        <td class="text-center p-5 border-b border-gray-200">
                            <label for="quiz_judul" class="form-label">Judul :</label><br>
                            <input type="text" class="form-control rounded-lg text-black" id="title" name="quiz_judul" value="{{ $quiz->quiz_judul }}">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center p-5 border-b border-gray-200">
                            <label for="quiz_code" class="form-label">Token :</label> <br>
                            <input type="number" class="form-control rounded-lg  text-black" id="quiz_code" name="quiz_code" value="{{ $quiz->quiz_code }}">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center p-5 border-b border-gray-200">
                            <label for="quiz_maker" class="form-label">Pembuat :</label> <br>
                            <input type="text" class="form-control rounded-lg text-black" id="quiz_maker" name="quiz_maker" value="{{ $quiz->quiz_maker }}">

                        </td>
                    </tr>
                    <tr>
                        <td class="text-center p-5 border-b border-gray-200">
                            <button type="submit" class="w-44 p-[.5rem] rounded-lg bg-[#00ADB5]">Update</button>

                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </section>

</x-head-lay>


