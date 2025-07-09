<!-- JavaScript Break and Continue -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/break-continue" class="text-blue-600 hover:underline">Break & Continue</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Break and Continue in JavaScript</h1>

    <p class="mb-4">
        The <code>break</code> and <code>continue</code> statements are used to control the flow of loops in JavaScript.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🚫 1. <code>break</code> Statement</h2>
    <p class="mb-4">
        The <code>break</code> statement immediately exits the loop or switch block it's in.
    </p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>for (let i = 1; i &lt;= 5; i++) {
    if (i === 3) {
        break;
    }
    console.log(i);
}</code></pre>

    <p class="mb-4">Output will be: <code>1</code>, <code>2</code>. The loop stops when <code>i === 3</code>.</p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⏭️ 2. <code>continue</code> Statement</h2>
    <p class="mb-4">
        The <code>continue</code> statement skips the current iteration and moves to the next one.
    </p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>for (let i = 1; i &lt;= 5; i++) {
    if (i === 3) {
        continue;
    }
    console.log(i);
}</code></pre>

    <p class="mb-4">Output will be: <code>1</code>, <code>2</code>, <code>4</code>, <code>5</code>. The number <code>3</code> is skipped.</p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 Use Cases</h2>
    <ul class="list-disc list-inside mb-6">
        <li><strong>break</strong> – Exit the loop early when a condition is met</li>
        <li><strong>continue</strong> – Skip an iteration and move to the next</li>
    </ul>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded">
        💡 <strong>Tip:</strong> Use <code>continue</code> carefully to avoid skipping important logic. Always test your loop output.
    </div>

</main>
