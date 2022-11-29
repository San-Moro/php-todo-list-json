<?php

$todos = [
    [
        "text" => "HTML",
        "done" => true
    ],
    [
        "text" => "CSS",
        "done" => true
    ],
    [
        "text" => "Responsive design",
        "done" => true
    ],
    [
        "text" => "Javascript",
        "done" => true
    ],
    [
        "text" => "PHP",
        "done" => true
    ],
    [
        "text" => "Laravel",
        "done" => false
    ]
];

// aggiunta dei dati
if(isset($_POST["newTodo"])) {
    $new_todo = $_POST["newTodo"];
    $todos[] = $new_todo;
}

// invio dei dati
$todos_json = json_encode($todos);

header('Content-Type: application/json');

echo $todos_json;
?>