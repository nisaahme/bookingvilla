<?php
class Villa {
    private $id;
    private $name;
    private $location;
    private $price;
    private $image;
    
    public function __construct($id, $name, $location, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->price = $price;
        $this->image = $image;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getLocation() {
        return $this->location;
    }
    
    public function getPrice() {
        return $this->price;
    }
    
    public function getImage() {
        return $this->image;
    }
    
    public static function getAll() {
        $villas = [
            new Villa(1, 'Seaside Paradise', 'Sarandë, Albania', 125, 'foto1.jpg'),
            new Villa(2, 'Mountain Retreat', 'Theth, Albania', 94, 'foto2.jpg'),
            new Villa(3, 'Lake View Villa', 'Ohrid, North Macedonia', 151, 'foto3.jpg'),
            new Villa(4, 'Olive Grove Estate', 'Berat, Albania', 112, 'foto4.jpg'),
            new Villa(5, 'Sunset Cliff Villa', 'Himare, Albania', 182, 'foto5.jpg'),
            new Villa(6, 'Forest Zen Villa', 'Dhermi, Albania', 140, 'foto6.jpg'),
        ];// Sorto sipas çmimit (nga më e lira)
        usort($villas, function($a, $b) {
            return $a->getPrice() <=> $b->getPrice();
        });

        return $villas;
    }
}
?>