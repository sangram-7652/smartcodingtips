<?php
// react.php

$page = $_GET['page'] ?? 'react/what-is-react';
$pagePath = "pages/" . $page . ".php";

if (!file_exists($pagePath)) {
    $pagePath = "pages/react/intro.php";
}

ob_start();
include $pagePath;
$pageContent = ob_get_clean();

include 'includes/header.php';
?>

<div class="flex">
    <div class="w-[18rem] h-[1200px] overflow-y-scroll bg-gray-100 shadow-lg hidden md:flex flex-col items-start px-6 py-8 space-y-6 text-sm font-medium bg-white text-black dark:bg-gray-900 dark:text-white">

        <div>
            <h2 class="text-xl font-semibold mb-2">1. Introduction to React</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/what-is-react">What is React?</a></li>
                <li><a href="react.php?page=react/why-react">Why Use React?</a></li>
                <li><a href="react.php?page=react/react-vs-others">React vs Vanilla JS / Angular / Vue</a></li>
                <li><a href="react.php?page=react/setup">Setting Up React</a></li>
                <li><a href="react.php?page=react/first-app">Your First React App</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">2. React Basics</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/jsx">JSX</a></li>
                <li><a href="react.php?page=react/components">Components</a></li>
                <li><a href="react.php?page=react/props">Props</a></li>
                <li><a href="react.php?page=react/state">State</a></li>
                <li><a href="react.php?page=react/conditional-rendering">Conditional Rendering</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">3. Lists and Keys</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/rendering-lists">Rendering Lists</a></li>
                <li><a href="react.php?page=react/keys">Keys in Lists</a></li>
                <li><a href="react.php?page=react/dynamic-lists">Dynamic List Rendering</a></li>
                <li><a href="react.php?page=react/empty-states">Conditional Lists & Empty States</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">4. Event Handling and User Input</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/events">Handling Events</a></li>
                <li><a href="react.php?page=react/controlled-vs-uncontrolled">Controlled vs Uncontrolled</a></li>
                <li><a href="react.php?page=react/forms">Forms</a></li>
                <li><a href="react.php?page=react/submissions">Handling Submissions</a></li>
                <li><a href="react.php?page=react/refs">Refs with useRef()</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">5. React Hooks – Basics</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/use-state">useState()</a></li>
                <li><a href="react.php?page=react/use-effect">useEffect()</a></li>
                <li><a href="react.php?page=react/use-effect-cleanup">Cleanup in useEffect</a></li>
                <li><a href="react.php?page=react/hook-rules">Hook Rules & Best Practices</a></li>
                <li><a href="react.php?page=react/hook-examples">Hook Examples</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">6. Component Communication</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/prop-drilling">Props Drilling</a></li>
                <li><a href="react.php?page=react/lifting-state">Lifting State Up</a></li>
                <li><a href="react.php?page=react/callback-props">Callback Props</a></li>
                <li><a href="react.php?page=react/sharing-data">Sharing Between Components</a></li>
                <li><a href="react.php?page=react/context-intro">Context API Intro</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">7. Fetching Data in React</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/fetch-api">Using fetch()</a></li>
                <li><a href="react.php?page=react/fetch-with-effect">useEffect + fetch</a></li>
                <li><a href="react.php?page=react/loading-error">Loading & Error</a></li>
                <li><a href="react.php?page=react/axios">Axios</a></li>
                <li><a href="react.php?page=react/display-data">Displaying Data</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">8. Forms & Validation</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/forms-controlled">Controlled Forms</a></li>
                <li><a href="react.php?page=react/validations">Input Validation</a></li>
                <li><a href="react.php?page=react/form-submit">Form Submission</a></li>
                <li><a href="react.php?page=react/form-libraries">Formik / RHF / Yup</a></li>
                <li><a href="react.php?page=react/login-example">Login Example</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">9. React Router (Navigation)</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/router-intro">React Router Intro</a></li>
                <li><a href="react.php?page=react/router-setup">Setup react-router-dom</a></li>
                <li><a href="react.php?page=react/router-links">Route / Link / Navigate</a></li>
                <li><a href="react.php?page=react/dynamic-routes">Dynamic Routing</a></li>
                <li><a href="react.php?page=react/route-guards">404 & Protected Routes</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">10. React Hooks – Advanced</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/use-context">useContext()</a></li>
                <li><a href="react.php?page=react/use-reducer">useReducer()</a></li>
                <li><a href="react.php?page=react/use-memo">useMemo()</a></li>
                <li><a href="react.php?page=react/use-callback">useCallback()</a></li>
                <li><a href="react.php?page=react/custom-hooks">Custom Hooks</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">11. Global State Management</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/state-strategies">Props vs Context vs Redux</a></li>
                <li><a href="react.php?page=react/context-api">Context API</a></li>
                <li><a href="react.php?page=react/redux">Redux Toolkit</a></li>
                <li><a href="react.php?page=react/zustand">Zustand</a></li>
                <li><a href="react.php?page=react/comparison">Tool Comparison</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">12. Styling in React</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/css-modules">CSS Modules</a></li>
                <li><a href="react.php?page=react/tailwind">Tailwind CSS</a></li>
                <li><a href="react.php?page=react/styled-components">Styled Components</a></li>
                <li><a href="react.php?page=react/emotion">Emotion</a></li>
                <li><a href="react.php?page=react/conditional-styles">Conditional Styling</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">13. Reusable Components</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/reusability">Reusability Principles</a></li>
                <li><a href="react.php?page=react/compound">Compound Components</a></li>
                <li><a href="react.php?page=react/render-props">Render Props</a></li>
                <li><a href="react.php?page=react/hoc">HOC</a></li>
                <li><a href="react.php?page=react/component-libs">UI Libraries</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">14. Async Patterns</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/promises">Promises & Async/Await</a></li>
                <li><a href="react.php?page=react/async-state">Handling Async State</a></li>
                <li><a href="react.php?page=react/loading-skeletons">Loading Indicators</a></li>
                <li><a href="react.php?page=react/debounce">Retry / Debounce</a></li>
                <li><a href="react.php?page=react/react-query">React Query</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">15. Performance Optimization</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/memoization">Memoization</a></li>
                <li><a href="react.php?page=react/virtualization">Virtualization</a></li>
                <li><a href="react.php?page=react/lazy">Lazy Loading</a></li>
                <li><a href="react.php?page=react/code-splitting">Code Splitting</a></li>
                <li><a href="react.php?page=react/performance-tips">Performance Tips</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">16. Testing</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/testing-intro">Why Testing?</a></li>
                <li><a href="react.php?page=react/jest">Jest</a></li>
                <li><a href="react.php?page=react/testing-library">React Testing Library</a></li>
                <li><a href="react.php?page=react/snapshots">Snapshot Testing</a></li>
                <li><a href="react.php?page=react/test-interactions">User Interaction Testing</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">17. React and Security</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/xss-protection">XSS Protection</a></li>
                <li><a href="react.php?page=react/auth-tokens">Auth Tokens</a></li>
                <li><a href="react.php?page=react/env-vars">Environment Variables</a></li>
                <li><a href="react.php?page=react/rate-limit">Rate Limiting</a></li>
                <li><a href="react.php?page=react/protect-routes">Protected Routes</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">18. Project-Based Learning</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/project-counter">Counter App</a></li>
                <li><a href="react.php?page=react/project-weather">Weather App</a></li>
                <li><a href="react.php?page=react/project-todo">Todo List</a></li>
                <li><a href="react.php?page=react/project-auth">Login Form</a></li>
                <li><a href="react.php?page=react/project-blog">Blog App</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">19. Deploying React</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/build">Build for Production</a></li>
                <li><a href="react.php?page=react/hosting">Hosting Platforms</a></li>
                <li><a href="react.php?page=react/env-vars-deploy">Env Variables</a></li>
                <li><a href="react.php?page=react/cicd">CI/CD Basics</a></li>
                <li><a href="react.php?page=react/free-domain">Free Domain</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">20. Next.js Intro</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/next-intro">What is Next.js?</a></li>
                <li><a href="react.php?page=react/pages-routing">Pages & Routing</a></li>
                <li><a href="react.php?page=react/ssr">SSR</a></li>
                <li><a href="react.php?page=react/ssg">SSG</a></li>
                <li><a href="react.php?page=react/api-routes">API Routes</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">21. Tips, Tricks & Best Practices</h2>
            <ul class="space-y-2">
                <li><a href="react.php?page=react/folder-structure">Folder Structure</a></li>
                <li><a href="react.php?page=react/naming">Naming Conventions</a></li>
                <li><a href="react.php?page=react/clean-code">Clean Code</a></li>
                <li><a href="react.php?page=react/a11y">Accessibility</a></li>
                <li><a href="react.php?page=react/devtools">React DevTools</a></li>
            </ul>
        </div>

    </div>

    <main class="flex-1">
        <?php echo $pageContent; ?>
    </main>
</div>

<?php include 'includes/footer.php'; ?>