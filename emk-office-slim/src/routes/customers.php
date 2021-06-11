<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

// Get all customers

$app->get('/api/customers', function (Request $request, Response $response){

    $sql ="SELECT * FROM jksonntag";

    try {
        $db = new db();
        $db = $db->connect();

        $stmt = $db->query($sql);
        $test = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;

        echo json_encode($test);

    } catch(PDOException $e) {
        echo '{"error": {"text": '.$e->getMessage().'}}';

    }
});

$app->post('/api/addAtendees', function(Request $requests, Response $response){
    print_r( $requests);
    foreach ($requests as $request) {
        echo $request;

        $vorname = $request->getParam('vorname');
        $nachname = $request->getParam('nachname');
        $phone = $request->getParam('phone');
        $email = $request->getParam('email');
        $kind = $request->getParam('kind');
        $parentid = $request->getParam('parentid');
        $partner = $request->getParam('partner');
        $age = $request->getParam('age');
        $ordinandname = $request->getParam('ordinandname');
        $ordivite = $request->getParam('ordivite');
        $bezirk = $request->getParam('bezirk');

        $sql = "INSERT INTO jksonntag (del_vorname, del_nachname, del_phone, del_email, del_kind, del_parentid, del_partner, del_age, del_odrinandname, del_ordivite, del_bezirk) VALUES 
        (:vorname, :nachname, :phone, :email, :kind, :parentid, :partner, :age, :ordinandname, :ordivite, bezirk )";

        try {
            $db = new db();
            $db = $db->connect();

            $stmt = $db-prepare($sql);

            $stmt->bindParam(':vorname', $vorname);
            $stmt->bindParam(':nachname', $nachname);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':kind', $kind);
            $stmt->bindParam(':parentid', $parentid);
            $stmt->bindParam(':partner', $partner);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':ordinandname', $ordinandname);
            $stmt->bindParam(':ordivite', $ordivite);
            $stmt->bindParam(':bezirk', $bezirk);

            $stmt->execute();

            echo '{"notice": {"text": "Customer Added"}';
        }catch(PDOException $e0){
            echo '{"error": {"text": '.$e->getMessage().'}}';
        }

    }
    echo "yes";


});