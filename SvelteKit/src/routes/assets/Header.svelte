<!-- Header.svelte -->
<header>
  <nav>
    <ul>
      <li><a href="/">Domů</a></li>
      <li><a href="/about">O nás</a></li>
      <li><a href="/products">Služby</a></li>
    </ul>
  </nav>
<span>
  <svg class="hamburger" width="20" height="15" viewBox="0 0 20 15">
    <use xlink:href="src/routes/img/hamburger.svg" />
  </svg>
</span>
  <script>
    import { onMount } from 'svelte';

    let menuOpen = false;

    function toggleMenu() {
      menuOpen = !menuOpen;
      document.querySelector('ul').classList.toggle('open', menuOpen);
    }

    onMount(() => {
      document.querySelector('.hamburger').addEventListener('click', toggleMenu);
    });
  </script>
</header>

<style>
header {
  background: linear-gradient(90deg, #66b960, #2a5298 100%);
  background-image: url('src/routes/img/hamburger-svgrepo-com.svg');
  box-shadow: 0 4px 24px rgba(30,60,114,0.2);
  padding: 0;
  position: relative;
  z-index: 10;
}

nav {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0.5rem 2rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

ul {
  display: flex;
  gap: 2rem;
  list-style: none;
  margin: 0;
  padding: 0;
  transition: right 0.3s cubic-bezier(.77,0,.18,1);
}

li a {
  color: #000000;
  text-decoration: none;
  font-weight: 600;
  font-size: 1.1rem;
  letter-spacing: 1px;
  padding: 0.5rem 1rem;
  border-radius: 6px;
  transition: background 0.2s, color 0.2s;
}

li a:hover {
  background: rgba(255,255,255,0.12);
  color: #ffd700;
}

.hamburger {
  /* display: none;
  flex-direction: column;
  justify-content: center;
  width: 40px;
  height: 40px;
  cursor: pointer;
  z-index: 20; */
}

.hamburger span {
  /* height: 4px;
  width: 28px;
  background: #fff;
  margin: 4px 0;
  border-radius: 2px;
  transition: 0.3s; */
}

@media (max-width: 600px) {
  nav {
    padding: 0.5rem 1rem;
  }
  .hamburger {
    display: flex;
    position: absolute;
    top: 18px;
    right: 18px;
  }
  ul {
    /* flex-direction: column;
    background: linear-gradient(90deg, #1e3c72 0%, #2a5298 100%);
    position: fixed;
    top: 0;
    right: -100vw;
    width: 70vw;
    height: 100vh;
    padding-top: 4rem;
    gap: 2rem;
    box-shadow: -8px 0 32px rgba(30,60,114,0.2);
    transition: right 0.3s cubic-bezier(.77,0,.18,1); */
  }
  ul.open {
    right: 0;
  }
}
 
</style>