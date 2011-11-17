# darkFuture theme for pluxml

This repository contains an entire theme for Pluxml.
I used it previously as main theme for my personal website, and still use it locally.

The theme is pretty simple, but can be further updated without any problem, as it was designed to be generic. 

The latest release of this theme can be found at https://github.com/jlengrand/pluxml_theme_darkFuture.
Another way to download is on [Pluxml website](http://ressources.pluxml.org/?theme126/theme-dark-future)

[Here is what the theme should display once installed](http://www.lengrandlambert.fr/pluxml/513/)


## Installation

To use this theme, you will need Pluxml 5.1.2 at least.
Pluxml is a web software (CMS) that can be used to create a nice website or blog.
One of its huge advantages is that it does not need any database, as it is only based on xml. 

To quote from its author : 
"PluXml is a lightweight CMS powered by PHP5 and XML"

You can learn more about pluxml on the [website](http://www.pluxml.org), or in [github](https://github.com/benjamin-pierre/pluxml)

Once Pluxml is installed on your computer, simply move the darFuture to the themes folder of your pluxml installation. 
Then, select the theme as your default in your [administration menu](http://dl.dropbox.com/u/4286043/00_Website/03_Images/pluxml_theme_admin.png) (it should be in display settings).


## Hints 

**Display Images :**

In order to display images, you may have to change links in the info.php file of the theme. 
This file is designed to regroup all your webs links, whether internal or externals. 

To add a new href in your website, there are two simple steps :
Add a new line in the info.php file :

```Php
define('NEW_WEBSITE', "http://www.lengrandlambert.fr/");
```

Then, you simply add in the php files of your theme :
 
```Php
<a href="<?php echo NEW_WEBSITE ?>">Here is the link!</a>
```

This way, the only file to be changed in your website if a link changes is info.php

**Admin access:**

You can access to your administration menu at http://pluxmlroot/core/admin
Another way is to click on the **right bottom corner** of the footer in your pages; an hyperlink is hidden there :)

## Copyright

Copyright © 2011 Julien Lengrand-Lambert

Files are licensed under the under the GNU General Public License. See the file COPYING for details.
You are free to use it as you wish, as long as you modify it in some way and change the text. 

## Contact

I would enjoy having feedback if you use this theme. 
Feel free to mail me for any comment or request. 

You can contact me at jlengrand at gmail dot com, or in my [current website](http://www.lengrandlambert.fr)


NOTE: The progTips.html file mentionned in info.php is part of another project, called progTips.
The last version should be retrieved there and uploaded on the FTP separately.
You can find the last version of this file [here](http://www.lengrandlambert.fr/progTips.html)
