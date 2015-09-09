
<!DOCTYPE html>
<html lang="en">

<head>
    <title>froom</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">  

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" />

</head>

<body>
<form action="" method="POST">
      <script>
         src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
         data-key="pk_test_VD6WrM0PNck4vBqlFeSWu4d7"
         data-amount="2000"
         data-name="Demo Site"
         data-description="2 widgets($20.00)"
         data-image="/128x128.png">
       </script> 
</form> 

<form action="" method="POST"   id="payment-form">
       <span class="payment-errors"></span>
       <div class="row">
         <label>
           <span>Card Number</span>
           <input type="text" data-stripe="number">
         </label>
       </div>
       <div class="row">
         <label>
          <span>CVC</span>
          <input type="text" data-stripe="cvc">
        </label>
     </div>
     <div class="row">
       <label>
          <span>Expiration (MM/YYYY)</span>
         <input type="text" data-stripe="exp-month">
      </label>
       <input type="text" data-stripe="exp-year">
      </div>
      <button type="submit">Buy Now</button>
   </form>

<!-- Carousel Slider -->


    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- CUSTOM JS -->
    <script type="text/javascript" src="js/froom.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
    <script src=”//code.jquery.com/jquery-2.0.2.min.js”></script>
    <script src=”//js.stripe.com/v2/”></script>        <script>
        (function() {
            Stripe.setPublishableKey('pk_test_VD6WrM0PNck4vBqlFeSWu4d7');
        })();
        $('#payment-form').on('submit',generateToken);
    var generateToken = function(e) {
         var form = $(this);
        // No pressing the buy now button     more     than once
         form.find('button').        prop('disabled',     true);
        // Create the token, based on the     form     object
         Stripe.create(form,             stripeResponseHandler);
       // Prevent the form from submitting
        e.preventDefault();
    };
    var stripeResponseHandler =         function(status,response) {
        var form = $('#payment-form');
        // Any validation errors?
       if (response.error) {
            // Show the user what they did     wrong
            form.find('.payment-errors').    text(response.error.message);
          // Make the submit clickable     again
           form.find('button').        prop('disabled', false);
        } else {
            // Otherwise, we’re good to go.     Submit the form.
            // Insert the unique token into the     form
            $('<input>', {
              'type': 'hidden',
              'name': 'stripeToken',
              'value': response.id
           }).appendTo(form);
           // Call the native submit method on     the form
             // to keep the submission from     being cancelled
            form.get(0).submit();
        }
    };

   </script>
    </body>

</html>

s



