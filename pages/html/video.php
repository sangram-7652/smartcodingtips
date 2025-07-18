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
            <li class="text-gray-500">Video Tag</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Using the HTML &lt;video&gt; Tag</h1>
        <p class=" mb-4">
            The &lt;video&gt; tag allows you to embed video content directly into your web pages. It supports multiple sources, controls, and customization options.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Video Example</h2>
            <p class="mb-2">A simple video element with controls:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;video width="640" height="360" controls&gt;
  &lt;source src="video.mp4" type="video/mp4"&gt;
  Your browser does not support the video tag.
&lt;/video&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Attributes of &lt;video&gt;</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>src</code>: Specifies the video file URL (optional if using &lt;source&gt;).</li>
                <li><code>controls</code>: Displays play, pause, volume controls, etc.</li>
                <li><code>autoplay</code>: Starts playing the video automatically (use with caution).</li>
                <li><code>loop</code>: Repeats the video indefinitely.</li>
                <li><code>muted</code>: Starts the video muted.</li>
                <li><code>poster</code>: Image displayed before the video plays.</li>
                <li><code>width</code> and <code>height</code>: Specify the video dimensions.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Multiple Sources for Compatibility</h2>
            <p class="mb-2">
                You can provide multiple source files in different formats to ensure browser compatibility.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;video controls width="640" height="360" poster="thumbnail.jpg"&gt;
  &lt;source src="video.mp4" type="video/mp4"&gt;
  &lt;source src="video.webm" type="video/webm"&gt;
  &lt;source src="video.ogg" type="video/ogg"&gt;
  Your browser does not support the video tag.
&lt;/video&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Accessibility Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Provide captions or subtitles using the &lt;track&gt; element.</li>
                <li>Include descriptive text between the opening and closing &lt;video&gt; tags for unsupported browsers.</li>
                <li>Use the <code>muted</code> attribute with <code>autoplay</code> to comply with browser policies.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example with Captions</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;video controls width="640" height="360"&gt;
  &lt;source src="movie.mp4" type="video/mp4"&gt;
  &lt;track src="captions_en.vtt" kind="captions" srclang="en" label="English"&gt;
  Your browser does not support the video tag.
&lt;/video&gt;
            </code></pre>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/image-attrs') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Image Attributes</a></div>
    <div><a href="<?= base_url('html/audio') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Audio Tag →</a></div>
</div>
    </article>
</main>
