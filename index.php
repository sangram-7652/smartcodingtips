<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';
include 'includes/header.php';
?>


<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 1100px; margin: auto;">

    <!-- Hero Section -->
    <section class="text-center py-16 bg-gradient-to-br from-indigo-600 to-blue-500 text-white rounded-xl mb-10">
        <h1 class="text-4xl font-bold mb-4">Welcome to SmartCodingTips</h1>
        <p class="text-lg max-w-2xl mx-auto mb-6">Master HTML, CSS, JavaScript, and more with clear, practical tutorials designed for beginners and aspiring developers.</p>
        <a href="<?= base_url('html/what-is-html') ?>" class="bg-white text-indigo-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Start Learning →</a>
    </section>

    <!-- Features Section -->
    <section class="grid md:grid-cols-3 gap-6 mb-12 ">

        <!-- HTML Card -->
        <div class="bg-white text-black dark:bg-gray-900 dark:text-white dark:border shadow-md p-6 rounded-lg text-center hover:shadow-xl transition">
            <img src="https://img.icons8.com/color/48/html-5--v1.png" alt="HTML Icon" class="mx-auto mb-3" />
            <h2 class="text-2xl font-semibold mb-2">HTML Tutorials</h2>
            <p class="text-gray-600 mb-4">Understand the basics of web structure, tags, forms, and layout.</p>
            <a href="<?= base_url('html/what-is-html') ?>" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">Explore HTML →</a>
        </div>

        <!-- CSS Card -->
        <div class="bg-white text-black dark:bg-gray-900 dark:text-white dark:border shadow-md p-6 rounded-lg text-center hover:shadow-xl transition">
            <img src="https://img.icons8.com/color/48/css3.png" alt="CSS Icon" class="mx-auto mb-3" />
            <h2 class="text-2xl font-semibold mb-2">CSS Styling</h2>
            <p class="text-gray-600 mb-4">Learn how to design beautiful websites with modern CSS techniques.</p>
            <a href="<?= base_url('css/what-is-css') ?>" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">Explore CSS →</a>
        </div>

        <!-- Tailwind CSS Card -->
        <div class="bg-white text-black dark:bg-gray-900 dark:text-white dark:border shadow-md p-6 rounded-lg text-center hover:shadow-xl transition">
            <img src="https://img.icons8.com/color/48/tailwind_css.png" alt="Tailwind Icon" class="mx-auto mb-3" />
            <h2 class="text-2xl font-semibold mb-2">Tailwind CSS</h2>
            <p class="text-gray-600 mb-4">Master utility-first design with responsive, modern Tailwind UI tips and projects.</p>
            <a href="<?= base_url('tailwind/what-is-tailwind') ?>" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">Explore Tailwind →</a>
        </div>

        <!-- JavaScript Card -->
        <div class="bg-white text-black dark:bg-gray-900 dark:text-white dark:border shadow-md p-6 rounded-lg text-center hover:shadow-xl transition">
            <img src="https://img.icons8.com/color/48/javascript--v1.png" alt="JavaScript Icon" class="mx-auto mb-3" />
            <h2 class="text-2xl font-semibold mb-2">JavaScript</h2>
            <p class="text-gray-600 mb-4">Add interactivity and logic to your web pages using JavaScript.</p>
            <a href="<?= base_url('js/what-is-js') ?>" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">Explore JS →</a>
        </div>

        <!-- ✅ React Card -->
        <div class="bg-white text-black dark:bg-gray-900 dark:text-white dark:border shadow-md p-6 rounded-lg text-center hover:shadow-xl transition">
            <img src="https://img.icons8.com/color/48/react-native.png" alt="React Icon" class="mx-auto mb-3" />
            <h2 class="text-2xl font-semibold mb-2">React.js</h2>
            <p class="text-gray-600 mb-4">Build modern, dynamic UIs with React and component-based architecture.</p>
            <a href="<?= base_url('react/what-is-react') ?>" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">Explore React →</a>
        </div>

    </section>

    <!-- Blog Teaser -->
    <section class="mb-12 ">
        <h2 class="text-3xl font-bold mb-6">Latest from the Blog</h2>
        <div class="grid md:grid-cols-2 gap-6 ">
            <article class="bg-gray-100 p-5 rounded shadow-sm hover:shadow-lg transition bg-white text-black dark:bg-gray-900 dark:text-white dark:border">
                <h3 class="text-xl font-semibold mb-2">Why You Should Use Semantic HTML</h3>
                <p class="text-gray-700 mb-2">Semantic HTML improves accessibility, SEO, and code clarity. Learn which tags to use and why they matter.</p>
                <a href="semantic-html.php" class="text-blue-600 dark:text-blue-400 hover:underline">Read More →</a>
            </article>
            <article class="bg-gray-100 p-5 rounded shadow-sm hover:shadow-lg transition bg-white text-black dark:bg-gray-900 dark:text-white dark:border">
                <h3 class="text-xl font-semibold mb-2">Responsive Design with Flexbox</h3>
                <p class="text-gray-700 mb-2">Use Flexbox to create responsive, modern layouts without media query chaos. A complete guide with examples.</p>
                <a href="flexbox-layout.php" class="text-blue-600 dark:text-blue-400 hover:underline">Read More →</a>
            </article>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="bg-indigo-50 p-6 rounded-lg text-center bg-white text-black dark:bg-gray-900 dark:text-white dark:border">
        <h2 class="text-2xl font-bold mb-2">Join Our Newsletter</h2>
        <p class="text-gray-700 mb-4">Stay updated with the latest tutorials, tips, and tricks.</p>
        <?php
        if (isset($_GET['subscribed'])) {
            echo '<p class="mt-3 font-semibold">';
            switch ($_GET['subscribed']) {
                case 'success':
                    echo '<span class="text-green-600">🎉 Subscription successful!</span>';
                    break;
                case 'exists':
                    echo '<span class="text-yellow-500">⚠️ You are already subscribed.</span>';
                    break;
                case 'invalid':
                    echo '<span class="text-red-500">❌ Invalid email address.</span>';
                    break;
                case 'error':
                    echo '<span class="text-red-600">⚠️ Something went wrong. Please try again.</span>';
                    break;
            }
            echo '</p>';
        }
        ?>

        <form action="subscribe.php" method="POST" class="flex flex-col sm:flex-row justify-center gap-2 max-w-md mx-auto">
            <input type="email" name="email" placeholder="Your email" class="px-4 py-2 rounded border border-gray-300 w-full" required>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Subscribe</button>
        </form>
    </section>
</main>

<?php include 'includes/footer.php'; ?>