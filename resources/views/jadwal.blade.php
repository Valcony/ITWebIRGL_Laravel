@extends('base.base')
@section('content')
<div class="flex flex-wrap items-center justify-center w-full h-screen">
    <div class="relative rounded-sm overflow-hidden bg-white w-full xl:w-5/6 mt-11 xl:h-5/6 overflow-y-auto">
        <h1 class="pt-5 text-center text-5xl font-semibold font-sans">{{ $title }}</h1>
        <div class="m-5 flex flex-wrap justify-center gap-4">
            <!-- Senin -->
            <div class="w-full max-w-[18rem] rounded-lg bg-black text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white hover:shadow-lg hover:scale-110 transition duration-300">
                <div class="border-b-2 border-neutral-500 border-opacity-100 p-4 dark:border-white/10 text-center">
                    Senin
                </div>
                <ul class="grid grid-cols-1 gap-4">
                    <li class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10">
                        08:30-10.30     PBO
                    </li>
                </ul>
            </div>
            <!-- Selasa -->
            <div class="w-full max-w-[18rem] rounded-lg bg-black text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white hover:shadow-lg hover:scale-110 transition duration-300">
                <div class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10 text-center">
                    Selasa
                </div>
                <ul class="grid grid-cols-1 gap-4">
                    <li class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10">
                        08.30-10.30     Basis Data
                    </li>
                    <li class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10">
                        13.30-15.30     Jaringan Komputer
                    </li>
                </ul>
            </div>
            <!-- Rabu -->
            <div class="w-full max-w-[18rem] rounded-lg bg-black text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white hover:shadow-lg hover:scale-110 transition duration-300">
                <div class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10 text-center">
                    Rabu
                </div>
                <ul class="grid grid-cols-1 gap-4">
                    <li class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10">
                        07.30-10.30     Matematika Diskrit
                    </li>
                    <li class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10">
                        13.30-15.30     Statistika Dasar
                    </li>
                </ul>
            </div>
            <!-- Kamis -->
            <div class="w-full max-w-[18rem] rounded-lg bg-black text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white hover:shadow-lg hover:scale-110 transition duration-300">
                <div class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10 text-center">
                    Kamis
                </div>
                <ul class="grid grid-cols-1 gap-4">
                    <li class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10">
                        07.30-10.30     Praktikum PBO
                    </li>
                    <li class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10">
                        10.30-13.30     Praktikum BD
                    </li>
                    <li class="p-4">14.30-17.30     Komunikasi Interpersonal</li>
                </ul>
            </div>
            <!-- Jumat -->
            <div class="w-full max-w-[18rem] rounded-lg bg-black text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white hover:shadow-lg hover:scale-110 transition duration-300">
                <div class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10 text-center">
                    Jumat
                </div>
                <ul class="grid grid-cols-1 gap-4">
                    <li class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10">
                        07.30-10.30     Praktikum Statdas
                    </li>
                    <li class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10">
                        12.30-14.30     UKM
                    </li>
                    <li class="p-4">14.30-16.30     Pancasila</li>
                </ul>
            </div>
            <!-- Sabtu -->
            <div class="w-full max-w-[18rem] rounded-lg bg-black text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white hover:shadow-lg hover:scale-110 transition duration-300">
                <div class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10 text-center">
                    Sabtu
                </div>
                <ul class="grid grid-cols-1 gap-4">
                    <li class="border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-white/10">
                        Gaada Kelas :]
                    </li>
            
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection
