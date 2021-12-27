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
'kernel' =>
array (
'fixed' => true,
),
'container' =>
array (
'fixed' => true,
),
'bootstrap' =>
array (
'fixed' => true,
),
'autoloader' =>
array (
'fixed' => true,
),
'pathfinder' =>
array (
'fixed' => true,
),
'service.library' =>
array (
'fixed' => true,
),
'service.builder' =>
array (
'fixed' => true,
),
'parameters' =>
array (
'fixed' => true,
),
'parser' =>
array (
'fixed' => true,
),
'diagnostic.media_files_chmod' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'diagnostic',
),
),
'class' => 'PGI\\Impact\\PGFramework\\Services\\Diagnostics\\MediaFilesChmodDiagnostic',
'extends' => 'diagnostic.abstract',
'arguments' =>
array (
0 => '@pathfinder',
),
),
'diagnostic.media_folder_chmod' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'diagnostic',
),
),
'class' => 'PGI\\Impact\\PGFramework\\Services\\Diagnostics\\MediaFolderChmodDiagnostic',
'extends' => 'diagnostic.abstract',
'arguments' =>
array (
0 => '@pathfinder',
),
),
'diagnostic.var_folder_chmod' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'diagnostic',
),
),
'class' => 'PGI\\Impact\\PGFramework\\Services\\Diagnostics\\VarFolderChmodDiagnostic',
'extends' => 'diagnostic.abstract',
'arguments' =>
array (
0 => '@pathfinder',
),
),
'handler.picture' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Handlers\\PictureHandler',
'arguments' =>
array (
0 => '${PGIMPACT_MEDIA_DIR}',
1 => '%{media.baseurl}',
),
),
'handler.cache' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Handlers\\CacheHandler',
'arguments' =>
array (
0 => '%cache',
1 => '@pathfinder',
2 => '@settings',
3 => '@logger',
),
),
'handler.select' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Handlers\\SelectHandler',
'arguments' =>
array (
0 => '@aggregator.selector',
),
),
'handler.mime_type' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Handlers\\MimeTypeHandler',
'arguments' =>
array (
0 => '@logger',
1 => '%mime_types',
),
),
'handler.session' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Handlers\\SessionHandler',
'arguments' =>
array (
0 => '@superglobal.session',
),
),
'handler.upload' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Handlers\\UploadHandler',
'arguments' =>
array (
0 => '@logger',
),
),
'handler.output' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Handlers\\OutputHandler',
),
'handler.cookie' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Handlers\\CookieHandler',
'arguments' =>
array (
0 => '@superglobal.cookie',
1 => '@logger',
),
),
'handler.requirement' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Handlers\\RequirementHandler',
'arguments' =>
array (
0 => '@aggregator.requirement',
1 => '@parser',
2 => '%requirements',
3 => '@logger',
),
),
'handler.hook' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Handlers\\HookHandler',
'arguments' =>
array (
0 => '@aggregator.hook',
1 => '@logger',
),
),
'handler.http' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Handlers\\HTTPHandler',
),
'aggregator.requirement' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'requirement',
'interface' => 'PGI\\Impact\\PGFramework\\Interfaces\\RequirementInterface',
),
'catch' => 'requirement',
),
'aggregator.selector' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'selector',
'interface' => 'PGI\\Impact\\PGFramework\\Interfaces\\SelectorInterface',
),
'catch' => 'selector',
),
'aggregator.hook' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'hook',
),
'catch' => 'hook',
),
'behavior.detailed_logs' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Behaviors\\DetailedLogsBehavior',
'arguments' =>
array (
0 => '@settings',
),
),
'listener.setup.static_files' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Listeners\\InstallStaticFilesListener',
'arguments' =>
array (
0 => '@handler.static_file',
1 => '@logger',
),
),
'dumper' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Dumper',
),
'notifier' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Notifier',
'arguments' =>
array (
0 => '@handler.session',
),
),
'upgrader' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Upgrader',
'arguments' =>
array (
0 => '@aggregator.upgrade',
1 => '@logger',
2 => '%upgrades',
3 => '@aggregator.upgrade',
4 => '@logger',
5 => '%upgrades',
),
),
'superglobal.get' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Services\\Superglobals\\GetSuperglobal',
'extends' => 'superglobal.abstract',
),
'superglobal.post' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Services\\Superglobals\\PostSuperglobal',
'extends' => 'superglobal.abstract',
),
'superglobal.cookie' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Services\\Superglobals\\CookieSuperglobal',
'extends' => 'superglobal.abstract',
),
'superglobal.session' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Superglobals\\SessionSuperglobal',
'arguments' =>
array (
0 => '@logger',
),
),
'officer.setup' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Officers\\SetupOfficer',
),
'generator.csv' =>
array (
'class' => 'PGI\\Impact\\PGFramework\\Services\\Generators\\CSVGenerator',
),
'cron.tab.global' =>
array (
'abstract' => false,
'factory' => 'factory.cron.tab',
'tags' =>
array (
0 =>
array (
'name' => 'cron.tab',
),
),
'extends' => 'cron.tab.abstract',
'arguments' =>
array (
0 => '@storage.crontab.global',
1 => 'global',
),
),
'cron.tab.shop' =>
array (
'abstract' => false,
'factory' => 'factory.cron.tab',
'tags' =>
array (
0 =>
array (
'name' => 'cron.tab',
),
),
'extends' => 'cron.tab.abstract',
'arguments' =>
array (
0 => '@storage.crontab.shop',
1 => 'shop',
),
),
'handler.setup' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Handlers\\SetupHandler',
'arguments' =>
array (
0 => '@broadcaster',
1 => '@officer.setup',
2 => '@settings',
3 => '@logger',
),
),
'handler.behavior' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Handlers\\BehaviorHandler',
'arguments' =>
array (
0 => '@handler.requirement',
1 => '%behaviors',
),
),
'handler.diagnostic' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Handlers\\DiagnosticHandler',
'arguments' =>
array (
0 => '@aggregator.diagnostic',
1 => '@logger',
),
),
'handler.static_file' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Handlers\\StaticFileHandler',
'arguments' =>
array (
0 => '@logger',
1 => '@pathfinder',
2 => '%static',
),
'calls' =>
array (
0 =>
array (
'method' => 'setAssetRepository',
'arguments' =>
array (
0 => '@magento',
),
),
),
),
'storage.crontab.global' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGModule\\Components\\Storages\\Setting',
'arguments' =>
array (
0 => '@settings',
1 => 'crontab_global',
),
'extends' => 'storage.setting.abstract',
),
'storage.crontab.shop' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGModule\\Components\\Storages\\Setting',
'arguments' =>
array (
0 => '@settings',
1 => 'crontab_shop',
),
'extends' => 'storage.setting.abstract',
),
'manager.setting' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Managers\\SettingManager',
'arguments' =>
array (
0 => '@repository.setting',
),
),
'aggregator.upgrade' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'upgrade',
'interface' => 'PGI\\Impact\\PGModule\\Interfaces\\UpgradeInterface',
),
'catch' => 'upgrade',
),
'aggregator.builder.output' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'builder.output',
'interface' => 'PGI\\Impact\\PGModule\\Interfaces\\Builders\\OutputBuilderInterface',
),
'catch' => 'builder.output',
),
'aggregator.diagnostic' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'diagnostic',
),
'catch' => 'diagnostic',
),
'listener.settings.install_default' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Listeners\\InstallDefaultSettingsListener',
'arguments' =>
array (
0 => '@settings',
1 => '@logger',
),
),
'listener.settings.uninstall' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Listeners\\UninstallSettingsListener',
'arguments' =>
array (
0 => '@settings',
1 => '@logger',
),
),
'listener.upgrade' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Listeners\\UpgradeListener',
'arguments' =>
array (
0 => '@upgrader',
1 => '@logger',
),
),
'upgrade.update_settings_values' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGModule\\Services\\Upgrades\\UpdateSettingsValuesUpgrade',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@settings',
),
),
'upgrade.rename_settings' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGModule\\Services\\Upgrades\\RenameSettingsUpgrade',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@manager.setting',
1 => '@manager.shop',
),
),
'upgrade.retrieve_setting_global_value' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGModule\\Services\\Upgrades\\RetrieveSettingGlobalValueUpgrade',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@manager.setting',
1 => '@manager.shop',
2 => '@logger',
),
),
'requirement.generic.setting' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'requirement.abstract',
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'requirement',
),
),
'class' => 'PGI\\Impact\\PGModule\\Services\\Requirements\\GenericSettingRequirement',
'arguments' =>
array (
0 => '@settings',
),
),
'requirement.generic.bridge' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'requirement.abstract',
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'requirement',
),
),
'class' => 'PGI\\Impact\\PGModule\\Services\\Requirements\\GenericBridgeRequirement',
'arguments' =>
array (
0 => '@container',
),
),
'settings' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Settings',
'arguments' =>
array (
0 => '@container',
1 => '@parameters',
2 => '%settings',
),
),
'broadcaster' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Broadcaster',
'arguments' =>
array (
0 => '@container',
1 => '@handler.requirement',
2 => '@parser',
3 => '@logger',
4 => '%listeners',
),
'catch' =>
array (
'tag' => 'listener',
'method' => 'addListener',
'built' => false,
),
),
'provider.output' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Providers\\OutputProvider',
'arguments' =>
array (
0 => '@aggregator.builder.output',
1 => '@handler.requirement',
2 => '%outputs',
3 => '@logger',
),
),
'facade.application' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Facades\\ApplicationFacade',
),
'facade.module' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Facades\\ModuleFacade',
),
'repository.setting' =>
array (
'abstract' => false,
'arguments' =>
array (
0 => '@handler.database',
1 => '%database.entities.setting',
),
'extends' => 'repository.abstract',
'class' => 'PGI\\Impact\\PGModule\\Services\\Repositories\\SettingRepository',
),
'officer.settings.database.basic' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Officers\\SettingsDatabaseOfficer',
'arguments' =>
array (
0 => '@manager.setting',
1 => '@handler.shop',
),
),
'officer.settings.database.global' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Officers\\SettingsDatabaseOfficer',
'arguments' =>
array (
0 => '@manager.setting',
),
),
'officer.settings.storage.basic' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Officers\\SettingsStorageOfficer',
'arguments' =>
array (
0 => '@pathfinder',
1 => '@handler.shop',
),
),
'officer.settings.storage.global' =>
array (
'class' => 'PGI\\Impact\\PGModule\\Services\\Officers\\SettingsStorageOfficer',
'arguments' =>
array (
0 => '@pathfinder',
),
),
'logger' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGLog\\Services\\Logger',
'calls' =>
array (
0 =>
array (
'method' => 'setBehaviorHandler',
'arguments' =>
array (
0 => '@handler.behavior',
),
),
),
'extends' => 'logger.abstract',
'arguments' =>
array (
0 => '@log.writer.default',
),
),
'handler.database' =>
array (
'class' => 'PGI\\Impact\\PGDatabase\\Services\\Handlers\\DatabaseHandler',
'arguments' =>
array (
0 => '@officer.database',
1 => '@parser',
2 => '@pathfinder',
3 => '@logger',
),
),
'listener.database.runner' =>
array (
'class' => 'PGI\\Impact\\PGDatabase\\Services\\Listeners\\GenericDatabaseRunnerListener',
'shared' => false,
'arguments' =>
array (
0 => '@handler.database',
),
),
'upgrade.database' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGDatabase\\Services\\Upgrades\\DatabaseUpgrade',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@handler.database',
),
),
'cleaner.basic_http.not_found' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Cleaners\\BasicHTTPCleaner',
'arguments' =>
array (
0 => 404,
),
),
'cleaner.basic_http.unauthorized_access' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Cleaners\\BasicHTTPCleaner',
'arguments' =>
array (
0 => 401,
),
),
'cleaner.basic_http.server_error' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Cleaners\\BasicHTTPCleaner',
'arguments' =>
array (
0 => 500,
),
),
'cleaner.basic_http.bad_request' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Cleaners\\BasicHTTPCleaner',
'arguments' =>
array (
0 => 400,
),
),
'cleaner.basic_throw' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Cleaners\\BasicThrowCleaner',
),
'acceptor.class' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Acceptors\\ModelAcceptor',
'tags' =>
array (
0 =>
array (
'name' => 'acceptor',
'options' =>
array (
0 => 'class',
),
),
),
),
'acceptor.instance' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Acceptors\\InstanceAcceptor',
'tags' =>
array (
0 =>
array (
'name' => 'acceptor',
'options' =>
array (
0 => 'instance',
),
),
),
),
'acceptor.tag' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Acceptors\\TagAcceptor',
'tags' =>
array (
0 =>
array (
'name' => 'acceptor',
'options' =>
array (
0 => 'tag',
),
),
),
),
'acceptor.action' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Acceptors\\ActionAcceptor',
'tags' =>
array (
0 =>
array (
'name' => 'acceptor',
'options' =>
array (
0 => 'action',
),
),
),
),
'renderer.transformer.paygreen_module_2_array' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Renderers\\Transformers\\PaygreenModuleToArrayTransformerRenderer',
'arguments' =>
array (
0 => '@notifier',
),
),
'renderer.transformer.file_2_http' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Renderers\\Transformers\\FileToHttpTransformerRenderer',
'arguments' =>
array (
0 => '@handler.mime_type',
),
),
'renderer.transformer.array_2_http' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Renderers\\Transformers\\ArrayToHttpTransformerRenderer',
),
'renderer.transformer.string_2_http' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Renderers\\Transformers\\StringToHttpTransformerRenderer',
),
'renderer.transformer.redirection_2_http' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Renderers\\Transformers\\RedirectionToHttpTransformerRenderer',
),
'renderer.processor.write_http' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Renderers\\Processors\\WriteHTTPRendererProcessor',
'arguments' =>
array (
0 => '1.1',
1 => '%http_codes',
),
),
'renderer.processor.output_template' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Renderers\\Processors\\OutputTemplateRendererProcessor',
'arguments' =>
array (
0 => '@handler.view',
1 => '@handler.output',
),
),
'handler.route' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Handlers\\RouteHandler',
'arguments' =>
array (
0 => '%routing.routes',
),
'calls' =>
array (
0 =>
array (
'method' => 'setRequirementHandler',
'arguments' =>
array (
0 => '@handler.requirement',
),
),
),
),
'handler.area' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Handlers\\AreaHandler',
'arguments' =>
array (
0 => '%routing.areas',
),
),
'handler.link' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Handlers\\LinkHandler',
'arguments' =>
array (
0 => '@aggregator.linker',
1 => '@logger',
2 => '@facade.module',
),
),
'aggregator.deflector' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'deflector',
'interface' => 'PGI\\Impact\\PGServer\\Interfaces\\DeflectorInterface',
),
'catch' => 'deflector',
),
'aggregator.linker' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'linker',
'interface' => 'PGI\\Impact\\PGServer\\Interfaces\\LinkerInterface',
),
'catch' => 'linker',
),
'aggregator.acceptor' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'acceptor',
),
'catch' => 'acceptor',
),
'aggregator.controller' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'controller',
),
'catch' => 'controller',
),
'aggregator.action' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'action',
'interface' => 'PGI\\Impact\\PGServer\\Interfaces\\ActionInterface',
),
'catch' => 'action',
),
'dispatcher' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Dispatcher',
'arguments' =>
array (
0 => '@logger',
1 => '@broadcaster',
2 => '@aggregator.controller',
3 => '@aggregator.action',
),
),
'builder.request.default' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Builders\\RequestBuilder',
'arguments' =>
array (
0 => '@superglobal.get',
1 => '@superglobal.post',
2 => '%request_builder.default',
),
),
'router' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Router',
'arguments' =>
array (
0 => '@handler.area',
1 => '@handler.route',
),
),
'derouter' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Derouter',
'arguments' =>
array (
0 => '@aggregator.deflector',
1 => '@logger',
),
),
'factory.trigger' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Factories\\TriggerFactory',
'arguments' =>
array (
0 => '@aggregator.acceptor',
1 => '@logger',
),
),
'factory.stage' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Factories\\StageFactory',
'arguments' =>
array (
0 => '@factory.trigger',
1 => '@logger',
),
),
'handler.translation' =>
array (
'class' => 'PGI\\Impact\\PGIntl\\Services\\Handlers\\TranslationHandler',
'arguments' =>
array (
0 => '@manager.translation',
1 => '@handler.locale',
2 => '@logger',
3 => '%translations',
),
),
'handler.locale' =>
array (
'class' => 'PGI\\Impact\\PGIntl\\Services\\Handlers\\LocaleHandler',
'arguments' =>
array (
0 => '@officer.locale',
),
),
'handler.cache.translation' =>
array (
'class' => 'PGI\\Impact\\PGIntl\\Services\\Handlers\\CacheTranslationHandler',
'arguments' =>
array (
0 => '@pathfinder',
1 => '@settings',
2 => '@logger',
),
),
'plugin.smarty.translator' =>
array (
'class' => 'PGI\\Impact\\PGIntl\\Services\\Plugins\\SmartyTranslatorPlugin',
'arguments' =>
array (
0 => '@translator',
),
'tags' =>
array (
0 =>
array (
'name' => 'plugin.smarty',
'options' =>
array (
0 => 'pgtrans',
1 => 'translateExpression',
),
),
1 =>
array (
'name' => 'plugin.smarty',
'options' =>
array (
0 => 'pgtranslines',
1 => 'translateParagraph',
),
),
),
),
'manager.translation' =>
array (
'class' => 'PGI\\Impact\\PGIntl\\Services\\Managers\\TranslationManager',
'arguments' =>
array (
0 => '@repository.translation',
),
),
'listener.setup.install_default_translations' =>
array (
'class' => 'PGI\\Impact\\PGIntl\\Services\\Listeners\\InsertDefaultTranslationsListener',
'arguments' =>
array (
0 => '@handler.translation',
1 => '@manager.shop',
),
),
'listener.setup.reset_translation_cache' =>
array (
'class' => 'PGI\\Impact\\PGIntl\\Services\\Listeners\\ResetTranslationCacheListener',
'arguments' =>
array (
0 => '@handler.cache.translation',
1 => '@logger',
),
),
'upgrade.translations.install_default_values' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGIntl\\Services\\Upgrades\\InsertDefaultTranslationsHandler',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@handler.translation',
1 => '@manager.shop',
),
),
'upgrade.translations.restore' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGIntl\\Services\\Upgrades\\RestoreTranslationsHandler',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@manager.translation',
1 => '@manager.shop',
2 => '@repository.setting',
3 => '@settings',
),
),
'upgrade.button_labels.restore' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGIntl\\Services\\Upgrades\\RestoreButtonLabelsHandler',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@manager.translation',
1 => '@manager.shop',
2 => '@handler.database',
),
),
'translator' =>
array (
'class' => 'PGI\\Impact\\PGIntl\\Services\\Translator',
'arguments' =>
array (
0 => '@handler.cache.translation',
1 => '@pathfinder',
2 => '@handler.locale',
3 => '@logger',
4 => '%intl',
),
),
'selector.language' =>
array (
'arguments' =>
array (
0 => '@logger',
1 => '%languages',
),
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setTranslator',
'arguments' =>
array (
0 => '@translator',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'selector',
),
),
'extends' => 'selector.abstract',
'class' => 'PGI\\Impact\\PGIntl\\Services\\Selectors\\LanguageSelector',
),
'selector.countries' =>
array (
'arguments' =>
array (
0 => '@logger',
1 => '%countries',
),
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setTranslator',
'arguments' =>
array (
0 => '@translator',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'selector',
),
),
'extends' => 'selector.abstract',
'class' => 'PGI\\Impact\\PGIntl\\Services\\Selectors\\CountrySelector',
),
'repository.translation' =>
array (
'abstract' => false,
'arguments' =>
array (
0 => '@handler.database',
1 => '%database.entities.translation',
2 => '@handler.shop',
),
'extends' => 'repository.abstract',
'class' => 'PGI\\Impact\\PGIntl\\Services\\Repositories\\TranslationRepository',
),
'officer.locale' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Officers\\LocaleOfficer',
'arguments' =>
array (
0 => '@magento',
),
),
'plugin.smarty.view_injecter' =>
array (
'class' => 'PGI\\Impact\\PGView\\Services\\Plugins\\SmartyViewInjecterPlugin',
'arguments' =>
array (
0 => '@handler.view',
),
'tags' =>
array (
0 =>
array (
'name' => 'plugin.smarty',
'options' =>
array (
0 => 'view',
1 => 'insertView',
2 => 'function',
),
),
1 =>
array (
'name' => 'plugin.smarty',
'options' =>
array (
0 => 'template',
1 => 'insertTemplate',
2 => 'function',
),
),
),
),
'plugin.smarty.linker' =>
array (
'class' => 'PGI\\Impact\\PGView\\Services\\Plugins\\SmartyLinkerPlugin',
'arguments' =>
array (
0 => '@handler.link',
),
'tags' =>
array (
0 =>
array (
'name' => 'plugin.smarty',
'options' =>
array (
0 => 'toback',
1 => 'buildBackOfficeUrl',
),
),
1 =>
array (
'name' => 'plugin.smarty',
'options' =>
array (
0 => 'tofront',
1 => 'buildFrontOfficeUrl',
),
),
),
),
'plugin.smarty.picture' =>
array (
'class' => 'PGI\\Impact\\PGView\\Services\\Plugins\\SmartyPicturePlugin',
'arguments' =>
array (
0 => '@handler.static_file',
),
'tags' =>
array (
0 =>
array (
'name' => 'plugin.smarty',
'options' =>
array (
0 => 'picture',
1 => 'buildPictureUrl',
),
),
),
),
'plugin.smarty.clip' =>
array (
'class' => 'PGI\\Impact\\PGView\\Services\\Plugins\\SmartyClipPlugin',
'tags' =>
array (
0 =>
array (
'name' => 'plugin.smarty',
'options' =>
array (
0 => 'clip',
1 => 'clip',
),
),
),
),
'aggregator.view' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'view',
'interface' => 'PGI\\Impact\\PGView\\Interfaces\\ViewInterface',
),
'catch' => 'view',
),
'listener.upgrade.clear_smarty_cache' =>
array (
'class' => 'PGI\\Impact\\PGView\\Services\\Listeners\\ClearSmartyCacheListener',
'arguments' =>
array (
0 => '@handler.smarty',
1 => '@logger',
),
),
'handler.view' =>
array (
'class' => 'PGI\\Impact\\PGView\\Services\\Handlers\\ViewHandler',
'arguments' =>
array (
0 => '@aggregator.view',
1 => '@handler.smarty',
2 => '@pathfinder',
),
),
'view.basic' =>
array (
'class' => 'PGI\\Impact\\PGView\\Services\\View',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
),
'handler.smarty' =>
array (
'class' => 'PGI\\Impact\\PGView\\Services\\Handlers\\SmartyHandler',
'arguments' =>
array (
0 => '@%{smarty.builder.service}',
1 => '@pathfinder',
2 => '@logger.view',
3 => '%smarty',
),
'catch' =>
array (
'tag' => 'plugin.smarty',
'method' => 'installPlugin',
'built' => true,
),
),
'handler.block' =>
array (
'class' => 'PGI\\Impact\\PGView\\Services\\Handlers\\BlockHandler',
'arguments' =>
array (
0 => '@handler.view',
1 => '@handler.requirement',
2 => '@dispatcher',
3 => '%blocks',
),
),
'builder.smarty' =>
array (
'class' => 'PGI\\Impact\\PGView\\Services\\Builders\\SmartyBuilder',
'arguments' =>
array (
0 => '@pathfinder',
1 => '%smarty.builder',
),
),
'log.writer.view' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'log.writer',
),
1 =>
array (
'name' => 'log.writer.file',
),
),
'extends' => 'log.writer.file.abstract',
'class' => 'PGI\\Impact\\PGLog\\Services\\LogWriters\\FileLogWriter',
'arguments' =>
array (
0 => '@dumper',
1 => '@pathfinder',
),
'config' => '%log.outputs.view.config',
),
'logger.view' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGLog\\Services\\Logger',
'calls' =>
array (
0 =>
array (
'method' => 'setBehaviorHandler',
'arguments' =>
array (
0 => '@handler.behavior',
),
),
),
'extends' => 'logger.abstract',
'arguments' =>
array (
0 => '@log.writer.view',
),
),
'view.form' =>
array (
'class' => 'PGI\\Impact\\PGForm\\Services\\Views\\FormView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
),
'view.field' =>
array (
'class' => 'PGI\\Impact\\PGForm\\Services\\Views\\Fields\\BasicFieldView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
),
'view.field.bool.checkbox' =>
array (
'class' => 'PGI\\Impact\\PGForm\\Services\\Views\\Fields\\BoolCheckboxFieldView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
),
'view.field.choice.expanded' =>
array (
'class' => 'PGI\\Impact\\PGForm\\Services\\Views\\Fields\\ChoiceExpandedFieldView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.field.choice.abstract',
'arguments' =>
array (
0 => '@handler.select',
1 => '@translator',
),
),
'view.field.choice.contracted' =>
array (
'class' => 'PGI\\Impact\\PGForm\\Services\\Views\\Fields\\ChoiceContractedFieldView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.field.choice.abstract',
'arguments' =>
array (
0 => '@handler.select',
1 => '@translator',
),
),
'view.field.picture' =>
array (
'class' => 'PGI\\Impact\\PGForm\\Services\\Views\\Fields\\PictureFieldView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
),
'view.field.object' =>
array (
'class' => 'PGI\\Impact\\PGForm\\Services\\Views\\Fields\\CompositeFieldView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
),
'view.field.collection' =>
array (
'class' => 'PGI\\Impact\\PGForm\\Services\\Views\\Fields\\CollectionFieldView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
),
'view.field.choice.double.bool' =>
array (
'class' => 'PGI\\Impact\\PGForm\\Services\\Views\\Fields\\DoubleChoiceBooleanFieldView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.field.choice.abstract',
'arguments' =>
array (
0 => '@handler.select',
1 => '@translator',
),
),
'view.field.choice.filtered' =>
array (
'class' => 'PGFormServicesViewsFieldChoiceFilteredView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.field.choice.abstract',
'arguments' =>
array (
0 => '@handler.select',
1 => '@translator',
),
),
'view.field.colorpicker' =>
array (
'class' => 'PGFormServicesViewsFieldColorPickerView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
),
'validator.length.min' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'validator',
),
),
'extends' => 'validator.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Validators\\LengthMinValidator',
),
'validator.length.max' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'validator',
),
),
'extends' => 'validator.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Validators\\LengthMaxValidator',
),
'validator.regexp' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'validator',
),
),
'extends' => 'validator.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Validators\\RegexpValidator',
),
'validator.array.in' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'validator',
),
),
'extends' => 'validator.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Validators\\ArrayInValidator',
'arguments' =>
array (
0 => '@handler.select',
),
),
'validator.not_empty' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'validator',
),
),
'extends' => 'validator.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Validators\\NotEmptyValidator',
),
'validator.range' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'validator',
),
),
'extends' => 'validator.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Validators\\RangeValidator',
),
'aggregator.formatter' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'formatter',
'interface' => 'PGI\\Impact\\PGForm\\Interfaces\\FormatterInterface',
),
'catch' => 'formatter',
),
'aggregator.validator' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'validator',
'interface' => 'PGI\\Impact\\PGForm\\Interfaces\\ValidatorInterface',
),
'catch' => 'validator',
),
'builder.form' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Builders\\FormBuilder',
'arguments' =>
array (
0 => '@builder.field',
1 => '@logger',
2 => '@aggregator.view',
3 => '%form',
),
'calls' =>
array (
0 =>
array (
'method' => 'setFormKey',
'arguments' =>
array (
0 => '@magento',
),
),
),
),
'builder.field' =>
array (
'class' => 'PGI\\Impact\\PGForm\\Services\\Builders\\FieldBuilder',
'arguments' =>
array (
0 => '@container',
1 => '@builder.validator',
2 => '@aggregator.formatter',
3 => '@handler.behavior',
4 => '@aggregator.view',
5 => '@logger',
6 => '%fields',
7 => '@handler.requirement',
),
),
'builder.validator' =>
array (
'class' => 'PGI\\Impact\\PGForm\\Services\\Builders\\ValidatorBuilder',
'arguments' =>
array (
0 => '@aggregator.validator',
),
),
'formatter.string' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'formatter',
),
),
'extends' => 'formatter.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Formatters\\StringFormatter',
),
'formatter.int' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'formatter',
),
),
'extends' => 'formatter.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Formatters\\IntegerFormatter',
),
'formatter.float' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'formatter',
),
),
'extends' => 'formatter.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Formatters\\FloatFormatter',
),
'formatter.array' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'formatter',
),
),
'extends' => 'formatter.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Formatters\\ArrayFormatter',
),
'formatter.object' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'formatter',
),
),
'extends' => 'formatter.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Formatters\\ObjectFormatter',
),
'formatter.bool' =>
array (
'abstract' => false,
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'formatter',
),
),
'extends' => 'formatter.abstract',
'class' => 'PGI\\Impact\\PGForm\\Services\\Formatters\\BooleanFormatter',
),
'log.writer.api' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'log.writer',
),
1 =>
array (
'name' => 'log.writer.file',
),
),
'extends' => 'log.writer.file.abstract',
'class' => 'PGI\\Impact\\PGLog\\Services\\LogWriters\\FileLogWriter',
'arguments' =>
array (
0 => '@dumper',
1 => '@pathfinder',
),
'config' => '%log.outputs.api.config',
),
'handler.shop' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\Handlers\\ShopHandler',
'arguments' =>
array (
0 => '@logger',
),
'calls' =>
array (
0 =>
array (
'method' => 'setShopManager',
'arguments' =>
array (
0 => '@manager.shop',
),
),
1 =>
array (
'method' => 'setSessionHandler',
'arguments' =>
array (
0 => '@handler.session',
),
),
2 =>
array (
'method' => 'setShopOfficer',
'arguments' =>
array (
0 => '@officer.shop',
),
),
),
),
'manager.shop' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\Managers\\ShopManager',
'arguments' =>
array (
0 => '@repository.shop',
),
),
'manager.cart' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\Managers\\CartManager',
'arguments' =>
array (
0 => '@repository.cart',
),
'calls' =>
array (
0 =>
array (
'method' => 'setCartOfficer',
'arguments' =>
array (
0 => '@officer.cart',
),
),
),
),
'manager.order' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\Managers\\OrderManager',
'arguments' =>
array (
0 => '@repository.order',
),
'calls' =>
array (
0 =>
array (
'method' => 'setOrderStateMapper',
'arguments' =>
array (
0 => '@mapper.order_state',
),
),
1 =>
array (
'method' => 'setBroadcaster',
'arguments' =>
array (
0 => '@broadcaster',
),
),
2 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
),
'manager.customer' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\Managers\\CustomerManager',
'arguments' =>
array (
0 => '@repository.customer',
),
),
'manager.address' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\Managers\\AddressManager',
'arguments' =>
array (
0 => '@repository.address',
),
),
'manager.product' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\Managers\\ProductManager',
'arguments' =>
array (
0 => '@repository.product',
),
),
'manager.category' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\Managers\\CategoryManager',
'arguments' =>
array (
0 => '@repository.category',
),
'calls' =>
array (
0 =>
array (
'method' => 'setShopHandler',
'arguments' =>
array (
0 => '@handler.shop',
),
),
),
),
'manager.order_state' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\Managers\\OrderStateManager',
'arguments' =>
array (
0 => '@repository.order_state',
1 => '@factory.order_state_machine',
2 => '@mapper.order_state',
),
),
'upgrade.database.shopified' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGShop\\Services\\Upgrades\\DatabaseShopifiedUpgrade',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@handler.database',
1 => '@handler.shop',
),
),
'factory.order_state_machine' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\Factories\\OrderStateMachineFactory',
'arguments' =>
array (
0 => '%order.machines',
),
),
'mapper.order_state' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\Mappers\\OrderStateMapper',
'arguments' =>
array (
0 => '%order.states',
),
'catch' =>
array (
'tag' => 'mapper.strategy.order_state',
'method' => 'addMapperStrategy',
'built' => true,
),
),
'strategy.order_state_mapper.settings' =>
array (
'class' => 'PGI\\Impact\\PGShop\\Services\\OrderStateMappingStrategies\\SettingsOrderStateMappingStrategy',
'arguments' =>
array (
0 => '@settings',
),
'calls' =>
array (
0 =>
array (
'method' => 'setOrderStateManager',
'arguments' =>
array (
0 => '@manager.order_state',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'mapper.strategy.order_state',
'options' =>
array (
0 => 'settings',
),
),
),
),
'selector.category.hierarchized' =>
array (
'arguments' =>
array (
0 => '@logger',
),
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setTranslator',
'arguments' =>
array (
0 => '@translator',
),
),
1 =>
array (
'method' => 'setCategoryManager',
'arguments' =>
array (
0 => '@manager.category',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'selector',
),
),
'extends' => 'selector.abstract',
'class' => 'PGI\\Impact\\PGShop\\Services\\Selectors\\HierarchizedCategorySelector',
),
'repository.shop' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Repositories\\ShopRepository',
),
'repository.cart' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Repositories\\CartRepository',
),
'repository.order' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Repositories\\OrderRepository',
),
'repository.customer' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Repositories\\CustomerRepository',
),
'repository.address' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Repositories\\AddressRepository',
),
'repository.product' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Repositories\\ProductRepository',
),
'repository.cart_item' =>
array (
),
'repository.category' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Repositories\\CategoryRepository',
),
'repository.order_state' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Repositories\\OrderStateRepository',
'arguments' =>
array (
0 => '%order.states',
),
),
'officer.post_payment' =>
array (
),
'officer.cart' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'service.abstract',
'class' => 'PGI\\Impact\\PGMagento\\Services\\Officers\\CartOfficer',
'arguments' =>
array (
0 => '@local.repository.quote',
),
),
'aggregator.cron.tab' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'cron.tab',
'interface' => 'PGI\\Impact\\PGCron\\Interfaces\\CronTabInterface',
),
'catch' => 'cron.tab',
),
'aggregator.cron.task' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'cron.task',
'interface' => 'PGI\\Impact\\PGCron\\Interfaces\\CronTaskInterface',
),
'catch' => 'cron.task',
),
'listener.cron.tabs.pre_filling' =>
array (
'class' => 'PGI\\Impact\\PGCron\\Services\\Listeners\\PreFillingCronTabsListener',
'arguments' =>
array (
0 => '@aggregator.cron.tab',
1 => '@logger',
),
),
'listener.cron.tabs.cleaning' =>
array (
'class' => 'PGI\\Impact\\PGCron\\Services\\Listeners\\CleaningCronTabsListener',
'arguments' =>
array (
0 => '@aggregator.cron.tab',
1 => '@logger',
),
),
'scheduler' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'service.abstract',
'class' => 'PGI\\Impact\\PGCron\\Services\\Scheduler',
'arguments' =>
array (
0 => '@aggregator.cron.tab',
1 => '@builder.cron.task',
),
),
'selector.cron_activation_mode' =>
array (
'arguments' =>
array (
0 => '@logger',
1 => '%data.cron_activation_mode',
),
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setTranslator',
'arguments' =>
array (
0 => '@translator',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'selector',
),
),
'extends' => 'selector.abstract',
'class' => 'PGI\\Impact\\PGFramework\\Services\\Selectors\\StaticArraySelector',
),
'builder.cron.task' =>
array (
'class' => 'PGI\\Impact\\PGCron\\Services\\Builders\\CronTaskBuilder',
'arguments' =>
array (
0 => '@aggregator.cron.task',
1 => '@parser',
),
'config' =>
array (
'tasks' => '%tasks',
),
),
'factory.cron.tab' =>
array (
'class' => 'PGI\\Impact\\PGCron\\Services\\Factories\\CronTabFactory',
'arguments' =>
array (
0 => '%tasks',
),
),
'handler.log.file' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'service.abstract',
'class' => 'PGI\\Impact\\PGLog\\Services\\Handlers\\LogFileHandler',
'arguments' =>
array (
0 => '@aggregator.log.writer.file',
1 => '@pathfinder',
),
'config' => '%log.archive.file',
),
'aggregator.log.writer.file' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGFramework\\Components\\Aggregator',
'arguments' =>
array (
0 => '@container',
),
'extends' => 'aggregator.abstract',
'config' =>
array (
'type' => 'log.writer',
'interface' => 'PGI\\Impact\\PGLog\\Interfaces\\LogWriterFileInterface',
),
'catch' => 'log.writer.file',
),
'log.writer.default' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'log.writer',
),
1 =>
array (
'name' => 'log.writer.file',
),
),
'extends' => 'log.writer.file.abstract',
'class' => 'PGI\\Impact\\PGLog\\Services\\LogWriters\\FileLogWriter',
'arguments' =>
array (
0 => '@dumper',
1 => '@pathfinder',
),
'config' => '%log.outputs.default.config',
),
'cron.task.log.cleaning' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'cron.task.abstract',
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'cron.task',
),
),
'class' => 'PGI\\Impact\\PGLog\\Services\\CronTasks\\LogFileCleanerCronTask',
'arguments' =>
array (
0 => '@handler.log.file',
),
),
'cron.task.log.zipping' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'cron.task.abstract',
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'cron.task',
),
),
'class' => 'PGI\\Impact\\PGLog\\Services\\CronTasks\\LogFileZipperCronTask',
'arguments' =>
array (
0 => '@handler.log.file',
),
),
'controller.backoffice.shop' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Controllers\\ShopController',
'arguments' =>
array (
0 => '@handler.shop',
1 => '@manager.shop',
2 => '@handler.menu',
),
),
'controller.backoffice.error' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Controllers\\ErrorController',
),
'controller.backoffice.diagnostic' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
6 =>
array (
'method' => 'setDiagnosticHandler',
'arguments' =>
array (
0 => '@handler.diagnostic',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Controllers\\DiagnosticController',
),
'controller.backoffice.logs' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Controllers\\LogsController',
'arguments' =>
array (
0 => '@pathfinder',
),
),
'controller.backoffice.system' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Controllers\\SystemController',
'arguments' =>
array (
0 => '@facade.application',
1 => '@kernel',
),
),
'controller.backoffice.release_note' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Controllers\\ReleaseNoteController',
'arguments' =>
array (
0 => '@pathfinder',
1 => '@logger',
),
),
'controller.backoffice.cache' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Controllers\\CacheController',
'arguments' =>
array (
0 => '@handler.cache',
),
),
'controller.backoffice.cron' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Controllers\\CronController',
'arguments' =>
array (
0 => '@scheduler',
),
),
'view.menu' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Views\\MenuView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
'arguments' =>
array (
0 => '@handler.menu',
1 => '@manager.shop',
2 => '@handler.shop',
3 => '@parameters',
),
),
'view.notifications' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Views\\NotificationsView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
'arguments' =>
array (
0 => '@notifier',
),
),
'view.system.paths' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Views\\SystemPathsView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
'arguments' =>
array (
0 => '@pathfinder',
),
),
'view.block.diagnostics' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Views\\Blocks\\DiagnosticBlockView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
'arguments' =>
array (
0 => '@handler.diagnostic',
),
),
'view.block.logs' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Views\\Blocks\\LogBlockView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
'arguments' =>
array (
0 => '@pathfinder',
),
),
'view.block.server' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Views\\Blocks\\ServerBlockView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
'arguments' =>
array (
0 => '@handler.server',
),
),
'view.block.standardized.config_form' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Views\\Blocks\\StandardizedConfigurationFormBlockView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
1 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
2 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
3 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
4 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
),
'builder.output.back_office_paygreen' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'builder.output',
),
),
'extends' => 'builder.output.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\OutputBuilders\\BackOfficeOutputBuilder',
'arguments' =>
array (
0 => '@server.backoffice',
1 => '@handler.output',
2 => '@handler.menu',
),
),
'action.support_configuration.save' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_save_settings.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedSaveSettingsAction',
'arguments' =>
array (
0 => '@builder.form',
1 => '@settings',
),
'config' =>
array (
'form_name' => 'settings_support',
'redirection' => 'backoffice.support.display',
),
),
'action.home.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'home',
),
),
'action.support.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'support',
'static' =>
array (
'js' =>
array (
0 => '/js/page-support.js',
),
),
),
),
'action.release_note.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'release_note',
),
),
'action.system.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'system',
),
),
'action.products.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'products',
),
),
'action.cron.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'cron',
),
),
'action.cron_configuration.save' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_save_settings.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedSaveSettingsAction',
'arguments' =>
array (
0 => '@builder.form',
1 => '@settings',
),
'config' =>
array (
'form_name' => 'cron',
'redirection' => 'backoffice.cron.display',
),
),
'handler.menu' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Handlers\\MenuHandler',
'arguments' =>
array (
0 => '@handler.route',
1 => '@handler.link',
2 => '%menu',
),
),
'handler.server' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Handlers\\ServerHandler',
'arguments' =>
array (
0 => '@settings',
),
'calls' =>
array (
0 =>
array (
'method' => 'addServer',
'arguments' =>
array (
0 => 'blocks.tree.tree_products.title',
1 => 'tree_api_server',
),
),
1 =>
array (
'method' => 'addServer',
'arguments' =>
array (
0 => 'blocks.charity.charity_products.title',
1 => 'charity_api_server',
),
),
),
),
'plugin.smarty.bool' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Plugins\\SmartyBoolPlugin',
'arguments' =>
array (
0 => '@translator',
),
'tags' =>
array (
0 =>
array (
'name' => 'plugin.smarty',
'options' =>
array (
0 => 'pgbool',
1 => 'writeBoolean',
),
),
),
),
'deflector.filter.shop_context' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
1 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'deflector',
),
),
'extends' => 'deflector.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Deflectors\\ShopContext',
'arguments' =>
array (
0 => '@handler.route',
),
),
'listener.action.shop_context_backoffice' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Listeners\\ShopContextBackofficeListener',
'arguments' =>
array (
0 => '@notifier',
1 => '@handler.shop',
),
),
'listener.action.display_support_page' =>
array (
'class' => 'PGI\\Impact\\BOModule\\Services\\Listeners\\DisplaySupportPageBackofficeListener',
'arguments' =>
array (
0 => '@notifier',
1 => '@handler.shop',
),
),
'builder.request.backoffice' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Builders\\RequestBuilder',
'arguments' =>
array (
0 => '@superglobal.get',
1 => '@superglobal.post',
2 => '%request_builder.backoffice',
),
),
'server.backoffice' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGServer\\Services\\Server',
'arguments' =>
array (
0 => '@router',
1 => '@derouter',
2 => '@dispatcher',
3 => '@logger',
4 => '@factory.stage',
5 => '%servers.backoffice',
),
'extends' => 'server.abstract',
),
'cleaner.forward.message_page' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Cleaners\\ForwardCleaner',
'arguments' =>
array (
0 => 'displayException@backoffice.error',
),
),
'builder.translation_form' =>
array (
'class' => 'PGI\\Impact\\PGIntl\\Services\\Builders\\TranslationFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
1 => '@builder.field',
2 => '%translations',
),
),
'controller.front.notification' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\FOModule\\Services\\Controllers\\NotificationController',
),
'controller.front.cron' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\FOModule\\Services\\Controllers\\CronController',
'arguments' =>
array (
0 => '@scheduler',
),
),
'builder.output.front_office_paygreen' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'builder.output',
),
),
'extends' => 'builder.output.abstract',
'class' => 'PGI\\Impact\\FOModule\\Services\\OutputBuilders\\FrontOfficeOutputBuilder',
'arguments' =>
array (
0 => '@server.front',
1 => '@handler.output',
),
),
'builder.output.global_front_office_paygreen' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'builder.output',
),
),
'extends' => 'builder.output.abstract.static_files',
'class' => 'PGI\\Impact\\PGModule\\Services\\OutputBuilders\\StaticFilesOutputBuilder',
'config' =>
array (
'css' =>
array (
0 => '/css/global-frontoffice.css',
),
),
),
'builder.output.cron_launcher' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'builder.output',
),
),
'extends' => 'builder.output.abstract',
'class' => 'PGI\\Impact\\FOModule\\Services\\OutputBuilders\\CronLauncherOutputBuilder',
'arguments' =>
array (
0 => '@handler.link',
1 => '@settings',
),
),
'builder.request.frontoffice' =>
array (
'class' => 'PGI\\Impact\\PGServer\\Services\\Builders\\RequestBuilder',
'arguments' =>
array (
0 => '@superglobal.get',
1 => '@superglobal.post',
2 => '%request_builder.frontoffice',
),
),
'server.front' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGServer\\Services\\Server',
'arguments' =>
array (
0 => '@router',
1 => '@derouter',
2 => '@dispatcher',
3 => '@logger',
4 => '@factory.stage',
5 => '%servers.front',
),
'extends' => 'server.abstract',
),
'upgrade.reset_green_access_settings' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGGreen\\Services\\Upgrades\\ResetGreenAccessSettingsUpgrade',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@manager.setting',
1 => '@handler.shop',
2 => '@logger',
),
),
'handler.tree_authentication' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Handlers\\TreeAuthenticationHandler',
'arguments' =>
array (
0 => '@facade.api.tree',
1 => '@factory.api.tree',
2 => '@settings',
3 => '@logger',
),
),
'handler.tree_carbon_offsetting' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Handlers\\TreeCarbonOffsettingHandler',
'arguments' =>
array (
0 => '@facade.api.tree',
1 => '@handler.tree_footprint_id',
2 => '@broadcaster',
3 => '@handler.requirement',
4 => '@manager.carbon_data',
5 => '@logger',
),
),
'handler.tree_footprint_id' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Handlers\\TreeFootprintIdHandler',
'arguments' =>
array (
0 => '@handler.cookie',
1 => '@handler.shop',
2 => '@settings',
3 => '@logger',
4 => '@facade.api.tree',
),
),
'handler.page_counter' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Handlers\\PageCounterHandler',
'arguments' =>
array (
0 => '@handler.cookie',
),
),
'handler.tree.catalog' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Handlers\\TreeCatalogHandler',
'arguments' =>
array (
0 => '@manager.product',
1 => '@handler.cache',
2 => '@translator',
3 => '@filter.product_reference',
4 => '@filter.product_name',
5 => '@parameters',
),
),
'handler.tree_account' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Handlers\\TreeAccountHandler',
'arguments' =>
array (
0 => '@handler.tree_authentication',
1 => '@facade.api.tree',
2 => '@handler.cache',
3 => '@settings',
4 => '@logger',
),
),
'manager.carbon_data' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Managers\\CarbonDataManager',
'arguments' =>
array (
0 => '@repository.carbon_data',
),
),
'listener.carbon_offsetting_computing.adding_web_data' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Listeners\\CarbonOffsettingComputingWebListener',
'arguments' =>
array (
0 => '@facade.api.tree',
1 => '@handler.page_counter',
2 => '@logger',
),
),
'listener.carbon_offsetting_computing.setting_transport_data' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Listeners\\CarbonOffsettingComputingTransportationListener',
'arguments' =>
array (
0 => '@facade.api.tree',
1 => '@translator',
2 => '@settings',
3 => '@parameters',
4 => '@logger',
),
),
'listener.carbon_offsetting_computing.setting_product_data' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Listeners\\CarbonOffsettingComputingProductListener',
'arguments' =>
array (
0 => '@facade.api.tree',
1 => '@filter.product_reference',
2 => '@logger',
),
),
'listener.tree.page_counting' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Listeners\\PageCountingListener',
'arguments' =>
array (
0 => '@handler.page_counter',
1 => '@logger',
),
),
'upgrade.fix_tree_access_token' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGGreen\\Services\\Upgrades\\FixGreenAccessTokenSettingUpgrade',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@manager.setting',
1 => '@handler.shop',
2 => '@handler.tree_authentication',
3 => '@logger',
),
),
'requirement.tree_access_available' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'requirement.abstract',
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'requirement',
),
),
'class' => 'PGI\\Impact\\PGTree\\Services\\Requirements\\TreeAccessAvailableRequirement',
'arguments' =>
array (
0 => '@handler.tree_account',
),
),
'filter.product_reference' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Filters\\ProductReferenceFilter',
),
'filter.product_name' =>
array (
'class' => 'PGI\\Impact\\PGTree\\Services\\Filters\\ProductNameFilter',
),
'repository.carbon_data' =>
array (
'abstract' => false,
'arguments' =>
array (
0 => '@handler.database',
1 => '%database.entities.carbon_data',
),
'extends' => 'repository.abstract',
'class' => 'PGI\\Impact\\PGTree\\Services\\Repositories\\CarbonDataRepository',
),
'facade.api.tree' =>
array (
'factory' => 'factory.api.tree',
),
'listener.setup.tree_client_compatibility_checker' =>
array (
'class' => 'PGI\\Impact\\APITree\\Services\\Listeners\\InstallCompatibilityCheckListener',
'arguments' =>
array (
0 => '@facade.api.tree',
),
),
'factory.api.tree' =>
array (
'class' => 'PGI\\Impact\\APITree\\Services\\Factories\\ApiFacadeFactory',
'arguments' =>
array (
0 => '@logger.api_tree',
1 => '@settings',
2 => '@parameters',
3 => '@facade.application',
4 => '@handler.requirement',
),
),
'logger.api_tree' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGLog\\Services\\Logger',
'calls' =>
array (
0 =>
array (
'method' => 'setBehaviorHandler',
'arguments' =>
array (
0 => '@handler.behavior',
),
),
),
'extends' => 'logger.abstract',
'arguments' =>
array (
0 => '@log.writer.api',
),
),
'controller.backoffice.tree' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
6 =>
array (
'method' => 'setTreeAuthenticationHandler',
'arguments' =>
array (
0 => '@handler.tree_authentication',
),
),
7 =>
array (
'method' => 'setTreeAccountHandler',
'arguments' =>
array (
0 => '@handler.tree_account',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOTree\\Services\\Controllers\\PluginController',
),
'controller.backoffice.tree_account' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
6 =>
array (
'method' => 'setTreeAuthenticationHandler',
'arguments' =>
array (
0 => '@handler.tree_authentication',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOTree\\Services\\Controllers\\AccountController',
),
'controller.backoffice.tree_export_product_catalog' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOTree\\Services\\Controllers\\ExportProductCatalogController',
'arguments' =>
array (
0 => '@generator.csv',
1 => '@handler.tree.catalog',
2 => '@facade.api.tree',
),
),
'action.tree_shipping_address.save' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_save_settings.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedSaveSettingsAction',
'arguments' =>
array (
0 => '@builder.form',
1 => '@settings',
),
'config' =>
array (
'form_name' => 'tree_shipping_address',
'redirection' => 'backoffice.tree_config.display',
),
),
'action.tree_kit_activation.save' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_save_settings.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedSaveSettingsAction',
'arguments' =>
array (
0 => '@builder.form',
1 => '@settings',
),
'config' =>
array (
'form_name' => 'tree_kit_activation',
'redirection' => 'backoffice.home.display',
),
),
'action.tree_account.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'tree_account',
),
),
'action.tree_config.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'tree_config',
),
),
'action.carbon_bot_config.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'carbon_bot_config',
),
),
'action.carbon_bot_config_global_form.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_form_settings_block.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedFormSettingsBlockAction',
'config' =>
array (
'form_name' => 'carbon_bot_config_global',
'form_action' => 'backoffice.carbon_bot_config_global_form.save',
),
),
'action.tree_bot_form.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.abstract',
'class' => 'PGI\\Impact\\BOTree\\Services\\Actions\\DisplayCarbonBotConfigurationFormAction',
),
'action.carbon_bot_config_global_form.save' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_save_settings.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedSaveSettingsAction',
'arguments' =>
array (
0 => '@builder.form',
1 => '@settings',
),
'config' =>
array (
'form_name' => 'carbon_bot_config_global',
'redirection' => 'backoffice.carbon_bot_config.display',
),
),
'action.tree_bot_form.save' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_save_settings.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedSaveSettingsAction',
'arguments' =>
array (
0 => '@builder.form',
1 => '@settings',
),
'config' =>
array (
'form_name' => 'tree_bot',
'redirection' => 'backoffice.carbon_bot_config.display',
),
),
'action.tree_module_config.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_form_settings_block.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedFormSettingsBlockAction',
'config' =>
array (
'form_name' => 'tree_config',
'form_action' => 'backoffice.tree_config.save',
),
),
'action.tree_shipping_address.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_form_settings_block.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedFormSettingsBlockAction',
'config' =>
array (
'form_name' => 'tree_shipping_address',
'form_action' => 'backoffice.tree_shipping_address.save',
),
),
'action.tree_translations.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'tree_translations',
),
),
'action.tree_translations_form.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_translations_form_block.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedFormTranslationsBlockAction',
'arguments' =>
array (
0 => '@builder.translation_form',
1 => '@handler.translation',
),
'config' =>
array (
'translation_tag' => 'tree',
'form_action' => 'backoffice.tree_translations.save',
),
),
'action.tree_translations_form.save' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_save_translations_form.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedSaveTranslationsFormAction',
'arguments' =>
array (
0 => '@builder.translation_form',
1 => '@handler.translation',
2 => '@manager.translation',
),
'config' =>
array (
'translation_tag' => 'tree',
'redirect_to' => 'tree_translations',
),
),
'action.tree_bot_translations_form.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_translations_form_block.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedFormTranslationsBlockAction',
'arguments' =>
array (
0 => '@builder.translation_form',
1 => '@handler.translation',
),
'config' =>
array (
'translation_tag' => 'tree_bot',
'form_action' => 'backoffice.tree_bot_translations.save',
),
),
'action.tree_bot_translations_form.save' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_save_translations_form.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedSaveTranslationsFormAction',
'arguments' =>
array (
0 => '@builder.translation_form',
1 => '@handler.translation',
2 => '@manager.translation',
),
'config' =>
array (
'translation_tag' => 'tree_bot',
'redirect_to' => 'carbon_bot_config',
),
),
'action.tree_configuration.save' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_save_settings.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedSaveSettingsAction',
'arguments' =>
array (
0 => '@builder.form',
1 => '@settings',
),
'config' =>
array (
'form_name' => 'tree_config',
'redirection' => 'backoffice.tree_config.display',
),
),
'listener.tree_action.display_backoffice' =>
array (
'class' => 'PGI\\Impact\\BOTree\\Services\\Listeners\\DisplayBackofficeNotificationListener',
'arguments' =>
array (
0 => '@notifier',
1 => '@handler.tree_authentication',
),
),
'listener.tree_action.shipping_address' =>
array (
'class' => 'PGI\\Impact\\BOTree\\Services\\Listeners\\ShippingAddressListener',
'arguments' =>
array (
0 => '@notifier',
1 => '@handler.tree_authentication',
2 => '@settings',
),
),
'listener.tree_action.display_tree_test_mode_expiration_notification' =>
array (
'class' => 'PGI\\Impact\\BOTree\\Services\\Listeners\\DisplayTestModeExpirationNotificationListener',
'arguments' =>
array (
0 => '@notifier',
1 => '@handler.tree_account',
),
),
'controller.front.tree.climatebot' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\FOTree\\Services\\Controllers\\ClimateBotController',
'arguments' =>
array (
0 => '@manager.customer',
1 => '@manager.cart',
2 => '@handler.view',
3 => '@handler.tree_carbon_offsetting',
4 => '@handler.carbon_rounder',
),
),
'builder.output.carbon_footprint' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'builder.output',
),
),
'extends' => 'builder.output.abstract',
'class' => 'PGI\\Impact\\FOTree\\Services\\OutputBuilders\\CarbonFootprintOutputBuilder',
'arguments' =>
array (
0 => '@manager.carbon_data',
1 => '@handler.carbon_rounder',
2 => '@logger',
3 => '@settings',
),
),
'builder.output.carbon_bot' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'builder.output',
),
),
'extends' => 'builder.output.abstract',
'class' => 'PGI\\Impact\\FOTree\\Services\\OutputBuilders\\CarbonBotOutputBuilder',
'arguments' =>
array (
0 => '@handler.link',
1 => '@settings',
),
),
'handler.carbon_rounder' =>
array (
'class' => 'PGI\\Impact\\FOTree\\Services\\Handlers\\CarbonRounderHandler',
'arguments' =>
array (
0 => '@handler.locale',
),
),
'listener.carbon_footprint.finalization' =>
array (
'class' => 'PGI\\Impact\\FOTree\\Services\\Listeners\\CarbonFootprintFinalizationListener',
'arguments' =>
array (
0 => '@handler.tree_carbon_offsetting',
1 => '@repository.carbon_data',
2 => '@logger',
),
),
'diagnostic.charity_gift' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'diagnostic',
),
),
'class' => 'PGI\\Impact\\PGCharity\\Services\\Diagnostics\\CharityGiftDiagnostic',
'extends' => 'diagnostic.abstract',
'arguments' =>
array (
0 => '@handler.charity_gift',
1 => '@logger',
),
),
'handler.charity_authentication' =>
array (
'class' => 'PGI\\Impact\\PGCharity\\Services\\Handlers\\CharityAuthenticationHandler',
'arguments' =>
array (
0 => '@facade.api.charity',
1 => '@factory.api.charity',
2 => '@settings',
3 => '@logger',
4 => '@broadcaster',
),
),
'handler.charity_association' =>
array (
'class' => 'PGI\\Impact\\PGCharity\\Services\\Handlers\\CharityAssociationHandler',
'arguments' =>
array (
0 => '@facade.api.charity',
1 => '@handler.cache',
2 => '@logger',
),
),
'handler.charity_cart' =>
array (
'class' => 'PGI\\Impact\\PGCharity\\Services\\Handlers\\CharityCartHandler',
'arguments' =>
array (
0 => '@manager.cart',
1 => '@handler.charity_gift',
2 => '@manager.product',
3 => '@logger',
),
),
'handler.charity' =>
array (
'class' => 'PGI\\Impact\\PGCharity\\Services\\Handlers\\CharityHandler',
'arguments' =>
array (
0 => '@handler.charity_cart',
1 => '@handler.charity_partnership',
2 => '@handler.charity_gift',
3 => '@facade.api.charity',
4 => '@handler.session',
5 => '@manager.gift',
6 => '@handler.shop',
7 => '@settings',
8 => '@logger',
),
),
'handler.charity_partnership' =>
array (
'class' => 'PGI\\Impact\\PGCharity\\Services\\Handlers\\CharityPartnershipHandler',
'arguments' =>
array (
0 => '@facade.api.charity',
1 => '@handler.cache',
2 => '@settings',
3 => '@logger',
),
),
'handler.charity_gift' =>
array (
'class' => 'PGI\\Impact\\PGCharity\\Services\\Handlers\\CharityGiftHandler',
'arguments' =>
array (
0 => '@manager.product',
1 => '@officer.charity_gift',
2 => '@handler.shop',
),
),
'handler.charity_account' =>
array (
'class' => 'PGI\\Impact\\PGCharity\\Services\\Handlers\\CharityAccountHandler',
'arguments' =>
array (
0 => '@handler.charity_authentication',
1 => '@facade.api.charity',
2 => '@handler.cache',
3 => '@settings',
4 => '@logger',
),
),
'manager.gift' =>
array (
'class' => 'PGI\\Impact\\PGCharity\\Services\\Managers\\GiftManager',
'arguments' =>
array (
0 => '@repository.gift',
),
),
'listener.setup.charity_gift_product' =>
array (
'class' => 'PGI\\Impact\\PGCharity\\Services\\Listeners\\SetupCharityGiftProductListener',
'arguments' =>
array (
0 => '@handler.charity_gift',
1 => '@logger',
),
),
'upgrade.install_charity_gift_product' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGCharity\\Services\\Upgrades\\InstallCharityGiftProductUpgrade',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@handler.charity_gift',
),
),
'upgrade.fix_charity_access_token' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGGreen\\Services\\Upgrades\\FixGreenAccessTokenSettingUpgrade',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@manager.setting',
1 => '@handler.shop',
2 => '@handler.charity_authentication',
3 => '@logger',
),
),
'requirement.charity_access_available' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'requirement.abstract',
'shared' => false,
'tags' =>
array (
0 =>
array (
'name' => 'requirement',
),
),
'class' => 'PGI\\Impact\\PGCharity\\Services\\Requirements\\CharityAccessAvailableRequirement',
'arguments' =>
array (
0 => '@handler.charity_account',
),
),
'repository.gift' =>
array (
'abstract' => false,
'arguments' =>
array (
0 => '@handler.database',
1 => '%database.entities.gift',
),
'extends' => 'repository.abstract',
'class' => 'PGI\\Impact\\PGCharity\\Services\\Repositories\\GiftRepository',
),
'officer.charity_gift' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'service.abstract',
'class' => 'PGI\\Impact\\PGMagentoCharity\\Services\\Officers\\CharityGiftOfficer',
'arguments' =>
array (
0 => '@local.factory.product',
1 => '@local.repository.product',
2 => '@local.app.state',
3 => '@manager.product',
4 => '@settings',
5 => '@officer.charity_gift.picture',
6 => '@officer.charity_gift.translation',
7 => '@officer.charity_gift.stock',
),
'config' =>
array (
'gift_name' => '%data.charity_gift.name',
'gift_reference' => '%data.charity_gift.reference',
'gift_primary_setting' => 'charity_gift_id',
),
),
'facade.api.charity' =>
array (
'factory' => 'factory.api.charity',
),
'listener.setup.charity_client_compatibility_checker' =>
array (
'class' => 'PGI\\Impact\\APICharity\\Services\\Listeners\\InstallCompatibilityCheckListener',
'arguments' =>
array (
0 => '@facade.api.charity',
),
),
'factory.api.charity' =>
array (
'class' => 'PGI\\Impact\\APICharity\\Services\\Factories\\ApiFacadeFactory',
'arguments' =>
array (
0 => '@logger.api_charity',
1 => '@settings',
2 => '@parameters',
3 => '@facade.application',
4 => '@handler.requirement',
),
),
'logger.api_charity' =>
array (
'abstract' => false,
'class' => 'PGI\\Impact\\PGLog\\Services\\Logger',
'calls' =>
array (
0 =>
array (
'method' => 'setBehaviorHandler',
'arguments' =>
array (
0 => '@handler.behavior',
),
),
),
'extends' => 'logger.abstract',
'arguments' =>
array (
0 => '@log.writer.api',
),
),
'controller.backoffice.charity' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
6 =>
array (
'method' => 'setCharityAuthenticationHandler',
'arguments' =>
array (
0 => '@handler.charity_authentication',
),
),
7 =>
array (
'method' => 'setCharityAccountHandler',
'arguments' =>
array (
0 => '@handler.charity_account',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOCharity\\Services\\Controllers\\PluginController',
),
'controller.backoffice.charity_account' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
6 =>
array (
'method' => 'setCharityAuthenticationHandler',
'arguments' =>
array (
0 => '@handler.charity_authentication',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOCharity\\Services\\Controllers\\AccountController',
),
'controller.backoffice.charity_partnerships' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
6 =>
array (
'method' => 'setCharityPartnershipHandler',
'arguments' =>
array (
0 => '@handler.charity_partnership',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\BOCharity\\Services\\Controllers\\PartnershipsController',
),
'view.partnership.line' =>
array (
'class' => 'PGI\\Impact\\BOCharity\\Services\\Views\\PartnershipLineView',
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'view',
),
),
'abstract' => false,
'extends' => 'view.basic',
'arguments' =>
array (
0 => '@translator',
),
),
'action.charity_account.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'charity_account',
),
),
'action.charity_partnerships.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'charity_partnerships',
),
),
'action.charity_translations.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_display_page.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedDisplayPageAction',
'arguments' =>
array (
0 => '@handler.block',
),
'config' =>
array (
'page_name' => 'charity_translations',
),
),
'action.charity_translations_form.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_translations_form_block.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedFormTranslationsBlockAction',
'arguments' =>
array (
0 => '@builder.translation_form',
1 => '@handler.translation',
),
'config' =>
array (
'translation_tag' => 'charity',
'form_action' => 'backoffice.charity_translations.save',
),
),
'action.charity_translations_form.save' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_save_translations_form.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedSaveTranslationsFormAction',
'arguments' =>
array (
0 => '@builder.translation_form',
1 => '@handler.translation',
2 => '@manager.translation',
),
'config' =>
array (
'translation_tag' => 'charity',
'redirect_to' => 'charity_translations',
),
),
'action.charity_module_config.display' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_form_settings_block.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedFormSettingsBlockAction',
'config' =>
array (
'form_name' => 'charity_config',
'form_action' => 'backoffice.charity_config.save',
),
),
'action.charity_config.save' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'action',
),
),
'extends' => 'action.standardized_save_settings.abstract',
'class' => 'PGI\\Impact\\BOModule\\Services\\Actions\\StandardizedSaveSettingsAction',
'arguments' =>
array (
0 => '@builder.form',
1 => '@settings',
),
'config' =>
array (
'form_name' => 'charity_config',
'redirection' => 'backoffice.support.display',
),
),
'listener.charity_action.display_backoffice' =>
array (
'class' => 'PGI\\Impact\\BOCharity\\Services\\Listeners\\DisplayBackofficeNotificationListener',
'arguments' =>
array (
0 => '@notifier',
1 => '@handler.charity_authentication',
),
),
'listener.charity_action.display_charity_test_mode_expiration_notification' =>
array (
'class' => 'PGI\\Impact\\BOCharity\\Services\\Listeners\\DisplayTestModeExpirationNotificationListener',
'arguments' =>
array (
0 => '@notifier',
1 => '@handler.charity_account',
),
),
'controller.front.charity.popin' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\FOCharity\\Services\\Controllers\\CharityPopinController',
'arguments' =>
array (
0 => '@handler.view',
1 => '@handler.charity_partnership',
2 => '@handler.charity',
),
),
'controller.front.charity.gift' =>
array (
'abstract' => false,
'shared' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
1 =>
array (
'method' => 'setNotifier',
'arguments' =>
array (
0 => '@notifier',
),
),
2 =>
array (
'method' => 'setLinkHandler',
'arguments' =>
array (
0 => '@handler.link',
),
),
3 =>
array (
'method' => 'setSettings',
'arguments' =>
array (
0 => '@settings',
),
),
4 =>
array (
'method' => 'setParameters',
'arguments' =>
array (
0 => '@parameters',
),
),
5 =>
array (
'method' => 'setFormBuilder',
'arguments' =>
array (
0 => '@builder.form',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'controller',
),
),
'extends' => 'controller.abstract',
'class' => 'PGI\\Impact\\FOCharity\\Services\\Controllers\\CharityGiftController',
'arguments' =>
array (
0 => '@handler.charity',
1 => '@handler.session',
),
),
'builder.output.charity_block' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'builder.output',
),
),
'extends' => 'builder.output.abstract',
'class' => 'PGI\\Impact\\FOCharity\\Services\\OutputBuilders\\CharityBlockOutputBuilder',
'arguments' =>
array (
0 => '@handler.charity',
1 => '@handler.link',
2 => '@settings',
3 => '@handler.charity_partnership',
),
),
'listener.charity_gift.finalization' =>
array (
'class' => 'PGI\\Impact\\FOCharity\\Services\\Listeners\\CharityGiftFinalizationListener',
'arguments' =>
array (
0 => '@handler.charity',
1 => '@repository.gift',
2 => '@logger',
),
),
'builder.output.frontoffice_override_css' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setViewHandler',
'arguments' =>
array (
0 => '@handler.view',
),
),
),
'tags' =>
array (
0 =>
array (
'name' => 'builder.output',
),
),
'extends' => 'builder.output.abstract.static_files',
'class' => 'PGI\\Impact\\PGModule\\Services\\OutputBuilders\\StaticFilesOutputBuilder',
'config' =>
array (
'css' =>
array (
0 => '/css/frontoffice-override.css',
),
),
),
'handler.cart' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Handlers\\CartHandler',
'arguments' =>
array (
0 => '@logger',
),
),
'upgrade.settings.restore' =>
array (
'abstract' => false,
'tags' =>
array (
0 =>
array (
'name' => 'upgrade',
),
),
'class' => 'PGI\\Impact\\PGMagento\\Services\\Upgrades\\RestoreSettingsUpgrade',
'extends' => 'upgrade.abstract',
'arguments' =>
array (
0 => '@magento',
1 => '@repository.setting',
2 => '@handler.shop',
3 => '@officer.settings.database.basic',
4 => '@officer.settings.database.global',
),
),
'magento' =>
array (
),
'compiler.resource.magento' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Compilers\\StaticResourceCompiler',
'arguments' =>
array (
0 => '@handler.static_file',
),
),
'provisioner.pre_payment' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Components\\Provisioners\\PrePayment',
'arguments' =>
array (
0 => '@magento',
),
),
'officer.settings.configuration.global' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Officers\\ConfigurationGlobalSettingsOfficer',
'arguments' =>
array (
0 => '@magento',
),
),
'officer.database' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Officers\\DatabaseOfficer',
'arguments' =>
array (
0 => '@magento',
),
),
'officer.shop' =>
array (
'class' => 'PGI\\Impact\\PGMagento\\Services\\Officers\\ShopOfficer',
),
'local.repository.quote' =>
array (
'factory' =>
array (
'service' => 'magento',
'method' => 'get',
),
'arguments' =>
array (
0 => 'Magento\\Quote\\Api\\CartRepositoryInterface',
),
),
'local.builder.url' =>
array (
'factory' =>
array (
'service' => 'magento',
'method' => 'get',
),
'arguments' =>
array (
0 => 'Magento\\Framework\\UrlInterface',
),
),
'linker.backoffice' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'linker.abstract.magento',
'tags' =>
array (
0 =>
array (
'name' => 'linker',
),
),
'class' => 'PGI\\Impact\\PGMagento\\Services\\Linkers\\MagentoLinker',
'arguments' =>
array (
0 => '@local.builder.url',
),
'config' =>
array (
'route' => 'pgimpact/backoffice/index',
),
),
'linker.frontoffice' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'linker.abstract.magento',
'tags' =>
array (
0 =>
array (
'name' => 'linker',
),
),
'class' => 'PGI\\Impact\\PGMagento\\Services\\Linkers\\MagentoLinker',
'arguments' =>
array (
0 => '@local.builder.url',
),
'config' =>
array (
'route' => 'pgimpact/frontoffice/index',
),
),
'linker.home' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'linker.abstract.magento',
'tags' =>
array (
0 =>
array (
'name' => 'linker',
),
),
'class' => 'PGI\\Impact\\PGMagento\\Services\\Linkers\\HomeLinker',
'arguments' =>
array (
0 => '@local.builder.url',
),
),
'linker.order' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'linker.abstract.magento',
'tags' =>
array (
0 =>
array (
'name' => 'linker',
),
),
'class' => 'PGI\\Impact\\PGMagento\\Services\\Linkers\\OrderLinker',
'arguments' =>
array (
0 => '@local.builder.url',
1 => '@manager.order',
),
),
'linker.order.history' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'linker.abstract.magento',
'tags' =>
array (
0 =>
array (
'name' => 'linker',
),
),
'class' => 'PGI\\Impact\\PGMagento\\Services\\Linkers\\MagentoLinker',
'arguments' =>
array (
0 => '@local.builder.url',
),
'config' =>
array (
'route' => 'sales/order/history',
),
),
'linker.checkout' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'linker.abstract.magento',
'tags' =>
array (
0 =>
array (
'name' => 'linker',
),
),
'class' => 'PGI\\Impact\\PGMagento\\Services\\Linkers\\MagentoLinker',
'arguments' =>
array (
0 => '@local.builder.url',
),
'config' =>
array (
'route' => 'checkout',
),
),
'linker.checkout.success' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'linker.abstract.magento',
'tags' =>
array (
0 =>
array (
'name' => 'linker',
),
),
'class' => 'PGI\\Impact\\PGMagento\\Services\\Linkers\\MagentoLinker',
'arguments' =>
array (
0 => '@local.builder.url',
),
'config' =>
array (
'route' => 'checkout/onepage/success',
),
),
'officer.charity_gift.picture' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'service.abstract',
'class' => 'PGI\\Impact\\PGMagentoCharity\\Services\\Officers\\CharityGiftPictureOfficer',
'arguments' =>
array (
0 => '@pathfinder',
1 => '@local.product.media.config',
2 => '@local.filesystem',
),
'config' =>
array (
'gift_picture' => 'static:/pictures/FOCharity/logo-charity-kit.png',
),
),
'officer.charity_gift.translation' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'service.abstract',
'class' => 'PGI\\Impact\\PGMagentoCharity\\Services\\Officers\\CharityGiftTranslationOfficer',
'arguments' =>
array (
0 => '@local.factory.product',
1 => '@local.resource_model.product',
2 => '@local.scope',
3 => '@translator',
),
'config' =>
array (
'gift_name_translation_key' => 'data.charity_gift.name',
),
),
'officer.charity_gift.stock' =>
array (
'abstract' => false,
'calls' =>
array (
0 =>
array (
'method' => 'setLogger',
'arguments' =>
array (
0 => '@logger',
),
),
),
'extends' => 'service.abstract',
'class' => 'PGI\\Impact\\PGMagentoCharity\\Services\\Officers\\CharityGiftStockOfficer',
'arguments' =>
array (
0 => '@local.registry.stock',
),
),
'local.repository.product' =>
array (
'factory' =>
array (
'service' => 'magento',
'method' => 'get',
),
'arguments' =>
array (
0 => 'Magento\\Catalog\\Api\\ProductRepositoryInterface',
),
),
'local.factory.product' =>
array (
'factory' =>
array (
'service' => 'magento',
'method' => 'get',
),
'arguments' =>
array (
0 => 'Magento\\Catalog\\Api\\Data\\ProductInterfaceFactory',
),
),
'local.resource_model.product' =>
array (
'factory' =>
array (
'service' => 'magento',
'method' => 'get',
),
'arguments' =>
array (
0 => 'Magento\\Catalog\\Model\\ResourceModel\\Product',
),
),
'local.app.state' =>
array (
'factory' =>
array (
'service' => 'magento',
'method' => 'get',
),
'arguments' =>
array (
0 => 'Magento\\Framework\\App\\State',
),
),
'local.registry.stock' =>
array (
'factory' =>
array (
'service' => 'magento',
'method' => 'get',
),
'arguments' =>
array (
0 => 'Magento\\CatalogInventory\\Api\\StockRegistryInterface',
),
),
'local.product.media.config' =>
array (
'factory' =>
array (
'service' => 'magento',
'method' => 'get',
),
'arguments' =>
array (
0 => 'Magento\\Catalog\\Model\\Product\\Media\\Config',
),
),
'local.filesystem' =>
array (
'factory' =>
array (
'service' => 'magento',
'method' => 'get',
),
'arguments' =>
array (
0 => 'Magento\\Framework\\Filesystem',
),
),
'local.scope' =>
array (
'factory' =>
array (
'service' => 'magento',
'method' => 'get',
),
'arguments' =>
array (
0 => 'Magento\\Framework\\App\\Config\\ScopeConfigInterface',
),
),
);
