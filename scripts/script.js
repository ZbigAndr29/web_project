// Sidenav (materialize)
document.addEventListener('DOMContentLoaded', function () {
    var sidenav = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(sidenav);
});

// Autocomplete (automatinis) ac - autocomplete (materialize)

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
    });
});

// JavaScript -> Media
// Material Boxed (medziaga dezuteje) mb - material boxed

document.addEventListener('DOMContentLoaded', function() {
    var mb = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(mb);
  });

//   JavaScript -> Scrollspy, ss - scrollspy (materialize)

  document.addEventListener('DOMContentLoaded', function() {
    var ss = document.querySelectorAll('.scrollspy');
    var instances = M.ScrollSpy.init(ss);
  });


  // Forms -> Text Inputs -> Textarea
  
  $("#textarea1").val("");
  M.textareaAutoResize($("#textarea1"));