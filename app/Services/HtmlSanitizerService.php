<?php

namespace App\Services;

use HTMLPurifier;
use HTMLPurifier_Config;

class HtmlSanitizerService
{
    private $purifier;

    public function __construct()
    {
        $config = HTMLPurifier_Config::createDefault();

        // Configuración específica para TinyMCE de blogs
        $config->set(
            'HTML.Allowed',
            'p,b,strong,i,em,u,strike,ul,ol,li,br,img[src|alt|width|height|class|style],' .
                'a[href|title|target|rel],h1,h2,h3,h4,h5,h6,blockquote,code,pre[class],' .
                'table[class|style],thead,tbody,tr[class],td[class|style],th[class|style],' .
                'div[class|style],span[class|style],hr,sub,sup,small'
        );

        // CSS permitido para TinyMCE
        $config->set(
            'CSS.AllowedProperties',
            'font,font-size,font-weight,font-style,font-family,text-decoration,' .
                'padding,margin,padding-left,margin-left,color,background-color,' .
                'text-align,width,height,border,border-collapse,float,clear,' .
                'line-height,vertical-align'
        );
        

        // Permitir valores específicos de display (más seguro)
        $config->set('CSS.ForbiddenProperties', '');

        // Configurar enlaces externos
        $config->set('Attr.AllowedRel', 'nofollow,noopener,noreferrer');
        $config->set('HTML.TargetBlank', true);

        // Cache directory - asegúrate de que existe
        $cacheDir = storage_path('app/htmlpurifier');
        if (!is_dir($cacheDir)) {
            mkdir($cacheDir, 0755, true);
        }
        $config->set('Cache.SerializerPath', $cacheDir);

        // Configuración adicional para mejor compatibilidad
        $config->set('HTML.Doctype', 'HTML 4.01 Transitional');
        $config->set('CSS.MaxImgLength', '1200px');
        $config->set('CSS.Trusted', true);

        $this->purifier = new HTMLPurifier($config);
    }

    public function sanitizeBlogContent(string $html): string
    {
        if (empty($html)) {
            return '';
        }

        return $this->purifier->purify($html);
    }
}
