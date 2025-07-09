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
            <li class="text-gray-500">Hex, RGB, HSL</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Hex, RGB, and HSL Colors in CSS</h1>
        <p class=" mb-4">
            CSS supports different formats to define colors. The three most common formats are Hexadecimal (Hex), RGB (Red, Green, Blue), and HSL (Hue, Saturation, Lightness). Each offers a unique way to specify color values.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Hexadecimal Colors</h2>
            <p class=" mb-2">
                Hex values use a <code>#</code> followed by six (or three) digits representing red, green, and blue in hexadecimal.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
/* Full hex */
h1 {
    color: #1e90ff;
}

/* Short hex */
p {
    color: #fff;
}
            </code></pre>
            <p class=" mt-2">
                Each pair represents the intensity of red, green, and blue (00 to FF).
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. RGB and RGBA</h2>
            <p class=" mb-2">
                RGB defines color using Red, Green, and Blue components (0 to 255). RGBA adds an alpha (opacity) channel.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
div {
    background-color: rgb(255, 99, 71); /* Tomato */
}

div.transparent {
    background-color: rgba(255, 99, 71, 0.5); /* 50% transparent */
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. HSL and HSLA</h2>
            <p class=" mb-2">
                HSL stands for Hue (0–360), Saturation (%), and Lightness (%). HSLA includes Alpha (opacity).
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.box {
    background-color: hsl(200, 100%, 50%);
}

.box-fade {
    background-color: hsla(200, 100%, 50%, 0.3);
}
            </code></pre>
            <p class=" mt-2">
                HSL is more intuitive for adjusting brightness and color tones.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Choosing the Right Format</h2>
            <ul class="list-disc list-inside ">
                <li><strong>Hex</strong>: Compact and widely used for web design.</li>
                <li><strong>RGB</strong>: Great when you need to control each color precisely.</li>
                <li><strong>HSL</strong>: Excellent for creating color themes and adjusting lightness/saturation.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Understanding different color formats allows for flexibility and precision in your designs. Try using HSL for dynamic themes, RGB for transparency control, and HEX for fast styling.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="css-units.php" class="text-blue-600 hover:underline">CSS Units →</a></p>
        </div>
    </article>
</main>
