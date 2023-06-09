<?php include 'header.php'; ?>
<html>
<body>
        <!--start here-->
        <div class="bg-dark text-white">
        <div class="container">
  <div class="row">
    <div class="col-md-6">
    <h1>Payment Page</h1>
    <form>
      <div class="form-group col-md-6">
        <label for="cardNumber">Card Number</label>
        <input type="text" class="form-control" id="cardNumber" placeholder="Enter card number">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="expiryDate">Expiry Date</label>
          <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
        </div>
        <div class="form-group col-md-6">
          <label for="cvv">CVV</label>
          <input type="text" class="form-control" id="cvv" placeholder="CVV">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Cardholder Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter cardholder name">
      </div>
      <div class="form-group col-md-6">
        <label for="amount">Amount</label>
        <input type="text" class="form-control" id="amount" placeholder="Enter amount">
      </div>
      <button type="submit" class="btn btn-primary">Pay Now</button>
    </form>
    </div>
    <div class="col-md-6">
      <!-- Content of the second column -->
      <h1>berlangganan sekarang</h1>
      <img src="assets/coolguy.jpg" alt="coolguysjoinsmembership" height="500px" width="500px">
    </div>
  </div>
</div>
  </div>
  
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
<?php include 'footer.php.'; ?>