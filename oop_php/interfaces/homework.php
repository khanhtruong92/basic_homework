<?php
interface Comic
{
    public function setCharacterName($name);
    public function getCharacterName();
}

class Mavel implements Comic
{
    public $name;
    
    public function setCharacterName($name)
    {
        $this->name = $name;
    }

    public function getCharacterName()
    {
        echo $this->name;
    }
}

class DC implements Comic
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

$mavel = new Mavel();
$dc = new DC();

$mavel->setCharacterName('Iron man');
$dc->setCharacterName('Batman');

echo $mavel->getCharacterName();
echo "\n";
echo $dc->getCharacterName();
