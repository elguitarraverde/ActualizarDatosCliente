<?php declare(strict_types=1);

namespace FacturaScripts\Plugins\ActualizarDatosCliente;

use FacturaScripts\Core\Base\AjaxForms\SalesHeaderHTML;
use FacturaScripts\Core\Template\InitClass;
use FacturaScripts\Plugins\ActualizarDatosCliente\Mod\SalesHeaderHTMLMod;

final class Init extends InitClass
{
    public function init(): void
    {
        SalesHeaderHTML::addMod(new SalesHeaderHTMLMod());
    }

    public function uninstall(): void
    {
        // TODO: Implement uninstall() method.
    }

    public function update(): void
    {
        // TODO: Implement update() method.
    }
}
