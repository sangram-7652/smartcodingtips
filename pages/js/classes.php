<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/classes-inheritance" class="text-blue-600 dark:text-blue-400 hover:underline">Classes & Inheritance</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">📘 Classes & Inheritance in JavaScript</h1>

  <p class="mb-4">
    ES6 introduced the <code>class</code> syntax in JavaScript, making it easier to create objects and implement inheritance using a cleaner, more familiar syntax (especially for developers coming from OOP languages like Java or C++).
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🎓 Declaring a Class</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>class Person {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  greet() {
    console.log(`Hi, I'm ${this.name} and I'm ${this.age} years old.`);
  }
}

const alice = new Person("Alice", 30);
alice.greet();
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📚 Inheritance with <code>extends</code></h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>class Student extends Person {
  constructor(name, age, subject) {
    super(name, age); // Call parent constructor
    this.subject = subject;
  }

  study() {
    console.log(`${this.name} is studying ${this.subject}.`);
  }
}

const bob = new Student("Bob", 22, "Mathematics");
bob.greet();
bob.study();
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔧 Method Overriding</h2>
  <p class="mb-2">
    Child classes can override parent methods:
  </p>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>class Teacher extends Person {
  greet() {
    console.log(`Hello students, I'm Professor ${this.name}.`);
  }
}

const prof = new Teacher("Smith", 45);
prof.greet(); // Overridden version
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🚀 Using <code>super()</code> and <code>super.method()</code></h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>class Developer extends Person {
  greet() {
    super.greet(); // Call parent greet()
    console.log("I write code every day!");
  }
}

const dev = new Developer("Eve", 27);
dev.greet();
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Summary</h2>
  <ul class="list-disc list-inside mb-6">
    <li><code>class</code> simplifies prototype-based inheritance.</li>
    <li>Use <code>extends</code> to inherit from another class.</li>
    <li><code>super()</code> calls the parent constructor.</li>
    <li>Child classes can override parent methods.</li>
  </ul>

  <div class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4 rounded mt-6">
    💡 <strong>Tip:</strong> Classes are syntactic sugar over JavaScript's prototypal inheritance. Behind the scenes, it's still using prototypes!
  </div>

  <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/prototypes') ?>" class="hover:underline">← Previous: Prototypes</a>
    <a href="<?= base_url('js/oop-realworld') ?>" class="hover:underline ms-auto">Next: Real-World OOP →</a>
</div>
</main>
