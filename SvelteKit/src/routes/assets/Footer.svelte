<script lang="ts">
  // Add TypeScript support for slots
  import type { SvelteComponent } from 'svelte';
</script>

<div class="Footer">
    <div class = "email">
        vagenknecht@ahv.cz
    </div>

    <div class = "phone">
       +420 777 616 001
    </div>


    <div class="sidlo">
        <h3>Sídlo:</h3>
        <address>
            Sobočice 27<br>
            281 44 Zásmuky<br>
            IČ: 75329336<br>
            DIČ: CZ 8108263438
        </address>
    </div>

    <div class="provoz">
        <h3>Provoz:</h3>
        <address>
            AHV ekologický servis s.r.o.<br>
            Svojšovice 40<br>
            251 63 Strančice
        </address>
    </div>

    <a 
        href="https://cz.linkedin.com/in/j%C3%A1chym-v%C3%A1genknecht-83767110b"
        aria-label="LinkedIn profil"
    >
        LinkedIn
    </a>
</div>

<style>
    .Footer {
        padding: 2.5rem 3rem;
        display: grid;
        gap: 2.5rem;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        background: linear-gradient(120deg, #232526 0%, #414345 100%);
        color: #f3f3f3;
        border-radius: 1.5rem 1.5rem 0 0;
        box-shadow: 0 -8px 32px rgba(0,0,0,0.25);
        font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
        font-size: 1.1rem;
        letter-spacing: 0.01em;
    }

    .Footer h3 {
        margin-bottom: 0.5rem;
        font-size: 1.15rem;
        color: #ffd700;
        letter-spacing: 0.03em;
        text-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    .Footer .email, .Footer .phone {
        font-weight: 600;
        font-size: 1.15rem;
        background: rgba(255,255,255,0.05);
        padding: 0.75rem 1rem;
        border-radius: 0.75rem;
        margin-bottom: 0.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: background 0.2s;
        word-break: break-all;
    }

    .Footer .email:hover, .Footer .phone:hover {
        background: rgba(255,255,255,0.12);
    }

    .Footer address {
        font-style: normal;
        line-height: 1.6;
        color: #e0e0e0;
        font-size: 1rem;
        margin-left: 0.25rem;
    }

    .Footer .sidlo, .Footer .provoz {
        background: rgba(255,255,255,0.04);
        border-left: 4px solid #ffd700;
        padding: 1rem 1.25rem;
        border-radius: 0.75rem;
        box-shadow: 0 1px 6px rgba(0,0,0,0.07);
    }

    .Footer a {
        align-self: end;
        justify-self: start;
        margin-top: 1.5rem;
        background: linear-gradient(90deg, #0077b5 60%, #00c6ff 100%);
        color: #fff;
        padding: 0.7rem 1.4rem;
        border-radius: 2rem;
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0 2px 12px rgba(0,119,181,0.15);
        transition: background 0.2s, transform 0.2s;
        letter-spacing: 0.04em;
        font-size: 1.08rem;
    }

    .Footer a:hover {
        background: linear-gradient(90deg, #00c6ff 0%, #0077b5 100%);
        transform: translateY(-2px) scale(1.04);
        box-shadow: 0 4px 24px rgba(0,119,181,0.22);
    }

    @media (max-width: 600px) {
        .Footer {
            padding: 1.2rem 0.5rem;
            grid-template-columns: 1fr;
            gap: 1.2rem;
            font-size: 1rem;
        }
        .Footer a {
            margin-top: 0.8rem;
            width: 100%;
            text-align: center;
        }
    }
</style>