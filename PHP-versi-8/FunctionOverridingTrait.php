<?php

class ParentClass
{
    public function method(string $name)
    {

    }   
}

class ChildClass extends ParentClass {
    public function method(string $name) // error jika di ganti type int
    {
        
    }
}