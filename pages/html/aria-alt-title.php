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
                <a href="html.php" class="text-blue-600 dark:text-blue-400 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Alt, Title & ARIA</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Alt, Title, and ARIA Attributes</h1>
        <p class=" mb-4">
            Accessibility and usability are essential for all users, including those using assistive technologies. The <code>alt</code>, <code>title</code>, and ARIA (Accessible Rich Internet Applications) attributes improve accessibility and give more context to elements.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. The <code>alt</code> Attribute</h2>
            <p class="mb-2 ">Used with images to describe their content when the image cannot be displayed or is read by screen readers.</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap whitespace-pre-wrap whitespace-pre-wrap whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;img src="logo.png" alt="Smart Coding Tips Logo"&gt;
            </code></pre>
            <p class="mt-2">✅ Always provide meaningful <code>alt</code> text for important images. Use <code>alt=""</code> for decorative images.</p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. The <code>title</code> Attribute</h2>
            <p class="mb-2 ">Displays a tooltip when the user hovers over an element. It also provides additional info for screen readers.</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap whitespace-pre-wrap whitespace-pre-wrap whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;a href="download.html" title="Click to download the file"&gt;Download&lt;/a&gt;
            </code></pre>
            <p class="mt-2">✅ Keep titles short and informative.</p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. ARIA Attributes</h2>
            <p class=" mb-2">
                ARIA attributes enhance accessibility by adding semantic information for assistive technologies. Common attributes include:
            </p>
            <ul class="list-disc list-inside  mb-2">
                <li><code>aria-label</code> – Provides an accessible label.</li>
                <li><code>aria-hidden</code> – Hides elements from screen readers.</li>
                <li><code>aria-live</code> – Announces content updates dynamically.</li>
                <li><code>role</code> – Defines the role of the element (e.g., <code>button</code>, <code>alert</code>).</li>
            </ul>

            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap whitespace-pre-wrap whitespace-pre-wrap whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;button aria-label="Close"&gt;✖&lt;/button&gt;

&lt;div role="alert"&gt;
  Your form has been submitted successfully!
&lt;/div&gt;
            </code></pre>
            <p class="mt-2">✅ Use ARIA only when native HTML cannot provide the necessary semantics.</p>
        </section>

       <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/sticky-footer') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Sticky Header/Footer</a></div>
    <div><a href="<?= base_url('html/screen-readers') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Screen Readers →</a></div>
</div>
    </article>
</main>
