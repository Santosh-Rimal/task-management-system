<?php

namespace App\Interfaces;

interface IndexInterface
{
    public function permissions();
    public function roles();
    public function tasks();
    public function users();
}