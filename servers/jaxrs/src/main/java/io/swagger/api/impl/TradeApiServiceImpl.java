package io.swagger.api.impl;

import io.swagger.api.*;
import io.swagger.model.*;

import com.sun.jersey.multipart.FormDataParam;

import io.swagger.model.Trade;
import io.swagger.model.Error;
import java.math.BigDecimal;
import java.util.Date;
import io.swagger.model.TradeBin;

import java.util.List;
import io.swagger.api.NotFoundException;

import java.io.InputStream;

import com.sun.jersey.core.header.FormDataContentDisposition;
import com.sun.jersey.multipart.FormDataParam;

import javax.ws.rs.core.Response;

@javax.annotation.Generated(value = "class io.swagger.codegen.languages.JaxRSServerCodegen", date = "2015-11-30T13:35:57.938-06:00")
public class TradeApiServiceImpl extends TradeApiService {
  
      @Override
      public Response tradeGet(String symbol,String filter,String columns,BigDecimal count,BigDecimal start,Boolean reverse,Date startTime,Date endTime)
      throws NotFoundException {
      // do some magic!
      return Response.ok().entity(new ApiResponseMessage(ApiResponseMessage.OK, "magic!")).build();
  }
  
      @Override
      public Response tradeGetBucketed(String binSize,String symbol,String filter,String columns,BigDecimal count,BigDecimal start,Boolean reverse,Date startTime,Date endTime)
      throws NotFoundException {
      // do some magic!
      return Response.ok().entity(new ApiResponseMessage(ApiResponseMessage.OK, "magic!")).build();
  }
  
      @Override
      public Response tradeGetByDate(Date startTime,String symbol,Date endTime)
      throws NotFoundException {
      // do some magic!
      return Response.ok().entity(new ApiResponseMessage(ApiResponseMessage.OK, "magic!")).build();
  }
  
      @Override
      public Response tradeGetRecent(BigDecimal count,String symbol)
      throws NotFoundException {
      // do some magic!
      return Response.ok().entity(new ApiResponseMessage(ApiResponseMessage.OK, "magic!")).build();
  }
  
}
