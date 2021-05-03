<x-app-layout>
    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-20">
            <a href="{{ route('kelola') }}">{{ __('Kelola') }}</a> <a href="{{ url('kelola/informasi') }}"><span
                    class="text-gray-400">> Informasi</span></a> <span class="float-right">
                <script>
                    var hari = ["Ahad,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jumat,", "Sabtu,"];
                    document.write(hari[new Date().getDay()])

                </script>
                <script>
                    document.write(new Date().getDate())

                </script>
                <script>
                    var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
                        "September",
                        "Oktober", "November", "Desember"
                    ];
                    document.write(months[new Date().getMonth()])

                </script>
                <script>
                    document.write(new Date().getFullYear())

                </script>
            </span>
        </h2>
    </div>
    <div>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-5">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg px-4 py-4">
                <div class="flex mb-4">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <button wire:click="create()"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded mb-2">
                            Create Post
                        </button>
                        @if ($isModal)
                            @include('livewire.create')
                        @endif
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <input wire:model="search" type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-900"
                            placeholder="Search Post...">
                    </div>
                </div>



                {{-- @if (session()->has('info'))
                    <div class="bg-green-500 border-2 border-green-600 rounded-b mb-2 py-3 px-3">
                        <div>
                            <h1 class="text-white font-bold">{{ session('info') }}</h1>
                        </div>
                    </div>

                @endif

                @if (session()->has('delete'))
                    <div class="bg-red-500 border-2 border-red-600 rounded-b mb-2 py-3 px-3">
                        <div>
                            <h1 class="text-white font-bold">{{ session('delete') }}</h1>
                        </div>
                    </div>
                @endif --}}


                <table class="table-fixed w-full">
                    <thead class="bg-blue-500">
                        <tr>
                            <th class="px-4 py-2 text-white w-20">No</th>
                            <th class="px-4 py-2 text-white w-auto">Judul</th>
                            <th class="px-4 py-2 text-white w-auto">Isi</th>
                            <th class="px-4 py-2 text-white w-auto">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $key => $post)
                            <tr>
                                <td> 1 </td>
                                <td>{{ $post->judul }}</td>
                                <td>{{ $post->isi }}</td>
                                <td>
                                    <button wire:click="edit({{ $post->id }})"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">
                                        Edit
                                    </button>
                                    <button wire:click="delete({{ $post->id }})"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
