<!-- Header.svelte -->
<header>
  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/products">Products</a></li>
    </ul>
  </nav>
</header>

<style>
  header {
    background-color: #333;
    color: #fff;
    padding: 1em;
    text-align: center;
  }

  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  nav li {
    display: inline-block;
    margin-right: 20px;
  }

  nav a {
    color: #fff;
    text-decoration: none;
  }
</style>