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
            <li class="text-gray-500">Deprecated Tags</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Deprecated Tags in HTML</h1>
        <p class="text-lg mb-4">
            Deprecated tags are HTML elements that are no longer recommended in modern HTML (especially HTML5). These tags are either obsolete or replaced by newer, more semantic elements and CSS styling techniques.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common Deprecated Tags</h2>
            <ul class="list-disc list-inside text-lg">
                <li><code>&lt;font&gt;</code> – Use CSS for font styles instead.</li>
                <li><code>&lt;center&gt;</code> – Use <code>text-align: center;</code> in CSS.</li>
                <li><code>&lt;big&gt;</code>, <code>&lt;small&gt;</code> – Use CSS for font sizing.</li>
                <li><code>&lt;u&gt;</code> – Use CSS <code>text-decoration: underline;</code>.</li>
                <li><code>&lt;s&gt;</code>, <code>&lt;strike&gt;</code> – Use <code>&lt;del&gt;</code> or CSS for strikethrough.</li>
                <li><code>&lt;acronym&gt;</code> – Use <code>&lt;abbr&gt;</code> instead.</li>
                <li><code>&lt;frame&gt;</code>, <code>&lt;frameset&gt;</code>, <code>&lt;noframes&gt;</code> – Replaced by CSS layout and iframes.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Why Avoid Deprecated Tags?</h2>
            <ul class="list-disc list-inside text-lg">
                <li>They are not supported in HTML5.</li>
                <li>They may not work correctly in modern browsers.</li>
                <li>They lead to poor accessibility and SEO.</li>
                <li>Better alternatives exist using CSS and semantic HTML.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Recommended Alternatives</h2>
            <p class="text-lg mb-2">Instead of deprecated tags, use modern HTML and CSS practices. For example:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;!-- Instead of &lt;font color="red"&gt; --&gt;
&lt;p style="color: red;"&gt;Text&lt;/p&gt;

&lt;!-- Instead of &lt;center&gt; --&gt;
&lt;div style="text-align: center;"&gt;Centered Content&lt;/div&gt;
            </code></pre>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-global-attributes.php" class="text-blue-600 hover:underline">HTML Global Attributes →</a></p>
        </div>
    </article>
</main>
