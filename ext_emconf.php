<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3events".
 *
 * Auto generated 14-12-2016 15:25
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Events',
  'description' => 'Manage events, show teasers, list and single views.',
  'category' => 'plugin',
  'version' => '0.30.0',
  'state' => 'beta',
  'uploadfolder' => 1,
  'createDirs' => '',
  'clearcacheonload' => 0,
  'author' => 'Dirk Wenzel, Michael Kasten',
  'author_email' => 't3events@gmx.de, kasten@webfox01.de',
  'author_company' => 'Agentur Webfox GmbH, Consulting Piezunka Schamoni - Information Technologies GmbH',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.0-8.99.99',
      'php' => '5.5.0-0.0.0',
 't3calendar' => ''
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:408:{s:9:"ChangeLog";s:4:"7357";s:9:"README.md";s:4:"23ac";s:13:"composer.json";s:4:"b974";s:21:"ext_conf_template.txt";s:4:"59cb";s:12:"ext_icon.gif";s:4:"fed2";s:17:"ext_localconf.php";s:4:"ffe1";s:14:"ext_tables.php";s:4:"cd69";s:14:"ext_tables.sql";s:4:"ca54";s:24:"ext_typoscript_setup.txt";s:4:"8cfe";s:41:"Classes/InvalidConfigurationException.php";s:4:"7199";s:36:"Classes/InvalidFileTypeException.php";s:4:"fa97";s:32:"Classes/MissingFileException.php";s:4:"8834";s:44:"Classes/Command/CleanUpCommandController.php";s:4:"312d";s:41:"Classes/Command/TaskCommandController.php";s:4:"aae9";s:48:"Classes/Configuration/PeriodConstraintLegend.php";s:4:"d9c9";s:48:"Classes/Controller/AbstractBackendController.php";s:4:"22f1";s:41:"Classes/Controller/AbstractController.php";s:4:"8e0a";s:46:"Classes/Controller/CategoryRepositoryTrait.php";s:4:"b711";s:45:"Classes/Controller/CompanyRepositoryTrait.php";s:4:"3080";s:34:"Classes/Controller/DemandTrait.php";s:4:"1c91";s:36:"Classes/Controller/DownloadTrait.php";s:4:"a553";s:49:"Classes/Controller/EntityNotFoundHandlerTrait.php";s:4:"572e";s:38:"Classes/Controller/EventController.php";s:4:"b77e";s:46:"Classes/Controller/EventDemandFactoryTrait.php";s:4:"9a0d";s:43:"Classes/Controller/EventRepositoryTrait.php";s:4:"55fe";s:52:"Classes/Controller/FilterableControllerInterface.php";s:4:"2f1c";s:48:"Classes/Controller/FilterableControllerTrait.php";s:4:"06be";s:40:"Classes/Controller/FlashMessageTrait.php";s:4:"98d2";s:38:"Classes/Controller/ModuleDataTrait.php";s:4:"4321";s:50:"Classes/Controller/NotificationRepositoryTrait.php";s:4:"4e61";s:44:"Classes/Controller/PerformanceController.php";s:4:"31ab";s:52:"Classes/Controller/PerformanceDemandFactoryTrait.php";s:4:"9ac1";s:49:"Classes/Controller/PerformanceRepositoryTrait.php";s:4:"7a42";s:34:"Classes/Controller/SearchTrait.php";s:4:"7b22";s:35:"Classes/Controller/SessionTrait.php";s:4:"f60c";s:43:"Classes/Controller/SettingsUtilityTrait.php";s:4:"0769";s:34:"Classes/Controller/SignalTrait.php";s:4:"a6e1";s:39:"Classes/Controller/TeaserController.php";s:4:"621f";s:37:"Classes/Controller/TranslateTrait.php";s:4:"9a5a";s:58:"Classes/DataProvider/Legend/AbstractPeriodDataProvider.php";s:4:"6e06";s:66:"Classes/DataProvider/Legend/LayeredLegendDataProviderInterface.php";s:4:"1acb";s:53:"Classes/DataProvider/Legend/PeriodAllDataProvider.php";s:4:"e023";s:57:"Classes/DataProvider/Legend/PeriodDataProviderFactory.php";s:4:"252e";s:56:"Classes/DataProvider/Legend/PeriodFutureDataProvider.php";s:4:"be32";s:54:"Classes/DataProvider/Legend/PeriodPastDataProvider.php";s:4:"5390";s:58:"Classes/DataProvider/Legend/PeriodSpecificDataProvider.php";s:4:"3938";s:57:"Classes/DataProvider/Legend/PeriodUnknownDataProvider.php";s:4:"f4eb";s:52:"Classes/Domain/Factory/Dto/AbstractDemandFactory.php";s:4:"c19f";s:53:"Classes/Domain/Factory/Dto/DemandFactoryInterface.php";s:4:"a68e";s:49:"Classes/Domain/Factory/Dto/EventDemandFactory.php";s:4:"070d";s:47:"Classes/Domain/Factory/Dto/MapPropertyTrait.php";s:4:"91d6";s:55:"Classes/Domain/Factory/Dto/PerformanceDemandFactory.php";s:4:"c04d";s:60:"Classes/Domain/Factory/Dto/PeriodAwareDemandFactoryTrait.php";s:4:"bfaf";s:48:"Classes/Domain/Factory/Dto/SkipPropertyTrait.php";s:4:"a765";s:37:"Classes/Domain/Model/AddressTrait.php";s:4:"b8df";s:33:"Classes/Domain/Model/Audience.php";s:4:"0a10";s:33:"Classes/Domain/Model/Calendar.php";s:4:"8783";s:36:"Classes/Domain/Model/CalendarDay.php";s:4:"fe33";s:38:"Classes/Domain/Model/CalendarMonth.php";s:4:"b172";s:37:"Classes/Domain/Model/CalendarWeek.php";s:4:"0e26";s:37:"Classes/Domain/Model/CalendarYear.php";s:4:"5327";s:43:"Classes/Domain/Model/CategorizableTrait.php";s:4:"9ea0";s:33:"Classes/Domain/Model/Category.php";s:4:"77db";s:32:"Classes/Domain/Model/Company.php";s:4:"6840";s:32:"Classes/Domain/Model/Content.php";s:4:"e412";s:30:"Classes/Domain/Model/Event.php";s:4:"7c96";s:38:"Classes/Domain/Model/EventLocation.php";s:4:"0186";s:34:"Classes/Domain/Model/EventType.php";s:4:"108b";s:30:"Classes/Domain/Model/Genre.php";s:4:"3f79";s:43:"Classes/Domain/Model/GeoCodingInterface.php";s:4:"d16f";s:37:"Classes/Domain/Model/Notification.php";s:4:"8de4";s:34:"Classes/Domain/Model/Organizer.php";s:4:"7483";s:36:"Classes/Domain/Model/Performance.php";s:4:"d7e4";s:42:"Classes/Domain/Model/PerformanceStatus.php";s:4:"053f";s:31:"Classes/Domain/Model/Person.php";s:4:"b481";s:35:"Classes/Domain/Model/PersonType.php";s:4:"09cd";s:29:"Classes/Domain/Model/Task.php";s:4:"cda0";s:31:"Classes/Domain/Model/Teaser.php";s:4:"ee6b";s:36:"Classes/Domain/Model/TicketClass.php";s:4:"3ef7";s:30:"Classes/Domain/Model/Venue.php";s:4:"48a6";s:43:"Classes/Domain/Model/Dto/AbstractDemand.php";s:4:"9d69";s:57:"Classes/Domain/Model/Dto/AudienceAwareDemandInterface.php";s:4:"4395";s:53:"Classes/Domain/Model/Dto/AudienceAwareDemandTrait.php";s:4:"8352";s:50:"Classes/Domain/Model/Dto/CalendarConfiguration.php";s:4:"d344";s:57:"Classes/Domain/Model/Dto/CategoryAwareDemandInterface.php";s:4:"1430";s:53:"Classes/Domain/Model/Dto/CategoryAwareDemandTrait.php";s:4:"ef07";s:44:"Classes/Domain/Model/Dto/DemandInterface.php";s:4:"e354";s:44:"Classes/Domain/Model/Dto/EmConfiguration.php";s:4:"49d1";s:40:"Classes/Domain/Model/Dto/EventDemand.php";s:4:"c712";s:62:"Classes/Domain/Model/Dto/EventLocationAwareDemandInterface.php";s:4:"f76b";s:58:"Classes/Domain/Model/Dto/EventTypeAwareDemandInterface.php";s:4:"d430";s:54:"Classes/Domain/Model/Dto/EventTypeAwareDemandTrait.php";s:4:"6afa";s:54:"Classes/Domain/Model/Dto/GenreAwareDemandInterface.php";s:4:"8f52";s:50:"Classes/Domain/Model/Dto/GenreAwareDemandTrait.php";s:4:"52c6";s:51:"Classes/Domain/Model/Dto/LocationAwareInterface.php";s:4:"af29";s:47:"Classes/Domain/Model/Dto/LocationAwareTrait.php";s:4:"97fc";s:39:"Classes/Domain/Model/Dto/ModuleData.php";s:4:"28bb";s:54:"Classes/Domain/Model/Dto/OrderAwareDemandInterface.php";s:4:"109f";s:50:"Classes/Domain/Model/Dto/OrderAwareDemandTrait.php";s:4:"3870";s:46:"Classes/Domain/Model/Dto/PerformanceDemand.php";s:4:"948e";s:55:"Classes/Domain/Model/Dto/PeriodAwareDemandInterface.php";s:4:"3b97";s:51:"Classes/Domain/Model/Dto/PeriodAwareDemandTrait.php";s:4:"5667";s:35:"Classes/Domain/Model/Dto/Search.php";s:4:"3e2c";s:55:"Classes/Domain/Model/Dto/SearchAwareDemandInterface.php";s:4:"1ed6";s:51:"Classes/Domain/Model/Dto/SearchAwareDemandTrait.php";s:4:"2e9c";s:42:"Classes/Domain/Model/Dto/SearchFactory.php";s:4:"1923";s:55:"Classes/Domain/Model/Dto/StatusAwareDemandInterface.php";s:4:"314e";s:41:"Classes/Domain/Model/Dto/TeaserDemand.php";s:4:"cec1";s:54:"Classes/Domain/Model/Dto/VenueAwareDemandInterface.php";s:4:"4227";s:56:"Classes/Domain/Repository/AbstractDemandedRepository.php";s:4:"e38d";s:67:"Classes/Domain/Repository/AudienceConstraintRepositoryInterface.php";s:4:"cb45";s:63:"Classes/Domain/Repository/AudienceConstraintRepositoryTrait.php";s:4:"1cc4";s:48:"Classes/Domain/Repository/AudienceRepository.php";s:4:"0976";s:67:"Classes/Domain/Repository/CategoryConstraintRepositoryInterface.php";s:4:"3a50";s:63:"Classes/Domain/Repository/CategoryConstraintRepositoryTrait.php";s:4:"b31f";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"7231";s:47:"Classes/Domain/Repository/CompanyRepository.php";s:4:"a850";s:57:"Classes/Domain/Repository/DemandedRepositoryInterface.php";s:4:"84df";s:53:"Classes/Domain/Repository/DemandedRepositoryTrait.php";s:4:"0aab";s:53:"Classes/Domain/Repository/EventLocationRepository.php";s:4:"d9aa";s:45:"Classes/Domain/Repository/EventRepository.php";s:4:"9c6f";s:68:"Classes/Domain/Repository/EventTypeConstraintRepositoryInterface.php";s:4:"3ac6";s:64:"Classes/Domain/Repository/EventTypeConstraintRepositoryTrait.php";s:4:"8c70";s:49:"Classes/Domain/Repository/EventTypeRepository.php";s:4:"a8cc";s:64:"Classes/Domain/Repository/GenreConstraintRepositoryInterface.php";s:4:"493d";s:60:"Classes/Domain/Repository/GenreConstraintRepositoryTrait.php";s:4:"1d05";s:45:"Classes/Domain/Repository/GenreRepository.php";s:4:"8da3";s:67:"Classes/Domain/Repository/LocationConstraintRepositoryInterface.php";s:4:"cdf4";s:63:"Classes/Domain/Repository/LocationConstraintRepositoryTrait.php";s:4:"7240";s:52:"Classes/Domain/Repository/NotificationRepository.php";s:4:"3f02";s:51:"Classes/Domain/Repository/PerformanceRepository.php";s:4:"4aff";s:65:"Classes/Domain/Repository/PeriodConstraintRepositoryInterface.php";s:4:"6cea";s:61:"Classes/Domain/Repository/PeriodConstraintRepositoryTrait.php";s:4:"5b1a";s:46:"Classes/Domain/Repository/PersonRepository.php";s:4:"ebee";s:65:"Classes/Domain/Repository/StatusConstraintRepositoryInterface.php";s:4:"4ebc";s:61:"Classes/Domain/Repository/StatusConstraintRepositoryTrait.php";s:4:"90ad";s:44:"Classes/Domain/Repository/TaskRepository.php";s:4:"c1d7";s:46:"Classes/Domain/Repository/TeaserRepository.php";s:4:"0d13";s:45:"Classes/Domain/Repository/VenueRepository.php";s:4:"e02a";s:32:"Classes/Hooks/BackendUtility.php";s:4:"1c27";s:31:"Classes/Hooks/ItemsProcFunc.php";s:4:"8ca9";s:36:"Classes/Resource/ResourceFactory.php";s:4:"0923";s:32:"Classes/Resource/VectorImage.php";s:4:"322d";s:36:"Classes/Service/ExtensionService.php";s:4:"63a3";s:44:"Classes/Service/ModuleDataStorageService.php";s:4:"279d";s:39:"Classes/Service/NotificationService.php";s:4:"cf0e";s:43:"Classes/Session/NamespaceAwareInterface.php";s:4:"af84";s:36:"Classes/Session/SessionInterface.php";s:4:"9b92";s:39:"Classes/Session/Typo3BackendSession.php";s:4:"6d11";s:32:"Classes/Session/Typo3Session.php";s:4:"1c75";s:37:"Classes/Utility/ClassCacheManager.php";s:4:"3272";s:31:"Classes/Utility/ClassLoader.php";s:4:"c800";s:31:"Classes/Utility/ClassParser.php";s:4:"09f4";s:42:"Classes/Utility/EmConfigurationUtility.php";s:4:"a6bf";s:28:"Classes/Utility/GeoCoder.php";s:4:"e393";s:35:"Classes/Utility/SettingsUtility.php";s:4:"053f";s:44:"Classes/ViewHelpers/FindEventsViewHelper.php";s:4:"b2d8";s:44:"Classes/ViewHelpers/HeaderDataViewHelper.php";s:4:"0aab";s:41:"Classes/ViewHelpers/MetaTagViewHelper.php";s:4:"0165";s:42:"Classes/ViewHelpers/TitleTagViewHelper.php";s:4:"3ca5";s:47:"Classes/ViewHelpers/Be/EditRecordViewHelper.php";s:4:"4520";s:52:"Classes/ViewHelpers/Event/PerformancesViewHelper.php";s:4:"ec07";s:68:"Classes/ViewHelpers/Event/Performances/Locations/CountViewHelper.php";s:4:"26f4";s:51:"Classes/ViewHelpers/Format/ArrayToCsvViewHelper.php";s:4:"7a37";s:45:"Classes/ViewHelpers/Format/DateViewHelper.php";s:4:"7ef6";s:45:"Classes/ViewHelpers/Format/TrimViewHelper.php";s:4:"17c6";s:56:"Classes/ViewHelpers/Format/Event/DateRangeViewHelper.php";s:4:"0a3a";s:62:"Classes/ViewHelpers/Format/Performance/DateRangeViewHelper.php";s:4:"678a";s:49:"Classes/ViewHelpers/Widget/CalendarViewHelper.php";s:4:"0ba4";s:60:"Classes/ViewHelpers/Widget/Controller/CalendarController.php";s:4:"1f79";s:36:"Configuration/BackendModule/conf.php";s:4:"75b5";s:43:"Configuration/FlexForms/flexform_events.xml";s:4:"0c66";s:55:"Configuration/TCA/tx_t3events_domain_model_audience.php";s:4:"e8cb";s:54:"Configuration/TCA/tx_t3events_domain_model_company.php";s:4:"865c";s:52:"Configuration/TCA/tx_t3events_domain_model_event.php";s:4:"6f98";s:60:"Configuration/TCA/tx_t3events_domain_model_eventlocation.php";s:4:"c667";s:56:"Configuration/TCA/tx_t3events_domain_model_eventtype.php";s:4:"36cb";s:52:"Configuration/TCA/tx_t3events_domain_model_genre.php";s:4:"f848";s:59:"Configuration/TCA/tx_t3events_domain_model_notification.php";s:4:"28da";s:56:"Configuration/TCA/tx_t3events_domain_model_organizer.php";s:4:"65a9";s:58:"Configuration/TCA/tx_t3events_domain_model_performance.php";s:4:"53a2";s:64:"Configuration/TCA/tx_t3events_domain_model_performancestatus.php";s:4:"f059";s:53:"Configuration/TCA/tx_t3events_domain_model_person.php";s:4:"cafe";s:57:"Configuration/TCA/tx_t3events_domain_model_persontype.php";s:4:"c3ef";s:51:"Configuration/TCA/tx_t3events_domain_model_task.php";s:4:"1105";s:53:"Configuration/TCA/tx_t3events_domain_model_teaser.php";s:4:"65a2";s:58:"Configuration/TCA/tx_t3events_domain_model_ticketclass.php";s:4:"f7c9";s:52:"Configuration/TCA/tx_t3events_domain_model_venue.php";s:4:"030a";s:62:"Configuration/TCA/Overrides/tx_t3events_domain_model_event.php";s:4:"d055";s:38:"Configuration/TypoScript/constants.txt";s:4:"4999";s:34:"Configuration/TypoScript/setup.txt";s:4:"630a";s:23:"Documentation/Index.rst";s:4:"c541";s:22:"Documentation/Makefile";s:4:"c4b9";s:26:"Documentation/Settings.yml";s:4:"f946";s:21:"Documentation/conf.py";s:4:"1578";s:35:"Documentation/visibility_matrix.ods";s:4:"55c1";s:37:"Documentation/Configuration/Index.rst";s:4:"9c14";s:46:"Documentation/Configuration/Overview/Index.rst";s:4:"e31a";s:32:"Documentation/Credits/Images.txt";s:4:"ed16";s:31:"Documentation/Credits/Index.rst";s:4:"f7dc";s:39:"Documentation/Images/ComboViewMonth.png";s:4:"2173";s:38:"Documentation/Images/ComboViewYear.png";s:4:"805f";s:34:"Documentation/Images/MiniMonth.png";s:4:"a7ea";s:38:"Documentation/Images/createRecords.png";s:4:"f69d";s:41:"Documentation/Images/eventExtendedTab.png";s:4:"f491";s:40:"Documentation/Images/eventGeneralTab.png";s:4:"b2d8";s:36:"Documentation/Introduction/Index.rst";s:4:"1c16";s:49:"Documentation/Introduction/WhatDoesItDo/Index.rst";s:4:"554d";s:33:"Documentation/To-doList/Index.rst";s:4:"5048";s:35:"Documentation/UsersManual/Index.rst";s:4:"6857";s:52:"Documentation/UsersManual/AuxiliaryRecords/Index.rst";s:4:"34b3";s:43:"Documentation/UsersManual/Events/Images.txt";s:4:"88f5";s:42:"Documentation/UsersManual/Events/Index.rst";s:4:"4e8d";s:49:"Documentation/UsersManual/InsertPlugins/Index.rst";s:4:"b135";s:45:"Documentation/UsersManual/Overview/Images.txt";s:4:"5ade";s:44:"Documentation/UsersManual/Overview/Index.rst";s:4:"439c";s:43:"Resources/Private/Language/de.locallang.xlf";s:4:"7661";s:46:"Resources/Private/Language/de.locallang_db.xlf";s:4:"e54d";s:52:"Resources/Private/Language/de.locallang_mod_main.xlf";s:4:"d7bc";s:43:"Resources/Private/Language/fr.locallang.xlf";s:4:"d95a";s:40:"Resources/Private/Language/locallang.xlf";s:4:"c89d";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"a3f3";s:53:"Resources/Private/Language/locallang_csh_flexform.xml";s:4:"e1e7";s:61:"Resources/Private/Language/locallang_csh_static_countries.xml";s:4:"b0fc";s:78:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_audience.xlf";s:4:"c493";s:77:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_company.xlf";s:4:"74ff";s:75:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_event.xml";s:4:"c260";s:83:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_eventlocation.xml";s:4:"7480";s:79:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_eventtype.xml";s:4:"6b98";s:75:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_genre.xml";s:4:"a338";s:78:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_location.xml";s:4:"6dda";s:79:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_organizer.xml";s:4:"bd02";s:81:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_performance.xml";s:4:"5d6b";s:87:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_performancestatus.xml";s:4:"2fb4";s:74:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_task.xml";s:4:"5e16";s:76:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_teaser.xml";s:4:"c439";s:81:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_ticketclass.xml";s:4:"c0b4";s:75:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_venue.xml";s:4:"139d";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"ead0";s:49:"Resources/Private/Language/locallang_mod_main.xlf";s:4:"d4c9";s:38:"Resources/Private/Layouts/Default.html";s:4:"ad45";s:46:"Resources/Private/Layouts/Backend/Default.html";s:4:"40b4";s:50:"Resources/Private/Partials/Backend/FormErrors.html";s:4:"4d63";s:57:"Resources/Private/Partials/Backend/Common/SearchForm.html";s:4:"fb66";s:60:"Resources/Private/Partials/Backend/Common/SearchSubject.html";s:4:"5efd";s:44:"Resources/Private/Partials/Calendar/Day.html";s:4:"5d97";s:46:"Resources/Private/Partials/Calendar/Month.html";s:4:"bbb6";s:53:"Resources/Private/Partials/Calendar/PeriodSwitch.html";s:4:"32da";s:45:"Resources/Private/Partials/Calendar/Week.html";s:4:"d9d2";s:45:"Resources/Private/Partials/Calendar/Year.html";s:4:"3c02";s:46:"Resources/Private/Partials/Event/ListItem.html";s:4:"249b";s:48:"Resources/Private/Partials/Event/Properties.html";s:4:"0d3d";s:48:"Resources/Private/Partials/Event/SingleItem.html";s:4:"91ab";s:50:"Resources/Private/Partials/EventLocation/Item.html";s:4:"4c9c";s:56:"Resources/Private/Partials/EventLocation/Properties.html";s:4:"e8d0";s:51:"Resources/Private/Partials/Location/Properties.html";s:4:"b5ff";s:46:"Resources/Private/Partials/Organizer/Item.html";s:4:"8487";s:52:"Resources/Private/Partials/Organizer/Properties.html";s:4:"4f90";s:48:"Resources/Private/Partials/Performance/Item.html";s:4:"cfe2";s:52:"Resources/Private/Partials/Performance/ListItem.html";s:4:"7f0c";s:57:"Resources/Private/Partials/Performance/ListItemShort.html";s:4:"b9fe";s:54:"Resources/Private/Partials/Performance/Properties.html";s:4:"28d5";s:49:"Resources/Private/Partials/Person/Properties.html";s:4:"41df";s:43:"Resources/Private/Partials/Teaser/Item.html";s:4:"46a1";s:48:"Resources/Private/Partials/TicketClass/Item.html";s:4:"38cd";s:48:"Resources/Private/Partials/TicketClass/List.html";s:4:"7e92";s:54:"Resources/Private/Partials/TicketClass/Properties.html";s:4:"e335";s:48:"Resources/Private/Partials/Venue/Properties.html";s:4:"34dc";s:47:"Resources/Private/Templates/Event/Calendar.html";s:4:"94d2";s:43:"Resources/Private/Templates/Event/List.html";s:4:"e534";s:48:"Resources/Private/Templates/Event/QuickMenu.html";s:4:"dfbd";s:43:"Resources/Private/Templates/Event/Show.html";s:4:"bb0e";s:49:"Resources/Private/Templates/Performance/List.html";s:4:"3e1b";s:54:"Resources/Private/Templates/Performance/QuickMenu.html";s:4:"78f4";s:49:"Resources/Private/Templates/Performance/Show.html";s:4:"c71b";s:44:"Resources/Private/Templates/Teaser/List.html";s:4:"a3e3";s:49:"Resources/Private/Templates/TicketClass/List.html";s:4:"d2a8";s:49:"Resources/Private/Templates/TicketClass/Show.html";s:4:"b45c";s:43:"Resources/Private/Templates/Venue/List.html";s:4:"aabc";s:43:"Resources/Private/Templates/Venue/Show.html";s:4:"ce43";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Calendar/Index.html";s:4:"2198";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"556c";s:32:"Resources/Public/Css/backend.css";s:4:"388c";s:30:"Resources/Public/Css/forms.css";s:4:"0c90";s:31:"Resources/Public/Css/styles.css";s:4:"ffb3";s:38:"Resources/Public/Css/t3eventsBasic.css";s:4:"cbdb";s:47:"Resources/Public/Css/t3eventsBasic.original.css";s:4:"40e0";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:43:"Resources/Public/Icons/static_countries.gif";s:4:"1103";s:60:"Resources/Public/Icons/tx_t3events_domain_model_audience.gif";s:4:"1103";s:59:"Resources/Public/Icons/tx_t3events_domain_model_company.gif";s:4:"905a";s:57:"Resources/Public/Icons/tx_t3events_domain_model_event.gif";s:4:"c924";s:65:"Resources/Public/Icons/tx_t3events_domain_model_eventlocation.gif";s:4:"2959";s:61:"Resources/Public/Icons/tx_t3events_domain_model_eventtype.gif";s:4:"c055";s:57:"Resources/Public/Icons/tx_t3events_domain_model_genre.gif";s:4:"5bb5";s:60:"Resources/Public/Icons/tx_t3events_domain_model_location.gif";s:4:"2959";s:64:"Resources/Public/Icons/tx_t3events_domain_model_notification.gif";s:4:"1103";s:61:"Resources/Public/Icons/tx_t3events_domain_model_organizer.gif";s:4:"3e33";s:63:"Resources/Public/Icons/tx_t3events_domain_model_performance.gif";s:4:"ff9d";s:69:"Resources/Public/Icons/tx_t3events_domain_model_performancestatus.gif";s:4:"5adf";s:58:"Resources/Public/Icons/tx_t3events_domain_model_person.png";s:4:"a8b9";s:62:"Resources/Public/Icons/tx_t3events_domain_model_persontype.png";s:4:"cac1";s:56:"Resources/Public/Icons/tx_t3events_domain_model_task.png";s:4:"136e";s:58:"Resources/Public/Icons/tx_t3events_domain_model_teaser.gif";s:4:"acae";s:63:"Resources/Public/Icons/tx_t3events_domain_model_ticketclass.gif";s:4:"06be";s:57:"Resources/Public/Icons/tx_t3events_domain_model_venue.gif";s:4:"4934";s:39:"Resources/Public/Images/dummy-image.png";s:4:"8084";s:46:"Resources/Public/Images/period_constraints.svg";s:4:"7f41";s:40:"Resources/Public/JavaScript/accordion.js";s:4:"49d0";s:39:"Resources/Public/JavaScript/calendar.js";s:4:"849f";s:43:"Resources/Public/JavaScript/jquery-2.1.4.js";s:4:"d64c";s:25:"Tests/Build/UnitTests.xml";s:4:"b2e1";s:51:"Tests/Unit/Command/CleanUpCommandControllerTest.php";s:4:"e5c3";s:55:"Tests/Unit/Configuration/PeriodConstraintLegendTest.php";s:4:"e8ef";s:55:"Tests/Unit/Controller/AbstractBackendControllerTest.php";s:4:"4b87";s:48:"Tests/Unit/Controller/AbstractControllerTest.php";s:4:"6374";s:53:"Tests/Unit/Controller/CategoryRepositoryTraitTest.php";s:4:"a0ee";s:52:"Tests/Unit/Controller/CompanyRepositoryTraitTest.php";s:4:"b3c2";s:41:"Tests/Unit/Controller/DemandTraitTest.php";s:4:"707d";s:43:"Tests/Unit/Controller/DownloadTraitTest.php";s:4:"54c2";s:56:"Tests/Unit/Controller/EntityNotFoundHandlerTraitTest.php";s:4:"ce15";s:45:"Tests/Unit/Controller/EventControllerTest.php";s:4:"e7c7";s:53:"Tests/Unit/Controller/EventDemandFactoryTraitTest.php";s:4:"3283";s:53:"Tests/Unit/Controller/EventLocationControllerTest.php";s:4:"43b0";s:50:"Tests/Unit/Controller/EventRepositoryTraitTest.php";s:4:"47a8";s:55:"Tests/Unit/Controller/FilterableControllerTraitTest.php";s:4:"3816";s:47:"Tests/Unit/Controller/FlashMessageTraitTest.php";s:4:"fe2d";s:45:"Tests/Unit/Controller/ModuleDataTraitTest.php";s:4:"cff3";s:57:"Tests/Unit/Controller/NotificationRepositoryTraitTest.php";s:4:"cef1";s:49:"Tests/Unit/Controller/OrganizerControllerTest.php";s:4:"8d1f";s:51:"Tests/Unit/Controller/PerformanceControllerTest.php";s:4:"d6c3";s:59:"Tests/Unit/Controller/PerformanceDemandFactoryTraitTest.php";s:4:"a0f2";s:56:"Tests/Unit/Controller/PerformanceRepositoryTraitTest.php";s:4:"ca1a";s:41:"Tests/Unit/Controller/SearchTraitTest.php";s:4:"7bbf";s:50:"Tests/Unit/Controller/SettingsUtilityTraitTest.php";s:4:"df57";s:46:"Tests/Unit/Controller/TeaserControllerTest.php";s:4:"9be8";s:51:"Tests/Unit/Controller/TicketClassControllerTest.php";s:4:"551d";s:45:"Tests/Unit/Controller/VenueControllerTest.php";s:4:"b1e7";s:65:"Tests/Unit/DataProvider/Legend/AbstractPeriodDataProviderTest.php";s:4:"4d4d";s:64:"Tests/Unit/DataProvider/Legend/PeriodDataProviderFactoryTest.php";s:4:"8142";s:56:"Tests/Unit/Domain/Factory/Dto/EventDemandFactoryTest.php";s:4:"185f";s:62:"Tests/Unit/Domain/Factory/Dto/PerformanceDemandFactoryTest.php";s:4:"ca12";s:67:"Tests/Unit/Domain/Factory/Dto/PeriodAwareDemandFactoryTraitTest.php";s:4:"f178";s:44:"Tests/Unit/Domain/Model/AddressTraitTest.php";s:4:"ea18";s:40:"Tests/Unit/Domain/Model/AudienceTest.php";s:4:"274f";s:43:"Tests/Unit/Domain/Model/CalendarDayTest.php";s:4:"cba0";s:45:"Tests/Unit/Domain/Model/CalendarMonthTest.php";s:4:"97d0";s:40:"Tests/Unit/Domain/Model/CalendarTest.php";s:4:"440a";s:44:"Tests/Unit/Domain/Model/CalendarWeekTest.php";s:4:"07d6";s:44:"Tests/Unit/Domain/Model/CalendarYearTest.php";s:4:"74bb";s:50:"Tests/Unit/Domain/Model/CategorizableTraitTest.php";s:4:"3b35";s:39:"Tests/Unit/Domain/Model/CompanyTest.php";s:4:"36cc";s:39:"Tests/Unit/Domain/Model/ContentTest.php";s:4:"6dec";s:45:"Tests/Unit/Domain/Model/EventLocationTest.php";s:4:"769d";s:37:"Tests/Unit/Domain/Model/EventTest.php";s:4:"64d3";s:41:"Tests/Unit/Domain/Model/EventTypeTest.php";s:4:"11c1";s:37:"Tests/Unit/Domain/Model/GenreTest.php";s:4:"9861";s:44:"Tests/Unit/Domain/Model/NotificationTest.php";s:4:"266a";s:41:"Tests/Unit/Domain/Model/OrganizerTest.php";s:4:"28c3";s:49:"Tests/Unit/Domain/Model/PerformanceStatusTest.php";s:4:"0bb9";s:43:"Tests/Unit/Domain/Model/PerformanceTest.php";s:4:"a0a5";s:38:"Tests/Unit/Domain/Model/PersonTest.php";s:4:"8d36";s:42:"Tests/Unit/Domain/Model/PersonTypeTest.php";s:4:"aea0";s:36:"Tests/Unit/Domain/Model/TaskTest.php";s:4:"f7f2";s:38:"Tests/Unit/Domain/Model/TeaserTest.php";s:4:"f8b1";s:43:"Tests/Unit/Domain/Model/TicketClassTest.php";s:4:"248c";s:37:"Tests/Unit/Domain/Model/VenueTest.php";s:4:"cf89";s:50:"Tests/Unit/Domain/Model/Dto/AbstractDemandTest.php";s:4:"a411";s:60:"Tests/Unit/Domain/Model/Dto/AudienceAwareDemandTraitTest.php";s:4:"49a8";s:57:"Tests/Unit/Domain/Model/Dto/CalendarConfigurationTest.php";s:4:"6073";s:60:"Tests/Unit/Domain/Model/Dto/CategoryAwareDemandTraitTest.php";s:4:"cbd0";s:51:"Tests/Unit/Domain/Model/Dto/EmConfigurationTest.php";s:4:"224d";s:47:"Tests/Unit/Domain/Model/Dto/EventDemandTest.php";s:4:"757c";s:61:"Tests/Unit/Domain/Model/Dto/EventTypeAwareDemandTraitTest.php";s:4:"607b";s:57:"Tests/Unit/Domain/Model/Dto/GenreAwareDemandTraitTest.php";s:4:"eb70";s:54:"Tests/Unit/Domain/Model/Dto/LocationAwareTraitTest.php";s:4:"a6ba";s:46:"Tests/Unit/Domain/Model/Dto/ModuleDataTest.php";s:4:"9f5b";s:57:"Tests/Unit/Domain/Model/Dto/OrderAwareDemandTraitTest.php";s:4:"9c16";s:53:"Tests/Unit/Domain/Model/Dto/PerformanceDemandTest.php";s:4:"8ae3";s:58:"Tests/Unit/Domain/Model/Dto/PeriodAwareDemandTraitTest.php";s:4:"a7fd";s:58:"Tests/Unit/Domain/Model/Dto/SearchAwareDemandTraitTest.php";s:4:"6870";s:49:"Tests/Unit/Domain/Model/Dto/SearchFactoryTest.php";s:4:"0149";s:42:"Tests/Unit/Domain/Model/Dto/SearchTest.php";s:4:"1dfe";s:48:"Tests/Unit/Domain/Model/Dto/TeaserDemandTest.php";s:4:"718b";s:63:"Tests/Unit/Domain/Repository/AbstractDemandedRepositoryTest.php";s:4:"4e92";s:70:"Tests/Unit/Domain/Repository/AudienceConstraintRepositoryTraitTest.php";s:4:"042c";s:55:"Tests/Unit/Domain/Repository/AudienceRepositoryTest.php";s:4:"f888";s:70:"Tests/Unit/Domain/Repository/CategoryConstraintRepositoryTraitTest.php";s:4:"1eef";s:52:"Tests/Unit/Domain/Repository/EventRepositoryTest.php";s:4:"be3a";s:71:"Tests/Unit/Domain/Repository/EventTypeConstraintRepositoryTraitTest.php";s:4:"0e1b";s:56:"Tests/Unit/Domain/Repository/EventTypeRepositoryTest.php";s:4:"78fb";s:67:"Tests/Unit/Domain/Repository/GenreConstraintRepositoryTraitTest.php";s:4:"5220";s:52:"Tests/Unit/Domain/Repository/GenreRepositoryTest.php";s:4:"d2a0";s:58:"Tests/Unit/Domain/Repository/PerformanceRepositoryTest.php";s:4:"bccb";s:68:"Tests/Unit/Domain/Repository/PeriodConstraintRepositoryTraitTest.php";s:4:"e92f";s:53:"Tests/Unit/Domain/Repository/PersonRepositoryTest.php";s:4:"2550";s:68:"Tests/Unit/Domain/Repository/StatusConstraintRepositoryTraitTest.php";s:4:"552c";s:52:"Tests/Unit/Domain/Repository/VenueRepositoryTest.php";s:4:"74ef";s:65:"Tests/Unit/Domain/Repository/Fixtures/FindDemandedHookFixture.php";s:4:"78e4";s:43:"Tests/Unit/Resource/ResourceFactoryTest.php";s:4:"6848";s:39:"Tests/Unit/Resource/VectorImageTest.php";s:4:"b01e";s:51:"Tests/Unit/Service/ModuleDataStorageServiceTest.php";s:4:"67d0";s:46:"Tests/Unit/Service/NotificationServiceTest.php";s:4:"e409";s:39:"Tests/Unit/Service/Typo3SessionTest.php";s:4:"8770";s:39:"Tests/Unit/Session/SessionTraitTest.php";s:4:"7953";s:49:"Tests/Unit/Utility/EmConfigurationUtilityTest.php";s:4:"86c4";s:42:"Tests/Unit/Utility/SettingsUtilityTest.php";s:4:"5a4d";s:67:"Tests/Unit/ViewHelpers/Widget/Controller/CalendarControllerTest.php";s:4:"7362";}',
);

