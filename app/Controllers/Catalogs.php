<?php

namespace App\Controllers;

class Catalogs extends BaseController
{

    public function iluminacionLed()
    {
        $filename = "CATALOGO-ILUMINACION-2024.pdf";
        /// Ruta al directorio donde están los PDFs
        $ruta = WRITEPATH . 'pdf' . DIRECTORY_SEPARATOR . $filename;

        // Verificar si el archivo existe
        if (file_exists($ruta)) {
            return $this->response->download($ruta, null);
        } else {
            return $this->response->setStatusCode(404, 'Archivo no encontrado');
        }
    }
    public function ventiladoresDeTecho()
    {
        $filename = "CATALOGO-VENTILADORES-2024.pdf";
        /// Ruta al directorio donde están los PDFs
        $ruta = WRITEPATH . 'pdf' . DIRECTORY_SEPARATOR . $filename;

        // Verificar si el archivo existe
        if (file_exists($ruta)) {
            return $this->response->download($ruta, null);
        } else {
            return $this->response->setStatusCode(404, 'Archivo no encontrado');
        }
    }
    public function candiles()
    {
        $filename = "CATALOGO-CANDILES-2024.pdf";
        /// Ruta al directorio donde están los PDFs
        $ruta = WRITEPATH . 'pdf' . DIRECTORY_SEPARATOR . $filename;

        // Verificar si el archivo existe
        if (file_exists($ruta)) {
            return $this->response->download($ruta, null);
        } else {
            return $this->response->setStatusCode(404, 'Archivo no encontrado');
        }
    }
}
