<?php

namespace Drupal\social_auth_amazon\Settings;

/**
 * Defines an interface for Social Auth Amazon settings.
 */
interface AmazonAuthSettingsInterface {

  /**
   * Gets the client ID.
   *
   * @return string
   *   The client ID.
   */
  public function getClientId();

  /**
   * Gets the client secret.
   *
   * @return string
   *   The client secret.
   */
  public function getClientSecret();

}
