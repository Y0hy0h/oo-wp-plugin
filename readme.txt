=== onOffice for WP-Websites ===
Contributors: jayay, anniken1
Tags: real estate, onoffice
Requires at least: 4.6
Tested up to: 5.7
Requires PHP: 7.0
License: AGPL 3.0
License URI: https://www.gnu.org/licenses/agpl-3.0.html

Integrate real estates, contact forms and contact persons from the onOffice Software into your WordPress website.

== Description ==

Integrate real estates, contact forms and contact persons from the onOffice Software into your website. Thanks to shortcodes, the plugin is compatible with every WordPress theme.

The plugin includes three modules:

* real estates
* addresses
* forms

Using a short code, you bring real estates, addresses or forms to your website - you are as flexible in design as you are used to from onOffice.

The user-friendly plugin enables a quick link between onOffice and your WordPress page: Present real estate and your team on the website and generate leads via forms. You stay in control and are 100% flexible.

= Real estate =
Create lists, design the real estate presentation and offer synopsis for downloading with a few easy steps.

* **Publication**: One click in the software is enough to publish the property on your WordPress website.
* **List view**: Present your properties in clear lists. It is entirely up to you which properties are represented. The lists can be inserted anywhere on the website using short codes.
* **Detailed view**: Comfortably structure the detail view with checkboxes and drag & drop and easily determine which information is displayed.

= Addresses =
The website is your business card on the internet. Create trust with a professional self-presentation.

* **Team presentation**: The address module accesses the data of the employees. The address display is ideal for presenting the team.

= Forms =
Simplify data maintenance: The information from forms is automatically transmitted to onOffice by the plugin.

* **Contact**: Classic contact form in which the user enters his message and contact information.
* **Interested parties**: Proactively serve prospective customers! The prospective customer states the contact data and their search desire. Address and search criteria are created directly in onOffice and provided with suitable offers.
* **Owner**: Acquire new orders with your website! In addition to the contact details, the owner provides information about the property. Address and property can be processed immediately in onOffice.
* **Search for interested parties**: Convince potential sellers! Show that you have suitable prospects in your inventory. The interested parties are displayed together with the search criteria (but without personal data).

= Further features =
The plugin offers further practical functions with which you can further professionalize your web presence.

* User-friendly watch list or favorites function
* Two map types: OpenStreetMap or Google Maps
* Show all linked media per address / property


== Installation ==

= Automatic =
Install the plugin from the plugins back-end page of your WordPress website.

= Manual =
Go to our page on the [WordPress Plugin Directory](https://wordpress.org/plugins/onoffice-for-wp-websites/) and [download the zip](https://downloads.wordpress.org/plugin/onoffice-for-wp-websites.zip). Upload the new zip to your WordPress website.

= Create the directory for individual templates =
[Download the zip](https://downloads.wordpress.org/plugin/onoffice-for-wp-websites.zip) and copy the contents of the `templates.dist` directory to a subfolder `templates` of a new plugin folder named `onoffice-personalized`.

Start editing inside the `onoffice-personalized` folder.


**IMPORTANT**: Although it is safe to disable the plugin, DELETING IT WILL WIPE ALL PLUGIN-RELATED DATA FROM THE DATABASE. WE DO NOT PROVIDE ANY WARRANTY FOR DATA LOSS!

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

= 2.19.1 =

**Changes**

* The estate status is now also displayed in the detail view.

= 2.19.0 =

**Changes**

* WP-Plugin - communication with the onOffice API only takes place in the relevant cases

= 2.18.2 =

**Fixes**

* Fix number fields' default values allowing text

= 2.18.1 =

**Fixes**

* Fix for the radius search of similar properties

= 2.18.0 =

**New**

* The templates and translations can now be located in a new folder called `onoffice-theme/languages` and `onoffice-theme/templates` inside the WP theme, respectively.

= 2.17.1 =

**Fixes**

* The information on whether the newsletter checkbox was checked is now represented in the email.

= 2.17.0 =

**New**

* Pagination can now be handled by the theme or the plugin. 

= 2.16.0 =

**Changes**

* Both contact form as well as interested party form lead to an e-mail with an OpenImmo Feedback XML attachment file.

= 2.15.0 =

**New**

* Form inputs can now have individual captions. Those can be set in the form-settings in the back-end.

= 2.14.1 =

**Fixes**

* minor fixes

= 2.14.0 =

**New**

* Add an option to duplicate listViews.

= 2.13.3 =

**Fixes**

* No e-mail when select newsletter-option *

= 2.13.2 =

**Changes**

* Hide configuration option "Systembenutzer (Adresse ist mit Benutzer verknüpft)" in contact type configuration *

= 2.13.1 =

**Changes**

* Avoid display of Faktura fields in WP-Plugin *

= 2.13.0 =

**New**

* API-credentials can now be stored in an encrypted manner.

= 2.12.1 =

**Changes**

* Remove field `krit_bemerkung_oeffentlich` from applicant search forms, since it can't be used as intended.
* Increase "Tested up to" in readme.txt to WP 5.7.

= 2.12.0 =

**New**

* Automatically creates a default contact form during plugin setup.

= 2.11.0 =

**New**

* PDF brochures can be prevented from being indexed by Google bot. In order to configure this, a new checkbox was added in the settings page. Exclusion is being achieved through the HTTP header "X-Robots-Tag: noindex".

= 2.10.3 =

**Fixes**

* Reverts the changes from release v2.10.2 due to backwards-compability concerns.

= 2.10.2 =

**Fixes**

* The visitor can no longer visit the detail page of a reference estate.
* The default list views and favorites list views exclude reference estates.

= 2.10.1 =

**Fixes**

* Adds changes to composer.lock so that the new dependency (select2) is acutally included in the plugin.
* Fixes faulty HTML <option> tag generated by fields.php.

= 2.10.0 =

**Changes**

* select2 is being used for select fields in the front-end. A current copy of the shipped fields.php needs to be copied into the templates directory for this change to take effect.


= 2.9.0 =

**New**

* The similar estates view has its own tab in the back-end. The fields to be shown in the similar estates view can be configured and are no longer hard-coded.

= 2.8.3 =

**Changes**

* Reference estates, reserved and sold ones are not being shown in the similar estates view anymore

= 2.8.2 =

**Fixes**

* Fix reflection problem in di and php 7.0

**Changes**

* Update development and deployment tools

= 2.8.1 =

**Fixes**

* Fix translations for forgotten lazy translated strings 

= 2.8.0 =

**Changes**

* Changes of the text domain

= 2.7.18 =

**Fixes**

* Fix for similar estates in foreign language content

= 2.7.17 =

**Fixes**

* Fixes for WordPress 5.6

= 2.7.16 =

**Fixes**

* Fix of incorrect value for empty real estate fields

= 2.7.15 =

**Fixes**
 
* Fix of pagination in static pages

= 2.7.14 =

**Fixes**

* Fix of user defined sort in the real-estates list configuration

= 2.7.13 =

**Fixes**

* Fix of missing contact photo in the detail estate view setting.

= 2.7.12 =

**Fixes**

* Fix pagination problem when using WP 5.5

= 2.7.11 =

**Fixes**

* Fix WPML-Language selector in the real-estate-detail view.


== Arbitrary section ==

= Development =

Development takes place in our [Github repository](https://github.com/onOfficeGmbH/oo-wp-plugin).

= Legal =

onOffice Terms and Conditions: https://en.onoffice.com/terms-and-conditions.xhtml
