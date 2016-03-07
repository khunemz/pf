<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PortfolioTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     *
    /** @test **/
    public function should_see_content(){
        $this->visit('/')
            ->see('Logo')
            ->see('Experiences')
            ->see('Portfolio')
            ->see('Skills')
            ->see('Contact Us');
    }
    /** @test **/
    public function sign_up_should_complete(){
        $this->type('m@m.com', 'email')
            ->type('1234', 'password')
            ->press('Sign up')
            ->seePageIs('admin/dashboard');
    }
}
