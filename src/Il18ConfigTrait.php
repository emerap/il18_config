<?php

namespace Emerap\Il18Config;

use Symfony\Component\Yaml\Yaml;

/**
 * Provides a trait Il18ConfigTrait.
 */
trait Il18ConfigTrait {

  protected static $services;

  /**
   * Get service instance.
   *
   * @param string $id
   *   Service id.
   * @param array $parameters
   *   Service parameters.
   *
   * @return object
   * @throws \Emerap\Il18Config\Il18ConfigException
   */
  protected static function getService($id, $parameters = []) {
    $services = self::getServices();
    if (isset($services[$id])){
      return self::newServiceInstance($services[$id], $parameters);
    }
    else {
      throw new Il18ConfigException("Wrong service id " . $id);
    }
  }

  /**
   * Get new service instance.
   *
   * @param string $class
   *   Class name.
   * @param array $parameters
   *   Constructor parameters.
   *
   * @return object
   */
  private static function newServiceInstance($class, $parameters = []) {
    $obj = new \ReflectionClass($class);
    return $obj->newInstanceArgs($parameters);
  }

  /**
   * Get all available services.
   *
   * @return array
   * @throws \Emerap\Il18Config\Il18ConfigException
   */
  private static function getServices() {
    if (is_null(self::$services)) {
      $filename = static::getServicesJson();
      self::setupIl18($filename);
    }
    return self::$services;
  }

  public static function setupIl18($filename) {
    if (file_exists($filename)) {
      self::$services = Yaml::parse(file_get_contents($filename));
    }
    else {
      throw new Il18ConfigException("Wrong filename " . $filename);
    }
  }

}
