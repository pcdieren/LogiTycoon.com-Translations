<?php
/*
------------------
Language:   English
Type:       Errors
------------------
*/

$langerrors = array(
//ERROR TYPES
"ERROR"          => "Erro",
"WARNING"        => "Aviso",
"SUCCESS"        => "Sucesso",
"INFO"           => "Informação",

//BASIC ERRORS
"ERROR_NOCOMP"               => "Você ainda não tem uma empresa. Crie uma empresa primeiro!",
"ERROR_NOCOMP2"              => "Você não tem uma empresa.",
"ERROR_NOMONEY"              => "Sua empresa não tem dinheiro suficiente na conta corrente.",
"ERROR_INVALID_NUMBER"       => "Numero Inválido",
"ERROR_INVALID_COMP2"        => "Espera... Por qual empresa você está procurando?",
"ERROR_INVALID_COMP"         => "Esta empresa não existe!",
"ERROR_INVALID_CITY"         => "Cidade Inválida!",
"ERROR_INVALID_COUNTRY"      => "País Inválido!",
"ERROR_INVALID_OBJECT"       => "Objeto Inválido!",
"ERROR_LEVEL_TOO_LOW"        => "Você não está no nível necessário!",
"ERROR_SELECTED"             => "Selecionado",
"ERROR_INVALID_MEMBER"       => "Este usuário não existe.",
"ERROR_INVALID_REQUEST"      => "Solicitação inválida",


//Premium
"ERROR_PURCHASE_COMPL"           => "Compra concluida!",
"ERROR_PAY_ID_INVALID"           => "ID de pagamento inválida.",
"ERROR_PAYMENT_COMPL"            => "Pagamento concluido!",
"ERROR_PAYMENT_EXP"              => "O pagamento expirou. Por favor, tente novamente.",
"ERROR_PAYMENT_CANCELLED"        => "Você cancelou o pagamento.",
"ERROR_PAYMENT_NOT_ACCEPTED"     => "Pagamento não autorizado.",
"ERROR_PREMIUM_BOUGHT"           => "Função premium já adquirida.",
"ERROR_NOT_ENOUGH_CREDITS"       => "Você não tem créditos suficientes. Compre créditos antes.",
"ERROR_PREMIUM_REQ"              => "Você precisa de uma conta premium para acessar.",

//Video Reward
"ERROR_REWARD_CLAIMED"           => "Recompensa recebida!",
"ERROR_DAY_LIMIT_REACHED"        => "Limite diário atingido.",

//User

    //General
    "ERROR_TUTORIAL_SKIPPED"     => "Você pulou o Tutorial.",

    //Messages
    "ERROR_MESSAGE_SENT"         => "Mensagem enviada.",
    "ERROR_BLACKLISTED"          => "Você foi banido por este usuário.",
    "ERROR_MSG_SUBJECT_SHORT"    => "Assunto não é longo o suficiente.",
    "ERROR_MSG_CONTENT_SHORT"    => "O conteúdo não é longo o suficiente!",
    "ERROR_INVALID_MESSAGE"      => "Mensagem não encontrada!",
    "ERROR_MSG_NO_SUBJECT"       => "Não possui assunto!",
    "ERROR_MSG_NO_RECEIVER"      => "Não possui destinatário!",
    "ERROR_MSG_NO_CONTENT"       => "Não possui conteúdo!",

    //Profile
    "ERROR_CURRENT_PASSWORD"     => "Você precisa colocar a senha antiga!",
    "ERROR_NEW_PASSWORD"         => "Você precisa colocar a senha nova!",
    "ERROR_PASSWORD_CHANGED"     => "Senha alterada com sucesso!",
    "ERROR_DATABASE_ERROR"       => "Erro na base de dados!",
    "ERROR_PASS_NOT_SAFE"        => "A nova senha não é segura o suficiente. A senha deve ter ao menos 6 caracteres e possuir uma letra maiúscula.",
    "ERROR_PASS_INCORRECT"       => "Senha atual incorreta!",
    "ERROR_TIMEZONE_CHANGED"     => "Fuso Horário Alterado.",
    "ERROR_INVALID_TIMEZONE"     => "Fuso horário inválido!",

//Company + Corporation

    //General
    "ERROR_NAME_EXISTS"          => "Este nome já existe!",
    "ERROR_NAME_SHORT"           => "Este nome é muito curto! Mínimo de 6 caracteres!",
    "ERROR_NAME_SHORT2"          => "Este nome é muito curto! Mínimo de 3 caracteres",
    "ERROR_NAME_LONG"            => "Este nome é muito longo! Máximo de 18 caracteres!",
    "ERROR_NAME_LONG2"           => "Este nome é muito longo! Máximo de 13 caracteres!",
    "ERROR_NO_WAREHOUSE"         => "Você não tem um Centro de Distribuição (CD)! Compre um primeiro!",


    //Freights
    "ERROR_SPECIFY_FREIGHT"      => "Por favor, informe a frete que deseja aceitar",
    "ERROR_INVALID_FREIGHT"      => "Este ID de frete não é valido.",
    "ERROR_INVALID_TR_LICENSE"   => "Você não tem licença para este tipo de frete.",
    "ERROR_WAREHOUSE_FULL"       => "Seu CD é muito pequeno! Melhore-o ou cancele outros fretes primeiro!",
    "ERROR_INV_OR_ACC_FREIGHT"   => "Este frete não é válido ou alguém já o aceitou.",
    "ERROR_FREIGHT_ACCEPTED"     => "Você aceitou este frete.",

//Company

    //General
    "ERROR_INVALID_INVOICE"          => "Fatura Inválida!",
    "ERROR_NAME_CHANGED"             => "O nome foi alterado.",
    "ERROR_HQ_PART_CONCERN"          => "Sua sede só pode ser alterada se sua empresa não faz parte de uma corporação",
    "ERROR_HQ_CHANGE_DAYS"           => "Sua sede só pode ser alterada a cada 7 dias.",
    "ERROR_HQ_CHANGED"               => "A sede da sua empresa foi alterada.",
    "ERROR_MONEY_TRANSFERED"         => "Transferência concluida!",
    "ERROR_LEVEL_BANK_ACC"           => "Você precisa de nível 7 ou superior para abrir uma poupança!",
    "ERROR_NOMONEY_SAVINGS"          => "Você não tem dinheiro suficiente na poupança!",
    "ERROR_NOBANKACC"                => "Você não tem uma poupança. Abra uma na loja.",
    "ERROR_COMPMADE"                 => "Sua empresa foi feita!",
    "ERROR_ALREADY_COMP"             => "Você já tem uma empresa!",
    "ERROR_COMP_NOPROP"              => "Esta empresa não tem prédios.",
    "ERROR_COMPSTILLINCONCERN"       => "Sua empresa ainda é parte de uma corporação. Saia da corporação primeiro!",
    "ERROR_ACTIVE_MARKETSALE"        => "Sua empresa tem caminhões ou reboques a venda no mercado. Cancele as vendas primeiro!",
    "ERROR_COMP_REMOVED"             => "Sua empresa foi extinta.",
    "ERROR_UPGRADE_TR_LICENSE"       => "Você precisa melhorar sua licença de transporte primeiro!",

    "ERROR_CANT_SPEEDUP_ACTION_TYPE" => "Você não pode acelerar este tipo de ação",

    //Garage & Warehouse
    "ERROR_NO_GARAGE"                => "Você não tem uma garagem! Compre uma na loja primeiro!",
    "ERROR_GARAGE_FULL"              => "Sua garagem é pequena de mais! Melhore-a primeiro!",

    "ERROR_WAREHOUSE_DOWNGRADED"     => "Você rebaixou seu Centro de Distribuição (CD).",
    "ERROR_GARAGE_DOWNGRADED"        => "Você rebaixou sua garagem.",
    "ERROR_WAREHOUSE_UPGRADED"       => "Você melhorou seu Centro de Distribuição (CD).",
    "ERROR_GARAGE_UPGRADED"          => "Você melhorou sua garagem.",
    "ERROR_DOWNGRADE_LEVEL1"         => "Não é possível rebaixar quando no Nível 1!",

    //Transport License
    "ERROR_GET_PREV_LICENSES"        => "Você precisa primeiro conseguir a licença anterior antes dessa!",
    "ERROR_TR_LICENSE_REQ_LEVEL"     => "Você precisa de um nível mais alto para conseguir esta licença",
    "ERROR_LICENSE_NOT_AVAILABLE"    => "Licença não disponível!",
    "ERROR_TR_LICENSE_UPGRADED"      => "Parabéns! Você conseguiu sua licença!",

    //Contracts
    "ERROR_CONTRACT_TECH_FEW"        => "Seu contrato oferece poucos técnicos. Faça outro contrato ou aguarde até que os técnicos estejam disponíveis.",
    "ERROR_CONTRACT_NO_TECH"         => "Você não tem um contrato de técnicos ativo. Selecione um no menu.",

    //Buy and Sell (Shop, etc.)
    "ERROR_OBJECT_BOUGHT"            => "Objeto comprado.",
    "ERROR_OBJECT_SOLD"              => "Objeto vendido.",
    "ERROR_MAX_OBJECTS_REACHED"      => "Máximo de objetos atingido!",
    "ERROR_SELL_DONT_HAVE"           => "Você está tentando vender algo que não tem...",
    "ERROR_TRUCK_BOUGHT"             => "Caminhão comprado!",
    "ERROR_TRAILER_BOUGHT"           => "Reboque comprado!",

    //Steal Fuel
    "ERROR_ST_FUEL_LEVEL_REQ"        => "Você vai precisar de um nível mais alto para roubar combustível!",
    "ERROR_ST_FUEL_OTHER_LEVEL_REQ"  => "A vítima deste roubo de combustível precisa de um nível mais alto.",
    "ERROR_ST_FUEL_TOO_MUCH"         => "Você não quer ser preso, não é? Roubar combustível só é permitido a cada uma hora!",
    "ERROR_ST_FUEL_FT_REQ"           => "Você vai precisar de um tanque de combustível. Compre um na loja!",
    "ERROR_ST_FUEL_PROTECTED_LOCK"   => "Poxa vida... O tanque de combustível está protegido com uma trava!",
    "ERROR_ST_FUEL_FAILED"           => "Não foi dessa vez... O dono da empresa viu você!",
    "ERROR_ST_FUEL_SUCCESS"          => "Você conseguiu roubar combustível dessa empresa!",
    "ERROR_ST_FUEL_FT_EMPTY"         => "Poxa vida... O tanque de combustível deste caminhão está vazio",
    "ERROR_FUEL_TANK_FULL"           => "Seu tanque de combustível está cheio.",

    //Truck & Trailer Market
    "ERROR_TRUCK_SALE_ENDED"         => "A venda desse caminhão foi cancelada!",
    "ERROR_TRAILER_SALE_ENDED"       => "A venda desse reboque foi cancelada!",
    "ERROR_CANT_BUY_OWN_TRUCKS"      => "Você não pode comprar seu próprio caminhão!",
    "ERROR_CANT_BUY_OWN_TRAILERS"    => "Você não pode comprar seu próprio reboque!",
    "ERROR_LEVEL_MARKET"             => "Você precisa de nível 5 para negociar!",
    "ERROR_LEVEL_MARKET_SELL"        => "Você precisa de nível 5 para negociar!",
    "ERROR_MARKET_INVALID_PRICE"     => "Preço inválido! Insira um preço entre:",
    "ERROR_TRUCK_MARKET_AVAILABLE"   => "Seu caminhão agora está a venda no mercado.",
    "ERROR_TRAILER_MARKET_AVAILABLE" => "Seu reboque agora está a venda no mercado.",

    //Fuelstation
    "ERROR_COUNTRY_NOT_RECEIVED"     => "O sistema não recebeu o país que você escolheu.",
    "ERROR_NO_TRUCKS_FOR_REFILL"     => "Sua empresa não tem caminhões neste país que precisem de abastecimento!",
    "ERROR_TRUCK_NO_REFILL_NEEDED"   => "Esse caminhão não precisa ser abastecido agora.",
    "ERROR_NO_CONCERN_FUELSTATION"   => "Não existem postos da corporação neste país.",
    "ERROR_NO_CONCERN_FUEL"          => "O posto da sua corporação não possui combustível no estoque.",
    "ERROR_BUY_FUELTANK"             => "Compre um tanque de combustível primeiro.",
    "ERROR_EMPTY_FUELTANK"           => "Seu tanque de combustível não tem combustível o suficiente. Tente roubar de outras empresas pra enchê-lo de novo!",
    "ERROR_TRUCK_NOT_REFUELING"      => "Esse caminhão não está reabastecendo no momento!",

    //Friends & Enemies
    "ERROR_FRIEND_DELETED"           => "Essa pessoa foi apagada da sua lista de amigos!",
    "ERROR_ENEMY_DELETED"            => "Essa pessoa foi apagada da sua lista de inimigos.",
    "ERROR_ALREADY_FRIEND_ENEMY"     => "Este membro já é seu amigo/inimigo",
    "ERROR_MAX_FRIENDS"              => "Máximo de amigos atingido! Apague alguns primeiro!",
    "ERROR_MAX_ENEMIES"              => "Máximo de inimigos atingido! Apague alguns primeiro!",
    "ERROR_FIEND_ADDED"              => "Essa pessoa foi adicionada a sua lista de amigos!",
    "ERROR_ENEMY_ADDED"              => "Essa pessoa foi adicionada a sua lista de inimigos",
    "ERROR_SELECT_FRIEND_ENEMY"      => "Selecione alguém primeiro!",

    //Freight
    "ERROR_CHOOSE_FREIGHT"           => "Você precisa selecionar um frete primeiro",
    "ERROR_PREM_AUTO_SELECT"         => "Uma conta premium é necessária para usar esta função.",
    "ERROR_FREIGHT_OTHER_COMP"       => "Esse frete não pertence a sua empresa.",
    "ERROR_EMPL_SELECTED"            => "Empregados selecionados!",
    "ERROR_TRAILER_SELECTED"         => "Reboque selecionado..",
    "ERROR_TRUCK_SELECTED"           => "Caminhão selecionado.",

    "ERROR_DETACH_ALL_FIRST"         => "Você tem que desconectar tudo do frete primeiro (exceto o reboque).",
    "ERROR_FREIGHT_CANCELED"         => "Frete cancelado.",
    "ERROR_FREIGHT_ALR_PROGRESS"     => "Esse frete já está em andamento e não pode mais ser cancelado.",

    "ERROR_FREIGHT_STATUS"           => "Esse frete não está no estado certo para esta ação.",
    "ERROR_UNPAID_INVOICES"          => "Sua empresa tem faturas não pagas. Pague-as primeiro!",

    "ERROR_FREIGHT_READY"            => "Seu frete está pronto agora!",
    "ERROR_SPEEDUP_MOMENT"           => "Você não pode acelerar o estado atual desse frete!",

    //Insurance
    "ERROR_INSURANCE_LEVEL_REQ"      => "Você precisa de um nível mais alto para esse seguro.",
    "ERROR_INSURANCE_MAX_CHANGES"    => "Você só pode mudar seu seguro algumas vezes por dia...",

    //Trailer
    "ERROR_SELECT_TRAILER"           => "Por favor, selecione um reboque primeiro!",
    "ERROR_INVALID_TRAILER"          => "Esse reboque não existe!",
    "ERROR_TRAILER_EMPTY"            => "Esse reboque continua vazio",
    "ERROR_TRAILER_OTHER_COMP"       => "Esse reboque não pertence a sua empresa!",
    "ERROR_TRAILER_DEP_CITY"         => "Esse reboque não está na cidade de origem!",
    "ERROR_TRAILER_DES_CITY"         => "Esse reboque não está na cidade certa para ser descarregado!",
    "ERROR_INCOR_TYPE_TRAILER"       => "Esse reboque não pode ser usado para esse frete (tipo de reboque incorreto)",
    "ERROR_TRAILER_CANT_SELECT"      => "Você não pode mudar o reboque nessa fase do frete",
    "ERROR_TRAILER_COND_LOW"         => "Esse reboque está em más condições ou é muito velho para uma viagem longa.",
    "ERROR_TRAILER_OTHER_FREIGHT"    => "Esse reboque está selecionado para outro frete!",
    "ERROR_TRAILER_OTHER_ACT"        => "Esse reboque está envolvido em outra ação.;",
    "ERROR_TRAILER_OTHER_ACT2"       => "O reboque escolhido está fazendo outra coisa...",
    "ERROR_TRAILER_OTHER_ACT_FR"     => "Esse reboque não está disponível no momento. Está em outro frete ou envolvido em alguma ação...",
    "ERROR_TRAILER_OLD"              => "Esse reboque é muito velho pra uma viagem como essa.",
    "ERROR_TRAILER_SWITCHED"         => "Reboque alterado!",
    "ERROR_TRAILER_STILL_LOADED"     => "Esse reboque está carregado! Precisa descarrega-lo primeiro!",
    "ERROR_TRAILER_READY"            => "Esse reboque está pronto, agora!",
    "ERROR_TRAILER_REPAIR_INPOSSIBLE"=> "Esse reboque não pode ser consertado.",

        //Transfer
        "ERROR_TRAILER_ALREADY_CITY" => "Esse reboque já está na cidade!",
        "ERROR_TRAILER_DRIVING_CITY" => "Esse reboque será transportado até lá!",

        //Selling
        "ERROR_TRAILER_REP_BEF_SELL" => "Conserte o reboque antes de vender!",
        "ERROR_TRAILER_SOLD"         => "Reboque vendido!",


    //Truck
    "ERROR_SELECT_TRUCK"             => "Selecione um caminhão primeiro.",
    "ERROR_INVALID_TRUCK"            => "O caminhão não existe!",
    "ERROR_TRUCK_OTHER_COMP"         => "Esse caminhão não pertence a sua empresa!",
    "ERROR_TRUCK_DEP_CITY"           => "Esse caminhão não está na cidade de origem",
    "ERROR_TRUCK_FEW_HP"             => "Esse caminhão não tem potência suficiente para o reboque",
    "ERROR_TRUCK_OTHER_ACT"          => "Esse caminhão está envolvido em outra ação.",
    "ERROR_TRUCK_COND_LOW"           => "Esse caminhão está em más condições ou é muito velho para uma viagem longa.",
    "ERROR_TRUCK_LOW_FUEL"           => "O caminhão não tem combustível suficiente para essa viagem.",
    "ERROR_TRUCK_OLD"                => "Esse caminhão é velho de mais para uma viagem como essa.",
    "ERROR_TRUCK_OTHER_FREIGHT"      => "Esse caminhão foi designado para outro frete.",
    "ERROR_TRUCK_SWITCHED"           => "Caminhão trocado",
    "ERROR_TRUCK_OTHER_ACT2"         => "O caminhão designado está envolvido em outra ação.",
    "ERROR_TRUCK_OTHER_ACT_FR"       => "Esse caminhão não está na garagem. Ele está em outro frete ou envolvido em outra ação.",
    "ERROR_TRUCK_FREIGHT_STAGE"      => "Você não pode selecionar um caminhão nessa fase do frete.",
    "ERROR_TRUCK_READY"              => "Seu caminhão está pronto!",
    "ERROR_TRUCK_REPAIR_INPOSSIBLE"  => "Não é possível consertar esse caminhão.",
    "ERROR_TRUCK_HQ_REQ"             => "Esse caminhão precisa estar na sede para efetuar essa ação.",

        //Transfer
        "ERROR_TRUCK_ALREADY_CITY"   => "O caminhão já está nessa cidade.",
        "ERROR_TRUCK_DRIVING_CITY"   => "O caminhão será transferido.",

        //Selling
        "ERROR_TRUCK_REP_BEF_SELL"   => "Conserte esse caminhão antes de vender!",
        "ERROR_TRUCK_SOLD"           => "Caminhão vendido",

        //Fuel Tank Lock
        "ERROR_NO_FT_LOCK_AVAILABLE" => "Você não tem uma trava do tanque. Compre uma na loja primeiro!",
        "ERROR_TRUCK_ALREADY_FT_LOCK"=> "Seu caminhão já tem uma trava do tanque.",
        "ERROR_TRUCK_NO_FT_LOCK"     => "Seu caminhão não tem uma trava do tanque.",

        //Navigation Unit
        "ERROR_NO_NAV_AVAILABLE"     => "Você não tem GPS instalado. Compre um na loja primeiro!",
        "ERROR_TRUCK_ALREADY_NAV"    => "Seu caminhão já tem GPS.",
        "ERROR_TRUCK_NO_NAV"         => "Seu caminhão não tem GPS.",

    //Trucker
    "ERROR_SELECT_TRUCKER"           => "Selecione um motorista primeiro!",
    "ERROR_INVALID_TRUCKER"          => "Esse motorista não existe!",
    "ERROR_TRUCKER_OTHER_COMP"       => "Esse motorista não trabalha para sua empresa!",
    "ERROR_TRUCKER_DEP_CITY"         => "Esse motorista não está na cidade de origem",
    "ERROR_TRUCKER_LICENSE_LOW"      => "Esse motorista não tem o nível de licença para esse frete!",
    "ERROR_TRUCKER_SICK"             => "Esse motorista está doente",
    "ERROR_TRUCKER_NEEDS_SLEEP"      => "Esse motorista está com sono! Resolva isso primeiro!",
    "ERROR_TRUCKER_OTHER_ACT"        => "Esse motorista está envolvido em outra ação!",
    "ERROR_TRUCKER_FREIGHT_STAGE"    => "Você não pode mudar o motorista nessa fase do frete!",
    "ERROR_TRUCKER_OTHER_FREIGHT"    => "Esse motorista foi designado para outro frete.",
    "ERROR_TRUCKER_SWITCHED"         => "Motorista substituido",
    "ERROR_TRUCKER_OTHER_ACT2"       => "O motorista designado está envolvido em outra ação!",

    //Warehouse Employee
    "ERROR_SELECT_WHEMPL"            => "Selecione um empregado do CD primeiro!",
    "ERROR_INVALID_WHEMPL"           => "O empregado do CD não existe!",
    "ERROR_WHEMPL_OTHER_COMP"        => "Esse empregado não trabalha para sua empresa!",
    "ERROR_WHEMPL_CITY"              => "Esse empregado não está na cidade certa!",
    "ERROR_WHEMPL_DEP_CITY"          => "Esse empregado não está na cidade de origem!",
    "ERROR_WHEMPL_SICK"              => "Esse empregado está doente.",
    "ERROR_WHEMPL_OTHER_ACT"         => "Esse empregado está envolvido em outra ação",
    "ERROR_WHEMPL_NEEDS_SLEEP"       => "Esse empregado está com sono! Resolva isso primeiro!",
    "ERROR_WHEMPL_FREIGHT_STAGE"     => "Você não pode mudar o empregado do CD nessa fase do frete!",
    "ERROR_WHEMPL_OTHER_FREIGHT"     => "Esse empregado foi designado para outro frete!",
    "ERROR_WHEMPL_SWITCHED"          => "Mudou o empregado do CD!",
    "ERROR_WHEMPL_OTHER_ACT2"        => "O empregado designado está envolvido em outra ação.",

    //Manager
    "ERROR_SELECT_MGR"               => "Selecione um gerente primeiro!",
    "ERROR_SELECT_MGR_NEW"           => "Selecione um gerente primeiro! Essa é uma nova função de nível 2!",
    "ERROR_SELECT_MGR_LEVEL"         => "Você precisa chegar ao nível 2 para selecionar um gerente!",
    "ERROR_MGR_OTHER_COMP"           => "Esse gerente não trabalha na sua empresa!",
    "ERROR_MGR_OTHER_ACT"            => "Esse gerente está resolvendo outro problema!",
    "ERROR_MGR_NEEDS_SLEEP"          => "Esse gerente está com sono! Resolva isso primeiro!",
    "ERROR_MGR_CANT_SELECT"          => "Você não pode selecionar um gerente nessa fase do frete",
    "ERROR_INVALID_MGR"              => "Esse gerente não existe!",
    "ERROR_MGR_OTHER_FREIGHT"        => "Esse gerente foi designado para outro frete!",
    "ERROR_MGR_OTHER_ACT2"           => "The attached manager is performing another action!",
    "ERROR_MGR_SWITCHED"             => "Switched to another manager.",

    //Finances
    "ERROR_WAREHOUSE_FULL2"              => "Seu Centro de Distribuição (CD) é muito pequeno! Amplie-o primeiro!",
    "ERROR_ACCOUNTANT_REQ"               => "Você precisa de um contador (disponível no nível 3) para ter acesso a contabilidade.",
    "ERROR_PREM_FINANCE_DAYS"            => "Você precisa de uma conta premium para ver finanças de 14 dias atrás.",
    "ERROR_NO_DATA"                      => "Sem dados para o período.",

    //Contracts
    "ERROR_SPECIFY_CONTRACT"             => "Informe o contrato que deseja aceitar",
    "ERROR_INVALID_CONTRACT"             => "Esse contrato não é valido!",
    "ERROR_CONTRACT_ACCEPTED"            => "Contrato aceito!",

    //Employees
    "ERROR_SELECT_EMPLOYEE"              => "Você precisa selecionar um empregado!",
    "ERROR_INVALID_EMPLOYEE"             => "Esse empregado não existe!",
    "ERROR_INVALID_EMPLOYEE2"            => "Empregado inválido!",
    "ERROR_EMPLOYEE_OTHER_COMP"          => "Esse empregado não trabalha para sua empresa!",
    "ERROR_EMPLOYEE_OTHER_ACTION"        => "Esse empregado está envolvido em outra ação!",
    "ERROR_EMPLOYEE_OTHER_FREIGHT"       => "Esse empregado foi designado para um frete!",
    "ERROR_FIRE_PREMIUM"                 => "Não é possível demitir um empregado premium!",
    "ERROR_EMPLOYEE_FIRED"               => "Você demitiu esse empregado!",
    "ERROR_EMPLOYEE_READY"               => "Seu empregado está pronto agora!",
    "ERROR_SPEEDUP_EMPL_RESTRIC"         => "Você não pode acelerar essa ação!",
    "ERROR_EMPLOYEE_SICK"                => "Esse empregado está doente!",
    "ERROR_EMPLOYEE_NO_SLEEP"            => "Esse empregado não precisa dormir agora!",
    "ERROR_EMPLOYEE_SLEEP_STARTED"       => "Esse empregado está dormindo.",
    "ERROR_EMPLOYEE_NEEDS_SLEEP"         => "Esse empregado precisa dormir",
    "ERROR_EMPLOYEE_ALREADY_CITY"        => "Esse empregado já está na cidade!",
    "ERROR_EMPLOYEE_DRIVING_TRANSFER"    => "O empregado está indo pra cidade que você ordenou!",
    "ERROR_SPECIFY_START_CITY_EMPL"      => "Especifique uma cidade inicial para esse empregado!",
    "ERROR_SPECIFY_EMPLOYEE_HIRE"        => "Selecione o empregado que você quer contratar!",

    "ERROR_MAX_TRUCKERS_REACHED"         => "Você ultrapassou o máximo de caminhões do mesmo tipo! Escolha outro!",
    "ERROR_MAX_WHEMPL_REACHED"           => "Você ultrapassou o máximo de empregados desse CD. Escolha outro!",
    "ERROR_MAX_ACCOUNTANTS_REACHED"      => "Você ultrapassou o máximo de contadores!",
    "ERROR_MAX_HRMGRS_REACHED"           => "Você ultrapassou o máximo de gerentes de RH.",
    "ERROR_MAX_TECHMGRS_REACHED"         => "Você ultrapassou o máximo de gerentes técnicos!",
    "ERROR_MAX_MANAGERS_REACHED"         => "Você ultrapassou o máximo de gerentes desse tipo! Escolha outro!",

    "ERROR_HIRE_MGR_LEVEL"               => "Precisa de nível 2 para contratar um gerente!",
    "ERROR_HIRE_TECHMGR_LEVEL"           => "Precisa de nível 19 para contratar um gerente técnico!",
    "ERROR_HIRE_HRMGR_LEVEL"             => "Precisa de nível 18 para contratar um gerente de RH.",
    "ERROR_HIRE_ACCOUNTANT_LEVEL"        => "Precisa de nível 3 para contratar um contador!",

    "ERROR_HIRE_TRUCKER_SUCCESS"         => "Você contratou esse motorista!",
    "ERROR_HIRE_WHEMPL_SUCCESS"          => "Você contratou esse empregado do CD",
    "ERROR_HIRE_MGR_SUCCESS"             => "Você contratou esse gerente",
    "ERROR_HIRE_TECHMGR_SUCCESS"         => "Você contratou esse gerente técnico.",
    "ERROR_HIRE_HRMGR_SUCCESS"           => "Você contratou esse gerente de RH.",
    "ERROR_HIRE_ACCOUNTANT_SUCCESS"      => "Você contratou esse contador!",

    "ERROR_UPGRADE_TRUCKERS_ONLY"        => "Essa opção de melhora só está disponível para motoristas!!",
    "ERROR_ACHIEVE_PREV_LICENSE"         => "Você precisa ter a licença anterior para obter essa!",
    "ERROR_INVALID_LICENSE"              => "Licença não disponível",
    "ERROR_LICENSE_UPGRADED"             => "Licença melhorada!",


//Corporation

    //General
    "ERROR_CONC_ALREADY_JOINED"      => "Sua empresa já se juntou a uma corporação.",
    "ERROR_INVALID_CONCERN"          => "Essa corporação não existe!",
    "ERROR_NOCONCERN"                => "Sua empresa não faz parte de uma corporação!",
    "ERROR_CONC_SELECT_MEMBER"       => "Você tem que selecionar um membro!",
    "ERROR_CONC_INVALID_MEMBER"      => "Membro inválido!",
    "ERROR_MEMBER_NOT_IN_CONC"       => "Essa pessoa não faz parte da sua corporação",
    "ERROR_CONC_NOT_OWNER"           => "Você não é o proprietário dessa corporação!",
    "ERROR_INSUF_RIGHTS"             => "Direitos insuficientes!",

    //Application
    "ERROR_CONC_ALREADY_APPLIED"     => "Você já se candidatou para essa corporação! Tenha paciência, bro! :)",
    "ERROR_CONC_MAX_REACHED"         => "Essa corporação já atingiu o número máximo de membros!",
    "ERROR_CONC_MAX_REACHED2"        => "Quantidade máxima de membros nesse país já foi atingida. Aumente seu escritório primeiro!",
    "ERROR_NOT_ACCEPTING"            => "Essa corporação não está aceitando membros no momento!",
    "ERROR_LEVEL_CONCERN"            => "Você precisa ter o nível 6 para se candidatar a uma corporação.",
    "ERROR_CONC_APPLIED"             => "Você já se candidatou para essa corporação. Precisa esperar que o dono aprove você ou não!",
    "ERROR_CONC_INVALID_APPL"        => "Sua candidatura para essa corporação não foi encontrada.",
    "ERROR_CONC_APPL_CANCELED"       => "Você cancelou sua candidatura para essa corporação.",

    //Promote, Fire, Retire & Delete
    "ERROR_CONC_ACTIVE_MEMBERS"      => "Essa corporação ainda tem membros. Remova-os primeiro!",
    "ERROR_CONC_ACTIVE_FREIGHTS"     => "Essa corporação ainda tem fretes. Cancele-os primeiro!",
    "ERROR_CONC_DELETED"             => "Você encerrou essa corporação.",
    "ERROR_CONC_FIRED_MEMBER"        => "Você removeu esse membro.",
    "ERROR_CONC_PROMOTED_MEMBER"     => "Você promoveu esse membro.",
    "ERROR_NO_CONC_PREMIUM_PROM"     => "Esse membro não tem os requisitos para iniciar uma corporação.",
    "ERROR_OWNER_CANT_RETIRE"        => "Você é o dono dessa corporação. Você não pode deixa-la. Você pode apaga-la, se quiser.",
    "ERROR_CONC_OPEN_INVOICES2"      => "Você ainda tem faturas não pagas nessa corporação. Pague-as primeiro!",
    "ERROR_CONC_ACTIVE_FREIGHTS2"    => "Você ainda tem fretes corporativos ativos. Exclua-os primeiro!",
    "ERROR_CONC_RETIRED"             => "Você deixou essa corporação."

    //Create
    "ERROR_CONC_REQUIREMENTS"        => "Você não tem os requisitos para iniciar uma corporação.",
    "ERROR_CONC_CREATED"             => "Sua corporação foi iniciada!",
    "ERROR_INVALID_NAME"             => "Nome inválido!",

    //Properties
    "ERROR_INVALID_FUELST"           => "Posto de combustível inválido!",
    "ERROR_FUELST_EXISTS"            => "Você já tem um posto de combustível nesse país!",
    "ERROR_CONC_MONEY"               => "Sua corporação não tem dinheiro suficiente",
    "ERROR_FUELST_BOUGHT"            => "Posto de combustível comprado!",
    "ERROR_FUELST_REFUELED"          => "Posto de combustível reabastecido!",
    "ERROR_FLPRICE_HIGH"             => "O preço é muito alto!",
    "ERROR_FLPRICE_SET"              => "Preço do combustível ajustado!",
    "ERROR_CONC_LEVEL"               => "Sua corporação não possui o nível mínimo!",
    "ERROR_FUELST_UPGRADED"          => "Posto de combustível melhorado!",
    "ERROR_INVALID_OFFICE"           => "Escritório inválido!",
    "ERROR_OFFICE_EXISTS"            => "Você já tem um escritório nesse país!",
    "ERROR_OFFICE_BOUGHT"            => "Escritório comprado!",
    "ERROR_OFFICE_UPGRADED"          => "Escritório melhorado!",
    "ERROR_CONC_NO_PROPERTIES"       => "Sua corporação não tem propriedades!",

    //Project
    "ERROR_INVALID_PROJECT"          => "Projeto não encontrado!",
    "ERROR_PROJECT_NOT_AVAIL"        => "Projeto não mais disponível!",
    "ERROR_PROJECT_MAX_REACHED"      => "Sua corporação já tem dois projetos em andamento!",
    "ERROR_PROJECT_ACCEPTED"         => "Projeto aceito!",
    "ERROR_INCOMPLETE_PROJ_ACT"      => "Complete todas as atividades do projeto primeiro",
    "ERROR_PROJECT_CANCELED"         => "Projeto cancelado!",
    "ERROR_PROJECT_FINISHED"         => "Projeto finalizado!",

    //Other
    "ERROR_CONC_DONATED"             => "Dinheiro doado com sucesso!",
    "ERROR_CONC_DONATION_SET"        => "Doação diária configurada!",
    "ERROR_GENERAL_MESSAGE_SAVED"    => "A mensagem foi salva!",

    "ERROR_INVALID_LANGUAGE"         => "Idioma inválido!",
    "ERROR_LANGUAGE_CHANGED"         => "Idioma alterado!",
    "ERROR_RIGHTS_CHANGED"           => "Direitos alterados!",

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
