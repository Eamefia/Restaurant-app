<form>
  <script src="https://checkout.flutterwave.com/v3.js"></script>
  <button type="button" onClick="makePayment()">Pay Now</button>
</form>

<script>
  function makePayment() {
    FlutterwaveCheckout({
      public_key: "FLWPUBK-bb728547f7d10a0e4507365866e51faf-X",
      tx_ref: "hooli-tx-1920bbtyt",
      amount: 0.50,
      currency: "GHS",
      country: "GH",
      payment_options: "card, mobilemoneyghana, ussd",
      redirect_url: // specified redirect URL
        "https://processPayment.php",
      meta: {
        consumer_id: 23,
        consumer_mac: "92a3-912ba-1192a",
      },
      customer: {
        email: "user@gmail.com",
        phone_number: "0243025278",
        name: "Amefia David",
      },
      callback: function (data) {
        console.log(data);
      },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "My store",
        description: "Payment for items in cart",
        logo: "https://assets.piedpiper.com/logo.png",
      },
    });
  }
</script>