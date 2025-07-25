<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/security" class="text-blue-600 hover:underline dark:text-blue-400">Security</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Protected Routes</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔒 Protected Routes in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Protected routes allow you to restrict access to certain pages unless the user is authenticated. In React, this can be implemented using a wrapper component and routing logic.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Setup Auth Context -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔧 1. Setup Authentication Context</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { createContext, useContext, useState } from 'react';

const AuthContext = createContext();

export const AuthProvider = ({ children }) => {
  const [isAuthenticated, setIsAuthenticated] = useState(false);
  return (
    &lt;AuthContext.Provider value={{ isAuthenticated, setIsAuthenticated }}&gt;
      {children}
    &lt;/AuthContext.Provider&gt;
  );
};

export const useAuth = () =&gt; useContext(AuthContext);
</code></pre>

  <!-- Create Protected Route -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🛡️ 2. Create a ProtectedRoute Component</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { Navigate } from 'react-router-dom';
import { useAuth } from './AuthContext';

function ProtectedRoute({ children }) {
  const { isAuthenticated } = useAuth();

  if (!isAuthenticated) {
    return &lt;Navigate to="/login" replace /&gt;;
  }

  return children;
}
</code></pre>

  <!-- Use in Routes -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🗺️ 3. Using ProtectedRoute in App</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { Routes, Route } from 'react-router-dom';
import Dashboard from './pages/Dashboard';
import Login from './pages/Login';
import ProtectedRoute from './ProtectedRoute';

function App() {
  return (
    &lt;Routes&gt;
      &lt;Route path="/login" element={&lt;Login /&gt;} /&gt;
      &lt;Route
        path="/dashboard"
        element={
          &lt;ProtectedRoute&gt;
            &lt;Dashboard /&gt;
          &lt;/ProtectedRoute&gt;
        }
      /&gt;
    &lt;/Routes&gt;
  );
}
</code></pre>

  <!-- Set Auth on Login -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔑 4. Updating Auth State on Login</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { useAuth } from './AuthContext';

function Login() {
  const { setIsAuthenticated } = useAuth();

  const handleLogin = () =&gt; {
    // Simulate successful login
    setIsAuthenticated(true);
  };

  return &lt;button onClick={handleLogin}&gt;Login&lt;/button&gt;;
}
</code></pre>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Use context to track authentication</li>
    <li>Create a <code>ProtectedRoute</code> wrapper to control access</li>
    <li>Redirect unauthenticated users to a login page</li>
    <li>Secure sensitive pages from unauthorized access</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/rate-limit') ?>" class="hover:underline">← Previous: Rate Limiting</a>
  <a href="<?= base_url('react/project-counter') ?>" class="hover:underline ms-auto">Next: Counter App →</a>
</div>

</main>
