<?php

//Include the SDK using the Composer autoloader
date_default_time_get('Asia/Jakarta');
require 'aws-autoloader.php';

$s3 = new Aws\S3\S3Client([
	'version'  => 'latest',
	'region'   => 'us-east-1',
	'endpoint' => 'http://172.27.43.32:9000',		// For Example 
	'use_path_style_endpoint' => true,
	'credentials' => [
			'key'  =>  'TRXPTTBUCG50293ATNS',		// Get From Minio Config 
			'SECRET' => 'QtH1009/DKyLbyQs0Ll&jdmkQcAUmtnsL036',
	],

]);

// Send a PutObject request and get the result object in Minio.
$resul = $s3->putObject(array(
	'Bucket'		=>	'009admin',					// BucketName
	'Key'			=>	'Sai_Anju_MaAu.mp3', 		// File Name
	'SourceFile'	=>	'C:\xampp\htdocs\admin009\minio\admin009.exe',
	'Body'			=>	fopen('Sai_Anju_MaAu.mp3', 'r')  
));

echo $result['ObjectURL'];

?>
