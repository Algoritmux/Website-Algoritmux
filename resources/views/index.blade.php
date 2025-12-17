<!-- index.blade.php (Home) - Versão Otimizada -->
@extends('layouts.templateDefault')

@section('title-page', 'AlgoritmUX | Growth Marketing e Desenvolvimento')
@section('meta_description', 'Consultoria em Growth, UX e Marketing sob demanda para impulsionar resultados com estratégia e inovação.')

@section('content')
<main class="main-home">
  {{-- HERO SECTION --}}
  @include('components.home.hero')

  {{-- SOBRE --}}
  @include('components.home.about')

  {{-- SERVIÇOS --}}
  @include('components.home.services')

  {{-- CASES --}}
  @include('components.home.cases')

  {{-- DIFERENÇA --}}
  @include('components.home.diferenca')

   {{-- METODOLOGIA --}}
  @include('components.home.metodologia')

  {{-- NEGÓCIOS (TABS) --}}
  @include('components.home.tabs.negocios')

  {{-- PLANOS (TABS) --}}
  @include('components.home.tabs.planos')

  {{-- CLIENTES --}}
  @include('components.home.clientes')

  {{-- FAQ --}}
  @include('components.home.faq')

  {{-- CONTATO --}}
  @include('components.home.contato')

  
</main>
@endsection

@push('scripts')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Como funciona a assessoria Growth Marketing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Fornecemos suporte contínuo e estratégico para escalar negócios, com foco em crescimento e resultados mensuráveis."
      }
    },
    {
      "@type": "Question",
      "name": "O que é o Growth sob demanda?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Abordagem flexível que permite contratar soluções específicas de crescimento sob demanda, adaptadas à realidade de cada empresa."
      }
    }
  ]
}
</script>
@endpush
