OAuth-EveSSO
===========================

SSO provider for HybridAuth based plugins, developed to be a replacement for the current Foursquare plugin to OAuth

config.php may be editable to add a config field to the admin interface for eve

https://wordpress.org/plugins/wordpress-social-login/

Provided with no warranty

Rename the EVESSO.php to Foursquare.php, you are replacing an existing plugin since OAuth isnt easily expandable

Put Foursquare.php file into /projectsteak/components/com_oauth/libraries/Hybrid/Providers - replacing the current one

Then turn it on. you'll need to fill the details into the foursquare field from developers.eveonline.com where you'll have created a new application.

The callback url is like http://yoursite.com/index.php?option=com_oauth&task=login.endpoint
you'll find yours from clicking 'Where do I get this info?' after turning it on.

