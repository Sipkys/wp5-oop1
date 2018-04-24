<?php
/**
 * Třída reprezentuje instance konkrétních bytů
 */
class Flat
{
    private $size;
    private $room;
    public function __construct($size, $room)
    {
        $this->size = $size;
        $this->room = $room;
    }
    public function rebuild($newSize, $newRoom)
    {
        $this->size = $newSize;
        $this->room = $newRoom;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function getRoom()
    {
        return $this->room;
    }
}
