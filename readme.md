# Turnkey #
**Contributors:** [bfocht](https://profiles.wordpress.org/bfocht)  
**Tags:**              [one-column](https://wordpress.org/themes/tags/one-column/), [two-columns](https://wordpress.org/themes/tags/two-columns/), [three-columns](https://wordpress.org/themes/tags/three-columns/), [left-sidebar](https://wordpress.org/themes/tags/left-sidebar/), [right-sidebar](https://wordpress.org/themes/tags/right-sidebar/), [flexible-header](https://wordpress.org/themes/tags/flexible-header/), [custom-background](https://wordpress.org/themes/tags/custom-background/), [custom-colors](https://wordpress.org/themes/tags/custom-colors/), [custom-header](https://wordpress.org/themes/tags/custom-header/), [custom-menu](https://wordpress.org/themes/tags/custom-menu/), [custom-logo](https://wordpress.org/themes/tags/custom-logo/), [editor-style](https://wordpress.org/themes/tags/editor-style/), [featured-image-header](https://wordpress.org/themes/tags/featured-image-header/), [featured-images](https://wordpress.org/themes/tags/featured-images/), [footer-widgets](https://wordpress.org/themes/tags/footer-widgets/), [full-width-template](https://wordpress.org/themes/tags/full-width-template/), [post-formats](https://wordpress.org/themes/tags/post-formats/), [rtl-language-support](https://wordpress.org/themes/tags/rtl-language-support/), [sticky-post](https://wordpress.org/themes/tags/sticky-post/), [theme-options](https://wordpress.org/themes/tags/theme-options/), [threaded-comments](https://wordpress.org/themes/tags/threaded-comments/), [translation-ready](https://wordpress.org/themes/tags/translation-ready/), [e-commerce](https://wordpress.org/themes/tags/e-commerce/)  
**Requires at least:** 4.6  
**Tested up to:**      5.2  
**Requires PHP:**      5.4  
**Stable tag:**        1.2.4  
**License:**           GPL-2.0  
**License URI:**       https://www.gnu.org/licenses/gpl-2.0.html  

Turnkey is a Primer child theme with a business-oriented designed for the [Reseller Store plugin](https://wordpress.org/plugins/reseller-store/).

[![Build Status](https://travis-ci.org/Resellers/wp-turnkey-theme.svg?branch=master)](https://travis-ci.org/Resellers/wp-turnkey-theme) [![devDependencies Status](https://david-dm.org/Resellers/wp-turnkey-theme/master/dev-status.svg)](https://david-dm.org/Resellers/wp-turnkey-theme/master?type=dev) [![License](https://img.shields.io/badge/license-GPL--2.0-brightgreen.svg)](https://github.com/Resellers/wp-turnkey-theme/blob/master/license.txt) [![PHP >= 5.4](https://img.shields.io/badge/php-%3E=%205.4-8892bf.svg)](https://secure.php.net/supported-versions.php) [![WordPress >= 4.6](https://img.shields.io/badge/wordpress-%3E=%204.6-blue.svg)](https://wordpress.org/download/release-archive/)  

## Description ##

Turnkey is a Primer child theme with a business-oriented designed for the [Reseller Store plugin](https://wordpress.org/plugins/reseller-store/).

[![Play video on YouTube](https://img.youtube.com/vi/us3y7jK55YQ/maxresdefault.jpg)](https://www.youtube.com/watch?v=us3y7jK55YQ)

The child theme adds the following features:
* 23 additional color schemes.
* Utility menu above primary navigation for shopper account management, support phone number, help link, and cart link.
* Additional templates for Reseller Store single product and list product (search, archive).
* Additional CSS to style Reseller Store widgets and short codes.

**Features**

* Responsive Layout
* Color Scheme Presets
* Customize Colors
* Customize Fonts
* One, Two, and Three Column Layouts
* Fixed & Fluid Widths
* Header Image Widget Area
* Social Links Menu
* WooCommerce-Ready
* Available in 29 Languages
* RTL Language Support

**Contributing:**

You can fork and contribute to Turnkey Storefront by visiting [our public repo on GitHub](https://github.com/Resellers/wp-turnkey-theme).

## Installation ##

1. In your admin panel, nagivate to **Appearance > Themes** and click the **Add New** button.
2. Type **Turnkey** in the search form and press the **Enter** key on your keyboard.
3. Click the **Activate** button to begin using Turnkey on your website.
4. Go to Plugins and add the  Reseller Store Plugin and activate.
5. In your admin panel, navigate to **Appearance > Customize**.
6. Put the finishing touches on your website by adding a logo, header image, and custom colors.

## Copyright ##

Turnkey WordPress theme
Turnkey is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

Turnkey is a child theme of Primer:

Primer WordPress theme, Copyright 2017 GoDaddy Operating Company, LLC.
Primer is distributed under the terms of the GNU GPL.
Source: https://github.com/godaddy/wp-primer-theme

## Changelog ##
### 1.2.3 ###
* Fix: Scroll on mobile nav menu.
* Fix: Width on mobile nav menu.
* Add: Close button x on mobile nav menu.

### 1.2.2 ###
* Update: Update response primary menu
* Update: Center privacy policy on footer
* Update: Add shortlinks for youtube and amazon social media icons

### 1.2.1 ###
* Fix: social media menu in the footer

### 1.2.0 ###
* Update: Replace icons to match standard storefront
* Update: Change screen size breakpoints to match standard storefront
* Update: Utility bar
* Fix: Utility bar tray z-index
* Fix: Remove add to cart button on domain registration

### 1.1.4 ###
* Fix: Price display on product
* Fix: Search form on safari and firefox
* Fix: Support phone number display
* Update: CSS changes for form and header

### 1.1.3 ###
* Update: Fix formatting for single product post

### 1.1.2 ###
* Update: Fix styles for search form
* Update: Add css class for svg icons

### 1.1.1 ###
* Update: Usage of esc_attr and esc_html
* Check: Test admin notice dismiss in major browsers
* Props to @poena for theme review

### 1.1.0 ###
* Fix: use esc_attr for css class variable
* New: Add NUX banner for Reseller Store plugin
* New: Add theme check to build

### 1.0.12 ###
* Fix: Remove navigation.min.js that Theme Sniffer plugin kept complaining about

### 1.0.11 ###
* Fix: Issues found with Theme Sniffer plugin
* Props to @zishlife for theme review

### 1.0.10 ###
* Fix: Missing icon and font references on sticky post
* Fix: Incorrect license information for Font Awesome 5
* Fix: Use theme slug for text domain
* Fix: Prefix functions with theme slug
* Fix: Move support phone number customizer option to functions.php so that it loads correctly
* Fix: Missing translations in top-nav
* Fix: Escape output on turnkey_storefront_support_phone_classes filter
* Props to @poena for theme review

### 1.0.8 ###
* New: Introduce styles for Gutenberg.

### 1.0.7 ###
* Updated: Set product to fixed size when displayed in a list
* Fixed: Style in header

### 1.0.6 ###
* Fix: Make one column layout full width
* Fix: Remove borders on widgets
* Fix: Update palettes

### 1.0.4 ###
* Fix: html bug fix in topnav

### 1.0.3 ###
* Updated: brand and color palette updates

### 1.0.2 ###
* Updated: thumbnail, hero image, and video
* Change: tweaks some css based on images updates
* Change: login to redirect to account

### 1.0.1 ###
* Fix: add single product to post loop

### 1.0.0 ###
* Initial release.

## Resources ##
* Stock photography: Pixabay, License: Creative Commons Zero, Source: https://pixabay.com/photo-2386034/
