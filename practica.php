<?php 
    echo "Do While";
    echo "<br/>";

    $numero = 0;
    do{
        echo $numero. "<br/>";
        $numero = $numero + 1;
    }while($numero < 18);
    //---------------------------------------
    echo "Ciclo While";
    echo "<br/>";

    // ciclo while....
    $numero = 0;

    while( $numero < 10 ) {
        echo "<br/>";
        echo "El número actual es: " . $numero;
        $numero = $numero + 1;
    }


    echo "<br/>";
    echo "Finalizo....";

    //-------------------------------------------------
    function saludarNombre(){
        echo "Hola Abdul";
    }
    
    function saludar(){
        echo "Hola hola";
    }
    
    function despedir($nombre, $apellido){
        echo "vmoz .. " . $nombre. " ". $apellido;
    }
    
    
    saludar();
    saludarNombre();
    echo "<br>";
    despedir("abdulgane", "Ruiz");
    //---------------------------------------------------
     //switch case...

     $edad = 20;

     switch($edad){
 
     case 20:
        echo "La edad es 20";
        break;
 
        case 10:
        echo "La edad es 10";
        break;
 
        default:
        echo "No es ninguna de las dos opciones";
        break;
     }
     //-------------------------------------------------------------

    // arrays
    $array1[] = "posicion 1";
    $array1[] = "posicion 2";
    $array1[] = "posicion 3";

    var_dump($array1);



    $array2 = array(
        '0' => 'a',
        '1' => 'b',
        '2' => 'c',
    );


    var_dump($array2);


    //array asociativos
    echo "<br/>";
    echo "Array asociativos";

    $arrayAsociativo = array(
        'materia' => "Física",
        'nota' => 3.0,
        'nombre' => "Javier",
        'apellido' => "Ardila",
    );

    var_dump($arrayAsociativo);
    echo $arrayAsociativo["materia"];


    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";



    //array multimensional
    $notas = array(
        '0' => array('materia' => "Física", "nombre" => "Said", "nota" => 3.5),
        '1' => array('materia' => "Física", "nombre" => "Jainer", "nota" => 4.0),
        '2' => array('materia' => "Física", "nombre" => "Karen", "nota" => 3.0),
        '3' => array('materia' => "Física", "nombre" => "Juan", "nota" => 4.5),
    );

    var_dump($notas);

    echo "Nombre de la nota mas alta:" . $notas[3]["nombre"];
    //-----------------------------------------------------------------------------------------
    //ciclo for
    /*
    echo "hola ";
    echo "hola abdul";
    echo "hola abdul";
    echo "hola abdul";
    echo "hola abdul";
    echo "hola abdul";
    echo "hola abdul";
    echo "hola abdul";
    echo "hola abdul";
    echo "hola abdul";
    */

    // hola abdul
    for ($i=0; $i<=10; $i++) {
        echo "Hola abdul <br/>";
    }

echo "---------------------";

    // numeros del 1 al 20
    for ($numero=1; $numero<=20; $numero++) {
        echo $numero . "<br/>";
    }

echo "---------------------";

    // numeros del 1 al 30 de 2 en 2
    for ($numero=1; $numero<=20; $numero=$numero+2) {
        echo $numero . "<br/>";
    }
    
echo "---------------------";

    // numeros del 1 al 30 de 2 en 2
    for ($numero=1; $numero<=20; $numero+=2) {
        echo $numero . "<br/>";
    }
    // array o vector
    //-------------------------------------------------------------------------------------

    // condicion if
    $a = 1;
    $b = 1;

    // and, &&
    // or, ||

    /*
    if($a == $b || 3 == 3 ){
        echo "Son iguales...";
    }else{
        echo "No son iguales";
    }
    */

    if (3==4) {
        echo "es igual el 3";
    }elseif (4 == 5) {
        echo "es igual el 4";
    }else{
        echo "no son iguales";
    }


    // switch
    
    switch (variable) {
        case 'value':
            # code...
            break;

        default:
            # code ...
    }
    //Bucle foreach

    //array
    $array[] = "andres";
    $array[] = "camilo";
    $array[] = "maria";
    $array[] = "sofia";
    $array[] = "juan";

    foreach($array as $value){
        echo $value;
        echo "<br/>";
    }


    foreach($array as $key => $value){
        echo "posicio: " . $key . " el nombre es: " . $value;
        echo "<br/>";
    }



    //recorrer un array multidimensional

    $notas = array(
        '0' => array('materia' => "Ingles", "nombre" => "andres", "nota" => 3.5),
        '1' => array('materia' => "Español", "nombre" => "camilo", "nota" => 2.5),
        '2' => array('materia' => "Matematicas", "nombre" => "maria", "nota" => 3.0),
        '3' => array('materia' => "Ingles", "nombre" => "juan", "nota" => 4.0),
    );

    echo "---------------------------------------------------------------";
    echo "<br/>";

    foreach($notas as $key => $value){
        echo "la materia: " . $value["materia"]. " Persona: " . $value["nombre"]. " la nota es: " . $value["nota"];
        echo "<br/>";
    }
    //------------------------------------------------------------------------------
    // Esto es un comentario...

    // mi primera impresión
    echo "hola osquitar";
    echo "<br/>";


    $nombre = "Oscar ";
    $apellido = "Sánchez ";
    $edad = 17;


    // concatenacion
    $imprimir = $nombre ."Manuel ". $apellido . "Wandurraga " . $edad;
    echo $imprimir;


    // ciclos for ...     
?>
