<?php
// invio dei dati
$todos_str = file_get_contents("todo.json");
$todos = json_decode($todos_str, true);

if(isset($_POST["newTodo"])) {
    // aggiunta dei dati
    $new_todo = $_POST["newTodo"];
    $todos[] = [
        "text" => $_POST["newTodo"],
        "done" => false
    ];
    file_put_contents("todo.json", json_encode($todos));
} elseif (isset($_POST["toggleIndex"])) {
    // modifica di un todo al done
    $todoIndex = $_POST["toggleIndex"];
    $todos[$todoIndex]["done"] = !$todos[$todoIndex]["done"];
    file_put_contents("todo.json", json_encode($todos));
} elseif (isset($_POST["deleteIndex"])) {
    // cancellazione di un todo
    $todoIndex = $_POST["deleteIndex"];
    array_splice($todos, $todoIndex, 1);
    file_put_contents("todo.json", json_encode($todos));
}


header('Content-Type: application/json');
echo json_encode($todos);
?>