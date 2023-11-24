$(document).ready(function () {
  $(".locate-us-button").click(function () {
    $(".google-map").show();
    $(".contact-information").show();
    $(".aside-figure").hide();
    $(".form-section ").hide();
  });
  $(".send-message-btn").click(function () {
    $(".google-map").hide();
    $(".contact-information").hide();
    $(".aside-figure").show();
    $(".form-section ").show();
  });

  $(".btn-next").click(function () {
    $("#timelineTab .active")
      .parent()
      .next("li")
      .find("button")
      .trigger("click");
  });
  $(".btn-prev").click(function () {
    $("#timelineTab .active")
      .parent()
      .prev("li")
      .find("button")
      .trigger("click");
  });

  $(".sideNavOpen").click(function (e) {
    var sideNavTarget = $(this).data("side-nav-target");
    e.preventDefault();
    if (typeof sideNavTarget !== "undefined" && sideNavTarget) {
      showSideMenu(sideNavTarget);
    }
  });

  $(".sideNavClose").click(function (e) {
    e.preventDefault();
    console.log(sideNavTarget);
    var sideNavTarget = $(this).data("side-nav-target");
    if (typeof sideNavTarget !== "undefined" && sideNavTarget) {
      hideSideMenu(sideNavTarget);
    }
  });

  $(".owl-country").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    navText: [
      "<i class='fa-solid fa-arrow-left'></i>",
      "<i class='fa-solid fa-arrow-right'></i>",
    ],
    responsive: {
      0: {
        items: 3,
      },
      600: {
        items: 6,
      },
      1000: {
        items: 12,
      },
    },
  });

  $(".owl-testimonial").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    navText: [
      "<i class='fa-solid fa-arrow-left'></i>",
      "<i class='fa-solid fa-arrow-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 2,
      },
    },
  });

  $(".owl-affiliation").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    navText: [
      "<i class='fa-solid fa-arrow-left'></i>",
      "<i class='fa-solid fa-arrow-right'></i>",
    ],
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 6,
      },
    },
  });
  // $(".team-category-slider").owlCarousel({
  //   item: 4,
  //   loop: true,
  //   margin: 20,
  //   nav: false,
  //   dots: false,
  //   autoWidth: true,
  // });

  // initialize of emotion-accordion
  initEmotionAccordion();

  // team slider
  var sync1 = $(".team-details-slider");
  var sync2 = $(".all-team-slider");
  var slidesPerPage = 4; //globaly define number of elements per page
  var syncedSecondary = true;
  sync1
    .owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: false,
      autoplay: false,
      dots: false,
      loop: true,
      responsiveRefreshRate: 200,
    })
    .on("changed.owl.carousel", syncPosition);
  sync2
    .on("initialized.owl.carousel", function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
      smartSpeed: 200,
      slideSpeed: 500,
      slideBy: slidesPerPage,
      responsiveRefreshRate: 100,
      loop: false,
      margin: 20,
      nav: false,
      dots: false,
      autoWidth: true,
    })
    .on("changed.owl.carousel", syncPosition2);

  function syncPosition(el) {
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find(".owl-item.active").length - 1;
    var start = sync2.find(".owl-item.active").first().index();
    var end = sync2.find(".owl-item.active").last().index();

    if (current > end) {
      sync2.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      sync2.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      sync1.data("owl.carousel").to(number, 100, true);
    }
  }
  sync2.on("click", ".owl-item", function (e) {
    e.preventDefault();
    var number = $(this).index();
    sync1.data("owl.carousel").to(number, 300, true);
  });
});

function showSideMenu(sideNavTarget) {
  $(sideNavTarget).addClass("open");
  $("body").addClass("fixed-background");
}

function hideSideMenu(sideNavTarget) {
  $(sideNavTarget).removeClass("open");
  $("body").removeClass("fixed-background");
}

$(window).on("load", function () {
  $("#popupModal").modal("show");
});

$(document).on("keydown", function (event) {
  if (event.key == "Escape") {
    $("#popupModal").modal("hide");
  }
});

$("#popupModalCloseBtn").on("click", function () {
  $("#popupModal").modal("hide");
});

$("#popupModal").on("show.bs.modal", function () {
  $("body").addClass("popupModal-padding-overlap");
});

$("#popupModal").on("shown.bs.modal", function () {
  $("body").removeAttr("style");
  var modalObj = $(this).find(".modal-content");
  $(modalObj).height("auto");
  if ($(modalObj).height() > $(window).height() * 0.9) {
    $(modalObj).height($(window).height() * 0.9);
  }
});

var callback = function () {
  jQuery("#popupModal").each(function (idx, item) {
    var modalObj = $(item).find(".modal-content");
    $(modalObj).height("auto");
    if ($(modalObj).height() > $(window).height() * 0.9) {
      $(modalObj).height($(window).height() * 0.9);
    }
  });
};

$(window).resize(callback);

$(".typingText").each(function (index, value) {
  var text_val = $(this).text();
  new Typed(".typingText", {
    strings: [text_val],
    typeSpeed: 50,
    loop: true,
    smartBackspace: false,
  });
});

$(window).scroll(function () {
  if ($(window).scrollTop() >= 200) {
    $("header").addClass("fixed-navbar");
  } else {
    $("header").removeClass("fixed-navbar");
  }
});

function openTab(el, tabs, imgsource, all_close) {
  for (var i = 0; i < tabs.length; i++) {
    tabs[i].classList.remove("active");
  }
  el.classList.add("active");
  for (var i = 0; i < imgsource.length; i++) {
    imgsource[i].classList.remove("default-close");
    var children = imgsource[i].children;
    for (var child = 0; child < children.length; child++) {
      if (children[child].classList.contains(el.id)) {
        children[child].classList.add("active");
        children[child].parentElement.classList.add("default-close");
      } else {
        children[child].classList.remove("active");
      }
    }
  }
  for (var i = 0; i < all_close.length; i++) {
    all_close[i].classList.add("all-close-tab");
  }
  el.parentElement.classList.remove("all-close-tab");
}

function allClose(tabs, imgsource, all_close) {
  for (var i = 0; i < tabs.length; i++) {
    tabs[i].classList.remove("active");
  }
  for (var i = 0; i < imgsource.length; i++) {
    var children = imgsource[i].children;
    for (var child = 0; child < children.length; child++) {
      children[child].classList.remove("active");
    }
  }
  for (var i = 0; i < all_close.length; i++) {
    all_close[i].classList.add("all-close-tab");
  }
  for (var i = 0; i < imgsource.length; i++) {
    imgsource[i].classList.remove("default-close");
  }
}

function initEmotionAccordion() {
  var tabs = document.getElementsByClassName("el-item");
  var imgsource = document.getElementsByClassName("source-wrapper ");
  var all_close = document.getElementsByClassName("tabs-wrapper");
  for (var i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener(
      "mouseover",
      function () {
        openTab(this, tabs, imgsource, all_close);
      },
      true
    );
  }
  for (var i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener(
      "mouseleave",
      function () {
        allClose(tabs, imgsource, all_close);
      },
      true
    );
  }
}
