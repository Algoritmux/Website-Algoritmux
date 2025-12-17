<section 
  class="main-home__about relative py-20 bg-[#08010D] text-white overflow-hidden"
  id="sobre"
  aria-labelledby="about-title"
>
  <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    
    {{-- Imagem lateral / destaque --}}
    {{-- Cubo 3D animado --}}
<div class="main-home__about-3d w-full h-[350px] md:h-[420px] flex items-center justify-center relative perspective-1000">

  <div class="cube">
    <div class="face front">Estratégia</div>
    <div class="face back">Dados</div>
    <div class="face right">Resultados</div>
    <div class="face left">Growth</div>
    <div class="face top">Performance</div>
    <div class="face bottom">Automação</div>
  </div>

</div>


    {{-- Conteúdo textual --}}
    <div class="main-home__about-text space-y-6">
      <h2 id="about-title" class="text-3xl md:text-4xl font-bold leading-tight">
        A <span class="text-[#D30094]">Algoritmux</span> é <br>
        <strong>estratégia, dados e resultado.</strong>
      </h2>

      <p class="text-gray-200 leading-relaxed text-lg">
        Somos especialistas em Growth Marketing, UX e automação de processos.  
        Combinamos análise de dados e design estratégico para acelerar o crescimento de marcas que querem se destacar no digital.
      </p>

      <p class="text-gray-400 leading-relaxed">
        Atuamos lado a lado com o seu negócio, implementando estratégias personalizadas que conectam performance, criatividade e tecnologia.
        Nossa missão é simples: transformar dados em decisões e resultados reais.
      </p>

      <div class="mt-8 flex flex-wrap gap-4">
        <a 
          href="#planos"
          class="bg-[#D30094] hover:bg-[#a90073] px-6 py-3 rounded-full font-semibold shadow-lg transition-colors"
        >
          NOSSOS PLANOS
        </a>

        <a 
          href="https://api.whatsapp.com/send/?phone=5512992482237&text&type=phone_number&app_absent=0" target="_blank"
          class="border border-[#D30094] text-[#D30094] hover:bg-[#D30094]/10 px-6 py-3 rounded-full font-semibold transition-colors"
        >
          FALAR COM ESPECIALISTA
        </a>
      </div>
    </div>
  </div>
</section>

<style>

/* Perspectiva geral */
.perspective-1000 {
  perspective: 1000px;
}

/* Cubo */
.cube {
  position: relative;
  width: 220px;
  height: 220px;
  transform-style: preserve-3d;
  animation: spinCube 9s infinite linear;
}

/* Faces */
.cube .face {
  position: absolute;
  width: 220px;
  height: 220px;
  background: linear-gradient(to bottom right, #6D4AFF, #D30094);
  opacity: 0.92;
  border-radius: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 1.25rem;
  backdrop-filter: blur(6px);
  box-shadow: 0 0 25px rgba(211, 0, 148, 0.5);
  border: 1px solid rgba(255, 255, 255, 0.15);
}

/* Posições das faces */
.front  { transform: rotateY(   0deg) translateZ(110px); }
.back   { transform: rotateY( 180deg) translateZ(110px); }
.right  { transform: rotateY(  90deg) translateZ(110px); }
.left   { transform: rotateY( -90deg) translateZ(110px); }
.top    { transform: rotateX(  90deg) translateZ(110px); }
.bottom { transform: rotateX( -90deg) translateZ(110px); }

/* Animação */
@keyframes spinCube {
  0%   { transform: rotateX(0deg) rotateY(0deg); }
  25%  { transform: rotateX(90deg) rotateY(90deg); }
  50%  { transform: rotateX(180deg) rotateY(180deg); }
  75%  { transform: rotateX(270deg) rotateY(270deg); }
  100% { transform: rotateX(360deg) rotateY(360deg); }
}

/* Ajustes responsivos */
@media (max-width: 768px) {
  /* Ajustes responsivos MELHORADOS */
@media (max-width: 768px) {

  /* Dá mais espaço acima e abaixo pro cubo respirar */
  .main-home__about-3d {
    height: 320px;
    margin-bottom: 20px;
    margin-top: 10px;
    perspective: 900px;
  }

  /* Cubo menor mas mais profundo */
  .cube {
    width: 180px;
    height: 180px;
  }

  .cube .face {
    width: 180px;
    height: 180px;
    font-size: 0.95rem;
    border-radius: 14px;
  }

  /* A mágica: ajusta a profundidade para não quebrar */
  .front  { transform: rotateY(0deg) translateZ(90px); }
  .back   { transform: rotateY(180deg) translateZ(90px); }
  .right  { transform: rotateY(90deg) translateZ(90px); }
  .left   { transform: rotateY(-90deg) translateZ(90px); }
  .top    { transform: rotateX(90deg) translateZ(90px); }
  .bottom { transform: rotateX(-90deg) translateZ(90px); }

  /* Animação mais suave no mobile */
  @keyframes spinCube {
    0%   { transform: rotateX(0deg) rotateY(0deg); }
    50%  { transform: rotateX(180deg) rotateY(180deg); }
    100% { transform: rotateX(360deg) rotateY(360deg); }
  }
}

}

</style>