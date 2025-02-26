<?php

namespace App\Controllers;


class Stores extends BaseController
{
    public function index()
    {

        $data = [
            'branches' => $this->getBranches(),
        ];

        echo view('stores', $data);
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
}
