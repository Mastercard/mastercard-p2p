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
class ConsumerGovernmentID extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "694acb6f-06c8-4cfa-b0b4-0772add7478e":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids", "create", array(), array());
            case "102215b8-f466-4967-9555-476b76b8a743":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "delete", array(), array());
            case "2b3a8ebd-21be-4d54-b32f-2e6b733f3367":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "read", array(), array());
            case "82fafe55-a0ee-406f-911b-685181962e6f":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids", "query", array(), array());
            case "2e1b83dd-e1cb-4d3b-81bf-5c7408e5e777":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type ConsumerGovernmentID
    *
    * @param Map map, containing the required parameters to create a new object
    * @return ConsumerGovernmentID of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("694acb6f-06c8-4cfa-b0b4-0772add7478e", new ConsumerGovernmentID($map));
    }








   /**
    * Delete object of type ConsumerGovernmentID by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return ConsumerGovernmentID of the response.
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
        return self::execute("102215b8-f466-4967-9555-476b76b8a743", new ConsumerGovernmentID($map));
    }

   /**
    * Delete this object of type ConsumerGovernmentID
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return ConsumerGovernmentID of the response.
    */
    public function delete()
    {
        return self::execute("102215b8-f466-4967-9555-476b76b8a743", $this);
    }






    /**
     * Returns objects of type ConsumerGovernmentID by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ConsumerGovernmentID of the response
     */
    public static function read($id, $criteria = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if ($criteria != null) {
            $map->setAll($criteria);
        }
        return self::execute("2b3a8ebd-21be-4d54-b32f-2e6b733f3367",new ConsumerGovernmentID($map));
    }






    /**
     * Query objects of type ConsumerGovernmentID by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ConsumerGovernmentID of the response
     */
    public static function listAll($criteria)
    {
        return self::execute("82fafe55-a0ee-406f-911b-685181962e6f",new ConsumerGovernmentID($criteria));
    }

    /**
     * Updates an object of type ConsumerGovernmentID
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ConsumerGovernmentID of the response
     */
    public function update()  {
        return self::execute("2e1b83dd-e1cb-4d3b-81bf-5c7408e5e777",$this);
    }






}

