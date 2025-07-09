<?php
// js.php

$page = $_GET['page'] ?? 'js/what-is-js';
$pagePath = "pages/" . $page . ".php";

if (!file_exists($pagePath)) {
    $pagePath = "pages/js/what-is-js.php";
}

ob_start();
include $pagePath;
$pageContent = ob_get_clean();

include 'includes/header.php';
$currentPage = $_GET['page'] ?? 'js/what-is-js';

function tocLink($label, $link, $currentPage) {
    $activeClass = ($link === $currentPage) ? 'bg-yellow-300 dark:bg-yellow-600 text-black font-semibold rounded px-2' : '';
    echo "<li><a href='js.php?page=$link' class='block px-2 py-1 rounded $activeClass'>$label</a></li>";
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
        class="fixed top-0 left-0 h-screen w-[18rem] bg-white dark:bg-gray-900 text-black dark:text-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50 md:z-10 md:relative md:translate-x-0 md:flex md:flex-col md:px-6 md:space-y-6 md:text-sm md:font-medium overflow-y-scroll md:h-[1200px]">

        <!-- Mobile-only close button -->
        <button id="closeToc" class="absolute top-4 right-4 text-2xl md:hidden">✖</button>

        <!-- TOC Content -->
        <div class="px-4 py-4 space-y-4 ">
<?php
$sections = [
    '1. Introduction to JavaScript' => [
        'What is JavaScript?' => 'js/what-is-js',
        'History and Evolution' => 'js/history',
        'JS vs HTML/CSS' => 'js/js-vs-html-css',
        'Where JavaScript Runs' => 'js/running-js',
        'Your First Script' => 'js/first-script'
    ],
    '2. JavaScript Basics' => [
        'Variables: var, let, const' => 'js/variables',
        'Data Types' => 'js/data-types',
        'Operators' => 'js/operators',
        'Comments' => 'js/comments',
        'Alert, Prompt, Console' => 'js/alert-console'
    ],
    '3. Control Flow' => [
        'If, Else, Switch' => 'js/if-else',
        'Loops: for, while' => 'js/loops',
        'Break & Continue' => 'js/break-continue',
        'Ternary Operator' => 'js/ternary',
        'Control Flow Examples' => 'js/control-examples'
    ],
    '4. Functions and Scope' => [
        'Defining Functions' => 'js/functions',
        'Arrow Functions' => 'js/arrow-functions',
        'Scope & Closure' => 'js/scope',
        'The `this` Keyword' => 'js/this'
    ],
    '5. Arrays and Objects' => [
        'Arrays and Methods' => 'js/arrays',
        'Looping Through Arrays' => 'js/looping-arrays',
        'Objects and Properties' => 'js/objects',
        'Object Methods' => 'js/object-methods'
    ],
    '6. DOM Manipulation' => [
        'What is the DOM?' => 'js/dom-intro',
        'Selectors' => 'js/selectors',
        'Changing Content' => 'js/dom-update',
        'Event Listeners' => 'js/dom-events',
        'Creating/Removing Elements' => 'js/dom-create'
    ],
    '7. Events and Interactions' => [
        'Mouse & Keyboard Events' => 'js/mouse-key-events',
        'Event Object' => 'js/event-object',
        'Event Delegation' => 'js/delegation',
        'Bubbling vs Capturing' => 'js/bubbling'
    ],
    '8. ES6+ Features' => [
        'let & const' => 'js/let-const',
        'Destructuring' => 'js/destructuring',
        'Spread & Rest' => 'js/spread-rest',
        'Modules: import/export' => 'js/modules'
    ],
    '9. Async JavaScript' => [
        'Callbacks' => 'js/callbacks',
        'Promises' => 'js/promises',
        'Async / Await' => 'js/async-await',
        'Error Handling' => 'js/error-handling'
    ],
    '10. Projects and Practice' => [
        'To-Do List' => 'js/project-todo',
        'Weather App' => 'js/project-weather',
        'Calculator' => 'js/project-calculator',
        'Quiz App' => 'js/project-quiz'
    ],
    '11. JS in the Browser' => [
        'Browser Object Model' => 'js/browser-bom',
        'Window & Navigator' => 'js/window-navigator',
        'LocalStorage / SessionStorage' => 'js/storage',
        'Device & Feature Detect' => 'js/device-detect',
        'Popups & Controls' => 'js/popups'
    ],
    '12. Fetching Data' => [
        'Intro to APIs' => 'js/api-intro',
        'fetch() Basics' => 'js/fetch-api',
        'Working with JSON' => 'js/json',
        'Async/Await with APIs' => 'js/async-await-api',
        'Display Fetched Data' => 'js/display-api'
    ],
    '13. Modern JS (ES6+)' => [
        'ES6+ Overview' => 'js/es6-overview',
        'Default Params' => 'js/default-params',
        'Modules in Depth' => 'js/es6-modules',
        'Modern Code Examples' => 'js/modern-practice'
    ],
    '14. Object-Oriented JS' => [
        'Intro to OOP' => 'js/oop-intro',
        'Prototypes' => 'js/prototypes',
        'Classes & Inheritance' => 'js/classes',
        'Real-World OOP' => 'js/oop-realworld'
    ],
    '15. Async JavaScript' => [
        'Sync vs Async' => 'js/sync-vs-async',
        'Callback Hell' => 'js/callback-hell',
        'Promises Review' => 'js/promises-review',
        'Error in Async Code' => 'js/async-error'
    ],
    '16. Testing & Debugging' => [
        'Intro to Testing' => 'js/testing-intro',
        'Testing with Jest' => 'js/jest-basics',
        'Debugging Techniques' => 'js/debugging',
        'Debug Async' => 'js/async-debug'
    ],
    '17. JS & Security' => [
        'Security Basics' => 'js/security-intro',
        'Avoiding XSS / eval()' => 'js/xss-eval',
        'CORS Explained' => 'js/cors',
        'Content Security Policy' => 'js/csp'
    ],
    '18. Practice Projects' => [
        'Image Slider' => 'js/project-slider',
        'Advanced Quiz' => 'js/project-quiz-2',
        'Notes App' => 'js/project-notes',
        'Simple CRUD' => 'js/project-crud'
    ],
    '19. Ecosystem & Tools' => [
        'Vanilla vs Frameworks' => 'js/vanilla-vs-frameworks',
        'React / Vue / Angular' => 'js/react-vue-angular',
        'Node.js & npm' => 'js/node-npm',
        'Vite / Webpack / Babel' => 'js/vite-webpack'
    ],
    '20. Tips & Best Practices' => [
        'DRY & KISS' => 'js/dry-kiss',
        'Naming Conventions' => 'js/naming',
        'Performance Tips' => 'js/performance',
        'Writing Clean Code' => 'js/clean-code'
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
    <main class="flex-1 p-4 mt-4 md:mt-0">
        <?php echo $pageContent; ?>
    </main>
</div>

<?php include 'includes/footer.php'; ?>