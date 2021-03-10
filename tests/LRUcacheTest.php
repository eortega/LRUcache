<?php
declare(strict_types=1);

namespace eortega\LRUcache\Tests;

use PHPUnit\Framework\TestCase;
use eortega\LRUcache\LRUcache;

class LRUCacheTest extends TestCase
{
    /**
     * @covers LRUCache:put
     */
    public function testPut(): void {
        $cache = new LRUCache(3);
        self::assertFalse($cache->put(1, 2));
    }

    public function testCases(): void {
    
        $cache = new LRUCache(3);
        $cache->put(2, 2);
        $cache->put(1, 1);
        self::assertEquals(2, $cache->get(2));
        self::assertEquals(1, $cache->get(1));
        self::assertEquals(2, $cache->get(2));

        $cache->put(3, 3);
        $cache->put(4, 4); // evicts 3
        self::assertEquals(-1, $cache->get(3));
        self::assertEquals(2, $cache->get(2));
        self::assertEquals(1, $cache->get(1));
        self::assertEquals(4, $cache->get(4));
        
        $cache->put(4, 5);
        self::assertEquals(5, $cache->get(4));
    }
}
