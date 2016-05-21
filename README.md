A HTML filter using htmlpurifier with additional HTML5 rules.

Table of contents
=================

  * [General](#general)
  * [Installation](#installation)
    * [Composer](#composer)
  * [Usage](#usage)
  * [License](#license)
  * [Author](#author)


General
=======
This package helps purifying HTML markup from unwanted one, like script tags or similar.

It uses the [https://github.com/ezyang/htmlpurifier](ezyang/htmlpurifier) package with some added HTML5 rules. 

Installation
============

Composer
--------
Add ```"kaishiyoku/laravel-html-purifier": "1.*"``` to your **composer.json**
by running ```composer require kaishiyoku/laravel-html-purifier```.

Update your dependencies by running ```composer update```.

Usage
=====
```
$dirtyHtml = '<a href="#">Dirty HTML<script type="text/javascript">alert('purified?');</script></a>';

$purifier = new HtmlPurifier();

$purifiedHtml = $purifier->purify($dirtyHtml);
```

**Output:**
```
<a href="#">Dirty HTML</a>
```

If you have any issues feel free to open a ticket.

License
=======
MIT (https://github.com/Kaishiyoku/laravel-menu/blob/master/LICENSE)


Author
======
Twitter: [@kaishiyoku](https://twitter.com/kaishiyoku)  
Website: www.andreas-wiedel.de