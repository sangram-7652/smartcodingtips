<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600  dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600  dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Accessibility with Tailwind</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Accessibility with Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind CSS is designed to promote semantic, accessible markup by encouraging proper HTML structure. However, accessibility isn't automatic — here’s how to ensure your interfaces are inclusive and compliant.
        </p>

        <!-- Semantic HTML -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Start with Semantic HTML</h2>
            <p class=" mb-2">
                Use correct elements like <code>&lt;button&gt;</code>, <code>&lt;label&gt;</code>, <code>&lt;nav&gt;</code>, and <code>&lt;main&gt;</code> rather than relying on <code>&lt;div&gt;</code> and <code>&lt;span&gt;</code> for everything.
            </p>
        </section>

        <!-- Tailwind Accessibility Plugins -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Use Tailwind’s Accessibility Plugins</h2>
            <p class=" mb-2">
                Tailwind supports a few utilities for accessibility, like:
            </p>
            <ul class="list-disc list-inside ">
                <li><code>sr-only</code> – Hides content visually but keeps it for screen readers</li>
                <li><code>not-sr-only</code> – Makes visually hidden content visible again</li>
            </ul>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;span class="sr-only"&gt;Screen reader only text&lt;/span&gt;
            </code></pre>
        </section>

        <!-- Focus States -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Improve Focus Styles</h2>
            <p class=" mb-2">
                Tailwind gives you control over focus states with <code>focus:</code> and <code>focus-visible:</code>. Always provide a visual indication of focus, especially for keyboard users.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;button class="focus:outline-none focus:ring-2 focus:ring-blue-500"&gt;Submit&lt;/button&gt;
            </code></pre>
        </section>

        <!-- Contrast and Color -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Maintain Color Contrast</h2>
            <p class="">
                Use sufficient contrast between background and text. Tailwind’s color palette is WCAG-friendly, but always test your combinations with tools like <a href="https://webaim.org/resources/contrastchecker/" target="_blank" class="text-blue-600  dark:text-blue-400 hover:underline">WebAIM Contrast Checker</a>.
            </p>
        </section>

        <!-- Keyboard Navigation -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Ensure Keyboard Navigation</h2>
            <p class="">
                All interactive elements (like buttons, links, forms) should be usable with <kbd>Tab</kbd> and <kbd>Enter</kbd>. Avoid disabling focus outlines unless you’re replacing them with something better.
            </p>
        </section>

        <!-- ARIA Attributes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Use ARIA Only When Necessary</h2>
            <p class="">
                Avoid overusing ARIA. Native HTML is always preferred, but when needed, Tailwind doesn’t interfere with ARIA attributes:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;div role="alert" aria-live="polite"&gt;New notification received&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Accessibility should be a first-class concern in every project. With Tailwind, you can build visually beautiful components that are inclusive, keyboard-friendly, and screen-reader compatible.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/optimize-bloat') ?>" class="hover:underline">← Previous: Avoiding Class Bloat</a>
  <a href="<?= base_url('tailwind/performance') ?>" class="hover:underline">Next: Performance and SEO Tips →</a>
</div>

    </article>
</main>
