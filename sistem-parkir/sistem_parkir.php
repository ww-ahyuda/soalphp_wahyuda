<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    
<?php

class vehicle
{
    private $numberPolice;
    private $type;

    public function __construct($numberPolice, $type)
    {
        $this->numberPolice = $numberPolice;
        $this->type = $type;
    }

    public function getNumberPolice()
    {
        return $this->numberPolice;
    }

    public function getType()
    {
        return $this->type;
    }
}

class parking
{
    private $maxParking;
    private $showVehicleParking;

    public function __construct($maxParking)
    {
        $this->maxParking = $maxParking;
        $this->showVehicleParking = array();
    }

    public function inParking(vehicle $vehicle)
    {
        if (count($this->showVehicleParking) < $this->maxParking) {
            $this->showVehicleParking[] = $vehicle;
            echo "Nomor polisi " . $vehicle->getNumberPolice() . " tipe kendaraan: " . $vehicle->getType();
        } else {
            echo "Area parkir sudah penuh, tunggu hingga kendaraan keluar";
        }
    }

    public function areaParking()
    {
        foreach ($this->maxParking as $key => $parking) {
            if ($parking->getNumberPolice === $parking) {
                unset($this->showVehicleParking[$key]);
                echo "Kendaraan berada pada area parkir";
                return;
            }
        }
    }

    public function statusParking()
    {
        echo "Berikut status parkir:" . "<br>";
        echo "Total jumlah parkir kendaraan: " . count($this->maxParking) . "<br>";
        foreach ($this->showVehicleParking as $key => $showVehicle) {
            echo "Nomor polisi " . $showVehicle->getNumberPolice() . " tipe kendaraan: " . $showVehicle->getType();
            return;
        }
    }
}

$parking = new parking(2);

$vehicle = new vehicle("B 0001 ABC", "Mobil");
$parking->inParking($vehicle);
$vehicle2 = new vehicle("B 0002 ABC", "Motor");
$parking->inParking($vehicle2);
$vehicle3 = new vehicle("B 0003 ABC", "Mobil");
$parking->inParking($vehicle3);
?>

<form action="" method="POST">
    Nomor polisi: <input type="text" name="numberPolice" />
    tipe mobil: <input type="text" name="type" />
      <input type="submit" value="parkir kendaraan">
    </form>
</body>

</html>