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
            <li class="text-gray-500">Text Alignment and Decoration</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Text Alignment and Decoration in Tailwind</h1>
        <p class=" mb-4">
            Tailwind makes it easy to align your text and apply decorative styles like underlines, line-throughs, and more using utility classes.
        </p>

        <!-- Text Alignment -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Text Alignment</h2>
            <p class=" mb-2">Use these classes to control horizontal alignment of text:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
text-left     /* Align text to the left (default) */
text-center   /* Align text to the center */
text-right    /* Align text to the right */
text-justify  /* Justify text */
            </pre>
            <div class="space-y-2 mt-4">
                <p class="text-left bg-gray-50 p-2 rounded">Left aligned text</p>
                <p class="text-center bg-gray-50 p-2 rounded">Center aligned text</p>
                <p class="text-right bg-gray-50 p-2 rounded">Right aligned text</p>
                <p class="text-justify bg-gray-50 p-2 rounded">This paragraph is justified. It expands to fill the width of its container by adjusting the spacing between words and characters.</p>
            </div>
        </section>

        <!-- Text Decoration -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Text Decoration</h2>
            <p class=" mb-2">Tailwind provides classes for common text decorations:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
underline            /* Underlines the text */
line-through         /* Strikes through the text */
no-underline         /* Removes underline */
decoration-dashed    /* Makes underline dashed */
decoration-double    /* Double underline */
decoration-wavy      /* Wavy underline */
decoration-none      /* No decoration */
            </pre>
            <div class="space-y-2 mt-4">
                <p class="underline text-blue-600">This is underlined text</p>
                <p class="line-through text-red-600">This text is struck through</p>
                <p class="no-underline text-green-600">This text has no underline</p>
                <p class="underline decoration-wavy decoration-blue-500">Wavy underline style</p>
            </div>
        </section>

        <!-- Decoration Color & Thickness -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Decoration Color & Thickness</h2>
            <p class=" mb-2">You can also customize decoration color and thickness:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
decoration-pink-500    /* Set decoration color */
decoration-2           /* Set decoration thickness */
            </pre>
            <div class="space-y-2 mt-4">
                <p class="underline decoration-pink-500 decoration-2">Pink thick underline</p>
                <p class="line-through decoration-yellow-400 decoration-4">Yellow thick line-through</p>
            </div>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>text-center</code> for headlines and banners.</li>
                <li>Underline only interactive elements like links for clarity.</li>
                <li>Use <code>no-underline</code> with buttons or custom link styles to control visuals.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind’s text alignment and decoration utilities give you precise control over typography and layout. Combine them with colors and spacing for clean, effective text styling.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="tailwind.php?page=tailwind/text-truncate" class="text-blue-600 hover:underline">Text Truncation & Clamping →</a></p>
        </div>
    </article>
</main>
