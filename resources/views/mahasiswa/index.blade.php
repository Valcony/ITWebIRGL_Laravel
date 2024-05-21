@extends('base.base')


@section('content')
<div class="flex flex-wrap items-center justify-center w-full h-screen">
    <div class="relative rounded-md overflow-hidden bg-white w-full lg:w-2/3 xl:w-1/2 mt-11 h-3/4 overflow-y-auto">
        <h1 class="text-center text-xl font-bold mt-4">LIST MAHASISWA</h1>
        <div class="text-center mt-4 mb-4">
        <a href="{{ route('mahasiswa.input') }}" >
            <button type="button" class="inline-block rounded bg-green-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:bg-green-600 focus:bg-green-600 active:bg-green-700">
            Input</button></a>
        </div>
        <table class="min-w-full text-center text-sm font-light text-surface dark:text-white">
            <thead>
              <tr>
                <th scope="col" class="text text-black px-6 py-4">#</th>
                <th scope="col" class="text text-black px-6 py-4">Nama</th>
                <th scope="col" class="text text-black px-6 py-4">NRP</th>
                <th scope="col" class="text text-black px-6 py-4">GPA</th>
                <th scope="col" class="text text-black px-6 py-4">Semester</th>
                <th scope="col" class="text text-black px-6 py-4">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $data)
                <tr class="text text-black border-b border-neutral-200 dark:border-black/10">
                    <th scope="row" class="px-6 py-4">{{ $loop->iteration }}</th>
                    <td class="text text-black whitespace-nowrap px-6 py-4 font-medium">{{ $data->name }}</td>
                    <td class="text text-black whitespace-nowrap px-6 py-4 font-medium">{{ $data->NRP }}</td>
                    <td class="text text-black whitespace-nowrap px-6 py-4 font-medium">{{ $data->GPA }}</td>
                    <td class="text text-black whitespace-nowrap px-6 py-4 font-medium">{{ $data->semester }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ url('mahasiswa/view/' . $data->id) }}" class="inline-block rounded bg-blue-500 px-4 py-2 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-600 focus:bg-blue-600 active:bg-blue-700">Lihat</a>
                        <a href="{{ url('mahasiswa/remove/' . $data->id) }}"  onclick="return confirm('Hapus data ini?')">
                        <button type="button" class="inline-block rounded bg-red-500 px-4 py-2 text-xs font-medium uppercase leading-normal text-white shadow-md transition hover:bg-red-600 focus:outline-none active:bg-red-700">Hapus</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
</div>
@endsection
