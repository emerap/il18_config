## Basic usage

Create class and extending from \Emerap\Il18Config.
```
use \Emerap\Il18Config\Il18Config;

class ClassName extends Il18Config {

  /**
     * {@inheritdoc}
     */
    public static function getLibraryId() {
      return 'library_id';
    }
  
    /**
     * {@inheritdoc}
     */
    public static function getServicesJson() {
      return __DIR__ . '/services.yml';
    }
  
    /**
     * Get cache instance.
     *
     * @return Service
     *   Service instance.
     */
    public function cache() {
      return self::getService('service_id');
    }
} 
```
Create class implement \Emerap\Il18Config\Il18ConfigInterface and use trait \Emerap\Il18Config\Il18ConfigTrait.
```
use Emerap\Il18Config\Il18ConfigInterface;
use Emerap\Il18Config\Il18ConfigTrait;

class ClassName implements Il18ConfigInterface {

  use Il18ConfigTrait;
  
  /**
     * {@inheritdoc}
     */
    public static function getLibraryId() {
      return 'library_id';
    }
  
    /**
     * {@inheritdoc}
     */
    public static function getServicesJson() {
      return __DIR__ . '/services.yml';
    }
  
    /**
     * Get cache instance.
     *
     * @return Service
     *   Service instance.
     */
    public function cache() {
      return self::getService('service_id');
    }
} 
```

Copyright &copy; 2016 [ [Pokhodyun Alexander](https://vk.com/karbunkul)]
