<aside class="bg-gray-800 text-white w-64 min-h-screen shadow-md">
    <!-- Brand Logo -->
    <a href="<?= base_url('/admin'); ?>" class="flex items-center justify-center space-x-2 p-4">
        <img src="<?= base_url('adminlte/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="rounded-full w-12 h-12 opacity-80">
        <span class="font-semibold text-lg text-yellow-400">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="px-4 py-2">
        <!-- User Panel (Optional) -->
        <div class="user-panel flex items-center space-x-3 mb-6">
            <div class="image">
                <img src="<?= base_url('adminlte/dist/img/user2-160x160.jpg'); ?>" class="rounded-full w-10 h-10 border-2 border-gray-500" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="text-sm font-medium text-gray-300">Admin Name</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav>
            <ul class="space-y-2">
                <li>
                    <a href="<?= base_url('/admin'); ?>" class="flex items-center space-x-2 p-2 rounded-md text-gray-200 hover:bg-blue-700 hover:text-white">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('/admin/users'); ?>" class="flex items-center space-x-2 p-2 rounded-md text-gray-200 hover:bg-blue-700 hover:text-white">
                        <i class="fas fa-users"></i>
                        <span>Pendaftaran</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('/admin/courses'); ?>" class="flex items-center space-x-2 p-2 rounded-md text-gray-200 hover:bg-blue-700 hover:text-white">
                        <i class="fas fa-book"></i>
                        <span>Kursus</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('/admin/instructors'); ?>" class="flex items-center space-x-2 p-2 rounded-md text-gray-200 hover:bg-blue-700 hover:text-white">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Instruktur</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('/admin/schedules'); ?>" class="flex items-center space-x-2 p-2 rounded-md text-gray-200 hover:bg-blue-700 hover:text-white">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Jadwal</span>
                    </a>
                </li>
                
            </ul>
        </nav>
    </div>
</aside>
