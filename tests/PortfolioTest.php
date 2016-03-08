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
    public function sign_in_should_ok_and_go_to_index()
    {
        $this->visit('http://localhost:8000/getauth')
            ->type('this@is.com', 'email')
            ->type('123456', 'password')
            ->press('Sign in')
            ->seePageIs('http://localhost:8000');
    }

    /** @test **/
    public function should_see_blogpost(){
        $this->visit(route('blog.index'))
            ->see('Title')
            ->see('Body')
            ->see('Tag')
            ->see('Submit')
            ->press('Submit')
            ->seePageIs(route('admin.dashboard'));
    }
}
