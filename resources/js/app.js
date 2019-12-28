/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// Materialize CSS

require('materialize-css');

// Initialize Materialize CSS components

document.addEventListener('DOMContentLoaded', function() {
    var elemsNavbar = document.querySelectorAll('.sidenav');
    var instancesNavbar = M.Sidenav.init(elemsNavbar);
    
    var dropdownOptions = {
        'closeOnClick': true,
        'constrainWidth':false,
        'coverTrigger':false
    }
    var elemsDrop = document.querySelectorAll('.dropdown-trigger');
    var instancesDrop = M.Dropdown.init(elemsDrop,dropdownOptions);
});
