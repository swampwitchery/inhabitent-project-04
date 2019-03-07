(function($) {

    let $searchEvent = $('.main-navigation .search-field');

        $('.search-field').attr("placeholder", "Type and press enter...");
        $('.search-field').hide();
      
        $('.search-button').click(() => {
            event.preventDefault();
          $('header .search-field').show('slow');
          $(document).on('keypress', function(event) {
              if ($searchEvent.val() !== '') {
                if (event.which == 13) {
                  $('.search-form').submit();
                }
              }
          });
        });
        
        $('header .search-field').on('blur', function () {
          $('header .search-field').hide(500);
        });
      

})( jQuery );