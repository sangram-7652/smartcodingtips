<?php
// react.php

// ✅ Helper to get base URL for both localhost and live
function base_url($path = '') {
    $host = $_SERVER['HTTP_HOST'];
    $isLocal = $host === 'localhost' || str_contains($host, '127.0.0.1');
    $base = $isLocal ? '/smartcodingtips' : ''; // adjust if project folder is different
    return $base . '/' . ltrim($path, '/');
}

// ✅ Get the requested page
$page = $_GET['page'] ?? 'react/what-is-react';
$pagePath = "pages/" . $page . ".php";

// ✅ Fallback if file doesn't exist
if (!file_exists($pagePath)) {
    $pagePath = "pages/react/what-is-react.php";
}

// ✅ Capture page content
ob_start();
include $pagePath;
$pageContent = ob_get_clean();

// ✅ Set default SEO meta
$title = $title ?? "React Tutorial - SmartCodingTips";
$description = $description ?? "Master React step by step with beginner to advanced tutorials.";
$keywords = $keywords ?? "react, reactjs, learn react, web development";
$slug = basename($page);
$canonical = "https://smartcodingtips.com/react/$slug";

// ✅ For TOC highlighting
$currentPage = $_GET['page'] ?? 'react/what-is-react';

// ✅ Include the header
include 'includes/header.php';

// ✅ TOC link with highlight and clean URL
function tocLink($label, $link, $currentPage)
{
    $slug = basename($link); // react/what-is-react → what-is-react
    $activeClass = ($link === $currentPage) ? 'bg-yellow-300 dark:bg-yellow-600 text-black font-semibold rounded px-2' : '';
    echo "<li><a href='" . base_url("react/$slug") . "' class='block px-2 py-1 rounded $activeClass'>$label</a></li>";
}
?>


<!-- Mobile TOC Button -->
<button id="openToc" class="md:hidden bg-gray-800 text-white px-4 py-2 m-4 rounded fixed top-16 left-4 z-40">
    ☰ TOC
</button>

<div class="flex">
    <!-- TOC Sidebar -->
    <aside
        id="mobileToc"
        class="fixed top-0 left-0 h-[1200px] w-[18rem] bg-white dark:bg-gray-900 text-black dark:text-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50 md:z-10 md:relative md:translate-x-0 md:flex md:flex-col md:px-6 md:space-y-6 md:text-sm md:font-medium overflow-y-scroll max-h-screen md:max-h-[1200px]">

        <!-- Mobile-only close button -->
        <button id="closeToc" class="absolute top-4 right-4 text-2xl md:hidden">&#10006;</button>

        <!-- TOC Content -->
        <div class="px-4 py-4 space-y-4 ">
            <?php
            $sections = [
                '1. Introduction to React' => [
                    'What is React?' => 'react/what-is-react',
                    'Why Use React?' => 'react/why-react',
                    'React vs Vanilla JS / Angular / Vue' => 'react/react-vs-others',
                    'Setting Up React' => 'react/setup',
                    'Your First React App' => 'react/first-app'
                ],
                '2. React Basics' => [
                    'JSX' => 'react/jsx',
                    'Components' => 'react/components',
                    'Props' => 'react/props',
                    'State' => 'react/state',
                    'Conditional Rendering' => 'react/conditional-rendering'
                ],
                '3. Lists and Keys' => [
                    'Rendering Lists' => 'react/rendering-lists',
                    'Keys in Lists' => 'react/keys',
                    'Dynamic List Rendering' => 'react/dynamic-lists',
                    'Conditional Lists & Empty States' => 'react/empty-states'
                ],
                '4. Event Handling and User Input' => [
                    'Handling Events' => 'react/events',
                    'Controlled vs Uncontrolled' => 'react/controlled-vs-uncontrolled',
                    'Forms' => 'react/forms',
                    'Handling Submissions' => 'react/submissions',
                    'Refs with useRef()' => 'react/refs'
                ],
                '5. React Hooks – Basics' => [
                    'useState()' => 'react/use-state',
                    'useEffect()' => 'react/use-effect',
                    'Cleanup in useEffect' => 'react/use-effect-cleanup',
                    'Hook Rules & Best Practices' => 'react/hook-rules',
                    'Hook Examples' => 'react/hook-examples'
                ],
                '6. Component Communication' => [
                    'Props Drilling' => 'react/prop-drilling',
                    'Lifting State Up' => 'react/lifting-state',
                    'Callback Props' => 'react/callback-props',
                    'Sharing Between Components' => 'react/sharing-data',
                    'Context API Intro' => 'react/context-intro'
                ],
                '7. Fetching Data in React' => [
                    'Using fetch()' => 'react/fetch-api',
                    'useEffect + fetch' => 'react/fetch-with-effect',
                    'Loading & Error' => 'react/loading-error',
                    'Axios' => 'react/axios',
                    'Displaying Data' => 'react/display-data'
                ],
                '8. Forms & Validation' => [
                    'Controlled Forms' => 'react/forms-controlled',
                    'Input Validation' => 'react/validations',
                    'Form Submission' => 'react/form-submit',
                    'Formik / RHF / Yup' => 'react/form-libraries',
                    'Login Example' => 'react/login-example'
                ],
                '9. React Router (Navigation)' => [
                    'React Router Intro' => 'react/router-intro',
                    'Setup react-router-dom' => 'react/router-setup',
                    'Route / Link / Navigate' => 'react/router-links',
                    'Dynamic Routing' => 'react/dynamic-routes',
                    '404 & Protected Routes' => 'react/route-guards'
                ],
                '10. React Hooks – Advanced' => [
                    'useContext()' => 'react/use-context',
                    'useReducer()' => 'react/use-reducer',
                    'useMemo()' => 'react/use-memo',
                    'useCallback()' => 'react/use-callback',
                    'Custom Hooks' => 'react/custom-hooks'
                ],
                '11. Global State Management' => [
                    'Props vs Context vs Redux' => 'react/state-strategies',
                    'Context API' => 'react/context-api',
                    'Redux Toolkit' => 'react/redux',
                    'Zustand' => 'react/zustand',
                    'Tool Comparison' => 'react/comparison'
                ],
                '12. Styling in React' => [
                    'CSS Modules' => 'react/css-modules',
                    'Tailwind CSS' => 'react/tailwind',
                    'Styled Components' => 'react/styled-components',
                    'Emotion' => 'react/emotion',
                    'Conditional Styling' => 'react/conditional-styles'
                ],
                '13. Reusable Components' => [
                    'Reusability Principles' => 'react/reusability',
                    'Compound Components' => 'react/compound',
                    'Render Props' => 'react/render-props',
                    'HOC' => 'react/hoc',
                    'UI Libraries' => 'react/component-libs'
                ],
                '14. Async Patterns' => [
                    'Promises & Async/Await' => 'react/promises',
                    'Handling Async State' => 'react/async-state',
                    'Loading Indicators' => 'react/loading-skeletons',
                    'Retry / Debounce' => 'react/debounce',
                    'React Query' => 'react/react-query'
                ],
                '15. Performance Optimization' => [
                    'Memoization' => 'react/memoization',
                    'Virtualization' => 'react/virtualization',
                    'Lazy Loading' => 'react/lazy',
                    'Code Splitting' => 'react/code-splitting',
                    'Performance Tips' => 'react/performance-tips'
                ],
                '16. Testing' => [
                    'Why Testing?' => 'react/testing-intro',
                    'Jest' => 'react/jest',
                    'React Testing Library' => 'react/testing-library',
                    'Snapshot Testing' => 'react/snapshots',
                    'User Interaction Testing' => 'react/test-interactions'
                ],
                '17. React and Security' => [
                    'XSS Protection' => 'react/xss-protection',
                    'Auth Tokens' => 'react/auth-tokens',
                    'Environment Variables' => 'react/env-vars',
                    'Rate Limiting' => 'react/rate-limit',
                    'Protected Routes' => 'react/protect-routes'
                ],
                '18. Project-Based Learning' => [
                    'Counter App' => 'react/project-counter',
                    'Weather App' => 'react/project-weather',
                    'Todo List' => 'react/project-todo',
                    'Login Form' => 'react/project-auth',
                    'Blog App' => 'react/project-blog'
                ],
                '19. Deploying React' => [
                    'Build for Production' => 'react/build',
                    'Hosting Platforms' => 'react/hosting',
                    'Env Variables' => 'react/env-vars-deploy',
                    'CI/CD Basics' => 'react/cicd',
                    'Free Domain' => 'react/free-domain'
                ],
                '20. Tips, Tricks & Best Practices' => [
                    'Folder Structure' => 'react/folder-structure',
                    'Naming Conventions' => 'react/naming',
                    'Clean Code' => 'react/clean-code',
                    'Accessibility' => 'react/a11y',
                    'React DevTools' => 'react/devtools'
                ]
            ];

            foreach ($sections as $title => $links) {
                echo "<div><h2 class='text-xl font-semibold mb-2'>$title</h2><ul class='space-y-2'>";
                foreach ($links as $label => $href) {
                    tocLink($label, $href, $currentPage);
                }
                echo "</ul></div>";
            }
            ?>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-2 mt-4 md:mt-0">
        <?php echo $pageContent; ?>
    </main>
</div>

<?php include 'includes/footer.php'; ?>