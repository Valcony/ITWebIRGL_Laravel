@extends('base.base')
@section('content')
<div class="flex flex-wrap items-center justify-center w-full h-screen">
    <div class="relative rounded-sm overflow-hidden bg-white w-full lg:w-2/3 xl:w-1/2 mt-11 h-3/4">
    <div class="mx-auto w-full">
        <div class="flex flex-col items-center w-full py-48">
            <!-- Profile Picture -->
            <div class="w-32 h-32 rounded-full overflow-hidden hover:shadow-lg hover:scale-110 transition duration-300">
    <img src="{{ asset('jih.jpg') }}" alt="Profile Picture" class="w-full h-full object-cover">
</div>
            <!-- Information -->
            <div class="text-center w-full mt-4">
                <!-- Name -->
                <p class="text-xl font-bold">Valerie Patricia T</p>
                <!-- ID Number -->
                <p class="text-lg text-gray-600">NRP: C14230230</p>
                <!-- Faculty -->
                <p class="text-lg text-gray-600">Jurusan: Informatika</p>
            </div>
        </div>
    </div>
    </div>
</div>


@endsection