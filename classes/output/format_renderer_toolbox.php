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
 * This is built using the bootstrapbase template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 * @package     theme_essential
 * @copyright   2013 Julian Ridden
 * @copyright   2014 Gareth J Barnard, David Bezemer
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Requires V2.6.1.1+ of Columns format.
if (file_exists("$CFG->dirroot/course/format/columns/renderer.php")) {
    include_once($CFG->dirroot . "/course/format/columns/renderer.php");

    class theme_essential_format_columns_renderer extends format_columns_renderer {
        public function get_nav_links($course, $sections, $sectionno) {
            return \theme_essential\toolbox::get_nav_links($course, $sections, $sectionno);
        }

        public function print_single_section_page($course, $sections, $mods, $modnames, $modnamesused, $displaysection) {
            return \theme_essential\toolbox::print_single_section_page($this, $this->courserenderer, $course, $sections, $mods, $modnames, $modnamesused, $displaysection);
        }
    }
}