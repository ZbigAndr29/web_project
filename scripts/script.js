
// Sidenav 
document.addEventListener('DOMContentLoaded', function () {
    var sidenav = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(sidenav, options);
});

// Autocomplete (automatinis) ac - autocomplete

document.addEventListener('DOMContentLoaded', function () {
    var ac = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(ac, {
        data: {
            "Ispanija": null,
            "Italija": null,
            "Turkija": null,
            "Tailandas": null,
            "Florida": null,
            "Australija": null,
            "Japonija": null,
            "Kinija": null,
            "Naujoji Zelandija": null,
            "Vokietija": null,
            "Anglija": null,
            "Lietuva": null,
        }
    }
});