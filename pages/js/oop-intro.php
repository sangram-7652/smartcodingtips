<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/oop-intro" class="text-blue-600 hover:underline">Intro to OOP</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🧱 Introduction to Object-Oriented Programming (OOP)</h1>

  <p class="mb-4">
    Object-Oriented Programming (OOP) is a programming paradigm that helps organize and structure code by modeling real-world entities as objects. JavaScript supports OOP through prototypes and ES6 <code>class</code> syntax.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 Why Use OOP?</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Encapsulation – Keep data and behavior in one place</li>
    <li>Reusability – Create reusable code with classes</li>
    <li>Inheritance – Share behavior across related objects</li>
    <li>Abstraction – Hide complexity from the outside</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Creating a Class</h2>
  <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>class Person {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  greet() {
    console.log(`Hello, my name is ${this.name}`);
  }
}

const user = new Person("Alice", 25);
user.greet();</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧬 Inheritance</h2>
  <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>class Student extends Person {
  constructor(name, age, subject) {
    super(name, age); // Call parent constructor
    this.subject = subject;
  }

  study() {
    console.log(`${this.name} is studying ${this.subject}`);
  }
}

const s1 = new Student("Bob", 20, "Math");
s1.greet();
s1.study();</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">⚙️ Object Literals vs Classes</h2>
  <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// Object literal (simple use-case)
const user = {
  name: "Charlie",
  greet() {
    console.log(`Hi, I'm ${this.name}`);
  }
};</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Key Concepts Recap</h2>
  <ul class="list-disc list-inside mb-6">
    <li><strong>Class</strong> – Template for creating objects</li>
    <li><strong>Object</strong> – Instance of a class</li>
    <li><strong>Constructor</strong> – Method that initializes the object</li>
    <li><strong>Inheritance</strong> – Ability of one class to extend another</li>
    <li><strong>Method</strong> – Function inside a class</li>
  </ul>

  <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded mt-6">
    💡 <strong>Tip:</strong> Use classes when building large-scale apps or when multiple objects share similar structure or behavior.
  </div>

</main>
