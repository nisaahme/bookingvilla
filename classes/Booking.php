
<?php
require_once __DIR__ . '/Model.php';

class Booking extends Model {
    private $villa_id;
    private $username;
    private $date;

    public function __construct($villa_id, $username, $date) {
        parent::__construct();
        $this->villa_id = $villa_id;
        $this->username = $username;
        $this->date = $date;
    }

    public function getVillaId() { return $this->villa_id; }
    public function getUsername() { return $this->username; }
    public function getDate() { return $this->date; }

    // Ruajtja në session (simulim pa databazë)
    public function save() {
        if (!isset($_SESSION['bookings'])) {
            $_SESSION['bookings'] = [];
        }
        $_SESSION['bookings'][] = $this;
        return true;
    }

    public static function getAll() {
        return $_SESSION['bookings'] ?? [];
    }
}
?>


