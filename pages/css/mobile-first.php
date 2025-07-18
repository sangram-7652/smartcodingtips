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
            <li class="text-gray-500">Mobile-First Design</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Mobile-First Design in CSS</h1>
        <p class=" mb-4">
            Mobile-first design is a development strategy that prioritizes designing and optimizing the website for mobile devices before adapting it to larger screens. This approach ensures a responsive, user-friendly experience for all users.
        </p>

        <!-- Why Mobile-First? -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Why Mobile-First?</h2>
            <ul class="list-disc list-inside ">
                <li>Majority of web traffic comes from mobile devices.</li>
                <li>Faster performance on smaller devices.</li>
                <li>Better progressive enhancement strategy.</li>
                <li>Improves accessibility and usability.</li>
            </ul>
        </section>

        <!-- Mobile-First with Media Queries -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Using Media Queries</h2>
            <p class=" mb-2">
                With mobile-first design, you write base styles for mobile devices first, then use <code>min-width</code> media queries to add styles for larger screens:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
/* Base styles for mobile */
.container {
    padding: 10px;
    font-size: 14px;
}

/* Styles for tablets and up */
@media (min-width: 768px) {
    .container {
        padding: 20px;
        font-size: 16px;
    }
}

/* Styles for desktops and up */
@media (min-width: 1024px) {
    .container {
        padding: 30px;
        font-size: 18px;
    }
}
            </code></pre>
        </section>

        <!-- Benefits of Mobile-First -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Benefits</h2>
            <ul class="list-disc list-inside ">
                <li>Cleaner, more maintainable CSS.</li>
                <li>Ensures your content works on all devices.</li>
                <li>Improves load time and performance.</li>
                <li>Helps meet Google’s mobile-friendly ranking criteria.</li>
            </ul>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Design and test on small screens first.</li>
                <li>Use flexible layouts and fluid grids.</li>
                <li>Optimize images and font sizes for smaller viewports.</li>
                <li>Progressively enhance features for larger screens.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Mobile-first design is a foundational principle of responsive web design. It ensures your website is accessible and functional on the most widely used devices and helps create a better experience for every user.
            </p>
        </section>

      <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('css/media-queries') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Media Queries</a></div>
    <div><a href="<?= base_url('css/breakpoints') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Breakpoints →</a></div>
</div>

    </article>
</main>
