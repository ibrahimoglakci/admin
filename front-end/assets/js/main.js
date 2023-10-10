function changeLang(lang) {
  droparea = $(".drop-area-flag");
  var optionen =
    '<a onclick="changeLang(\'es\');" class="dropdown-item notify-item language" data-lang="es" title="Spanish"><img src="front-end/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Spanish</span></a><a onclick="changeLang(\'tr\');" class="dropdown-item notify-item language" data-lang="tr" title="Turkish"><img src="front-end/assets/images/flags/turkey.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Turkish</span></a><a onclick="changeLang(\'de\');" class="dropdown-item notify-item language" data-lang="de" title="German"><img src="front-end/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">German</span></a><a onclick="changeLang(\'it\');" class="dropdown-item notify-item language" data-lang="it" title="Italian"><img src="front-end/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Italian</span></a><a onclick="changeLang(\'ru\');" class="dropdown-item notify-item language" data-lang="ru" title="Russian"><img src="front-end/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Russian</span></a>';

  var optionsp =
    '<a onclick="changeLang(\'de\');" class="dropdown-item notify-item language" data-lang="de" title="German"><img src="front-end/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Alemán</span></a><a onclick="changeLang(\'tr\');" class="dropdown-item notify-item language" data-lang="tr" title="Turkish"><img src="front-end/assets/images/flags/turkey.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Turquía</span></a><a onclick="changeLang(\'en\');" class="dropdown-item notify-item language py-2" data-lang="en" title="English"><img src="front-end/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Inglés</span></a><a onclick="changeLang(\'it\');" class="dropdown-item notify-item language" data-lang="it" title="Italian"><img src="front-end/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Italiano</span></a><a onclick="changeLang(\'ru\');" class="dropdown-item notify-item language" data-lang="ru" title="Russian"><img src="front-end/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Russo</span></a>';

  var optiontr =
    '<a onclick="changeLang(\'de\');" class="dropdown-item notify-item language" data-lang="de" title="German"><img src="front-end/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Almanca</span></a><a onclick="changeLang(\'es\');" class="dropdown-item notify-item language" data-lang="es" title="Spanish"><img src="front-end/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">İspanyolca</span></a><a onclick="changeLang(\'en\');" class="dropdown-item notify-item language py-2" data-lang="en" title="English"><img src="front-end/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">İngilizce</span></a><a onclick="changeLang(\'it\');" class="dropdown-item notify-item language" data-lang="it" title="Italyanca"><img src="front-end/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Italyanca</span></a><a onclick="changeLang(\'ru\');" class="dropdown-item notify-item language" data-lang="ru" title="Rusça"><img src="front-end/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Rusça</span></a>';

  var optionde =
    '<a onclick="changeLang(\'tr\');" class="dropdown-item notify-item language" data-lang="de" title="Turkey"><img src="front-end/assets/images/flags/turkey.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Türkisch</span></a><a onclick="changeLang(\'es\');" class="dropdown-item notify-item language" data-lang="es" title="Spanish"><img src="front-end/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Spanisch</span></a><a onclick="changeLang(\'en\');" class="dropdown-item notify-item language py-2" data-lang="en" title="English"><img src="front-end/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Englisch</span></a><a onclick="changeLang(\'it\');" class="dropdown-item notify-item language" data-lang="it" title="Italian"><img src="front-end/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Italiano</span></a><a onclick="changeLang(\'ru\');" class="dropdown-item notify-item language" data-lang="ru" title="Russian"><img src="front-end/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Russo</span></a>';

  var optionit =
    '<a onclick="changeLang(\'tr\');" class="dropdown-item notify-item language" data-lang="de" title="Turkey"><img src="front-end/assets/images/flags/turkey.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Türkisch</span></a><a onclick="changeLang(\'es\');" class="dropdown-item notify-item language" data-lang="es" title="Spanish"><img src="front-end/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Spanisch</span></a><a onclick="changeLang(\'en\');" class="dropdown-item notify-item language py-2" data-lang="en" title="English"><img src="front-end/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Englisch</span></a><a onclick="changeLang(\'it\');" class="dropdown-item notify-item language" data-lang="it" title="Italian"><img src="front-end/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Italiano</span></a><a onclick="changeLang(\'ru\');" class="dropdown-item notify-item language" data-lang="ru" title="Russian"><img src="front-end/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Russo</span></a>';

  var optionru =
    '<a onclick="changeLang(\'es\');" class="dropdown-item notify-item language" data-lang="es" title="Spanish"><img src="front-end/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Spanisch</span></a><a onclick="changeLang(\'tr\');" class="dropdown-item notify-item language" data-lang="tr" title="Turkish"><img src="front-end/assets/images/flags/turkey.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Turkish</span></a><a onclick="changeLang(\'de\');" class="dropdown-item notify-item language" data-lang="de" title="German"><img src="front-end/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">German</span></a><a onclick="changeLang(\'it\');" class="dropdown-item notify-item language" data-lang="it" title="Italian"><img src="front-end/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Italian</span></a><a onclick="changeLang(\'ru\');" class="dropdown-item notify-item language" data-lang="ru" title="Russian"><img src="front-end/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Russian</span></a>';

  if (localStorage.getItem("lang")) {
    localStorage.setItem("lang", lang);
    document.cookie = "lang=" + lang;
    flagarea = $(".flag-area");
    us =
      '<img id="header-lang-img" src="front-end/assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">';
    sp =
      '<img id="header-lang-img" src="front-end/assets/images/flags/spain.svg" alt="Header Language" height="20" class="rounded">';
    tr =
      '<img id="header-lang-img" src="front-end/assets/images/flags/turkey.svg" alt="Header Language" height="20" class="rounded">';
    de =
      '<img id="header-lang-img" src="front-end/assets/images/flags/germany.svg" alt="Header Language" height="20" class="rounded">';

    it =
      '<img id="header-lang-img" src="front-end/assets/images/flags/italy.svg" alt="Header Language" height="20" class="rounded">';

    ru =
      '<img id="header-lang-img" src="front-end/assets/images/flags/russia.svg" alt="Header Language" height="20" class="rounded">';

    if (lang == "en") {
      $("#header-lang-img").remove();
      flagarea.append(us);
      $(".language").remove();
      droparea.append(optionen);
    } else if (lang == "es") {
      $("#header-lang-img").remove();
      flagarea.append(sp);
      $(".language").remove();
      droparea.append(optionsp);
    } else if (lang == "tr") {
      $("#header-lang-img").remove();
      flagarea.append(tr);
      $(".language").remove();
      droparea.append(optiontr);
    } else if (lang == "de") {
      $("#header-lang-img").remove();
      flagarea.append(de);
      $(".language").remove();
      droparea.append(optionde);
    } else if (lang == "it") {
      $("#header-lang-img").remove();
      flagarea.append(it);
      $(".language").remove();
      droparea.append(optionit);
    } else if (lang == "ru") {
      $("#header-lang-img").remove();
      flagarea.append(ru);
      $(".language").remove();
      droparea.append(optionru);
    }
    location.reload();
  } else {
    localStorage.setItem("lang", lang);
    document.cookie = "lang=" + lang;
    flagarea = $(".flag-area");
    us =
      '<img id="header-lang-img" src="front-end/assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">';
    sp =
      '<img id="header-lang-img" src="front-end/assets/images/flags/spain.svg" alt="Header Language" height="20" class="rounded">';
    tr =
      '<img id="header-lang-img" src="front-end/assets/images/flags/turkey.svg" alt="Header Language" height="20" class="rounded">';
    de =
      '<img id="header-lang-img" src="front-end/assets/images/flags/germany.svg" alt="Header Language" height="20" class="rounded">';

    it =
      '<img id="header-lang-img" src="front-end/assets/images/flags/italy.svg" alt="Header Language" height="20" class="rounded">';

    ru =
      '<img id="header-lang-img" src="front-end/assets/images/flags/russia.svg" alt="Header Language" height="20" class="rounded">';

    if (lang == "en") {
      $("#header-lang-img").remove();
      flagarea.append(us);
      $(".language").remove();
      droparea.append(optionen);
    } else if (lang == "es") {
      $("#header-lang-img").remove();
      flagarea.append(sp);
      $(".language").remove();
      droparea.append(optionsp);
    } else if (lang == "tr") {
      $("#header-lang-img").remove();
      flagarea.append(tr);
      $(".language").remove();
      droparea.append(optiontr);
    } else if (lang == "de") {
      $("#header-lang-img").remove();
      flagarea.append(de);
      $(".language").remove();
      droparea.append(optionde);
    } else if (lang == "it") {
      $("#header-lang-img").remove();
      flagarea.append(it);
      $(".language").remove();
      droparea.append(optionit);
    } else if (lang == "ru") {
      $("#header-lang-img").remove();
      flagarea.append(ru);
      $(".language").remove();
      droparea.append(optionru);
    }
    location.reload();
  }
}

window.addEventListener("DOMContentLoaded", function () {
  defaultlang = navigator.languages[1];

  flagarea = $(".flag-area");
  droparea = $(".drop-area-flag");
  en =
    '<img id="header-lang-img" src="front-end/assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">';
  sp =
    '<img id="header-lang-img" src="front-end/assets/images/flags/spain.svg" alt="Header Language" height="20" class="rounded">';
  tr =
    '<img id="header-lang-img" src="front-end/assets/images/flags/turkey.svg" alt="Header Language" height="20" class="rounded">';
  de =
    '<img id="header-lang-img" src="front-end/assets/images/flags/germany.svg" alt="Header Language" height="20" class="rounded">';
  it =
    '<img id="header-lang-img" src="front-end/assets/images/flags/italy.svg" alt="Header Language" height="20" class="rounded">';

  ru =
    '<img id="header-lang-img" src="front-end/assets/images/flags/russia.svg" alt="Header Language" height="20" class="rounded">';

  var optionen =
    '<a onclick="changeLang(\'de\');" class="dropdown-item notify-item language" data-lang="tr" title="German"><img src="front-end/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">German</span></a><a onclick="changeLang(\'tr\');" class="dropdown-item notify-item language" data-lang="tr" title="Turkish"><img src="front-end/assets/images/flags/turkey.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Turkish</span></a><a onclick="changeLang(\'es\');" class="dropdown-item notify-item language" data-lang="es" title="Spanish"><img src="front-end/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Spanish</span></a><a onclick="changeLang(\'it\');" class="dropdown-item notify-item language" data-lang="it" title="Italy"><img src="front-end/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Italy</span></a><a onclick="changeLang(\'ru\');" class="dropdown-item notify-item language" data-lang="ru" title="Russia"><img src="front-end/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Russia</span></a>';

  var optionsp =
    '<a onclick="changeLang(\'de\');" class="dropdown-item notify-item language" data-lang="de" title="German"><img src="front-end/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Alemán</span></a><a onclick="changeLang(\'tr\');" class="dropdown-item notify-item language" data-lang="tr" title="Turkish"><img src="front-end/assets/images/flags/turkey.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Turquía</span></a><a onclick="changeLang(\'en\');" class="dropdown-item notify-item language py-2" data-lang="en" title="English"><img src="front-end/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Inglés</span></a><a onclick="changeLang(\'it\');" class="dropdown-item notify-item language" data-lang="it" title="Italy"><img src="front-end/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Italy</span></a><a onclick="changeLang(\'ru\');" class="dropdown-item notify-item language" data-lang="ru" title="Russia"><img src="front-end/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Russia</span></a>';

  var optiontr =
    '<a onclick="changeLang(\'de\');" class="dropdown-item notify-item language" data-lang="de" title="German"><img src="front-end/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Almanca</span></a><a onclick="changeLang(\'es\');" class="dropdown-item notify-item language" data-lang="es" title="Spanish"><img src="front-end/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">İspanyolca</span></a><a onclick="changeLang(\'en\');" class="dropdown-item notify-item language py-2" data-lang="en" title="English"><img src="front-end/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">İngilizce</span></a><a onclick="changeLang(\'it\');" class="dropdown-item notify-item language" data-lang="it" title="Italyanca"><img src="front-end/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Italyanca</span></a><a onclick="changeLang(\'ru\');" class="dropdown-item notify-item language" data-lang="ru" title="Rusça"><img src="front-end/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Rusça</span></a>';

  var optionde =
    '<a onclick="changeLang(\'tr\');" class="dropdown-item notify-item language" data-lang="de" title="Turkey"><img src="front-end/assets/images/flags/turkey.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Türkisch</span></a><a onclick="changeLang(\'es\');" class="dropdown-item notify-item language" data-lang="es" title="Spanish"><img src="front-end/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Spanisch</span></a><a onclick="changeLang(\'en\');" class="dropdown-item notify-item language py-2" data-lang="en" title="English"><img src="front-end/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Englisch</span></a><a onclick="changeLang(\'it\');" class="dropdown-item notify-item language" data-lang="it" title="Italy"><img src="front-end/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Italy</span></a><a onclick="changeLang(\'ru\');" class="dropdown-item notify-item language" data-lang="ru" title="Russia"><img src="front-end/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Russia</span></a>';

  var optionit =
    '<a onclick="changeLang(\'tr\');" class="dropdown-item notify-item language" data-lang="de" title="Turkey"><img src="front-end/assets/images/flags/turkey.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Türkisch</span></a><a onclick="changeLang(\'es\');" class="dropdown-item notify-item language" data-lang="es" title="Spanish"><img src="front-end/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Spanisch</span></a><a onclick="changeLang(\'en\');" class="dropdown-item notify-item language py-2" data-lang="en" title="English"><img src="front-end/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Englisch</span></a><a onclick="changeLang(\'de\');" class="dropdown-item notify-item language" data-lang="de" title="German"><img src="front-end/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">German</span></a><a onclick="changeLang(\'ru\');" class="dropdown-item notify-item language" data-lang="ru" title="Russian"><img src="front-end/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Russia</span></a>';

  var optionru =
    '<a onclick="changeLang(\'es\');" class="dropdown-item notify-item language" data-lang="es" title="Spanish"><img src="front-end/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Spanisch</span></a><a onclick="changeLang(\'tr\');" class="dropdown-item notify-item language" data-lang="tr" title="Turkish"><img src="front-end/assets/images/flags/turkey.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Turkish</span></a><a onclick="changeLang(\'de\');" class="dropdown-item notify-item language" data-lang="de" title="German"><img src="front-end/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">German</span></a><a onclick="changeLang(\'it\');" class="dropdown-item notify-item language" data-lang="it" title="Italian"><img src="front-end/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">Italian</span></a><a onclick="changeLang(\'en\');" class="dropdown-item notify-item language" data-lang="en" title="English"><img src="front-end/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18"><span class="align-middle">English</span></a>';

  if (
    this.localStorage.getItem("lang") &&
    document.cookie.split(";").some((item) => item.trim().startsWith("lang="))
  ) {
    if (localStorage.getItem("lang") == "en") {
      flagarea.append(en);
      $(".language").remove();
      droparea.append(optionen);
    } else if (localStorage.getItem("lang") == "es") {
      flagarea.append(sp);
      $(".language").remove();
      droparea.append(optionsp);
    } else if (localStorage.getItem("lang") == "tr") {
      flagarea.append(tr);
      $(".language").remove();
      droparea.append(optiontr);
    } else if (localStorage.getItem("lang") == "de") {
      flagarea.append(de);
      $(".language").remove();
      droparea.append(optionde);
    }else if (localStorage.getItem("lang") == "it") {
      flagarea.append(it);
      $(".language").remove();
      droparea.append(optionit);
    }else if (localStorage.getItem("lang") == "ru") {
      flagarea.append(ru);
      $(".language").remove();
      droparea.append(optionru);
    }
  } else {
    this.localStorage.setItem("lang", defaultlang);
    document.cookie = "lang=" + defaultlang;
    if (defaultlang == "tr") {
      flagarea.append(tr);
    } else if (defaultlang == "en") {
      flagarea.append(en);
    } else if (defaultlang == "es") {
      flagarea.append(sp);
    } else if (defaultlang == "de") {
      flagarea.append(de);
    }else if (defaultlang == "it") {
      flagarea.append(it);
    }else if (defaultlang == "ru") {
      flagarea.append(ru);
    }

    $(".language").remove();
    droparea.append(optionen);
  }
});

function downloadImage(path, image) {
  var link = document.createElement("a");
  link.href = path + "" + image;
  link.download = image;
  link.click();
}

$(document).ready(function () {
  $("#logoInput").on("change", function () {
    var file = $(this)[0].files[0]; // seçilen dosyayı al
    var reader = new FileReader();

    reader.onload = function (event) {
      var imgSrc = event.target.result; // okunan dosyanın base64 verisi
      var imgTag =
        "<img src='" +
        imgSrc +
        "' class='avatar-md rounded mb-3 border border-dark' alt='' style='width: 150px;height: 150px;object-fit: contain;'>";
      $(".prev-rounded").html(imgTag); // img etiketini ekle
    };

    reader.readAsDataURL(file); // dosyayı oku
  });
});

function copyText($textClass, $ID) {
  var textToCopy = document.querySelector("." + $textClass).innerText;
  var tempInput = document.createElement("input");
  tempInput.setAttribute("value", textToCopy);
  document.body.appendChild(tempInput);
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);

  var iconElement = document.getElementById("copy-icon-" + $ID);
  iconElement.classList.remove("fa-copy");
  iconElement.classList.add("fa-check");

  setTimeout(function () {
    iconElement.classList.remove("fa-check");
    iconElement.classList.add("fa-copy");
  }, 2000);
}
