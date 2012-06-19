<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   WindowsAzure\ServiceBus\Models
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      https://github.com/WindowsAzure/azure-sdk-for-php
 */
 
namespace WindowsAzure\ServiceBus\Models;
use WindowsAzure\Common\Internal\Resources;
use WindowsAzure\Common\Internal\Utilities;
use WindowsAzure\Common\Internal\Validate;

/**
 * The SQL filter.
 *
 * @category  Microsoft
 * @package   WindowsAzure\ServiceBus\Models
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      https://github.com/WindowsAzure/azure-sdk-for-php
 */

class SqlFilter extends Filter
{
    /** 
     * The SQL expression of the filter. 
     *
     * @var string 
     */
    private $_sqlExpression;

    /**
     * Creates a SQL filter with default parameters.
     */
    public function __construct()
    {   
        parent::__construct();
        $this->attributes['xsi:type'] = 'SqlFilter';
    }
    /**
     * Gets the SQL expression. 
     * 
     * @var string 
     * 
     * @return none
     */
    public function getSqlExpression()
    {
        return $this->_sqlExpression;
    }

    /**
     * Sets the SQL expression. 
     * 
     * @param string $sqlExpression The SQL expression of the filter. 
     * 
     * @return none
     */
    public function setSqlExpression($sqlExpression)
    {
        $this->_sqlExpression = $sqlExpression;
    }

}
?>
