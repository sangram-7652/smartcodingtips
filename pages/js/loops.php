<!-- JavaScript Loops -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/loops" class="text-blue-600 dark:text-blue-400 hover:underline">Loops</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Loops in JavaScript</h1>

    <p class="mb-4">
        Loops allow you to run a block of code repeatedly. JavaScript supports several loop types including <code>for</code>, <code>while</code>, and <code>do...while</code>.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 1. <code>for</code> Loop</h2>
    <p class="mb-4">
        A concise loop structure often used when the number of iterations is known.
    </p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>for (let i = 1; i &lt;= 5; i++) {
    console.log("Iteration:", i);
}</code></pre>

    <p class="mb-4">This prints numbers from 1 to 5.</p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔄 2. <code>while</code> Loop</h2>
    <p class="mb-4">
        Repeats a block of code as long as a condition is true.
    </p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>let count = 1;

while (count &lt;= 3) {
    console.log("Count:", count);
    count++;
}</code></pre>

    <p class="mb-4">Runs until <code>count</code> exceeds 3.</p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 3. <code>do...while</code> Loop</h2>
    <p class="mb-4">
        Executes the block once before checking the condition.
    </p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>let num = 1;

do {
    console.log("Number:", num);
    num++;
} while (num &lt;= 2);</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mb-6">
        ⚠️ The <code>do...while</code> loop always runs at least once, even if the condition is false.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 When to Use Each Loop</h2>
    <ul class="list-disc list-inside mb-6">
        <li><strong>for</strong> – Best for counting loops (e.g., iterate from 1 to 10)</li>
        <li><strong>while</strong> – Use when condition should be checked before each iteration</li>
        <li><strong>do...while</strong> – Use when the code must run at least once</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded">
        ✅ <strong>Tip:</strong> Always ensure your loop has a terminating condition to avoid infinite loops.
    </div>

   <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/if-else') ?>" class="hover:underline">← Previous: If, Else, Switch</a>
    <a href="<?= base_url('js/break-continue') ?>" class="hover:underline ms-auto">Next: Break & Continue →</a>
</div>
</main>
