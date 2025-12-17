<section 
  class="main-home__negocios relative py-20 text-gray-800 bg-gray-50 overflow-hidden" 
  role="region" 
  aria-label="Seção de serviços Algoritmux"
>
  {{-- Fundo dinâmico --}}
  <div 
    id="negocios-bg" 
    class="absolute inset-0 bg-center bg-cover transition-all duration-700 ease-in-out"
    style="background-image: url('{{ asset('images/Inteligênciadedadosfundo.svg') }}');"
  ></div>

  <div id="negocios-bg-fade"></div>

  <div class="relative container mx-auto px-6 text-center z-10">
    <h2 class="text-3xl md:text-4xl font-bold mb-12 text-white drop-shadow-lg">
      Como a <span class="text-[#D30094]">Algoritmux</span> ativa o modo <strong>Growth</strong> no seu negócio:
    </h2>

    {{-- Cabeçalho das abas --}}
    <ul 
      id="negocios-tabs"
      class="main-home__negocios-header flex flex-wrap justify-center gap-4 mb-12" 
      role="tablist"
    >
      <li data-topic="1" class="tab active cursor-pointer px-5 py-3 rounded-lg bg-[#D30094] text-white font-semibold hover:bg-[#a90073]" role="tab" aria-selected="true">
        INTELIGÊNCIA<br>DE MARKETING
      </li>
      <li data-topic="2" class="tab cursor-pointer px-5 py-3 rounded-lg bg-white text-[#D30094] border border-[#D30094] font-semibold hover:bg-[#D30094]/10" role="tab">
        GERAÇÃO<br>DE LEADS
      </li>
      <li data-topic="3" class="tab cursor-pointer px-5 py-3 rounded-lg bg-white text-[#D30094] border border-[#D30094] font-semibold hover:bg-[#D30094]/10" role="tab">
        JORNADA<br>UX
      </li>
      <li data-topic="4" class="tab cursor-pointer px-5 py-3 rounded-lg bg-white text-[#D30094] border border-[#D30094] font-semibold hover:bg-[#D30094]/10" role="tab">
        RETENÇÃO E<br>EXPANSÃO DE VENDAS
      </li>
      <li data-topic="5" class="tab cursor-pointer px-5 py-3 rounded-lg bg-white text-[#D30094] border border-[#D30094] font-semibold hover:bg-[#D30094]/10" role="tab">
        CONSTRUÇÃO DA<br>REPUTAÇÃO DIGITAL
      </li>
    </ul>

    {{-- Conteúdo dinâmico --}}
    <div id="negocios-content" class="main-home__negocios-content relative text-white max-w-3xl mx-auto">
      <div data-description="1" class="tab-content block">
        <h3 class="text-2xl font-bold text-[#D30094] mb-4">INTELIGÊNCIA DE MARKETING</h3>
        <p class="text-lg leading-relaxed">
          Transforme dados em decisões estratégicas. A solução de Inteligência de Dados da Algoritmux coleta,
          analisa e interpreta informações para gerar insights que potencializam suas estratégias e aumentam o ROI.
        </p>
      </div>

      <div data-description="2" class="tab-content hidden">
        <h3 class="text-2xl font-bold text-[#D30094] mb-4">GERAÇÃO DE LEADS</h3>
        <p class="text-lg leading-relaxed">
          Atraímos e engajamos leads qualificados que realmente querem o que você oferece. Com estratégias multicanais,
          capturamos o interesse do público e entregamos leads prontos para conversão.
        </p>
      </div>

      <div data-description="3" class="tab-content hidden">
        <h3 class="text-2xl font-bold text-[#D30094] mb-4">JORNADA UX</h3>
        <p class="text-lg leading-relaxed">
          Criamos experiências que fidelizam e convertem. Mapear e otimizar a jornada do usuário é essencial para aumentar valor
          e satisfação. Design centrado no usuário desde o primeiro clique até a conversão.
        </p>
      </div>

      <div data-description="4" class="tab-content hidden">
        <h3 class="text-2xl font-bold text-[#D30094] mb-4">RETENÇÃO E EXPANSÃO DE VENDAS</h3>
        <p class="text-lg leading-relaxed">
          Conquistar é só o começo. Aumente a lealdade e o valor do cliente com estratégias de retenção e up-selling.
          Antecipe necessidades e fortaleça o relacionamento para ampliar o ticket médio.
        </p>
      </div>

      <div data-description="5" class="tab-content hidden">
        <h3 class="text-2xl font-bold text-[#D30094] mb-4">CONSTRUÇÃO DA REPUTAÇÃO DIGITAL</h3>
        <p class="text-lg leading-relaxed">
          Posicione sua marca como referência no mercado digital. Criamos estratégias de reputação com SEO, marketing de conteúdo
          e monitoramento de redes para consolidar sua autoridade online.
        </p>
      </div>
    </div>
  </div>
</section>

@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', () => {
  const tabs = document.querySelectorAll('#negocios-tabs .tab');
  const contents = document.querySelectorAll('#negocios-content .tab-content');
  
  const bg = document.getElementById('negocios-bg');
  const bgFade = document.getElementById('negocios-bg-fade');

  const backgrounds = {
    1: "{{ asset('images/Inteligênciadedadosfundo.svg') }}",
    2: "{{ asset('images/Geraçãodeleadsfundo.svg') }}",
    3: "{{ asset('images/JornadaUXfundo.svg') }}",
    4: "{{ asset('images/Retençãoeexpansaodevendasfundo.svg') }}",
    5: "{{ asset('images/Construçãodareputaçãodigitalfundo.svg') }}"
  };

  /* Mostrar conteúdo inicial */
  const first = document.querySelector('[data-description="1"]');
  first.classList.remove("hidden");
  first.classList.add("show");

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const topic = tab.dataset.topic;

      /* ======================
         TABS
      ====================== */
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      /* ======================
         CONTEÚDOS (SEM BUG)
      ====================== */
      contents.forEach(c => {
        if (c.dataset.description === topic) {
          /* mostrar */
          c.classList.remove('hidden');
          requestAnimationFrame(() => c.classList.add("show"));
        } else {
          /* esconder suavemente */
          c.classList.remove("show");
          setTimeout(() => c.classList.add("hidden"), 250);
        }
      });
      
      /* ======================
         CROSSFADE DE FUNDO
      ====================== */
      const newImage = backgrounds[topic];
      const loader = new Image();
      loader.src = newImage;

      loader.onload = () => {
        bgFade.style.backgroundImage = `url('${newImage}')`;
        bgFade.style.opacity = 1; 

        setTimeout(() => {
          bg.style.backgroundImage = `url('${newImage}')`;
          bgFade.style.opacity = 0;
        }, 400);
      };

    });
  });
});

</script>


@endpush

<style>
/* Fundo crossfade */
#negocios-bg, #negocios-bg-fade {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
}
#negocios-bg-fade {
  opacity: 0;
  transition: opacity .45s ease-in-out;
}

/* Tabs */
#negocios-tabs .tab {
  transition: all .25s ease-out;
  background: white !important;
  color: #D30094 !important;
  border: 1px solid #D30094 !important;
}

#negocios-tabs .tab.active {
  background: #D30094 !important;
  color: white !important;
  transform: scale(1.06);
  box-shadow: 0 0 12px rgba(211,0,148,.45);
}


/* Conteúdo — sem pulo de height */
#negocios-content {
  position: relative;
  min-height: 180px; /* altura mínima estável */
}

#negocios-content .tab-content {
  position: absolute;
  inset: 0;
  opacity: 0;
  transform: translateY(6px);
  transition: opacity .25s ease, transform .25s ease;
}

#negocios-content .tab-content.show {
  opacity: 1;
  transform: translateY(0);
  position: relative;
}

/* ==========================================
   MOBILE — Melhorias gerais
========================================== */
@media (max-width: 768px) {

  /* Fundo mais escuro para leitura */
  #negocios-bg::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.55);
    backdrop-filter: blur(2px);
    z-index: 1;
  }
  #negocios-bg, #negocios-bg-fade {
    z-index: 0;
  }

  /* Título */
  .main-home__negocios h2 {
    font-size: 1.8rem;
    line-height: 2.2rem;
    padding: 0 10px;
  }

  /* Tabs mais responsivas */
  #negocios-tabs {
    gap: 10px;
    padding: 0 10px;
  }

  #negocios-tabs .tab {
    width: calc(50% - 10px);    /* 2 por linha */
    text-align: center;
    font-size: 0.82rem;
    padding: 12px 8px;
    line-height: 1.2rem;
    border-radius: 12px;
    z-index: 2;
    position: relative;
  }

  /* Diminuir impacto do active */
  #negocios-tabs .tab.active {
    transform: scale(1.03);
  }

  /* Conteúdo mais confortável */
  #negocios-content {
    padding: 20px 12px 10px;
    min-height: 220px;
  }

  #negocios-content .tab-content h3 {
    font-size: 1.4rem;
  }

  #negocios-content .tab-content p {
    font-size: 1rem;
    line-height: 1.45rem;
  }
}

</style>


