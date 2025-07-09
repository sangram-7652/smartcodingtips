<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/promises" class="text-blue-600 hover:underline">Promises</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">📦 JavaScript Promises</h1>

  <p class="mb-4">
    A Promise is a special JavaScript object that represents a value that may be available now, later, or never. It’s a cleaner alternative to deeply nested callbacks and is commonly used for asynchronous operations like API requests.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🛠️ Creating a Promise</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>const myPromise = new Promise((resolve, reject) => {
  const success = true;

  if (success) {
    resolve("✅ Success!");
  } else {
    reject("❌ Failed!");
  }
});</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔗 Consuming a Promise</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>myPromise
  .then(result => console.log(result))   // Success handler
  .catch(error => console.error(error)) // Error handler
  .finally(() => console.log("Done!")); // Always runs</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">⏳ Real Example: Simulate API Delay</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>function fetchData() {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve("📡 Data received after 2 seconds");
    }, 2000);
  });
}

fetchData().then(data => console.log(data));</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔄 Promise States</h2>
  <ul class="list-disc list-inside mb-4">
    <li><strong>Pending</strong>: Initial state, neither fulfilled nor rejected.</li>
    <li><strong>Fulfilled</strong>: The operation completed successfully.</li>
    <li><strong>Rejected</strong>: The operation failed.</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Chaining Promises</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>fetchUser()
  .then(user => fetchPosts(user.id))
  .then(posts => fetchComments(posts[0].id))
  .then(comments => console.log(comments))
  .catch(error => console.error("Error:", error));</code></pre>

  <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-900 p-4 rounded mt-6">
    💡 <strong>Tip:</strong> Promises allow you to write async logic in a more structured and maintainable way.
  </div>

</main>
