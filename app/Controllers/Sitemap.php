<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PaginaModel; // Ajusta según tu estructura

class Sitemap extends Controller
{
    public function index()
    {
        // Cargar modelo si tienes URLs dinámicas en la base de datos
        $productsModel = new
            \App\Models\ProductModel();;
        $products = $productsModel->where('statusId', 1)->findAll(); // O la consulta necesaria

        // Cabecera XML
        header("Content-Type: application/xml; charset=UTF-8");

        // Iniciar salida XML
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Página principal
        $sitemap .= '<url><loc>' . base_url() . '</loc></url>';
        $sitemap .= '<url><loc>' . base_url('products/') . '</loc></url>';
        $sitemap .= '<url><loc>' . base_url('contact/') . '</loc></url>';

        // Otras páginas dinámicas desde la base de datos
        foreach ($products as $product) {
            $sitemap .= '<url><loc>' . base_url("product/" . $product['id']) . '</loc></url>';
        }

        $sitemap .= '</urlset>';

        return $this->response->setStatusCode(ResponseInterface::HTTP_OK)
            ->setContentType('application/xml')
            ->setBody($sitemap);
    }
}
