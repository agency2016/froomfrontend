<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Stripe Sample Form</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js"></script>
       

            <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
            

<script type="text/javascript">
  // This identifies your website in the createToken call below
  Stripe.setPublishableKey('sk_test_QUDAiRcO5PSJteeOj8DdHfZM');
  jQuery(function($) {
  $('#payment-form').submit(function(event) {
   // var $form = $(this);
    console.log('a');
    // Disable the submit button to prevent repeated clicks
    $form.find('button').prop('disabled', true);

    Stripe.card.createToken($form, stripeResponseHandler);

    // Prevent the form from submitting with the default action
    return false;
  });
  
  function stripeResponseHandler(status, response) {
  var $form = $('#payment-form');
  console.log('i am here');return false;
  if (response.error) {
    // Show the errors on the form
    $form.find('.payment-errors').text(response.error.message);
    $form.find('button').prop('disabled', false);
  } else {
    // response contains id and card, which contains additional card details
    var token = response.id;
    // Insert the token into the form so it gets submitted to the server
    $form.append($('<input type="text" name="stripeToken" />').val(token));
    // and submit
    $form.get(0).submit();
  }
};
});
  // ...
</script>




    </head>
    <body>

        

<form action="" method="POST" id="payment-form">
  <span class="payment-errors"></span>

  <div class="form-row">
    <label>
      <span>Card Number</span>
      <input type="text" size="20" data-stripe="number"/>
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>CVC</span>
      <input type="text" size="4" data-stripe="cvc"/>
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>Expiration (MM/YYYY)</span>
      <input type="text" size="2" data-stripe="exp-month"/>
    </label>
    <span> / </span>
    <input type="text" size="4" data-stripe="exp-year"/>
  </div>

  <button type="submit">Submit Payment</button>
</form>



    </body>
</html>