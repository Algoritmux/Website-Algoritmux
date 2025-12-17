<section 
  id="cases" 
  class="main-home__cases relative py-24 bg-[#08010D] text-white overflow-hidden"
  aria-labelledby="cases-title"
>
  {{-- Background dinâmico --}}
  <div 
    class="absolute inset-0 -z-10 opacity-50 bg-[url('{{ asset('/images/bg-network.svg') }}')] bg-cover bg-center"
    role="presentation"
  ></div>

  <div class="container mx-auto px-6 text-center relative z-10">
    <h2 id="cases-title" class="text-3xl md:text-4xl font-bold mb-12">
      Conheça alguns de nossos <span class="text-[#D30094]">cases de sucesso</span>
    </h2>

    {{-- Swiper principal --}}
    <div class="swiper cases-swiper max-w-5xl mx-auto relative overflow-hidden">
      <div class="swiper-wrapper">

        {{-- Case 1 - W.CARE --}}
        <div class="swiper-slide !flex !flex-col !items-center gap-8">
          <!-- <h3 class="text-4xl font-semibold mb-2">W.care</h3> -->

          <div class="relative group">
            <img 
              src="{{ asset('/images/wcare.png') }}" 
              alt="Case de sucesso W.care"
              class="rounded-lg shadow-2xl w-full max-w-3xl object-contain transition-transform duration-700 group-hover:scale-[1.03]"
              loading="lazy"
            >

            {{-- Overlay de texto --}}
            <div class="absolute top-4 left-4 bg-black/70 text-sm md:text-base px-4 py-3 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-500 max-w-xs text-left border border-[#D30094]/50">
              Uma clínica médica que chegou até nós com o objetivo de definir seu posicionamento e aumentar sua participação de mercado.
            </div>

            {{-- Métricas --}}
            <div class="absolute bottom-6 left-4 bg-black/70 px-4 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-500 border border-[#D30094]/50">
              <strong>CRESCIMENTO:</strong> 48,63%
            </div>

            <div class="absolute bottom-6 right-4 bg-black/70 px-4 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-500 border border-[#D30094]/50">
              <strong>ROAS:</strong> 4,1
            </div>
          </div>

          <a href="https://api.whatsapp.com/send/?phone=5512992482237&text&type=phone_number&app_absent=0" target="_blank"
            class="mt-8 inline-block bg-gradient-to-r from-[#D30094] to-[#7000FF] hover:opacity-90 px-8 py-3 rounded-full font-bold text-white shadow-lg transition-all"
          >
            ATIVAR MODO GROWTH NA MINHA EMPRESA!
          </a>
        </div>

        {{-- Case 2 - Rodas Lençóis Paulista --}}
        <div class="swiper-slide !flex !flex-col !items-center gap-8">
          <!-- <h3 class="text-4xl font-semibold mb-2">Rodas Lençóis</h3> -->

          <div class="relative group">
            <img 
              src="{{ asset('/images/rodas.png') }}" 
              alt="Case de sucesso Rodas Lençóis Paulista"
              class="rounded-lg shadow-2xl w-full max-w-3xl object-contain transition-transform duration-700 group-hover:scale-[1.03]"
              loading="lazy"
            >

            <div class="absolute top-4 left-4 bg-black/70 px-4 py-3 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-500 max-w-xs text-left border border-[#D30094]/50">
              Uma loja de rodas e pneus que buscava fortalecer sua presença online e escalar suas vendas na região com campanhas inteligentes.
            </div>

            <div class="absolute bottom-6 left-4 bg-black/70 px-4 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-500 border border-[#D30094]/50">
              <strong>CRESCIMENTO:</strong> 61,3%
            </div>

            <div class="absolute bottom-6 right-4 bg-black/70 px-4 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-500 border border-[#D30094]/50">
              <strong>ROAS:</strong> 5,4
            </div>
          </div>

          <a href="https://api.whatsapp.com/send/?phone=5512992482237&text&type=phone_number&app_absent=0" target="_blank"
            class="mt-8 inline-block bg-gradient-to-r from-[#D30094] to-[#7000FF] hover:opacity-90 px-8 py-3 rounded-full font-bold text-white shadow-lg transition-all"
          >
            ATIVAR MODO GROWTH NA MINHA EMPRESA!
          </a>
        </div>

        {{-- Case 3 - EmbaleBem --}}
        <div class="swiper-slide !flex !flex-col !items-center gap-8">
          <!-- <h3 class="text-4xl font-semibold mb-2">EmbaleBem</h3> -->

          <div class="relative group">
            <img 
              src="{{ asset('/images/embalabem.png') }}" 
              alt="Case de sucesso EmbaleBem"
              class="rounded-lg shadow-2xl w-full max-w-3xl object-contain transition-transform duration-700 group-hover:scale-[1.03]"
              loading="lazy"
            >

            <div class="absolute top-4 left-4 bg-black/70 px-4 py-3 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-500 max-w-xs text-left border border-[#D30094]/50">
              E-commerce especializado em embalagens que otimizou sua operação com estratégias de tráfego pago e remarketing.
            </div>

            <div class="absolute bottom-6 left-4 bg-black/70 px-4 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-500 border border-[#D30094]/50">
              <strong>CRESCIMENTO:</strong> 72,4%
            </div>

            <div class="absolute bottom-6 right-4 bg-black/70 px-4 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-500 border border-[#D30094]/50">
              <strong>ROAS:</strong> 6,2
            </div>
          </div>

          <a href="https://api.whatsapp.com/send/?phone=5512992482237&text&type=phone_number&app_absent=0" target="_blank"
            class="mt-8 inline-block bg-gradient-to-r from-[#D30094] to-[#7000FF] hover:opacity-90 px-8 py-3 rounded-full font-bold text-white shadow-lg transition-all"
          >
            ATIVAR MODO GROWTH NA MINHA EMPRESA!
          </a>
        </div>

      </div>

      {{-- Botões de navegação --}}
      <div class="absolute inset-y-0 left-4 flex items-center z-10">
        <button class="swiper-button-prev bg-transparent border border-[#D30094]/50 hover:bg-[#D30094]/20 transition-all rounded-full p-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#D30094">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
      </div>

      <div class="absolute inset-y-0 right-4 flex items-center z-10">
        <button class="swiper-button-next bg-transparent border border-[#D30094]/50 hover:bg-[#D30094]/20 transition-all rounded-full p-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#D30094">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>

<style>
  .cases-swiper,
  .cases-swiper .swiper-slide {
    height: auto !important;
  }

  .swiper-button-next,
.swiper-button-prev {
  background: none !important;
  border: none !important;
  box-shadow: none !important;
  width: 38px !important;
  height: 38px !important;
}

.swiper-button-next svg,
.swiper-button-prev svg {
  stroke: #00A8FF; /* azul */
  width: 30px;
  height: 30px;
}

.swiper-button-next:hover svg,
.swiper-button-prev:hover svg {
  stroke: #D30094; /* muda para rosa ao hover */
}

/* mobile */
@media (max-width:768px) {
  .swiper-button-next svg,
  .swiper-button-prev svg {
    width: 24px;
    height: 24px;
  }
}

  

  
</style>

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.cases-swiper', {
      slidesPerView: 1,
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      speed: 900,
      effect: 'slide',
    });
  });
  </script>
@endpush
