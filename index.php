<?php
declare(strict_types=1);

class Color
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->setRed($red);

        $this->setGreen($green);

        $this->setBlue($blue);
    }
    /**
     * @param int $red
     */
    private function setRed(int $red): void
    {
        if ($red < 0  || $red > 255){
            exit('Ошибка! Значение "red" должно находиться в интервале от 0 до 255!');
        }
        $this->red = $red;
    }

    /**
     * @return int
     */
    public function getRed(): int
    {
        return $this->red;
    }

    /**
     * @param int $green
     */
    private function setGreen(int $green): void
    {
        if ($green < 0  || $green > 255){
            exit('Ошибка! Значение "green" должно находиться в интервале от 0 до 255!');
        }
        $this->green = $green;
    }

    /**
     * @return int
     */
    public function getGreen(): int
    {
        return $this->green;
    }

    private function setBlue(int $blue): void
    {
        if ($blue < 0  || $blue > 255){
            exit('Ошибка! Значение "blue" должно находиться в интервале от 0 до 255!');
        }
        $this->blue = $blue;
    }

    /**
     * @return int
     */
    public function getBlue(): int
    {
        return $this->blue;
    }

        public function mix(Color $color): Color
    {
        return new Color(
            intdiv($this->getRed() + $color->getRed(), 2),
            intdiv($this->getGreen() + $color->getGreen(), 2),
            intdiv($this->getBlue() + $color->getBlue(),2));
    }

    public function equals(Color $color): bool
    {
        if ($this->getRed() !== $color->getRed() ||
            $this->getGreen() !== $color->getGreen() ||
            $this->getBlue() !== $color->getBlue()){
            return false;
        }
        else{
            return true;
        }
    }
}


$color = new Color(200, 200, 200);

$mixedColor = $color->mix(new Color(100, 100, 100));

$mixedColor->getRed(); // 150
$mixedColor->getGreen(); // 150
$mixedColor->getBlue(); // 150

//var_dump($mixedColor);

if (!$color->equals($mixedColor)) {
    echo 'Цвета НЕ равны';
}
elseif ($color->equals($mixedColor)) {
    echo 'Цвета равны';
}