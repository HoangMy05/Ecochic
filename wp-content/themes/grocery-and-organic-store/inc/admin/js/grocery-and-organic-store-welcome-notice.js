(function ($) {
  "use strict";
  $("#install-activate-button").on("click", function (e) {
    e.preventDefault();
    var button = $(this);
    button.attr("disabled", "disabled");
    button.text("Installing & Activating required plugins").addClass("processing-spinner");

    var activationData = {
      action: "grocery_and_organic_store_install_and_activate_plugins",
      nonce: grocery_and_organic_store_localize.nonce,
    };
    $.post(grocery_and_organic_store_localize.ajax_url, activationData, function (response) {
      var checkJSON = /{.*}/; // Regular expression to match the JSON portion
      var match = checkJSON.exec(response);
      if (match) {
        var jsonResponse = match[0]; // Extracted JSON portion
        try {
          var responseObj = JSON.parse(jsonResponse); // Parse the extracted JSON

          if (responseObj.success === true) {
            window.location.href = grocery_and_organic_store_localize.redirect_url;
          } else {
            console.log("Error!");
          }
        } catch (error) {
          console.log("Error parsing JSON!");
        }
      } else {
        //alert(response);
        if (response.success === true) {
          window.location.href = grocery_and_organic_store_localize.redirect_url;
        } else {
          button.text(response.data.message);
        }
      }
    });
  });
  $("#grocery-and-organic-store-dismiss-notice").on("click", ".notice-dismiss", function () {
    $.ajax({
      url: ajaxurl,
      data: {
        action: "grocery_and_organic_store_dismissble_notice",
      },
    });
  });
})(jQuery);
