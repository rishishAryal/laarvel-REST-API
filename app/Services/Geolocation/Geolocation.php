<?php
namespace App\Services\Geolocation;
use app\Services\Map\Map;
use app\Services\Satellite\Satellite;



class Geolocation {

    private $map;

    private $satellite;

    public function __construct(Map $map, Satellite $satellite){

        $this->map=$map;
        $this->satellite=$satellite;
    }

    public function search(string $name){
         $locationInfo = $this->map->findAddress($name);
         return $this->satellite->pinpoint($locationInfo);

    }

}
