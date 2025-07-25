<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/async-await" class="text-blue-600 dark:text-blue-400 hover:underline">Async/Await with APIs</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">⏳ Using Async/Await with APIs in JavaScript</h1>

    <p class="mb-4">
        <strong>Async/Await</strong> simplifies working with asynchronous code like API requests. It makes code easier to read and write, especially when dealing with multiple steps in a sequence.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🚀 Basic Example</h2>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded mb-4 text-sm dark:bg-gray-800 dark:text-white"><code>async function getData() {
  try {
    const response = await fetch("https://jsonplaceholder.typicode.com/posts/1");
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error("Error fetching data:", error);
  }
}

getData();</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 Breakdown</h2>
    <ul class="list-disc list-inside mb-6">
        <li><code>async</code> makes a function return a promise</li>
        <li><code>await</code> waits for a promise to resolve</li>
        <li><code>try/catch</code> handles errors gracefully</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📝 Posting Data Example</h2>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded mb-4 text-sm dark:bg-gray-800 dark:text-white"><code>async function postData() {
  try {
    const response = await fetch("https://jsonplaceholder.typicode.com/posts", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ title: "Hello", body: "World", userId: 1 })
    });

    const result = await response.json();
    console.log(result);
  } catch (error) {
    console.error("Error posting data:", error);
  }
}

postData();</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Why Use Async/Await?</h2>
    <ul class="list-disc list-inside mb-6">
        <li>Cleaner and more readable than chaining <code>.then()</code></li>
        <li>Works just like synchronous code</li>
        <li>Handles multiple asynchronous steps sequentially</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4 rounded mt-6">
        ✅ <strong>Next Tip:</strong> Combine multiple API calls using <code>Promise.all()</code> for parallel execution!
    </div>

    <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/json') ?>" class="hover:underline">← Previous: Working with JSON</a>
    <a href="<?= base_url('js/display-api') ?>" class="hover:underline ms-auto">Next: Display Fetched Data →</a>
</div>
</main>
