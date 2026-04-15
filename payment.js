function startSTK() {
      let phone = document.getElementById("phone").value;
      let amount = document.getElementById("amount").value;

      if (!phone || !amount) {
        alert("Enter phone and amount");
        return;
      }

      // Show popup
      document.getElementById("popup").style.display = "block";
      document.getElementById("popup-text").innerText = "Sending STK Push...";

      // Simulate delay
      setTimeout(() => {
        document.getElementById("popup-text").innerText =
          "Check your phone and enter M-Pesa PIN...";
      }, 2000);

      // Simulate success 
      setTimeout(() => {
        document.getElementById("popup-text").innerText =
          "Payment Successful ✅";

        setTimeout(() => {
          document.getElementById("popup").style.display = "none";
          alert("Payment Completed!");
        }, 1500);

      }, 5000);
    }
