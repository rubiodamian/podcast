<?php
  $menu = new ioMenuItem('My menu');
  $menu->addChild('Configuracion', '@configuracion')->setCredentials(array('administrador'));
  $menu->addChild('Administrar Podcasts', '@podcast')->requiresAuth(true);
  $menu->addChild('Administrar Episodios', '@episodio')->requiresAuth(true);
  $menu->addChild('Administrar Usuarios', 'guard/users')->setCredentials(array('administrador'));
  $menu->addChild('Administrar Categorias', '@categoria')->setCredentials(array('administrador'));
  $menu->addChild('Administrar Permisos', '@administradorpodcast')->requiresAuth(true);
  $menu->addChild('Cerrar Sesion', '@sf_guard_signout')->requiresAuth(true);
  echo $menu->render();
?>