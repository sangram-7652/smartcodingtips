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
            <li class="text-gray-500">CSS Transitions</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Transitions</h1>
        <p class=" mb-4">
            CSS transitions allow you to animate changes to CSS properties smoothly over time, enhancing the user experience without JavaScript.
        </p>

        <!-- Basic Syntax -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Syntax</h2>
            <p class=" mb-2">
                Use the <code>transition</code> property to define which CSS property to animate, the duration, and optionally, the timing function and delay.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.button {
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #3498db;
}
            </code></pre>
        </section>

        <!-- Transition Properties -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Transition Properties</h2>
            <ul class="list-disc list-inside ">
                <li><code>transition-property</code>: Which property to animate</li>
                <li><code>transition-duration</code>: How long the transition takes</li>
                <li><code>transition-timing-function</code>: Easing (e.g., <code>ease</code>, <code>linear</code>, <code>ease-in</code>)</li>
                <li><code>transition-delay</code>: Delay before starting</li>
            </ul>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white mt-2"><code class="text-sm">
.box {
    transition-property: transform;
    transition-duration: 0.5s;
    transition-timing-function: ease-in-out;
    transition-delay: 0s;
}
            </code></pre>
        </section>

        <!-- Shorthand Transition -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Shorthand Transition</h2>
            <p class=" mb-2">Combine all properties into one line:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.card {
    transition: transform 0.4s ease-in-out;
}
.card:hover {
    transform: scale(1.05);
}
            </code></pre>
        </section>

        <!-- Multiple Transitions -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Multiple Transitions</h2>
            <p class=" mb-2">Animate more than one property at the same time:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.box {
    transition: opacity 0.3s ease, transform 0.5s ease-in;
}
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Keep transitions smooth and subtle for better UX.</li>
                <li>Avoid animating properties that trigger reflows (like <code>width</code>, <code>height</code>) unless necessary.</li>
                <li>Use <code>transform</code> and <code>opacity</code> for performance-friendly animations.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS transitions are a powerful way to bring your website to life with smooth animations. They’re easy to use and work well with user interactions like hover and focus.
            </p>
        </section>

       <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/shadows') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Shadows</a> 
   <a href="<?= base_url('css/animations') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Keyframe Animations →</a> 
</div>
    </article>
</main>
