<?php
namespace Stripe;
 (require_once('stripe/lib/Stripe.php'));

Stripe::setApiKey("sk_test_QUDAiRcO5PSJteeOj8DdHfZM");
//print_r(phpversion());
if(isset($_POST)) {

 

$payment = Stripe_Charge::create(array(

 

'amount'        => $_POST['amount'],

'currency'      => $_POST['currency'],

'card'          => array(

                        'number'    => $_POST['card'],

                        'exp_month' => $_POST['expMonth'],

                        'exp_year'  => $_POST['expYear'],

                        'cvc'       => $_POST['cvc']

),

'description'   => $_POST['description']

)

);

print_r($payment);

}

?>
<form method="POST">
    <input type="hidden" value="50" name="amount">
    <input type="hidden" value="gbp" name="currency">
    <input type="hidden" value="This is a test payment" name="description">
    <label style="float: left; width: 200px" for="card number">Card Number: </label>
    <input type="text" name="card">
    <div style="clear: both"></div>
    <label style="float: left; width: 200px" for="card number">Expiry Month: </label>
    <input type="text" name="expMonth">
    <div style="clear: both"></div>
    <label style="float: left; width: 200px" for="card number">Expiry Year: </label>
    <input type="text" name="expYear">
    <div style="clear: both"></div>
    <label style="float: left; width: 200px" for="card number"> (3 numbers on the back): </label>
    <input type="text" name="cvc">
    <div style="clear: both"></div>
    <input type="submit" value="make payment">
</form>