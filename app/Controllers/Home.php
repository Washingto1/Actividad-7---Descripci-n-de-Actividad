<?php

namespace App\Controllers;
// use App\Models

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    
    

    public function prueba ()
    {
        echo 'hola esto es una prueba';
    }

    public function api ()
    {


        echo 'API REST DE VENTAS DE LIBROS';

        $usuario = array(
                "User"=>"jose",
                "Nombre"=>"Jose Gomez",
                "Ciudad"=>"PORTOvIEJO",
                "Direccion"=>"ANDRES DE VERA",
                "Celular"=>"0989667820"

    );


    $autor1 = array(
        "nombre" => "Pablo Neruda",
        "biografia" => "Reconocido poeta chileno, considerado uno de los más importantes del siglo XX. Nació el 12 de julio de 1904 en Parral, Chile",
        "nacionalidad" => "Chilena"
    );

    $autor2 = array(
        "nombre" => "Paulo Coelho",
        "biografia" => "Novelista, dramaturgo y letrista brasileño después de varios años dedicado a la poesía. ",
        "nacionalidad" => "Brasileña"
    );

    $libro1 = array(
        "titulo" => "Veinte poemas de amor y una canción desesperada",
        "descripcion" => "Aborda esencialmente el tema del amor, el recuerdo y el abandono. Los poemas abren develando de entrada el erotismo que se suscita entre dos jóvenes amantes, pero al mismo tiempo lo que queda detrás del olvido",
        "precio" => 19.99,
        "autor" => $autor1
    );

    $libro2 = array(
        "titulo" => "El Alquimista",
        "descripcion" => "l Alquimista relata las aventuras de Santiago, un joven pastor andaluz que un día emprende un viaje por las arenas del desierto en busca de un tesoro.",
        "precio" => 14.99,
        "autor" => $autor2
    );

    $libros = array($libro1, $libro2);

    $resultado = array(
        "usuario" => $usuario,
        "libros" => $libros
    );

        return $this->response->setJSON($resultado);
        }   
    
            
    
        public function login(){
    
    return view('login');
        
        }
    
    
        public function testbd($cedula)
        {
    
            $this->db=\Config\Database::connect();
            <?php

namespace App\Controllers;
// use App\Models

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    
    

    public function prueba ()
    {
        echo 'hola esto es una prueba';
    }

    public function api ()
    {


        echo 'API REST DE VENTAS DE LIBROS';

        $usuario = array(
                "User"=>"Popular",
                "Nombre"=>"JEAN CARLOS CASTILLO",
                "Ciudad"=>"PORTOvIEJO",
                "Direccion"=>"ANDRES DE VERA",
                "Celular"=>"0989667820"

    );


    $autor1 = array(
        "nombre" => "Pablo Neruda",
        "biografia" => "Reconocido poeta chileno, considerado uno de los más importantes del siglo XX. Nació el 12 de julio de 1904 en Parral, Chile",
        "nacionalidad" => "Chilena"
    );

    $autor2 = array(
        "nombre" => "Paulo Coelho",
        "biografia" => "Novelista, dramaturgo y letrista brasileño después de varios años dedicado a la poesía. ",
        "nacionalidad" => "Brasileña"
    );

    $libro1 = array(
        "titulo" => "Veinte poemas de amor y una canción desesperada",
        "descripcion" => "Aborda esencialmente el tema del amor, el recuerdo y el abandono. Los poemas abren develando de entrada el erotismo que se suscita entre dos jóvenes amantes, pero al mismo tiempo lo que queda detrás del olvido",
        "precio" => 19.99,
        "autor" => $autor1
    );

    $libro2 = array(
        "titulo" => "El Alquimista",
        "descripcion" => "l Alquimista relata las aventuras de Santiago, un joven pastor andaluz que un día emprende un viaje por las arenas del desierto en busca de un tesoro.",
        "precio" => 14.99,
        "autor" => $autor2
    );

    $libros = array($libro1, $libro2);

    $resultado = array(
        "usuario" => $usuario,
        "libros" => $libros
    );

        return $this->response->setJSON($resultado);
        }   
    
            
    
        public function login(){
    
    return view('login');
        
        }
    
    
      public function testbd()
{
    $this->db = \Config\Database::connect();

    $query = $this->db->query("SELECT *
        FROM Autor, Obra");

    $result = $query->getResult();

    return $this->response->setJSON($result);
}

    
            // echo "hi";
        
        }
    }
            $result=$query->getResult();
            return $this->response->setJSON($result);
    
    
            // echo "hi";
        
        }
    }