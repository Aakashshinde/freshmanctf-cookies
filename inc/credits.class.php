<?php
class Credits {
    var $credits;

    public function __construct() {
        session_start();
        if (!isset($_SESSION['wat'])) {
            $_SESSION['wat'] = 'wat';
            setcookie('credits', '', time() - 3600, '/');
            $credits = 100;
        }
    }

    public function getCount() {
        if (!isset($_COOKIE['credits'])) {
            setcookie('credits', '100', 0, '/');
            $credits = 100;
        }
        return $credits;
    }

    public function pay($cost) {
        if ($cost > $credits) {
            return false;
        } else {
            setcookie('credits', $credits - $cost, 0, '/');
            $credits = $credits -$cost;
            return true;
        }
    }

}
?>