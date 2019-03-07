(function($) {
 
        $('.icon-search').on('click',event => {
            event.preventDefault();
          $('.search-field').toggleClass('clicked');
          $('.search-field').focus();
        });
          $('.search-field').on('blur',()=> {
              if ($('.search-field').val().length >0) {
                return false;
                }
                $('.search-field').removeClass('clicked');
          });
  
})( jQuery );