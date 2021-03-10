<?php
declare(strict_types=1);

namespace eortega\LRUcache;
  
class LRUCache {
    
    public function __construct(int $capacity) {

    }
    
    /**
     * Set or insert the value it the key is not already present.
     * When the cache reached its capacity, it should invalidate 
     * the least recently used item before inserting a new item.
     */
    public function put(int $key, $value):bool {
        return false;
    }
        
    /**
     * Get the value of the key if the key exists in the cache,
     * Otherwaise return -1
     */
    public function get(int $key) {  
    }    
}
