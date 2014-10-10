<?php
session_start();
if (!isset($_SESSION['wat']))
    setcookie('credits', '', time() - 3600, '/');

class Credits {

    public function __construct() {
        if (!isset($_COOKIE['credits']))
            setcookie('credits', '100', 0, '/');
    }

    public function getCount() {
        if (!isset($_COOKIE['credits']))
            setcookie('credits', '100', 0, '/');
        return $_COOKIE['credits'];
    }

    public function pay($cost) {
        $credits = $this->getCount();

        if ($cost > $credits) {
            return false;
        } else {
            setcookie('credits', $credits - $cost, 0, '/');
            return true;
        }
    }

}
?>