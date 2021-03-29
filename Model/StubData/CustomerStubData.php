<?php
/*
 * Copyright © Websolute spa. All rights reserved.
 * See LICENSE and/or COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Websolute\Stub\Model\StubData;

use Magento\Framework\Serialize\SerializerInterface;

class CustomerStubData
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @param SerializerInterface $serializer
     */
    public function __construct(
        SerializerInterface $serializer
    ) {
        $this->serializer = $serializer;
    }

    public function execute(string $type): array
    {
        $data = [];
        switch ($type) {
            case 'anagrafica':
                $val = <<<EOT
{
    "guid": "6b06beea-3b41-41ed-96ed-99cb7ab457c2",
    "cliFor": 12063,
    "dittaCg18": 1,
    "flgAttivo": 1,
    "gruppoCg10": 80,
    "idCliFor": 21220,
    "indElenchiMov3000": 99,
    "lastchange": "2020-07-29T08:41:16.327",
    "tipocfCg40": 0,
    "anagrafica": {
                "cap": "60035     ",
        "citta": "JESI",
        "codice": 12297,
        "codiceFiscale": "02443610429",
        "emailPec": "samaspubblicita@legalmail.it",
        "faxnum": "0731.203160",
        "flgAnagval": 1,
        "indemail": "jury@samaspubblicita.it",
        "indirizzoCO": "Via Cartiere Vecchie, 18",
        "lastchange": "2020-07-29T08:40:12.047",
        "partiva": "02443610429 ",
        "prov": "AN",
        "ragioneSociale": "SAMAS PUBBLICITA' S.r.l.",
        "tel1num": "0731.648282",
        "indirizzi": [
            {
                "codiceCg16": 12297,
                "cap": "60035     ",
                "citta": "JESI",
                "id": 146742,
                "indirizzoCompleto": "Via Cartiere Vecchie, 18",
                "numciv": "18",
                "pv": "AN",
                "statoCg07": 86,
                "via": "Cartiere Vecchie,",
                "tipologieIndirizzi": [
                    {
                        "id": 170869,
                        "idCG1J": 146742,
                        "tipo": 1,
                        "extensionData": []
                    }
                ],
                "extensionData": []
            }
        ],
        "statoEsteroCO": {
                    "codice": 86,
            "codIso": "IT",
            "datacee": "1995-01-01T00:00:00",
            "descr": "ITALIA",
            "extensionData": []
        },
        "extensionData": []
    },
    "condizionePagamentoCO": {
                "codPag": "R012",
        "descPag": "Ri.Ba. 60 gg fm",
        "scpercas": 0,
        "extensionData": []
    },
    "datiClassificazione": {
                "cliforCg44": 12063,
        "datacreaz": "2020-07-29T00:00:00",
        "dataultvar": "2020-07-29T00:00:00",
        "dittaCg18": 1,
        "fidoaziendale": 1000,
        "flgart62ctr": 0,
        "flgrottsingdoc": 0,
        "flgspeinc": 1,
        "indarrinfat": 0,
        "indgesfido": 0,
        "indgiorni": 0,
        "indstscadest": 0,
        "indtestof1": 0,
        "indtestof2": "0",
        "lastchange": "2020-07-29T08:38:36.65",
        "sc1percor": 50,
        "sc2percor": 15,
        "sc3percor": 5,
        "scaglspbanc": 1,
        "areaMG": {
                    "codiceAreaMG": "ITC",
            "descrarea": "CENTRO ITALIA",
            "dittaCg18": 1,
            "macroareaMg07": "EU ",
            "extensionData": []
        },
        "macAreaMG": {
                    "codiceMacroarea": "EU ",
            "descrmacroar": "EUROPA",
            "dittaCg18": 1,
            "extensionData": []
        },
        "macroCategoriaMG": {
                    "descrmacrocat": "AGENZIA PROMOZIONALE",
            "dittaCg18": 1,
            "macrocat": "PR2",
            "extensionData": []
        },
        "zonaMG": {
                    "areaMGMg08": "ITC",
            "codiceZona": "MAN",
            "descrzona": "ANCONA",
            "dittaCg18": 1,
            "macroareaMg08": "EU ",
            "extensionData": []
        },
        "extensionData": []
    },
    "intermedio": {
                "descr": "CLIENTI ITALIA",
        "dittaCg18": 1,
        "idprov": 1,
        "intermedio": 1,
        "extensionData": []
    },
    "extensionData": []
}
EOT;
                $data[] = $this->serializer->unserialize($val);
                break;
        }
        return $data;
    }
}
