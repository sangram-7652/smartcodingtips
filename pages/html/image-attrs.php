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
            <li class="text-gray-500">Image Attributes</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Image Tag Attributes</h1>
        <p class=" mb-4">
            The &lt;img&gt; tag in HTML supports several attributes that control how images are displayed and behave on a webpage. Understanding these attributes is key to effective image usage.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. src (Source)</h2>
            <p class=" mb-2">
                Specifies the path or URL of the image file to display.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap  dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;img src="images/photo.jpg" alt="A beautiful scenery"&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. alt (Alternative Text)</h2>
            <p class=" mb-2">
                Provides descriptive text for the image, shown if the image cannot load and used by screen readers for accessibility.
            </p>
            <pre class="bg-gray-100  rounded overflow-x-auto whitespace-pre-wrap  dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;img src="logo.png" alt="Company Logo"&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. width and height</h2>
            <p class=" mb-2">
                Defines the displayed width and height of the image in pixels. Using these can help prevent layout shifts while the image loads.
            </p>
            <pre class="bg-gray-100  rounded overflow-x-auto whitespace-pre-wrap  dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;img src="photo.jpg" alt="Scenery" width="600" height="400"&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. title</h2>
            <p class=" mb-2">
                Provides additional information shown as a tooltip when the user hovers over the image.
            </p>
            <pre class="bg-gray-100  rounded overflow-x-auto whitespace-pre-wrap  dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;img src="icon.png" alt="Settings" title="Settings Icon"&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. loading</h2>
            <p class=" mb-2">
                Controls lazy loading behavior for images to improve page load speed. Common values:
            </p>
            <ul class="list-disc list-inside  mb-2">
                <li><code>lazy</code>: Defer loading the image until it’s near the viewport.</li>
                <li><code>eager</code>: Load the image immediately (default behavior).</li>
            </ul>
            <pre class="bg-gray-100  rounded overflow-x-auto whitespace-pre-wrap  dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;img src="large-photo.jpg" alt="Landscape" loading="lazy"&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. srcset and sizes (Responsive Images)</h2>
            <p class=" mb-2">
                Allow specifying multiple image sources for different screen sizes or resolutions.
            </p>
            <pre class="bg-gray-100  rounded overflow-x-auto whitespace-pre-wrap  dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;img 
  src="small.jpg" 
  srcset="small.jpg 500w, medium.jpg 1000w, large.jpg 1500w" 
  sizes="(max-width: 600px) 500px, 1000px" 
  alt="Responsive Image"&gt;
            </code></pre>
            <p>
                This helps the browser pick the best image version to optimize loading.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">7. usemap (Image Maps)</h2>
            <p class=" mb-2">
                Specifies a reference to an image map defined elsewhere in the document, allowing clickable areas on the image.
            </p>
            <pre class="bg-gray-100  rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm break-all">
&lt;img src="plan.jpg" alt="Floor Plan" usemap="#floorplan"&gt;

&lt;map name="floorplan"&gt;
  &lt;area shape="rect" coords="34,44,270,350" href="room1.html" alt="Room 1"&gt;
&lt;/map&gt;
            </code></pre>
        </section>

        <section class="mb-6 ">
            <h2 class="text-2xl font-semibold mb-2">Summary of Common Image Attributes</h2>
            <table class="table-auto min-w-full   border border-gray-300 text-left mb-4 ">
                <thead>
                    <tr class="bg-gray-200 dark:bg-gray-900 dark:text-white">
                        <th class=" border">Attribute</th>
                        <th class=" border">Purpose</th>
                        <th class=" border">Example</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td class=" border"><code>src</code></td>
                        <td class=" border">Image source URL</td>
                        <td class=" border">&lt;img src="image.jpg"&gt;</td>
                    </tr>
                    <tr>
                        <td class=" border"><code>alt</code></td>
                        <td class=" border">Alternative text for accessibility</td>
                        <td class=" border">&lt;img alt="Description"&gt;</td>
                    </tr>
                    <tr>
                        <td class=" border"><code>width</code></td>
                        <td class=" border">Width in pixels</td>
                        <td class=" border">&lt;img width="300"&gt;</td>
                    </tr>
                    <tr>
                        <td class=" border"><code>height</code></td>
                        <td class=" border">Height in pixels</td>
                        <td class=" border">&lt;img height="200"&gt;</td>
                    </tr>
                    <tr>
                        <td class=" border"><code>title</code></td>
                        <td class=" border">Tooltip text on hover</td>
                        <td class=" border">&lt;img title="Info"&gt;</td>
                    </tr>
                    <tr>
                        <td class=" border"><code>loading</code></td>
                        <td class=" border">Lazy loading control</td>
                        <td class=" border">&lt;img loading="lazy"&gt;</td>
                    </tr>
                    <tr>
                        <td class=" border"><code>srcset</code></td>
                        <td class=" border">Responsive image sources</td>
                        <td class=" border">&lt;img srcset="img1.jpg 500w, img2.jpg 1000w"&gt;</td>
                    </tr>
                    <tr>
                        <td class=" border"><code>usemap</code></td>
                        <td class=" border">Reference image map</td>
                        <td class=" border">&lt;img usemap="#mapname"&gt;</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <div class="mt-4">
            <p class="font-semibold">Next: <a href="html.php?page=html/video" class="text-blue-600 hover:underline">Video Tag →</a></p>
        </div>
    </article>
</main>