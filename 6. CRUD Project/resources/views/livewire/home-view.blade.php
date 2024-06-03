<div class="w-full h-full mt-56">

    <p class="text-center text-4xl uppercase underline-offset-2 decoration-black underline">Daftar Siswa, Kelas, Dan Walikelas Sekolah CoderCamp</p>

    <div class="flex m-10 justify-center">
        <table class="table-fixed border text-xl">
            <thead>
                <tr>
                    <th class="px-2 py-1">Nama</th>
                    <th class="px-2 py-1">Kelas</th>
                    <th class="px-2 py-1">Wali Kelas</th>
                    <th class="px-2 py-1">Tanggal Lahir</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($this->siswa as $siswa)
                <tbody>
                <tr class="border">
                    <td class="mx-2 my-1 p-2 border">
                        {{$siswa->nama}}
                    </td>
                    <td class="mx-2 my-1 p-2 border">
                        {{$siswa->kelas->namaKelas}}
                    </td>
                    <td class="mx-2 my-1 p-2 border">
                        @foreach($siswa->kelas->gurus as $guru)
                            {{ $guru->nama }}
                            @if (!$loop->last), @endif
                        @endforeach
                    </td>
                    <td class="mx-2 my-1 p-2 border">
                        {{$siswa->tanggalLahir}}
                    </td>
                    <td>
                        <a href="/dashboard/update/{{$siswa->id}}" class="px-3 py-2 bg-yellow-300 rounded-lg text-black font-semibold cursor-pointer">Update Siswa</a>
                        <a wire:click="deleteData({{$siswa->id}})" class="px-3 py-2 bg-red-500 rounded-lg text-white font-semibold cursor-pointer">Delete Siswa</a>
                    </td>
                </tr>
                </tbody>
            @endforeach

        </table>
    </div>
        <div class="flex m-10 justify-center">
            <a href="/dashboard/create" class="w-2/12 py-2 bg-sky-400 rounded-lg text-white text-center uppercase">Tambah Siswa</a>
        </div>





</div>
