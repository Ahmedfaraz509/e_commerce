<?php
/**
 * ShopVerse mail configuration.
 *
 * WHY YOU WERE NOT RECEIVING EMAILS:
 *   The old setting was 'mode' => 'log', which never sends anything - it only
 *   writes the email into logs/mail.log. To receive real emails you need SMTP.
 *
 * ---- Gmail setup (2 minutes) ----
 * 1. Google Account -> Security -> turn ON 2-Step Verification.
 * 2. Security -> App passwords -> create one (name it "ShopVerse").
 * 3. Put YOUR gmail address in 'user' and the 16-character app password in
 *    'pass' (NOT your normal Gmail password; remove the spaces).
 * 4. Keep 'mode' => 'smtp'.
 * 5. XAMPP: make sure `extension=openssl` is enabled in php.ini, then restart Apache.
 *    If you get an SSL/certificate error on localhost only, set 'verify_ssl' => false.
 *
 * mode:
 *   'smtp' -> real emails through an SMTP server (works on XAMPP).
 *   'log'  -> nothing is sent; the email is only written to logs/mail.log.
 *   'mail' -> PHP mail(); does not work on XAMPP (no mail server).
 *
 * Do not commit real credentials to GitHub.
 */
return [
  'mode' => 'smtp',                      // 'smtp' | 'log' | 'mail'

  'from' => 'your@gmail.com',            // same address as smtp 'user' for Gmail
  'from_name' => 'ShopVerse',

  'smtp' => [
    'host' => 'smtp.gmail.com',
    'port' => 587,                       // 587 = STARTTLS, 465 = SSL
    'secure' => 'tls',                   // 'tls' for 587, 'ssl' for 465, '' for none
    'user' => 'your@gmail.com',          // <-- your Gmail address
    'pass' => 'your-16-char-app-password', // <-- Gmail App Password
    'timeout' => 20,
    'verify_ssl' => true,                // set false only if localhost gives a certificate error
  ],

  // Keep a copy of every email in logs/mail.log (dev only - contains links!).
  'always_log' => true,
];
