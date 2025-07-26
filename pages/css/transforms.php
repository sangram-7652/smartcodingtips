<?php
$title = "2D & 3D Transforms in CSS | SmartCodingTips";
$description = "Rotate, scale, and move elements in 2D and 3D space using CSS transforms.";
$keywords = "css transform, css rotate, 3d transform, translate scale, css effects";
?>

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
            <li class="text-gray-500">2D & 3D Transforms</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">2D & 3D Transforms in CSS</h1>
        <p class=" mb-4">
            CSS transforms allow you to visually manipulate elements by rotating, scaling, translating, or skewing them. You can apply transformations in both 2D and 3D space using the <code>transform</code> property.
        </p>

        <!-- 2D Transforms -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. 2D Transforms</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>translate(x, y)</code> – moves the element</li>
                <li><code>rotate(angle)</code> – rotates the element</li>
                <li><code>scale(x, y)</code> – resizes the element</li>
                <li><code>skew(x-angle, y-angle)</code> – skews the element</li>
            </ul>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.box {
    transform: translate(50px, 20px) rotate(10deg) scale(1.2);
}
            </code></pre>
        </section>

        <!-- 3D Transforms -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. 3D Transforms</h2>
            <p class=" mb-2">
                3D transforms add depth to the element using the Z-axis. Make sure to set the <code>perspective</code> for the parent container.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.scene {
    perspective: 1000px;
}

.cube {
    transform: rotateX(30deg) rotateY(45deg);
}
            </code></pre>
        </section>

        <!-- Transform Origin -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Transform Origin</h2>
            <p class=" mb-2">
                Controls the pivot point of the transform:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.box {
    transform-origin: top left;
    transform: rotate(15deg);
}
            </code></pre>
        </section>

        <!-- Combining Transforms -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Combining Transforms</h2>
            <p class=" mb-2">You can combine multiple transforms in one rule:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.box {
    transform: scale(1.1) translateX(20px) rotateZ(10deg);
}
            </code></pre>
        </section>

        <!-- Hardware Acceleration -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Hardware Acceleration Tip</h2>
            <p class=" mb-2">
                Use <code>transform: translateZ(0);</code> to trigger GPU acceleration and smoother animations:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.card {
    transform: translateZ(0);
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS 2D and 3D transforms provide powerful ways to enhance layouts and animations. Use them to rotate, scale, move, and skew elements with creativity and control.
            </p>
        </section>

       <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/animations') ?>" class="text-blue-600 hover:underline">← Previous: Keyframe Animations</a> 
   <a href="<?= base_url('css/media-queries') ?>" class="text-blue-600 hover:underline ms-auto">Next: Media Queries →</a> 
</div>
    </article>
</main>
