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
 * Contains the helper class for the select missing words question type tests.
 *
 * @package    qtype
 * @subpackage gapfill
 * @copyright  2011 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();


/**
 * Test helper class for the select missing words question type.
 *
 * @copyright  2011 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_gapfill_test_helper {
    /**
     * @return qtype_gapselect_question
     */
    public static function make_a_gapfill_question() {
        question_bank::load_question_definition_classes('gapfill');
        $question = new qtype_gapfill_question();
        test_question_maker::initialise_a_question($question);

        $question->name = 'Gapfill Test Question';
        $question->questiontext = 'The [cat] sat on the [mat]';
        $question->places[0]='cat';
        $question->places[1]='mat';

       return $question;
        
    }       
     
}
