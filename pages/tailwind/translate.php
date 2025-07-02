<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Translate, Skew, Rotate & Origin</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Translate, Skew, Rotate & Origin in Tailwind CSS</h1>
        <p class="text-lg mb-4">
            Tailwind CSS offers powerful transformation utilities to move, rotate, or skew elements. You can also control the origin point of transformations for precise animation and effects.
        </p>

        <!-- Translate Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Translate Utilities</h2>
            <p class="text-lg mb-2">
                Move elements on the X and Y axes using <code>translate-x-*</code> and <code>translate-y-*</code>:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="transform translate-x-4"&gt;Moves right 1rem (4)&lt;/div&gt;
&lt;div class="transform -translate-y-2"&gt;Moves up 0.5rem (-2)&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Rotate Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Rotate Utilities</h2>
            <p class="text-lg mb-2">
                Rotate elements using <code>rotate-{angle}</code>. Available values include: <code>rotate-45</code>, <code>rotate-90</code>, <code>-rotate-45</code>, etc.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="transform rotate-12"&gt;12 degrees rotated&lt;/div&gt;
&lt;div class="transform -rotate-6"&gt;Rotated -6 degrees&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Skew Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Skew Utilities</h2>
            <p class="text-lg mb-2">
                Skew elements along the X or Y axis:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="transform skew-x-6"&gt;Skewed Right&lt;/div&gt;
&lt;div class="transform -skew-y-3"&gt;Skewed Upward&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Transform Origin -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Transform Origin</h2>
            <p class="text-lg mb-2">
                Change the origin point of transformations with <code>origin-*</code> utilities:
            </p>
            <ul class="list-disc list-inside text-lg mb-2">
                <li><code>origin-top</code>, <code>origin-left</code>, <code>origin-center</code></li>
                <li><code>origin-top-right</code>, <code>origin-bottom-left</code>, etc.</li>
            </ul>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="transform scale-125 origin-top-left"&gt;Scaled from top-left&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Combining Transforms -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Combining Transforms</h2>
            <p class="text-lg mb-2">
                You can combine translate, rotate, skew, and origin in a single element for complex effects:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="transform translate-x-2 rotate-6 skew-y-3 origin-bottom-left"&gt;
    Complex Motion Element
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Always use the <code>transform</code> class to enable transformations.</li>
                <li>Combine with <code>transition</code> classes for smooth animation.</li>
                <li>Use transforms over layout changes (like <code>margin</code>) for better performance.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                With translate, skew, rotate, and origin utilities, Tailwind CSS gives you granular control over element motion, interaction, and visual polish — all without writing custom CSS.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/mobile-first" class="text-blue-600 hover:underline">Mobile-First Strategy →</a></p>
        </div>
    </article>
</main>
