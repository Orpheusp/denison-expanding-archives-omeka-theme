var main = function () {
  $(".expand-advanced-search").click(function () {
    var form = $(".advanced-search-form-extra");
    var button = $(".expand-advanced-search");
    if (form.hasClass("hidden")) {
      form.removeClass("hidden");
      button.addClass("active");
    } else {
      form.addClass("hidden");
      button.removeClass("active");
    }
  });
};
$(document).ready(main); 