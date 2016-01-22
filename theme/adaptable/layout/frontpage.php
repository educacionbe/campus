<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme_adaptable
 * @copyright 2015 Jeremy Hopkins (Coventry University)
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

require_once(dirname(__FILE__) . '/includes/header.php');

$left = theme_adaptable_get_block_side();

$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$haslogo = (!empty($PAGE->theme->settings->logo));
$hasp1 = (!empty($PAGE->theme->settings->p1));
$hasp2 = (!empty($PAGE->theme->settings->p2));
$hasp3 = (!empty($PAGE->theme->settings->p3));
$hasp4 = (!empty($PAGE->theme->settings->p4));
$hasp5 = (!empty($PAGE->theme->settings->p5));

$haspcap1 = (!empty($PAGE->theme->settings->p1cap));
$haspcap2 = (!empty($PAGE->theme->settings->p2cap));
$haspcap3 = (!empty($PAGE->theme->settings->p3cap));
$haspcap4 = (!empty($PAGE->theme->settings->p4cap));
$haspcap5 = (!empty($PAGE->theme->settings->p5cap));

$hasmarket1 = (!empty($PAGE->theme->settings->market1));
$hasmarket2 = (!empty($PAGE->theme->settings->market2));
$hasmarket3 = (!empty($PAGE->theme->settings->market3));
$hasmarket4 = (!empty($PAGE->theme->settings->market4));

$hasmarket5 = (!empty($PAGE->theme->settings->market5));
$hasmarket6 = (!empty($PAGE->theme->settings->market6));
$hasmarket7 = (!empty($PAGE->theme->settings->market7));
$hasmarket8 = (!empty($PAGE->theme->settings->market8));

$hasmarket9 = (!empty($PAGE->theme->settings->market9));
$hasmarket10 = (!empty($PAGE->theme->settings->market10));
$hasmarket11 = (!empty($PAGE->theme->settings->market11));
$hasmarket12 = (!empty($PAGE->theme->settings->market12));

if ($hasp1 || $hasp2 || $hasp3 || $hasp4 || $hasp5) {
    if (!empty($PAGE->theme->settings->sliderfullscreen)) {
        echo '<div class="slidewrap';
    } else {
        echo '<div class="container slidewrap';
    }

    if (!empty($PAGE->theme->settings->slideroption2)) {
        echo " slidestyle2";
    } ?>">

<div id="main-slider" class="flexslider">
<ul class="slides">
<?php
    if ($hasp1) {
 ?>
<li>
<a href="<?php
        if (!empty($PAGE->theme->settings->p1url)) {
            echo $PAGE->theme->settings->p1url;
        } else {
            echo "#";
        } ?>">
<?php echo "<img src='".$PAGE->theme->setting_file_url('p1', 'p1')."' alt='p1'/>";?>
<?php
        if ($haspcap1) { ?>
              <div class="flex-caption">
                  <?php echo $OUTPUT->get_setting('p1cap', 'format_html');?>
              </div>
</a>
<?php
        }
?>
</a></li>
<?php
    }
?>

<?php
    if ($hasp2) {
?>
<li>
<a href="<?php
        if (!empty($PAGE->theme->settings->p2url)) {
            echo $PAGE->theme->settings->p2url;
        } else {
            echo "#";
        } ?>">
    <?php echo "<img src='".$PAGE->theme->setting_file_url('p2', 'p2')."' alt='p2' />";?>

<?php
        if ($haspcap2) {
?>
        <div class="flex-caption">
            <?php echo $OUTPUT->get_setting('p2cap', 'format_html');?>
        </div></a>
<?php
        }
?>
</a></li>
<?php
    }
?>

<?php
    if ($hasp3) {
?>
<li>
<a href="<?php
        if (!empty($PAGE->theme->settings->p3url)) {
            echo $PAGE->theme->settings->p3url;
        } else {
            echo "#";
        } ?>">
    <?php echo "<img src='".$PAGE->theme->setting_file_url('p3', 'p3')."' alt='p3' />";?>

<?php
        if ($haspcap3) { ?>
        <div class="flex-caption">
            <?php echo $OUTPUT->get_setting('p3cap', 'format_html');?>
        </div></a>
<?php
        }
?>
</a></li>
<?php
    }
?>

<?php
    if ($hasp4) {
?>
<li>
<a href="<?php
        if (!empty($PAGE->theme->settings->p4url)) {
            echo $PAGE->theme->settings->p4url;
        } else {
            echo "#";
        } ?>">
    <?php echo "<img src='".$PAGE->theme->setting_file_url('p4', 'p4')."' alt='p4' />";?>

<?php
        if ($haspcap4) { ?>
         <div class="flex-caption">
             <?php echo $OUTPUT->get_setting('p4cap', 'format_html');?>
         </div></a>
<?php
        }
?>
</a></li>
<?php
    }
?>

<?php
    if ($hasp5) {
?>
<li>
<a href="<?php
        if (!empty($PAGE->theme->settings->p5url)) {
            echo $PAGE->theme->settings->p5url;
        } else {
            echo "#";
        } ?>">
    <?php echo "<img src='".$PAGE->theme->setting_file_url('p5', 'p5')."' alt='p5' />";?>

<?php
        if ($haspcap5) { ?>
        <div class="flex-caption">
            <?php echo $OUTPUT->get_setting('p5cap', 'format_html');?>
        </div></a>
<?php
        }
?>
</a></li>
<?php
    }
?>
  </ul>
</div>
</div>

<?php
}
?>

<?php
if (!empty($PAGE->theme->settings->infobox)) {
    if (!empty($PAGE->theme->settings->infoboxfullscreen)) {
        echo '<div id="theinfo">';
    } else {
        echo '<div id="theinfo" class="container">';
    }
?>

        <div id="theinfo-internal">
            <div class="row-fluid">
                <?php echo $OUTPUT->get_setting('infobox', 'format_html'); ?>
            </div>
        </div>
    </div>
<?php
}
?>

<?php

// Display marketing blocks.
if (!empty($PAGE->theme->settings->frontpagemarketenabled)) {
    if (!empty($PAGE->theme->settings->frontpagemarketoption)) {
        $extramarketclass = "covtiles";
    } else {
        $extramarketclass = "";
    }
?>

<div id="marketblocks" class="container <?php echo "$extramarketclass"; ?>">
<div class="row-fluid">
<?php
    $marketclass = " ";
    if ($hasmarket1 && !$hasmarket2 && !$hasmarket3 && !$hasmarket4) {
        $marketclass = "span12 $extramarketclass";
    }

    if ($hasmarket1 && $hasmarket2 && !$hasmarket3 && !$hasmarket4) {
        $marketclass = "span6 $extramarketclass";
    }

    if ($hasmarket1 && $hasmarket2 && $hasmarket3 && !$hasmarket4) {
        $marketclass = "span4 $extramarketclass";
    }

    if ($hasmarket1 && $hasmarket2 && $hasmarket3 && $hasmarket4) {
        $marketclass = "span3 $extramarketclass";
    }
?>
    <?php
    if ($hasmarket1) { ?>
        <div class="<?php echo "$marketclass";?> first">

<?php
        echo $OUTPUT->get_setting('market1', 'format_html');
?>

        </div>
    <?php
    }
    ?>

    <?php
    if ($hasmarket2) {
    ?>
        <div class="<?php echo "$marketclass";?> first">
    <?php echo $OUTPUT->get_setting('market2', 'format_html'); ?>
        </div>
     <?php
    }
    ?>

<?php
    if ($hasmarket3) {
?>
    <div class="<?php echo "$marketclass";?> first">
        <?php echo $OUTPUT->get_setting('market3', 'format_html');?>
    </div>
<?php
    }
?>

<?php
    if ($hasmarket4) {
?>
    <div class="<?php echo "$marketclass";?> first">
     <?php echo $OUTPUT->get_setting('market4', 'format_html');?>
    </div>
<?php
    }
?>
</div>

 <?php
    if ($hasmarket5) {
?>
    <div class="row-fluid marketrow">
 <?php
        $marketclass = " ";
        if ($hasmarket5 && !$hasmarket6 && !$hasmarket7 && !$hasmarket8) {
            $marketclass = "span12 $extramarketclass";
        }

        if ($hasmarket5 && $hasmarket6 && !$hasmarket7 && !$hasmarket8) {
            $marketclass = "span6 $extramarketclass";
        }

        if ($hasmarket5 && $hasmarket6 && $hasmarket7 && !$hasmarket8) {
            $marketclass = "span4 $extramarketclass";
        }

        if ($hasmarket5 && $hasmarket6 && $hasmarket7 && $hasmarket8) {
            $marketclass = "span3 $extramarketclass";
        }
?>

<?php
        if ($hasmarket5) {
?>
            <div class="<?php echo "$marketclass";?> first">
                <?php echo $OUTPUT->get_setting('market5', 'format_html');?>
            </div>
<?php
        }
?>

<?php
        if ($hasmarket6) { ?>
            <div class="<?php echo "$marketclass";?> first">
                 <?php echo $OUTPUT->get_setting('market6', 'format_html');?>
            </div>
<?php
        }
?>

<?php
        if ($hasmarket7) { ?>
            <div class="<?php echo "$marketclass";?> first">
                 <?php echo $OUTPUT->get_setting('market7', 'format_html');?>
            </div>
    <?php
        }
?>

<?php
        if ($hasmarket8) { ?>
            <div class="<?php echo "$marketclass";?> first">
                 <?php echo $OUTPUT->get_setting('market8', 'format_html');?>
            </div>
<?php
        }
?>
</div>
<?php
    }
    // End 2nd row of blocks.
?>


<?php
    if ($hasmarket9) { ?>
        <div class="row-fluid marketrow">
            <?php $marketclass = " ";
        if ($hasmarket9 && !$hasmarket10 && !$hasmarket11 && !$hasmarket12) {
            $marketclass = "span12 $extramarketclass";
        }

        if ($hasmarket9 && $hasmarket10 && !$hasmarket11 && !$hasmarket12) {
               $marketclass = "span6 $extramarketclass";
        }

        if ($hasmarket9 && $hasmarket10 && $hasmarket11 && !$hasmarket12) {
                $marketclass = "span4 $extramarketclass";
        }

        if ($hasmarket9 && $hasmarket10 && $hasmarket11 && $hasmarket12) {
                $marketclass = "span3 $extramarketclass";
        }
?>

<?php
        if ($hasmarket9) { ?>
            <div class="<?php echo "$marketclass";?> first">
                <?php echo $OUTPUT->get_setting('market9', 'format_html');?>
            </div>
<?php
        }

        if ($hasmarket10) { ?>
            <div class="<?php echo "$marketclass";?> first">
                 <?php echo $OUTPUT->get_setting('market10', 'format_html');?>
            </div>
<?php
        }

        if ($hasmarket11) { ?>
            <div class="<?php echo "$marketclass";?> first">
              <?php echo $OUTPUT->get_setting('market11', 'format_html');?>
            </div>
<?php
        }

        if ($hasmarket12) { ?>
            <div class="<?php echo "$marketclass";?> first">
                <?php echo $OUTPUT->get_setting('market12', 'format_html');?>
            </div>
<?php
        }
?>

 </div>
 <?php
    }
    // End 3rd row of blocks.

}
// End marketing blocks.

 ?>

 </div>

<?php
if (!empty($PAGE->theme->settings->infobox2)) {
?>
<div id="themessage" class="container">
    <div id="themessage-internal"><div class="row-fluid">
        <?php echo $OUTPUT->get_setting('infobox2', 'format_html');; ?>
    </div></div>
</div>
<?php
}
?>


<div class="container outercont">
    <div id="page-content" class="row-fluid">
     <div id="page-navbar" class="span12">
            <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
            <?php echo $OUTPUT->navbar(); ?>
    </div>
<?php
if ($left == 1) {
    echo $OUTPUT->blocks('side-post', 'span3 desktop-first-column');
}
?>
<section id="region-main" class="span9 <?php
if ($left) {
    echo ' ';
} else {
    echo 'desktop-first-column';
} ?> ">

<?php
echo $OUTPUT->course_content_header();
echo $OUTPUT->main_content();
echo $OUTPUT->course_content_footer();
?>
</section>

<?php
if ($left == 0) {
    echo $OUTPUT->blocks('side-post', 'span3');
}
?>
</div>

<?php
if (is_siteadmin()) {
?>
      <div class="hidden-blocks">
        <div class="row-fluid">
          <h4><?php echo get_string('frnt-footer', 'theme_adaptable') ?></h4>
          <?php
            echo $OUTPUT->blocks('frnt-footer');
          ?>
        </div>
      </div>
    <?php
}
?>
</div>

<?php
require_once(dirname(__FILE__) . '/includes/footer.php');
