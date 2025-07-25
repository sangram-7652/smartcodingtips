<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/hooks" class="text-blue-600 hover:underline dark:text-blue-400">Hooks</a>
        <span class="mx-2">/</span>
      </li>
      <li class="text-black dark:text-gray-400">Hook Rules & Best Practices</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📏 Hook Rules & Best Practices</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    React Hooks are powerful, but they come with important rules and recommended practices to avoid bugs and ensure consistent behavior.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Rules -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 Rules of Hooks</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>Only call Hooks at the top level:</strong> Don’t call Hooks inside loops, conditions, or nested functions.</li>
    <li><strong>Only call Hooks from React functions:</strong> They should only be used inside function components or custom hooks.</li>
  </ul>

  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>// ✅ Correct
function MyComponent() {
  const [count, setCount] = useState(0);
}

// ❌ Incorrect
if (condition) {
  const [value, setValue] = useState(0); // Don’t do this
}
</code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Best Practices</h2>

  <h3 class="text-xl font-semibold mb-2 text-black dark:text-white">1. Keep Hook dependencies accurate</h3>
  <p class="text-black dark:text-gray-300 mb-4">Always include all external values used in <code>useEffect</code> inside its dependency array.</p>

  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>// ✅ Correct
useEffect(() => {
  console.log(user.name);
}, [user]);
</code></pre>

  <h3 class="text-xl font-semibold mb-2 text-black dark:text-white">2. Use multiple Hooks for separation</h3>
  <p class="text-black dark:text-gray-300 mb-4">Don’t cram everything into one effect or state. Separate logic using multiple hooks.</p>

  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>// Better structure
useEffect(() => { fetchData(); }, []);
useEffect(() => { listenToScroll(); }, []);
</code></pre>

  <h3 class="text-xl font-semibold mb-2 text-black dark:text-white">3. Extract reusable logic into custom hooks</h3>
  <p class="text-black dark:text-gray-300 mb-4">Encapsulate shared logic across components into custom hooks for readability and reuse.</p>

  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>// Example
function useOnlineStatus() {
  const [isOnline, setIsOnline] = useState(true);
  useEffect(() => {
    const handleStatus = () => setIsOnline(navigator.onLine);
    window.addEventListener('online', handleStatus);
    window.addEventListener('offline', handleStatus);
    return () => {
      window.removeEventListener('online', handleStatus);
      window.removeEventListener('offline', handleStatus);
    };
  }, []);
  return isOnline;
}
</code></pre>

  <h3 class="text-xl font-semibold mb-2 text-black dark:text-white">4. Avoid unnecessary state</h3>
  <p class="text-black dark:text-gray-300 mb-4">Don’t use state when a derived value can be calculated directly from props or other state.</p>

  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>// ❌ Don’t store derived state
const [total, setTotal] = useState(price * quantity);

// ✅ Derive it directly
const total = price * quantity;
</code></pre>

  <h3 class="text-xl font-semibold mb-2 text-black dark:text-white">5. Clean up after side effects</h3>
  <p class="text-black dark:text-gray-300 mb-4">Always return a cleanup function from <code>useEffect</code> when working with subscriptions, timers, etc.</p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Follow the 2 official rules of Hooks</li>
    <li>Keep effects and logic separate</li>
    <li>Use custom hooks for reuse</li>
    <li>Minimize and clean up side effects</li>
    <li>Keep dependencies correct to avoid bugs</li>
  </ul>

  <!-- Next Page -->
 <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/use-effect-cleanup') ?>" class="hover:underline">← Previous: Cleanup in useEffect</a>
  <a href="<?= base_url('react/hook-examples') ?>" class="hover:underline ms-auto">Next: Hook Examples →</a>
</div>
</main>
