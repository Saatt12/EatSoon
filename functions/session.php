<?php

/**
 * Inicializa o reinicializa la sesión
 * @retur bool
 * true -> si la sesión se inicializa
 * false -> si no
 */
 function iniSesion()
{
    session_start();
}

/**
 * Destruir la sesión
 */
 function destruirSesion()
{
    session_destroy();
    unset($_SESSION);
}

/**
 * Almacena datos en la sesión
 * $instancia->attr = 'value';
 */
 function session__set($name, $value)
{
    $_SESSION[$name] = $value;
}

/**
 * Permite obtener datos de la sesión
 * echo $instancia->attr;
 */
 function session__get($name)
{
    if (isset($_SESSION[$name])) {
        return $_SESSION[$name];
    }
}

/**
 * Validar una variable de sesión
 */
 function session__isset($name)
{
    return isset($_SESSION[$name]);
}


/**
 * Eliminamos una variable de sesión
 */
 function session__unset($name)
{
    //unset — Destruye una variable especificada
    unset($_SESSION[$name]);
}