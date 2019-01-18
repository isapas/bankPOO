<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [

    "" => [
      "account",
      "showAccount",
    ],

    "delAccount" => [
      "account",
      "delAccount",
      ['id'=> ["integer"]]
   ],

    "addAccount" => [
      "account",
      "addForm"
    ],

    "transfer" => [
      "account",
      ""
    ],

    "deposit" => [
      "account",
      "makeDeposit",
      [
        "id" => ["integer"]
      ]
    ],

    "withdrawal" => [
      "account",
      "makeWithdrawal",
      [
        "id" => ["integer"]
      ]
    ]



  ];
}

 ?>
