<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function defaultUser()
    {
        if($this->defaultUser){
            return $this->defaultUser;
        }
        return $this->defaultUser = $user = factory(\App\User::class)->create();
    }
}
