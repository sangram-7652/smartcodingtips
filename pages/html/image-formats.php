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
            <li class="text-gray-500">Supported Image Formats</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Supported Image Formats in HTML</h1>
        <p class=" mb-4">
            Web browsers support a variety of image formats, each with its own strengths and typical use cases. Choosing the right format can improve image quality, loading speed, and user experience.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. JPEG / JPG</h2>
            <p class=" mb-2">
                JPEG is widely used for photographs and complex images with many colors. It uses lossy compression to reduce file size but may lose some quality.
            </p>
            <ul class="list-disc list-inside  mb-2">
                <li>Supports millions of colors</li>
                <li>Best for photographs and realistic images</li>
                <li>Does not support transparency</li>
                <li>File extension: <code>.jpg</code> or <code>.jpeg</code></li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. PNG (Portable Network Graphics)</h2>
            <p class=" mb-2">
                PNG supports lossless compression and transparency, making it ideal for logos, icons, and graphics with sharp edges or transparent backgrounds.
            </p>
            <ul class="list-disc list-inside  mb-2">
                <li>Supports transparency and alpha channel</li>
                <li>Lossless compression (higher quality)</li>
                <li>File extension: <code>.png</code></li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. GIF (Graphics Interchange Format)</h2>
            <p class=" mb-2">
                GIF supports simple animations and transparency but is limited to 256 colors, making it less suitable for detailed images.
            </p>
            <ul class="list-disc list-inside  mb-2">
                <li>Supports animation</li>
                <li>Limited color palette (256 colors)</li>
                <li>Supports simple transparency</li>
                <li>File extension: <code>.gif</code></li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. SVG (Scalable Vector Graphics)</h2>
            <p class=" mb-2">
                SVG is a vector image format, perfect for icons, logos, and illustrations that need to scale to any size without quality loss.
            </p>
            <ul class="list-disc list-inside  mb-2">
                <li>Scalable without pixelation</li>
                <li>Editable via code or graphic software</li>
                <li>Supports animation and interactivity</li>
                <li>File extension: <code>.svg</code></li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. WebP</h2>
            <p class=" mb-2">
                WebP is a modern image format developed by Google that provides superior compression for both lossy and lossless images, reducing file size while maintaining quality.
            </p>
            <ul class="list-disc list-inside  mb-2">
                <li>Supports lossy and lossless compression</li>
                <li>Supports transparency</li>
                <li>Better compression rates than JPEG and PNG</li>
                <li>Supported by most modern browsers</li>
                <li>File extension: <code>.webp</code></li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Browser Support Considerations</h2>
            <p class=" mb-2">
                While JPEG, PNG, GIF, and SVG have broad browser support, newer formats like WebP are supported in most but not all browsers. It's common to provide fallback images for unsupported browsers.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Choosing the Right Format</h2>
            <ul class="list-disc list-inside ">
                <li>Use <strong>JPEG</strong> for photographs and complex images.</li>
                <li>Use <strong>PNG</strong> for images requiring transparency or sharp lines.</li>
                <li>Use <strong>GIF</strong> for simple animations.</li>
                <li>Use <strong>SVG</strong> for scalable icons and logos.</li>
                <li>Use <strong>WebP</strong> to optimize performance with modern browsers.</li>
            </ul>
        </section>

       <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/images') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Images</a></div>
    <div><a href="<?= base_url('html/image-attrs') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Image Attributes →</a></div>
</div>

    </article>
</main>
