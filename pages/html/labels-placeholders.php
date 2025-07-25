<?php
$title = "Labels & Placeholders | SmartCodingTips";
$description = "Learn about labels & placeholders in HTML. Understand key concepts, examples, and usage.";
$keywords = "labels, placeholders, html tutorial, html basics";
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
            <li class="text-gray-500">Labels & Placeholders</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Labels & Placeholders</h1>
        <p class=" mb-4">
            Labels and placeholders are used in forms to guide users in entering the correct information. They improve accessibility and user experience.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Label Tag</h2>
            <p class="mb-2">
                The <code>&lt;label&gt;</code> tag is used to define a label for an input element. When clicked, the label focuses the associated input field.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;label for="email"&gt;Email Address:&lt;/label&gt;
&lt;input type="email" id="email" name="email"&gt;
            </code></pre>
            <p class="mt-2 ">
                The <code>for</code> attribute in the label must match the <code>id</code> of the input to link them.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Placeholder Attribute</h2>
            <p class="mb-2">
                The <code>placeholder</code> attribute displays temporary text in the input field. It gives a hint about what to enter.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;input type="text" name="name" placeholder="Enter your full name"&gt;
            </code></pre>
            <p class="mt-2 ">
                Placeholders disappear when the user starts typing and should not be used as a replacement for labels.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example: Using Labels and Placeholders</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;form action="submit.php" method="post"&gt;
  &lt;label for="name"&gt;Full Name:&lt;/label&gt;
  &lt;input type="text" id="name" name="name" placeholder="John Doe"&gt;&lt;br&gt;&lt;br&gt;

  &lt;label for="email"&gt;Email:&lt;/label&gt;
  &lt;input type="email" id="email" name="email" placeholder="example@email.com"&gt;&lt;br&gt;&lt;br&gt;

  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Always use labels to improve form accessibility.</li>
                <li>Placeholders should be short and helpful hints, not detailed instructions.</li>
                <li>Don’t rely solely on placeholders—they vanish once the user starts typing.</li>
            </ul>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/form-input-types') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Input Types</a>
    <a href="<?= base_url('html/checkbox-radio') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Checkbox & Radio →</a>
</div>
    </article>
</main>
