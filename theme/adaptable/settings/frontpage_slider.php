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


    // Frontpage Slider.
    $temp = new admin_settingpage('theme_adaptable_frontpage_slider', get_string('frontpageslidersettings', 'theme_adaptable'));

    $temp->add(new admin_setting_heading('theme_adaptable_slideshow', get_string('slideshowsettingsheading', 'theme_adaptable'),
        format_text(get_string('slideshowdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

     $name = 'theme_adaptable/sliderfullscreen';
    $title = get_string('sliderfullscreen', 'theme_adaptable');
    $description = get_string('sliderfullscreendesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_adaptable/slidermargintop';
    $title = get_string('slidermargintop', 'theme_adaptable');
    $description = get_string('slidermargintopdesc', 'theme_adaptable');
    $radchoices = $from0to20;
    $setting = new admin_setting_configselect($name, $title, $description, '20px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/slidermarginbottom';
    $title = get_string('slidermarginbottom', 'theme_adaptable');
    $description = get_string('slidermarginbottomdesc', 'theme_adaptable');
    $radchoices = $from0to20;
    $setting = new admin_setting_configselect($name, $title, $description, '20px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/slideroption2';
    $title = get_string('slideroption2', 'theme_adaptable');
    $description = get_string('slideroption2desc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_adaptable/p1';
    $title = get_string('p1', 'theme_adaptable');
    $description = get_string('p1desc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/p1url';
    $title = get_string('p1url', 'theme_adaptable');
    $description = get_string('p1urldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/p1cap';
    $title = get_string('p1cap', 'theme_adaptable');
    $description = get_string('p1capdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/p2';
    $title = get_string('p2', 'theme_adaptable');
    $description = get_string('p2desc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/p2url';
    $title = get_string('p2url', 'theme_adaptable');
    $description = get_string('p2urldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/p2cap';
    $title = get_string('p2cap', 'theme_adaptable');
    $description = get_string('p2capdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/p3';
    $title = get_string('p3', 'theme_adaptable');
    $description = get_string('p3desc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/p3url';
    $title = get_string('p3url', 'theme_adaptable');
    $description = get_string('p3urldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/p3cap';
    $title = get_string('p3cap', 'theme_adaptable');
    $description = get_string('p3capdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/p4';
    $title = get_string('p4', 'theme_adaptable');
    $description = get_string('p4desc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p4');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/p4url';
    $title = get_string('p4url', 'theme_adaptable');
    $description = get_string('p4urldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/p4cap';
    $title = get_string('p4cap', 'theme_adaptable');
    $description = get_string('p4capdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/p5';
    $title = get_string('p5', 'theme_adaptable');
    $description = get_string('p5desc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p5');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/p5url';
    $title = get_string('p5url', 'theme_adaptable');
    $description = get_string('p5urldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/p5cap';
    $title = get_string('p5cap', 'theme_adaptable');
    $description = get_string('p5capdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/slideroption2color';
    $title = get_string('slideroption2color', 'theme_adaptable');
    $description = get_string('slideroption2colordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0066cc', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/slideroption2a';
    $title = get_string('slideroption2a', 'theme_adaptable');
    $description = get_string('slideroption2adesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0066cc', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);
