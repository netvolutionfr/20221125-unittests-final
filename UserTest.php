<?php
require_once ('vendor/autoload.php');
require_once ('User.php');
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUser()
    {
        $user = new User();
        $this->assertInstanceOf(User::class, $user);
    }

    public function testGetFullName()
    {
        $user = new User('Toto', 'Titi');
        $this->assertEquals('Toto Titi', $user->getFullName());

        $user2 = new User('Stanis', 'Humez');
        $this->assertEquals('Stanis Humez', $user2->getFullName());
    }
}