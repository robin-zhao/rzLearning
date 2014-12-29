(function ($) {

  $(document).ready(function () {
    $("#sort-image").bind('change', function () {

      var val = $(this).val();
      if (val == 0) {
        return;
      }

      $.ajax({
        url: '/sort',
        data: {
          sort: val
        },
        success: function (data) {
          $("#gallery-ul").html(data);
        },
        error: function (data) {
          console.log(data);
        }
      });
    });




  });

})(jQuery);