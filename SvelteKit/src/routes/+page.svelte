<script>
  import Header from './assets/Header.svelte';
  import Hero from './assets/Hero.svelte';
  import ServiceCard from './assets/ServiceCard.svelte';
  import Footer from './assets/Footer.svelte';


  let services = [
    { title: 'Sběr odpadů', description: 'Popis služby' },
    { title: 'Recyklace', description: 'Popis služby' },
    { title: 'Likvidace nebezpečných odpadů', description: 'Popis služby' }
  ];

  let contact = {
    email: 'vagenknecht@ahv.cz',
    phone: '+420 777 616 001',
  };


</script>

<Header />
<Hero>
  <h1>V čem vám pomohu?</h1>
  <p>Přehled o našich službách a kontaktech.</p>
</Hero>

<section>

  {#each services as service}
    <ServiceCard {service} />
  {/each}

</section>

<Footer />

