<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 1000px; margin: auto;" x-data="{ dark: false }" :class="{ 'dark': dark }">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 dark:text-gray-300 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600 dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500 dark:text-gray-300">Dark Mode Dashboard</li>
        </ol>
    </nav>

    <!-- Toggle Dark Mode -->
    <div class="flex justify-end mb-6">
        <button @click="dark = !dark" class="bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-100 px-4 py-2 rounded shadow">
            Toggle Dark Mode
        </button>
    </div>

    <!-- Dashboard Layout -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Sidebar -->
        <aside class="md:col-span-1 bg-white dark:bg-gray-800 p-4 rounded shadow">
            <h2 class="text-lg font-semibold mb-4 text-gray-800 dark:text-white">Menu</h2>
            <ul class="space-y-2 text-gray-700 dark:text-gray-300 text-sm">
                <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">Dashboard</a></li>
                <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">Analytics</a></li>
                <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">Settings</a></li>
                <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">Logout</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <section class="md:col-span-3 space-y-6">
            <!-- Header -->
            <div class="bg-white dark:bg-gray-900 p-6 rounded shadow flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Dashboard</h1>
                <span class="text-sm text-gray-500 dark:text-gray-300">June 2025</span>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-4 bg-white dark:bg-gray-800 rounded shadow text-gray-800 dark:text-white">
                    <h3 class="text-lg font-medium">Users</h3>
                    <p class="text-3xl font-bold mt-2">1,250</p>
                </div>
                <div class="p-4 bg-white dark:bg-gray-800 rounded shadow text-gray-800 dark:text-white">
                    <h3 class="text-lg font-medium">Sales</h3>
                    <p class="text-3xl font-bold mt-2">$9,340</p>
                </div>
                <div class="p-4 bg-white dark:bg-gray-800 rounded shadow text-gray-800 dark:text-white">
                    <h3 class="text-lg font-medium">Revenue</h3>
                    <p class="text-3xl font-bold mt-2">$15,670</p>
                </div>
            </div>

            <!-- Activity -->
            <div class="bg-white dark:bg-gray-900 p-6 rounded shadow">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Recent Activity</h2>
                <ul class="space-y-2 text-gray-700 dark:text-gray-300 text-sm">
                    <li>✔️ User <strong>Alice</strong> signed up</li>
                    <li>✔️ Order #1023 completed</li>
                    <li>✔️ New comment on blog post</li>
                </ul>
            </div>
        </section>
    </div>

    <!-- Next -->
    <div class="mt-6">
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">
            Next: <a href="tailwind.php?page=tailwind/project-blog" class="text-blue-600 dark:text-blue-400 hover:underline">Blog Layout with Prose →</a>
        </p>
    </div>
</main>
