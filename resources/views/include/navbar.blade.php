<nav class="fixed top-0 left-0 right-0 bg-gray-900 text-white z-10">
    <div class="px-5 xl:px-12 py-4 flex items-center justify-between">
        <a class="text-3xl font-bold font-heading" href="#">VPT</a>
        <!-- Hamburger Icon -->
        <button id="navbarToggle" class="md:hidden ml-auto px-4 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <!-- For smaller screens, toggle a class to show/hide the links -->
        <ul id="navbarLinks" class="md:hidden absolute top-full left-0 bg-gray-900 w-full text-center py-4 hidden">
            <li><a class="block px-4 py-2 hover:text-gray-200" href="/home">Home</a></li>
            <li><a class="block px-4 py-2 hover:text-gray-200" href="/jadwal">Jadwal</a></li>
        </ul>
        <!-- For larger screens, display the links -->
        <ul class="hidden md:flex font-semibold font-heading space-x-12">
            <li><a class="hover:text-gray-200" href="/home">Home</a></li>
            <li><a class="hover:text-gray-200" href="/jadwal">Jadwal</a></li>
        </ul>
    </div>
</nav>

<script>
    // JavaScript to toggle the dropdown when clicking on the hamburger icon
    document.getElementById('navbarToggle').addEventListener('click', function() {
        document.getElementById('navbarLinks').classList.toggle('hidden');
    });
</script>
