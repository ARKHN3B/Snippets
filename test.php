<?php

protected $_attribut;

public function getAttribut(){
    return $this->_attribut;
}

public function setAttribut($up_attribut)
{
    $up_attribut = (string) $up_attribut;

    if (is_string($up_attribut)) {
    var_dump();
    die();
    
        $this->_attribut = $up_attribut;
    }
}


try {
    $this->_connexion = new PDO('mysql:host=localhost;dbname=databaseName;charset=utf8', 'root', 'root');
    $this->_connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch (PDOException $e){
        die("ERROR : ". $e->getMessage());
    }

protected $_bdd;

public function getMyMethod(){
    return $this->_bdd;
}

public function setMyMethod($up_bdd)
{
    $up_bdd = (type) $up_bdd;

    if (condition) {
        $this->_bdd = $up_bdd;
    }
}











