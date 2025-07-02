<?php
// js.php

// Determine which page to load
$page = $_GET['page'] ?? 'js/what-is-js';
$pagePath = "pages/" . $page . ".php";

// Fallback to default page if file doesn't exist
if (!file_exists($pagePath)) {
    $pagePath = "pages/js/what-is-js.php";
}

// Buffer the page content
ob_start();
include $pagePath;
$pageContent = ob_get_clean();

// Include common header
include 'includes/header.php';
?>

<!-- Page Structure -->
<div class="flex">
    <!-- Sidebar Navigation -->
    <div class="w-[18rem] h-[1200px] overflow-y-scroll bg-gray-100 shadow-lg hidden md:flex flex-col items-start px-6 py-8 space-y-6 text-sm font-medium bg-white text-black dark:bg-gray-900 dark:text-white">

        <div>
            <h2 class="text-xl font-semibold mb-2">1. Introduction to JavaScript</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/what-is-js">What is JavaScript?</a></li>
                <li><a href="js.php?page=js/history">History and Evolution</a></li>
                <li><a href="js.php?page=js/js-vs-html-css">JS vs HTML/CSS</a></li>
                <li><a href="js.php?page=js/running-js">Where JavaScript Runs</a></li>
                <li><a href="js.php?page=js/first-script">Your First Script</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">2. JavaScript Basics</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/variables">Variables: var, let, const</a></li>
                <li><a href="js.php?page=js/data-types">Data Types</a></li>
                <li><a href="js.php?page=js/operators">Operators</a></li>
                <li><a href="js.php?page=js/comments">Comments</a></li>
                <li><a href="js.php?page=js/alert-console">Alert, Prompt, Console</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">3. Control Flow</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/if-else">If, Else, Switch</a></li>
                <li><a href="js.php?page=js/loops">Loops: for, while</a></li>
                <li><a href="js.php?page=js/break-continue">Break & Continue</a></li>
                <li><a href="js.php?page=js/ternary">Ternary Operator</a></li>
                <li><a href="js.php?page=js/control-examples">Control Flow Examples</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">4. Functions and Scope</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/functions">Defining Functions</a></li>
                <li><a href="js.php?page=js/arrow-functions">Arrow Functions</a></li>
                <li><a href="js.php?page=js/scope">Scope & Closure</a></li>
                <li><a href="js.php?page=js/this">The `this` Keyword</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">5. Arrays and Objects</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/arrays">Arrays and Methods</a></li>
                <li><a href="js.php?page=js/looping-arrays">Looping Through Arrays</a></li>
                <li><a href="js.php?page=js/objects">Objects and Properties</a></li>
                <li><a href="js.php?page=js/object-methods">Object Methods</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">6. DOM Manipulation</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/dom-intro">What is the DOM?</a></li>
                <li><a href="js.php?page=js/selectors">Selectors</a></li>
                <li><a href="js.php?page=js/dom-update">Changing Content</a></li>
                <li><a href="js.php?page=js/dom-events">Event Listeners</a></li>
                <li><a href="js.php?page=js/dom-create">Creating/Removing Elements</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">7. Events and Interactions</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/mouse-key-events">Mouse & Keyboard Events</a></li>
                <li><a href="js.php?page=js/event-object">Event Object</a></li>
                <li><a href="js.php?page=js/delegation">Event Delegation</a></li>
                <li><a href="js.php?page=js/bubbling">Bubbling vs Capturing</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">8. ES6+ Features</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/let-const">let & const</a></li>
                <li><a href="js.php?page=js/destructuring">Destructuring</a></li>
                <li><a href="js.php?page=js/spread-rest">Spread & Rest</a></li>
                <li><a href="js.php?page=js/modules">Modules: import/export</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">9. Async JavaScript</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/callbacks">Callbacks</a></li>
                <li><a href="js.php?page=js/promises">Promises</a></li>
                <li><a href="js.php?page=js/async-await">Async / Await</a></li>
                <li><a href="js.php?page=js/error-handling">Error Handling</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">10. Projects and Practice</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/project-todo">To-Do List</a></li>
                <li><a href="js.php?page=js/project-weather">Weather App</a></li>
                <li><a href="js.php?page=js/project-calculator">Calculator</a></li>
                <li><a href="js.php?page=js/project-quiz">Quiz App</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">11. JS in the Browser</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/browser-bom">Browser Object Model</a></li>
                <li><a href="js.php?page=js/window-navigator">Window & Navigator</a></li>
                <li><a href="js.php?page=js/storage">LocalStorage / SessionStorage</a></li>
                <li><a href="js.php?page=js/device-detect">Device & Feature Detect</a></li>
                <li><a href="js.php?page=js/popups">Popups & Controls</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">12. Fetching Data</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/api-intro">Intro to APIs</a></li>
                <li><a href="js.php?page=js/fetch-api">fetch() Basics</a></li>
                <li><a href="js.php?page=js/json">Working with JSON</a></li>
                <li><a href="js.php?page=js/async-await-api">Async/Await with APIs</a></li>
                <li><a href="js.php?page=js/display-api">Display Fetched Data</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">13. Modern JS (ES6+)</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/es6-overview">ES6+ Overview</a></li>
                <li><a href="js.php?page=js/default-params">Default Params</a></li>
                <li><a href="js.php?page=js/es6-modules">Modules in Depth</a></li>
                <li><a href="js.php?page=js/modern-practice">Modern Code Examples</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">14. Object-Oriented JS</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/oop-intro">Intro to OOP</a></li>
                <li><a href="js.php?page=js/prototypes">Prototypes</a></li>
                <li><a href="js.php?page=js/classes">Classes & Inheritance</a></li>
                <li><a href="js.php?page=js/oop-realworld">Real-World OOP</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">15. Async JavaScript</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/sync-vs-async">Sync vs Async</a></li>
                <li><a href="js.php?page=js/callback-hell">Callback Hell</a></li>
                <li><a href="js.php?page=js/promises-review">Promises Review</a></li>
                <li><a href="js.php?page=js/async-error">Error in Async Code</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">16. Testing & Debugging</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/testing-intro">Intro to Testing</a></li>
                <li><a href="js.php?page=js/jest-basics">Testing with Jest</a></li>
                <li><a href="js.php?page=js/debugging">Debugging Techniques</a></li>
                <li><a href="js.php?page=js/async-debug">Debug Async</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">17. JS & Security</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/security-intro">Security Basics</a></li>
                <li><a href="js.php?page=js/xss-eval">Avoiding XSS / eval()</a></li>
                <li><a href="js.php?page=js/cors">CORS Explained</a></li>
                <li><a href="js.php?page=js/csp">Content Security Policy</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">18. Practice Projects</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/project-slider">Image Slider</a></li>
                <li><a href="js.php?page=js/project-quiz-2">Advanced Quiz</a></li>
                <li><a href="js.php?page=js/project-notes">Notes App</a></li>
                <li><a href="js.php?page=js/project-crud">Simple CRUD</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">19. Ecosystem & Tools</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/vanilla-vs-frameworks">Vanilla vs Frameworks</a></li>
                <li><a href="js.php?page=js/react-vue-angular">React / Vue / Angular</a></li>
                <li><a href="js.php?page=js/node-npm">Node.js & npm</a></li>
                <li><a href="js.php?page=js/vite-webpack">Vite / Webpack / Babel</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">20. Tips & Best Practices</h2>
            <ul class="space-y-2">
                <li><a href="js.php?page=js/dry-kiss">DRY & KISS</a></li>
                <li><a href="js.php?page=js/naming">Naming Conventions</a></li>
                <li><a href="js.php?page=js/performance">Performance Tips</a></li>
                <li><a href="js.php?page=js/clean-code">Writing Clean Code</a></li>
            </ul>
        </div>

    </div>

    <!-- Main Content Area -->
    <main class="flex-1">
        <?php echo $pageContent; ?>
    </main>
</div>

<?php include 'includes/footer.php'; ?>