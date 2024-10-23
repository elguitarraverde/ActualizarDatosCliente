<?php declare(strict_types=1);

namespace FacturaScripts\Plugins\ActualizarDatosCliente\Mod;

use FacturaScripts\Core\Base\Contract\SalesModInterface;
use FacturaScripts\Core\Base\Translator;
use FacturaScripts\Core\Lib\AssetManager;
use FacturaScripts\Core\Model\Base\SalesDocument;
use FacturaScripts\Core\Model\User;

class SalesHeaderHTMLMod implements SalesModInterface
{
    public function apply(SalesDocument &$model, array $formData, User $user): void
    {
        // TODO: Implement apply() method.
    }

    public function applyBefore(SalesDocument &$model, array $formData, User $user): void
    {
        // TODO: Implement applyBefore() method.
    }

    public function assets(): void
    {
        AssetManager::add('js', FS_ROUTE . '/Dinamic/Assets/JS/ActualizarDatosClientBtn.js');
    }

    public function newBtnFields(): array
    {
        return [
            'actualizarDatosClientBtn',
        ];
    }

    public function newFields(): array
    {
        return [];
    }

    public function newModalFields(): array
    {
        return [];
    }

    public function renderField(Translator $i18n, SalesDocument $model, string $field): ?string
    {
        if ($field == 'actualizarDatosClientBtn' && $model->codigo && $model->editable) {
            return '<div class="col-sm"><div class="mb-3">'
                . '<button type="button" class="btn btn-outline-secondary btn-spin-action" onclick="actualizarDatosClientBtn()"><i class="fa-solid fa-rotate"></i> Actualizar datos del cliente</button>'
                . '</div></div>';
        }
        return null;
    }
}
