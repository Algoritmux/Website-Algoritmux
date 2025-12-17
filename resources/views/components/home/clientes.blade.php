<section 
  class="main-home__clientes relative py-20 bg-[#08010D] text-white overflow-hidden"
  id="clientes"
  aria-labelledby="clientes-title"
>
  <div class="container mx-auto px-6 text-center">
    <h2 id="clientes-title" class="text-3xl md:text-4xl font-bold mb-10">
      Clientes que confiam na <span class="text-[#D30094]">Algoritmux</span> 💼
    </h2>

    {{-- Carrossel Swiper --}}
    <div class="swiper clientes-swiper">
      <div class="swiper-wrapper">
        {{-- Logo 1 --}}
        <div class="swiper-slide flex justify-center items-center">
          <img 
            src="{{ asset('/images/clientes/wcare(2).png') }}" 
            alt="WCare" 
            class="w-40 h-auto object-contain opacity-90 hover:opacity-100 transition-opacity"
            loading="lazy"
          >
        </div>

        {{-- Logo 2 --}}
        <div class="swiper-slide flex justify-center items-center">
          <img 
            src="{{ asset('/images/clientes/rodas2.png') }}" 
            alt="Rodas 2" 
            class="w-40 h-auto object-contain opacity-90 hover:opacity-100 transition-opacity"
            loading="lazy"
          >
        </div>

        {{-- Logo 3 --}}
        <div class="swiper-slide flex justify-center items-center">
          <img 
            src="{{ asset('/images/clientes/embalebem2.png') }}" 
            alt="EmbaleBem" 
            class="w-40 h-auto object-contain opacity-90 hover:opacity-100 transition-opacity"
            loading="lazy"
          >
        </div>

        {{-- Logo 4 --}}
        <div class="swiper-slide flex justify-center items-center">
          <img 
            src="{{ asset('/images/clientes/carrozza.png') }}" 
            alt="Carrozza" 
            class="w-40 h-auto object-contain opacity-90 hover:opacity-100 transition-opacity"
            loading="lazy"
          >
        </div>

        {{-- Logo 5 --}}
        <div class="swiper-slide flex justify-center items-center">
          <img 
            src="{{ asset('/images/clientes/unicpo.png') }}" 
            alt="UniCPO" 
            class="w-40 h-auto object-contain opacity-90 hover:opacity-100 transition-opacity"
            loading="lazy"
          >
        </div>

        {{-- Logo 6 --}}
        <div class="swiper-slide flex justify-center items-center">
          <img 
            src="{{ asset('/images/clientes/metadevendas.png') }}" 
            alt="Meta de Vendas" 
            class="w-40 h-auto object-contain opacity-90 hover:opacity-100 transition-opacity"
            loading="lazy"
          >
        </div>

        {{-- Logo 7 --}}
        <div class="swiper-slide flex justify-center items-center">
          <img 
            src="{{ asset('/images/clientes/bluenote.png') }}" 
            alt="BlueNote" 
            class="w-40 h-auto object-contain opacity-90 hover:opacity-100 transition-opacity"
            loading="lazy"
          >
        </div>

        {{-- Logo 8 --}}
        <div class="swiper-slide flex justify-center items-center">
          <img 
            src="{{ asset('/images/clientes/discolbus.png') }}" 
            alt="Discolbus" 
            class="w-40 h-auto object-contain opacity-90 hover:opacity-100 transition-opacity"
            loading="lazy"
          >
        </div>
      </div>

      {{-- Paginação (bolinhas) --}}
      <div class="swiper-pagination mt-8"></div>
    </div>
  </div>
</section>

@push('scripts')
  {{-- SwiperJS CDN --}}
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.clientes-swiper', {
      slidesPerView: 2,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: { slidesPerView: 3 },
        1024: { slidesPerView: 5 },
      },
    });
  });
  </script>
@endpush
