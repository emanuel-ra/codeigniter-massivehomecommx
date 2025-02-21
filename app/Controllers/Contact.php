<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function __construct() {}
    public function index(): string
    {
        try {
            return view('contact', [
                'branches' => $this->getBranches(),
                'states' => $this->getStates(),
                'businessActivities' => $this->getBusinessActivities(),
                'regimenFiscal' => $this->getRegimenFiscales(),
            ]);
        } catch (\Exception $e) {
            // Log the error message
            log_message('error', $e->getMessage());
            // Display the error message
            echo 'Error: ' . $e->getMessage();
            return '';
        }
    }
    private function getRegimenFiscales(): array
    {
        return [
            601 => "General de Ley Personas Morales",
            603 => "Personas Morales con Fines no Lucrativos",
            605 => "Sueldos y Salarios e Ingresos Asimilados a Salarios",
            606 => "Arrendamiento",
            607 => "Régimen de Enajenación o Adquisición de Bienes",
            608 => "Demás ingresos",
            610 => "Residentes en el Extranjero sin Establecimiento Permanente en México",
            611 => "Ingresos por Dividendos (socios y accionistas)",
            612 => "Personas Físicas con Actividades Empresariales y Profesionales",
            614 => "Ingresos por intereses",
            615 => "Régimen de los ingresos por obtención de premios",
            616 => "Sin obligaciones fiscales",
            620 => "Sociedades Cooperativas de Producción que optan por diferir sus ingresos",
            621 => "Incorporación Fiscal",
            622 => "Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras",
            623 => "Opcional para Grupos de Sociedades",
            624 => "Coordinados",
            625 => "Régimen de las Actividades Empresariales con ingresos a través de Plataformas Tecnológicas",
            626 => "Régimen Simplificado de Confianza"
        ];
    }
    private function getBranches(): array
    {
        return [
            [
                'name' => 'Sucursal Mariano Otero',
                'address' => 'Av. Mariano Otero 411, Colonia la Moderna, Entre calle Chapultepec y Marsella, Guadalajara, Jalisco, México.',
                'phone' => '+521 33 1777-0453',
                'email' => '',
                'city' => 'Guadalajara',
                "ISO3166-2-lvl4" => 'MX-JAL',
            ],
            [
                'name' => 'Sucursal Guadalajara Centro',
                'address' => 'Av. Ramón Corona No. 148 Esq. López Cotilla. Entre López Cotilla y Av. Juárez. (A una cuadra de la plaza de la tecnología.), Código Postal 44100 Guadalajara, Jalisco, México',
                'phone' => '+521 33 2957-6654',
                'email' => 'ventas@massivehome.com.mx',
                'city' => 'Guadalajara',
                "ISO3166-2-lvl4" => 'MX-JAL',

            ],
            [
                'name' => 'Sucursal San Juan de Dios',
                'address' => 'Dionisio Rodriguez No. 226, Colonia San Juan de Dios, Guadalajara, Jalisco, México',
                'phone' => '+521 33 1429 9663',
                'email' => '',
                'city' => 'Guadalajara',
                "ISO3166-2-lvl4" => 'MX-JAL',
            ],
            [
                'name' => 'Sucursal Cabañas',
                'address' => 'Dionisio Rodriguez No. 147 J. Colonia San Juan de Dios. Guadalajara, Jalisco, México. (A un costado del Hospicio Cabañas).',
                'phone' => '+521 33 1572 8560',
                'email' => '',
                'city' => 'Guadalajara',
                "ISO3166-2-lvl4" => 'MX-JAL',
            ],
            [
                'name' => 'Niños Heroes',
                'address' => 'Av Niños Héroes 1798. Colonia Americana, Guadalajara, Jalisco, México.',
                'phone' => '+521 33 1749 4203',
                'email' => '',
                'city' => 'Guadalajara',
                "ISO3166-2-lvl4" => 'MX-JAL',
            ],
            [
                'name' => 'Monterrey centro',
                'address' => 'Av. Benito Juarez Sur #237, Monterrey centro, Monterrey, Nuevo León, México',
                'phone' => '+521 81 1620 4928',
                'email' => '',
                'city' => 'Monterrey',
                "ISO3166-2-lvl4" => 'MX-NLE',
            ],
            [
                'name' => 'Sucursal Arcos de Belén',
                'address' => 'Av Arcos de Belén 22, Doctores, Cuauhtémoc, 06720 Ciudad de México, CDMX',
                'phone' => '',
                'email' => '',
                'city' => 'Mexico City',
                "ISO3166-2-lvl4" => 'MX-CMX',
            ],
            [
                'name' => 'Sucursal Argentina',
                'address' => 'República de Argentina 96, Lagunilla, Centro-Área 3 Cuauhtémoc, 06020 Ciudad de México, CDMX',
                'phone' => '',
                'email' => '',
                'city' => 'Mexico City',
                "ISO3166-2-lvl4" => 'MX-CMX',
            ],
            [
                'name' => 'Sucursal Corregidores #1',
                'address' => 'Jesús María 52, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06060 Ciudad de México, CDMX',
                'phone' => '',
                'email' => '',
                'city' => 'Mexico City',
                "ISO3166-2-lvl4" => 'MX-CMX',
            ],
            [
                'name' => 'Sucursal Corregidores #2',
                'address' => 'Corregidora # 72-Local B - 91 And 92, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06060 Ciudad de México, CDMX',
                'phone' => '',
                'email' => '',
                'city' => 'Mexico City',
                "ISO3166-2-lvl4" => 'MX-CMX',
            ],
            [
                'name' => 'Sucursal Mesones',
                'address' => 'Calle de Mesones 34, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06080 Centro, CDMX',
                'phone' => '',
                'email' => '',
                'city' => 'Mexico City',
                "ISO3166-2-lvl4" => 'MX-CMX',
            ],
            [
                'name' => 'Sucursal Florida',
                'address' => 'Florida 9 Sótano, Centro, Cuauhtémoc, 06020 Ciudad de México, CDMX',
                'phone' => '',
                'email' => '',
                'city' => 'Mexico City',
                "ISO3166-2-lvl4" => 'MX-CMX',
            ],
            [
                'name' => 'Sucursal Izazaga',
                'address' => 'José María Izazaga 34, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06080 Centro, CDMX',
                'phone' => '',
                'email' => '',
                'city' => 'Mexico City',
                "ISO3166-2-lvl4" => 'MX-CMX',
            ],
            [
                'name' => 'Sucursal Uruguay',
                'address' => 'República de Uruguay 20, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06000, CDMX',
                'phone' => '',
                'email' => '',
                'city' => 'Mexico City',
                "ISO3166-2-lvl4" => 'MX-CMX',
            ]
            // [
            //     'name' => 'Sucursal 1',
            //     'address' => 'Calle 1 #123, Colonia 1, Ciudad 1, Estado 1, C.P. 12345',
            //     'phone' => '123 456 7890',
            //     'email' => ''
            // ]
        ];
    }
    private function getStates(): array
    {
        return [
            'Aguascalientes',
            'Baja California',
            'Baja California Sur',
            'Campeche',
            'Chiapas',
            'Chihuahua',
            'Coahuila',
            'Colima',
            'Ciudad de México',
            'Durango',
            'Guanajuato',
            'Guerrero',
            'Hidalgo',
            'Jalisco',
            'Estado de México',
            'Michoacán',
            'Morelos',
            'Nayarit',
            'Nuevo León',
            'Oaxaca',
            'Puebla',
            'Querétaro',
            'Quintana Roo',
            'San Luis Potosí',
            'Sinaloa',
            'Sonora',
            'Tabasco',
            'Tamaulipas',
            'Tlaxcala',
            'Veracruz',
            'Yucatán',
            'Zacatecas',
        ];
    }
    private function getBusinessActivities(): array
    {
        return [
            "Venta al por menor",
            "Venta al por mayor",
            "Tiendas de conveniencia",
            "Supermercados",
            "Boutiques",
            "Consultoría",
            "Desarrollo de software",
            "Marketing digital",
            "Turismo y hotelería",
            "Salud y bienestar",
            "Industria textil",
            "Alimentos y bebidas",
            "Automotriz",
            "Electrónica",
            "Construcción",
            "Escuelas y universidades",
            "Capacitación empresarial",
            "Cursos en línea",
            "Idiomas",
            "Hospitales y clínicas",
            "Farmacias",
            "Dentistas",
            "Laboratorios médicos",
            "Mensajería",
            "Taxis y transporte privado",
            "Transporte de carga",
            "Mudanzas",
            "Cines",
            "Gimnasios",
            "Restaurantes y bares",
            "Producción audiovisual"
        ];
    }
}
