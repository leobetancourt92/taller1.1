<?php

/**
 * Clase con la cual se maneja la conexión a la base de datos
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class dataBaseClass {

   //se definen los atributos como  estaticos privados,no hay necesidad de volverlos a definir con la palabra
    //reservada "static private" a cada uno si no que se utiliza una sola vez y se separan con comas ,al terminar definir
    //finalizamos la definicion de atributos con un ";"
  static private $port = 3306,
          $host = 'localhost',
          $dbname = 'bd_desercion',
          $user = 'root',
          $password = 'root',
          $driver = 'mysql', 
          $instance = NULL;
  
  
  //tener en cuentas que son  7 variables o atributos de conexion(puerto,host,driver,dbname,password,usuario y la instancia
  //de conexion que en este caso es nula y no ha sido creada por el metodo)
  
  
  
  
  //se defiene una funcion estatica obtenerInstancia ,donde voy a crear la misma,al ser un atributo privado estatico
  //lo invoco por medio de la palabra reservada self::$instancia,la funcion es statica publica para acceder a la 
  //instancia desde otras clases que la soliciten
  
  static public function getInstance() {
    if (!self::$instance) { //si la instancia no esta definida aun,entonces retorme el procedimiento de conexion
      self::connect();
    }
    return self::$instance;
  }


//metodo statico privado que me proporcionara la conexion a la base de datos por medio de PDO ,en el cual debo de tener en cuenta las 7 variables definidas anteriormente 
  static private function connect() {
    try {
      $dsn = self::$driver                //en el try,primero que todo defino el $dsn que me pide como parametros el PDO ,
              . ':host='. self::$host      //que esta compuesto de driver ,host,port,dbname
              //. ';port=' . self::$port   //si es una conexion con mysqldb no hay necesidad de definir el 
              . ';dbname=' . self::$dbname;
      self::$instance = new PDO($dsn, self::$user, self::$password); //señalamos la instancia y creamos el objeto pdo ,que
      return true;                                                   //contendra la $dsn ,$usuario y el password
    } catch (PDOException $e) {             //si creo el objeto devuelvame el valor verdadero  "TRUE"
      echo $e->getMessage();        //en el catch invocamos el metodo PDOExcption con la variable de excepcion,y me imprima la 
    }                             //excepcion por medio del metodo predefinido getMessage()
  }

}