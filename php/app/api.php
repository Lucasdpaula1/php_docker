<?php if(isset($_POST['to']) && $_POST['to'] && $_SERVER['REQUEST_METHOD'] === 'POST'){
  $to = $_POST['to'];
  $context = $_POST['context'];
  $subject = 'você está recebendo esse email via container do docker, olá!';
  $data = json_encode([
    'to' => $to,
    'subject' => $subject,
    'context' => $context
  ]);
  $options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => $data,
    ],
];
$context = stream_context_create($options);
$response = file_get_contents('http://localhost:5000/send-email', false, $context);


echo $response;
}else{
  header("location: index.php");
}