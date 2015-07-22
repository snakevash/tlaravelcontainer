<?php

/**
 *
 * Author: snake
 * Date: 15-7-22
 * Time: 上午11:11
 */
class Desktop
{
    /**
     * @var Box
     */
    public $box;

    /**
     * @var Computer
     */
    public $computer;

    public function __construct(Box $box, Computer $computer)
    {
        $this->box = $box;
        $this->computer = $computer;
    }

    /**
     * @return mixed
     */
    public function getBox()
    {
        return $this->box;
    }

    /**
     * @param Box $box
     */
    public function setBox(Box $box)
    {
        $this->box = $box;
    }

    /**
     * @return mixed
     */
    public function getComputer()
    {
        return $this->computer;
    }

    /**
     * @param Computer $computer
     */
    public function setComputer(Computer $computer)
    {
        $this->computer = $computer;
    }


    public function description()
    {
        printf("工作的桌子上面有两个物件:\n");
        $this->box->description();
        $this->computer->description();
    }
}