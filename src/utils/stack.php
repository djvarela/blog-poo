<?php




function pushToStack($stackName, $content)
{
    // Verifica si la sesión tiene el stack, si no, lo inicializa
    if (!isset($_SESSION['stacks'][$stackName])) {
        $_SESSION['stacks'][$stackName] = [];
    }

    // Añade el contenido al stack en la sesión
    $_SESSION['stacks'][$stackName][] = $content;
}

function renderStack($stackName)
{
    // Verifica si el stack existe en la sesión y lo imprime
    if (isset($_SESSION['stacks'][$stackName])) {
        foreach ($_SESSION['stacks'][$stackName] as $content) {
            echo $content . PHP_EOL;
        }
    }
    clearStack($stackName);
}

function clearStack($stackName)
{
    // Limpia el contenido del stack después de renderizarlo si es necesario
    if (isset($_SESSION['stacks'][$stackName])) {
        unset($_SESSION['stacks'][$stackName]);
    }
}
