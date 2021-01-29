<?php


class Color
{
    private $red;
    private $green;
    private $blue;


    public function __construct($red, $green, $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }


    public function getRed()
    {
        return $this->red;
    }
    private function setRed($red)
    {
        $this->red=$red;
        if ($red > 255 || $red < 0){
            throw new Exception('Enter a number from 0 to 255');
        } else if (!is_int($red)){
            throw new Exception('Enter and integer number');
        }

    }

    public function getGreen()
    {
        return $this->green;
    }

    private function setGreen($green)
    {
        $this->green=$green;
        if ($green > 255 || $green < 0){
            throw new Exception('Enter a number from 0 to 255');
        } else if (!is_int($green)){
            throw new Exception('Enter and integer number');
        }
    }

    public function getBlue()
    {
        return $this->blue;
    }

    private function setBlue($blue)
    {
        $this->blue=$blue;
        if ($blue > 255 || $blue < 0){
            throw new Exception('Enter a number from 0 to 255');
        } else if (!is_int($blue)){
            throw new Exception('Enter and integer number');
        }
    }
    public static  function randColor($randcolor)
    {
        $randcolor -> setRed(rand(0,255));
        $randcolor -> setGreen(rand(0,255));
        $randcolor -> setBlue(rand(0,255));

    }
    public function equalColor($equalcolor)
    {
        if ( ($this->getRed() == $equalcolor -> getRed() ) && ($this->getGreen() == $equalcolor -> getGreen() ) && ($this->getBlue() == $equalcolor ->getBlue()) ){
            return true;
        } else {
            return false;
        }
    }
    public  function  mixedColor($mixcolor)
    {
        $red = intdiv($this->getRed() + $mixcolor->getRed(),2);
        $green = intdiv($this->getGreen() + $mixcolor->getGreen(),2);
        $blue = intdiv($this->getBlue() + $mixcolor->getBlue(),2);

        $mixedColor = new Color (0,0,0);


        $mixedColor ->setRed($red);
        $mixedColor ->setGreen($green);
        $mixedColor ->setBlue($blue);

        return ($mixedColor);



    }

}
$color1 = new Color(100, 150, 200);

$color2 = new Color(235, 155, 21);

echo 'Equal color 1: ('.$color1->getRed().', '.$color1->getGreen().', '.$color1->getBlue().')';
echo '<br>';

echo 'Equal color 2: ('.$color2->getRed().', '.$color2->getGreen().', '.$color2->getBlue().')';
echo '<br><br>';

echo 'Equal?';
if ($color1->equalColor($color2) == true) {

    echo 'Yes'.'<br><br>';

} else echo ' No'.'<br><br>';

$randcolor = new Color(0, 0, 0);
$randcolor::randColor($randcolor);
echo 'Random Color: ('.$randcolor->getRed().', '.$randcolor->getGreen().', '.$randcolor->getBlue().')';
echo '<br><br>';

$mixColor = $color1->mixedColor($color2);
echo 'Mixed Color: ('.$mixColor->getRed().', '.$mixColor->getGreen().', '.$mixColor->getBlue().')';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dz</title>
    <style>
        body {
            background-color: rgb<?='('.$mixColor->getRed().', '.$mixColor->getGreen().', '.$mixColor->getBlue().')'?>;
        }
    </style>
</head>
<body>

</body>
</html>



