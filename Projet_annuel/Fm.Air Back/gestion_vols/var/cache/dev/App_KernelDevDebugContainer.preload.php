<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\Container19zPiXt\App_KernelDevDebugContainer::class, null);
require __DIR__.'/Container19zPiXt/EntityManagerGhostEbeb667.php';
require __DIR__.'/Container19zPiXt/getVarDumper_ServerConnectionService.php';
require __DIR__.'/Container19zPiXt/getVarDumper_ClonerService.php';
require __DIR__.'/Container19zPiXt/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/Container19zPiXt/getValidator_ExpressionService.php';
require __DIR__.'/Container19zPiXt/getValidator_EmailService.php';
require __DIR__.'/Container19zPiXt/getSession_FactoryService.php';
require __DIR__.'/Container19zPiXt/getServicesResetterService.php';
require __DIR__.'/Container19zPiXt/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/Container19zPiXt/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/Container19zPiXt/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/Container19zPiXt/getSecurity_HttpUtilsService.php';
require __DIR__.'/Container19zPiXt/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/Container19zPiXt/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/Container19zPiXt/getSecurity_Firewall_Map_Context_ApiService.php';
require __DIR__.'/Container19zPiXt/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/Container19zPiXt/getSecurity_ChannelListenerService.php';
require __DIR__.'/Container19zPiXt/getSecurity_AccessMapService.php';
require __DIR__.'/Container19zPiXt/getSecurity_AccessListenerService.php';
require __DIR__.'/Container19zPiXt/getSecrets_VaultService.php';
require __DIR__.'/Container19zPiXt/getRouting_LoaderService.php';
require __DIR__.'/Container19zPiXt/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/Container19zPiXt/getMonolog_Logger_SecurityService.php';
require __DIR__.'/Container19zPiXt/getMonolog_Logger_MailerService.php';
require __DIR__.'/Container19zPiXt/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/Container19zPiXt/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/Container19zPiXt/getMailer_TransportFactory_SendgridService.php';
require __DIR__.'/Container19zPiXt/getMailer_TransportFactory_NullService.php';
require __DIR__.'/Container19zPiXt/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/Container19zPiXt/getMailer_TransportFactory_GmailService.php';
require __DIR__.'/Container19zPiXt/getMailer_MailerService.php';
require __DIR__.'/Container19zPiXt/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/Container19zPiXt/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/Container19zPiXt/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/Container19zPiXt/getHttpClientService.php';
require __DIR__.'/Container19zPiXt/getErrorControllerService.php';
require __DIR__.'/Container19zPiXt/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/Container19zPiXt/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/Container19zPiXt/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/Container19zPiXt/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/Container19zPiXt/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/Container19zPiXt/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/Container19zPiXt/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/Container19zPiXt/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/Container19zPiXt/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/Container19zPiXt/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/Container19zPiXt/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/Container19zPiXt/getDataCollector_DumpService.php';
require __DIR__.'/Container19zPiXt/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/Container19zPiXt/getContainer_EnvVarProcessorService.php';
require __DIR__.'/Container19zPiXt/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/Container19zPiXt/getCache_SystemClearerService.php';
require __DIR__.'/Container19zPiXt/getCache_SystemService.php';
require __DIR__.'/Container19zPiXt/getCache_GlobalClearerService.php';
require __DIR__.'/Container19zPiXt/getCache_AppClearerService.php';
require __DIR__.'/Container19zPiXt/getCache_AppService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_SwaggerUi_ActionService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Swagger_Action_UiService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Openapi_OptionsService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Openapi_Factory_LegacyService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Metadata_PropertySchema_OneOfRestrictionService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Metadata_PropertySchema_CollectionRestrictionService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Listener_View_Write_LegacyService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Listener_View_ValidateService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Listener_View_SerializeService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Listener_View_RespondService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Listener_Exception_ValidationService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Listener_ExceptionService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Jsonld_Action_ContextService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Doctrine_Orm_QueryExtension_OrderService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Doctrine_Orm_QueryExtension_FilterService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Doctrine_Orm_DataPersisterService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Action_PlaceholderService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Action_NotFoundService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Action_NotExposedService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Action_ExceptionService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Action_EntrypointService.php';
require __DIR__.'/Container19zPiXt/getApiPlatform_Action_DocumentationService.php';
require __DIR__.'/Container19zPiXt/getTemplateControllerService.php';
require __DIR__.'/Container19zPiXt/getRedirectControllerService.php';
require __DIR__.'/Container19zPiXt/getAdminRepositoryService.php';
require __DIR__.'/Container19zPiXt/getAuthenticationControllerService.php';
require __DIR__.'/Container19zPiXt/get_Session_DeprecatedService.php';
require __DIR__.'/Container19zPiXt/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/Container19zPiXt/get_ServiceLocator_UVvF4gLService.php';
require __DIR__.'/Container19zPiXt/get_ServiceLocator_RCot4zKService.php';
require __DIR__.'/Container19zPiXt/get_ServiceLocator_PdzOpjLService.php';
require __DIR__.'/Container19zPiXt/get_ServiceLocator_Emw7a0tService.php';
require __DIR__.'/Container19zPiXt/get_Debug_ValueResolver_Security_UserValueResolverService.php';
require __DIR__.'/Container19zPiXt/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/Container19zPiXt/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/Container19zPiXt/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/Container19zPiXt/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/Container19zPiXt/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/Container19zPiXt/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/Container19zPiXt/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/Container19zPiXt/get_Container_Private_SessionService.php';
require __DIR__.'/Container19zPiXt/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/Container19zPiXt/get_Container_Private_FilesystemService.php';
require __DIR__.'/Container19zPiXt/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'ApiPlatform\Symfony\Bundle\ApiPlatformBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'ApiPlatform\OpenApi\Serializer\ApiGatewayNormalizer';
$classes[] = 'ApiPlatform\OpenApi\Serializer\OpenApiNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Problem\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\DocumentationNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\EntrypointNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\ErrorNormalizer';
$classes[] = 'ApiPlatform\Problem\Serializer\ErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'ApiPlatform\JsonLd\Serializer\ItemNormalizer';
$classes[] = 'ApiPlatform\Serializer\ItemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\PropertyNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\CollectionFiltersNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\PartialCollectionViewNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\CollectionNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'ApiPlatform\JsonLd\Serializer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'ApiPlatform\Serializer\JsonEncoder';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\AuthenticationController';
$classes[] = 'App\CustomsClass\ResponseMessage';
$classes[] = 'App\Utils\Helpers';
$classes[] = 'App\Repository\AdminRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'ApiPlatform\Documentation\Action\DocumentationAction';
$classes[] = 'ApiPlatform\Action\EntrypointAction';
$classes[] = 'ApiPlatform\Action\ExceptionAction';
$classes[] = 'ApiPlatform\Action\NotExposedAction';
$classes[] = 'ApiPlatform\Action\NotFoundAction';
$classes[] = 'ApiPlatform\Action\PlaceholderAction';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension';
$classes[] = 'ApiPlatform\Core\DataProvider\Pagination';
$classes[] = 'ApiPlatform\HttpCache\EventListener\AddHeadersListener';
$classes[] = 'ApiPlatform\Core\Hydra\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\Core\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\Hydra\EventListener\AddLinkHeaderListener';
$classes[] = 'ApiPlatform\Core\Identifier\IdentifierConverter';
$classes[] = 'ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer';
$classes[] = 'ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer';
$classes[] = 'ApiPlatform\Core\Api\CachedIdentifiersExtractor';
$classes[] = 'ApiPlatform\Core\Api\IdentifiersExtractor';
$classes[] = 'ApiPlatform\Core\JsonSchema\TypeFactory';
$classes[] = 'ApiPlatform\JsonLd\Action\ContextAction';
$classes[] = 'ApiPlatform\JsonLd\ContextBuilder';
$classes[] = 'ApiPlatform\Symfony\Routing\SkolemIriConverter';
$classes[] = 'ApiPlatform\Symfony\EventListener\ExceptionListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\ErrorListener';
$classes[] = 'ApiPlatform\Symfony\Validator\EventListener\ValidationExceptionListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\AddFormatListener';
$classes[] = 'Negotiation\Negotiator';
$classes[] = 'ApiPlatform\Symfony\EventListener\DeserializeListener';
$classes[] = 'ApiPlatform\Core\EventListener\ReadListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainCollectionDataProvider';
$classes[] = 'ApiPlatform\Symfony\EventListener\RespondListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\SerializeListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\ValidateListener';
$classes[] = 'ApiPlatform\Symfony\Validator\Validator';
$classes[] = 'ApiPlatform\Symfony\EventListener\QueryParameterValidateListener';
$classes[] = 'ApiPlatform\Core\Filter\QueryParameterValidator';
$classes[] = 'ApiPlatform\Core\EventListener\WriteListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister';
$classes[] = 'ApiPlatform\Core\DataPersister\ChainDataPersister';
$classes[] = 'ApiPlatform\Core\Metadata\Extractor\XmlExtractor';
$classes[] = 'ApiPlatform\Core\Metadata\Extractor\YamlExtractor';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\DefaultPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\CachedPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\PropertyInfoPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaChoiceRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaCollectionRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaCountRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaFormat';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaGreaterThanOrEqualRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaGreaterThanRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLengthRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLessThanOrEqualRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLessThanRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaOneOfRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaRangeRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaRegexRestriction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaUniqueRestriction';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\FormatsResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceFilterMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\InputOutputResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\CachedResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\OpenApi\Factory\OpenApiFactory';
$classes[] = 'ApiPlatform\State\Pagination\PaginationOptions';
$classes[] = 'ApiPlatform\OpenApi\Options';
$classes[] = 'ApiPlatform\PathResolver\CustomOperationPathResolver';
$classes[] = 'ApiPlatform\PathResolver\OperationPathResolver';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver';
$classes[] = 'ApiPlatform\Operation\UnderscorePathSegmentNameGenerator';
$classes[] = 'ApiPlatform\Api\ResourceClassResolver';
$classes[] = 'ApiPlatform\Symfony\Routing\Router';
$classes[] = 'ApiPlatform\Symfony\EventListener\DenyAccessListener';
$classes[] = 'ApiPlatform\Symfony\Security\ResourceAccessChecker';
$classes[] = 'ApiPlatform\Serializer\SerializerFilterContextBuilder';
$classes[] = 'ApiPlatform\Serializer\SerializerContextBuilder';
$classes[] = 'ApiPlatform\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory';
$classes[] = 'ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\SwaggerUi\SwaggerUiAction';
$classes[] = 'ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiContext';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainItemDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\DBAL\Logging\Middleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Component\Uid\Factory\UlidFactory';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\Uid\Factory\UuidFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\Mailer';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Bridge\Sendgrid\Transport\SendgridTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\Mime\MimeTypes';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'ApiPlatform\Symfony\Routing\ApiLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\VarDumper\Server\Connection';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';

$preloaded = Preloader::preload($classes);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Symfony\\Component\\Routing\\Annotation\\Route';
$classes[] = 'Doctrine\\ORM\\Mapping\\Entity';
$classes[] = 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity';
$classes[] = 'Doctrine\\ORM\\Mapping\\Id';
$classes[] = 'Doctrine\\ORM\\Mapping\\GeneratedValue';
$classes[] = 'Doctrine\\ORM\\Mapping\\Column';
$classes[] = 'Symfony\\Component\\Validator\\Constraints\\NotBlank';
$classes[] = 'Symfony\\Component\\Validator\\Constraints\\NotNull';
$classes[] = 'Symfony\\Component\\Validator\\Constraints\\Regex';
$classes[] = 'Symfony\\Component\\Validator\\Constraints\\Choice';
$classes[] = 'Symfony\\Component\\Validator\\Constraints\\Length';
$preloaded = Preloader::preload($classes, $preloaded);
