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
      <li class="flex items-center">React Query</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔍 React Query – The Data-Fetching Powerhouse</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    React Query (now called <strong>TanStack Query</strong>) simplifies data fetching, caching, synchronizing, and updating your server state — all without the boilerplate of useEffect and useState.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Installation -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 1. Installation</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
npm install @tanstack/react-query
</code></pre>

  <!-- Setup -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔧 2. Setup QueryClientProvider</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { QueryClient, QueryClientProvider } from '@tanstack/react-query';

const queryClient = new QueryClient();

function App() {
  return (
    &lt;QueryClientProvider client={queryClient}&gt;
      &lt;MyComponent /&gt;
    &lt;/QueryClientProvider&gt;
  );
}
</code></pre>

  <!-- Basic Usage -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 3. Basic Fetch Example</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useQuery } from '@tanstack/react-query';

function MyComponent() {
  const { data, isLoading, error } = useQuery({
    queryKey: ['users'],
    queryFn: () => fetch('https://api.example.com/users').then(res => res.json())
  });

  if (isLoading) return &lt;p&gt;Loading...&lt;/p&gt;;
  if (error) return &lt;p&gt;Error: {error.message}&lt;/p&gt;;

  return (
    &lt;ul&gt;
      {data.map(user =&gt; &lt;li key={user.id}&gt;{user.name}&lt;/li&gt;)}
    &lt;/ul&gt;
  );
}
</code></pre>

  <!-- Features -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 4. Key Features</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Built-in loading, error, and success states</li>
    <li>Automatic background refetching</li>
    <li>Out-of-the-box caching</li>
    <li>Refetch on window focus / reconnect</li>
    <li>Polling and pagination support</li>
  </ul>

  <!-- Mutation Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✏️ 5. Mutation (POST/PUT/DELETE)</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useMutation } from '@tanstack/react-query';

const mutation = useMutation({
  mutationFn: (newUser) =>
    fetch('/users', {
      method: 'POST',
      body: JSON.stringify(newUser),
    }),
});
</code></pre>

  <!-- DevTools -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🛠️ 6. DevTools</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-4 overflow-x-auto"><code>
import { ReactQueryDevtools } from '@tanstack/react-query-devtools';

&lt;ReactQueryDevtools initialIsOpen={false} /&gt;
</code></pre>

  <p class="text-black dark:text-gray-300 mb-6">
    This gives you powerful debugging features for live query inspection and mutation tracking.
  </p>

  <!-- When to Use -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 7. When to Use React Query</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Working with REST or GraphQL APIs</li>
    <li>Need caching or refetching logic</li>
    <li>Frequent GET requests or paginated content</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/debounce') ?>" class="hover:underline">← Previous: Retry / Debounce</a>
  <a href="<?= base_url('react/memoization') ?>" class="hover:underline ms-auto">Next: Memoization →</a>
</div>

</main>
