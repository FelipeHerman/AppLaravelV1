<?php 

#$routeName = nombre de la ruta.

function setActive($routeName)
{
	return request()->routeIs($routeName) ? 'active' : '';
}

?>