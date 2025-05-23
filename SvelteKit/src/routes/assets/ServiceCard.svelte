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