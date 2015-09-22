<?php
//namespace Stripe;
 //(require_once('lib/init.php'));
 (require_once('lib/Stripe.php'));
 
Stripe::setApiKey('sk_test_QUDAiRcO5PSJteeOj8DdHfZM');
$myCard = array('number' => '4242424242424242', 'exp_month' => 12, 'exp_year' => 2015);
$charge = Stripe_Charge::create(array('card' => $myCard, 'amount' => 200, 'currency' => 'usd'));
echo $charge;



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