<?php

error_reporting(E_ALL);

require 'app/config/config.php';

$str = '<h1>PHP 3.0.6 has been released!</h1>
<p>
 <span class="newsdate">[24-Dec-1998]</span>
 Merry Christmas! 3.0.6 is ready to go. This is mostly a maintenance release.
 Some new modules make their first apperance in this version. Support for Adobe
 PDF and FDF as well as XML and an initial Interbase module are now available.
 If you need any of these features, or if you see something in the ChangeLog
 that might apply to you, then upgrade.
</p>

<hr />

<h1>
 PHP/MySQL ... Two great things that go great together<br />
 Combination wins Database of the Year Award at Web98
</h1>
<p>
 <span class="newsdate">[22-Jun-1998]</span>
 "The substance of the Web is more and more residing in databases, and there
 are a variety of methods used to generate Web pages. This year, we selected a
 pair of "free software" tools that work together quite nicely as a platform
 for building dynamic content. The award is also a tribute to the Open Source
 initiative; both products are used, developed and supported by interlocking
 communities of people on the Net."
</p>

<hr />

<h1>PHP 3.0 Released</h1>
<p>
 <span class="newsdate">[06-Jun-1998]</span>
 PHP 3.0 is finally here! After 10 months of development PHP Version 3.0
 is ready for production environments. Coupled with the release of the
 final version of Apache-1.3.0 today, the combination provides an
 unbeatable web hosting platform suitable for both small and large web
 sites.
</p>
<p>
 PHP 3.0 is the latest evolution of the PHP/FI 2.0 language and it offers
 some dramatic enhancements. It is more than twice as fast, it uses less
 memory, it has a more consistent language implementation and a much wider
 set of expressions and language features than PHP/FI 2.0. An included
 conversion program will help you migrate your PHP 2 scripts to PHP 3. 
</p>
<p>
 <a href="http://cvs.php.net/co.php/phpweb/Attic/release-3.0.txt?sa=1&amp;login=2&amp;r=1.2">Read
 the full anouncement</a>.
</p>

<hr />

<h1>PHP Meaning Vote</h1>
<p>
 <span class="newsdate">[18-Apr-1998]</span>
 <strong>PHP: Hypertext Preprocessor</strong> was chosen as the official
 meaning of the PHP acronym with 53% of the votes. The possible options
 were PHP HTML|Hypermedia|Hypertext Preprocesor.
</p>

<hr />

<h1>New Look</h1>
<p>
 <span class="newsdate">[23-Mar-1998]</span>
 The PHP site has been given a serious facelift recently.
 The design is courtesy of Colin Viebrock at Private World
 Communications. Please let us know of any problems
 with the site by sending a message to the webmasters.
</p>

<hr />

<h1>Bug Database Live</h1>
<p>
 <span class="newsdate">[25-Jan-1998]</span>
 Report or check on bugs in the PHP 3 Bug Database.
</p>

<hr/>

<h1>The Mars Polar Lander and PHP</h1>
<p>
 <span class="newsdate">[03-Dec-1999]</span>
 It is scheduled to land on Mars at 12:14 PM Pacific time December 3 and PHP is helping
 to bring the experience to the world. The web site <a href="http://www.marspolarlander.com">
 www.marspolarlander.com</a> is powered by a combination of PHP, MySQL and Perl scripts.
 <a href="http://www.netapp.com/tech_library/3071.html">There is an architecture
 description here</a>. This architecture document doesn\'t say very much about PHP other
 than the fact that PHP is used as the Web scripting language, but it has an interesting
 description of how they built a large scaleable system and it proves nicely that PHP
 is up to the task of being part of such a large-scale deployment.
</p>

<hr />

<h1>PHP 4.0 Beta 3 is out!</h1>
<p>
 <span class="newsdate">[17-Nov-1999]</span>
 Three months after PHP 4.0 Beta 2 was released, Beta 3 is finally here.
 This release has a lot of changes, including a "pure" automake/libtool-based
 build system, Java support and lots of other stuff.
 All 4.0 beta users are encouraged to upgrade.
</p>

<hr />

<h1>LinuxWorld Editors\' Choice Awards</h1>
<p>
 <span class="newsdate">[31-Jul-1999]</span>
 PHP is a Finalist in the LinuxWorld Editors\' Choice Awards to be presented
 on Aug.11 in San Jose, CA. PHP is up against QT from Troll Tech in the
 "Programming Library/Tools" category.
</p>

<hr />

<h1>PHP 4.0 Beta 1 is out!</h1>
<p>
 <span class="newsdate">[23-Jul-1999]</span>
 The long awaited beta of the new generation of PHP is here.
</p>

<hr />

<h1>PHP Tutorials at O\'Reilly Open Source Software Convention</h1>
<p>
 <span class="newsdate">[02-Jul-1999]</span>
 Rasmus Lerdorf and Jim Winstead will be giving a pair of three-hour
 tutorials at <a href="http://conferences.oreilly.com/">O\'Reilly\'s
 Open Source Software Convention</a> on August 21, 1999, in Monterey,
 California.
</p>

<hr />

<h1>PHP 3.0.11 has been released!</h1>
<p>
 <span class="newsdate">[27-Jun-1999]</span>
 Hot on the heels of 3.0.10, along comes another release
 to fix a few problems on Windows and some Unix platforms. If 3.0.10
 worked for you, there\'s probably no need to upgrade. 3.0.10 featured
 bug fixes, including the last of the fsockopen() and URL fopen()
 problems, we hope. The dbm database abstraction layer had the mode
 flag for dba_open() brought into line with dbm_open(), which means
 "w" will not create a non-existent database (use "c" instead). The
 documentation has also been moved into its own repository, and the
 generated HTML documentation is included in the tar.gz instead of the
 SGML source. For a more complete list of all of the changes, see the
 ChangeLog.
</p>

<hr />

<h1>PHP 3.0.9 has been released!</h1>
<p>
 <span class="newsdate">[06-June-1999]</span>
 More bug fixes, including many in the OCI8 module, and an important fix
 for fgets() on socket connections. Also added support for PCRE
 (Perl-compatible Regular Expressions library), t1lib (PostScript Type-1
 fonts with GD), and mhash. For a more complete list of all of the
 changes, see the ChangeLog.
</p>

<hr />

<h1>PHP Related Books are Available</h1>
<p>
 <span class="newsdate">[12-May-1999]</span>
 Get ready for a wave of PHP related books to hit the shelves!
 We don\'t know exactly how many there are going to be yet, but
 two are already available.
</p>

<hr />

<h1>Zend has been announced</h1>
<p>
 <span class="newsdate">[04-Jan-1999]</span>
 <strong>Zend</strong>, a new optimized engine for PHP has been
 <a href="http://www.zend.com/PR.html">announced</a>. Visit the
 <a href="http://www.zend.com/">Zend Web site</a> for more
 information!
</p>

<hr />

<h1>PHP 4.0.4 Released</h1>
<p>
 <span class="newsdate">[19-Dec-2000]</span>
 This release includes improvements for a large number of defects
 and numerous enhancements in the PHP core, the language implementation and
 extensions. <a href="http://www.php.net/downloads.php">Download</a>,
 <a href="ChangeLog-4.php#4.0.4">ChangeLog</a>.
</p>

<hr />

<h1>PHP 3.0.18 released</h1>
<p>
 <span class="newsdate">[21-Oct-2000]</span>
 PHP 3.0.18 was released. This is a bug-fix release, including fixes for file
 uploads and a backported imagetypes() function from PHP 4.0. The ChangeLog
 contains a full list of changes.
</p>

<hr />

<h1>Patch Level 1 available for PHP 4.0.3</h1>
<p>
 <span class="newsdate">[15-Oct-2000]</span>
 Due to two problems discovered in PHP 4.0.3, <a href="http://www.php.net/downloads.php">PHP 4.0.3pl1
 is now available</a>. This release fixes an issue that prevented the
 Apache php_value mechanism from working correctly with .conf files, and a
 memory leak that was discovered in the module versions of PHP.
</p>

<hr />

<h1>PHP 4.0.3 Released</h1>
<p>
 <span class="newsdate">[11-Oct-2000]</span>
 <a href="http://www.php.net/downloads.php">Version 4.0.3</a> includes several security-oriented
 fixes and enhancements, as well as several new features and bug fixes.
 It is strongly recommended for all users of PHP to upgrade to this version.
 You can read the <a href="http://www.php.net/ChangeLog-4.php#4.0.3">changelog</a> here.
</p>

<hr />

<h1>Manual Search Tip</h1>
<p>
 <span class="newsdate">[06-Oct-2000]</span>
 You can now go directly to PHP manual pages with a URL such as
 <a href="http://php.net/strlen">php.net/strlen</a>.
</p>

<hr />

<h1>PHP 4.0.2 Released!</h1>
<p>
 <span class="newsdate">[29-Aug-2000]</span>
 The new version features new functions, many bug fixes, and increased
 performance. <a href="http://www.php.net/downloads.php">Download now!</a> You can read the
 <a href="http://www.php.net/ChangeLog-4.php#4.0.2">changelog</a> here.
</p>

<hr />

<h1>PHP 4.0.1 Patch Level 2 available</h1>
<p>
 <span class="newsdate">[30-June-2000]</span>
 <a href="http://www.php.net/downloads.php">PHP 4.0.1pl2</a> addresses two bugs that were
 discovered in PHP 4.0.1, that prevent error_reporting() and readdir()
 from working properly.
</p>

<hr />

<h1>PHP 4.0.1 Released!</h1>
<p>
 <span class="newsdate">[28-June-2000]</span>
 The first maintenance release for PHP 4.0 is out. The new release features
 increased stability under Windows, improved error handling, several new features
 and lots of bug fixes. (the full list of changes is
 <a href="http://www.php.net/ChangeLog-4.php#4.0.1">available</a>) It\'s a recommended upgrade
 for all PHP users. <a href="http://www.php.net/downloads.php">Download now!</a>
</p>

<hr />

<h1>PHP 4.0.0 Released!</h1>
<p>
 <span class="newsdate">[22-May-2000]</span>
 It\'s here, it\'s ready, and it has the long awaited \'Release\' tag. The successor of
 PHP 3.0 has finally been released. At this point, everyone is encouraged to begin
 upgrading their systems to use this version. <a href="http://www.php.net/downloads.php">Download it
 now!</a>
</p>

<hr />

<h1>PHP 3.0.16 released</h1>
<p>
 <span class="newsdate">[05-Apr-2000]</span>
 PHP 3.0.16 was released. This is mostly a bug fix release which adds support for
 gd-1.8, ucd-snmp 4.1, and high-resolution timers on OS/2. OpenBSD support has been
 improved considerably. The source package and Win32 binaries are available from the
 PHP homepage. The ChangeLog contains a full list of changes.
</p>

<hr />

<h1>Zend Optimizer released!</h1>
<p>
 <span class="newsdate">[08-Mar-2000]</span>
 <a href="http://www.zend.com">Zend Technologies</a> has announced the
 availability of the Zend Optimizer for PHP 4.0 Beta 4. The optimizer is
 available for <a href="http://www.zend.com/store/products/zend-optimizer.php">free
 download</a>
</p>

<hr />

<h1>PHP Talks at ApacheCon</h1>
<p>
 <span class="newsdate">[24-Feb-2000]</span>
 Nathan Wallace, Craig Kohtz and Tobias Ratschiller are all giving
 presentations on PHP at ApacheCon, 8-10th March 2000, in Orlando,
 Florida. The topics include sessions and authentication, advanced PHP
 techniques, migrating from ASP to PHP and web design patterns. You can
 find more information about these talks <a
 href="http://www.apachecon.com/2000/US/html/sessions.html">here</a>.
</p>

<hr />

<h1>PHP Developers\' Meeting</h1>
<p>
 <span class="newsdate">[17-Jan-2000]</span>
 On January 20th, 2000 the primary developers of PHP are meeting for a
 4-day session in Tel Aviv, Israel. The main goal is to organize the
 development effort. The developers of MySQL will also be in attendance
 to explore how the two projects can cooperate further to make the
 PHP/MySQL combination even stronger than it already is.
</p>

<hr />

<h1>PHP 3.0.13 has been released</h1>
<p>
 <span class="newsdate">[01-Jan-2000]</span>
 The long-awaited release of PHP 3.0 contains numerous bug fixes and a
 bonus of new features. Support for GNU recode, portable access to stdio
 streams, enhanced FTP support, support for Mcal and IMSP, as well as PNG
 functions for gd make this release a must for every user of PHP. The
 ChangeLog provides a complete list of changes.
</p>

<hr />

<h1>PHP 4.1.0 Released!</h1>

<p>
 <span class="newsdate">[10-Dec-2001]</span>
 <a href="http://www.php.net/downloads.php">PHP 4.1.0</a> is a key new release in the PHP 4 family.  It includes
 highly-improved performance, especially under Windows; a more security-friendly
 way of accepting form variables; output compression; and much, much more.  Read the full
 <a href="http://www.php.net/release_4_1_0.php">release announcement</a>, or check out the
 <a href="http://www.php.net/ChangeLog-4.php">changelog</a>. Windows binaries are also available.
</p>

<hr />

<h1>Windows Manual Survey Results</h1>

<p>
 <span class="newsdate">[27-Nov-2001]</span>
 After one week our Windows HTML Help Manual Survey is over now. We received nearly six hundred
 processable forms with many wishes and comments. Thanks for you all, who contributed to making
 the best help system for PHP on Windows. You can get more information about the ongoing
 project, including the detailed results of the survey at 
 <a href="http://weblabor.hu/php-doc-chm/">the project\'s own page</a>.
</p>

<hr />

<h1>PHP-GTK Documentation Update</h1>

<p>
 <span class="newsdate">[18-Oct-2001]</span>
 <a href="http://gtk.php.net/">PHP-GTK</a> 
 <a href="http://gtk.php.net/docs.php">documentation</a> is starting
 to be more filled out. The manual is now rebuilt every night and
 <a href="http://gtk.php.net/download-docs.php">downloadable versions</a> 
 of it in different formats are also available. If you have been working with
 PHP-GTK and would like to contribute to the documentation effort, please
 let us know. 
</p>

<hr />

<a href="http://www.rackspace.com/?supbid=php.net"><img src="http://static.php.net/www.php.net/images/news/rackspace.gif" alt="Rackspace" width="152" height="53" style="float: right;" /></a><h1>Rackspace providing additional hosting for PHP project</h1>

<p>
 <span class="newsdate">[17-Sep-2001]</span>
 Thanks to the generous folks at <a
 href="http://www.rackspace.com/?supbid=php.net">Rackspace</a>, we have added additional
 capacity for hosting the PHP project\'s efforts. Currently, the machine they
 have provided is serving downloads for www.php.net and snaps.php.net. We will
 continue to re-balance our resource needs across all of the machines provided
 by our supporters.
</p>

<hr />

<h1>11.09.2001</h1>

<p>
 <span class="newsdate">[11-Sep-2001]</span>
 The worldwide PHP community is horrified by recent events and would like to
 offer its deepest sympathies to the friends and families of those who lost
 their lives. <a href="http://www.redcross.org/donate/donate.html">Support the
 Red Cross.</a>
</p>

<hr />

<h1>Manual notes are mirrored worldwide</h1>

<p>
 <span class="newsdate">[28-Aug-2001]</span>
 There is no need now to come to the main php.net server, if you would like
 to read the manual notes, as they are mirrored worldwide, and you can read
 them on all our mirror sites. You can get better response times by visiting
 the closest mirror. See the bottom of our pages.
</p>

<hr />

<a href="http://www.php-conference.de/2001/index_en.php"><img src="http://static.php.net/www.php.net/images/news/international_conference.gif" alt="International PHP Conference 2001" width="151" height="100" style="float: right;" /></a><h1>International PHP Conference in Frankfurt (November 5-7, 2001)</h1>
<p>
 <span class="newsdate">[17-Aug-2001]</span>
 PHP enthusiasts from all over the world will meet three days to attend
 powerworkshops and sessions presented by the inventors of PHP, members
 of the core group and other well known people from the community.
 More information at <a href="http://www.php-conference.de/2001/index_en.php">www.php-conference.de</a>.
</p>

<hr />

<a href="http://gtk.php.net/"><img src="http://static.php.net/www.php.net/images/news/php-gtk-white.gif" alt="PHP-GTK" width="165" height="68" style="float: right;" /></a><h1>PHP-GTK version 0.1 released</h1>

<p>
 <span class="newsdate">[02-Aug-2001]</span>
 The 0.1 release of PHP-GTK is now available. PHP-GTK is a PHP extension that
 provides an object-oriented interface to GTK+ toolkit and enables you to
 write client-side cross-platform GUI applications. Win32 binary version should
 be available a little later.
</p>
<p>
 Note that this version requires PHP CVS version to compile, but it can be run
 under 4.0.5 and later.
</p>
<p>
 A talk on PHP-GTK was presented by Andrei Zmievski and Frank Kromann at the 2001
 O\'Reilly Open Source Conference in San Diego. The slides from the talk can be
 <a href="http://conf.php.net/sd-gtk">viewed online</a>.
 For more information, visit <a href="http://gtk.php.net/">the PHP-GTK website</a>.
</p>

<hr />

<h1>PHP Conference</h1>
<p>
 <span class="newsdate">[29-Jul-2001]</span>
 The first official PHP Conference, part of the
 <a href="http://conferences.oreilly.com/oscon/">O\'Reilly Open Source Convention</a>,
 brought the community together for
 <a href="http://conferences.oreillynet.com/cs/os2001/pub/w/os2001/sessions_php.html">sessions</a>
 and <a href="http://conferences.oreillynet.com/cs/os2001/pub/10/php_tutorials.html">tutorials</a>
 designed to explore and strengthen PHP in
 the open source space. The conference
 was at the Sheraton San Diego Hotel and Marina
 in San Diego, California between July 23-27, 2001.
 Some presentations, you can see online:
</p>
<ul>
 <li>Rasmus Lerdorf\'s <a href="http://conf.php.net/or2001">PHP - Spinal Injection</a></li>
 <li>Thies Arntzen on <a href="http://conf.php.net/oci2">Making efficient use of Oracle8i thru Apache and PHP 4</a></li>
 <li>Andrei Zmievski and Frank M. Kromann with <a href="http://conf.php.net/sd-gtk">PHP-GTK</a></li>
 <li>Jon Parise on <a href="http://conf.php.net/pear2">The PHP Extension and Application Repository</a></li>
</ul>

<p>
 You can also download some papers from the
 <a href="ftp://ftp.oreilly.com/pub/conference/os2001/">O\'Reilly FTP site</a>
</p>

<hr />

<h1>Integrated FAQ in the PHP Manual</h1>
<p>
 <span class="newsdate">[29-Jul-2001]</span>
 You don\'t need to go online anymore, to access the PHP FAQ,
 because we integrated it for you in the PHP Manual, so you can
 <a href="http://www.php.net/docs.php">download it</a> in
 various formats with the Manual packages, and
 <a href="http://www.php.net/manual/en/faq.php">annotate
 the pages online</a>, as you wish.
</p>

<hr />

<a href="http://www.linuxtag.org/2001/english/30.html"><img src="http://static.php.net/www.php.net/images/news/phplt.gif" alt="LinuxTag" width="137" height="110" style="float: right;" /></a>
<h1>LinuxTag 2001 in Europe is over</h1>

<p>
 <span class="newsdate">[09-Jul-2001]</span>
 <a href="http://www.linuxtag.org/2001/english/30.html">LinuxTag 2001</a>
 took place in Stuttgart, Germany, between July 5th-8th. PHPUG.De has
 <a href="http://www.phpug.de/phplt_en.php4">a report</a> on the PHP events at LinuxTag.
</p>

<hr />

<a href="http://promote.pair.com/direct.pl?php.net"><img src="http://static.php.net/www.php.net/images/news/pair.gif" alt="pair Networks" width="115" height="56" style="float: right;" /></a><h1>Mailing lists and CVS are up!</h1>

<p>
 <span class="newsdate">[1-Jul-2001]</span>
 The disturbances in the mailing lists and CVS services that happened in the last
 few weeks are now gone, hopefully for good. This is thanks to a brand new server donated
 by <a href="http://promote.pair.com/direct.pl?php.net">pair Networks</a>. Thanks!
</p>

<hr />

<h1>PHP 4.0.6 Released!</h1>
<p>
 <span class="newsdate">[23-Jun-2001]</span>
 <a href="http://www.php.net/downloads.php">PHP 4.0.6</a> is a maintenance release, that features
 many bug fixes from PHP 4.0.5, and is especially much more efficient in its
 memory requirements. Users that skipped the 4.0.5 upgrade may wish to jump
 directly from 4.0.4 to the much more stable 4.0.6. For a full list of changes,
 check out the <a href="http://www.php.net/ChangeLog-4.php#4.0.6">Change Log</a>.
</p>

<hr />

<a href="http://www.php-kongress.de/2001/index_en.php"><img src="http://static.php.net/www.php.net/images/news/international_conference.gif" alt="PHP International Conference 2001" width="151" height="100" style="float: right;" /></a><h1>PHP conventions in Europe</h1>
<p>
 <span class="newsdate">[14-Jun-2001]</span>
 The second International PHP Conference, taking place in Frankfurt, Germany
 this coming November has been announced. Further details are available on the
 <a href="http://www.php-kongress.de/2001/index_en.php">official Web site</a>.
</p>
<p>
 Also coming between July 5th-8th - <a
 href="http://www.linuxtag.org/2001/english/30.html">LinuxTag 2001</a>,
 in Stuttgart, Germany, with
 <a href="http://www.linuxtag.org/2001/english/showitem.php3?item=273&amp;lang=en">strong PHP presence</a>.
</p>

<hr />

<h1>PHP Conference</h1>
<p>
 <span class="newsdate">[01-May-2001]</span>
 The first official PHP Conference, part of the <a
 href="http://conferences.oreilly.com/oscon/">O\'Reilly Open Source
 Convention</a>, will bring the community together for
 <a href="http://conferences.oreillynet.com/cs/os2001/pub/w/os2001/sessions_php.html">sessions</a>
 and <a href="http://conferences.oreillynet.com/cs/os2001/pub/10/php_tutorials.html">tutorials</a>
 designed to explore and strengthen PHP in the open source space. Take
 a look under the hood at everything PHP &mdash; from understanding PHP
 on wireless devices to participating in a discussion on the future of
 PHP featuring some of the core developers and luminaries from the PHP
 community. The conference runs July 23-27, 2001, at the Sheraton San
 Diego Hotel and Marina in San Diego, California.
</p>

<hr />

<h1>PHP 4.0.5 Released!</h1>
<p>
 <span class="newsdate">[30-Apr-2001]</span>
 <a href="http://www.php.net/downloads.php">PHP 4.0.5</a> is a maintenance release, that
 features many bug fixes from PHP 4.0.4, as well as output compression, new
 experimental FastCGI support, and significantly improved thread-safe versions.
 For a full list of changes, check out the <a href="http://www.php.net/ChangeLog-4.php#4.0.5">ChangeLog</a>.
</p>

<hr />

<h1>ApacheCon 2001 Over</h1>

<p>
 <span class="newsdate">[11-Apr-2001]</span>
 You may have missed the conference, but you can see some of the
 presentations online. Check out:
</p>
<ul>
 <li>Thies Arntzen on <a href="http://conf.php.net/oci">Making efficient use of Oracle8i thru Apache and PHP 4</a></li>
 <li>Stig Bakken on <a href="http://conf.php.net/pear">The PHP Extension and Application Repository</a></li>
 <li>Daniel Beckham and Brian Moon on <a href="http://dealnews.com/apachecon/">Caching Dynamic Web Content to Increase Dependability and Performance</a></li>
 <li>Rasmus Lerdorf\'s <a href="http://conf.php.net/ac2">Introduction to PHP</a></li>
 <li>Zeev Suraski on <a href="http://conf.php.net/pres/other/internals/">PHP 4 Internals</a></li> 
 <li>Nathan Wallace with <a href="http://www.e-gineer.com/articles/php-hackers-paradise-revisited.phtml">PHP: Hackers Paradise Revisited</a></li>
</ul>

<hr />

<h1>ApacheCon 2001</h1>
<p> 
 <span class="newsdate">[07-Mar-2001]</span>
 Registration for <a href="http://apachecon.com/2001/US/">ApacheCon 2001</a>
 in Santa Clara on April 4-6, 2001 is underway! There\'s sessions about PHP from
 Luis Argerich, Thies Arntzen, Stig Bakken, Daniel Beckham, Tony Bryne, Rasmus
 Lerdorf, Brian Moon, Zeev Suraski and Nathan Wallace, as well as tons of
 sessions on other cool open-source projects. Early registration
 ends March 9, so act fast for discounted prices!
</p>

<hr />

<h1>New Site Design</h1>
<p>
 <span class="newsdate">[07-Mar-2001]</span>
 You might notice that things look a little different around
 here. We\'ve streamlined the site, with a new design from the
 esteemed Colin Viebrock. Bear with us while we shake out the
 bugs that are surely lingering behind this new facade.
</p>

<hr />

<a href="http://gtk.php.net/"><img src="http://static.php.net/www.php.net/images/news/php-gtk-white.gif" alt="PHP-GTK" width="165" height="68" style="float: right;" /></a><h1>Announcing PHP-GTK</h1>
<p>
 <span class="newsdate">[01-Mar-2001]</span>
 The first release of PHP-GTK is now available. PHP-GTK is a PHP extension that
 provides an object-oriented interface to the GTK+ toolkit and enables you to write
 client-side cross-platform GUI applications. For more information, visit
 <a href="http://gtk.php.net/">http://gtk.php.net/</a>.
</p>

<hr />

<h1>Patch Level 1 released for PHP 4.0.4</h1>
<p>
 <span class="newsdate">[11-Jan-2001]</span>
 Due to two security issues found in the Apache module version of PHP 4.0, PHP 4.0.4pl1
 has been released. This bug-fix release also fixes a few party-crashing bugs that
 were discovered in PHP 4.0.4.
</p>

<hr />

<hr />

<h1>PHP Look Back 2002</h1>
<p>
 <span class="newsdate">[31-Dec-2002]</span>
 We are at the end of 2002, and it seemed appropriate to look back on the
 development issues of the past year. So starts the first PHP Look Back! You can
 find it in on the non-official personal website of one of the PHP Developers <a
 href="http://www.derickrethans.nl/20021230.php">here</a>.
</p>
<p>
 Happy New Year!
</p>

<hr />

<h1>PHP 4.3.0 Released!</h1>
<p>
 <span class="newsdate">[27-Dec-2002]</span>
 The PHP developers are pleased to announce the immediate availability of
 <a href="downloads.php">PHP 4.3.0</a>, the latest and greatest version of this
 extremely popular and widely used scripting language.
</p>

<p>
 This release contains a multitude of changes, bug fixes and improvements over
 the previous one, PHP 4.2.3. It further elevates PHP\'s standing as a serious
 contender in the general purpose scripting language arena. Please see
 the full <a href="release_4_3_0.php">release announcement</a>.
</p>

<hr />

<a href="http://weblabor.hu/php-doc-chm"><img src="http://static.php.net/www.php.net/images/news/chmhelp.gif" alt="CHM" width="48" height="48" style="float: right;" /></a>
<h1>New Release of the PHP Manual CHM Edition - Please Help Us</h1>
<p>
 <span class="newsdate">[27-Dec-2002]</span>
 The 11th sample of the CHM edition is available for download from today. The
 sample hopefully fixed the missing page bugs forever, introduces a new
 integration method (see documentation inside) and contains actual manual
 text, mirrors list and user notes. <a href="http://weblabor.hu/php-doc-chm">See
 the edition\'s page for download</a>.
</p>

<p>
 We also would like to ask you to help out in testing our new on-the-fly
 syntax highlighter, which would make the CHM significantly smaller, and
 would give you more options in displaying the pages.
 <a href="http://weblabor.hu/php-doc-chm">See the edition\'s page for
 more information</a>.
</p>

<hr />

<a href="http://www.mysql.com/events/uc2003/"><img src="http://static.php.net/www.php.net/images/news/mysqluc2003.png" alt="MySQL Users Conference and Expo 2003" width="125" height="89" style="float: right;" /></a>
<h1>MySQL Users Conference and Expo 2003 in San Jose</h1>
<p>
 <span class="newsdate">[16-Dec-2002]</span>
 MySQL AB is proud to host the world\'s First Annual MySQL User
 Conference, to be held in the heart of Silicon Valley, April 10-12,
 2003. This event promises to be the biggest gathering of MySQL database
 users ever in one location. Designed for both the MySQL developer and
 the corporate decision maker, this is the place to learn about the
 latest in MySQL technology, discover new business opportunities, take a
 pulse on industry direction and commune with like minds. 
 More information on <a href="http://www.mysql.com/events/uc2003/">the
 event\'s website</a>.
</p>

<hr />

<h1>PHP news feed available</h1>
<p>
 <span class="newsdate">[01-Dec-2002]</span>
 The news of PHP.net is available now in RSS 1.0 format via our
 new <a href="http://www.php.net/news.rss">news.rss file</a>. You can
 add this file to any news reader or portal site to get the latest
 official PHP news. We strongly recommend you to cache the contents
 locally on your side, as the newsfeed is updated daily. The RSS
 file is available on every mirror site.
</p>

<hr />

<a href="http://www.afup.org/"><img src="http://static.php.net/www.php.net/images/news/afup-logo.gif" alt="AFUP" width="131" height="69" style="float: right;" /></a>
<h1>Forum PHP 2002 in Paris, France</h1>
<p>
 <span class="newsdate">[21-Nov-2002]</span>
 The French PHP User Group AFUP invites you to the "Forum PHP 2002" in
 Paris, on December 9th and 10th. Designed to meet the needs of PHP aware
 companies and all the French PHP developper\'s community alike, this
 event will provided you with valuable and up-to-date information.
 For more information (in French) see the
 <a href="http://www.afup.org/article.php3?id_article=136">PHP Forum</a>
 website.
</p>

<hr />

<h1>PHP Magazine - International Edition</h1>
<p>
 <span class="newsdate">[17-Nov-2002]</span>
 Software &amp; Support Verlag GmbH is going to publish an International version
 of the <a href="http://www.phpmag.de/">PHP Magazin</a>. This magazine was
 initiated after growing interest for an English magazine after the German
 version has been around for a few months.
</p>
<p>
 PHP Magazine not only informs about the scripting language itself, but also about
 related technologies such as the Apache Web Server, database technologies, XML
 and other innovative internet technologies.  Different sections within the
 magazine are oriented towards the specific question areas with which a web
 developer is confronted in daily practice.
</p>
<p>
 The first issue will be published in December and the frequency of issues is
 two months. You will be able to subscribe on the <a
 href="http://www.php-mag.net/">website</a> which will open shortly.
</p>

<hr />

<h1>New Monthly PHP Magazine Launched</h1>
<p>
 <span class="newsdate">[15-Nov-2002]</span>
 php|architect, a new monthly magazine dedicated exclusively to PHP, has
 launched <a href="http://www.phparch.com/">its website</a>. php|a is published
 in PDF format and is available worldwide. It covers a variety of advanced
 topics ranging from day-to-day programming to the internals of PHP. A sample
 article on the creation of a web-based PDF converter is also
 available on the magazine website
</p>

<hr />

<h1>PHP Search Bars available for major browsers</h1>
<p>
 <span class="newsdate">[29-Oct-2002]</span>
 We added a new option to access our site\'s content quickly. In addition to
 <a href="http://www.php.net/urlhowto.php">URL shortcuts</a>, keyboard shortcuts and
 <a href="http://www.php.net/tips.php">browser specific magic</a> you can now use our
 <a href="http://www.php.net/sidebars.php">Search Bar</a> from the major browsers. Please help
 us to test this new service, and provide feedback via
 <a href="http://bugs.php.net/">the bug system</a> (categorize your bug
 as a PHP.net website bug please).
</p>

<hr />

<h1>PHP at the LinuxWorld Expo Oct. 29-31th in Frankfurt, Germany</h1>
<p>
 <span class="newsdate">[28-Oct-2002]</span>
 For the first time the Open Source projects comprising the popular LAMP
 platform (Linux, Apache, MySQL and PHP) will be present at the 
 <a href="http://www.linuxworldexpo.de">LinuxWorld Expo</a>
 with its own booth.
</p>
<p>
 At the booth, which is organized by the <a href="http://www.php-ev.de">German
 PHP Association</a> and the <a href="http://www.phpug.de">PHP Usergroup
 Frankfurt</a>, fair visitors can experience and learn about Apache, MySQL, PHP
 and related projects.
</p>
<p>
 Visitors can take LAMP home, too, since there will be a CD with the necessary
 software available at the booth.
</p>

<hr />

<h1>New keyboard shortcuts</h1>
<p>
 <span class="newsdate">[17-Oct-2002]</span>
 We introduced new keyboard shortcuts on the site today to make our pages
 even more comfortable to use. You can hit Alt+S on Microsoft Windows
 or Ctrl+S on Macintosh now to go right to the search box and type your
 search keyword. A similar shortcut with the letter "L" is also introduced
 on the manual pages to access the lookup input field. Thanks to Tommy Ipsen
 for the suggestion. You can read more about keyboard shortcuts on web pages
 <a href="http://www.w3.org/TR/html401/interact/forms.html#access-keys">in
 the HTML standard</a>.
</p>

<hr />

<h1>PHP 4.2.3 Released</h1>
<p>
 <span class="newsdate">[06-Sept-2002]</span>
 <a href="downloads.php">PHP 4.2.3</a> has been released with a large number
 of bug fixes. It is a maintenance release, and is a recommended update for all
 users of PHP, and Windows users in particular. A complete list of changes can
 be found in the <a href="ChangeLog-4.php">ChangeLog</a>.
</p>

<hr />

<a href="http://www.php-conference.de/2002/index_en.php"><img src="http://static.php.net/www.php.net/images/news/phpconf2002.gif" alt="PHP Conference 2002" width="151" height="97" style="float: right;" /></a>
<h1>International PHP Conference 2002 (Frankfurt, Nov 3-6)</h1>
<p>
 <span class="newsdate">[05-Sept-2002]</span>
 After the big success of last year\'s first International PHP Conference this
 year\'s show will be even bigger and better.
</p>
<p>
 <a href="http://www.php-conference.de/2002/index_en.php">Come to Frankfurt</a>
 and meet the most excellent speakers of the PHP community on four following days
 packed with <a href="http://www.php-conference.de/2002/pw_en.php">whole day
 tutorials</a> on November 3 and 4 and a great variety of sessions on November
 5 and 6.
</p>

<p>
 The topics are PHP Applications, PHP &amp; Business, Database Topics, PHP &amp; GTK,
 PHP Internals / Extensions, PHP &amp; XML, and others.
</p>

<p>
 <a href="https://www.entwickler.com/ssl/php2002/en/form_php2002.php">Early
 bird registration</a> will end on 7th of October. Students and private
 persons get special discounts.
</p>

<hr />

<a href="http://www.php-con.com/"><img src="http://static.php.net/www.php.net/images/news/phpcon2002.png" alt="PHPCon 2002" width="190" height="33" style="float: right;" /></a>
<h1>PHPCon 2002 (California, Oct 24-25)</h1>
<p>
 <span class="newsdate">[05-Sept-2002]</span> 
 <a href="http://www.php-con.com" title="PHPCon 2002">PHPCon 2002</a>, a
 2-day technical conference devoted entirely to PHP, announced today the
 launch of the PHPCon 2002 website, online registration, and a call for
 participation.
</p>

<p>
 <a href="http://www.php-con.com/2002/register.php">Early Bird
 registration</a> is now open for PHPCon 2002. Strong technical tracks on
 Enterprise PHP, Application Development, and XML combined with speakers
 from Rackspace, Yahoo!, Macromedia, and MySQL make this the conference a
 must attend for anyone interested in expanding their PHP knowledge.
</p>

<p>
 Join PHPCon in delivering the PHP message with Birds of a Feather (BoFs)
 and Works in Process (WiPs) sessions. Submit your BoF and WiP topics <a
 href="http://www.php-con.com/2002/bof_form.php" title=" BoF - WiP
 Submission ">online</a>.
</p>

<p>
 An idea who\'s time has come, don\'t miss this opportunity to attend the
 only conference in the US is placing PHP front and center as the language
 for solving web problems. PHPCon 2002, October 24 &amp; 25, 2002, Millbrae,
 California.
</p>

<hr />

<h1>Printer friendly manual pages with notes</h1>
<p>
 <span class="newsdate">[03-Aug-2002]</span>
 Starting from today, the manual pages are not only available in their
 printer friendly versions, but also in printer friendly versions with
 user notes included. Check the links at the <a href="http://www.php.net/manual">top of
 the manual pages</a> to go to printer friendly manual pages, and
 change languages.
</p>

<hr />

<h1>ActiveState Awards</h1>
<p>
 <span class="newsdate">[31-Jul-2002]</span> ActiveState is pleased to announce
 the winners of the 2002 Active Awards, presented at the O\'Reilly Open Source
 Conference in San Diego, CA. The Active Awards are held annually to honor
 members of the PHP, Python, Perl, Tcl, and XSLT  communities, who
 <em>actively</em> contribute to open languages and display excellence in
 their programming efforts. Activators\' Choice Award winners were chosen by
 ActiveState\'s development team.  Programmers\' Choice Award winners were
 nominated and chosen by the open source community, the nominees were:
 Greg Allan; Stig Bakken; Bogomil Shopov; Philippe Thomassigny; and
 Andrei Zmievski.
</p>
<p>
 The Activators\' Choice winners are Derick Rethans and Jani Taskinen.
 Derick is heavily involved in developing processes for QA and Release
 Management, and Jani has been one of the largest contributors to QA and
 support of the Bug database.  The Programmers\' Choice winner is Greg
 Allen, who was the lead developer and founding member of the PostNuke
 project. More details are available at 
 <a href="http://www.ActiveState.com/ActiveAwards2002">http://www.ActiveState.com/ActiveAwards2002</a>
</p>

<hr />

<h1>PHP 4.2.2 released in response to vulnerability</h1>

<p>
 <span class="newsdate">[22-Jul-2002]</span> The PHP Group today announced
 the details of a serious <a href="release_4_2_2.php">vulnerability</a> in
 PHP versions 4.2.0 and 4.2.1. A security update, <a href="downloads.php">PHP
 4.2.2</a>, fixes the issue. Everyone running affected versions of PHP is
 encouraged to upgrade immediately. The new 4.2.2 release doesn\'t include
 other changes, so upgrading from 4.2.1 is safe and painless.
</p>

<hr />

<h1>New comp.lang.php newsgroup started</h1>

<p>
 <span class="newsdate">[09-Jul-2002]</span> comp.lang.php was created yesterday,
 after a two and a half month long process started in April by Ian Fette resulted in a
 <a href="http://groups.google.com/groups?q=comp.lang.php&amp;hl=en&amp;lr=&amp;ie=UTF-8&amp;selm=1025483879.39561&amp;40isc.org&amp;rnum=3">177-11
 vote</a> in favor of the group. The new group is already carried on most news servers,
 and should be carried on almost all news servers in the world within the next few days.
</p>

<p>
 The new group is important for a few reasons: Firstly, the old alt.* php
 groups suffered from poor propagation - i.e. not all servers carried them,
 and the community was split between multiple groups. This new group offers a
 chance to unite the PHP-Usenet community. Secondly, most servers have longer
 post-retention times for comp.* than alt.*. Finally, the creation of
 comp.lang.php represents PHP\'s coming to acceptance and maturity. Virtually
 all languages have a spot under the comp.lang.* hierarchy. Stop on by and
 become a part of the community - comp.lang.php is a great place to get help
 and to help others.
</p>

<hr />

<img src="http://static.php.net/www.php.net/images/news/engine.gif" alt="Zend Engine 2" width="98" height="96" style="float: right;" />
<h1>Alpha 2 of PHP w/ the Zend Engine 2 Now Available</h1>
<p>
 <span class="newsdate">[30-Jun-2002]</span>
 The second alpha release of PHP w/ Zend Engine 2 is <a href="http://www.php.net/downloads.php">now
 available</a>. It is based on the current PHP 4 CVS (4.3.0-dev) and includes the new 
 scripting engine which greatly improves the object model, adds exception
 handling and provides a much better infrastructure for the integration
 of external technologies like Java or .NET. For more details and
 examples you can check out the <a href="http://www.php.net/zend-engine-2.php">file describing
 the changes</a>.
</p>

<p>
 <strong>Note:</strong> This is an alpha version. It should not be used in production
 or even semi-production web sites. There are known bugs in it, and in
 addition, some of the features may change (based on feedback). We
 encourage you to download and play with it (and report bugs if you find any!),
 but please don\'t expect it to replace your copy of PHP 4 at this stage.
</p>

<p>
 Windows binary version is also available.
</p>

<hr />

<h1>PHP for NetWare (Beta) Released</h1>
<p>
 <span class="newsdate">[27-May-2002]</span>
 A Beta version of PHP for NetWare is available on the
 <a href="http://developer.novell.com/ndk/leadedge.htm#le169">Novell
 Developer Kit site</a>. This version is based on the
 4.0.8 (development) version of the PHP source code.
</p>

<hr />

<a href="http://www.linuxtag.org/2002/deutsch/showitem.php3?item=30&amp;lang=en"><img src="http://static.php.net/www.php.net/images/news/linuxtag3.gif" alt="LinuxTag" width="83" height="58" style="float: right;" /></a>
<h1>LinuxTag 2002: 6 - 9th June, Karlsruhe, Germany</h1>
<p> 
 <span class="newsdate">[23-May-2002]</span> PHP will be attending 
 <a href="http://www.linuxtag.org/2002/deutsch/showitem.php3?item=30&amp;lang=en">LinuxTag</a> 
 again this year. The combined efforts of the PHP Verein, the Apache Software Foundation and
 MySQL AB,  will create a "(L)AMP" day, focusing on web development with  the 3 core
 technologies. During the day there will be many <a
 href="http://www.linuxtag.org/2002/deutsch/showitem.php3?item=293&amp;lang=en">interesting
 workshops</a>, which are free to enter. Make time to visit the (L)AMP booth also, which will 
 be hosting several <a href="http://www.phpug.de/index_ka109.php">PHP related projects</a>
 (text in German).
</p>

<hr />

<h1>PHP Coding Contest</h1>
<p>
 <span class="newsdate">[16-May-2002]</span>
 CodeWalkers have started a new fortnightly PHP contest. Every two weeks, there
 is a new problem to solve, a new script to write. The winner will receive
 prizes provided by the sponsors, Zend Technologies and Sams Publishing.
 You can enter the challenge by visiting <a href="http://codewalkers.com/php-contest.php">their site</a>.
</p>

<hr />

<h1>PHP 4.2.1 released</h1>
<p>
 <span class="newsdate">[13-May-2002]</span>
 The PHP Group is happy to announce the <a href="http://www.php.net/downloads.php">immediate
 availability</a> of PHP 4.2.1, the latest version of the widely-used,
 general-purpose scripting language that is especially well-suited for
 Web development.
</p>

<p>
 This latest release contains several bug fixes as found in PHP 4.2.0. These include
 fixes for the session, com and mbstring extensions, as well as a major upgrade of the DomXML
 extension. Also a few extra checks for safe_mode were added. For more information, see the
 <a href="http://www.php.net/release_4_2_1.php">PHP 4.2.1 release announcement</a>.
</p>

<hr />

<a href="http://www.php-award.net/"><img src="http://static.php.net/www.php.net/images/news/phpaward_100.gif" alt="PHP Award" width="100" height="75" style="float: right;" /></a>
<h1>PHP Award 2002</h1>
<p>
 <span class="newsdate">[27-Apr-2002]</span>
 The Association Fran?aise des Utilisateurs de PHP (AFUP) and
 the German PHP Association (PHP Verein) are organizing a PHP
 contest to give out the first PHP Award. The PHP Award will
 be given in three categories: Open Source, Freeware and
 Commercial Software, the submission deadline is July, 15th 2002.
 If you are interested go to
 <a href="http://www.php-award.net/">http://www.php-award.net/</a>.
</p>

<hr />

<h1>PHP.net: A Tourist\'s Guide</h1>
<p>
 <span class="newsdate">[26-Apr-2002]</span>
 Damien Seguy has written <a href="http://www.php.net/sites.php">a tourist\'s guide</a> to the
 various sites that make up the PHP.net family of sites. Did you know you can
 browse a hyperlinked version of the PHP source code at <a
 href="http://lxr.php.net/">lxr.php.net</a>? View the archives of all of the
 mailing lists at <a href="http://news.php.net/">news.php.net</a>? See what else
 you\'ve been missing.
</p>

<hr />

<h1>PHP 4.2.0 released</h1>
<p>
 <span class="newsdate">[22-Apr-2002]</span>
 The PHP Group is happy to announce the <a href="http://www.php.net/downloads.php">immediate
 availability</a> of PHP 4.2.0, the latest version of the widely-used,
 general-purpose scripting language that is especially well-suited for Web development.
</p>

<p>
 This latest release contains over one hundred changes, bug fixes and improvements over
 the previous release, PHP 4.1.2. Among the highlights are experimental support for Apache 2,
 cleanups in variable handling and overhauls of various PHP components, including the
 domxml, posix, sockets and iconv extensions. For more information, see the
 <a href="http://www.php.net/release_4_2_0.php">PHP 4.2.0 release announcement</a>.
</p>

<hr />

<a href="http://weblabor.hu/php-doc-chm"><img src="http://static.php.net/www.php.net/images/news/chmhelp.gif" alt="CHM" width="48" height="48" style="float: right;" /></a>
<h1>Fifth sample of \'PHP Manual CHM Edition\'</h1>

<p>
 <span class="newsdate">[20-Apr-2002]</span>
 We released the fifth sample of the new CHM Edition. New in
 this sample: user preferences application, a new optional
 design, custom context menu support, linked functions
 in examples, and of course updated content.
</p>

<p>
 <a href="http://weblabor.hu/php-doc-chm">Try out the new CHM Edition</a>,
 and send us your feedback to our
 <a href="mailto:php-doc-chm@lists.php.net">dedicated mailing list</a>.
</p>

<hr />

<a href="http://www.phpmag.de/"><img src="http://static.php.net/www.php.net/images/news/phpmag.gif" alt="PHP Magazin" width="99" height="140" style="float: right;" /></a>
<h1>PHP Magazin out now!</h1>
<p>
 <span class="newsdate">[26-Mar-2002]</span>
 The Software &amp; Support Verlag, based in Frankfurt,
 Germany, has now published a magazine on PHP as a
 tribute to the steadily growing German PHP community.
 More information can be found at
 <a href="http://www.phpmag.de/">www.phpmag.de</a>.
</p>
 
<hr />

<h1>New PHP.net URL Howto</h1>
<p>
 <span class="newsdate">[23-Mar-2002]</span>
 Ever wondered what you can type in your browsers location
 field to access a php.net page? Many of you already know
 <a href="http://php.net/echo">http://php.net/echo</a>.
 We gathered some information about how the URLs are parsed,
 and what are your possibilities. Read it in our new
 <a href="urlhowto.php">URL Howto</a>.
</p>

<hr />

<a href="http://www.php-ev.de/documents/phpdoc/protocol.html"><img src="http://static.php.net/www.php.net/images/news/brain.gif" alt="PHPDoc Brain" width="181" height="105" style="float: right;" /></a>
<h1>PHP Documentation Team Meeting</h1>
<p>
 <span class="newsdate">[13-Mar-2002]</span>
 The <a href="http://www.php-ev.de/documents/phpdoc/protocol.html">notes
 from the PHP Documentation Team Meeting</a> (Stuttgart, March
 8th-10th) are now available.
</p>

<hr />

<h1>PHP Security Update - Windows Version</h1>
<p>
 <span class="newsdate">[12-Mar-2002]</span>
 Following up from the previous annoucement, PHP 4.1.2 has been released for
 windows. The delayed release is due to the fix of a further security issue only
 relating to the PHP for Windows version. More information on this change can be
 found <a href="http://www.php.net/release_4_1_2_win32.php">here</a>. All PHP - Windows users are
 encouraged to upgrade to the <a href="http://www.php.net/downloads.php">latest version</a>.
</p>

<hr />

<h1>PHP Security Update</h1>
<p>
 <span class="newsdate">[27-Feb-2002]</span>
 Due to a security issue found in all versions of PHP (including 3.x and 4.x), a
 new version of PHP has been released.  Details about the security issue are <a
 href="http://security.e-matters.de/advisories/012002.html">available here</a>.
 All users of PHP are strongly encouraged to either upgrade to <a
 href="/downloads.php">PHP 4.1.2</a>, or install the patch (<a
 href="/downloads.php">available for PHP 3.0.18, 4.0.6 and 4.1.0/4.1.1)</a>.
</p>

<hr />

<h1>PHP-GTK 0.5.0 released</h1>

<p>
 <span class="newsdate">[24-Jan-2002]</span>
 <a href="http://gtk.php.net/">PHP-GTK</a> has reached version
 0.5.0, also known as <em>"monday starts on saturday"</em>. The version number
 was bumped from 0.1.1 to this one to indicate that PHP-GTK is now a fairly
 mature and stable extension and can be used for a variety of applications
 (just look on <a href="http://www.freshmeat.net/">Freshmeat</a>).
</p>

<p>
 Also taking this opportunity, we would like to ask if some of you would
 consider helping out with PHP-GTK documentation. It would be a great way to
 learn this exciting extension and also contribute to the project.
</p>

<hr />

<a href="http://www.phpconference.de/2001/index_en.php"><img src="http://static.php.net/www.php.net/images/news/international_conference.gif" alt="International PHP Conference 2001" width="151" height="100" style="float: right;" /></a>
<h1>International PHP Conference slides available</h1>

<p>
 <span class="newsdate">[10-Jan-2002]</span>
 You can find an overview of all slides of the sessions from the
 International PHP Conference 2001 on the
 <a href="http://www.phpconference.de/2001/slides_en.php">conference slides page</a>. 
 It is still not too late to check out some photos from the conference:
</p>

<hr />

<a href="http://vancouver.php.net/"><img src="http://static.php.net/www.php.net/images/news/vancouver_conference_2004.gif" alt="Vancouver PHP Conference 2004" width="120" height="71" style="float: right;" /></a>
<h1>Vancouver PHP Conference 2004</h1>
<p>
 <span class="newsdate">[22-Dec-2003]</span>
 The Vancouver PHP Users Association presents <a href="http://vancouver.php.net/">The PHP Vancouver Conference</a>
 on January 22-23, a professional and technical conference focused on the PHP scripting language.
 The goal of this conference is to bring together some of the world\'s leading PHP developers and
 business professionals to share their experience with both students and PHP professionals in a series of talks.
</p>

<hr />

<h1>PHP Community Site Project Announced</h1>
<p>
 <span class="newsdate">[18-Dec-2003]</span>
 Members of the PHP community are <a href="http://shiflett.org/archive/19">seeking
 volunteers</a> to help develop the first Web site that is created both by
 the community and for the community. The features of this project will be
 driven by the needs and desires of the community as much as possible and
 may include such things as blogs, news, FAQs, articles, links, and tutorials.
</p>
 <p>
 If you would like to contribute, please <a
 href="http://shiflett.org/contact">contact Chris Shiflett</a>, who is
 coordinating this project. There is a need for every type of contributor,
 including developers, translators, administrators, designers, writers, and
 advocates.
</p>

<hr />

<a href="http://www.php-mag.net/"><img src="http://static.php.net/www.php.net/images/news/php-mag.gif" alt="International PHP Magazine" width="130" height="38" style="float: right;" /></a>
<h1>PHP Magazine in PDF Format</h1>
<p>
 <span class="newsdate">[15-Dec-2003]</span>
 <a href="http://software-support.biz/en">Software &amp; Support Media</a>,
 producers of the <a href="http://www.phpconference.de/2003/index_en.php">International
 PHP Conference</a>, are pleased to announce a new monthly version of their
 print publication, the "<a href="http://www.php-mag.net/">International
 PHP Magazine</a>", published in PDF format and distributed
 electronically. The first issue is available for free on
 <a href="http://www.php-mag.net/">the magazine\'s website</a>.
</p>

<hr />

<a href="http://conf.phpquebec.org/index.html"><img src="http://static.php.net/www.php.net/images/news/conference_php_quebec.gif" alt="Conference PHP Quebec" width="131" height="63" style="float: right;" /></a>
<h1>First PHP dedicated DVD released!</h1>
<p>
 <span class="newsdate">[13-Dec-2003]</span>
 The PHP Qu&eacute;bec is pleased to announce the immediate availability
 of PHP Qu&eacute;bec DVD. Over 6 hours of conferences, recorded in
 Montr&eacute;al, in March 2003. DVD is subtitled in English and French,
 making legendary sessions from Rasmus and Zeev available anywhere
 in the world.
</p>
<p>
 This DVD makes a nice christmas present for every PHP enthusiast.
 Available in
 <a href="http://conf.phpquebec.org/main.php/en/dvd2003/main">English</a> or
 <a href="http://conf.phpquebec.org/main.php/fr/dvd2003/main">French</a>.
</p>

<hr />

<a href="http://mysql.com/events/uc2004"><img src="http://static.php.net/www.php.net/images/news/mysqluc2004.png" alt="MySQL User Conference 2004" width="125" height="89" style="float: right;" /></a>
<h1>Call for Participation: MySQL User Conference 2004</h1>
<p>
 <span class="newsdate">[12-Dec-2003]</span>
 The <a href="http://mysql.com/events/uc2004/speakers.html">Call
 for Participation</a> for the 2004 MySQL User Conference is
 now open. MySQL is looking for sessions that speak to your peers:
 practical, pragmatic and clueful presentations that focus on how
 you solved problems in a demanding or unique technical environment.
 Additionally, the conference is looking for solid proposals for
 Bird-of-a-Feather (BoF) sessions and Lightning Talks.
</p>
<p>
 The call for papers closes on January 14th. The call for BoFs and
 lightning talks closes on February 14th. The conference will take
 place on April 14th to 16th in Orlando, Florida, USA.
</p>

<hr />

<a href="http://www.phpconf.hu/"><img src="http://static.php.net/www.php.net/images/news/hu_conf.gif" alt="Second Hungarian PHP conference" width="119" height="90" style="float: right;" /></a><a href="http://webdevmagazine.co.uk/conf/index_n.php"><img src="http://static.php.net/www.php.net/images/news/bulgaria_2004.gif" alt="First Bulgarian PHP conference" width="130" height="70" style="float: right;" /></a>
<h1>First Bulgarian and Second Hungarian PHP Conference</h1>
<p>
 <span class="newsdate">[01-Dec-2003]</span>
 The <a href="http://webdevmagazine.co.uk/conf/index_n.php">First Bulgarian
 PHP conference</a> will be held within the framework of the 2004 Web Technology
 Conference in Sofia in March. The goal of the meeting is to discuss the trends and
 to popularize PHP among the business, education and services sectors. The organizers
 welcome proposals for sessions and company presentations.
</p>

<p>
 Also coming in March 2004 is the <a href="http://www.phpconf.hu/">Second Hungarian
 PHP Conference</a> building on last year\'s successful event. The Call For Papers is
 open for the conference, speakers are welcome to hold sessions and workshops ranging
 from PHP internals to web standard compliance. The event is exclusively in Hungarian.
</p>
 
<hr />

<a href="http://conf.phpquebec.org/index.html"><img src="http://static.php.net/www.php.net/images/news/conference_php_quebec.gif" alt="Conference PHP Quebec" width="131" height="63" style="float: right;" /></a>
<h1>Call for Speakers: PHP Qu&eacute;bec 2004</h1>
<p>
 <span class="newsdate">[11-Nov-2003]</span>
 The PHP Qu&eacute;bec is pleased to announce the PHP Qu&eacute;bec 
 conference 2004, which will be held on March, 25th&amp;26th 2004. 
 We are looking for the best speakers, willing to 
 share their experience and skills with the educated crowd of PHP 
 programmers in eastern Canada and in the USA. PHP Qu&eacute;bec 
 2004 features 3 distinct tracks:
 <ul>
  <li>
   Professional PHP, dealing with php usage in professional 
   environment and unusual businesses.
  </li>
  <li>
   Technical PHP, covering indeep details of PHP technics.
  </li>
  <li>
   Free software, about any free software, closely related to PHP.
  </li>
 </ul>
 <a href="http://conf.phpquebec.com/">Sessions</a> will be held in
 <a href="http://conf.phpquebec.com/main.php/fr/accueil/main">French</a> or 
 <a href="http://conf.phpquebec.com/main.php/en/accueil/main">English</a>.
 For more information, read the <a 
 href="http://conf.phpquebec.org/main.php/en/conf2004/conferencier">PHP Qu&eacute;bec</a>.
</p>

<hr />

<h1>New function list auto completion</h1>
<p>
 <span class="newsdate">[04-Nov-2003]</span>
 You can probably name at least one IDE providing support for PHP function name
 code completion. PHP.net is just <em>beta testing</em> the same feature
 <a href="http://www.php.net/search.php">on the search page</a>. Try selecting the \'function
 list\' lookup option and start typing in a function name in the search field.
 You can autocomplete the name with the space key and navigate in the dropdown
 with the up and down cursor keys. We welcome feedback on this feature at
 <a href="http://www.php.net/contact.php">the webmasters email address</a>, but
 please submit any bugs you find <a href="http://bugs.php.net/">in the
 bug system</a> classifying them as a "PHP.net website problem" and providing 
 as much information as possible (OS, Browser version, Javascript errors, etc..).
</p>

<hr />

<h1>PHP 4.3.4 released!</h1>
<p>
 <span class="newsdate">[03-Nov-2003]</span>
 The PHP developers are proud to announce the immediate availability of
 <a href="release_4_3_4.php">PHP 4.3.4</a>. This release contains a fair
 number of bug fixes and we recommend that all users of PHP upgrade to 
 this version. Full list of fixes can be found in the 
 <a href="ChangeLog-4.php#4.3.4">ChangeLog</a>.
</p>

<hr />

<h1>PHP 5.0.0 Beta 2 released</h1>
<p>
 <span class="newsdate">[30-Oct-2003]</span>
 <a href="http://www.php.net/downloads.php">PHP 5.0.0 Beta 2</a> has been released.
 This is the first feature complete version of PHP 5, and we recommend for PHP users
 to try it. PHP 5 is still not ready for production use!
</p>
<p>
 Some of the more major changes include:
</p>
<ul>
 <li>
  PHP 5 features the Zend Engine 2.
 </li>
 <li>
  XML support has been completely redone in PHP 5, all extensions are now focused around the
  excellent libxml2 library (<a href="http://www.xmlsoft.org/">http://www.xmlsoft.org/</a>).
 </li>
 <li>
  SQLite has been bundled with PHP. For more information on SQLite, please visit their
  <a href="http://www.hwaci.com/sw/sqlite/">website</a>.
 </li>
 <li>
  A new SimpleXML extension for easily accessing and manipulating XML as PHP objects. It can
  also interface with the DOM extension and vice-versa.
 </li>
 <li>
  Streams have been greatly improved, including the ability to access low-level socket
  operations on streams.
 </li>
</ul>
<p>
 There have been many changes since Beta 1, some of them documented in the
 <a href="http://www.php.net/ChangeLog-5.php#5.0.0b2">ChangeLog</a> and most language
 changes are documented on <a href="http://www.php.net/zend-engine-2.php">our PHP 5/Zend Engine 2 page</a>.
</p>

<hr />

<a href="http://www.afup.org/forumphp/"><img src="http://static.php.net/www.php.net/images/news/afup2003.png" alt="Forum PHP" width="99" height="52" style="float: right;" /></a>
<h1>Forum PHP in Paris, November 26 & 27th</h1>
<p>
 <span class="newsdate">[26-Oct-2003]</span>
 The French PHP User Group <a href="http://www.afup.org/">AFUP association</a>
 is proud to announce the third annual PHP meeting in Paris,
 on November 26th and 27th, 2003. Developers and managers will
 gather to meet Zeev Suraski and other prominent community experts
 for two days of sessions, packed with
 <a href="http://www.afup.org/forumphp/">solutions and advanced techniques</a>
 (in French).
</p>

<hr />

<a href="http://www.directionphp.biz/"><img src="http://static.php.net/www.php.net/images/news/directionphp.png" alt="Direction|PHP" width="99" height="128" style="float: right;" /></a>
<h1>Monthly PHP Magazine in French launched!</h1>
<p>
 <span class="newsdate">[15-Oct-2003]</span>
 <a href="http://www.nexen.net/">Nexen.net</a> has launched Direction|PHP,
 the first PHP and MySQL dedicated magazine in French. This monthly publication
 features indeep coverage of PHP industry, business and user cases and technical
 articles from PHP|Architect.
</p>
<p>
 For more information, read the <a 
 href="http://www.directionphp.biz/index.php">Direction|PHP website</a> (in French).
</p>

<hr />

<a href="http://www.apachecon.com/"><img src="http://static.php.net/www.php.net/images/news/apachecon2003.jpg" alt="ApacheCon" width="135" height="45" style="float: right;" /></a>
<h1>ApacheCon 2003, the Global Hub for All Things Apache</h1>
<p>
 <span class="newsdate">[11-Oct-2003]</span>
 The <a href="http://www.apachecon.com/">official conference
 of the Apache Software Foundation</a> will be held November 16-20,
 2003 in Las Vegas. More than 60 sessions highlight core and
 next-generation Apache server tools, offering a wide
 range of beginner, intermediate and advanced sessions.
 Learn firsthand the latest developments in Apache, as
 well as key open source projects, including PHP, Perl,
 XML, Java, MySQL, and WebDAV.
</p>

<hr />

<a href="http://www.phpcruise.com/"><img src="http://static.php.net/www.php.net/images/news/phpcruise.png" alt="php|cruise" width="162" height="29" style="float: right;" /></a>
<h1>php|cruise: The World\'s First Ever PHP-only Cruise</h1>
<p>
 <span class="newsdate">[20-Sep-2003]</span>
  The publishers of php|architect have announced <a
  href="http://www.phparch.com/cruise/">php|cruise</a>, a five-day cruise to the
  Bahamas Islands featuring a lot of fun and over thirty different
  sessions dedicated to PHP from well known experts like Wez Furlong, Alan
  Knowles and John Coggeshall. 
</p>
<p>
 The cruise will take place March 1st to 5th, 2004. The organizers have
 <a href="http://www.phparch.com/cruise/contest/">announced a contest</a> to
 give away one free place on the cruise.
</p>

<hr />

<a href="http://www.zend.com/zend/php_survey_results.php"><img src="http://static.php.net/www.php.net/images/news/zendtech_logo.gif" alt="Zend Technologies" width="150" height="77" style="float: right;" /></a>
<h1>PHP Usage Survey Results</h1>
<p>
 <span class="newsdate">[18-Sep-2003]</span>
 <a href="http://www.zend.com/zend/php_survey_results.php">Check out</a> the results
 of the PHP Usage Survey conducted by Zend Technologies, including feedback
 from thousands of PHP users around the world.  Thanks for all who contributed!
</p>

<hr />

<a href="http://weblabor.hu/php-doc-chm"><img src="http://static.php.net/www.php.net/images/news/chmhelp.gif" alt="CHM" width="48" height="48" style="float: right;" /></a>
<h1>PHP Manual CHM Edition - 12th build</h1>
<p>
 <span class="newsdate">[06-Sep-2003]</span>
 The 12th build of the extended CHM edition is out now, and
 <a href="http://www.php.net/get/php_manual_chm_12.zip/from/a/mirror">available for download</a>.
 This build contains updated content and user notes, as well as fixes the
 bugs found in the previous build. A new optional "phpZ" skin is also
 introduced in this release, courtesy of Gonzalo De la Pena Andreu. For
 more information, visit <a href="http://weblabor.hu/php-doc-chm/">the
 homepage of this edition.</a>
</p>

<hr />

<a href="http://www.phpconference.de/2003/index_en.php"><img src="http://static.php.net/www.php.net/images/news/international_conference_2003.gif" alt="International PHP Conference 2003" width="120" height="77" style="float: right;" /></a>
<h1>International PHP Conference 2003 program online</h1>
<p>
 <span class="newsdate">[05-Sep-2003]</span>
 The organisers of the
 <a href="http://www.phpconference.de/2003/index_en.php">International
 PHP Conference</a> which will take place for the third time in Frankfurt,
 Germany from Nov. 2 to 5, 2003 have announced the conference program.
 The conference board which consists of Bjoern Schotte, Zak
 Greant, Zeev Suraski, Thies Arntzen and Jan Lehnardt has chosen more than
 40 sessions for the main program on Nov. 4 and 5 and 7 in-depth
 Power Workshops for the pre conference program on Nov. 2 and 3. Among the
 prominent speaking crowd is Zeev Suraski, Ken Coar and many others. See
 <a href="http://www.phpconference.de/2003/index_en.php">the conference
 website</a> for more information.
</p>

<hr />

<a href="http://servercentral.net"><img src="http://static.php.net/www.php.net/images/news/server_central.gif" alt="Server Central" width="60" height="60" style="float: right;" /></a>
<h1>Server Central Donates Server</h1>
<p>
 <span class="newsdate">[28-Aug-2003]</span>
 Chicago-based company <a href="http://servercentral.net/">Server Central</a>
 has donated PHP.net a brand new server with a gigabit connection. The box is
 a quad 2.4GHz machine with 2GB ram, so we\'re going to be using it to power
 our more resource-intensive tasks, including building the manual. Thanks,
 Server Central!
</p>

<hr />

<h1>European Open Source Development Threatened!</h1>
<p>
 <span class="newsdate">[27-Aug-2003]</span>
 Today sees an international day of protest against the move by the EU to
 make obtaining a patent easier within Europe. Such patents may cause Open
 Source software such as PHP to infringe on existing licenses and new ones, 
 meaning we would no longer be safe to distribute PHP within Europe. Contact
 your EU Representative to get this cruicial vote blocked. Find out more at
 the <a href="http://swpat.ffii.org/">campaign website</a> 
</p>
 
<hr />

<a href="http://www.php-con.com"><img src="http://static.php.net/www.php.net/images/news/phpcon_2003.gif" alt="php{con west 2003" width="120" height="60" style="float: right;" /></a>  

<h1>php{con west is announced</h1>
<p>
 <span class="newsdate">[26-Aug-2003]</span>
 php{con returns to the San Francisco Bay Area with new sessions, PHP gurus
 and a whole new day of PHP-intensive learning. Their program features a full
 day of tutorials, three technical session tracks over two days, an all day 
 coding marathon, Code Sprint, social events, works in progress, and
 presentations from PHP luminaries. Early Bird discounts end on September
 26th. See the full program and register online at
 <a href="http://www.php-con.com">their website</a>
</p>

<hr />

<h1>PHP 4.3.3 released!</h1>
<p>
 <span class="newsdate">[25-Aug-2003]</span>
 The PHP developers are proud to announce the immediate availability of
 <a href="release_4_3_3.php">PHP 4.3.3</a>. This release contains a large
 number of bug fixes and we <strong>strongly</strong> recommend that all
 users of PHP upgrade to this version. Full list of fixes can be found in
 the <a href="ChangeLog-4.php#4.3.3">ChangeLog</a>.
</p>

<hr />

<a href="http://www.ActiveState.com/Corporate/ActiveAwards/"><img src="http://static.php.net/www.php.net/images/news/activestate_logo.gif" alt="ActiveState" width="115" height="50" style="float: right;" /></a>
<h1>Active Awards 2003 Winners</h1>

<p>
 <span class="newsdate">[15-Aug-2003]</span>
 The <a href="http://www.activestate.com/Corporate/ActiveAwards/">Active Awards</a>
 are held annually to honor members of the open source community who actively
 contribute to open source languages and display excellence in their programming
 efforts. Programmers\' Choice Award winners were nominated and chosen by the open
 source community. Activators\' Choice Award winners were chosen by ActiveState\'s
 development team.
</p>
<p>
 This year\'s nominees were: Monte Ohrt, Paul S. Owen, Stanislav Malyshev,
 Stig Bakken and Wez Furlong. The Programmers\' Choice winner is
 <strong>Stig Bakken</strong>, the father of PEAR. The Activators\' Choice
 winner is <strong>Ilia Alshanetsky</strong>, member of the PHP Quality
 Assurance team, developer of the fudforum package, and a major contributor
 to PHP development.
</p>

<hr />

<h1>PHP.net news history</h1>

<p>
 <span class="newsdate">[15-Aug-2003]</span>
 Ever wonder what was the original PHP 3.0 release announcement, what
 where the choices when the PHP: Hypertext Preprocessor name was
 choosen, or since when you can use URL shortcuts to access pieces
 of our site? We have digged up some of the most interesting news
 items published on PHP.net since January 1998, when the site started
 to serve its visitors. You can find these <a href="http://www.php.net/news-2003.php">in
 the news archives</a>. There is also some historical information in
 <a href="http://www.php.net/history">the manual\'s history appendix</a>.
</p>

<hr />

<h1>Select mirror for redirection</h1>

<p>
 <span class="newsdate">[13-Aug-2003]</span>
 The www.php.net site tries to do the best to choose close mirrors based
 on all available data when redirecting users to mirror sites. Sometimes
 close mirror sites are unfortunately not the fastest. This is why we have
 added the mirror site selection possibility to <a href="http://www.php.net/my.php">our My
 PHP.net service</a>, which enables users to select a specific mirror
 site for redirections.
</p>

<hr />

<a href="http://www.php-mag.net/"><img src="http://static.php.net/www.php.net/images/news/php-mag.gif" alt="PHP Magazine" width="130" height="38" style="float: right;" /></a> 

<h1>PHP Magazine web site now with daily news</h1>

<p>
 <span class="newsdate">[12-Aug-2003]</span>
 <a href="http://www.php-mag.net/">The International PHP Magazine web site</a>
 now offers daily news for PHP professionals and beginners from all over the
 world, helping them to stay up-to-date with the latest news on PHP and
 related technologies.
</p>

<hr />

<h1>URL Shortcuts and Site Search</h1>

<p>
 <span class="newsdate">[29-Jul-2003]</span>
 After many of our users requested a change in how
 <a href="http://www.php.net/urlhowto.php">our URL shortcuts</a> behave when someone mistypes
 a shortcut, the default behaviour now is to look for a function name
 instead of performing a documentation search on Google. Those, who were
 satisfied with the Google search, can <a href="http://www.php.net/my.php">set their
 preference at the My PHP.net page</a>. We are working on a better
 onsite search solution, Google is used temporarily to search our site.
</p>

<hr />

<a href="http://www.phparch.com/"><img src="http://static.php.net/www.php.net/images/news/phpa_logo_small.gif" alt="php|architect" width="163" height="29" style="float: right;" /></a> 

<h1>php|architect now in print</h1>

<p>
 <span class="newsdate">[17-Jul-2003]</span>
 The publishers of <a href="http://www.phparch.com/">php|architect</a>, a
 monthly magazine dedicated exclusively to the world of PHP, have announced the
 availability of a <a href="http://www.phparch.com/print/">print edition</a> of 
 their publication. Subscriptions are now available at a special introductory
 price for readers worldwide.
</p>

<hr />

<a href="http://www.linuxtag.org/2003/en/index.html"><img src="http://static.php.net/www.php.net/images/news/linuxtag2003.gif" alt="LinuxTag" width="89" height="83" style="float: right;" /></a>
<h1>PHP @ LinuxTag</h1>
<p>
 <span class="newsdate">[06-Jul-2003]</span>
 From July, 10th to 13th 2003
 <a href="http://www.linuxtag.org/2003/en/index.html">LinuxTag</a>, Europe\'s
 largest Fair and Congress dedicated to Open Source in general and Linux in
 particular, takes place in Karlsruhe, Germany.
</p>
<p>
 Under the motto "PHP and Friends" the PHP Project showcases PHP and related
 projects, like MySQL, SQLite, Midgard, osCommerce or DB Designer, at booth
 F21.  In addition to the booth "PHP and Friends" offer an interesting
 programme of
 <a href="http://www.infodrom.org/Debian/events/LinuxTag2003/workshops.php3">technical
 talks and workshops</a> which are held by 24 speakers from 11 nations and cover
 the latest trends and technologies related to PHP, Apache and MySQL. Among the
 speakers are core developers of the discussed Open Source projects, for instance
 Ken Coar (Apache), Rasmus Lerdorf (PHP) or Kaj Arn&ouml; (MySQL).
</p>

<hr />

<h1>PHP 5.0.0 Beta 1</h1>
<p>
 <span class="newsdate">[29-Jun-2003]</span>
 The PHP development community is proud to announce the release of PHP 5
 Beta 1. Both source packages, and a Windows build are available in the
 <a href="http://www.php.net/downloads.php">Downloads Section</a>. A list of changes 
 can be found in the <a href="http://www.php.net/ChangeLog-5.php#5.0.0b1">ChangeLog</a>.
</p>
<p>
 Some of the more major changes include:
</p>
<ul>
 <li>
  PHP 5 features the Zend Engine 2.  For a list of Zend Engine 2 changes, please visit 
  <a href="http://www.php.net/zend-engine-2.php">this</a> webpage.
 </li>
 <li>
  XML support has been completely redone in PHP 5, all extensions are now focused around the 
  excellent libxml2 library (<a href="http://www.xmlsoft.org/">http://www.xmlsoft.org/</a>).
 </li>
 <li>
  SQLite has been bundled with PHP. For more information on SQLite, please visit their 
  <a href="http://www.hwaci.com/sw/sqlite/">website</a>.
 </li>
 <li>
  Streams have been greatly improved, including the ability to access low-level socket 
  operations on streams.
 </li>
</ul>
<p>
 <strong>Note</strong>: <em>This is a beta version. It should not be used in
 production or even semi-production web sites.</em> There are known bugs in it,
 and in addition, some of the features may change (based on feedback). We
 encourage you to download and play with it (and <a href="http://bugs.php.net/">report 
 bugs</a> if you find any!), but please do not replace your production
 installations of PHP 4 at this time.
</p>

<hr />

<a href="http://www.zend.com/survey/php_net.php"><img src="http://static.php.net/www.php.net/images/news/zendtech_logo.gif" alt="Zend Technologies" width="150" height="77" style="float: right;" /></a>
<h1>PHP Usage Survey</h1>
<p>
 <span class="newsdate">[24-Jun-2003]</span>
 Zend Technologies is sponsoring a public PHP Usage Survey.
 The results will be shared with the PHP Group, and will help
 us to better understand the ways in which PHP is being used,
 and what may need improvement.
 <a href="http://www.zend.com/survey/php_net.php">Fill it out</a>
 and get a chance to win one of 50 PHP T-shirts!
</p>

<hr />

<h1>PHP 4.3.2 Released!</h1>
<p>
 <span class="newsdate">[29-May-2003]</span>
 The PHP developers are proud to announce the immediate availability of
 <a href="release_4_3_2.php">PHP 4.3.2</a>. This release contains a large number of bug fixes
 and is a <strong>strongly</strong> recommended update for all users of PHP.
 Full list of fixes can be found in the <a href="ChangeLog-4.php#4.3.2">ChangeLog</a> file.
</p>

<hr />

<h1>Automatic Mirror Select</h1>
<p>
 <span class="newsdate">[23-May-2003]</span>
 In our ongoing battle to fight load and keep serving you content, whenever you
 perform a search on www.php.net, you will be redirected onto a nearby mirror
 (determined using the <a href="http://www.directi.com/?site=ip-to-country">Directi
 Ip-to-Country Database</a>). 
 You may experience a few quirks in the search until your mirrors have synced an up-to-date
 version of the site.
</p>

<hr />

<h1>Country Detection</h1>
<p>
 <span class="newsdate">[04-May-2003]</span>
 We are proud to introduce you the latest addition to our <a href="http://www.php.net/my.php">My
 PHP.net</a> service. The PHP.net site and mirror sites now autodetect
 your country using the <a href="http://www.directi.com/?site=ip-to-country">Directi
 Ip-to-Country Database</a>. We use this information to present events in
 your country in bold letters on the frontpage, and to offer close mirror
 sites for downloads and your usual daily work.
</p>

<hr />

<h1>My PHP.net</h1>

<p>
 <span class="newsdate">[24-Apr-2003]</span>
 The PHP website and mirrors sites now have a
 \'<a href="http://www.php.net/my.php">My PHP.net</a>\' page, which allows
 you to check what language settings you have, and enables
 you to set one which will override all the other detected
 parameters.
</p>

<p>
 However, normally this is not needed, as we remember the
 language you used last time. Be sure to have cookies turned
 on for PHP.net to let this feature work!
</p>

<hr />

<h1>Grant Program</h1>

<p>
 <span class="newsdate">[06-Mar-2003]</span>
 <a href="http://www.phparch.com">php|architect</a>, is proud to
 announce the creation of the php|architect Grant Program, whose goal is
 to provide financial support to best-of-breed PHP-related projects.
</p>

<p>
 Participation in the program is open to all open-source projects
 that are related to PHP (but not necessarily written <i>in</i> PHP). The
 program is accepting submissions now and will start distributing grants
 in June of 2003.
</p>

<p>
 For more information, visit the <a 
 href="http://www.phparch.com/grant/">program\'s website</a>.
</p>

<hr />

<h1>Set your own language preference</h1>

<p>
 <span class="newsdate">[01-Mar-2003]</span>
 Starting from today, your browser\'s "Accept Language" setting is also
 honored on language sensitive pages on the php.net site. If you would
 like to get to the documentation page of echo for example, you can use
 the <a href="http://www.php.net/echo">/echo</a> shortcut on all mirror sites, if your
 browser is set to provide your language preference information to the
 server. This also makes the PHP error message links point to the
 documentation in your preferred language.
</p>

<p>
 You can set your preferences under Edit/Preferences/Navigator/Languages
 in Mozilla, and under Tools/Internet Options/Languages in Internet
 Explorer. This will probably also enhance your web experience on sites
 providing translated content.
</p>

<hr />

<a href="http://phpconf.hu/"><img src="http://static.php.net/www.php.net/images/news/hu_conf.gif" alt="PHPConf.hu" width="119" height="90" style="float: right;" /></a>
<h1>First Hungarian PHP Conference</h1>

<p>
 <span class="newsdate">[25-Feb-2003]</span>
 The members of the Hungarian PHP community announce
 <a href="http://phpconf.hu/">the first Hungarian PHP Conference</a> which
 will take place in Budapest, on Saturday March 29th, sponsored by several
 international and local companies. The conference offers an entirely free one
 day activity with several presentations addressing basic and advanced topics,
 as well, exclusively in Hungarian. Moreover, a five kilobyte-limited PHP
 contest has been started to discover the most talented PHP programmers in
 our country. The programme includes the first session of the so-called PHP
 Division which will be established with the set purpose of representing the
 community itself and promoting their interests in any national business and
 official phorums.
</p>

<hr />

<h1>PHP 4.3.1 released in response to CGI vulnerability</h1>

<p>
 <span class="newsdate">[17-Feb-2003]</span>
 The PHP Group today announced the details of a serious
 <a href="release_4_3_1.php">CGI vulnerability</a> in PHP version 4.3.0. A
 security update, <a href="downloads.php">PHP 4.3.1</a>, fixes the issue.
 Everyone running affected version of PHP (as CGI) are encouraged to upgrade
 immediately. The new 4.3.1 release does not include any other changes,
 so upgrading from 4.3.0 is safe and painless.
</p>

<hr />

<a href="http://www.php-con.com/return.php?i=ph2"><img src="http://static.php.net/www.php.net/images/news/phpcon_logo.png" alt="PHPCon East 2003" width="194" height="39" style="float: right;" /></a>
<h1>PHPCon East 2003 - (April 23-25, 2003)</h1>
<p>
 <span class="newsdate">[01-Feb-2003]</span>
 PHPCon announces PHPCon East 2003 in New York City. This conference
 features two days of technical learning with speakers such as
 Rasmus Lerdorf, Zeev Suraski, Michael Radwin, George Schlossnagle and
 Jeremy Zawodny. PHPCon East also adds a third, full day of tutorials
 offering practical, cogent PHP solutions and ideas including: MySQL
 and PHP; Building and Consuming Web Services with SOAP; Getting
 Started with PHP; High Performance PHP: Profiling and Benchmarking;
 and more!
</p>

<p>
 PHPCon East has discounts for early registration, students, non-profits,
 and Tutorial/Conference packages. Early Bird Deadline is March 31st. For
 more program information, <a href="http://www.php-con.com/return.php?i=ph2">visit
 the PHPCon website</a>.
</p>

<hr />

<a href="http://phpconf.phpquebec.org/index.php"><img src="http://static.php.net/www.php.net/images/news/conference_php_quebec.gif" alt="Conference PHP Quebec" width="131" height="63" style="float: right;" /></a>
<h1>Conf&eacute;rence PHP Qu&eacute;bec 2003 - (Montr&eacute;al, March 20&amp;21rst, 2003)</h1>
<p>
 <span class="newsdate">[28-Jan-2003]</span>
 The PHP Qu&eacute;bec association announces the <a
 href="http://phpconf.phpquebec.com/">Conf&eacute;rence PHP Qu&eacute;bec 2003</a>.
 The conference will take place in the &Eacute;cole Polytechnique de Montr&eacute;al, 
 Qu&eacute;bec, Canada.
</p>

<p>
 The Conf&eacute;rence PHP Qu&eacute;bec features two days of conferences, with 
 outstanding customer cases from Canada, and cutting edge technical 
 sessions, hosted by international experts. An exhibitor room will
 showroom professional solutions.
</p>

<p>
 Learn more about those exciting days at 
 <a href="http://phpconf.phpquebec.org/index.php">phpconf.phpquebec.com</a>.
</p>

<hr />

<a href="http://www.phpconference.com/"><img src="http://static.php.net/www.php.net/images/news/international_conference_2003_spring.gif" alt="Int\'l PHP Conference" width="131" height="75" style="float: right;" /></a>
<h1>International PHP Conference 2003 - Spring Edition (Amsterdam, May 8-9)</h1>
<p>
 <span class="newsdate">[13-Jan-2003]</span>
 Software &amp; Support Verlag announced the <a
 href="http://www.phpconference.com/">International PHP Conference 2003 - Spring
 Edition</a> - in Amsterdam. The dates for this event for PHP enthusiasts from
 all over the world will be May 8 and 9, 2003. The conference venue is the RAI
 conference center in Amsterdam.
</p>

<p>
 Like the International PHP Conferences in Frankfurt this conference will
 offer a first class program  to an international audience of PHP enthusiasts.
 We are happy to ask you to submit your <a
 href="http://www.phpconference.com/content/content2.php?CatID=0&amp;NewsID=354">proposals</a>
 for the session program.
</p>

<p>
 The topics are General PHP, PHP &amp; Business, PHP &amp; Databases, PHP
 Design, PHP Extensions, PHP &amp; XML and PHP-GTK.
</p>

<hr />

<h1>PEAR Out of Beta!</h1>
<p>
 <span class="newsdate">[11-Jan-2003]</span>
 The PEAR development team is proud to announce that
 <a href="http://pear.php.net/">PEAR</a> is finally out of its long
 beta period. As of PHP 4.3, the PEAR installer is installed by default.
 Unix support is considered stable, while Windows and Darwin are still
 of beta-quality.
</p>

<hr />

<hr />

<h1>A Note on Security in PHP</h1>

<p>
 <span class="newsdate">[31-Dec-2004]</span>
 The PHP Development Team has issued an <a href="http://www.php.net/security-note.php">important
 statement</a> that deals with the security of PHP, and of PHP-based applications.
 The trigger for releasing this statement was the growing misconception in the PHP
 community regarding recent security problems, which exploited bugs
 in PHP applications, rather than bugs in PHP itself.  It\'s a recommended read
 for anybody using PHP.
</p>

<hr />

<h1>Function list suggestions available</h1>
<p>
 <span class="newsdate">[27-Dec-2004]</span>
 Surely, some of our visitors are back at work for a few days between
 holidays, and hopefully they will find our post-christmas gift useful.
 The function list suggestions we started to test a year ago seemed to
 be working better as some bugs were found and fixed, so it was time to
 make the result available on all php.net pages.
</p>
<p>
 Whenever you type something into the search field, while having the
 function list search option selected, you will get a list of suggested
 functions starting with the letters you typed in. You can browse the list
 with the up/down keys, and you will be able to autocomplete the function
 name with the spacebar.
</p>
<p>
 If you are not interested in this feature, you can turn it
 off for yourself on the <a href="http://www.php.net/my.php">My PHP.net</a> page.
 <a href="http://www.php.net/search.php">More information</a> about is available on
 the search page.
</p>

<hr />

<h1>PHP 4.3.10 &amp; 5.0.3 released!</h1>
<p>
 <span class="newsdate">[15-Dec-2004]</span>
  The PHP Development Team would like to announce the immediate release of 
  <a href="http://www.php.net/downloads.php">PHP 4.3.10</a> and <a href="http://www.php.net/downloads.php">PHP 5.0.3</a>. 
  These are maintenance releases that in addition to non-critical bug fixes 
  address several very serious security issues. All Users of PHP are strongly 
  encouraged to upgrade to one of these releases as soon as possible.
</p>

<p>
 For changes since PHP 4.3.9, please consult the
 <a href="http://www.php.net/ChangeLog-4.php#4.3.10">PHP 4 ChangeLog</a>.
 For changes since PHP 5.0.2, please consult the
 <a href="http://www.php.net/ChangeLog-5.php#5.0.3">PHP 5 ChangeLog</a>.
</p>

<hr />

<h1>Second Bulgarian PHP Conference</h1>
<p>
 <span class="newsdate">[15-Dec-2004]</span>
 The second Web Technology conference in Bulgaria will be held in March 2005
 at the city of Sofia. Within its framework, the <a
 href="http://webtech2005.info/index.php?/archives/19-PHP-iioaaioee.html">Second
 Bulgarian PHP Conference</a> and first IT Business conference will be held.
 The purpose of this meeting is to discuss the new tendencies in this direction
 and to popularize the internet technologies in the spheres of business,
 education, and services. The range of subjects includes technologies like
 PHP, Perl, business systems through web, education through the internet, and
 others.
</p>

<hr />

<h1>International PHP Conference 2005 - Spring Edition (Amsterdam, May 2-4)</h1>
<p>
 <span class="newsdate">[15-Dec-2004]</span>
 The PHP Center and the Software &amp; Support Verlag are pleased
 to announce the <a href="http://www.phpconference.com/">International
 PHP Conference 2005 Spring Edition</a> in Amsterdam, Netherlands.
 The dates for this event will be May 2-4, 2005. The conference venue
 is the RAI conference center.
</p>
<p>
 The topics are General PHP, PHP &amp; Business/Integration,
 PHP &amp; Databases, PHP Design, PHP Extensions, PHP &amp; XML
 and PHP-GTK.
</p>

<hr />

<a href="http://nosoftwarepatents.com/"><img src="http://static.php.net/www.php.net/images/news/90x40_3.jpg" alt="No Software Patents" width="90" height="40" style="float: right;" /></a>
<h1>MySQL, RedHat and other partners started a new campaign against software patents</h1>
<p>
 <span class="newsdate">[01-Nov-2004]</span>
 In order to boost more awareness of the pending software patent issues in the
 European Union&mdash;MySQL, ISP 1&amp;1, RedHat and other partners started
 a new portal "<a href="http://nosoftwarepatents.com">http://nosoftwarepatents.com</a>".
 The site is available in 10 different european languages and explains why
 software patents are bad, and how they might affect you. In order to learn
 more, or participate in events against software patents, have a look at the
 very informative <a href="http://nosoftwarepatents.com">website</a>.
</p>

<hr />

<a href="http://www.zend.com/php5/contest/"><img src="http://static.php.net/www.php.net/images/news/zendtech_logo.gif" alt="Zend Technologies" width="150" height="77" style="float: right;" /></a>
<h1>Zend\'s PHP 5 Coding Contest winners announced</h1>
<p>
 <span class="newsdate">[25-Oct-2004]</span>
 Congratulations to Qiang Xue, whose application
 \'<a href="http://www.xisc.com/">PRADO</a>\' earned high votes both
 from the public and from the judges\' panel!
 There are 49 other prizewinning applications in Zend\'s
 <a href="http://www.zend.com/php5/contest">contest gallery</a>
 &ndash; too many to list here.  Some of them are ongoing projects, bringing
 PHP 5 a small armoury of useful open source tools.
</p>

<p>
 The top 50 applications will remain on display until the end of
 this year, giving you the chance to take a leisurely look through
 the code and see how the new features in PHP 5 should be used.
</p>

<hr />

<a href="http://www.phpquebec.com/modules/news/article.php?storyid=55"><img src="http://static.php.net/www.php.net/images/news/conference_php_quebec.gif" alt="PHP Québec" width="131" height="63" style="float: right;" /></a><h1>PHP before Canadian government, in Ottawa, October 19th and 20th, 2004</h1>
<p>
 <span class="newsdate">[12-Oct-2004]</span>
 <a href="http://www.phpquebec.com/">PHP Québec</a>, the profesional association
 of PHP users in Québec, will be part of the <a 
 href="http://www.gtecweek.com/">GTEC exhibition</a>, in Ottawa, Ontario, on 
 Tuesday October 19th and Wednesday October 20th. PHP Québec will present PHP\'s
 features, its capabilities for e-government and its support services in Canada. 
 Come and meet us on the floor, booth 1610C.
</p>

<hr />

<a href="http://www.afup.org/forumphp/"><img src="http://static.php.net/www.php.net/images/news/afup2004.jpg" alt="Forum PHP" width="99" height="52" style="float: right;" /></a>
<h1>Forum PHP in Paris, November 18 &amp; 19, 2004</h1>
<p>
 <span class="newsdate">[28-Sep-2004]</span>
 The French <a href="http://www.afup.org/">AFUP association</a>
 is proud to announce the fourth annual PHP meeting in Paris,
 on November 18th and 19th, 2004. Developers and managers will
 gather to meet Zeev Suraski, Rasmus Lerdorf and other prominent community experts
 for two days of sessions, packed with
 <a href="http://www.afup.org/article.php3?id_article=253">enterprise solutions and advanced techniques</a>
 (in French).
</p>

<hr />

<a href="http://www.php.net/downloads.php#v5"><img src="http://static.php.net/www.php.net/images/news/php-version5.gif" alt="PHP 5" width="100" height="64" style="float: right;" /></a><h1>PHP 5.0.2 released!</h1>
<p>
 <span class="newsdate">[23-Sep-2004]</span>
 The PHP Development Team is proud to announce the immediate release of <a href="http://www.php.net/downloads.php#v5">PHP 5.0.2</a>.
 This is a maintenance release that in addition to many non-critical bug fixes, addresses a problem
 with GPC input processing. 
 All Users of PHP 5 are encouraged to upgrade to this release as soon as possible.
</p>

<p>
 For changes since PHP 5.0.1, please consult the
 <a href="http://www.php.net/ChangeLog-5.php#5.0.2">ChangeLog</a>.
</p>

<hr />

<a href="http://www.php.net/downloads.php#v4"><img src="http://static.php.net/www.php.net/images/news/php-version4.gif" alt="PHP 4" width="100" height="64" style="float: right;" /></a><h1>PHP 4.3.9 released!</h1>
<p>
 <span class="newsdate">[22-Sep-2004]</span>
 The PHP Development Team is proud to announce the immediate release of <a href="http://www.php.net/downloads.php">PHP 4.3.9</a>.
 This is a maintenance release that in addition to over 50 non-critical bug fixes, addresses a problem
 with GPC input processing. This release also re-introduces ability to write
 GIF images via the bundled GD extension.
 All Users of PHP are encouraged to upgrade to this release as soon as possible.
</p>

<p>
 For changes since PHP 4.3.8, please consult the
 <a href="http://www.php.net/ChangeLog-4.php#4.3.9">ChangeLog</a>.
</p>

<hr />

<a href="http://mysqlcomconeurope.com"><img src="http://static.php.net/www.php.net/images/news/MySQLcomcon_logo.gif" alt="MySQL" width="101" height="85" style="float: right;" /></a><h1>MySQL ComCon Europe</h1>
<p>
 <span class="newsdate">[06-Sep-2004]</span>
 The MySQL ComCon Europe 2004 brings together the vigor and excitement of a
 community event with the structure of MySQL mission-critical business event.
 The conference will take place in Frankfurt from November 9th to 10th and will
 have a day of pre-conference power workshops on the 8th. Sessions on diverse
 topics such as "Performance Tuning J2EE Applications deployed on MySQL", "PHP
 5 and MySQL 4.1/5.0" and a two-part introduction to MySQL Cluster will be
 presented by MySQL core developers, expert trainers and MySQL community
 leaders. For more details on the event, please visit
 <a href="http://mysqlcomconeurope.com">http://mysqlcomconeurope.com/</a>.
</p>

<hr />

<h1>OSCOM.4 with Apache Track</h1>
<p>
 <span class="newsdate">[14-Aug-2004]</span>
 OSCOM, the international association for Open Source Content Management
 is arranging the <a href="http://oscom.org/events/oscom4/program/">Fourth
 Open Source Content Management Conference</a> from 29th September to 1st
 October in Zürich. This fall, the event features Apache Software Foundation
 projects, and PHP, so you have a chance to meet some prominent
 figures of the PHP scene there. OSCOM.4 is a place for developers,
 vendors, integrators and users to mingle and learn from each other. <a
 href="http://oscom.org/events/oscom4/registration">Registration is
 now open</a>!
</p>

<hr />

<h1>New Installation Instructions</h1>
<p>
 <span class="newsdate">[14-Aug-2004]</span>
 The latest online version of the PHP Manual contains a completely reorganized
 <a href="http://www.php.net/install">Installation and Configuration</a> part, which is now
 divided into sections for individual platforms and servers to ease your first
 steps with PHP. The Windows installation instructions are completely
 revised, and now suggest you to set environment variables instead of moving 
 files. This way upgrades and configuration changes become easier.
</p>

<hr />

<a href="http://www.php.net/downloads.php#v5"><img src="http://static.php.net/www.php.net/images/news/php-version5.gif" alt="PHP 5" width="100" height="64" style="float: right;" /></a><a name="5.0.1"></a>
<h1>PHP 5.0.1 Released!</h1>
<p>
 <span class="newsdate">[12-Aug-2004]</span>
 The PHP Development Team would like to announce the immediate availability of <a href="http://www.php.net/downloads.php">PHP 5.0.1</a>.
 This is a maintenance release that in addition to many non-critical bug fixes also includes new UNIX and
 Windows installation docs which are now auto-generated from the PHP Manual.
</p>

<p>
 For changes since PHP 5.0.0, please consult the
 <a href="http://www.php.net/ChangeLog-5.php#5.0.1">ChangeLog</a>.
</p>

<hr />

<h1>PHP Tunisie Magazine</h1>
<p>
 <span class="newsdate">[02-Aug-2004]</span>
 <a href="http://www.phptunisie.net/">PHP Tunisie</a> has just released the 
 <a href="http://www.phptunisie.net/formation/downloadmagazine/2/1/">second 
 issue</a> of its monthly french PHP Magazine. In this issue you\'ll find
 a large plan on PostgreSQL, Databases abstractions with PHP, your mini
 template engine, an article on images generation with PHP, the migration
 towards PHP5 with EasyPHP1.7...  And many other articles and latests PHP news.
</p>
<p>
 PHP Tunisie Magazine is edited by the Tunisian PHP Users Group.
</p>

<hr />

<a href="http://www.php.net/downloads.php#v5"><img src="http://static.php.net/www.php.net/images/news/php-version5.gif" alt="PHP 5" width="100" height="64" style="float: right;" /></a><a name="5.0.0"></a>
<h1>PHP 5.0.0 Released!</h1>
<p>
 <span class="newsdate">[13-Jul-2004]</span>
 The PHP team is proud to announce the <a href="http://www.php.net/downloads.php#v5">final release of PHP 5</a>!
</p>

<p>Some of the key features of PHP 5 include:</p>

<ul>
 <li>
  The <a href="http://www.zend.com/php5/zend-engine2.php">Zend Engine II</a>
  with a new object model and dozens of new features.
 </li>
 <li>
  XML support has been completely redone in PHP 5, all extensions are now
  focused around the excellent libxml2 library
  (<a href="http://www.xmlsoft.org/">http://www.xmlsoft.org/</a>).
 </li>
 <li>
  A new SimpleXML extension for easily accessing and manipulating XML as
  PHP objects. It can also interface with the DOM extension and vice-versa.
 </li>
 <li>
  A brand new built-in SOAP extension for interoperability with Web Services.
 </li>
 <li>
  A new MySQL extension named MySQLi for developers using MySQL 4.1 and later.
  This new extension includes an object-oriented interface in addition to
  a traditional interface; as well as support for many of MySQL\'s new features,
  such as prepared statements.
 </li>
 <li>
  SQLite has been bundled with PHP. For more information on SQLite,
  please visit <a href="http://www.sqlite.org/">their website</a>.
 </li>
 <li>
  Streams have been greatly improved, including the ability to access
  low-level socket operations on streams.
 </li>
 <li>And lots more...</li>
</ul>

<p>
 For changes since Release Candidate 3, please consult the
 <a href="http://www.php.net/ChangeLog-5.php#5.0.0">ChangeLog</a>.
</p>

<hr />

<a href="http://www.php.net/downloads.php#v4"><img src="http://static.php.net/www.php.net/images/news/php-version4.gif" alt="PHP 4" width="100" height="64" style="float: right;" /></a>
<h1>PHP 4.3.8 released!</h1>
<p>
 <span class="newsdate">[13-Jul-2004]</span>
 PHP Development Team would like to announce the immediate availability of <a href="http://www.php.net/downloads.php">PHP 4.3.8</a>.
 This release is made in response to several security issues that have been discovered since the
 4.3.7 release. All users of PHP are strongly encouraged to upgrade to PHP 4.3.8 as soon as possible.
</p>

<hr />

<h1>International PHP Conference 2004</h1>
<p>
 <span class="newsdate">[18-Jun-2004]</span>
 The traditional International PHP Conference 2004 will be taking
 place from 7th November to 10th November in Frankfurt (FFM). The
 Call for Papers has been issued, so if you have an interesting
 talk, the organizers would love to hear about it! You can expect
 a gathering of PHP experts and core developers.
</p>
<p>
 You can find the CfP <a href="http://www.phpconference.de/2004/cfp_en.php">on
 the website</a>. The deadline is 16th July, 2004.
</p>
<p>
 The conference is also featuring an <strong>OpenSource Exhibition</strong>
 where PHP related OpenSource projects can present themselves for free.
</p>

<hr />

<a href="http://phparch.com/phpworks"><img src="http://static.php.net/www.php.net/images/news/phpworks.png" alt="php|works" width="180" height="40" style="float: right;" /></a><h1>php|works - early-bird discount now in effect</h1>
<p>
 <span class="newsdate">[16-Jun-2004]</span>
 <a href="http://www.phparch.com">php|architect</a> magazine is proud to
 introduce <a href="http://www.phparch.com/phpworks">php|works 2004</a>, a
 three-day conference on PHP and the business of open-source software that
 will be held in Toronto, Canada, September 22-24 2004.
</p>
<p>
 The conference includes a total of over 30 hours of technical and
 business-oriented presentations that range from Rasmus Lerdorf\'s "Best
 Practices for PHP Developers" to "Getting your OSS Business Funded",
 presented by venture capital specialist Christian Mayaud. Other sessions
 include practical talks on PHP 5, regular expressions, multilingual
 development, PDO, XML and OOP. The business track includes sessions on the
 use of PHP in the legal, financial and healthcare industry, growing your
 business with OSS, the status of the PHP market and much, much more!
</p>
<p>
 As an added bonus, attendees who sign up before July 20th are
 eligible for up to $100 in early-bird savings.
</p>
<p>
 For more information, visit the <a
 href="http://www.phparch.com/phpworks">php|works website</a>.
</p>

<hr />

<a href="http://lamparea.org/en"><img src="http://static.php.net/www.php.net/images/news/lamparea.png" alt="Lamp Area" width="130" height="40" style="float: right;" /></a><h1>LAMP area at LinuxTag 2004 in Karlsruhe, Germany</h1>
<p>
 <span class="newsdate">[14-Jun-2004]</span>
 The LAMP area will highlight the use of Linux, Apache, MySQL and PHP as
 technologies for enterprise applications at <a
 href="http://linuxtag.de">LinuxTag 2004</a> in Karlsruhe, Germany from June 23
 to 26. The companies that are presenting in the speakers area of the 150
 square meters booth are: <a href="http://100days.de">100days</a>, <a
 href="http://ez.no">eZ systems</a>, <a
 href="http://thinkphp.de">Mayflower</a>, <a href="http://mysql.com">MySQL</a>
 and <a href="http://zend.com">Zend</a>.
</p>

<p>
 Besides presentations from the above companies the LAMP area also presents
 over 40 sessions by Apache-, MySQL- and PHP-developers, such as Rasmus Lerdorf,
 Ken Coar and Brian Aker. Entrance to LinuxTag is free if you
 <a href="https://www.linuxtag.org/2004/registrationform.html">pre-register</a>.
 For more information see <a href="http://lamparea.org/en">the LAMP Area</a>
 website.
</p>

<hr />

<a href="http://www.php.net/downloads.php#5"><img src="http://static.php.net/www.php.net/images/news/php-version5.gif" alt="PHP 5" width="100" height="64" style="float: right;" /></a><h1>PHP 5 Release Candidate 3 Released!</h1>
<p>
 <span class="newsdate">[8-Jun-2004]</span>
 The <a href="http://www.php.net/downloads.php#v5">third (and hopefully final) Release Candidate
 of PHP 5</a> is now available!  This mostly bug fix release improves PHP 5\'s
 stability and irons out some of the remaining issues before PHP 5 can be
 deemed release quality.  Everyone is now encouraged to start playing with it!
</p>

<p>There are few changes changes since Release Candidate 2, which can be found
<a href="http://www.php.net/ChangeLog-5.php#5.0.0RC3">here</a>.
</p>

<hr />

<a href="http://www.zend.com/php5/contest/"><img src="http://static.php.net/www.php.net/images/news/zendtech_logo.gif" alt="Zend Technologies" width="150" height="77" style="float: right;" /></a>
<h1>Zend\'s PHP 5 Coding Contest</h1>

<p>
 <span class="newsdate">[06-Jun-2004]</span>
 <a href="http://www.zend.com/php5/contest/">Zend\'s
 PHP 5 Coding Contest</a> is underway and accepting submissions. 
 This is every developer\'s chance to flaunt their PHP 5 skills
 and let their application shine!
</p>

<p>
 Applications will be rated both by your peers and by a panel of
 judges assembled from among the most known and well-respected
 names in the PHP community. 
</p>

<p>
 Lots of <a href="http://www.zend.com/php5/contest/prizes.php">prizes</a>
 are available!
</p>

<hr />

<a href="http://www.php.net/downloads.php#5"><img src="http://static.php.net/www.php.net/images/news/php-version5.gif" alt="PHP 5" width="100" height="64" style="float: right;" /></a><h1>PHP 5 Release Candidate 2 Released!</h1>
<p>
 <span class="newsdate">[25-Apr-2004]</span>
 The <a href="http://www.php.net/downloads.php#v5">second Release Candidate of PHP 5</a> is now
 available! This mostly bug fix release improves PHP 5\'s stability and irons out
 some of the remaining issues before PHP 5 can be deemed release quality. Note
 that it is still <i>not</i> recommended for mission-critical use but people are
 encouraged to start playing with it and report any problems.
</p>

<p>Key changes since Release Candidate 1 include:</p>

<ul>
 <li>
  The Zend Engine I compatibility mode (zend.ze1_compatibility_mode) has been
  re-implemented to more accurately support PHP 4\'s object auto-clone behavior.
 </li>
 <li>
  All object-oriented extensions except for MySQLi have moved to studlyCaps.
  This includes SQLite, SOAP, Reflection API, Ming and others.
 </li>
 <li>
  Implementing an interfaces and/or abstract method with the wrong prototype is
  now a fatal error. For backwards compatibility, re-implementing regular methods
  with the wrong prototype will only result in an E_STRICT warning.
 </li>
 <li>
  Features as described in the Release Candidate 1
  <a href="http://www.php.net/index.php#5.0.0RC1">release announcement</a>
 </li>
 <li>And lots more...</li>
</ul>

<p>
 For changes since Release Candidate 1, please consult the
 <a href="http://www.php.net/ChangeLog-5.php#5.0.0RC2">ChangeLog</a>.
</p>

<hr />

<h1>Second PHP Marathon announced</h1>
<p>
 <span class="newsdate">[06-Apr-2004]</span>
 DotGeek.org is proud to announce the <a href="http://marathon.dotgeek.org/">second
 PHP Programming Marathon</a> to be held on the 24 April 2004. Instead of receiving the
 problems and composing your solutions offline, it all takes place online and within
 a specific timeframe. The Marathon is kindly sponsored by Zend Technologies and will
 now feature a problem on PHP 5. Participation is free of charge.
</p>

<hr />

<a href="http://www.php.net/downloads.php#5"><img src="http://static.php.net/www.php.net/images/news/php-version5.gif" alt="PHP 5" width="100" height="64" style="float: right;" /></a><a name="5.0.0RC1"></a>
<h1>PHP 5 Release Candidate 1 Released!</h1>
<p>
 <span class="newsdate">[18-Mar-2004]</span>
 The <a href="http://www.php.net/downloads.php#v5">first Release Candidate of PHP 5</a> is finally
 here!  The move from Beta stage to RC stage means that PHP 5 is now feature
 complete, and is quite stable - stable enough for everyone to start playing
 with.  Note that it is still <i>not</i> recommended for mission-critical
 use.
</p>

<p>Some of the key features of PHP 5 include:</p>

<ul>
 <li>
  The <a href="http://www.zend.com/php5/zend-engine2.php">Zend Engine II</a>
  with a new object model and dozens of new features.
 </li>
 <li>
  XML support has been completely redone in PHP 5, all extensions are now
  focused around the excellent libxml2 library
  (<a href="http://www.xmlsoft.org/">http://www.xmlsoft.org/</a>).
 </li>
 <li>
  A new MySQL extension named MySQLi for developers using MySQL 4.1 and later.
  This new extension includes an object-oriented interface in addition to
  a traditional interface; as well as support for many of MySQL\'s new features,
  such as prepared statements.
 </li>
 <li>
  SQLite has been bundled with PHP. For more information on SQLite,
  please visit <a href="http://www.sqlite.org/">their website</a>.
 </li>
 <li>
  A brand new built-in SOAP extension for interoperability with Web Services.
 </li>
 <li>
  A new SimpleXML extension for easily accessing and manipulating XML as
  PHP objects. It can also interface with the DOM extension and vice-versa.
 </li>
 <li>
  Streams have been greatly improved, including the ability to access
  low-level socket operations on streams.
 </li>
 <li>And lots more...</li>
</ul>

<p>
 For changes since Beta 4, please consult the
 <a href="http://www.php.net/ChangeLog-5.php#5.0.0RC1">ChangeLog</a>.
</p>

<hr />

<h1>Spanish PHP Mailing List Now at PHP.net</h1>
<p>
 <span class="newsdate">[29-Feb-2004]</span>
 The Spanish PHP mailing list was relocated to our list server.
 If you would like to subscribe to the list, you can do it via our
 <a href="mailing-lists.php">mailing lists page</a>. To read
 the archives, please see <a href="http://news.php.net/">our
 news server</a>.
</p>

<hr />

<a href="http://www.phpconference.com/"><img src="http://static.php.net/www.php.net/images/news/intcon2004spring.png" alt="International PHP Conference 2004 - Spring Edition" width="133" height="76" style="float: right;" /></a>
<h1>International PHP Conference 2004 Amsterdam: Timetable and Open Source PHP projects</h1>
<p>
 <span class="newsdate">[27-Feb-2004]</span>
 Having the CfP over now, the organizers of the
 <a href="http://www.phpconference.com/">International PHP Conference
 2004 Spring Edition Amsterdam</a> have published the
 <a href="http://www.phpconference.com/proxy/proxy.php?CatID=0&amp;NewsID=374">session
 and workshop timetable</a>. The Conference features 32 sessions and two
 power workshops. It will happen again at <a
 href="http://www.phpconference.com/content/content2.php?CatID=0&amp;NewsID=356">the
 RAI Conference Centre, Amsterdam</a>.
</p>
<p>
 <strong>Open Source PHP projects</strong> can present themselves, like in
 the last years, for free on the Conference at the exhibition area between
 the commercial exhibitors. Take your chance and contact
 <a href="mailto:fstepan@entwickler.com">Frank Stepan</a> from
 Software &amp; Support.
</p>

<hr />

<a href="http://conf.phpquebec.org/"><img src="http://static.php.net/www.php.net/images/news/conference_php_quebec.gif" alt="Conference PHP Quebec" width="131" height="63" style="float: right;" /></a>
<h1>Conf&eacute;rence PHP Qu&eacute;bec 2004 - (Montr&eacute;al, March 25&amp;26rst, 2004)</h1>
<p>
 <span class="newsdate">[11-Feb-2004]</span>
 The PHP Qu&eacute;bec Association announces the <a
 href="http://conf.phpquebec.com/">Conference PHP Qu&eacute;bec 2004</a>.
 The conference features 20 sessions over 2 days, in English and French.
 3 tracks : PHP advanced technics, PHP professionnal and Open Source technologies.
 It will take place downtown Montr&eacute;al, Qu&eacute;bec, Canada.
</p>
<p>
 We are currently offering <a 
 href="http://conf.phpquebec.org/main.php/en/conf2004/tarif">early bird prices</a>.
 Students and Small Businesses are eligible for reduced prices.
 Buy your tickets early to get rebates and discount with the DVD!
</p>
<p>
 Learn more about those exciting days at 
 <a href="http://conf.phpquebec.org/">conf.phpquebec.com</a>.
</p>

<hr />

<a href="http://www.pawscon.com/"><img src="http://static.php.net/www.php.net/images/news/paws_small.jpg" alt="PHP and Web Standards Conference - UK 2004" width="156" height="91" style="float: right;" /></a>
<h1>PaWS Tickets Now On Sale!</h1>
<p>
 <span class="newsdate">[05-Feb-2004]</span>
 The <a href="http://www.pawscon.com/">PaWS Group</a> is proud to announce that
 tickets are now available for the first 
 <a href="http://www.pawscon.com/">PHP and Web Standards Conference</a>. We are
 offering Weekend tickets (Saturday 21st and Sunday 22nd only) as well as Conference
 tickets (Friday 20th - Tuesday 24th) for the entire length of the event. 
 Additionally, we also have Daily tickets available for each day of the conference.
 Tickets will also be available on the door for those that simply want to drop in.
</p>
<p>
 For ticket and accommodation Prices, look over our 
 <a href="http://www.pawscon.com/pricing">pricing guide</a> for more information.
 <a href="http://www.pawscon.com/register">Purchase your tickets</a> today for this
 one of a kind conference!
</p>

<hr />

<h1>PHP 5.1.1 Released</h1>
<p>
 <span class="newsdate">[28-Nov-2005]</span>
 The PHP Development Team would like to announce the immediate release of <a href="http://www.php.net/downloads.php">PHP 5.1.1</a>.<br />
 This is a regression correction release aimed at addressing several issues introduced by PHP 5.1.0, the core changes as follows: 
<ul>
<li>Native date class is withdrawn to prevent namespace conflict with PEAR\'s date package.</li>
<li>Fixed fatal parse error when the last line of the script is a PHP comment.</li>
<li>eval() hangs when the code being evaluated ends with a comment.</li>
<li>Usage of \{$var} in PHP 5.1.0 resulted in the output of {$var} instead of the $var variable\'s value enclosed in {}.</li>
<li>Fixed inconsistency in the format of PHP_AUTH_DIGEST between Apache 1 and 2 sapis.</li>
<li>Improved safe_mode/open_basedir checks inside the cURL extension.</li>
</ul>

The complete details about all of the changes can be found in the
<a href="http://www.php.net/ChangeLog-5.php#5.1.1">PHP 5 ChangeLog</a>.
</p>

<hr />

<h1>PHP 5.1.0 Released</h1>
<p>
 <span class="newsdate">[24-Nov-2005]</span>
 The PHP development team is proud to announce the release of <a href="http://www.php.net/downloads.php#v5">PHP 5.1.0</a>.<br />
 Some of the key features of PHP 5.1.0 include:
<ul>
<li>A complete rewrite of date handling code, with improved timezone support.</li>
<li>Significant performance improvements compared to PHP 5.0.X.</li>
<li>PDO extension is now enabled by default.</li>
<li>Over 30 new functions in various extensions and built-in functionality.</li>
<li>Bundled libraries, PCRE and SQLite upgraded to latest versions.</li>
<li>Over 400 various bug fixes.</li>
<li>PEAR upgraded to version 1.4.5</li>
</ul>

In addition to new features, this release includes a number of important
security fixes and we recommend that all users of PHP 5.0 and early
adopters of PHP 5.1 betas upgrade to this release as soon as possible.
The complete details about all of the changes can be found in the
<a href="http://www.php.net/ChangeLog-5.php#5.1.0">PHP 5 ChangeLog</a> and an
<a href="http://www.php.net/migration51">upgrading guide</a> is available as well.
</p>

<hr />

<h1>PHP 4.4.1 Released</h1>
<p>
 <span class="newsdate">[31-Oct-2005]</span>
 PHP 4.4.1 is now <a href="http://www.php.net/downloads.php#v4">available for download</a>.
 This version is a maintenance release, that contains numerous bug fixes,
 including a number of security fixes related to the overwriting of the GLOBALS
 array. All users of PHP 4.3 and 4.4 are encouraged to upgrade to this version.
</p>
<p>
 The full list of changes in PHP 4.4.1 is available in the
 <a href="http://www.php.net/ChangeLog-4.php#4.4.1">PHP 4 ChangeLog</a>.
</p>

<hr />

<a href="http://www.afup.org/pages/forumphp/"><img src="http://static.php.net/www.php.net/images/news/afup2005.jpg" alt="Forum PHP" width="150" height="82" style="float: right;" /></a>
<h1>Forum PHP in Paris, November 9 &amp; 10th, 2005</h1>
<p>
 <span class="newsdate">[05-Oct-2005]</span>
 The French <a href="http://www.afup.org/">AFUP association</a>
 is proud to announce the fourth annual PHP meeting in Paris,
 on November 9th and 10th, 2005. Developers and managers will
 gather to meet Rasmus Lerdorf, Wez Furlong and other prominent community experts
 for two days of sessions, packed with
 <a href="http://www.afup.org/pages/forumphp/">enterprise solutions and advanced techniques</a>
 (in French).
</p>

<hr />

<a href="http://zend.kbconferences.com/"><img src="http://static.php.net/www.php.net/images/news/zendphp_conf.gif" alt="Zend/PHP Conference &amp; Expo" width="173" height="68" style="float: right;" /></a><h1>Zend/PHP Conference &amp; Expo 2005 Program Announced</h1>
<p>
 <span class="newsdate">[20-Sep-2005]</span>
 The final program for the Zend / PHP Conference (October 18-21, 2005 in
 San Francisco) 
 <a href="http://zend.kbconferences.com/speakerschedule.php">is now available</a>.
 The conference theme is "Power Your
 Business With PHP" and features keynote addresses from Marc Andreessen,
 Google VP Adam Bosworth, and executives from IBM, Oracle &amp; Intel.
 Featured speakers include Michael Radwin of Yahoo!, Adam Trachtenberg
 of eBay, Joyce Park of Renkoo.com, George Schlossnagle &amp; Wez Furlong
 of OmniTI, and, of course, Zeev Suraski &amp; Andi Gutmans.
</p>
<p>
 In addition to keynotes and sessions, the conference also features tutorials,
 certification, a party continuing the celebration of the 10th Anniversary of
 PHP, and an exhibit hall including companies like Zend, IBM, Oracle,
 Intel, MySQL, Microsoft, eBay/PayPal, Emic Networks, ActiveGrid, ActiveState
 and SpikeSource.  Registration discounts are still available.
</p>

<hr />

<h1>Get Your Pocket PHP Reference and Help Hurricane Relief</h1>
<p>
 <span class="newsdate">[08-Sep-2005]</span>
 php|architect has announced the publication of
 <a href="http://www.phparch.com/rcrs">php|architect\'s Pocket
 PHP Reference</a>, a handy guide to every function in PHP, inclusive
 of syntax, extension and description. It\'s a perfect companion
 for all your coding work, perfect for looking up function syntax
 in a pinch, and its convenient pocket size (5x8") makes it
 unobtrusive and easy to transport.
</p>
<p>
 What\'s more, however, buying this book will help those affected
 by the recent hurricane disaster: all profits from the sale of
 the Pocket Guide will be donated entirely to the Canadian Red
 Cross\' Katrina Relief Fund.
</p>

<hr />

<h1>PHP 5.0.5 Released</h1>
<p>
 <span class="newsdate">[06-Sep-2005]</span>
 PHP 5.0.5 is now <a href="http://www.php.net/downloads.php#v5">available for download</a>.
 This version is a maintenance release, that contains numerous bug fixes, including
 security fixes to vulnerabilities found in the XMLRPC package.  All users of PHP
 5.0 are encouraged to upgrade to this version.
</p>
<p>
 The full list of changes in PHP 5.0.5 is available in the
 <a href="http://www.php.net/ChangeLog-5.php#5.0.5">PHP 5 ChangeLog</a>.
</p>

<hr />

<a href="http://www.phpconference.com/"><img src="http://static.php.net/www.php.net/images/news/intconf2005fall.gif" alt="International PHP Conference 2005" width="133" height="85" style="float: right;" /></a><h1>International PHP Conference 2005 - Program available</h1>
<p>
 <span class="newsdate">[12-Aug-2005]</span>
 The program for the <a href="http://www.phpconference.com/">International PHP
 Conference</a> is now available. The conference that was one of the first
 events on PHP will take place again in Frankfurt from November 6-9, 2005
 and offers two days with pre conference tutorials as well as two days
 packed with sessions from well known speakers such as Derick Rethans,
 Zak Greant, Ilia Alshanetsky and many more.
</p>
<p>
 A new feature has been added to this year\'s conference: the Management Day
 where project managers and consultants shine the light on using PHP in
 enterprise-level projects. Conference attendees, including software
 architects, PHP developers, project leaders, and programmers can gain
 strategic information on how to realize their IT projects on-time,
 in-budget. The Management Day is <em>free of charge</em> for attendees
 registering prior to September 30, 2005.
</p>
<p>
 Early Bird Special discounts are available as well until this date, and
 special discounts for students and private persons.
</p>

<hr />

<a href="http://www.phparch.com/phpworks"><img src="http://static.php.net/www.php.net/images/news/php-web-works-logo.gif" alt="php|works and web|works 2005" width="133" height="68" style="float: right;" /></a><h1>web|works and php|works 2005 Program Online</h1>
<p>
 <span class="newsdate">[16-Jul-2005]</span>
 The <a href="http://www.phparch.com/works/schedule.php">full program</a> of
 <a href="http://www.phparch.com/works">php/web|works 2005</a>, a three-day
 conference on PHP and web technologies is available. The event will take
 place in Toronto, Canada, the birthplace of PHP, between September 14 and
 September 16. This year\'s speakers include Rasmus Lerdorf, Derick
 Rethans, Wez Furlong, Ilia Alshanetsky and many more.
</p>
<p>
 An early-bird <a href="https://www.phparch.com/works/signup.php">special
 discount</a> is in effect until August 1st, and special pricing is
 available for students, member of academia and non-profit organizations.
</p>

<hr />

<h1>PHP 4.4.0 Released</h1>
<p>
 <span class="newsdate">[11-Jul-2005]</span>
 The PHP Development Team would like to announce the immediate release of 
 <a href="http://www.php.net/downloads.php#v4">PHP 4.4.0</a>. 
 This is a maintenance release that addresses a serious memory corruption
 problem within PHP concerning references. If references were used in a wrong
 way, PHP could create memory corruptions which would not always surface or
 be visible. The increased middle digit was required because the fix that
 corrected the problem with references changed PHP\'s internal API, breaking
 binary compatibility with the PHP 4.3.* series. PHP 4.4.0 does not have
 any new features, and is solely a bugfix release; however, it is strongly
 recommended that you read the more detailed release announcement
 <a href="release_4_4_0.php">available here</a> prior to upgrading your
 PHP 4 installation.
</p>
<p>
For changes in PHP 4.4.0 since PHP 4.3.11, please consult the
<a href="http://www.php.net/ChangeLog-4.php#4.4.0">PHP 4 ChangeLog</a>.
</p>

<hr />

<h1>PEAR XML_RPC Vulnerability and PHP 4.4.0RC2 release</h1>
<p>
 <span class="newsdate">[01-Jul-2005]</span>
 An easily exploitable security issue was discovered in PEAR XML_RPC &lt;=
 1.3.0.  We recommend that users of this PEAR class immediately upgrade to the
 latest version with:
</p>
<pre>
 pear upgrade XML_RPC
</pre>
<p>
 The same security problem exists in many other XML RPC implementations,
 please check if the installed applications that you use might have a
 similar problem.
</p>
<p>
 The new PEAR XML_RPC package is also bundled with the second release
 candidation of PHP 4.4.0RC2. Besides this new PEAR package there are two
 minor issues fixed since PHP 4.4.0RC1. As the improved reference support
 in PHP 4.4 might show as notices and warnings in your existing
 applications - in cases where PHP formerly just silently ignored this
 and often causing memory corruptions - we also recommend to test PHP
 4.4.0RC2 with your applications. The final release is planned for July
 11th. PHP 4.4.0RC2 can be found <a href="http://qa.php.net/~derick/">here</a>.
</p>

<hr />

<a href="http://zend.kbconferences.com/"><img src="http://static.php.net/www.php.net/images/news/zendphp_conf.gif" alt="Zend/PHP Conference &amp; Expo" width="173" height="68" style="float: right;" /></a><h1>Zend/PHP Conference 2005</h1>
<p>
 <span class="newsdate">[23-Jun-2005]</span>
 The <a href="http://zend.kbconferences.com/">Zend/PHP Conference</a>
 is taking place at the Hyatt Regency San Francisco
 Airport on October 18-21, 2005. The theme of the conference will be
 "Power Your Business With PHP" and will feature sessions in the
 following four tracks: The Business Case for PHP; Developing,
 Deploying and Managing Large-Scale PHP Applications; Integrating PHP
 with the Enterprise (including Web Services and XML); and PHP
 Resources: Tools, Libraries and Techniquies.  Early registration
 discounts are available until August 15, 2005.
</p>
<hr />

<a href="http://www.php.net"><img src="http://static.php.net/www.php.net/images/news/php10thbd.jpg" alt="PHP 10th anniversary cake" width="100" height="95" style="float: right;" /></a><h1>10 years since PHP 1.0 was released!</h1>
<p>
 <span class="newsdate">[08-Jun-2005]</span> 
 <a href="http://groups.google.ch/groups?selm=3r7pgp%24aa1%40ionews.io.org&amp;oe=UTF-8&amp;output=gplain">It
 has been 10 years since Rasmus released the first version of PHP</a>.
 To everyone that has helped to shape PHP into what it is today; from the
 people developing the core and extensions, documentors, script developers, bug
 reporters, beta testers, PHP application developers and even just people that
 are using PHP--<b>Thank you!</b>

</p>

<hr />

<h1>CfP PHP Track - (AUUG) Annual Conference</h1>
<p>
 <span class="newsdate">[20-May-2005]</span>
 For the first time the AUUG will incorporate a PHP Track as part of its
 annual conference in Sydney, Australia. For this
 track we seek tutorials and presentations. Tutorials are on October 16 to 18
 and presentations on October 19 to 21. For information on how to submit
 a proposal we kindly point you to our CfP which you can find on <a
 href="http://auug.org.au/events/2005/auug2005/cfp.html">our website</a>. The
 deadline for proposals is May 27. In case you want more information, email
 <a href="mailto:derick&#64;php.net">Derick</a> or <a
 href="mailto:arjen&#64;mysql.com">Arjen</a>.
</p>

<hr />

<a href="http://www.phpwest.com/"><img src="http://static.php.net/www.php.net/images/news/phpwest.gif" alt="PHP West Conferences" width="180" height="36" style="float: right;" /></a> 

<h1>PHP West Security Conference in Vancouver, BC</h1>
<p>
 <span class="newsDate">[11-May-2005]</span>
 <a href="http://www.osevents.com">Open Source Events</a> is hosting their
 second conference on June 11th, 2005 in Vancouver, British Columbia. The
 conference will focus on PHP and Open Source Security. Featured talks
 will be presented by Bruce Perens, Chris Shiflett, Christian Wenz,
 Tom Robinson and Chris Hubbard.
</p>
<p>
 The conference is a single day &ndash; one track event where attendees will
 receive a free t-shirt, lunch, and full access to the full day of talks
 with the <a href="http://store.osevents.com/product_info.php?products_id=1">purchase
 of their ticket</a>. A number of free prizes will be given away at the
 closing ceremonies.
</p>

<hr />

<a href="http://conf.phpquebec.org/en/cdrom2005/"><img src="http://static.php.net/www.php.net/images/news/cdrom_phpquebec_2005.gif" alt="PHP Québec CD ROM 2005" width="150" height="101" style="float: right;" /></a> 

<h1>PHP Applications gathering</h1>
<p>
 <span class="newsdate">[20-Apr-2005]</span>
 The PHP Québec Conference team is looking for the best software developed
 with PHP, MySQL and Apache. Each proposal
 <a href="http://conf.phpquebec.org/en/cdrom2005/">received</a>
 by April 29th will be reviewed by an experts and members of the
 PHP Québec community.
</p>
<p>
 The most useful software will be included on the 2005 PHP Québec
 Conference CDROM along with over 25 hours of conference which where given
 by the leaders behind PHP, MySQL and Apache, as well as regional and
 international experts at the 2005 PHP Québec conference.
</p>

<hr />

<h1>PHP 5.0.4 and 4.3.11 Released</h1>
<p>
 <span class="newsdate">[31-Mar-2005]</span>
 The PHP Development Team would like to announce the immediate release of 
 <a href="http://www.php.net/downloads.php#v5">PHP 5.0.4</a> and <a href="http://www.php.net/downloads.php#v4">4.3.11</a>. 
 These are maintenance releases that in addition to non-critical bug fixes 
 address several security issues. All Users of PHP are strongly 
 encouraged to upgrade to one of these releases as soon as possible.
</p>
<p>
 For changes in PHP 5.0.4 since PHP 5.0.3, please consult the
 <a href="http://www.php.net/ChangeLog-5.php#5.0.4">PHP 5 ChangeLog</a>.
 For changes in PHP 4.3.11 since PHP 4.3.10, please consult the
 <a href="http://www.php.net/ChangeLog-4.php#4.3.11">PHP 4 ChangeLog</a>.
</p>

<hr />

<h1>International PHP Conference 2005 Spring Edition</h1>
<p>
 <span class="newsdate">[23-Mar-2005]</span>
 The <a href="http://www.phpconference.com/">International PHP
 Conference 2005 Spring Edition</a> will take
 place from May 2, 2005 to May 4, 2005. The Conference features
 a PowerWorkshop day on May 2 with PHP/MySQL Best Practices,
 XML/WebServices with PHP 5, Rapid Application Development and a
 PHP Starter Workshop for Beginners. The main Conference days
 will include sessions on PHP Internals, XML, Databases, Migration
 to PHP 5 and others. Early bird discounts are available until April
 1, 2005.
</p>

<hr />

<h1>PHP Québec 2005: PHP - MySQL - Apache</h1>

<p>
 <span class="newsdate">[15-Mar-2005]</span>
 PHP Québec is proud to present an extended conference in Montréal, Québec,
 covering the latest innovations in PHP, MySQL and Apache. From March 30th
 until April 1st, major AMP contributors will talk about Security, Web Services,
 PHP 5 and great achievements with PHP in North America. The 4 tracks 
 are available at <a
 href="http://conf.phpquebec.com/en/conf2005/horaire">the PHP Québec site</a>.
</p>
<p>
 PHP Certification exams by Zend are included with every admission ticket to
 the conference. The certification center will also provide MySQL and Linux 
 certification from MySQL AB, LPI and Savoir Faire Linux. The 
 <a href="http://conf.phpquebec.com/en/conf2005/certifications">examination center</a>
 is open to everyone.
</p>

<hr />

<h1>PHP and PEAR at FOSDEM 2005</h1>

<p>
 <span class="newsdate">[23-Feb-2005]</span>
 This year PHP &amp; PEAR have a devroom at FOSDEM 2005 held in Brussels.  On
 Sunday, 27th of February, several developers will talk about PHP &amp; PEAR.
 Topics include Xdebug, eZ publish, SimpleTest, Horde and PEAR. A full schedule
 can be found on the <a
 href="http://fosdem.org/2005/index/dev_room_phppear/schedule">FOSDEM\'s
 site</a>.
</p>
<p>
 Along with giving the scheduled talks, the developers will be available during
 the course of the day to chat with. The devroom is also open to all who want a
 place to code and/or relax.
</p>
<p>
 We hope to see you there !
</p>

<hr />

<h1>php|symphony</h1>

<p>
 <span class="newsdate">[10-Feb-2005]</span>
 php|architect magazine has introduced <a
 href="http://www.phparch.com/shop_dept.php?itemid=12">php|symphony</a>, an
 ongoing series of online talks given by some of today\'s leaders in the PHP
 world. Each talk in the series features an in-depth discussion on a specific
 topic, such as security, enterprise development and so on. Talks are delivered
 entirely online using an interactive system compatible with most OSs and
 browsers.
</p>
<p>
 The series will start on February 23rd with a talk by security expert Chris
 Shiflett titled "Mastering PHP Security".
</p>

<hr />

<h1>ApacheCon Europe 2005</h1>
<p>
 <span class="newsdate">[08-Feb-2005]</span>
 <a href="http://www.apachecon.com/2005/EU/index.html">ApacheCon Europe</a>
 will be held from July 18th to July 22th in Stuttgart, Germany.
</p>

<hr />

<a href="http://phpsec.org/"><img src="http://static.php.net/www.php.net/images/news/phpsc-logo.gif" alt="PHPSC Logo" width="175" height="62" style="float: right;" /></a>
<h1>PHP Security Consortium</h1>
<p>
 <span class="newsdate">[31-Jan-2005]</span>
 An international group of PHP experts today announced the official launch
 of the <a href="http://phpsec.org/">PHP Security Consortium</a> (PHPSC), a
 group whose mission is to promote secure programming practices within the
 PHP community through education and exposition while maintaining high
 ethical standards.
</p>
<p>
 Members of the PHPSC seek to educate PHP developers about security through
 a variety of resources, including documentation, tools, and standards. In
 addition to their educational efforts, the PHPSC engages in exploratory
 and experimental research in order to develop and promote standards of
 best practice for PHP application development.
</p>

<hr />

<h1>O\'Reilly Open Source Convention 2005</h1>

<p>
 <span class="newsdate">[27-Jan-2005]</span>
 Circle August 1-5 on your calendar and join in at the 
 <a href="http://conferences.oreillynet.com/os2005/">O\'Reilly
 Open Source Convention</a> in beautiful Portland, Oregon. OSCON 2005
 will be at the Oregon Convention Center, where there will be
 tutorials, sessions, parties, BOFs, and a huge exhibit
 hall.
</p>

<hr />

<a href="http://phpconf.hu/2005/"><img src="http://static.php.net/www.php.net/images/news/hu_conf.gif" alt="PHPConf.hu" width="119" height="90" style="float: right;" /></a>
<h1>Third Hungarian PHP Conference</h1>

<p>
 <span class="newsdate">[17-Jan-2005]</span>
 The Web Application Development Division of the John von Neumann Computer
 Society is proud to present the <a href="http://phpconf.hu/2005/">Third
 Hungarian PHP Conference</a> which will take place in Budapest, on Saturday
 March 12th, sponsored by several international and local companies.
 The conference offers an entirely free one day activity with several
 presentations addressing basic and advanced topics as well, mostly in
 Hungarian. This year, the organizers are also happy to welcome Derick
 Rethans and Lukas Smith speaking. Continuing on the success of previous
 years, a five+five kilobyte-limited PHP 5 contest has been started to
 discover the most talented PHP programmers in the country.
</p>

<hr />

<a href="http://www.phparch.com/tropics"><img src="http://static.php.net/www.php.net/images/news/php_tropics.jpg" alt="php|tropics" width="180" height="68" style="float: right;" /></a><h1>php|tropics</h1>

<p>
 <span class="newsdate">[06-Jan-2005]</span>
 On the heels of last year\'s php|cruise, this year
 <a href="http://www.phparch.com">php|architect magazine</a> has
 announced <a href="http://www.phparch.com/tropics">php|tropics</a>, a
 5-day conference event that will take place between May 11 and 15, 2005 at the
 Moon Palace All-inclusive Resort in wonderful Cancun, Mexico.
</p>
<p>
 With sessions and hands-on tutorials held by many leading PHP experts,
 including Ilia Alshanetsky, Wez Furlong, Derick Rethans, George Schlossnagle
 and many others, php|tropics is an excellent and inexpensive way to learn lots
 about PHP in a fun-filled and exciting atmosphere. This year, the conference
 also sports "bring your own laptop" tutorials, where the audience is encourage
 to participate in hands-on exercises throughout the event.
</p>
<p>
 A special early-bird discount is in effect until February 28, and attendees
 who sign up before that date receive a $100 discount. In addition,
 php|architect will sponsor and cover all examination fees for conference
 attendees interested in trying their hand at the Zend Certification Exam.
</p>

<hr />

<a href="http://www.php.net/"><img src="http://static.php.net/www.php.net/images/news/php-logo.gif" alt="Programming Language of 2004" width="69" height="36" style="float: right;" /></a><h1>PHP awarded Programming Language of 2004</h1>

<p>
 <span class="newsdate">[05-Jan-2005]</span>
 PHP has been awarded the <a href="http://www.tiobe.com/tpci.htm">Programming
 Language of 2004</a>, according to the TIOBE Programming Community Index.
 This index uses information collected from the popular search engines, and
 are based on the world-wide availability of skilled engineers, courses and
 third party vendors.
</p>
<p>
 Congratulations to us all!
</p>

<br/>

<hr />
<a href="http://www.prophp.com.br/phpconference.php"><img src="http://static.php.net/www.php.net/images/news/phpconfbrasil.jpg" alt="PHP Brasil 2007" width="160" height="111" style="float: right;" /></a><h1>PHP Conference Brazil</h1>
<p>
 <span class="newsdate">[27-Nov-2006]</span>
 The PHP Conference Brasil is the first Brazilian conference related exclusively
 to the PHP language in Sao Paulo, on December 1st and 2nd, 2006.
</p>

<p>
 It will be a 
 great opportunity to establish a sustainable Brazilian PHP community and to
 exchange ideas among our professionals.
 More info is available at
 <a href="http://www.prophp.com.br/phpconference.php">the Brazilian PHP Conference</a> Web site.
</p>

<hr />

<h1>PHP 5.2.0 Released</h1>
<p>
 <span class="newsdate">[02-Nov-2006]</span>
 The PHP development team is proud to announce the immediate release of PHP
 5.2.0. This release is a major improvement in the 5.X series, which includes a
 large number of new features, bug fixes and security enhancements.
 Further details about this release can be found in the release announcement
 <a href="http://www.php.net/releases/5_2_0.php">5.2.0</a>, the full list of changes is
 available in the ChangeLog <a href="http://www.php.net/ChangeLog-5.php#5.2.0">PHP 5</a>.
</p>
<p>
 All users of PHP, especially those using earlier PHP 5 releases are advised
 to upgrade to this release as soon as possible. This release also obsoletes
 the 5.1 branch of PHP.
</p>
<p>
 For users upgrading from PHP 5.0 and PHP 5.1 there is an upgrading guide 
 available <a href="http://www.php.net/UPDATE_5_2.txt">here</a>, detailing the changes between those releases
 and PHP 5.2.0.
</p>

<hr />

<a href="http://www.afup.org/forumphp/"><img src="http://static.php.net/www.php.net/images/news/afup2006.jpg" alt="AFUP Paris 2006" width="160" height="80" style="float: right;" /></a>
<h1>Forum PHP in Paris, France, November 9 &amp; 10th, 2006</h1>
<p>
<span class="newsdate">[04-Oct-2006]</span>
The <a href="http://afup.org/">French AFUP association</a> is proud to announce
the <a href="http://afup.org/forumphp/">fifth annual PHP</a> meeting 
in Paris, on November 9th and 10th, 2006. Developers and managers will gather 
to meet Rasmus Lerdorf, Andrei Zmievski and other prominent community experts 
for two days of sessions, packed with enterprise solutions and 
advanced techniques (in French).
</p>

<hr />

<a href="http://phpconference.com/"><img src="http://static.php.net/www.php.net/images/news/intconf2006fall.png" alt="International PHP Conference 2006" width="120" height="77" style="float: right;" /></a>
<h1>International PHP Conference 2006</h1>
<p>
 <span class="newsdate">[10-Sep-2006]</span>
 Software &amp; Support media is pleased to announce the
 <a href="http://www.phpconference.com/">International PHP Conference 2006</a>.
 It will happen from Nov. 05 to Nov. 08, 2006 at Frankfurt/Main.
 This year\'s sessions include topics on Security, PHP Internals,
 PHP &amp; Business and Webservice topics. The Call for Papers has
 been closed and the programme is now online.
</p>
<p>
 On Nov. 05 and Nov. 06 there will be 6-hour PowerWorkshops that
 deliver hands-on PHP knowledge. A Management Day, dedicated to
 Managers who want to get informed about the usage of PHP, contains
 several sessions about the usage of PHP in large companies. The
 "PHP Code Camp @ Nite" with PHP Core Devs Marcus Börger and Sara
 Golemon. They go through from PHP basics to PHP OOP and implementing
 your own PHP extension. Delicious pizza and beer will do the rest.
 Registration is now open.
</p>

<hr />

<h1>PHP 5.1.6 Released</h1>
<p>
 <span class="newsdate">[24-Aug-2006]</span>
 The PHP development team would like to announce the immediate availability of
 PHP <a href="http://www.php.net/downloads.php#v5">5.1.6</a>. This release contains a fix for 
 memory_limit restriction on 64 bit systems that was not included in PHP 5.1.5.
</p>

<hr />

<a href="http://www.amazon.com/exec/obidos/ASIN/0596528124/wwwphpnet"><img src="http://static.php.net/www.php.net/images/news/mre3cover_sm.jpg" alt="Mastering Regular Expressions, 3rd edition" width="57" height="75" style="float: right;" /></a><h1>Mastering Regular Expressions - now with PHP coverage</h1>
<p>
 <span class="newsdate">[24-Aug-2006]</span>
 The third edition of
 <a href="http://www.amazon.com/exec/obidos/ASIN/0596528124/wwwphpnet">Mastering Regular Expressions</a>
 is finally out and includes a full 48-page chapter on PHP. This is an excellent
 resource from Jeffrey Friedl who has been writing about regexps for years.
</p>

<hr />

<h1>PHP 4.4.4 and PHP 5.1.5 Released</h1>
<p>
 <span class="newsdate">[17-Aug-2006]</span>
 The PHP development team would like to announce the immediate availability of
 PHP <a href="http://www.php.net/downloads.php#v5">5.1.5</a> and <a
 href="/downloads.php#v4">4.4.4</a>. These two releases address a series of
 security problems that were discovered since the release of PHP 5.1.4 and
 4.4.3. The new releases include the following changes:
</p>
<ul>
<li>Added missing safe_mode/open_basedir checks inside the error_log(),
    file_exists(), imap_open() and imap_reopen() functions.</li>
<li>Fixed overflows inside str_repeat() and wordwrap() functions on 64bit
    systems.</li>
<li>Fixed possible open_basedir/safe_mode bypass in cURL extension and on PHP
    5.1.5 with realpath cache.</li>
<li>Fixed overflow in GD extension on invalid GIF images.</li>
<li>Fixed a buffer overflow inside sscanf() function.</li>
<li>Fixed an out of bounds read inside stripos() function.</li>
<li>Fixed memory_limit restriction on 64 bit system.</li>
</ul>
<p>
Further details about this release can be found in the release announcements
(<a href="http://www.php.net/release_5_1_5.php">5.1.5</a> and
<a href="http://www.php.net/release_4_4_4.php">4.4.4</a>), and the full list of changes is
available in the ChangeLogs (<a href="http://www.php.net/ChangeLog-4.php#4.4.4">PHP 4</a>, 
<a href="http://www.php.net/ChangeLog-5.php#5.1.5">PHP 5</a>).
</p>

<hr />

<h1>PHP 4.4.3 Released</h1>
<p>
 <span class="newsdate">[03-Aug-2006]</span>
 The PHP development team is proud to announce the release of <a
 href="/downloads.php#v4">PHP 4.4.3</a>.  This release combines small number of
 bug fixes and resolves a number of security issues.  Some of the key changes
 of PHP 4.4.3 include:
</p>
<ul>
<li>Disallow certain characters in session names.</li>
<li>Fixed a buffer overflow inside the wordwrap() function.</li>
<li>Prevent jumps to parent directory via the 2nd parameter of the tempnam() function.</li>
<li>Improved safe_mode check for the error_log() function.</li>
<li>Fixed cross-site scripting inside the phpinfo() function.</li>
<li>Fixed offset/length parameter validation inside the substr_compare() function.</li>
<li>Upgraded bundled PCRE library to version 6.6</li>
<li>Over 20 various bug fixes.</li>
</ul>
<p>
Further details about this release can be found in the <a
href="/release_4_4_3.php">release announcement</a> and the full list of changes
is available in the <a href="http://www.php.net/ChangeLog-4.php#4.4.3">PHP 4 ChangeLog</a>.
</p>

<hr />

<a href="http://www.phparch.com/works/"><img src="http://static.php.net/www.php.net/images/news/phpworks.png" alt="php|works / db|works 2006" width="180" height="40" style="float: right;" /></a><h1>php/db|works 2006 Schedule Now Online</h1>
<p>
 <span class="newsdate">[29-June-2006]</span>
 The upcoming premier PHP conference, <a href="http://www.phparch.com/works">php|works/db|works</a>,
 will take place in Toronto, Canada, September 12-15, 2006.
</p>
<p>
 The conference, as always, will feature excellent speakers from many aspects of PHP development,
 including Rasmus Lerdorf, Wez Furlong, Sara Golemon, Sebastian Bergmann, Chris Shiflett and more!
 Be sure to check out the
 <a href="http://hades.phparch.com/ceres/public/page/index.php/works::schedule">entire lineup</a>,
 including special evening social events with top-notch prizes.
</p>

<hr />

<a href="http://code.google.com/soc/php/about.html"><img src="http://static.php.net/www.php.net/images/news/google_soc_2006_128x53.gif" alt="Google Summer of Code 2006" width="128" height="53" style="float: right;" /></a>
<h1>Welcome Summer of Code 2006 Students</h1>
<p>
 <span class="newsdate">[26-May-2006]</span>
PHP is very pleased to announce that seven students have been chosen for the
Google \'Summer of Code\'. Through this project, Google provides student developers with 
a stipend to create new open source programs or to help currently established 
projects like PHP. The students are each mentored by members of our community,
who will look after the students and their projects step by step.
</p>
<p>
The students, their projects and their assigned mentors can be viewed
<a href="http://code.google.com/soc/php/about.html">here</a>.
</p>

<hr />

<a href="http://www.nyphpcon.com/"><img src="http://static.php.net/www.php.net/images/news/NYPHPCon06.gif" alt="NYPHPCon 2006" width="107" height="79" style="float: right;" /></a>
<h1>NYPHPCon 2006 Program Announced</h1>
<p>
 <span class="newsdate">[16-May-2006]</span>
 We are pleased to announce the speaker, tutorial and keynote program for 
 NYPHPCon 2006.  The <a href="http://www.nyphpcon.com">New York PHP 
 Conference &amp; Expo 2006</a> is taking place in New York City, at the 
 historic New Yorker Hotel, June 14-16, 2006.  There will be three full 
 days of sessions, tutorials, exhibits, and networking events.
</p>
<p>
We are also pleased to host the <a href="http://www.nyphpcon.com/mashup.php">
IBM Mashup Contest</a> and <a href="http://www.nyphpcon.com/OraclePHPfest.pdf">
Oracle PHPFest</a>, and a special 
<a href="http://www.nyphpcon.com/conference_glance.php#Training">PHP 
Training package</a> at this event.
</p>
<p>
NYPHPCon 2006 focuses on the The PHP Business Community, with two 
featured parallel tracks plus tutorials: 
<a href="http://www.nyphpcon.com/conference_glance.php#SpeakerSessions">
Business Strategy and Technical Solutions</a>.  Over 400 are expected to attend,
including business and technical professionals from around the world.
</p>

<hr />

<h1>PHP 5.1.4 Released</h1>
<p>
 <span class="newsdate">[04-May-2006]</span>
 A critical bug with $_POST array handling as well as the FastCGI sapi have been discovered in PHP 5.1.3. A new PHP release <a href="http://www.php.net/downloads.php">5.1.4</a> is now
 available to address these issues. All PHP users are encouraged to upgrade to this release as soon as possible.
</p>
<p>
Further details about this release can be found in the <a href="http://www.php.net/release_5_1_4.php">release announcement</a> 
and the full list of changes is available in the <a href="http://www.php.net/ChangeLog-5.php#5.1.4">PHP 5 ChangeLog</a>.
<br />
<b>The tarballs were updated to include the PEAR\'s phar file, previously missing from the release.</b>
</p>

<hr />

<h1>PHP 5.1.3 Released</h1>
<p>
 <span class="newsdate">[01-May-2006]</span>
 The PHP development team is proud to announce the release of <a href="http://www.php.net/downloads.php">PHP 5.1.3</a>.
 This release combines small number of feature enhancements with a significant amount of bug fixes and resolves a number of security issues.
 Some of the key changes of PHP 5.1.3 include:
</p>
<ul>
<li>Disallow certain characters in session names.</li>
<li>Fixed a buffer overflow inside the wordwrap() function.</li>
<li>Prevent jumps to parent directory via the 2nd parameter of the tempnam() function.</li>
<li>Enforce safe_mode for the source parameter of the copy() function.</li>
<li>Fixed cross-site scripting inside the phpinfo() function.</li>
<li>Fixed offset/length parameter validation inside the substr_compare() function.</li>
<li>Fixed a heap corruption inside the session extension.</li>
<li>Fixed a bug that would allow variable to survive unset().</li>
<li>Fixed a number of crashes in the DOM, SOAP and PDO extensions.</li>
<li>Upgraded bundled PCRE library to version 6.6</li>
<li>The use of the var keyword to declare properties no longer raises a deprecation E_STRICT.</li>
<li>FastCGI interface was completely reimplemented.</li>
<li>Multitude of improvements to the SPL, SimpleXML, GD, CURL and Reflection extensions.</li>
<li>Over 120 various bug fixes.</li>
</ul>
<p>
Further details about this release can be found in the <a href="http://www.php.net/release_5_1_3.php">release announcement</a> 
and the full list of changes is available in the <a href="http://www.php.net/ChangeLog-5.php#5.1.3">PHP 5 ChangeLog</a>.
</p>

<hr />

<h1>Summer of Code</h1>
<p>
 <span class="newsdate">[01-May-2006]</span>
 Proposals are now being accepted for
 <a href="http://code.google.com/summerofcode.html">Google\'s
 Summer of Code program</a>. If you
 <a href="http://code.google.com/soc/studentfaq.html#8">qualify</a>
 and you are interested in working on a PHP-related project this
 summer, please consider applying. We have listed a couple of
 <a href="http://www.php.net/ideas.php">ideas</a>, but we would encourage you to
 submit a proposal for any part of PHP you are interested in.
 If your project is accepted we will match you up with a mentor
 and try to provide you with as much support as possible. To
 get started, read the
 <a href="http://code.google.com/soc/studentfaq.html#21">FAQ</a> and
 then go to <a href="http://code.google.com/soc/student_step1.html">Step 1</a>.
</p>

<hr />
<h1>PHP Vikinger</h1>
<p>
 <span class="newsdate">[24-Apr-2006]</span>
 The <a href="http://phpvikinger.org/">PHP Vikinger</a> is a community-driven
 PHP event that will be held in
 <a href="http://en.wikipedia.org/wiki/Skien">Skien, Norway</a>
 from June 24th to 25th. Like the famous
 <a href="http://en.wikipedia.org/wiki/Foo_Camp">Foo Camp</a> and
 <a href="http://en.wikipedia.org/wiki/Bar_Camp">Bar Camp</a>, the people
 who attend get to choose and present the sessions at the event.
</p>
<p>
 The event is meant to be affordable: registration is 20 Euros, and
 simple food and a place to sleep are provided for both days of the
 event. The major expense for most attendees will be the cost of
 traveling to Norway. 50
 <a href="http://zak.greant.com/php-vikinger-invitations-emailed">invitations</a>
 have been sent to various PEAR and PHP contributors. General
 registration for the event opens on May 1st.
</p>

<hr />
<a href="http://www.phparch.com/tek/"><img src="http://static.php.net/www.php.net/images/news/php_tek_2006.gif" alt="php|tek 2006" width="210" height="65" style="float: right;" /></a><h1>php|tek 2006</h1>
<p>
 <span class="newsdate">[02-Mar-2006]</span>
 The <a href="http://www.phparch.com/tek/">php|tek 2006 conference</a> will take place
 in Orlando, Florida, April 25-28.
</p>
<p>
 This year\'s speaker roster features many well-known PHP and open-source experts,
 including Rasmus Lerdorf, IBM\'s Rod Smith and Zend\'s Andi Gutmans, speaking on a
 variety of topics that highlight PHP\'s scalability, robustness and future.
</p>

<hr />
<a href="http://conf.phpquebec.com/en/conf2006/"><img src="http://static.php.net/www.php.net/images/news/conference_php_quebec.gif" alt="PHP Quebec 2006" width="131" height="63" style="float: right;" /></a>
<h1>PHP Quebec 2006</h1>
<p>
 <span class="newsdate">[26-Feb-2006]</span>
The <a href="http://www.phpquebec.com/">PHP Quebec team</a> is pleased to 
announce the 4th edition of the <a href="http://conf.phpquebec.com/en/conf2006/">PHP Quebec Conference</a>. 
This year, the conference will be held at the Montreal Plaza Hotel 
from March 29th to 31st. It features 2 days of technical learning and an 
additional day of workshop. Among the speakers, the well known PHP Experts 
such has Rasmus Lerdorf, Andrei Zmeivski, Derick Rethans and Ilia 
Alshanetsky. 
</p>
<p>
The conference will have three distinct tracks of session: Advanced 
Techniques, Professional Development and Databases. With over 31 
sessions, including workshops, the PHP Québec Conference is great opportunity 
to learn about the latest PHP techniques and professional development 
techniques to help you build high quality PHP software. The conference will 
also present the various storage solutions available such has IBM DB2, 
PostgreSQL, SQLite and MySQL.
</p>
<p>
Early bird pricing are available until march 3rd.<br />
Learn more about this <a 
href="http://conf.phpquebec.com/en/conf2006/">exciting conference</a>.
</p>

<hr />
<a href="http://www.nyphpcon.com/"><img src="http://static.php.net/www.php.net/images/news/NYPHPCon06.gif" alt="NYPHPCon 2006" width="107" height="79" style="float: right;" /></a>
<h1>NYPHPCon 2006</h1>
<p>
 <span class="newsdate">[02-Feb-2006]</span>
The <a href="http://www.nyphpcon.com">New York PHP Conference &amp; Expo
2006</a> is taking place in New York City, at the historic New Yorker
Hotel, June 14-16, 2006.  There will be three full days of sessions,
tutorials, exhibits, and networking events. </p>
<p>
NYPHPCon 2006 focuses on the The PHP Business Community, with two
featured parallel tracks: <a
href="http://www.nyphpcon.com/conference_glance.php">Business Strategy
and Technical Solutions</a>.  Over 400 are expected to attend, including
business and technical professionals from around the world.
</p>
<p>
An <a
href="http://www.nyphpcon.com/attendee_registration.php">early-bird
discount is available until March 1st</a>.
</p>

<hr />

<a href="http://wtconferences.com/"><img src="http://static.php.net/www.php.net/images/news/webtech2006.png" alt="WebTech 2006" width="210" height="60" style="float: right;" /></a>
<h1>Third Bulgarian PHP Conference</h1>
<p>
 <span class="newsdate">[19-Jan-2006]</span>
 The third <a href="http://wtconferences.com/">Web Technology conference
 and Expo</a> in Bulgaria will be held in June 2006 in the city
 of Sofia. Within its framework, the Third Bulgarian
 PHP Conference will be held. The event will take place on
 the 30th of June and the 1st of July at the conference area
 of the Kempinski Hotel Zografski.
</p>
<p>
 The purpose of this meeting is to discuss the new tendencies
 in this direction and to popularize the internet technologies
 in the spheres of business, education, and services. The
 range of subjects includes technologies like PHP, Perl,
 business systems through web, education through the
 internet, and others.
</p>

<hr />
<a href="http://www.phpconference.co.uk/"><img src="http://static.php.net/www.php.net/images/news/ukphp2006.png" alt="UK PHP Conference 2006" width="210" height="65" style="float: right;" /></a>
<h1>UK PHP Conference 2006</h1>
<p>
 <span class="newsdate">[17-Jan-2006]</span>
 The first <a href="http://www.phpconference.co.uk/">UK PHP Conference</a>
 is going to be held on February 10th 2006, organized by the
 <a href="http://www.phplondon.org/">PHP London user group</a>.
 This is a one day event at South Bank University, plus networking events.
 The list of speakers: Derick Rethans, Pawel Kozlowski, Harry Fuecks,
 Chris Kunz and Matt Zandstra. Not bad for 50 quid.
</p>

<hr />
<h1>PHP 4.4.2 Released</h1>
<p>
 <span class="newsdate">[13-Jan-2006]</span>
 The PHP development team is proud to announce the release of <a href="http://www.php.net/downloads.php">PHP 4.4.2</a>.
 This release address a few small security issues, and also corrects some
 regressions that occurred in PHP 4.4.1.  All PHP 4 users are encouraged to
 upgrade to this release. Some of the key changes of PHP 4.4.2 include:
</p>
<ul>
<li>HTTP Response Splitting has been addressed in the header() function.</li>
<li>An XSS problem inside the error reporting functionality has been removed.</li>
<li>Apache 2 regression with sub-request handling on non-Linux systems has been fixed.</li>
<li>A regression with the key() and current() functions have been fixed.</li>
<li>Over 30 various bug fixes.</li>
</ul>
<p>
Further details about this release can be found in the <a href="http://www.php.net/release_4_4_2.php">release announcement</a> 
and the full list of changes is available in the <a href="http://www.php.net/ChangeLog-4.php#4.4.2">PHP 4 ChangeLog</a>.
</p>

<hr />
<h1>PHP 5.1.2 Released</h1>
<p>
 <span class="newsdate">[12-Jan-2006]</span>
 The PHP development team is proud to announce the release of <a href="http://www.php.net/downloads.php">PHP 5.1.2</a>.
 This release combines small feature enhancements with a fair number of
 bug fixes and addresses three security issues. All PHP 5 users are encouraged to
 upgrade to this release. Some of the key changes of PHP 5.1.2 include:
</p>
<ul>
<li>HTTP Response Splitting has been addressed in ext/session and in the header() function.</li>
<li>Fixed format string vulnerability in ext/mysqli.</li>
<li>Fixed possible cross-site scripting problems in certain error conditions.</li>
<li>Hash &amp; XMLWriter extensions added and enabled by default.</li>
<li>Upgraded OCI8 extension.</li>
<li>Over 85 various bug fixes.</li>
</ul>
<p>
Further details about this release can be found in the <a href="http://www.php.net/release_5_1_2.php">release announcement</a> 
and the full list of changes is available in the <a href="http://www.php.net/ChangeLog-5.php#5.1.2">PHP 5 ChangeLog</a>.
</p>

<hr />

<hr />

<div class="newsItem">
    <a name="2007-11-08-1" id="2007-11-08-1"><h1>PHP 5.2.5 Released</h1></a>
    <div>
  <span class="newsdate">[09-Nov-2007]</span>
  <p>        The PHP development team would like to announce the immediate        <a href="http://www.php.net/downloads.php#v5">availability of PHP 5.2.5</a>.        This release focuses on improving the stability of the PHP 5.2.x        branch with over 60 bug fixes, several of which are security related.        All users of PHP are encouraged to upgrade to this release.</p>

  <p>        Further details about the PHP 5.2.5 release can be found in the        <a href="http://www.php.net/releases/5_2_5.php">release announcement for 5.2.5</a>, the full list of        changes is available in the <a href="http://www.php.net/ChangeLog-5.php#5.2.5">ChangeLog for PHP 5</a>.</p>
  <p>
    <b>Security Enhancements and Fixes in PHP 5.2.5:</b>
  </p>
  <ul>

    <li>Fixed dl() to only accept filenames. Reported by Laurent Gaffie.</li>
    <li>Fixed dl() to limit argument size to MAXPATHLEN (CVE-2007-4887). Reported by Laurent Gaffie.</li>
    <li>Fixed htmlentities/htmlspecialchars not to accept partial multibyte sequences. Reported by Rasmus Lerdorf</li>
    <li>Fixed possible triggering of buffer overflows inside glibc implementations of the fnmatch(), setlocale() and glob() functions. Reported by Laurent Gaffie.</li>
    <li>Fixed "mail.force_extra_parameters" php.ini directive not to be modifiable in .htaccess due to the security implications. Reported by SecurityReason.</li>
    <li>Fixed bug #42869 (automatic session id insertion adds sessions id to non-local forms).</li>

    <li>Fixed bug #41561 (Values set with php_admin_* in httpd.conf can be overwritten with ini_set()).</li>
  </ul>
  <p>For users upgrading to PHP 5.2 from PHP 5.0 and PHP 5.1, an upgrade guide is available <a href="http://www.php.net/migration52">here</a>, detailing the changes between those releases and PHP 5.2.5.</p>
</div>
</div>

<hr />
<a href="http://www.prophp.com.br/phpconference.php"><img src="http://static.php.net/www.php.net/images/news/phpconfbrasil2007.png" alt="São Paulo 2007" width="160" height="122" style="float: right;" /></a><div class="newsItem">
    
    <a name="2007-10-29-1" id="2007-10-29-1"><h1>PHP Conference Brasil 2007</h1></a>

    <div>
  <span class="newsdate">[29-Oct-2007]</span>
  <p>
November 30th - December 1st, Join us at the 2nd Annual PHP Conference Brasil. The event will take place at UNIFIEO in Osasco, São Paulo. This year\'s conference will have room for 1000 people. Its scheduled for tutorials of 3 hours, aside of speeches, cases, stands and a great catch up time for newbies and veterans.
Visit <a href="http://www.prophp.com.br/phpconference.php">the website</a> for more details. Early registration with discounted price is available until November 9th.
	</p>
</div>
</div>

<hr />
<div class="newsItem">

    
    <a name="2007-10-03-1" id="2007-10-03-1"><h1>The new documentation build system is ready for testing</h1></a>
    <div>
  <span class="newsdate">[03-Oct-2007]</span>
  <p>
The PHP documentation team is pleased to announce the initial release of 
the new build system that generates the PHP Manual. Written in PHP, PhD 
(<em>[PH]P based [D]ocBook renderer</em>) builds are now available for 
viewing at <a href="http://docs.php.net/">docs.php.net</a>. Everyone is 
encouraged to test and use this system so 
that <a href="http://bugs.php.net/">bugs</a> will be found and squashed. 
      </p>

  <p>
Once the new build system is stable, expect additional changes to the PHP 
manual that will include an improved navigation system and styling for OOP 
documentation. 
      </p>
  <p>
Feel free to set this developmental mirror as your default by 
using <a href="http://www.php.net/my.php">my.php</a>.
      </p>
</div>
</div>

<hr />
<a href="http://www.dcphpconference.com/"><img src="http://static.php.net/www.php.net/images/news/dcphpconference.2007.png" alt="Washington DC 2007" width="120" height="87" style="float: right;" /></a><div class="newsItem">
    
    <a name="2007-09-21-1" id="2007-09-21-1"><h1>DC PHP Conference 2007</h1></a>

    <div>
  <span class="newsdate">[21-Sep-2007]</span>
  <p>
November 7th - 9th, Join us at the 2nd Annual DC PHP Conference. The event will take place at George Washington University\'s Cafritz Conference Center in the heart of Washington DC. The three day conference begins November 7th and 8th with general sessions, and ends November 9th with tutorials. This year\'s conference will host some of the PHP Community\'s top speakers and developers and focus on three primary tracks:
<ul><li>Scalability</li><li>Security</li><li>The Art of PHP</li></ul>
Please see <a href="http://www.dcphpconference.com ">the website</a> for more details and to register. Early registration is available until mid-October.
	</p>

</div>
</div>

<hr />
<a href="http://www.afup.org/pages/forumphp2007/"><img src="http://static.php.net/www.php.net/images/news/afup2007.jpg" alt="Paris Forum 2007" width="120" height="95" style="float: right;" /></a><div class="newsItem">
    
    <a name="2007-09-20-1" id="2007-09-20-1"><h1>Forum PHP Paris 2007</h1></a>
    <div>
  <span class="newsdate">[20-Sep-2007]</span>
  <p>
The <a href="http://www.afup.org/">French AFUP</a> association is proud 
to announce the <a href="http://www.afup.org/pages/forumphp2007/">sixth annual PHP
meeting in Paris</a>, on November 21st and 22nd, 2007. Developers and
managers will gather to meet Rasmus Lerdorf, Andrei Zmievski and other
prominent community experts for two days of sessions, packed with
enterprise solutions and advanced techniques.
	</p>

</div>
</div>

<hr />
<div class="newsItem">
    
    <a name="2007-08-30-1" id="2007-08-30-1"><h1>PHP 5.2.4 Released</h1></a>

    <div>
  <span class="newsdate">[30-Aug-2007]</span>
  <p>
The PHP development team would like to announce the immediate
<a href="http://www.php.net/downloads.php#v5">availability of PHP 5.2.4</a>. 
This release focuses on improving the stability of the PHP 5.2.X 
branch with over 120 various bug fixes in addition to resolving 
several low priority security bugs. All users of PHP are encouraged 
to upgrade to this release.
</p>
  <p>
Further details about the PHP 5.2.4 release can be found in the
<a href="http://www.php.net/releases/5_2_4.php">release announcement for 5.2.4</a>, the full list of
changes is available in the <a href="http://www.php.net/ChangeLog-5.php#5.2.4">ChangeLog for PHP 5</a>.

</p>
  <p>
    <b>Security Enhancements and Fixes in PHP 5.2.4:</b>
  </p>
  <ul>
    <li>Fixed a floating point exception inside wordwrap() (Reported by Mattias Bengtsson)</li>
    <li>Fixed several integer overflows inside the GD extension (Reported by Mattias Bengtsson)</li>
    <li>Fixed size calculation in chunk_split() (Reported by Gerhard Wagner)</li>

    <li>Fixed integer overflow in str[c]spn(). (Reported by Mattias Bengtsson)</li>
    <li>Fixed money_format() not to accept multiple %i or %n tokens. (Reported by Stanislav Malyshev)</li>
    <li>Fixed zend_alter_ini_entry() memory_limit interruption vulnerability. (Reported by Stefan Esser)</li>
    <li>Fixed INFILE LOCAL option handling with MySQL extensions not to be allowed when open_basedir or safe_mode is active. (Reported by Mattias Bengtsson)</li>
    <li>Fixed session.save_path and error_log values to be checked against open_basedir and safe_mode (CVE-2007-3378) (Reported by Maksymilian Arciemowicz)</li>
    <li>Fixed a possible invalid read in glob() win32 implementation (CVE-2007-3806) (Reported by shinnai)</li>

    <li>Fixed a possible buffer overflow in php_openssl_make_REQ (Reported by zatanzlatan at hotbrev dot com)</li>
    <li>Fixed an open_basedir bypass inside glob() function (Reported by dr at peytz dot dk)</li>
    <li>Fixed a possible open_basedir bypass inside session extension when the session file is a symlink (Reported by c dot i dot morris at durham dot ac dot uk)</li>
    <li>Improved fix for MOPB-03-2007.</li>
    <li>Corrected fix for CVE-2007-2872.</li>
  </ul>

  <p>
For users upgrading to PHP 5.2 from PHP 5.0 and PHP 5.1, an upgrade guide is
available <a href="http://www.php.net/migration52">here</a>, detailing the changes between
those releases and PHP 5.2.4.
</p>
</div>
</div>

<hr />
<a href="http://www.zendcon.com/"><img src="http://static.php.net/www.php.net/images/news/zendcon07_logo_s.jpg" alt="Zend/PHP Conference 2007" width="143" height="100" style="float: right;" /></a><div class="newsItem">
    
    <a name="2007-07-25-1" id="2007-07-25-1"><h1>Zend/PHP Conference 2007</h1></a>
    <div>
  <span class="newsdate">[25-Jul-2007]</span>

  <p>
Don\'t miss the third annual Zend/PHP Conference and Expo 2007!  This
year\'s conference promises to be the best ever.  Join Zend, the PHP
community and leading technology companies from around the world for
three days of education, learning and networking - plus an additional
tutorial day.  The 2007 conference will feature over 40 sessions, an
exhibit hall featuring leading companies such as Adobe, IBM, PayPal and
Zend, an UnConference area to stimulate impromptu discussions, and
networking opportunities galore. 
</p>
  <p>
ZendCon2007 will feature something for everyone – from novice to
advanced, business-oriented to technical-focused.  You will hear from
leaders in the PHP community and business experts who have implemented
PHP based initiatives.  Come hear from Zend as it presents a roadmap for
business-critical PHP.  Meet the Zend development teams.  Learn more
about Zend open source projects.
</p>
  <p>
ZendCon 2007 promises to be the largest gathering dedicated to PHP. 
Plan to attend ZendCon 2007 and join the PHP community to network and
learn from the best PHP minds from around the world.
</p>
  <p>
For more information please see <a href="http://www.zendcon.com/">http://www.zendcon.com/</a>.

</p>
</div>
</div>

<hr />
<a href="http://works.phparch.com/c/p/index"><img src="http://static.php.net/www.php.net/images/news/phpworks2007.png" alt="php|works 2007" width="200" height="37" style="float: right;" /></a><div class="newsItem">
    
    <a name="2007-07-16-01" id="2007-07-16-01"><h1>php|works 2007 in Atlanta</h1></a>
    <div>
  <span class="newsdate">[16-Jul-2007]</span>
  <p>
php|architect is proud to announce <a href="http://works.phparch.com">php|works 2007</a>, which will take place in Atlanta Georgia (USA) on September 12-14, 2007.

</p>
  <p>
This year, the conference once again promises to be an excellent event for PHP developers of all levels, with <a href="http://works.phparch.com/c/schedule">talks from top PHP experts</a> such as Derick Rethans, Chris Shiflett, Andrei Zmievski, Sara Golemon, and many more (and plenty of new faces, as well). 
</p>
</div>
</div>

<hr />
<div class="newsItem">
    
    <a name="2007-07-13-1" id="2007-07-13-1"><h1>PHP 4 end of life announcement</h1></a>
    <div>

  <span class="newsdate">[13-Jul-2007]</span>
  <p>
  Today it is exactly three years ago since PHP 5 has been released. In
  those three years it has seen many improvements over PHP 4. PHP 5 is
  fast, stable &amp; production-ready and as PHP 6 is on the way, PHP 4
  will be discontinued.
</p>
  <p>
  The PHP development team hereby announces that support for PHP 4 will
  continue until the end of this year only. After 2007-12-31 there will be no
  more releases of PHP 4.4. We will continue to make critical security fixes
  available on a case-by-case basis until 2008-08-08.  Please use the rest of
  this year to make your application suitable to run on PHP 5. 
</p>
  <p>

  For documentation on migration for PHP 4 to PHP 5, we would like to point you
  to our <a href="http://www.php.net/manual/en/migration5.php">migration guide</a>. There is
  additional information available in the <a href="http://www.php.net/manual/en/migration51.php">PHP 5.0 to PHP 5.1</a> and <a href="http://www.php.net/manual/en/migration52.php">PHP 5.1 to PHP 5.2</a> migration guides as
  well.
</p>
</div>
</div>

<hr />
<div class="newsItem">
    
    <a name="2007-06-01-1" id="2007-06-01-1"><h1>PHP 5.2.3 Released</h1></a>

    <div>
  <span class="newsdate">[01-Jun-2007]</span>
  <p>
The PHP development team would like to announce the immediate <a href="http://www.php.net/downloads.php#v5">availability of PHP 5.2.3</a>. 
This release continues to improve the security and the stability of 
the 5.X branch as well as addressing two regressions introduced
by the previous 5.2 releases. These regressions relate to the timeout
handling over non-blocking SSL connections and the lack of
HTTP_RAW_POST_DATA in certain conditions. All users are encouraged to
upgrade to this release.
</p>
  <p>
Further details about the PHP 5.2.3 release can be found in the
<a href="http://www.php.net/releases/5_2_3.php">release announcement for 5.2.3</a>, the full list of
changes is available in the <a href="http://www.php.net/ChangeLog-5.php#5.2.3">ChangeLog for PHP 5</a>.

</p>
  <p>
    <b>Security Enhancements and Fixes in PHP 5.2.3:</b>
  </p>
  <ul>
    <li>Fixed an integer overflow inside chunk_split() (by Gerhard Wagner, CVE-2007-2872)</li>
    <li>Fixed possible infinite loop in imagecreatefrompng. (by Xavier Roche, CVE-2007-2756)</li>
    <li>Fixed ext/filter Email Validation Vulnerability (MOPB-45 by Stefan Esser, CVE-2007-1900)</li>

    <li>Fixed bug #41492 (open_basedir/safe_mode bypass inside realpath()) (by bugs dot php dot net at chsc dot dk)</li>
    <li>Improved fix for CVE-2007-1887 to work with non-bundled sqlite2 lib.</li>
    <li>Added mysql_set_charset() to allow runtime altering of connection encoding.</li>
  </ul>
  <p>
For users upgrading to PHP 5.2 from PHP 5.0 and PHP 5.1, an upgrade guide is
available <a href="http://www.php.net/migration52">here</a>, detailing the changes between
those releases and PHP 5.2.3.
</p>

</div>
</div>

<hr />
<a href="http://www.wtconferences.com/2007/?q=node/1"><img src="http://static.php.net/www.php.net/images/news/wtlogo_s.png" alt="WebTech 2007" width="149" height="74" style="float: right;" /></a><div class="newsItem">
    
    <a name="2007-05-19-1" id="2007-05-19-1"><h1>WebTech 2007</h1></a>
    <div>

  <span class="newsdate">[19-May-2007]</span>
  <p>
 The 4th <a href="http://www.wtconferences.com/2007/?q=node/1">Internet technologies conference</a>
 will take place from June 29 till 30th in the Bulgarian seaside at city of Varna where
 you can combine sun, sea and technologies.
</p>
  <p>
 The conference as in the previous 3 years will focus on new technologies in web programming,
 open source and everything that stands for IT.
</p>

  <p>
 The conference is free of charge.
</p>
</div>
</div>

<hr />
<div class="newsItem">
    
    <a name="2007-05-03-1" id="2007-05-03-1"><h1>PHP 5.2.2 and PHP 4.4.7 Released</h1></a>
    <div>
  <span class="newsdate">[03-May-2007]</span>

  <p>
 The PHP development team would like to announce the immediate
 <a href="http://www.php.net/downloads.php#v5">availability of PHP 5.2.2</a> and
 <a href="http://www.php.net/downloads.php#v4">availability of PHP 4.4.7</a>.
 These releases are major stability and security enhancements of the 5.x and
 4.4.x branches, and all users are strongly encouraged to upgrade to it as
 soon as possible.  Further details about the PHP 5.2.2 release can be found
 in the <a href="http://www.php.net/releases/5_2_2.php">release announcement for 5.2.2</a>,
 the full list of changes is available in the
 <a href="http://www.php.net/ChangeLog-5.php#5.2.2">ChangeLog for PHP 5</a>. Details about
 the PHP 4.4.7 release can be found in the
 <a href="http://www.php.net/releases/4_4_7.php">release announcement for 4.4.7</a>, the full
 list of changes is available in the
 <a href="http://www.php.net/ChangeLog-4.php#4.4.7">ChangeLog for PHP 4</a>.

</p>
  <p>
    <b>Security Enhancements and Fixes in PHP 5.2.2 and PHP 4.4.7:</b>
  </p>
  <ul>
    <li>Fixed CVE-2007-1001, GD wbmp used with invalid image size (by Ivan Fratric)</li>
    <li>Fixed asciiz byte truncation inside mail() (MOPB-33 by Stefan Esser)</li>
    <li>Fixed a bug in mb_parse_str() that can be used to activate register_globals (MOPB-26 by Stefan Esser)</li>

    <li>Fixed unallocated memory access/double free in in array_user_key_compare() (MOPB-24 by Stefan Esser)</li>
    <li>Fixed a double free inside session_regenerate_id() (MOPB-22 by Stefan Esser)</li>
    <li>Added missing open_basedir &amp; safe_mode checks to zip:// and bzip:// wrappers. (MOPB-21 by Stefan Esser).</li>
    <li>Fixed CRLF injection inside ftp_putcmd(). (by loveshell[at]Bug.Center.Team)</li>
    <li>Fixed a remotely trigger-able buffer overflow inside bundled libxmlrpc library. (by Stanislav Malyshev)</li>

  </ul>
  <p>
    <b>Security Enhancements and Fixes in PHP 5.2.2 only:</b>
  </p>
  <ul>
    <li>Fixed a header injection via Subject and To parameters to the mail() function (MOPB-34 by Stefan Esser)</li>
    <li>Fixed wrong length calculation in unserialize S type (MOPB-29 by Stefan Esser)</li>

    <li>Fixed substr_compare and substr_count information leak (MOPB-14 by Stefan Esser) (Stas, Ilia)</li>
    <li>Fixed a remotely trigger-able buffer overflow inside make_http_soap_request(). (by Ilia Alshanetsky)</li>
    <li>Fixed a buffer overflow inside user_filter_factory_create(). (by Ilia Alshanetsky)</li>
    <li>Fixed a possible super-global overwrite inside import_request_variables(). (by Stefano Di Paola, Stefan Esser)</li>
    <li>Limit nesting level of input variables with max_input_nesting_level as fix for (MOPB-03 by Stefan Esser)</li>
  </ul>

  <p>
    <b>Security Enhancements and Fixes in PHP 4.4.7 only:</b>
  </p>
  <ul>
    <li>XSS in phpinfo() (MOPB-8 by Stefan Esser)</li>
  </ul>
  <p>
 While majority of the issues outlined above are local, in some
 circumstances given specific code paths they can be triggered externally.
 Therefor, we strongly recommend that if you use code utilizing the
 functions and extensions identified as having had vulnerabilities in them,
 you consider upgrading your PHP.

</p>
  <p>
 For users upgrading to PHP 5.2 from PHP 5.0 and PHP 5.1, an upgrade guide is
 available <a href="http://www.php.net/migration52">here</a>, detailing the changes between
 those releases and PHP 5.2.2.
</p>
  <p><strong>Update: May 4th;</strong> The PHP 4.4.7 Windows build was updated due to the faulty Apache2 module shipped with the original</p>
  <p><strong>Update: May 23th;</strong> By accident a couple of fixes where listed as fixed in both PHP 5.2.2 and 4.4.7 but where however only fixed in PHP 5.2.2. The PHP 4 ChangeLog was not affected.</p>

</div>
</div>

<hr />
<div class="newsItem">
    
    <a name="2007-04-14-1" id="2007-04-14-1"><h1>The PHP.net Google Summer of Code</h1></a>
    <div>
  <span class="newsdate">[14-Apr-2007]</span>
  <p>
    The PHP team is once again proud to participate in the 
    <a href="http://code.google.com/soc/">Google Summer of Code</a>.
    Seven students will "flip bits instead of burgers" this summer:

</p>
  <ul>
    <li>
        Mentored by Michael Wallner, Hannes Magnusson will work on
        <a href="http://wiki.phpdoc.info/LiveDocs">LiveDocs</a>, which is a
        "tool to display DocBook XML files in a web browser on the
        fly, without the need of building all HTML target files first".
        This project will be of great value to the PHP Documentation Team.
  </li>
    <li>
        The PHP Interpreter uses reference counting to keep track of which
        objects are no longer referenced and thus can be destroyed. A major
        weakness in the current implementation is that it cannot detect
        reference cycles, that is objects that reference each other in a
        circular graph structure which is not referenced itself from outside
        the circle. Mentored by Derick Rethans, David Wang will implement a
        new reference counting algorithm that will alleviate this problem.
  </li>
    <li><a href="http://xdebug.org/">Xdebug</a> provides a range of useful
        functionality for PHP developers, including detailed error information,
        code coverage and profiling support, and support for remote debugging
        using the GDB and DBGp protocols. Mentored by Xdebug\'s creator,
        Derick Rethans, Adam Harvey will develop a cross-platform GUI
        application that implements the DBGp protocol and allows PHP
        applications to be debugged using Xdebug in a development environment
        agnostic fashion.
  </li>

    <li>
	    Mentored by Lukas Smith, Konsta Vesterinen will work on the
        object-relational mapper <a href="http://www.phpdoctrine.net/">Doctrine</a>.
  </li>
    <li>
        Mutation Testing, or Automated Error Seeding, is an approach where
        the testing tool makes some change to the tested code, runs the tests,
        and if the tests pass displays a message saying what it changed. This
        approach is different than code coverage analysis, because it can find
        code that is executed by the running of tests but not actually tested.
        Mentored by Sebastian Bergmann, Mike Lewis will implement Mutation
        Testing for <a href="http://www.phpunit.de/">PHPUnit</a>.
  </li>
    <li>
        Mentored by Helgi Þormar Þorbjörnsson, Igor Feghali will add support
        for foreign keys to
        <a href="http://pear.php.net/package/MDB2_Schema/">MDB2_Schema</a>,
        a package that "enables users to maintain RDBMS independant schema
        files in XML that can be used to create, alter and drop database
        entities and insert data into a database".
  </li>

    <li>
        Mentored by David Coallier, Nicolas Bérard-Nault will refactor the
        internals of <a href="http://www.jaws-project.com/">Jaws</a>, a
        Framework and Content Management System for building dynamic web sites,
        for PHP 6.
  </li>
  </ul>
</div>
</div>

<hr />
<div class="newsItem">
    
    <a name="2007-03-01-1" id="2007-03-01-1"><h1>PHP 4.4.6 Released</h1></a>

    <div>
  <span class="newsdate">[01-Mar-2007]</span>
  <p>
    The PHP development team would like to announce the immediate
    <a href="http://www.php.net/downloads.php#v4">availability of PHP 4.4.6</a>.
</p>
  <p>
    The main issue that this release addresses is a crash problem that was
    introduced in PHP 4.4.5.  The problem occurs when session variables are used
    while register_globals is enabled.
</p>

  <p>
    Details about the PHP 4.4.6 release can be found in the
    <a href="http://www.php.net/releases/4_4_6.php">release announcement for 4.4.6</a>,
    the full list of changes is available in the
    <a href="http://www.php.net/ChangeLog-4.php#4.4.6">ChangeLog for PHP 4</a>.
</p>
</div>
</div>

<hr />
<div class="newsItem">
    
    <a name="2007-02-08-2" id="2007-02-08-2"><h1>PHP 5.2.1 and PHP 4.4.5 Released</h1></a>

    <div>
  <span class="newsdate">[08-Feb-2007]</span>
  <p>
  The PHP development team would like to announce the immediate
  <a href="http://www.php.net/downloads.php#v5">availability of PHP 5.2.1</a> and
  <a href="http://www.php.net/downloads.php#v4">availability of PHP 4.4.5</a>.
  These releases are major stability and security enhancements of the 5.x and
  4.4.x branches, and all users are strongly encouraged to upgrade to it as
  soon as possible.  Further details about the PHP 5.2.1 release can be found in
  the <a href="http://www.php.net/releases/5_2_1.php">release announcement for 5.2.1</a>, the full list of
  changes is available in the <a href="http://www.php.net/ChangeLog-5.php#5.2.1">ChangeLog for PHP
   5</a>. Details about the PHP 4.4.5 release can be found in the
  <a href="http://www.php.net/releases/4_4_5.php">release announcement for 4.4.5</a>, the full list of
  changes is available in the <a href="http://www.php.net/ChangeLog-4.php#4.4.5">ChangeLog for PHP 4</a>.

</p>
  <p>
    <b>Security Enhancements and Fixes in PHP 5.2.1 and PHP 4.4.5:</b>
  </p>
  <ul>
    <li>Fixed possible safe_mode &amp; open_basedir bypasses inside the session extension.</li>
    <li>Fixed unserialize() abuse on 64 bit systems with certain input strings.</li>

    <li>Fixed possible overflows and stack corruptions in the session extension.</li>
    <li>Fixed an underflow inside the internal sapi_header_op() function.</li>
    <li>Fixed non-validated resource destruction inside the shmop extension.</li>
    <li>Fixed a possible overflow in the str_replace() function.</li>
    <li>Fixed possible clobbering of super-globals in several code paths.</li>
    <li>Fixed a possible information disclosure inside the wddx extension.</li>

    <li>Fixed a possible string format vulnerability in *print() functions on 64 bit systems.</li>
    <li>Fixed a possible buffer overflow inside ibase_{delete,add,modify}_user() functions.</li>
    <li>Fixed a string format vulnerability inside the odbc_result_all() function.</li>
  </ul>
  <p>
    <b>Security Enhancements and Fixes in PHP 5.2.1 only:</b>
  </p>

  <ul>
    <li>Prevent search engines from indexing the phpinfo() page.</li>
    <li>Fixed a number of input processing bugs inside the filter extension.</li>
    <li>Fixed allocation bugs caused by attempts to allocate negative values in some code paths.</li>
    <li>Fixed possible stack/buffer overflows inside zip, imap &amp; sqlite extensions.</li>
    <li>Fixed several possible buffer overflows inside the stream filters.</li>

    <li>Memory limit is now enabled by default.</li>
    <li>Added internal heap protection.</li>
    <li>Extended filter extension support for $_SERVER in CGI and apache2 SAPIs.</li>
  </ul>
  <p>
    <b>Security Enhancements and Fixes in PHP 4.4.5 only:</b>
  </p>

  <ul>
    <li>Fixed possible overflows inside zip &amp; imap extensions.</li>
    <li>Fixed a possible buffer overflow inside mail() function on Windows.</li>
    <li>Unbundled the ovrimos extension.</li>
  </ul>
  <p>

The majority of the security vulnerabilities discovered and resolved can in
most cases be only abused by local users and cannot be triggered remotely.
However, some of the above issues can be triggered remotely in certain
situations, or exploited by malicious local users on shared hosting setups
utilizing PHP as an Apache module. Therefore, we strongly advise all users of
PHP, regardless of the version to upgrade to the 5.2.1 or 4.4.5 releases as soon as possible.
</p>
  <p>
For users upgrading to PHP 5.2 from PHP 5.0 and PHP 5.1, an upgrade guide is
available <a href="http://www.php.net/migration52">here</a>, detailing the changes between
those releases and PHP 5.2.1.
</p>
  <p><strong>Update: Feb 14th;</strong> Added release information for PHP
4.4.5.</p>
  <p><strong>Update: Feb 12th;</strong> The Windows install package had problems
with upgrading from previous PHP versions. That has now been fixed and new file
posted in the <a href="http://www.php.net/downloads.php">download section</a>.</p>

</div>
</div>

<hr />
<div class="newsItem">
    
    <a name="2007-02-08-1" id="2007-02-08-1"><h1>The front page has changed</h1></a>
    <div>
  <span class="newsdate">[08-Feb-2007]</span>
  <p>
    The news on the front page of php.net has changed, the <a href="http://www.php.net/conferences/">conference announcements</a> are now located on their own page.
    The idea is to keep php.net specific news clear and also opens the door for additional news entries, like for RC releases. More changes are on the way so keep an eye out.

</p>
</div>
</div>

<hr />
<a href="http://conf.phpquebec.com/en/conf2007/"><img src="http://static.php.net/www.php.net/images/news/conference_php_quebec.gif" alt="PHP Québec conference" width="131" height="63" style="float: right;" /></a><div class="newsItem">
    
    <a name="2007-02-07-1" id="2007-02-07-1"><h1>PHP Québec conference 2007</h1></a>
    <div>
  <span class="newsdate">[07-Feb-2007]</span>
  <p>
PHP Québec is pleased to announce the <a href="http://conf.phpquebec.com/en/conf2007/">fifth edition of the PHP Québec Conference</a>. 
The conference will take place in Montréal, Canada on March 14-15-16th 2007. It features 2 days of 

<a href="http://conf.phpquebec.com/en/conf2007/horaire">technicals talks</a> and 
an additional day of <a href="http://conf.phpquebec.com/en/conf2007/ateliers">workshop</a>. 
Among the  speakers, the well know PHP experts such has:  Rasmus Lerdorf, Andrei 
Zmievski, Derick Rethans, Ilia Alshanetsky, John Coggeshall, Damien Séguy, and many more.
</p>
  <p>
The conference has three distinct tracks : Advanced Techniques, Data 
Availability, PHP: Beyound Theory. With over 35 sessions and workshops, the 
PHP Québec Conference is great opportunity to learn about the latest 
development and professional techniques to help you build high quality PHP 
software and meet with PHP.
</p>
  <p>
Special prices are available for all Open Source community members and major 
contributors.
</p>
</div>
</div>

<hr />
<div class="newsItem">
    
    <a name="2007-02-03-1" id="2007-02-03-1"><h1>PHP Manual Updates</h1></a>
    <div>
  <span class="newsdate">[03-Feb-2007]</span>
  <p>The PHP documentation team is proud to present to the PHP community a few fixes and tweaks to the <a href="http://www.php.net/manual/en/">PHP Manual</a>, including:</p>
  <ul>

    <li>an improved, XSL-based build system that will deliver compiled manuals to mirrors in a more timely manner (goodbye dsssl)</li>
    <li>manual pages can now contain images (see <code><a href="http://www.php.net/en/function.imagearc">imagearc()</a></code> for an example)</li>
    <li>updated function version information and capture system (fewer "no version information, might be only in CVS" messages)</li>
    <li>... and more to come!</li>
  </ul>

  <p>Please <a href="http://www.php.net/about.howtohelp">help us improve the documentation</a> by <a href="http://bugs.php.net/">submitting bug reports</a>, and adding notes to undocumented functions.</p>
</div>
</div>

<hr />
<a href="http://www.phpconference.co.uk/"><img src="http://static.php.net/www.php.net/images/news/phplondon2007.png" alt="PHP London 2007" width="147" height="73" style="float: right;" /></a><div class="newsItem">
    
    <a name="2007-01-18-1" id="2007-01-18-1"><h1>PHP London 2007</h1></a>
    <div>
  <span class="newsdate">[18-Jan-2007]</span>
  <p>
After the success of 2006 the <a href="http://www.phplondon.org/">PHP London user group</a> is staging the <a href="http://www.phpconference.co.uk/">UK\'s second dedicated PHP conference</a> on Friday, 23 February 2007, in London. The conference will be a low-cost event, costing £50 for the day. Speakers include: Rasmus Lerdorf, Cal Evans, Simon Laws and Kevlin Henney.

</p>
</div>
</div>

<hr />
<a href="http://www.phparch.com/tek"><img src="http://static.php.net/www.php.net/images/news/phptek2007.png" alt="php|tek 2007" width="210" height="65" style="float: right;" /></a><div class="newsItem">
    
    <a name="2007-01-12-1" id="2007-01-12-1"><h1>Chicago php|tek 2007</h1></a>
    <div>
  <span class="newsdate">[12-Jan-2007]</span>
  <p>
php|architect is proud to announce <a href="http://www.phparch.com/tek">php|tek 2007</a>, which will take place in Chicago, Illinois (USA) on May 16-18, 2007.

</p>
  <p>
This year, the conference once again promises to be an excellent event for PHP developers of all levels, with talks from top PHP experts such as Rasmus Lerdorf, Chris Shiflett, Andrei Zmievski, Ilia Alshanetsky, Sara Golemon, and many more.
</p>
</div>
</div>

<hr />

<hr />

<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2008-12-10-1" id="id2008-12-10-1" href="http://www.php.net/archive/2008.php#id2008-12-10-1" rel="bookmark" class="bookmark">Windows PECL binaries</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-12-10T19:50:38+01:00">[10-Dec-2008]</abbr>

        <div>
        <p>Due to unfortunate circumstances Windows binaries for PECL extensions will no longer be available on http://pecl4win.php.net.</p>
        <p>Work is being done to incorporate Windows binaries for PECL extensions into <a href="http://pecl.php.net">pecl.php.net</a> and will hopefully be ready early 2009</p>
        <p>If anyone is interested in the project please join the <a href="mailto:internals-win@lists.php.net">PHP Windows Development</a> <a href="http://php.net/mailinglist">mailinglist</a>.</p>

      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2008-12-08-1" id="id2008-12-08-1" href="http://www.php.net/archive/2008.php#id2008-12-08-1" rel="bookmark" class="bookmark">PHP 5.2.8 Released!</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-12-08T15:58:43-05:00">[08-Dec-2008]</abbr>

        <div>
        <p>The PHP Development Team would like to announce the immediate availability of PHP 5.2.8. This release addresses a regression introduced by 5.2.7 in regard to the magic_quotes functionality, which was broken by an incorrect fix to the filter extension. All users who have upgraded to 5.2.7 are encouraged to upgrade to this release.  Alternatively you can apply a work-around for the bug by changing "filter.default_flags=0" in php.ini.</p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2008-12-07-1" id="id2008-12-07-1" href="http://www.php.net/archive/2008.php#id2008-12-07-1" rel="bookmark" class="bookmark">PHP 5.2.7 has been removed from distribution</a></h1>

    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-12-07T22:01:14-08:00">[07-Dec-2008]</abbr>
        <div>
        <p>
        Due to a security bug found in the PHP 5.2.7 release, it has been removed from distribution.
        The bug affects configurations where <a href="http://www.php.net/magic_quotes">magic_quotes_gpc</a> is enabled,
        because it remains off even when set to on.
        In the meantime, use PHP <a href="http://www.php.net/releases/5_2_6.php">5.2.6</a> until PHP 5.2.8 is later released.
       </p>

      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2008-12-04-3" id="id2008-12-04-3" href="http://www.php.net/archive/2008.php#id2008-12-04-3" rel="bookmark" class="bookmark">PHP 5.2.7 Released</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-12-04T20:44:17-05:00">[04-Dec-2008]</abbr>

        <div>
      <p>
       The PHP development team would like to
       announce the immediate availability of <a href="http://www.php.net/downloads.php#v5">PHP 5.2.7</a>.
       This release focuses on improving the stability of the PHP 5.2.x branch with over
       120 bug fixes, several of which are security related. All users of PHP are
       encouraged to upgrade to this release.
      </p>
      <p>
       <b>Security Enhancements and Fixes in PHP 5.2.7:</b>
      </p>
      <ul>

       <li>
        Upgraded PCRE to version 7.8 (Fixes CVE-2008-2371)
       </li>
       <li>
        Fixed missing initialization of BG(page_uid) and BG(page_gid), reported by Maksymilian Arciemowicz.
       </li>
       <li>
        Fixed incorrect php_value order for Apache configuration, reported by Maksymilian Arciemowicz.
       </li>
       <li>

        Fixed a crash inside gd with invalid fonts (Fixes CVE-2008-3658).
       </li>
       <li>
        Fixed a possible overflow inside memnstr (Fixes CVE-2008-3659).
       </li>
       <li>
        Fixed security issues detailed in CVE-2008-2665 and CVE-2008-2666.
       </li>
       <li>
        Fixed bug #45151 (Crash with URI/file..php (filename contains 2 dots)).(Fixes CVE-2008-3660)
       </li>

       <li>
        Fixed bug #42862 (IMAP toolkit crash: rfc822.c legacy routine buffer overflow). (Fixes CVE-2008-2829)</li>
       <li>
        Fixed extraction of zip files and directories with crafted entries, reported by Stefan Esser.
       </li>
      </ul>
      <p>
       Further details about the PHP 5.2.7 release can be found in the <a href="http://www.php.net/releases/5_2_7.php">release announcement for 5.2.7</a>, the full list of changes is available in the <a href="http://www.php.net/ChangeLog-5.php#5.2.7">ChangeLog for PHP 5</a>.
      </p>

      <br/>
      <p>
       <strong>Update (December 6th):</strong>
       Added missing zip security fix
      </p>
     </div>
    
    </div>
</div>

<hr />

<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2008-12-04-2" id="id2008-12-04-2" href="http://www.php.net/archive/2008.php#id2008-12-04-2" rel="bookmark" class="bookmark">PHP 5.3 alpha3 released!</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-12-04T17:00:32+01:00">[04-Dec-2008]</abbr>
        <div>
        <p>The PHP development team is proud to announce the <a href="http://qa.php.net/">third alpha release</a>

        of the upcoming PHP 5.3.0 minor version update of PHP.
        Several new features have already been documented in the <a href="http://php.net/docs.php">official documentation</a>,
        others are listed on the <a href="http://wiki.php.net/doc/scratchpad/upgrade/53">wiki</a>
        in preparation of getting documented. It is imperative that more people
        join the effort to complete the documentation for PHP 5.3.0.
        Please also review the <a href="http://php.net/php5news">NEWS</a> file.</p>
        <strong>THIS IS A DEVELOPMENT PREVIEW - DO NOT USE IT IN PRODUCTION!</strong>
        <p>The purpose of this alpha release is to encourage users to not only actively
         participate in identifying bugs, but also in ensuring that all new features or
         necessary backwards compatibility breaks are noted in the documentation. Please
         report any findings to the <a href="mailto:php-qa@lists.php.net">QA mailinglist</a>

         or the <a href="http://bugs.php.net">bug tracker</a>.</p>
        <p>There have been a great number of other additions and improvements since the last alpha,
        but here is a short overview of the most important changes:</p>
        <ul>
          <li><a href="http://php.net/language.namespaces">Namespaces</a> (documentation has been updated to the current state)</li>
          <li>

            <a href="http://wiki.php.net/rfc/rounding">Rounding behavior</a>
          </li>
          <li>ext/msql has been removed, while ext/ereg will now raise E_DEPRECATED notices</li>
          <li>ext/mhash has been replaced by ext/hash but full BC is maintained</li>
          <li>PHP now uses cc as the default compiler, instead of gcc</li>
          <li>A number of bug fixes to ext/pdo, ext/soap, the stream layer among others</li>

        </ul>
        <p>Several under the hood changes also require in depth testing with existing
        applications to ensure that any backwards compatibility breaks are minimized.</p>
        <p>The current <a href="http://wiki.php.net/todo/php53">release plan</a> expects
        a stable release sometime around the end of Q1 2009.</p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2008-12-04-1" id="id2008-12-04-1" href="http://www.php.net/archive/2008.php#id2008-12-04-1" rel="bookmark" class="bookmark">PHP Advent 2008</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-12-04T09:30:00-05:00">[04-Dec-2008]</abbr>
        <div>
        <p>December is a busy and exciting time of the year.
        <a href="http://phpadvent.org/">PHP Advent</a> is an attempt to capture
        and share doses of wisdom from a few of the people in the PHP community
        who have been kind enough to share their thoughts and tips. Please join
        us on our daily journey by <a href="http://feeds.feedburner.com/phpadvent">subscribing to our feed</a>

        or <a href="http://twitter.com/phpadvent">following us on Twitter</a>.
        Happy holidays.</p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.afup.org/"><img src="http://static.php.net/www.php.net/images/news/afup2008.png" alt="Forum AFUP Paris 2008" width="120" height="95" style="float: right;" /></a></div>
    <h1><a name="id2008-11-15-1" id="id2008-11-15-1" href="http://www.php.net/archive/2008.php#id2008-11-15-1" rel="bookmark" class="bookmark">Forum PHP Paris 2008</a></h1>

    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-11-15T21:56:55-07:00">[15-Nov-2008]</abbr>
        <p>The 2008 edition of the French PHP users welcomes once again unique
      speakers : Zak Greant, from Foo Associates, Laura Thompson from Mozilla, and
      Lukas Smith, Core PHP Developper.
          </p>
      <p>
  Set in Paris, on December 8th and 9th 2008, by the
  Association Française des Utilisateurs de PHP (French PHP User Group,
  <a href="http://www.afup.org/" title="AFUP">http://www.afup.org/</a>),
  the Forum PHP 2008 focuses on the themas of Professional Web Services,
  and PHP large scale projects.
    </p>
    
    </div>

</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://conference.phpnw.org.uk"><img src="http://static.php.net/www.php.net/images/news/phpnw08_logo.jpg" alt="PHPNW08 logo" width="175" height="142" style="float: right;" /></a></div>
    <h1><a name="id2008-11-04-2" id="id2008-11-04-2" href="http://conference.phpnw.org.uk" rel="bookmark" class="bookmark">PHPNW08 - November 22nd - Manchester, UK</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-11-04T12:55:09+00:00">[04-Nov-2008]</abbr>
        <div>
        <p>

       PHP North West are pleased to announce their first conference, PHPNW08, to be held at <span class="location">Manchester Central (formerly GMex)</span>.
      </p>
        <p>
       On <abbr class="dtstart" title="2008-11-22">Saturday 22nd November 2008</abbr>,
       PHPNW08 will bring together the North-of-England PHP community for a
       one-day event of exceptional presentations, challenging workshops,
       sensational debates and networking opportunities. The conference will
       host a mixture of well-known regulars on the speakers\' circuit and local
       talent, and aims to highlight current best practices and emerging topics
       within the sphere of PHP and web development. See our
       <a href="http://conference.phpnw.org.uk/phpnw08/?page_id=118" class="url">conference schedule</a> for details.
      </p>
        <p>

       We would love developers, designers, managers or anyone else with an
       interest in the PHP programming language to join us for what promises to
       be an awesome event at a very reasonable rate:
      </p>
        <ul>
          <li>Standard tickets: £60.00</li>
          <li>Early bird (until 8th November): £50.00</li>
          <li>Concessionary tickets: £35.00</li>
        </ul>
        <p>

       Tickets for PHPNW08 are on sale now at
       <a href="http://conference.phpnw.org.uk/phpnw08/register/" class="url">http://conference.phpnw.org.uk/phpnw08/register/</a>.
      </p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"></div>
    <h1><a name="id2008-09-16-1" id="id2008-09-16-1" href="http://www.php.net/archive/2008.php#id2008-09-16-1" rel="bookmark" class="bookmark">PHP Quebec 2009</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-09-16T10:12:12+02:00">[16-Sep-2008]</abbr>
        <p>

  PHP Québec is pleased to announce the seventh edition of the PHP Québec Conference.
    The Conference will take place in <span class="location">Montréal, Québec,
    Canada</span> between <abbr title="2009-03-04T00:00:00+01:00" class="dtstart">March 4</abbr>
    and <abbr title="2009-03-06T00:00:00+01:00" class="dtend">6th 2009</abbr>.
    We are looking for speakers willing to share their expertise with Canadian and United States PHP professionals.
  </p>
      <p>
  The Conference features technical talks and Labs dedicated to advanced software development techniques with PHP5 and PHP6, XML, web services,databases, etc., project management where speakers and visitor swill try to find solutions to actual business problems.
  </p>

      <p>
  Organizers will prioritize new and original topics in English or French. For more information, visit the website:
  <a href="http://conf.phpquebec.com/en" title="2009 PHP QuebecConference">http://conf.phpquebec.com</a>
</p>
    
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://phpconference.es/"><img src="http://static.php.net/www.php.net/images/news/PHPBarcelonaConference003.png" alt="Barcelona PHP Conference" width="300" height="120" style="float: right;" /></a></div>
    <h1><a name="id2008-09-10-1" id="id2008-09-10-1" href="http://phpconference.es/" rel="bookmark" class="bookmark">Barcelona PHP Conference 2008</a></h1>

    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-09-10T15:08:49+02:00">[10-Sep-2008]</abbr>
        <div>
        <p><a href="http://phpbarcelona.org/">The PHP Barcelona User Group</a>
        is proud to announce its first
        <a href="http://phpconference.es/">international PHP Conference</a>.
        It will be celebrated on <abbr class="dtstart" title="2008-09-27">Saturday,
         September 27th</abbr>, at <span class="location">Barcelona</span>.
       </p>

        <p>
        The PHP Barcelona User Group (aka PHPBarcelona) is a non-profit
        organization aimed at spreading and interchanging knowledge among
        the PHP developers community of Barcelona and surroundings, and
        also evangelizing the PHP technology on universities and
        enterprises as well.
       </p>
        <p>
        This year they had celebrated another events but this one is
        the first which will be developed completely in English. The
        highlights of this conference will be the talks of internationally
        recognized PHP developers, like Derick Rethans and Scott MacVicar
        among others.
       </p>
        <p>
        For more information about Barcelona PHP Conference 2008 and to
        register, please visit
        <a href="http://phpconference.es/" class="url">http://phpconference.es</a>
       </p>

      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.phpconference.com/"><img src="http://static.php.net/www.php.net/images/news/icp08.jpg" alt="International PHP Conference 2008" width="300" height="192" style="float: right;" /></a></div>
    <h1><a name="id2008-09-08-1" id="id2008-09-08-1" href="http://www.phpconference.com/" rel="bookmark" class="bookmark">International PHP Conference 2008 October 27-31st Mainz, Germany</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-09-08T12:31:08+02:00">[08-Sep-2008]</abbr>

        <div>
        <h3>The premiere PHP Conference – Celebrate the 14th event with us!</h3>
        <p>
       Today the ICP is <em>the</em> reference whenever substructures of existing technologies
       should be extended or the basis for new developments should be created. Thus, you
       do not only profit from the concentrated know-how of worldwide acknowledged,
       international PHP-experts but also from the professional transfer of knowledge
       between industry and development.
      </p>
        <p>
       With its mixture of topics the International PHP Conference provides an ideal
       resource for all professionals and their successful daily routine within the whole
       PHP-spectrum. Insights into current Web 2.0 technologies, Security, Best Practices
       for tools and components, Enterprise know-how, databases, architectures and more
       are provided at the ICP 2008.
      </p>

        <p>
       The International PHP Conference celebrates it\'s 14th Edition. Celebrate with us,
       and profit from our Celebrate 14teen offers!
      </p>
        <ul>
          <li>199 € / Special Price</li>
          <li>149 €* / Special Price for Freelancer</li>
          <li>99 €** / Student Price</li>
        </ul>

        <p>Offer is valid till 30th September!</p>
        <p>
          <a href="http://phpconference.com/">Register now!</a>
        </p>
        <p>
          <small>* Confirmation with your company\'s letter head</small>
          <br/>

          <small>** With Student ID. Limited seating available</small>
        </p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://phpworks.mtacon.com/"><img src="http://static.php.net/www.php.net/images/news/phppyworks.png" alt="php|works / PyWorks 2008: Chicago" width="200" height="88" style="float: right;" /></a></div>
    <h1><a name="2008-09-03-1" id="2008-09-03-1" href="http://phpworks.mtacon.com/" rel="bookmark" class="bookmark">php|works &amp; PyWorks 2008 - Atlanta</a></h1>

    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-09-03T11:49:33+02:00">[03-Sep-2008]</abbr>
        <div>
        <a href="http://tek.phparch.com/" class="url">php|tek 2008: Chicago</a>
        <p>
          The publishers of <a href="http://www.phparch.com/">php|architect Magazine</a> and <a href="http://pythonmagazine.com">Python Magazine</a> are proud to announce the
          joint <a href="http://phpworks.mtacon.com">php|works</a> / <a href="http://pyworks.mtacon.com">PyWorks 2008</a> conferences in Atlanta, Georgia, USA.
        </p>

        <p>
          php|works and PyWorks feature over 65 talks, 10 tutorials and 5 tracks on topics ranging from web development to database optimization with PHP and Python over the course of two days,
          social events in the evening and plenty of networking opportunities with industry peers.
        </p>
        <p>
          This year, the PHP Community (and the Python Community, too!) meets <abbr class="dtstart" title="2008-11-12">November 12</abbr>-<abbr class="dtend" title="2008-11-14">14</abbr> for one of North America\'s premier PHP conferences of 2008.
        </p>
        <p>

          Join us to hear <a href="http://phpworks.mtacon.com/c/schedule">top speakers</a> such as Derick Rethans (eZ Systems), Chris Shiflett (OmniTI), Mike Potter (Adobe) and more.
        </p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2008-08-07-1" id="id2008-08-07-1" href="http://www.php.net/archive/2008.php#id2008-08-07-1" rel="bookmark" class="bookmark">PHP 4.4.9 released!</a></h1>

    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-08-07T20:12:42+02:00">[07-Aug-2008]</abbr>
        <div>
        <p>The PHP development team would like to announce the immediate
        availability of PHP 4.4.9. It continues to improve the security and the
        stability of the 4.4 branch and all users are strongly encouraged to
        upgrade to it as soon as possible. This release wraps up all the
        outstanding patches for the PHP 4.4 series, and is therefore the
        <b>last</b> PHP 4.4 release.</p>
        <p>
          <b>Security Enhancements and Fixes in PHP 4.4.9:</b>

        </p>
        <ul>
          <li>Updated PCRE to version 7.7.</li>
          <li>Fixed overflow in memnstr().</li>
          <li>Fixed crash in imageloadfont when an invalid font is given.</li>
          <li>Fixed open_basedir handling issue in the curl extension.</li>
          <li>Fixed mbstring.func_overload set in .htaccess becomes global.</li>

        </ul>
        <p> For a full list of changes in PHP 4.4.9, see the <a href="http://www.php.net/ChangeLog-4.php#4.4.9">ChangeLog</a>.</p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>

    <h1><a name="id2008-08-01-1" id="id2008-08-01-1" href="http://www.php.net/archive/2008.php#id2008-08-01-1" rel="bookmark" class="bookmark">PHP 5.3 alpha1 released!</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-08-01T08:50:37+02:00">[01-Aug-2008]</abbr>
        <div>
        <p>The PHP development team is proud to announce the <a href="http://qa.php.net/">first alpha release</a> of the upcoming minor version update of PHP. <a href="http://windows.php.net/download/">Windows binaries</a> will be available starting with alpha2 (intermediate snapshots available at <a href="http://snaps.php.net">snaps.php.net</a>). The new version PHP 5.3 is expected to improve stability and performance as well as add new language syntax and extensions. Several new features have already been documented in the <a href="http://php.net/docs.php">official documentation</a>, others are listed on the <a href="http://wiki.php.net/doc/scratchpad/upgrade/53">wiki</a> in preparation of getting documented. Please also review the <a href="http://php.net/php5news">NEWS</a> file.</p>

        <strong>THIS IS A DEVELOPMENT PREVIEW - DO NOT USE IT IN PRODUCTION!</strong>
        <p>The purpose of this alpha release is to encourage users to not only actively
         participate in identifying bugs, but also in ensuring that all new features or
         necessary backwards compatibility breaks are noted in the documentation. Please
         report any findings to the <a href="mailto:php-qa@lists.php.net">QA mailinglist</a>
         or the <a href="http://bugs.php.net">bug tracker</a>.</p>
        <p>There have been a great number of other additions and improvements, but here is a short overview of the most important changes:</p>
        <ul>

          <li><a href="http://php.net/language.namespaces">Namespaces</a> (documentation maybe out dated)</li>
          <li><a href="http://php.net/oop5.late-static-bindings">Late static binding</a> and <a href="http://php.net/language.oop5.overloading">__callStatic</a></li>
          <li>
            <a href="http://wiki.php.net/rfc/closures">Lambda functions and closures</a>
          </li>

          <li>Addition of the <a href="http://php.net/book.intl">intl</a>, <a href="http://php.net/book.phar">phar</a> (phar is scheduled for some more work a head of alpha2), <a href="http://php.net/book.fileinfo">fileinfo </a> and <a href="http://php.net/book.sqlite3">sqlite3</a> extensions</li>
          <li>Optional cyclic garbage collection</li>

          <li>Optional support for the <a href="http://forge.mysql.com/wiki/PHP_MYSQLND">MySQLnd</a> replacement driver for libmysql</li>
          <li>Windows older than Windows 2000 (Windows 98, NT4, etc.) are not supported anymore (<a href="http://wiki.php.net/internals/windows/releasenotes">details</a>)</li>
          <li>New syntax features like <a href="http://php.net/language.types.string#language.types.string.syntax.nowdoc">NOWDOC</a>, limited GOTO, ternary short cut "?:"</li>
        </ul>

        <p>Several under the hood changes also require in depth testing with existing applications to ensure that any backwards compatibility breaks are minimized. This is especially important for users that require the undocumented Zend engine multibyte support.</p>
        <p>The current <a href="http://wiki.php.net/todo/php53">release plan</a> states that there will be alpha/beta/RC releases in 2-3 week intervals with an expected stable release of PHP 5.3 between mid September and mid October of 2008.</p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">

    <div class="newsImage"></div>
    <h1><a name="id2008-07-30-1" id="id2008-07-30-1" href="http://www.php.net/archive/2008.php#id2008-07-30-1" rel="bookmark" class="bookmark">TestFest 2008 wrap-up</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-07-30T00:23:14+01:00">[30-Jul-2008]</abbr>
        <div>
        <p>Overall 158 tests have been submitted as part of <a href="http://qa.php.net/testfest.php">TestFest 2008</a> since the launch of the <a href="http://testfest.php.net">TestFest submission site</a> by 30 different people from people all over the world. Actually this is not counting the various submissions by existing core developers, who also took this opportunity to add some more tests. This has actually increased total <a href="http://gcov.php.net/" target="_new">test coverage</a> for ext/reflection, ext/dom and ext/exif by about 10% each. While the organization of the TestFest was a bit adhoc, there were numerous TestFest events in local user groups. So the number of people exposed to the PHP test framework is much greater. Hopefully this will lead to more people submitting bug reports with an accompanying <a href="http://qa.php.net/write-test.php">phpt</a> test file!</p>

        <p>Our top submitter Felix De Vliegher has actually committed his last submissions himself since, based on the high quality of his submissions, he has been granted commit rights to the PHP repository. We have not heard back from all participants, but we encourage everybody to <a href="http://www.deshong.net/?p=76" target="_new">blog</a> about their experience and provide us with feedback on how to improve future events.</p>
        <p>Now better late than never, here are the 10 winners of the promised <a href="http://flickr.com/groups/elephpants/pool/">elePHPant</a> raffle sponsored by <a href="http://www.nexen.net">Nexen</a>. Note that Felix asked me not to include him in the raffle, since he is already herding quite a number of elePHPants at home.</p>
        <ul>
          <li>Eric Stewart</li>

          <li>Håvard Eide</li>
          <li>Marc Veldman</li>
          <li>Michelangelo van Dam</li>
          <li>Rein Velt</li>
          <li>Rob Young</li>
          <li>Sami Greenbury</li>

          <li>Sebastian Deutsch</li>
          <li>Sebastian Schürmann</li>
          <li>Stefan Koopmanschap</li>
        </ul>
        <p>We will provide Nexen with the email addresses of the winners, so that they can arrange to get the elePHPants shipped. Also for those people wondering, you can continue to submit tests on the <a href="http://testfest.php.net">TestFest submission site</a>. A bit thank you to all participants and TestFest organizers! Without the countless people that helped organize local events, implement the infrastructure and submissions reviewers, the TestFest would have obviously not worked out as well as it has. We will surely do similar events in the future based on the big success of TestFest 2008.</p>
      </div>

    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2008-07-29-1" id="id2008-07-29-1" href="http://www.php.net/archive/2008.php#id2008-07-29-1" rel="bookmark" class="bookmark">Manual restructure and license change</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-07-29T23:50:37+02:00">[29-Jul-2008]</abbr>
        <div>

        <p>
        A few weeks ago the <a href="http://www.php.net/manual">manual</a> was restructured
        to improve navigation and make room for
        <a href="http://www.php.net/pdo.prepared-statements">per-extension chapters</a>
        and <a href="http://www.php.net/haru.examples">usage examples</a> along with
        <a href="http://www.php.net/class.xmlreader">improved documentation</a> for
        <a href="http://www.php.net/oop5/">object oriented</a> extensions.
       </p>

        <p>
        The most noticable changes are the <a href="http://www.php.net/funcref">function reference</a>,
        <a href="http://www.php.net/reserved.variables">predefined variables</a>,
        <a href="http://www.php.net/context">context options and parameters</a> and
        <a href="http://www.php.net/reserved.exceptions">predefined exceptions</a> manual pages,
        for which <a href="http://www.php.net/contact">we would really appreciate feedback</a> on.
       </p>

        <p>
        The upcomming PHP5.3 release introduces
        <a href="http://wiki.php.net/doc/scratchpad/upgrade/53">several major features</a>
        such as <a href="http://www.php.net/namespaces">namespaces</a>, closures,
        <a href="http://www.php.net/lsb">late static bindings</a>, <a href="http://www.php.net/intl">internationalization functions</a>,
        <a href="http://www.php.net/ini.sections">INI sections</a>, and <a href="http://www.php.net/phar">Phar</a> among others.
        We would really appreciate any and all help we can get improving the documentation.
       </p>

        <p>
        In related news, the manual was relicensed recently and is now
        covered by the
        <a href="http://creativecommons.org/licenses/by/3.0/" rel="license">CreativeCommons Attribution license</a>.
       </p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://zendcon.com/"><img src="http://static.php.net/www.php.net/images/news/zlogo.gif" alt="ZendCon 2008" width="291" height="108" style="float: right;" /></a></div>

    <h1><a name="id2008-07-13-1" id="id2008-07-13-1" href="http://zendcon.com/" rel="bookmark" class="bookmark">ZendCon 2008 - September 15-18 - Santa Clara, CA-US</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-07-13T18:23:14+02:00">[13-Jul-2008]</abbr>
        <div>
        <p>Join us for the largest PHP only gathering, <abbr class="dtstart" title="2008-09-15T00:00:00+02:00">September 15th</abbr> - <abbr class="dtend" title="2008-09-19T00:00:00+02:00">18th</abbr>. Discuss topics such as:</p>

        <ul>
          <li>PHP in the Enterprise</li>
          <li>Advanced PHP Programming Techniques</li>
          <li>Scalability</li>
          <li>PHP and RIAs</li>
        </ul>
        <p>Our guest keynote speaker this year is Zak Greant who will be speaking on <q>The Age of Literate Machines</q></p>

        <p>For more information and to register for the biggest PHP even of the year, visit <a href="http://zendcon.com/">http://zendcon.com/</a></p>
      </div>
    
    </div>
</div>

<hr />

<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.afup.org/"><img src="http://static.php.net/www.php.net/images/news/elephpants.jpg" alt="elePHPants" width="180" height="135" style="float: right;" /></a></div>
    <h1><a name="id2008-05-13-1" id="id2008-05-13-1" href="http://www.php.net/archive/2008.php#id2008-05-13-1" rel="bookmark" class="bookmark">Call for PUG, for elePHPants, 2008 generation</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-05-13T11:56:55-07:00">[13-May-2008]</abbr>

        <div>
        <p>The elePHPants are now ready to make their 2008 generation.
      PHP User groups, enthusiasts and companies that are interested in
      groups of elePHPants, shall join this year\'s herd.</p>
        <p>
ElePHPants are a great link of the community, happily promoting your favorite
language in conferences, on work station, baby cribs and other unusual places.
Production prices make it possible for groups to raise funds, entice membership
or simply bring joy and PHP around.
    </p>
        <p>
Pre-register your <a href="http://www.nexen.net/elephpant/2008_en.php">herd of elePHPants</a>
online, for big and small,
and join the <a href="http://www.flickr.com/photos/tags/elephpant/">world of blue elePHPants</a>.
    </p>

      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2008-04-22-1" id="id2008-04-22-1" href="http://www.php.net/archive/2008.php#id2008-04-22-1" rel="bookmark" class="bookmark">Google Summer of Code: php.net students</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-04-22T20:04:48+02:00">[22-Apr-2008]</abbr>

        <div>
        <p>
  The PHP team is once again proud to participate in the
  <a href="http://code.google.com/soc/">Google Summer of Code</a>.
  Ten students will "flip bits instead of burgers" this summer:
</p>
        <ul>
          <li><span class="vcard"><a href="http://code.google.com/soc/2008/php/appinfo.html?csaid=73D5F5E282F9163F" class="url">Zend LLVM Extension</a> by
    <span class="fn"><span class="given-name">Joonas </span><span class="family-name">Govenius</span></span>,
  </span>

  mentored by
  <span class="vcard"><span class="fn"><span class="given-name">Nuno </span><span class="family-name">Lopes</span></span></span></li>
          <li><span class="vcard"><a href="http://code.google.com/soc/2008/php/appinfo.html?csaid=12A8D27646C9771A" class="url">PHP Optimizer</a> by
    <span class="fn"><span class="given-name">Samuel </span><span class="family-name">Graham Kelly IV</span></span>,
  </span>
  mentored by
  <span class="vcard"><span class="fn"><span class="given-name">Derick </span><span class="family-name">Rethans</span></span></span></li>

          <li><span class="vcard"><a href="http://code.google.com/soc/2008/php/appinfo.html?csaid=3D5258783F22F62C" class="url">PhD (PHP Docbook) Project</a> by
    <span class="fn"><span class="given-name">Rudy </span><span class="family-name">Nappée</span></span>,
  </span>
  mentored by
  <span class="vcard"><span class="fn"><span class="given-name">Hannes </span><span class="family-name">Magnusson</span></span></span></li>
          <li><span class="vcard"><a href="http://code.google.com/soc/2008/php/appinfo.html?csaid=93F63E6C761134FB" class="url">Replace auto* with CMake</a> by
    <span class="fn"><span class="given-name">Alejandro Leiva </span><span class="family-name">Rojas</span></span>,
  </span>

  mentored by
  <span class="vcard"><span class="fn"><span class="given-name">Pierre A. </span><span class="family-name">Joye</span></span></span></li>
          <li><span class="vcard"><a href="http://code.google.com/soc/2008/php/appinfo.html?csaid=F74E5E31D92F95D0" class="url">gsoc:2008 - XDebug</a> by
    <span class="fn"><span class="given-name">Chung-Yang </span><span class="family-name">Lee</span></span>,
  </span>
  mentored by
  <span class="vcard"><span class="fn"><span class="given-name">David </span><span class="family-name">Coallier</span></span></span></li>

          <li><span class="vcard"><a href="http://code.google.com/soc/2008/php/appinfo.html?csaid=435245F847240738" class="url">Rewrite the run-tests.php script</a> by
    <span class="fn"><span class="given-name">Cesar </span><span class="family-name">Montedonico</span></span>,
  </span>
  mentored by
  <span class="vcard"><span class="fn"><span class="given-name">Travis </span><span class="family-name">Swicegood</span></span></span></li>
          <li><span class="vcard"><a href="http://code.google.com/soc/2008/php/appinfo.html?csaid=837287100B93044F" class="url">PHP Bindings for Cairo</a> by
    <span class="fn"><span class="given-name">Akshat </span><span class="family-name">Gupta</span></span>,
  </span>

  mentored by
  <span class="vcard"><span class="fn"><span class="given-name">Anant </span><span class="family-name">Narayanan</span></span></span></li>
          <li><span class="vcard"><a href="http://code.google.com/soc/2008/php/appinfo.html?csaid=25AE6211DDEC86FD" class="url">Algorithm Optimizations</a> by
    <span class="fn"><span class="given-name">Michal </span><span class="family-name">Dziemianko</span></span>,
  </span>
  mentored by
  <span class="vcard"><span class="fn"><span class="given-name">Scott </span><span class="family-name">MacVicar</span></span></span></li>

          <li><span class="vcard"><a href="http://code.google.com/soc/2008/php/appinfo.html?csaid=5A442E6A7568434D" class="url">PECL, Website Improvements</a> by
    <span class="fn"><span class="given-name">Barry </span><span class="family-name">Carlyon</span></span>,
  </span>
  mentored by
  <span class="vcard"><span class="fn"><span class="given-name">Helgi Þormar </span><span class="family-name">Þorbjörnsson</span></span></span></li>
          <li><span class="vcard"><a href="http://code.google.com/soc/2008/php/appinfo.html?csaid=AD4803BA9A70BCB3" class="url">Implement Unicode into PHP 6</a> by
    <span class="fn"><span class="given-name">Henrique do Nascimento </span><span class="family-name">Angelo</span></span>,
  </span>

  mentored by
  <span class="vcard"><span class="fn"><span class="given-name">Scott </span><span class="family-name">MacVicar</span></span></span></li>
        </ul>
        <p><strong>Update (<abbr class="updated" title="2008-05-11T17:48:11+02:00">May 11th</abbr>):</strong>
         Unfortunately <span class="vcard"><span class="fn">Nicholas Sloan</span></span> had to drop out of the
         program, but he will be replaced by <span class="vcard"><span class="fn">Rudy Nappée</span></span> working on the same application.</p>

      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2008-05-01-1" id="id2008-05-01-1" href="http://www.php.net/archive/2008.php#id2008-05-01-1" rel="bookmark" class="bookmark">PHP 5.2.6 Released</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-05-01T19:27:58-04:00">[01-May-2008]</abbr>

        <div>
        <p>The PHP development team would like to announce the immediateavailability of PHP 5.2.6. This release focuses on improving the stability ofthe PHP 5.2.x branch with over 120 bug fixes, several of which are security related.All users of PHP are encouraged to upgrade to this release.</p>
        <p>        Further details about the PHP 5.2.6 release can be found in the        <a href="http://www.php.net/releases/5_2_6.php">release announcement for 5.2.6</a>, the full list of        changes is available in the <a href="http://www.php.net/ChangeLog-5.php#5.2.6">ChangeLog for PHP 5</a>.</p>
        <p>
          <b>Security Enhancements and Fixes in PHP 5.2.6:</b>

        </p>
        <ul>
          <li>Fixed possible stack buffer overflow in the FastCGI SAPI identified by Andrei Nigmatulin.</li>
          <li>Fixed integer overflow in printf() identified by Maksymilian Aciemowicz.</li>
          <li>Fixed security issue detailed in CVE-2008-0599 identified by Ryan Permeh.</li>
          <li>Fixed a safe_mode bypass in cURL identified by Maksymilian Arciemowicz.</li>
          <li>Properly address incomplete multibyte chars inside escapeshellcmd() identified by Stefan Esser.</li>

          <li>Upgraded bundled PCRE to version 7.6</li>
        </ul>
        <p><strong>Update (<abbr class="updated" title="2008-05-06T09:56:38+02:00">May 6th</abbr>):</strong> The Windows installers were missing the <a href="http://www.php.net/xsl">XSL</a>
         and <a href="http://www.php.net/imap">IMAP</a> extensions.</p>

        <p><strong>Update (<abbr class="updated" title="2008-05-03T09:56:38+02:00">May 3rd</abbr>):</strong> The Windows archives were missing the <a href="http://www.php.net/xsl">XSL</a>
         and <a href="http://www.php.net/imap">IMAP</a> extensions.</p>
      </div>
    
    </div>

</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.afup.org/"><img src="http://static.php.net/www.php.net/images/news/afup2008.png" alt="Forum AFUP Paris 2008" width="120" height="95" style="float: right;" /></a></div>
    <h1><a name="id2008-04-13-2" id="id2008-04-13-2" href="http://www.php.net/archive/2008.php#id2008-04-13-2" rel="bookmark" class="bookmark">Call for speakers for Forum PHP Paris 2008</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-04-13T21:56:55-07:00">[13-Apr-2008]</abbr>
        <p>The AFUP, Association Française des Utilisateurs de PHP,
  is proud to announce the upcoming conference "Forum PHP 2008".</p>

      <p>For this unique event in France, we are looking for the best French speaking experts,
  who want to share their know-how and enthusiasm.
  This two day conference features one technical day, with the most advanced PHP techniques
  and a business day, with case studies and examples of successful projects.
</p>
        <ul><li>How to manage a PHP project (tools, methods, ...)</li><li>Insure code quality</li><li>Internet and legal issues (intellectual property, ...)</li><li>Build a business around</li><li>PHP scalibility</li><li>Connect services(web services)</li><li>Rich User Interfaces (technology choice, implementation, ...)</li></ul>
      <h3>Date and location</h3>
      <p>

    The "Forum PHP Paris 2008" will take place in Paris on
    <abbr class="dtstart" title="2008-12-08">8th</abbr>-<abbr class="dtend" title="2008-12-10">9th december 2008</abbr>
  </p>
      <p>Sessions will typically be 45 minutes long followed by a 10 minutes Q&amp;A session and up to
    3 hours for workshops. Use the <a href="http://afup.org/pages/forumphp2008/appel-a-conferenciers.php">form on the site</a>,
    no email proposal will be accepted.</p>
      <p>
    Proposals will be reviewed after the deadline has passed. Additional information may be asked where needed. Proposals will be chosen according to their layout, relevancy for a professional audience and the overall homegeneity of the forum. Every candidate will be personnally notified of the status of their proposal. The decision is final. Priority will be given to sessions in French.
    </p>

    
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.dcphpconference.com/"><img src="http://static.php.net/www.php.net/images/news/dcphpconference.2008.png" alt="PHP DC conference 2008" width="120" height="89" style="float: right;" /></a></div>
    <h1><a name="id2008-04-13-1" id="id2008-04-13-1" href="http://www.dcphpconference.com/" rel="bookmark" class="bookmark">PHP DC conference 2008</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-04-13T12:00:00-05:00">[13-Apr-2008]</abbr>
        <div>

        <p>
        The DC PHP Developers Group recently announced Kshemendra Paul as a
    featured keynote speaker at the DC PHP Conference &amp; Expo,
    <abbr class="dtstart" title="2008-06-02">June 2</abbr>-<abbr class="dtend" title="2008-06-05">4</abbr>,
        2008, at George Washington University in Washington, DC. Paul, chief
        architect for the Office of Management and Budget Executive Office of
        the President, will be presenting on "Federal E-Government and
        Enterprise Architecture Updates."
        </p>
        <p>
    Join hundreds of PHP practitioners, business managers, and government
    officials from around the world in the exchange of ideas and solutions
    for building a better web application infrastructure. The DC PHP
    conference will include tracks pertaining to business cases, best
    practices, the art of PHP, PHP applications, PHP in the enterprise,
    and Open Source. The full speaker schedule will be announced shortly.
    </p>
        <p>

    For more information about DC PHP Conference &amp; Expo 2008 and to register,
    please visit <a href="http://www.dcphpconference.com/">www.dcphpconference.com</a>.
    Early discounted registration rates affective until April 15, 2008
    </p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>

    <h1><a name="2008-03-30-1" id="2008-03-30-1" href="http://www.php.net/archive/2008.php#2008-03-30-1" rel="bookmark" class="bookmark">TestFest 2008</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-03-30T21:06:55+01:00">[30-Mar-2008]</abbr>
        <div>
        <p>The PHP-QA team would like to announce the
        <a href="http://qa.php.net/testfest.php">TestFest</a> for the month of
        May 2008. The TestFest is an event that aims at improving the
        <a href="http://gcov.php.net">code coverage</a> of the
        <a href="http://qa.php.net/running-tests.php">test suite</a> for the PHP
        language itself. As part of this event, local User Groups (UG) are
        invited to join the TestFest. These UGs can meet physically or come
        together virtually. The point however is that people network to learn
        together. Aside from being an opportunity for all of you to make friends
        with like minded people in your (virtual) community, it also will
        hopefully reduce the work load for the PHP.net mentors.</p>

        <p>All it takes is someone to organize a UG to spearhead the event and
        to get others involved in
        <a href="http://qa.php.net/write-test.php">writing phpt tests</a>.
        The submissions will then be reviewed by members of php.net before
        getting included in the official test suite. Please visit the
        <a href="http://qa.php.net/testfest.php">TestFest homepage</a> to get
        additional details on the TestFest on how to get involved, either as a
        UG or by setting up the necessary infrastructure.</p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="2008-03-19-1" id="2008-03-19-1" href="http://www.php.net/archive/2008.php#2008-03-19-1" rel="bookmark" class="bookmark">Google Summer of Code 2008</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-03-19T13:53:55-04:00">[19-Mar-2008]</abbr>
        <div>
        <p>Once again we are glad to announce that we have been accepted to be a Google Summer of Code project. See <a href="http://code.google.com/soc/2008/php/about.html">our program</a> for this year\'s GSoC.</p>

        <p>We would like to take this opportunity to say thanks to Google Inc. for this privilege to participate once again, and would like to invite everyone to look at our list of ideas: <a href="http://wiki.php.net/gsoc/2008">http://wiki.php.net/gsoc/2008</a>. Students are of course more than welcome to come up with their own ideas for their proposals and we will consider each and every application that we will receive.</p>
        <p>So once again, thanks to everyone who is involved in this magnificent journey and we hope to see many of you great students and open source passionate join us in our most enjoyable <a href="http://code.google.com/soc/2008">Google Summer of Code</a> projects.</p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://tek.phparch.com/"><img src="http://static.php.net/www.php.net/images/news/phptek_2008.png" alt="php|tek 2008: Chicago" width="200" height="56" style="float: right;" /></a></div>
    <h1><a name="2008-02-19-1" id="2008-02-19-1" href="http://tek.phparch.com/" rel="bookmark" class="bookmark">php|tek 2008: Chicago</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-02-19T11:45:00-05:00">[19-Feb-2008]</abbr>
        <div>
        <a href="http://tek.phparch.com/" class="url">php|tek 2008: Chicago</a>

        <p>
The publishers of <a href="http://www.phparch.com/">php|architect Magazine</a> are proud to announce the php|tek 2008 conference in Chicago, Illinois, USA.
</p>
        <p>
The PHP Community meets <abbr class="dtstart" title="2008-05-20">May 20</abbr>-<abbr class="dtend" title="2008-05-24">23</abbr> for one of North America\'s premier PHP conferences of 2008. Join us to hear <a href="http://tek.phparch.com/c/schedule">top speakers</a> such as Derick Rethans (eZ Systems), Lucas Nelan (Facebook), Chris Shiflett (OmniTI), Eli White (Digg) and yes, even Terry Chay (Tagged).

</p>
        <p>
For the past two years, php|architect\'s spring conference has sold out <em>weeks</em> before the start date, so if you\'re interested in attending, don\'t delay, and be sure to <a href="http://tek.phparch.com/c/p/signup">sign up</a> ASAP!
</p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://conf.phpquebec.com/en/conf2008/"><img src="http://static.php.net/www.php.net/images/news/conference_php_quebec.gif" alt="PHP Québec conference 2008" width="131" height="63" style="float: right;" /></a></div>
    <h1><a name="2008-02-06-1" id="2008-02-06-1" href="http://conf.phpquebec.com/en/conf2008/" rel="bookmark" class="bookmark">PHP Québec conference 2008</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-02-06T19:23:51+01:00">[06-Feb-2008]</abbr>
        <div>
        <a href="http://conf.phpquebec.com/">2008 PHP Quebec Conference &amp; Job Fair</a>

        <p>
The PHP Quebec team is pleased to present the sixth edition of the <a href="http://conf.phpquebec.com" class="url">PHP
Quebec Conference</a>. The Conference will take place in Montreal, Canada,
on <abbr class="dtstart" title="2008-03-12">March 12</abbr> through
<abbr class="dtend" title="2008-03-15">14</abbr>.
</p>
        <p>
Join us for the PHPLabs, 2 days of technical talks, the Open Source Job
Fair &amp; Cocktail. Meet with well know community members such as: John
Coggeshall, Marcus Boerger, Zak Greant, Chris Shiflett, Damien Seguy and
many more.
</p>

        <p>
Take note that online registration ends on March 7th. For more information,
visit the website: <a href="http://conf.phpquebec.com">http://conf.phpquebec.com</a></p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.phpconference.co.uk/"><img src="http://static.php.net/www.php.net/images/news/phplondon2008.png" alt="PHP London Conference 08" width="200" height="79" style="float: right;" /></a></div>
    <h1><a name="2008-01-10-1" id="2008-01-10-1" href="http://www.phpconference.co.uk/" rel="bookmark" class="bookmark">phplondon conference 2008</a></h1>

    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-01-10T16:23:20+01:00">[10-Jan-2008]</abbr>
        <div>
        <p><abbr class="dtstart" title="2008-02-29">February 29th</abbr> (Leap Year Day). phplondon.org  announce their third
            annual <a href="http://www.phpconference.co.uk" title="phplondon.org community conference" class="url">community conference</a>
            to be held at Inmarsat, Old Street, London.</p>
        <p>This year the conference will run two tracks and include speakers such as Derick Rethans, Wez Furlong, Scott MacVicar and Zoe Slattery.</p>

        <p>We will also be holding an extended presentation and discussion on frameworks for PHP.</p>
        <p>Visit our <a href=" http://www.phpconference.co.uk" title="phplondon.org community conference">conference site</a> to register. Early bird discount is available until 1st February 2008.</p>
      </div>
    
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="2008-01-03-1" id="2008-01-03-1" href="http://www.php.net/archive/2008.php#2008-01-03-1" rel="bookmark" class="bookmark">PHP 4.4.8 Released</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2008-01-03T10:13:50+01:00">[03-Jan-2008]</abbr>

        <div>
        <p>
The PHP development team would like to announce the immediate <a href="http://www.php.net/downloads.php#v4">availability of
PHP 4.4.8</a>.  It continues to improve the security and the stability of the 4.4
branch and all users are strongly encouraged to upgrade to it as soon as
possible. This release wraps up all the outstanding patches for the PHP 4.4
series, and is therefore the last normal PHP 4.4 release. If necessary,
releases to address security issues could be made until 2008-08-08.
</p>
        <p>
          <b>Security Enhancements and Fixes in PHP 4.4.8:</b>
        </p>
        <ul>

          <li>Improved fix for MOPB-02-2007.</li>
          <li>Fixed an integer overflow inside chunk_split(). Identified by Gerhard Wagner.</li>
          <li>Fixed integer overlow in str[c]spn().</li>
          <li>Fixed regression in glob when open_basedir is on introduced by #41655 fix.</li>
          <li>Fixed money_format() not to accept multiple %i or %n tokens.</li>
          <li>Added "max_input_nesting_level" php.ini option to limit nesting level of input variables. Fix for MOPB-03-2007.</li>

          <li>Fixed INFILE LOCAL option handling with MySQL - now not allowed when open_basedir or safe_mode is active.</li>
          <li>Fixed session.save_path and error_log values to be checked against open_basedir and safe_mode (CVE-2007-3378).</li>
        </ul>
        <p>
 For a full list of changes in PHP 4.4.8, see the <a href="http://www.php.net/ChangeLog-4.php#4.4.8">ChangeLog</a>.
</p>
      </div>

    
    </div>
</div>

<hr />

<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-12-17-1" id="id2009-12-17-1" href="http://www.php.net/archive/2009.php#id2009-12-17-1" rel="bookmark" class="bookmark">PHP 5.2.12 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-12-17T07:41:36-05:00">[17-Dec-2009]</abbr> 
        <div> 
     <p> 
     The PHP development team would like to announce the immediate
     availability of PHP 5.2.12. This release focuses on improving the stability of
     the PHP 5.2.x branch with over 60 bug fixes, some of which are security related.
     All users of PHP 5.2 are encouraged to upgrade to this release.
     </p> 
     <p> 
     <b>Security Enhancements and Fixes in PHP 5.2.12:</b> 
     </p> 
     <ul> 
      <li>Fixed a safe_mode bypass in tempnam() identified by Grzegorz Stachowiak. (CVE-2009-3557, Rasmus)</li> 
      <li>Fixed a open_basedir bypass in posix_mkfifo() identified by Grzegorz Stachowiak. (CVE-2009-3558, Rasmus)</li> 
      <li>Added "max_file_uploads" INI directive, which can be set to limit the number of file uploads per-request to 20 by default, to prevent possible DOS via temporary file exhaustion, identified by Bogdan Calin. (CVE-2009-4017, Ilia)</li> 
      <li>Added protection for $_SESSION from interrupt corruption and improved "session.save_path" check, identified by Stefan Esser. (CVE-2009-4143, Stas)</li> 
      <li>Fixed bug #49785 (insufficient input string validation of htmlspecialchars()). (CVE-2009-4142, Moriyoshi, hello at iwamot dot com)</li> 
     </ul> 
     
     <p> 
  Further details about the PHP 5.2.12 release can be found in the <a href="http://www.php.net/releases/5_2_12.php">release announcement</a>, and the full list of changes are available in the <a href="http://www.php.net/ChangeLog-5.php#5.2.12">ChangeLog</a>.
  </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://www.phpconference.co.uk/"><img src="http://static.php.net/www.php.net/images/news/phpukconf2010.png" alt="PHP UK Conference 2010" width="351" height="86" style="float: right;" /></a></div> 
    <h1><a name="id2009-12-09-1" id="id2009-12-09-1" href="http://www.phpconference.co.uk/" rel="bookmark" class="bookmark">PHP UK Conference 2010</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-12-09T14:38:07+01:00">[09-Dec-2009]</abbr> 
        <div> 
      <p> 
        PHP London are pleased to announce the date, venue and registration availability
        of their 5th annual UK PHP conference, building on the success of previous events
        and accommodating the continual growth of the PHP community and PHP development
        industry.
      </p> 
 
      <p> 
        The event takes place on <abbr title="2009-02-26" class="dtstart">Friday 26th February 2010</abbr> 
        at the <span class="location">Business Design Centre in the Islington area of London</span>.
        Information on the venue is available on our
        <a href="http://www.phpconference.co.uk/venue" title="Venue information">website</a>.
      </p> 
 
      <p> 
        Registration is now available, with an <em>early bird</em> discount of £20
        putting the price at £100 (ex. UK VAT), available for the rest of December 2009,
        increasing to £110 during January 2010, whilst the standard £120 price is
        available now (for those that wish to significantly contribute towards the running
        of the conference) until either the event takes place or we run out of places - so
        <a href="http://www.phpconference.co.uk/registration" title="PHP UK registration page">register</a> 
        as soon as you can to get the best price and secure your place.
      </p> 
 
      <p> 
        Feel free to create an
        <a href="http://www.phpconference.co.uk/user/register">account</a> on the PHP UK
        Conference website at and sign-up for notifications of updates to the website.
      </p> 
 
      <p> 
        Important announcements will also be made to the PHP London announcement mailing
        list - sign up at
        <a href="http://lists.phplondon.org/cgi-bin/mailman/listinfo/phplondon-announce">http://lists.phplondon.org/cgi-bin/mailman/listinfo/phplondon-announce</a> 
        - via which you may be receiving this message now, and you can also follow the
        conference on Twitter (<a href="http://twitter.com/phpukconference">@phpukconference</a> 
        - #phpuk2010) and be a <a href="http://www.facebook.com/pages/PHP-UK-Conference/62956717039">fan on Facebook</a>.
      </p> 
 
      <p> 
        We expect to announce the initial line up of talks and speakers before Christmas,
        whilst potential sponsors/exhibitors can find information at
        <a href="http://www.phpconference.co.uk/sponsors">http://www.phpconference.co.uk/sponsors</a> 
        and contact the conference committee using the form at
        <a href="http://www.phpconference.co.uk/contact">http://www.phpconference.co.uk/contact</a>.
      </p> 
 
      <p>We hope to see you at the event in 2010!</p> 
 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-11-19-1" id="id2009-11-19-1" href="http://www.php.net/archive/2009.php#id2009-11-19-1" rel="bookmark" class="bookmark">PHP 5.3.1 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-11-19T17:41:11+00:00">[19-Nov-2009]</abbr> 
        <div> 
      <p>The PHP development team would like to announce the immediate
      availability of PHP 5.3.1. This release focuses on improving the 
      stability of the PHP 5.3.x branch with over 100 bug fixes, some of 
      which are security related. All users of PHP are encouraged to
      upgrade to this release.</p> 
      <p><b>Security Enhancements and Fixes in PHP 5.3.1:</b></p> 
      <ul> 
        <li>Added "max_file_uploads" INI directive, which can be set to limit the number of file uploads per-request to 20 by default, to prevent possible DOS via temporary file exhaustion.</li> 
        <li>Added missing sanity checks around exif processing.</li> 
        <li>Fixed a safe_mode bypass in tempnam().</li> 
        <li>Fixed a open_basedir bypass in posix_mkfifo().</li> 
        <li>Fixed failing safe_mode_include_dir.</li> 
      </ul> 
      <p>Further details about the PHP 5.3.1 release can be found in the <a href="http://www.php.net/releases/5_3_1.php">release announcement</a>, and the full list of changes are available in the <a href="http://www.php.net/ChangeLog-5.php#5.3.1">ChangeLog</a>.</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://www.phpconference.com/"><img src="http://static.php.net/www.php.net/images/news/ipc09.png" alt="International PHP Conference" width="516" height="239" style="float: right;" /></a></div> 
    <h1><a name="id2009-10-21-1" id="id2009-10-21-1" href="http://www.phpconference.com/" rel="bookmark" class="bookmark">International PHP Conference</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-10-21T20:15:30+02:00">[21-Oct-2009]</abbr> 
        <div> 
     <p>With its mixture of topics the <a href="http://www.phpconference.com">International PHP Conference</a> provides an ideal resource for all professionals and their successful daily routine within the whole PHP spectrum. Insights into current Web 2.0 technologies, Security, Best Practices for tools and components, Enterprise know-how, databases, architectures and more are presented at the International PHP Conference 2009.</p> 
     <p>More than 30 Experts explain current trends and demonstrate how to make the most of your code and your business. They will answer your questions not only in the 40+ sessions and panel discussions but also during personal meetings.</p> 
     <p>And for the very first time ever, on Sunday, 15th November, the PHP community will warm up with our free IPC Unconference. This is the place, where YOU decide about the sessions - just pick your favorite topics and get in touch with some of our speakers and other developers.</p> 
     <p>Make use of this opportunity and make yourself a part of the worldwide PHP community – at the International PHP Conference 2009.</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://www.phpworld-kongress.de"><img src="http://static.php.net/www.php.net/images/news/phpworldkongress09.gif" alt="PHP World Kongress" width="234" height="60" style="float: right;" /></a></div> 
    <h1><a name="id2009-10-01-1" id="id2009-10-01-1" href="http://www.phpworld-kongress.de" rel="bookmark" class="bookmark">PHP World Kongress</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-10-01T21:19:01+02:00">[01-Oct-2009]</abbr> 
        <div> 
    <p> 
     On 24th and 25th of November you should not miss the lectures of the top speakers of the PHP Industry on Professional Software Development with PHP at Munich Conference Center.
    </p> 
    <p> 
     10 international speakers offer you more than 20 hours of knowledge transfer in the topics "Development", "Tools &amp; Technologies", "PHP 5 Certification", "TYPO3 Certification", "Search Engine Optimization" and "Design Patterns with PHP" on two days.
    </p> 
    <p> 
     On November 24th, Pierre Joye from the PHP core team under Windows opens the congress with his keynote "PHP 5.3 and PHP 6". Amongst others topics include OOP, Web Application Security 2.0, SOAP in PHP and Zend Framework.
    </p> 
    <p> 
     The 25th November is a workshop day aimed at expanding and deepening your knowledge in PHP 5 Certification, TYPO3 Certification, Search Engine Optimization and Design Patterns with PHP.
    </p> 
    <p> 
     More detailed information is available on our <a href="http://www.phpworld-kongress.de">website</a> 
     <a href="http://www.twitter.com/phpworld">Twitter</a> or in our group on Facebook. 
    </p> 
   </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://phpconference.es/"><img src="http://static.php.net/www.php.net/images/news/phpbarcelonaconference2009small1.jpg" alt="PHP Barcelona" width="300" height="239" style="float: right;" /></a></div> 
    <h1><a name="id2009-09-28-1" id="id2009-09-28-1" href="http://phpconference.es/" rel="bookmark" class="bookmark">PHP Barcelona Conference 2009</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-09-28T21:27:54+02:00">[28-Sep-2009]</abbr> 
        <div> 
     <p>The <a href="http://phpbarcelona.org/">PHP Barcelona User Group</a> is proud to announce that the <a href="http://phpconference.es/">PHP Barcelona Conference 2009</a> is here, and it is arriving bigger than ever!  Two days, three parallel tracks of talks and workshops, and some of the biggest names and companies in the industry covering the hottest subjects to date.</p> 
     <p>Come to Barcelona (<a href="http://phpconference.es/barcelona-php-conference-2009/venue/">Citilab</a>) to see <strong>Rasmus Lerdorf</strong>, <strong>Fabien Potencier</strong>, <strong>Derick Rethans</strong>, <strong>Sebastian Bergmann</strong> and many more open the hood and expose the secrets of PHP and PHP related technologies that make the Internet what it is today, and that power what the Internet will be tomorrow.  Discover the newest evolution of the most popular scripting language and its intimate bonding with security, stability and scalability, and how its integration with cutting edge technology make it one of the most powerful and state of the art building blocks for robust applications.</p> 
     <p>For more information about PHP Barcelona Conference 2009 and to register, please visit <a href="http://phpconference.es/">http://phpconference.es</a></p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-09-17-1" id="id2009-09-17-1" href="http://www.php.net/archive/2009.php#id2009-09-17-1" rel="bookmark" class="bookmark">PHP 5.2.11 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-09-17T21:45:06-04:00">[17-Sep-2009]</abbr> 
        <div> 
     <p> 
     The PHP development team would like to announce the immediate
     availability of PHP 5.2.11. This release focuses on improving the stability of
     the PHP 5.2.x branch with over 75 bug fixes, some of which are security related.
     All users of PHP 5.2 are encouraged to upgrade to this release.
     </p> 
     <p> 
     <b>Security Enhancements and Fixes in PHP 5.2.11:</b> 
     </p> 
     <ul> 
             <li>Fixed certificate validation inside php_openssl_apply_verification_policy. (Ryan Sleevi, Ilia)</li> 
             <li>Fixed sanity check for the color index in imagecolortransparent(). (Pierre)</li> 
             <li>Added missing sanity checks around exif processing. (Ilia)</li> 
             <li>Fixed bug #44683 (popen crashes when an invalid mode is passed). (Pierre)</li> 
     </ul> 
     <p> 
     Further details about the PHP 5.2.11 release can be found in the <a href="http://www.php.net/releases/5_2_11.php">release announcement</a>, and the full list of changes are available in the <a href="http://www.php.net/ChangeLog-5.php#5.2.11">ChangeLog</a>.
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://zendcon.com"><img src="http://static.php.net/www.php.net/images/news/ZendCon09-logo.gif" alt="ZendCon 2009" width="312" height="76" style="float: right;" /></a></div> 
    <h1><a name="id2009-08-26-1" id="id2009-08-26-1" href="http://zendcon.com" rel="bookmark" class="bookmark">ZendCon 2009!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-08-26T10:19:35+02:00">[26-Aug-2009]</abbr> 
        <div> 
    <p> 
     The Zend PHP Conference 2009 (ZendCon) is the largest event of the PHP
     community and a unique opportunity to meet with PHP developers, web
     experts and IT managers.  This year\'s conference will be held
     <abbr class="dtstart" title="2009-10-19">October 19</abbr>-
     <abbr class="dtend" title="2009-10-23">22, 2009</abbr> in
     <span class="location">San Jose, California</span>. It will bring together developers
     and business managers from around the world for three days of
     exceptional presentations and networking events.
    </p> 
    <p> 
     At ZendCon 2009, sessions will focus on creating, deploying and managing
     applications that take advantage of the speed, scalability and
     simplicity of PHP.  To find out more about ZendCon, see the full session
     listing, and register, visit <a href="http://zendcon.com">http://zendcon.com/</a>.
    </p> 
   </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-07-30-1" id="id2009-07-30-1" href="http://www.php.net/archive/2009.php#id2009-07-30-1" rel="bookmark" class="bookmark">PHP TestFest 2009 Winners</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-07-30T12:41:28+02:00">[30-Jul-2009]</abbr> 
        <div> 
     <p> 
      A group of winners of PHP
      <a href="http://www.flickr.com/search/?w=all&amp;q=elephpants&amp;m=tags">elePHPhants</a> 
      or <a href="http://www.flickr.com/search/?w=all&amp;q=testfest+mug&amp;m=tags">TestFest mugs</a> 
      have been picked at random from the people that contributed the
      <a href="http://testfest.php.net/repos/testfest/">887 tests</a> 
      during the <a href="http://wiki.php.net/qa/testfest">2009 PHP TestFest</a>.
     </p> 
     <h2>Winners of elePHPhants</h2> 
     <ul> 
      <li>Mark Schaschke TestFest London May 2009</li> 
      <li>Patrick Allaert Belgian PHP Testfest 2009</li> 
      <li>Rafael Dohms testfest PHPSP on 2009-06-20</li> 
      <li>Guilherme Blanco testfest PHPSP on 2009-06-20</li> 
      <li>Fabio Fabbrucci Italian PHP TestFest 2009 Cesena 19-20-21 june</li> 
      <li>Rodrigo Moyle testfest PHPSP on 2009-06-20</li> 
      <li>Edgar Ferreira da Silva testfest PHPSP on 2009-06-20</li> 
      <li>Marco Fabbri PHPTestFest Cesena Italia on 2009-06-20</li> 
      <li>Jason Easter Testfest 2009 2009-06-20</li> 
      <li>Simon Westcott PHPNW Testfest 2009</li> 
     </ul> 
     
     <h2>Winners of mugs</h2> 
     <ul> 
      <li>Tim Eggert Testfest Berlin 2009-05-09</li> 
      <li>Till Klampaeckel  TestFest 2009</li> 
      <li>Havard Eide Norway 2009-06-09 \o/</li> 
      <li>Ŕlex Corretgé - Catalonia</li> 
      <li>Francesco Fullone TestFest Cesena Italia on 2009-06-20</li> 
      <li>Ivan Rosolen testfest PHPSP on 2009-06-20</li> 
      <li>Moritz Neuhaeuser Testfest Berlin 2009-05-10</li> 
      <li>Daniel Convissor  TestFest 2009 NYPHP</li> 
      <li>Matt Raines testfest London 2009-05-09</li> 
     </ul> 
 
     <p>Winners will be contacted shortly.</p> 
     <p> 
      Once again a huge <em>thank you!</em> to everyone who helped to make
      this year\'s TestFest such an outstanding success!
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://conference.phpnw.org.uk/"><img src="http://static.php.net/www.php.net/images/news/phpnw09_blk_300x110.png" alt="PHP NW 2009" width="300" height="110" style="float: right;" /></a></div> 
    <h1><a name="id2009-07-21-1" id="id2009-07-21-1" href="http://conference.phpnw.org.uk/" rel="bookmark" class="bookmark">PHP North West Conference</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-07-21T15:37:06-07:00">[21-Jul-2009]</abbr> 
        <div> 
     <p> 
     The <a href="http://conference.phpnw.org.uk">PHP North West
     Conference</a> has announced its return for a second year, to be held
     on Saturday 10th October 2009 in Manchester, UK.  This is a one-day
     conference aimed at developers from the local region and further
     afield, with a deliberately low ticket price to ensure everyone who
     wants to attend can do so.  We combine experienced speakers with some
     new local talent to bring an event that truly has something for
     everyone and a great buzz.
     </p> 
     <p> 
     The official conference is on the Saturday but there are social events
     on Friday and Saturday and an informal schedule on Sunday, so come and
     make a weekend of it with us in Manchester!  All the venues are in
     central Manchester and walkable from mainline public transport, so do
     join us.
     </p> 
     <p> 
     There is a call for papers which runs until 16th August 2009 and the
     early bird ticket prices are fixed until September 10th.  For more
     information, to submit a paper, to buy tickets, or to contact the
     organisers please visit the <a href="http://conference.phpnw.org.uk">conference website</a>.
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-07-16-1" id="id2009-07-16-1" href="http://www.php.net/archive/2009.php#id2009-07-16-1" rel="bookmark" class="bookmark">Subversion Migration Complete</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-07-16T19:00:00-09:00">[16-Jul-2009]</abbr> 
        <div> 
     <p> 
      The migration from CVS to Subversion is complete.  The web interface is at
      <a href="http://svn.php.net">svn.php.net</a>.  You can read about it at
      <a href="http://php.net/svn.php">php.net/svn.php</a>, 
      <a href="http://wiki.php.net/vcs/svnfaq">wiki.php.net/vcs/svnfaq</a>.  The
      URL to feed to your svn client is http://svn.php.net/repository.  
     </p> 
     <p> 
      There is also a <a href="http://github.com/php">github mirror</a>.  Please
      use that instead of trying to do a full git clone from the svn repository.  See
      the instructions at <a href="http://wiki.php.net/vcs/svnfaq#git">wiki.php.net/vcs/svnfaq#git</a> 
     </p> 
     <p> 
      Many thanks to Gwynne who did the bulk of the work and also all the other folks who pitched in.
      It was a major effort to move 14 years of CVS history to another RCS.
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-07-09-1" id="id2009-07-09-1" href="http://www.php.net/archive/2009.php#id2009-07-09-1" rel="bookmark" class="bookmark">2009 PHP TestFest</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-07-09T10:04:07+02:00">[09-Jul-2009]</abbr> 
        <div> 
     <p> 
      So finally we are at the end of the
      <a href="http://wiki.php.net/qa/testfest">2009 PHP TestFest</a>.
      It has been an outstanding success with the
      <a href="http://gcov.php.net/PHP_5_3/lcov_html/">coverage increasing</a> 
      by about 2.5% overall and 887 new tests contributed in the TestFest SVN
      repository of which 637 have already been added to PHP CVS.
     </p> 
     <p> 
      <a href="http://wiki.php.net/usergroups">User groups</a> from all
      over the world have worked hard to make this happen and we thank
      <a href="http://results.testfest.php.net">each and every one of you</a> 
      for your contribution to PHP!
      You really made a difference to the PHP5.3 release quality.
     </p> 
     <p> 
      There still are few loose ends to tie up - the
      <a href="http://testfest.php.net/repos/testfest/">TestFest SVN repository</a> 
      will be <em>closed</em> for contributions later this week and the last few
      tests will be moved into the main PHP repository. Finally, we have
      <a href="http://www.flickr.com/search/?w=all&amp;q=elephpants&amp;m=tags">10 elePHPants</a> 
      and <a href="http://www.flickr.com/search/?w=all&amp;q=testfest+mug&amp;m=tags">9 TestFest mugs</a> 
      to give out. The winners of mugs and elePHPants
      will be drawn at random from a list of people who wrote tests;
      the winner\'s names will be announced later this month.
     </p> 
     <p> 
      For those that would like to continue to make a difference by
      writing tests there are two options. You can simply continue by
      submitting new tests to the <a href="http://php.net/mailinglists">QA mailing list</a>,
      or, if you have written a significant number of tests you might
      consider applying for your own
      <a href="http://php.net/cvs-php">PHP CVS (or SVN) ID</a>.
      In your application you should reference the tests that you have
      written in support of your application.
     </p> 
     <p> 
      Last but not least, we would  like to thank all of the
      companies and institutions that sponsored TestFest.
      These include Combell, Corretgé, Faculdade Impacta de Tecnologia, IBM,
      iBuildings, Itera, Mayflower, Microsoft, Nexen (Alter Way Group), php|architect,
      Redpill-Linpro, Steinigke Showtechnic, Verges Council and Zend.
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-06-30-1" id="id2009-06-30-1" href="http://www.php.net/archive/2009.php#id2009-06-30-1" rel="bookmark" class="bookmark">PHP 5.3.0 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-06-30T11:47:17+02:00">[30-Jun-2009]</abbr> 
        <div> 
     <p> 
      The PHP development team is proud to announce the immediate release of PHP
      <a href="http://php.net/downloads.php#v5.3.0">5.3.0</a>.
      This release is a major improvement in the 5.X series, which includes a
      large number of new features and bug fixes.
     </p> 
 
     <p> 
      Some of the key new features include:
      <a href="http://php.net/namespaces">namespaces</a>,
      <a href="http://php.net/lsb">late static binding</a>,
      <a href="http://php.net/closures">closures</a>,
      optional <a href="http://php.net/gc_enable">garbage collection</a> for cyclic references,
      new extensions (like <a href="http://php.net/phar">ext/phar</a>,
      <a href="http://php.net/intl">ext/intl</a> and
      <a href="http://php.net/fileinfo">ext/fileinfo</a>),
      over 140 bug fixes and much more.
     </p> 
 
     <p> 
      For users upgrading from PHP 5.2 there is a
      <a href="http://php.net/migration53">migration guide</a> 
      available here, detailing the changes between those
      releases and <a href="http://php.net/downloads.php#v5.3.0">PHP 5.3.0</a>.
     </p> 
 
     <p> 
      Further details about the
      <a href="http://php.net/downloads.php#v5.3.0">PHP 5.3.0</a> release
      can be found in the
      <a href="http://php.net/releases/5_3_0.php">release announcement</a>,
      and the full list of changes are available in the
      <a href="http://php.net/ChangeLog-5.php">ChangeLog</a>.
     </p> 
 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://www.phprio.org/phpnrio09"><img src="http://static.php.net/www.php.net/images/news/phpnrio09.png" alt="PHP Rio" width="258" height="126" style="float: right;" /></a></div> 
    <h1><a name="id2009-06-21-1" id="id2009-06-21-1" href="http://www.php.net/archive/2009.php#id2009-06-21-1" rel="bookmark" class="bookmark">PHP\'n Rio conference</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-06-21T10:45:52-07:00">[21-Jun-2009]</abbr> 
        <div> 
     <p> 
      The Rio de Janeiro PHP user group is pleased to announce
      their first <em>PHP\'n Rio conference</em>. It will be held July 3rd, 2009 at the
      <a href="http://www.infnet.edu.br/">Infnet Institute</a>, in Rio de Janeiro. It is a
      one day mini conference aimed on providing experienced developers and
      beginners a chance to learn more about PHP frameworks, web
      applications built in PHP, and the art of testing code.
     </p> 
     <p> 
      The keynote speaker is Jan Schneider, who will also
      talk about the Horde project. In addition, we will
      have sessions about other frameworks and include a
      <a href="http://qa.php.net/testfest.php">PHP TestFest</a>.
     </p> 
     <p> 
      PHP\'n Rio sessions go from 6-9 pm. Then the PHP TestFest follows up
      until 10 pm. No fees or subscription required. Participation is entirely
      free!
     </p> 
     <p> 
      Whether you live here or are around just enjoying the marvelous city,
      come and join us :) For more information, please visit 
      <a href="http://www.phprio.org/phpnrio09">http://www.phprio.org/phpnrio09</a> 
      (portuguese only).
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-06-19-1" id="id2009-06-19-1" href="http://www.php.net/archive/2009.php#id2009-06-19-1" rel="bookmark" class="bookmark">PHP 5.3.0RC4 Release Announcements</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-06-19T11:02:05+02:00">[19-Jun-2009]</abbr> 
        <div> 
     <p> 
      The PHP development team is proud to announce the fourth release
      candidate of PHP 5.3.0 (PHP 5.3.0RC4). This RC focuses on bug fixes
      and stability improvements, and we hope only minimal changes are required
      for the next candidate or final stable releases. PHP 5.3.0 is a newly
      developed version of PHP featuring long-awaited features like
      <a href="http://php.net/namespaces">namespaces</a>,
      <a href="http://php.net/lsb">late static binding</a>,
      <a href="http://php.net/closures">closures</a> and much more.
     </p> 
     <p> 
      Please download and test these release candidates, and report any issues
      found. A stable release is expected next week . In case of critical
      issues we will continue producing weekly RCs. Downloads and further
      information is available at <a href="http://qa.php.net/">qa.php.net</a>.
      See also the work in progress
      <a href="http://cvs.php.net/viewvc.cgi/php-src/UPGRADING?revision=PHP_5_3">5.3 upgrade guide</a>.
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-06-18-1" id="id2009-06-18-1" href="http://www.php.net/archive/2009.php#id2009-06-18-1" rel="bookmark" class="bookmark">PHP 5.2.10 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-06-18T18:18:28-04:00">[18-Jun-2009]</abbr> 
        <div> 
      <p> 
       The PHP development team would like to announce the immediate availability of PHP 5.2.10. 
       This release focuses on improving the stability of the PHP 5.2.x branch with over 100 bug fixes,
       one of which is security related. All users of PHP are encouraged to upgrade to this release.
      </p> 
      <p> 
        <b>Security Enhancements and Fixes in PHP 5.2.10:</b> 
      </p> 
      <ul> 
       <li>Fixed bug #48378 (exif_read_data() segfaults on certain corrupted .jpeg files). (Pierre)</li> 
      </ul> 
      <p> 
       Further details about the PHP 5.2.10 release can be found in the
       <a href="http://www.php.net/releases/5_2_10.php">release announcement</a>, and the full list of changes are
       available in the <a href="http://www.php.net/ChangeLog-5.php#5.2.10">ChangeLog</a>.
      </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-06-12-1" id="id2009-06-12-1" href="http://www.php.net/archive/2009.php#id2009-06-12-1" rel="bookmark" class="bookmark">PHP 5.2.10RC2 and PHP 5.3.0RC3 Release Announcements</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-06-12T17:39:42+02:00">[12-Jun-2009]</abbr> 
        <div>     <p>      The PHP development team is proud to announce the second release candidate of PHP 5.2.10 (PHP 5.2.10RC2) and      the third release candidate of PHP 5.3.0 (PHP 5.3.0RC3).      These RCs focuses on bug fixes and stability improvements, and we hope only minimal changes are required      for the next candidate or final stable releases.     </p>     <p>      PHP 5.2.10 is a pure maintenance release for providing bugfixes and stability updates. PHP 5.3.0      is a newly developed version of PHP featuring long-awaited features like namespaces, late      static binding, closures and much more.     </p>     <p>      Please download and test these release candidates, and report any issues found.      Downloads and further information is available at <a href="http://qa.php.net/">qa.php.net</a>.      See also the work in progress <a href="http://wiki.php.net/doc/scratchpad/upgrade/53">5.3 upgrade guide</a>.     </p></div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://cw.mtacon.com/"><img src="http://static.php.net/www.php.net/images/news/codeworks2009.png" alt="CodeWorks Conference" width="200" height="69" style="float: right;" /></a></div> 
    <h1><a name="id2009-06-03-1" id="id2009-06-03-1" href="http://cw.mtacon.com/" rel="bookmark" class="bookmark">CodeWorks Conference</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-06-03T14:01:20+02:00">[03-Jun-2009]</abbr> 
        <div> 
     <p>CodeWorks 2009 is a series of <em>two-day conferences for PHP developers</em> and IT managers organized and run by the publishers of <a href="http://phparch.com/">php|architect Magazine</a>.</p> 
     <p>CodeWorks will travel to <a href="http://cw.mtacon.com/main/s/about/locations">seven locations</a> across the United States between <abbr title="2009-09-22" class="dtstart">September 22nd</abbr> and <abbr title="2009-10-06" class="dtend">October 5th</abbr> included. Each two-day event includes a day of <em>in-depth tutorials</em>  and a day of <em>conference talks</em> arranged across three different tracks, all presented by the <em>best experts</em> in the business.</p> 
     <p>These locations include:
      <ul> 
       <li>San Francisco, CA (9/22-9/23)</li> 
       <li>Los Angeles, CA (9/24-9/25)</li> 
       <li>Dallas, TX (9/26-9/27)</li> 
       <li>Atlanta, GA (9/28-9/29)</li> 
       <li>Miami, FL (9/30-10/1)</li> 
       <li>Washington, DC/Baltimore Area (10/2-10/3)</li> 
       <li>New York, NY (10/4-10/5)</li> 
      </ul> 
     </p> 
     <p>If PHP is your work, your passion or your hobby, CodeWorks is a great way to learn and connect with the greatest community of professionals in the world—and with <a href="http://cw.mtacon.com/signup/index">prices as low as $99</a> and a generous <a href="http://cw.mtacon.com/signup/s/discounts">discount program</a>, a uniquely affordable opportunity for everyone.</p> 
     <p>Remember, each event is <em>limited to 300 attendees</em> and prices increase the closer we get to each event. <a href="http://cw.mtacon.com/signup/index">Get your tickets today</a> before we run out or the price goes up!</p> 
     <p>For more information, visit <a href="http://cw.mtacon.com/">http://cw.mtacon.com</a>.</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://www.afup.org/"><img src="http://static.php.net/www.php.net/images/news/forumphp2009.jpg" alt="Forum PHP Paris" width="238" height="98" style="float: right;" /></a></div> 
    <h1><a name="id2009-05-29-1" id="id2009-05-29-1" href="http://www.afup.org/" rel="bookmark" class="bookmark">Forum PHP Paris 2009</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-05-29T11:47:20+02:00">[29-May-2009]</abbr> 
        <div> 
      <p> 
      The <a href="http://www.afup.org/" alt="AFUP">AFUP</a> (Association française des utilisateurs PHP)
      organizes on <abbr title="2009-11-11" class="dtstart">November 11th</abbr> and <abbr title="2009-11-12" class="dtstart">November 12th</abbr> 
      at the <a href="http://www.cite-sciences.fr/" alt="Cit&#xE9; des Sciences">Cité des Sciences</a> in Paris, France,
      the <a href="" alt="Forum PHP">Forum PHP</a> for its 9th edition.
      </p> 
      <p> 
       The PHP Forum 2009 will welcome as a partner alongside the AFUP, 
       the association <a href="http://www.lemug.fr/" alt="LeMug">LeMug.fr</a> (MySQL User Group).
      </p> 
      <p> 
       On this occasion, AFUP decided to extend the pre-registration at preferential rates, and 
       also postpone the deadline for the call for speakers.
      </p> 
      <p> 
      To monitor developments and press releases, visit the following link: 
      <a href="http://afup.org/pages/forumphp2009/">http://afup.org/pages/forumphp2009/</a> 
      </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-05-09-1" id="id2009-05-09-1" href="http://www.php.net/archive/2009.php#id2009-05-09-1" rel="bookmark" class="bookmark">TestFest 2009</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-05-09T21:45:38+02:00">[09-May-2009]</abbr> 
        <div> 
      <p> 
        TestFest is upon us once again. For those who don\'t know, this is the
        time of year where User Groups and individuals donate a little of their
        time and effort to increasing the test coverage of PHP.
      </p> 
      <p> 
        Hundreds of thousands of lines of code are working in concert to
        assemble one of the simplest to learn and fastest running scripting
        languages in the business. All this is achieved with the expectation
        that very few bugs will make it into releases and the ones that do
        will be stomped out quickly, efficiently and will never be heard from
        again. This is a lofty goal and is only possible through a system of
        tests designed to continuously evaluate the well-being of PHP.
      </p> 
      <p> 
        This year the QA Team has been very busy implementing new features
        and improvements to make the TestFest experience easier and more
        enjoyable than ever before. Some these improvements include a
        Subversion repository for test storage and tracking, a Virtual
        Machine for simple test environment setup, and improved documentation
        of testing procedures.
      </p> 
      <p> 
        2009 is looking to be the most successful TestFest event ever. Over
        20 User Groups spanning Belgium, Brazil, Catalonia, Canada, France,
        Germany, Ireland, Italy, Netherlands, Norway, Peru, USA and the UK
        have already registered. This is an incredible response and we still
        have 2 months left to go.
      </p> 
      <p> 
        Getting involved couldn\'t be simpler. Visit the
        <a href="http://qa.php.net/testfest.php">QA TestFest page</a> to
        find out how you can organize a TestFest event in your community.
        We are looking forward to seeing your communities tests being
        committed into PHP.
      </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-05-07-1" id="id2009-05-07-1" href="http://www.php.net/archive/2009.php#id2009-05-07-1" rel="bookmark" class="bookmark">PHP 5.3.0RC2 Release Announcement</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-05-07T20:20:39+02:00">[07-May-2009]</abbr> 
        <div> 
     <p> 
      The PHP development team is proud to announce the second release candidate of PHP 5.3.0 (PHP 5.3.0RC2). 
      This RC focuses on bug fixes and stability improvements, and we hope only minimal changes are required 
      for the next candidate (RC3).
     </p> 
     <p> 
      Expect an RC3 in 2-3 weeks, although there will not be major changes so now is a good
      time to start the final testing of PHP 5.3.0 before it gets released, in order to find
      possible incompatibilities with your project.
     </p> 
     <p> 
      Please download and test this release candidate, and report any issues found.
      Downloads and further information is available at <a href="http://qa.php.net/">qa.php.net</a>.
      See also the work in progress <a href="http://wiki.php.net/doc/scratchpad/upgrade/53">5.3 upgrade guide</a>.
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://www.phpday.it/"><img src="http://static.php.net/www.php.net/images/news/phpday-it-2009.png" alt="phpDay Italy" width="159" height="108" style="float: right;" /></a></div> 
    <h1><a name="id2009-04-17-1" id="id2009-04-17-1" href="http://www.phpday.it/" rel="bookmark" class="bookmark">phpDay Italy</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-04-17T11:42:32+02:00">[17-Apr-2009]</abbr> 
        <div> 
     <p> 
      The italian PHP user group (GrUSP), is organizing the 6th phpDay,
      theitalian conference dedicated to the PHP world (<a href="http://www.phpday.it/" class="url">http://www.phpday.it/</a>).
     </p> 
     <p> 
      This year\'s edition will be held in Verona on
      <abbr class="dtstart" title="2009-05-15">May 15</abbr>-<abbr class="dtend" title="2009-05-17">16th</abbr> 
      and "softwareintegration with PHP" is going to be the main theme of the event.
     </p> 
     <p> 
      The phpDay will have three channels:
      <ul> 
       <li>Developers: development approach and techniques</li> 
       <li>Community: focus on open source software and frameworks</li> 
       <li>Enterprise: real case studies for business and enterprises</li> 
      </ul> 
     </p> 
     <p> 
      For the benefit of our international visitors, there will be an
      entiretrack in english, so come and join us in the beautiful city of
      Verona!
     </p> 
     <p> 
      To subscribe to the event use our eventbrite page:
      <a href="http://phpday2009.eventbrite.com/">http://phpday2009.eventbrite.com/</a> 
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-04-08-1" id="id2009-04-08-1" href="http://www.php.net/archive/2009.php#id2009-04-08-1" rel="bookmark" class="bookmark">PHP 5.2.9-2 (Windows) released</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-04-08T13:49:16+02:00">[08-Apr-2009]</abbr> 
        <div> 
      <p>The PHP Development Team would like to announce the availability of a new Windows build for PHP - PHP 5.2.9-2</p> 
      <p>This release focuses on fixing security flaws in the included OpenSSL library (CVE-2009-0590, CVE-2009-0591 and CVE-2009-0789). The security advisory is available <a href="http://openssl.org/news/secadv_20090325.txt">here</a>.</p> 
      <p>The OpenSSL library has been updated to 0.9.8k, which includes fixes for these flaws.</p> 
      <p>Note: Only the Windows binaries are affected. There are no changes to the PHP sources, therefore no source releases are necessary.</p> 
      <p><strong>Updated 9th of April</strong>: Added the missing OCI8 DLL</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://phpconference.nl/"><img src="http://static.php.net/www.php.net/images/news/dpc09_banner.jpg" alt="DPC09" width="159" height="108" style="float: right;" /></a></div> 
    <h1><a name="id2009-04-06-1" id="id2009-04-06-1" href="http://phpconference.nl/" rel="bookmark" class="bookmark">DPC09</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-04-06T21:36:59+02:00">[06-Apr-2009]</abbr> 
        <div> 
     <p> 
      Tickets are now on sale for The Dutch PHP Conference 2009 and we want to invite
      you to attend. This year\'s conference will be held from
      <abbr title="2009-06-11" class="dtstart">June 11</abbr>-<abbr title="2009-06-14" class="dtend">June13, 2009</abbr>.
      DPC09, like it\'s predecessors, will be held in Amsterdam at the RAI Center. This
      year we have expanded the conference to two days plus the tutorial day so that we
      can deliver even more sessions, events and value for your conference budget.
     </p> 
     <p> 
      Our speaker line up this year includes Andrei Zmievski, Marco Tabini, Derick
      Rethans, Ben Ramsey, Michelangelo van Dam, and Paul Reinheimer, just to name a few.
      This year\'s special keynote speakers are Andrei Zmievski and Owen Byrne as well as
      a special closing keynote session by Marco Tabini, Ivo Jansch and Cal Evans. You
      can see the full line up of speakers and sessions at
      <a href="http://phpconference.nl/schedule/">http://phpconference.nl/schedule/</a>.</p> 
     <p> 
      Early Bird pricing is in effect till April 30th, 2009. Save €55-€100 on ticket
      prices if you purchase before the deadline.
     </p> 
     <p> 
      For full details on DPC09 and information on how to order your tickets, visit the
      conference web site at <a href="http://phpconference.nl">http://phpconference.nl</a>.
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-03-27-1" id="id2009-03-27-1" href="http://www.php.net/archive/2009.php#id2009-03-27-1" rel="bookmark" class="bookmark">Google Summer of Code 2009</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-03-27T15:34:48-07:00">[27-Mar-2009]</abbr> 
        <div> 
      <p> 
       Once again we are happy to announce our involvement with the Google Summer of Code project.
       Be sure to check <a href="http://socghop.appspot.com/org/show/google/gsoc2009/php">our program</a> 
       at this years GSoC.
      </p> 
      <p> 
       We invite everyone to look at the <a href="http://wiki.php.net/gsoc/2009">list of ideas</a> for
       this years GSoC, and get involved. Students are welcome to propose their own ideas, and we
       will consider all applications that are received before the April 3rd deadline. So, thanks to
       everyone involved and we look forward to seeing many students join us on this great adventure!
      </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-03-24-1" id="id2009-03-24-1" href="http://www.php.net/archive/2009.php#id2009-03-24-1" rel="bookmark" class="bookmark">PHP 5.3.0RC1 Release Announcement</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-03-24T21:16:11+01:00">[24-Mar-2009]</abbr> 
        <div> 
      <p>The PHP development team is proud to announce the availability of the first release candidate of PHP 5.3.0 (PHP 5.3.0RC1). This release marks the final phase in a major improvement in the 5.X series, which includes a large number of new features, bug fixes and security enhancements.</p> 
      <p>The key features of the PHP 5.3 branch include:</p> 
      <ul> 
        <li>Support for <a href="http://php.net/namespaces">namespaces</a></li> 
        <li>Under the hood performance improvements</li> 
        <li><a href="http://php.net/lsb">Late static binding</a></li> 
        <li><a href="http://docs.php.net/functions.anonymous">Lambda functions and closures</a></li> 
        <li> 
         Syntax additions: 
         <a href="http://php.net/manual/language.types.string.php#language.types.string.syntax.nowdoc">NOWDOC</a>, limited GOTO,
         <a href="http://php.net/ternary#language.operators.comparison.ternary">ternary short cut "?:"</a> and
         <a href="http://php.net/__callstatic">__callStatic()</a> 
        </li> 
        <li>Optional <a href="http://php.net/gc_enable">garbage collection</a> for cyclic references</li> 
        <li>Optional <a href="http://php.net/mysqli.mysqlnd">mysqlnd</a> PHP native replacement for libmysql</li> 
        <li>Improved <a href="http://windows.php.net">windows</a> support including VC6 and VC9 binaries</li> 
        <li>More consistent float rounding</li> 
        <li>Deprecation notices are now handle via E_DEPRECATED (part of E_ALL) instead of the E_STRICT error level</li> 
        <li>Several enhancements to enable more <a href="http://php.net/ini.sections">flexiblity in php.ini</a> (and ini parsing in general)</li> 
        <li>New bundled extensions:
         <a href="http://php.net/phar">ext/phar</a>,
         <a href="http://php.net/intl">ext/intl</a>,
         <a href="http://php.net/fileinfo">ext/fileinfo</a>,
         <a href="http://php.net/sqlite3">ext/sqlite3</a>,
         <a href="http://php.net/enchant">ext/enchant</a> 
        </li> 
        <li>Countless bug fixes and improvements to existing extensions in particular to:
         <a href="http://php.net/openssl">ext/openssl</a>,
         <a href="http://php.net/spl">ext/spl</a> and
         <a href="http://php.net/datetime">ext/date</a> 
        </li> 
      </ul> 
      <p>This release also drops several extensions and unifies usage of internal APIs. Users should be aware of the following known backwards compatibility breaks:</p> 
      <ul> 
        <li>Parameter parsing API unification will cause some functions to behave more or less strict when it comes to type juggling</li> 
        <li>Removed the following extensions:
         <a href="http://php.net/mhash">ext/mhash</a> (see <a href="http://php.net/hash">ext/hash</a>),
         <a href="http://php.net/msql">ext/msql</a>,
         <a href="http://php.net/pspell">ext/pspell</a> (see <a href="http://php.net/enchant">ext/enchant</a>),
         <a href="http://php.net/sybase">ext/sybase</a> (see <a href="http://php.net/sybase">ext/sybase_ct</a>)
        </li> 
        <li>Moved the following extensions to PECL:
         <a href="http://php.net/ming">ext/ming</a>,
         <a href="http://php.net/fbsql">ext/fbsql</a>,
         <a href="http://php.net/ncurses">ext/ncurses</a>,
         <a href="http://php.net/fdf">ext/fdf</a> 
        </li> 
        <li>Removed <a href="http://php.net/manual/ini.core.php#ini.zend.ze1-compatibility-mode">zend.ze1_compatibility_mode</a></li> 
        <li>See the <a href="http://cvs.php.net/viewvc.cgi/php-src/UPGRADING?view=markup&amp;pathrev=PHP_5_3">upgrading guide</a> for other minor changes</li> 
      </ul> 
      <p>All users of PHP, especially those using earlier PHP 5 releases are advised to test this release as the final release of PHP 5.3.0 will eventually obsolete the 5.2 branch of PHP.</p> 
      <p>For users upgrading from previous PHP 5 releases there is an upgrading guide available <a href="http://cvs.php.net/viewvc.cgi/php-src/UPGRADING?view=markup&amp;pathrev=PHP_5_3">here</a>, detailing the changes between those releases and PHP 5.3.0.</p> 
      <p>Please also note that we are aware of issues surrounding float/integer handling in some edge cases (some of which have been introduced in PHP 5.2.0), as well as a crash bug in NSAPI, that will be fixed in PHP 5.3.0RC2. These issues however do not prevent wide spread testing of PHP 5.3.0RC1 as users can now rely on the feature set and implementation decisions no longer being changed.</p> 
      <p>For a full list of changes in PHP 5.3.0, see the CVS <a href="http://cvs.php.net/viewvc.cgi/php-src/NEWS?view=markup&amp;pathrev=PHP_5_3">NEWS</a> file.</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-03-10-1" id="id2009-03-10-1" href="http://www.php.net/archive/2009.php#id2009-03-10-1" rel="bookmark" class="bookmark">5.2.9-1 (for Windows) released</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-03-10T23:16:11+01:00">[10-Mar-2009]</abbr> 
        <div> 
      <p>The PHP Development Team would like to announce the availability of a new Windows build of PHP - PHP 5.2.9-1</p> 
      <p>This release focuses on fixing a security flaw introduced by the cURL library (CVE-2009-0037). Please see the following for a full description: <a href="http://curl.haxx.se/docs/adv_20090303.html">http://curl.haxx.se/docs/adv_20090303.html</a></p> 
      <p>Please note that the cURL related function is disabled when open_basedir or safe_mode enabled.</p> 
      <p>Note: Only the Windows packages are affected.</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-02-26-1" id="id2009-02-26-1" href="http://www.php.net/archive/2009.php#id2009-02-26-1" rel="bookmark" class="bookmark">PHP 5.2.9 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-02-26T18:24:50-05:00">[26-Feb-2009]</abbr> 
        <div> 
      <p>The PHP development team would like to announce the immediate availability of PHP 5.2.9. This release focuses on improving the stability of the PHP 5.2.x branch with over 50 bug fixes, several of which are security related. All users of PHP are encouraged to upgrade to this release.</p> 
      <p> 
        <b>Security Enhancements and Fixes in PHP 5.2.9:</b> 
      </p> 
      <ul>        <li>Fixed security issue in imagerotate(), background colour isn\'t validated correctly with a non truecolour image. Reported by Hamid Ebadi, APA Laboratory (Fixes CVE-2008-5498). (Scott)</li>        <li>Fixed a crash on extract in zip when files or directories entry names contain  a relative path. (Pierre)</li>        <li>Fixed explode() behavior with empty string to respect negative limit. (Shire)</li>        <li>Fixed a segfault when malformed string is passed to json_decode(). (Scott)</li></ul> 
      <p>Further details about the PHP 5.2.9 can be found in the release announcement for <a href="http://www.php.net/releases/5_2_9.php">5.2.9</a>  the full list of changes is available in the <a href="http://www.php.net/ChangeLog-5.php#5.2.9">ChangeLog for PHP 5</a>.</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-02-20-1" id="id2009-02-20-1" href="http://www.php.net/archive/2009.php#id2009-02-20-1" rel="bookmark" class="bookmark">php|tek 2009</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-02-20T18:59:30+01:00">[20-Feb-2009]</abbr> 
        <div> 
      <p>We are happy to invite you to this year\'s php|tek conference, to be held <abbr title="2009-05-19" class="dtstart">May 19</abbr>-<abbr title="2009-05-23" class="dtend">22, 2009</abbr> in <span class="location">Chicago, Illinois</span>, and hosted (as always) by the folks at php|architect.</p> 
      <p>Join us to hear talks and tutorials on a variety of PHP subjects from PHP experts such as Ed Finkler, Sara Golemon, Chris Shiflett, Sebastian Bergmann, Derick Rethans, Stefan Priebsch, Christian Wenz and our mid-conference keynote by Andrei Zmievski on PHP6. You can see the full schedule at <a href="http://tek.mtacon.com/c/schedule">http://tek.mtacon.com/c/schedule</a> - we guarantee you won\'t be disappointed.</p> 
      <p>This year we are also happy to invite you to our Unconference and Hack-a-thon which will be held in the early evenings, separate from the main schedule. You\'ll have a great time and won\'t miss a thing! This, coupled with our entertaining evening events and multiple networking opportunities will prove to make your trip to the conference an educational and memorable one!</p> 
      <p>Early bird pricing is in effect until February 28, 2009 so hurry to take advantage of this offer before it\'s too late!</p> 
      <p>For details on the conference, including registration and hotel information, please visit us at <a href="http://tek.mtacon.com/" class="url">http://tek.mtacon.com/</a>.</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"></div> 
    <h1><a name="id2009-02-18-1" id="id2009-02-18-1" href="http://www.php.net/archive/2009.php#id2009-02-18-1" rel="bookmark" class="bookmark">2009 PHP Quebec Conference</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2009-02-18T02:10:11-08:00">[18-Feb-2009]</abbr> 
        <div> 
     <p> 
      The seventh edition of the PHP Quebec Conference will take place in a few days, 
      between March 4th and 6th, 2009. It will be held in Montreal, Canada.
     </p> 
     <p> 
      Don\'t miss out on this unique opportunity to learn more on latest development 
      techniques with PHP, RIA, Frameworks and project management. Meet with PHP 
      Community leaders such as: Zeev Suraski, Chris Shiflett, Andrei Zmievski, 
      Sara Golemon, John Coggeshall and many more.
     </p> 
     <p> 
      With over 55 technical talks, 35 international speakers and multiple networking 
      activities you are guaranteed to take your career one step ahead in a friendly 
      environment.
     </p> 
     <p> 
      Space is limited, register online before February 28th and secure your presence. 
      <a href="http://conf.phpquebec.com/">http://conf.phpquebec.com</a> 
     </p> 
    </div> 
  
    </div> 
</div>

<hr/ >

<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2010-12-16-1" id="id2010-12-16-1" href="http://www.php.net/archive/2010.php#id2010-12-16-1" rel="bookmark" class="bookmark">PHP 5.2.16 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-12-16T00:22:44-05:00">[16-Dec-2010]</abbr> 
        <div> 
     <p> 
     The PHP development team would like to announce the immediate
     availability of PHP 5.2.16. This release marks the end of support
     for PHP 5.2. All users of PHP 5.2 are encouraged to upgrade to PHP 5.3.
     </p> 
     
     <p> 
     This release focuses on addressing a regression in open_basedir implementation
     introduced in 5.2.15 in addition to fixing a crash inside PDO::pgsql
     on data retrieval when the server is down. All users who have upgraded to 5.2.15 and are
     utilizing open_basedir are strongly encouraged to upgrade to 5.2.16 or 5.3.4.
     </p> 
     
     <p>To prepare for upgrading to PHP 5.3, now that PHP 5.2\'s support ended, a
     migration guide available on <a href="http://www.php.net/migration53">http://php.net/migration53</a>, details the changes between
     PHP 5.2 and PHP 5.3.</p> 
     
     <p>For a full list of changes in PHP 5.2.16 see the ChangeLog at
     <a href="http://www.php.net/ChangeLog-5.php#5.2.16">http://www.php.net/ChangeLog-5.php#5.2.16</a>.</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2010-12-10-1" id="id2010-12-10-1" href="http://www.php.net/archive/2010.php#id2010-12-10-1" rel="bookmark" class="bookmark">PHP 5.3.4 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-12-10T01:19:36+01:00">[10-Dec-2010]</abbr> 
        <div> 
     <p> 
     The PHP development team is proud to announce the immediate release of PHP
     5.3.4. This is a maintenance release in the 5.3 series, which includes a
     large number of bug fixes.
     </p> 
     
     <p> 
     <b>Security Enhancements and Fixes in PHP 5.3.4:</b> 
     </p> 
     <ul> 
       <li>Fixed crash in zip extract method (possible CWE-170).</li> 
       <li>Paths with NULL in them (foo\0bar.txt) are now considered as invalid (CVE-2006-7243).</li> 
       <li>Fixed a possible double free in imap extension (Identified by Mateusz
         Kocielski). (CVE-2010-4150).</li> 
       <li>Fixed NULL pointer dereference in ZipArchive::getArchiveComment.
         (CVE-2010-3709).</li> 
       <li>Fixed possible flaw in open_basedir (CVE-2010-3436).</li> 
       <li>Fixed MOPS-2010-24, fix string validation. (CVE-2010-2950).</li> 
       <li>Fixed symbolic resolution support when the target is a DFS share.</li> 
       <li>Fixed bug #52929 (Segfault in filter_var with FILTER_VALIDATE_EMAIL with
         large amount of data) (CVE-2010-3710).</li> 
     </ul> 
     
     <p> 
     <b>Key Bug Fixes in PHP 5.3.4 include:</b> 
     </p> 
     <ul> 
       <li>Added stat support for zip stream.</li> 
       <li>Added follow_location (enabled by default) option for the http stream
         support.</li> 
       <li>Added a 3rd parameter to get_html_translation_table. It now takes a charset hint, like htmlentities et al.</li> 
       <li>Implemented FR #52348, added new constant ZEND_MULTIBYTE to detect
         zend multibyte at runtime.</li> 
       <li>Multiple improvements to the FPM SAPI.</li> 
       <li>Over 100 other bug fixes.</li> 
     </ul> 
     
     <p> 
     For users upgrading from PHP 5.2 there is a migration guide
     available <a href="http://php.net/migration53">here</a>, detailing
     the changes between those releases and PHP 5.3.
     </p> 
     
     <p> 
      For a full list of changes in PHP 5.3.4, see the
      <a href="http://www.php.net/ChangeLog-5.php#5.3.4">ChangeLog</a>. For source downloads
      please visit our <a href="http://www.php.net/downloads.php">downloads page</a>, Windows
      binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2010-12-09-1" id="id2010-12-09-1" href="http://www.php.net/archive/2010.php#id2010-12-09-1" rel="bookmark" class="bookmark">PHP 5.2.15 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-12-09T15:29:10-05:00">[09-Dec-2010]</abbr> 
        <div> 
     <p> 
     The PHP development team would like to announce the immediate
     availability of PHP 5.2.15. This release marks the end of support
     for PHP 5.2. All users of PHP 5.2 are encouraged to upgrade to PHP 5.3.
     </p> 
     
     <p> 
     This release focuses on improving the security and stability of the
     PHP 5.2.x branch with a small number, of predominatly security fixes.
     </p> 
     
     <p> 
     <b>Security Enhancements and Fixes in PHP 5.2.15:</b> 
     </p> 
     <ul> 
         <li>Fixed extract() to do not overwrite $GLOBALS and $this when using EXTR_OVERWRITE.</li> 
         <li>Fixed crash in zip extract method (possible CWE-170).</li> 
         <li>Fixed a possible double free in imap extension.</li> 
         <li>Fixed possible flaw in open_basedir (CVE-2010-3436).</li> 
         <li>Fixed NULL pointer dereference in ZipArchive::getArchiveComment. (CVE-2010-3709).</li> 
         <li>Fixed bug #52929 (Segfault in filter_var with FILTER_VALIDATE_EMAIL with large amount of data).</li> 
     </ul> 
     
     <p> 
     <b>Key enhancements in PHP 5.2.15 include:</b> 
     </p> 
     <ul> 
         <li>Fixed bug #47643 (array_diff() takes over 3000 times longer than php 5.2.4).</li> 
         <li>Fixed bug #44248 (RFC2616 transgression while HTTPS request through proxy with SoapClient object).</li> 
     </ul> 
     
     <p>To prepare for upgrading to PHP 5.3, now that PHP 5.2\'s support ended, a
     migration guide available on <a href="http://www.php.net/migration53">http://php.net/migration53</a>, details the changes between
     PHP 5.2 and PHP 5.3.</p> 
     
     <p>For a full list of changes in PHP 5.2.15 see the ChangeLog at
     <a href="http://www.php.net/ChangeLog-5.php#5.2.15">http://www.php.net/ChangeLog-5.php#5.2.15</a>.</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://www.confoo.ca/"><img src="http://static.php.net/www.php.net/images/news/logo_confoo_300_95.gif" alt="Confoo" width="300" height="95" style="float: right;" /></a></div> 
    <h1><a name="id2010-11-08-1" id="id2010-11-08-1" href="http://confoo.ca/" rel="bookmark" class="bookmark">Confoo</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-11-08T20:05:56-02:00">[08-Nov-2010]</abbr> 
        <p> 
        <a href="http://www.phpquebec.org/">PHP Quebec</a> is pleased to announce the 2011 edition of the <a href="http://confoo.ca/">http://confoo.ca/</a> Conference.
        The Conference will take place in Montréal, Québec, Canada between March 9 and
        11th 2011. We are looking for speakers willing to share their expertise with
        Canadian and United States PHP professionals programmers and managers.
      </p> 
 
      <p> 
        The Conference features technical one hour talks dedicated many aspects of
        Web development such as mobile apps, security, databases, cloud, web standards,
        accessibility, project management, agile methods, CMS &amp; Frameworks, startups
        and of course, PHP.
      </p> 
 
      <p> 
        Organizers will prioritize new and original topics in English or French.
        For more information, visit the website: <a href="http://confoo.ca/">http://confoo.ca/</a> 
      </p> 
 
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://www.phprio.org/phpnrio10"><img src="http://static.php.net/www.php.net/images/news/phpnrio10.png" alt="PHP\'n Rio 10" width="300" height="77" style="float: right;" /></a></div> 
    <h1><a name="id2010-11-02-1" id="id2010-11-02-1" href="http://www.phprio.org/phpnrio10" rel="bookmark" class="bookmark">PHP\'n Rio 10</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-11-02T20:05:56-02:00">[02-Nov-2010]</abbr> 
        <p> 
          <a href="http://www.phprio.org/">The PHP Rio User Group</a> 
          is pleased to announce their second edition of
          the <em>PHP\'n Rio</em> conference. It will be held on November 20th,
          2010, at the <a href="http://www.puc-rio.br/">PUC Rio university</a>,
          Rio de Janeiro. It is a one day conference aimed on providing
          experienced developers and beginners a chance to learn more about PHP
          frameworks, web applications built in PHP, and the art of testing
          code.
      </p> 
 
      <p> 
          No fees or subscription required. Participation is entirely free!
      </p> 
 
      <p> 
          Whether you live here or are around just enjoying the marvelous city,
          come and join us :) For more information, please visit
          <a href="http://www.phprio.org/phpnrio10"> 
              http://www.phprio.org/phpnrio10
          </a> 
          (Portuguese only).
      </p> 
 
 
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://www.zendcon.com/"><img src="http://static.php.net/www.php.net/images/news/zend_phpconf10.jpg" alt="Zend / PHP Conference" width="172" height="100" style="float: right;" /></a></div> 
    <h1><a name="id2010-09-30-1" id="id2010-09-30-1" href="http://www.zendcon.com/" rel="bookmark" class="bookmark">Zend / PHP Conference</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-09-30T15:27:22+08:00">[30-Sep-2010]</abbr> 
        <div> 
     <p> 
         The 6th Annual Zend/PHP Conference will bring together PHP developers and
         IT managers from around the world to discuss PHP best practices and explore
         new technologies.
     </p> 
     
     <p> 
         At ZendCon, you\'ll learn from a variety of technical sessions in 9 tracks,
         renowned speakers, in-depth tutorials, an Exhibit Hall featuring industry
         leaders and unique networking opportunities.
     </p> 
     
     <ul> 
         <li> 
             Learn PHP best practices for architecture, design and development
         </li> 
         <li> 
             Discover new advances in the PHP language and how to best harness them
         </li> 
         <li> 
             Gain insights from peers, PHP luminaries, community members and
             thought-leaders
         </li> 
         <li> 
             Discover how to deploy and scale large PHP applications
         </li> 
         <li> 
             Explore new technologies like NoSQL and Cloud Computing
         </li> 
         <li> 
             Learn how to effectively leverage Zend Framework and the changes coming
             in Zend Framework 2.0
         </li> 
     </ul> 
     
     <p> 
         Register now so you don\'t miss out on the most popular tutorials and
         savings.  And join us at the 2010 Zend/PHP Conference - the largest
         gathering of the PHP community!
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://phpconference.es/"><img src="http://static.php.net/www.php.net/images/news/barcelona2010.png" alt="PHP Barcelona Conference 2010" width="500" height="100" style="float: right;" /></a></div> 
    <h1><a name="id2010-09-25-2" id="id2010-09-25-2" href="http://phpconference.es/" rel="bookmark" class="bookmark">PHP Barcelona Conference 2010</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-09-25T13:30:45+02:00">[25-Sep-2010]</abbr> 
        <div> 
     <p>The <a href="http://phpbarcelona.org/">PHP Barcelona User Group</a> is pleased to announce the 4th edition of the <a href="http://phpconference.es/">PHP Barcelona Conference</a>. Come to the shores of the Mediterranean for two fun-packed days of cutting edge PHP, Application Scalability, High Performance, Databases, Integration, Testing, Clouds (not in the sky, we hope) and many many more topics and surprises. The event will take place from the 29th to the 30th of October and will bring together <strong>Ilia Alshanetsky</strong>, <strong>Fabien Potencier</strong>, <strong>Stefan Priebsch</strong>, <strong>Lorenzo Alberton</strong>, <strong>Enrico Zimuel</strong> and many more of the shiniest names in the industry for 48 hours of intensive PHP and fiesta!</p> 
     
     <p>For more information visit <a href="http://phpconference.es/">http://phpconference.es</a> and book your spot now before tickets run out and don\'t lose out on one of the most appealing events on the PHP calendar :)</p> 
     
     <p>See you in Barcelona!</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://phpconference.com/"><img src="http://static.php.net/www.php.net/images/news/ipc2010.gif" alt="International PHP Conference 2010" width="170" height="109" style="float: right;" /></a></div> 
    <h1><a name="id2010-09-25-1" id="id2010-09-25-1" href="http://phpconference.com/" rel="bookmark" class="bookmark">International PHP Conference</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-09-25T13:09:54+02:00">[25-Sep-2010]</abbr> 
        <div> 
     <p>Not just another conference - this year has seen some high-valued
     conferences (like our IPC Spring Edition in Berlin) and we are already
     preparing the next big PHP conference. But this year makes a difference.
     It\'s the 10th. anniversary of the International PHP Conference. Being in
     business for ten years, we met some great people, made true fans and
     encouraged PHP developers all over the world to commit their passion for
     web-development to a growing community, that is behind some of the most
     well-known websites today.</p> 
     
     <p>Of course, a great event is nothing without great developers and we are very
     happy to welcome the PHP community to our next International PHP Conference
     2010! Again, this conference is packed with workshops, sessions and keynotes
     on some of the most trending topics in PHP and web development today. Wether
     you are the developer dealing with core PHP features, the project lead that
     is in continuous integration or the CTO looking for professional solutions,
     this conference is the place to be. Not because of our 10 years of
     experience in bringing together some of the most experienced heads in PHP
     development - but because of this conference being one of Europe\'s leading
     technology events that have been made possible by a really passionate
     community. And that is ... by you.</p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://conference.phpnw.org.uk/phpnw10/"><img src="http://static.php.net/www.php.net/images/news/phpnw10_logo.png" alt="PHP | OSI Days 2010" width="300" height="172" style="float: right;" /></a></div> 
    <h1><a name="id2010-09-09-1" id="id2010-09-09-1" href="http://www.php.net/archive/2010.php#id2010-09-09-1" rel="bookmark" class="bookmark">PHPNW10</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-09-09T23:53:00+08:00">[09-Sep-2010]</abbr> 
        <p> 
    PHP North West is a PHP conference with a regional focus, bringing the best
    of PHP speakers to the north-west of England on Saturday 9th October. A
    full day of conference speakers over at least two tracks this should again
    prove to be one of the best events for PHP user-led conferences in Europe.
    We\'re also, as last year, having an informal half day of speakers on Sunday
    10th October, at the Museum of Science and Industry (MOSI) nearby. With a
    weekend packed with all things PHP and a ticket price to suit business and
    hobbyists alike there are no reasons to miss out - see you in Manchester :)
   </p> 
   <ul> 
    <li> 
     PHPNW10:
     <a href="http://conference.phpnw.org.uk/phpnw10/">conference.phpnw.org.uk/phpnw10/</a> 
    </li> 
    <li> 
     Registration:
     <a href="http://conference.phpnw.org.uk/register/">conference.phpnw.org.uk/register/</a> 
    </li> 
   </ul> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2010-07-22-2" id="id2010-07-22-2" href="http://www.php.net/archive/2010.php#id2010-07-22-2" rel="bookmark" class="bookmark">PHP 5.3.3 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-07-22T15:44:32+02:00">[22-Jul-2010]</abbr> 
        <div> 
     <p> 
     The PHP development team would like to announce the immediate
     availability of PHP 5.3.3. This release focuses on improving the
     stability and security of the PHP 5.3.x branch with over 100 bug
     fixes, some of which are security related. All users are encouraged
     to upgrade to this release.
     </p> 
     
     <p> 
     <b>Backwards incompatible change:</b> 
     </p> 
     <ul> 
             <li>Methods with the same name as the last element of a namespaced class name
             will no longer be treated as constructor. This change doesn\'t affect
             non-namespaced classes.
     
             <p><code>&lt;?php<br/> 
namespace Foo;<br/> 
class Bar {<br/> 
    public function Bar() {<br/> 
        // treated as constructor in PHP 5.3.0-5.3.2<br/> 
        // treated as regular method in PHP 5.3.3<br/> 
    }<br/> 
}<br/> 
?&gt;</code></p> 
             <p>There is no impact on migration from 5.2.x because namespaces were only introduced in PHP 5.3.</p></li> 
     </ul> 
     <p> 
     <b>Security Enhancements and Fixes in PHP 5.3.3:</b> 
     </p> 
     <ul> 
             <li>Rewrote var_export() to use smart_str rather than output buffering, prevents data disclosure if a fatal error occurs (CVE-2010-2531).</li> 
             <li>Fixed a possible resource destruction issues in shm_put_var().</li> 
             <li>Fixed a possible information leak because of interruption of XOR operator.</li> 
             <li>Fixed a possible memory corruption because of unexpected call-time pass by refernce and following memory clobbering through callbacks.</li> 
             <li>Fixed a possible memory corruption in ArrayObject::uasort().</li> 
             <li>Fixed a possible memory corruption in parse_str().</li> 
             <li>Fixed a possible memory corruption in pack().</li> 
             <li>Fixed a possible memory corruption in substr_replace().</li> 
             <li>Fixed a possible memory corruption in addcslashes().</li> 
             <li>Fixed a possible stack exhaustion inside fnmatch().</li> 
             <li>Fixed a possible dechunking filter buffer overflow.</li> 
             <li>Fixed a possible arbitrary memory access inside sqlite extension.</li> 
             <li>Fixed string format validation inside phar extension.</li> 
             <li>Fixed handling of session variable serialization on certain prefix characters.</li> 
             <li>Fixed a NULL pointer dereference when processing invalid XML-RPC requests (Fixes CVE-2010-0397, bug #51288).</li> 
             <li>Fixed SplObjectStorage unserialization problems (CVE-2010-2225).</li> 
             <li>Fixed possible buffer overflows in mysqlnd_list_fields,  mysqlnd_change_user.</li> 
             <li>Fixed possible buffer overflows when handling error packets in mysqlnd.</li> 
     </ul> 
     
     <p> 
     <b>Key enhancements in PHP 5.3.3 include:</b> 
     </p> 
     <ul> 
             <li>Upgraded bundled sqlite to version 3.6.23.1.</li> 
             <li>Upgraded bundled PCRE to version 8.02.</li> 
             <li>Added FastCGI Process Manager (FPM) SAPI.</li> 
             <li>Added stream filter support to mcrypt extension.</li> 
             <li>Added full_special_chars filter to ext/filter.</li> 
             <li>Fixed a possible crash because of recursive GC invocation.</li> 
             <li>Fixed bug #52238 (Crash when an Exception occured in iterator_to_array).</li> 
             <li>Fixed bug #52041 (Memory leak when writing on uninitialized variable returned from function).</li> 
             <li>Fixed bug #52060 (Memory leak when passing a closure to method_exists()).</li> 
             <li>Fixed bug #52001 (Memory allocation problems after using variable variables).</li> 
             <li>Fixed bug #51723 (Content-length header is limited to 32bit integer with Apache2 on Windows).</li> 
             <li>Fixed bug #48930 (__COMPILER_HALT_OFFSET__ incorrect in PHP &gt;= 5.3).</li> 
     </ul> 
     
     <p> 
     For users upgrading from PHP 5.2 there is a migration guide available on
     <a href="http://www.php.net/migration53">http://php.net/migration53</a>, detailing the changes between those
     releases and PHP 5.3.
     </p> 
     <p> 
      For a full list of changes in PHP 5.3.3, see the <a href="http://www.php.net/ChangeLog-5.php#5.3.3">ChangeLog</a>.
     </p> 
     
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2010-07-22-1" id="id2010-07-22-1" href="http://www.php.net/archive/2010.php#id2010-07-22-1" rel="bookmark" class="bookmark">PHP 5.2.14 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-07-22T15:42:03+02:00">[22-Jul-2010]</abbr> 
        <div> 
     <p> 
     The PHP development team would like to announce the immediate
     availability of PHP 5.2.14. This release focuses on improving the
     stability of the PHP 5.2.x branch with over 60 bug fixes, some of which
     are security related.</p> 
     
     <p> 
     This release marks the end of the active support for PHP
     5.2. Following this release the PHP 5.2 series will receive no further
     active bug maintenance. Security fixes for PHP 5.2 might be published on a
     case by cases basis. All users of PHP 5.2 are encouraged to upgrade to
     PHP 5.3.</p> 
     
     <p> 
     <b>Security Enhancements and Fixes in PHP 5.2.14:</b> 
     </p> 
     <ul> 
     
             <li>Rewrote var_export() to use smart_str rather than output buffering, prevents data disclosure if a fatal error occurs.</li> 
             <li>Fixed a possible interruption array leak in strrchr().(CVE-2010-2484)</li> 
             <li>Fixed a possible interruption array leak in strchr(), strstr(), substr(), chunk_split(), strtok(), addcslashes(), str_repeat(), trim().</li> 
             <li>Fixed a possible memory corruption in substr_replace().</li> 
             <li>Fixed SplObjectStorage unserialization problems (CVE-2010-2225).</li> 
             <li>Fixed a possible stack exaustion inside fnmatch().</li> 
             <li>Fixed a NULL pointer dereference when processing invalid XML-RPC requests (Fixes CVE-2010-0397, bug #51288).</li> 
             <li>Fixed handling of session variable serialization on certain prefix characters.</li> 
             <li>Fixed a possible arbitrary memory access inside sqlite extension. Reported by Mateusz Kocielski.</li> 
     </ul> 
     
     <p> 
     <b>Key enhancements in PHP 5.2.14 include:</b> 
     </p> 
     <ul> 
     
             <li>Upgraded bundled PCRE to version 8.02.</li> 
             <li>Updated timezone database to version 2010.5.</li> 
             <li>Fixed bug #52238 (Crash when an Exception occured in iterator_to_array).</li> 
             <li>Fixed bug #52237 (Crash when passing the reference of the property of a non-object).</li> 
             <li>Fixed bug #52041 (Memory leak when writing on uninitialized variable returned from function).</li> 
             <li>Fixed bug #51822 (Segfault with strange __destruct() for static class variables).</li> 
             <li>Fixed bug #51552 (debug_backtrace() causes segmentation fault and/or memory issues).</li> 
             <li>Fixed bug #49267 (Linking fails for iconv on MacOS: "Undefined symbols: _libiconv").</li> 
     </ul> 
     
     <p>To prepare for upgrading to PHP 5.3, now that PHP 5.2\'s support ended, a
     migration guide available on <a href="http://www.php.net/migration53">http://php.net/migration53</a>, details the changes between
     PHP 5.2 and PHP 5.3.</p> 
     <p>For a full list of changes in PHP 5.2.14 see the ChangeLog at
     <a href="http://www.php.net/ChangeLog-5.php#5.2.14">http://www.php.net/ChangeLog-5.php#5.2.14</a>.</p> 
    </div> 
 
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2010-06-23-1" id="id2010-06-23-1" href="http://www.php.net/archive/2010.php#id2010-06-23-1" rel="bookmark" class="bookmark">TestFest 2010</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-06-23T22:51:00-05:00">[23-Jun-2010]</abbr> 
        <div> 
      <p> 
        PHP is proud to announce TestFest 2010. TestFest is PHP\'s annual campaign
        to increase the overall code coverage of PHP through PHPT tests. During
        TestFest, PHP User Groups and individuals around the world organize local
        events where new tests are written and new contributors are introduced to
        PHP\'s testing suite.
      </p> 
      <p> 
        Last year was very successful with 887 tests submitted and a code coverage
        increase of 2.5%. This year we hope to do better.
      </p> 
      <p> 
        TestFest\'s own SVN repository and reporting tools are back online for this
        year\'s event. New to TestFest this year are automated test environment build
        tools as well as screencasts showing those build tools in action.
      </p> 
      <p> 
        Please visit the <a href="http://wiki.php.net/qa/testfest-2010">TestFest
        2010</a> wiki page for all the details on events being organized in your area,
        or find out how you can organize your own event.
      </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://osidays.com/node/add/proposal"><img src="http://static.php.net/www.php.net/images/news/php_osi_2010.png" alt="PHP | OSI Days 2010" width="140" height="67" style="float: right;" /></a></div> 
    <h1><a name="id2010-06-05-1" id="id2010-06-05-1" href="http://www.php.net/archive/2010.php#id2010-06-05-1" rel="bookmark" class="bookmark">PHP | OSI Days 2010: Participate at the confluence of PHP\'s finest!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-06-05T18:21:05-03:00">[05-Jun-2010]</abbr> 
        <p>PHP | OSI Days 2010 is the premier PHP conference being organised at 
    Asia\'s largest Open Source Conference - OSI Days 2010. We invite you to 
    come and lead a tutorial / session or participate in Panel Discussions 
    at OSI Days 2010 specifically for the PHP domain. The last date for 
    submitting a proposal for the conference is 15th June 2010. The 
    conference is scheduled for September 19-21, 2010 at Chennai, India.
   </p> 
   <p> 
    Submit a proposal now! &lt;<a href="http://osidays.com/node/add/proposal" class="url">http://osidays.com/node/add/proposal</a>&gt;
   </p> 
   <p><strong>If you are one of the following:</strong></p> 
   <ul> 
    <li>Open Source Enthusiast</li> 
    <li>Developer/ Hacker/ Techie/ Geek</li> 
    <li>IT Manager/ CXO</li> 
    <li>Open Source Entrepreneur</li> 
    <li>Designer/ UI Expert</li> 
    <li>Open Source Trainer/ Educationist</li> 
   </ul> 
   <p><strong>We invite you to submit a proposal on one of the topics below:</strong></p> 
   <p> 
    <ul> 
     <li>Cloud Computing: Tools and Platforms, Cloudnomics, Cloud for
      Dummies &amp; Others</li> 
     <li>PHP: PHP 5 &amp; 6, PHP Security, Frameworks, Architecture / QA &amp; Best
      Practices</li> 
     <li>Drupal: Best Practices, Module Development, Theme Development,
      Scaling/ Management/ Performance &amp; Others</li> 
     <li>Databases: MySQL, NoSQL, CouchDB, PostgreSQL, Ingres, SQLite &amp; Others</li> 
     <li>Java Script</li> 
     <li>Developer / Tools &amp; Techniques</li> 
    </ul> 
   </p> 
   <p><strong>Types of Presentation</strong></p> 
   <ul> 
    <li>45 minute Session</li> 
    <li> minute Panel Discussion</li> 
    <li>Half Day tutorial / workshop</li> 
    <li>Full Day tutorial / workshop</li> 
   </ul> 
   <p><strong>Your proposals Should</strong></p> 
   <p> 
    <ul> 
     <li>be Free of Marketing talks / self promotion / company promotion:
      Please speak about ideas/ technology/ business and not about
      yourself or your company. Talk about Open Source Projects/
      Products and not strictly commercial closed source products.</li> 
     <li>Clearly identify your target audience and what are the
      pre-requisites while submitting the proposal</li> 
     <li>Have a clear title and limit the scope of your proposal to
      something specific rather than trying to cover too much</li> 
    </ul> 
   </p> 
   <p><strong>Speaker Benefits</strong></p> 
   <p>OSI Days offers its speakers tremendous opportunities for exposure and 
    recognition as an industry leader. Your session will attract many 
    technical &amp; Business professionals interested in learning from your 
    example, expertise and experience. In appreciation of your contributions 
    as a Conference Speaker, we provide you many benefits, read them in full 
    detail. &lt;<a href="http://osidays.com/speaker-benefit" class="url">http://osidays.com/speaker-benefit</a>&gt;
   </p> 
   <p><strong>Contact</strong></p> 
   <p>For registration and more details visit: <a href="http://osidays.com" class="url">http://osidays.com</a> or contact 
    Dhiraj Khare at dhiraj@osidays.com or call at +919811206582
    <br/><br/> 
    Team,<br/> 
    OSI Days 2010
   </p> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2010-03-04-1" id="id2010-03-04-1" href="http://www.php.net/archive/2010.php#id2010-03-04-1" rel="bookmark" class="bookmark">PHP 5.3.2 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-03-04T14:57:33+00:00">[04-Mar-2010]</abbr> 
        <div> 
     <p> 
     The PHP development team is proud to announce the immediate release of PHP
     5.3.2. This is a maintenance release in the 5.3 series, which includes a
     large number of bug fixes.
     </p> 
     
     <p> 
     <b>Security Enhancements and Fixes in PHP 5.3.2:</b> 
     </p> 
     <ul> 
       <li>Improved LCG entropy. (Rasmus, Samy Kamkar)</li> 
       <li>Fixed safe_mode validation inside tempnam() when the directory path does not end with a /). (Martin Jansen)</li> 
       <li>Fixed a possible open_basedir/safe_mode bypass in the session extension identified by Grzegorz Stachowiak. (Ilia)</li> 
     </ul> 
     
     <p> 
     <b>Key Bug Fixes in PHP 5.3.2 include:</b> 
     </p> 
     <ul> 
       <li>Added support for SHA-256 and SHA-512 to php\'s crypt.</li> 
       <li>Added protection for $_SESSION from interrupt corruption and improved "session.save_path" check.</li> 
       <li>Fixed bug #51059 (crypt crashes when invalid salt are given).</li> 
       <li>Fixed bug #50940 Custom content-length set incorrectly in Apache sapis.</li> 
       <li>Fixed bug #50847 (strip_tags() removes all tags greater then 1023 bytes long).</li> 
       <li>Fixed bug #50723 (Bug in garbage collector causes crash).</li> 
       <li>Fixed bug #50661 (DOMDocument::loadXML does not allow UTF-16).</li> 
       <li>Fixed bug #50632 (filter_input() does not return default value if the variable does not exist).</li> 
       <li>Fixed bug #50540 (Crash while running ldap_next_reference test
     cases).</li> 
       <li>Fixed bug #49851 (http wrapper breaks on 1024 char long headers).</li> 
       <li>Over 60 other bug fixes.</li> 
     </ul> 
     
     <p> 
     For users upgrading from PHP 5.2 there is a migration guide
     available <a href="http://php.net/migration53">here</a>, detailing
     the changes between those releases and PHP 5.3.
     </p> 
 
     <p> 
     <b>Further information and downloads:</b> 
     </p> 
 
     <p> 
     For a full list of changes in PHP 5.3.2, see the
     <a href="http://www.php.net/ChangeLog-5.php#5.3.2">ChangeLog</a>. For source downloads
     please visit our <a href="http://www.php.net/downloads.php">downloads page</a>, Windows
     binaries can be found on <a href="http://windows.php.net/download/"> 
     windows.php.net/download/</a>.
     </p> 
     
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry"> 
    <div class="newsImage"></div> 
    <h1><a name="id2010-02-25-1" id="id2010-02-25-1" href="http://www.php.net/archive/2010.php#id2010-02-25-1" rel="bookmark" class="bookmark">PHP 5.2.13 Released!</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-02-25T16:41:39-05:00">[25-Feb-2010]</abbr> 
        <div> 
     <p> 
     The PHP development team would like to announce the immediate
     availability of PHP 5.2.13. This release focuses on improving the stability of
     the PHP 5.2.x branch with over 40 bug fixes, some of which are security related.
     All users of PHP 5.2 are encouraged to upgrade to this release.
     </p> 
     
     <p> 
     <b>Security Enhancements and Fixes in PHP 5.2.13:</b> 
     </p> 
     <ul> 
             <li>Fixed safe_mode validation inside tempnam() when the directory path does not end with a /). (Martin Jansen)</li> 
             <li>Fixed a possible open_basedir/safe_mode bypass in session extension identified by Grzegorz Stachowiak. (Ilia)</li> 
             <li>Improved LCG entropy. (Rasmus, Samy Kamkar)</li> 
     </ul> 
     
     <p> 
     Further details about the PHP 5.2.13 release can be found in the <a href="http://www.php.net/releases/5_2_13.php">release announcement</a>, and the full list of changes are available in the <a href="http://www.php.net/ChangeLog-5.php#5.2.13">ChangeLog</a>.
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://phpconference.nl/"><img src="http://static.php.net/www.php.net/images/news/dpc10_banner.jpg" alt="Dutch PHP Conference 2010" width="159" height="108" style="float: right;" /></a></div> 
    <h1><a name="id2010-02-19-1" id="id2010-02-19-1" href="http://phpconference.nl/" rel="bookmark" class="bookmark">Dutch PHP Conference</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-02-19T14:57:14+01:00">[19-Feb-2010]</abbr> 
        <div> 
     <p> 
     The Dutch PHP Conference is now in its 4th year and yet again promises
     a varied and inspiring few days of
     <a href="http://phpconference.nl/schedule">excellent technical content</a> 
     including Sebastian Bergmann, Kevlin Henney, Chris Shiflett, Ilia Alshanetsky
     and many other fascinating speakers and topics.
   </p> 
   <p> 
     The event is held in Amsterdam from
     <abbr title="2010-06-10" class="dtstart">10th</abbr> to
     <abbr title="2010-06-13" class="dtend">12th June 2010</abbr>,
     for more information see the website at
     <a href="http://phpconference.nl">http://phpconference.nl</a> 
     - we hope you can join us in Amsterdam in June!
     </p> 
    </div> 
  
    </div> 
</div> 
 
<hr /> 
<div class="newsItem hentry vevent"> 
    <div class="newsImage"><a href="http://confoo.ca/en"><img src="http://static.php.net/www.php.net/images/news/logo_confoo_300_95.gif" alt="ConFoo Web Techno Conference" width="300" height="95" style="float: right;" /></a></div> 
    <h1><a name="id2010-01-16-1" id="id2010-01-16-1" href="http://confoo.ca/en" rel="bookmark" class="bookmark">ConFoo Web Techno Conference</a></h1> 
    <div class="entry-content description"> 
        <abbr class="published newsdate" title="2010-01-16T14:25:31+01:00">[16-Jan-2010]</abbr> 
        <div> 
     <p>PHP Quebec and the ConFoo team is pleased to announce the schedule of
     the <a href="http://confoo.ca/en">ConFoo Web Techno Conference</a>.
     With over 130 presentations in 8 rooms, ConFoo brings you the best of
     Web development.
     </p> 
     <p> 
     The event will take place on March 8th to 12th in Montreal, at the
     prestigious Hilton Bonaventure Hotel.
     </p> 
     <p> 
     Over 100 specialists will be present at the conference to share their
     knowledge during talks and training. Among them will be:
     <b>Rasmus Lerdorf, Terry Chay, Chris Shiflett and Morgan Tocker</b> 
     </p> 
     <p>You would not want to miss the following presentations:
     <b>HTML5: Where Are We Now? (Mark Pilgrim), Andrei\'s Regex Clinic
     (Andrei Zmievski), Security-Centered Design (Chris Shiflett) and Welcome
     to the Wild Wild Web (Carl Mercier)</b> 
     </p> 
     <p> 
     <a href="http://confoo.ca/en/register">Register</a> online before
     January 22nd and save 200$!
     <br/> 
     Looking forward to see you at the conference.
     </p> 
    </div> 
  
    </div> 
</div>

<hr />

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-12-25-1" id="id2011-12-25-1" href="#id2011-12-25-1" rel="bookmark" class="bookmark">PHP 5.4.0 RC4 released</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-12-25T01:14:52+01:00">[25-Dec-2011]</abbr>
        <div>
     <p>
       The PHP development team is proud to announce the 4th
       <a href="http://qa.php.net">release candidate</a> of PHP 5.4.
       PHP 5.4 includes new language features and removes several legacy
       (deprecated) behaviours. Windows binaries can be downloaded from the
       <a href="http://windows.php.net/qa/">Windows QA site</a>.
     </p>
     <p>
       <strong>THIS IS A RELEASE CANDIDATE - DO NOT USE IT IN PRODUCTION!</strong>.
     </p>
     <p>
       This is the 4th release candidate. The release candidate phase is intended as
       a period of bug fixing prior to the stable release. No new features should
       be included before the final version of PHP 5.4.0.
     </p>
     <p>
       The new release candidate fixed several bugs, including:
     </p>
     <ul>
       <li>Added max_input_vars directive to prevent attacks based on hash collisions</li>
       <li>Fixed a segfault in the traits code</li>
     </ul>
     <p>
       Read the <a href="https://svn.php.net/repository/php/php-src/tags/php_5_4_0RC4/NEWS">NEWS</a>
       file for a complete list of changes in this release.
     </p>
     <p>
       Please continue to help us to identify bugs in order to ensure that the release is
       solid and all things behave as expected.  Please test this release candidate
       against your code base and report any problems that you encounter to the
       <a href="mailto:php-qa@lists.php.net">QA mailing list</a> and/or the
       <a href="https://bugs.php.net/">PHP bug tracker</a>.
     </p>
     <p>
       The next release candidate will be released in 14 days.
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.phpconference.nl/"><img src="http://static.php.net/www.php.net/images/news/dpc_2012.png" alt="Dutch PHP Conference 2012" width="400" height="233" style="float: right;" /></a></div>
    <h1><a name="id2011-12-23-1" id="id2011-12-23-1" href="http://www.phpconference.nl/" rel="bookmark" class="bookmark">Dutch PHP Conference 2012</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-12-23T11:11:49+01:00">[23-Dec-2011]</abbr>
        <div>
     <p>Ibuildings is proud to organise the sixth Dutch PHP Conference on June 8 and 9, plus a pre-conference tutorial day on June 7. Both programs will be completely in English so the only Dutch thing about it is the location. Keywords for these days: Know-how, Technology, Best Practices, Networking, Tips &amp; Tricks.
     </p>
     <p>
         Website: <a href="http://www.phpconference.nl/">http://www.phpconference.nl/</a>
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-12-14-1" id="id2011-12-14-1" href="#id2011-12-14-1" rel="bookmark" class="bookmark">PHP 5.4.0RC3 released</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-12-14T15:43:13+01:00">[14-Dec-2011]</abbr>
        <div>
      <p>
        The PHP development team is proud to announce the third
        <a href="http://qa.php.net">release candidate</a> of PHP 5.4.
        PHP 5.4 includes new language features and removes several legacy 
        (deprecated) behaviours. Windows binaries can be downloaded from the 
        <a href="http://windows.php.net/qa/">Windows QA site</a>.
      </p>
      <p>
        <strong>THIS IS A RELEASE CANDIDATE - DO NOT USE IT IN PRODUCTION!</strong>.
      </p>
      <p>
        This is the third release candidate. The release candidate phase is intended as 
        a period of bug fixing prior to the stable release. No new features should
        be included before the final version of PHP 5.4.0.
      </p>
      <p>
        <strong>Changes since the previous release candidate include:</strong>
      </p>
      <ul>
        <li>The intl extension now supports UTS #46 mapping for IDNA</li>
        <li>$_SERVER[\'SERVER_NAME\'] and $_SERVER[\'SERVER_PORT\'] are now available in the builtin CLI server implementation.</li>
        <li>Several improvements and bug fixes in the Zend Engine, Core and other extensions.</li>
      </ul>
      <p>
        Read the <a href="https://svn.php.net/repository/php/php-src/tags/php_5_4_0RC3/NEWS">NEWS</a>
        file for a complete list of changes in this release.
      </p>
      <p>
        Please continue to help us to identify bugs in order to ensure that the release is
        solid and all things behave as expected.  Please test this release candidate
        against your code base and report any problems that you encounter to the
        <a href="mailto:php-qa@lists.php.net">QA mailing list</a> and/or the
        <a href="https://bugs.php.net/">PHP bug tracker</a>.
      </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-11-29-1" id="id2011-11-29-1" href="#id2011-11-29-1" rel="bookmark" class="bookmark">PHP 5.4 RC2 released</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-11-29T21:34:29+00:00">[29-Nov-2011]</abbr>
        <div>
      <p>
        The PHP development team is proud to announce the second 
        <a href="http://qa.php.net">release candidate</a> of PHP 5.4.
        PHP 5.4 includes new language features and removes several legacy 
        (deprecated) behaviours. Windows binaries can be downloaded from the 
        <a href="http://windows.php.net/qa/">Windows QA site</a>.
      </p>
      <p>
        <strong>THIS IS A RELEASE CANDIDATE - DO NOT USE IT IN PRODUCTION!</strong>.
      </p>
      <p>
        This is the second release candidate. The release candidate phase is intended as 
        a period of bug fixing prior to the stable release. No new features should
        be included before the final version of PHP 5.4.0.
      </p>
      <p>
        <strong>Changes since the previous release candidate include:</strong>
      </p>
      <ul>
        <li>Further bug fixes in the built-in web server.</li>
        <li>PHP-FPM is no longer marked as EXPERIMENTAL.</li>
        <li>Several improvements and bug fixes in the Zend Engine, Core and other extensions.</li>
      </ul>
      <p>
        Read the <a href="https://svn.php.net/repository/php/php-src/tags/php_5_4_0RC2/NEWS">NEWS</a>
        file for a complete list of changes in this release.
      </p>
      <p>
        Please continue to help us to identify bugs in order to ensure that the release is
        solid and all things behave as expected.  Please test this release candidate
        against your code base and report any problems that you encounter to the
        <a href="mailto:php-qa@lists.php.net">QA mailing list</a> and/or the
        <a href="https://bugs.php.net/">PHP bug tracker</a>.
      </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.phpday.it/"><img src="http://static.php.net/www.php.net/images/news/phpday2012.png" alt="Italian phpDay" width="250" height="120" style="float: right;" /></a></div>
    <h1><a name="id2011-11-17-1" id="id2011-11-17-1" href="http://www.phpday.it/" rel="bookmark" class="bookmark">Italian phpDay 2012</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-11-17T11:05:04+01:00">[17-Nov-2011]</abbr>
        <div>
     <p>
         The <a href="http://www.grusp.it">Italian PHP user group GrUSP</a> is pleased to
         announce the 9th edition of the <a href="http://www.phpday.it">Italian phpDay conference</a>, taking place
         on May 18th and 19th, 2012 in Verona. We will show new development
         traits, best-practices and success cases related to quality, revision
         control, test-driven development, continuous integration and so on.
         There are also talks about design, project management, agile and various
         php-related technologies.
     </p>
     <p>
         phpDay is the first historic Italian conference dedicated solely to PHP
         development, technologies and management. It is aimed to IT managers,
         developers and innovators. Each year it renews the opportunity to link
         to new business partners.
     </p>
     <p>
         The call for papers is open and will run until Feb 28th 2012. For more
         information, please visit our website: <a href="http://www.phpday.it">http://www.phpday.it</a>
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-11-11-1" id="id2011-11-11-1" href="#id2011-11-11-1" rel="bookmark" class="bookmark">PHP 5.4 RC1 released</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-11-11T00:01:11+00:00">[11-Nov-2011]</abbr>
        <div>
     <p>
      The PHP development team is proud to announce the first 
      <a href="http://qa.php.net/">release candidate</a> of PHP 5.4. 
      PHP 5.4 includes new language features and removes several legacy 
      (deprecated) behaviours. Windows binaries can be downloaded from the 
      <a href="http://windows.php.net/qa/">Windows QA site</a>.
     </p>
     <p>
      <strong>THIS IS A RELEASE CANDIDATE - DO NOT USE IT IN PRODUCTION!</strong>
     </p>
     <p>
      This is the first release candidate. No new features will be included 
      before the final version of PHP 5.4.0. The release candidate phase is 
      intended as a period of bug fixing prior to the stable release.
     </p>
     <p>
       <strong>Changes since the last beta version include:</strong>
      </p>
      <ul>
        <li>Added class member access on instantiation (e.g. (new Foo)-&gt;bar()).</li>
        <li>Changed silent conversion of array to string to produce a notice.</li>
        <li>Numerous bug fixes and improvements in the Core and other extensions.</li>
      </ul>
     <p>
      Please help us to identify bugs in order to ensure that the release is solid and 
      all things behave as expected.  Please test this release candidate against your 
      code base and report any problems that you encounter to the 
      <a href="mailto:php-qa@lists.php.net">QA mailing list</a> and/or the 
      <a href="https://bugs.php.net/">PHP bug tracker</a>.
     </p>
     <p>
      Read the <a href="http://www.php.net/releases/NEWS_5_4_0_RC1.txt">NEWS</a> file for a 
      complete list of changes in this release.
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-10-26-1" id="id2011-10-26-1" href="#id2011-10-26-1" rel="bookmark" class="bookmark">PHP 5.4 beta2 released</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-10-26T19:16:50+00:00">[26-Oct-2011]</abbr>
        <div>
      <p>
       The PHP development team is proud to announce the second <a href="http://qa.php.net/">beta release</a> of PHP 5.4.
       PHP 5.4 includes new language features and removes several legacy (deprecated) behaviours.
       Windows binaries can be downloaded from the <a href="http://windows.php.net/qa/">Windows QA site</a>.
      </p>
      <p>
       <strong>THIS IS A DEVELOPMENT PREVIEW - DO NOT USE IT IN PRODUCTION!</strong>
      </p>
      <p>
       Please help us to identify bugs by testing new features and looking for
       unintended backward compatibility breaks, so we can fix the problems and
       fully document intended changes before PHP 5.4.0 is released.
       Report findings to the <a href="mailto:php-qa@lists.php.net">QA mailing list</a> and/or
       the <a href="https://bugs.php.net/">PHP bug tracker</a>.
      </p>
      <p>
       This release includes numerous bug fixes and improvements since the first beta release.
      </p>
      <p>
       Read the <a href="http://www.php.net/releases/NEWS_5_4_0_beta2.txt">NEWS</a>
       file for a complete list of changes.
      </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.phprio.org/phpnrio11"><img src="http://static.php.net/www.php.net/images/news/phpnrio11.png" alt="PHP\'n Rio 11" width="302" height="91" style="float: right;" /></a></div>
    <h1><a name="id2011-10-06-1" id="id2011-10-06-1" href="http://www.phprio.org/phpnrio11" rel="bookmark" class="bookmark">PHP\'n Rio 11</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-10-06T16:40:59+02:00">[06-Oct-2011]</abbr>
        <div>
     <p>
               <a href="http://www.phprio.org/">The PHP Rio User Group</a>
               is pleased to announce their third edition of
               the <em>PHP\'n Rio</em> conference. It will be held on November 05th,
               2011, at the <a href="http://portal.cefet-rj.br/">CEFET-RJ university</a>,
               Rio de Janeiro. It is a one day conference aimed on providing
               experienced developers and beginners a chance to learn more about PHP
               frameworks, web applications built in PHP, and the art of testing
               code.
           </p>
     
           <p>
               Whether you live here or are around just enjoying the marvelous city,
               come and join us :) For more information, please visit
               <a href="http://www.phprio.org/phpnrio11">
                   http://www.phprio.org/phpnrio11
               </a>
               (Portuguese only).
           </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.web-devcon.de"><img src="http://static.php.net/www.php.net/images/news/webdevcon2011.jpg" alt="Web DevCon 2011" width="550" height="126" style="float: right;" /></a></div>
    <h1><a name="id2011-09-30-1" id="id2011-09-30-1" href="http://www.web-devcon.de" rel="bookmark" class="bookmark">Web DevCon 2011</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-09-30T18:43:17+02:00">[30-Sep-2011]</abbr>
        <div>
     <p>
     The Web DevCon 2011, the conference for web developers, will take place
     from 17th – 18th of October 2011 in the InterContinental in Hamburg
     (Germany). Web DevCon features trends, solutions and know-how for web
     developers: From web technology and web architecture to programming
     languages such as php, java and ruby as well as web frameworks and
     development tools.
     </p>
     <p>
     The event is aimed at web programmers, web designer, webmaster, software
     developers, agencies and project managers from advertising- and media
     agencies.
     </p>
     <p>
     Conference Tickets:
     <ul>
     <li>1-day: € 399,– plus vat/tax before 7th of September 2011
     (later booking € 499,– plus vat/tax)</li>
     <li>2-day: € 699,– plus vat/tax before 7th of September 2011
     (later booking € 799,– plus vat/tax)</li>
     <li>3-day: € 999,– plus vat/tax before 7th of September 2011
     (later booking € 1.099,– plus vat/tax)
     </li>
     </ul>
     </p>
     <p>
     Information and booking via the website: <a href="http://www.web-devcon.de">http://www.web-devcon.de</a>
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-09-27-1" id="id2011-09-27-1" href="#id2011-09-27-1" rel="bookmark" class="bookmark">PHP 5.4 beta1 released</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-09-27T01:05:49+02:00">[27-Sep-2011]</abbr>
        <div>
      <p>
       The PHP development team is proud to announce the first <a href="http://qa.php.net/">beta release</a> of PHP 5.4.
       PHP 5.4 includes new language features and removes several legacy (deprecated) behaviors.
       Windows binaries can be downloaded from the <a href="http://windows.php.net/qa/"> Windows QA site</a>.
      </p>
      <p>
       <strong>THIS IS A DEVELOPMENT PREVIEW - DO NOT USE IT IN PRODUCTION!</strong>
      </p>
      <p>
       New features were added and bugs were fixed since alpha1.
       Please help us to identify bugs by testing new features and looking for
       unintended backward compatability breaks, so we can fix the problems and
       fully document intended changes before PHP 5.4.0 is released.
       Report findings to the <a href="mailto:php-qa@lists.php.net">QA mailing list</a> and/or
       the <a href="https://bugs.php.net/">PHP bug tracker</a>.
      </p>
      <p>
       <strong>Changes since the first alpha version include:</strong>
      </p>
      <ul>
        <li>Added callable typehint.</li>
        <li>Removed the timezone guessing algorithm. "UTC" is now used in case the timezone is not set.</li>
        <li>The mysql, mysqli and pdo_mysql extensions now use mysqlnd by default.</li>
      </ul>
      <p>
        Read the <a href="http://www.php.net/releases/NEWS_5_4_0_beta1.txt">NEWS</a>
        file for a complete list of changes.
      </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://phpconference.es/"><img src="http://static.php.net/www.php.net/images/news/PHPBarcelonaConference2011.png" alt="PHP Barcelona 2011" width="500" height="100" style="float: right;" /></a></div>
    <h1><a name="id2011-09-15-1" id="id2011-09-15-1" href="http://phpconference.es/" rel="bookmark" class="bookmark">PHP Barcelona 2011</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-09-15T08:46:28+02:00">[15-Sep-2011]</abbr>
        <div>
     <p>
     The <a href="http://phpbarcelona.org/">PHP Barcelona User Group</a> is proud
     to announce that the 5th edition of the <a href="http://phpconference.es/">PHP
     Barcelona Conference</a> is here!
     </p>
     
     <p>
     There will be 30 one-hour talks and workshops in two days with three
     parallel tracks, covering many PHP development subjects such as Application
     Scalability, High Performance, Frameworks and IDEs, Continuous Integration,
     Unit Testing, Best Practices, Cloud Computing, and many more topics and
     surprises.
     </p>
     
     <p>
     The conference will take place from the 28th to the 29th of October and will
     bring together <strong>Rasmus Lerdorf</strong>, <strong>Derick
     Rethans</strong>, <strong>Fabien Potencier</strong>, <strong>Marco
     Tabini</strong> and many more of the shiniest names in the industry for two
     fun-packed days of intensive PHP.
     </p>
     
     <p>
     For registration and more info about it, please visit
     <a href="http://phpconference.es/">http://phpconference.es</a>
     </p>
     <p>
     Hope to see you in Barcelona!
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://conference.phpbenelux.eu/2012/"><img src="http://static.php.net/www.php.net/images/news/phpbnl2012.png" alt="PHPBenelux 2012" width="347" height="68" style="float: right;" /></a></div>
    <h1><a name="id2011-09-12-1" id="id2011-09-12-1" href="http://conference.phpbenelux.eu/2012/" rel="bookmark" class="bookmark">PHPBenelux 2012</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-09-12T11:52:55+02:00">[12-Sep-2011]</abbr>
        <div>
     <p>The PHPBenelux Conference is ready for its third edition and takes place
     January 27th &amp; 28th in Antwerp (Belgium). We\'re
     <a href="http://conference.phpbenelux.eu/2012/call-for-papers/">calling for papers</a>
     until October 15th and we\'re very much looking forward to your submissions.
     </p>
     <p>
     These are the topics we\'re aiming for:
     </p>
     
     <ul>
     <li>Content Management Systems</li>
     <li>Cloud</li>
     <li>NoSQL</li>
     <li>Analytics</li>
     <li>Frameworks</li>
     <li>Best practises</li>
     <li>General and in depth programming skills</li>
     <li>HTML5 &amp; co (with a PHP twist)</li>
     </ul>
     
     <p>
     All information about the conference and the CFP can be found on our
     <a href="http://conference.phpbenelux.eu/2012">conference website</a>.
     Schedule and ticket information will be announced early November
     </p>
     
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-08-23-1" id="id2011-08-23-1" href="#id2011-08-23-1" rel="bookmark" class="bookmark">PHP 5.3.8 Released!</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-08-23T17:08:45+02:00">[23-Aug-2011]</abbr>
        <div>
     <p>The PHP development team would like to announce the immediate
     availability of PHP 5.3.8. This release fixes two issues introduced in
     the PHP 5.3.7 release:</p>
     
     <ul>
         <li>Fixed bug <a href="https://bugs.php.net/bug.php?id=55439">#55439</a> (crypt() returns only the salt for MD5)</li>
         <li>Reverted a change in timeout handling restoring PHP 5.3.6 behavior,
          which caused mysqlnd SSL connections to hang (Bug #55283).</li>
     </ul>
     
     <p>All PHP users should note that the PHP 5.2 series is NOT supported
        anymore. All users are strongly encouraged to upgrade to PHP 5.3.8.</p>

     <p>For a full list of changes in PHP 5.3.8, see the <a href="http://www.php.net/ChangeLog-5.php#5.3.8">ChangeLog</a>. For source downloads please
        visit our <a href="http://www.php.net/downloads.php">downloads page</a>, Windows binaries
    can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.</p>
    <p>
         <strong>For more details on the crypt() blowfish security issue in pre 5.3.6 see <a href="http://php.net/security/crypt_blowfish">the crypt blowfish page</a></strong>
    </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-08-22-1" id="id2011-08-22-1" href="#id2011-08-22-1" rel="bookmark" class="bookmark">5.3.7 upgrade warning</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-08-22T10:02:44+02:00">[22-Aug-2011]</abbr>
        <div>
     <p>
         Due to unfortunate issues with 5.3.7 (see <a href="https://bugs.php.net/bug.php?id=55439">bug#55439</a>)
         users should postpone upgrading until 5.3.8 is released (expected in a few days).
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.zendcon.com/"><img src="http://static.php.net/www.php.net/images/news/zendcon_Logo_2011_225wide.jpg" alt="ZendCon 2011" width="225" height="151" style="float: right;" /></a></div>
    <h1><a name="id2011-08-19-1" id="id2011-08-19-1" href="http://www.zendcon.com/" rel="bookmark" class="bookmark">Zend PHP Conference 2011 (ZendCon)</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-08-19T12:04:13+02:00">[19-Aug-2011]</abbr>
        <div>
     <p>
     The Zend PHP Conference (ZendCon) is the largest gathering of the PHP Community and brings together PHP developers and IT managers from around the world to discuss PHP best practices and explore new technologies.
     </p>
     
     <p>This year’s conference will be held on October 17-20, 2011 at the Convention Center in Santa Clara, California. The conference will include a variety of technical sessions and in-depth tutorials in the following areas:
     <ul>
     <li>Cloud Computing - build applications, not infrastructure.<br/>Learn about the latest developments in PHP Cloud infrastructure, management and application services</li>
     <li>Mobile and User Experience - go beyond the browser<br/>Learn how to build engaging mobile apps with the latest PHP technologies and tools</li>
     <li>Enterprise and Professional PHP - master your craft<br/>Explore PHP best practices, new technologies and practical tips with industry experts</li>
     </ul>
     </p>
     <p>
     For more details and to register for ZendCon, visit the website at: http://www.zendcon.com/
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-08-18-1" id="id2011-08-18-1" href="#id2011-08-18-1" rel="bookmark" class="bookmark">PHP 5.3.7 Released!</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-08-18T10:02:24-04:00">[18-Aug-2011]</abbr>
        <div>
     <p>The PHP development team would like to announce the immediate
     availability of PHP 5.3.7. This release focuses on improving the
     stability of the PHP 5.3.x branch with over 90 bug fixes, some of which
     are security related.</p>
     
     <p><b>Security Enhancements and Fixes in PHP 5.3.7:</b></p>
     <ul>
         <li>Updated crypt_blowfish to 1.2. (CVE-2011-2483) <a href="http://php.net/security/crypt_blowfish">(more info)</a></li>
         <li>Fixed crash in error_log(). Reported by Mateusz Kocielski</li>
         <li>Fixed buffer overflow on overlog salt in crypt().</li>
         <li>Fixed bug #54939 (File path injection vulnerability in RFC1867 File upload filename). Reported by Krzysztof Kotowicz. (CVE-2011-2202)</li>
         <li>Fixed stack buffer overflow in socket_connect(). (CVE-2011-1938)</li>
         <li>Fixed bug #54238 (use-after-free in substr_replace()). (CVE-2011-1148)</li>
     </ul>
     
     <p><b>Key enhancements in PHP 5.3.7 include:</b></p>
     <ul>
         <li>Upgraded bundled Sqlite3 to version 3.7.7.1</li>
         <li>Upgraded bundled PCRE to version 8.12</li>
         <li>Fixed bug #54910 (Crash when calling call_user_func with unknown function name)</li>
         <li>Fixed bug #54585 (track_errors causes segfault)</li>
         <li>Fixed bug #54262 (Crash when assigning value to a dimension in a non-array)</li>
         <li>Fixed a crash inside dtor for error handling</li>
         <li>Fixed bug #55339 (Segfault with allow_call_time_pass_reference = Off)</li>
         <li>Fixed bug #54935 php_win_err can lead to crash</li>
         <li>Fixed bug #54332 (Crash in zend_mm_check_ptr // Heap corruption)</li>
         <li>Fixed bug #54305 (Crash in gc_remove_zval_from_buffer)</li>
         <li>Fixed bug #54580 (get_browser() segmentation fault when browscap ini directive is set through php_admin_value)</li>
         <li>Fixed bug #54529 (SAPI crashes on apache_config.c:197)</li>
         <li>Fixed bug #54283 (new DatePeriod(NULL) causes crash).</li>
         <li>Fixed bug #54269 (Short exception message buffer causes crash)</li>
         <li>Fixed Bug #54221 (mysqli::get_warnings segfault when used in multi queries)</li>
         <li>Fixed bug #54395 (Phar::mount() crashes when calling with wrong parameters)</li>
         <li>Fixed bug #54384 (Dual iterators, GlobIterator, SplFileObject and SplTempFileObject crash when user-space classes don\'t call the parent constructor)</li>
         <li>Fixed bug #54292 (Wrong parameter causes crash in SplFileObject::__construct())</li>
         <li>Fixed bug #54291 (Crash iterating DirectoryIterator for dir name starting with \0)</li>
         <li>Fixed bug #54281 (Crash in non-initialized RecursiveIteratorIterator)</li>
         <li>Fixed bug #54623 (Segfault when writing to a persistent socket after closing a copy of the socket)</li>
         <li>Fixed bug #54681 (addGlob() crashes on invalid flags)</li>
         <li>Over 80 other bug fixes.</li>
     </ul>
     
     <p>Windows users: please mind that we do no longer provide builds created
     with Visual Studio C++ 6. It is impossible to maintain a high quality
     and safe build of PHP for Windows using this unmaintained compiler.</p>
     
     <p>For Apache SAPIs (php5_apache2_2.dll), be sure that you use a Visual
     Studio C++ 9 version of Apache. We recommend the Apache builds as provided
     by <a href="http://www.apachelounge.com/">ApacheLounge</a>. For any other
     SAPI (CLI, FastCGI via mod_fcgi, FastCGI with IIS or other FastCGI capable
     server), everything works as before. Third party extension providers
     must rebuild their extensions to make them compatible and loadable with
     the Visual Studio C++9 builds that we now provide.</p>
     
     <p>All PHP users should note that the PHP 5.2 series is NOT supported
     anymore. All users are strongly encouraged to upgrade to PHP 5.3.7.</p>
    </div>

    <p xmlns="http://www.w3.org/2005/Atom">For a full list of changes in PHP 5.3.7, see the
     <a href="http://www.php.net/ChangeLog-5.php#5.3.7">ChangeLog</a>. For source downloads
     please visit our <a href="http://www.php.net/downloads.php">downloads page</a>, Windows
     binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.</p>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://confoo.ca/en"><img src="http://static.php.net/www.php.net/images/news/confoo2012.gif" alt="ConFoo 2012" width="300" height="95" style="float: right;" /></a></div>
    <h1><a name="id2011-08-11-1" id="id2011-08-11-1" href="http://confoo.ca/en" rel="bookmark" class="bookmark">ConFoo 2012</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-08-11T18:10:12+02:00">[11-Aug-2011]</abbr>
        <div>
     <p>We just launched ConFoo 2012 edition and are presently calling for papers.
     We are looking for the best speakers willing to share their skills and
     experience with developers and managers. ConFoo is a community driven
     conference dedicated to Web technologies.</p>
     
     <p>The conference will be held in Montreal from February 29th to March 2nd,
     2012 at the prestigious Hotel Hilton Bonaventure. We will also have two days
     of private training. The topics will be revealed later this year.</p>
     
     <p>Talk proposals must be received by September 2nd and may be written in English
     or French.</p>
     
     <p>For more information and updates, visit our Website:
     <a href="http://confoo.ca/en">http://confoo.ca/en</a>.</p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-06-28-1" id="id2011-06-28-1" href="#id2011-06-28-1" rel="bookmark" class="bookmark">PHP 5.4 alpha1 released</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-06-28T23:34:42+02:00">[28-Jun-2011]</abbr>
        <div> 
     <p>
      The PHP development team is proud to announce the first PHP 5.4 <a href="http://qa.php.net/">alpha release</a>.
      PHP 5.4 includes new language features and removes several legacy (deprecated) behaviors.
      Read the <a href="http://www.php.net/releases/NEWS_5_4_0_alpha1.txt">NEWS</a>
      file for a complete list of changes.
     </p>
     <p>
      <strong>THIS IS A DEVELOPMENT PREVIEW - DO NOT USE IT IN PRODUCTION!</strong>
     </p>
     <p>
      This alpha release exists to encourage users to identify bugs, and
      to ensure that all new features and backward compatibility breaks are evaluated
      and documented before PHP 5.4.0 is released. Please report findings to
      the <a href="mailto:php-qa@lists.php.net">QA mailing list</a> and/or
      the <a href="https://bugs.php.net/">PHP bug tracker</a>. Windows binaries
      can be downloaded from the <a href="http://windows.php.net/qa/">
      Windows QA site</a>.
     </p> 
     <p>
      Here is an incomplete list of changes:
     </p>
     <ul> 
       <li>Added: Traits language construct</li>
       <li>Added: Array dereferencing support</li>
       <li>Added: DTrace support</li>
       <li>Improved: Improved Zend Engine memory usage and performance</li>
       <li>Moved: ext/sqlite moved to pecl (sqlite3 support is still built-in)</li>
     </ul>
     <p>
      Please note that some legacy features have been removed, including:
     </p>
     <ul>
       <li>Removed: break/continue $var syntax</li>
       <li>Removed: register_globals, allow_call_time_pass_reference, and register_long_arrays ini options</li>
       <li>Removed: session_is_registered(), session_registered(), and session_unregister()</li>
     </ul>
     <p>
         This is the first release that adopts the
         <a href="https://wiki.php.net/rfc/releaseprocess/">releaseprocess RFC</a>.
         The next alpha will be released within four weeks. The PHP 5.4 feature
         set and API has not been finalized.
     </p> 
    </div> 
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-06-25-1" id="id2011-06-25-1" href="#id2011-06-25-1" rel="bookmark" class="bookmark">PHP Documentation update</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-06-25T15:05:28-07:00">[25-Jun-2011]</abbr>
        <div>

     <p>
      PHP has several new documentation features that the community should be aware of:
     </p>
     <ul>
     <li>pman - PHP man pages
     <ul>
     <li>$ pear install doc.php.net/pman</li>
     <li>$ pman strlen (this example displays a local textual version of the strlen docs)</li>
     </ul>
     </li>
     <li>Enhanced CHM - contains user notes (over 25,000)
     <ul>
     <li>This additional CHM file is <a href="http://www.php.net/download-docs.php">downloadable</a></li>
     </ul>
     </li>
     <li>Online Documentation Editor - allows everyone to edit the PHP manual
     <ul>
     <li>URL: <a href="https://edit.php.net/">https://edit.php.net/</a></li>
     <li>Every manual page will link to it in the future</li>
     <li>Includes an IRC window to the #php.doc channel, so let\'s talk</li>
     </ul>
     </li>
     </ul>
     <p>
      We hope you find the above features useful, and please write <a href="mailto:phpdoc@lists.php.net">phpdoc@lists.php.net</a> with feedback.
      Additional features are being refined, which includes a JSON version of the manual.
     </p>

    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://2011.osidays.com/blog/php-days-call-paper"><img src="http://static.php.net/www.php.net/images/news/OSIDays2011.png" alt="PHP Days | OSI Days" width="250" height="263" style="float: right;" /></a></div>
    <h1><a name="id2011-06-10-1" id="id2011-06-10-1" href="http://2011.osidays.com/blog/php-days-call-paper" rel="bookmark" class="bookmark">PHP Days | OSI Days</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-06-10T06:33:32-07:00">[10-Jun-2011]</abbr>
        <div>
     <p>
     Come and speak at PHP Days, co-organized with OSI Days which will be held in
     Bangalore, India on 20-21 November 2011. This year will be the 8th edition of
     OSI Days.  This special conference is designed to bring focused attention to
     PHP.  The last day of submission is June 20, 2011.  This edition of <em>PHP Days
     | OSI Days</em> will have special focus on:
     </p>
     <ul>
      <li>Enterprise and Professional PHP</li>
      <li>Quality Management in PHP</li>
      <li>PHP in Cloud</li>
     </ul>
     <p>
      <a href="http://2011.osidays.com/blog/php-days-call-paper">Submit a proposal now!</a>
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://conference.phpnw.org.uk/phpnw11/"><img src="http://static.php.net/www.php.net/images/news/phpnw11_200x66.png" alt="PHPNW11" width="200" height="66" style="float: right;" /></a></div>
    <h1><a name="id2011-05-30-1" id="id2011-05-30-1" href="http://conference.phpnw.org.uk/phpnw11/" rel="bookmark" class="bookmark">PHP North West, 2011</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-05-30T15:59:07+02:00">[30-May-2011]</abbr>
        <div>
     <p>The <a href="http://conference.phpnw.org.uk/phpnw11/">PHP North West
     conference</a> returns in 2011 with the usual great selection of
     technical content for you to enjoy!</p>
     <p>
     We\'re at Ramada Hotel on Picadilly Gardens right in the centre of
     Manchester on October 8th and 9th (Saturday and Sunday) with some
     excellent talks.  For those looking for more in-depth technical
     learning, we\'re adding a tutorial day this year; join us on Friday 7th
     October for a full day of workshop format sessions with industry
     leaders - and every ticket includes a pass to the main conference!
     </p>
     <p>
     Our call for papers runs until June 12th 2011, and whether you join us
     as a speaker, a sponsor, or an attendee, we know you\'ll have a great
     time.  PHPNW is a fun weekend of PHP and technology with an excellent
     crowd to hang out with - hope to see you there :)
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.phpconference.nl/"><img src="http://static.php.net/www.php.net/images/news/dpc11_banner.png" alt="Dutch PHP Conference 2011" width="200" height="126" style="float: right;" /></a></div>
    <h1><a name="id2011-04-06-1" id="id2011-04-06-1" href="http://www.phpconference.nl/" rel="bookmark" class="bookmark">Dutch PHP Conference 2011</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-04-06T16:07:54+02:00">[06-Apr-2011]</abbr>
        <div>
     <p>
     Ibuildings is proud to organise the fifth <a href="http://www.phpconference.nl/">Dutch PHP Conference</a> on May 20 and 21, plus a pre-conference tutorial day on May 19.
     </p>
     <p>
     Both programs will be completely in English so the only Dutch thing about it is the location. <br/>
     Keywords for these days: Know-how, Technology, Best Practices, Networking, Tips &amp; Tricks.
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://www.phpday.it/"><img src="http://static.php.net/www.php.net/images/news/phpday2011.png" alt="Italian phpDay" width="250" height="120" style="float: right;" /></a></div>
    <h1><a name="id2011-04-04-1" id="id2011-04-04-1" href="http://www.phpday.it/" rel="bookmark" class="bookmark">Italian phpDay 2011</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-04-04T17:23:04+02:00">[04-Apr-2011]</abbr>
        <div>
     <p>
     The <a href="http://www.grusp.it">Italian PHP user group GrUSP</a> is pleased to
     announce the 8th edition of the <a href="http://www.phpday.it">Italian phpDay</a>
     conference, taking place from May 12th to 14th, 2011 in Verona. We will
     show new development traits, best-practices and success cases related to
     quality, revision control, test-driven development, continuous
     integration and so on. There are also talks about design, project
     management, agile and various php-related technologies.
     </p>
     
     <p>
     phpDay is the first historic Italian conference dedicated solely to PHP
     development, technologies and management. It is aimed to IT managers,
     developers and innovators. Each year it renews the opportunity to link
     to new business partners.
     </p>
     
     <p>
     <a href="http://www.phpday.it">phpDay</a> introduces the most important
     international PHP gurus to italian
     and european developers. Tree tracks, three days of talks and workshops:
     you can learn best-practices, good methodologies, case histories about
     quality assurance, and have a broader view on development and innovation
     with PHP.
     </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-03-19-1" id="id2011-03-19-1" href="#id2011-03-19-2" rel="bookmark" class="bookmark">php.net security notice</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-03-19T11:20:04-07:00">[19-Mar-2011]</abbr>
        <div>
     <p>The wiki.php.net box was compromised and the attackers were able to
     collect wiki account credentials. No other machines in the php.net
     infrastructure appear to have been affected. Our biggest concern is,
     of course, the integrity of our source code. We did an extensive code
     audit and looked at every commit since 5.3.5 to make sure that no stolen
     accounts were used to inject anything malicious. Nothing was found.
     The compromised machine has been wiped and we are forcing a password
     change for all svn accounts.</p>
     
     <p>We are still investigating the details of the attack which combined a
     vulnerability in the Wiki software with a Linux root exploit.</p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-03-17-1" id="id2011-03-17-1" href="#id2011-03-17-1" rel="bookmark" class="bookmark">PHP 5.3.6 Released!</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-03-17T13:43:21+00:00">[17-Mar-2011]</abbr>
        <div>
     <p>The PHP development team would like to announce the immediate
     availability of PHP 5.3.6. This release focuses on improving the
     stability of the PHP 5.3.x branch with over 60 bug fixes, some of which
     are security related.</p>
     
     <p><b>Security Enhancements and Fixes in PHP 5.3.6:</b></p>
     <ul>
     <li>Enforce security in the fastcgi protocol parsing with fpm SAPI.</li>
     <li>Fixed bug #54247 (format-string vulnerability on Phar). (CVE-2011-1153)</li>
     <li>Fixed bug #54193 (Integer overflow in shmop_read()). (CVE-2011-1092)</li>
     <li>Fixed bug #54055 (buffer overrun with high values for precision ini setting).</li>
     <li>Fixed bug #54002 (crash on crafted tag in exif). (CVE-2011-0708)</li>
     <li>Fixed bug #53885 (ZipArchive segfault with FL_UNCHANGED on empty archive). (CVE-2011-0421)</li>
     </ul>
     
     <p><b>Key enhancements in PHP 5.3.6 include:</b></p>
     <ul>
     <li>Upgraded bundled Sqlite3 to version 3.7.4.</li>
     <li>Upgraded bundled PCRE to version 8.11.</li>
     <li>Added ability to connect to HTTPS sites through proxy with basic authentication using stream_context/http/header/Proxy-Authorization.</li>
     <li>Added options to debug backtrace functions.</li>
     <li>Changed default value of ini directive serialize_precision from 100 to 17.</li>
     <li>Fixed Bug #53971 (isset() and empty() produce apparently spurious runtime error).</li>
     <li>Fixed Bug #53958 (Closures can\'t \'use\' shared variables by value and by reference).</li>
     <li>Fixed bug #53577 (Regression introduced in 5.3.4 in open_basedir with a trailing forward slash).</li>
     <li>Over 60 other bug fixes.</li>
     </ul>
     
     <p>Windows users: please mind that we do no longer provide builds created
     with Visual Studio C++ 6. It is impossible to maintain a high quality
     and safe build of PHP for Windows using this unmaintained compiler.
     </p>
     
     <p>For Apache SAPIs (php5_apache2_2.dll), be sure that you use a Visual
     Studio C++ 9 version of Apache. We recommend the Apache builds as provided
     by <a href="http://www.apachelounge.com/">ApacheLounge</a>. For any other SAPI (CLI,
     FastCGI via mod_fcgi, FastCGI with IIS or other FastCGI capable
     server), everything works as before. Third party extension providers
     must rebuild their extensions to make them compatible and loadable with
     the Visual Studio C++ 9 builds that we now provide.
     </p>
     
     <p>All PHP users should note that the PHP 5.2 series is NOT supported anymore. All users
     are strongly encouraged to upgrade to PHP 5.3.6.</p>

     <p>For a full list of changes in PHP 5.3.6, see the
     <a href="http://www.php.net/ChangeLog-5.php#5.3.6">ChangeLog</a>. For source downloads
     please visit our <a href="http://www.php.net/downloads.php">downloads page</a>, Windows
     binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.</p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry vevent">
    <div class="newsImage"><a href="http://phpcon.org/"><img src="http://static.php.net/www.php.net/images/news/phpcomcon2011.jpg" alt="PHP Community Conference" width="250" height="115" style="float: right;" /></a></div>
    <h1><a name="id2011-03-03-1" id="id2011-03-03-1" href="http://phpcon.org/" rel="bookmark" class="bookmark">PHP Community Conference</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-03-03T04:05:38+00:00">[03-Mar-2011]</abbr>
        <div>
      <p>
        The <a href="http://phpcon.org/">PHP Community Conference</a> is
        a conference by and for the PHP community. It\'s for people who care
        about PHP and what they make with it.
      </p>
      <p>
        Inspired by conferences like <a href="http://www.webstock.org.nz/">Webstock</a>
        and <a href="http://brooklynbeta.org/">Brooklyn Beta</a>, we want
        to make a friendly conference for us. Together with our friends and
        peers, we (<a href="http://twitter.com/ramsey">Ben</a>,
        <a href="http://twitter.com/lisamusing">Lisa</a>, and
        <a href="http://twitter.com/NickASloan">Nick</a>) aim to inspire you
        to make great things with PHP.
      </p>
      <p>
        The PHP Community Conference is a two-day event, taking place April
        21st and 22nd, 2011 in Nashville, TN. We have an
        <a href="http://phpcon.org/speakers">awesome line-up of speakers</a>,
        including a keynote address by <strong>Rasmus Lerdorf</strong>.
      </p>
      <p>
        We\'ll kick things off with a tutorial day that will introduce you
        to tools and ideas that you can use in your code right away. The
        second day will consist of presentations that will inspire you to
        create something new with PHP. With the help of our sponsors, we
        are able to offer admission to the entire event for $350 USD. We\'ll
        provide lunch and snacks on both days. On Friday night, we\'ll
        finish off the conference with a party featuring
        <a href="http://en.wikipedia.org/wiki/Pecha_Kucha">pecha kucha</a>
        talks by our awesome attendees.
      </p>
      <p>
        For more information and to register, check out our website at
        <a href="http://phpcon.org/">phpcon.org</a>.
      </p>
      <p>
        See you in Nashville!
      </p>
    </div>
  
    </div>
</div>

<hr />
<div class="newsItem hentry">
    <div class="newsImage"></div>
    <h1><a name="id2011-01-06-1" id="id2011-01-06-1" href="#id2011-01-06-1" rel="bookmark" class="bookmark">PHP 5.3.5 and 5.2.17 Released!</a></h1>
    <div class="entry-content description">
        <abbr class="published newsdate" title="2011-01-06T13:34:56-08:00">[06-Jan-2011]</abbr>
        <div>
    <p>
     The PHP development team would like to announce the immediate
     availability of PHP <a href="http://www.php.net/releases/5_3_5.php">5.3.5</a> and <a href="http://www.php.net/releases/5_2_17.php">5.2.17</a>.
    </p>
    <p>
     This release resolves a critical issue, reported as PHP bug #53632 and
     CVE-2010-4645, where conversions from string to double might cause the PHP
     interpreter to hang on systems using x87 FPU registers.
    </p>
    <p>
     The problem is known to only affect x86 32-bit PHP processes, regardless
     of whether the system hosting PHP is 32-bit or 64-bit. You can test
     whether your system is affected by running <a href="http://www.php.net/distributions/test_bug53632.txt">this script</a>
     from the command line.
    </p>
    <p>
     All users of PHP are strongly advised to update to these versions
     immediately.
    </p>
    </div>
  
    </div>
</div>

';

$entries = array();
foreach(explode("<hr />", $str) as $entry){
	
	if(preg_match('#<h1>(.+)</h1>#isU', $entry, $matches)){
		$dataEntry = array();
		$dataEntry['title'] = trim(strip_tags($matches[1]));
		$dataEntry['content'] = str_replace($matches[0], '', $entry);
		if(preg_match('#<span class="newsdate">\[(.+)\]</span>#isU', $entry, $matches)){
			$published = date_parse($matches[1]);
			$dataEntry['published'] = mktime(0, 0, 0, $published['month'], $published['day'], $published['year']);
			$dataEntry['year'] = $published['year'];
			$dataEntry['content'] = trim(str_replace($matches[0], '', $dataEntry['content']));
		} else {
			if(preg_match('#<abbr (.*)>\[(.+)\]</abbr>#isU', $entry, $matches)){
				$published = date_parse($matches[2]);
				$dataEntry['published'] = mktime(0, 0, 0, $published['month'], $published['day'], $published['year']);
				$dataEntry['year'] = $published['year'];
				$dataEntry['content'] = trim(str_replace($matches[0], '', $dataEntry['content']));
			} else {
				var_dump($dataEntry);
			}
		}
		$entries[] = $dataEntry;
	}
}

$modelManager = new Phalcon_Model_Manager();
$modelManager->setModelsDir(__DIR__.'/'.$config->phalcon->modelsDir);

Phalcon_Db_Pool::setDefaultDescriptor($config->database);

foreach($entries as $entry){

	$shortTitle = preg_replace('/[ ]+/', '-', $entry['title']);
	$shortTitle = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', $shortTitle));
	$shortTitle = preg_replace('/[\-]+/', '-', $shortTitle);

	$news = News::findFirst("short_title='$shortTitle'");
	if($news==false){
		$news = new News($modelManager);
		$news->short_title = $shortTitle;
		$news->title = addslashes($entry['title']);		
		$news->year = $entry['year'];
		$news->published = $entry['published'];		
		$news->updated = $entry['published'];
		$news->content = addslashes($entry['content']);		
		if($news->save()==false){
			foreach($news->getMessages() as $message){
				echo 'Error while inserting News: ', $message->getMessage(), PHP_EOL;
				return;
			}
		}
	}

}