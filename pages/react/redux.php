<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/state-management" class="text-blue-600 hover:underline dark:text-blue-400">State Management</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Redux Toolkit</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧰 Redux Toolkit (RTK)</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Redux Toolkit (RTK) is the official, recommended way to use Redux. It simplifies Redux setup and reduces boilerplate with utilities like <code>createSlice</code> and <code>configureStore</code>.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 1. Installation</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
npm install @reduxjs/toolkit react-redux
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 2. Create a Slice</h2>
  <p class="mb-2 text-black dark:text-gray-300">Slices include state, reducers, and actions in one place:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
// features/counter/counterSlice.js
import { createSlice } from '@reduxjs/toolkit';

const counterSlice = createSlice({
  name: 'counter',
  initialState: { value: 0 },
  reducers: {
    increment: (state) => { state.value += 1 },
    decrement: (state) => { state.value -= 1 },
  },
});

export const { increment, decrement } = counterSlice.actions;
export default counterSlice.reducer;
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🗃 3. Configure the Store</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
// app/store.js
import { configureStore } from '@reduxjs/toolkit';
import counterReducer from '../features/counter/counterSlice';

export const store = configureStore({
  reducer: {
    counter: counterReducer,
  },
});
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔗 4. Provide the Store</h2>
  <p class="mb-2 text-black dark:text-gray-300">Wrap your app with <code>&lt;Provider&gt;</code> from <code>react-redux</code>:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import ReactDOM from 'react-dom/client';
import { Provider } from 'react-redux';
import { store } from './app/store';
import App from './App';

ReactDOM.createRoot(document.getElementById('root')).render(
  &lt;Provider store={store}&gt;
    &lt;App /&gt;
  &lt;/Provider&gt;
);
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📥 5. Use Redux State in Components</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useSelector, useDispatch } from 'react-redux';
import { increment, decrement } from './features/counter/counterSlice';

function Counter() {
  const count = useSelector((state) => state.counter.value);
  const dispatch = useDispatch();

  return (
    &lt;div&gt;
      &lt;p&gt;Count: {count}&lt;/p&gt;
      &lt;button onClick={() =&gt; dispatch(increment())}&gt;+&lt;/button&gt;
      &lt;button onClick={() =&gt; dispatch(decrement())}&gt;-&lt;/button&gt;
    &lt;/div&gt;
  );
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Benefits of Redux Toolkit</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Less boilerplate than vanilla Redux</li>
    <li>Built-in Immer.js for immutability</li>
    <li>Easy integration of async logic via <code>createAsyncThunk</code></li>
    <li>DevTools enabled by default</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/redux-async" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Redux Async (createAsyncThunk) →
    </a>
  </div>

</main>
