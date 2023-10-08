<?php

class User {
    public function __construct(public readonly string $name, public readonly string $email, public readonly string $phoneNumber ){

    }

    public function create(): void{

    }

    public function retrieveAll(): array
    {

    }

    //implementing user class
    public function retrieve(): User
    {

    }

    public function update(): User
    {
        
    }

    public function remove(): bool
    {

    }


}