<?php


/*
* Metaboxes para el Homepage
*/

add_action('cmb2_admin_init', 'edc_campos_homepage');
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function edc_campos_homepage()
{
  $prefix = 'edc_homepage_';

  $id_home = get_option('page_on_front');

  /**
   * Metabox to be displayed on a single page ID
   */
  $edc_campos_homepage = new_cmb2_box(array(
    'id'           => $prefix . 'homepage',
    'title'        => esc_html__('Campos Homepage', 'cmb2'),
    'object_types' => array('page'), // Post type
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => true, // Show field names on the left
    'show_on'      => array(
      'id' => array($id_home),
    ), // Specific post IDs to display this metabox
  ));

  $edc_campos_homepage->add_field(array(
    'name'    => esc_html__('Texto Superior 1', 'cmb2'),
    'desc'    => esc_html__('texto para la parte superior del sitio web', 'cmb2'),
    'id'      => $prefix . 'texto_superior_1',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 5,
    ),
  ));

  $edc_campos_homepage->add_field(array(
    'name' => esc_html__('Imagen Hero 1', 'cmb2'),
    'desc' => esc_html__('Primera imagen para la parte superir', 'cmb2'),
    'id'   => $prefix . 'imagen_superior_1',
    'type' => 'file',
  ));

  $edc_campos_homepage->add_field(array(
    'name'    => esc_html__('Texto Superior 2', 'cmb2'),
    'desc'    => esc_html__('texto para la parte superior del sitio web', 'cmb2'),
    'id'      => $prefix . 'texto_superior_2',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 5,
    ),
  ));

  $edc_campos_homepage->add_field(array(
    'name' => esc_html__('Imagen Hero 2', 'cmb2'),
    'desc' => esc_html__('Segunda imagen para la parte superir', 'cmb2'),
    'id'   => $prefix . 'imagen_superior_2',
    'type' => 'file',
  ));

  // Campos de licenciatura
  $edc_campos_homepage->add_field(array(
    'name'    => esc_html__('Texto Licenciatura', 'cmb2'),
    'desc'    => esc_html__('Añada el texto para la licenciatura', 'cmb2'),
    'id'      => $prefix . 'texto_licenciatura',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 5,
    ),
  ));

  $edc_campos_homepage->add_field(array(
    'name' => esc_html__('Imagen Fondo Licenciatura', 'cmb2'),
    'desc' => esc_html__('Imagen de fondo para la sección licenciatura', 'cmb2'),
    'id'   => $prefix . 'imagen_licenciatura',
    'type' => 'file',
  ));
}


/**
 * Nosotros
 */
add_action('cmb2_admin_init', 'edc_seccion_nosotros');
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function edc_seccion_nosotros()
{
  $prefix = 'edc_group_';

  /**
   * Repeatable Field Groups
   */
  $edc_iconos = new_cmb2_box(array(
    'id'           => $prefix . 'metabox',
    'title'        => esc_html__('Iconos con Descripción', 'cmb2'),
    'object_types' => array('page'),
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => 'true',
    'show_on'      => array(
      'key'        => 'page-template',
      'value'      => 'page-iconos.php'
    )
  ));

  $edc_iconos->add_field(array(
    'name' => esc_html__('Titulo Sección', 'cmb2'),
    'desc' => esc_html__('Añada un titulo para la sección', 'cmb2'),
    'id'   => $prefix . 'titulo_iconos',
    'type' => 'text',
  ));

  // $group_field_id is the field id string, so in this case: $prefix . 'demo'
  $group_field_id = $edc_iconos->add_field(array(
    'id'          => $prefix . 'nosotros',
    'type'        => 'group',
    'description' => esc_html__('Agregue opciones según sea necesario', 'cmb2'),
    'options'     => array(
      'group_title'   => esc_html__('Característica {#}', 'cmb2'), // {#} gets replaced by row number
      'add_button'    => esc_html__('Agregar Otro Grupo', 'cmb2'),
      'remove_button' => esc_html__('Eliminar', 'cmb2'),
      'sortable'      => true,
      // 'closed'     => true, // true to have the groups closed by default
    ),
  ));

  $edc_iconos->add_group_field($group_field_id, array(
    'name'       => esc_html__('Titulo', 'cmb2'),
    'id'         => 'titulo_icono',
    'type'       => 'text',
  ));

  $edc_iconos->add_group_field($group_field_id, array(
    'name'        => esc_html__('Description', 'cmb2'),
    'description' => esc_html__('Agregue una descripción a esta caracteristica', 'cmb2'),
    'id'          => 'desc_icono',
    'type'        => 'textarea_small',
  ));

  $edc_iconos->add_group_field($group_field_id, array(
    'name' => esc_html__('Icono', 'cmb2'),
    'id'   => 'imagen_icono',
    'type' => 'file',
  ));
}
