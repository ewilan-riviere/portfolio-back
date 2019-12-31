<?php

namespace App\Helpers;

// use Illuminate\Database\Eloquent\Model;

// class DashboardItem extends Model
// {
//     //
// }

class DashboardItem {
    var $url;
    var $icon;
    var $name;
    var $activeSubmenu;
    var $submenu;

    public function __construct($url, $icon, $name, $activeSubmenu, $submenu)
    {
        $this->url = $url;
        $this->icon = $icon;
        $this->name = $name;
        $this->activeSubmenu = $activeSubmenu;

        if ($activeSubmenu === null) {
            $this->submenu = null;
        } else {
            $this->submenu = $submenu;
        }
    }
}
