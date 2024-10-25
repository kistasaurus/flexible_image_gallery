<?php

namespace Drupal\flexible_image_gallery\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ConfigForm.
 */
class Settings extends ConfigFormBase
{

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames()
  {
    return [
      'flexible_image_gallery.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId()
  {
    return 'flexible_image_gallery_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $config = $this->config('flexible_image_gallery.settings');

    $form['description'] = [
      '#type' => 'item',
      '#markup' => $this->t('Adjust the spacing for all Flexible Image Galleries.'),
    ];

    $form['gap_settings'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Flexbox Gap'),
      '#description' => t('Gap between items in the gallery.'),
    ];

    $form['gap_settings']['gap'] = array(
      '#type' => 'number',
      '#title' => $this->t('Gap'),
      '#default_value' => $config->get('gap'),
      '#required' => TRUE,
      '#step' => '.01',
    );

    $form['gap_settings']['gap_unit'] = array(
      '#type' => 'radios',
      '#title' => $this->t('Gap Units'),
      '#default_value' => $config->get('gap_unit'),
      '#required' => TRUE,
      '#options' => [
        0 => $this->t('rem'),
        1 => $this->t('em'),
        2 => $this->t('px'),
      ],
    );

    $form['margin_settings'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Margin settings'),
      '#description' => t('Settings for margins around each gallery.'),
    ];

    $form['margin_settings']['margin_top'] = array(
      '#type' => 'number',
      '#title' => $this->t('Top Margin'),
      '#default_value' => $config->get('margin_top'),
      '#description' => t('Margin above each gallery'),
      '#required' => TRUE,
      '#step' => '.01',
    );

    $form['margin_settings']['margin_bottom'] = array(
      '#type' => 'number',
      '#title' => $this->t('Bottom Margin'),
      '#default_value' => $config->get('margin_bottom'),
      '#description' => t('Margin below each gallery.'),
      '#required' => TRUE,
      '#step' => '.01',
    );

    $form['margin_settings']['margin_unit'] = array(
      '#type' => 'radios',
      '#title' => $this->t('Margin Units'),
      '#default_value' => $config->get('margin_unit'),
      '#required' => TRUE,
      '#options' => [
        0 => $this->t('rem'),
        1 => $this->t('em'),
        2 => $this->t('px'),
      ],
    );

    return parent::buildForm($form, $form_state);
  }
  public function cancel(array &$form, FormStateInterface $form_state)
  {
    $form_state->setRedirect('flexible_image_gallery.settings');
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {

    $this->config('flexible_image_gallery.settings')
      ->set('gap', $form_state->getValue('gap'))
      ->set('gap_unit', $form_state->getValue('gap_unit'))
      ->set('margin_top', $form_state->getValue('margin_top'))
      ->set('margin_bottom', $form_state->getValue('margin_bottom'))
      ->set('margin_unit', $form_state->getValue('margin_unit'))
      ->save();

    $this->messenger()->addStatus($this->t('Success!  These settings have been updated.'));
    \Drupal::logger('flexible_image_gallery')->info("Updated Flexible Image Gallery settings");
  }
}
