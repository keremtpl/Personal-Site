<?php
/**
 *  Personal Site: My humble personal homepage, made with a tiny bit but not much care.
 *  <https://github.com/MattIPv4/Personal-Site/>
 *  Copyright (C) 2018 Matt Cowley (MattIPv4) (me@mattcowley.co.uk)
 *
 *  This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published
 *   by the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *  This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *  You should have received a copy of the GNU General Public License
 *   along with this program. If not, please see
 *   <https://github.com/MattIPv4/Personal-Site/blob/master/LICENSE.md> or <http://www.gnu.org/licenses/>.
 */
?>
<link rel="icon" type="image/png" href="me.png"/>
<link rel="shortcut-icon" type="image/png" href="me.png"/>
<link rel="apple-touch-icon" type="image/png" href="me.png"/>

<title><?php echo $name; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1"/>

<meta name="title"
      content="<?php echo $name; ?>"/>

<meta name="description"
      content="<?php echo $name; ?>: <?php echo implode(" | ", $motto); ?>"/>

<meta name="keywords"
      content="matt, cowley, matt cowley, ipv4, matt ipv4, mattipv4, matt ipv4 cowley, matt (ipv4) cowley, website, websites, site, sites, homepage, matt website, matt ipv4 website, ipv4 website, matt site, matt ipv4 site, ipv4 site, theatre, theater, technical, technician, tech, theatre technician, theater technician, theatre tech, theater tech"/>

<meta name="viewport"
      content="width=device-width, initial-scale=1"/>

<meta rel="image_src"
      content="https://mattcowley.co.uk/header.png"/>

<link rel="canonical"
      href="https://mattcowley.co.uk/"/>

<meta name="canonicalURL"
      content="https://mattcowley.co.uk/"/>

<meta name="twitter:card"
      content="summary_large_image">

<meta name="twitter:site"
      content="https://mattcowley.co.uk/"/>

<meta name="twitter:creator"
      content="@MattIPv4"/>

<meta name="twitter:title"
      content="<?php echo $name; ?>"/>

<meta name="twitter:description"
      content="<?php echo $name; ?>: <?php echo implode(" | ", $motto); ?>">

<meta name="twitter:image"
      content="https://mattcowley.co.uk/header.png"/>

<meta name="twitter:url"
      content="https://mattcowley.co.uk/"/>

<meta prefix="og: http://ogp.me/ns#" property="og:title"
      content="<?php echo $name; ?>"/>

<meta prefix="og: http://ogp.me/ns#" property="og:type"
      content="website"/>

<meta prefix="og: http://ogp.me/ns#" property="og:locale"
      content="en_GB"/>

<meta prefix="og: http://ogp.me/ns#" property="og:site_name"
      content="<?php echo $name; ?>"/>

<meta prefix="og: http://ogp.me/ns#" property="og:description"
      content="<?php echo $name; ?>: <?php echo implode(" | ", $motto); ?>"/>

<meta prefix="og: http://ogp.me/ns#" property="og:url"
      content="https://mattcowley.co.uk/"/>

<meta prefix="og: http://ogp.me/ns#" property="og:image"
      content="https://mattcowley.co.uk/header.png"/>

<meta prefix="og: http://ogp.me/ns#" property="og:image:url"
      content="https://mattcowley.co.uk/header.png"/>

<meta name="theme-color" content="#7289DA"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113826252-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-113826252-1');
</script>