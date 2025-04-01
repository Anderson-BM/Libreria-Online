<?php
// Define la URL base del sitio
// Cambia esto a la URL de tu sitio en producción
if (!isset($base_url)) {
    // Detecta automáticamente la URL base
    $base_path = $_SERVER['DOCUMENT_ROOT'] . '/';
    $current_path = realpath(dirname(__FILE__) . '/../');
    $relative_path = str_replace('\\', '/', str_replace($base_path, '', $current_path));
    $base_url = '/';
    if ($relative_path != '') {
        $base_url .= $relative_path . '/';
    }
}

/**
 * Sanitiza la entrada del usuario para prevenir inyección SQL y XSS
 * @param string $data Datos a sanear
 * @return string Datos saneados
 */
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Formatea una fecha de la base de datos al formato español
 * @param string $date Fecha en formato Y-m-d
 * @return string Fecha formateada (ej: 31/03/2025)
 */
function format_date($date) {
    $date_obj = new DateTime($date);
    return $date_obj->format('d/m/Y');
}

/**
 * Trunca un texto a una longitud específica
 * @param string $text Texto a truncar
 * @param int $length Longitud máxima
 * @return string Texto truncado
 */
function truncate_text($text, $length = 100) {
    if (strlen($text) > $length) {
        return substr($text, 0, $length) . '...';
    }
    return $text;
}

/**
 * Determina la página actual para marcar el ítem activo en el menú
 * @return string Nombre de la página actual
 */
function get_current_page() {
    $current_file = basename($_SERVER['PHP_SELF'], '.php');
    return $current_file;
}

// Define la página actual para el menú
$current_page = get_current_page();

/**
 * Muestra un mensaje de alerta bonito usando Bootstrap
 * @param string $message Mensaje a mostrar
 * @param string $type Tipo de alerta (success, danger, warning, info)
 * @return string HTML de la alerta
 */
function show_alert($message, $type = 'info') {
    return '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
                ' . $message . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
}