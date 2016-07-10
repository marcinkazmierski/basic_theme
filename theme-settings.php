<?php
function basic_theme_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface &$form_state, $form_id = NULL) {

    if (isset($form_id)) {
        return;
    }

    $form['foo_example'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Widget'),
        '#default_value' => theme_get_setting('foo_example'),
        '#description'   => t("Place this text in the widget spot on your site."),
    );
}
