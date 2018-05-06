<?php

///////////////////////////////////////////////////
// BEGIN TUTORIAL ON ADDING IN YOUR CUSTOM LINKS //
///////////////////////////////////////////////////
//
// ..examples..
//
// $appURL = "https://" . $_SERVER['HTTP_HOST'] . ":0000/"; # links to custom app install on your server
// $mysiteURL = "https://www.mydomain.com/"; # links to custom external source of your choosing
//
// Now, let's add them to the menu!
//
// <li><a class="grayscale" href="<?php echo "$appURL"; ?//>" target="_blank"><img src="img/brands/app.png" class="brand-ico"> <span>Custom App</span></a></li>
// <li><a class="grayscale" href="<?php echo "$mysiteURL"; ?//>" target="_blank"><img src="img/brands/sitelogo.png" class="brand-ico"> <span>My External Site</span></a></li>
//
// You'll notice in the examples above that after (for instance) "$appURL"; ?
// there are two forward slashes (//). Remove these on live examples.
// These were included to avoid php collisions within the examples.
//
//----------------------
// Adding Logo Images //
//----------------------
//
// You can add custom logos to your created menu items by placing the logos
// within the /srv/rutorrent/home/img/brands/ directory. For best results, add
// images to be no greater than 128x128 pixels in size.
// Remember to change the image source to the name you have given your logo icon.
// Any image format is acceptable: (jpg,png,svg,gif)
// <img src="img/brands/CHANGETHIS.png" class="brand-ico">
//
//
///////////////////////////////////////////////////
//  END TUTORIAL ON ADDING IN YOUR CUSTOM LINKS  //
///////////////////////////////////////////////////


// INSERT YOUR CUSTOM EXTERNAL or INTERNAL LINKS HERE! //
$FlexgetURL = "http://" . $_SERVER['HTTP_HOST'] . ":6566/";
$TTG_URL = "https://totheglory.im/browse.php";
$HDC_URL = "https://hdchina.org/torrents.php";
$CHD_URL = "https://chdbits.co/torrents.php";
$MT_URL = "https://tp.m-team.cc/torrents.php";
$HDS_URL = "https://hdsky.me/torrents.php";
$CMCT_URL = "https://hdcmct.org/torrents.php";
$OB_URL = "http://ourbits.club/torrents.php";
$U2_URL = "https://u2.dmhy.org/torrents.php";


?> <!-- Do not remove this closing (?>) -->


<!-- // INSERT YOUR CUSTOM EXTERNAL or INTERNAL MENU ITEMS HERE! // -->
<li><a class="grayscale" href="<?php echo "$FlexgetURL"; ?>" target="_blank"><img src="img/brands/flexget.png" class="brand-ico"> <span>Flexget Web</span></a></li>
<li><a class="grayscale" href="<?php echo "$TTG_URL"; ?>" target="_blank"><img src="img/trackers/ttg.png" class="brand-ico"> <span>ToTheGlory</span></a></li>
<li><a class="grayscale" href="<?php echo "$HDC_URL"; ?>" target="_blank"><img src="img/trackers/hdchina.png" class="brand-ico"> <span>HDChina</span></a></li>
<li><a class="grayscale" href="<?php echo "$CHD_URL"; ?>" target="_blank"><img src="img/trackers/chdbits.png" class="brand-ico"> <span>CHDBits</span></a></li>
<li><a class="grayscale" href="<?php echo "$MT_URL"; ?>" target="_blank"><img src="img/trackers/mteam.png" class="brand-ico"> <span>M-Team</span></a></li>
<li><a class="grayscale" href="<?php echo "$HDS_URL"; ?>" target="_blank"><img src="img/trackers/hdsky.png" class="brand-ico"> <span>HDSky</span></a></li>
<li><a class="grayscale" href="<?php echo "$CMCT_URL"; ?>" target="_blank"><img src="img/trackers/cmct.png" class="brand-ico"> <span>CMCT</span></a></li>
<li><a class="grayscale" href="<?php echo "$OB_URL"; ?>" target="_blank"><img src="img/trackers/ourbits.png" class="brand-ico"> <span>OurBits</span></a></li>
<li><a class="grayscale" href="<?php echo "$U2_URL"; ?>" target="_blank"><img src="img/trackers/u2.png" class="brand-ico"> <span>u2.dmhy</span></a></li>
