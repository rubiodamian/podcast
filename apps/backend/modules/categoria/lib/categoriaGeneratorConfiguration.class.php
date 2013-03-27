<?php

/**
 * categoria module configuration.
 *
 * @package    entrega3
 * @subpackage categoria
 * @author     Your name here
 * @version    SVN: $Id: configuration.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoriaGeneratorConfiguration extends BaseCategoriaGeneratorConfiguration
{
	public function getPagerMaxPerPage()
	{
		$conf = ConfiguracionTable::getCantidadItemsPorPagina()->execute();
		return $conf[0]['cantidadItemsPorPagina'];
	}
}
