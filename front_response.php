<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="response.css">
  <title>Payment Receipt</title>
</head>

<body>
  <table class="wrapper">
    <tr>
      <td>
        <!-- HEADER -->
        <table class="head-wrap">
          <tr>
            <td></td>
            <td class="header container logo">
              <div class="content logo">
                <table>
                  <tr>
                    <td>
                      <img alt="iPay88 Logo" class="wistia-logo" style="height: 15rem" src="./nexus_core_logo-removebg-preview.png">
                    </td>
                  </tr>
                </table>
              </div>
            </td>
            <td></td>
          </tr>
        </table>
        <!-- /HEADER -->
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $merchantCode = $_POST['MerchantCode'];
            $paymentId = $_POST['PaymentId'];
            $refNo = $_POST['RefNo'];
            $amount = $_POST['Amount'];
            $remark = $_POST['Remark'];
            $status = $_POST['Status'];
            $currency = $_POST['Currency'];
            $errDesc = $_POST['ErrDesc'];
          }
        ?>
        <!-- BODY -->
        <table class="body-wrap">
          <tr>
            <td></td>
            <td class="container transaction-mailer">
              <div class="content">
                <div class="receipt">
                  <div class="head">
                    <h1 class="light title">Payment Receipt</h1>
                    <div class="account-item">
                      <span class="light">Merchant Code: <?php echo $merchantCode; ?></span>
                      <span class="item-detail"></span>
                    </div>
                    <div class="account-item">
                      <span class="light">Reference Number: <?php echo $refNo; ?></span>
                      <span class="item-detail"></span>
                    </div>
                  </div>

                  <div class="divider">
                    <div class="message">
                      <?php
                        if ($status == '1') {
                        ?>
                        <h1 class="emphasis">Thank you for your business.</h1>
                        <p>The credit card ending in <em>XXXX</em> has been successfully charged $XXX.XX. A copy of this receipt is also in your email.</p>
                          <p>If you have any questions, please let us know. We'll get back to you as soon as we can.</p>
                          <p>Regards,<br><a href="mailto:operations@nexuscoretechnologies.com">operations@nexuscoretechnologies.com</a></p>
                      <?php
                        }else{
                      ?>
                            <h1 class="emphasis" style="color: #da627d;"><?php echo $errDesc; ?></h1>
                            <p>Unfortunately, we were unable to process the payment using your credit card ending in <em>XXXX</em>. No charges were made.</p>
                            <p>Please verify your payment details and try again. If the issue persists, feel free to contact our support team for assistance.</p>
                            <p>Regards,<br><a href="mailto:operations@nexuscoretechnologies.com">operations@nexuscoretechnologies.com</a></p>
                      <?php
                        }
                      ?>
                    </div>
                  </div>

                  <?php
                    if ($status == '1') {
                  ?>
                    <div class="billing">
                      <div class="divider">
                        <div class="grand-total">
                          <strong class="section-label">Total</strong>
                          <strong class="total"><?php echo $currency; ?> <?php echo $amount; ?></strong>
                        </div>
                      </div>
                    </div>

                    <div class="foot">
                      <p><strong>You are all set.</strong> Your card has been charged, and no further action is required on your part.</p>
                    </div>
                  <?php
                      }
                  ?>


                </div>
              </div>
            </td>
            <td></td>
          </tr>
        </table>
        <!-- /BODY -->
      </td>
    </tr>
  </table>
</body>
</html>
