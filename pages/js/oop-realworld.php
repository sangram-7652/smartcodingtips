<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/oop-realworld" class="text-blue-600 hover:underline">OOP Real-World Example</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🏗️ Real-World OOP in JavaScript</h1>

  <p class="mb-4">
    Let’s put Object-Oriented Programming (OOP) into practice by building a basic app using JavaScript classes, inheritance, and encapsulation. We'll simulate a simple **Library System** that lets users borrow books.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📚 Step 1: Define the Book Class</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>class Book {
  constructor(title, author, available = true) {
    this.title = title;
    this.author = author;
    this.available = available;
  }

  borrow() {
    if (this.available) {
      this.available = false;
      console.log(`${this.title} borrowed.`);
    } else {
      console.log(`${this.title} is not available.`);
    }
  }

  returnBook() {
    this.available = true;
    console.log(`${this.title} returned.`);
  }
}</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">👤 Step 2: Create a User Class</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>class User {
  constructor(name) {
    this.name = name;
    this.books = [];
  }

  borrowBook(book) {
    if (book.available) {
      book.borrow();
      this.books.push(book);
    } else {
      console.log(`Sorry, ${book.title} is already borrowed.`);
    }
  }

  returnBook(book) {
    const index = this.books.indexOf(book);
    if (index !== -1) {
      book.returnBook();
      this.books.splice(index, 1);
    }
  }
}</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🏛️ Step 3: Setup a Library</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>const book1 = new Book("The Alchemist", "Paulo Coelho");
const book2 = new Book("1984", "George Orwell");

const user1 = new User("Alice");
user1.borrowBook(book1);  // Alice borrows The Alchemist
user1.borrowBook(book2);  // Alice borrows 1984
user1.returnBook(book1);  // Alice returns The Alchemist
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 Real-World Concepts Used</h2>
  <ul class="list-disc list-inside mb-4">
    <li>✅ Classes and Instances</li>
    <li>✅ Encapsulation (object state is internal)</li>
    <li>✅ Method Encapsulation (borrow/return)</li>
    <li>✅ Object Interaction (User borrows Book)</li>
  </ul>

  <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded mt-6">
    💡 <strong>Try this:</strong> Expand this app by adding a <code>Library</code> class to manage available books and track inventory.
  </div>


  <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/sync-vs-async" class="text-blue-600 hover:underline">Sync vs Async →</a></p>
</div>
</main>
