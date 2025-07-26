<?php
$title = "Animated Navbar with CSS | SmartCodingTips";
$description = "Design a responsive and animated navigation bar using only CSS and Flexbox.";
$keywords = "css navbar, animated menu css, responsive navbar, nav bar design";
?>

<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="css-tutorials.php" class="text-blue-600 dark:text-blue-400 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Animated Navbar</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Animated Navbar in CSS</h1>
        <p class=" mb-4">
            An animated navbar enhances the user experience by providing visual feedback during navigation. You can use simple CSS transitions or keyframe animations to animate links, indicators, backgrounds, or mobile toggles.
        </p>

        <!-- Basic Navbar HTML -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Navbar Structure</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
<nav class="navbar">
    <div class="logo">MySite</div>
    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>
            </code></pre>
        </section>

        <!-- Styling & Hover Animation -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Hover Underline Animation</h2>
            <p class=" mb-2">Use pseudo-elements and transitions for a smooth underline effect on hover:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    background-color: #1e3a8a;
    color: white;
}
.nav-links {
    display: flex;
    gap: 1.5rem;
}
.nav-links a {
    position: relative;
    color: white;
    text-decoration: none;
    font-weight: 500;
}
.nav-links a::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    background-color: white;
    bottom: -4px;
    left: 0;
    transition: width 0.3s ease;
}
.nav-links a:hover::after {
    width: 100%;
}
            </code></pre>
        </section>

        <!-- Animated Mobile Toggle -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Mobile Toggle Animation (Optional)</h2>
            <p class=" mb-2">Add an animated hamburger icon and slide-in menu for small screens:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.menu-toggle {
    display: none;
    flex-direction: column;
    gap: 5px;
    cursor: pointer;
}
.menu-toggle span {
    width: 25px;
    height: 3px;
    background: white;
    transition: all 0.3s ease;
}

/* Animate into X */
.menu-toggle.active span:nth-child(1) {
    transform: rotate(45deg) translateY(8px);
}
.menu-toggle.active span:nth-child(2) {
    opacity: 0;
}
.menu-toggle.active span:nth-child(3) {
    transform: rotate(-45deg) translateY(-8px);
}
            </code></pre>
            <p class=" mt-2">
                Combine this with JavaScript or Tailwind’s class toggling to animate open/close actions.
            </p>
        </section>

        <!-- Keyframe Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Keyframe Animation (Slide In)</h2>
            <p class=" mb-2">You can animate nav items appearing on load with <code>@keyframes</code>:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
@keyframes slideIn {
    0% {
        transform: translateY(-20px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

.nav-links li {
    animation: slideIn 0.5s ease forwards;
}
.nav-links li:nth-child(2) {
    animation-delay: 0.1s;
}
.nav-links li:nth-child(3) {
    animation-delay: 0.2s;
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                An animated navbar adds a polished feel to your website. From subtle hovers to full entrance animations, CSS lets you enhance interactivity without JavaScript. Combine transitions and keyframes for even more control.
            </p>
        </section>

       <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/pricing-table') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Pricing Table</a> 
   <a href="<?= base_url('css/image-slider') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Image Slider →</a> 
</div>

    </article>
</main>
