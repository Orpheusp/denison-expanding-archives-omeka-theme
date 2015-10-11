if (!Omeka) {
  var Omeka = {};
}

(function($) {
  $(document).ready(function () {
    // Show advanced options for site-wide search.
    Omeka.showAdvancedForm = function () {
      var advanced_form = $('#advanced-form');
      var show_advanced = '<a href="#" class="show-advanced button">Advanced Search</a>';
      var search_submit = $('#search-form button');
      var search_input = $('input[title="Search"]');

      // Set up classes and DOM elements jQuery will use.
      if (advanced_form.length > 0) {
        $('#search-container').addClass('with-advanced');
        search_input.before(show_advanced);
        advanced_form.addClass('closed');
      }

      $('.show-advanced').click(function(e) {
        e.preventDefault();
        advanced_form.toggleClass('open').toggleClass('closed');
      });
    };

  });
})(jQuery);