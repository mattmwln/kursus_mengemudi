<nav class="bg-primary text-white flex items-center justify-between px-6 py-3 shadow-md">
    <!-- Left Navbar Links -->
    <div class="flex items-center space-x-6">
        <!-- Burger Menu Button for mobile -->
        <button class="text-white focus:outline-none" aria-label="Open Menu">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Home Link (Visible on larger screens) -->
        <a href="<?= base_url('/admin'); ?>" class="hidden sm:inline-block text-white hover:text-gray-300 transition duration-200">
            Home
        </a>
    </div>

    <!-- Center Navbar Branding -->
    <div class="flex-1 text-center">
        <span class="font-semibold text-xl text-yellow-300">Admin Dashboard</span>
    </div>

    <!-- Right Navbar Links -->
    <div class="flex items-center space-x-6">
        <!-- Logout Button (Danger) -->
        <a href="<?= base_url('/auth/logout'); ?>" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-md flex items-center space-x-1 transition duration-200">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </div>
</nav>
