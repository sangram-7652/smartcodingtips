<!-- JavaScript DOM Selectors -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/dom-selectors" class="text-blue-600 dark:text-blue-400 hover:underline">DOM Selectors</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">DOM Selectors in JavaScript</h1>

    <p class="mb-4">
        DOM selectors are methods used to access elements in the HTML document. These allow JavaScript to read and manipulate the content, structure, and style of elements.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 Common DOM Selection Methods</h2>

    <ul class="list-disc list-inside mb-4">
        <li><code>document.getElementById("id")</code> – Selects a single element by its ID</li>
        <li><code>document.getElementsByClassName("class")</code> – Returns a live HTMLCollection</li>
        <li><code>document.getElementsByTagName("tag")</code> – Returns elements by tag name</li>
        <li><code>document.querySelector("selector")</code> – Selects the first match (CSS-style)</li>
        <li><code>document.querySelectorAll("selector")</code> – Selects all matches (NodeList)</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📘 Examples</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>&lt;div id="main" class="box"&gt;Hello&lt;/div&gt;
&lt;p class="text"&gt;Paragraph&lt;/p&gt;
&lt;p class="text"&gt;Another&lt;/p&gt;

const el1 = document.getElementById("main");
const el2 = document.getElementsByClassName("text"); // HTMLCollection
const el3 = document.querySelector(".text"); // First &lt;p&gt;
const el4 = document.querySelectorAll(".text"); // NodeList of both &lt;p&gt;
</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 NodeList vs HTMLCollection</h2>
    <p class="mb-4">
        <strong>HTMLCollection</strong> is live — it updates automatically when the DOM changes.  
        <strong>NodeList</strong> from <code>querySelectorAll</code> is static — it doesn’t auto-update.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Looping Through NodeLists</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>document.querySelectorAll(".text").forEach(p =&gt; {
    console.log(p.textContent);
});</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Prefer <code>querySelector</code> and <code>querySelectorAll</code> for flexibility using CSS selectors.
    </div>

   <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/dom-intro') ?>" class="hover:underline">← Previous: What is the DOM?</a>
    <a href="<?= base_url('js/dom-update') ?>" class="hover:underline ms-auto">Next: Changing Content →</a>
</div>
</main>
