<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Dados para a seção Growth
        $sections = [
            [
                'title' => 'Inteligência de Marketing',
                'description' => '   Transforme dados em decisões estratégicas. Nossa solução de Inteligência de Dados coleta, analisa e interpreta informações para gerar insights acionáveis que potencializam suas estratégias de marketing.
                Através de análises avançadas e monitoramento contínuo, ajudamos sua marca a entender o comportamento do público e identificar oportunidades para crescer de forma assertiva.',
                'image' => asset('images/inteligenciaMarketing.png'),
            ],
            [
                'title' => 'Geração de Leads',
                'description' => 'Atraímos e engajamos leads qualificados que realmente querem o que você oferece. 
   Usando estratégias multicanais e personalizadas, capturamos o interesse do seu público-alvo e desenvolvemos campanhas que geram leads com alto potencial de conversão, prontos para interagir e impulsionar seu crescimento.',
                'image' => asset('images/geracaoLeads.png'),
            ],
            [
                'title' => 'Jornada UX',
                'description' => '   Criamos experiências de usuário que fidelizam e convertem. Mapear e otimizar a Jornada UX é essencial para aumentar o valor e a satisfação do cliente. 
   Com uma abordagem centrada no usuário, desenhamos interfaces intuitivas e personalizadas que guiam o cliente com facilidade desde o primeiro clique até a conversão final.',
                'image' => asset('images/jornadaUx.png'),
            ],
            [
                'title' => 'Retenção e Expansão de Vendas',
                'description' => '   Conquistar é apenas o começo. Aumente a lealdade e o valor de seus clientes com estratégias de Retenção e Expansão que maximizam cada oportunidade de venda. 
   Desenvolvemos planos para fortalecer a relação com o cliente, antecipar suas necessidades e expandir o ticket médio com campanhas focadas em retenção e up-selling.',
                'image' => asset('images/retencaoExpansao.png'),
            ],
            [
                'title' => 'Construção da Reputação Digital',
                'description' => '   Posicione sua marca como uma referência no mercado digital. Nossa equipe de especialistas em reputação cria e fortalece sua imagem online, utilizando técnicas de monitoramento de redes sociais, marketing de conteúdo e SEO para construir uma presença sólida e confiável que inspira confiança e gera resultados.',
                'image' => asset('images/contrucaoReputacao.png'),
            ],
        ];

        // Dados para os cases
        $cases = [
            [
                'title' => 'W.care',
                'image' => asset('images/wcare.png'),
                'link' => '#',
            ],
            [
                'title' => 'Rodas Lençois',
                'image' => asset('images/rodaslencois.png'),
                'link' => '#',
            ],
            [
                'title' => 'Embalebem',
                'image' => asset('images/embalebem.png'),
                'link' => '#',
            ],
        ];

        // Dados para os Planos
        $plans = [
            [
                'title' => 'ASSESSORIA GROWTH MARKETING',
                'description' => 'Fornecer suporte contínuo e estratégico para empresas que desejam escalar seus negócios através de uma gestão focada em crescimento.',
                'image' => asset('images/inteligenciaMarketing.png'),
            ],
            [
                'title' => 'GROWTH SOB DEMANDA',
                'description' => 'Oferecer uma abordagem flexível para empresas que precisam de soluções específicas de crescimento, permitindo um contrato "sob demanda" com pagamento vinculado a resultados ou com fee mensal.',
                'image' => asset('images/geracaoLeads.png'),
            ],
            [
                'title' => 'INTELIGÊNCIA DE MARKETING',
                'description' => 'Capacitar empresas a tomarem decisões mais assertivas com base em dados precisos e análises detalhadas, garantindo que cada ação de marketing esteja alinhada a resultados mensuráveis.',
                'image' => asset('images/jornadaUx.png'),
            ],
            [
                'title' => 'GO TO MARKETING: LANÇAMENTO E PROTOTIPAGEM UX',
                'description' => 'Ajudar empresas e startups que querem lançar um novo produto ou serviço no mercado, prototipando toda a jornada UX para garantir que o lançamento seja bem-sucedido e atraia o público-alvo desejado.',
                'image' => asset('images/retencaoExpansao.png'),
            ],
        ];

        return view('index', compact('sections', 'cases', 'plans'));
    }
}
