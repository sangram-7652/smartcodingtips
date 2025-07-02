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
            <li class="text-gray-500">Images</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Using Images in HTML</h1>
        <p class="text-lg mb-4">
            Images are an essential part of web pages, used to add visual content and improve user engagement. The HTML &lt;img&gt; tag allows you to embed images easily.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Image Tag</h2>
            <p class="mb-2">
                The &lt;img&gt; tag is self-closing and requires the <code>src</code> attribute to specify the image source URL, and the <code>alt</code> attribute for alternative text.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;img src="images/photo.jpg" alt="A beautiful scenery"&gt;
            </code></pre>
            <p class="text-lg mt-2">
                The <code>alt</code> attribute is important for accessibility and SEO as it describes the image when it cannot be displayed or read by screen readers.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common Attributes</h2>
            <ul class="list-disc list-inside text-lg">
                <li><code>src</code>: Path or URL to the image file.</li>
                <li><code>alt</code>: Alternative text describing the image.</li>
                <li><code>width</code> and <code>height</code>: Specify image dimensions in pixels.</li>
                <li><code>title</code>: Text shown as tooltip on hover.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example with Attributes</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;img src="images/logo.png" alt="Company Logo" width="200" height="100" title="Our Logo"&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Responsive Images</h2>
            <p class="mb-2">
                To make images responsive and adapt to different screen sizes, use CSS such as:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
img {
    max-width: 100%;
    height: auto;
}
            </code></pre>
            <p>
                This ensures images scale down properly without distortion.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Using Images from External Sources</h2>
            <p class="mb-2">
                You can also link to images hosted on other websites by using an absolute URL in the <code>src</code> attribute:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;img src="https://example.com/images/sample.jpg" alt="Sample Image"&gt;
            </code></pre>
            <p>
                Be cautious with external images to ensure they are reliable and fast-loading.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Image Formats</h2>
            <ul class="list-disc list-inside text-lg">
                <li><strong>JPEG/JPG:</strong> Best for photos, supports millions of colors with lossy compression.</li>
                <li><strong>PNG:</strong> Supports transparency, good for logos and graphics with sharp edges.</li>
                <li><strong>GIF:</strong> Supports animation but limited to 256 colors.</li>
                <li><strong>SVG:</strong> Scalable vector graphics, great for icons and logos without quality loss.</li>
                <li><strong>WebP:</strong> Modern format with better compression and quality, supported in most browsers.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Always provide meaningful <code>alt</code> text for accessibility.</li>
                <li>Optimize images for web to reduce file size and improve load times.</li>
                <li>Use responsive techniques for mobile-friendly layouts.</li>
                <li>Use modern formats like WebP when possible for better performance.</li>
            </ul>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-links.php" class="text-blue-600 hover:underline">Links in HTML →</a></p>
        </div>
    </article>
</main>
