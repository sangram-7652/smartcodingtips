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
                <a href="css-tutorials.php" class="text-blue-600 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Keyframe Animations</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Keyframe Animations</h1>
        <p class=" mb-4">
            Keyframe animations in CSS allow you to define complex animations by specifying styles at various points during the animation sequence. This gives you full control over how elements animate.
        </p>

        <!-- Basic Syntax -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Syntax</h2>
            <p class=" mb-2">Use the <code>@keyframes</code> rule to define animation stages, and apply the animation using the <code>animation</code> property:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
@keyframes slideRight {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(100px);
    }
}

.box {
    animation: slideRight 2s ease-in-out;
}
            </code></pre>
        </section>

        <!-- Multiple Steps with Percentages -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Multiple Steps with Percentages</h2>
            <p class=" mb-2">Define multiple stages using percentages:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
@keyframes bounce {
    0%   { transform: translateY(0); }
    50%  { transform: translateY(-50px); }
    100% { transform: translateY(0); }
}

.bounce-box {
    animation: bounce 1s infinite;
}
            </code></pre>
        </section>

        <!-- Animation Properties -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Animation Properties</h2>
            <ul class="list-disc list-inside ">
                <li><code>animation-name</code> – the keyframe animation name</li>
                <li><code>animation-duration</code> – how long the animation runs</li>
                <li><code>animation-timing-function</code> – easing function</li>
                <li><code>animation-delay</code> – delay before animation starts</li>
                <li><code>animation-iteration-count</code> – number of repetitions (<code>infinite</code> allowed)</li>
                <li><code>animation-direction</code> – <code>normal</code>, <code>reverse</code>, <code>alternate</code></li>
                <li><code>animation-fill-mode</code> – defines final styles after animation (<code>forwards</code>, <code>backwards</code>)</li>
            </ul>
        </section>

        <!-- Shorthand Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Shorthand Example</h2>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.animate {
    animation: pulse 1.5s ease-in-out infinite;
}

@keyframes pulse {
    0%   { transform: scale(1); }
    50%  { transform: scale(1.1); }
    100% { transform: scale(1); }
}
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use animations to enhance UX, not distract.</li>
                <li>Keep durations short (typically under 2 seconds).</li>
                <li>Combine with <code>transform</code> or <code>opacity</code> for better performance.</li>
                <li>Use <code>prefers-reduced-motion</code> media query for accessibility.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Keyframe animations provide fine-grained control over element motion, enabling you to create everything from subtle effects to complex interactive animations — all with pure CSS.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="css-media-queries.php" class="text-blue-600 hover:underline">CSS Media Queries →</a></p>
        </div>
    </article>
</main>
