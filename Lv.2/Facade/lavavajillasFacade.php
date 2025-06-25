<?php
declare(strict_types=1);

require_once 'jabon.php';
require_once 'aguaSpray.php';
require_once 'secador.php';

class LavavajillasFacade{
    private Jabon $jabon;
    private AguaSpray $aguaSpray;
    private Secado $secado;

    public function __construct()
    {
        $this->jabon = new Jabon();
        $this->aguaSpray = new AguaSpray();
        $this->secado = new Secado();
    }

    public function presionarOn(): void
    {
        echo "Lavavajillas encendido\n" . PHP_EOL;
        $this->jabon->disponerJabon();
        $this->aguaSpray->aclararConAgua();
        $this->secado->secar();
        echo "Lavado completado" . PHP_EOL;
    }
}
?>