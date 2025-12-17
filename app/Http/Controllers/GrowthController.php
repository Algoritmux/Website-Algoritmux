<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrowthController extends Controller
{
    public function showindex()
    {
        // Dados das seções
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

        // Retorna a view com os dados das seções
        return $sections;
    }
}
