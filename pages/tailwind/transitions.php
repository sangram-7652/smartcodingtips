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
                <a href="tailwind.php" class="text-blue-600 dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Transitions and Timing Functions</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Transitions and Timing Functions</h1>
        <p class="text-lg mb-4">
            Tailwind CSS provides utility classes to apply smooth transitions and control timing functions easily, helping you enhance the interactivity of your UI.
        </p>

        <!-- Transition Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Transition Utilities</h2>
            <p class="text-lg mb-2">
                Use <code>transition</code> classes to apply transitions. You can specify which properties should animate:
            </p>
            <pre class="bg-gray-100 dark:bg-gray-900 dark:text-white p-4 rounded overflow-x-auto text-sm"><code>
transition          /* Apply default transition */
transition-colors   /* Animate color changes */
transition-opacity  /* Animate opacity */
transition-transform/* Animate transform (scale, rotate, etc.) */
transition-all      /* Animate all properties */
            </code></pre>
            <p class="text-lg">Example:</p>
            <pre class="bg-gray-100 dark:bg-gray-900 dark:text-white p-4 rounded overflow-x-auto text-sm"><code>
&lt;button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded transition-colors"&gt;
    Hover Me
&lt;/button&gt;
            </code></pre>
        </section>

        <!-- Duration Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Duration Utilities</h2>
            <p class="text-lg">
                Control how long the transition takes using <code>duration-{time}</code>:
            </p>
            <pre class="bg-gray-100dark:bg-gray-900 dark:text-white p-4 rounded overflow-x-auto text-sm"><code>
duration-75
duration-150
duration-300
duration-500
            </code></pre>
        </section>

        <!-- Easing Functions -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Easing / Timing Functions</h2>
            <p class="text-lg">
                Tailwind provides timing utilities for easing:
            </p>
            <pre class="bg-gray-100 dark:bg-gray-900 dark:text-white p-4 rounded overflow-x-auto text-sm"><code>
ease-linear
ease-in
ease-out
ease-in-out
            </code></pre>
            <p class="text-lg">Example:</p>
            <pre class="bg-gray-100 dark:bg-gray-900 dark:text-white p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="transition-opacity duration-500 ease-in-out hover:opacity-50"&gt;
    Hover to fade
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Delay Utility -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Transition Delays</h2>
            <p class="text-lg">
                Add delays using <code>delay-{time}</code> classes:
            </p>
            <pre class="bg-gray-100 dark:bg-gray-900 dark:text-white p-4 rounded overflow-x-auto text-sm"><code>
delay-75
delay-150
delay-300
delay-500
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use transitions to enhance UX, not just for visual effects.</li>
                <li>Keep duration short for interactive elements (150–300ms).</li>
                <li>Combine with hover, focus, and active states for responsiveness.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Tailwind's transition utilities make it simple to apply smooth effects and animations to your UI, boosting interactivity and polish with minimal code.
            </p>
        </section>

        <!-- Next Link -->
        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/states-position') ?>" class="hover:underline">← Previous: Disabled, First/Last, Odd/Even</a>
  <a href="<?= base_url('tailwind/animations') ?>" class="hover:underline ms-auto">Next: Animating with Keyframes →</a>
</div>

    </article>
</main>
