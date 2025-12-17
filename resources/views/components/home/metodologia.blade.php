<section 
  id="metodologia" 
  class="py-24 bg-[#0B0014] text-white relative overflow-hidden"
  aria-label="A Metodologia Growth da Algoritmux">

  <div class="absolute inset-0 bg-[url('{{ asset('images/bg-network.svg') }}')] bg-cover bg-center opacity-10"></div>

  <div class="relative container mx-auto px-6 text-center z-10">
    <h2 class="text-3xl md:text-4xl font-bold mb-12">
      A <span class="text-[#D30094]">metodologia</span>
    </h2>

    @php
      $itens = [
        ['label' => 'DADOS',      'gradient' => 'from-[#6D4AFF] to-[#D30094]', 'descricao' => 'Tudo começa com a coleta e análise de dados. Esta fase é essencial para embasar as decisões e identificar oportunidades. O uso inteligente dos dados permite construir hipóteses mais sólidas e fundamentadas para o crescimento.'],
        ['label' => 'PRODUTO',    'gradient' => 'from-[#00E5FF] to-[#0066FF]', 'descricao' => 'O foco está em melhorar continuamente o produto ou serviço, adaptando-o às necessidades dos clientes e aprimorando suas funcionalidades. Um bom produto é o ponto de partida para conquistar e fidelizar clientes.'],
        ['label' => 'REPUTAÇÃO',  'gradient' => 'from-[#D30094] to-[#6D4AFF]', 'descricao' => 'Um produto de qualidade leva à construção de uma reputação sólida. Aqui, nos preocupamos com a percepção do cliente, a experiência do usuário e o fortalecimento da marca no mercado, gerando confiança e credibilidade.'],
        ['label' => 'EXECUÇÃO',   'gradient' => 'from-[#FF8800] to-[#FFD000]', 'descricao' => 'É o momento de colocar o plano em prática. Nesta fase, a modelagem é transformada em ações concretas e campanhas. A execução precisa ser ágil e focada para que possamos medir rapidamente o impacto.'],
        ['label' => 'RESULTADO',  'gradient' => 'from-[#00FFAA] to-[#0088FF]', 'descricao' => 'Após executar as estratégias, avaliamos os resultados obtidos. Esta etapa envolve medir KPIs, coletar feedback e entender o impacto gerado, verificando se os objetivos foram alcançados.'],
        ['label' => 'EXPANSÃO',   'gradient' => 'from-[#1E40FF] to-[#00E0FF]', 'descricao' => 'Com uma boa reputação estabelecida, é possível expandir para novos mercados ou públicos. A expansão ocorre de forma mais eficiente quando o produto e a marca têm um posicionamento claro e forte, permitindo conquistar novos espaços.'],
        ['label' => 'ESCALA',     'gradient' => 'from-[#6D4AFF] to-[#64B5FF]', 'descricao' => 'Uma vez que identificamos o que funciona, é hora de escalar. Expandimos as estratégias de sucesso para um maior público ou área, buscando aumentar o impacto e gerar resultados mais expressivos.'],
        ['label' => 'MODELAGEM',  'gradient' => 'from-[#FF0095] to-[#FF8A00]', 'descricao' => 'Com base nos dados coletados, é feita a modelagem de estratégias. Aqui, definimos planos de ação e simulamos possíveis cenários, garantindo que as táticas escolhidas estejam bem alinhadas com os objetivos do negócio.'],
      ];
    @endphp

    <div class="flex flex-col items-center justify-center">

      {{-- Círculo principal --}}
      <div class="relative metodologia-circle w-[480px] md:w-[600px] aspect-square rounded-full bg-[#15001F] flex items-center justify-center select-none animate-pulse-slow overflow-visible">

        {{-- Círculo interno GROWTH + descrição --}}
        <div id="growth-inner"
             class="absolute inset-16 md:inset-20 rounded-full flex flex-col items-center justify-center text-center
             bg-gradient-to-br from-[#6D4AFF] to-[#D30094] shadow-[0_0_25px_10px_rgba(211,0,148,0.4)] transition-all duration-300">

          <h3 id="growth-title"
              class="text-4xl md:text-5xl font-bold tracking-widest neon-text opacity-100 scale-100 transition-all duration-300">
            GROWTH
          </h3>

          <p id="growth-desc"
             class="text-[13px] md:text-[15px] font-medium leading-snug max-w-[70%] text-center text-white mx-auto
                    opacity-0 translate-y-2 transition-all duration-300">
          </p>
        </div>

        {{-- Itens em volta --}}
        @foreach ($itens as $i => $item)
          @php $deg = $i * 45; @endphp
          <div 
            class="absolute metodo-item cursor-pointer"
            style="transform: rotate({{ $deg }}deg) translateY(-260px) rotate(-{{ $deg }}deg);"
            data-gradient="{{ $item['gradient'] }}"
            data-descricao="{{ $item['descricao'] }}"
          >
            <div class="item-label px-6 py-2 bg-[#1B0030]/80 backdrop-blur-lg rounded-full border border-[#D30094]/40 text-base font-semibold text-white shadow-[0_0_18px_rgba(211,0,148,0.5)] transition-transform duration-300">
              {{ $item['label'] }}
            </div>
          </div>
        @endforeach

      </div>

    </div>
  </div>
</section>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {
  const itens   = document.querySelectorAll("#metodologia .metodo-item");
  const circle  = document.getElementById("growth-inner");
  const titleEl = document.getElementById("growth-title");
  const descEl  = document.getElementById("growth-desc");
  let active    = null;

  itens.forEach(item => {
    const descricao = item.dataset.descricao;
    const grad      = item.dataset.gradient;

    function activate() {
      // Atualiza texto da descrição
      descEl.textContent = descricao;

      // Esconde o título GROWTH e mostra a descrição
      titleEl.classList.remove("opacity-100", "scale-100");
      titleEl.classList.add("opacity-0", "scale-90");

      descEl.classList.remove("opacity-0", "translate-y-2");
      descEl.classList.add("opacity-100", "translate-y-0");

      // Troca o gradient do círculo
      circle.className =
        `absolute inset-16 md:inset-20 rounded-full flex flex-col items-center justify-center text-center
         bg-gradient-to-br ${grad} shadow-[0_0_40px_15px_rgba(255,255,255,0.25)] transition-all duration-300 eletrico`;

      active = item;
      item.querySelector(".item-label").classList.add("item-active");
    }

    function deactivate() {
      if (active !== item) return;

      // Some a descrição e volta o título GROWTH
      descEl.classList.remove("opacity-100", "translate-y-0");
      descEl.classList.add("opacity-0", "translate-y-2");

      titleEl.classList.remove("opacity-0", "scale-90");
      titleEl.classList.add("opacity-100", "scale-100");

      // Volta gradient padrão
      circle.className =
        "absolute inset-16 md:inset-20 rounded-full flex flex-col items-center justify-center text-center bg-gradient-to-br from-[#6D4AFF] to-[#D30094] shadow-[0_0_25px_10px_rgba(211,0,148,0.4)] transition-all duration-300";

      active.querySelector(".item-label").classList.remove("item-active");
      active = null;
    }

    item.addEventListener("mouseenter", activate);
    item.addEventListener("mouseleave", deactivate);

    // MOBILE: toque funciona como toggle
    item.addEventListener("touchstart", e => {
      e.preventDefault();
      if (active === item) {
        deactivate();
      } else {
        if (active) {
          const prev = active;
          active = null;
          prev.dispatchEvent(new Event("mouseleave"));
        }
        activate();
      }
    });
  });
});
</script>
@endpush

<style>
  .neon-text {
  text-shadow: 0 0 15px rgba(228, 0, 187, .7),
               0 0 30px rgba(109, 74, 255, .5),
               0 0 60px rgba(211, 0, 148, .4);
}

@keyframes pulse-slow {
  0%   { transform: scale(1);   filter: brightness(1);   }
  50%  { transform: scale(1.03); filter: brightness(1.15); }
  100% { transform: scale(1);   filter: brightness(1);   }
}
.animate-pulse-slow {
  animation: pulse-slow 6s ease-in-out infinite;
}

.metodo-item .item-label {
  transition: transform 0.35s ease, box-shadow 0.35s ease, background 0.35s ease;
}
.metodo-item .item-label.item-active,
.metodo-item:hover .item-label {
  transform: scale(1.15);
  box-shadow: 0 0 32px rgba(211,0,148,0.85);
  background: #D30094;
}

#growth-inner.eletrico {
  animation: eletric-border 1s infinite linear;
}
@keyframes eletric-border {
  0%   { box-shadow: 0 0 20px #D30094; }
  50%  { box-shadow: 0 0 40px #6D4AFF; }
  100% { box-shadow: 0 0 20px #D30094; }
}





/* ESCONDER METODOLOGIA NO MOBILE */
@media (max-width: 768px) {
  #metodologia {
    display: none !important;
  }
}






</style>