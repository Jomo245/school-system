<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="payment.php?v=<?php echo time(); ?>">
  <title>Payment</title>
</head>
<body>
  <div class="fee-container">

    <!-- Payment Form -->

    <div class="mpesa-box">
      <form action="">
        <h2><i class="fa-solid fa-mobile-screen"></i> M-Pesa Payment</h2>

        <label>Phone Number</label>
        <input type="text" id="phone" placeholder="e.g. 0712345678">

        <label>Amount (KES)</label>
        <input type="number" id="amount" placeholder="Enter amount">

        <button type="button"onclick="startSTK()">Pay Now</button>
      </form>
    </div>

    <!-- Popup -->
    <div class="popup" id="popup">
      <div class="popup-content">
        <i class="fa-solid fa-spinner fa-spin"></i>
        <p id="popup-text">Sending STK Push...</p>
      </div>
    </div>
    
  </div>
<script src="index.js?v=<?php echo time(); ?>"></script>
</body>
</body>
</html>