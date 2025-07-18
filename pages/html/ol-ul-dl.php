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
            <li class="text-gray-500">Types of Lists</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Types of Lists in HTML</h1>
        <p class=" mb-4">
            HTML provides several types of lists that help organize content. These include ordered lists, unordered lists, and description lists.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Ordered List (&lt;ol&gt;)</h2>
            <p class="mb-2">
                An ordered list is used when the sequence of items is important. Each item is numbered automatically.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;ol&gt;
  &lt;li&gt;HTML&lt;/li&gt;
  &lt;li&gt;CSS&lt;/li&gt;
  &lt;li&gt;JavaScript&lt;/li&gt;
&lt;/ol&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Unordered List (&lt;ul&gt;)</h2>
            <p class="mb-2">
                An unordered list displays items with bullet points. It's used when the order does not matter.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;ul&gt;
  &lt;li&gt;Apple&lt;/li&gt;
  &lt;li&gt;Banana&lt;/li&gt;
  &lt;li&gt;Cherry&lt;/li&gt;
&lt;/ul&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Description List (&lt;dl&gt;)</h2>
            <p class="mb-2">
                A description list is used for name/value pairs, like terms and their definitions.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;dl&gt;
  &lt;dt&gt;HTML&lt;/dt&gt;
  &lt;dd&gt;A markup language for creating web pages.&lt;/dd&gt;
  &lt;dt&gt;CSS&lt;/dt&gt;
  &lt;dd&gt;A style sheet language used to describe the appearance of web pages.&lt;/dd&gt;
&lt;/dl&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">List Nesting Example</h2>
            <p class="mb-2">Lists can be nested inside each other for complex structures:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;ul&gt;
  &lt;li&gt;Frontend
    &lt;ul&gt;
      &lt;li&gt;HTML&lt;/li&gt;
      &lt;li&gt;CSS&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Backend&lt;/li&gt;
&lt;/ul&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Accessibility Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Use semantic list tags (&lt;ol&gt;, &lt;ul&gt;, &lt;dl&gt;) for structure and screen readers.</li>
                <li>Keep nesting levels minimal for readability and accessibility.</li>
                <li>Include descriptive text to clarify list items where needed.</li>
            </ul>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/iframe') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: iFrames</a></div>
    <div><a href="<?= base_url('html/create-table') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Creating Tables →</a></div>
</div>
    </article>
</main>
