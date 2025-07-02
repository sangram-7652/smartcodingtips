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
                <a href="tailwind.php" class="text-blue-600 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Line Height & Letter Spacing</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Line Height & Letter Spacing in Tailwind</h1>
        <p class="text-lg mb-4">
            Tailwind provides utility classes to control the spacing between lines of text and individual characters. This allows for better readability and typographic styling.
        </p>

        <!-- Line Height -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Line Height (Leading)</h2>
            <p class="text-lg mb-2">Use <code>leading-{size}</code> to adjust line height:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
leading-none      /* 1 */
leading-tight     /* 1.25 */
leading-snug      /* 1.375 */
leading-normal    /* 1.5 */
leading-relaxed   /* 1.625 */
leading-loose     /* 2 */
            </pre>
            <div class="space-y-2 mt-4">
                <p class="leading-tight bg-gray-50 p-2 rounded">This text has tight line height. <br> It appears closely packed.</p>
                <p class="leading-loose bg-gray-50 p-2 rounded">This text has loose line height. <br> It gives more breathing space between lines.</p>
            </div>
        </section>

        <!-- Letter Spacing -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Letter Spacing (Tracking)</h2>
            <p class="text-lg mb-2">Use <code>tracking-{value}</code> to control space between characters:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
tracking-tighter   /* -0.05em */
tracking-tight     /* -0.025em */
tracking-normal    /* 0em */
tracking-wide      /* 0.025em */
tracking-wider     /* 0.05em */
tracking-widest    /* 0.1em */
            </pre>
            <div class="space-y-2 mt-4">
                <p class="tracking-tight bg-gray-50 p-2 rounded">Tracking Tight: TEXT</p>
                <p class="tracking-widest bg-gray-50 p-2 rounded">Tracking Widest: TEXT</p>
            </div>
        </section>

        <!-- When to Use -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. When to Use</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use <code>leading-loose</code> for long paragraphs for better readability.</li>
                <li><code>tracking-wider</code> is great for uppercase titles or logos.</li>
                <li>Use <code>leading-tight</code> for compact designs like cards or buttons.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Controlling line height and letter spacing in Tailwind is simple and effective. These utilities help you craft clean, readable interfaces with consistent spacing.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/text-decor" class="text-blue-600 hover:underline">Text Alignment and Decoration →</a></p>
        </div>
    </article>
</main>
