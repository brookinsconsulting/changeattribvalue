<?php
	include_once( 'lib/ezutils/classes/ezoperationhandler.php' );
	include_once( "lib/ezutils/classes/ezhttptool.php" );
	$http =& eZHTTPTool::instance();
	 
	$objectId = (int)$http->variable( 'object_id' );
	$attributeId = (string) $http->variable( 'attribute_id' );
	$attributeValue = $http->variable( 'value' );
	$redirect_node = $http->variable( 'redirect_node' );
	
	// get Object
	$contentObject =& eZContentObject::fetch($objectId);

	$contentObjectAttributes =& $contentObject->contentObjectAttributes();
	$loopLenght = count( $contentObjectAttributes );
	// set content object attribute
	for( $i = 0; $i < $loopLenght; $i++ ){
		switch( $contentObjectAttributes[$i]->attribute( 'contentclass_attribute_identifier' ) ){
			case $attributeId:
				$contentObjectAttributes[$i]->setAttribute( 'data_int', $attributeValue );
				$contentObjectAttributes[$i]->store();
				break;
		}
	}

	$contentObject->setAttribute( 'status', EZ_VERSION_STATUS_DRAFT );
	$contentObject->store();

	// publish node
	$operationResult = eZOperationHandler::execute( 'content', 'publish', array( 'object_id' => $objectId, 'version' => 1 ) );

	// redirect to redirec_code if is specified
	if($redirect_node!=''){
		$module =& $Params['Module'];
		$module->redirectTo( '/content/view/full/'.$redirect_node);
	}
?>
