<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/styling" class="text-blue-600 hover:underline dark:text-blue-400">Styling</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Styled Components</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">💅 Styled Components in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>Styled Components</strong> is a library for styling React components using tagged template literals. It enables writing actual CSS code within your JS and provides component-scoped styling.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 1. Installation</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
npm install styled-components
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎨 2. Basic Usage</h2>
  <p class="mb-2 text-black dark:text-gray-300">Create a styled component using the <code>styled</code> object:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import styled from 'styled-components';

const Button = styled.button`
  background-color: #2563eb;
  color: white;
  padding: 10px 16px;
  border: none;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;

  &:hover {
    background-color: #1e40af;
  }
`;

function App() {
  return &lt;Button&gt;Click Me&lt;/Button&gt;;
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌈 3. Dynamic Styles with Props</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
const Button = styled.button`
  background-color: ${(props) => (props.primary ? '#4f46e5' : '#6b7280')};
`;
</code></pre>
  <p class="text-black dark:text-gray-300 mb-6">
    Now you can use <code>&lt;Button primary /&gt;</code> or <code>&lt;Button /&gt;</code> with different styles.
  </p>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌙 4. Theme Support</h2>
  <p class="mb-2 text-black dark:text-gray-300">Styled Components supports theming with <code>ThemeProvider</code>:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { ThemeProvider } from 'styled-components';

const theme = {
  colors: {
    primary: '#2563eb',
    text: '#111827',
  },
};

&lt;ThemeProvider theme={theme}&gt;
  &lt;App /&gt;
&lt;/ThemeProvider&gt;
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 5. Benefits of Styled Components</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>No class name collisions (scoped styling)</li>
    <li>Dynamic styling via props</li>
    <li>Reusable styled components</li>
    <li>Supports theming out of the box</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/tailwind') ?>" class="hover:underline">← Previous: Tailwind CSS</a>
  <a href="<?= base_url('react/emotion') ?>" class="hover:underline">Next: Emotion →</a>
</div>


</main>
