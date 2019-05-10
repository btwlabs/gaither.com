; $Id: README.txt,v 1.1 2010/06/25 09:58:12 elusivemind Exp $

README.txt - version 1.0-beta1
-------------------------------
Emma Block is a module for Drupal 6.x that provides integration with myemma.com
mailing lists via their remote access feature. It creates a block that can be
assigned to any region which will take newsletter sign-ups from users without
the need for them to create accounts. Here is some of the functionality:

  * Ability to specify multiple mailing lists and have the user select which 
    they wish to register for or allow them to register for all at once.
  * Confirms email subscriptions via Emma to make it compliant with 
    double opt-in requirements.
  
Emma Block was written by Michael R. Bagnall (ElusiveMind). Contact me at
http://drupal.org/user/350597/contact or http://www.elusivemind.com

There are no dependencies for this module. This module does require that 
cURL be installed and added to PHP.

Installation:
-------------

1) Copy the emma_block folder into your modules folder.

2) Enable the module using Administer -> Site Building -> modules

3) Add remote mailing lists via the Add Mailing List interface.

4) Place the block on any page by moving it into the appropriate region on your page.

Once installed you will have an Emma Integration Block available for placement in
any region. You can then style this as you wish.
