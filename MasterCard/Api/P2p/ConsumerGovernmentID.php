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
			case "91d4d7da-d0b8-4a17-bef9-682246867dd8":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids", "create", array(), array());
			case "46e5c28a-48be-4977-8b0b-0a804eccfb5c":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "delete", array(), array());
			case "409687ef-13d6-4ce5-8864-1afb4f8b52de":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "read", array(), array());
			case "2bac5c27-2942-4879-afe1-191d473ee74f":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids", "query", array(), array());
			case "b16e85ff-8f7c-4069-99c7-40af6233116f":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "update", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext());
	}


   /**
	* Creates object of type ConsumerGovernmentID
	*
	* @param Map map, containing the required parameters to create a new object
	* @return ConsumerGovernmentID of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("91d4d7da-d0b8-4a17-bef9-682246867dd8", new ConsumerGovernmentID($map));
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
		return self::execute("46e5c28a-48be-4977-8b0b-0a804eccfb5c", new ConsumerGovernmentID($map));
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
		return self::execute("46e5c28a-48be-4977-8b0b-0a804eccfb5c", $this);
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
		return self::execute("409687ef-13d6-4ce5-8864-1afb4f8b52de",new ConsumerGovernmentID($map));
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
		return self::execute("2bac5c27-2942-4879-afe1-191d473ee74f",new ConsumerGovernmentID($criteria));
	}

	/**
	 * Updates an object of type ConsumerGovernmentID
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return ConsumerGovernmentID of the response
	 */
	public function update()  {
		return self::execute("b16e85ff-8f7c-4069-99c7-40af6233116f",$this);
	}






}

