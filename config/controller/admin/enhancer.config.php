<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'fields' => array(
        'item_per_page' => array(
            'label' => __('Posts per page:'),
            'form' => array(
                'value' => '10',
            ),
        ),
        'startdate' => array(
            'label' => __('開始日の範囲'),
            'form' => array(
                'type' => 'date',
            ),
        ),
        'enddate' => array(
            'label' => __('から'),
            'form' => array(
                'type' => 'date',
            ),
        ),
    ),
);
