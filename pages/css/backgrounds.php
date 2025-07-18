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
                <a href="css-tutorials.php" class="text-blue-600 dark:text-blue-400 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Backgrounds</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Backgrounds</h1>
        <p class=" mb-4">
            The CSS <code>background</code> properties let you add color, images, gradients, and patterns behind elements. This enhances the visual appeal and layout structure of a webpage.
        </p>

        <!-- Background Color -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Background Color</h2>
            <p class=" mb-2">Set a background color using <code>background-color</code>:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.box {
    background-color: #f0f0f0;
}
            </code></pre>
        </section>

        <!-- Background Image -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Background Image</h2>
            <p class=" mb-2">Use <code>background-image</code> to apply an image:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.hero {
    background-image: url('banner.jpg');
}
            </code></pre>
        </section>

        <!-- Background Repeat -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Background Repeat</h2>
            <p class=" mb-2">Control whether the image repeats:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.hero {
    background-repeat: no-repeat;
}
            </code></pre>
        </section>

        <!-- Background Position -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Background Position</h2>
            <p class=" mb-2">Position the background image inside the element:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.hero {
    background-position: center center;
}
            </code></pre>
        </section>

        <!-- Background Size -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Background Size</h2>
            <p class=" mb-2">Control the scaling of the background image:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.hero {
    background-size: cover;
}
            </code></pre>
            <ul class="list-disc list-inside ">
                <li><code>cover</code> – fills the container, cropping if needed</li>
                <li><code>contain</code> – fits the image inside the container</li>
            </ul>
        </section>

        <!-- Background Attachment -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Background Attachment</h2>
            <p class=" mb-2">Set whether the background scrolls with the content or is fixed:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.hero {
    background-attachment: fixed;
}
            </code></pre>
        </section>

        <!-- Shorthand Background Property -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">7. Shorthand Background Property</h2>
            <p class=" mb-2">Combine multiple background properties in one line:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.hero {
    background: url('bg.jpg') no-repeat center center / cover;
}
            </code></pre>
        </section>

        <!-- Multiple Backgrounds -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">8. Multiple Backgrounds</h2>
            <p class=" mb-2">You can layer several background images:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.layered {
    background: url('overlay.png'), url('main.jpg');
    background-repeat: no-repeat;
    background-position: top left, center center;
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS backgrounds give you control over color, images, and visual texture. Combine properties like position, size, and repeat to create stunning web designs.
            </p>
        </section>

       <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('css/centering') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Centering Elements</a></div>
    <div><a href="<?= base_url('css/borders') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Borders →</a></div>
</div>

    </article>
</main>
