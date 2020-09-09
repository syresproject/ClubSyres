<?php

namespace ContainerAyW2rYo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class App_KernelProdContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Controller\\Backend\\CategoryController' => 'getCategoryControllerService',
            'App\\Controller\\Backend\\CategoryHabitController' => 'getCategoryHabitControllerService',
            'App\\Controller\\Backend\\ConfigurationController' => 'getConfigurationControllerService',
            'App\\Controller\\Backend\\ContactController' => 'getContactControllerService',
            'App\\Controller\\Backend\\FocusGroupController' => 'getFocusGroupControllerService',
            'App\\Controller\\Backend\\HeaderHabitController' => 'getHeaderHabitControllerService',
            'App\\Controller\\Backend\\HomePageController' => 'getHomePageControllerService',
            'App\\Controller\\Backend\\LinkController' => 'getLinkControllerService',
            'App\\Controller\\Backend\\NewsletterController' => 'getNewsletterControllerService',
            'App\\Controller\\Backend\\PanelisteGroupController' => 'getPanelisteGroupControllerService',
            'App\\Controller\\Backend\\RegistrationController' => 'getRegistrationControllerService',
            'App\\Controller\\Backend\\SurveyController' => 'getSurveyControllerService',
            'App\\Controller\\Backend\\UserController' => 'getUserControllerService',
            'App\\Controller\\CsvImportCommand' => 'getCsvImportCommandService',
            'App\\Controller\\Frontend\\AccueilController' => 'getAccueilControllerService',
            'App\\Controller\\Frontend\\ContactController' => 'getContactController2Service',
            'App\\Controller\\Frontend\\FagController' => 'getFagControllerService',
            'App\\Controller\\Frontend\\InscriptionController' => 'getInscriptionControllerService',
            'App\\Controller\\Frontend\\Legal_notice' => 'getLegalNoticeService',
            'App\\Controller\\Frontend\\LinkController' => 'getLinkController2Service',
            'App\\Controller\\Frontend\\PdfController' => 'getPdfControllerService',
            'App\\Controller\\Frontend\\SurveyController' => 'getSurveyController2Service',
            'App\\Controller\\Security\\SecurityAdminController' => 'getSecurityAdminControllerService',
            'App\\Controller\\Security\\SecurityController' => 'getSecurityControllerService',
            'App\\Controller\\TestAvenir\\DeoController' => 'getDeoControllerService',
            'App\\Controller\\TestAvenir\\TestAVenirController' => 'getTestAVenirControllerService',
            'App\\Services\\PanelisteImport' => 'getPanelisteImportService',
            'Liip\\ImagineBundle\\Controller\\ImagineController' => 'getImagineControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'Vich\\UploaderBundle\\Naming\\Base64Namer' => 'getBase64NamerService',
            'Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer' => 'getCurrentDateTimeDirectoryNamerService',
            'Vich\\UploaderBundle\\Naming\\HashNamer' => 'getHashNamerService',
            'Vich\\UploaderBundle\\Naming\\OrignameNamer' => 'getOrignameNamerService',
            'Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer' => 'getPropertyDirectoryNamerService',
            'Vich\\UploaderBundle\\Naming\\PropertyNamer' => 'getPropertyNamerService',
            'Vich\\UploaderBundle\\Naming\\SmartUniqueNamer' => 'getSmartUniqueNamerService',
            'Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer' => 'getSubdirDirectoryNamerService',
            'Vich\\UploaderBundle\\Naming\\UniqidNamer' => 'getUniqidNamerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'focus_access_check' => 'getFocusAccessCheckService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'http_kernel' => 'getHttpKernelService',
            'knp_paginator' => 'getKnpPaginatorService',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'liip_imagine.config.stack_collection' => 'getLiipImagine_Config_StackCollectionService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService',
            'liip_imagine.filter.loader.fixed' => 'getLiipImagine_Filter_Loader_FixedService',
            'liip_imagine.filter.loader.flip' => 'getLiipImagine_Filter_Loader_FlipService',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService',
            'liip_imagine.filter.loader.resample' => 'getLiipImagine_Filter_Loader_ResampleService',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
            'vich_uploader.download_handler' => 'getVichUploader_DownloadHandlerService',
            'vich_uploader.form.type.file' => 'getVichUploader_Form_Type_FileService',
            'vich_uploader.form.type.image' => 'getVichUploader_Form_Type_ImageService',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'liip_imagine.controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'paneliste_import' => 'App\\Services\\PanelisteImport',
            'vich_uploader.directory_namer_subdir' => 'Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer',
            'vich_uploader.namer_base64' => 'Vich\\UploaderBundle\\Naming\\Base64Namer',
            'vich_uploader.namer_directory_current_date_time' => 'Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer',
            'vich_uploader.namer_directory_property' => 'Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer',
            'vich_uploader.namer_hash' => 'Vich\\UploaderBundle\\Naming\\HashNamer',
            'vich_uploader.namer_origname' => 'Vich\\UploaderBundle\\Naming\\OrignameNamer',
            'vich_uploader.namer_property' => 'Vich\\UploaderBundle\\Naming\\PropertyNamer',
            'vich_uploader.namer_smart_unique' => 'Vich\\UploaderBundle\\Naming\\SmartUniqueNamer',
            'vich_uploader.namer_uniqid' => 'Vich\\UploaderBundle\\Naming\\UniqidNamer',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/KernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ErrorListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/container/src/ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/event-dispatcher/src/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/Handler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FormattableHandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FormattableHandlerTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Handler/FingersCrossed/HttpCodeActivationStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FilterHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Security/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Subscriber/SlidingPaginationSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /*
     * Gets the public 'App\Controller\Backend\CategoryController' shared autowired service.
     *
     * @return \App\Controller\Backend\CategoryController
     */
    protected function getCategoryControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/CategoryController.php';

        $this->services['App\\Controller\\Backend\\CategoryController'] = $instance = new \App\Controller\Backend\CategoryController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\CategoryController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\CategoryHabitController' shared autowired service.
     *
     * @return \App\Controller\Backend\CategoryHabitController
     */
    protected function getCategoryHabitControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/CategoryHabitController.php';

        $this->services['App\\Controller\\Backend\\CategoryHabitController'] = $instance = new \App\Controller\Backend\CategoryHabitController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\CategoryHabitController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\ConfigurationController' shared autowired service.
     *
     * @return \App\Controller\Backend\ConfigurationController
     */
    protected function getConfigurationControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/ConfigurationController.php';

        $this->services['App\\Controller\\Backend\\ConfigurationController'] = $instance = new \App\Controller\Backend\ConfigurationController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\ConfigurationController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\ContactController' shared autowired service.
     *
     * @return \App\Controller\Backend\ContactController
     */
    protected function getContactControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/ContactController.php';

        $this->services['App\\Controller\\Backend\\ContactController'] = $instance = new \App\Controller\Backend\ContactController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\ContactController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\FocusGroupController' shared autowired service.
     *
     * @return \App\Controller\Backend\FocusGroupController
     */
    protected function getFocusGroupControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/FocusGroupController.php';

        $this->services['App\\Controller\\Backend\\FocusGroupController'] = $instance = new \App\Controller\Backend\FocusGroupController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\FocusGroupController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\HeaderHabitController' shared autowired service.
     *
     * @return \App\Controller\Backend\HeaderHabitController
     */
    protected function getHeaderHabitControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/HeaderHabitController.php';

        $this->services['App\\Controller\\Backend\\HeaderHabitController'] = $instance = new \App\Controller\Backend\HeaderHabitController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\HeaderHabitController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\HomePageController' shared autowired service.
     *
     * @return \App\Controller\Backend\HomePageController
     */
    protected function getHomePageControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/HomePageController.php';

        $this->services['App\\Controller\\Backend\\HomePageController'] = $instance = new \App\Controller\Backend\HomePageController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\HomePageController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\LinkController' shared autowired service.
     *
     * @return \App\Controller\Backend\LinkController
     */
    protected function getLinkControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/LinkController.php';

        $this->services['App\\Controller\\Backend\\LinkController'] = $instance = new \App\Controller\Backend\LinkController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\LinkController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\NewsletterController' shared autowired service.
     *
     * @return \App\Controller\Backend\NewsletterController
     */
    protected function getNewsletterControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/NewsletterController.php';

        $this->services['App\\Controller\\Backend\\NewsletterController'] = $instance = new \App\Controller\Backend\NewsletterController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\NewsletterController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\PanelisteGroupController' shared autowired service.
     *
     * @return \App\Controller\Backend\PanelisteGroupController
     */
    protected function getPanelisteGroupControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/PanelisteGroupController.php';

        $this->services['App\\Controller\\Backend\\PanelisteGroupController'] = $instance = new \App\Controller\Backend\PanelisteGroupController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\PanelisteGroupController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\Backend\RegistrationController
     */
    protected function getRegistrationControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/RegistrationController.php';

        $this->services['App\\Controller\\Backend\\RegistrationController'] = $instance = new \App\Controller\Backend\RegistrationController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\RegistrationController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\SurveyController' shared autowired service.
     *
     * @return \App\Controller\Backend\SurveyController
     */
    protected function getSurveyControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/SurveyController.php';

        $this->services['App\\Controller\\Backend\\SurveyController'] = $instance = new \App\Controller\Backend\SurveyController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\SurveyController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Backend\UserController' shared autowired service.
     *
     * @return \App\Controller\Backend\UserController
     */
    protected function getUserControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backend/UserController.php';

        $this->services['App\\Controller\\Backend\\UserController'] = $instance = new \App\Controller\Backend\UserController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Backend\\UserController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\CsvImportCommand' shared autowired service.
     *
     * @return \App\Controller\CsvImportCommand
     */
    protected function getCsvImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CsvImportCommand.php';

        $this->services['App\\Controller\\CsvImportCommand'] = $instance = new \App\Controller\CsvImportCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\CsvImportCommand', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Frontend\AccueilController' shared autowired service.
     *
     * @return \App\Controller\Frontend\AccueilController
     */
    protected function getAccueilControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Frontend/AccueilController.php';

        $this->services['App\\Controller\\Frontend\\AccueilController'] = $instance = new \App\Controller\Frontend\AccueilController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Frontend\\AccueilController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Frontend\ContactController' shared autowired service.
     *
     * @return \App\Controller\Frontend\ContactController
     */
    protected function getContactController2Service()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Frontend/ContactController.php';

        $this->services['App\\Controller\\Frontend\\ContactController'] = $instance = new \App\Controller\Frontend\ContactController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Frontend\\ContactController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Frontend\FagController' shared autowired service.
     *
     * @return \App\Controller\Frontend\FagController
     */
    protected function getFagControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Frontend/FagController.php';

        $this->services['App\\Controller\\Frontend\\FagController'] = $instance = new \App\Controller\Frontend\FagController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Frontend\\FagController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Frontend\InscriptionController' shared autowired service.
     *
     * @return \App\Controller\Frontend\InscriptionController
     */
    protected function getInscriptionControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Frontend/InscriptionController.php';

        $this->services['App\\Controller\\Frontend\\InscriptionController'] = $instance = new \App\Controller\Frontend\InscriptionController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Frontend\\InscriptionController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Frontend\Legal_notice' shared autowired service.
     *
     * @return \App\Controller\Frontend\Legal_notice
     */
    protected function getLegalNoticeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Frontend/Legal_notice.php';

        $this->services['App\\Controller\\Frontend\\Legal_notice'] = $instance = new \App\Controller\Frontend\Legal_notice();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Frontend\\Legal_notice', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Frontend\LinkController' shared autowired service.
     *
     * @return \App\Controller\Frontend\LinkController
     */
    protected function getLinkController2Service()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Frontend/LinkController.php';

        $this->services['App\\Controller\\Frontend\\LinkController'] = $instance = new \App\Controller\Frontend\LinkController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Frontend\\LinkController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Frontend\PdfController' shared autowired service.
     *
     * @return \App\Controller\Frontend\PdfController
     */
    protected function getPdfControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Frontend/PdfController.php';

        $this->services['App\\Controller\\Frontend\\PdfController'] = $instance = new \App\Controller\Frontend\PdfController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Frontend\\PdfController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Frontend\SurveyController' shared autowired service.
     *
     * @return \App\Controller\Frontend\SurveyController
     */
    protected function getSurveyController2Service()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Frontend/SurveyController.php';

        $this->services['App\\Controller\\Frontend\\SurveyController'] = $instance = new \App\Controller\Frontend\SurveyController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Frontend\\SurveyController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Security\SecurityAdminController' shared autowired service.
     *
     * @return \App\Controller\Security\SecurityAdminController
     */
    protected function getSecurityAdminControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Security/SecurityAdminController.php';

        $this->services['App\\Controller\\Security\\SecurityAdminController'] = $instance = new \App\Controller\Security\SecurityAdminController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Security\\SecurityAdminController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\Security\SecurityController' shared autowired service.
     *
     * @return \App\Controller\Security\SecurityController
     */
    protected function getSecurityControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Security/SecurityController.php';

        $this->services['App\\Controller\\Security\\SecurityController'] = $instance = new \App\Controller\Security\SecurityController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Security\\SecurityController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\TestAvenir\DeoController' shared autowired service.
     *
     * @return \App\Controller\TestAvenir\DeoController
     */
    protected function getDeoControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TestAvenir/DeoController.php';

        $this->services['App\\Controller\\TestAvenir\\DeoController'] = $instance = new \App\Controller\TestAvenir\DeoController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\TestAvenir\\DeoController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\TestAvenir\TestAVenirController' shared autowired service.
     *
     * @return \App\Controller\TestAvenir\TestAVenirController
     */
    protected function getTestAVenirControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TestAvenir/TestAVenirController.php';

        $this->services['App\\Controller\\TestAvenir\\TestAVenirController'] = $instance = new \App\Controller\TestAvenir\TestAVenirController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\TestAvenir\\TestAVenirController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Services\PanelisteImport' shared autowired service.
     *
     * @return \App\Services\PanelisteImport
     */
    protected function getPanelisteImportService()
    {
        include_once \dirname(__DIR__, 4).'/src/Services/PanelisteImport.php';

        return $this->services['App\\Services\\PanelisteImport'] = new \App\Services\PanelisteImport(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'Liip\ImagineBundle\Controller\ImagineController' shared service.
     *
     * @return \Liip\ImagineBundle\Controller\ImagineController
     */
    protected function getImagineControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Controller/ImagineController.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Service/FilterService.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Config/Controller/ControllerConfig.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/SignerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Signer.php';

        $a = ($this->services['liip_imagine.data.manager'] ?? $this->getLiipImagine_Data_ManagerService());

        return $this->services['Liip\\ImagineBundle\\Controller\\ImagineController'] = new \Liip\ImagineBundle\Controller\ImagineController(new \Liip\ImagineBundle\Service\FilterService($a, ($this->services['liip_imagine.filter.manager'] ?? $this->getLiipImagine_Filter_ManagerService()), ($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService())), $a, ($this->services['liip_imagine.cache.signer'] ?? ($this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET')))), new \Liip\ImagineBundle\Config\Controller\ControllerConfig(301));
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()));
    }

    /*
     * Gets the public 'Vich\UploaderBundle\Naming\Base64Namer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\Base64Namer
     */
    protected function getBase64NamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Polyfill/FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Base64Namer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\Base64Namer'] = new \Vich\UploaderBundle\Naming\Base64Namer();
    }

    /*
     * Gets the public 'Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer
     */
    protected function getCurrentDateTimeDirectoryNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/DirectoryNamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/CurrentDateTimeDirectoryNamer.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/DateTimeHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/CurrentDateTimeHelper.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer'] = new \Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer(new \Vich\UploaderBundle\Naming\CurrentDateTimeHelper(), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /*
     * Gets the public 'Vich\UploaderBundle\Naming\HashNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\HashNamer
     */
    protected function getHashNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Polyfill/FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/HashNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\HashNamer'] = new \Vich\UploaderBundle\Naming\HashNamer();
    }

    /*
     * Gets the public 'Vich\UploaderBundle\Naming\OrignameNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\OrignameNamer
     */
    protected function getOrignameNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/OrignameNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\OrignameNamer'] = new \Vich\UploaderBundle\Naming\OrignameNamer(($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /*
     * Gets the public 'Vich\UploaderBundle\Naming\PropertyDirectoryNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\PropertyDirectoryNamer
     */
    protected function getPropertyDirectoryNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/DirectoryNamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/PropertyDirectoryNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer'] = new \Vich\UploaderBundle\Naming\PropertyDirectoryNamer(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /*
     * Gets the public 'Vich\UploaderBundle\Naming\PropertyNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\PropertyNamer
     */
    protected function getPropertyNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Polyfill/FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/PropertyNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\PropertyNamer'] = new \Vich\UploaderBundle\Naming\PropertyNamer(($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /*
     * Gets the public 'Vich\UploaderBundle\Naming\SmartUniqueNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\SmartUniqueNamer
     */
    protected function getSmartUniqueNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/SmartUniqueNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\SmartUniqueNamer'] = new \Vich\UploaderBundle\Naming\SmartUniqueNamer(($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /*
     * Gets the public 'Vich\UploaderBundle\Naming\SubdirDirectoryNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\SubdirDirectoryNamer
     */
    protected function getSubdirDirectoryNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/DirectoryNamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/SubdirDirectoryNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer'] = new \Vich\UploaderBundle\Naming\SubdirDirectoryNamer();
    }

    /*
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    protected function getUniqidNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Polyfill/FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/UniqidNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\UniqidNamer'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }

    /*
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('t3kFMXQq3e', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())]);
    }

    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService()), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'cache.webpack_encore' => ($this->privates['cache.webpack_encore'] ?? $this->getCache_WebpackEncoreService())]);
    }

    /*
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('81kwOidrpJ', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'cache.webpack_encore' => ($this->privates['cache.webpack_encore'] ?? $this->getCache_WebpackEncoreService())]);
    }

    /*
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /*
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 1 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 2 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 3 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 4 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->getSerializer_Mapping_CacheWarmerService());
            yield 5 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
            yield 6 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
            yield 7 => ($this->privates['webpack_encore.entrypoint_lookup.cache_warmer'] ?? $this->getWebpackEncore_EntrypointLookup_CacheWarmerService());
            yield 8 => ($this->privates['Vich\\UploaderBundle\\Metadata\\CacheWarmer'] ?? $this->getCacheWarmer2Service());
        }, 9), false, ($this->targetDir.''.'/App_KernelProdContainerDeprecations.log'));
    }

    /*
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Command\\MailCommand' => ['privates', 'App\\Command\\MailCommand', 'getMailCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'fos_ck_editor.command.installer' => ['privates', 'fos_ck_editor.command.installer', 'getFosCkEditor_Command_InstallerService', false],
            'liip_imagine.command.cache_remove' => ['privates', 'liip_imagine.command.cache_remove', 'getLiipImagine_Command_CacheRemoveService', false],
            'liip_imagine.command.cache_resolve' => ['privates', 'liip_imagine.command.cache_resolve', 'getLiipImagine_Command_CacheResolveService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
            'vich_uploader.command.mapping_debug' => ['privates', 'vich_uploader.command.mapping_debug', 'getVichUploader_Command_MappingDebugService', false],
            'vich_uploader.command.mapping_debug_class' => ['privates', 'vich_uploader.command.mapping_debug_class', 'getVichUploader_Command_MappingDebugClassService', false],
            'vich_uploader.command.mapping_list_classes' => ['privates', 'vich_uploader.command.mapping_list_classes', 'getVichUploader_Command_MappingListClassesService', false],
        ], [
            'App\\Command\\MailCommand' => 'App\\Command\\MailCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand',
            'fos_ck_editor.command.installer' => 'FOS\\CKEditorBundle\\Command\\CKEditorInstallerCommand',
            'liip_imagine.command.cache_remove' => 'Liip\\ImagineBundle\\Command\\RemoveCacheCommand',
            'liip_imagine.command.cache_resolve' => 'Liip\\ImagineBundle\\Command\\ResolveCacheCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
            'vich_uploader.command.mapping_debug' => 'Vich\\UploaderBundle\\Command\\MappingDebugCommand',
            'vich_uploader.command.mapping_debug_class' => 'Vich\\UploaderBundle\\Command\\MappingDebugClassCommand',
            'vich_uploader.command.mapping_list_classes' => 'Vich\\UploaderBundle\\Command\\MappingListClassesCommand',
        ]), ['MailCommand' => 'App\\Command\\MailCommand', 'about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'security:encode-password' => 'security.command.user_password_encoder', 'vich:mapping:debug-class' => 'vich_uploader.command.mapping_debug_class', 'vich:mapping:debug' => 'vich_uploader.command.mapping_debug', 'vich:mapping:list-classes' => 'vich_uploader.command.mapping_list_classes', 'ckeditor:install' => 'fos_ck_editor.command.installer', 'liip:imagine:cache:remove' => 'liip_imagine.command.cache_remove', 'liip:imagine:cache:resolve' => 'liip_imagine.command.cache_resolve']);
    }

    /*
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/BaseListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/CleanListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/ORM/DoctrineORMAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/RemoveListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/UploadListener.php';

        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));

        $b = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();
        $c = ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService());
        $d = ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService());

        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('images', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('images', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('images', $b, $c, $d));
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driver' => 'pdo_mysql', 'driverOptions' => [], 'serverVersion' => '5.5', 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), $a, []);
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()));
        $c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $d = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity'), 1 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Entity')]);

        $c->addDriver($d, 'App\\Entity');
        $c->addDriver($d, 'Vich\\UploaderBundle\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity', 'VichUploaderBundle' => 'Vich\\UploaderBundle\\Entity']);
        $a->setMetadataCacheImpl($b);
        $a->setQueryCacheImpl($b);
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())));
        $a->setMetadataDriverImpl($c);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\AdminRepository' => ['privates', 'App\\Repository\\AdminRepository', 'getAdminRepositoryService', false],
            'App\\Repository\\CategoryHabitRepository' => ['privates', 'App\\Repository\\CategoryHabitRepository', 'getCategoryHabitRepositoryService', false],
            'App\\Repository\\CategoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', false],
            'App\\Repository\\ConfigurationRepository' => ['privates', 'App\\Repository\\ConfigurationRepository', 'getConfigurationRepositoryService', false],
            'App\\Repository\\ContactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService', false],
            'App\\Repository\\DeoRepository' => ['privates', 'App\\Repository\\DeoRepository', 'getDeoRepositoryService', false],
            'App\\Repository\\FocusAccessRepository' => ['privates', 'App\\Repository\\FocusAccessRepository', 'getFocusAccessRepositoryService', false],
            'App\\Repository\\FocusGroupRepository' => ['privates', 'App\\Repository\\FocusGroupRepository', 'getFocusGroupRepositoryService', false],
            'App\\Repository\\FocusMessageRepository' => ['privates', 'App\\Repository\\FocusMessageRepository', 'getFocusMessageRepositoryService', false],
            'App\\Repository\\FormTroisRepository' => ['privates', 'App\\Repository\\FormTroisRepository', 'getFormTroisRepositoryService', false],
            'App\\Repository\\HeaderHabitRepository' => ['privates', 'App\\Repository\\HeaderHabitRepository', 'getHeaderHabitRepositoryService', false],
            'App\\Repository\\HomePageRepository' => ['privates', 'App\\Repository\\HomePageRepository', 'getHomePageRepositoryService', false],
            'App\\Repository\\InscRepository' => ['privates', 'App\\Repository\\InscRepository', 'getInscRepositoryService', false],
            'App\\Repository\\InscriptionRepository' => ['privates', 'App\\Repository\\InscriptionRepository', 'getInscriptionRepositoryService', false],
            'App\\Repository\\InvitationRepository' => ['privates', 'App\\Repository\\InvitationRepository', 'getInvitationRepositoryService', false],
            'App\\Repository\\LinkLogRepository' => ['privates', 'App\\Repository\\LinkLogRepository', 'getLinkLogRepositoryService', false],
            'App\\Repository\\LinkRepository' => ['privates', 'App\\Repository\\LinkRepository', 'getLinkRepositoryService', false],
            'App\\Repository\\NameRepository' => ['privates', 'App\\Repository\\NameRepository', 'getNameRepositoryService', false],
            'App\\Repository\\NewsletterRepository' => ['privates', 'App\\Repository\\NewsletterRepository', 'getNewsletterRepositoryService', false],
            'App\\Repository\\PDeuxInsRepository' => ['privates', 'App\\Repository\\PDeuxInsRepository', 'getPDeuxInsRepositoryService', false],
            'App\\Repository\\PanelisteGroupRepository' => ['privates', 'App\\Repository\\PanelisteGroupRepository', 'getPanelisteGroupRepositoryService', false],
            'App\\Repository\\RolesRepository' => ['privates', 'App\\Repository\\RolesRepository', 'getRolesRepositoryService', false],
            'App\\Repository\\StaticPageRepository' => ['privates', 'App\\Repository\\StaticPageRepository', 'getStaticPageRepositoryService', false],
            'App\\Repository\\SurveyRepository' => ['privates', 'App\\Repository\\SurveyRepository', 'getSurveyRepositoryService', false],
            'App\\Repository\\TestMigrationRepository' => ['privates', 'App\\Repository\\TestMigrationRepository', 'getTestMigrationRepositoryService', false],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'App\\Repository\\AdminRepository' => '?',
            'App\\Repository\\CategoryHabitRepository' => '?',
            'App\\Repository\\CategoryRepository' => '?',
            'App\\Repository\\ConfigurationRepository' => '?',
            'App\\Repository\\ContactRepository' => '?',
            'App\\Repository\\DeoRepository' => '?',
            'App\\Repository\\FocusAccessRepository' => '?',
            'App\\Repository\\FocusGroupRepository' => '?',
            'App\\Repository\\FocusMessageRepository' => '?',
            'App\\Repository\\FormTroisRepository' => '?',
            'App\\Repository\\HeaderHabitRepository' => '?',
            'App\\Repository\\HomePageRepository' => '?',
            'App\\Repository\\InscRepository' => '?',
            'App\\Repository\\InscriptionRepository' => '?',
            'App\\Repository\\InvitationRepository' => '?',
            'App\\Repository\\LinkLogRepository' => '?',
            'App\\Repository\\LinkRepository' => '?',
            'App\\Repository\\NameRepository' => '?',
            'App\\Repository\\NewsletterRepository' => '?',
            'App\\Repository\\PDeuxInsRepository' => '?',
            'App\\Repository\\PanelisteGroupRepository' => '?',
            'App\\Repository\\RolesRepository' => '?',
            'App\\Repository\\StaticPageRepository' => '?',
            'App\\Repository\\SurveyRepository' => '?',
            'App\\Repository\\TestMigrationRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
        ])));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ErrorController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/SerializerErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/ErrorRenderer/TwigErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($this->services['serializer'] ?? $this->getSerializerService()), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService())), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, false)), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false)));
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['webpack_encore.exception_listener'] ?? $this->getWebpackEncore_ExceptionListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.envelope_listener'] ?? ($this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL)));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->getTwig_Mailer_MessageListenerService());
        }, 1 => 'onMessage'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'before'], 0);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'pagination'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sortable'] ?? ($this->privates['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.filtration'] ?? ($this->privates['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'pagination'], 1);

        return $instance;
    }

    /*
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the public 'focus_access_check' shared autowired service.
     *
     * @return \App\Services\FocusAccessCheck
     */
    protected function getFocusAccessCheckService()
    {
        include_once \dirname(__DIR__, 4).'/src/Services/FocusAccessCheck.php';

        return $this->services['focus_access_check'] = new \App\Services\FocusAccessCheck(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Services\\SurveyService'] ?? $this->getSurveyServiceService()));
    }

    /*
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormFactory.php';

        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /*
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php';

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->getSecurity_UserValueResolverService());
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->getArgumentResolver_ServiceService());
            yield 5 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 7)));
    }

    /*
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    protected function getKnpPaginatorService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setDefaultPaginatorOptions(['pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true, 'pageOutOfRange' => 'ignore', 'defaultLimit' => 10]);

        return $instance;
    }

    /*
     * Gets the public 'liip_imagine.binary.loader.default' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader
     */
    protected function getLiipImagine_Binary_Loader_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Binary/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Binary/Loader/FileSystemLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypes.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Binary/Locator/LocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Binary/Locator/FileSystemLocator.php';

        $a = \Symfony\Component\Mime\MimeTypes::getDefault();

        return $this->services['liip_imagine.binary.loader.default'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($a, $a, new \Liip\ImagineBundle\Binary\Locator\FileSystemLocator([0 => (\dirname(__DIR__, 4).'/public')], false));
    }

    /*
     * Gets the public 'liip_imagine.cache.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/CacheManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/FilterConfiguration.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/SignerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Signer.php';

        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager(($this->privates['liip_imagine.filter.configuration'] ?? ($this->privates['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration([]))), ($this->services['router'] ?? $this->getRouterService()), ($this->services['liip_imagine.cache.signer'] ?? ($this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET')))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'default');

        $instance->addResolver('default', ($this->services['liip_imagine.cache.resolver.default'] ?? $this->getLiipImagine_Cache_Resolver_DefaultService()));
        $instance->addResolver('no_cache', ($this->services['liip_imagine.cache.resolver.no_cache_web_path'] ?? $this->getLiipImagine_Cache_Resolver_NoCacheWebPathService()));

        return $instance;
    }

    /*
     * Gets the public 'liip_imagine.cache.resolver.default' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/ResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/WebPathResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), (\dirname(__DIR__, 4).'/public'), 'media/cache');
    }

    /*
     * Gets the public 'liip_imagine.cache.resolver.no_cache_web_path' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/ResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/NoCacheWebPathResolver.php';

        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver(($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));
    }

    /*
     * Gets the public 'liip_imagine.cache.signer' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/SignerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Signer.php';

        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET'));
    }

    /*
     * Gets the public 'liip_imagine.config.stack_collection' shared service.
     *
     * @return \Liip\ImagineBundle\Config\StackCollection
     */
    protected function getLiipImagine_Config_StackCollectionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Config/StackCollection.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Config/StackBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Config/StackBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/StackFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/StackFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Config/FilterFactoryCollection.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/FilterFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/AutoRotateFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/BackgroundFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/Argument/SizeFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/CropFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/Argument/PointFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/DownscaleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/FlipFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/GrayscaleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/InterlaceFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/PasteFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/RelativeResizeFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/ResizeFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/RotateFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/ScaleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/StripFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/ThumbnailFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/UpscaleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/WatermarkFactory.php';

        $a = new \Liip\ImagineBundle\Factory\Config\Filter\Argument\SizeFactory();
        $b = new \Liip\ImagineBundle\Factory\Config\Filter\Argument\PointFactory();

        return $this->services['liip_imagine.config.stack_collection'] = new \Liip\ImagineBundle\Config\StackCollection(new \Liip\ImagineBundle\Config\StackBuilder(new \Liip\ImagineBundle\Factory\Config\StackFactory(), new \Liip\ImagineBundle\Config\FilterFactoryCollection(new \Liip\ImagineBundle\Factory\Config\Filter\AutoRotateFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\BackgroundFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\CropFactory($a, $b), new \Liip\ImagineBundle\Factory\Config\Filter\DownscaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\FlipFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\GrayscaleFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\InterlaceFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\PasteFactory($b), new \Liip\ImagineBundle\Factory\Config\Filter\RelativeResizeFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ResizeFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\RotateFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ScaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\StripFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ThumbnailFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\UpscaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\WatermarkFactory())), []);
    }

    /*
     * Gets the public 'liip_imagine.data.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager
     */
    protected function getLiipImagine_Data_ManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Data/DataManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypes.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/FilterConfiguration.php';

        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager(($this->privates['liip_imagine.binary.mime_type_guesser'] ?? $this->getLiipImagine_Binary_MimeTypeGuesserService()), \Symfony\Component\Mime\MimeTypes::getDefault(), ($this->privates['liip_imagine.filter.configuration'] ?? ($this->privates['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration([]))), 'default', NULL);

        $instance->addLoader('default', ($this->services['liip_imagine.binary.loader.default'] ?? $this->getLiipImagine_Binary_Loader_DefaultService()));

        return $instance;
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.downscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_DownscaleService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ScaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/DownscaleFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.fixed' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_FixedService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/FixedFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.fixed'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.flip' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_FlipService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/FlipFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.grayscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_GrayscaleService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/GrayscaleFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.interlace' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_InterlaceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/InterlaceFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.resample' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ResampleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_ResampleService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ResampleFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.resample'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResampleFilterLoader(($this->privates['liip_imagine.gd'] ?? $this->getLiipImagine_GdService()));
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.rotate' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_RotateService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/RotateFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager
     */
    protected function getLiipImagine_Filter_ManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/FilterManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/RelativeResizeFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ResizeFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ThumbnailFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/CropFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/PasteFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/WatermarkFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/BackgroundFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/StripFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ScaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/UpscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/AutoRotateFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/PostProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/AbstractPostProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/JpegOptimPostProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/OptiPngPostProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/PngquantPostProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/MozJpegPostProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/FilterConfiguration.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/GrayscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/DownscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/RotateFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/FlipFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/InterlaceFilterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/FixedFilterLoader.php';

        $a = ($this->privates['liip_imagine.gd'] ?? $this->getLiipImagine_GdService());

        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager(($this->privates['liip_imagine.filter.configuration'] ?? ($this->privates['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration([]))), $a, ($this->privates['liip_imagine.binary.mime_type_guesser'] ?? $this->getLiipImagine_Binary_MimeTypeGuesserService()));

        $instance->addLoader('relative_resize', new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader());
        $instance->addLoader('resize', new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader());
        $instance->addLoader('thumbnail', new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader());
        $instance->addLoader('crop', new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader());
        $instance->addLoader('grayscale', ($this->services['liip_imagine.filter.loader.grayscale'] ?? ($this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader())));
        $instance->addLoader('paste_image', new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($a, \dirname(__DIR__, 4)));
        $instance->addLoader('watermark_image', new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($a, \dirname(__DIR__, 4)));
        $instance->addLoader('background', new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($a));
        $instance->addLoader('strip', new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader());
        $instance->addLoader('scale', new \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader());
        $instance->addLoader('upscale', new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader());
        $instance->addLoader('downscale', ($this->services['liip_imagine.filter.loader.downscale'] ?? ($this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader())));
        $instance->addLoader('auto_rotate', new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader());
        $instance->addLoader('rotate', ($this->services['liip_imagine.filter.loader.rotate'] ?? ($this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader())));
        $instance->addLoader('flip', ($this->services['liip_imagine.filter.loader.flip'] ?? ($this->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader())));
        $instance->addLoader('interlace', ($this->services['liip_imagine.filter.loader.interlace'] ?? ($this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader())));
        $instance->addLoader('resample', ($this->services['liip_imagine.filter.loader.resample'] ?? $this->getLiipImagine_Filter_Loader_ResampleService()));
        $instance->addLoader('fixed', ($this->services['liip_imagine.filter.loader.fixed'] ?? ($this->services['liip_imagine.filter.loader.fixed'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader())));
        $instance->addPostProcessor('jpegoptim', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim', true, NULL, true, NULL));
        $instance->addPostProcessor('optipng', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng', 7, true, NULL));
        $instance->addPostProcessor('pngquant', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant'));
        $instance->addPostProcessor('mozjpeg', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg'));

        return $instance;
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => NULL, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, 'fr');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));

        return $instance;
    }

    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ContainerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)));
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ])));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true]);
    }

    /*
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationUtils.php';

        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/CsrfTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/CsrfTokenManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenGenerator/TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php';

        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/UserPasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/UserPasswordEncoder.php';

        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /*
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Serializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ProblemNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/NameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/AdvancedNameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/CsvEncoder.php';

        $a = ($this->privates['serializer.mapping.cache_class_metadata_factory'] ?? $this->getSerializer_Mapping_CacheClassMetadataFactoryService());

        $b = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($a);

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(false), 1 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $b), 4 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 6 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->getMimeTypesService())), 7 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 8 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($a, $b, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['property_info.cache'] ?? $this->getPropertyInfo_CacheService()), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($a), NULL, [])], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
    }

    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (isset($this->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (isset($this->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
            }
            if (isset($this->privates['doctrine.result_cache_pool'])) {
                yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? null);
            }
            if (isset($this->privates['doctrine.system_cache_pool'])) {
                yield 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? null);
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
            }
            if (isset($this->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($this->privates['monolog.handler.console'] ?? null);
            }
            if (isset($this->privates['monolog.handler.deprecation'])) {
                yield 'monolog.handler.deprecation' => ($this->privates['monolog.handler.deprecation'] ?? null);
            }
            if (isset($this->privates['monolog.handler.deprecation_filter'])) {
                yield 'monolog.handler.deprecation_filter' => ($this->privates['monolog.handler.deprecation_filter'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($this->privates['webpack_encore.tag_renderer'])) {
                yield 'webpack_encore.tag_renderer' => ($this->privates['webpack_encore.tag_renderer'] ?? null);
            }
            if (isset($this->privates['cache.webpack_encore'])) {
                yield 'cache.webpack_encore' => ($this->privates['cache.webpack_encore'] ?? null);
            }
            if (isset($this->privates['webpack_encore.entrypoint_lookup[_default]'])) {
                yield 'webpack_encore.entrypoint_lookup[_default]' => ($this->privates['webpack_encore.entrypoint_lookup[_default]'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['doctrine.result_cache_pool'])) + (int) (isset($this->privates['doctrine.system_cache_pool'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->privates['monolog.handler.console'])) + (int) (isset($this->privates['monolog.handler.deprecation'])) + (int) (isset($this->privates['monolog.handler.deprecation_filter'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language'])) + (int) (isset($this->privates['webpack_encore.tag_renderer'])) + (int) (isset($this->privates['cache.webpack_encore'])) + (int) (isset($this->privates['webpack_encore.entrypoint_lookup[_default]']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'doctrine.result_cache_pool' => [0 => 'reset'], 'doctrine.system_cache_pool' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'monolog.handler.console' => [0 => 'reset'], 'monolog.handler.deprecation' => [0 => 'reset'], 'monolog.handler.deprecation_filter' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'webpack_encore.tag_renderer' => [0 => 'reset'], 'cache.webpack_encore' => [0 => 'reset'], 'webpack_encore.entrypoint_lookup[_default]' => [0 => 'reset']]);
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Session.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()));
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Translator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Translation/Translator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';

        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'fr', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => false, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.ar.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.ar.xliff')], 'az' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.bg.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.bg.xliff')], 'ca' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.ca.yaml')], 'cs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.cs.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.cs.xliff')], 'cy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.da.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.da.xliff')], 'de' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.de.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.de.xliff')], 'el' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.en.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.en.xliff'), 5 => (\dirname(__DIR__, 4).'/translations/bo_article.en.yml'), 6 => (\dirname(__DIR__, 4).'/translations/bo_brands.en.yml'), 7 => (\dirname(__DIR__, 4).'/translations/bo_category.en.yml'), 8 => (\dirname(__DIR__, 4).'/translations/bo_formlabel.en.yml'), 9 => (\dirname(__DIR__, 4).'/translations/bo_headerhabits.en.yml'), 10 => (\dirname(__DIR__, 4).'/translations/bo_home.en.yml'), 11 => (\dirname(__DIR__, 4).'/translations/bo_labelshabits.en.yml'), 12 => (\dirname(__DIR__, 4).'/translations/bo_panelistegroup.en.yml'), 13 => (\dirname(__DIR__, 4).'/translations/bo_receivedmessages.en.yml'), 14 => (\dirname(__DIR__, 4).'/translations/bo_sidebar.en.yml'), 15 => (\dirname(__DIR__, 4).'/translations/bo_survey.en.yml'), 16 => (\dirname(__DIR__, 4).'/translations/bo_surveycategory.en.yml'), 17 => (\dirname(__DIR__, 4).'/translations/bo_user.en.yml'), 18 => (\dirname(__DIR__, 4).'/translations/categorylist.en.yml'), 19 => (\dirname(__DIR__, 4).'/translations/clubsyres.en.yml'), 20 => (\dirname(__DIR__, 4).'/translations/clubsyrestype.en.yml'), 21 => (\dirname(__DIR__, 4).'/translations/contact.en.yml'), 22 => (\dirname(__DIR__, 4).'/translations/editarticle.en.yml'), 23 => (\dirname(__DIR__, 4).'/translations/focusgroup.en.yml'), 24 => (\dirname(__DIR__, 4).'/translations/footer.en.yml'), 25 => (\dirname(__DIR__, 4).'/translations/gamification.en.yml'), 26 => (\dirname(__DIR__, 4).'/translations/home.en.yml'), 27 => (\dirname(__DIR__, 4).'/translations/maintenance.en.yml'), 28 => (\dirname(__DIR__, 4).'/translations/security.en.yml'), 29 => (\dirname(__DIR__, 4).'/translations/sidebar.en.yml'), 30 => (\dirname(__DIR__, 4).'/translations/survey.en.yml')], 'es' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.es.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.es.xliff')], 'et' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.eu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.eu.xliff')], 'fa' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fa.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.fa.xliff')], 'fi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.fi.yaml')], 'fr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.fr.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.fr.xliff'), 5 => (\dirname(__DIR__, 4).'/translations/bo_article.fr.yml'), 6 => (\dirname(__DIR__, 4).'/translations/bo_brands.fr.yml'), 7 => (\dirname(__DIR__, 4).'/translations/bo_category.fr.yml'), 8 => (\dirname(__DIR__, 4).'/translations/bo_formlabel.fr.yml'), 9 => (\dirname(__DIR__, 4).'/translations/bo_headerhabits.fr.yml'), 10 => (\dirname(__DIR__, 4).'/translations/bo_home.fr.yml'), 11 => (\dirname(__DIR__, 4).'/translations/bo_labelshabits.fr.yml'), 12 => (\dirname(__DIR__, 4).'/translations/bo_panelistegroup.fr.yml'), 13 => (\dirname(__DIR__, 4).'/translations/bo_receivedmessages.fr.yml'), 14 => (\dirname(__DIR__, 4).'/translations/bo_sidebar.fr.yml'), 15 => (\dirname(__DIR__, 4).'/translations/bo_survey.fr.yml'), 16 => (\dirname(__DIR__, 4).'/translations/bo_surveycategory.fr.yml'), 17 => (\dirname(__DIR__, 4).'/translations/bo_user.fr.yml'), 18 => (\dirname(__DIR__, 4).'/translations/categorylist.fr.yml'), 19 => (\dirname(__DIR__, 4).'/translations/clubsyres.fr.yml'), 20 => (\dirname(__DIR__, 4).'/translations/clubsyrestype.fr.yml'), 21 => (\dirname(__DIR__, 4).'/translations/contact.fr.yml'), 22 => (\dirname(__DIR__, 4).'/translations/editarticle.fr.yml'), 23 => (\dirname(__DIR__, 4).'/translations/focusgroup.fr.yml'), 24 => (\dirname(__DIR__, 4).'/translations/footer.fr.yml'), 25 => (\dirname(__DIR__, 4).'/translations/gamification.fr.yml'), 26 => (\dirname(__DIR__, 4).'/translations/home.fr.yml'), 27 => (\dirname(__DIR__, 4).'/translations/maintenance.fr.yml'), 28 => (\dirname(__DIR__, 4).'/translations/security.fr.yml'), 29 => (\dirname(__DIR__, 4).'/translations/sidebar.fr.yml'), 30 => (\dirname(__DIR__, 4).'/translations/survey.fr.yml')], 'gl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hr.xlf')], 'hu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.hu.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.hu.xliff')], 'hy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.id.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.id.xliff')], 'it' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.it.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.it.xliff')], 'ja' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ja.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.ja.xliff')], 'lb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.lt.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.lt.xliff')], 'lv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.nl.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.nl.xliff')], 'nn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.no.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.no.xliff')], 'pl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.pl.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.pl.xliff')], 'pt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.pt.yaml')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.pt_BR.xliff')], 'ro' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ro.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.ro.xliff')], 'ru' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.ru.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.ru.xliff')], 'sk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.sl.yaml')], 'sq' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sv.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.sv.xliff')], 'th' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.tr.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.tr.xliff')], 'uk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.uk.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.uk.xliff')], 'vi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf')], 'vn' => [0 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.vn.yaml')], 'ky' => [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.ky.xliff')], 'sw' => [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.sw.xliff')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations'), 5 => (\dirname(__DIR__, 4).'/translations'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/translations'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/translations'), 8 => (\dirname(__DIR__, 4).'/vendor/twig/extra-bundle/src/translations'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle/translations'), 10 => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/translations'), 11 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/translations'), 12 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/translations'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/translations'), 14 => (\dirname(__DIR__, 4).'/vendor/cocur/slugify/src/Bridge/Symfony/translations'), 15 => (\dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/translations'), 16 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/translations'), 17 => (\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/translations')], 'cache_vary' => ['scanned_directories' => [0 => 'vendor/symfony/validator/Resources/translations', 1 => 'vendor/symfony/form/Resources/translations', 2 => 'vendor/symfony/security-core/Resources/translations', 3 => 'vendor/vich/uploader-bundle/translations', 4 => 'vendor/knplabs/knp-paginator-bundle/translations', 5 => 'translations', 6 => 'vendor/symfony/framework-bundle/translations', 7 => 'vendor/symfony/twig-bundle/translations', 8 => 'vendor/twig/extra-bundle/src/translations', 9 => 'vendor/symfony/monolog-bundle/translations', 10 => 'vendor/sensio/framework-extra-bundle/src/translations', 11 => 'vendor/doctrine/doctrine-bundle/translations', 12 => 'vendor/doctrine/doctrine-migrations-bundle/translations', 13 => 'vendor/symfony/security-bundle/translations', 14 => 'vendor/cocur/slugify/src/Bridge/Symfony/translations', 15 => 'vendor/symfony/webpack-encore-bundle/src/translations', 16 => 'vendor/friendsofsymfony/ckeditor-bundle/src/translations', 17 => 'vendor/liip/imagine-bundle/translations']]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $instance->setFallbackLocales([0 => 'fr']);

        return $instance;
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Environment.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UrlHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/intl-extra/src/IntlExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/cocur/slugify/src/Bridge/Twig/SlugifyExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/cocur/slugify/src/SlugifyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/cocur/slugify/src/Slugify.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Twig/EntryFilesTwigExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Twig/Extension/UploaderExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Templating/Helper/UploaderHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Renderer/CKEditorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Twig/CKEditorExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Renderer/CKEditorRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Builder/JsonBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Templating/FilterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Templating/FilterExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Twig/Extension/PaginationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Helper/Processor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/AppVariable.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/stopwatch/Stopwatch.php';

        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/templates'), 'KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/templates'), 'VichUploader');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/templates'), '!VichUploader');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views'), 'FOSCKEditor');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views'), '!FOSCKEditor');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Resources/views'), 'LiipImagine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Resources/views'), '!LiipImagine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/templates'), 'KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/templates'), '!KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => false, 'strict_variables' => false]);

        $b = ($this->services['translator'] ?? $this->getTranslatorService());
        $c = ($this->privates['assets.packages'] ?? $this->getAssets_PackagesService());
        $d = ($this->services['router'] ?? $this->getRouterService());
        $e = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('prod');
        $f->setDebug(false);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($e);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($e, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($e));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Twig\Extra\Intl\IntlExtension());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Cocur\Slugify\Bridge\Twig\SlugifyExtension(new \Cocur\Slugify\Slugify([])));
        $instance->addExtension(new \Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'webpack_encore.entrypoint_lookup_collection' => ['privates', 'webpack_encore.entrypoint_lookup_collection', 'getWebpackEncore_EntrypointLookupCollectionService', false],
            'webpack_encore.tag_renderer' => ['privates', 'webpack_encore.tag_renderer', 'getWebpackEncore_TagRendererService', false],
        ], [
            'webpack_encore.entrypoint_lookup_collection' => '?',
            'webpack_encore.tag_renderer' => '?',
        ])));
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension(new \Vich\UploaderBundle\Templating\Helper\UploaderHelper(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()))));
        $instance->addExtension(new \FOS\CKEditorBundle\Twig\CKEditorExtension(new \FOS\CKEditorBundle\Renderer\CKEditorRenderer(new \FOS\CKEditorBundle\Builder\JsonBuilder(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())), $d, $c, $e, $instance, (($this->hasParameter("locale")) ? ($this->getParameter("locale")) : (null)))));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\FilterExtension(($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService())));
        $instance->addExtension(new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(new \Knp\Bundle\PaginatorBundle\Helper\Processor($d, $b)));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validator/ValidatorInterface.php';

        return $this->services['validator'] = ($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator();
    }

    /*
     * Gets the public 'vich_uploader.download_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\DownloadHandler
     */
    protected function getVichUploader_DownloadHandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Handler/AbstractHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Handler/DownloadHandler.php';

        return $this->services['vich_uploader.download_handler'] = new \Vich\UploaderBundle\Handler\DownloadHandler(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), ($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()));
    }

    /*
     * Gets the public 'vich_uploader.form.type.file' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichFileType
     */
    protected function getVichUploader_Form_Type_FileService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Form/Type/VichFileType.php';

        return $this->services['vich_uploader.form.type.file'] = new \Vich\UploaderBundle\Form\Type\VichFileType(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()), ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService()), ($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /*
     * Gets the public 'vich_uploader.form.type.image' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichImageType
     */
    protected function getVichUploader_Form_Type_ImageService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Form/Type/VichFileType.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Form/Type/VichImageType.php';

        return $this->services['vich_uploader.form.type.image'] = new \Vich\UploaderBundle\Form\Type\VichImageType(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()), ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService()), ($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()));
    }

    /*
     * Gets the public 'vich_uploader.upload_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler
     */
    protected function getVichUploader_UploadHandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Handler/AbstractHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Handler/UploadHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Injector/FileInjectorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Injector/FileInjector.php';

        $a = ($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService());

        return $this->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), $a, new \Vich\UploaderBundle\Injector\FileInjector($a), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the private '.errored..service_locator.8TcS0eA.App\Entity\HeaderHabit' shared service.
     *
     * @return \App\Entity\HeaderHabit
     */
    protected function getHeaderHabitService()
    {
        $this->throw('Cannot autowire service ".service_locator.8TcS0eA": it references class "App\\Entity\\HeaderHabit" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.MpsgFRY.App\Entity\Category' shared service.
     *
     * @return \App\Entity\Category
     */
    protected function getCategoryService()
    {
        $this->throw('Cannot autowire service ".service_locator.MpsgFRY": it references class "App\\Entity\\Category" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.Pf5uw8y.Symfony\Component\HttpFoundation\File\UploadedFile' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    protected function getUploadedFileService()
    {
        $this->throw('Cannot autowire service ".service_locator.Pf5uw8y": it references class "Symfony\\Component\\HttpFoundation\\File\\UploadedFile" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.T6IeSqd.App\Entity\Configuration' shared service.
     *
     * @return \App\Entity\Configuration
     */
    protected function getConfigurationService()
    {
        $this->throw('Cannot autowire service ".service_locator.T6IeSqd": it references class "App\\Entity\\Configuration" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.TgsPWAC.App\Entity\Survey' shared service.
     *
     * @return \App\Entity\Survey
     */
    protected function getSurveyService()
    {
        $this->throw('Cannot autowire service ".service_locator.TgsPWAC": it references class "App\\Entity\\Survey" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.TgsPWAC.App\Entity\User' shared service.
     *
     * @return \App\Entity\User
     */
    protected function getUserService()
    {
        $this->throw('Cannot autowire service ".service_locator.TgsPWAC": it references class "App\\Entity\\User" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.UxMn1vC.App\Entity\Survey' shared service.
     *
     * @return \App\Entity\Survey
     */
    protected function getSurvey2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.UxMn1vC": it references class "App\\Entity\\Survey" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.ZVWr1aS.App\Entity\CategoryHabit' shared service.
     *
     * @return \App\Entity\CategoryHabit
     */
    protected function getCategoryHabitService()
    {
        $this->throw('Cannot autowire service ".service_locator.ZVWr1aS": it references class "App\\Entity\\CategoryHabit" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.bnQwmsP.App\Entity\Survey' shared service.
     *
     * @return \App\Entity\Survey
     */
    protected function getSurvey3Service()
    {
        $this->throw('Cannot autowire service ".service_locator.bnQwmsP": it references class "App\\Entity\\Survey" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.oCIKLvC.App\Entity\Link' shared service.
     *
     * @return \App\Entity\Link
     */
    protected function getLinkService()
    {
        $this->throw('Cannot autowire service ".service_locator.oCIKLvC": it references class "App\\Entity\\Link" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.sK.paRQ.App\Entity\PanelisteGroup' shared service.
     *
     * @return \App\Entity\PanelisteGroup
     */
    protected function getPanelisteGroupService()
    {
        $this->throw('Cannot autowire service ".service_locator.sK.paRQ": it references class "App\\Entity\\PanelisteGroup" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.tZd.pMB.App\Entity\FocusMessage' shared service.
     *
     * @return \App\Entity\FocusMessage
     */
    protected function getFocusMessageService()
    {
        $this->throw('Cannot autowire service ".service_locator.tZd.pMB": it references class "App\\Entity\\FocusMessage" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.vZtQWCT.App\Entity\FocusGroup' shared service.
     *
     * @return \App\Entity\FocusGroup
     */
    protected function getFocusGroupService()
    {
        $this->throw('Cannot autowire service ".service_locator.vZtQWCT": it references class "App\\Entity\\FocusGroup" but no such service exists.');
    }

    /*
     * Gets the private '.service_locator.8TcS0eA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_8TcS0eAService()
    {
        return $this->privates['.service_locator.8TcS0eA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'headerHabit' => ['privates', '.errored..service_locator.8TcS0eA.App\\Entity\\HeaderHabit', NULL, 'Cannot autowire service ".service_locator.8TcS0eA": it references class "App\\Entity\\HeaderHabit" but no such service exists.'],
        ], [
            'headerHabit' => 'App\\Entity\\HeaderHabit',
        ]);
    }

    /*
     * Gets the private '.service_locator.AarjUXB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_AarjUXBService()
    {
        return $this->privates['.service_locator.AarjUXB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'authenticator' => ['privates', 'App\\Security\\SecurityAuthenticator', 'getSecurityAuthenticatorService', false],
            'guardHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', false],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
        ], [
            'authenticator' => 'App\\Security\\SecurityAuthenticator',
            'guardHandler' => '?',
            'passwordEncoder' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.BWknic2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_BWknic2Service()
    {
        return $this->privates['.service_locator.BWknic2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', false],
        ], [
            'mailer' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.CY_hMZh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_CYHMZhService()
    {
        return $this->privates['.service_locator.CY_hMZh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
        ], [
            'paginator' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.MpsgFRY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_MpsgFRYService()
    {
        return $this->privates['.service_locator.MpsgFRY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'category' => ['privates', '.errored..service_locator.MpsgFRY.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.MpsgFRY": it references class "App\\Entity\\Category" but no such service exists.'],
        ], [
            'category' => 'App\\Entity\\Category',
        ]);
    }

    /*
     * Gets the private '.service_locator.MzDPoPf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_MzDPoPfService()
    {
        return $this->privates['.service_locator.MzDPoPf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'newsletterRepository' => ['privates', 'App\\Repository\\HomePageRepository', 'getHomePageRepositoryService', false],
        ], [
            'newsletterRepository' => 'App\\Repository\\HomePageRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.OXBkp6k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_OXBkp6kService()
    {
        return $this->privates['.service_locator.OXBkp6k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'newsletterRepository' => ['privates', 'App\\Repository\\NewsletterRepository', 'getNewsletterRepositoryService', false],
        ], [
            'newsletterRepository' => 'App\\Repository\\NewsletterRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.Pf5uw8y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Pf5uw8yService()
    {
        return $this->privates['.service_locator.Pf5uw8y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'file' => ['privates', '.errored..service_locator.Pf5uw8y.Symfony\\Component\\HttpFoundation\\File\\UploadedFile', NULL, 'Cannot autowire service ".service_locator.Pf5uw8y": it references class "Symfony\\Component\\HttpFoundation\\File\\UploadedFile" but no such service exists.'],
        ], [
            'file' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ]);
    }

    /*
     * Gets the private '.service_locator.T6IeSqd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_T6IeSqdService()
    {
        return $this->privates['.service_locator.T6IeSqd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'configuration' => ['privates', '.errored..service_locator.T6IeSqd.App\\Entity\\Configuration', NULL, 'Cannot autowire service ".service_locator.T6IeSqd": it references class "App\\Entity\\Configuration" but no such service exists.'],
        ], [
            'configuration' => 'App\\Entity\\Configuration',
        ]);
    }

    /*
     * Gets the private '.service_locator.TgsPWAC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_TgsPWACService()
    {
        return $this->privates['.service_locator.TgsPWAC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'survey' => ['privates', '.errored..service_locator.TgsPWAC.App\\Entity\\Survey', NULL, 'Cannot autowire service ".service_locator.TgsPWAC": it references class "App\\Entity\\Survey" but no such service exists.'],
            'user' => ['privates', '.errored..service_locator.TgsPWAC.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.TgsPWAC": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'survey' => 'App\\Entity\\Survey',
            'user' => 'App\\Entity\\User',
        ]);
    }

    /*
     * Gets the private '.service_locator.UxMn1vC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_UxMn1vCService()
    {
        return $this->privates['.service_locator.UxMn1vC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'focusAccessCheck' => ['privates', 'App\\Services\\FocusAccessCheck', 'getFocusAccessCheck2Service', false],
            'survey' => ['privates', '.errored..service_locator.UxMn1vC.App\\Entity\\Survey', NULL, 'Cannot autowire service ".service_locator.UxMn1vC": it references class "App\\Entity\\Survey" but no such service exists.'],
        ], [
            'focusAccessCheck' => 'App\\Services\\FocusAccessCheck',
            'survey' => 'App\\Entity\\Survey',
        ]);
    }

    /*
     * Gets the private '.service_locator.ZVWr1aS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_ZVWr1aSService()
    {
        return $this->privates['.service_locator.ZVWr1aS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'categoryHabit' => ['privates', '.errored..service_locator.ZVWr1aS.App\\Entity\\CategoryHabit', NULL, 'Cannot autowire service ".service_locator.ZVWr1aS": it references class "App\\Entity\\CategoryHabit" but no such service exists.'],
        ], [
            'categoryHabit' => 'App\\Entity\\CategoryHabit',
        ]);
    }

    /*
     * Gets the private '.service_locator._SIjNgD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_SIjNgDService()
    {
        return $this->privates['.service_locator._SIjNgD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'newsletterRepository' => ['privates', 'App\\Repository\\NewsletterRepository', 'getNewsletterRepositoryService', false],
            'surveyService' => ['privates', 'App\\Services\\SurveyService', 'getSurveyServiceService', false],
        ], [
            'newsletterRepository' => 'App\\Repository\\NewsletterRepository',
            'surveyService' => 'App\\Services\\SurveyService',
        ]);
    }

    /*
     * Gets the private '.service_locator.bnQwmsP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_BnQwmsPService()
    {
        return $this->privates['.service_locator.bnQwmsP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'survey' => ['privates', '.errored..service_locator.bnQwmsP.App\\Entity\\Survey', NULL, 'Cannot autowire service ".service_locator.bnQwmsP": it references class "App\\Entity\\Survey" but no such service exists.'],
        ], [
            'survey' => 'App\\Entity\\Survey',
        ]);
    }

    /*
     * Gets the private '.service_locator.eQQdgh8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_EQQdgh8Service()
    {
        return $this->privates['.service_locator.eQQdgh8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'panelisteImportService' => ['services', 'App\\Services\\PanelisteImport', 'getPanelisteImportService', false],
        ], [
            'panelisteImportService' => 'App\\Services\\PanelisteImport',
        ]);
    }

    /*
     * Gets the private '.service_locator.hCrxVp4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_HCrxVp4Service()
    {
        return $this->privates['.service_locator.hCrxVp4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'configurationRepository' => ['privates', 'App\\Repository\\ConfigurationRepository', 'getConfigurationRepositoryService', false],
        ], [
            'configurationRepository' => 'App\\Repository\\ConfigurationRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.oCIKLvC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_OCIKLvCService()
    {
        return $this->privates['.service_locator.oCIKLvC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'link' => ['privates', '.errored..service_locator.oCIKLvC.App\\Entity\\Link', NULL, 'Cannot autowire service ".service_locator.oCIKLvC": it references class "App\\Entity\\Link" but no such service exists.'],
        ], [
            'link' => 'App\\Entity\\Link',
        ]);
    }

    /*
     * Gets the private '.service_locator.pNNo5z3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_PNNo5z3Service()
    {
        return $this->privates['.service_locator.pNNo5z3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.q6jLs_L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Q6jLsLService()
    {
        return $this->privates['.service_locator.q6jLs_L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'authenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
        ], [
            'authenticationUtils' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.sK.paRQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_SK_PaRQService()
    {
        return $this->privates['.service_locator.sK.paRQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'panelisteGroup' => ['privates', '.errored..service_locator.sK.paRQ.App\\Entity\\PanelisteGroup', NULL, 'Cannot autowire service ".service_locator.sK.paRQ": it references class "App\\Entity\\PanelisteGroup" but no such service exists.'],
        ], [
            'panelisteGroup' => 'App\\Entity\\PanelisteGroup',
        ]);
    }

    /*
     * Gets the private '.service_locator.tZd.pMB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_TZd_PMBService()
    {
        return $this->privates['.service_locator.tZd.pMB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'focusMessage' => ['privates', '.errored..service_locator.tZd.pMB.App\\Entity\\FocusMessage', NULL, 'Cannot autowire service ".service_locator.tZd.pMB": it references class "App\\Entity\\FocusMessage" but no such service exists.'],
        ], [
            'focusMessage' => 'App\\Entity\\FocusMessage',
        ]);
    }

    /*
     * Gets the private '.service_locator.vZtQWCT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VZtQWCTService()
    {
        return $this->privates['.service_locator.vZtQWCT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'focusGroup' => ['privates', '.errored..service_locator.vZtQWCT.App\\Entity\\FocusGroup', NULL, 'Cannot autowire service ".service_locator.vZtQWCT": it references class "App\\Entity\\FocusGroup" but no such service exists.'],
        ], [
            'focusGroup' => 'App\\Entity\\FocusGroup',
        ]);
    }

    /*
     * Gets the private 'App\Command\MailCommand' shared autowired service.
     *
     * @return \App\Command\MailCommand
     */
    protected function getMailCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/MailCommand.php';

        $this->privates['App\\Command\\MailCommand'] = $instance = new \App\Command\MailCommand(($this->privates['mailer.mailer'] ?? $this->getMailer_MailerService()), ($this->privates['App\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()));

        $instance->setName('MailCommand');

        return $instance;
    }

    /*
     * Gets the private 'App\Form\Backend\AdminType' shared autowired service.
     *
     * @return \App\Form\Backend\AdminType
     */
    protected function getAdminTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/AdminType.php';

        return $this->privates['App\\Form\\Backend\\AdminType'] = new \App\Form\Backend\AdminType();
    }

    /*
     * Gets the private 'App\Form\Backend\CategoryType' shared autowired service.
     *
     * @return \App\Form\Backend\CategoryType
     */
    protected function getCategoryTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/CategoryType.php';

        return $this->privates['App\\Form\\Backend\\CategoryType'] = new \App\Form\Backend\CategoryType();
    }

    /*
     * Gets the private 'App\Form\Backend\ConfigurationType' shared autowired service.
     *
     * @return \App\Form\Backend\ConfigurationType
     */
    protected function getConfigurationTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/ConfigurationType.php';

        return $this->privates['App\\Form\\Backend\\ConfigurationType'] = new \App\Form\Backend\ConfigurationType();
    }

    /*
     * Gets the private 'App\Form\Backend\DeleteType' shared autowired service.
     *
     * @return \App\Form\Backend\DeleteType
     */
    protected function getDeleteTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/DeleteType.php';

        return $this->privates['App\\Form\\Backend\\DeleteType'] = new \App\Form\Backend\DeleteType();
    }

    /*
     * Gets the private 'App\Form\Backend\FocusAccessType' shared autowired service.
     *
     * @return \App\Form\Backend\FocusAccessType
     */
    protected function getFocusAccessTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/FocusAccessType.php';

        return $this->privates['App\\Form\\Backend\\FocusAccessType'] = new \App\Form\Backend\FocusAccessType();
    }

    /*
     * Gets the private 'App\Form\Backend\FocusGroupType' shared autowired service.
     *
     * @return \App\Form\Backend\FocusGroupType
     */
    protected function getFocusGroupTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/FocusGroupType.php';

        return $this->privates['App\\Form\\Backend\\FocusGroupType'] = new \App\Form\Backend\FocusGroupType();
    }

    /*
     * Gets the private 'App\Form\Backend\FocusMessageType' shared autowired service.
     *
     * @return \App\Form\Backend\FocusMessageType
     */
    protected function getFocusMessageTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/FocusMessageType.php';

        return $this->privates['App\\Form\\Backend\\FocusMessageType'] = new \App\Form\Backend\FocusMessageType();
    }

    /*
     * Gets the private 'App\Form\Backend\ImpPanelisteGroupType' shared autowired service.
     *
     * @return \App\Form\Backend\ImpPanelisteGroupType
     */
    protected function getImpPanelisteGroupTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/ImpPanelisteGroupType.php';

        return $this->privates['App\\Form\\Backend\\ImpPanelisteGroupType'] = new \App\Form\Backend\ImpPanelisteGroupType();
    }

    /*
     * Gets the private 'App\Form\Backend\LegalNoticeType' shared autowired service.
     *
     * @return \App\Form\Backend\LegalNoticeType
     */
    protected function getLegalNoticeTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/LegalNoticeType.php';

        return $this->privates['App\\Form\\Backend\\LegalNoticeType'] = new \App\Form\Backend\LegalNoticeType();
    }

    /*
     * Gets the private 'App\Form\Backend\LinkType' shared autowired service.
     *
     * @return \App\Form\Backend\LinkType
     */
    protected function getLinkTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/LinkType.php';

        return $this->privates['App\\Form\\Backend\\LinkType'] = new \App\Form\Backend\LinkType();
    }

    /*
     * Gets the private 'App\Form\Backend\NewsletterType' shared autowired service.
     *
     * @return \App\Form\Backend\NewsletterType
     */
    protected function getNewsletterTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/NewsletterType.php';

        return $this->privates['App\\Form\\Backend\\NewsletterType'] = new \App\Form\Backend\NewsletterType();
    }

    /*
     * Gets the private 'App\Form\Backend\SyncRepliesType' shared autowired service.
     *
     * @return \App\Form\Backend\SyncRepliesType
     */
    protected function getSyncRepliesTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/SyncRepliesType.php';

        return $this->privates['App\\Form\\Backend\\SyncRepliesType'] = new \App\Form\Backend\SyncRepliesType();
    }

    /*
     * Gets the private 'App\Form\Backend\UserImportType' shared autowired service.
     *
     * @return \App\Form\Backend\UserImportType
     */
    protected function getUserImportTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/UserImportType.php';

        return $this->privates['App\\Form\\Backend\\UserImportType'] = new \App\Form\Backend\UserImportType();
    }

    /*
     * Gets the private 'App\Form\Backend\UserType' shared autowired service.
     *
     * @return \App\Form\Backend\UserType
     */
    protected function getUserTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Backend/UserType.php';

        return $this->privates['App\\Form\\Backend\\UserType'] = new \App\Form\Backend\UserType();
    }

    /*
     * Gets the private 'App\Form\CategoryHabitType' shared autowired service.
     *
     * @return \App\Form\CategoryHabitType
     */
    protected function getCategoryHabitTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CategoryHabitType.php';

        return $this->privates['App\\Form\\CategoryHabitType'] = new \App\Form\CategoryHabitType();
    }

    /*
     * Gets the private 'App\Form\ContactType' shared autowired service.
     *
     * @return \App\Form\ContactType
     */
    protected function getContactTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ContactType.php';

        return $this->privates['App\\Form\\ContactType'] = new \App\Form\ContactType();
    }

    /*
     * Gets the private 'App\Form\HomePageType' shared autowired service.
     *
     * @return \App\Form\HomePageType
     */
    protected function getHomePageTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/HomePageType.php';

        return $this->privates['App\\Form\\HomePageType'] = new \App\Form\HomePageType();
    }

    /*
     * Gets the private 'App\Form\InscriptionType' shared autowired service.
     *
     * @return \App\Form\InscriptionType
     */
    protected function getInscriptionTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/InscriptionType.php';

        return $this->privates['App\\Form\\InscriptionType'] = new \App\Form\InscriptionType();
    }

    /*
     * Gets the private 'App\Form\InvitationType' shared autowired service.
     *
     * @return \App\Form\InvitationType
     */
    protected function getInvitationTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/InvitationType.php';

        return $this->privates['App\\Form\\InvitationType'] = new \App\Form\InvitationType();
    }

    /*
     * Gets the private 'App\Form\PanelisteGroupType' shared autowired service.
     *
     * @return \App\Form\PanelisteGroupType
     */
    protected function getPanelisteGroupTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/PanelisteGroupType.php';

        return $this->privates['App\\Form\\PanelisteGroupType'] = new \App\Form\PanelisteGroupType();
    }

    /*
     * Gets the private 'App\Form\SurveyType' shared autowired service.
     *
     * @return \App\Form\SurveyType
     */
    protected function getSurveyTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/SurveyType.php';

        return $this->privates['App\\Form\\SurveyType'] = new \App\Form\SurveyType();
    }

    /*
     * Gets the private 'App\Form\TestAvenir\DeoType' shared autowired service.
     *
     * @return \App\Form\TestAvenir\DeoType
     */
    protected function getDeoTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/TestAvenir/DeoType.php';

        return $this->privates['App\\Form\\TestAvenir\\DeoType'] = new \App\Form\TestAvenir\DeoType();
    }

    /*
     * Gets the private 'App\Repository\AdminRepository' shared autowired service.
     *
     * @return \App\Repository\AdminRepository
     */
    protected function getAdminRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/AdminRepository.php';

        return $this->privates['App\\Repository\\AdminRepository'] = new \App\Repository\AdminRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\CategoryHabitRepository' shared autowired service.
     *
     * @return \App\Repository\CategoryHabitRepository
     */
    protected function getCategoryHabitRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/CategoryHabitRepository.php';

        return $this->privates['App\\Repository\\CategoryHabitRepository'] = new \App\Repository\CategoryHabitRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\CategoryRepository' shared autowired service.
     *
     * @return \App\Repository\CategoryRepository
     */
    protected function getCategoryRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/CategoryRepository.php';

        return $this->privates['App\\Repository\\CategoryRepository'] = new \App\Repository\CategoryRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ConfigurationRepository' shared autowired service.
     *
     * @return \App\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/ConfigurationRepository.php';

        return $this->privates['App\\Repository\\ConfigurationRepository'] = new \App\Repository\ConfigurationRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ContactRepository' shared autowired service.
     *
     * @return \App\Repository\ContactRepository
     */
    protected function getContactRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/ContactRepository.php';

        return $this->privates['App\\Repository\\ContactRepository'] = new \App\Repository\ContactRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\DeoRepository' shared autowired service.
     *
     * @return \App\Repository\DeoRepository
     */
    protected function getDeoRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/DeoRepository.php';

        return $this->privates['App\\Repository\\DeoRepository'] = new \App\Repository\DeoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\FocusAccessRepository' shared autowired service.
     *
     * @return \App\Repository\FocusAccessRepository
     */
    protected function getFocusAccessRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/FocusAccessRepository.php';

        return $this->privates['App\\Repository\\FocusAccessRepository'] = new \App\Repository\FocusAccessRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\FocusGroupRepository' shared autowired service.
     *
     * @return \App\Repository\FocusGroupRepository
     */
    protected function getFocusGroupRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/FocusGroupRepository.php';

        return $this->privates['App\\Repository\\FocusGroupRepository'] = new \App\Repository\FocusGroupRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\FocusMessageRepository' shared autowired service.
     *
     * @return \App\Repository\FocusMessageRepository
     */
    protected function getFocusMessageRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/FocusMessageRepository.php';

        return $this->privates['App\\Repository\\FocusMessageRepository'] = new \App\Repository\FocusMessageRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\FormTroisRepository' shared autowired service.
     *
     * @return \App\Repository\FormTroisRepository
     */
    protected function getFormTroisRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/FormTroisRepository.php';

        return $this->privates['App\\Repository\\FormTroisRepository'] = new \App\Repository\FormTroisRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\HeaderHabitRepository' shared autowired service.
     *
     * @return \App\Repository\HeaderHabitRepository
     */
    protected function getHeaderHabitRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/HeaderHabitRepository.php';

        return $this->privates['App\\Repository\\HeaderHabitRepository'] = new \App\Repository\HeaderHabitRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\HomePageRepository' shared autowired service.
     *
     * @return \App\Repository\HomePageRepository
     */
    protected function getHomePageRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/HomePageRepository.php';

        return $this->privates['App\\Repository\\HomePageRepository'] = new \App\Repository\HomePageRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\InscRepository' shared autowired service.
     *
     * @return \App\Repository\InscRepository
     */
    protected function getInscRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/InscRepository.php';

        return $this->privates['App\\Repository\\InscRepository'] = new \App\Repository\InscRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\InscriptionRepository' shared autowired service.
     *
     * @return \App\Repository\InscriptionRepository
     */
    protected function getInscriptionRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/InscriptionRepository.php';

        return $this->privates['App\\Repository\\InscriptionRepository'] = new \App\Repository\InscriptionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\InvitationRepository' shared autowired service.
     *
     * @return \App\Repository\InvitationRepository
     */
    protected function getInvitationRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/InvitationRepository.php';

        return $this->privates['App\\Repository\\InvitationRepository'] = new \App\Repository\InvitationRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\LinkLogRepository' shared autowired service.
     *
     * @return \App\Repository\LinkLogRepository
     */
    protected function getLinkLogRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/LinkLogRepository.php';

        return $this->privates['App\\Repository\\LinkLogRepository'] = new \App\Repository\LinkLogRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\LinkRepository' shared autowired service.
     *
     * @return \App\Repository\LinkRepository
     */
    protected function getLinkRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/LinkRepository.php';

        return $this->privates['App\\Repository\\LinkRepository'] = new \App\Repository\LinkRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\NameRepository' shared autowired service.
     *
     * @return \App\Repository\NameRepository
     */
    protected function getNameRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/NameRepository.php';

        return $this->privates['App\\Repository\\NameRepository'] = new \App\Repository\NameRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\NewsletterRepository' shared autowired service.
     *
     * @return \App\Repository\NewsletterRepository
     */
    protected function getNewsletterRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/NewsletterRepository.php';

        return $this->privates['App\\Repository\\NewsletterRepository'] = new \App\Repository\NewsletterRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\PDeuxInsRepository' shared autowired service.
     *
     * @return \App\Repository\PDeuxInsRepository
     */
    protected function getPDeuxInsRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/PDeuxInsRepository.php';

        return $this->privates['App\\Repository\\PDeuxInsRepository'] = new \App\Repository\PDeuxInsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\PanelisteGroupRepository' shared autowired service.
     *
     * @return \App\Repository\PanelisteGroupRepository
     */
    protected function getPanelisteGroupRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/PanelisteGroupRepository.php';

        return $this->privates['App\\Repository\\PanelisteGroupRepository'] = new \App\Repository\PanelisteGroupRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\RolesRepository' shared autowired service.
     *
     * @return \App\Repository\RolesRepository
     */
    protected function getRolesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/RolesRepository.php';

        return $this->privates['App\\Repository\\RolesRepository'] = new \App\Repository\RolesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\StaticPageRepository' shared autowired service.
     *
     * @return \App\Repository\StaticPageRepository
     */
    protected function getStaticPageRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/StaticPageRepository.php';

        return $this->privates['App\\Repository\\StaticPageRepository'] = new \App\Repository\StaticPageRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\SurveyRepository' shared autowired service.
     *
     * @return \App\Repository\SurveyRepository
     */
    protected function getSurveyRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/SurveyRepository.php';

        return $this->privates['App\\Repository\\SurveyRepository'] = new \App\Repository\SurveyRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\TestMigrationRepository' shared autowired service.
     *
     * @return \App\Repository\TestMigrationRepository
     */
    protected function getTestMigrationRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/TestMigrationRepository.php';

        return $this->privates['App\\Repository\\TestMigrationRepository'] = new \App\Repository\TestMigrationRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\UserRepository' shared autowired service.
     *
     * @return \App\Repository\UserRepository
     */
    protected function getUserRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/UserRepository.php';

        return $this->privates['App\\Repository\\UserRepository'] = new \App\Repository\UserRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Security\SecurityAdminAuthenticator' shared autowired service.
     *
     * @return \App\Security\SecurityAdminAuthenticator
     */
    protected function getSecurityAdminAuthenticatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Authenticator/AbstractFormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/PasswordAuthenticatedInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Security/SecurityAdminAuthenticator.php';

        return $this->privates['App\\Security\\SecurityAdminAuthenticator'] = new \App\Security\SecurityAdminAuthenticator(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()), ($this->privates['security.helper'] ?? $this->getSecurity_HelperService()));
    }

    /*
     * Gets the private 'App\Security\SecurityAuthenticator' shared autowired service.
     *
     * @return \App\Security\SecurityAuthenticator
     */
    protected function getSecurityAuthenticatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Authenticator/AbstractFormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/PasswordAuthenticatedInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Security/SecurityAuthenticator.php';

        return $this->privates['App\\Security\\SecurityAuthenticator'] = new \App\Security\SecurityAuthenticator(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()), ($this->privates['security.helper'] ?? $this->getSecurity_HelperService()));
    }

    /*
     * Gets the private 'App\Services\FocusAccessCheck' shared autowired service.
     *
     * @return \App\Services\FocusAccessCheck
     */
    protected function getFocusAccessCheck2Service()
    {
        include_once \dirname(__DIR__, 4).'/src/Services/FocusAccessCheck.php';

        return $this->privates['App\\Services\\FocusAccessCheck'] = new \App\Services\FocusAccessCheck(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Services\\SurveyService'] ?? $this->getSurveyServiceService()));
    }

    /*
     * Gets the private 'App\Services\SurveyService' shared autowired service.
     *
     * @return \App\Services\SurveyService
     */
    protected function getSurveyServiceService()
    {
        include_once \dirname(__DIR__, 4).'/src/Services/SurveyService.php';

        return $this->privates['App\\Services\\SurveyService'] = new \App\Services\SurveyService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'Vich\UploaderBundle\Metadata\CacheWarmer' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\CacheWarmer
     */
    protected function getCacheWarmer2Service()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/CacheWarmer.php';

        return $this->privates['Vich\\UploaderBundle\\Metadata\\CacheWarmer'] = new \Vich\UploaderBundle\Metadata\CacheWarmer(($this->targetDir.''.'/vich_uploader'), ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()));
    }

    /*
     * Gets the private 'Vich\UploaderBundle\Util\Transliterator' shared service.
     *
     * @return \Vich\UploaderBundle\Util\Transliterator
     */
    protected function getTransliteratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Util/Transliterator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/SluggerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/AsciiSlugger.php';

        return $this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] = new \Vich\UploaderBundle\Util\Transliterator(($this->privates['slugger'] ?? ($this->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('fr'))));
    }

    /*
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getAnnotations_CacheService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ProxyTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';

        return new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
    }

    /*
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php';

        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', false);
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheService(), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Controller\\Backend\\CategoryController::deleteAction' => ['privates', '.service_locator.MpsgFRY', 'get_ServiceLocator_MpsgFRYService', false],
            'App\\Controller\\Backend\\CategoryController::editAction' => ['privates', '.service_locator.MpsgFRY', 'get_ServiceLocator_MpsgFRYService', false],
            'App\\Controller\\Backend\\CategoryController::showAction' => ['privates', '.service_locator.MpsgFRY', 'get_ServiceLocator_MpsgFRYService', false],
            'App\\Controller\\Backend\\CategoryHabitController::deleteAction' => ['privates', '.service_locator.ZVWr1aS', 'get_ServiceLocator_ZVWr1aSService', false],
            'App\\Controller\\Backend\\CategoryHabitController::editAction' => ['privates', '.service_locator.ZVWr1aS', 'get_ServiceLocator_ZVWr1aSService', false],
            'App\\Controller\\Backend\\CategoryHabitController::showAction' => ['privates', '.service_locator.ZVWr1aS', 'get_ServiceLocator_ZVWr1aSService', false],
            'App\\Controller\\Backend\\ConfigurationController::delete' => ['privates', '.service_locator.T6IeSqd', 'get_ServiceLocator_T6IeSqdService', false],
            'App\\Controller\\Backend\\ConfigurationController::edit' => ['privates', '.service_locator.T6IeSqd', 'get_ServiceLocator_T6IeSqdService', false],
            'App\\Controller\\Backend\\ConfigurationController::index' => ['privates', '.service_locator.hCrxVp4', 'get_ServiceLocator_HCrxVp4Service', false],
            'App\\Controller\\Backend\\ConfigurationController::show' => ['privates', '.service_locator.T6IeSqd', 'get_ServiceLocator_T6IeSqdService', false],
            'App\\Controller\\Backend\\FocusGroupController::accessEditAction' => ['privates', '.service_locator.TgsPWAC', 'get_ServiceLocator_TgsPWACService', false],
            'App\\Controller\\Backend\\FocusGroupController::accessesAction' => ['privates', '.service_locator.UxMn1vC', 'get_ServiceLocator_UxMn1vCService', false],
            'App\\Controller\\Backend\\FocusGroupController::editMessageAction' => ['privates', '.service_locator.tZd.pMB', 'get_ServiceLocator_TZd_PMBService', false],
            'App\\Controller\\Backend\\FocusGroupController::exportAbsentsAction' => ['privates', '.service_locator.vZtQWCT', 'get_ServiceLocator_VZtQWCTService', false],
            'App\\Controller\\Backend\\FocusGroupController::exportParticipantsAction' => ['privates', '.service_locator.vZtQWCT', 'get_ServiceLocator_VZtQWCTService', false],
            'App\\Controller\\Backend\\FocusGroupController::replyMessageAction' => ['privates', '.service_locator.tZd.pMB', 'get_ServiceLocator_TZd_PMBService', false],
            'App\\Controller\\Backend\\FocusGroupController::showAction' => ['privates', '.service_locator.bnQwmsP', 'get_ServiceLocator_BnQwmsPService', false],
            'App\\Controller\\Backend\\FocusGroupController::validateMessageAction' => ['privates', '.service_locator.tZd.pMB', 'get_ServiceLocator_TZd_PMBService', false],
            'App\\Controller\\Backend\\HeaderHabitController::deleteAction' => ['privates', '.service_locator.8TcS0eA', 'get_ServiceLocator_8TcS0eAService', false],
            'App\\Controller\\Backend\\HeaderHabitController::editAction' => ['privates', '.service_locator.8TcS0eA', 'get_ServiceLocator_8TcS0eAService', false],
            'App\\Controller\\Backend\\HeaderHabitController::showAction' => ['privates', '.service_locator.8TcS0eA', 'get_ServiceLocator_8TcS0eAService', false],
            'App\\Controller\\Backend\\HomePageController::index' => ['privates', '.service_locator.MzDPoPf', 'get_ServiceLocator_MzDPoPfService', false],
            'App\\Controller\\Backend\\LinkController::accessDetailsAction' => ['privates', '.service_locator.oCIKLvC', 'get_ServiceLocator_OCIKLvCService', false],
            'App\\Controller\\Backend\\LinkController::exportMissingsAction' => ['privates', '.service_locator.oCIKLvC', 'get_ServiceLocator_OCIKLvCService', false],
            'App\\Controller\\Backend\\LinkController::repliesDetailsAction' => ['privates', '.service_locator.oCIKLvC', 'get_ServiceLocator_OCIKLvCService', false],
            'App\\Controller\\Backend\\LinkController::syncRepliesAction' => ['privates', '.service_locator.oCIKLvC', 'get_ServiceLocator_OCIKLvCService', false],
            'App\\Controller\\Backend\\NewsletterController::index' => ['privates', '.service_locator.OXBkp6k', 'get_ServiceLocator_OXBkp6kService', false],
            'App\\Controller\\Backend\\PanelisteGroupController::deleteAction' => ['privates', '.service_locator.sK.paRQ', 'get_ServiceLocator_SK_PaRQService', false],
            'App\\Controller\\Backend\\PanelisteGroupController::editAction' => ['privates', '.service_locator.sK.paRQ', 'get_ServiceLocator_SK_PaRQService', false],
            'App\\Controller\\Backend\\PanelisteGroupController::showAction' => ['privates', '.service_locator.sK.paRQ', 'get_ServiceLocator_SK_PaRQService', false],
            'App\\Controller\\Backend\\RegistrationController::register' => ['privates', '.service_locator.AarjUXB', 'get_ServiceLocator_AarjUXBService', false],
            'App\\Controller\\Backend\\SurveyController::deleteAction' => ['privates', '.service_locator.bnQwmsP', 'get_ServiceLocator_BnQwmsPService', false],
            'App\\Controller\\Backend\\SurveyController::editAction' => ['privates', '.service_locator.bnQwmsP', 'get_ServiceLocator_BnQwmsPService', false],
            'App\\Controller\\Backend\\SurveyController::generateUniqueFileName' => ['privates', '.service_locator.Pf5uw8y', 'get_ServiceLocator_Pf5uw8yService', false],
            'App\\Controller\\Backend\\SurveyController::showAction' => ['privates', '.service_locator.bnQwmsP', 'get_ServiceLocator_BnQwmsPService', false],
            'App\\Controller\\Backend\\UserController::importAction' => ['privates', '.service_locator.eQQdgh8', 'get_ServiceLocator_EQQdgh8Service', false],
            'App\\Controller\\Backend\\UserController::indexAction' => ['privates', '.service_locator.CY_hMZh', 'get_ServiceLocator_CYHMZhService', false],
            'App\\Controller\\Frontend\\AccueilController::index' => ['privates', '.service_locator._SIjNgD', 'get_ServiceLocator_SIjNgDService', false],
            'App\\Controller\\Frontend\\ContactController::index' => ['privates', '.service_locator.BWknic2', 'get_ServiceLocator_BWknic2Service', false],
            'App\\Controller\\Frontend\\PdfController::index' => ['privates', '.service_locator.UxMn1vC', 'get_ServiceLocator_UxMn1vCService', false],
            'App\\Controller\\Frontend\\SurveyController::detailsAction' => ['privates', '.service_locator.UxMn1vC', 'get_ServiceLocator_UxMn1vCService', false],
            'App\\Controller\\Security\\SecurityAdminController::login' => ['privates', '.service_locator.q6jLs_L', 'get_ServiceLocator_Q6jLsLService', false],
            'App\\Controller\\Security\\SecurityController::login' => ['privates', '.service_locator.q6jLs_L', 'get_ServiceLocator_Q6jLsLService', false],
            'App\\Controller\\TestAvenir\\DeoController::create' => ['privates', '.service_locator.BWknic2', 'get_ServiceLocator_BWknic2Service', false],
            'App\\Controller\\Backend\\CategoryController:deleteAction' => ['privates', '.service_locator.MpsgFRY', 'get_ServiceLocator_MpsgFRYService', false],
            'App\\Controller\\Backend\\CategoryController:editAction' => ['privates', '.service_locator.MpsgFRY', 'get_ServiceLocator_MpsgFRYService', false],
            'App\\Controller\\Backend\\CategoryController:showAction' => ['privates', '.service_locator.MpsgFRY', 'get_ServiceLocator_MpsgFRYService', false],
            'App\\Controller\\Backend\\CategoryHabitController:deleteAction' => ['privates', '.service_locator.ZVWr1aS', 'get_ServiceLocator_ZVWr1aSService', false],
            'App\\Controller\\Backend\\CategoryHabitController:editAction' => ['privates', '.service_locator.ZVWr1aS', 'get_ServiceLocator_ZVWr1aSService', false],
            'App\\Controller\\Backend\\CategoryHabitController:showAction' => ['privates', '.service_locator.ZVWr1aS', 'get_ServiceLocator_ZVWr1aSService', false],
            'App\\Controller\\Backend\\ConfigurationController:delete' => ['privates', '.service_locator.T6IeSqd', 'get_ServiceLocator_T6IeSqdService', false],
            'App\\Controller\\Backend\\ConfigurationController:edit' => ['privates', '.service_locator.T6IeSqd', 'get_ServiceLocator_T6IeSqdService', false],
            'App\\Controller\\Backend\\ConfigurationController:index' => ['privates', '.service_locator.hCrxVp4', 'get_ServiceLocator_HCrxVp4Service', false],
            'App\\Controller\\Backend\\ConfigurationController:show' => ['privates', '.service_locator.T6IeSqd', 'get_ServiceLocator_T6IeSqdService', false],
            'App\\Controller\\Backend\\FocusGroupController:accessEditAction' => ['privates', '.service_locator.TgsPWAC', 'get_ServiceLocator_TgsPWACService', false],
            'App\\Controller\\Backend\\FocusGroupController:accessesAction' => ['privates', '.service_locator.UxMn1vC', 'get_ServiceLocator_UxMn1vCService', false],
            'App\\Controller\\Backend\\FocusGroupController:editMessageAction' => ['privates', '.service_locator.tZd.pMB', 'get_ServiceLocator_TZd_PMBService', false],
            'App\\Controller\\Backend\\FocusGroupController:exportAbsentsAction' => ['privates', '.service_locator.vZtQWCT', 'get_ServiceLocator_VZtQWCTService', false],
            'App\\Controller\\Backend\\FocusGroupController:exportParticipantsAction' => ['privates', '.service_locator.vZtQWCT', 'get_ServiceLocator_VZtQWCTService', false],
            'App\\Controller\\Backend\\FocusGroupController:replyMessageAction' => ['privates', '.service_locator.tZd.pMB', 'get_ServiceLocator_TZd_PMBService', false],
            'App\\Controller\\Backend\\FocusGroupController:showAction' => ['privates', '.service_locator.bnQwmsP', 'get_ServiceLocator_BnQwmsPService', false],
            'App\\Controller\\Backend\\FocusGroupController:validateMessageAction' => ['privates', '.service_locator.tZd.pMB', 'get_ServiceLocator_TZd_PMBService', false],
            'App\\Controller\\Backend\\HeaderHabitController:deleteAction' => ['privates', '.service_locator.8TcS0eA', 'get_ServiceLocator_8TcS0eAService', false],
            'App\\Controller\\Backend\\HeaderHabitController:editAction' => ['privates', '.service_locator.8TcS0eA', 'get_ServiceLocator_8TcS0eAService', false],
            'App\\Controller\\Backend\\HeaderHabitController:showAction' => ['privates', '.service_locator.8TcS0eA', 'get_ServiceLocator_8TcS0eAService', false],
            'App\\Controller\\Backend\\HomePageController:index' => ['privates', '.service_locator.MzDPoPf', 'get_ServiceLocator_MzDPoPfService', false],
            'App\\Controller\\Backend\\LinkController:accessDetailsAction' => ['privates', '.service_locator.oCIKLvC', 'get_ServiceLocator_OCIKLvCService', false],
            'App\\Controller\\Backend\\LinkController:exportMissingsAction' => ['privates', '.service_locator.oCIKLvC', 'get_ServiceLocator_OCIKLvCService', false],
            'App\\Controller\\Backend\\LinkController:repliesDetailsAction' => ['privates', '.service_locator.oCIKLvC', 'get_ServiceLocator_OCIKLvCService', false],
            'App\\Controller\\Backend\\LinkController:syncRepliesAction' => ['privates', '.service_locator.oCIKLvC', 'get_ServiceLocator_OCIKLvCService', false],
            'App\\Controller\\Backend\\NewsletterController:index' => ['privates', '.service_locator.OXBkp6k', 'get_ServiceLocator_OXBkp6kService', false],
            'App\\Controller\\Backend\\PanelisteGroupController:deleteAction' => ['privates', '.service_locator.sK.paRQ', 'get_ServiceLocator_SK_PaRQService', false],
            'App\\Controller\\Backend\\PanelisteGroupController:editAction' => ['privates', '.service_locator.sK.paRQ', 'get_ServiceLocator_SK_PaRQService', false],
            'App\\Controller\\Backend\\PanelisteGroupController:showAction' => ['privates', '.service_locator.sK.paRQ', 'get_ServiceLocator_SK_PaRQService', false],
            'App\\Controller\\Backend\\RegistrationController:register' => ['privates', '.service_locator.AarjUXB', 'get_ServiceLocator_AarjUXBService', false],
            'App\\Controller\\Backend\\SurveyController:deleteAction' => ['privates', '.service_locator.bnQwmsP', 'get_ServiceLocator_BnQwmsPService', false],
            'App\\Controller\\Backend\\SurveyController:editAction' => ['privates', '.service_locator.bnQwmsP', 'get_ServiceLocator_BnQwmsPService', false],
            'App\\Controller\\Backend\\SurveyController:generateUniqueFileName' => ['privates', '.service_locator.Pf5uw8y', 'get_ServiceLocator_Pf5uw8yService', false],
            'App\\Controller\\Backend\\SurveyController:showAction' => ['privates', '.service_locator.bnQwmsP', 'get_ServiceLocator_BnQwmsPService', false],
            'App\\Controller\\Backend\\UserController:importAction' => ['privates', '.service_locator.eQQdgh8', 'get_ServiceLocator_EQQdgh8Service', false],
            'App\\Controller\\Backend\\UserController:indexAction' => ['privates', '.service_locator.CY_hMZh', 'get_ServiceLocator_CYHMZhService', false],
            'App\\Controller\\Frontend\\AccueilController:index' => ['privates', '.service_locator._SIjNgD', 'get_ServiceLocator_SIjNgDService', false],
            'App\\Controller\\Frontend\\ContactController:index' => ['privates', '.service_locator.BWknic2', 'get_ServiceLocator_BWknic2Service', false],
            'App\\Controller\\Frontend\\PdfController:index' => ['privates', '.service_locator.UxMn1vC', 'get_ServiceLocator_UxMn1vCService', false],
            'App\\Controller\\Frontend\\SurveyController:detailsAction' => ['privates', '.service_locator.UxMn1vC', 'get_ServiceLocator_UxMn1vCService', false],
            'App\\Controller\\Security\\SecurityAdminController:login' => ['privates', '.service_locator.q6jLs_L', 'get_ServiceLocator_Q6jLsLService', false],
            'App\\Controller\\Security\\SecurityController:login' => ['privates', '.service_locator.q6jLs_L', 'get_ServiceLocator_Q6jLsLService', false],
            'App\\Controller\\TestAvenir\\DeoController:create' => ['privates', '.service_locator.BWknic2', 'get_ServiceLocator_BWknic2Service', false],
        ], [
            'App\\Controller\\Backend\\CategoryController::deleteAction' => '?',
            'App\\Controller\\Backend\\CategoryController::editAction' => '?',
            'App\\Controller\\Backend\\CategoryController::showAction' => '?',
            'App\\Controller\\Backend\\CategoryHabitController::deleteAction' => '?',
            'App\\Controller\\Backend\\CategoryHabitController::editAction' => '?',
            'App\\Controller\\Backend\\CategoryHabitController::showAction' => '?',
            'App\\Controller\\Backend\\ConfigurationController::delete' => '?',
            'App\\Controller\\Backend\\ConfigurationController::edit' => '?',
            'App\\Controller\\Backend\\ConfigurationController::index' => '?',
            'App\\Controller\\Backend\\ConfigurationController::show' => '?',
            'App\\Controller\\Backend\\FocusGroupController::accessEditAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController::accessesAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController::editMessageAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController::exportAbsentsAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController::exportParticipantsAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController::replyMessageAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController::showAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController::validateMessageAction' => '?',
            'App\\Controller\\Backend\\HeaderHabitController::deleteAction' => '?',
            'App\\Controller\\Backend\\HeaderHabitController::editAction' => '?',
            'App\\Controller\\Backend\\HeaderHabitController::showAction' => '?',
            'App\\Controller\\Backend\\HomePageController::index' => '?',
            'App\\Controller\\Backend\\LinkController::accessDetailsAction' => '?',
            'App\\Controller\\Backend\\LinkController::exportMissingsAction' => '?',
            'App\\Controller\\Backend\\LinkController::repliesDetailsAction' => '?',
            'App\\Controller\\Backend\\LinkController::syncRepliesAction' => '?',
            'App\\Controller\\Backend\\NewsletterController::index' => '?',
            'App\\Controller\\Backend\\PanelisteGroupController::deleteAction' => '?',
            'App\\Controller\\Backend\\PanelisteGroupController::editAction' => '?',
            'App\\Controller\\Backend\\PanelisteGroupController::showAction' => '?',
            'App\\Controller\\Backend\\RegistrationController::register' => '?',
            'App\\Controller\\Backend\\SurveyController::deleteAction' => '?',
            'App\\Controller\\Backend\\SurveyController::editAction' => '?',
            'App\\Controller\\Backend\\SurveyController::generateUniqueFileName' => '?',
            'App\\Controller\\Backend\\SurveyController::showAction' => '?',
            'App\\Controller\\Backend\\UserController::importAction' => '?',
            'App\\Controller\\Backend\\UserController::indexAction' => '?',
            'App\\Controller\\Frontend\\AccueilController::index' => '?',
            'App\\Controller\\Frontend\\ContactController::index' => '?',
            'App\\Controller\\Frontend\\PdfController::index' => '?',
            'App\\Controller\\Frontend\\SurveyController::detailsAction' => '?',
            'App\\Controller\\Security\\SecurityAdminController::login' => '?',
            'App\\Controller\\Security\\SecurityController::login' => '?',
            'App\\Controller\\TestAvenir\\DeoController::create' => '?',
            'App\\Controller\\Backend\\CategoryController:deleteAction' => '?',
            'App\\Controller\\Backend\\CategoryController:editAction' => '?',
            'App\\Controller\\Backend\\CategoryController:showAction' => '?',
            'App\\Controller\\Backend\\CategoryHabitController:deleteAction' => '?',
            'App\\Controller\\Backend\\CategoryHabitController:editAction' => '?',
            'App\\Controller\\Backend\\CategoryHabitController:showAction' => '?',
            'App\\Controller\\Backend\\ConfigurationController:delete' => '?',
            'App\\Controller\\Backend\\ConfigurationController:edit' => '?',
            'App\\Controller\\Backend\\ConfigurationController:index' => '?',
            'App\\Controller\\Backend\\ConfigurationController:show' => '?',
            'App\\Controller\\Backend\\FocusGroupController:accessEditAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController:accessesAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController:editMessageAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController:exportAbsentsAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController:exportParticipantsAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController:replyMessageAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController:showAction' => '?',
            'App\\Controller\\Backend\\FocusGroupController:validateMessageAction' => '?',
            'App\\Controller\\Backend\\HeaderHabitController:deleteAction' => '?',
            'App\\Controller\\Backend\\HeaderHabitController:editAction' => '?',
            'App\\Controller\\Backend\\HeaderHabitController:showAction' => '?',
            'App\\Controller\\Backend\\HomePageController:index' => '?',
            'App\\Controller\\Backend\\LinkController:accessDetailsAction' => '?',
            'App\\Controller\\Backend\\LinkController:exportMissingsAction' => '?',
            'App\\Controller\\Backend\\LinkController:repliesDetailsAction' => '?',
            'App\\Controller\\Backend\\LinkController:syncRepliesAction' => '?',
            'App\\Controller\\Backend\\NewsletterController:index' => '?',
            'App\\Controller\\Backend\\PanelisteGroupController:deleteAction' => '?',
            'App\\Controller\\Backend\\PanelisteGroupController:editAction' => '?',
            'App\\Controller\\Backend\\PanelisteGroupController:showAction' => '?',
            'App\\Controller\\Backend\\RegistrationController:register' => '?',
            'App\\Controller\\Backend\\SurveyController:deleteAction' => '?',
            'App\\Controller\\Backend\\SurveyController:editAction' => '?',
            'App\\Controller\\Backend\\SurveyController:generateUniqueFileName' => '?',
            'App\\Controller\\Backend\\SurveyController:showAction' => '?',
            'App\\Controller\\Backend\\UserController:importAction' => '?',
            'App\\Controller\\Backend\\UserController:indexAction' => '?',
            'App\\Controller\\Frontend\\AccueilController:index' => '?',
            'App\\Controller\\Frontend\\ContactController:index' => '?',
            'App\\Controller\\Frontend\\PdfController:index' => '?',
            'App\\Controller\\Frontend\\SurveyController:detailsAction' => '?',
            'App\\Controller\\Security\\SecurityAdminController:login' => '?',
            'App\\Controller\\Security\\SecurityController:login' => '?',
            'App\\Controller\\TestAvenir\\DeoController:create' => '?',
        ]));
    }

    /*
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Packages.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PathPackage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/ContextInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/RequestStackContext.php';

        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy((\dirname(__DIR__, 4).'/public/build/manifest.json')), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('3+gwMbKm2H', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyAccessService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';

        return $this->privates['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('VDk8bfW3EJ', 0, $this->getParameter('container.build_id'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyInfoService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->privates['cache.property_info'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('oxBZ7olNqN', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->privates['cache.security_expression_language'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('e4gIZxP-nc', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SerializerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->privates['cache.serializer'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('XCM5tlRs1h', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->privates['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('oYNt-6MoQA', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.webpack_encore' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_WebpackEncoreService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->privates['cache.webpack_encore'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('-LS3WWWn7C', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /*
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CacheClearCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'doctrine.result_cache_pool', 7 => 'doctrine.system_cache_pool', 8 => 'cache.property_access', 9 => 'cache.security_expression_language', 10 => 'cache.webpack_encore']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService());
        }, 2));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /*
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /*
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Command/DebugCommand.php';

        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form\\Backend', 2 => 'App\\Form', 3 => 'App\\Form\\TestAvenir', 4 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 5 => 'Vich\\UploaderBundle\\Form\\Type', 6 => 'FOS\\CKEditorBundle\\Form\\Type', 7 => 'Liip\\ImagineBundle\\Form\\Type'], [0 => 'App\\Form\\Backend\\AdminType', 1 => 'App\\Form\\Backend\\CategoryType', 2 => 'App\\Form\\Backend\\ConfigurationType', 3 => 'App\\Form\\Backend\\DeleteType', 4 => 'App\\Form\\Backend\\FocusAccessType', 5 => 'App\\Form\\Backend\\FocusGroupType', 6 => 'App\\Form\\Backend\\FocusMessageType', 7 => 'App\\Form\\Backend\\ImpPanelisteGroupType', 8 => 'App\\Form\\Backend\\LegalNoticeType', 9 => 'App\\Form\\Backend\\LinkType', 10 => 'App\\Form\\Backend\\NewsletterType', 11 => 'App\\Form\\Backend\\SyncRepliesType', 12 => 'App\\Form\\Backend\\UserImportType', 13 => 'App\\Form\\Backend\\UserType', 14 => 'App\\Form\\CategoryHabitType', 15 => 'App\\Form\\ContactType', 16 => 'App\\Form\\HomePageType', 17 => 'App\\Form\\InscriptionType', 18 => 'App\\Form\\InvitationType', 19 => 'App\\Form\\PanelisteGroupType', 20 => 'App\\Form\\SurveyType', 21 => 'App\\Form\\TestAvenir\\DeoType', 22 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 23 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 24 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 25 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 26 => 'Vich\\UploaderBundle\\Form\\Type\\VichFileType', 27 => 'Vich\\UploaderBundle\\Form\\Type\\VichImageType', 28 => 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType', 29 => 'Liip\\ImagineBundle\\Form\\Type\\ImageType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:form');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:router');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsListCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsSetCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /*
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/templates'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Helper/Processor.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /*
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PhpFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/XliffFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PoFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/MoFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/YamlFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/QtFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/CsvFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IniFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/JsonFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IcuResFileDumper.php';

        $a = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'fr', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/templates'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Helper/Processor.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /*
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Command/XliffLintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/XliffLintCommand.php';

        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /*
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/yaml/Command/LintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /*
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/EventListener/ErrorListener.php';

        $a = new \Symfony\Bridge\Monolog\Logger('console');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);
    }

    /*
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushHandler(($this->privates['monolog.handler.deprecation_filter'] ?? $this->getMonolog_Handler_DeprecationFilterService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), false);
    }

    /*
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/MetadataCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearMetadataCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearQueryCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/ResultCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearResultCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/CollectionRegionDoctrineCommand.php';

        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/EntityRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/EntityRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/QueryRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DropDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ImportCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ImportDoctrineCommand.php';

        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/EnsureProductionSettingsCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/EnsureProductionSettingsDoctrineCommand.php';

        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ConvertMappingCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ConvertMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/ImportMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/InfoCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/InfoDoctrineCommand.php';

        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/PropertyInfo/DoctrineExtractor.php';

        return $this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';

        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/CacheWarmer/ProxyCacheWarmer.php';

        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/Constraints/UniqueEntityValidator.php';

        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/RunDqlDoctrineCommand.php';

        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/RunSqlDoctrineCommand.php';

        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.result_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getDoctrine_ResultCachePoolService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $this->privates['doctrine.result_cache_pool'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('TO7cF3bOma', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/CreateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/CreateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/DropCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/DropSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/UpdateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/UpdateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ValidateSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ValidateSchemaCommand.php';

        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.system_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getDoctrine_SystemCachePoolService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->privates['doctrine.system_cache_pool'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('rMZzA+LcMW', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DiffCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDiffDoctrineCommand.php';

        $this->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();

        $instance->setName('doctrine:migrations:diff');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand
     */
    protected function getDoctrineMigrations_DumpSchemaCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDumpSchemaDoctrineCommand.php';

        $this->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand();

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ExecuteCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsExecuteDoctrineCommand.php';

        $this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();

        $instance->setName('doctrine:migrations:execute');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/GenerateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsGenerateDoctrineCommand.php';

        $this->privates['doctrine_migrations.generate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand();

        $instance->setName('doctrine:migrations:generate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsLatestDoctrineCommand.php';

        $this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/MigrateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsMigrateDoctrineCommand.php';

        $this->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand();

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.rollup_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand
     */
    protected function getDoctrineMigrations_RollupCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsRollupDoctrineCommand.php';

        $this->privates['doctrine_migrations.rollup_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand();

        $instance->setName('doctrine:migrations:rollup');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/StatusCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsStatusDoctrineCommand.php';

        $this->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand();

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand
     */
    protected function getDoctrineMigrations_UpToDateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsUpToDateDoctrineCommand.php';

        $this->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand();

        $instance->setName('doctrine:migrations:up-to-date');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/VersionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsVersionDoctrineCommand.php';

        $this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();

        $instance->setName('doctrine:migrations:version');

        return $instance;
    }

    /*
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), false);
    }

    /*
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/PropertyAccessDecorator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php';

        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())));
    }

    /*
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Form\\Backend\\AdminType' => ['privates', 'App\\Form\\Backend\\AdminType', 'getAdminTypeService', false],
            'App\\Form\\Backend\\CategoryType' => ['privates', 'App\\Form\\Backend\\CategoryType', 'getCategoryTypeService', false],
            'App\\Form\\Backend\\ConfigurationType' => ['privates', 'App\\Form\\Backend\\ConfigurationType', 'getConfigurationTypeService', false],
            'App\\Form\\Backend\\DeleteType' => ['privates', 'App\\Form\\Backend\\DeleteType', 'getDeleteTypeService', false],
            'App\\Form\\Backend\\FocusAccessType' => ['privates', 'App\\Form\\Backend\\FocusAccessType', 'getFocusAccessTypeService', false],
            'App\\Form\\Backend\\FocusGroupType' => ['privates', 'App\\Form\\Backend\\FocusGroupType', 'getFocusGroupTypeService', false],
            'App\\Form\\Backend\\FocusMessageType' => ['privates', 'App\\Form\\Backend\\FocusMessageType', 'getFocusMessageTypeService', false],
            'App\\Form\\Backend\\ImpPanelisteGroupType' => ['privates', 'App\\Form\\Backend\\ImpPanelisteGroupType', 'getImpPanelisteGroupTypeService', false],
            'App\\Form\\Backend\\LegalNoticeType' => ['privates', 'App\\Form\\Backend\\LegalNoticeType', 'getLegalNoticeTypeService', false],
            'App\\Form\\Backend\\LinkType' => ['privates', 'App\\Form\\Backend\\LinkType', 'getLinkTypeService', false],
            'App\\Form\\Backend\\NewsletterType' => ['privates', 'App\\Form\\Backend\\NewsletterType', 'getNewsletterTypeService', false],
            'App\\Form\\Backend\\SyncRepliesType' => ['privates', 'App\\Form\\Backend\\SyncRepliesType', 'getSyncRepliesTypeService', false],
            'App\\Form\\Backend\\UserImportType' => ['privates', 'App\\Form\\Backend\\UserImportType', 'getUserImportTypeService', false],
            'App\\Form\\Backend\\UserType' => ['privates', 'App\\Form\\Backend\\UserType', 'getUserTypeService', false],
            'App\\Form\\CategoryHabitType' => ['privates', 'App\\Form\\CategoryHabitType', 'getCategoryHabitTypeService', false],
            'App\\Form\\ContactType' => ['privates', 'App\\Form\\ContactType', 'getContactTypeService', false],
            'App\\Form\\HomePageType' => ['privates', 'App\\Form\\HomePageType', 'getHomePageTypeService', false],
            'App\\Form\\InscriptionType' => ['privates', 'App\\Form\\InscriptionType', 'getInscriptionTypeService', false],
            'App\\Form\\InvitationType' => ['privates', 'App\\Form\\InvitationType', 'getInvitationTypeService', false],
            'App\\Form\\PanelisteGroupType' => ['privates', 'App\\Form\\PanelisteGroupType', 'getPanelisteGroupTypeService', false],
            'App\\Form\\SurveyType' => ['privates', 'App\\Form\\SurveyType', 'getSurveyTypeService', false],
            'App\\Form\\TestAvenir\\DeoType' => ['privates', 'App\\Form\\TestAvenir\\DeoType', 'getDeoTypeService', false],
            'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType' => ['privates', 'fos_ck_editor.form.type', 'getFosCkEditor_Form_TypeService', false],
            'Liip\\ImagineBundle\\Form\\Type\\ImageType' => ['privates', 'liip_imagine.form.type.image', 'getLiipImagine_Form_Type_ImageService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
            'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => ['services', 'vich_uploader.form.type.file', 'getVichUploader_Form_Type_FileService', false],
            'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => ['services', 'vich_uploader.form.type.image', 'getVichUploader_Form_Type_ImageService', false],
        ], [
            'App\\Form\\Backend\\AdminType' => '?',
            'App\\Form\\Backend\\CategoryType' => '?',
            'App\\Form\\Backend\\ConfigurationType' => '?',
            'App\\Form\\Backend\\DeleteType' => '?',
            'App\\Form\\Backend\\FocusAccessType' => '?',
            'App\\Form\\Backend\\FocusGroupType' => '?',
            'App\\Form\\Backend\\FocusMessageType' => '?',
            'App\\Form\\Backend\\ImpPanelisteGroupType' => '?',
            'App\\Form\\Backend\\LegalNoticeType' => '?',
            'App\\Form\\Backend\\LinkType' => '?',
            'App\\Form\\Backend\\NewsletterType' => '?',
            'App\\Form\\Backend\\SyncRepliesType' => '?',
            'App\\Form\\Backend\\UserImportType' => '?',
            'App\\Form\\Backend\\UserType' => '?',
            'App\\Form\\CategoryHabitType' => '?',
            'App\\Form\\ContactType' => '?',
            'App\\Form\\HomePageType' => '?',
            'App\\Form\\InscriptionType' => '?',
            'App\\Form\\InvitationType' => '?',
            'App\\Form\\PanelisteGroupType' => '?',
            'App\\Form\\SurveyType' => '?',
            'App\\Form\\TestAvenir\\DeoType' => '?',
            'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType' => '?',
            'Liip\\ImagineBundle\\Form\\Type\\ImageType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
            'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => '?',
            'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->getForm_TypeExtension_Form_TransformationFailureHandlingService());
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->getForm_TypeExtension_Upload_ValidatorService());
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
        }, 2))], new \Symfony\Component\Form\ResolvedFormTypeFactory());
    }

    /*
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Util/ServerParams.php';

        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php';

        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()));
    }

    /*
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/Type/DoctrineType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/Type/EntityType.php';

        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/BaseType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FormType.php';

        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /*
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php';

        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /*
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/HttpFoundation/Type/FormTypeHttpFoundationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/RequestHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/HttpFoundation/HttpFoundationRequestHandler.php';

        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService())));
    }

    /*
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php';

        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/BaseValidatorExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php';

        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /*
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php';

        return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /*
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/DoctrineOrmTypeGuesser.php';

        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/ValidatorTypeGuesser.php';

        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /*
     * Gets the private 'fos_ck_editor.command.installer' shared service.
     *
     * @return \FOS\CKEditorBundle\Command\CKEditorInstallerCommand
     */
    protected function getFosCkEditor_Command_InstallerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Command/CKEditorInstallerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Installer/CKEditorInstaller.php';

        $this->privates['fos_ck_editor.command.installer'] = $instance = new \FOS\CKEditorBundle\Command\CKEditorInstallerCommand(new \FOS\CKEditorBundle\Installer\CKEditorInstaller());

        $instance->setName('ckeditor:install');

        return $instance;
    }

    /*
     * Gets the private 'fos_ck_editor.form.type' shared service.
     *
     * @return \FOS\CKEditorBundle\Form\Type\CKEditorType
     */
    protected function getFosCkEditor_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Form/Type/CKEditorType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Config/CKEditorConfigurationInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Config/CKEditorConfiguration.php';

        return $this->privates['fos_ck_editor.form.type'] = new \FOS\CKEditorBundle\Form\Type\CKEditorType(new \FOS\CKEditorBundle\Config\CKEditorConfiguration(['enable' => true, 'async' => false, 'auto_inline' => true, 'inline' => false, 'autoload' => true, 'jquery' => false, 'require_js' => false, 'input_sync' => false, 'base_path' => 'bundles/fosckeditor/', 'js_path' => 'bundles/fosckeditor/ckeditor.js', 'jquery_path' => 'bundles/fosckeditor/adapters/jquery.js', 'default_config' => NULL, 'configs' => [], 'plugins' => [], 'styles' => [], 'templates' => [], 'filebrowsers' => [], 'toolbars' => ['configs' => [], 'items' => []]]));
    }

    /*
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php';

        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'http_client' shared service.
     *
     * @return \Symfony\Contracts\HttpClient\HttpClientInterface
     */
    protected function getHttpClientService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client-contracts/HttpClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client/HttpClient.php';

        $this->privates['http_client'] = $instance = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $a = new \Symfony\Bridge\Monolog\Logger('http_client');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $instance->setLogger($a);

        return $instance;
    }

    /*
     * Gets the private 'knp_paginator.subscriber.sliding_pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->privates['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(['defaultPaginationTemplate' => '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig', 'defaultSortableTemplate' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig', 'defaultFiltrationTemplate' => '@KnpPaginator/Pagination/filtration.html.twig', 'defaultPageRange' => 5, 'defaultPageLimit' => NULL]);
    }

    /*
     * Gets the private 'liip_imagine.binary.mime_type_guesser' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser
     */
    protected function getLiipImagine_Binary_MimeTypeGuesserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Binary/MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Binary/SimpleMimeTypeGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypes.php';

        return $this->privates['liip_imagine.binary.mime_type_guesser'] = new \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser(\Symfony\Component\Mime\MimeTypes::getDefault());
    }

    /*
     * Gets the private 'liip_imagine.command.cache_remove' shared service.
     *
     * @return \Liip\ImagineBundle\Command\RemoveCacheCommand
     */
    protected function getLiipImagine_Command_CacheRemoveService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Command/CacheCommandTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Command/RemoveCacheCommand.php';

        $this->privates['liip_imagine.command.cache_remove'] = $instance = new \Liip\ImagineBundle\Command\RemoveCacheCommand(($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), ($this->services['liip_imagine.filter.manager'] ?? $this->getLiipImagine_Filter_ManagerService()));

        $instance->setName('liip:imagine:cache:remove');

        return $instance;
    }

    /*
     * Gets the private 'liip_imagine.command.cache_resolve' shared service.
     *
     * @return \Liip\ImagineBundle\Command\ResolveCacheCommand
     */
    protected function getLiipImagine_Command_CacheResolveService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Command/CacheCommandTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Command/ResolveCacheCommand.php';

        $this->privates['liip_imagine.command.cache_resolve'] = $instance = new \Liip\ImagineBundle\Command\ResolveCacheCommand(($this->services['liip_imagine.data.manager'] ?? $this->getLiipImagine_Data_ManagerService()), ($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), ($this->services['liip_imagine.filter.manager'] ?? $this->getLiipImagine_Filter_ManagerService()));

        $instance->setName('liip:imagine:cache:resolve');

        return $instance;
    }

    /*
     * Gets the private 'liip_imagine.form.type.image' shared service.
     *
     * @return \Liip\ImagineBundle\Form\Type\ImageType
     */
    protected function getLiipImagine_Form_Type_ImageService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Form/Type/ImageType.php';

        return $this->privates['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }

    /*
     * Gets the private 'liip_imagine.gd' shared service.
     *
     * @return \Imagine\Gd\Imagine
     */
    protected function getLiipImagine_GdService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Factory/ClassFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/ImagineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/AbstractImagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Gd/Imagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/Metadata/MetadataReaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/Metadata/AbstractMetadataReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/Metadata/ExifMetadataReader.php';

        $this->privates['liip_imagine.gd'] = $instance = new \Imagine\Gd\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }

    /*
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->privates['slugger'] ?? ($this->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('fr')));
            yield 1 => ($this->services['translator'] ?? $this->getTranslatorService());
        }, 2), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'fr', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'mailer.mailer' shared service.
     *
     * @return \Symfony\Component\Mailer\Mailer
     */
    protected function getMailer_MailerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/Transports.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport.php';

        return $this->privates['mailer.mailer'] = new \Symfony\Component\Mailer\Mailer((new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () {
            yield 0 => ($this->privates['mailer.transport_factory.sendgrid'] ?? $this->getMailer_TransportFactory_SendgridService());
            yield 1 => ($this->privates['mailer.transport_factory.null'] ?? $this->getMailer_TransportFactory_NullService());
            yield 2 => ($this->privates['mailer.transport_factory.sendmail'] ?? $this->getMailer_TransportFactory_SendmailService());
            yield 3 => ($this->privates['mailer.transport_factory.smtp'] ?? $this->getMailer_TransportFactory_SmtpService());
        }, 4)))->fromStrings(['main' => $this->getEnv('MAILER_DSN')]), NULL, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the private 'mailer.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NullTransportFactory
     */
    protected function getMailer_TransportFactory_NullService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/NullTransportFactory.php';

        return $this->privates['mailer.transport_factory.null'] = new \Symfony\Component\Mailer\Transport\NullTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['http_client'] ?? $this->getHttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'mailer.transport_factory.sendgrid' shared service.
     *
     * @return \Symfony\Component\Mailer\Bridge\Sendgrid\Transport\SendgridTransportFactory
     */
    protected function getMailer_TransportFactory_SendgridService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/sendgrid-mailer/Transport/SendgridTransportFactory.php';

        return $this->privates['mailer.transport_factory.sendgrid'] = new \Symfony\Component\Mailer\Bridge\Sendgrid\Transport\SendgridTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['http_client'] ?? $this->getHttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'mailer.transport_factory.sendmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\SendmailTransportFactory
     */
    protected function getMailer_TransportFactory_SendmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/SendmailTransportFactory.php';

        return $this->privates['mailer.transport_factory.sendmail'] = new \Symfony\Component\Mailer\Transport\SendmailTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['http_client'] ?? $this->getHttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'mailer.transport_factory.smtp' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory
     */
    protected function getMailer_TransportFactory_SmtpService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/Smtp/EsmtpTransportFactory.php';

        return $this->privates['mailer.transport_factory.smtp'] = new \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['http_client'] ?? $this->getHttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypes.php';

        $this->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /*
     * Gets the private 'monolog.handler.deprecation' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_DeprecationService()
    {
        $this->privates['monolog.handler.deprecation'] = $instance = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'/log/prod.deprecations.log'), 100, true, NULL, false);

        $instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.deprecation_filter' shared service.
     *
     * @return \Monolog\Handler\FilterHandler
     */
    protected function getMonolog_Handler_DeprecationFilterService()
    {
        return $this->privates['monolog.handler.deprecation_filter'] = new \Monolog\Handler\FilterHandler(($this->privates['monolog.handler.deprecation'] ?? $this->getMonolog_Handler_DeprecationService()), 100, 200, true);
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $a = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'/log/prod.log'), 100, true, NULL, false);
        $a->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));

        return $this->privates['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($a, new \Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), [0 => ['code' => 404, 'urls' => []], 1 => ['code' => 405, 'urls' => []]], 400), 50, true, true, NULL);
    }

    /*
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->privates['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /*
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';

        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), true);
    }

    /*
     * Gets the private 'property_info.cache' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor
     */
    protected function getPropertyInfo_CacheService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoCacheExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractor.php';

        return $this->privates['property_info.cache'] = new \Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor(new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->getPropertyInfo_SerializerExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1)), ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
    }

    /*
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    protected function getPropertyInfo_SerializerExtractorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/Extractor/SerializerExtractor.php';

        return $this->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($this->privates['serializer.mapping.cache_class_metadata_factory'] ?? $this->getSerializer_Mapping_CacheClassMetadataFactoryService()));
    }

    /*
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), false);
    }

    /*
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/AuthenticatedVoter.php';

        return $this->privates['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())));
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->getSecurity_Access_AuthenticatedVoterService());
            yield 1 => ($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()));
            yield 2 => ($this->privates['security.access.expression_voter'] ?? $this->getSecurity_Access_ExpressionVoterService());
        }, 3), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php';

        return $this->privates['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))));
    }

    /*
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AccessListener.php';

        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher.php';

        $this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('/admin/login'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], 'https');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/'), [0 => 'ROLE_ADMIN'], 'https');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/paneliste'), [0 => 'ROLE_USER'], 'https');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], 'https');

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/GuardAuthenticatorHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $this->privates['security.authentication.guard_handler'] = $instance = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), []);

        $instance->setSessionAuthenticationStrategy(($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.listener.anonymous.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.admin'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.authentication.listener.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.authentication.listener.form.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Form_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
        $b->setOptions(['login_path' => 'app_admin_login', 'default_target_path' => 'admin_survey_tests', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $b->setProviderKey('admin');
        $c = ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService());

        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, [], $c);
        $d->setOptions(['login_path' => 'app_admin_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $this->privates['security.authentication.listener.form.admin'] = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), $a, 'admin', $b, $d, ['check_path' => 'app_admin_login', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], $c, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL);
    }

    /*
     * Gets the private 'security.authentication.listener.form.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Form_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
        $b->setOptions(['login_path' => 'app_login', 'default_target_path' => 'user_accueil_index', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $b->setProviderKey('main');
        $c = ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService());

        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, [], $c);
        $d->setOptions(['login_path' => 'app_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $this->privates['security.authentication.listener.form.main'] = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), $a, 'main', $b, $d, ['check_path' => 'app_login', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], $c, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL);
    }

    /*
     * Gets the private 'security.authentication.listener.guard.admin' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Guard_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php';

        return $this->privates['security.authentication.listener.guard.admin'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(($this->privates['security.authentication.guard_handler'] ?? $this->getSecurity_Authentication_GuardHandlerService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'admin', new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\SecurityAdminAuthenticator'] ?? $this->getSecurityAdminAuthenticatorService());
        }, 1), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /*
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php';

        return $this->privates['security.authentication.listener.guard.main'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(($this->privates['security.authentication.guard_handler'] ?? $this->getSecurity_Authentication_GuardHandlerService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'main', new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\SecurityAuthenticator'] ?? $this->getSecurityAuthenticatorService());
        }, 1), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.admin'] ?? $this->getSecurity_Authentication_Provider_Guard_AdminService());
            yield 1 => ($this->privates['security.authentication.provider.dao.admin'] ?? $this->getSecurity_Authentication_Provider_Dao_AdminService());
            yield 2 => ($this->privates['security.authentication.provider.anonymous.admin'] ?? ($this->privates['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 3 => ($this->privates['security.authentication.provider.guard.main'] ?? $this->getSecurity_Authentication_Provider_Guard_MainService());
            yield 4 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->getSecurity_Authentication_Provider_Dao_MainService());
            yield 5 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 6), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.provider.dao.admin' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $this->privates['security.authentication.provider.dao.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['security.user.provider.concrete.app_admin_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppAdminProviderService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'admin', ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), true);
    }

    /*
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $this->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'main', ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), true);
    }

    /*
     * Gets the private 'security.authentication.provider.guard.admin' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Provider/GuardAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $this->privates['security.authentication.provider.guard.admin'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\SecurityAdminAuthenticator'] ?? $this->getSecurityAdminAuthenticatorService());
        }, 1), ($this->privates['security.user.provider.concrete.app_admin_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppAdminProviderService()), 'admin', ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /*
     * Gets the private 'security.authentication.provider.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Provider/GuardAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $this->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\SecurityAuthenticator'] ?? $this->getSecurityAuthenticatorService());
        }, 1), ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService()), 'main', ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /*
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ChannelListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/RetryAuthenticationEntryPoint.php';

        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /*
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php';

        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'App\\Entity\\Admin', 1 => 'App\\Entity\\User']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /*
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ContextListener.php';

        return $this->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService());
            yield 1 => ($this->privates['security.user.provider.concrete.app_admin_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppAdminProviderService());
        }, 2), 'admin', ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }

    /*
     * Gets the private 'security.context_listener.1' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_1Service()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ContextListener.php';

        return $this->privates['security.context_listener.1'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService());
            yield 1 => ($this->privates['security.user.provider.concrete.app_admin_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppAdminProviderService());
        }, 2), 'main', ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }

    /*
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/ClearableTokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php';

        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /*
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactory.php';

        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Entity\\Admin' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => 1]], 'App\\Entity\\User' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => 1]]]);
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.admin' => ['privates', 'security.firewall.map.context.admin', 'getSecurity_Firewall_Map_Context_AdminService', false],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
        ], [
            'security.firewall.map.context.admin' => '?',
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.admin' => ($this->privates['.security.request_matcher.TlEZAKG'] ?? ($this->privates['.security.request_matcher.TlEZAKG'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/')));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
        }, 3)), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.firewall.map.context.admin' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/DefaultLogoutSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/SessionLogoutHandler.php';

        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($b, 'app_admin_login'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'app_admin_logout']);
        $c->addHandler(($this->privates['security.logout.handler.csrf_token_clearing'] ?? $this->getSecurity_Logout_Handler_CsrfTokenClearingService()));
        $c->addHandler(($this->privates['security.logout.handler.session'] ?? ($this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler())));

        return $this->privates['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.guard.admin'] ?? $this->getSecurity_Authentication_Listener_Guard_AdminService());
            yield 3 => ($this->privates['security.authentication.listener.form.admin'] ?? $this->getSecurity_Authentication_Listener_Form_AdminService());
            yield 4 => ($this->privates['security.authentication.listener.anonymous.admin'] ?? $this->getSecurity_Authentication_Listener_Anonymous_AdminService());
            yield 5 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $b, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $b, 'app_admin_login', false), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', '.security.request_matcher.TlEZAKG', true, false, 'security.user.provider.concrete.app_admin_provider', 'admin', 'security.authentication.form_entry_point.admin', NULL, NULL, [0 => 'guard', 1 => 'form_login', 2 => 'anonymous'], NULL));
    }

    /*
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.Iy.T22O', false, false, '', '', '', '', '', [], NULL));
    }

    /*
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/DefaultLogoutSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/SessionLogoutHandler.php';

        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($b, 'app_login'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'app_logout']);
        $c->addHandler(($this->privates['security.logout.handler.csrf_token_clearing'] ?? $this->getSecurity_Logout_Handler_CsrfTokenClearingService()));
        $c->addHandler(($this->privates['security.logout.handler.session'] ?? ($this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler())));

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.1'] ?? $this->getSecurity_ContextListener_1Service());
            yield 2 => ($this->privates['security.authentication.listener.guard.main'] ?? $this->getSecurity_Authentication_Listener_Guard_MainService());
            yield 3 => ($this->privates['security.authentication.listener.form.main'] ?? $this->getSecurity_Authentication_Listener_Form_MainService());
            yield 4 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->getSecurity_Authentication_Listener_Anonymous_MainService());
            yield 5 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $b, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $b, 'app_login', false), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', '.security.request_matcher.3UEFixr', true, false, 'security.user.provider.concrete.app_user_provider', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, [0 => 'guard', 1 => 'form_login', 2 => 'anonymous'], NULL));
    }

    /*
     * Gets the private 'security.helper' shared service.
     *
     * @return \Symfony\Component\Security\Core\Security
     */
    protected function getSecurity_HelperService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Security.php';

        return $this->privates['security.helper'] = new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ]));
    }

    /*
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/HttpUtils.php';

        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }

    /*
     * Gets the private 'security.logout.handler.csrf_token_clearing' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler
     */
    protected function getSecurity_Logout_Handler_CsrfTokenClearingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/CsrfTokenClearingLogoutHandler.php';

        return $this->privates['security.logout.handler.csrf_token_clearing'] = new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()));
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('admin', 'app_admin_logout', 'logout', '_csrf_token', NULL, NULL);
        $instance->registerListener('main', 'app_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.user.provider.concrete.app_admin_provider' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_AppAdminProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Security/User/EntityUserProvider.php';

        return $this->privates['security.user.provider.concrete.app_admin_provider'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App\\Entity\\User', 'email', NULL);
    }

    /*
     * Gets the private 'security.user.provider.concrete.app_user_provider' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_AppUserProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Security/User/EntityUserProvider.php';

        return $this->privates['security.user.provider.concrete.app_user_provider'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App\\Entity\\User', 'idPaneliste', NULL);
    }

    /*
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\UserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Controller/UserValueResolver.php';

        return $this->privates['security.user_value_resolver'] = new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /*
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php';

        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $this->privates['sensio_framework_extra.view.listener'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('sensio_framework_extra.view.listener', $this));

        return $instance;
    }

    /*
     * Gets the private 'serializer.mapping.cache_class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory
     */
    protected function getSerializer_Mapping_CacheClassMetadataFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassResolverTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/CacheClassMetadataFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/LoaderChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ProxyTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';

        return $this->privates['serializer.mapping.cache_class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))])), \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/serialization.php'), ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService())));
    }

    /*
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    protected function getSerializer_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php';

        return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDir.''.'/serialization.php'));
    }

    /*
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/NativeSessionStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';

        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /*
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/ChainExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/PhpExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Translation/TwigExtractor.php';

        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService())));

        return $instance;
    }

    /*
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/CsvFileLoader.php';

        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';

        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IniFileLoader.php';

        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/MoFileLoader.php';

        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PhpFileLoader.php';

        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PoFileLoader.php';

        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/QtFileLoader.php';

        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';

        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/XliffFileLoader.php';

        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/YamlFileLoader.php';

        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Reader/TranslationReaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Reader/TranslationReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/XliffFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PoFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/MoFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/QtFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/CsvFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IniFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /*
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php';

        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /*
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Command/DebugCommand.php';

        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:twig');

        return $instance;
    }

    /*
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Command/LintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Command/LintCommand.php';

        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /*
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererEngineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractRendererEngine.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Form/TwigRendererEngine.php';

        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    protected function getTwig_Mailer_MessageListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/EventListener/MessageListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/BodyRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Mime/BodyRenderer.php';

        return $this->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, new \Symfony\Bridge\Twig\Mime\BodyRenderer(($this->services['twig'] ?? $this->getTwigService())));
    }

    /*
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php';

        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), false));
    }

    /*
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfRuntime.php';

        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/TemplateIterator.php';

        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), [(\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/templates') => 'KnpPaginator', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')));
    }

    /*
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validation.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ProxyTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ObjectInitializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/AutoMappingTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php';

        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = ($this->privates['property_info.cache'] ?? $this->getPropertyInfo_CacheService());

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        if ($this->has('translator')) {
            $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
        }
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMappingCache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/validation.php'), ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService())));
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));

        return $instance;
    }

    /*
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/EmailValidator.php';

        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /*
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/ExpressionValidator.php';

        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /*
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php';

        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /*
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/NotCompromisedPasswordValidator.php';

        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(($this->privates['http_client'] ?? $this->getHttpClientService()), 'UTF-8', true, NULL);
    }

    /*
     * Gets the private 'vich_uploader.command.mapping_debug' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingDebugCommand
     */
    protected function getVichUploader_Command_MappingDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Command/MappingDebugCommand.php';

        $this->privates['vich_uploader.command.mapping_debug'] = $instance = new \Vich\UploaderBundle\Command\MappingDebugCommand($this->parameters['vich_uploader.mappings']);

        $instance->setName('vich:mapping:debug');

        return $instance;
    }

    /*
     * Gets the private 'vich_uploader.command.mapping_debug_class' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingDebugClassCommand
     */
    protected function getVichUploader_Command_MappingDebugClassService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Command/MappingDebugClassCommand.php';

        $this->privates['vich_uploader.command.mapping_debug_class'] = $instance = new \Vich\UploaderBundle\Command\MappingDebugClassCommand(($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()));

        $instance->setName('vich:mapping:debug-class');

        return $instance;
    }

    /*
     * Gets the private 'vich_uploader.command.mapping_list_classes' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingListClassesCommand
     */
    protected function getVichUploader_Command_MappingListClassesService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Command/MappingListClassesCommand.php';

        $this->privates['vich_uploader.command.mapping_list_classes'] = $instance = new \Vich\UploaderBundle\Command\MappingListClassesCommand(($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()));

        $instance->setName('vich:mapping:list-classes');

        return $instance;
    }

    /*
     * Gets the private 'vich_uploader.metadata_reader' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\MetadataReader
     */
    protected function getVichUploader_MetadataReaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/MetadataReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/AdvancedMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AbstractFileDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/Driver/XmlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/Driver/AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/Driver/YamlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/FileCache.php';

        $a = new \Metadata\Driver\FileLocator([]);

        $b = new \Metadata\MetadataFactory(new \Metadata\Driver\DriverChain([0 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a), 1 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService())), 2 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a)]), 'Metadata\\ClassHierarchyMetadata', false);
        $b->setCache(new \Metadata\Cache\FileCache(($this->targetDir.''.'/vich_uploader')));

        return $this->privates['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }

    /*
     * Gets the private 'vich_uploader.property_mapping_factory' shared service.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingFactory
     */
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Mapping/PropertyMappingFactory.php';

        return $this->privates['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()), $this->parameters['vich_uploader.mappings'], '_name');
    }

    /*
     * Gets the private 'vich_uploader.storage.file_system' shared service.
     *
     * @return \Vich\UploaderBundle\Storage\FileSystemStorage
     */
    protected function getVichUploader_Storage_FileSystemService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/StorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/AbstractStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/FileSystemStorage.php';

        return $this->privates['vich_uploader.storage.file_system'] = new \Vich\UploaderBundle\Storage\FileSystemStorage(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()));
    }

    /*
     * Gets the private 'webpack_encore.entrypoint_lookup.cache_warmer' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\CacheWarmer\EntrypointCacheWarmer
     */
    protected function getWebpackEncore_EntrypointLookup_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/CacheWarmer/EntrypointCacheWarmer.php';

        return $this->privates['webpack_encore.entrypoint_lookup.cache_warmer'] = new \Symfony\WebpackEncoreBundle\CacheWarmer\EntrypointCacheWarmer(['_default' => (\dirname(__DIR__, 4).'/public/build/entrypoints.json')], ($this->targetDir.''.'/webpack_encore.cache.php'), ($this->privates['cache.webpack_encore'] ?? $this->getCache_WebpackEncoreService()));
    }

    /*
     * Gets the private 'webpack_encore.entrypoint_lookup[_default]' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\Asset\EntrypointLookup
     */
    protected function getWebpackEncore_EntrypointLookupDefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookupInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Asset/IntegrityDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookup.php';

        return $this->privates['webpack_encore.entrypoint_lookup[_default]'] = new \Symfony\WebpackEncoreBundle\Asset\EntrypointLookup((\dirname(__DIR__, 4).'/public/build/entrypoints.json'), NULL, '_default', true);
    }

    /*
     * Gets the private 'webpack_encore.entrypoint_lookup_collection' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection
     */
    protected function getWebpackEncore_EntrypointLookupCollectionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookupCollectionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookupCollection.php';

        return $this->privates['webpack_encore.entrypoint_lookup_collection'] = new \Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            '_default' => ['privates', 'webpack_encore.entrypoint_lookup[_default]', 'getWebpackEncore_EntrypointLookupDefaultService', false],
        ], [
            '_default' => '?',
        ]), '_default');
    }

    /*
     * Gets the private 'webpack_encore.exception_listener' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\EventListener\ExceptionListener
     */
    protected function getWebpackEncore_ExceptionListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/EventListener/ExceptionListener.php';

        return $this->privates['webpack_encore.exception_listener'] = new \Symfony\WebpackEncoreBundle\EventListener\ExceptionListener(($this->privates['webpack_encore.entrypoint_lookup_collection'] ?? $this->getWebpackEncore_EntrypointLookupCollectionService()), [0 => '_default']);
    }

    /*
     * Gets the private 'webpack_encore.tag_renderer' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\Asset\TagRenderer
     */
    protected function getWebpackEncore_TagRendererService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Asset/TagRenderer.php';

        return $this->privates['webpack_encore.tag_renderer'] = new \Symfony\WebpackEncoreBundle\Asset\TagRenderer(($this->privates['webpack_encore.entrypoint_lookup_collection'] ?? $this->getWebpackEncore_EntrypointLookupCollectionService()), ($this->privates['assets.packages'] ?? $this->getAssets_PackagesService()), []);
    }

    public function getParameter(string $name)
    {
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter(string $name): bool
    {
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter(string $name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'CocurSlugifyBundle' => 'Cocur\\Slugify\\Bridge\\Symfony\\CocurSlugifyBundle',
                'WebpackEncoreBundle' => 'Symfony\\WebpackEncoreBundle\\WebpackEncoreBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
                'FOSCKEditorBundle' => 'FOS\\CKEditorBundle\\FOSCKEditorBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/twig/extra-bundle/src'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'CocurSlugifyBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/cocur/slugify/src/Bridge/Symfony'),
                    'namespace' => 'Cocur\\Slugify\\Bridge\\Symfony',
                ],
                'WebpackEncoreBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src'),
                    'namespace' => 'Symfony\\WebpackEncoreBundle',
                ],
                'VichUploaderBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle'),
                    'namespace' => 'Vich\\UploaderBundle',
                ],
                'FOSCKEditorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src'),
                    'namespace' => 'FOS\\CKEditorBundle',
                ],
                'LiipImagineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle'),
                    'namespace' => 'Liip\\ImagineBundle',
                ],
                'KnpPaginatorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'App_KernelProdContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
            ],
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'fr',
            'kernel.error_controller' => 'error_controller',
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.form.resources' => [
                0 => '@VichUploader/Form/fields.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => '@FOSCKEditor/Form/ckeditor_widget.html.twig',
                3 => '@FOSCKEditor/Form/ckeditor_widget.html.twig',
                4 => '@LiipImagine/Form/form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.deprecation_filter' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'php',
                    ],
                ],
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                    ],
                ],
                'monolog.handler.main' => NULL,
            ],
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.migrations_paths' => [

            ],
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'vich_uploader.default_filename_attribute_suffix' => '_name',
            'vich_uploader.mappings' => [
                'images' => [
                    'uri_prefix' => '/images/home_page',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/images/home_page'),
                    'inject_on_load' => false,
                    'delete_on_update' => true,
                    'delete_on_remove' => true,
                    'namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'db_driver' => 'orm',
                ],
            ],
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'liip_imagine.resolvers' => [
                'default' => [
                    'web_path' => [
                        'web_root' => (\dirname(__DIR__, 4).'/public'),
                        'cache_prefix' => 'media/cache',
                    ],
                ],
            ],
            'liip_imagine.loaders' => [
                'default' => [
                    'filesystem' => [
                        'locator' => 'filesystem',
                        'data_root' => [
                            0 => (\dirname(__DIR__, 4).'/public'),
                        ],
                        'allow_unresolvable_data_roots' => false,
                        'bundle_resources' => [
                            'enabled' => false,
                            'access_control_type' => 'blacklist',
                            'access_control_list' => [

                            ],
                        ],
                    ],
                ],
            ],
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripAll' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.jpegoptim.tempDir' => NULL,
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripAll' => true,
            'liip_imagine.optipng.tempDir' => NULL,
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.driver_service' => 'liip_imagine.gd',
            'liip_imagine.cache.resolver.default' => 'default',
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => [

            ],
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction',
            'knp_paginator.template.pagination' => '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',
            'knp_paginator.template.filtration' => '@KnpPaginator/Pagination/filtration.html.twig',
            'knp_paginator.template.sortable' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'knp_paginator.page_limit' => NULL,
            'console.command.ids' => [

            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}
