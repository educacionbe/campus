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


    // Marketing blocks section.
    $temp = new admin_settingpage('theme_adaptable_frontpage_blocks', get_string('frontpageblocksettings', 'theme_adaptable'));

    $name = 'theme_adaptable/infobox';
    $title = get_string('infobox', 'theme_adaptable');
    $description = get_string('infoboxdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/infoboxfullscreen';
    $title = get_string('infoboxfullscreen', 'theme_adaptable');
    $description = get_string('infoboxfullscreendesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/infobox2';
    $title = get_string('infobox2', 'theme_adaptable');
    $description = get_string('infobox2desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_marketing', get_string('marketingsettingsheading', 'theme_adaptable'),
        format_text(get_string('marketingdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/frontpagemarketenabled';
    $title = get_string('frontpagemarketenabled', 'theme_adaptable');
    $description = get_string('frontpagemarketenableddesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/frontpagemarketoption';
    $title = get_string('frontpagemarketoption', 'theme_adaptable');
    $description = get_string('frontpagemarketoptiondesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_adaptable/market1';
    $title = get_string('market1', 'theme_adaptable');
    $description = get_string('market1desc', 'theme_adaptable');
    $default = '';
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market2';
    $title = get_string('market2', 'theme_adaptable');
    $description = get_string('market2desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market3';
    $title = get_string('market3', 'theme_adaptable');
    $description = get_string('market3desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market4';
    $title = get_string('market4', 'theme_adaptable');
    $description = get_string('market4desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market5';
    $title = get_string('market5', 'theme_adaptable');
    $description = get_string('market5desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market6';
    $title = get_string('market6', 'theme_adaptable');
    $description = get_string('market6desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market7';
    $title = get_string('market7', 'theme_adaptable');
    $description = get_string('market7desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market8';
    $title = get_string('market8', 'theme_adaptable');
    $description = get_string('market8desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market9';
    $title = get_string('market9', 'theme_adaptable');
    $description = get_string('market9desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market10';
    $title = get_string('market10', 'theme_adaptable');
    $description = get_string('market10desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market11';
    $title = get_string('market11', 'theme_adaptable');
    $description = get_string('market11desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market12';
    $title = get_string('market12', 'theme_adaptable');
    $description = get_string('market12desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);
