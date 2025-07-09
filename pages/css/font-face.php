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
                <a href="css-tutorials.php" class="text-blue-600 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Custom Fonts</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Using Custom Fonts in CSS</h1>
        <p class=" mb-4">
            Custom fonts help create a unique and branded look for your website. CSS allows you to load both local and web fonts using <code>@font-face</code> or services like Google Fonts.
        </p>

        <!-- Google Fonts -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Importing from Google Fonts</h2>
            <p class=" mb-2">Visit <a href="https://fonts.google.com" class="text-blue-600 hover:underline" target="_blank">Google Fonts</a>, choose a font, and include the provided link in your HTML <code>&lt;head&gt;</code>:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"&gt;
            </code></pre>
            <p class=" mt-2">Then use it in your CSS:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
body {
    font-family: 'Roboto', sans-serif;
}
            </code></pre>
        </section>

        <!-- @font-face -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Using @font-face</h2>
            <p class=" mb-2">Host and load your own font files with <code>@font-face</code>:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
@font-face {
    font-family: 'MyCustomFont';
    src: url('fonts/MyCustomFont.woff2') format('woff2'),
         url('fonts/MyCustomFont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

h1 {
    font-family: 'MyCustomFont', sans-serif;
}
            </code></pre>
        </section>

        <!-- Font Formats -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Font Formats</h2>
            <p class=" mb-2">Different browsers support different font formats. Common ones include:</p>
            <ul class="list-disc list-inside ">
                <li><code>.woff2</code> – modern and recommended</li>
                <li><code>.woff</code> – widely supported fallback</li>
                <li><code>.ttf</code> – TrueType, older but usable</li>
                <li><code>.eot</code> – for legacy Internet Explorer</li>
            </ul>
        </section>

        <!-- Fallbacks -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Font Fallbacks</h2>
            <p class=" mb-2">
                Always provide fallback fonts to ensure text is readable even if the custom font fails to load:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
body {
    font-family: 'Open Sans', Arial, sans-serif;
}
            </code></pre>
        </section>

        <!-- Performance Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Performance Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>font-display: swap;</code> to improve loading speed and avoid invisible text.</li>
                <li>Only load font weights and styles you actually use.</li>
                <li>Self-host fonts for full control and offline support.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Custom fonts enhance your design but must be handled carefully for performance and compatibility. Whether you're using web services or hosting locally, proper font integration boosts both visual appeal and user experience.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="responsive-typography.php" class="text-blue-600 hover:underline">Responsive Typography →</a></p>
        </div>
    </article>
</main>
