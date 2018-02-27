<?php
/**
 * @copyright 2016 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @author Christoph Wurst <christoph@owncloud.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCP\Authentication\LoginCredentials;

use OCP\Authentication\Exceptions\CredentialsUnavailableException;

/**
 * @since 12
 */
interface IStore {
	
	/**
	 * Get login credentials of the currently logged in user
	 *
	 * @since 12
	 *
	 * @throws CredentialsUnavailableException
	 * @return ICredentials the login credentials of the current user
	 */
	public function getLoginCredentials();
	
}