<section 
  class="main-home__services relative py-20 bg-white text-white"
  id="servicos"
  aria-labelledby="services-title"
>
  <div class="container mx-auto px-6 text-center">
    
    <h2 id="services-title" class="text-3xl md:text-4xl font-bold mb-16">
      Soluções que aceleram o <span class="text-[#D30094]">crescimento</span> do seu negócio 🚀
    </h2>

    <div class="main-home__services-grid grid gap-10 md:grid-cols-3">
      
      <!-- Serviço 1 -->
      <article class="service-card">
        <div class="icon-wrapper">
          <img src="{{ asset('/images/estrategia.png') }}" class="icon-card" alt="">
        </div>
        <h3>Estratégia & Dados</h3>
        <p>
          Unimos criatividade e performance com base em dados para gerar estratégias que entregam resultados reais e mensuráveis.
        </p>
      </article>

      <!-- Serviço 2 -->
      <article class="service-card">
        <div class="icon-wrapper">
          <img src="{{ asset('/images/automacao.png') }}" class="icon-card" alt="">
        </div>
        <h3>Automação & Tecnologia</h3>
        <p>
          Otimizamos processos com automações inteligentes, integrações e tecnologias que reduzem custos e aumentam eficiência.
        </p>
      </article>

      <!-- Serviço 3 -->
      <article class="service-card">
        <div class="icon-wrapper">
          <img src="{{ asset('/images/ux.png') }}" class="icon-card" alt="">
        </div>
        <h3>UX & Design Estratégico</h3>
        <p>
          Criamos experiências digitais centradas no usuário, com foco em conversão, retenção e satisfação.
        </p>
      </article>

    </div>

  </div>
</section>

<style>
/* =============== SEÇÃO COM FUNDO PERSONALIZADO =============== */
.main-home__services {
  background: url("{{ asset('images/fundo_cases.svg') }}") no-repeat center top / cover;
  position: relative;
  z-index: 1;
}

/* Overlay suave para melhorar a leitura */
.main-home__services::before {
  content: "";
  position: absolute;
  inset: 0;
  
  backdrop-filter: blur(2px);
  z-index: -1;
}

/* =============== ICONES =============== */
.icon-wrapper {
  display: flex;
  justify-content: center;
  margin-bottom: 25px;
}

.icon-card {
  width: 95px;         /* Ícones maiores */
  height: 95px;
  filter: drop-shadow(0 10px 18px rgba(0,0,0,0.22));
  transition: transform .4s ease, filter .4s ease;
}

.service-card:hover .icon-card {
  transform: scale(1.22);
  filter: drop-shadow(0 16px 26px rgba(211,0,148,0.35));
}

/* =============== CARD 3D =============== */
.service-card {
  background: #ffffff;
  padding: 45px 30px;
  border-radius: 22px;
  text-align: center;

  box-shadow: 0 14px 30px rgba(0,0,0,0.10);
  transition: 
    transform .45s cubic-bezier(.22,.61,.36,1),
    box-shadow .45s ease,
    background .45s ease;

  transform-style: preserve-3d;
  perspective: 1200px;
  position: relative;
}

.service-card:hover {
  transform: translateY(-14px) rotateX(8deg);
  box-shadow: 
    0 30px 50px rgba(0,0,0,0.25),
    0 0 25px rgba(211,0,148,0.25);
  background: #ffffff;
}

/* =============== TÍTULO =============== */
.service-card h3 {
  font-size: 1.5rem;
  font-weight: 800;
  color: #D30094;
  margin-bottom: 14px;
}

/* =============== TEXTOS =============== */
.service-card p {
  color: #4a4a4a;
  line-height: 1.65;
  font-size: 1.07rem;
  max-width: 260px;
  margin: 0 auto;
}

/* =============== MOBILE AJUSTADO =============== */
@media (max-width: 768px) {
  .main-home__services-grid {
    gap: 30px;
  }

  .icon-card {
    width: 85px;
    height: 85px;
  }

  .service-card {
    padding: 35px 25px;
  }

  .service-card h3 {
    font-size: 1.35rem;
  }
}

/* =============== MOBILE AJUSTADO =============== */
@media (max-width: 768px) {

  .main-home__services {
    padding-top: 90px !important;
    padding-bottom: 80px !important;

    background-position: top center;
    background-size: cover;
  }

  .main-home__services-grid {
    gap: 40px; /* mais espaço entre os cards */
    grid-template-columns: 1fr; /* 1 card por linha */
  }

  .service-card {
    padding: 32px 22px;
    border-radius: 18px;
    box-shadow: 0 10px 26px rgba(0,0,0,0.15);
  }

  .icon-card {
    width: 75px !important;
    height: 75px !important;
    margin-bottom: 15px;
  }

  .service-card h3 {
    font-size: 1.45rem;
    margin-bottom: 12px;
  }

  .service-card p {
    font-size: 1rem;
    line-height: 1.55;
    max-width: 90%;
  }

  /* Evita exagero no 3D no toque */
  .service-card:hover {
    transform: translateY(-5px) scale(1.02);
    rotate: none !important;
  }
}



</style>