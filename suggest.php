<?php

// People Array @GET from DB
$people = [
    'Steve',
    'Syntyche',
    'Romaric',
    'Thery',
    'Caroline',
    'Ravel',
    'Tom',
    'Anthony',
    'Linda',
    'Derek',
    'Katie',
    'Mike',
    'Malcolm',
    'John',
    'Julie',
    'Kathy',
    'Mike',
    'Amanda',
    'Greg',
    'Mary',
    'Bernard',
    'Eloge',
    'Evan',
    'Farah',
    'Gregoire',
    'Harry',
    'Ilan',
    'Olivia',
    'Malcolm',
    'Jose'
];



//Get Query String
$q= $_REQUEST['q'];

$suggestion = "";

//Get Suggestions

if($q !== "")
    $q = strtolower($q);
    $len = strlen($q);
    
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ""){
                $suggestion = $person;
            }else{
                $suggestion .= ", $person";
            }
            
        }
    }

echo $suggestion === "" ? "No Suggestion " : $suggestion;



?>