<?php

/**
 * Slack Bot, http://tpkn.me/
 */
class SlackBot {
   public $channel;
   public $access_token;
   public $service_url = 'https://slack.com/api/chat.postMessage';

   function __construct($channel, $access_token, $service_url = null){
      $this->channel = $channel;
      $this->access_token = $access_token;

      if(isset($service_url)){
         $this->service_url = $service_url;
      }
   }

   public function says($text) {
      $body = array(
         'text' => $text,
         'channel' => $this->channel
      );

      $headers = array(
         'Content-Type: application/json; charset=utf-8',
         'Authorization: Bearer ' . $this->access_token,
      );

      $curl = curl_init($this->service_url);
      curl_setopt_array($curl, array(
         CURLOPT_POST => true,
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_HTTPHEADER => $headers,
         CURLOPT_POSTFIELDS => json_encode($body),
      ));

      $response = curl_exec($curl);

      if ($response === false) {
         die(curl_error($curl));
      }

      return json_decode($response, true);
   }
}

?>