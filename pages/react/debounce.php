<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/async-js" class="text-blue-600 hover:underline dark:text-blue-400">Async JS</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Retry / Debounce</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔁 Retry & Debounce in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    When working with APIs or user input, it's important to add robustness. <strong>Retry</strong> logic handles temporary failures, while <strong>Debounce</strong> reduces unnecessary requests (e.g., during typing).
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Retry Logic -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔄 1. Retry API Calls</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    If an API fails (e.g., due to network issues), retry a few times before showing an error:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
async function fetchWithRetry(url, retries = 3, delay = 1000) {
  try {
    const res = await fetch(url);
    if (!res.ok) throw new Error("Fetch failed");
    return await res.json();
  } catch (err) {
    if (retries &gt; 0) {
      await new Promise(resolve =&gt; setTimeout(resolve, delay));
      return fetchWithRetry(url, retries - 1, delay);
    } else {
      throw err;
    }
  }
}
</code></pre>

  <!-- Debounce -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⏱️ 2. Debounce Input (Manual)</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Debouncing limits how often a function is called during rapid events (like typing):
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
function useDebounce(value, delay) {
  const [debounced, setDebounced] = useState(value);

  useEffect(() =&gt; {
    const handler = setTimeout(() =&gt; setDebounced(value), delay);
    return () =&gt; clearTimeout(handler);
  }, [value, delay]);

  return debounced;
}

// Usage:
const search = useDebounce(inputValue, 500);
</code></pre>

  <!-- With lodash -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 3. Debounce with Lodash</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { debounce } from "lodash";

const handleChange = debounce((value) =&gt; {
  console.log("Debounced:", value);
}, 300);

// &lt;input onChange={(e) =&gt; handleChange(e.target.value)} /&gt;
</code></pre>

  <!-- Tips -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 4. Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use retry for non-critical API calls with flaky networks</li>
    <li>Use debounce in live search, input forms, or resize events</li>
    <li>Throttle (not debounce) when you need regular updates</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/loading-skeletons') ?>" class="hover:underline">← Previous: Loading Indicators</a>
  <a href="<?= base_url('react/react-query') ?>" class="hover:underline ms-auto">Next: React Query →</a>
</div>

</main>
