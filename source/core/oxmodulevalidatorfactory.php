<?php
/**
 * This file is part of OXID eShop Community Edition.
 *
 * OXID eShop Community Edition is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eShop Community Edition is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2014
 * @version   OXID eShop CE
 */

class oxModuleValidatorFactory
{
    /**
     * List of available validators.
     *
     * @var array
     */
    private $_aAvailableValidators = array(
        'files' => 'oxModuleFilesValidator',
        'metadata' => 'oxModuleMetadataValidator',
    );

    /**
     * Return module validator by provided type.
     * Returned validator implements interface oxIModuleValidator.
     *
     * @param string $sValidatorType
     *
     * @throws oxSystemComponentException
     *
     * @return oxIModuleValidator
     */
    public function getModuleValidator($sValidatorType)
    {
        if (isset($this->_aAvailableValidators[$sValidatorType])) {
            /** @var oxIModuleValidator $oModuleValidator */
            $oModuleValidator = oxNew($this->_aAvailableValidators[$sValidatorType]);
        } else {
            /** @var oxSystemComponentException $oEx */
            $oEx = oxNew( 'oxSystemComponentException' );
            $oEx->setMessage( 'ERROR_MESSAGE_SYSTEMCOMPONENT_FUNCTIONNOTFOUND' );
            $oEx->setComponent( $sValidatorType );
            throw $oEx;
        }
        return $oModuleValidator;
    }
}