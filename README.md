📦 Language to Currency Auto-Switcher - Documentation

A professional automation module for PrestaShop that synchronizes the store's currency with the active browsing language. This ensures a consistent user experience and prevents pricing mismatches.

📌 Features
Automatic Synchronization: Instantly switches currency based on the selected language:

Hungarian (HU) ➡️ HUF

Romanian (RO) ➡️ RON

Cart Protection: Updates the currency of the active shopping cart to ensure price consistency during checkout.

Google Merchant Center Ready: Helps search engine bots index localized URLs with the correct currency (e.g., HUF for /hu/ links).

Zero-Configuration: No admin setup required. Install it, and it works immediately.

Session Persistent: Uses the PrestaShop cookie system to remember the user's currency throughout their visit.

🚀 Installation
Prepare the ZIP: Create a zip file named languagecurrencyswitch.zip. The folder structure must be:

Plaintext

languagecurrencyswitch/
├── languagecurrencyswitch.php
├── logo.png
└── README.md
Upload:

Go to PrestaShop Admin > Modules > Module Manager.

Click Upload a module and select your .zip file.

Activation: The module activates automatically upon installation.

⚙️ Requirements
ISO Codes: Your currencies must be set to HUF and RON in International > Localization > Currencies.

Languages: Hungarian and Romanian must be enabled in your store.

Compatibility: Supports PrestaShop 1.7.x, 8.x, and 9.x.

📝 Release Notes
Version 1.0.0 (January 20, 2026)
Initial Release: Complete automation logic for language-currency pairing.

Core Functionality:

Automatic switching to HUF when the Hungarian language is active.

Automatic switching to RON when the Romanian language is active.

Persistent Storage: Integrated with PrestaShop's cookie system to remember user preferences throughout the session.

Cart Protection: Added logic to update the id_currency within the customer's active cart to ensure pricing consistency during checkout.

Compatibility: Tested and verified for PrestaShop 1.7, 8.0, and 9.0 systems.

Author: markoo

License: MIT
