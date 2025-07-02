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
            <li class="text-gray-500">Transform & Scale</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Transform & Scale in Tailwind CSS</h1>
        <p class="text-lg mb-4">
            Tailwind CSS includes utility classes for CSS transforms, allowing you to rotate, scale, skew, and translate elements. These are useful for animations, hover effects, and responsive UI design.
        </p>

        <!-- Enable Transform -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Enabling Transform</h2>
            <p class="text-lg mb-2">
                Before applying transform utilities, you must include the base class <code>transform</code> to enable the feature:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="transform scale-110"&gt;Zoomed&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Scale Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Scaling Elements</h2>
            <p class="text-lg mb-2">
                Use <code>scale-0</code> to <code>scale-150</code> to increase or decrease the size:
            </p>
            <ul class="list-disc list-inside text-lg">
                <li><code>scale-75</code> – 75% size</li>
                <li><code>scale-100</code> – normal size</li>
                <li><code>scale-125</code> – 125% size</li>
                <li><code>hover:scale-110</code> – for interactive zoom effects</li>
            </ul>
        </section>

        <!-- Rotate and Skew -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Rotate and Skew</h2>
            <p class="text-lg mb-2">Tailwind supports rotation and skewing using:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="transform rotate-12"&gt;Rotated&lt;/div&gt;
&lt;div class="transform -skew-x-6"&gt;Skewed Left&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Translate Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Translate Utilities</h2>
            <p class="text-lg mb-2">
                Move elements along X or Y axes using <code>translate-x-*</code> and <code>translate-y-*</code>:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="transform translate-x-4"&gt;Moved Right&lt;/div&gt;
&lt;div class="transform -translate-y-2"&gt;Moved Up&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Origin and Combined Transforms -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Transform Origin & Combined Transforms</h2>
            <p class="text-lg mb-2">
                Set the origin of transformation using <code>origin-*</code> classes:
            </p>
            <ul class="list-disc list-inside text-lg">
                <li><code>origin-top-left</code>, <code>origin-center</code>, <code>origin-bottom-right</code></li>
            </ul>
            <p class="text-lg mt-2">
                You can combine multiple transform utilities for powerful effects:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="transform scale-110 rotate-3 -translate-y-1 origin-top-right"&gt;Fancy Box&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Performance Tip -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Performance Tip</h2>
            <p class="text-lg">
                Prefer <code>transform</code> over changing layout properties (like width or margin) in animations. Transforms are GPU-accelerated and smoother on most devices.
            </p>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Tailwind’s transform utilities give you expressive control over element scaling, rotation, and positioning — perfect for UI motion and transitions without custom CSS.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/translate" class="text-blue-600 hover:underline">Translate, Skew, Rotate →</a></p>
        </div>
    </article>
</main>
