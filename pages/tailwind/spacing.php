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
            <li class="text-gray-500">Container, Spacing (Padding, Margin)</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Container, Spacing (Padding, Margin) in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind CSS provides intuitive utility classes to control spacing and layout. Let’s explore how to use the <code>container</code> class, along with spacing utilities like <code>padding</code> and <code>margin</code>.
        </p>

        <!-- Container -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. The <code>container</code> Class</h2>
            <p class=" mb-2">
                The <code>container</code> class centers your content and applies responsive max-widths:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="container mx-auto px-4"&gt;
    &lt;p&gt;This content is centered and padded.&lt;/p&gt;
&lt;/div&gt;
            </pre>
            <p class=" mt-2"><code>mx-auto</code> centers the container horizontally. <code>px-4</code> adds horizontal padding.</p>
        </section>

        <!-- Margin -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Margin Utilities</h2>
            <p class=" mb-2">Use <code>m-</code>, <code>mt-</code>, <code>mb-</code>, <code>ml-</code>, <code>mr-</code>, and <code>mx-</code>/<code>my-</code> for margin control:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="mt-6 mb-4"&gt;Top and bottom margins&lt;/div&gt;
&lt;div class="mx-2"&gt;Horizontal margin (left + right)&lt;/div&gt;
&lt;div class="m-0"&gt;No margin&lt;/div&gt;
            </pre>
        </section>

        <!-- Padding -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Padding Utilities</h2>
            <p class=" mb-2">Use <code>p-</code>, <code>pt-</code>, <code>pb-</code>, <code>pl-</code>, <code>pr-</code>, and <code>px-</code>/<code>py-</code> for padding:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="p-4"&gt;Uniform padding&lt;/div&gt;
&lt;div class="pt-8 pb-2"&gt;Top and bottom padding&lt;/div&gt;
&lt;div class="px-6"&gt;Left and right padding&lt;/div&gt;
            </pre>
        </section>

        <!-- Responsive Spacing -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Responsive Spacing</h2>
            <p class=" mb-2">You can apply different spacing values for each breakpoint:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="p-2 md:p-6 lg:p-10"&gt;Responsive padding changes with screen size&lt;/div&gt;
            </pre>
        </section>

        <!-- Negative Margin -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Negative Margin</h2>
            <p class=" mb-2">Use <code>-m-</code> classes to pull elements closer together:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="-mt-4"&gt;Moves element up by 1rem (mt-4 in reverse)&lt;/div&gt;
            </pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Mastering Tailwind’s spacing system allows you to build pixel-perfect layouts with minimal custom CSS. Padding and margin utilities are consistent, predictable, and responsive.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="tailwind.php?page=tailwind/sizing" class="text-blue-600 hover:underline">Widths, Heights, Max/Min →</a></p>
        </div>
    </article>
</main>
