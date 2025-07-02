<!DOCTYPE html>
<html lang="en">

<head>
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
    <link rel="stylesheet" href="/smartcodingtips/static/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <!-- Optional: Smooth scrolling -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-white text-black dark:bg-gray-900 dark:text-white">
    <!-- bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-white -->
    <!-- Header Start -->
    <header class="w-full bg-gray-900 dark:bg-gray-800 text-white fixed top-0 left-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 md:px-12 py-4">

            <!-- Logo -->
            <a href="/smartcodingtips/index.php" class="text-2xl font-bold text-white hover:text-teal-400 transition duration-200">
                SmartCodingTips
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex items-center space-x-8 text-lg font-medium">
                <a href="/smartcodingtips/index.php" class="hover:text-teal-400 transition">Home</a>
                <a href="/smartcodingtips/html.php" class="hover:text-teal-400 transition">HTML</a>
                <a href="/smartcodingtips/css.php" class="hover:text-teal-400 transition">CSS</a>
                <a href="/smartcodingtips/tailwind.php" class="hover:text-teal-400 transition">Tailwind CSS</a>
                <a href="/smartcodingtips/js.php" class="hover:text-teal-400 transition">JavaScript</a>
                <a href="/smartcodingtips/react.php" class="hover:text-teal-400 transition">React</a>
            </nav>

            <!-- Theme Toggle -->
            <button id="themeToggle"  class="ml-4 text-xl" title="Toggle Theme">🌙</button>

            <!-- Mobile Menu Icon -->
            <button class="md:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <g transform="scale(5.12,5.12)">
                            <path d="M5,8c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,23c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,38c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175z"></path>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </header>
    <!-- Header End -->

    <!-- Optional space below fixed header -->
    <div class="h-20 md:h-24"></div>