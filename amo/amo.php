<?php
require_once __DIR__ . '/amocrm.phar';

$utm_medium = $_POST['utm_medium'];
$utm_campaign = $_POST['utm_campaign'];
$utm_content = $_POST['utm_content'];
$utm_term = $_POST['utm_term'];
$utm_source = $_POST['utm_source'];
$yclid = $_POST['yclid'];
$glid = $_POST['glid'];

$subject = $_POST['subject'];

// $c1 = $_COOKIE['utm_medium'];
// $c2 = $_COOKIE['utm_campaign'];
// $c3 = $_COOKIE['utm_content'];
// $c4 = $_COOKIE['utm_term'];
// $c5 = $_COOKIE['utm_source'];

try {
    // Создание клиента
    $amo = new \AmoCRM\Client('soyuzpro', 'Smirnov@skavangard.ru', '146bed999d7abbb6373272ac2931068cec739b1f');
	
	$lead = $amo->lead;
	$lead->debug(false); // Режим отладки
	$lead['name'] = 'Новая заявка с сайта soyuz.pro';
	$lead['responsible_user_id'] = 3898666;
	
	if($subject=='Союз — заявка')
		$lead['tags'] = ['soyuz.pro' , 'Заявка'];
	elseif($subject=='Союз — заявка на обратный звонок')
		$lead['tags'] = ['soyuz.pro' , 'Звонок'];
	elseif($subject=='Союз — заявка на презентацию')
		$lead['tags'] = ['soyuz.pro' , 'Презентация'];
	elseif($subject=='Союз — заявка на образец')
		$lead['tags'] = ['soyuz.pro' , 'Образец лесов'];
	elseif($subject=='Союз — заявка на встречу')
		$lead['tags'] = ['soyuz.pro' , 'Встреча'];
	
	if ( $utm_source ) { $lead->addCustomField(615433, $utm_source); }
	if ( $utm_content ) { $lead->addCustomField(617121, $utm_content); }
	if ( $utm_medium ) { $lead->addCustomField(617117, $utm_medium); }
	if ( $utm_campaign ) { $lead->addCustomField(615435, $utm_campaign); }
	if ( $utm_term ) { $lead->addCustomField(615437, $utm_term); }
	if ( $yclid ) { $lead->addCustomField(669507, $yclid); }
	if ( $glid ) { $lead->addCustomField(615441, $glid); }

	$lead_id = $lead->apiAdd();
	
	
	
	
	$contact = $amo->contact;
	$contact_search = $amo->contact->apiList(['query' => $_POST['phone']]);
	if(empty($contact_search))
	{
		$contact = $amo->contact;
		// Заполнение полей модели
		$contact['name'] = $_POST['name']?$_POST['name']:'Не указано';
		$contact['responsible_user_id'] = 3898666;
		$contact['linked_leads_id'] = $lead_id;
		if($_POST['phone'])
			$contact->addCustomField(24129, $_POST['phone'], 'WORK');//Телефон
		if ($_POST['email'])
			$contact->addCustomField(24131, $_POST['email'], 'WORK');//Email
	}
	else
	{
		$contactid = $contact_search[0]['id'];
		$linked_leads_id = $contact_search[0]['linked_leads_id'];
		// print_r($contact_search);
		array_push($linked_leads_id, $lead_id);
		$contact = $amo->contact;
		$contact->debug(false);
		$contact->addCustomField(24129, $_POST['phone'], 'WORK');
		$contact['linked_leads_id'] = $linked_leads_id;
		$contact->apiUpdate((int)$contactid, 'now');
	}
	

    // Добавление нового контакта и получение его ID
    $contact_id=$contact->apiAdd();
    
} catch (\AmoCRM\Exception $e) {
    printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
}