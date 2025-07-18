$.fn.vsmobilemenu = function (options) {
  var opt = $.extend(
    {
      menuToggleBtn: ".structa-menu-toggle",
      bodyToggleClass: "structa-body-visible",
      subMenuClass: "structa-submenu",
      subMenuParent: "structa-item-has-children",
      subMenuParentToggle: "structa-active",
      meanExpandClass: "structa-mean-expand",
      appendElement: '<span class="structa-mean-expand"></span>',
      subMenuToggleClass: "structa-open",
      toggleSpeed: 400,
    },
    options
  );

  return this.each(function () {
    var menu = $(this); 

    function menuToggle() {
      menu.toggleClass(opt.bodyToggleClass);

      var subMenu = "." + opt.subMenuClass;
      $(subMenu).each(function () {
        if ($(this).hasClass(opt.subMenuToggleClass)) {
          $(this).removeClass(opt.subMenuToggleClass);
          $(this).css("display", "none");
          $(this).parent().removeClass(opt.subMenuParentToggle);
        }
      });
    }

    menu.find("li").each(function () {
      var submenu = $(this).find("ul");
      submenu.addClass(opt.subMenuClass);
      submenu.css("display", "none");
      submenu.parent().addClass(opt.subMenuParent);
      submenu.prev("a").append(opt.appendElement);
      submenu.next("a").append(opt.appendElement);
    });

    function toggleDropDown($element) {
      if ($($element).next("ul").length > 0) {
        $($element).parent().toggleClass(opt.subMenuParentToggle);
        $($element).next("ul").slideToggle(opt.toggleSpeed);
        $($element).next("ul").toggleClass(opt.subMenuToggleClass);
      } else if ($($element).prev("ul").length > 0) {
        $($element).parent().toggleClass(opt.subMenuParentToggle);
        $($element).prev("ul").slideToggle(opt.toggleSpeed);
        $($element).prev("ul").toggleClass(opt.subMenuToggleClass);
      }
    }

    var expandToggler = "." + opt.meanExpandClass;
    $(expandToggler).each(function () {
      $(this).on("click", function (e) {
        e.preventDefault();
        toggleDropDown($(this).parent());
      });
    });

    $(opt.menuToggleBtn).each(function () {
      $(this).on("click", function () {
        menuToggle();
      });
    });

    menu.on("click", function (e) {
      e.stopPropagation();
      menuToggle();
    });

    menu.find("div").on("click", function (e) {
      e.stopPropagation();
    });
  });
};

function applyMenu() {
  if (window.innerWidth <= 991.99) {
    $(".structa-menu-wrapper.v3").vsmobilemenu();
  } else {
    $(".structa-menu-wrapper.v2").vsmobilemenu();
  }

  if (
    !$(".structa-menu-wrapper").hasClass("v2") &&
    !$(".structa-menu-wrapper").hasClass("v3")
  ) {
    $(".structa-menu-wrapper").vsmobilemenu();
  }
}
applyMenu();

$(window).resize(function () {
  applyMenu();
});
