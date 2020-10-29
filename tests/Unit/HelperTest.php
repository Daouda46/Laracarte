<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illiminate\Foundation\Testing\DatabaseMigrations;
use Illiminate\Foundation\Testing\DatabaseTransactions;

class HelperTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function page_title_should_return_the_base_title_if_title_is_empty()
    {
        $this->assertEquals('Laracarte - list of artisan', page_title(''));
    }

    public function page_title_should_return_the_correct_title_is_title_is_provided()
    {
        $this->assertEquals('About | Laracarte - list of artisan', page_title('About'));
    }
}
