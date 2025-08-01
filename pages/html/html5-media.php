<?php
$title = "Audio & Video | SmartCodingTips";
$description = "Learn about audio & video in HTML. Understand key concepts, examples, and usage.";
$keywords = "audio, video, html tutorial, html basics";
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
            <li class="text-gray-500">Audio & Video</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Audio & Video in HTML5</h1>
        <p class=" mb-4">
            HTML5 introduced built-in support for audio and video, allowing developers to embed media content without relying on external plugins like Flash. These elements come with native controls and can be styled or customized using JavaScript and CSS.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">The <code>&lt;audio&gt;</code> Element</h2>
            <p class=" mb-2">
                The <code>&lt;audio&gt;</code> tag is used to embed sound content in a web page. It supports multiple source formats to ensure compatibility across browsers.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;audio controls&gt;
  &lt;source src="audio-file.mp3" type="audio/mpeg"&gt;
  &lt;source src="audio-file.ogg" type="audio/ogg"&gt;
  Your browser does not support the audio element.
&lt;/audio&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">The <code>&lt;video&gt;</code> Element</h2>
            <p class=" mb-2">
                The <code>&lt;video&gt;</code> tag embeds a video player with playback options like play, pause, and volume control. It also supports multiple formats.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;video width="320" height="240" controls&gt;
  &lt;source src="video-file.mp4" type="video/mp4"&gt;
  &lt;source src="video-file.ogg" type="video/ogg"&gt;
  Your browser does not support the video tag.
&lt;/video&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Additional Tags</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>&lt;source&gt;</code> – Specifies alternative media files for <code>&lt;audio&gt;</code> and <code>&lt;video&gt;</code>.</li>
                <li><code>&lt;track&gt;</code> – Used for specifying subtitles, captions, or other text tracks in videos.</li>
            </ul>
        </section>

         <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/html5-input') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: New Input Types</a>
    <a href="<?= base_url('html/html5-canvas') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Canvas →</a>
</div>
    </article>
</main>
