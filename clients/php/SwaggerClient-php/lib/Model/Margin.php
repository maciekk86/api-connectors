<?php
/**
 * Margin
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
 * Margin Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Margin implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'account' => 'Number',
        'currency' => 'string',
        'risk_limit' => 'Number',
        'prev_state' => 'string',
        'state' => 'string',
        'action' => 'string',
        'amount' => 'Number',
        'pending_credit' => 'Number',
        'pending_debit' => 'Number',
        'prev_realised_pnl' => 'Number',
        'prev_unrealised_pnl' => 'Number',
        'gross_comm' => 'Number',
        'gross_open_cost' => 'Number',
        'gross_open_premium' => 'Number',
        'gross_exec_cost' => 'Number',
        'gross_mark_value' => 'Number',
        'risk_value' => 'Number',
        'taxable_margin' => 'Number',
        'init_margin' => 'Number',
        'maint_margin' => 'Number',
        'session_margin' => 'Number',
        'target_excess_margin' => 'Number',
        'var_margin' => 'Number',
        'realised_pnl' => 'Number',
        'unrealised_pnl' => 'Number',
        'indicative_tax' => 'Number',
        'unrealised_profit' => 'Number',
        'wallet_balance' => 'Number',
        'margin_balance' => 'Number',
        'margin_balance_pcnt' => 'double',
        'margin_leverage' => 'double',
        'margin_used_pcnt' => 'double',
        'excess_margin' => 'Number',
        'excess_margin_pcnt' => 'double',
        'available_margin' => 'Number',
        'withdrawable_margin' => 'Number',
        'timestamp' => '\DateTime'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'account' => 'account',
        'currency' => 'currency',
        'risk_limit' => 'riskLimit',
        'prev_state' => 'prevState',
        'state' => 'state',
        'action' => 'action',
        'amount' => 'amount',
        'pending_credit' => 'pendingCredit',
        'pending_debit' => 'pendingDebit',
        'prev_realised_pnl' => 'prevRealisedPnl',
        'prev_unrealised_pnl' => 'prevUnrealisedPnl',
        'gross_comm' => 'grossComm',
        'gross_open_cost' => 'grossOpenCost',
        'gross_open_premium' => 'grossOpenPremium',
        'gross_exec_cost' => 'grossExecCost',
        'gross_mark_value' => 'grossMarkValue',
        'risk_value' => 'riskValue',
        'taxable_margin' => 'taxableMargin',
        'init_margin' => 'initMargin',
        'maint_margin' => 'maintMargin',
        'session_margin' => 'sessionMargin',
        'target_excess_margin' => 'targetExcessMargin',
        'var_margin' => 'varMargin',
        'realised_pnl' => 'realisedPnl',
        'unrealised_pnl' => 'unrealisedPnl',
        'indicative_tax' => 'indicativeTax',
        'unrealised_profit' => 'unrealisedProfit',
        'wallet_balance' => 'walletBalance',
        'margin_balance' => 'marginBalance',
        'margin_balance_pcnt' => 'marginBalancePcnt',
        'margin_leverage' => 'marginLeverage',
        'margin_used_pcnt' => 'marginUsedPcnt',
        'excess_margin' => 'excessMargin',
        'excess_margin_pcnt' => 'excessMarginPcnt',
        'available_margin' => 'availableMargin',
        'withdrawable_margin' => 'withdrawableMargin',
        'timestamp' => 'timestamp'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'account' => 'setAccount',
        'currency' => 'setCurrency',
        'risk_limit' => 'setRiskLimit',
        'prev_state' => 'setPrevState',
        'state' => 'setState',
        'action' => 'setAction',
        'amount' => 'setAmount',
        'pending_credit' => 'setPendingCredit',
        'pending_debit' => 'setPendingDebit',
        'prev_realised_pnl' => 'setPrevRealisedPnl',
        'prev_unrealised_pnl' => 'setPrevUnrealisedPnl',
        'gross_comm' => 'setGrossComm',
        'gross_open_cost' => 'setGrossOpenCost',
        'gross_open_premium' => 'setGrossOpenPremium',
        'gross_exec_cost' => 'setGrossExecCost',
        'gross_mark_value' => 'setGrossMarkValue',
        'risk_value' => 'setRiskValue',
        'taxable_margin' => 'setTaxableMargin',
        'init_margin' => 'setInitMargin',
        'maint_margin' => 'setMaintMargin',
        'session_margin' => 'setSessionMargin',
        'target_excess_margin' => 'setTargetExcessMargin',
        'var_margin' => 'setVarMargin',
        'realised_pnl' => 'setRealisedPnl',
        'unrealised_pnl' => 'setUnrealisedPnl',
        'indicative_tax' => 'setIndicativeTax',
        'unrealised_profit' => 'setUnrealisedProfit',
        'wallet_balance' => 'setWalletBalance',
        'margin_balance' => 'setMarginBalance',
        'margin_balance_pcnt' => 'setMarginBalancePcnt',
        'margin_leverage' => 'setMarginLeverage',
        'margin_used_pcnt' => 'setMarginUsedPcnt',
        'excess_margin' => 'setExcessMargin',
        'excess_margin_pcnt' => 'setExcessMarginPcnt',
        'available_margin' => 'setAvailableMargin',
        'withdrawable_margin' => 'setWithdrawableMargin',
        'timestamp' => 'setTimestamp'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'account' => 'getAccount',
        'currency' => 'getCurrency',
        'risk_limit' => 'getRiskLimit',
        'prev_state' => 'getPrevState',
        'state' => 'getState',
        'action' => 'getAction',
        'amount' => 'getAmount',
        'pending_credit' => 'getPendingCredit',
        'pending_debit' => 'getPendingDebit',
        'prev_realised_pnl' => 'getPrevRealisedPnl',
        'prev_unrealised_pnl' => 'getPrevUnrealisedPnl',
        'gross_comm' => 'getGrossComm',
        'gross_open_cost' => 'getGrossOpenCost',
        'gross_open_premium' => 'getGrossOpenPremium',
        'gross_exec_cost' => 'getGrossExecCost',
        'gross_mark_value' => 'getGrossMarkValue',
        'risk_value' => 'getRiskValue',
        'taxable_margin' => 'getTaxableMargin',
        'init_margin' => 'getInitMargin',
        'maint_margin' => 'getMaintMargin',
        'session_margin' => 'getSessionMargin',
        'target_excess_margin' => 'getTargetExcessMargin',
        'var_margin' => 'getVarMargin',
        'realised_pnl' => 'getRealisedPnl',
        'unrealised_pnl' => 'getUnrealisedPnl',
        'indicative_tax' => 'getIndicativeTax',
        'unrealised_profit' => 'getUnrealisedProfit',
        'wallet_balance' => 'getWalletBalance',
        'margin_balance' => 'getMarginBalance',
        'margin_balance_pcnt' => 'getMarginBalancePcnt',
        'margin_leverage' => 'getMarginLeverage',
        'margin_used_pcnt' => 'getMarginUsedPcnt',
        'excess_margin' => 'getExcessMargin',
        'excess_margin_pcnt' => 'getExcessMarginPcnt',
        'available_margin' => 'getAvailableMargin',
        'withdrawable_margin' => 'getWithdrawableMargin',
        'timestamp' => 'getTimestamp'
    );
  
    
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
      * $risk_limit 
      * @var Number
      */
    protected $risk_limit;
    
    /**
      * $prev_state 
      * @var string
      */
    protected $prev_state;
    
    /**
      * $state 
      * @var string
      */
    protected $state;
    
    /**
      * $action 
      * @var string
      */
    protected $action;
    
    /**
      * $amount 
      * @var Number
      */
    protected $amount;
    
    /**
      * $pending_credit 
      * @var Number
      */
    protected $pending_credit;
    
    /**
      * $pending_debit 
      * @var Number
      */
    protected $pending_debit;
    
    /**
      * $prev_realised_pnl 
      * @var Number
      */
    protected $prev_realised_pnl;
    
    /**
      * $prev_unrealised_pnl 
      * @var Number
      */
    protected $prev_unrealised_pnl;
    
    /**
      * $gross_comm 
      * @var Number
      */
    protected $gross_comm;
    
    /**
      * $gross_open_cost 
      * @var Number
      */
    protected $gross_open_cost;
    
    /**
      * $gross_open_premium 
      * @var Number
      */
    protected $gross_open_premium;
    
    /**
      * $gross_exec_cost 
      * @var Number
      */
    protected $gross_exec_cost;
    
    /**
      * $gross_mark_value 
      * @var Number
      */
    protected $gross_mark_value;
    
    /**
      * $risk_value 
      * @var Number
      */
    protected $risk_value;
    
    /**
      * $taxable_margin 
      * @var Number
      */
    protected $taxable_margin;
    
    /**
      * $init_margin 
      * @var Number
      */
    protected $init_margin;
    
    /**
      * $maint_margin 
      * @var Number
      */
    protected $maint_margin;
    
    /**
      * $session_margin 
      * @var Number
      */
    protected $session_margin;
    
    /**
      * $target_excess_margin 
      * @var Number
      */
    protected $target_excess_margin;
    
    /**
      * $var_margin 
      * @var Number
      */
    protected $var_margin;
    
    /**
      * $realised_pnl 
      * @var Number
      */
    protected $realised_pnl;
    
    /**
      * $unrealised_pnl 
      * @var Number
      */
    protected $unrealised_pnl;
    
    /**
      * $indicative_tax 
      * @var Number
      */
    protected $indicative_tax;
    
    /**
      * $unrealised_profit 
      * @var Number
      */
    protected $unrealised_profit;
    
    /**
      * $wallet_balance 
      * @var Number
      */
    protected $wallet_balance;
    
    /**
      * $margin_balance 
      * @var Number
      */
    protected $margin_balance;
    
    /**
      * $margin_balance_pcnt 
      * @var double
      */
    protected $margin_balance_pcnt;
    
    /**
      * $margin_leverage 
      * @var double
      */
    protected $margin_leverage;
    
    /**
      * $margin_used_pcnt 
      * @var double
      */
    protected $margin_used_pcnt;
    
    /**
      * $excess_margin 
      * @var Number
      */
    protected $excess_margin;
    
    /**
      * $excess_margin_pcnt 
      * @var double
      */
    protected $excess_margin_pcnt;
    
    /**
      * $available_margin 
      * @var Number
      */
    protected $available_margin;
    
    /**
      * $withdrawable_margin 
      * @var Number
      */
    protected $withdrawable_margin;
    
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
            $this->account = $data["account"];
            $this->currency = $data["currency"];
            $this->risk_limit = $data["risk_limit"];
            $this->prev_state = $data["prev_state"];
            $this->state = $data["state"];
            $this->action = $data["action"];
            $this->amount = $data["amount"];
            $this->pending_credit = $data["pending_credit"];
            $this->pending_debit = $data["pending_debit"];
            $this->prev_realised_pnl = $data["prev_realised_pnl"];
            $this->prev_unrealised_pnl = $data["prev_unrealised_pnl"];
            $this->gross_comm = $data["gross_comm"];
            $this->gross_open_cost = $data["gross_open_cost"];
            $this->gross_open_premium = $data["gross_open_premium"];
            $this->gross_exec_cost = $data["gross_exec_cost"];
            $this->gross_mark_value = $data["gross_mark_value"];
            $this->risk_value = $data["risk_value"];
            $this->taxable_margin = $data["taxable_margin"];
            $this->init_margin = $data["init_margin"];
            $this->maint_margin = $data["maint_margin"];
            $this->session_margin = $data["session_margin"];
            $this->target_excess_margin = $data["target_excess_margin"];
            $this->var_margin = $data["var_margin"];
            $this->realised_pnl = $data["realised_pnl"];
            $this->unrealised_pnl = $data["unrealised_pnl"];
            $this->indicative_tax = $data["indicative_tax"];
            $this->unrealised_profit = $data["unrealised_profit"];
            $this->wallet_balance = $data["wallet_balance"];
            $this->margin_balance = $data["margin_balance"];
            $this->margin_balance_pcnt = $data["margin_balance_pcnt"];
            $this->margin_leverage = $data["margin_leverage"];
            $this->margin_used_pcnt = $data["margin_used_pcnt"];
            $this->excess_margin = $data["excess_margin"];
            $this->excess_margin_pcnt = $data["excess_margin_pcnt"];
            $this->available_margin = $data["available_margin"];
            $this->withdrawable_margin = $data["withdrawable_margin"];
            $this->timestamp = $data["timestamp"];
        }
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
     * Gets risk_limit
     * @return Number
     */
    public function getRiskLimit()
    {
        return $this->risk_limit;
    }
  
    /**
     * Sets risk_limit
     * @param Number $risk_limit 
     * @return $this
     */
    public function setRiskLimit($risk_limit)
    {
        
        $this->risk_limit = $risk_limit;
        return $this;
    }
    
    /**
     * Gets prev_state
     * @return string
     */
    public function getPrevState()
    {
        return $this->prev_state;
    }
  
    /**
     * Sets prev_state
     * @param string $prev_state 
     * @return $this
     */
    public function setPrevState($prev_state)
    {
        
        $this->prev_state = $prev_state;
        return $this;
    }
    
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state 
     * @return $this
     */
    public function setState($state)
    {
        
        $this->state = $state;
        return $this;
    }
    
    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }
  
    /**
     * Sets action
     * @param string $action 
     * @return $this
     */
    public function setAction($action)
    {
        
        $this->action = $action;
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
     * Gets pending_credit
     * @return Number
     */
    public function getPendingCredit()
    {
        return $this->pending_credit;
    }
  
    /**
     * Sets pending_credit
     * @param Number $pending_credit 
     * @return $this
     */
    public function setPendingCredit($pending_credit)
    {
        
        $this->pending_credit = $pending_credit;
        return $this;
    }
    
    /**
     * Gets pending_debit
     * @return Number
     */
    public function getPendingDebit()
    {
        return $this->pending_debit;
    }
  
    /**
     * Sets pending_debit
     * @param Number $pending_debit 
     * @return $this
     */
    public function setPendingDebit($pending_debit)
    {
        
        $this->pending_debit = $pending_debit;
        return $this;
    }
    
    /**
     * Gets prev_realised_pnl
     * @return Number
     */
    public function getPrevRealisedPnl()
    {
        return $this->prev_realised_pnl;
    }
  
    /**
     * Sets prev_realised_pnl
     * @param Number $prev_realised_pnl 
     * @return $this
     */
    public function setPrevRealisedPnl($prev_realised_pnl)
    {
        
        $this->prev_realised_pnl = $prev_realised_pnl;
        return $this;
    }
    
    /**
     * Gets prev_unrealised_pnl
     * @return Number
     */
    public function getPrevUnrealisedPnl()
    {
        return $this->prev_unrealised_pnl;
    }
  
    /**
     * Sets prev_unrealised_pnl
     * @param Number $prev_unrealised_pnl 
     * @return $this
     */
    public function setPrevUnrealisedPnl($prev_unrealised_pnl)
    {
        
        $this->prev_unrealised_pnl = $prev_unrealised_pnl;
        return $this;
    }
    
    /**
     * Gets gross_comm
     * @return Number
     */
    public function getGrossComm()
    {
        return $this->gross_comm;
    }
  
    /**
     * Sets gross_comm
     * @param Number $gross_comm 
     * @return $this
     */
    public function setGrossComm($gross_comm)
    {
        
        $this->gross_comm = $gross_comm;
        return $this;
    }
    
    /**
     * Gets gross_open_cost
     * @return Number
     */
    public function getGrossOpenCost()
    {
        return $this->gross_open_cost;
    }
  
    /**
     * Sets gross_open_cost
     * @param Number $gross_open_cost 
     * @return $this
     */
    public function setGrossOpenCost($gross_open_cost)
    {
        
        $this->gross_open_cost = $gross_open_cost;
        return $this;
    }
    
    /**
     * Gets gross_open_premium
     * @return Number
     */
    public function getGrossOpenPremium()
    {
        return $this->gross_open_premium;
    }
  
    /**
     * Sets gross_open_premium
     * @param Number $gross_open_premium 
     * @return $this
     */
    public function setGrossOpenPremium($gross_open_premium)
    {
        
        $this->gross_open_premium = $gross_open_premium;
        return $this;
    }
    
    /**
     * Gets gross_exec_cost
     * @return Number
     */
    public function getGrossExecCost()
    {
        return $this->gross_exec_cost;
    }
  
    /**
     * Sets gross_exec_cost
     * @param Number $gross_exec_cost 
     * @return $this
     */
    public function setGrossExecCost($gross_exec_cost)
    {
        
        $this->gross_exec_cost = $gross_exec_cost;
        return $this;
    }
    
    /**
     * Gets gross_mark_value
     * @return Number
     */
    public function getGrossMarkValue()
    {
        return $this->gross_mark_value;
    }
  
    /**
     * Sets gross_mark_value
     * @param Number $gross_mark_value 
     * @return $this
     */
    public function setGrossMarkValue($gross_mark_value)
    {
        
        $this->gross_mark_value = $gross_mark_value;
        return $this;
    }
    
    /**
     * Gets risk_value
     * @return Number
     */
    public function getRiskValue()
    {
        return $this->risk_value;
    }
  
    /**
     * Sets risk_value
     * @param Number $risk_value 
     * @return $this
     */
    public function setRiskValue($risk_value)
    {
        
        $this->risk_value = $risk_value;
        return $this;
    }
    
    /**
     * Gets taxable_margin
     * @return Number
     */
    public function getTaxableMargin()
    {
        return $this->taxable_margin;
    }
  
    /**
     * Sets taxable_margin
     * @param Number $taxable_margin 
     * @return $this
     */
    public function setTaxableMargin($taxable_margin)
    {
        
        $this->taxable_margin = $taxable_margin;
        return $this;
    }
    
    /**
     * Gets init_margin
     * @return Number
     */
    public function getInitMargin()
    {
        return $this->init_margin;
    }
  
    /**
     * Sets init_margin
     * @param Number $init_margin 
     * @return $this
     */
    public function setInitMargin($init_margin)
    {
        
        $this->init_margin = $init_margin;
        return $this;
    }
    
    /**
     * Gets maint_margin
     * @return Number
     */
    public function getMaintMargin()
    {
        return $this->maint_margin;
    }
  
    /**
     * Sets maint_margin
     * @param Number $maint_margin 
     * @return $this
     */
    public function setMaintMargin($maint_margin)
    {
        
        $this->maint_margin = $maint_margin;
        return $this;
    }
    
    /**
     * Gets session_margin
     * @return Number
     */
    public function getSessionMargin()
    {
        return $this->session_margin;
    }
  
    /**
     * Sets session_margin
     * @param Number $session_margin 
     * @return $this
     */
    public function setSessionMargin($session_margin)
    {
        
        $this->session_margin = $session_margin;
        return $this;
    }
    
    /**
     * Gets target_excess_margin
     * @return Number
     */
    public function getTargetExcessMargin()
    {
        return $this->target_excess_margin;
    }
  
    /**
     * Sets target_excess_margin
     * @param Number $target_excess_margin 
     * @return $this
     */
    public function setTargetExcessMargin($target_excess_margin)
    {
        
        $this->target_excess_margin = $target_excess_margin;
        return $this;
    }
    
    /**
     * Gets var_margin
     * @return Number
     */
    public function getVarMargin()
    {
        return $this->var_margin;
    }
  
    /**
     * Sets var_margin
     * @param Number $var_margin 
     * @return $this
     */
    public function setVarMargin($var_margin)
    {
        
        $this->var_margin = $var_margin;
        return $this;
    }
    
    /**
     * Gets realised_pnl
     * @return Number
     */
    public function getRealisedPnl()
    {
        return $this->realised_pnl;
    }
  
    /**
     * Sets realised_pnl
     * @param Number $realised_pnl 
     * @return $this
     */
    public function setRealisedPnl($realised_pnl)
    {
        
        $this->realised_pnl = $realised_pnl;
        return $this;
    }
    
    /**
     * Gets unrealised_pnl
     * @return Number
     */
    public function getUnrealisedPnl()
    {
        return $this->unrealised_pnl;
    }
  
    /**
     * Sets unrealised_pnl
     * @param Number $unrealised_pnl 
     * @return $this
     */
    public function setUnrealisedPnl($unrealised_pnl)
    {
        
        $this->unrealised_pnl = $unrealised_pnl;
        return $this;
    }
    
    /**
     * Gets indicative_tax
     * @return Number
     */
    public function getIndicativeTax()
    {
        return $this->indicative_tax;
    }
  
    /**
     * Sets indicative_tax
     * @param Number $indicative_tax 
     * @return $this
     */
    public function setIndicativeTax($indicative_tax)
    {
        
        $this->indicative_tax = $indicative_tax;
        return $this;
    }
    
    /**
     * Gets unrealised_profit
     * @return Number
     */
    public function getUnrealisedProfit()
    {
        return $this->unrealised_profit;
    }
  
    /**
     * Sets unrealised_profit
     * @param Number $unrealised_profit 
     * @return $this
     */
    public function setUnrealisedProfit($unrealised_profit)
    {
        
        $this->unrealised_profit = $unrealised_profit;
        return $this;
    }
    
    /**
     * Gets wallet_balance
     * @return Number
     */
    public function getWalletBalance()
    {
        return $this->wallet_balance;
    }
  
    /**
     * Sets wallet_balance
     * @param Number $wallet_balance 
     * @return $this
     */
    public function setWalletBalance($wallet_balance)
    {
        
        $this->wallet_balance = $wallet_balance;
        return $this;
    }
    
    /**
     * Gets margin_balance
     * @return Number
     */
    public function getMarginBalance()
    {
        return $this->margin_balance;
    }
  
    /**
     * Sets margin_balance
     * @param Number $margin_balance 
     * @return $this
     */
    public function setMarginBalance($margin_balance)
    {
        
        $this->margin_balance = $margin_balance;
        return $this;
    }
    
    /**
     * Gets margin_balance_pcnt
     * @return double
     */
    public function getMarginBalancePcnt()
    {
        return $this->margin_balance_pcnt;
    }
  
    /**
     * Sets margin_balance_pcnt
     * @param double $margin_balance_pcnt 
     * @return $this
     */
    public function setMarginBalancePcnt($margin_balance_pcnt)
    {
        
        $this->margin_balance_pcnt = $margin_balance_pcnt;
        return $this;
    }
    
    /**
     * Gets margin_leverage
     * @return double
     */
    public function getMarginLeverage()
    {
        return $this->margin_leverage;
    }
  
    /**
     * Sets margin_leverage
     * @param double $margin_leverage 
     * @return $this
     */
    public function setMarginLeverage($margin_leverage)
    {
        
        $this->margin_leverage = $margin_leverage;
        return $this;
    }
    
    /**
     * Gets margin_used_pcnt
     * @return double
     */
    public function getMarginUsedPcnt()
    {
        return $this->margin_used_pcnt;
    }
  
    /**
     * Sets margin_used_pcnt
     * @param double $margin_used_pcnt 
     * @return $this
     */
    public function setMarginUsedPcnt($margin_used_pcnt)
    {
        
        $this->margin_used_pcnt = $margin_used_pcnt;
        return $this;
    }
    
    /**
     * Gets excess_margin
     * @return Number
     */
    public function getExcessMargin()
    {
        return $this->excess_margin;
    }
  
    /**
     * Sets excess_margin
     * @param Number $excess_margin 
     * @return $this
     */
    public function setExcessMargin($excess_margin)
    {
        
        $this->excess_margin = $excess_margin;
        return $this;
    }
    
    /**
     * Gets excess_margin_pcnt
     * @return double
     */
    public function getExcessMarginPcnt()
    {
        return $this->excess_margin_pcnt;
    }
  
    /**
     * Sets excess_margin_pcnt
     * @param double $excess_margin_pcnt 
     * @return $this
     */
    public function setExcessMarginPcnt($excess_margin_pcnt)
    {
        
        $this->excess_margin_pcnt = $excess_margin_pcnt;
        return $this;
    }
    
    /**
     * Gets available_margin
     * @return Number
     */
    public function getAvailableMargin()
    {
        return $this->available_margin;
    }
  
    /**
     * Sets available_margin
     * @param Number $available_margin 
     * @return $this
     */
    public function setAvailableMargin($available_margin)
    {
        
        $this->available_margin = $available_margin;
        return $this;
    }
    
    /**
     * Gets withdrawable_margin
     * @return Number
     */
    public function getWithdrawableMargin()
    {
        return $this->withdrawable_margin;
    }
  
    /**
     * Sets withdrawable_margin
     * @param Number $withdrawable_margin 
     * @return $this
     */
    public function setWithdrawableMargin($withdrawable_margin)
    {
        
        $this->withdrawable_margin = $withdrawable_margin;
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
