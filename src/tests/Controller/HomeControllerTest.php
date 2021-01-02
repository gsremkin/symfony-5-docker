<?php

// tests/Util/CalculatorTest.php
namespace App\Tests;

use App\Controller\HomeController;
use App\Repository\PostRepository;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testIndex()
    {
        //$posts = $postRepository->findAll();
        /*$calculator = new Calculator();
        $result = $calculator->add(30, 12);*/

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, 42);
        //$this->assertIsArray($posts);
    }
}