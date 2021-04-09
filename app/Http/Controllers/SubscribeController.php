<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aws\Sns\SnsClient; 
use Aws\Exception\AwsException;
use Aws\Credentials\Credentials;

class SubscribeController extends Controller
{
    public function subscribeOne() {
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
        
        $protocol = 'https';
        $endpoint = 'https://localhost:9000/test1';
        $topic = $topicArn;
        
        try {
            $result = $SnSclient->subscribe([
                'Protocol' => $protocol,
                'Endpoint' => $endpoint,
                'ReturnSubscriptionArn' => true,
                'TopicArn' => $topic,
            ]);
            var_dump($result);
        } catch (AwsException $e) {
            // output error message if fails
            error_log($e->getMessage());
        }    
    }


    public function subscribeTwo() {
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
        
        $protocol = 'https';
        $endpoint = 'https://localhost:9000/test2';
        $topic = $topicArn;
        
        try {
            $result = $SnSclient->subscribe([
                'Protocol' => $protocol,
                'Endpoint' => $endpoint,
                'ReturnSubscriptionArn' => true,
                'TopicArn' => $topic,
            ]);
            var_dump($result);
        } catch (AwsException $e) {
            // output error message if fails
            error_log($e->getMessage());
        }    
    }
}
