<?php 
header('Content-type: application/json');
$pdo = new PDO("mysql:dbname=todolist;host=localhost","root","");

$action= (isset($_GET['action']))?$_GET['action']:$action='read';

switch($action){
    case 'add':
        $SQLsentense = $pdo->prepare("INSERT INTO calendarbd(title,description,color,textColor,start,end) 
        VALUES(:title,:description,:color,:textColor,:start,:end)");

        $resp=$SQLsentense->execute(array(
            "title"=>$_POST['title'],
            "description"=>$_POST['description'],
            "color"=>$_POST['color'],
            "textColor"=>$_POST['textColor'],
            "start"=>$_POST['start'],
            "end"=>$_POST['end']
        ));
        echo json_encode($resp);
        break;
    case 'delete':
        $resp=false;

        if(isset($_POST['ID'])){
            $SQLsentense=$pdo->prepare('DELETE FROM calendarbd WHERE id=:ID');
            $resp=$SQLsentense->execute(array("ID"=>$_POST['ID']));
        }
        echo json_encode($resp);
        break;
    case 'modify':
        $SQLsentense=$pdo->prepare('UPDATE calendarbd SET 
        title=:title,
        description=:description,
        color=:color,
        textColor=:textColor,
        start=:start,
        end=:end
        WHERE id=:ID');

        $resp=$SQLsentense->execute(array(
            "ID"=>$_POST['ID'],
            "title"=>$_POST['title'],
            "description"=>$_POST['description'],
            "color"=>$_POST['color'],
            "textColor"=>$_POST['textColor'],
            "start"=>$_POST['start'],
            "end"=>$_POST['end']
        ));

        echo json_encode($resp);

        break;
    default:
    //selección de eventos desde el calendario
    $requestSQL= $pdo->prepare("SELECT * FROM calendarbd");
    $requestSQL->execute();

    $res = $requestSQL->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($res);
}


?>