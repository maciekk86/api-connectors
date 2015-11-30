<?php
/**
 * Transaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * Transaction Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Transaction implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'transact_id' => 'string',
        'account' => 'Number',
        'currency' => 'string',
        'transact_type' => 'string',
        'amount' => 'Number',
        'fee' => 'Number',
        'transact_status' => 'string',
        'address' => 'string',
        'tx' => 'string',
        'text' => 'string',
        'transact_time' => '\DateTime',
        'timestamp' => '\DateTime'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'transact_id' => 'transactID',
        'account' => 'account',
        'currency' => 'currency',
        'transact_type' => 'transactType',
        'amount' => 'amount',
        'fee' => 'fee',
        'transact_status' => 'transactStatus',
        'address' => 'address',
        'tx' => 'tx',
        'text' => 'text',
        'transact_time' => 'transactTime',
        'timestamp' => 'timestamp'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'transact_id' => 'setTransactId',
        'account' => 'setAccount',
        'currency' => 'setCurrency',
        'transact_type' => 'setTransactType',
        'amount' => 'setAmount',
        'fee' => 'setFee',
        'transact_status' => 'setTransactStatus',
        'address' => 'setAddress',
        'tx' => 'setTx',
        'text' => 'setText',
        'transact_time' => 'setTransactTime',
        'timestamp' => 'setTimestamp'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'transact_id' => 'getTransactId',
        'account' => 'getAccount',
        'currency' => 'getCurrency',
        'transact_type' => 'getTransactType',
        'amount' => 'getAmount',
        'fee' => 'getFee',
        'transact_status' => 'getTransactStatus',
        'address' => 'getAddress',
        'tx' => 'getTx',
        'text' => 'getText',
        'transact_time' => 'getTransactTime',
        'timestamp' => 'getTimestamp'
    );
  
    
    /**
      * $transact_id 
      * @var string
      */
    protected $transact_id;
    
    /**
      * $account 
      * @var Number
      */
    protected $account;
    
    /**
      * $currency 
      * @var string
      */
    protected $currency;
    
    /**
      * $transact_type 
      * @var string
      */
    protected $transact_type;
    
    /**
      * $amount 
      * @var Number
      */
    protected $amount;
    
    /**
      * $fee 
      * @var Number
      */
    protected $fee;
    
    /**
      * $transact_status 
      * @var string
      */
    protected $transact_status;
    
    /**
      * $address 
      * @var string
      */
    protected $address;
    
    /**
      * $tx 
      * @var string
      */
    protected $tx;
    
    /**
      * $text 
      * @var string
      */
    protected $text;
    
    /**
      * $transact_time 
      * @var \DateTime
      */
    protected $transact_time;
    
    /**
      * $timestamp 
      * @var \DateTime
      */
    protected $timestamp;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->transact_id = $data["transact_id"];
            $this->account = $data["account"];
            $this->currency = $data["currency"];
            $this->transact_type = $data["transact_type"];
            $this->amount = $data["amount"];
            $this->fee = $data["fee"];
            $this->transact_status = $data["transact_status"];
            $this->address = $data["address"];
            $this->tx = $data["tx"];
            $this->text = $data["text"];
            $this->transact_time = $data["transact_time"];
            $this->timestamp = $data["timestamp"];
        }
    }
    
    /**
     * Gets transact_id
     * @return string
     */
    public function getTransactId()
    {
        return $this->transact_id;
    }
  
    /**
     * Sets transact_id
     * @param string $transact_id 
     * @return $this
     */
    public function setTransactId($transact_id)
    {
        
        $this->transact_id = $transact_id;
        return $this;
    }
    
    /**
     * Gets account
     * @return Number
     */
    public function getAccount()
    {
        return $this->account;
    }
  
    /**
     * Sets account
     * @param Number $account 
     * @return $this
     */
    public function setAccount($account)
    {
        
        $this->account = $account;
        return $this;
    }
    
    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
  
    /**
     * Sets currency
     * @param string $currency 
     * @return $this
     */
    public function setCurrency($currency)
    {
        
        $this->currency = $currency;
        return $this;
    }
    
    /**
     * Gets transact_type
     * @return string
     */
    public function getTransactType()
    {
        return $this->transact_type;
    }
  
    /**
     * Sets transact_type
     * @param string $transact_type 
     * @return $this
     */
    public function setTransactType($transact_type)
    {
        
        $this->transact_type = $transact_type;
        return $this;
    }
    
    /**
     * Gets amount
     * @return Number
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param Number $amount 
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets fee
     * @return Number
     */
    public function getFee()
    {
        return $this->fee;
    }
  
    /**
     * Sets fee
     * @param Number $fee 
     * @return $this
     */
    public function setFee($fee)
    {
        
        $this->fee = $fee;
        return $this;
    }
    
    /**
     * Gets transact_status
     * @return string
     */
    public function getTransactStatus()
    {
        return $this->transact_status;
    }
  
    /**
     * Sets transact_status
     * @param string $transact_status 
     * @return $this
     */
    public function setTransactStatus($transact_status)
    {
        
        $this->transact_status = $transact_status;
        return $this;
    }
    
    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
  
    /**
     * Sets address
     * @param string $address 
     * @return $this
     */
    public function setAddress($address)
    {
        
        $this->address = $address;
        return $this;
    }
    
    /**
     * Gets tx
     * @return string
     */
    public function getTx()
    {
        return $this->tx;
    }
  
    /**
     * Sets tx
     * @param string $tx 
     * @return $this
     */
    public function setTx($tx)
    {
        
        $this->tx = $tx;
        return $this;
    }
    
    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
  
    /**
     * Sets text
     * @param string $text 
     * @return $this
     */
    public function setText($text)
    {
        
        $this->text = $text;
        return $this;
    }
    
    /**
     * Gets transact_time
     * @return \DateTime
     */
    public function getTransactTime()
    {
        return $this->transact_time;
    }
  
    /**
     * Sets transact_time
     * @param \DateTime $transact_time 
     * @return $this
     */
    public function setTransactTime($transact_time)
    {
        
        $this->transact_time = $transact_time;
        return $this;
    }
    
    /**
     * Gets timestamp
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
  
    /**
     * Sets timestamp
     * @param \DateTime $timestamp 
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        
        $this->timestamp = $timestamp;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
