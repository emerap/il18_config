<?php

namespace Emerap\Il18Config;

/**
 * Provides a interface Il16Interface.
 */
interface Il18ConfigInterface {

  /**
   * Get library id.
   *
   * @return string
   */
  public static function getLibraryId();

  /**
   * Get service json.
   *
   * @return string
   */
  public static function getServicesJson();

}
