<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Simple Blog Layout</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Simple Blog Layout Using HTML & Tailwind</h1>

        <section class="mb-6">
            <p class="text-lg mb-2">
                Creating a blog layout involves organizing posts into a clean and readable format. Below is a basic blog layout with a header, post cards, and a sidebar-style design.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">HTML Code Example</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="grid md:grid-cols-3 gap-6"&gt;
  &lt;!-- Main Blog Area --&gt;
  &lt;div class="md:col-span-2 space-y-6"&gt;
    &lt;article class="border p-4 rounded shadow"&gt;
      &lt;h2 class="text-xl font-bold"&gt;Post Title One&lt;/h2&gt;
      &lt;p class="text-sm text-gray-600"&gt;June 25, 2025 by Admin&lt;/p&gt;
      &lt;p class="mt-2 text-gray-700"&gt;
        This is a short excerpt from the blog post content. Click below to read more.
      &lt;/p&gt;
      &lt;a href="#" class="text-blue-600 hover:underline mt-2 inline-block"&gt;Read More →&lt;/a&gt;
    &lt;/article&gt;

    &lt;article class="border p-4 rounded shadow"&gt;
      &lt;h2 class="text-xl font-bold"&gt;Post Title Two&lt;/h2&gt;
      &lt;p class="text-sm text-gray-600"&gt;June 20, 2025 by Admin&lt;/p&gt;
      &lt;p class="mt-2 text-gray-700"&gt;
        Another example of a blog post layout with a preview paragraph and a "read more" link.
      &lt;/p&gt;
      &lt;a href="#" class="text-blue-600 hover:underline mt-2 inline-block"&gt;Read More →&lt;/a&gt;
    &lt;/article&gt;
  &lt;/div&gt;

  &lt;!-- Sidebar --&gt;
  &lt;aside class="space-y-4"&gt;
    &lt;div class="bg-gray-100 p-4 rounded"&gt;
      &lt;h3 class="font-bold mb-2"&gt;Categories&lt;/h3&gt;
      &lt;ul class="list-disc list-inside text-sm text-gray-700"&gt;
        &lt;li&gt;HTML&lt;/li&gt;
        &lt;li&gt;CSS&lt;/li&gt;
        &lt;li&gt;JavaScript&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;

    &lt;div class="bg-gray-100 p-4 rounded"&gt;
      &lt;h3 class="font-bold mb-2"&gt;Recent Posts&lt;/h3&gt;
      &lt;ul class="text-sm text-blue-600 space-y-1"&gt;
        &lt;li&gt;&lt;a href="#" class="hover:underline"&gt;Understanding Flexbox&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#" class="hover:underline"&gt;Semantic HTML Tips&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#" class="hover:underline"&gt;Grid Layout Basics&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/aside&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Tips for Better Blog Layouts</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use a consistent style for blog cards/posts.</li>
                <li>Ensure typography is clean and easy to read.</li>
                <li>Highlight recent or featured posts.</li>
                <li>Optimize for mobile using responsive design.</li>
            </ul>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="photo-gallery.php" class="text-blue-600 hover:underline">Photo Gallery →</a></p>
        </div>
    </article>
</main>
