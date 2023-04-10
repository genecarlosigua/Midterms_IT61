<?php

header('Access-Control-Allow-Origin: *');
$table =
    [
        "bikes" => [
            [
                "type" => "Mountain bike",
                "brand" => "Shimano",

                "entry" => [
                    "model_1" => "Tourney",
                ],
                "eunthusiast" => [

                    "model_1" => "Altus M2000",
                    "model_2" => "Acera M3000",
                    "model_3" => "Alivio M3100",
                    "model_4" => "Deore M6100,M5100,M4100"
                ],
                "professional" => [
                    "model_1" => "SLX M7100",
                    "model_2" => "Deore XT M8050",
                    "model_3" => "Deore XT DI2 M8100",
                    "model_4" => "XTR M9050",
                    "model_5" => "XTR DI2 M9100"
                ],

                "imgpath" => [

                    "entry" => [
                        "imgpath_1" => "../img/Tourney_GSET.jpg",
                    ],

                    "eunthusiast" => [

                        "imgpath_1" => "../img/Altus_GSET.jpg",
                        "imgpath_2" => "../img/Acera_GSET.jpg",
                        "imgpath_3" => "../img/Alivio_GSET.jpeg",
                        "imgpath_4" => "../img/DeoreXT_GSET.jpg"
                    ],
                    "professional" => [
                        "imgpath_1" => "../img/SLX_GSET.jpg",
                        "imgpath_2" => "../img/DeoreXT_GSET.jpg",
                        "imgpath_3" => "../img/DeoreXTDI2_GSET.jpg",
                        "imgpath_4" => "../img/XTR_GSET.jpg",
                        "imgpath_5" => "../img/XTRDI2_GSET.jpg"
                    ],

                ],



            ],
            [
                "type" => "Road Bike",
                "brand" => "Shimano",

                "entry" => [
                    "model_1" => "Claris R2000",
                    "model_2" => "Sora R3000",
                    "model_3" => "Tiagra 4700"
                ],
                "eunthusiast" => [
                    "model_1" => "105 R7000",
                    "model_2" => "105 DI2 R7150",
                    "model_3" => "Ultegra R8000",
                    "model_4" => "Ultegra DI2 R8100"
                ],
                "professional" => [
                    "model_1" => "Dura-Ace R9100",
                    "model_2" => "Dura-Ace DI2 R9200",

                ],

                "imgpath" => [

                    "entry" => [
                        "imgpath_1" => "../img/Claris_GSET.jpg",
                        "imgpath_2" => "../img/Sora_GSET.jpg",
                        "imgpath_3" => "../img/Tiagra_GSET.jpg",
                    ],

                    "eunthusiast" => [

                        "imgpath_1" => "../img/105_GSET.jpg",
                        "imgpath_2" => "../img/105DI2_GSET.jpeg",
                        "imgpath_3" => "../img/Ultegra_GSET.jpg",
                        "imgpath_4" => "../img/UltegraDI2_GSET.jpg",
                    ],
                    "professional" => [
                        "imgpath_1" => "../img/Duraace_GSET.jpg",
                        "imgpath_2" => "../img/DuraaceDI2_GSET.jpeg",

                    ],
                ],
            ],
            [
                "type" => "Downhill Bike",
                "brand" => "Shimano",

                "entry" => [
                    "model_1" => "",

                ],
                "eunthusiast" => [
                    "model_1" => "Zee M640",

                ],
                "professional" => [
                    "model_1" => "Saint N820"
                ],

                "imgpath" => [

                    "entry" => [
                        "imgpath_1" => "../img/Saint_GSET.jpg",
                    ],

                    "eunthusiast" => [
                        "imgpath_1" => "../img/Zee_GSET.jpeg",
                    ],
                    "professional" => [
                        "imgpath_1" => "../img/Saint_GSET.jpg"
                    ],
                ]
            ],
            [
                "type" => "Gravel Bike",
                "brand" => "Shimano",

                "entry" => [
                    "model_1" => "GRX 400",

                ],
                "eunthusiast" => [
                    "model_1" => "GRX RX600",
                    "model_2" => "GRX RX810",

                ],
                "professional" => [
                    "model_1" => "GRX RX815",
                ],

                "imgpath" => [

                    "entry" => [
                        "imgpath_1" => "../img/GRX400_GSET.jpg",
                    ],

                    "eunthusiast" => [

                        "imgpath_1" => "../img/GRXRX600_GSET.jpg",
                        "imgpath_2" => "../img/GRXRX810_GSET.jpg",
                    ],
                    "professional" => [
                        "imgpath_1" => "../img/GRXRX815_GSET.jpg",

                    ],
                ]
            ],
            [
                "type" => "TimeTrial Bike",
                "brand" => "Shimano",

                "entry" => [
                    "model_1" => "105 DI2 R7150",
                ],
                "eunthusiast" => [
                    "model_1" => "Ultegra DI2 R8100",

                ],
                "professional" => [
                    "model_1" => "Dura-Ace DI2 R9200",
                ],

                
                "imgpath" => [
                    "entry" => [
                        "imgpath_1" => "../img/105_GSET.jpg",
                    ],

                    "eunthusiast" => [
                        "imgpath_1" => "../img/UltegraDI2_GSET.jpg",
                    ],
                    "professional" => [
                        "imgpath_1" => "../img/DuraaceDI2_GSET.jpeg",

                    ],
                ],
            ],
        ]
    ];
$JSONtext = json_encode($table);
echo $JSONtext;