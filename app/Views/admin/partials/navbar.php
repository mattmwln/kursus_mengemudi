<nav class="bg-gray-800 text-white flex items-center justify-between px-6 py-3 shadow-md">
    <!-- Left Navbar Links -->
    <div class="flex items-center space-x-6 flex-wrap">
        <!-- User Image and Name (Leftmost) -->
        <div class="flex items-center space-x-2">
            <div class="image">
                <img src="<?= base_url('images/person_1.jpg'); ?>" class="rounded-full w-10 h-10 border-2 border-gray-500" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="text-sm font-medium text-gray-300">Admin Name</a>
            </div>
        </div>

        <!-- Home Link (Visible on larger screens) -->
        <a href="<?= base_url('/admin'); ?>" class="text-white hover:text-gray-300 transition duration-200">
            Home
        </a>
        <!-- Register Link -->
        <a href="<?= base_url('/admin/register'); ?>" class="text-white hover:text-gray-300 transition duration-200">
            Pendaftaran
        </a>
        <!-- Schedules Link -->
        <a href="<?= base_url('/admin/schedules'); ?>" class="text-white hover:text-gray-300 transition duration-200">
            Schedules
        </a>
        <!-- Instructors Link -->
        <a href="<?= base_url('/admin/instructors'); ?>" class="text-white hover:text-gray-300 transition duration-200">
            Instructors
        </a>
        <!-- Courses Link -->
        <a href="<?= base_url('/admin/courses'); ?>" class="text-white hover:text-gray-300 transition duration-200">
            Courses
        </a>
    </div>

    <!-- Right Navbar Links -->
    <div class="flex items-center space-x-6">
        <!-- Logout Button (Danger) -->
        <a href="<?= base_url('/auth/logout'); ?>" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-md flex items-center space-x-1 transition duration-200">
            <i class="bi bi-box-arrow-right"></i>
            <!-- <span>Logout</span> -->
        </a>
    </div>
</nav>
