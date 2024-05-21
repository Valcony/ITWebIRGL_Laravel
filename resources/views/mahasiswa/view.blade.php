{{-- Using base layout base.blade --}}
@extends('base.base')

{{-- Section content -> yield content base.blade --}}
@section('content')
    <div class="flex flex-wrap items-center justify-center w-full h-screen">
        <div class="relative rounded-sm overflow-hidden bg-white w-full lg:w-2/3 xl:w-1/2 mt-11 h-3/4 overflow-y-auto">
        <div class="flex justify-start p-3 pt-2">
        <a href="{{ route('mahasiswa.index') }}"><button type="button" type="submit" class="inline-block rounded border-2 border-neutral-800 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-800 transition duration-150 ease-in-out hover:border-neutral-700 hover:bg-neutral-100 hover:text-neutral-100 focus:border-neutral-700 focus:bg-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-800 active:text-neutral-800 motion-reduce:transition-none dark:text-neutral-600 dark:hover:bg-neutral-900 dark:focus:bg-neutral-900">Back</button></a>
        </div>
            <h1 class="text font-bold text-xl text-center pt-5">Input Mahasiswa</h1>
        
            <form action="{{ route('mahasiswa.simpan') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id ?? '' }}">
                <table class="w-full border-collapse">
                    <tr>
                        <td class="p-4"><label for="name">Name:</label></td>
                        <td class="p-4"><input type="text" id="name" name="name" value="{{ $data->name ?? '' }}" required class="w-full p-2 border rounded border-black"></td>
                    </tr>
                    <tr>
                        <td class="p-4"><label for="NRP">NRP:</label></td>
                        <td class="p-4"><input type="text" id="NRP" name="NRP" value="{{ $data->NRP ?? '' }}" required class="w-full p-2 border rounded border-black"></td>
                    </tr>
                    <tr>
                        <td class="p-4"><label for="GPA">GPA:</label></td>
                        <td class="p-4"><input type="number" id="GPA" name="GPA" value="{{ $data->GPA ?? '' }}" step="0.01" min="0" max="4" required class="w-full p-2 border rounded border-black"></td>
                    </tr>
                    <tr>
                        <td class="p-4"><label for="semester">Semester:</label></td>
                        <td class="p-4"><input type="number" id="semester" name="semester" value="{{ $data->semester ?? '' }}" min="1" max="14" required class="w-full p-2 border rounded border-black"></td>
                    </tr>
                </table>
                <div class="flex justify-center p-3 pt-20">
                <button type="submit" class="inline-block rounded bg-neutral-800 px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-neutral-50 shadow-dark-3 transition duration-150 ease-in-out hover:bg-neutral-700 hover:shadow-dark-2 focus:bg-neutral-700 focus:shadow-dark-2 focus:outline-none focus:ring-0 active:bg-neutral-900 active:shadow-dark-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">Save</button>
                </div>
            </form> 
        </div>
    </div>
@endsection
