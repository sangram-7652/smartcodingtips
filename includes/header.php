<!DOCTYPE html>
<html lang="en">

<head>
        <script>
  // Prevent dark mode flicker
  (function () {
    if (localStorage.getItem("theme") === "dark") {
      document.documentElement.classList.add("dark");
    }
  })();
</script>
    <?php
    $title = $title ?? "SmartCodingTips";
    $description = $description ?? "SmartCodingTips: Learn Web Development with HTML, CSS, JavaScript, and more.";
    $keywords = $keywords ?? "smart coding tips, html, css, javascript, tutorials";
    $canonical = $canonical ?? "https://smartcodingtips.com/";
    ?>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>" />
    <meta name="keywords" content="<?= $keywords ?>" />
    <link rel="canonical" href="<?= $canonical ?>" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="static/css/style.css?v=1">
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>


</head>

<body class="bg-white text-black dark:bg-gray-900 dark:text-white overflow-x-hidden">
    <!-- Header Start -->
    <header
        class="w-full bg-gray-900 dark:bg-gray-800 text-white fixed top-0 left-0 z-50 shadow-md ">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 md:px-12 py-4">

            <!-- Logo -->
            <a href="<?= base_url('') ?>" class="text-2xl font-bold text-white hover:text-teal-400 transition duration-200">
                SmartCodingTips
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex items-center space-x-8 text-lg font-medium">
                <a href="<?= base_url('') ?>" class="hover:text-teal-400 transition">Home</a>
                <a href="<?= base_url('html/what-is-html') ?>" class="hover:text-teal-400 transition">HTML</a>
                <a href="<?= base_url('css/what-is-css') ?>" class="hover:text-teal-400 transition">CSS</a>
                <a href="<?= base_url('tailwind/what-is-tailwind') ?>" class="hover:text-teal-400 transition">Tailwind CSS</a>
                <a href="<?= base_url('js/what-is-js') ?>" class="hover:text-teal-400 transition">JavaScript</a>
                <a href="<?= base_url('react/what-is-react') ?>" class="hover:text-teal-400 transition">React</a>
                <a href="<?= base_url('mcq') ?>" class="hover:text-teal-400 transition">MCQs</a>
            </nav>

            <!-- Theme Toggle -->
            <button id="themeToggle" class="ml-4 text-xl" title="Toggle Theme">🌙</button>


            <!-- Mobile Menu Icon -->
            <button class="md:hidden focus:outline-none" id="mobile_nav">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0,0,256,256">
                    <g fill="#ffffff">
                        <g transform="scale(5.12,5.12)">
                            <path d="M5,8c-0.72,-0.01 -1.39,0.37 -1.76,0.99c-0.36,0.62 -0.36,1.39 0,2.02c0.36,0.62 1.03,1 1.76,0.99h40c0.72,0.01 1.39,-0.37 1.76,-0.99c0.36,-0.62 0.36,-1.39 0,-2.02c-0.36,-0.62 -1.03,-1 -1.76,-0.99zM5,23c-0.72,-0.01 -1.39,0.37 -1.76,0.99c-0.36,0.62 -0.36,1.39 0,2.02c0.36,0.62 1.03,1 1.76,0.99h40c0.72,0.01 1.39,-0.37 1.76,-0.99c0.36,-0.62 0.36,-1.39 0,-2.02c-0.36,-0.62 -1.03,-1 -1.76,-0.99zM5,38c-0.72,-0.01 -1.39,0.37 -1.76,0.99c-0.36,0.62 -0.36,1.39 0,2.02c0.36,0.62 1.03,1 1.76,0.99h40c0.72,0.01 1.39,-0.37 1.76,-0.99c0.36,-0.62 0.36,-1.39 0,-2.02c-0.36,-0.62 -1.03,-1 -1.76,-0.99z"></path>
                        </g>
                    </g>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu w-full h-screen absolute top-0 bg-gray-900 text-white hidden z-50">

            <button class="text-2xl absolute top-4 right-4" id="close_mobile_nav">✖</button>

            <nav class="mt-20 space-y-4 text-lg font-medium">
                <ul>
                    <li class=" py-4 px-10 shadow-xl"><a href="<?= base_url('') ?>" class="block hover:text-teal-400 transition">Home</a></li>
                    <li class=" py-4 px-10 shadow-xl"><a href="<?= base_url('html/what-is-html') ?>" class="block hover:text-teal-400 transition">HTML</a></li>
                    <li class=" py-4 px-10 shadow-xl"><a href="<?= base_url('css/what-is-css') ?>" class="block hover:text-teal-400 transition">CSS</a></li>
                    <li class=" py-4 px-10 shadow-xl"><a href="<?= base_url('tailwind/what-is-tailwind') ?>" class="block hover:text-teal-400 transition">Tailwind CSS</a></li>
                    <li class=" py-4 px-10 shadow-xl"><a href="<?= base_url('js/what-is-js') ?>" class="block hover:text-teal-400 transition">JavaScript</a></li>
                    <li class=" py-4 px-10 shadow-xl"><a href="<?= base_url('react/what-is-react') ?>" class="block hover:text-teal-400 transition">React</a></li>
                </ul>
            </nav>
        </div>
    </header>



    <!-- Header End -->

    <!-- Optional space below fixed header -->
    <div class="h-20 md:h-24"></div>