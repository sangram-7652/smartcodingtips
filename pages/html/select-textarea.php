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
                <a href="html.php" class="text-blue-600 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Select & Textarea</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Select & Textarea Elements</h1>
        <p class=" mb-4">
            The <code>&lt;select&gt;</code> and <code>&lt;textarea&gt;</code> elements are used in forms to capture user input through dropdown lists and multiline text respectively.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Select Dropdown</h2>
            <p class="mb-2">
                The <code>&lt;select&gt;</code> element creates a dropdown menu. Each item in the menu is defined with an <code>&lt;option&gt;</code> tag.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;label for="country"&gt;Choose your country:&lt;/label&gt;
&lt;select id="country" name="country"&gt;
  &lt;option value="india"&gt;India&lt;/option&gt;
  &lt;option value="usa"&gt;USA&lt;/option&gt;
  &lt;option value="uk"&gt;UK&lt;/option&gt;
&lt;/select&gt;
            </code></pre>
            <p class="mt-2 ">
                Always use the <code>label</code> element with a <code>for</code> attribute pointing to the <code>id</code> of the <code>select</code> for accessibility.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Textarea</h2>
            <p class="mb-2">
                The <code>&lt;textarea&gt;</code> element is used for multiline text input. It is ideal for comments, messages, or descriptions.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;label for="message"&gt;Your Message:&lt;/label&gt;&lt;br&gt;
&lt;textarea id="message" name="message" rows="4" cols="50"&gt;
Enter your message here...
&lt;/textarea&gt;
            </code></pre>
            <p class="mt-2 ">
                You can control the size of the <code>textarea</code> using the <code>rows</code> and <code>cols</code> attributes or CSS.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Always associate <code>&lt;label&gt;</code> with form elements for better usability.</li>
                <li>Use placeholder text in <code>textarea</code> for guidance, but never as a replacement for labels.</li>
                <li>Use the <code>selected</code> attribute in <code>&lt;option&gt;</code> to preselect a value.</li>
            </ul>
        </section>

        <div class="mt-4">
            <p class="font-semibold">Next: <a href="html.php?page=html/form-validation" class="text-blue-600 hover:underline">Validation →</a></p>
        </div>
    </article>
</main>
