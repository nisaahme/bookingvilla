<?php
class Model {
    protected $id;
    protected $created_at;

    public function __construct() {
        $this->created_at = date('Y-m-d H:i:s');
    }

    public function getId() {
        return $this->id;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }
}
?>