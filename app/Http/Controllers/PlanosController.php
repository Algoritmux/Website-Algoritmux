<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanosController extends Controller
{
    public function showindexPlanos()
    {
        // Dados das seções
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

        // // Retorna a view com os dados das seções
        // return $sections;
    }
}
