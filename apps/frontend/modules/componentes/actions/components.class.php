<?php
class componentesComponents extends sfComponents
{
  public function executeTitulo()
  {
    $titulo = ConfiguracionTable::getTitulo()->execute();
    $titulo = $titulo[0]['nombreSitio'];
    $this->titulo = $titulo;
  }
  
  public function executeError()
  {
  	$hab = ConfiguracionTable::getSitioHabilitado()->execute();
    $hab = $titulo[0]['sitioHabilitado'];
    $this->hab = $hab; 
  }
  
  public function executeEstilo()
  {
  	$estilo = ConfiguracionTable::getEstilo()->execute();
  	$estilo = $estilo[0]['plantillaDefecto'];
  	$this->estilo = $estilo; 
  }

}