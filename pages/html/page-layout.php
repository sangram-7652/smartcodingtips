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
                <a href="html-tutorials.php" class="text-blue-600 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Page Layout Tips</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Page Layout Tips</h1>
        <p class="text-lg mb-4">
            Good page layout is essential for user experience and readability. In HTML, organizing your page with clear structure and layout elements helps both browsers and users navigate your content smoothly.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Use Semantic Elements</h2>
            <p class="text-lg mb-2">
                Use elements like <code>&lt;header&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;section&gt;</code>, and <code>&lt;footer&gt;</code> to define meaningful sections of your page.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;header&gt;Site Header&lt;/header&gt;
&lt;nav&gt;Navigation Menu&lt;/nav&gt;
&lt;main&gt;Main Content&lt;/main&gt;
&lt;footer&gt;Page Footer&lt;/footer&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Organize with Containers</h2>
            <p class="text-lg mb-2">
                Use <code>&lt;div&gt;</code> or semantic wrappers with CSS classes to group content and control layout with styles.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;div class="container"&gt;
  &lt;section class="intro"&gt;...&lt;/section&gt;
  &lt;section class="features"&gt;...&lt;/section&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Use CSS for Layout</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Apply CSS Flexbox or Grid for flexible and responsive designs.</li>
                <li>Keep layout styles in external stylesheets for maintainability.</li>
                <li>Use spacing (padding/margin) to create breathing room.</li>
                <li>Make sure your layout is mobile-friendly.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Avoid Common Mistakes</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Don't nest elements excessively—keep HTML clean and simple.</li>
                <li>Avoid inline styles; use CSS classes instead.</li>
                <li>Don’t rely solely on tables for layout.</li>
                <li>Keep navigation consistent across all pages.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                A well-structured layout improves usability and maintainability. By using semantic tags and CSS techniques, you can build clean, accessible, and responsive web pages with ease.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-elements.php" class="text-blue-600 hover:underline">HTML Elements →</a></p>
        </div>
    </article>
</main>
