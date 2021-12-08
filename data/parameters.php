<?php
/**
 * 2014 - 2021 Watt Is It
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License X11
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/mit-license.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@paygreen.fr so we can send you a copy immediately.
 *
 * @author    PayGreen <contact@paygreen.fr>
 * @copyright 2014 - 2021 Watt Is It
 * @license   https://opensource.org/licenses/mit-license.php MIT License X11
 * @version   1.0.0
 *
 */

return array (
'cache' =>
array (
'entries' =>
array (
'translations-fr' =>
array (
'ttl' => 604800,
'format' => 'array',
),
'translations-en' =>
array (
'ttl' => 604800,
'format' => 'array',
),
'carbon_footprint_catalog' =>
array (
'ttl' => 259200,
),
'tree_account_data' =>
array (
'ttl' => 21600,
'format' => 'object',
),
'tree_user_data' =>
array (
'ttl' => 21600,
'format' => 'object',
),
'charity_associations' =>
array (
'ttl' => 259200,
'format' => 'array',
),
'charity_partnerships' =>
array (
'ttl' => 21600,
'format' => 'object',
),
'charity_account_data' =>
array (
'ttl' => 21600,
'format' => 'object',
),
'charity_user_data' =>
array (
'ttl' => 21600,
'format' => 'object',
),
),
),
'media' =>
array (
'baseurl' => '/pub/media/paygreen',
),
'settings' =>
array (
'entries' =>
array (
'behavior_detailed_logs' =>
array (
'type' => 'bool',
'system' => true,
'default' => false,
'alias' => 'pgimpact_behavior_detailed_logs',
),
'use_cache' =>
array (
'type' => 'bool',
'system' => true,
'default' => true,
'alias' => 'pgimpact_use_cache',
),
'last_update' =>
array (
'type' => 'string',
'system' => true,
'alias' => 'pgimpact_last_update',
),
'crontab_global' =>
array (
'type' => 'array',
'global' => true,
),
'crontab_shop' =>
array (
'type' => 'array',
),
'ssl_security_skip' =>
array (
'type' => 'bool',
'global' => true,
'default' => false,
),
'shop_identifier' =>
array (
'type' => 'string',
),
'cron_activation' =>
array (
'type' => 'bool',
'default' => true,
'global' => true,
),
'cron_activation_mode' =>
array (
'type' => 'string',
'default' => 'AJAX',
'global' => true,
),
'tree_activation' =>
array (
'type' => 'bool',
'default' => false,
),
'tree_kit_activation' =>
array (
'type' => 'bool',
'default' => true,
),
'tree_client_id' =>
array (
'type' => 'string',
'private' => true,
),
'tree_client_username' =>
array (
'type' => 'string',
'private' => true,
),
'carbon_offsetting_payer' =>
array (
'type' => 'string',
'default' => 'MERCHANT',
),
'shipping_address_line_1' =>
array (
'type' => 'string',
'default' => '',
),
'shipping_address_line_2' =>
array (
'type' => 'string',
'default' => '',
),
'shipping_address_zipcode' =>
array (
'type' => 'string',
'default' => '',
),
'shipping_address_city' =>
array (
'type' => 'string',
'default' => '',
),
'shipping_address_country' =>
array (
'type' => 'string',
'default' => 'fr',
),
'tree_details_url' =>
array (
'type' => 'string',
'default' => '',
),
'tree_bot_activated' =>
array (
'type' => 'bool',
'default' => false,
),
'tree_bot_color' =>
array (
'type' => 'string',
'default' => '#33AD73',
),
'tree_bot_side' =>
array (
'type' => 'string',
'default' => 'RIGHT',
),
'tree_bot_corner' =>
array (
'type' => 'string',
'default' => 'ROUND',
),
'tree_bot_mobile_activated' =>
array (
'type' => 'bool',
'default' => true,
),
'tree_test_mode' =>
array (
'type' => 'bool',
'default' => true,
),
'tree_access_token' =>
array (
'type' => 'string',
'private' => true,
),
'tree_access_token_validity' =>
array (
'type' => 'string',
),
'tree_refresh_token' =>
array (
'type' => 'string',
'private' => true,
),
'tree_refresh_token_validity' =>
array (
'type' => 'string',
),
'tree_api_server' =>
array (
'type' => 'string',
'default' => 'PROD',
),
'tree_use_https' =>
array (
'type' => 'bool',
'global' => true,
'default' => true,
),
'charity_activation' =>
array (
'type' => 'bool',
'default' => false,
),
'charity_kit_activation' =>
array (
'type' => 'bool',
'default' => true,
),
'charity_client_id' =>
array (
'type' => 'string',
'private' => true,
),
'charity_client_username' =>
array (
'type' => 'string',
'private' => true,
),
'charity_partnerships_positions' =>
array (
'type' => 'array',
'default' =>
array (
),
),
'charity_test_mode' =>
array (
'type' => 'bool',
'default' => true,
),
'charity_access_token' =>
array (
'type' => 'string',
'private' => true,
),
'charity_access_token_validity' =>
array (
'type' => 'string',
),
'charity_refresh_token' =>
array (
'type' => 'string',
'private' => true,
),
'charity_refresh_token_validity' =>
array (
'type' => 'string',
),
'charity_api_server' =>
array (
'type' => 'string',
'default' => 'PROD',
),
'charity_use_https' =>
array (
'type' => 'bool',
'global' => true,
'default' => true,
),
'regenerate_cart_on_cancelled_payment' =>
array (
'type' => 'bool',
'default' => true,
),
'regenerate_cart_on_refused_payment' =>
array (
'type' => 'bool',
'default' => true,
),
'charity_gift_id' =>
array (
'type' => 'int',
'global' => true,
),
),
'officers' =>
array (
'basic' => 'officer.settings.database.basic',
'global' => 'officer.settings.database.global',
'system' => 'officer.settings.configuration.global',
),
),
'behaviors' =>
array (
'detailed_logs' =>
array (
'type' => 'service',
'service' => 'behavior.detailed_logs',
'method' => 'isDetailedLogActivated',
),
),
'listeners' =>
array (
'run_diagnostics' =>
array (
'event' =>
array (
0 => 'module.install',
1 => 'module.upgrade',
),
'service' => 'handler.diagnostic',
'priority' => 750,
),
'upgrade_static_files' =>
array (
'event' =>
array (
0 => 'module.install',
1 => 'module.upgrade',
),
'service' => 'listener.setup.static_files',
'method' => 'installStaticFiles',
),
'upgrade_module' =>
array (
'service' => 'listener.upgrade',
'event' => 'module.upgrade',
'priority' => 25,
),
'install_module_database' =>
array (
'event' =>
array (
0 => 'module.install',
),
'service' => 'listener.database.runner',
'priority' => 50,
'config' =>
array (
'script' =>
array (
0 => 'PGModule:setting/clean.sql',
1 => 'PGModule:setting/install.sql',
),
),
),
'install_default_settings' =>
array (
'event' => 'module.install',
'service' => 'listener.settings.install_default',
'priority' => 150,
),
'uninstall_settings' =>
array (
'event' => 'module.uninstall',
'service' => 'listener.settings.uninstall',
'priority' => 900,
),
'uninstall_module_database' =>
array (
'event' =>
array (
0 => 'module.uninstall',
),
'service' => 'listener.database.runner',
'priority' => 950,
'config' =>
array (
'script' => 'PGModule:setting/clean.sql',
),
),
'install_intl_database' =>
array (
'event' =>
array (
0 => 'module.install',
),
'service' => 'listener.database.runner',
'priority' => 50,
'config' =>
array (
'script' =>
array (
0 => 'PGIntl:translation/clean.sql',
1 => 'PGIntl:translation/install.sql',
),
),
),
'install_default_translations' =>
array (
'event' =>
array (
0 => 'module.install',
),
'service' => 'listener.setup.install_default_translations',
),
'reset_translation_cache' =>
array (
'event' =>
array (
0 => 'module.upgrade',
),
'service' => 'listener.setup.reset_translation_cache',
),
'uninstall_intl_database' =>
array (
'event' =>
array (
0 => 'module.uninstall',
),
'service' => 'listener.database.runner',
'priority' => 950,
'config' =>
array (
'script' => 'PGIntl:translation/clean.sql',
),
),
'clear_smarty_cache' =>
array (
'event' => 'module.upgrade',
'service' => 'listener.upgrade.clear_smarty_cache',
),
'pre_filling_cron_tabs' =>
array (
'event' =>
array (
0 => 'module.install',
1 => 'module.upgrade',
),
'service' => 'listener.cron.tabs.pre_filling',
),
'cleaning_cron_tabs' =>
array (
'event' =>
array (
0 => 'module.upgrade',
),
'service' => 'listener.cron.tabs.cleaning',
),
'display_shop_context_requirement' =>
array (
'event' => 'action.backoffice.system.display',
'service' => 'listener.action.shop_context_backoffice',
),
'display_support_page' =>
array (
'event' => 'action.backoffice.support.display',
'service' => 'listener.action.display_support_page',
),
'install_tree_database' =>
array (
'event' =>
array (
0 => 'module.install',
),
'service' => 'listener.database.runner',
'priority' => 50,
'config' =>
array (
'script' =>
array (
0 => 'PGTree:carbon_data/clean.sql',
1 => 'PGTree:carbon_data/install.sql',
),
),
),
'uninstall_tree_database' =>
array (
'event' =>
array (
0 => 'module.uninstall',
),
'service' => 'listener.database.runner',
'priority' => 950,
'config' =>
array (
'script' => 'PGTree:carbon_data/clean.sql',
),
),
'adding_web_carbon_offsetting' =>
array (
'event' => 'carbon_offsetting_computing',
'service' => 'listener.carbon_offsetting_computing.adding_web_data',
'requirements' =>
array (
'tree_access_available' => true,
),
),
'setting_transport_carbon_offsetting' =>
array (
'event' => 'carbon_offsetting_computing',
'service' => 'listener.carbon_offsetting_computing.setting_transport_data',
'requirements' =>
array (
'tree_access_available' => true,
),
),
'setting_product_carbon_offsetting' =>
array (
'event' => 'carbon_offsetting_computing',
'service' => 'listener.carbon_offsetting_computing.setting_product_data',
'requirements' =>
array (
'tree_access_available' => true,
),
),
'tree.page_counting' =>
array (
'event' => 'display.frontoffice',
'service' => 'listener.tree.page_counting',
'requirements' =>
array (
'tree_access_available' => true,
),
),
'tree_check_client_compatibility' =>
array (
'event' => 'module.install',
'service' => 'listener.setup.tree_client_compatibility_checker',
'method' => 'checkCompatibility',
'priority' => 100,
),
'display_tree_connexion_requirement' =>
array (
'event' =>
array (
0 => 'action.backoffice.tree_account.display',
1 => 'action.backoffice.tree_config.display',
),
'service' => 'listener.tree_action.display_backoffice',
),
'display_tree_shipping_address_requirement' =>
array (
'event' =>
array (
0 => 'action.backoffice.tree_account.display',
1 => 'action.backoffice.tree_config.display',
),
'service' => 'listener.tree_action.shipping_address',
),
'display_tree_test_mode_expiration_notification' =>
array (
'event' =>
array (
0 => 'action.backoffice.home.display',
1 => 'action.backoffice.tree_account.display',
2 => 'action.backoffice.tree_config.display',
3 => 'action.backoffice.tree_translations.display',
4 => 'action.backoffice.tree_products_synchronization.display',
5 => 'action.backoffice.carbon_bot_config.display',
),
'service' => 'listener.tree_action.display_tree_test_mode_expiration_notification',
'requirements' =>
array (
'tree_connexion' => true,
),
),
'carbon_footprint_finalization' =>
array (
'event' => 'LOCAL.ORDER.VALIDATION',
'service' => 'listener.carbon_footprint.finalization',
'requirements' =>
array (
'tree_access_available' => true,
),
),
'install_charity_database' =>
array (
'event' =>
array (
0 => 'module.install',
),
'service' => 'listener.database.runner',
'priority' => 50,
'config' =>
array (
'script' =>
array (
0 => 'PGCharity:gift/clean.sql',
1 => 'PGCharity:gift/install.sql',
),
),
),
'uninstall_charity_database' =>
array (
'event' =>
array (
0 => 'module.uninstall',
),
'service' => 'listener.database.runner',
'priority' => 950,
'config' =>
array (
'script' => 'PGCharity:gift/clean.sql',
),
),
'install_charity_gift_product' =>
array (
'event' => 'module.install',
'service' => 'listener.setup.charity_gift_product',
'method' => 'installGiftProduct',
),
'uninstall_charity_gift_product' =>
array (
'event' => 'module.uninstall',
'service' => 'listener.setup.charity_gift_product',
'method' => 'uninstallGiftProduct',
),
'charity_check_client_compatibility' =>
array (
'event' => 'module.install',
'service' => 'listener.setup.charity_client_compatibility_checker',
'method' => 'checkCompatibility',
'priority' => 100,
),
'display_charity_connexion_requirement' =>
array (
'event' =>
array (
0 => 'action.backoffice.charity_account.display',
1 => 'action.backoffice.charity_config.display',
),
'service' => 'listener.charity_action.display_backoffice',
),
'display_charity_test_mode_expiration_notification' =>
array (
'event' =>
array (
0 => 'action.backoffice.home.display',
1 => 'action.backoffice.charity_account.display',
2 => 'action.backoffice.charity_config.display',
3 => 'action.backoffice.charity_partnerships.display',
4 => 'action.backoffice.charity_translations.display',
),
'service' => 'listener.charity_action.display_charity_test_mode_expiration_notification',
'requirements' =>
array (
'charity_connexion' => true,
),
),
'charity_gift.finalization' =>
array (
'event' => 'LOCAL.ORDER.VALIDATION',
'service' => 'listener.charity_gift.finalization',
'requirements' =>
array (
'charity_activation' => true,
),
),
),
'static' =>
array (
'public' => null,
'path' => 'static',
'install' =>
array (
'target' => null,
'envs' =>
array (
),
),
'swap' =>
array (
),
'module' => 'Paygreen_Impact',
'folder' => 'static',
),
'logo' =>
array (
'path' => 'PGModule:paygreen-logo.svg',
'template' => 'block-menu-logo.tpl',
),
'translations' =>
array (
'message_carbon_offsetting' =>
array (
'label' => 'translations.message_carbon_offsetting.field.label',
'help' => 'translations.message_carbon_offsetting.field.help',
'tags' =>
array (
0 => 'tree',
),
'default' =>
array (
'fr' => 'Cette empreinte carbone sera intégralement prise en charge par votre commerçant.',
'en' => 'This carbon footprint will be fully supported by your merchant.',
),
),
'message_carbon_footprint' =>
array (
'label' => 'translations.message_carbon_footprint.field.label',
'help' => 'translations.message_carbon_footprint.field.help',
'tags' =>
array (
0 => 'tree_bot',
),
'default' =>
array (
'fr' => 'Impact carbone de mon parcours d\'achat',
'en' => 'Carbon impact of my purchasing journey',
),
),
'message_find_out_more' =>
array (
'label' => 'translations.message_find_out_more.field.label',
'help' => 'translations.message_find_out_more.field.help',
'tags' =>
array (
0 => 'tree_bot',
),
'default' =>
array (
'fr' => 'En savoir plus sur nos engagements',
'en' => 'Find out more about our commitments',
),
),
'charity_block_title' =>
array (
'label' => 'translations.charity_block_title.field.label',
'help' => 'translations.charity_block_title.field.help',
'tags' =>
array (
0 => 'charity',
),
'default' =>
array (
'fr' => 'Et si vous aviez un impact positif ?',
'en' => 'What if you had a positive impact?',
),
),
'charity_block_message' =>
array (
'label' => 'translations.charity_block_message.field.label',
'help' => 'translations.charity_block_message.field.help',
'tags' =>
array (
0 => 'charity',
),
'default' =>
array (
'fr' => 'Arrondir le montant de mon panier au profit d\'une association avec un don de',
'en' => 'Round up the amount of my basket to benefit an association with a donation of',
),
),
'charity_popin_title' =>
array (
'label' => 'translations.charity_popin_title.field.label',
'help' => 'translations.charity_popin_title.field.help',
'tags' =>
array (
0 => 'charity',
),
'default' =>
array (
'fr' => 'Et si vous aviez un impact positif ?',
'en' => 'What if you had a positive impact?',
),
),
'charity_popin_subtitle' =>
array (
'label' => 'translations.charity_popin_subtitle.field.label',
'help' => 'translations.charity_popin_subtitle.field.help',
'tags' =>
array (
0 => 'charity',
),
'default' =>
array (
'fr' => 'Veuillez cliquer pour choisir une association :',
'en' => 'Please click to select an association:',
),
),
'charity_popin_message' =>
array (
'label' => 'translations.charity_popin_message.field.label',
'help' => 'translations.charity_popin_message.field.help',
'tags' =>
array (
0 => 'charity',
),
'default' =>
array (
'fr' => 'Arrondir le montant de mon panier au profit d\'une association avec un don de',
'en' => 'Round up the amount of my basket to benefit an association with a donation of',
),
),
),
'setup' =>
array (
'older' => null,
),
'upgrades' =>
array (
),
'outputs' =>
array (
'back_office_paygreen' =>
array (
'target' => 'BACK.PAYGREEN',
'builder' => 'back_office_paygreen',
'clean' => false,
),
'front_office_paygreen' =>
array (
'target' => 'FRONT.PAYGREEN',
'builder' => 'front_office_paygreen',
'clean' => false,
),
'global_front_office_paygreen' =>
array (
'target' => 'FRONT.HEAD',
'builder' => 'global_front_office_paygreen',
'clean' => false,
),
'global_cron_launcher' =>
array (
'target' => 'FRONT.HEAD',
'builder' => 'cron_launcher',
'clean' => true,
'requirements' =>
array (
'cron_activation' => true,
),
),
'carbon_footprint' =>
array (
'target' => 'FRONT.FUNNEL.CONFIRMATION',
'builder' => 'carbon_footprint',
'clean' => true,
'requirements' =>
array (
'tree_access_available' => true,
),
),
'carbon_bot' =>
array (
'target' => 'FRONT.HEAD',
'builder' => 'carbon_bot',
'clean' => true,
'requirements' =>
array (
'tree_access_available' => true,
'tree_bot_activation' => true,
),
),
'charity_block' =>
array (
'target' => 'FRONT.FUNNEL.CHECKOUT',
'builder' => 'charity_block',
'clean' => true,
'requirements' =>
array (
'charity_access_available' => true,
),
),
'frontoffice_override_css' =>
array (
'target' => 'FRONT.HEAD',
'builder' => 'frontoffice_override_css',
),
'carbon_bot_css' =>
array (
'target' => 'FRONT.HEAD',
'builder' => 'carbon_bot_css',
'clean' => true,
'requirements' =>
array (
'tree_activation' => true,
'tree_bot_activation' => true,
),
),
),
'database' =>
array (
'entities' =>
array (
'setting' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Entities\\Setting',
'table' => 'pgimpact_settings',
'primary' => 'id',
'fields' =>
array (
'id' =>
array (
'type' => 'int',
),
'id_shop' =>
array (
'type' => 'string',
'default' => null,
),
'name' =>
array (
'type' => 'string',
),
'value' =>
array (
'type' => 'string',
),
),
),
'translation' =>
array (
'class' => 'PGI\\Impact\\PGIntl\\Entities\\Translation',
'table' => 'pgimpact_translations',
'primary' => 'id',
'fields' =>
array (
'id' =>
array (
'type' => 'int',
),
'id_shop' =>
array (
'type' => 'string',
'default' => null,
),
'code' =>
array (
'type' => 'string',
),
'language' =>
array (
'type' => 'string',
),
'text' =>
array (
'type' => 'string',
),
),
),
'fingerprint' =>
array (
'table' => 'pgimpact_fingerprint',
),
'carbon_data' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Entities\\CarbonData',
'table' => 'pgimpact_carbon_data',
'primary' => 'id',
'fields' =>
array (
'id' =>
array (
'type' => 'int',
),
'id_order' =>
array (
'type' => 'int',
),
'id_user' =>
array (
'type' => 'int',
),
'id_fingerprint' =>
array (
'type' => 'string',
),
'footprint' =>
array (
'type' => 'float',
),
'carbon_offset' =>
array (
'type' => 'float',
),
'created_at' =>
array (
'type' => 'datetime',
),
),
),
'gift' =>
array (
'class' => 'PGI\\Impact\\PGCharity\\Entities\\Gift',
'table' => 'pgimpact_gifts',
'primary' => 'id',
'fields' =>
array (
'id' =>
array (
'type' => 'int',
),
'reference' =>
array (
'type' => 'string',
),
'amount' =>
array (
'type' => 'int',
),
'id_order' =>
array (
'type' => 'int',
),
'id_partnership' =>
array (
'type' => 'int',
),
'created_at' =>
array (
'type' => 'datetime',
),
),
),
),
),
'db' =>
array (
'var' =>
array (
'prefix' => '',
'engine' => 'innodb',
),
'split' => true,
),
'http_codes' =>
array (
100 => 'Continue',
101 => 'Switching Protocols',
102 => 'Processing',
200 => 'OK',
201 => 'Created',
202 => 'Accepted',
203 => 'Non-Authoritative Information',
204 => 'No Content',
205 => 'Reset Content',
206 => 'Partial Content',
207 => 'Multi-Status',
208 => 'Already Reported',
226 => 'IM Used',
300 => 'Multiple Choices',
301 => 'Moved Permanently',
302 => 'Found',
303 => 'See Other',
304 => 'Not Modified',
305 => 'Use Proxy',
306 => 'Switch Proxy',
307 => 'Temporary Redirect',
308 => 'Permanent Redirect',
400 => 'Bad Request',
401 => 'Unauthorized',
402 => 'Payment Required',
403 => 'Forbidden',
404 => 'Not Found',
405 => 'Method Not Allowed',
406 => 'Not Acceptable',
407 => 'Proxy Authentication Required',
408 => 'Request Timeout',
409 => 'Conflict',
410 => 'Gone',
411 => 'Length Required',
412 => 'Precondition Failed',
413 => 'Request Entity Too Large',
414 => 'Request-URI Too Long',
415 => 'Unsupported Media Type',
416 => 'Requested Range Not Satisfiable',
417 => 'Expectation Failed',
418 => 'I"m a teapot',
419 => 'Authentication Timeout',
420 => 'Enhance Your Calm (Twitter) / Method Failure (Spring Framework)',
422 => 'Unprocessable Entity',
423 => 'Locked',
424 => 'Failed Dependency (WebDAV; RFC 4918) / Method Failure (WebDAV)',
425 => 'Unordered Collection',
426 => 'Upgrade Required',
428 => 'Precondition Required',
429 => 'Too Many Requests',
431 => 'Request Header Fields Too Large',
444 => 'No Response',
449 => 'Retry With',
450 => 'Blocked by Windows Parental Controls',
451 => 'Redirect (Microsoft) / Unavailable For Legal Reasons (Internet draft)',
494 => 'Request Header Too Large',
495 => 'Cert Error',
496 => 'No Cert',
497 => 'HTTP to HTTPS',
499 => 'Client Closed Request',
500 => 'Internal Server Error',
501 => 'Not Implemented',
502 => 'Bad Gateway',
503 => 'Service Unavailable',
504 => 'Gateway Timeout',
505 => 'HTTP Version Not Supported',
506 => 'Variant Also Negotiates',
507 => 'Insufficient Storage',
508 => 'Loop Detected',
509 => 'Bandwidth Limit Exceeded',
510 => 'Not Extended',
511 => 'Network Authentication Required',
598 => 'Network read timeout error',
599 => 'Network connect timeout error',
),
'mime_types' =>
array (
'aac' => 'audio/aac',
'abw' => 'application/x-abiword',
'arc' => 'application/octet-stream',
'avi' => 'video/x-msvideo',
'azw' => 'application/vnd.amazon.ebook',
'bin' => 'application/octet-stream',
'bz' => 'application/x-bzip',
'bz2' => 'application/x-bzip2',
'csh' => 'application/x-csh',
'css' => 'text/css',
'csv' => 'text/csv',
'doc' => 'application/msword',
'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
'eot' => 'application/vnd.ms-fontobject',
'epub' => 'application/epub+zip',
'gif' => 'image/gif',
'htm' => 'text/html',
'html' => 'text/html',
'ico' => 'image/x-icon',
'ics' => 'text/calendar',
'jar' => 'application/java-archive',
'jpeg' => 'image/jpeg',
'jpg' => 'image/jpeg',
'js' => 'application/javascript',
'json' => 'application/json',
'log' => 'text/plain',
'mid' => 'audio/midi',
'midi' => 'audio/midi',
'mpeg' => 'video/mpeg',
'mpkg' => 'application/vnd.apple.installer+xml',
'odp' => 'application/vnd.oasis.opendocument.presentation',
'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
'odt' => 'application/vnd.oasis.opendocument.text',
'oga' => 'audio/ogg',
'ogv' => 'video/ogg',
'ogx' => 'application/ogg',
'otf' => 'font/otf',
'png' => 'image/png',
'pdf' => 'application/pdf',
'ppt' => 'application/vnd.ms-powerpoint',
'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
'rar' => 'application/x-rar-compressed',
'rtf' => 'application/rtf',
'sh' => 'application/x-sh',
'svg' => 'image/svg+xml',
'swf' => 'application/x-shockwave-flash',
'tar' => 'application/x-tar',
'tif' => 'image/tiff',
'tiff' => 'image/tiff',
'ts' => 'application/typescript',
'ttf' => 'font/ttf',
'vsd' => 'application/vnd.visio',
'wav' => 'audio/x-wav',
'weba' => 'audio/webm',
'webm' => 'video/webm',
'webp' => 'image/webp',
'woff' => 'font/woff',
'woff2' => 'font/woff2',
'xhtml' => 'application/xhtml+xml',
'xls' => 'application/vnd.ms-excel',
'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
'xml' => 'application/xml',
'xul' => 'application/vnd.mozilla.xul+xml',
'zip' => 'application/zip',
'3gp' => 'video/3gpp',
'3g2' => 'video/3gpp2',
'7z' => 'application/x-7z-compressed',
),
'request_builder' =>
array (
'default' =>
array (
),
'backoffice' =>
array (
'strict' => false,
),
'frontoffice' =>
array (
'strict' => false,
),
),
'routing' =>
array (
'areas' =>
array (
'front' =>
array (
'patterns' =>
array (
0 => 'front.*',
),
),
'backoffice' =>
array (
'patterns' =>
array (
0 => 'backoffice.*',
),
),
),
'routes' =>
array (
'backoffice.cron.display' =>
array (
'target' => 'cron.display',
'requirements' =>
array (
'shop_context' => true,
),
),
'backoffice.cron.run' =>
array (
'target' => 'runScheduler@backoffice.cron',
'requirements' =>
array (
'shop_context' => true,
),
),
'backoffice.cron.save_config' =>
array (
'target' => 'cron_configuration.save',
),
'backoffice.products.display' =>
array (
'target' => 'products.display',
'requirements' =>
array (
'shop_context' => true,
),
),
'backoffice.products.save' =>
array (
'target' => 'products.save',
'requirements' =>
array (
'shop_context' => true,
),
),
'backoffice.system.display' =>
array (
'target' => 'system.display',
),
'backoffice.support.save_support_config' =>
array (
'target' => 'support_configuration.save',
),
'backoffice.logs.download' =>
array (
'target' => 'downloadLogFile@backoffice.logs',
),
'backoffice.logs.delete' =>
array (
'target' => 'deleteLogFile@backoffice.logs',
),
'backoffice.shop.select' =>
array (
'target' => 'setCurrentShop@backoffice.shop',
),
'backoffice.support.display' =>
array (
'target' => 'support.display',
),
'backoffice.release_note.display' =>
array (
'target' => 'release_note.display',
),
'backoffice.diagnostic.run' =>
array (
'target' => 'run@backoffice.diagnostic',
),
'backoffice.home.display' =>
array (
'target' => 'home.display',
'requirements' =>
array (
'shop_context' => true,
),
),
'backoffice.cache.reset' =>
array (
'target' => 'resetCache@backoffice.cache',
),
'front.cron.run' =>
array (
'target' => 'runScheduler@front.cron',
'requirements' =>
array (
'cron_activation' => true,
),
),
'backoffice.tree.activation' =>
array (
'target' => 'treeActivation@backoffice.tree',
'requirements' =>
array (
'shop_context' => true,
),
),
'backoffice.tree_products.activation' =>
array (
'target' => 'treeProductsActivation@backoffice.tree',
'requirements' =>
array (
'shop_context' => true,
),
),
'backoffice.tree_kit_activation.save' =>
array (
'target' => 'tree_kit_activation.save',
'requirements' =>
array (
'shop_context' => true,
),
),
'backoffice.tree_account.display' =>
array (
'target' => 'tree_account.display',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_account.save' =>
array (
'target' => 'saveTreeAccountConfiguration@backoffice.tree_account',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_account.disconnect' =>
array (
'target' => 'disconnect@backoffice.tree_account',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_config.display' =>
array (
'target' => 'tree_config.display',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.carbon_bot_config.display' =>
array (
'target' => 'carbon_bot_config.display',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_config.save' =>
array (
'target' => 'tree_configuration.save',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.carbon_bot_config_global_form.save' =>
array (
'target' => 'carbon_bot_config_global_form.save',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_bot_form.save' =>
array (
'target' => 'tree_bot_form.save',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_shipping_address.save' =>
array (
'target' => 'tree_shipping_address.save',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_translations.display' =>
array (
'target' => 'tree_translations.display',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_translations.save' =>
array (
'target' => 'tree_translations_form.save',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_bot_translations.save' =>
array (
'target' => 'tree_bot_translations_form.save',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_config.download_product_catalog' =>
array (
'target' => 'downloadProductCatalog@backoffice.tree_export_product_catalog',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_config.generate_product_catalog' =>
array (
'target' => 'generateProductCatalog@backoffice.tree_export_product_catalog',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'backoffice.tree_config.export_product_catalog' =>
array (
'target' => 'exportProductCatalog@backoffice.tree_export_product_catalog',
'requirements' =>
array (
'shop_context' => true,
'tree_connexion' => true,
),
),
'backoffice.tree_products_synchronization.display' =>
array (
'target' => 'tree_products_synchronization.display',
'requirements' =>
array (
'shop_context' => true,
'tree_kit_activation' => true,
),
),
'front.climatebot.display' =>
array (
'target' => 'display@front.tree.climatebot',
'requirements' =>
array (
'tree_access_available' => true,
),
),
'backoffice.charity.activation' =>
array (
'target' => 'charityActivation@backoffice.charity',
'requirements' =>
array (
'shop_context' => true,
),
),
'backoffice.charity_products.activation' =>
array (
'target' => 'charityProductsActivation@backoffice.charity',
'requirements' =>
array (
'shop_context' => true,
),
),
'backoffice.charity_account.display' =>
array (
'target' => 'charity_account.display',
'requirements' =>
array (
'shop_context' => true,
'charity_kit_activation' => true,
),
),
'backoffice.charity_account.save' =>
array (
'target' => 'saveCharityAccountConfiguration@backoffice.charity_account',
'requirements' =>
array (
'shop_context' => true,
'charity_kit_activation' => true,
),
),
'backoffice.charity_account.disconnect' =>
array (
'target' => 'disconnect@backoffice.charity_account',
'requirements' =>
array (
'shop_context' => true,
'charity_kit_activation' => true,
),
),
'backoffice.charity_config.display' =>
array (
'target' => 'charity_config.display',
'requirements' =>
array (
'shop_context' => true,
'charity_prod_available' => true,
),
),
'backoffice.charity_config.save' =>
array (
'target' => 'charity_config.save',
'requirements' =>
array (
'shop_context' => true,
'charity_kit_activation' => true,
),
),
'backoffice.charity_partnerships.display' =>
array (
'target' => 'charity_partnerships.display',
'requirements' =>
array (
'shop_context' => true,
'charity_activation' => true,
),
),
'backoffice.charity_partnerships.update_positions' =>
array (
'target' => 'updatePartnershipsPositions@backoffice.charity_partnerships',
'requirements' =>
array (
'shop_context' => true,
'charity_kit_activation' => true,
),
),
'backoffice.charity_translations.display' =>
array (
'target' => 'charity_translations.display',
'requirements' =>
array (
'shop_context' => true,
'charity_kit_activation' => true,
),
),
'backoffice.charity_translations.save' =>
array (
'target' => 'charity_translations_form.save',
'requirements' =>
array (
'shop_context' => true,
'charity_kit_activation' => true,
),
),
'front.charity.display_popin' =>
array (
'target' => 'display@front.charity.popin',
'requirements' =>
array (
'charity_access_available' => true,
),
),
'front.charity.save_gift' =>
array (
'target' => 'saveGift@front.charity.gift',
'requirements' =>
array (
'charity_access_available' => true,
),
),
'front.charity.cancel_gift' =>
array (
'target' => 'cancelGift@front.charity.gift',
'requirements' =>
array (
'charity_access_available' => true,
),
),
'front.charity.gift_explanation' =>
array (
'target' => 'displayGiftExplanationPage@front.charity.gift',
),
),
),
'fields' =>
array (
'models' =>
array (
'collection.translations' =>
array (
'model' => 'collection',
'default' =>
array (
0 =>
array (
'text' => '',
'language' => 'fr',
),
),
'validators' =>
array (
'not_empty' => null,
),
'child' =>
array (
'model' => 'object',
'children' =>
array (
'text' =>
array (
'type' => 'basic',
'format' => 'string',
'required' => true,
'validators' =>
array (
'not_empty' => null,
),
'view' =>
array (
'name' => 'field',
'data' =>
array (
'attr' =>
array (
'type' => 'text',
),
'placeholder' => 'forms.translations.placeholder.text',
),
'template' => 'fields/partials/input',
),
),
'language' =>
array (
'type' => 'basic',
'format' => 'string',
'required' => true,
'validators' =>
array (
'not_empty' => null,
),
'view' =>
array (
'name' => 'field.choice.contracted',
'data' =>
array (
'choices' => 'language',
'translate' => true,
'multiple' => false,
'placeholder' => 'forms.translations.placeholder.lang',
'attr' =>
array (
'class' => 'pg_translated_field_language_selector',
),
),
'template' => 'fields/partials/select',
),
),
),
'view' =>
array (
'name' => 'field.object',
'data' =>
array (
'class' => null,
'label' => 'forms.button.fields.image.label',
),
'template' => 'fields/partials/object',
),
),
),
'string' =>
array (
'format' => 'string',
'view' =>
array (
'name' => 'field',
'data' =>
array (
'class' => null,
'attr' =>
array (
'type' => 'text',
),
),
'template' => 'fields/input-bloc',
),
),
'collection' =>
array (
'type' => 'collection',
'format' => 'array',
'view' =>
array (
'name' => 'field.collection',
'data' =>
array (
'class' => null,
'allowCreation' => true,
'allowDeletion' => true,
),
'template' => 'fields/bloc-collection',
),
),
'int' =>
array (
'format' => 'int',
'view' =>
array (
'name' => 'field',
'data' =>
array (
'class' => null,
'attr' =>
array (
'type' => 'number',
),
),
'template' => 'fields/input-bloc',
),
),
'float' =>
array (
'format' => 'float',
'view' =>
array (
'name' => 'field',
'data' =>
array (
'class' => null,
'attr' =>
array (
'type' => 'text',
),
),
'template' => 'fields/input-bloc',
),
),
'object' =>
array (
'type' => 'object',
'format' => 'object',
),
'bool' =>
array (
'format' => 'bool',
'view' =>
array (
'name' => 'field.bool.checkbox',
'data' =>
array (
'class' => null,
),
'template' => 'fields/input-bloc',
),
),
'hidden' =>
array (
'format' => 'string',
'view' =>
array (
'name' => 'field',
'data' =>
array (
'attr' =>
array (
'type' => 'hidden',
),
),
'template' => 'fields/partials/input',
),
),
'choice.expanded.single' =>
array (
'format' => 'string',
'view' =>
array (
'name' => 'field.choice.expanded',
'data' =>
array (
'class' => null,
'translate' => false,
'multiple' => false,
),
'template' => 'fields/bloc-choice-expanded',
),
),
'choice.expanded.multiple' =>
array (
'format' => 'array',
'view' =>
array (
'name' => 'field.choice.expanded',
'data' =>
array (
'class' => null,
'translate' => false,
'multiple' => true,
),
'template' => 'fields/bloc-choice-expanded',
),
),
'choice.contracted.single' =>
array (
'format' => 'string',
'view' =>
array (
'name' => 'field.choice.contracted',
'data' =>
array (
'class' => null,
'translate' => false,
'multiple' => false,
),
'template' => 'fields/bloc-choice-contracted',
),
),
'choice.contracted.multiple' =>
array (
'format' => 'array',
'view' =>
array (
'name' => 'field.choice.contracted',
'data' =>
array (
'class' => null,
'translate' => false,
'multiple' => true,
),
'template' => 'fields/bloc-choice-contracted',
),
),
'choice.double.bool' =>
array (
'format' => 'array',
'view' =>
array (
'name' => 'field.choice.double.bool',
'data' =>
array (
'class' => null,
'translate' =>
array (
'horizontal_choices' => false,
'vertical_choices' => false,
),
'axis' => 'both',
'multiple' => true,
'filter' => true,
'filterPlaceholder' => 'misc.forms.default.input.search.placeholder',
),
'template' => 'fields/bloc-double-choice-boolean',
),
),
'bool.switch' =>
array (
'format' => 'bool',
'view' =>
array (
'name' => 'field',
'data' =>
array (
'class' => null,
),
'template' => 'fields/bloc-switch',
),
),
'colorpicker' =>
array (
'format' => 'string',
'view' =>
array (
'name' => 'field',
'data' =>
array (
'class' => null,
'attr' =>
array (
'data-js' => 'colorpicker',
'class' => 'pgform__field__colorpicker',
),
),
'template' => 'fields/bloc-colorpicker',
),
),
),
'default' =>
array (
'type' => 'basic',
'enabled' => true,
),
'types' =>
array (
'basic' => 'PGI\\Impact\\PGForm\\Components\\Fields\\Basic',
'object' => 'PGI\\Impact\\PGForm\\Components\\Fields\\Composite',
'collection' => 'PGI\\Impact\\PGForm\\Components\\Fields\\Collection',
),
),
'intl' =>
array (
'native_languages' =>
array (
0 => 'en',
1 => 'fr',
),
),
'form' =>
array (
'definitions' =>
array (
'translations' =>
array (
'model' => 'basic',
'fields' =>
array (
),
'view' =>
array (
'data' =>
array (
'validate' => 'misc.forms.default.buttons.save',
),
),
),
'cron' =>
array (
'model' => 'basic',
'fields' =>
array (
'cron_activation' =>
array (
'model' => 'bool.switch',
'view' =>
array (
'data' =>
array (
'label' => 'forms.cron.fields.cron_activation.label',
'help' => 'forms.cron.fields.cron_activation.help',
),
),
),
'cron_activation_mode' =>
array (
'model' => 'choice.contracted.single',
'default' => 'URL',
'requirements' =>
array (
'cron_activation' => true,
),
'validators' =>
array (
'array.in' => 'cron_activation_mode',
),
'view' =>
array (
'data' =>
array (
'choices' => 'cron_activation_mode',
'label' => 'forms.cron.fields.cron_activation_mode.label',
'help' => 'forms.cron.fields.cron_activation_mode.help',
'translate' => true,
),
),
),
),
'view' =>
array (
'data' =>
array (
'validate' => 'misc.forms.default.buttons.save',
),
),
),
'settings_support' =>
array (
'model' => 'basic',
'fields' =>
array (
'behavior_detailed_logs' =>
array (
'model' => 'bool.switch',
'view' =>
array (
'data' =>
array (
'label' => 'forms.settings_support.fields.detailed_logs.label',
'help' => 'forms.settings_support.fields.detailed_logs.help',
),
),
),
),
'view' =>
array (
'data' =>
array (
'validate' => 'misc.forms.default.buttons.save',
),
),
),
'tree_shipping_address' =>
array (
'model' => 'basic',
'fields' =>
array (
'shipping_address_line_1' =>
array (
'model' => 'string',
'required' => true,
'view' =>
array (
'data' =>
array (
'label' => 'forms.tree_shipping_address.fields.line_1.label',
),
),
),
'shipping_address_line_2' =>
array (
'model' => 'string',
'required' => false,
'view' =>
array (
'data' =>
array (
'label' => 'forms.tree_shipping_address.fields.line_2.label',
),
),
),
'shipping_address_zipcode' =>
array (
'model' => 'string',
'required' => true,
'view' =>
array (
'data' =>
array (
'label' => 'forms.tree_shipping_address.fields.zipcode.label',
),
),
),
'shipping_address_city' =>
array (
'model' => 'string',
'required' => true,
'view' =>
array (
'data' =>
array (
'label' => 'forms.tree_shipping_address.fields.city.label',
),
),
),
'shipping_address_country' =>
array (
'model' => 'choice.contracted.single',
'validators' =>
array (
'array.in' => 'countries',
),
'required' => true,
'view' =>
array (
'data' =>
array (
'choices' => 'countries',
'translate' => true,
'label' => 'forms.tree_shipping_address.fields.country.label',
),
),
),
),
'view' =>
array (
'data' =>
array (
'validate' => 'misc.forms.default.buttons.save',
),
),
),
'products' =>
array (
'fields' =>
array (
'tree_kit_activation' =>
array (
'enabled' => true,
'model' => 'bool.switch',
'view' =>
array (
'data' =>
array (
'label' => 'forms.products.fields.tree_kit_activation.label',
'help' => 'forms.products.fields.tree_kit_activation.help',
),
),
),
),
),
'tree_bot' =>
array (
'model' => 'basic',
'fields' =>
array (
'tree_bot_color' =>
array (
'model' => 'colorpicker',
'view' =>
array (
'data' =>
array (
'label' => 'forms.tree_bot.fields.tree_bot_color.label',
),
),
),
'tree_bot_side' =>
array (
'model' => 'choice.contracted.single',
'validators' =>
array (
'array.in' =>
array (
0 => 'LEFT',
1 => 'RIGHT',
),
),
'view' =>
array (
'data' =>
array (
'translate' => true,
'choices' =>
array (
'LEFT' => 'forms.tree_bot.fields.tree_bot_side.choices.LEFT',
'RIGHT' => 'forms.tree_bot.fields.tree_bot_side.choices.RIGHT',
),
'label' => 'forms.tree_bot.fields.tree_bot_side.label',
),
),
),
'tree_bot_corner' =>
array (
'model' => 'choice.contracted.single',
'validators' =>
array (
'array.in' =>
array (
0 => 'ROUND',
1 => 'SQUARE',
),
),
'view' =>
array (
'data' =>
array (
'translate' => true,
'choices' =>
array (
'ROUND' => 'forms.tree_bot.fields.tree_bot_corner.choices.ROUND',
'SQUARE' => 'forms.tree_bot.fields.tree_bot_corner.choices.SQUARE',
),
'label' => 'forms.tree_bot.fields.tree_bot_corner.label',
),
),
),
'tree_details_url' =>
array (
'model' => 'string',
'view' =>
array (
'data' =>
array (
'label' => 'forms.tree_bot.fields.tree_details_url.label',
'help' => 'forms.tree_bot.fields.tree_details_url.help',
),
),
),
),
'view' =>
array (
'data' =>
array (
'validate' => 'misc.forms.default.buttons.save',
),
),
),
'tree_config' =>
array (
'model' => 'basic',
'fields' =>
array (
'carbon_offsetting_payer' =>
array (
'model' => 'choice.expanded.single',
'format' => 'string',
'default' => 'MERCHANT',
'enabled' => false,
'view' =>
array (
'data' =>
array (
'choices' =>
array (
'MERCHANT' => 'forms.tree_config.fields.carbon_offsetting_payer.values.MERCHANT',
'CUSTOMER' => 'forms.tree_config.fields.carbon_offsetting_payer.values.CUSTOMER',
),
'attr' =>
array (
'disabled' => '',
),
'translate' => true,
'label' => 'forms.tree_config.fields.carbon_offsetting_payer.label',
'help' => 'forms.tree_config.fields.carbon_offsetting_payer.help',
'warning' => 'forms.tree_config.fields.carbon_offsetting_payer.warning',
),
),
),
'tree_test_mode' =>
array (
'model' => 'bool.switch',
'requirements' =>
array (
'tree_prod_available' => true,
),
'view' =>
array (
'data' =>
array (
'label' => 'forms.tree_config.fields.tree_test_mode.label',
'help' => 'forms.tree_config.fields.tree_test_mode.help',
),
),
),
),
'view' =>
array (
'data' =>
array (
'validate' => 'misc.forms.default.buttons.save',
),
),
),
'carbon_bot_config_global' =>
array (
'model' => 'basic',
'fields' =>
array (
'tree_bot_activated' =>
array (
'model' => 'bool.switch',
'view' =>
array (
'data' =>
array (
'label' => 'forms.carbon_bot_config_global.fields.tree_bot_activated.label',
'help' => 'forms.carbon_bot_config_global.fields.tree_bot_activated.help',
),
),
),
'tree_bot_mobile_activated' =>
array (
'model' => 'bool.switch',
'requirements' =>
array (
'tree_bot_activation' => true,
),
'view' =>
array (
'data' =>
array (
'label' => 'forms.tree_bot.fields.tree_bot_mobile_activated.label',
'help' => 'forms.tree_bot.fields.tree_bot_mobile_activated.help',
),
),
),
),
'view' =>
array (
'data' =>
array (
'validate' => 'misc.forms.default.buttons.save',
),
),
),
'tree_authentication' =>
array (
'model' => 'basic',
'fields' =>
array (
'client_id' =>
array (
'model' => 'string',
'required' => true,
'view' =>
array (
'data' =>
array (
'label' => 'forms.tree_authentication.fields.client_id.label',
),
),
),
'login' =>
array (
'model' => 'string',
'required' => true,
'view' =>
array (
'data' =>
array (
'label' => 'forms.tree_authentication.fields.login.label',
),
),
),
'password' =>
array (
'model' => 'string',
'required' => true,
'view' =>
array (
'data' =>
array (
'label' => 'forms.tree_authentication.fields.password.label',
),
),
),
),
'view' =>
array (
'data' =>
array (
'validate' => 'misc.forms.default.buttons.save',
),
),
),
'charity_authentication' =>
array (
'model' => 'basic',
'fields' =>
array (
'client_id' =>
array (
'model' => 'string',
'required' => true,
'view' =>
array (
'data' =>
array (
'label' => 'forms.charity_authentication.fields.client_id.label',
),
),
),
'login' =>
array (
'model' => 'string',
'required' => true,
'view' =>
array (
'data' =>
array (
'label' => 'forms.charity_authentication.fields.login.label',
),
),
),
'password' =>
array (
'model' => 'string',
'required' => true,
'view' =>
array (
'data' =>
array (
'label' => 'forms.charity_authentication.fields.password.label',
),
),
),
),
'view' =>
array (
'data' =>
array (
'validate' => 'misc.forms.default.buttons.save',
),
),
),
'charity_config' =>
array (
'model' => 'basic',
'fields' =>
array (
'charity_test_mode' =>
array (
'model' => 'bool.switch',
'requirements' =>
array (
'charity_prod_available' => true,
),
'view' =>
array (
'data' =>
array (
'label' => 'forms.charity_config.fields.charity_test_mode.label',
'help' => 'forms.charity_config.fields.charity_test_mode.help',
),
),
),
),
'view' =>
array (
'data' =>
array (
'validate' => 'misc.forms.default.buttons.save',
),
),
),
'settings_customization' =>
array (
'fields' =>
array (
'footer_display' =>
array (
'enabled' => false,
),
'footer_color' =>
array (
'enabled' => false,
),
),
),
),
'default' =>
array (
),
'models' =>
array (
'basic' =>
array (
'view' =>
array (
'name' => 'form',
'data' =>
array (
'attr' =>
array (
'method' => 'post',
),
),
'template' => 'form',
),
),
'multipart' =>
array (
'view' =>
array (
'name' => 'form',
'data' =>
array (
'attr' =>
array (
'method' => 'post',
'enctype' => 'multipart/form-data',
),
),
'template' => 'form',
),
),
),
),
'countries' =>
array (
0 => 'af',
1 => 'al',
2 => 'ag',
3 => 'an',
4 => 'ao',
5 => 'av',
6 => 'ac',
7 => 'ar',
8 => 'am',
9 => 'aa',
10 => 'at',
11 => 'as',
12 => 'au',
13 => 'aj',
14 => 'bf',
15 => 'ba',
16 => 'bg',
17 => 'bb',
18 => 'bs',
19 => 'bo',
20 => 'be',
21 => 'bh',
22 => 'bn',
23 => 'bd',
24 => 'bt',
25 => 'bl',
26 => 'bk',
27 => 'bc',
28 => 'bv',
29 => 'br',
30 => 'io',
31 => 'vi',
32 => 'bx',
33 => 'bu',
34 => 'uv',
35 => 'bm',
36 => 'by',
37 => 'cb',
38 => 'cm',
39 => 'ca',
40 => 'cv',
41 => 'cj',
42 => 'ct',
43 => 'cd',
44 => 'ci',
45 => 'ch',
46 => 'kt',
47 => 'ip',
48 => 'ck',
49 => 'co',
50 => 'cn',
51 => 'cf',
52 => 'cg',
53 => 'cw',
54 => 'cr',
55 => 'cs',
56 => 'iv',
57 => 'hr',
58 => 'cu',
59 => 'cy',
60 => 'ez',
61 => 'da',
62 => 'dj',
63 => 'do',
64 => 'dr',
65 => 'tt',
66 => 'ec',
67 => 'eg',
68 => 'es',
69 => 'ek',
70 => 'er',
71 => 'en',
72 => 'et',
73 => 'eu',
74 => 'fk',
75 => 'fo',
76 => 'fj',
77 => 'fi',
78 => 'fr',
79 => 'fg',
80 => 'fp',
81 => 'fs',
82 => 'gb',
83 => 'ga',
84 => 'gz',
85 => 'gg',
86 => 'gm',
87 => 'gh',
88 => 'gi',
89 => 'go',
90 => 'gr',
91 => 'gl',
92 => 'gj',
93 => 'gp',
94 => 'gt',
95 => 'gk',
96 => 'gv',
97 => 'pu',
98 => 'gy',
99 => 'ha',
100 => 'hm',
101 => 'ho',
102 => 'hk',
103 => 'hu',
104 => 'ic',
105 => 'in',
106 => 'id',
107 => 'ir',
108 => 'iz',
109 => 'ei',
110 => 'im',
111 => 'is',
112 => 'it',
113 => 'jm',
114 => 'jn',
115 => 'ja',
116 => 'je',
117 => 'jo',
118 => 'ju',
119 => 'kz',
120 => 'ke',
121 => 'kr',
122 => 'ku',
123 => 'kg',
124 => 'la',
125 => 'lg',
126 => 'le',
127 => 'lt',
128 => 'li',
129 => 'ly',
130 => 'ls',
131 => 'lh',
132 => 'lu',
133 => 'mc',
134 => 'mk',
135 => 'ma',
136 => 'mi',
137 => 'my',
138 => 'mv',
139 => 'ml',
140 => 'mt',
141 => 'rm',
142 => 'mb',
143 => 'mr',
144 => 'mp',
145 => 'mf',
146 => 'mx',
147 => 'fm',
148 => 'md',
149 => 'mn',
150 => 'mg',
151 => 'mh',
152 => 'mo',
153 => 'mz',
154 => 'wa',
155 => 'nr',
156 => 'np',
157 => 'nl',
158 => 'nt',
159 => 'nc',
160 => 'nz',
161 => 'nu',
162 => 'ng',
163 => 'ni',
164 => 'ne',
165 => 'nm',
166 => 'nf',
167 => 'kn',
168 => 'no',
169 => 'mu',
170 => 'pk',
171 => 'ps',
172 => 'pm',
173 => 'pp',
174 => 'pa',
175 => 'pe',
176 => 'rp',
177 => 'pc',
178 => 'pl',
179 => 'po',
180 => 'qa',
181 => 're',
182 => 'ro',
183 => 'rs',
184 => 'rw',
185 => 'sh',
186 => 'sc',
187 => 'st',
188 => 'sb',
189 => 'vc',
190 => 'ws',
191 => 'sm',
192 => 'tp',
193 => 'sa',
194 => 'sg',
195 => 'yi',
196 => 'se',
197 => 'sl',
198 => 'sn',
199 => 'lo',
200 => 'si',
201 => 'bp',
202 => 'so',
203 => 'sf',
204 => 'sx',
205 => 'ks',
206 => 'sp',
207 => 'pg',
208 => 'ce',
209 => 'su',
210 => 'ns',
211 => 'sv',
212 => 'wz',
213 => 'sw',
214 => 'sz',
215 => 'sy',
216 => 'tw',
217 => 'ti',
218 => 'tz',
219 => 'th',
220 => 'to',
221 => 'tl',
222 => 'tn',
223 => 'td',
224 => 'te',
225 => 'ts',
226 => 'tu',
227 => 'tx',
228 => 'tk',
229 => 'tv',
230 => 'ug',
231 => 'up',
232 => 'ae',
233 => 'uk',
234 => 'uy',
235 => 'uz',
236 => 'nh',
237 => 'vt',
238 => 've',
239 => 'vm',
240 => 'wf',
241 => 'we',
242 => 'wi',
243 => 'ym',
244 => 'za',
245 => 'zi',
),
'languages' =>
array (
0 => 'ab',
1 => 'aa',
2 => 'af',
3 => 'ak',
4 => 'sq',
5 => 'de',
6 => 'am',
7 => 'en',
8 => 'ar',
9 => 'an',
10 => 'hy',
11 => 'as',
12 => 'av',
13 => 'ae',
14 => 'ay',
15 => 'az',
16 => 'ba',
17 => 'bm',
18 => 'eu',
19 => 'bn',
20 => 'bi',
21 => 'be',
22 => 'my',
23 => 'bs',
24 => 'br',
25 => 'bg',
26 => 'ca',
27 => 'ch',
28 => 'ny',
29 => 'zh',
30 => 'ko',
31 => 'kw',
32 => 'co',
33 => 'cr',
34 => 'hr',
35 => 'da',
36 => 'dz',
37 => 'es',
38 => 'eo',
39 => 'et',
40 => 'ee',
41 => 'fo',
42 => 'fj',
43 => 'fi',
44 => 'nl',
45 => 'fr',
46 => 'fy',
47 => 'gd',
48 => 'gl',
49 => 'om',
50 => 'cy',
51 => 'lg',
52 => 'ka',
53 => 'gu',
54 => 'el',
55 => 'kl',
56 => 'gn',
57 => 'ht',
58 => 'ha',
59 => 'he',
60 => 'hz',
61 => 'hi',
62 => 'ho',
63 => 'hu',
64 => 'io',
65 => 'ig',
66 => 'id',
67 => 'iu',
68 => 'ik',
69 => 'ga',
70 => 'is',
71 => 'it',
72 => 'ja',
73 => 'jv',
74 => 'kn',
75 => 'kr',
76 => 'ks',
77 => 'kk',
78 => 'km',
79 => 'ki',
80 => 'ky',
81 => 'kv',
82 => 'kg',
83 => 'ku',
84 => 'kj',
85 => 'bh',
86 => 'lo',
87 => 'la',
88 => 'lv',
89 => 'li',
90 => 'ln',
91 => 'lt',
92 => 'lu',
93 => 'lb',
94 => 'mk',
95 => 'ms',
96 => 'ml',
97 => 'dv',
98 => 'mg',
99 => 'mt',
100 => 'gv',
101 => 'mi',
102 => 'mr',
103 => 'mh',
104 => 'ro',
105 => 'mn',
106 => 'na',
107 => 'nv',
108 => 'nd',
109 => 'nr',
110 => 'ng',
111 => 'ne',
112 => 'no',
113 => 'nb',
114 => 'nn',
115 => 'oc',
116 => 'oj',
117 => 'or',
118 => 'os',
119 => 'ug',
120 => 'ur',
121 => 'uz',
122 => 'ps',
123 => 'pi',
124 => 'pa',
125 => 'fa',
126 => 'ff',
127 => 'pl',
128 => 'pt',
129 => 'qu',
130 => 'rm',
131 => 'rn',
132 => 'ru',
133 => 'rw',
134 => 'se',
135 => 'sm',
136 => 'sg',
137 => 'sa',
138 => 'sc',
139 => 'sr',
140 => 'sn',
141 => 'sd',
142 => 'si',
143 => 'sk',
144 => 'sl',
145 => 'so',
146 => 'st',
147 => 'su',
148 => 'sv',
149 => 'sw',
150 => 'ss',
151 => 'tg',
152 => 'tl',
153 => 'ty',
154 => 'ta',
155 => 'tt',
156 => 'cs',
157 => 'ce',
158 => 'cv',
159 => 'te',
160 => 'th',
161 => 'bo',
162 => 'ti',
163 => 'to',
164 => 'ts',
165 => 'tn',
166 => 'tr',
167 => 'tk',
168 => 'tw',
169 => 'uk',
170 => 've',
171 => 'vi',
172 => 'cu',
173 => 'vo',
174 => 'wa',
175 => 'wo',
176 => 'xh',
177 => 'ii',
178 => 'yi',
179 => 'yo',
180 => 'za',
181 => 'zu',
),
'log' =>
array (
'outputs' =>
array (
'view' =>
array (
'config' =>
array (
'file' => 'log:/view.log',
'format' => '<datetime> | *<type>* | <text>',
),
),
'api' =>
array (
'config' =>
array (
'file' => 'log:/api.log',
'format' => '<datetime> | *<type>* | <text>',
),
),
'default' =>
array (
'config' =>
array (
'file' => 'log:/module.log',
'format' => '<datetime> | *<type>* | <text>',
),
),
),
'archive' =>
array (
'file' =>
array (
'folder' => 'var:/chronicles',
'file' => '<name>_<date>_<time>.zip',
'max_size' => 10485760,
),
),
),
'blocks' =>
array (
'header' =>
array (
'target' => 'home',
'template' => 'home/block-header',
'data' =>
array (
'class' => 'pg__default',
),
'enabled' => false,
),
'diagnostics' =>
array (
'target' => 'support',
'view' => 'block.diagnostics',
),
'logs' =>
array (
'target' => 'support',
'view' => 'block.logs',
),
'config_form_support' =>
array (
'target' => 'support',
'view' => 'block.standardized.config_form',
'data' =>
array (
'title' => 'blocks.config_form_support.title',
'class' => 'pgblock__max__md',
'name' => 'settings_support',
'action' => 'backoffice.support.save_support_config',
),
),
'cache_reset' =>
array (
'target' => 'support',
'template' => 'cache/block-reset',
'data' =>
array (
'class' => 'pgblock__max__md',
'title' => 'blocks.cache.reset.title',
'description' => 'blocks.cache.reset.description',
),
),
'servers' =>
array (
'target' => 'support',
'view' => 'block.server',
),
'system_module_informations' =>
array (
'target' => 'system',
'action' => 'displayModuleSystemInformations@backoffice.system',
'data' =>
array (
'class' => 'pgblock pgblock__max__xl',
'title' => 'blocks.system.title',
'subtitle' => 'blocks.system.platform.title',
),
),
'system_paths_informations' =>
array (
'target' => 'system',
'view' => 'system.paths',
),
'releases_notes_list' =>
array (
'target' => 'release_note',
'action' => 'displayList@backoffice.release_note',
'data' =>
array (
'class' => 'pgblock__full__xl',
),
),
'products_infos' =>
array (
'target' => 'products',
'template' => 'blocks/products-infos',
'data' =>
array (
'class' => 'pg__default pgblock__full',
),
),
'cron_tasks' =>
array (
'target' => 'cron',
'action' => 'displayTasks@backoffice.cron',
'data' =>
array (
'class' => 'pgblock__xl',
),
),
'config_form_cron' =>
array (
'target' => 'cron',
'view' => 'block.standardized.config_form',
'data' =>
array (
'title' => 'blocks.config_form_cron.title',
'class' => 'pgblock__max__md',
'name' => 'cron',
'action' => 'backoffice.cron.save_config',
),
),
'cron_control' =>
array (
'target' => 'cron',
'action' => 'displayControl@backoffice.cron',
'data' =>
array (
'class' => 'pgblock__xl',
),
),
'tree_kit_header' =>
array (
'position' => 2,
'target' => 'home',
'action' => 'display@backoffice.tree',
'data' =>
array (
'class' => 'pgblock__min__xxl',
),
'requirements' =>
array (
'tree_kit_activation' => true,
),
),
'tree_kit_products' =>
array (
'target' => 'products',
'action' => 'displayProducts@backoffice.tree',
'data' =>
array (
'class' => 'pgblock__max__md',
),
),
'tree_account_infos' =>
array (
'target' => 'tree_account',
'action' => 'displayAccountInfos@backoffice.tree_account',
'data' =>
array (
'class' => 'pgblock__min__md',
),
'requirements' =>
array (
'tree_connexion' => true,
),
),
'tree_account_logout' =>
array (
'target' => 'tree_account',
'template' => 'tree_account/block-logout',
'data' =>
array (
'class' => 'pgblock__max__md pg__danger',
),
'requirements' =>
array (
'tree_connexion' => true,
),
),
'tree_account_login' =>
array (
'target' => 'tree_account',
'action' => 'displayAccountLogin@backoffice.tree_account',
'data' =>
array (
'class' => 'pgblock__max__md',
),
'requirements' =>
array (
'tree_connexion' => false,
),
),
'carbon_bot_config_global_form' =>
array (
'target' => 'carbon_bot_config',
'action' => 'carbon_bot_config_global_form.display',
'data' =>
array (
'title' => 'blocks.carbon_bot_config_global_form.title',
'class' => 'pgblock__md',
),
),
'tree_bot_form' =>
array (
'target' => 'carbon_bot_config',
'action' => 'tree_bot_form.display',
'data' =>
array (
'title' => 'blocks.tree_bot_form.title',
),
'requirements' =>
array (
'tree_bot_activation' => true,
),
),
'tree_shipping_address_form' =>
array (
'target' => 'tree_config',
'action' => 'tree_shipping_address.display',
'data' =>
array (
'title' => 'blocks.tree_shipping_address_form.title',
'description' => 'blocks.tree_shipping_address_form.description',
'class' => 'pgblock__max__md',
),
),
'form_tree_translations_management' =>
array (
'target' => 'tree_translations',
'action' => 'tree_translations_form.display',
'data' =>
array (
'class' => 'pgblock pgblock__max__lg',
'title' => 'pages.translations.frontoffice.title',
'description' => 'pages.translations.frontoffice.description',
),
),
'form_tree_bot_translations_management' =>
array (
'target' => 'carbon_bot_config',
'action' => 'tree_bot_translations_form.display',
'data' =>
array (
'class' => 'pgblock pgblock__lg',
'title' => 'blocks.tree_bot_translations_management.title',
'description' => 'pages.translations.frontoffice.description',
),
'requirements' =>
array (
'tree_bot_activation' => true,
),
),
'tree_generate_product_catalog' =>
array (
'target' => 'tree_products_synchronization',
'action' => 'displayTreeGenerateProductCatalogButton@backoffice.tree_export_product_catalog',
'data' =>
array (
'class' => 'pgblock pgblock__max__sm',
'title' => 'blocks.tree_generate_product_catalog.title',
),
),
'tree_export_product_catalog' =>
array (
'target' => 'tree_products_synchronization',
'action' => 'displayTreeExportProductCatalogButton@backoffice.tree_export_product_catalog',
'data' =>
array (
'class' => 'pgblock pgblock__max__sm',
'title' => 'blocks.tree_export_product_catalog.title',
),
),
'tree_config_form_common' =>
array (
'target' => 'tree_config',
'action' => 'tree_module_config.display',
'data' =>
array (
'title' => 'blocks.tree_config_form_common.title',
'class' => 'pgblock__md',
),
'requirements' =>
array (
'tree_prod_available' => true,
),
),
'charity_kit_header' =>
array (
'position' => 3,
'target' => 'home',
'action' => 'display@backoffice.charity',
'data' =>
array (
'class' => 'pgblock__min__xxl',
),
'requirements' =>
array (
'charity_kit_activation' => true,
),
),
'charity_kit_products' =>
array (
'target' => 'products',
'action' => 'displayProducts@backoffice.charity',
'data' =>
array (
'class' => 'pgblock__max__md',
),
),
'charity_account_infos' =>
array (
'target' => 'charity_account',
'action' => 'displayAccountInfos@backoffice.charity_account',
'data' =>
array (
'class' => 'pgblock__min__md',
),
'requirements' =>
array (
'charity_connexion' => true,
),
),
'charity_account_logout' =>
array (
'target' => 'charity_account',
'template' => 'charity_account/block-logout',
'data' =>
array (
'class' => 'pgblock__max__md pg__danger',
),
'requirements' =>
array (
'charity_connexion' => true,
),
),
'charity_account_login' =>
array (
'target' => 'charity_account',
'action' => 'displayAccountLogin@backoffice.charity_account',
'data' =>
array (
'class' => 'pgblock__max__md',
),
'requirements' =>
array (
'charity_connexion' => false,
),
),
'charity_config_form_common' =>
array (
'target' => 'charity_config',
'action' => 'charity_module_config.display',
'data' =>
array (
'title' => 'blocks.charity_config_form_common.title',
'class' => 'pgblock__md',
),
),
'charity_partnerships_list' =>
array (
'target' => 'charity_partnerships',
'action' => 'displayList@backoffice.charity_partnerships',
'data' =>
array (
'title' => 'blocks.charity_partnerships_list.title',
'description' => 'blocks.charity_partnerships_list.description',
'class' => 'pgblock__min__xxl',
),
),
'charity_partnerships_disclaimer' =>
array (
'target' => 'charity_partnerships',
'template' => 'charity_partnerships/block-partnerships-disclaimer',
'data' =>
array (
'subtitle' => 'blocks.charity_partnerships_disclaimer.title',
'class' => 'pgblock__max__md pg__default',
),
),
'form_charity_translations_management' =>
array (
'target' => 'charity_translations',
'action' => 'charity_translations_form.display',
'data' =>
array (
'class' => 'pgblock pgblock__max__lg',
'title' => 'pages.translations.frontoffice.title',
'description' => 'pages.translations.frontoffice.description',
),
),
'config_form_integration' =>
array (
'enabled' => false,
),
),
'smarty' =>
array (
'builder' =>
array (
'service' => 'builder.smarty',
'path' => null,
'template_folders' =>
array (
0 => 'templates:/',
),
),
'null_stream' => 'PGI\\Impact\\PGView\\Components\\NullStream',
),
'requirements' =>
array (
'cron_activation' =>
array (
),
'shop_context' =>
array (
),
'tree_kit_activation' =>
array (
),
'tree_bot_activation' =>
array (
),
'tree_connexion' =>
array (
'requirements' =>
array (
0 => 'tree_kit_activation',
),
),
'tree_activation' =>
array (
'requirements' =>
array (
0 => 'tree_connexion',
),
),
'tree_prod_available' =>
array (
'requirements' =>
array (
0 => 'tree_activation',
),
),
'tree_access_available' =>
array (
'requirements' =>
array (
0 => 'tree_activation',
),
),
'tree_access_available_without_activation' =>
array (
),
'charity_kit_activation' =>
array (
),
'charity_connexion' =>
array (
'requirements' =>
array (
0 => 'charity_kit_activation',
),
),
'charity_activation' =>
array (
'requirements' =>
array (
0 => 'charity_connexion',
),
),
'charity_prod_available' =>
array (
'requirements' =>
array (
0 => 'charity_activation',
),
),
'charity_access_available' =>
array (
'requirements' =>
array (
0 => 'charity_activation',
),
),
),
'data' =>
array (
'cron_activation_mode' =>
array (
'URL' => 'data.cron_activation_mode.url',
'AJAX' => 'data.cron_activation_mode.ajax',
),
'charity_gift' =>
array (
'reference' => 'pgimpact-charity-gift',
'image_path' => 'static:/pictures/FOCharity/logo-charity-kit.png',
),
'display_type' =>
array (
'IMAGE' => 'forms.button.fields.display_type.values.picture',
'TEXT' => 'forms.button.fields.display_type.values.text',
),
),
'tasks' =>
array (
'log_zipping_module' =>
array (
'task' => 'log.zipping',
'frequency' => 'P1D',
'tab' => 'global',
),
'log_cleaning' =>
array (
'task' => 'log.cleaning',
'frequency' => 'P7D',
'tab' => 'global',
),
),
'servers' =>
array (
'backoffice' =>
array (
'areas' =>
array (
0 => 'backoffice',
),
'request_builder' => 'builder.request.backoffice',
'deflectors' =>
array (
0 => 'filter.shop_context',
),
'cleaners' =>
array (
'not_found' => 'cleaner.forward.message_page',
'unauthorized_access' => 'cleaner.forward.message_page',
'server_error' => 'cleaner.forward.message_page',
'bad_request' => 'cleaner.forward.message_page',
'rendering_error' => 'cleaner.forward.message_page',
),
'rendering' =>
array (
0 =>
array (
'if' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Components\\Responses\\Template',
),
'do' => 'return',
'with' => 'renderer.processor.output_template',
),
1 =>
array (
'if' =>
array (
'instance' => 'PGI\\Impact\\PGServer\\Components\\Responses\\PaygreenModule',
),
'do' => 'continue',
'with' => 'renderer.transformer.paygreen_module_2_array',
),
2 =>
array (
'if' =>
array (
'instance' => 'PGI\\Impact\\PGServer\\Components\\Responses\\Collection',
),
'do' => 'continue',
'with' => 'renderer.transformer.array_2_http',
),
3 =>
array (
'if' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Components\\Responses\\File',
),
'do' => 'continue',
'with' => 'renderer.transformer.file_2_http',
),
4 =>
array (
'if' =>
array (
'instance' => 'PGI\\Impact\\PGServer\\Components\\Responses\\Redirection',
),
'do' => 'continue',
'with' => 'renderer.transformer.redirection_2_http',
),
5 =>
array (
'if' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Components\\Responses\\HTTP',
),
'do' => 'stop',
'with' => 'renderer.processor.write_http',
),
),
),
'front' =>
array (
'areas' =>
array (
0 => 'front',
),
'request_builder' => 'builder.request.frontoffice',
'cleaners' =>
array (
'not_found' => 'cleaner.basic_http.not_found',
'unauthorized_access' => 'cleaner.basic_http.unauthorized_access',
'server_error' => 'cleaner.basic_http.server_error',
'bad_request' => 'cleaner.basic_http.bad_request',
'rendering_error' => 'cleaner.basic_http.server_error',
),
'rendering' =>
array (
0 =>
array (
'if' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Components\\Responses\\Template',
),
'do' => 'return',
'with' => 'renderer.processor.output_template',
),
1 =>
array (
'if' =>
array (
'instance' => 'PGI\\Impact\\PGServer\\Components\\Responses\\PaygreenModule',
),
'do' => 'continue',
'with' => 'renderer.transformer.paygreen_module_2_array',
),
2 =>
array (
'if' =>
array (
'instance' => 'PGI\\Impact\\PGServer\\Components\\Responses\\Collection',
),
'do' => 'continue',
'with' => 'renderer.transformer.array_2_http',
),
3 =>
array (
'if' =>
array (
'instance' => 'PGI\\Impact\\PGServer\\Components\\Responses\\File',
),
'do' => 'continue',
'with' => 'renderer.transformer.file_2_http',
),
4 =>
array (
'if' =>
array (
'instance' => 'PGI\\Impact\\PGServer\\Components\\Responses\\Redirection',
),
'do' => 'continue',
'with' => 'renderer.transformer.redirection_2_http',
),
5 =>
array (
'if' =>
array (
'instance' => 'PGI\\Impact\\PGServer\\Components\\Responses\\HTTP',
),
'do' => 'stop',
'with' => 'renderer.processor.write_http',
),
),
),
),
'menu' =>
array (
'shop_selector' => true,
'entries' =>
array (
'home' =>
array (
'action' => 'backoffice.home.display',
'name' => 'pages.home.name',
'title' => 'pages.home.title',
),
'payment' =>
array (
'name' => 'menu.payment.name',
'title' => 'menu.payment.title',
'children' =>
array (
),
),
'tree' =>
array (
'name' => 'menu.tree.name',
'title' => 'menu.tree.title',
'children' =>
array (
'tree_account' =>
array (
'action' => 'backoffice.tree_account.display',
'name' => 'pages.tree_account.name',
'title' => 'pages.tree_account.title',
),
'tree_config' =>
array (
'action' => 'backoffice.tree_config.display',
'name' => 'pages.tree_config.name',
'title' => 'pages.tree_config.title',
),
'tree_translations' =>
array (
'action' => 'backoffice.tree_translations.display',
'name' => 'pages.translations.name',
'title' => 'pages.translations.title',
),
'tree_products_synchronization' =>
array (
'action' => 'backoffice.tree_products_synchronization.display',
'name' => 'pages.tree_products_synchronization.name',
'title' => 'pages.tree_products_synchronization.title',
),
'carbon_bot_config' =>
array (
'action' => 'backoffice.carbon_bot_config.display',
'name' => 'pages.carbon_bot_config.name',
'title' => 'pages.carbon_bot_config.title',
),
),
),
'charity' =>
array (
'children' =>
array (
'charity_account' =>
array (
'action' => 'backoffice.charity_account.display',
'name' => 'pages.charity_account.name',
'title' => 'pages.charity_account.title',
),
'charity_config' =>
array (
'action' => 'backoffice.charity_config.display',
'name' => 'pages.charity_config.name',
'title' => 'pages.charity_config.title',
),
'charity_partnerships' =>
array (
'action' => 'backoffice.charity_partnerships.display',
'name' => 'pages.charity_partnerships.name',
'title' => 'pages.charity_partnerships.title',
),
'charity_translations' =>
array (
'action' => 'backoffice.charity_translations.display',
'name' => 'pages.translations.name',
'title' => 'pages.translations.title',
),
),
'name' => 'menu.charity.name',
'title' => 'menu.charity.title',
),
'config' =>
array (
'name' => 'menu.config.name',
'title' => 'menu.config.title',
'children' =>
array (
'products' =>
array (
'action' => 'backoffice.products.display',
'name' => 'pages.products.name',
'title' => 'pages.products.title',
'enabled' => false,
),
'cron' =>
array (
'action' => 'backoffice.cron.display',
'name' => 'pages.cron.name',
'title' => 'pages.cron.title',
),
),
),
'help' =>
array (
'name' => 'menu.help.name',
'title' => 'menu.help.title',
'children' =>
array (
'system' =>
array (
'action' => 'backoffice.system.display',
'name' => 'pages.system.name',
'title' => 'pages.system.title',
),
'support' =>
array (
'action' => 'backoffice.support.display',
'name' => 'pages.support.name',
'title' => 'pages.support.title',
),
'release_note' =>
array (
'action' => 'backoffice.release_note.display',
'name' => 'pages.release_note.name',
'title' => 'pages.release_note.title',
'enabled' => false,
),
),
),
'error' =>
array (
'title' => 'pages.error.title',
),
),
),
'tree' =>
array (
'transport' =>
array (
'default' => 'standard-delivery-van',
),
),
'catalog_export' =>
array (
'excluded_products' =>
array (
0 => 'paygreen-charity-gift',
1 => 'pgimpact-charity-gift',
),
),
'api' =>
array (
'tree' =>
array (
'responses' =>
array (
'class' => 'PGI\\Impact\\PGClient\\Components\\ResponseJSON',
'validity' => '200-299',
),
'requests' =>
array (
'oauth_access' =>
array (
'method' => 'POST',
'url' => '{host}/login',
'private' => false,
'validity' => '200,400,401',
),
'oauth_refresh_access' =>
array (
'method' => 'POST',
'url' => '{host}/login',
'private' => false,
'validity' => '200,400',
),
'get_account_infos' =>
array (
'method' => 'GET',
'url' => '{host}/account/{account_id}',
'private' => true,
),
'get_user_data' =>
array (
'method' => 'GET',
'url' => '{host}/account/{account_id}/user/{username}',
'private' => true,
),
'get_all_users' =>
array (
'method' => 'GET',
'url' => '{host}/account/{account_id}/user',
'private' => true,
),
'get_user' =>
array (
'method' => 'GET',
'url' => '{host}/account/{account_id}/user/{username}',
'private' => true,
),
'create_user' =>
array (
'method' => 'POST',
'url' => '{host}/account/{account_id}/user',
'private' => true,
),
'update_user' =>
array (
'method' => 'PATCH',
'url' => '{host}/account/{account_id}/user/{username}',
'private' => true,
),
'delete_user' =>
array (
'method' => 'DELETE',
'url' => '{host}/account/{account_id}/user/{username}',
'private' => true,
),
'get_ccarbon_transports_mode' =>
array (
'method' => 'GET',
'url' => '{host}/carbon/transportation-mode',
'private' => true,
),
'add_web_carbon_emission' =>
array (
'method' => 'POST',
'url' => '{host}/carbon/web',
'private' => true,
),
'add_transportation_carbon_emission' =>
array (
'method' => 'POST',
'url' => '{host}/carbon/footprints/{fingerprint}/transportation',
'private' => true,
),
'remove_transportation_carbon_emission' =>
array (
'method' => 'DELETE',
'url' => '{host}/carbon/footprints/{fingerprint}/transportation',
'private' => true,
'validity' => '204',
),
'get_all_carbon_footprints' =>
array (
'method' => 'GET',
'url' => '{host}/carbon/footprints',
'private' => true,
),
'create_carbon_footprints' =>
array (
'method' => 'POST',
'url' => '{host}/carbon/footprints',
'private' => true,
'validity' => '201',
),
'get_carbon_footprint_estimation' =>
array (
'method' => 'GET',
'url' => '{host}/carbon/footprints/{fingerprint}?detailed={detailed}',
'private' => true,
),
'update_carbon_footprint_status' =>
array (
'method' => 'PATCH',
'url' => '{host}/carbon/footprints/{fingerprint}',
'private' => true,
),
'get_all_carbon_purchases' =>
array (
'method' => 'GET',
'url' => '{host}/carbon/purchases',
'private' => true,
),
'get_carbon_purchase' =>
array (
'method' => 'GET',
'url' => '{host}/carbon/purchases/{fingerprint}',
'private' => true,
),
'get_carbon_statistics_report' =>
array (
'method' => 'GET',
'url' => '{host}/carbon/statistics/report',
'private' => true,
),
'export_product_catalog' =>
array (
'method' => 'POST',
'url' => '{host}/carbon/products/catalog',
'private' => true,
'class' => 'PGI\\Impact\\PGClient\\Components\\Response',
),
'create_product_reference' =>
array (
'method' => 'POST',
'url' => '{host}/carbon/products/references',
'private' => true,
),
'add_product_carbon_emission' =>
array (
'method' => 'POST',
'url' => '{host}/carbon/footprints/{idFootprint}/products',
'private' => true,
),
'delete_product_carbon_emission' =>
array (
'method' => 'DELETE',
'url' => '{host}/carbon/footprints/{idFootprint}/products',
'private' => true,
'validity' => '204',
),
),
'clients' =>
array (
'curl' =>
array (
'allow_redirection' => true,
'verify_peer' => true,
'verify_host' => 2,
'timeout' => 30,
'http_version' => '1.1',
),
),
),
'charity' =>
array (
'clients' =>
array (
'curl' =>
array (
'allow_redirection' => true,
'verify_peer' => true,
'verify_host' => 2,
'timeout' => 30,
'http_version' => '1.1',
),
),
'responses' =>
array (
'class' => 'PGI\\Impact\\PGClient\\Components\\ResponseJSON',
'validity' => '200-299',
),
'requests' =>
array (
'oauth_access' =>
array (
'method' => 'POST',
'url' => '{host}/login',
'private' => false,
'validity' => '200,400,401',
),
'oauth_refresh_access' =>
array (
'method' => 'POST',
'url' => '{host}/login',
'private' => false,
'validity' => '200,400',
),
'get_account_infos' =>
array (
'method' => 'GET',
'url' => '{host}/account/{account_id}',
'private' => true,
),
'get_user_data' =>
array (
'method' => 'GET',
'url' => '{host}/account/{account_id}/user/{username}',
'private' => true,
),
'list_available_associations' =>
array (
'method' => 'GET',
'url' => '{host}/association',
'private' => true,
),
'get_association' =>
array (
'method' => 'GET',
'url' => '{host}/association/{association_id}',
'private' => true,
),
'list_partnerships' =>
array (
'method' => 'GET',
'url' => '{host}/partnership',
'private' => true,
),
'get_partnership' =>
array (
'method' => 'GET',
'url' => '{host}/partnership/{partnership_id}',
'private' => true,
),
'request_partnership' =>
array (
'method' => 'POST',
'url' => '{host}/partnership',
'private' => true,
),
'cancel_partnership' =>
array (
'method' => 'DELETE',
'url' => '{host}/partnership/{partnership_id}',
'private' => true,
),
'update_partnership' =>
array (
'method' => 'PUT',
'url' => '{host}/partnership/{partnership_id}',
'private' => true,
),
'list_partnership_groups' =>
array (
'method' => 'GET',
'url' => '{host}/partnership-group',
'private' => true,
),
'get_partnership_group' =>
array (
'method' => 'GET',
'url' => '{host}/partnership-group/{external_id}',
'private' => true,
),
'create_partnership_group' =>
array (
'method' => 'POST',
'url' => '{host}/partnership-group',
'private' => true,
),
'cancel_partnership_group' =>
array (
'method' => 'DELETE',
'url' => '{host}/partnership-group/{external_id}',
'private' => true,
),
'update_partnership_group' =>
array (
'method' => 'PUT',
'url' => '{host}/partnership-group/{external_id}',
'private' => true,
),
'list_partnership_group_rules' =>
array (
'method' => 'GET',
'url' => '{host}/partnership-group-rule',
'private' => true,
),
'get_partnership_group_rule' =>
array (
'method' => 'GET',
'url' => '{host}/partnership-group-rule/{partnership_group_rule_id}',
'private' => true,
),
'create_partnership_group_rule' =>
array (
'method' => 'POST',
'url' => '{host}/partnership-group-rule',
'private' => true,
),
'deactivate_partnership_group_rule' =>
array (
'method' => 'DELETE',
'url' => '{host}/partnership-group-rule/{partnership_group_rule_id}',
'private' => true,
),
'get_current_partnership_group_rule' =>
array (
'method' => 'GET',
'url' => '{host}/partnership-group-rule-current',
'private' => true,
),
'list_donations' =>
array (
'method' => 'GET',
'url' => '{host}/donation',
'private' => true,
),
'get_donation' =>
array (
'method' => 'GET',
'url' => '{host}/donation/{donation_id}',
'private' => true,
),
'create_donation' =>
array (
'method' => 'POST',
'url' => '{host}/donation',
'private' => true,
),
'refund_donation' =>
array (
'method' => 'DELETE',
'url' => '{host}/donation/{donation_id}',
'private' => true,
),
'fulfill_pledged_donation' =>
array (
'method' => 'PATCH',
'url' => '{host}/donation/{donation_id}',
'private' => true,
),
'list_donations_history' =>
array (
'method' => 'GET',
'url' => '{host}/history/user-donation',
'private' => true,
),
'list_donation_displays' =>
array (
'method' => 'GET',
'url' => '{host}/donation-display',
'private' => true,
),
'record_donation_display' =>
array (
'method' => 'POST',
'url' => '{host}/donation-display',
'private' => true,
),
'get_donation_display' =>
array (
'method' => 'GET',
'url' => '{host}/donation-display/{donation_display_id}',
'private' => true,
),
'get_donation_report' =>
array (
'method' => 'GET',
'url' => '{host}/donation/statistics/reports',
'private' => true,
),
'round_up_number' =>
array (
'method' => 'POST',
'url' => '{host}/calc/round-up',
'private' => true,
),
),
),
),
'urls' =>
array (
'climatekit' =>
array (
'PROD' => 'solidaire.paygreen.fr',
'SANDBOX' => 'sb-api-climatekit.paygreen.fr',
'RECETTE' => 'rc-api-climatekit.paygreen.fr',
),
'bo_climatekit' =>
array (
'PROD' => 'climatekit.paygreen.fr',
'SANDBOX' => 'sb-climatekit.paygreen.fr',
'RECETTE' => 'rc-climatekit.paygreen.fr',
),
'charitykit' =>
array (
'PROD' => 'solidaire.paygreen.fr',
'SANDBOX' => 'sb-api-climatekit.paygreen.fr',
'RECETTE' => 'rc-api-climatekit.paygreen.fr',
),
'bo_charitykit' =>
array (
'PROD' => 'charitykit.paygreen.fr',
'SANDBOX' => 'sb-charitykit.paygreen.fr',
'RECETTE' => 'rc-charitykit.paygreen.fr',
),
),
'client' =>
array (
'curl' =>
array (
'verify_peer' => false,
),
),
'module' =>
array (
'name' => 'Impact',
),
);
