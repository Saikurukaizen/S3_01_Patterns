<?php
declare(strict_types=1);

class Singleton{

    /* 
     Las instancias del Singleton se guarda en un campo estático. Este campo es un
     array, porque permitiremos que nuestro Singleton tenga subclases. Cada elemento en
     este array será una instancia de una subclase específica de Singleton.
     */
    private static $instancies = [];

    /*
     El constructor del Singleton debería ser privado para evitar que
     se creen instancias de la clase desde fuera de la misma. De esta forma,
     se previenen las llamadas de construcción con el operador `new`.
     */
    private function __construct(){}

    /*
    Los singletons no deberían ser clonados, por lo que se define un método mágico
    __clone() como privado 
    */
    private function __clone(){}
    /*
     Los Singletons no deberían ser restaurados a partir de cadenas.
    */
    public function __wakeup(){
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /*
     Este es el método estático que controla el acceso a la instancia singleton.
     En la primera ejecución, crea un objeto singleton y lo coloca en el campo estático.
     En ejecuciones posteriores, devuelve el objeto existente almacenado en el campo estático.

     Esta implementación permite subclases de la clase Singleton mientras se mantiene
     solo una instancia de cada subclase.
     */

    public static function getInstance(): Singleton{
        $nombreClase = static::class;
        if(!isset(self::$instancies[$nombreClase])){
            self::$instancies[$nombreClase] = new static();
        }

        return self::$instancies[$nombreClase];
    }

    /* 
    Finalmente, cualquier singleton debería definir alguna lógica de negocio, del cual
    pueda ser ejecutado en su instancia.
    */

    public function aplicarLogica(){}
}

//Código cliente

function aplicarCodigoCliente(){
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();

    if($s1 === $s2){
        echo "El Singleton funciona, pero ambas variables contienen la misma instancia." . PHP_EOL;
    }
    else{
        echo "El Singleton no funciona, las variables contienen instancias diferentes." . PHP_EOL;
    }
}

aplicarCodigoCliente();
?>