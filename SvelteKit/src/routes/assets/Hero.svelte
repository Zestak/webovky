<script lang="ts">
  // Add TypeScript support for slots
  import type { SvelteComponent } from 'svelte';
</script>

<div class="hero">
  <slot></slot>
</div>

<style>
    .hero {
        margin: 0;
        padding: 0;
        padding: 2.5rem 3rem;
        display: grid;
        gap: 2.5rem;
  grid-template-columns: repeat(2, minmax(14rem, 2fr ));
    background: linear-gradient(120deg, #24ad4b 0%, #0f2811 100%);
        color: #f3f3f3;
       
        /* box-shadow: 0 -8px 32px rgba(0,0,0,0.25); */
        font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    
        letter-spacing: 0.01em;
    }

 
</style>