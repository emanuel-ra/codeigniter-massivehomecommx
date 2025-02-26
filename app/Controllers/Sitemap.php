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
        //header("Content-Type: application/xml; charset=UTF-8");

        // Iniciar salida XML
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';

        // Página principal
        $sitemap .= '<url><loc>' . base_url() . '</loc></url>';
        $sitemap .= '<url><loc>' . base_url('products') . '</loc></url>';
        $sitemap .= '<url><loc>' . base_url('contact') . '</loc></url>';
        $sitemap .= '<url><loc>' . base_url('stores') . '</loc></url>';

        $sitemap .= '<url><loc>' . base_url('pdf/iluminacion-led') . '</loc></url>';
        $sitemap .= '<url><loc>' . base_url('pdf/ventiladores-de-techo') . '</loc></url>';
        $sitemap .= '<url><loc>' . base_url('pdf/candiles') . '</loc></url>';


        $lastmod = '<lastmod>' . date('Y-m-d') . '</lastmod>';
        // Otras páginas dinámicas desde la base de datos
        foreach ($products as $product) {
            $name = $product['nameProduct'];
            $words = explode(" ", $name);

            $image = '';
            if ($product['Img'] != '') {
                $image = "https://massivehome.com.mx/images/productos/" . $product['Img'];
            }
            $imageTag = '';
            if ($image != '') {
                $imageTag = "
                <image:image>
                    <image:loc>$image</image:loc>
                    <image:title>$name</image:title>
                </image:image>
                ";
            }


            $sitemap .= '
                <url>
                    <loc>' . base_url("product/" . $product['id']) . '</loc>
                    ' . $lastmod . '
                    <changefreq>daily</changefreq>
                    <priority>1.0</priority>
                    ' . $imageTag . '
                </url>';
            $sitemap .= '<url><loc>' . base_url("products?search=" . $product['product_code2']) . '</loc>' . $lastmod . '<changefreq>daily</changefreq><priority>1.0</priority></url>';


            foreach ($words as $word) {
                $sitemap .= '<url><loc>' . base_url("products?search=" . $word) . '</loc>' . $lastmod . '<changefreq>daily</changefreq><priority>1.0</priority></url>';
            }
        }
        $sitemap .= '</urlset>';

        return $this->response->setStatusCode(ResponseInterface::HTTP_OK)
            ->setContentType('application/xml')
            ->setBody($sitemap);
    }
}
