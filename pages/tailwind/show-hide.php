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
            <li class="text-gray-500">Show/Hide Utilities</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Hiding and Showing Elements Responsively in Tailwind</h1>
        <p class="text-lg mb-4">
            Tailwind CSS provides utility classes that make it easy to hide or show elements based on screen size or other conditions without writing custom CSS or media queries.
        </p>

        <!-- Display Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Using <code>hidden</code> and <code>block</code></h2>
            <p class="text-lg mb-2">The simplest way to hide or show content:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="hidden md:block"&gt;
    This will only show on medium (768px+) and larger screens.
&lt;/div&gt;

&lt;div class="block md:hidden"&gt;
    This will only show on small screens.
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Inline vs Block vs Flex -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Use Other Display Values</h2>
            <p class="text-lg mb-2">
                You can use <code>inline</code>, <code>flex</code>, <code>grid</code>, etc., instead of just <code>block</code>:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="hidden lg:flex"&gt;
    Visible as a flexbox only on large (1024px+) screens
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Responsive Strategy -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Mobile-First Hiding Strategy</h2>
            <p class="text-lg mb-2">
                Tailwind is mobile-first, so use the <code>hidden</code> class as the default, and apply visibility as screens get larger:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="hidden md:block"&gt;
    Hidden by default, shown from md (768px) and up
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Conditional Display with Alpine or JS -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Conditional Visibility with JS</h2>
            <p class="text-lg mb-2">You can toggle these classes dynamically using frameworks like Alpine.js or custom JavaScript:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div x-data="{ open: false }"&gt;
    &lt;button @click="open = !open"&gt;Toggle Menu&lt;/button&gt;
    &lt;div x-show="open" class="mt-2"&gt;
        Menu Content
    &lt;/div&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use <code>hidden</code> for visibility control, not for access control (users can still access hidden content via dev tools).</li>
                <li>Avoid using <code>hidden</code> with screen readers if accessibility is a concern — prefer <code>sr-only</code>.</li>
                <li>Combine with Tailwind’s responsive prefixes to reduce duplicate markup.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Hiding and showing elements with Tailwind is clean, efficient, and highly readable. With responsive utilities and classes like <code>hidden</code>, you can build dynamic, mobile-first layouts effortlessly.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/mobile-nav" class="text-blue-600 hover:underline">Building a Mobile Navigation →</a></p>
        </div>
    </article>
</main>
