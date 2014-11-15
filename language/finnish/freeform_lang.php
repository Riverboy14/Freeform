<?php

/**
 * Freeform - Language
 *
 * @package		Solspace:Freeform
 * @author		Solspace, Inc.
 * @copyright	Copyright (c) 2008-2013, Solspace, Inc.
 * @link		http://solspace.com/docs/freeform
 * @license		http://www.solspace.com/license_agreement
 * @version		4.0.10
 * @filesource	freeform/language/english/freeform_lang.php
 */

$lang = array(

'success'	=>
'Onnistui',

//----------------------------------------
// Required for MODULES page
//----------------------------------------

/*%non_pro%
"freeform_module_name" =>
"Freeform",
//%/non_pro%*/

//%pro%
"freeform_module_name" =>
"Freeform Pro",
//%/pro%

'go_pro' =>
"Hanki Pro-versio!",

"freeform_module_description" =>
"Monipuolinen lomakkeiden luonti ja tietojen keräys",

'freeform_module_version' =>
'Freeform',

'freeform' =>
"Freeform",

'help' =>
"Ohje",

'default' =>
"Oletus",

// -------------------------------------
//	non pro lang
// -------------------------------------

'go_pro_custom_fields' =>
"Tiesitkö, että Freeform Pro:ssa tarjolla enemmän lomakekenttiä? Klikkaa tästä ja katso mitä FreeForm Pro sisältää!",

// -------------------------------------
//	fieldtype - kentän tyyppi
// -------------------------------------

'no_available_composer_forms' =>
"Lomake-editorin malleissa ei ole Freeformin lomakkeita saatavilla.",

'choose_composer_form' =>
"Valitse Freeform lomake-editorin lomake käyttöön:",

//----------------------------------------
//  Main Menu - Päämenu
//----------------------------------------

'forms' =>
"Lomakkeet",

'fields' =>
"Kentät",

'site_id' =>
"Sivuston ID",

'notifications' =>
"Ilmoitukset",

'templates' =>
"Mallit",

'composer_templates' =>
"Lomake-editorin mallit",

'permissions' =>
"Käyttöoikeudet",

'utilities' =>
"Työkalut",

'preferences' =>
"Asetukset",

'export' =>
"Vienti",

'code_pack' =>
"Koodipaketti",

'help' =>
"Ohje",

'online_documentation' =>
"Käyttöohjeet verkossa",

'id' =>
"ID", 

// -------------------------------------
//	Multi site - Multisivusto
// -------------------------------------

'show_from_all_sites' =>
"Näytä kohteet kaikilta sivustoilta",

'use_one_set_of_prefs' =>
"Käytä yhtä ja samaa asetusta kaikille sivustoille",

'default_show_all_sites' =>
"Näytä kaikkien sivustojen data oletusasetuksena",

'global_prefs' =>
"Yleiset asetukset",

'site_prefs_for' =>
"Sivuston asetukset:",

//----------------------------------------
//  Buttons - Painikkeet
//----------------------------------------

'save' =>
"Tallenna",

'delete_selected' =>
"Poista valitut",

'create_one_now' =>
"Luo yksi nyt.",

'dialog_ok' =>
"OK",

'dialog_cancel' =>
"Peruuta",

'dialog_continue' =>
"Jatka",

'dialog_continue_anyway' =>
"Jatka joka tapauksessa",

"yes" =>
"Kyllä",

"no" =>
"Ei",

'notice' =>
"Huomioi",

// -------------------------------------
//	form statuses - lomakemuodot
// -------------------------------------

'pending' =>
"Odottaa",

'open' =>
"Aktiivinen",  // myös avoin, auki

'closed' =>
"Suljettu",

'status' =>
"Tila",

// -------------------------------------
// forms - lomakkeet
// -------------------------------------

'no_forms' =>
"Lomakkeita ei ole tällä hetkellä olemassa.",

'no_forms_legacy' =>
"Lomakkeita ei ole tällä hetkellä olemassa. Koska olet päivittänyt Freeformin aikaisemmasta versiosta, voit siirtää vanhat kokoelmat nyt.",

'migrate_collections' =>
"Siirrä vanhat kokoelmat",

'create_new_form_now' =>
"Luo uusi lomake nyt.",

'forms' =>
"Lomakkeet",

'form' =>
"Lomake",

'submissions' =>
"Täytetyt lomakkeet",

'moderate' =>
"Moderoi",

'actions' =>
"Toiminnot",

'edit' =>
"Muokkaa",

'in_composer' =>
"Lomake-editorissa",

'settings' =>
"Asetukset",

'duplicate' =>
"Kopioi", // > toisinna

'delete' =>
"Poista",

// -------------------------------------
//	create forms - luo lomakkeita
// -------------------------------------

'edit_form_success' =>
"Lomake on tallennettu",

'duplicated_from_' =>
"Lisätty tietoja kopioidusta lomakkeesta:",

'create_form' =>
"Luo lomake",

'update_form' =>
"Päivitä lomake",

'create_form_description' =>
"Täytä perustiedot alla olevaan lomakkeeseen. Sen jälkeen voit valita, teetkö oman lomakkeen lomake-editorin vedä ja pudota käyttöliittymässä, vaihtoehtoisesti voit myös käyttää tavallisia ExpressionEnginen malleja Freeform tagien kanssa.",

'new_form' =>
"Uusi lomake",

'form_label' =>
"Lomakkeen nimi", // label > nimiö, nimike, etiketti

'form_label_desc' =>
"Tämä on lomakkeen koko nimi.<br/>Esimerkki: Ota yhteyttä",

'form_name' =>
"Lomakkeen nimi",

'form_name_desc' =>
"Lyhyt nimi lomakkeelle. Yksi sana, ei välilyöntejä, alaviivat sallittuja. Esimerkki: ota_yhteytta",

'form_description_desc' =>
"Anna sopiva kuvaus lomakkeelle.<br/>Kuvauksen avulla helpompi pysyä selvillä mihin tarkoitukseen lomake on.",

'default_status' =>
"Oletustila",

'default_status_desc' =>
"Kaikki lomake-ehdotukset asetetaan tähän tilaan, ellei asetusta ole kumottu tagin parametreissa. Oletustilana on 'odottaa'.",

'design_template' =>
"Suunnittelumalli",

'design_template_desc' =>
"Määrittää lomakkeen ulkoasun.",

'enable' =>
"Ota käyttöön", // salli, ota käyttöön, aktivoi

'notify_admin' =>
"Ilmoita ylläpidolle",

'notify_user' =>
"Ilmoita käyttäjälle",

'notify_admin_desc' =>
"Ota käyttöön ilmoita ylläpitäjälle -asetus. Kun lomake on lähetetty ja tallennettu tietokantaan, asiasta lähetetään automaattisesti tieto sivuston ylläpitäjälle.",

'notify_user_desc' =>
"Ilmoita käyttäjälle -asetus edellyttää lomakekenttää joka sallii sähköpostiosoitteen syötön. Jos käyttäjä kirjoittaa sähköpostiosoitteen, niin hänelle lähetetään ilmoitus. Jos kyseistä lomakekenttää ei ole tällä hetkellä  saatavissa, voit muokata tätä kenttää myöhemmin lisäämällä yhden kentän tai vaihtoehtoisesti voit ohittaa kentän nimen mallin parametreissa.",

'user_email_field' =>
"Käyttäjän sähköpostin osoitekenttä",

'choose_user_email_field' =>
"Valitse käyttäjän sähköpostin osoitekenttä",

'notification_template' =>
"Ilmoituksen mallipohja",  // tiedotemalli, ilmoitusmalli

'user_notification' =>
"Asiakkaan mallipohja", // tiedotemalli, ilmoitusmalli

'user_notification_desc' =>
"Sähköpostitiedotteen malli henkilölle joka täyttää lomakkeen (mikäli sähköpostiosoite on annettu",  // sähköpostitiedote, sähköposti-ilmoitus

'admin_notification' =>
"Ylläpidon tiedotteen malli", // tiedotteen, ilmoituksen

'admin_notification_desc' =>
"Sähköpostitiedotteen malli, joka lähetetään sivuston ylläpitäjälle kun lomake on täytetty.", // sähköpostitiedote, sähköposti-ilmoitus

'continue' =>
"Jatka",

'continue_desc' =>
"Tallenna tämä lomake ja jatka lomakkeen muokkaamista lomake-editorissa.",

'save' =>
"Tallenna",

'save_desc' =>
"Luo tämä lomake myöhemmin ExpressionEngine sivupohjaa käyttäen.",

'admin_notification_email' =>
"Sähköpostiosoite ylläpidon ilmoitukselle", // tiedotteelle, ilmoitukselle

'admin_notification_email_desc' =>
"Tiedotteet ylläpidolle: Sähköpostiosoitteet mihin tiedot lähetetään kun lomake on täytetty. Erottele sähköpostiosoitteet toisistaan pilkulla.",

'composer_form_type_desc' =>
"Tee tämä lomake 'vedä ja pudota' -käyttöliittymällä",

'template_form_type_desc' =>
"Koodaa tämä lomake ExpressionEngine sivupohjaa käyttäen",

'composer' =>
"Lomake-editori",

'template' =>
"sivupohja", // mallipohja

'form_type' =>
"Lomaketyyppi",

'form_fields' =>
"Lomakekentät",

'form_fields_desc' =>
"Sinun tulee sisällyttää lomakekentät jokaisesta lomakkeesta jotta voit kerätä tietoa.",

'auto_generate_name' =>
"Luo nimi automaattisesti",

'click_drag_add_remove_sort'=>
"Lisää tai poista lomakekenttiä joko klikkaamalla tai vetämällä. Vedä kentät oikeaan palstaan lajiteltavaksi. Oikeassa palstassa olevat kentät ovat käytössä tässä lomakkeessa ja näkyvät siinä järjestyksessä kun käytetään {all_form_fields} tagia.",

'return_page_field' =>
"Lisää palautuspolku, jonka voit lähettää käyttäjille kun he ovat täyttäneet tämän lomakkeen (esim: 'lomake/kiitos'):",


// -------------------------------------
//	composer - lomake-editori
// -------------------------------------

'composer_instructions' =>
"Klikkaa tai vedä mikä tahansa erikoiskentistä tai mukautetuista kentistä lomake-editorin näkymään. Klikkaamalla elementtiä luot rivin, jossa on elementti sisällä. Luo oma rivi ja voit vetää elementtejä siihen. Sivunvaihto -elementillä voit tehdä tästä monisivuisen lomakkeen.",

'insert' =>
"Lisää",

'save_and_finish'=>
"Tallenna ja lopeta",

'click_or_drag_to_add'=>
"Lisää klikkaamalla tai vetämällä",

'title'=>
"Otsikko",

'paragraph'=>
"Kappale",

"page" =>
"Sivu",

'page_break'=>
"Sivun vaihto",

'page_name'=>
"Sivun nimi",

'multipage'=>
"Monisivuinen",

'submit_button'=>
"Lähetä -painike",

'search_fields'=>
"Hakukentät",

'finished' =>
"Valmis",

'row'=>
"Rivi",

'captcha' =>
"Captcha",

'double_click_to_edit' =>
"Muokkaa tuplaklikkaamalla",

'double_click_to_edit_recipients' =>
"Muokkaa vastaanottajia tuplaklikkaamalla",

'notify_friends' =>
"Ilmoita ystävillesi",  // tiedota, ilmoita

'notify_instructions' =>
"Lisää ystäviesi sähköpostiosoitteet, erota osoitteet toisistaan pilkulla:",

'dynrec_edit_instructions' =>
"Laita sähköpostiosoitteet palstaan 1 ja nimet jotka ovat näkyvissä palstaan 2.",

'dynrec_output_label' =>
"Dynaamisesti luotavien vastaanottajien nimike", // englannissa "dynamic" > mikäli harhaanjohtava suomennos, vaihda.

'select_dropdown' =>
"Valitse pudotusvalikko",

'checkbox_group' =>
"Valintaruutu ryhmä",

'dynrec_output_type' =>
"Dynaamisten vastaanottajien tyyppi", // Dynamic > dynaamiset > jos parempi suomennos, vaihda.

//lower case on purpose
'delete_lower' =>
"poista",

//lower case on purpose
'delete_row_lower' =>
"poista rivi",

//lower case on purpose
'delete_field_lower' =>
"poista kenttä",

//lower case on purpose
'require_field_lower' =>
"Vaadittu kenttä", // pakollinen kenttä, vaadittu kenttä

//lower case on purpose
'unrequire_field_lower' =>
"vapaaehtoinen kenttä",

//lower case on purpose
'add_column' =>
"lisää palsta",

//lower case on purpose
'remove_column' =>
"poista palsta",

'preview' =>
"Esikatselu",

'allowed_html_tags' =>
"Salli html-tagit: ",

'captcha_input_instructions' =>
"Kirjoita sana jonka näet alla olevassa kuvassa:",

'composer_data_saved' =>
"Lomake-editorin tieto tallennettu",

'composer_preview' =>
"Lomake-editorin esikatselu",

'missing_submits' =>
"Lähetä -painike puuttuu yhdeltä tai useammalta sivulta. Tämä saattaa aiheuttaa ongelmia kun kun ihmiset yrittävät lähettää lomaketta.",

'clear_all' =>
"Tyhjennä kaikki",

'clear_all_rows' =>
"Tyhjennä kaikki rivit",

'clear_all_warning' =>
"Oletko varma, että haluat poistaa kaikki kohteet lomake-editorissa? Tätä toimintoa ei voi kumota",


// -------------------------------------------------
//	view/moderate entries - katso/moderoi saapuneita lomakkeita
// -------------------------------------------------

'entries' =>
"Saapuneet lomakkeet",

'complete' =>
"Valmis",

'entry_id' =>
"Saapuneen&nbsp;lomakkeen&nbsp;ID",

'author_id' =>
"Kirjoittajan&nbsp;ID",

'author' =>
"Kirjoittaja",

'ip_address' =>
"IP-osoite",

'entry_date' =>
"Tiedon&nbsp;päiväys",

'edit_date' =>
"Muokattu&nbsp;päiväys",

'status' =>
"Tila",

'never' =>
"Ei koskaan",

'n_a' =>
"Ei saatavilla",

'num_items_awaiting_moderation' =>
"Sinulla on %num% &quot;<strong>%form_label%</strong>&quot; viestiä odottamassa moderointia.",

'awaiting_moderation' =>
"Odottaa moderointia",

'submit' =>
"Lähetä",

'view' =>
"Katso",

'no_entries_for_form' =>
"Tälle lomakkeelle ei ole merkintöjä.",

'edit_field_layout' =>
"Muokkaa kentän asettelua",

'layout_saved' =>
"Asettelu tallennettu.",

'keywords' =>
"Hakusanat",

'today' =>
"Tänään",

'this_week' =>
"Tällä viikolla",

'this_month' =>
"Tässä kuussa",

'last_month' =>
"Viime kuussa",

'this_year' =>
"Tänä vuonna",

'choose_date_range' =>
"Valitse aikaväli",

'start_date' =>
"Alkupäivä",

'end_date' =>
"Loppupäivä",

'moderate' =>
"Moderoi",

'form_field' =>
"Lomakekenttä",

'approve' =>
"Hyväksy",

'entries_approved' =>
"Sisältö hyväksytty",

'no_entries_awaiting_approval' =>
"Ei hyväksyntää odottavaa sisältöä",

'no_results_for_search' =>
"Hakutermiä vastaavia tuloksia ei löydy",

'viewing_moderation' =>
"Tarkastelet lähetyksiä &quot;<strong>%form_label%</strong>&quot;. Näiden tila on &quot;odottaa&quot;. Hyväksyntä asettaa tilaksi &quot;avoin&quot;.",

'approve_selected' =>
"Hyväksy valittu",

'edit_selected' =>
"Muokkaa valittu",

'delete_selected' =>
"Poista valittu",

'entries_deleted' =>
"Tieto poistettu",

'confirm_delete_entries' =>
"Haluatko varmasti poistaa tiedot lopullisesti?",

'must_select_group' =>
"Tallenna tämä ulkoasu, se on määritettävä yhden tai useamman ryhmän alla.",

'download_started' =>
"Vientiä luodaan ja latautuu kun tehtävä on suoritettu.",

// -------------------------------------
//	edit entries - muokkaa sisältöä / tietoa
// -------------------------------------

'new_entry' =>
"Uusi tieto",

'edit_entry' =>
"Muokkaa sisältöä",

'group_title' =>
"Ryhmän otsikko",

'screen_name' =>
"Näyttönimi",

'guest' =>
"Vieras",

'edit_entry_success' =>
"Tieto on muokattu",

'new_entry_success' =>
"Uusi tieto luotu",

// -------------------------------------
//	column prefs - palstan asetukset
// -------------------------------------

'edit_field_layout' =>
"Muokkaa kentän ulkoasua",

'hidden_fields' =>
"Piilotetut kentät",

'shown_fields' =>
"Näytä kentät",

'click_to_add' =>
"Lisää klikkaamalla",

'drag_to_reorder' =>
"Järjestä uudelleen vetämällä",

'save_this_layout_for' =>
"Tallenna tämä ulkoasu",

'just_me' =>
"Vain minä",

'everyone' =>
"Kaikki",

// -------------------------------------
//	sub layouts - sub ulkoasut
// -------------------------------------

'field_entry_view' =>
"Tiedot",

// -------------------------------------
//	export - vienti
// -------------------------------------

'export' =>
"Vie",

'txt' =>
"Teksti",

'xml' =>
"XML",

'csv' =>
"CSV",

'json' =>
"JSON",

'export_as' =>
"Vie nimellä",

'export_entries' =>
"Vie tiedot",

'shown_fields' =>
"Näytettävät kentät",

'all_fields' =>
"Kaikki kentät",

// ------------------------------------------------------------
//	multi-item rows for fields - usean kohteen rivit kentille
// ------------------------------------------------------------

'multi_list_items' =>
"Monivalintaiset kohteet",

'multi_list_items_desc' =>
"Valitse neljästä eri monivalinnan luettelotyypistä:<br/><br/> - Lista<br/> - Arvo/Nimike Yhdistelmälista<br/> - Lista Kanavan kentistä<br/> - Tekstikenttä<br/><br/>Uusia tyhjiä syötteitä luodaan itsestään kun viimeinen on käytetty.",  // mikäli paremmin sopiva suomennos löytyy. Korjaa.


'load_from_channel_field' =>
"Lataa kanava -kentästä",

'title' =>
"Otsikko",

'url_title' =>
"URL -otsikko",

'value_label_list' =>
"Arvo/nimi luettelo",

'list_type' =>
"Luettelon tyyppi",

'list' =>
"Luettelo",

"nld_textarea" =>
"Välilyönnillä erotettu tekstialue, monirivinen tekstiruutu",

'type_list_desc' =>
"Tämä on yksinkertaistettu lista arvoista. Aseta jokainen arvo yhdelle kentälle.",

'type_value_label_desc' =>
"Tämä on arvo/nimike luettelo. Arvo on tieto, joka on tallennettu valintaan ja nimikkeelle ja joka näkyy valintoina käyttäjille.",  // tarkista, muokkaa mikäli paremmin vastaava lause voidaan rakentaa

'channel_field_list_desc' =>
"Tämä vie kaikki tiedot yhdeltä kanavalta ja tekee siitä listan.",

'type_nld_textarea_desc' =>
"Tämä on rajoitettu tekstialue, monirivinen tekstiruutu. Tämä tekee jokaisen rivin tiedosta luettelon, lukuunottamatta tyhjiä rivejä.",


// -------------------------------------
//	show fields  - näytä kentät
// -------------------------------------

'type' =>
"Tyyppi",

'label' =>
"Nimike", // nimiö > nimike > etiketti

'name' =>
"Nimi",

'description' =>
"Kuvaus",

// -------------------------------------
//	field types - kenttien tyypit
// -------------------------------------

'fieldtypes' =>
"Kenttätyypit",

'no_fieldtypes' =>
"Kenttätyyppejä ei ole saatavilla.<br/>Mitä! Oletko poistanut kaikki oletuksetkin? O_o",

'no_fieldtypes_submitted' =>
"Ei kenttätyyppejä.",

'following_fields_converted' =>
"Seuraavat kentät muunnetaan oletuksena olevaksi 'tekstiksi' tämän asennuksen poiston yhteydessä",

'freeform_field_description' =>
"Näiden kenttien tyypit kuuluvat yksinomaan Freeformille ja ne eivät ole samoja kuin ExpressionEngine mukautetut kenttätyypit.",

'freeform_fieldtype_docs' =>
"Freeform mahdollistaa kolmannen osapuolien kehittäjien tehdä omia kenttätyyppejä,jotka ovat hyvin samanlaisia kuin alkuperäiset ExpressionEnginen kenttätyypit.",

'freeform_fieldtype_url_desc' =>
"Katso Freeformin kenttätyyppien kehittäjien dokumentaatio.",

'freeform_fieldtype_name' =>
"Freeform kenttätyypin nimi",

'description' =>
"Kuvaus",

'version' =>
"Versio",

'status' =>
"Tila",

'action' =>
"Toiminto",

'install' =>
"Asenna",

'uninstall' =>
"Poista asennus",

'not_installed' =>
"Ei asennettu",

'installed' =>
"Asennettu",

'fieldtype_installed' =>
"Kenttätyyppi asennettu",

'fieldtype_uninstalled' =>
"Kenttätyypin asennus poistettu",

'fieldtype_install_error' =>
"Yrittäessä asentaa tätä kenttätyyppiä tapahtui tuntematon virhe.",

// ----------------------------------------------
//	default field types - kenttätyypit oletukset
// ----------------------------------------------

// -------------------------------------
//	Checkbox - Valintaruutu
// -------------------------------------

'default_checkbox_name' =>
"Valintaruutu",

'default_checkbox_desc' =>
"Kenttä yhdellä valintaruudulla ja \"y\" tai \"n\" asetuksella.",

// -------------------------------------
//	Checkbox Group - Valintaruuturyhmä
// -------------------------------------

'default_checkbox_group_name' =>
"Valintaruuturyhmä",

'default_checkbox_group_desc' =>
"Kenttä, joka sisältää ryhmän valintaruutuja useiden valintojen tekemiseen.",

// -------------------------------------
//	country select - maan valinta
// -------------------------------------

'default_country_name' =>
"Maan valinta",

'default_country_desc' =>
"Maiden valinta pudotusvalikossa. Haettu palvelimelta, polku tiedostoon ./system/expressionengine/config/countries.php",


// -------------------------------------
//	country select - maan valinta
// -------------------------------------

'default_hidden_name' =>
"Piilotettu kenttä",

'default_hidden_desc' =>
"Piilotettu kenttä tiedon keräämiseen jossa käyttäjän ei tarvitse olla vuorovaikutuksessa.",

'default_hidden_field_data' =>
'Saapuvan datan oletus',

'default_hidden_field_data_desc' =>
"Käytä tätä kun määrität oletusarvoja jotka asetetaan piilotetun kentän arvoksi. <br/><br/>Sallittua dataa ovat ExpressionEnginen tagit ja sulkeet ja erityiskentät. Kaikki HTML poistetaan tästä asetuksesta.<br/><br/>Use CURRENT_URL to retrive the URL the user was on when they submitted the page. Due to the restrictions of PHP, any data after hash tags 'http://site.com/#item' is not retrievable.",


'hidden_field_not_shown' =>
"Piilotettu kenttä: tämä ei näy käyttäjälle.",  // NOTE! there is an error 'font end', Should it be FRONT END?


// -----------------------------------------
//	mailinglist field - postituslista
// -----------------------------------------

'default_mailinglist_name' =>
"Postituslista",

'default_mailinglist_desc' =>
"Kenttä, joka sallii käyttäjien tilata ExpressionEngine postituslista-moduulin postituslistoja.",

'invalid_mailinglist' =>
"Virheellinen postituslista",

'no_mailinglists' =>
"Postituslistat eivät ole käytettävissä.",

'opt_in_by_default' =>
"Tilaajaksi oletuksena",

'opt_in_by_default_desc' =>
"Oletusarvona, tarkista postituslistan kentät kun ne näkyvät lomakkeissa.",

'show_multiple_lists' =>
"Näytä useita listoja",

'show_multiple_lists_desc' =>
"Näytä kaikki postituslistat valintaruuturyhmissä.",

'mailinglist_send_email_confirmation' =>
"Lähetä sähköpostivahvistus",

'mailinglist_send_email_confirmation_desc' =>
"Lähetä linkillä varustettu sähköposti, joka antaa käyttäjälle mahdollisuuden vahvistaa ennen listalle liittymistä.",

'show_lists_by_default' =>
"Näytä listat",

'show_lists_by_default_desc' =>
"Näytä vain nämä listat.",


// -------------------------------------
//	File Upload - Tiedostojen lataaminen
// -------------------------------------

'default_file_name' =>
"Tiedoston lataaminen",

'default_file_desc' =>
"Kenttä, joka antaa käyttäjän ladata tietostoja.",

'file_upload_location' =>
"Ladattavan tiedoston sijainti",

'file_upload_location_desc' =>
"Mihin tiedostot tulisi ladata? Voit käyttää vakio EE lataushakemiston konfigurointia määrittäessä uudet latauspolut.",

'file_upload_missing_error' =>
"Latauksen sijainti tarvitaan, jotta tiedostonlatauskenttä toimisi.",

'invalid_file_upload_preference' =>
"Virheellinen tiedoston latausasetuksen id.",

'file_upload_pref_missing_error' =>
"Et ole asettanut tiedoston lataamisen asetuksia ja tarvitset vähintään yhden sijainnin jotta voit ladata tiedostoja tässä kentässä.",

'specify_upload_location' =>
"Määrittele oma sijainti latauksille",

'full_path_to_folder' =>
"Täydellinen hakemistopolku kirjoitettavissa olevaan kansioon",

'system_information' =>
"Järjestelmän tiedot",

'system_information_desc' =>
"Tämä on hyödyllistä tietoa php.ini asetuksistasi. Näitä arvoja ei voida muuttaa näissä kenttien asetuksissa, mutta voidaan muuttaa omassa php.ini -tiedostossa.",

'max_file_upload_size' =>
"Yhden ladattavan tiedoston maksimikoko:",

'max_files_uploadable' =>
"Tiedostojen maksimimäärä, jotka voidaan ladata yhdellä kertaa:",

'allowed_upload_count' =>
'Sallittu latausten määrä',

'allowed_upload_count_desc' =>
"Tiedostojen maksimimäärä, joka voidaan ladata yhdellä kertaa.<br/><br/><strong class='ss_notice'>Tässä pudotusvalikossa näkyvä ensimmäismäärä on PHP-järjestelmäasetus tiedostojen maksimimäärälle, joka voidaan ladata yhdellä kertaa ja jota ei voi ohittaa käyttämällä useita tiedostoja -kentässä.</strong>",

'overwrite_on_edit' =>
'Päällekirjoita muokatessa',

'overwrite_on_edit_desc' =>
'Kun muokkaat kohdetta ja uusia tiedostoja on ladattu, korvaa edelliset ladatut tiedostot uusilla.',

'disable_xss_clean' =>
"Älä käytä XSS tarkistusta", 

'disable_xss_clean_desc' =>
"Tämän vaihtoehdon avulla voit poistaa käytöstä järjestelmän XSS tarkistuksen pelkästään tästä tiedostonlatauskentästä mikäli ongelmia ilmenee käyttäjien latausten kanssa ja ne ovat virheellisesti estetty",

'file_field_uploads' =>
"Tiedostokentän lataukset",

'no_files_uploaded' =>
"Ei ladattuja tiedostoja",

//file size abbreviation for KiloBytes
'kb' =>
"kt",

'filesize' =>
'Tiedostokoko',

'filename' =>
'Tiedostonimi',

'file_location' =>
'Tiedoston sijainti',

'files_deleted' =>
"Tiedostoja poistettu",

'view_files' =>
"Katso tiedostot",

'allowed_file_types' =>
"Sallitut tiedostotyypit",

'allowed_file_types_desc' =>
"Mitkä tiedostotyypit haluat sallia? Anna jokainen sallittu tiedostotunniste ja erota ne toisistaan pystyviivalla. Esim. 'jpg|png|gif'. Laittamalla pelkän tähden, '*', se sallii kaikki mahdolliset tiedostotyypit.",

'email_attachments' =>
"Sähköpostin liitetiedostot",

'email_attachments_desc' =>
"Attach the file to email notifications? There are 4 times of notifications.<br/><br/> - Admin<br/> - User<br/> - Dynamic Recipients<br/> - User Inputted Recipients<br/>",

'dynamic_recipients' =>
"Dynaamiset vastaanottajat", // mikäli korvaava ja parempi suomennos saatavilla, vaihda.

'user_recipients' =>
"Vastaanottajat",  // jos kyse on User moduulista - katso mikä olisi parempi suomennos

'cannot_find_file' =>
"Tiedostoa ei löydy",

'upload_directory_name' =>
"Lataushakemiston nimi",

// -------------------------------------
//	MultiSelect - Monivalinta
// -------------------------------------

'default_multiselect_name' =>
"Monivalinta",

'default_multiselect_desc' =>
"Kenttä, jossa lista kohteista, näissä voi olla useita valintoja.",

// -------------------------------------
//	Province select - Maakunnan valinta
// -------------------------------------

'default_provinces_name' =>
"Maakunnan valinta",

'default_provinces_desc' =>
"Pudotusvalikon valinnat Kanadan maakunnista ja alueista. Ladattu Freeformin kielitiedostosta.",

// -------------------------------------
//	Radio - Valintapainikkeet
// -------------------------------------

'default_radio_name' =>
"Valintapainikkeet",

'default_radio_desc' =>
"Kenttä, jossa yksittäisen vaihtoehdon valintapainikkeita.",

// -------------------------------------
//	Select - Valinta/Valitse
// -------------------------------------

'default_select_name' =>
"Valinta",

'default_select_desc' =>
"Kenttä, jonka pudotusvalikossa on lista valinnoista.",

// -------------------------------------
//	State Select - Osavaltion valinta
// -------------------------------------

'default_state_name' =>
"Osavaltion valinta",

'default_state_desc' =>
"Pudotusvalikon valinnat US osavaltioista ja alueistasta. Ladattu Freeformin kielitiedostosta.",

// -------------------------------------
//	Text Input - Tekstinsyöttö
// -------------------------------------

'default_text_name' =>
"Teksti",

'default_text_desc' =>
"Kenttä yksirivisen tekstin syötölle.",

'integer' =>
"Kokonaisluku",

'decimal' =>
"Desimaali",

'number' =>
"Numero",

'email' =>
"Sähköposti",

'any' =>
"Mikä tahansa",

'field_content_type' =>
"Kentän sisällön tyyppi",

'field_content_type_desc' =>
"Voit asettaa validoinnin tyypin tälle tekstialueelle.",

// -------------------------------------
//	Textarea - Tekstialue
// -------------------------------------

'default_textarea_name' =>
"Tekstialue",

'default_textarea_desc' =>
"Kenttä moniriviselle tekstisyötteelle.",

'textarea_rows' =>
"Tekstialueen rivit",

'textarea_rows_desc' =>
"Näytettävien tekstirivien oletusmäärä.",

'disallow_html_rendering' =>
"Älä salli HTML:n muuntamista",

'disallow_html_rendering_desc' =>
"Oletuksena HTML-tagit koodataan niin, että ne eivät näy sivuilla/tulosteessa. Tämä estää käyttäjiä syöttämästä omaa HTML-koodia ja näyttämästä kuvia tai heidän omaa mukautettua tuotantoaan sivuillasi. Poistaminen käytöstä sallii HTML-tagien näkymisen sivuilla/tulosteessa.",


//----------------------------------------
//  edit field - muokkaa kenttää
//----------------------------------------

'edit_field_success' =>
"Kenttä tallennettu",

'update_field' =>
"Päivitä kenttä",

'create_field' =>
"Luo kenttä",

'fields_deleted' =>
"Merkityt kentät on poistettu.",

'new_field' =>
"Uusi kenttä",

'fields' =>
"Kentät",

'field' =>
"Kenttä",

'field_type' =>
"Kentän tyyppi",

'field_label' =>
"Kentän nimike",  // nimiö, etiketti tms.

'field_label_desc' =>
"Kentän koko nimi. Esimerkki: Etunimi.",

'field_name' =>
"Kentän nimi",

'field_name_desc' =>
"Kentän lyhytnimi. Yksi sana, ei välilyöntejä, alaviivat sallittu. Esimerkki: etu_nimi",

'field_order' =>
"Kenttien järjestys",

'field_order_desc' =>
"Kenttien järjestys",

'field_length' =>
"Kentän pituus",

'field_length_desc' =>
"Syötetyn tiedon maksimipituus.",

'field_display_options' =>
"Kentän näytön asetukset",

'field_display_options_desc' =>
"Valitse jos tämän kentän tulee näkyä oletusarvoisesti koko moduulissa. Lisäksi voit edelleen muokata kentän ulkoasua lomakkeittain ja käyttäjäryhmittäin Saapuneet lomakkeet- ja moderointisivulla.", 

'editable' =>
"Kenttä on muokattavissa?",

'submissions_page' =>
"Näytä kenttien ehdotukset hallintapaneelin sivulla?", 

'moderation_page' =>
"Näytä kenttä moderoinnin hallintapaneelin sivulla?", 

'composer_use' =>
"Salli kentän käyttö Freeformin lomake-editorissa?",

'field_description' =>
"Kentän kuvaus",

'field_description_desc' =>
"Anna kuvaus kentälle. Voit käyttää tätä kentän käytön seurantaan tai tämä kuvaus voidaan sisällyttää lomakkeisiin.",

'field_edit_instructions' =>
"Täytä/päivitä kentän tiedot alapuolella. Voit käyttää tätä kenttää Freeformin lomake-editorissa tai malleissa Freeformin mallitagien kanssa.",

'generate' =>
"Luo",

'field_options' =>
"Kentän asetukset",

'filter_entries' =>
"Suodata saadut lomakkeet", 

'add_to_forms' =>
"Lisää lomakkeeseen/lomakkeisiin",

'add_to_freeform_desc' =>
"Lisää tämäkenttä lomakkeisiin tallennettaessa. Oikealla näet lomakkeet joissa tämä jo on.",

'add_to_freeform_notice' =>
"Jos päädyt poistamaan tämän kentän mistä tahansa lomakkeesta niin se myös poistaa minkä tahansa ja kaiken tiedot joka liittyy lomakekenttään tässä lomakkeessa!",

// -------------------------------------
//	notifications - ilmoitukset (
// -------------------------------------

'no_notifications' =>
"Uusi ilmoituksia ei ole tällä hetkellä.", 

'user' =>
"Käyttäjä",

'admin' =>
"Ylläpitäjä",

'notification_edit_warning' =>
"Seuraavat lomakkeet käyttävät tällä hetkellä tätä ilmoitusta: <strong>%form_names%</strong>",  

'new_notification' =>
"Uusi ilmoitus",  // tiedote, ilmoitus

'update_notification' =>
"Päivitä ilmoitus",  // tiedote, ilmoitus

'create_notification' =>
"Luo ilmoitus",  // tiedote, ilmoitus

'allow_html' =>
"Salli HTML",

'wordwrap' =>
"Rivitys",

'formatting_options' =>
"Muotoilun asetukset",

'notification_label' =>
"Ilmoituksen nimike", // tiedote, ilmoitus > Label > nimike, etiketti

'notification_label_desc' =>
"Ilmoituksen koko nimi. Esimerkki: Lähetys onnistui", // tiedotteen, ilmoituksen

'notification_name' =>
"Ilmoituksen nimi",  // tiedotteen, ilmoituksen

'notification_name_desc' =>
"Ilmoituksen lyhyt nimi.<br/>Yksi sana, ei välilyöntejä, alaviivat sallittuja.<br/>Esimerkki: lahetys_onnistui",  // tiedotteen, ilmoituksen

'from_email' =>
"Lähettäjän sähköposti",

'from_email_desc' =>
"Sähköpostiosoite joka näkyy 'Lähettäjä' -kentässä tai ilmoituksen sähköpostissa.",  // tiedotteen, ilmoituksen

'from_name' =>
"Lähettäjän nimi",

'from_name_desc' =>
"Nimi joka näkyy 'Lähettäjä -kentässä tai ilmoituksen sähköpostissa.",  // tiedotteen, ilmoituksen

'reply_to_email' =>
"Vastaa sähköpostiin",

'reply_to_email_desc' =>
"Tämä on sähköpostiosoite johon vastaanottaja vastaa kun hän saa ilmoituksen.",  // tiedotteen, ilmoituksen

'email_subject' =>
"Aihe",

'email_subject_desc' =>
"Ilmoituksen otsikkorivi. Seuraavat muuttujat ovat käytössä: {my_custom_field}, {freeform_entry_id}, {entry_date}, {form_name}, {form_id}, {form_label}",  // tiedotteen, ilmoituksen

'notification_description' =>
"Kuvaus",

'notification_description_desc' =>
"Kirjoita kuvaus ilmoitukselle.<br/>Hyödyllinen pidettäessä kirjaa tiedotteiden  käyttötarkoituksesta.",  // tiedotteelle, ilmoitukselle

'notification_edit_instructions' =>
"Nämä ovat malleja, joita käytetään sähköpostitiedotteiden muokkaamisessa ja luomisessa ylläpidolle ja/tai käyttäjille. Kun olet kerran luonut ilmoitusmallin, voit määrittää sen kun luot/muokkaat lomakkeita hallintapaneelissa, tai voit ohittaa sen EE malleissasi.",  // tiedote, ilmoitus

'email_message' =>
"Sähköpostin viesti",

'email_message_desc' =>
"",

'edit_notification_success' =>
"Ilmoitus tallennettu",  // tiedote, ilmoitus 

'click_insert_custom_fields' =>
"Klikkaa ja lisää omia muokattuja kenttiä",

'click_insert_standard_tags' =>
"Klikkaa lisätäksesi vakiotageja",

'search' =>
"Etsi",

'default_notification' =>
"Oletusilmoitus", // tiedote, ilmoitus

'default_notification_subject' =>
"Joku on täyttänyt lomakkeen: {form_label}",

'default_notification_template' =>
"Joku on täyttänyt lomakkeen: {form_label}
Yksityiskohdat tässä:

{all_form_fields_string}",

'include_attachments' =>
"Sisällytä liitetiedostot", // sisältää, sisällytä

'include_attachments_desc' =>
"Jotkin Freeformin kentistä sallivat tiedostojen lataamisen. Sallimalla tämän liitetiedostot lähetetään ilmoituksen mukana.",  // tiedotteet, ilmoitukset

'uploads' =>
"Lataukset",

'upload_count' =>
"Latausmäärä",

'freeform_file_field_upload_count' =>
"Freeform tiedostokentän latausmäärä",

'attachments' =>
"Liitetiedostot",

'attachment' =>
"Liitetiedosto",

'confirm_delete_notification' =>
"Oletko varma, että haluat lopullisesti poistaa tämän ilmoitusmallin?",  // tiedotteen, ilmoituksen


// -------------------------------------
//	templates - mallit
// -------------------------------------

'confirm_delete_template' =>
"Haluatko varmasti poistaa lopullisesti tämän lomake-editorin mallin?",

'no_templates' =>
"Mukautettuja lomake-editorin malleja ei ole tällä hetkellä.",

'template_edit_warning' =>
"Seuraavat lomakkeet käyttävät tällä hetkellä tätä lomake-editorin mallia: <strong>%form_names%</strong>",

'new_template' =>
"Uusi lomake-editorin malli",

'update_template' =>
"Päivitä malli",

'create_template' =>
"Luo malli",

'template_label' =>
"Lomake-editorin mallin nimike", // label > nimiö? etiketti? nimike?

'template_label_desc' =>
"Lomake-editorin mallin koko nimi. Esimerkki: Blogin lomakkeen malli",

'template_name' =>
"Lomake-editorin mallin nimi",

'template_name_desc' =>
"Lomake-editorin lyhyt nimi.<br/>Yksi sana, ei välilyöntejä, alaviivat sallittu.<br/>Esimerkki: blogin_lomakkeen_malli",

'template_description' =>
"Lomake-editorin mallin kuvaus",

'template_description_desc' =>
"Kuvaile lomake-editorin mallit.<br/> Tämä on hyödyllinen kun pitää kirjaa lomake-editorin mallien käyttötarkoituksesta.",

'template_edit_instructions' =>
"Tämä mahdollistaa tyylimallien käytön (tyylipohja) lomake-editorin malleille. Voit kontrolloida  miten lomake tulostuu käyttäjälle, sekä miten sen muotoilua ja formaattia käsitellään.",  // jos parempi, vaihda.

'edit_template_success' =>
"Lomake-editorin malli tallennettu",

'delete_template_success' =>
"Lomake-editorin malli(t) poistettu",

'default_template' =>
"Lomake-editorin oletusmalli",

'enable_template' =>
"Ota käyttöön lomake-editorin malli", // salli, ota käyttöön

'composer_template' =>
"Lomake-editorin malli",

'quick_save' =>
"Pikatallennus",

'template_params' =>
"Mallin parametrit",

'param_name' =>
"Parametrin nimi",

'param_value' =>
"Parametrin arvo",

'template_params_desc' =>
"Lisää oletustagien parametrit lomake-editorin tulosteelle. Nämä voivat olla mitä tahansa parametrejä, jotka ovat saatavilla {exp:freeform:form}. <div class='ss_notice'>Nämä ohittavat kaiken mitä asetettu Freeform lomake-editorissa</div>",

'template_name_exists' =>
"Saman niminen lomake-editorin malli on jo olemassa.",

//----------------------------------------
//  Utilities  - Apuohjelmat, työkalut
//----------------------------------------

'collections' =>
"Kokoelmat",

'collections_desc' =>
"Näissä kokoelmissa on merkintöjä, joita ei ole vielä siirretty Freeform 4:ään.",

'empty_fields' =>
"Tyhjennä kentät",

'migrate_empty_fields' =>
"Kyllä, siirrä tyhjät kentät",

'migrate_empty_fields_desc' =>
"Hyvin todennäköisesti ei ole tarpeellista siirtää kenttiä, jotka eivät ole koskaan sisältäneet tietoa.",

'migrate_attachments' =>
"Kyllä, siirrä liitetiedostot",

'migrate_attachments_desc' =>
"Olet saattanut antaa ihmistenlähettää liitetiedostoja viesteissään. Voit siirtää nämä liitetiedostot uusiin lomakkeisiin. Sinulle luodaan mukautetut latauskentät.",

'migrate_attachments_desc_not_installed' =>
"Olet saattanut antaa ihmistenlähettää liitetiedostoja viesteissään. Voit siirtää nämä liitetiedostot uusiin lomakkeisiin. Sinulle luodaan mukautetut latauskentät.Kuitenkin, ennen sitä sinun täytyy asentaa Freeform tiedostonlataus kenttätyyppi ensin..",

'migration_in_progress' =>
"Siirto käynnissä",

'migration_complete' =>
"Siirto on valmis",

'nothing_to_migrate' =>
"Mitään siirrettäviä kokoelmia ei ole.",

'no_collections' =>
"Mitään siirrettäviä kokoelmia ei löytynyt.",

'empty_form_name' =>
"Lomakkeen nimi oli tyhjä.",

'missing_data_for_field_creation' =>
"Kenttää ei voitu luoda puuttuvien tietojen vuoksi.",


// --------------------------------------------------
// 	Language for permissions - Kieli käyttöoikeuksille
// --------------------------------------------------

"permission" =>
"käyttöoikeudet",

"save_permissions" =>
"Tallenna käyttöoikeudet",

'permissions_updated' =>
"Käyttöoikeudet päivitetty",

'allow_all' =>
"Salli kaikki",

'deny_all' =>
"Kiellä kaikki",

'by_group' =>
"Ryhmän mukaan",

'allow' =>
"Salli",

'deny' =>
"Kiellä",

'permissions_description' =>
"Nämä oikeudet sallivat ja kieltävät jäsenryhmiä näkemästä tiettyjä välilehtiä moduulin hallintapaneelissa. Jos ryhmältä on kielletty välilehti ja yrittävät käyttää sitä manuaalisesti heidät uudelleenohjataan. Jos ryhmällä on oikeudet 'no tabs' heidät tullaan uudelleenohjaamaan ExpressionEnginen hallintapaneelin etusivulle. Pääkäyttäjillä (Super Admins) on aina oikeudet näistä asetuksista huolimatta.",

'global_permissions_description' =>
"Tarkastamalla yleiset käyttöoikeudet, asetat käyttöluvat kaikille sivustoille.",

'use_global_permissions' =>
"Käytä yleisiä käyttöoikeuksia",

'default_permissions_new_group' =>
"Uusien ryhmien käyttöoikeuksien oletukset",

'default_permissions_new_group_desc' =>
"Aseta oletusoikeudet äskettäin luoduille uusille jäsenryhmille kaikille niille sivuille jotka ovat järjestetty 'Ryhmien mukaisesti'.",

'mcp_tab_permissions' =>
"Moduulin hallintapaneelin välilehtien käyttöoikeudet",


// --------------------------------------------
// 	Language for preferences - Asetusten kieli
// --------------------------------------------

"preferences" =>
"Asetukset",

"preference" =>
"Asetus",

"value" =>
"Arvo",

"save_preferences" =>
"Tallenna asetukset",

'preferences_updated' =>
"Asetukset päivitetty",

'use_solspace_mcp_style' =>
"Käytä Solspace hallintapaneelin tyyliä",

'use_solspace_mcp_style_desc' =>
"Mukautettu Solspace hallintapaneelin käyttöliittymän on suunnitellut <a href='http://ericmillerdesign.com/' target='_blank'>Eric Miller Design</a>. <br/>Toimii seuraavilla selaimilla: Chrome, Safari, Firefox, and Internet Explorer 9+.",

'censor_using_ee_word_list' =>
"Käytä ExpressionEngine sanojen sensurointia",

'censor_using_ee_word_list_desc' =>
"",

'spam_keyword_ban_enabled' =>
"Kiellä avainsanat kentissä",

'spam_keyword_ban_enabled_desc' =>
"Tarkastaa syötteen vertaamalla sitä alla olevien avainsanojen kanssa ja estää lähetyksen jos vastaavia hakusanoja löytyy.",

'spam_keywords' =>
"Kiellä avainsanat",

'spam_keywords_desc' =>
"Erottele rivinvaihdolla, käytä tähteä * jokerina.",

'spam_keyword_ban_message' =>
"Viesti kiellettyjä avainsanoja havaittaessa",

'spam_keyword_ban_message_desc' =>
"Viesti näytetään käyttäjille kun kiellettyjä avainsanoja on lähetetty.",

'form_statuses' =>
"Mukautetun lomakkeen tilat",

'form_statuses_desc' =>
"Omavalintaiset tilamääritykset lomakkeen eri kentille paitsi niille jotka on asetettu tilaan: Odottaa, Avoin, Suljettu.",

'max_user_recipients' =>
'Vastaanottajien enimmäismäärä, käyttäjät',

'max_user_recipients_desc' =>
'Käyttäjän syöttämien sähköpostin vastaanottajien enimmäismäärä. Jos maksimimäärä ylittyy, virhe näytetään käyttäjälle.',

'spam_count' =>
'Roskapostin määrä',

'spam_count_desc' =>
'Sähköpostien sallittu enimmäismäärä yhdestä IP-osoitteesta asetetun aikavälin sisällä.', 

'spam_interval' =>
'Roskapostin aikaväliväli',

'spam_interval_desc' =>
'Aikavälin nollaus enimmäismäärälle (Spam Count) lähetettäviä sähköposteja (minuuteissa)',

'allow_user_field_layout' =>
"Salli kentän ulkoasu käyttäjille",

'allow_user_field_layout_desc' =>
"Salli käyttäjien säätää kentän ulkoasun asetuksia viesteissä sen sijaan, että he käyttäisivät ylläpidon määrittämiä yleistä asetusta.",

'enable_spam_prevention' =>
"Salli roskapostin torjuminen",

'enable_spam_prevention_desc' =>
"Salli roskapostin torjuminen perustuen roskapostin määrään (Spam Count) ja Spam aikaväliasetuksiin.",

'default_show_all_site_data' =>
"Näytä tiedot kaikilta sivustoilta",

'default_show_all_site_data_desc' =>
"Näytä tiedot oletuksena kaikilta sivustoilta. Tämä vaihtoehto ei estä Freeformia olemasta sivustotietoinen, vaan se näyttää oletuksena kaikki Freeformin merkintöjen, kenttien ja ilmoitusten mallit kaikilta sivuilta sen sijaan, että ne tarvitsisi ottaa käyttöön jokaiselle sivustolle erikseen valikon välilehdeltä",

'keep_unfinished_multi_form' =>
"Pidä keskeneräiset monisivuisten lomakkeiden tiedot",

'keep_unfinished_multi_form_desc' =>
"Monisivuisen lomakkeen merkinnät, joita ei ole saatettu päätökseen yllä mainitun ajan sisällä, poistetaan. Jos haluat estää tämän automaattisen poiston, ja säilyttää keskeneräiset monisivuisen lomakkeen merkinnät, niin poista tämä asetus käytöstä. <br/><br/><span class='ss_notice'>Jos sallit tämän, on ERITTÄIN SUOSITELTAVAA, että lisäät siitä tiedon web-sivuston julkiseen tietosuojailmoitukseen, ja ilmoitat että tallennat tietoja keskeneräisistä lomakkeista. Tällä voi olla vakavia seuraamuksia tietosuojan osalta.",

'multi_form_timeout' =>
"Monisivuisen lomaketäytön aikakatkaisu", // vaihda jos muu suomennos sopii paremmin

'multi_form_timeout_desc' =>
"Sekuntien määrä ennen kuin monisivuisen lomakkeen cookie/tieto merkitään poistettavaksi. Ajastin saa palautuksen jokaisella kerralla kun käyttäjät lähettää sivullisen tietoa monisivuisella lomakkeella. (esim. 3 tuntia = 7200 = 60 * 60 * 3).",

'all_sites' =>
"Kaikki sivustot",

'cp_date_formatting' =>
"Hallintapaneelin päiväyksen muotoilu",

'cp_date_formatting_desc' =>
"Yleiset asetukset päiväysten muotoiluun Freeform hallintapaneelissa. Katso <a href='http://php.net/manual/en/function.date.php#refsect1-function.date-parameters' target='_blank'>PHP Date Format Manual</a> saatavilla olevat vaihtoehdot.",


// -------------------------------------
//	global preferences - yleiset asetukset
// -------------------------------------

'prefs_all_sites' =>
"Käytä näitä asetuksia kaikille sivustoille",

'prefs_all_sites_desc' =>
"Käytä yhtä asetusta kaikille sivustoille. Jos tätä ei ole valittu, jokaisella sivustolla on omat asetukset. Jos valittuna, kaikki sivustot käyttävät asetuksia sivustolta 1.",

// -----------------------------------------------
//	delete confirmations - poistojen vahvistukset
// -----------------------------------------------

'delete_form_confirmation' =>
"Oletko varma, että haluat poistaa lomakkeen/lomakkeet ja kaikki niiden merkinnät?",

'delete_field_confirmation' =>
"Oletko varma, että haluat poistaa kentän/kentät ja kaiken niihin liittyvät tiedot?",

'action_cannot_be_undone' =>
"Tätä toimintoa ei voi perua.",

'delete_form_success' =>
"Lomake/lomakkeet poistettu",

'delete_field_success' =>
"Kenttä/kentät poistettu",

'delete_entry_success' =>
"Merkintä/merkinnät poistettu",

'delete_notification_success' =>
"Ilmoitus/ilmoitukset poistettu",

'freeform_will_lose_data' =>
"Seuraavat lomakkeet menettävät palstan tiedot jo nämä kentät poistetaan (lajiteltu poistettavien kenttien mukaan):",


//----------------------------------------
//  Errors - Virheet
//----------------------------------------

'call_to_undefined_method' =>
"Vakava virhe: Kutsu määrittämättömään menetelmään %class%::%method%()",

'unable_to_write_to_cache' =>
"Ei voi kirjoittaa cache hakemistoon. Varmista, että välimuistin hakemisto on määritetty oikein, ja siihen voi tallentaa.",

'export_error' =>
"Tapahtui odottamaton virhe vientiä yrittäessä.", 

'email_subject_required' =>
"Sähköpostin aihe pakollinen.",

'email_limit_exceeded' =>
"Olet ylittänyt sen lähetettävien sähköpostien maksimimäärän, joka voidaan lähettää tämän lomakkeen kautta ennalta määritellyssä ajassa.",

'invalid_user_email_field' =>
"Käyttäjän sähköpostikenttä virheellinen",

'no_valid_recipient_emails' =>
"Sähköpostit lähetettiin vastaanottajille, mutta mikään sähköposteista ei ollut voimassa.",

'over_recipient_user_limit' =>
"Olet syöttänyt enemmän vastaanottajia kuin on sallittua.",

'over_recipient_limit' =>
"Olet valinnut useamman vastaanottajan kuin mitä on sallittu.",

'invalid_upload_count' =>
"Virheellinen latausten määrä: Latausten maksimimäärän tulee olla suurempi kuin 0 ja pienempi tai samansuuruinen kuin mitä olet määrittänyt php.ini -tiedoston  max_file_uploads asetuksissa.",

'invalid_custom_location' =>
"Virheellinen mukautetun tiedoston kohdesijainti: Tämän täytyy olla absoluuttien polku <em>kirjoitettavissa olevaan</em> kansioon palvelimellasi.",

'invalid_upload_location' =>
"Virheellinen latauksen kohdesijainnin valinta. On mahdollista, että latausten sijainteja muokattiin samaan aikaan kun olit lataamassa.",

'invalid_filetype_filter' =>
"Virheellinen tiedostotyypin suodin: Voimassa olevia tiedostotyypin suotimia ova joko '*' (ilman lainausmerkkejä) tämä sallii kaikki tyypit, tai pystyviivalla erotetut listat tietostopäätteistä, esimerkiksi 'jpeg|jpg|gif|png'.",

'file_upload_limit_exceeded' =>
"Useampia tiedostoja yritettiin ladata kuin mitä asetettu raja sallii.",

'unknown_file_upload_problem' =>
"Tuntematon tiedoston latausongelma.",


//sub reasons - muut asiat
'reason_banned' =>
"Syy: Estetty", // Banned > estetty > porttikielto

'reason_ip_required' =>
"Syy: IP pakollinen",

'reason_secure_form_timeout' =>
"Syy: Salattujen lomakkeiden lähetyksen aikakatkaisu", 

'no_form_ids_submitted' =>
"Lomakkeen id(t) ei ole annettu.",

'no_field_ids_submitted' =>
"Kentän id(t) ei ole annettu.",

'invalid_form_id' =>
"Virheellinen lomakkeen id(t) annettu.",

'invalid_field_id' =>
"Virheellinen kentän id(t) annettu.",

'invalid_entry_id' =>
"Virheellinen saapuneen lomakkeen id(t) annettu.", 

'invalid_notification_id' =>
"Virheellinen ilmoituksen id(t) annettu.",

'non_valid_email' =>
"%email% ei ole kelvollinen sähköpostiosoite.",

'invalid_entry_data' =>
"Virheelinen tieto.",

'no_fields' =>
"Kenttiä ei ole olemassa.",

'field_name_can_only_contain' =>
"Kenttien nimet voivat sisältää ainoastaan alaviivoja, ajatusviivoja, kirjaimia ja numeroita. Niissä on oltava vähintään yksi kirjain ja nimi kirjoitettava pienin kirjaimin.",

'form_name_can_only_contain' =>
"Lomakkeiden nimet voivat sisältää ainoastaan alaviivoja, ajatusviivoja, kirjaimia ja numeroita. Niissä on oltava vähintään yksi kirjain ja nimi kirjoitettava pienin kirjaimin.",

'notification_name_can_only_contain' =>
"Ilmoitusten nimet voivat sisältää ainoastaan alaviivoja, ajatusviivoja, kirjaimia ja numeroita. Niissä on oltava vähintään yksi kirjain ja nimi kirjoitettava pienin kirjaimin.",

'template_name_can_only_contain' =>
"Mallin nimet voivat sisältää vain alaviivoja, ajatusviivoja, kirjaimia ja numeroita. Niissä on oltava vähintään yksi kirjain ja nimi kirjoitettava pienin kirjaimin.",

'duplicate_field_name' =>
"'%name%' -niminen kenttä on jo olemassa..",

'duplicate_form_name' =>
"'%name%' -niminen kenttä on jo olemassa.",

'duplicate_notification_name' =>
"'%name%' -niminen kenttä on jo olemassa.",

'duplicate_template_name' =>
"Saman niminen kenttä on jo olemassa '%name%'.",

'field_name_required' =>
"Kentän nimi on pakollinen, ei voi olla tyhjä eikä numero.",

'field_label_required' =>
"Kentän nimike on pakollinen, ei voi olla tyhjä.", 

'template_label_required' =>
"Mallin nimike on pakollinen, ei voi olla tyhjä.", 

'notification_name_required' =>
"Ilmoituksen nimi on pakollinen ja ei voi olla tyhjä eikä numero.", 

'template_name_required' =>
"Mallin nimi on pakollinen, ei voi olla tyhjä eikä numero.",

'notification_label_required' =>
"Ilmoituksen nimike on pakollinen ja ei voi olla tyhjä.", 

'form_name_required' =>
"Lomakkeen nimi on pakollinen, ei voi olla tyhjä eikä numero.",

'form_label_required' =>
"Lomakkeen nimike on pakollinen, ei voi olla tyhjä.", 

'field_edit_warning' =>
"Tämä saattaa muuttaa olemassa olevia tietoja!",

'field_edit_warning_desc' =>
"Tämän kentän muokkaaminen vaikuttaa seuraaviin lomakkeisiin ja niiden tietoihin: <strong>%form_names%</strong>",

"field_name_exists" =>
"Tällä nimellä oleva kenttä '%name%' on jo olemassa. Palaa takaisin ja valitse toinen nimi.",

"notification_name_exists" =>
"Tällä nimellä oleva tiedote '%name%' on jo olemassa. Palaa takaisin ja valitse toinen nimi.",

"form_name_exists" =>
"Tällä nimellä oleva lomake '%name%' on jo olemassa. Palaa takaisin ja valitse toinen nimi.",

"freeform_reserved_field_name" =>
"Kentän nimi, '%name%' on sana joka on varattu Freeformille. Palaa takaisin ja valitse toinen nimi.",

"reserved_form_name" =>
"Lomakkeen nimi, '%name%' on sana joka on varattu Freeformille. Palaa takaisin ja valitse toinen nimi.",

"reserved_notification_name" =>
"Tiedotteen nimi, '%name%' on sana joka on varattu Freeformille. Palaa takaisin ja valitse toinen nimi.",

"reserved_template_name" =>
"Mallin nimi, '%name%' on sana joka on varattu Freeformille. Palaa takaisin ja valitse toinen nimi.",

'from_email_required' =>
"Lähettäjän sähköpostiosoite on pakollinen ilmoituksissa",

'from_name_required' =>
"Lähettäjän nimi on pakollinen ilmoituksissa",

'email_subject_required' =>
"Sähköpostin aihe on pakollinen ilmoituksissa",

"no_duplicates" =>
"Uudelleenlähetykset eivät ole sallittuja tässä lomakkeessa.",  

'required_field_missing' =>
"Pakollisesta kentästä puuttuu tieto",

'fields_do_not_match' =>
"Seuraavat tarvitut toisiaan vastaavat kentät eivät täsmää: ",

'generic_invalid_field_input' =>
"Syöte on virheellinen.",

'not_a_number' =>
"Ei ole numero",

'not_an_integer' =>
"Ei ole kokonaisluku",

'not_a_decimal' =>
"Ei ole desimaalin tarkkuudella",

'not_valid_email' =>
"Sähköpostiosoite ei ole kelvollinen",

'number_exceeds_limit' =>
"Määrä ylittää sallitun maksimimäärän",

'max_length_exceeded' =>
"Kentän maksimipituus %num% ylitetty.",

'field_settings_error' =>
"Tämän kentän valinnoissa oli virheitä.",


//this is for concatenating to a standard field with a required match
'confirm' =>
"Vahvista",


//general errors - yleiset virhetilanteet
'invalid_request' =>
"Pyyntö ei kelpaa",

'freeform_module_disabled' =>
"The Freeform moduuli ei ole tällä hetkellä käytössä. Mene ExpressionEnginen hallintapaneelin ja sieltä moduulin hallintapaneeliin ja varmista, että se on asennettu ja ajantasalla.",

'disable_module_to_disable_extension' =>
"Jotta voit poistaa tämän laajennuksen käytöstä, sinun tulee poistaa käytöstä sitä vastaava <a href='%url%'>moduuli</a>.",

'enable_module_to_enable_extension' =>
"Jotta voit ottaa tämän laajennuksen käyttöön, sinun tulee asentaa sitä vastaava  <a href='%url%'>moduuli</a>.",


//field multi row save error
'you_must_choose_field_options' =>
"Sinun on valittava joitakin vaihtoehtoja usealle riville, jotta tämän kentän tyyppi toimisi.",

'invalid_country' =>
"Virheellinen maa",

'invalid_province' =>
"Virheellinen maakunta", // lääni > maakunta  = katso kumpi parempi

'invalid_state' =>
"Virheellinen tila",

'invalid_fieldtype' =>
"Virheellinen kentän tyyppi",

'error_creating_export' =>
"Virhe tehdessä vientiä'",

'author_edit_only' =>
"Ainostaan tämän tekstin kirjoittaja voi muokata sitä.",


// --------------------------------------------------
//	file upload errors - tiedostojen latausvirheet
// --------------------------------------------------

'upload_userfile_not_set' =>
"Ei löytynyt tiedostoa.", 

'upload_file_exceeds_limit' =>
"Ladattu tiedosto ylittää suurimman sallitun koon joka määritelty PHP-tiedostossa.",

'upload_file_exceeds_form_limit' =>
"Ladattu tiedosto ylittää lomakkeen suurimman sallitun koon.",

'upload_file_partial' =>
"Tiedosto ladattiin vain osittain.",

'upload_no_temp_directory' =>
"Väliaikainen kansio puuttuu.",

'upload_unable_to_write_file' =>
"Tiedostoa ei voitu kirjoittaa levylle.",

'upload_stopped_by_extension' =>
"Laajennus pysäytti tiedostolatauksen", 

'upload_no_file_selected' =>
"Et ole valinnut ladattavaa tiedostoa.",

'upload_invalid_filetype' =>
"Tiedostotyyppi jota yrität ladata ei ole sallittu",

'upload_invalid_filesize' =>
"Tiedosto jota yrität ladata on kooltaan suurempi kuin suurin sallittu tiedostokoko.",

'upload_invalid_dimensions' =>
"Kuva jota yrität ladata ylittää suurimman sallitun korkeuden tai leveyden.",

'upload_destination_error' =>
"Havaittiin ongelma kun ladattua tiedostoa yritettiin siirtää lopulliseen sijaintiin",

'upload_no_filepath' =>
"Latauksen polku ei ole kelvollinen.",

'upload_no_file_types' =>
"Et ole määritellyt mitään sallittuja tiedostotyyppejä.",

'upload_bad_filename' =>
"Antamasi tiedostonimi on jo olemassa palvelimella.",

'upload_not_writable' =>
"Kohdekansioon ei voida kirjoittaa (on kirjoitussuojattu).",


//----------------------------------------
//  Update routine - Päivitykset
//----------------------------------------

'update_freeform_module' =>
"Päivitä Freeform -moduuli",

'freeform_update_message' =>
"Olet hiljattain ladannut uuden version Freeformista, klikkaa tästä ja käynnistä päivityksen komentosarja.",

"update_successful" =>
"Moduulin päivitys onnistui.",

"update_failure" =>
"Virhe yritettäessä päivittää moduulin uusimpaan versioon.",


// -------------------------------------
//	State, Province and Country list last because
// 	its stupid long
// -------------------------------------

'list_of_us_states' => "
Alabama (AL)
Alaska (AK)
Arizona (AZ)
Arkansas (AR)
California (CA)
Colorado (CO)
Connecticut (CT)
Delaware (DE)
District of Columbia (DC)
Florida (FL)
Georgia (GA)
Guam (GU)
Hawaii (HI)
Idaho (ID)
Illinois (IL)
Indiana (IN)
Iowa (IA)
Kansas (KS)
Kentucky (KY)
Louisiana (LA)
Maine (ME)
Maryland (MD)
Massachusetts (MA)
Michigan (MI)
Minnesota (MN)
Mississippi (MS)
Missouri (MO)
Montana (MT)
Nebraska (NE)
Nevada (NV)
New Hampshire (NH)
New Jersey (NJ)
New Mexico (NM)
New York (NY)
North Carolina (NC)
North Dakota (ND)
Ohio (OH)
Oklahoma (OK)
Oregon (OR)
Pennsylvania (PA)
Puerto Rico (PR)
Rhode Island (RI)
South Carolina (SC)
South Dakota (SD)
Tennessee (TN)
Texas (TX)
Utah (UT)
Vermont (VT)
Virginia (VA)
Virgin Islands (VI)
Washington (WA)
West Virginia (WV)
Wisconsin (WI)
Wyoming (WY)",

'list_of_canadian_provinces' => "
Alberta (AB)
British Columbia (BC)
Manitoba (MB)
New Brunswick (NB)
Newfoundland and Labrador (NL)
Northwest Territories (NT)
Nova Scotia (NS)
Nunavut (NU)
Ontario (ON)
Prince Edward Island (PE)
Quebec (QC)
Saskatchewan (SK)
Yukon (YT)",

'list_of_countries' => "
Afghanistan
Albania
Algeria
Andorra
Angola
Antigua & Deps
Argentina
Armenia
Australia
Austria
Azerbaijan
Bahamas
Bahrain
Bangladesh
Barbados
Belarus
Belgium
Belize
Benin
Bhutan
Bolivia
Bosnia Herzegovina
Botswana
Brazil
Brunei
Bulgaria
Burkina
Burundi
Cambodia
Cameroon
Canada
Cape Verde
Central African Rep
Chad
Chile
China
Colombia
Comoros
Congo
Congo {Democratic Rep}
Costa Rica
Croatia
Cuba
Cyprus
Czech Republic
Denmark
Djibouti
Dominica
Dominican Republic
East Timor
Ecuador
Egypt
El Salvador
Equatorial Guinea
Eritrea
Estonia
Ethiopia
Fiji
Finland
France
Gabon
Gambia
Georgia
Germany
Ghana
Greece
Grenada
Guatemala
Guinea
Guinea-Bissau
Guyana
Haiti
Honduras
Hungary
Iceland
India
Indonesia
Iran
Iraq
Ireland {Republic}
Israel
Italy
Ivory Coast
Jamaica
Japan
Jordan
Kazakhstan
Kenya
Kiribati
Korea North
Korea South
Kosovo
Kuwait
Kyrgyzstan
Laos
Latvia
Lebanon
Lesotho
Liberia
Libya
Liechtenstein
Lithuania
Luxembourg
Macedonia
Madagascar
Malawi
Malaysia
Maldives
Mali
Malta
Marshall Islands
Mauritania
Mauritius
Mexico
Micronesia
Moldova
Monaco
Mongolia
Montenegro
Morocco
Mozambique
Myanmar, {Burma}
Namibia
Nauru
Nepal
Netherlands
New Zealand
Nicaragua
Niger
Nigeria
Norway
Oman
Pakistan
Palau
Panama
Papua New Guinea
Paraguay
Peru
Philippines
Poland
Portugal
Qatar
Romania
Russian Federation
Rwanda
St Kitts & Nevis
St Lucia
Saint Vincent & the Grenadines
Samoa
San Marino
Sao Tome & Principe
Saudi Arabia
Senegal
Serbia
Seychelles
Sierra Leone
Singapore
Slovakia
Slovenia
Solomon Islands
Somalia
South Africa
South Sudan
Spain
Sri Lanka
Sudan
Suriname
Swaziland
Sweden
Switzerland
Syria
Taiwan
Tajikistan
Tanzania
Thailand
Togo
Tonga
Trinidad & Tobago
Tunisia
Turkey
Turkmenistan
Tuvalu
Uganda
Ukraine
United Arab Emirates
United Kingdom
United States
Uruguay
Uzbekistan
Vanuatu
Vatican City
Venezuela
Vietnam
Yemen
Zambia
Zimbabwe",

// END
''=>''
);
