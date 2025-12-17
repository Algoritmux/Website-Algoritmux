<section 
  class="main-home__apresentacao relative w-full overflow-hidden text-white flex flex-col justify-center items-center min-h-[100vh] bg-black pt-24 md:pt-32 pb-20"
  role="banner"
>
  {{-- Vídeo de fundo --}}
  <div class="main-home__apresentacao-video pointer-events-none absolute inset-0 z-0">
    <video
      id="bgVideo"
      class="w-full h-full object-cover block"
      src="{{ asset('videos/fundoHome.mp4') }}"
      poster="{{ asset('images/hero-fallback.jpg') }}"
      autoplay
      muted
      loop
      playsinline
      preload="auto"
    ></video>
  </div>

  {{-- Conteúdo --}}
  <div class="relative z-10 container mx-auto px-6 max-w-6xl flex flex-col items-start gap-6 text-left">

  <h1 class="text-4xl md:text-6xl font-bold leading-tight drop-shadow-lg">
    Resultados <br>
    orientados por <br>
    <strong class="text-[#D30094]">dados</strong>.
  </h1>

  <p class="text-lg md:text-xl text-gray-100 leading-relaxed max-w-2xl">
    Eleve seu negócio ao próximo nível! Com base em dados, alcançamos resultados reais e mensuráveis 
    que impulsionam suas vendas.
  </p>

  <a href="#sobre">
  <button 
    class="popup_contact mt-2 bg-[#D30094] hover:bg-[#a90073] transition-colors px-8 py-3 rounded-full font-semibold shadow-lg"
    aria-label="Ativar modo Growth"
  >
    ATIVAR MODO GROWTH
  </button>
</a>

</div>


  {{-- Números --}}
  <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mt-20 px-6 container mx-auto max-w-6xl">

    <article class="stat-card">
      <strong class="counter" data-target="61">0</strong>
      <p>dos profissionais de marketing relatam que gerar tráfego e leads qualificados é o maior desafio.</p>
    </article>

    <article class="stat-card">
      <strong class="counter" data-target="10">0</strong>
      <p>das empresas utilizam dados de forma eficaz para decisões estratégicas.</p>
    </article>

    <article class="stat-card">
      <strong class="counter" data-target="42">0</strong>
      <p>têm dificuldades para medir e otimizar o ROI de campanhas pagas.</p>
    </article>

    <article class="stat-card">
      <strong class="counter" data-target="32">0</strong>
      <p>Empresas com alinhamento entre marketing e vendas crescem 32% mais.</p>
    </article>

  </div>

</section>


@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {

  const counters = document.querySelectorAll(".counter");

  const animateCounter = (counter) => {
    const target = +counter.dataset.target;
    let current = 0;
    
    const increment = target / 80; // velocidade da animação

    const update = () => {
      current += increment;
      if (current < target) {
        counter.textContent = Math.floor(current) + "%";
        requestAnimationFrame(update);
      } else {
        counter.textContent = target + "%";
      }
    };
    
    update();
  };

  // Anima apenas quando aparecer na tela (Performance TOP)
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target); // evita repetir animação
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));

});
</script>
@endpush


<style>
  /* HERO — melhorando proporção */
.main-home__apresentacao {
  padding-top: 120px;   /* evita ficar colado no topo */
}

@media (max-width: 768px) {
  .main-home__apresentacao {
    padding-top: 160px !important; /* mais respiro */
    padding-bottom: 70px;
  }

  .main-home__apresentacao h1 {
    font-size: 2.3rem;
    line-height: 1.2;
  }

  .main-home__apresentacao p {
    font-size: 1rem;
  }

  .popup_contact {
    width: 100%;
    text-align: center;
  }
}

/* Ajuste dos cards estatísticos */
.stat-card {
  background: rgba(255, 255, 255, 0.12);
  padding: 24px;
  border-radius: 16px;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.15);
  transition: all .3s ease;
}

.stat-card:hover {
  border-color: #D30094;
  box-shadow: 0 0 25px rgba(211,0,148,0.4);
}

/* Contadores */
.stat-card strong {
  font-size: 3.8rem;
  font-weight: bold;
  color: #D30094;
  display: block;
}

@media (max-width: 768px) {
  .stat-card strong {
    font-size: 3rem;
  }
}

.stat-card p {
  color: #eee;
  margin-top: 10px;
  font-size: 0.95rem;
  line-height: 1.4;
}

</style>