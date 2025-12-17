<section 
  id="cta-final" 
  class="relative bg-[#0B0014] py-24 text-center text-white overflow-hidden"
  aria-label="Chamada final para ação"
>
  {{-- fundo decorativo --}}
  <div class="absolute inset-0 bg-[url('{{ asset('images/bg-network.svg') }}')] bg-cover bg-center opacity-10 pointer-events-none"></div>

  <div class="container relative z-10 mx-auto px-6 flex flex-col items-center justify-center">
    <h2 class="text-2xl md:text-4xl font-bold mb-8">
      Pronto para ativar o modo <span class="text-[#D30094]">Growth</span> na sua empresa?
    </h2>

    <a 
      href="{{ route('contato') }}" 
      class="relative inline-flex items-center justify-center px-8 py-4 rounded-full font-bold text-white text-lg uppercase tracking-wide 
             bg-gradient-to-r from-[#D30094] to-[#6D4AFF] shadow-[0_0_25px_#6D4AFF66] 
             hover:scale-105 hover:shadow-[0_0_35px_#D30094aa] transition-all duration-300"
    >
      Ativar modo Growth na minha empresa
    </a>

    <p class="mt-6 text-sm text-gray-300 max-w-lg">
      Fale com nossos especialistas e descubra como aplicar estratégias de crescimento orientadas por dados no seu negócio.
    </p>
  </div>
</section>
