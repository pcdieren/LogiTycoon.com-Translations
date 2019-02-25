<?php
/*
------------------
Language:   English
Type:       Errors
------------------
*/

$langerrors = array(
//ERROR TYPES
"ERROR"          => "Error",
"WARNING"        => "Warning",
"SUCCESS"        => "Success",
"INFO"           => "Info",

//BASIC ERRORS
"ERROR_NOCOMP"               => "You do not have a company. Create one first!",
"ERROR_NOCOMP2"              => "You do not have a company.",
"ERROR_NOMONEY"              => "Your company does not have enough money on its payment account!",
"ERROR_INVALID_NUMBER"       => "Invalid number!",
"ERROR_INVALID_COMP2"        => "Wait.. what company are you looking for?",
"ERROR_INVALID_COMP"         => "That company does not exist!",
"ERROR_INVALID_CITY"         => "Invalid city!",
"ERROR_INVALID_COUNTRY"      => "Invalid country!",
"ERROR_INVALID_OBJECT"       => "Invalid object!",
"ERROR_LEVEL_TOO_LOW"        => "You do not have the required level!",
"ERROR_SELECTED"             => "Selected.",
"ERROR_INVALID_MEMBER"       => "Member does not exist!",
"ERROR_INVALID_REQUEST"      => "Invalid request!",


//Premium
"ERROR_PURCHASE_COMPL"           => "Purchase completed.",
"ERROR_PAY_ID_INVALID"           => "Payment ID invalid.",
"ERROR_PAYMENT_COMPL"            => "Payment completed.",
"ERROR_PAYMENT_EXP"              => "Payment expired. Please try again.",
"ERROR_PAYMENT_CANCELLED"        => "You have cancelled the payment.",
"ERROR_PAYMENT_NOT_ACCEPTED"     => "Payment not accepted.",
"ERROR_PREMIUM_BOUGHT"           => "Premium function bought.",
"ERROR_NOT_ENOUGH_CREDITS"       => "You do not have enough premium credits, buy them first!",
"ERROR_PREMIUM_REQ"              => "You will need a premium account for this.",

//Video Reward
"ERROR_REWARD_CLAIMED"           => "Reward claimed!",
"ERROR_DAY_LIMIT_REACHED"        => "Daily limit reached!",

//User

    //General
    "ERROR_TUTORIAL_SKIPPED"     => "You have skipped the tutorial.",

    //Messages
    "ERROR_MESSAGE_SENT"         => "Message sent.",
    "ERROR_BLACKLISTED"          => "You have been blacklisted by this member!",
    "ERROR_MSG_SUBJECT_SHORT"    => "Subject is not long enough!",
    "ERROR_MSG_CONTENT_SHORT"    => "Content is not long enough!",
    "ERROR_INVALID_MESSAGE"      => "Message not found!",
    "ERROR_MSG_NO_SUBJECT"       => "No subject filled!",
    "ERROR_MSG_NO_RECEIVER"      => "No receiver filled!",
    "ERROR_MSG_NO_CONTENT"       => "No content filled!",

    //Profile
    "ERROR_CURRENT_PASSWORD"     => "You have to fill in your current password!",
    "ERROR_NEW_PASSWORD"         => "You have to fill in a new password!",
    "ERROR_PASSWORD_CHANGED"     => "Password changed!",
    "ERROR_DATABASE_ERROR"       => "Database error!",
    "ERROR_PASS_NOT_SAFE"        => "New password is not safe enough! Password should be at least 6 characters and should contain a digit and a capital letter.",
    "ERROR_PASS_INCORRECT"       => "Current password incorrect!",
    "ERROR_TIMEZONE_CHANGED"     => "Timezone changed.",
    "ERROR_INVALID_TIMEZONE"     => "Invalid timezone!",

//Company + Corporation

    //General
    "ERROR_NAME_EXISTS"          => "Name already exists!",
    "ERROR_NAME_SHORT"           => "Name is too short! Minimum is 6 characters!",
    "ERROR_NAME_SHORT2"          => "Name is too short! Minimum is 3 characters!",
    "ERROR_NAME_LONG"            => "Name is too long! Only 18 characters allowed!",
    "ERROR_NAME_LONG2"           => "Name is too long! Only 13 characters allowed!",
    "ERROR_NO_WAREHOUSE"         => "You do not have a warehouse! Buy one at the shop first!",


    //Freights
    "ERROR_SPECIFY_FREIGHT"      => "Please specify the freight you want to accept.",
    "ERROR_INVALID_FREIGHT"      => "This freight number is not valid.",
    "ERROR_INVALID_TR_LICENSE"   => "You do not have a valid transport license for this freight type.",
    "ERROR_WAREHOUSE_FULL"       => "Your warehouse is too small. Upgrade it or cancel other freights first!",
    "ERROR_INV_OR_ACC_FREIGHT"   => "This freight is invalid or someone else has already accepted it.",
    "ERROR_FREIGHT_ACCEPTED"     => "You have accepted this freight.",

//Company

    //General
    "ERROR_INVALID_INVOICE"          => "Invalid invoice!",
    "ERROR_NAME_CHANGED"             => "Name has been changed.",
    "ERROR_HQ_PART_CONCERN"          => "HQ can only be changed if your company is not part of a corporation.",
    "ERROR_HQ_CHANGE_DAYS"           => "HQ can only be changed once every 7 days.",
    "ERROR_HQ_CHANGED"               => "Company HQ has been changed.",
    "ERROR_MONEY_TRANSFERED"         => "Money succesfully transfered!",
    "ERROR_LEVEL_BANK_ACC"           => "You have to be at level 7 to open a savings account!",
    "ERROR_NOMONEY_SAVINGS"          => "You do not have enough money on your savings account!",
    "ERROR_NOBANKACC"                => "You do not have a savings account! Request one in the shop first!",
    "ERROR_COMPMADE"                 => "The company has been made!",
    "ERROR_ALREADY_COMP"             => "You already have a company!",
    "ERROR_COMP_NOPROP"              => "Company does not have any buildings.",
    "ERROR_COMPSTILLINCONCERN"       => "Your company is still part of a corporation. Retire from your corporation first!",
    "ERROR_ACTIVE_MARKETSALE"        => "Your company has trucks or trailers for sale at the market. Cancel their sale first!",
    "ERROR_COMP_REMOVED"             => "Your company has been removed.",
    "ERROR_UPGRADE_TR_LICENSE"       => "You need to upgrade your transport license first!",

    "ERROR_CANT_SPEEDUP_ACTION_TYPE" => "You cannot speed up this type of action.",

    //Garage & Warehouse
    "ERROR_NO_GARAGE"                => "You do not have a garage! Buy one at the shop first!",
    "ERROR_GARAGE_FULL"              => "Your garage is too small. Upgrade it first!",

    "ERROR_WAREHOUSE_DOWNGRADED"     => "You have now downgraded your warehouse.",
    "ERROR_GARAGE_DOWNGRADED"        => "You have now downgraded your garage.",
    "ERROR_WAREHOUSE_UPGRADED"       => "You have now upgraded your warehouse.",
    "ERROR_GARAGE_UPGRADED"          => "You have now upgraded your garage.",
    "ERROR_DOWNGRADE_LEVEL1"         => "Downgrading not possible at level 1!",

    //Transport License
    "ERROR_GET_PREV_LICENSES"        => "You first have to achieve the previous licenses to get this one!",
    "ERROR_TR_LICENSE_REQ_LEVEL"     => "You will need a higher level to get this license!",
    "ERROR_LICENSE_NOT_AVAILABLE"    => "Unavailable license!",
    "ERROR_TR_LICENSE_UPGRADED"      => "Congratulations! You have got your transport license!",

    //Contracts
    "ERROR_CONTRACT_TECH_FEW"        => "Your technician contract offers you too few technicians. Please select another contract or wait until your technicians are available.",
    "ERROR_CONTRACT_NO_TECH"         => "You do not have an active technician contract. Select one in the menu under Contracts.",

    //Buy and Sell (Shop, etc.)
    "ERROR_OBJECT_BOUGHT"            => "Object bought.",
    "ERROR_OBJECT_SOLD"              => "Object sold.",
    "ERROR_MAX_OBJECTS_REACHED"      => "Maximum allowed objects reached!",
    "ERROR_SELL_DONT_HAVE"           => "You are trying to sell something you do not have..",
    "ERROR_TRUCK_BOUGHT"             => "Truck bought!",
    "ERROR_TRAILER_BOUGHT"           => "Trailer bought!",

    //Steal Fuel
    "ERROR_ST_FUEL_LEVEL_REQ"        => "You will need a higher level to steal fuel!",
    "ERROR_ST_FUEL_OTHER_LEVEL_REQ"  => "The person you want to steal fuel from, has to be at a higher level.",
    "ERROR_ST_FUEL_TOO_MUCH"         => "You do not want to be arrested right? Stealing fuel is only possible once an hour!",
    "ERROR_ST_FUEL_FT_REQ"           => "You will need a fuel tank. Buy it in the shop first!",
    "ERROR_ST_FUEL_PROTECTED_LOCK"   => "Too bad.. The fuel tank has been protected by a lock!",
    "ERROR_ST_FUEL_FAILED"           => "Not your lucky moment.. The company owner saw you!",
    "ERROR_ST_FUEL_SUCCESS"          => "You have successfully stolen fuel from this company.",
    "ERROR_ST_FUEL_FT_EMPTY"         => "Too bad.. The fuel tank of this truck was empty.",
    "ERROR_FUEL_TANK_FULL"           => "Your Fuel Tank is full.",

    //Truck & Trailer Market
    "ERROR_TRUCK_SALE_ENDED"         => "The sale of this truck has been canceled!",
    "ERROR_TRAILER_SALE_ENDED"       => "The sale of this trailer has been canceled!",
    "ERROR_CANT_BUY_OWN_TRUCKS"      => "You cannot buy your own trucks!",
    "ERROR_CANT_BUY_OWN_TRAILERS"    => "You cannot buy your own trailers!",
    "ERROR_LEVEL_MARKET"             => "You need to be at level 5 to trade on the market!",
    "ERROR_LEVEL_MARKET_SELL"        => "You need to be at level 5 to trade on the market!",
    "ERROR_MARKET_INVALID_PRICE"     => "Invalid price. Enter a price between:",
    "ERROR_TRUCK_MARKET_AVAILABLE"   => "Your truck is now available at the market.",
    "ERROR_TRAILER_MARKET_AVAILABLE" => "Your trailer is now available at the market.",

    //Fuelstation
    "ERROR_COUNTRY_NOT_RECEIVED"     => "The system did not receive the country you have chosen.",
    "ERROR_NO_TRUCKS_FOR_REFILL"     => "Your company does not have trucks in this country that need a refill!",
    "ERROR_TRUCK_NO_REFILL_NEEDED"   => "This truck does not need a refill right now.",
    "ERROR_NO_CONCERN_FUELSTATION"   => "No corporation fuelstation available in this country.",
    "ERROR_NO_CONCERN_FUEL"          => "Your corporation fuelstation does not have enough fuel available.",
    "ERROR_BUY_FUELTANK"             => "Please buy a fueltank in the shop first.",
    "ERROR_EMPTY_FUELTANK"           => "Your fueltank does not have enough fuel available. Try to steal some fuel from other companies to fill it up again.",
    "ERROR_TRUCK_NOT_REFUELING"      => "This truck is not refueling at the moment!",

    //Friends & Enemies
    "ERROR_FRIEND_DELETED"           => "This person has been deleted from your friendlist.",
    "ERROR_ENEMY_DELETED"            => "This person has been deleted from your blacklist.",
    "ERROR_ALREADY_FRIEND_ENEMY"     => "This member is already your friend or enemy!",
    "ERROR_MAX_FRIENDS"              => "Maximum friends reached. Delete some of them first!",
    "ERROR_MAX_ENEMIES"              => "Maximum enemies reached. Delete some of them first!",
    "ERROR_FIEND_ADDED"              => "This person has been added to your friendlist.",
    "ERROR_ENEMY_ADDED"              => "This person has been added to your blacklist.",
    "ERROR_SELECT_FRIEND_ENEMY"      => "Please select someone first!",

    //Freight
    "ERROR_CHOOSE_FREIGHT"           => "You have to select a freight first!",
    "ERROR_PREM_AUTO_SELECT"         => "Premium account required for this function!",
    "ERROR_FREIGHT_OTHER_COMP"       => "This freight does not belong to your company.",
    "ERROR_EMPL_SELECTED"            => "Employees selected.",
    "ERROR_TRAILER_SELECTED"         => "Trailer selected.",
    "ERROR_TRUCK_SELECTED"           => "Truck selected.",

    "ERROR_DETACH_ALL_FIRST"         => "You first have to detach everything from the freight (except the trailer).",
    "ERROR_FREIGHT_CANCELED"         => "Freight canceled.",
    "ERROR_FREIGHT_ALR_PROGRESS"     => "This freight is already in progress and cannot be canceled anymore!",

    "ERROR_FREIGHT_STATUS"           => "This freight does not have the right status to perform this action!",
    "ERROR_UNPAID_INVOICES"          => "Your company has unpaid invoices. Pay them first!",

    "ERROR_FREIGHT_READY"            => "Your freight is ready now!",
    "ERROR_SPEEDUP_MOMENT"           => "You cannot speed up the current stage of this freight!",

    //Insurance
    "ERROR_INSURANCE_LEVEL_REQ"      => "You will need a higher level to be able to change your insurance!",
    "ERROR_INSURANCE_MAX_CHANGES"    => "You can only change your insurance a few times a day!",

    //Trailer
    "ERROR_SELECT_TRAILER"           => "Please select a trailer first.",
    "ERROR_INVALID_TRAILER"          => "The trailer does not exist!",
    "ERROR_TRAILER_EMPTY"            => "The trailer is still empty!",
    "ERROR_TRAILER_OTHER_COMP"       => "This trailer does not belong to your company!",
    "ERROR_TRAILER_DEP_CITY"         => "The trailer is not in the departure city!",
    "ERROR_TRAILER_DES_CITY"         => "The trailer is not in the correct city to start unloading!",
    "ERROR_INCOR_TYPE_TRAILER"       => "This trailer type cannot be used with this freight!",
    "ERROR_TRAILER_CANT_SELECT"      => "You cannot select a trailer at this freight stage.",
    "ERROR_TRAILER_COND_LOW"         => "The condition of this trailer is not good enough or your trailer is too old for a long trip!",
    "ERROR_TRAILER_OTHER_FREIGHT"    => "The trailer is selected for another freight!",
    "ERROR_TRAILER_OTHER_ACT"        => "The trailer is currently doing something else!",
    "ERROR_TRAILER_OTHER_ACT2"       => "The attached trailer is performing another action!",
    "ERROR_TRAILER_OTHER_ACT_FR"     => "The trailer is not in your garage at the moment. It is attached to a freight or doing another action.",
    "ERROR_TRAILER_OLD"              => "The trailer is too old for a long ride like this one!",
    "ERROR_TRAILER_SWITCHED"         => "Switched to another trailer.",
    "ERROR_TRAILER_STILL_LOADED"     => "The trailer is currently loaded. You have to unload your trailer first!",
    "ERROR_TRAILER_READY"            => "Your trailer is ready now!",
    "ERROR_TRAILER_REPAIR_INPOSSIBLE"=> "It is not possible to repair this trailer.",

        //Transfer
        "ERROR_TRAILER_ALREADY_CITY" => "The trailer already is in this city!",
        "ERROR_TRAILER_DRIVING_CITY" => "The trailer will be transported.",

        //Selling
        "ERROR_TRAILER_REP_BEF_SELL" => "Repair your trailer before selling it!",
        "ERROR_TRAILER_SOLD"         => "Trailer sold!",


    //Truck
    "ERROR_SELECT_TRUCK"             => "Please select a truck first.",
    "ERROR_INVALID_TRUCK"            => "The truck does not exist!",
    "ERROR_TRUCK_OTHER_COMP"         => "This truck does not belong to your company!",
    "ERROR_TRUCK_DEP_CITY"           => "The truck is not in the departure city!",
    "ERROR_TRUCK_FEW_HP"             => "The truck does not have enough horsepower for the trailer!",
    "ERROR_TRUCK_OTHER_ACT"          => "The truck is currently doing something else!",
    "ERROR_TRUCK_COND_LOW"           => "The condition of this truck is not good enough or your truck is too old for a long trip!!",
    "ERROR_TRUCK_LOW_FUEL"           => "The truck does not have enough fuel for this trip!",
    "ERROR_TRUCK_OLD"                => "The truck is too old for a long ride like this one!",
    "ERROR_TRUCK_OTHER_FREIGHT"      => "The truck is selected for another freight!",
    "ERROR_TRUCK_SWITCHED"           => "Switched to another truck.",
    "ERROR_TRUCK_OTHER_ACT2"         => "The attached truck is performing another action!",
    "ERROR_TRUCK_OTHER_ACT_FR"       => "The truck is not in your garage at the moment. It is attached to a freight or doing another action.",
    "ERROR_TRUCK_FREIGHT_STAGE"      => "You cannot select a truck at this freight stage.",
    "ERROR_TRUCK_READY"              => "Your truck is ready now!",
    "ERROR_TRUCK_REPAIR_INPOSSIBLE"  => "It is not possible to repair this truck.",
    "ERROR_TRUCK_HQ_REQ"             => "The truck has to be at your headquarter location to perform this action.",

        //Transfer
        "ERROR_TRUCK_ALREADY_CITY"   => "The truck already is in this city!",
        "ERROR_TRUCK_DRIVING_CITY"   => "The truck will be transported.",

        //Selling
        "ERROR_TRUCK_REP_BEF_SELL"   => "Repair your truck before selling it!",
        "ERROR_TRUCK_SOLD"           => "Truck sold!",

        //Fuel Tank Lock
        "ERROR_NO_FT_LOCK_AVAILABLE" => "You do not have a Fuel Tank Lock available. Buy one in the shop first!",
        "ERROR_TRUCK_ALREADY_FT_LOCK"=> "Your truck already has a Fuel Tank Lock.",
        "ERROR_TRUCK_NO_FT_LOCK"     => "Your truck does not have a Fuel Tank Lock.",

        //Navigation Unit
        "ERROR_NO_NAV_AVAILABLE"     => "You do not have a navigation unit available. Buy one in the shop first!",
        "ERROR_TRUCK_ALREADY_NAV"    => "Your truck already has a navigation unit.",
        "ERROR_TRUCK_NO_NAV"         => "Your truck does not have a navigation unit.",

    //Trucker
    "ERROR_SELECT_TRUCKER"           => "Please select a trucker first.",
    "ERROR_INVALID_TRUCKER"          => "The trucker does not exist!",
    "ERROR_TRUCKER_OTHER_COMP"       => "This trucker doesn't work for your company!",
    "ERROR_TRUCKER_DEP_CITY"         => "The trucker is not in the departure city!",
    "ERROR_TRUCKER_LICENSE_LOW"      => "The trucker does not have a valid license for this freight type!",
    "ERROR_TRUCKER_SICK"             => "The trucker is currently sick!",
    "ERROR_TRUCKER_NEEDS_SLEEP"      => "The trucker is falling asleep. Do something about it first!",
    "ERROR_TRUCKER_OTHER_ACT"        => "The trucker is currently doing something else!",
    "ERROR_TRUCKER_FREIGHT_STAGE"    => "You cannot select a trucker at this freight stage.",
    "ERROR_TRUCKER_OTHER_FREIGHT"    => "The trucker is selected for another freight!",
    "ERROR_TRUCKER_SWITCHED"         => "Switched to another trucker.",
    "ERROR_TRUCKER_OTHER_ACT2"       => "The attached trucker is performing another action!",

    //Warehouse Employee
    "ERROR_SELECT_WHEMPL"            => "Please select a Warehouse Employee first.",
    "ERROR_INVALID_WHEMPL"           => "The Warehouse Employee does not exist!",
    "ERROR_WHEMPL_OTHER_COMP"        => "This Warehouse Employee doesn't work for your company!",
    "ERROR_WHEMPL_CITY"              => "The Warehouse Employee is not in the correct city!",
    "ERROR_WHEMPL_DEP_CITY"          => "The Warehouse Employee is not in the departure city!",
    "ERROR_WHEMPL_SICK"              => "The Warehouse Employee is currently sick!",
    "ERROR_WHEMPL_OTHER_ACT"         => "The Warehouse Employee is currently doing something else!",
    "ERROR_WHEMPL_NEEDS_SLEEP"       => "The Warehouse Employee is falling asleep. Do something about it first!",
    "ERROR_WHEMPL_FREIGHT_STAGE"     => "You cannot select a Warehouse Employee at this freight stage.",
    "ERROR_WHEMPL_OTHER_FREIGHT"     => "The Warehouse Employee is selected for another freight!",
    "ERROR_WHEMPL_SWITCHED"          => "Switched to another Warehouse Employee.",
    "ERROR_WHEMPL_OTHER_ACT2"        => "The attached Warehouse Employee is performing another action!",

    //Manager
    "ERROR_SELECT_MGR"               => "Please select a Manager first.",
    "ERROR_SELECT_MGR_NEW"           => "Please select a Manager first. This is a new function in level 2!",
    "ERROR_SELECT_MGR_LEVEL"         => "You have to reach level 2 to select a manager!",
    "ERROR_MGR_OTHER_COMP"           => "This Manager doesn't work for your company!",
    "ERROR_MGR_OTHER_ACT"            => "The Manager is currently doing something else!",
    "ERROR_MGR_NEEDS_SLEEP"          => "The Manager is falling asleep. Do something about it first!",
    "ERROR_MGR_CANT_SELECT"          => "You cannot select a Manager at this freight stage.",
    "ERROR_INVALID_MGR"              => "This Manager does not exist!",
    "ERROR_MGR_OTHER_FREIGHT"        => "The manager is selected for another freight!",
    "ERROR_MGR_OTHER_ACT2"           => "The attached manager is performing another action!",
    "ERROR_MGR_SWITCHED"             => "Switched to another manager.",

    //Finances
    "ERROR_WAREHOUSE_FULL2"              => "Your warehouse is too small. Upgrade it first!",
    "ERROR_ACCOUNTANT_REQ"               => "You will need an accountant (available at level 3) to view the finances of your company!",
    "ERROR_PREM_FINANCE_DAYS"            => "You will need a premium account to see the finances of the last 14 days.",
    "ERROR_NO_DATA"                      => "No data available for the selected period.",

    //Contracts
    "ERROR_SPECIFY_CONTRACT"             => "Please specify the contract you want to accept.",
    "ERROR_INVALID_CONTRACT"             => "This contract is not valid.",
    "ERROR_CONTRACT_ACCEPTED"            => "Contract accepted.",

    //Employees
    "ERROR_SELECT_EMPLOYEE"              => "You have to select an employee!",
    "ERROR_INVALID_EMPLOYEE"             => "This employee does not exist!",
    "ERROR_INVALID_EMPLOYEE2"            => "Invalid employee!",
    "ERROR_EMPLOYEE_OTHER_COMP"          => "This employee doesn't work for your company!",
    "ERROR_EMPLOYEE_OTHER_ACTION"        => "This employee is doing something else!",
    "ERROR_EMPLOYEE_OTHER_FREIGHT"       => "This employee is attached to a freight!",
    "ERROR_FIRE_PREMIUM"                 => "It is not possible to fire a premium employee!",
    "ERROR_EMPLOYEE_FIRED"               => "You have now fired this employee.",
    "ERROR_EMPLOYEE_READY"               => "Your employee is ready now!",
    "ERROR_SPEEDUP_EMPL_RESTRIC"         => "You can't speed up this action!",
    "ERROR_EMPLOYEE_SICK"                => "This employee is currently sick!",
    "ERROR_EMPLOYEE_NO_SLEEP"            => "This employee does not need to sleep at the moment!",
    "ERROR_EMPLOYEE_SLEEP_STARTED"       => "This employee is now asleep.",
    "ERROR_EMPLOYEE_NEEDS_SLEEP"         => "This employee needs to sleep first!",
    "ERROR_EMPLOYEE_ALREADY_CITY"        => "The employee already is in this city!",
    "ERROR_EMPLOYEE_DRIVING_TRANSFER"    => "The employee is now driving to the city you have requested!",
    "ERROR_SPECIFY_START_CITY_EMPL"      => "Please specify a starting city for your employee.",
    "ERROR_SPECIFY_EMPLOYEE_HIRE"        => "Please specify the employee you want to hire.",

    "ERROR_MAX_TRUCKERS_REACHED"         => "You have exceeded the maximum number of Truckers of this type. Choose another one.",
    "ERROR_MAX_WHEMPL_REACHED"           => "You have exceeded the maximum number of Warehouse Employees of this type. Choose another one.",
    "ERROR_MAX_ACCOUNTANTS_REACHED"      => "You have exceeded the maximum number of Accountants.",
    "ERROR_MAX_HRMGRS_REACHED"           => "You have exceeded the maximum number of HR Managers.",
    "ERROR_MAX_TECHMGRS_REACHED"         => "You have exceeded the maximum number of Technical Managers.",
    "ERROR_MAX_MANAGERS_REACHED"         => "You have exceeded the maximum number of Managers of this type. Choose another one.",

    "ERROR_HIRE_MGR_LEVEL"               => "Hiring a Manager is only available when you have reached level 2.",
    "ERROR_HIRE_TECHMGR_LEVEL"           => "Hiring an Technical Manager is only available when you have reached level 19.",
    "ERROR_HIRE_HRMGR_LEVEL"             => "Hiring an HR Manager is only available when you have reached level 18.",
    "ERROR_HIRE_ACCOUNTANT_LEVEL"        => "Hiring an Accountant is only available when you have reached level 3.",

    "ERROR_HIRE_TRUCKER_SUCCESS"         => "You have hired this Trucker.",
    "ERROR_HIRE_WHEMPL_SUCCESS"          => "You have hired this WH Employee.",
    "ERROR_HIRE_MGR_SUCCESS"             => "You have hired this Manager.",
    "ERROR_HIRE_TECHMGR_SUCCESS"         => "You have hired this Technical Manager.",
    "ERROR_HIRE_HRMGR_SUCCESS"           => "You have hired this HR Manager.",
    "ERROR_HIRE_ACCOUNTANT_SUCCESS"      => "You have hired this Accountant.",

    "ERROR_UPGRADE_TRUCKERS_ONLY"        => "The upgrade option is only available for truckers!",
    "ERROR_ACHIEVE_PREV_LICENSE"         => "You first have to achieve the previous licenses to get this one!",
    "ERROR_INVALID_LICENSE"              => "Unavailable license!",
    "ERROR_LICENSE_UPGRADED"             => "License upgraded!",


//Corporation

    //General
    "ERROR_CONC_ALREADY_JOINED"      => "Your company already joined a corporation.",
    "ERROR_INVALID_CONCERN"          => "Corporation does not exist!",
    "ERROR_NOCONCERN"                => "Your company is not part of a corporation.",
    "ERROR_CONC_SELECT_MEMBER"       => "You have to select a member!",
    "ERROR_CONC_INVALID_MEMBER"      => "Invalid member!",
    "ERROR_MEMBER_NOT_IN_CONC"       => "This person is not part of your corporation!",
    "ERROR_CONC_NOT_OWNER"           => "You are not the owner of this corporation.",
    "ERROR_INSUF_RIGHTS"             => "Insufficient rights!",

    //Application
    "ERROR_CONC_ALREADY_APPLIED"     => "You already applied to this corporation! Be patient bro :)",
    "ERROR_CONC_MAX_REACHED"         => "Max amount of members for this corporation has already been reached.",
    "ERROR_CONC_MAX_REACHED2"        => "Max amount of members in this country has already been reached. Upgrade your office first!",
    "ERROR_NOT_ACCEPTING"            => "This corporation is not accepting new members at the moment.",
    "ERROR_LEVEL_CONCERN"            => "You have to be at level 6 to join a corporation.",
    "ERROR_CONC_APPLIED"             => "You have applied to this corporation. You will have to wait for the corporation owner to accept you.",
    "ERROR_CONC_INVALID_APPL"        => "Application for this corporation is not found.",
    "ERROR_CONC_APPL_CANCELED"       => "You have canceled your application to this corporation.",

    //Promote, Fire, Retire & Delete
    "ERROR_CONC_ACTIVE_MEMBERS"      => "This corporation still has other members. Fire them first!",
    "ERROR_CONC_ACTIVE_FREIGHTS"     => "This corporation still has active freights. Cancel or complete them first!",
    "ERROR_CONC_DELETED"             => "You have deleted this corporation.",
    "ERROR_CONC_FIRED_MEMBER"        => "You have now fired this member.",
    "ERROR_CONC_PROMOTED_MEMBER"     => "You have now promoted this member.",
    "ERROR_NO_CONC_PREMIUM_PROM"     => "This member does not have the requirements to start a corporation.",
    "ERROR_OWNER_CANT_RETIRE"        => "You are the owner of this corporation. It is not possible for you to leave. You're able to delete your corporation instead.",
    "ERROR_CONC_OPEN_INVOICES2"      => "You still have open invoices with this corporation. Pay them first!",
    "ERROR_CONC_ACTIVE_FREIGHTS2"    => "You still have active corporation freights. Cancel or complete them first!",
    "ERROR_CONC_RETIRED"             => "You have left this corporation.",

    //Create
    "ERROR_CONC_REQUIREMENTS"        => "You don't have the requirements to start a corporation!",
    "ERROR_CONC_CREATED"             => "The corporation has been made!",
    "ERROR_INVALID_NAME"             => "Invalid name!",

    //Properties
    "ERROR_INVALID_FUELST"           => "Invalid Fuel Station!",
    "ERROR_FUELST_EXISTS"            => "You already have a Fuel Station in this country!",
    "ERROR_CONC_MONEY"               => "Your corporation does not have enough money!",
    "ERROR_FUELST_BOUGHT"            => "Fuel Station bought.",
    "ERROR_FUELST_REFUELED"          => "Fuel Station refueled.",
    "ERROR_FLPRICE_HIGH"             => "Price is too high!",
    "ERROR_FLPRICE_SET"              => "Fuel Price Set.",
    "ERROR_CONC_LEVEL"               => "Your corporation does not have the required level!",
    "ERROR_FUELST_UPGRADED"          => "Fuel Station upgraded.",
    "ERROR_INVALID_OFFICE"           => "Invalid office!",
    "ERROR_OFFICE_EXISTS"            => "You already have an office in this country!",
    "ERROR_OFFICE_BOUGHT"            => "Office bought.",
    "ERROR_OFFICE_UPGRADED"          => "Office upgraded.",
    "ERROR_CONC_NO_PROPERTIES"       => "Corporation does not have any buildings.",

    //Project
    "ERROR_INVALID_PROJECT"          => "Project not found!",
    "ERROR_PROJECT_NOT_AVAIL"        => "Project is not available anymore!",
    "ERROR_PROJECT_MAX_REACHED"      => "Your corporation already has two open projects!",
    "ERROR_PROJECT_ACCEPTED"         => "Project accepted.",
    "ERROR_INCOMPLETE_PROJ_ACT"      => "Complete all project activities first!",
    "ERROR_PROJECT_CANCELED"         => "Project canceled.",
    "ERROR_PROJECT_FINISHED"         => "Project finished!",

    //Other
    "ERROR_CONC_DONATED"             => "Money successfully donated.",
    "ERROR_CONC_DONATION_SET"        => "Daily donation set!",
    "ERROR_GENERAL_MESSAGE_SAVED"    => "The message has been saved.",

    "ERROR_INVALID_LANGUAGE"         => "Invalid language.",
    "ERROR_LANGUAGE_CHANGED"         => "Language changed.",
    "ERROR_RIGHTS_CHANGED"           => "Rights changed.",

    //Oil Refinery Update
    "ERROR_INVALID_OILREF"           => "Invalid Oil Refinery!",
    "ERROR_OILREF_EXISTS"            => "You already have a Oil Refinery in this country!",
    "ERROR_OILREF_BOUGHT"            => "Oil Refinery bought.",
    "ERROR_OILREF_UPGRADED"          => "Oil Refinery upgraded.",
    "ERROR_OILREF_REFILLED"          => "Oil Refinery refilled.",
    "ERROR_TOO_FEW_FUEL"             => "Too few fuel!",
    "ERROR_FUELSTATIONS_FULL"        => "The Fuel Stations in this country are full!",
);
?>
