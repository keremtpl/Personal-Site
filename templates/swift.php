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
include("components/config.php");
?>
<!DOCTYPE html>

<!-- Site Codename: SWIFT -->
<!--
*  Personal Site: My humble personal homepage, made with a tiny bit but not much care.
*  <https://github.com/MattIPv4/Personal-Site/>
*  Copyright (C) 2018 Matt Cowley (MattIPv4) (me@mattcowley.co.uk)
*  Please see <https://github.com/MattIPv4/Personal-Site/blob/master/LICENSE.md> for the full license.
-->

<html>
<head>
    <?php include("components/head.php"); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700"/>
    <link rel="stylesheet" href="/css/swift<?php echo(isset($_GET['dev']) ? '' : '.min'); ?>.css"/>
</head>

<body>
<div class="code">
    <h1>
        <span style="color: #97C774">H</span><span style="color: #B63E98">e</span><span
                style="color: #D18E62">l</span><span style="color: #DB3E41">l</span><span
                style="color: #1BABA5">o</span>, I'm <?php echo $name; ?>. <span class="cursor">|</span>
    </h1>

    <?php foreach ($motto as $msg) { ?>
        <h3>
            <?php if (!$msg[1]) { ?>
                <span class="print-cmd">print</span>(<span class="print-txt">"<?php echo $msg[0]; ?>"</span>)
            <?php } else { ?>
                <span class="comment">/* <?php echo $msg[0]; ?> */</span>
            <?php } ?>
        </h3>
    <?php } ?>

    <h3>
        <span class="let">let</span> Contact =
        <span class="func-cmd">email</span>("<a class="func-txt"
                                                href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>")
    </h3>

    <h3><span class="comment">/* ---------------------------------------------------- */</span></h3>

    <h3>
        <span class="let">let</span> Me = <span class="func-cmd">links</span>([

        <?php foreach ($links as $linkData) {
            $linkTitle = explode(".", $linkData[0], 2); ?>
            <br/>&nbsp;&nbsp;&nbsp;&nbsp;"<a class="func-txt" href="http://<?php echo $linkData[0]; ?>/"
                                             target="_blank">
                <span class="print-cmd"><?php echo $linkTitle[0]; ?></span>.<?php echo $linkTitle[1]; ?>
            </a>"<?php echo(end($links) == $linkData ? "" : ","); ?>
            <?php if (count($linkData) > 1 && !empty($linkData[1])) { ?>
                <a class="comment" href="http://<?php echo $linkData[0]; ?>/" target="_blank">
                    /* <?php echo $linkData[1]; ?> */</a>
            <?php } ?>
        <?php } ?>
        <br/>], <span class="let-var"><?php echo(rand(0, 1) ? 'true' : 'false'); ?></span>)

    </h3>

    <h3>
        <span class="let">class</span>
        <span class="print-cmd"> FeaturedProjects</span> <span class="func-cmd">{</span>
    </h3>

    <?php include("components/projects.php"); ?>

    <h3>
        <span class="func-cmd">}</span>
        <span class="comment"> /* End FeaturedProjects class */</span>
    </h3>

    <?php include("components/themes.php"); ?>
</div>

<?php //include("components/notif.php"); ?>
</body>
</html>
