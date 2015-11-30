# coding: utf-8

"""
Copyright 2015 SmartBear Software

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.

    Ref: https://github.com/swagger-api/swagger-codegen
"""

from pprint import pformat
from six import iteritems


class Settlement(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self):
        """
        Settlement - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'symbol': 'str',
            'timestamp': 'date',
            'settlement_type': 'str',
            'settled_price': 'float',
            'bankrupt': 'float',
            'tax_base': 'float',
            'tax_rate': 'float'
        }

        self.attribute_map = {
            'symbol': 'symbol',
            'timestamp': 'timestamp',
            'settlement_type': 'settlementType',
            'settled_price': 'settledPrice',
            'bankrupt': 'bankrupt',
            'tax_base': 'taxBase',
            'tax_rate': 'taxRate'
        }

        self._symbol = None
        self._timestamp = None
        self._settlement_type = None
        self._settled_price = None
        self._bankrupt = None
        self._tax_base = None
        self._tax_rate = None

    @property
    def symbol(self):
        """
        Gets the symbol of this Settlement.


        :return: The symbol of this Settlement.
        :rtype: str
        """
        return self._symbol

    @symbol.setter
    def symbol(self, symbol):
        """
        Sets the symbol of this Settlement.


        :param symbol: The symbol of this Settlement.
        :type: str
        """
        self._symbol = symbol

    @property
    def timestamp(self):
        """
        Gets the timestamp of this Settlement.


        :return: The timestamp of this Settlement.
        :rtype: date
        """
        return self._timestamp

    @timestamp.setter
    def timestamp(self, timestamp):
        """
        Sets the timestamp of this Settlement.


        :param timestamp: The timestamp of this Settlement.
        :type: date
        """
        self._timestamp = timestamp

    @property
    def settlement_type(self):
        """
        Gets the settlement_type of this Settlement.


        :return: The settlement_type of this Settlement.
        :rtype: str
        """
        return self._settlement_type

    @settlement_type.setter
    def settlement_type(self, settlement_type):
        """
        Sets the settlement_type of this Settlement.


        :param settlement_type: The settlement_type of this Settlement.
        :type: str
        """
        self._settlement_type = settlement_type

    @property
    def settled_price(self):
        """
        Gets the settled_price of this Settlement.


        :return: The settled_price of this Settlement.
        :rtype: float
        """
        return self._settled_price

    @settled_price.setter
    def settled_price(self, settled_price):
        """
        Sets the settled_price of this Settlement.


        :param settled_price: The settled_price of this Settlement.
        :type: float
        """
        self._settled_price = settled_price

    @property
    def bankrupt(self):
        """
        Gets the bankrupt of this Settlement.


        :return: The bankrupt of this Settlement.
        :rtype: float
        """
        return self._bankrupt

    @bankrupt.setter
    def bankrupt(self, bankrupt):
        """
        Sets the bankrupt of this Settlement.


        :param bankrupt: The bankrupt of this Settlement.
        :type: float
        """
        self._bankrupt = bankrupt

    @property
    def tax_base(self):
        """
        Gets the tax_base of this Settlement.


        :return: The tax_base of this Settlement.
        :rtype: float
        """
        return self._tax_base

    @tax_base.setter
    def tax_base(self, tax_base):
        """
        Sets the tax_base of this Settlement.


        :param tax_base: The tax_base of this Settlement.
        :type: float
        """
        self._tax_base = tax_base

    @property
    def tax_rate(self):
        """
        Gets the tax_rate of this Settlement.


        :return: The tax_rate of this Settlement.
        :rtype: float
        """
        return self._tax_rate

    @tax_rate.setter
    def tax_rate(self, tax_rate):
        """
        Sets the tax_rate of this Settlement.


        :param tax_rate: The tax_rate of this Settlement.
        :type: float
        """
        self._tax_rate = tax_rate

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other): 
        """
        Returns true if both objects are equal
        """
        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """ 
        Returns true if both objects are not equal
        """
        return not self == other

