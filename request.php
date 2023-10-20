<?php
$apiKey = "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";
$url = 'https://api.openai.com/v1/chat/completions';

$headers = array(
	"Authorization: Bearer {$apiKey}",
	"Content-Type: application/json"
);

// Define messages
$messages = array();
$message = array();
$message["role"] = "user";
$message["content"] = 'Onirix is an advanced artificial intelligence that can analyze and decode users dreams to predict their future. This evolutionary technology can, for example, predict situations such as a romantic encounter, problems with coworkers, school difficulties, or even serious illnesses. Please note that the results of the analysis must be presented in a clear and accurate way. First give the prediction of the situation, then second the prediction of future based on the dreams. And note that if it is a nightmare or a negative dream, do not predict anything, just reply with "I cannot analyse nightmare, please get professional help."  . The dream:' . $_REQUEST['prompt'];
$messages[] = $message;

// Define data
$data = array();
$data["model"] = "gpt-3.5-turbo";
$data["messages"] = $messages;
$data["max_tokens"] = 150;

// init curl
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);
if (curl_errno($curl)) {
	echo 'Error:' . curl_error($curl);
} else {
	echo $result;
}

curl_close($curl);
