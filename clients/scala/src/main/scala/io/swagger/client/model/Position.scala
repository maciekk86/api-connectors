package io.swagger.client.model

import java.util.Date



case class Position (
  account: Number,
  symbol: String,
  underlying: String,
  quoteCurrency: String,
  currency: String,
  commission: Double,
  crossMargin: Boolean,
  rebalancedPnl: Number,
  prevRealisedPnl: Number,
  prevUnrealisedPnl: Number,
  prevClosePrice: Double,
  openingTimestamp: Date,
  openingQty: Number,
  openingCost: Number,
  openingComm: Number,
  openOrderBuyQty: Number,
  openOrderBuyCost: Number,
  openOrderBuyPremium: Number,
  openOrderSellQty: Number,
  openOrderSellCost: Number,
  openOrderSellPremium: Number,
  execBuyQty: Number,
  execBuyCost: Number,
  execSellQty: Number,
  execSellCost: Number,
  execQty: Number,
  execCost: Number,
  execComm: Number,
  currentTimestamp: Date,
  currentQty: Number,
  currentCost: Number,
  currentComm: Number,
  realisedCost: Number,
  unrealisedCost: Number,
  grossOpenCost: Number,
  grossOpenPremium: Number,
  grossExecCost: Number,
  isOpen: Boolean,
  markPrice: Double,
  markValue: Number,
  homeNotional: Double,
  foreignNotional: Double,
  posState: String,
  posCost: Number,
  posCost2: Number,
  posCross: Number,
  posInit: Number,
  posComm: Number,
  posLoss: Number,
  posMargin: Number,
  posMaint: Number,
  posAllowance: Number,
  taxableMargin: Number,
  initMargin: Number,
  maintMargin: Number,
  sessionMargin: Number,
  targetExcessMargin: Number,
  varMargin: Number,
  realisedGrossPnl: Number,
  realisedTax: Number,
  realisedPnl: Number,
  unrealisedGrossPnl: Number,
  longBankrupt: Number,
  shortBankrupt: Number,
  taxBase: Number,
  indicativeTaxRate: Double,
  indicativeTax: Number,
  unrealisedTax: Number,
  unrealisedPnl: Number,
  unrealisedPnlPcnt: Double,
  unrealisedRoePcnt: Double,
  simpleQty: Double,
  simpleCost: Double,
  simpleValue: Double,
  simplePnl: Double,
  simplePnlPcnt: Double,
  avgCostPrice: Double,
  avgEntryPrice: Double,
  breakEvenPrice: Double,
  marginCallPrice: Double,
  liquidationPrice: Double,
  bankruptPrice: Double,
  timestamp: Date)
  
