<script lang="ts">
  // Add TypeScript support for slots
  import type { SvelteComponent } from 'svelte';
</script>

<div class="hero">
  <slot></slot>
</div>

<style>
  .hero {
    /* Add your hero styling here */
    padding: 2rem;
  }
</style>