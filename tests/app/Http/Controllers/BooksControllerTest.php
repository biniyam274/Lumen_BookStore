<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class BooksControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function index_status_code_should_be_200()
1 {
     $this->visit('/books')->seeStatusCode(200);
     }
}
