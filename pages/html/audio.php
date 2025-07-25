<?php
$title = "Audio Tag | SmartCodingTips";
$description = "Learn about audio tag in HTML. Understand key concepts, examples, and usage.";
$keywords = "audio, tag, html tutorial, html basics";
?>
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
            <li class="text-gray-500">Audio Tag</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Using the HTML &lt;audio&gt; Tag</h1>
        <p class=" mb-4">
            The &lt;audio&gt; tag is used to embed audio content such as music or sound effects in a webpage. It supports multiple source formats and playback controls.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Audio Example</h2>
            <p class="mb-2">A simple audio element with controls:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;audio controls&gt;
  &lt;source src="audio.mp3" type="audio/mpeg"&gt;
  Your browser does not support the audio element.
&lt;/audio&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Attributes of &lt;audio&gt;</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>src</code>: Specifies the audio file URL (optional if using &lt;source&gt; elements).</li>
                <li><code>controls</code>: Displays playback controls like play, pause, and volume.</li>
                <li><code>autoplay</code>: Starts playing the audio automatically (muted audio recommended for autoplay).</li>
                <li><code>loop</code>: Repeats the audio indefinitely.</li>
                <li><code>muted</code>: Starts the audio muted.</li>
                <li><code>preload</code>: Indicates if and how the audio should be loaded when the page loads (values: <code>auto</code>, <code>metadata</code>, <code>none</code>).</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Multiple Sources for Compatibility</h2>
            <p class="mb-2">
                Providing multiple audio sources in different formats improves browser compatibility.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;audio controls preload="auto"&gt;
  &lt;source src="audio.mp3" type="audio/mpeg"&gt;
  &lt;source src="audio.ogg" type="audio/ogg"&gt;
  Your browser does not support the audio element.
&lt;/audio&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Accessibility Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Include fallback text between &lt;audio&gt; tags for unsupported browsers.</li>
                <li>Use captions or transcripts for audio content to improve accessibility.</li>
                <li>Use the <code>preload</code> attribute wisely to optimize page load.</li>
            </ul>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/video') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Video Tag</a>
    <a href="<?= base_url('html/iframe') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: iFrames →</a>
</div>
    </article>
</main>