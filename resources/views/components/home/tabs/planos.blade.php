<section
  id = "planos"
  class="main-home__planos relative py-20 text-gray-200 bg-[#08010D] overflow-hidden"
  role="region"
  aria-label="Planos de aceleração Growth"
>
  <div class="container mx-auto px-6 text-center relative z-10">
    <h2 class="text-3xl md:text-4xl font-bold mb-10 text-white">
      Nossos <span class="text-[#D30094]">Planos</span> de Aceleração Growth 🚀
    </h2>

    {{-- Abas --}}
    <ul 
      id="planos-tabs"
      class="main-home__planos-header flex flex-wrap justify-center gap-4 mb-10"
      role="tablist"
    >
      <li data-topic="1" class="tab active cursor-pointer px-5 py-3 rounded-lg bg-[#D30094] text-white font-semibold transition-colors hover:bg-[#a90073]" role="tab" aria-selected="true">
        ASSESSORIA<br>GROWTH
      </li>
      <li data-topic="2" class="tab cursor-pointer px-5 py-3 rounded-lg bg-transparent text-[#D30094] border border-[#D30094] font-semibold hover:bg-[#D30094]/10" role="tab">
        GROWTH<br>SOB DEMANDA
      </li>
      <li data-topic="3" class="tab cursor-pointer px-5 py-3 rounded-lg bg-transparent text-[#D30094] border border-[#D30094] font-semibold hover:bg-[#D30094]/10" role="tab">
        INTELIGÊNCIA<br>DE MARKETING
      </li>
      <li data-topic="4" class="tab cursor-pointer px-5 py-3 rounded-lg bg-transparent text-[#D30094] border border-[#D30094] font-semibold hover:bg-[#D30094]/10" role="tab">
        GO TO<br>MARKETING
      </li>
    </ul>

    {{-- Conteúdo das abas --}}
    <div id="planos-content" class="main-home__planos-content relative mt-10">

      {{-- Plano 1 --}}
      <div class="tab-content hidden grid md:grid-cols-2 gap-8 items-center" data-description="1">
        <div class="main-home__planos-item--image">
          <img 
            src="{{ asset('images/assessoria.png') }}" 
            alt="Assessoria Growth"
            loading="lazy"
            class="rounded-xl shadow-md w-full h-auto object-cover"
          >
        </div>
        <div class="main-home__planos-item--text text-left">
          <h3 class="text-2xl font-bold text-[#D30094] mb-4">ASSESSORIA GROWTH</h3>
          <p class="text-gray-300 leading-relaxed mb-6">
            Consultoria estratégica completa para potencializar resultados de marketing e vendas.  
            Ideal para empresas que desejam um acompanhamento próximo e plano de crescimento contínuo.
          </p>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-center gap-2">@include('components.svg.check') Diagnóstico completo de marketing</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Planejamento trimestral de crescimento</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Acompanhamento mensal e otimizações</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Relatórios de performance e insights</li>
          </ul>
          <a href="https://api.whatsapp.com/send/?phone=5512992482237&text&type=phone_number&app_absent=0" target="_blank" class="inline-block mt-6 bg-[#D30094] hover:bg-[#a90073] text-white px-6 py-3 rounded-full font-semibold transition-colors">
            FALAR COM ESPECIALISTA
          </a>
        </div>
      </div>

      {{-- Plano 2 --}}
      <div class="tab-content hidden grid md:grid-cols-2 gap-8 items-center" data-description="2">
        <div class="main-home__planos-item--image">
          <img 
            src="{{ asset('images/growth sob demanda.png') }}" 
            alt="Growth Sob Demanda"
            loading="lazy"
            class="rounded-xl shadow-md w-full h-auto object-cover"
          >
        </div>
        <div class="main-home__planos-item--text text-left">
          <h3 class="text-2xl font-bold text-[#D30094] mb-4">GROWTH SOB DEMANDA</h3>
          <p class="text-gray-300 leading-relaxed mb-6">
            Um plano flexível sob medida para empresas que precisam de apoio em projetos específicos, como campanhas,
            automações, landing pages ou estratégias de tráfego pago.
          </p>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-center gap-2">@include('components.svg.check') Execução sob demanda de estratégias</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Personalização por objetivo</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Suporte técnico e estratégico contínuo</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Foco em entregas rápidas e eficientes</li>
          </ul>
          <a href="https://api.whatsapp.com/send/?phone=5512992482237&text&type=phone_number&app_absent=0" target="_blank" class="inline-block mt-6 bg-[#D30094] hover:bg-[#a90073] text-white px-6 py-3 rounded-full font-semibold transition-colors">
            SOLICITAR DEMANDA
          </a>
        </div>
      </div>

      {{-- Plano 3 --}}
      <div class="tab-content hidden grid md:grid-cols-2 gap-8 items-center" data-description="3">
        <div class="main-home__planos-item--image">
          <img 
            src="{{ asset('images/inteligencia de dados.png') }}" 
            alt="Inteligência de Marketing"
            loading="lazy"
            class="rounded-xl shadow-md w-full h-auto object-cover"
          >
        </div>
        <div class="main-home__planos-item--text text-left">
          <h3 class="text-2xl font-bold text-[#D30094] mb-4">INTELIGÊNCIA DE MARKETING</h3>
          <p class="text-gray-300 leading-relaxed mb-6">
            Soluções completas em análise e interpretação de dados para decisões mais precisas, previsões e ajustes de
            campanhas em tempo real.
          </p>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-center gap-2">@include('components.svg.check') Monitoramento de métricas e ROI</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Dashboards interativos</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Insights estratégicos personalizados</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Relatórios semanais automáticos</li>
          </ul>
          <a href="https://api.whatsapp.com/send/?phone=5512992482237&text&type=phone_number&app_absent=0" target="_blank" class="inline-block mt-6 bg-[#D30094] hover:bg-[#a90073] text-white px-6 py-3 rounded-full font-semibold transition-colors">
            SABER MAIS
          </a>
        </div>
      </div>

      {{-- Plano 4 --}}
      <div class="tab-content hidden grid md:grid-cols-2 gap-8 items-center" data-description="4">
        <div class="main-home__planos-item--image">
          <img 
            src="{{ asset('images/goto marketing.png') }}" 
            alt="Go To Marketing"
            loading="lazy"
            class="rounded-xl shadow-md w-full h-auto object-cover"
          >
        </div>
        <div class="main-home__planos-item--text text-left">
          <h3 class="text-2xl font-bold text-[#D30094] mb-4">GO TO MARKETING</h3>
          <p class="text-gray-300 leading-relaxed mb-6">
            Estratégia completa para lançar e posicionar produtos no mercado.  
            Desde o planejamento até a execução de campanhas com foco em vendas e reconhecimento de marca.
          </p>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-center gap-2">@include('components.svg.check') Lançamento e posicionamento de marca</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Estratégias multicanal</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Definição de público e funil</li>
            <li class="flex items-center gap-2">@include('components.svg.check') Acompanhamento de performance</li>
          </ul>
          <a href="https://api.whatsapp.com/send/?phone=5512992482237&text&type=phone_number&app_absent=0" target="_blank" class="inline-block mt-6 bg-[#D30094] hover:bg-[#a90073] text-white px-6 py-3 rounded-full font-semibold transition-colors">
            COMEÇAR AGORA
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@push('scripts')
<script>
(function () {

  const tabContainer = document.getElementById('planos-tabs');
  const contentContainer = document.getElementById('planos-content');

  if (!tabContainer || !contentContainer) return;

  const tabs = tabContainer.querySelectorAll('li[data-topic]');
  const contents = contentContainer.querySelectorAll('.tab-content');

  function activateTab(topic) {

    tabs.forEach(tab => {
      const isActive = tab.dataset.topic === topic;

      tab.setAttribute('aria-selected', isActive ? 'true' : 'false');

      if (isActive) {
        tab.classList.add('bg-[#D30094]', 'text-white');
        tab.classList.remove('bg-transparent', 'text-[#D30094]');
      } else {
        tab.classList.remove('bg-[#D30094]', 'text-white');
        tab.classList.add('bg-transparent', 'text-[#D30094]');
      }
    });

    contents.forEach(content => {
      const isCurrent = content.dataset.description === topic;

      if (isCurrent) {
        content.classList.remove('hidden');
        content.classList.add('grid');
      } else {
        content.classList.add('hidden');
        content.classList.remove('grid');
      }
    });
  }

  tabs.forEach(tab => {
    tab.addEventListener('click', function () {
      activateTab(this.dataset.topic);
    });
  });

  // Ativa a primeira aba ao carregar
  if (tabs.length > 0) {
    activateTab(tabs[0].dataset.topic);
  }

})();
</script>
@endpush



