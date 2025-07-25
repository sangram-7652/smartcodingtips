<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/callback-hell" class="text-blue-600 dark:text-blue-400 hover:underline">Callback Hell</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🔥 Callback Hell in JavaScript</h1>

  <p class="mb-4">
    Callback Hell happens when multiple asynchronous operations are nested within each other, creating code that is hard to read and maintain.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">😖 What Does Callback Hell Look Like?</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>getUser(function(user) {
  getPosts(user.id, function(posts) {
    getComments(posts[0].id, function(comments) {
      console.log(comments);
    });
  });
});</code></pre>

  <p class="mb-4">
    The pyramid shape makes it hard to follow and debug. This is often called the "Pyramid of Doom."
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Why It Happens</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Asynchronous functions depend on each other</li>
    <li>No proper error handling</li>
    <li>No separation of concerns</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ How to Avoid Callback Hell</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Use <code>named functions</code> instead of inline callbacks</li>
    <li>Use <code>Promises</code> to flatten the structure</li>
    <li>Use <code>async/await</code> for cleaner syntax</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Same Example with Promises</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>getUser()
  .then(user => getPosts(user.id))
  .then(posts => getComments(posts[0].id))
  .then(comments => console.log(comments))
  .catch(error => console.error(error));</code></pre>

  <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded mt-6">
    💡 <strong>Tip:</strong> Promises and <code>async/await</code> are powerful tools to make async code more readable and maintainable.
  </div>

  <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/sync-vs-async') ?>" class="hover:underline">← Previous: Sync vs Async</a>
    <a href="<?= base_url('js/promises-review') ?>" class="hover:underline ms-auto">Next: Promises Review →</a>
</div>
</main>
