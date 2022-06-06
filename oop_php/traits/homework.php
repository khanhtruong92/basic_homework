<?php
// Create an Comic Trait with methods to set and get the Character name
// Create class Mavel, DC use Comic Trait.
// Now, let's create an object for Mavel, DC, and set its Character name respectively "Iron man", "Batman" and print it.

trait Comic 
{
    public $name;

    public function setCharacterName($name)
    {
        $this->name = $name;
    }

    public function getCharacterName()
    {
        return $this->name;
    }
}

class Mavel
{
    use Comic;
}

class DC
{
    use Comic;
}

$mavel = new Mavel();
$dc = new DC();

$mavel->setCharacterName('Iron man');
$dc->setCharacterName('Batman');

echo $mavel->getCharacterName();
echo $dc->getCharacterName();
