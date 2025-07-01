<?php
// index.php - Main homepage with tab layout
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Company Homepage</title>
  <link rel="stylesheet" href="style.css" />
  <script src="scripts.js" defer></script>
</head>
<body>
  <div class="header">
    <img src="assets/logo1.png" alt="Logo 1" class="logo"/>
    <div class="header-text">Your Company Name</div>
    <img src="assets/logo2.png" alt="Logo 2" class="logo"/>
  </div>

  <div class="tabs">
    <button class="tab-button" onclick="showTab('location')">Our Location</button>
    <button class="tab-button" onclick="showTab('autoland')">Autoland Catalogues</button>
    <button class="tab-button" onclick="showTab('wheelmaster')">Wheelmaster Catalogues</button>
    <button class="tab-button" onclick="showTab('inquiries')">Inquiries</button>
    <button class="tab-button" onclick="showTab('profile')">Corporate Profile</button>
  </div>

  <div class="tab-content" id="location">
    <h2>Our Location</h2>
    <p>Placeholder map or contact location info here.</p>
  </div>
  <div class="tab-content" id="autoland">
    <h2>Autoland Catalogues</h2>
    <p>Placeholder images or download links for Autoland catalogues.</p>
  </div>
  <div class="tab-content" id="wheelmaster">
    <h2>Wheelmaster Catalogues</h2>
    <p>Placeholder images or download links for Wheelmaster catalogues.</p>
  </div>
  <div class="tab-content" id="inquiries">
    <h2>Inquiries</h2>
    <form action="mail.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <textarea name="message" placeholder="Your Message" required></textarea>
      <button type="submit">Send Request</button>
    </form>
  </div>
  <div class="tab-content" id="profile">
    <h2>Corporate Profile</h2>
    <p>Company mission, values, and profile overview.</p>
  </div>

  <div class="contact-table">
    <table>
      <tr><th>Contact</th><th>Details</th></tr>
      <tr><td>Phone</td><td>+968 1234 5678</td></tr>
      <tr><td>Email</td><td>contact@example.com</td></tr>
      <tr><td>Address</td><td>Muscat, Oman</td></tr>
    </table>
  </div>
</body>
</html>
