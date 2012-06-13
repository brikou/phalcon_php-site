PHP Alternative Site
===================

Phalcon PHP is a web framework delivered as a C extension providing high
performance and lower resource consumption.

This is a sample application for the Phalcon PHP Framework.  We wanted to create 
an alternative version of the PHP site powered by the C-extension framework.

Thanks.

Get Started
-----------

#### Requirements

To run this application on your machine, you need at least:

* PHP >= 5.3.6
* Apache Web Server with mod rewrite enabled
* Latest Phalcon Framework extension enabled (0.4.x)

Then you'll need to create the database and initialize schema:

    echo 'CREATE DATABASE php_site' | mysql -u root -p
    cat schemas/php_site.sql | mysql -u root -p php_site
