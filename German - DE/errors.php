<?php
/*
------------------
Language:   German
Type:       Errors
------------------
*/

$langerrors = array(
//ERROR TYPES
"ERROR"          => "Fehler",
"WARNING"        => "Warnung",
"SUCCESS"        => "Erfolg",
"INFO"           => "Info",

//BASIC ERRORS
"ERROR_NOCOMP"               => "Du hast kein Unternehmen. Erstelle erst eines!",
"ERROR_NOCOMP2"              => "Du hast kein Unternehmen.",
"ERROR_NOMONEY"              => "Dein Unternehmen hat nicht genug Geld auf dem Konto!",
"ERROR_INVALID_NUMBER"       => "Ungültige Zahl!",
"ERROR_INVALID_COMP2"        => "Warte.. nach welchen Unternehmen suchst du?",
"ERROR_INVALID_COMP"         => "Das Unternehmen existiert nicht!",
"ERROR_INVALID_CITY"         => "Ungültige Stadt!",
"ERROR_INVALID_COUNTRY"      => "Ungültiges Land!",
"ERROR_INVALID_OBJECT"       => "Ungültiges Objekt!",
"ERROR_LEVEL_TOO_LOW"        => "Du besitzt nicht das erforderliche Level!",
"ERROR_SELECTED"             => "Ausgewählt.",
"ERROR_INVALID_MEMBER"       => "Mitglied existiert nicht!",
"ERROR_INVALID_REQUEST"      => "Ungültige Anfrage!",


//Premium
"ERROR_PURCHASE_COMPL"           => "Kauf abgeschlossen.",
"ERROR_PAY_ID_INVALID"           => "Zahlungs-ID ungültig.",
"ERROR_PAYMENT_COMPL"            => "Zahlung abgeschlossen.",
"ERROR_PAYMENT_EXP"              => "Zahlung abgelaufen. Bitte versuche es erneut.",
"ERROR_PAYMENT_CANCELLED"        => "Du hast die Zahlung abgebrochen.",
"ERROR_PAYMENT_NOT_ACCEPTED"     => "Zahlung nicht angenommen.",
"ERROR_PREMIUM_BOUGHT"           => "Premium-Funktion gekauft.",
"ERROR_NOT_ENOUGH_CREDITS"       => "Du hast nicht genug Premium-Credits, Kaufe sie zuerst!",
"ERROR_PREMIUM_REQ"              => "Du wirst hierfür einen Premium-Account brauchen.",

//Video Reward
"ERROR_REWARD_CLAIMED"           => "Belohnung abgeholt!",
"ERROR_DAY_LIMIT_REACHED"        => "Tägliches Limit erreicht!",

//User

    //General
    "ERROR_TUTORIAL_SKIPPED"     => "Du hast das Tutorial übersprungen.",

    //Messages
    "ERROR_MESSAGE_SENT"         => "Nachricht gesendet.",
    "ERROR_BLACKLISTED"          => "Du hast dieses Mitglied blockiert!",
    "ERROR_MSG_SUBJECT_SHORT"    => "Betreff nicht lang genug!",
    "ERROR_MSG_CONTENT_SHORT"    => "Inhalt nicht lang genug!",
    "ERROR_INVALID_MESSAGE"      => "Nachricht nicht gefunden!",
    "ERROR_MSG_NO_SUBJECT"       => "Kein Betreff eingegeben!",
    "ERROR_MSG_NO_RECEIVER"      => "Kein Empfänger eingegeben!",
    "ERROR_MSG_NO_CONTENT"       => "Kein Inhalt eingegeben!",

    //Profile
    "ERROR_CURRENT_PASSWORD"     => "Du musst dein aktuelles Passwort eingeben!",
    "ERROR_NEW_PASSWORD"         => "Du musst dein neues Passwort eingeben!",
    "ERROR_PASSWORD_CHANGED"     => "Passwort geändert!",
    "ERROR_DATABASE_ERROR"       => "Datenbank-Fehler!",
    "ERROR_PASS_NOT_SAFE"        => "Das neue Passwort ist nicht sicher genug! Das Passwort sollte midestend 6 Zeichen lang sein und eine Zahl und einen Großbuchstaben enthalten.",
    "ERROR_PASS_INCORRECT"       => "Aktuelles Passwort inkorrekt!",
    "ERROR_TIMEZONE_CHANGED"     => "Zeitzone geändert.",
    "ERROR_INVALID_TIMEZONE"     => "Ungültige Zeitzone!",

//Unternehmen + Konzern

    //General
    "ERROR_NAME_EXISTS"          => "Name existiert bereits!",
    "ERROR_NAME_SHORT"           => "Name ist zu kurz! Minimum sind 6 Zeichen!",
    "ERROR_NAME_SHORT2"          => "Name ist zu kurz! Minimum sind 3 Zeichen!",
    "ERROR_NAME_LONG"            => "Name ist zu lang! Nur 18 Zeichen erlaubt!",
    "ERROR_NAME_LONG2"           => "Name ist zu lang! Nur 13 Zeichen erlaubt!",
    "ERROR_NO_WAREHOUSE"         => "Du hast kein Lagerhaus! Kaufe erst eins im Laden!",


    //Freights
    "ERROR_SPECIFY_FREIGHT"      => "Bitte gib die Ladung an, die du annehmen möchtest.",
    "ERROR_INVALID_FREIGHT"      => "Diese Ladungs-Nummer ist nicht gültig.",
    "ERROR_INVALID_TR_LICENSE"   => "Du hast keine gültige Trasport-Lizenz für diese Ladungs-Art.",
    "ERROR_WAREHOUSE_FULL"       => "Dein Lagerhaus ist zu klein. Upgrade es oder breche erst andere Ladungen ab!",
    "ERROR_INV_OR_ACC_FREIGHT"   => "Diese Ladung ist ungültig oder jemand anderes hat sie bereits angenommen.",
    "ERROR_FREIGHT_ACCEPTED"     => "Du hast diese Ladung angenommen Ladung.",

//Unternehmen

    //General
    "ERROR_INVALID_INVOICE"          => "Ungültige Rechnung!",
    "ERROR_NAME_CHANGED"             => "Name wurde geändert.",
    "ERROR_HQ_PART_CONCERN"          => "HQ kann nur gändert werden, wenn dein Unternehmen kein Teil eines Konzerns ist.",
    "ERROR_HQ_CHANGE_DAYS"           => "HQ kann nur alle 7 Tage geändert werden.",
    "ERROR_HQ_CHANGED"               => "Unternehmen HQ has been changed.",
    "ERROR_MONEY_TRANSFERED"         => "Geld erfolgreich transferiert!",
    "ERROR_LEVEL_BANK_ACC"           => "Du musst mindestens Level 7 erreicht haben um ein Sparbuch zu eröffnen!",
    "ERROR_NOMONEY_SAVINGS"          => "Du hast nicht genug Geld auf deinem!",
    "ERROR_NOBANKACC"                => "Du hast kein Sparbuch! Fordere erst eins im Laden an!",
    "ERROR_COMPMADE"                 => "Das Unternehmen wurde erstellt!",
    "ERROR_ALREADY_COMP"             => "Du hast bereit ein Unternehmen!",
    "ERROR_COMP_NOPROP"              => "Unternehmen hat keine Gebäude.",
    "ERROR_COMPSTILLINCONCERN"       => "Dein Unternehmen ist noch Teil eines Konzerns. Trete erst aus dem Konzern aus!",
    "ERROR_ACTIVE_MARKETSALE"        => "Dein Unternehmen hat LKW oder Anhänger zum verkauf auf dem Markt. Breche erst den Verkauf ab!",
    "ERROR_COMP_REMOVED"             => "Dein Unternehmen has been removed.",
    "ERROR_UPGRADE_TR_LICENSE"       => "Du musst erst deine Transport-Lizenz upgraden!",

    "ERROR_CANT_SPEEDUP_ACTION_TYPE" => "Du kannst diese Art von Aktion nicht beschleunigen.",

    //Garage & Lagerhaus
    "ERROR_NO_GARAGE"                => "Du hast keine Garage! Kaufe erst eine im Laden!",
    "ERROR_GARAGE_FULL"              => "Deine Garage ist zu klein. Upgrade sie zuerst!",

    "ERROR_WAREHOUSE_DOWNGRADED"     => "Du hast dein Lagerhaus gedowngradet.",
    "ERROR_GARAGE_DOWNGRADED"        => "Du hast deine Garage gedowngradet.",
    "ERROR_WAREHOUSE_UPGRADED"       => "Du hast dein Lagerhaus geupgradet.",
    "ERROR_GARAGE_UPGRADED"          => "Du hast deine Garage geupgradet.",
    "ERROR_DOWNGRADE_LEVEL1"         => "Downgrade bei Level 1 nicht möglich!",

    //Transport License
    "ERROR_GET_PREV_LICENSES"        => "Du musst erst die vorherigen Lizenzen erhalten um diese zu bekommen!",
    "ERROR_TR_LICENSE_REQ_LEVEL"     => "Du brauchst ein höheres Level für diese Lizenz!",
    "ERROR_LICENSE_NOT_AVAILABLE"    => "Lizenz niht verfügbar!",
    "ERROR_TR_LICENSE_UPGRADED"      => "Glückwunsch! Du hast deine Transport-Lizenz!",

    //Contracts
    "ERROR_CONTRACT_TECH_FEW"        => "Dein Techniker-Vertrag bietet dir zu wenige Techniker. Bitte wähle einen anderen Vertrag oder warte bis dein Techniker verfügbar ist.",
    "ERROR_CONTRACT_NO_TECH"         => "Du hast keinen aktiven Techniker-Vertrag. Wähle einen im Menü unter Verträge aus.",

    //Buy and Sell (Shop, etc.)
    "ERROR_OBJECT_BOUGHT"            => "Objekt gekauft.",
    "ERROR_OBJECT_SOLD"              => "Objekt verkauft.",
    "ERROR_MAX_OBJECTS_REACHED"      => "Maximal erlaubte Objekte erreicht!",
    "ERROR_SELL_DONT_HAVE"           => "Du versuchst etwas zu verkaufen, dass du nicht hast..",
    "ERROR_TRUCK_BOUGHT"             => "LKW gekauft!",
    "ERROR_TRAILER_BOUGHT"           => "Anhänger gekauft!",

    //Steal Fuel
    "ERROR_ST_FUEL_LEVEL_REQ"        => "Du brauchst ein höheres Level um Treibstoff zu klauen!",
    "ERROR_ST_FUEL_OTHER_LEVEL_REQ"  => "Die Person, von der du Treibstoff klauen möchtest, muss ein höheres LavelPC als du sein.",
    "ERROR_ST_FUEL_TOO_MUCH"         => "Du möchtest nicht verhaftet werden oder? Treibstoff klauen ist nur einmal pro Stunde möglich!",
    "ERROR_ST_FUEL_FT_REQ"           => "Du wirst einen Treibstoff-Tank brauchen. Kaufe ihn zuerst im Laden!",
    "ERROR_ST_FUEL_PROTECTED_LOCK"   => "Zu schade.. Der Treibstoff-Tank wurde mit einem Schloss gesichert!",
    "ERROR_ST_FUEL_FAILED"           => "Nicht dein Glücksmoment.. Der Unternehmens-Inhaber sah dich!",
    "ERROR_ST_FUEL_SUCCESS"          => "Du hast erfolgreich Treibstoff von diesem Unternehmen geklaut.",
    "ERROR_ST_FUEL_FT_EMPTY"         => "Zu schade.. Der Treibstoff-Tank dieses LKW war leer.",
    "ERROR_FUEL_TANK_FULL"           => "Dein Treibstoff-Tank ist voll.",

    //LKW & Anhänger Market
    "ERROR_TRUCK_SALE_ENDED"         => "Der Verkauf dieses LKW wurde abgebrochen!",
    "ERROR_TRAILER_SALE_ENDED"       => "Der Verkauf dieses Anhängers wurde abgebrochen!",
    "ERROR_CANT_BUY_OWN_TRUCKS"      => "Du kannst nicht deine eigenen LKW kaufen!",
    "ERROR_CANT_BUY_OWN_TRAILERS"    => "Du kannst nicht deine eigenen Anhänger kaufen!",
    "ERROR_LEVEL_MARKET"             => "Du musst Level 5 erreichen um auf dem Markt handeln zu können!",
    "ERROR_LEVEL_MARKET_SELL"        => "Du musst Level 5 erreichen um auf dem Markt handeln zu können!",
    "ERROR_MARKET_INVALID_PRICE"     => "Ungültiger Preis. Gib einen Preis ein zwischen:",
    "ERROR_TRUCK_MARKET_AVAILABLE"   => "Dein LKW ist jetzt auf dem Markt verfügbar.",
    "ERROR_TRAILER_MARKET_AVAILABLE" => "Dein Anhänger ist jetzt auf dem Markt verfügbar.",

    //Fuelstation
    "ERROR_COUNTRY_NOT_RECEIVED"     => "Das System hat das gewählte Land nicht erhalten.",
    "ERROR_NO_TRUCKS_FOR_REFILL"     => "Dein Unternehmen hat keinen zu betankenden LKW in diesem Land!",
    "ERROR_TRUCK_NO_REFILL_NEEDED"   => "Dieser LKW muss gerade nicht getankt werden.",
    "ERROR_NO_CONCERN_FUELSTATION"   => "Keine Konzern-Tankstelle in diesem Land verfügbar.",
    "ERROR_NO_CONCERN_FUEL"          => "Deine Konzern-Tankstelle hat nicht ausreichend Treibstoff verfügbar.",
    "ERROR_BUY_FUELTANK"             => "Bitte kaufe erst einen Treibstoff-Tank im Laden.",
    "ERROR_EMPTY_FUELTANK"           => "Dein Treibstoff-Tank hat nicht ausreichend Treibstoff verfügbar. Versuche Treibstoff von anderen Unternehmen zu klauen um ihn wieder aufzufüllen.",
    "ERROR_TRUCK_NOT_REFUELING"      => "Dieser LKW tankt aktuell nicht!",

    //Friends & Enemies
    "ERROR_FRIEND_DELETED"           => "Diese Person wurde von deiner Freundesliste entfernt.",
    "ERROR_ENEMY_DELETED"            => "Diese Person wird nicht mehr blockiert.",
    "ERROR_ALREADY_FRIEND_ENEMY"     => "Dieses Mitglied ist beriets dein Freund oder Feind!",
    "ERROR_MAX_FRIENDS"              => "Maximale Freunde erreicht. Lösche erst einige!",
    "ERROR_MAX_ENEMIES"              => "Maximale Feinde erreicht. Lösche erst einige!",
    "ERROR_FIEND_ADDED"              => "Diese Person wurde zu deiner Freundesliste hinzugefügt.",
    "ERROR_ENEMY_ADDED"              => "Diese Person wurde blockiert.",
    "ERROR_SELECT_FRIEND_ENEMY"      => "Bitte wähle erst jemanden aus!",

    //Ladung
    "ERROR_CHOOSE_FREIGHT"           => "Du musst erst eine Ladung auswählen!",
    "ERROR_PREM_AUTO_SELECT"         => "Premium-Account für diese Funktion benötigt!",
    "ERROR_FREIGHT_OTHER_COMP"       => "Diese Ladung gehört nicht zu deinem Unternehmen.",
    "ERROR_EMPL_SELECTED"            => "Mitarbeiter ausgewählt.",
    "ERROR_TRAILER_SELECTED"         => "Anhänger ausgewählt.",
    "ERROR_TRUCK_SELECTED"           => "LKW ausgewählt.",

    "ERROR_DETACH_ALL_FIRST"         => "Du musst erst alles von der Ladung entfernen (ausgenommen den Anhänger).",
    "ERROR_FREIGHT_CANCELED"         => "Ladung abgebrochen.",
    "ERROR_FREIGHT_ALR_PROGRESS"     => "Diese Ladung wird bereits bearbeitet und kann nicht mehr abgebrochen werden!",

    "ERROR_FREIGHT_STATUS"           => "Diese Ladung hat nicht den richtigen Status um diese Aktion auszuführen!",
    "ERROR_UNPAID_INVOICES"          => "Dein Unternehmen hat ungezahlte Rechnungen. Zahle diese zuerst!",

    "ERROR_FREIGHT_READY"            => "Deine Ladung ist jetzt feritg!",
    "ERROR_SPEEDUP_MOMENT"           => "Du kannst den aktuellen Zustand deiner Ladung nicht beschleunigen!",

    //Insurance
    "ERROR_INSURANCE_LEVEL_REQ"      => "Du du brauchst ein höheres Level um deine Versicherung zu ändern!",
    "ERROR_INSURANCE_MAX_CHANGES"    => "Du kannst deine Versicherung nur ein paar mal am Tag ändern!",

    //Anhänger
    "ERROR_SELECT_TRAILER"           => "Bitte wähle zuerst einen Anhänger aus.",
    "ERROR_INVALID_TRAILER"          => "Der Anhänger existiert nicht!",
    "ERROR_TRAILER_EMPTY"            => "Der Anhänger ist noch leer!",
    "ERROR_TRAILER_OTHER_COMP"       => "Dieser Anhänger gehört nicht zu deinem Unternehmen!",
    "ERROR_TRAILER_DEP_CITY"         => "Der Anhänger ist nicht in der Stadt der Abfahrt!",
    "ERROR_TRAILER_DES_CITY"         => "Der Anhänger ist nicht in der richtigen Stadt um Abgeladen zu werden!",
    "ERROR_INCOR_TYPE_TRAILER"       => "Diese Anhänger-Art kann nicht für diese Ladung verwendet werden!",
    "ERROR_TRAILER_CANT_SELECT"      => "Du kannst keinen Anhänger bei diesem Ladungs-Zustand auswählen.",
    "ERROR_TRAILER_COND_LOW"         => "Der Zustand des Anhängers ist nicht gut genug oder dein Anhänger ist zu alt für diese Tour!",
    "ERROR_TRAILER_OTHER_FREIGHT"    => "Der Anhänger wurde für eine andere Ladung ausgewählt!",
    "ERROR_TRAILER_OTHER_ACT"        => "Der Anhänger macht aktuell etwas anderes!",
    "ERROR_TRAILER_OTHER_ACT2"       => "Der verbundene Anhänger macht aktuell etwas anderes!",
    "ERROR_TRAILER_OTHER_ACT_FR"     => "Der Anhänger ist aktuell nicht in deiner Garage. Er ist aktuel mit einer Ladung verbunden oder macht etwas anderes.",
    "ERROR_TRAILER_OLD"              => "Der Anhänger ist zu alt für so eine lange fahrt!",
    "ERROR_TRAILER_SWITCHED"         => "Zu einem anderen Anhänger gewechselt.",
    "ERROR_TRAILER_STILL_LOADED"     => "Der Anhänger ist aktuell beladen. Du musst deinen Anhänger erst entladen!",
    "ERROR_TRAILER_READY"            => "Dein Anhänger ist jetzt bereit!",
    "ERROR_TRAILER_REPAIR_INPOSSIBLE"=> "Es ist nicht möglich diesen Anhänger zu reparieren.",

        //Transfer
        "ERROR_TRAILER_ALREADY_CITY" => "Der Anhänger ist bereits in dieser Stadt!",
        "ERROR_TRAILER_DRIVING_CITY" => "Der Anhänger wird transportiert.",

        //Selling
        "ERROR_TRAILER_REP_BEF_SELL" => "Repariere deinen Anhänger bevor du ihn verkaufst!",
        "ERROR_TRAILER_SOLD"         => "Anhänger verkauft!",


    //LKW
    "ERROR_SELECT_TRUCK"             => "Bitte wähle erst einen LKW aus.",
    "ERROR_INVALID_TRUCK"            => "Der LKW existiert nicht!",
    "ERROR_TRUCK_OTHER_COMP"         => "Dieser LKW gehört nicht zu deinem Unternehmen!",
    "ERROR_TRUCK_DEP_CITY"           => "Der LKW ist nicht in der Stadt der Abfahrt!",
    "ERROR_TRUCK_FEW_HP"             => "Der LKW hat nicht genug Leistung für den LKW!",
    "ERROR_TRUCK_OTHER_ACT"          => "Der LKW macht aktuell etwas anderes!",
    "ERROR_TRUCK_COND_LOW"           => "Der Zustand des LKW ist nicht gut genug oder dein LKW ist zu alt für diese Tour!",
    "ERROR_TRUCK_LOW_FUEL"           => "Der LKW hat nicht genug Treibstoff für diese Tour!",
    "ERROR_TRUCK_OLD"                => "Der LKW ist zu alt für so eine lange fahrt!",
    "ERROR_TRUCK_OTHER_FREIGHT"      => "Der LKW wurde für eine andere Ladung ausgewählt!",
    "ERROR_TRUCK_SWITCHED"           => "Zu einem anderen LKW gewechselt.",
    "ERROR_TRUCK_OTHER_ACT2"         => "Der verbundene LKW macht aktuell etwas anderes!",
    "ERROR_TRUCK_OTHER_ACT_FR"       => "Der LKW ist aktuell nicht in deiner Garage. Er ist aktuel mit einer Ladung verbunden oder macht etwas anderes.",
    "ERROR_TRUCK_FREIGHT_STAGE"      => "Du kannst keinen LKW bei diesem Ladungs-Zustand auswählen.",
    "ERROR_TRUCK_READY"              => "Dein LKW ist jetzt bereit!",
    "ERROR_TRUCK_REPAIR_INPOSSIBLE"  => "Es ist nicht möglich diesen LKW zu reparieren.",
    "ERROR_TRUCK_HQ_REQ"             => "Der LKW in der Stadt deines Hauptquartiers sein um diese Aktion ausführen zu könnn.",

        //Transfer
        "ERROR_TRUCK_ALREADY_CITY"   => "Der LKW ist bereits in dieser Stadt!",
        "ERROR_TRUCK_DRIVING_CITY"   => "Der LKW wird transportiert.",

        //Selling
        "ERROR_TRUCK_REP_BEF_SELL"   => "Repariere deinen LKW bevor du ihn verkaufst!",
        "ERROR_TRUCK_SOLD"           => "LKW verkauft!",

        //Treibstoff-Tank Lock
        "ERROR_NO_FT_LOCK_AVAILABLE" => "Du hast kein Treibstoff-Tank-Schloss verfügbar. Kaufe erst eins im Laden!",
        "ERROR_TRUCK_ALREADY_FT_LOCK"=> "Dein LKW hat bereits ein Treibstoff-Tank-Schloss.",
        "ERROR_TRUCK_NO_FT_LOCK"     => "Dein LKW hat kein Treibstoff-Tank-SChloss.",

        //Navigation Unit
        "ERROR_NO_NAV_AVAILABLE"     => "Du hast kein Navigationsgerät verfügbar. Kaufe erst eins im Laden!",
        "ERROR_TRUCK_ALREADY_NAV"    => "Dein LKW hat bereits ein Navigationsgerät.",
        "ERROR_TRUCK_NO_NAV"         => "Dein LKW hat kein Navigationsgerät.",

    //Fahrer
    "ERROR_SELECT_TRUCKER"           => "Bitte wähle erst einen Fahrer aus.",
    "ERROR_INVALID_TRUCKER"          => "Der Fahrer existiert nicht!",
    "ERROR_TRUCKER_OTHER_COMP"       => "Dieser Fahrer arbeitet nicht für dein Unternehmen!",
    "ERROR_TRUCKER_DEP_CITY"         => "Der Fahrer ist nicht in der Stadt der Abfahrt!",
    "ERROR_TRUCKER_LICENSE_LOW"      => "Der Fahrer hat keine gültige Lizenz für diesen Ladungstyp!",
    "ERROR_TRUCKER_SICK"             => "Der Fahrer ist momentan krank!",
    "ERROR_TRUCKER_NEEDS_SLEEP"      => "Der Fahrer schläft ein. Tu etwas dagegen!",
    "ERROR_TRUCKER_OTHER_ACT"        => "Der Fahrer macht aktuell etwas anderes!",
    "ERROR_TRUCKER_FREIGHT_STAGE"    => "Du kannst keinen Fahrer bei diesem Ladungs-Zustand auswählen.",
    "ERROR_TRUCKER_OTHER_FREIGHT"    => "Der Fahrer wurde für eine andere Ladung ausgewählt!",
    "ERROR_TRUCKER_SWITCHED"         => "Zu einem anderen Fahrer gewechselt.",
    "ERROR_TRUCKER_OTHER_ACT2"       => "Der verbundene Fahrer macht aktuell etwas anderes!",

    //Lagerarbeiter
    "ERROR_SELECT_WHEMPL"            => "Bitte wähle erst einen Lagerarbeiter aus.",
    "ERROR_INVALID_WHEMPL"           => "Der Lagerarbeiter existiert nicht!",
    "ERROR_WHEMPL_OTHER_COMP"        => "Dieser Lagerarbeiter arbeitet nicht für dein Unternehmen!",
    "ERROR_WHEMPL_CITY"              => "Der Lagerarbeiter ist nicht in der richtigen Stadt!",
    "ERROR_WHEMPL_DEP_CITY"          => "Der Lagerarbeiter ist nicht in der Stadt der Abfahrt!",
    "ERROR_WHEMPL_SICK"              => "Der Lagerarbeiter ist momentan krank!",
    "ERROR_WHEMPL_OTHER_ACT"         => "Der Lagerarbeiter macht aktuell etwas anderes!",
    "ERROR_WHEMPL_NEEDS_SLEEP"       => "Der Lagerarbeiter schläft ein. Tu etwas dagegen!",
    "ERROR_WHEMPL_FREIGHT_STAGE"     => "Du kannst keinen Lagerarbeiter bei diesem Ladungs-Zustand auswählen.",
    "ERROR_WHEMPL_OTHER_FREIGHT"     => "Der Lagerarbeiter wurde für eine andere Ladung ausgewählt!",
    "ERROR_WHEMPL_SWITCHED"          => "Zu einem anderen Lagerarbeiter.",
    "ERROR_WHEMPL_OTHER_ACT2"        => "Der verbundene Lagerarbeiter macht aktuell etwas anderes!",

    //Manager
    "ERROR_SELECT_MGR"               => "Bitte wähle erst einen Manager aus.",
    "ERROR_SELECT_MGR_NEW"           => "Bitte wähle erst einen Manager aus. Das ist eine neue Funktion in Level 2!",
    "ERROR_SELECT_MGR_LEVEL"         => "Du musst Level 2 erreichen um einen Manager auszuwählen!",
    "ERROR_MGR_OTHER_COMP"           => "Dieser Manager arbeitet nicht für dein Unternehmen!",
    "ERROR_MGR_OTHER_ACT"            => "Der Manager macht aktuell etwas anderes!",
    "ERROR_MGR_NEEDS_SLEEP"          => "Der Manager schläft ein. Tu etwas dagegen!",
    "ERROR_MGR_CANT_SELECT"          => "Du kannst keinen Manager bei diesem Ladungs-Zustand auswählen.",
    "ERROR_INVALID_MGR"              => "Dieser Manager existiert nicht!",
    "ERROR_MGR_OTHER_FREIGHT"        => "The Manager wurde für eine andere Ladung ausgewählt!",
    "ERROR_MGR_OTHER_ACT2"           => "Der verbundene Manager macht aktuell etwas anderes!",
    "ERROR_MGR_SWITCHED"             => "Zu einem anderen Manager gewechselt.",

    //Finances
    "ERROR_WAREHOUSE_FULL2"              => "Dein Lagerhaus is zu klein. Upgrade es zuerst!",
    "ERROR_ACCOUNTANT_REQ"               => "Du brauchst einen Buchhalter (verfügbar ab Level 3) um die Finanzen deines Unternehmens anzusehen!",
    "ERROR_PREM_FINANCE_DAYS"            => "Du brauchst einen Premium-Account um die Finanzen der letzten 14 Tage anzusehen.",
    "ERROR_NO_DATA"                      => "Keine Daten in dem gewählten Zeitraum verfügbar.",

    //Contracts
    "ERROR_SPECIFY_CONTRACT"             => "Bitte wähle den Vertrag aus, den du annehmen willst.",
    "ERROR_INVALID_CONTRACT"             => "Dieser Vertrag ist nicht gültig.",
    "ERROR_CONTRACT_ACCEPTED"            => "Vertrag angenommen.",

    //Employees
    "ERROR_SELECT_EMPLOYEE"              => "Du musst einen Mitarbeiter auswählen!",
    "ERROR_INVALID_EMPLOYEE"             => "Dieser Mitarbeiter existiert nicht!",
    "ERROR_INVALID_EMPLOYEE2"            => "Ungültiger Mitarbeiter!",
    "ERROR_EMPLOYEE_OTHER_COMP"          => "Dieser Mitarbeiter arbeitet nicht für dein Unternehmen!",
    "ERROR_EMPLOYEE_OTHER_ACTION"        => "Dieser Mitarbeiter macht etwas anderes!",
    "ERROR_EMPLOYEE_OTHER_FREIGHT"       => "Dieser Mitarbeiter ist mit einer Ladung verbunden!",
    "ERROR_FIRE_PREMIUM"                 => "es ist nicht möglich einen Premium-Mitarbeiter zu feuern!",
    "ERROR_EMPLOYEE_FIRED"               => "Du hast diesen Mitarbeiter gefeuert.",
    "ERROR_EMPLOYEE_READY"               => "Dein Mitarbeiter ist jetzt bereit!",
    "ERROR_SPEEDUP_EMPL_RESTRIC"         => "Du kannst dise Aktion nicht beschleunigen!",
    "ERROR_EMPLOYEE_SICK"                => "Dieser Mitarbeiter ist momentan krank!",
    "ERROR_EMPLOYEE_NO_SLEEP"            => "Dieser Mitarbeiter braucht aktuell keinen Schlaf!",
    "ERROR_EMPLOYEE_SLEEP_STARTED"       => "Dieser Mitarbeiter schläft jetzt.",
    "ERROR_EMPLOYEE_NEEDS_SLEEP"         => "Dieser Mitarbeiter muss erst schlafen!",
    "ERROR_EMPLOYEE_ALREADY_CITY"        => "Der Mitarbeiter ist bereits in dieser Stadt!",
    "ERROR_EMPLOYEE_DRIVING_TRANSFER"    => "Der Mitarbeiter fährt jetzt zur geforderten Stadt!",
    "ERROR_SPECIFY_START_CITY_EMPL"      => "Bitte wähle die Stadt aus, in der dein Mitarbeiter anfangen soll.",
    "ERROR_SPECIFY_EMPLOYEE_HIRE"        => "Bitte wähle einen Mitarbeiter aus, den du einstellen möchtest.",

    "ERROR_MAX_TRUCKERS_REACHED"         => "Du hast die maximale Anzahl dieser Art von Fahrer erreicht. Wähle eine andere Art aus.",
    "ERROR_MAX_WHEMPL_REACHED"           => "Du hast die maximale Anzahl dieser Art von Lagerarbeiter erreicht. Wähle eine andere Art aus.",
    "ERROR_MAX_ACCOUNTANTS_REACHED"      => "Du hast die maximale Anzahl von Buchhaltern erreicht.",
    "ERROR_MAX_HRMGRS_REACHED"           => "Du hast die maximale Anzahl von Personal-Managern erreicht.",
    "ERROR_MAX_TECHMGRS_REACHED"         => "Du hast die maximale Anzahl von Tachnik-Managern.",
    "ERROR_MAX_MANAGERS_REACHED"         => "Du hast die maximale Anzahl dieser Art von Managern erreicht. Wähle eine andere Art aus.",

    "ERROR_HIRE_MGR_LEVEL"               => "Du kannst erst einen  Manager einstellen wenn du Level 2 erreicht hast.",
    "ERROR_HIRE_TECHMGR_LEVEL"           => "Du kannst erst einen Technik-Manager einstellen wenn du Level 19 erreicht hast.",
    "ERROR_HIRE_HRMGR_LEVEL"             => "Du kannst erst einen Personal-Manager einstellen wenn du Level 18 erreicht hast.",
    "ERROR_HIRE_ACCOUNTANT_LEVEL"        => "Du kannst erst einen Buchhalter einstellen wenn du Level 3 erreicht hast.",

    "ERROR_HIRE_TRUCKER_SUCCESS"         => "Du hast diesen Fahrer eingestellt.",
    "ERROR_HIRE_WHEMPL_SUCCESS"          => "Du hast diesen Lagerarbeiter eingestellt.",
    "ERROR_HIRE_MGR_SUCCESS"             => "Du hast diesen Manager eingestellt.",
    "ERROR_HIRE_TECHMGR_SUCCESS"         => "Du hast diesen Technik-Manager eingestellt.",
    "ERROR_HIRE_HRMGR_SUCCESS"           => "Du hast diesen Personal-Manager eingestellt.",
    "ERROR_HIRE_ACCOUNTANT_SUCCESS"      => "Du hast diesen Buchhalter eingestellt.",

    "ERROR_UPGRADE_TRUCKERS_ONLY"        => "Die Upgrade-Option gibt es nur für Fahrer!",
    "ERROR_ACHIEVE_PREV_LICENSE"         => "Du musst erst die vorherigen Lizenzen erreichen um diese zu erhalten!",
    "ERROR_INVALID_LICENSE"              => "Ungültige Lizenz!",
    "ERROR_LICENSE_UPGRADED"             => "Lizenz-Upgrade erfolgreich!",


//Konzern

    //General
    "ERROR_CONC_ALREADY_JOINED"      => "Dein Unternehmen ist bereits einem Konzern beigetreten.",
    "ERROR_INVALID_CONCERN"          => "Konzern existiert nicht!",
    "ERROR_NOCONCERN"                => "Dein Unternehmen st nicht Teil eines Konzerns.",
    "ERROR_CONC_SELECT_MEMBER"       => "Du musst ein Mitglied auswählen!",
    "ERROR_CONC_INVALID_MEMBER"      => "Ungültiges Mitlied!",
    "ERROR_MEMBER_NOT_IN_CONC"       => "Diese Person ist nicht Teil deines Konzerns!",
    "ERROR_CONC_NOT_OWNER"           => "Du bist nicht der Konzern-Inhaber.",
    "ERROR_INSUF_RIGHTS"             => "Unzureicheende Rechte!",

    //Application
    "ERROR_CONC_ALREADY_APPLIED"     => "Du hast dich bereits bei diesem Konzern beworben! Sei geduldig Kollege :)",
    "ERROR_CONC_MAX_REACHED"         => "Max Mitglieder-Anzahl dieses Konzerns wurde schon erreicht.",
    "ERROR_CONC_MAX_REACHED2"        => "Max Mitglieder-Anzahl dieses Landes wurde schon erreicht. Upgrade erst dein Büro!",
    "ERROR_NOT_ACCEPTING"            => "Dieser Konzern nimmt aktuell keine neuen Mitglieder an.",
    "ERROR_LEVEL_CONCERN"            => "Du musst Level 6 erreicht haben um einem Konzern beizutreten.",
    "ERROR_CONC_APPLIED"             => "Du hast dich bei diesem Konzern beworben. Du musst warten, bis der Konzern-Inhaber dich annimmt.",
    "ERROR_CONC_INVALID_APPL"        => "Bewerbung für diesen Konzern konnte nicht gefunden werden.",
    "ERROR_CONC_APPL_CANCELED"       => "Du hast deine Bewerbung für diesen Konzern zurückgezogen.",

    //Promote, Fire, Retire & Delete
    "ERROR_CONC_ACTIVE_MEMBERS"      => "Dieser Konzern hat noch andere Mitglieder. Feuere sie zuerst!",
    "ERROR_CONC_ACTIVE_FREIGHTS"     => "Dieser Konzern hat noch aktive Ladungen. Breche oder schließe sie erst ab!",
    "ERROR_CONC_DELETED"             => "Du hast diesen Konzern gelöscht.",
    "ERROR_CONC_FIRED_MEMBER"        => "Du hast dieses Mitglied gefeuert.",
    "ERROR_CONC_PROMOTED_MEMBER"     => "Du hast dieses Mitglied befördert.",
    "ERROR_NO_CONC_PREMIUM_PROM"     => "Dieses Mitglied erfüllt nicht die Voraussetzungen um einen Konzern zu gründen.",
    "ERROR_OWNER_CANT_RETIRE"        => "Du bist Inhaber dieses Konzerns. Es ist nicht möglich, dass du den Konzern verlässt. Du kannst deinen Konzern stattdessen löschen.",
    "ERROR_CONC_OPEN_INVOICES2"      => "Du hast mit diesem Konzern noch offene Rechnungen. Zahle sie zuerst!",
    "ERROR_CONC_ACTIVE_FREIGHTS2"    => "Du hast noch aktive Konzern-Ladungen. Breche oder schließe sie erst ab!",
    "ERROR_CONC_RETIRED"             => "Du hast diesen Konzern verlassen.",

    //Create
    "ERROR_CONC_REQUIREMENTS"        => "Du erfüllst nicht die Voraussetzungen um einen Konzern zu gründen!",
    "ERROR_CONC_CREATED"             => "Der Konzern wurde erstellt!",
    "ERROR_INVALID_NAME"             => "Ungültiger Name!",

    //Properties
    "ERROR_INVALID_FUELST"           => "Ungültige Tankstelle!",
    "ERROR_FUELST_EXISTS"            => "Du hast bereits eine Tankstelle in diesem Land!",
    "ERROR_CONC_MONEY"               => "Dein Konzern hat nicht genug Geld!",
    "ERROR_FUELST_BOUGHT"            => "Tankstelle gekauft.",
    "ERROR_FUELST_REFUELED"          => "Tankstelle aufgefüllt.",
    "ERROR_FLPRICE_HIGH"             => "Preis ist zu hoch!",
    "ERROR_FLPRICE_SET"              => "Treibstoff-Preis festgelegt.",
    "ERROR_CONC_LEVEL"               => "Dein Konzern hat nicht das benötigte Level!",
    "ERROR_FUELST_UPGRADED"          => "Tankstellen-Upgrade durchgeführt.",
    "ERROR_INVALID_OFFICE"           => "Ungültiges Büro!",
    "ERROR_OFFICE_EXISTS"            => "Du hast bereits ein Büro in diesem Land!",
    "ERROR_OFFICE_BOUGHT"            => "Büro gekauft.",
    "ERROR_OFFICE_UPGRADED"          => "Büro-Upgrade durchgeführt.",
    "ERROR_CONC_NO_PROPERTIES"       => "Konzern does not have any Gebäude.",

    //Projekt
    "ERROR_INVALID_PROJECT"          => "Projekt nicht gefunden!",
    "ERROR_PROJECT_NOT_AVAIL"        => "Projekt ist nicht mehr verfügbar!",
    "ERROR_PROJECT_MAX_REACHED"      => "Dein Konzern hat bereits zwei offene Projekte!",
    "ERROR_PROJECT_ACCEPTED"         => "Projekt angenommen.",
    "ERROR_INCOMPLETE_PROJ_ACT"      => "Schließe erst alle Projekt-Aktivitäten ab!",
    "ERROR_PROJECT_CANCELED"         => "Projekt abgebrochen.",
    "ERROR_PROJECT_FINISHED"         => "Projekt abgeschlossen!",

    //Other
    "ERROR_CONC_DONATED"             => "Geld erfolgreich gespendet.",
    "ERROR_CONC_DONATION_SET"        => "Tägliche Spende festgelegt!",
    "ERROR_GENERAL_MESSAGE_SAVED"    => "Die Nachricht wurde gespeichert.",

    "ERROR_INVALID_LANGUAGE"         => "Ungültige Sprache.",
    "ERROR_LANGUAGE_CHANGED"         => "Sprache geändert.",
    "ERROR_RIGHTS_CHANGED"           => "Rechte geändert."
);
?>
