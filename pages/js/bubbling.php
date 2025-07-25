<!-- JavaScript DOM - Bubbling vs Capturing -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/dom-bubbling-capturing" class="text-blue-600 dark:text-blue-400 hover:underline">Bubbling vs Capturing</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Bubbling vs Capturing in JavaScript</h1>

    <p class="mb-4">
        Events in JavaScript follow a flow called the **event propagation model**, which has two main phases:
        <strong>Capturing</strong> (top-down) and <strong>Bubbling</strong> (bottom-up).
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔽 Capturing Phase</h2>
    <p class="mb-4">
        The event starts from the <code>&lt;html&gt;</code> element and travels down to the target element. Capturing is rarely used.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔼 Bubbling Phase</h2>
    <p class="mb-4">
        The event starts from the target element and bubbles up to the root. Most event listeners in JavaScript use bubbling by default.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📊 Example Structure</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>&lt;div id="parent"&gt;
    &lt;button id="child"&gt;Click Me&lt;/button&gt;
&lt;/div&gt;</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 Bubbling Example (Default)</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>document.getElementById("parent").addEventListener("click", () =&gt; {
    console.log("Parent clicked (bubbling)");
});

document.getElementById("child").addEventListener("click", () =&gt; {
    console.log("Child clicked");
});</code></pre>

    <p class="mb-4">
        Clicking the button logs both messages — child first, then parent.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📥 Capturing Example (Third Argument: <code>true</code>)</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>document.getElementById("parent").addEventListener("click", () =&gt; {
    console.log("Parent clicked (capturing)");
}, true);

document.getElementById("child").addEventListener("click", () =&gt; {
    console.log("Child clicked");
});</code></pre>

    <p class="mb-4">
        Now the parent logs first because it's in the capturing phase.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🚫 Stopping Propagation</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>document.getElementById("child").addEventListener("click", (e) =&gt; {
    e.stopPropagation();
    console.log("Only child logs, bubbling stopped");
});</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Use <code>stopPropagation()</code> cautiously — it may block essential parent logic.
    </div>

    <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/delegation') ?>" class="hover:underline">← Previous: Event Delegation</a>
    <a href="<?= base_url('js/let-const') ?>" class="hover:underline ms-auto">Next: let & const →</a>
</div>
</main>
