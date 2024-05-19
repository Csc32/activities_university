<?php
$url = "https://api.cohere.ai/v1/chat";

$headers = [
  "accept: application/json",
  'content-type: application/json',
  "Authorization: bearer NfH7hN4sbFnNOzzCcjtAkpBAARqLPc5K4TUlBzsa"
];
$prompt = readline("Give me information about:");
$data = [
  "chat_history" => [
    ["role" => "USER", "message" => "give me information about ice bears"],
    ["role" => "CHATBOT", "message" => "The icebears are white"]
  ],
  "message" => $prompt,
  "connectors" => [["id" => "web-search"]]
];
$curl = curl_init($url);
$data_string = json_encode($data);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

$response = curl_exec($curl);

$json_response = json_decode($response);
curl_close($curl);

$result = [];
