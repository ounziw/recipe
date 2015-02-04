<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

namespace Recipe;

class Controller_Admin_Enhancer extends \Nos\Controller_Admin_Enhancer
{
    protected function config_build()
    {
        list($application_name) = \Config::configFile(get_called_class());
        $this->placeholders['application_name'] = $application_name;
        $this->placeholders['namespace'] = \Inflector::get_namespace(get_called_class());

        parent::config_build();
    }
}
