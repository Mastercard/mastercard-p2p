<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\P2p;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class Consumer extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "b00a567e-54ab-465b-99d5-e863c14c61cc":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}", "delete", array(), array());
            case "10d125e6-c497-4cc0-b2a7-d631f87da2c0":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers", "create", array(), array());
            case "06414f6e-4ec6-4286-8385-3a142982e7d1":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}", "read", array(), array());
            case "b1c7a761-6f5b-44e6-acf6-cdf7cf6e4b6f":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers", "query", array("ref","contact_id_uri"), array());
            case "c8386ac2-2b06-4f57-9af3-4c01c915850b":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/search", "create", array(), array());
            case "065c4657-9ff6-4011-9779-6aef5ac94182":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }





   /**
    * Delete object of type Consumer by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return Consumer of the response.
    */
    public static function deleteById($id, $requestMap = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if (!empty($requestMap)) {
            $map->setAll($requestMap);
        }
        return self::execute("b00a567e-54ab-465b-99d5-e863c14c61cc", new Consumer($map));
    }

   /**
    * Delete this object of type Consumer
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return Consumer of the response.
    */
    public function delete()
    {
        return self::execute("b00a567e-54ab-465b-99d5-e863c14c61cc", $this);
    }


   /**
    * Creates object of type Consumer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Consumer of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("10d125e6-c497-4cc0-b2a7-d631f87da2c0", new Consumer($map));
    }









    /**
     * Returns objects of type Consumer by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Consumer of the response
     */
    public static function readByID($id, $criteria = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if ($criteria != null) {
            $map->setAll($criteria);
        }
        return self::execute("06414f6e-4ec6-4286-8385-3a142982e7d1",new Consumer($map));
    }






    /**
     * Query objects of type Consumer by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Consumer of the response
     */
    public static function listByReferenceOrContactID($criteria)
    {
        return self::execute("b1c7a761-6f5b-44e6-acf6-cdf7cf6e4b6f",new Consumer($criteria));
    }
   /**
    * Creates object of type Consumer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Consumer of the response of created instance.
    */
    public static function listByReferenceContactIDOrGovernmentID($map)
    {
        return self::execute("c8386ac2-2b06-4f57-9af3-4c01c915850b", new Consumer($map));
    }






    /**
     * Updates an object of type Consumer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Consumer of the response
     */
    public function update()  {
        return self::execute("065c4657-9ff6-4011-9779-6aef5ac94182",$this);
    }






}

