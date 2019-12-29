<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;

// class DashboardItem extends Model
// {
//     //
// }

class DashboardItem {
    var $url;
    var $icon;
    var $name;

    public function __construct($url, $icon, $name)
    {
        $this->url = $url;
        $this->icon = $icon;
        $this->name = $name;
    }
}
