<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aws\Credentials\Credentials;
use Aws\Sns\SnsClient;
use Aws\Exception\AwsException;

class PublishMessageController extends Controller
{
    public function publishMessage() {
        $amazonRegion = 'us-east-2';
        $awsKey = 'AK------------';
        $awsSecret = '9y----------------';
        $topicArn = 'arn:aws:-------------';

        $SnSclient = new SnsClient([
            'version' => '2010-03-31',
            'region' => $amazonRegion,
            'credentials' => new Credentials(
                $awsKey,
                $awsSecret
            )
        ]);
        
        $message = 'Hello';
        $topic = $topicArn;
        
        try {
            $result = $SnSclient->publish([
                'Message' => $message,
                'TopicArn' => $topic,
            ]);
            var_dump($result);
        } catch (AwsException $e) {
            // output error message if fails
            error_log($e->getMessage());
        } 

    }
}
