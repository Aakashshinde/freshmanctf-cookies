<?php
session_start();
class Credits {

    public function __construct() {
        if (!isset($_SESSION['credits']))
            $_SESSION['credits'] = 100;
    }

    public function getCount() {
        if (!isset($_SESSION['credits']))
            $_SESSION['credits'] = 100;
        return $_SESSION['credits'];
    }

    public function pay($cost) {
        $credits = $this->getCount();

        if ($cost > $credits) {
            return false;
        } else {
            $_SESSION['credits'] = $credits-$cost;
            return true;
        }
    }

}
?>