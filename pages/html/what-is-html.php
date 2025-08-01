<?php
$title = "What is HTML? | SmartCodingTips";
$description = "Learn about what is html? in HTML. Understand key concepts, examples, and usage.";
$keywords = "what, is, html, html tutorial, html basics";
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
            <li class="text-gray-500">What is HTML?</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">What is HTML?</h1>
        <p class="  mb-4">
            HTML stands for <strong>HyperText Markup Language</strong>. It is the standard language used to create web pages and web applications. HTML structures the content on the web, telling the browser how to display text, images, links, and other elements.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Why is HTML Important?</h2>
            <ul class="list-disc list-inside  ">
                <li><strong>Foundation of Websites:</strong> Every website you visit is built using HTML in some form.</li>
                <li><strong>Compatible with All Browsers:</strong> HTML is universally supported and forms the core of web technology.</li>
                <li><strong>Easy to Learn:</strong> HTML has a simple syntax and is beginner-friendly, making it the first step for aspiring web developers.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Structure of an HTML Document</h2>
            <p class="  mb-2">Every HTML page follows a specific structure, like this:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto  bg-white text-black dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Page Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Hello, World!&lt;/h1&gt;
        &lt;p&gt;This is a paragraph.&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Key Features of HTML</h2>
            <ol class="list-decimal list-inside  ">
                <li><strong>Elements and Tags:</strong> HTML uses tags like <code>&lt;p&gt;</code>, <code>&lt;h1&gt;</code>, and <code>&lt;a&gt;</code> to define content.</li>
                <li><strong>Hyperlinks:</strong> You can connect one page to another using anchor tags (<code>&lt;a&gt;</code>).</li>
                <li><strong>Media Integration:</strong> HTML allows adding images, videos, audio, and more.</li>
            </ol>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class=" ">HTML is the first language every web developer must learn. It lays the foundation for structuring and displaying content on the web. With its simple syntax and powerful features, HTML is the stepping stone toward building websites and web applications.</p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
            <div></div>
            <a href="<?= base_url('html/features') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Features of HTML →</a>
        </div>
    </article>
</main>