# Language to Currency Auto-Switcher for PrestaShop

This module automatically synchronizes the store's currency with the selected language. It ensures that customers (and search engine bots) always see prices in the correct currency based on the language they are browsing.

## 📌 Features
- **Instant Switching**: Automatically changes currency when a user switches languages (HU -> HUF, RO -> RON).
- **Cart Synchronization**: Updates the currency of the active cart to prevent checkout errors.
- **SEO & Google Friendly**: Helps Google Merchant Center index the correct prices for specific localized URLs.
- **Zero Configuration**: Works out of the box using PrestaShop's standard ISO codes.
- **Lightweight**: Optimized to run before the page renders, ensuring no visible lag for the user.

## 🚀 Installation

1. **Prepare the ZIP**: Create a zip file named `languagecurrencyswitch.zip`. The internal structure must be:
   ```text
   languagecurrencyswitch/
   ├── languagecurrencyswitch.php
   ├── logo.png
   └── README.md
