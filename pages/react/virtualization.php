<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/optimization" class="text-blue-600 hover:underline dark:text-blue-400">Optimization</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Virtualization</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📦 Virtualization in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Virtualization is a performance technique where only the visible portion of a long list is rendered to the DOM. This is essential when working with large datasets, improving rendering speed and memory usage.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Why Virtualization -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚠️ 1. Why Use Virtualization?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Rendering thousands of DOM nodes can cause lag</li>
    <li>Most users only see a small portion of the list at once</li>
    <li>Virtualization skips rendering off-screen elements</li>
  </ul>

  <!-- react-window -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 2. Using <code>react-window</code></h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
npm install react-window
</code></pre>

  <p class="text-black dark:text-gray-300 mb-4">
    Example using <code>FixedSizeList</code> from <code>react-window</code>:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { FixedSizeList as List } from 'react-window';

const Row = ({ index, style }) =&gt; (
  &lt;div style={style}&gt;Row #{index}&lt;/div&gt;
);

function MyVirtualList() {
  return (
    &lt;List
      height={400}
      itemCount={1000}
      itemSize={35}
      width={"100%"}
    &gt;
      {Row}
    &lt;/List&gt;
  );
}
</code></pre>

  <!-- Features -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 3. Features of react-window</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Supports vertical & horizontal scrolling</li>
    <li>Fixed or variable item sizes</li>
    <li>Lightweight & performant</li>
    <li>Compatible with infinite scroll, lazy loading</li>
  </ul>

  <!-- Comparison -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚖️ 4. react-window vs react-virtualized</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>react-window</strong>: Lightweight, newer, simpler API</li>
    <li><strong>react-virtualized</strong>: More features (grids, tables), but heavier</li>
    <li>Use <strong>react-window</strong> for most basic use cases</li>
  </ul>

  <!-- When to Use -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 5. When to Use Virtualization</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Rendering 100+ items in a list or table</li>
    <li>Visible lag during scroll or interaction</li>
    <li>Infinite scrolling interfaces</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/memoization') ?>" class="hover:underline">← Previous: Memoization</a>
  <a href="<?= base_url('react/lazy') ?>" class="hover:underline">Next: Lazy Loading →</a>
</div>

</main>
