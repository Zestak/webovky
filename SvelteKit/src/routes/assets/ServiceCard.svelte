<script context="module" lang="ts">
  export interface Service {
    title: string;
    description: string;
  }
</script>

<script lang="ts">
  export let service: Service;
</script>



<div class="service-card">

  <h3>{service.title}</h3>

  <p>{service.description}</p>

</div>

<style>



.service-card {
   /* background: linear-gradient(130deg, #24ad4b 0%, #0f2811 100%); */
        color: #000000;
        /* border-radius: .5rem ; */
        /* box-shadow: 0 -8px 32px rgba(0,0,0,0.25); */
        font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    display: flex;
    justify-content: center;
    padding: 1rem;
      padding: 1.2rem 0.5rem;
    
        letter-spacing: 0.01em;
}
</style>