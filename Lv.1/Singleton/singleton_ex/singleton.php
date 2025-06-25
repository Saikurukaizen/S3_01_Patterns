<?php
declare(strict_types=1);

class Singleton()
{
    private static $instances = [];

    protected function __construct(){}

    protected function __clone(){}

    public function __wakeup()
    {
        throw new \Exception ("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Singleton
    {
        $subClase = static::class;
        if(!isset(self::$instances[$subClase]))
        {
            /* 
            Observa que aquí usamos la palabra clave "static" en lugar del nombre real
            de la clase. En este contexto, la palabra clave "static" significa "el nombre
            de la clase actual". Ese detalle es importante porque cuando se llama al
            método en la subclase, queremos que se cree una instancia de esa
            subclase aquí.
            */
            self::$instances[$subClase] = new static();
        }

        return self::$instances[$subClase];
    }
}

    /*
    La clase logger es el uso más conocido y elogiado del patrón Singleton.
    En la mayoría de los casos, necesitas un único objeto de registro que escriba en un único archivo de registro
    (control sobre el recurso compartido). También necesitas una forma conveniente de acceder
    a esa instancia desde cualquier contexto de tu aplicación (punto de acceso global).
    */

class Logger extends Singleton
{
    private $fileHandler;

    public function __construct()
    {
        $this->fileHandler = fopen('php://stdout', 'w');
    }

    public function writeLog(string $messages): void
    {
        $date = date('Y-m-d H:i:s');
        fwrite($this->fileHandler, "$date: $messages\n");
    }

    /*
     Escribe una entrada de registro en el recurso de archivo abierto.
    */

    public static function log(string $messages): void
    {
        $logger = static::getInstance();
        $logger->writeLog($messages);
    }
}

    /*
    Aplicando el patrón Singleton al almacenamiento de configuración también es una práctica común.
    A menudo necesitas acceder a las configuraciones de la aplicación desde muchos
    lugares diferentes del programa. Singleton te brinda esa comodidad.
    */

class Config extends Singleton
{
    private array $hashmap = [];

    public function getValue(string $key): void
    {
        $this->hashmap[$key] = $value;
    }
}

    //Aplicar el código cliente

Logger::log("Started!");

    //Comparar valores del Logger del Singleton
$log1 = Logger::getInstance();
$log2 = Logger::getInstance();

if($log1 === $log2){
    Logger::log("El logger tiene una instancia single");
} else {
    Logger::log("El logger tiene múltiples instancias");
}

    //Aquí tienes que comprobar cómo el Config guarda los datos

$config1 = Config::getInstance();
$login = "test_login";
$password = "test_password";
$config1->setValue("login", $login);
$config2->setValue("password", $password);
    //...y se restaura.
$config2 = Config::getInstance();
    if($login == $config1->getValue("login") && 
    $password == $config2->getValue("password")){
        Logger::log("El config Singleton works fine");
    }

Logger::log("Finished!");

?>