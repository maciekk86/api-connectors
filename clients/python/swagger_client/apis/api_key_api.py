# coding: utf-8

"""
ApiKeyApi.py
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
"""

from __future__ import absolute_import

import sys
import os

# python 2 and python 3 compatibility library
from six import iteritems

from ..configuration import Configuration
from ..api_client import ApiClient


class ApiKeyApi(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    Ref: https://github.com/swagger-api/swagger-codegen
    """

    def __init__(self, api_client=None):
        config = Configuration()
        if api_client:
            self.api_client = api_client
        else:
            if not config.api_client:
                config.api_client = ApiClient()
            self.api_client = config.api_client

    def api_key_get_keys(self, **kwargs):
        """
        Get your API Keys.
        

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.api_key_get_keys(callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param bool reverse: If true, will sort results newest first.
        :return: list[ApiKey]
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['reverse']
        all_params.append('callback')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_key_get_keys" % key
                )
            params[key] = val
        del params['kwargs']


        resource_path = '/apiKey'.replace('{format}', 'json')
        method = 'GET'

        path_params = {}

        query_params = {}
        if 'reverse' in params:
            query_params['reverse'] = params['reverse']

        header_params = {}

        form_params = {}
        files = {}

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json', 'application/x-www-form-urlencoded'])

        # Authentication setting
        auth_settings = []

        response = self.api_client.call_api(resource_path, method,
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=files,
                                            response_type='list[ApiKey]',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'))
        return response

    def api_key_create_key(self, **kwargs):
        """
        Create a new API Key.
        API Keys can also be created via <a href=\"https://github.com/BitMEX/market-maker/blob/master/generate-api-key.py\">this Python script</a>. See the <a href=\"/app/apiKeys\">API Key Documentation</a> for more information on capabilities.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.api_key_create_key(callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str name: Key name. This name is for reference only.
        :param str cidr: CIDR block to restrict this key to. To restrict to a single address, append \"/32\", e.g. 207.39.29.22/32. Leave blank or set to 0.0.0.0/0 to allow all IPs. Only one block may be set. <a href=\"http://software77.net/cidr-101.html\">More on CIDR blocks</a>
        :param str permissions: Key Permissions. All keys can read margin and position data. Additional permissions must be added. Available: [\"order\", \"withdraw\"].
        :param bool enabled: Set to true to enable this key on creation. Otherwise, it must be explicitly enabled via /apiKey/enable.
        :param str token: OTP Token (YubiKey, Google Authenticator)
        :return: ApiKey
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['name', 'cidr', 'permissions', 'enabled', 'token']
        all_params.append('callback')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_key_create_key" % key
                )
            params[key] = val
        del params['kwargs']


        resource_path = '/apiKey'.replace('{format}', 'json')
        method = 'POST'

        path_params = {}

        query_params = {}

        header_params = {}

        form_params = {}
        files = {}
        if 'name' in params:
            form_params['name'] = params['name']
        if 'cidr' in params:
            form_params['cidr'] = params['cidr']
        if 'permissions' in params:
            form_params['permissions'] = params['permissions']
        if 'enabled' in params:
            form_params['enabled'] = params['enabled']
        if 'token' in params:
            form_params['token'] = params['token']

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json', 'application/x-www-form-urlencoded'])

        # Authentication setting
        auth_settings = []

        response = self.api_client.call_api(resource_path, method,
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=files,
                                            response_type='ApiKey',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'))
        return response

    def api_key_remove(self, api_key_id, **kwargs):
        """
        Remove an API Key.
        

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.api_key_remove(api_key_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str api_key_id: API Key ID (public component). (required)
        :return: InlineResponse200
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['api_key_id']
        all_params.append('callback')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_key_remove" % key
                )
            params[key] = val
        del params['kwargs']

        # verify the required parameter 'api_key_id' is set
        if ('api_key_id' not in params) or (params['api_key_id'] is None):
            raise ValueError("Missing the required parameter `api_key_id` when calling `api_key_remove`")

        resource_path = '/apiKey'.replace('{format}', 'json')
        method = 'DELETE'

        path_params = {}

        query_params = {}

        header_params = {}

        form_params = {}
        files = {}
        if 'api_key_id' in params:
            form_params['apiKeyID'] = params['api_key_id']

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json', 'application/x-www-form-urlencoded'])

        # Authentication setting
        auth_settings = []

        response = self.api_client.call_api(resource_path, method,
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=files,
                                            response_type='InlineResponse200',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'))
        return response

    def api_key_disable(self, api_key_id, **kwargs):
        """
        Disable an API Key.
        

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.api_key_disable(api_key_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str api_key_id: API Key ID (public component). (required)
        :return: ApiKey
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['api_key_id']
        all_params.append('callback')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_key_disable" % key
                )
            params[key] = val
        del params['kwargs']

        # verify the required parameter 'api_key_id' is set
        if ('api_key_id' not in params) or (params['api_key_id'] is None):
            raise ValueError("Missing the required parameter `api_key_id` when calling `api_key_disable`")

        resource_path = '/apiKey/disable'.replace('{format}', 'json')
        method = 'POST'

        path_params = {}

        query_params = {}

        header_params = {}

        form_params = {}
        files = {}
        if 'api_key_id' in params:
            form_params['apiKeyID'] = params['api_key_id']

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json', 'application/x-www-form-urlencoded'])

        # Authentication setting
        auth_settings = []

        response = self.api_client.call_api(resource_path, method,
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=files,
                                            response_type='ApiKey',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'))
        return response

    def api_key_enable(self, api_key_id, **kwargs):
        """
        Enable an API Key.
        

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.api_key_enable(api_key_id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str api_key_id: API Key ID (public component). (required)
        :return: ApiKey
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['api_key_id']
        all_params.append('callback')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_key_enable" % key
                )
            params[key] = val
        del params['kwargs']

        # verify the required parameter 'api_key_id' is set
        if ('api_key_id' not in params) or (params['api_key_id'] is None):
            raise ValueError("Missing the required parameter `api_key_id` when calling `api_key_enable`")

        resource_path = '/apiKey/enable'.replace('{format}', 'json')
        method = 'POST'

        path_params = {}

        query_params = {}

        header_params = {}

        form_params = {}
        files = {}
        if 'api_key_id' in params:
            form_params['apiKeyID'] = params['api_key_id']

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json', 'application/x-www-form-urlencoded'])

        # Authentication setting
        auth_settings = []

        response = self.api_client.call_api(resource_path, method,
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=files,
                                            response_type='ApiKey',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'))
        return response
