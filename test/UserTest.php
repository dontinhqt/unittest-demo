<?php

namespace Test;

use app\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testGetUserReturnsUserWithExpectedValues()
    {
        $details = array();
        $user = new User($details);
        $password = '123456';
        $user->setPassword($password);
        $expectedPasswordResult = 'e10adc3949ba59abbe56e057f20f883e';
        $currentUser = $user->getUser();
        $this->assertEquals($expectedPasswordResult, $currentUser['password']);
    }

    public function testSetPasswordReturnsFalseWhenPasswordLengthIsTooShort()
    {
        $details = array();
        $user = new User($details);
        $password = '123';
        $result = $user->setPassword($password);
        $this->assertFalse($result);
    }
}
