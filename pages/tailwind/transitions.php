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
            <li class="text-gray-500">Disabled, First/Last, Odd/Even, Transitions</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Disabled, First/Last, Odd/Even, and Transitions in Tailwind CSS</h1>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Styling Disabled Elements</h2>
            <p class=" mb-2">Use the <code>disabled:</code> modifier to target elements when disabled:</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded disabled:bg-gray-400" disabled>
                Disabled Button
            </button>
            <pre class="bg-gray-100 p-4 rounded mt-2 dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;button class="bg-blue-500 text-white px-4 py-2 rounded disabled:bg-gray-400" disabled&gt;
    Disabled Button
&lt;/button&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. First, Last, Odd, and Even</h2>
            <p class=" mb-2">Tailwind provides utilities for targeting specific children:</p>
            <ul class=" list-disc list-inside mb-2">
                <li><code>first:</code> – First child</li>
                <li><code>last:</code> – Last child</li>
                <li><code>odd:</code> – Odd-indexed children</li>
                <li><code>even:</code> – Even-indexed children</li>
            </ul>
            <div class="space-y-2">
                <div class="bg-white p-2 first:bg-green-100 last:bg-pink-100 odd:bg-gray-50 even:bg-gray-200 border" style="width: max-content;">
                    <p class="first:text-red-600">Item 1</p>
                    <p>Item 2</p>
                    <p>Item 3</p>
                    <p>Item 4</p>
                </div>
            </div>
            <pre class="bg-gray-100 p-4 rounded mt-2 dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;div class="first:bg-green-100 last:bg-pink-100 odd:bg-gray-50 even:bg-gray-200"&gt;
    &lt;p class="first:text-red-600"&gt;Item 1&lt;/p&gt;
    &lt;p&gt;Item 2&lt;/p&gt;
    &lt;p&gt;Item 3&lt;/p&gt;
    &lt;p&gt;Item 4&lt;/p&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Transitions and Timing</h2>
            <p class=" mb-2">Add smooth transitions using Tailwind’s transition classes:</p>
            <ul class=" list-disc list-inside mb-2">
                <li><code>transition</code> – enables transition</li>
                <li><code>duration-*</code> – duration in ms</li>
                <li><code>ease-in, ease-out, ease-in-out, linear</code></li>
                <li><code>delay-*</code> – adds delay before animation</li>
            </ul>
            <div class="w-40 h-20 bg-blue-400 hover:bg-blue-600 transition-all duration-300 ease-in-out text-white flex items-center justify-center rounded">
                Hover Me
            </div>
            <pre class="bg-gray-100 p-4 rounded mt-2 dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;div class="w-40 h-20 bg-blue-400 hover:bg-blue-600 transition-all duration-300 ease-in-out text-white"&gt;
    Hover Me
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind's pseudo-state utilities like <code>disabled:</code>, <code>first:</code>, <code>last:</code>, <code>odd:</code>, and <code>even:</code> offer elegant solutions for styling dynamic UIs. Combined with transition utilities, they enable clean and interactive components without writing custom CSS.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="tailwind.php?page=tailwind/transitions" class="text-blue-600 hover:underline">Transitions and Timing →</a></p>
        </div>
    </article>
</main>
