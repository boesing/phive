<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'phario\\phive\\abstractrequestedpharresolver' => '/services/resolver/AbstractRequestedPharResolver.php',
                'phario\\phive\\abstractresolvingstrategy' => '/services/resolver/strategy/AbstractResolvingStrategy.php',
                'phario\\phive\\basehash' => '/shared/hash/BaseHash.php',
                'phario\\phive\\batpharactivator' => '/shared/file/BatPharActivator.php',
                'phario\\phive\\cachebackend' => '/shared/http/CacheBackend.php',
                'phario\\phive\\checksumservice' => '/services/checksum/ChecksumService.php',
                'phario\\phive\\cli\\coloredconsoleoutput' => '/shared/cli/output/ColoredConsoleOutput.php',
                'phario\\phive\\cli\\command' => '/shared/cli/Command.php',
                'phario\\phive\\cli\\commandlocator' => '/shared/cli/CommandLocator.php',
                'phario\\phive\\cli\\commandlocatorexception' => '/shared/cli/CommandLocatorException.php',
                'phario\\phive\\cli\\commandoptionsexception' => '/shared/cli/CommandOptionsException.php',
                'phario\\phive\\cli\\consoleinput' => '/shared/cli/input/ConsoleInput.php',
                'phario\\phive\\cli\\consoleoutput' => '/shared/cli/output/ConsoleOutput.php',
                'phario\\phive\\cli\\consoletable' => '/shared/cli/output/ConsoleTable.php',
                'phario\\phive\\cli\\context' => '/shared/cli/Context.php',
                'phario\\phive\\cli\\contextexception' => '/shared/cli/ContextException.php',
                'phario\\phive\\cli\\generalcontext' => '/shared/cli/GeneralContext.php',
                'phario\\phive\\cli\\input' => '/shared/cli/input/Input.php',
                'phario\\phive\\cli\\options' => '/shared/cli/Options.php',
                'phario\\phive\\cli\\output' => '/shared/cli/output/Output.php',
                'phario\\phive\\cli\\outputfactory' => '/shared/cli/output/OutputFactory.php',
                'phario\\phive\\cli\\outputlocator' => '/shared/cli/output/OutputLocator.php',
                'phario\\phive\\cli\\request' => '/shared/cli/Request.php',
                'phario\\phive\\cli\\requestexception' => '/shared/cli/RequestException.php',
                'phario\\phive\\cli\\runner' => '/shared/cli/Runner.php',
                'phario\\phive\\cli\\runnerexception' => '/shared/cli/RunnerException.php',
                'phario\\phive\\commandlocator' => '/commands/CommandLocator.php',
                'phario\\phive\\compatibilityservice' => '/services/phar/CompatibilityService.php',
                'phario\\phive\\composeralias' => '/shared/ComposerAlias.php',
                'phario\\phive\\composercommand' => '/commands/composer/ComposerCommand.php',
                'phario\\phive\\composercommandconfig' => '/commands/composer/ComposerCommandConfig.php',
                'phario\\phive\\composercontext' => '/commands/composer/ComposerContext.php',
                'phario\\phive\\composerservice' => '/commands/composer/ComposerService.php',
                'phario\\phive\\config' => '/shared/config/Config.php',
                'phario\\phive\\configexception' => '/shared/exceptions/ConfigException.php',
                'phario\\phive\\configuredphar' => '/shared/phar/ConfiguredPhar.php',
                'phario\\phive\\configuredpharexception' => '/shared/phar/ConfiguredPharException.php',
                'phario\\phive\\curl' => '/shared/http/Curl.php',
                'phario\\phive\\curlconfig' => '/shared/http/CurlConfig.php',
                'phario\\phive\\curlexception' => '/shared/exceptions/CurlException.php',
                'phario\\phive\\directoryexception' => '/shared/exceptions/DirectoryException.php',
                'phario\\phive\\directurlresolver' => '/services/resolver/DirectUrlResolver.php',
                'phario\\phive\\downloadfailedexception' => '/shared/exceptions/DownloadFailedException.php',
                'phario\\phive\\environment' => '/shared/environment/Environment.php',
                'phario\\phive\\environmentexception' => '/shared/exceptions/EnvironmentException.php',
                'phario\\phive\\environmentlocator' => '/shared/environment/EnvironmentLocator.php',
                'phario\\phive\\errorexception' => '/shared/exceptions/ErrorException.php',
                'phario\\phive\\etag' => '/shared/http/ETag.php',
                'phario\\phive\\exception' => '/shared/exceptions/Exception.php',
                'phario\\phive\\executor' => '/shared/executor/Executor.php',
                'phario\\phive\\executorexception' => '/shared/exceptions/ExecutorException.php',
                'phario\\phive\\executorresult' => '/shared/executor/ExecutorResult.php',
                'phario\\phive\\extensionsmissingexception' => '/shared/exceptions/ExtensionsMissingException.php',
                'phario\\phive\\factory' => '/Factory.php',
                'phario\\phive\\filedownloader' => '/shared/download/FileDownloader.php',
                'phario\\phive\\filenotwritableexception' => '/shared/exceptions/FileNotWritableException.php',
                'phario\\phive\\filestoragecachebackend' => '/shared/http/FileStorageCacheBackend.php',
                'phario\\phive\\git' => '/shared/Git.php',
                'phario\\phive\\gitawarephiveversion' => '/shared/version/GitAwarePhiveVersion.php',
                'phario\\phive\\gitexception' => '/shared/exceptions/GitException.php',
                'phario\\phive\\githubaliasresolver' => '/services/resolver/GithubAliasResolver.php',
                'phario\\phive\\githubrepository' => '/shared/repository/GithubRepository.php',
                'phario\\phive\\githubversion' => '/shared/version/GitHubVersion.php',
                'phario\\phive\\gnupgkeydownloader' => '/services/key/gpg/GnupgKeyDownloader.php',
                'phario\\phive\\gnupgkeyimporter' => '/services/key/gpg/GnupgKeyImporter.php',
                'phario\\phive\\gnupgsignatureverifier' => '/services/signature/gpg/GnupgSignatureVerifier.php',
                'phario\\phive\\gnupgverificationresult' => '/services/signature/gpg/GnupgVerificationResult.php',
                'phario\\phive\\hash' => '/shared/hash/Hash.php',
                'phario\\phive\\helpcommand' => '/commands/help/HelpCommand.php',
                'phario\\phive\\httpclient' => '/shared/http/HttpClient.php',
                'phario\\phive\\httpexception' => '/shared/http/HttpException.php',
                'phario\\phive\\httpprogresshandler' => '/shared/http/HttpProgressHandler.php',
                'phario\\phive\\httpprogressrenderer' => '/shared/http/HttpProgressRenderer.php',
                'phario\\phive\\httpprogressupdate' => '/shared/http/HttpProgressUpdate.php',
                'phario\\phive\\httpresponse' => '/shared/http/HttpResponse.php',
                'phario\\phive\\httpresponseexception' => '/shared/http/HttpResponseException.php',
                'phario\\phive\\installationfailedexception' => '/shared/exceptions/InstallationFailedException.php',
                'phario\\phive\\installcommand' => '/commands/install/InstallCommand.php',
                'phario\\phive\\installcommandconfig' => '/commands/install/InstallCommandConfig.php',
                'phario\\phive\\installcommandconfigexception' => '/commands/install/InstallCommandConfigException.php',
                'phario\\phive\\installcontext' => '/commands/install/InstallContext.php',
                'phario\\phive\\installedphar' => '/shared/phar/InstalledPhar.php',
                'phario\\phive\\installservice' => '/services/phar/InstallService.php',
                'phario\\phive\\invalidhashexception' => '/shared/exceptions/InvalidHashException.php',
                'phario\\phive\\ioexception' => '/shared/exceptions/IOException.php',
                'phario\\phive\\jsondata' => '/shared/JsonData.php',
                'phario\\phive\\keydownloader' => '/services/key/KeyDownloader.php',
                'phario\\phive\\keyidcollection' => '/services/key/KeyIdCollection.php',
                'phario\\phive\\keyimporter' => '/services/key/KeyImporter.php',
                'phario\\phive\\keyimportresult' => '/services/key/KeyImportResult.php',
                'phario\\phive\\keyservice' => '/services/key/KeyService.php',
                'phario\\phive\\linkcreationfailedexception' => '/shared/exceptions/LinkCreationFailedException.php',
                'phario\\phive\\listcommand' => '/commands/list/ListCommand.php',
                'phario\\phive\\localaliasresolver' => '/services/resolver/LocalAliasResolver.php',
                'phario\\phive\\localfirstresolvingstrategy' => '/services/resolver/strategy/LocalFirstResolvingStrategy.php',
                'phario\\phive\\localrepository' => '/shared/repository/LocalRepository.php',
                'phario\\phive\\localsourceslistfileloader' => '/shared/sources/LocalSourcesListFileLoader.php',
                'phario\\phive\\localsslcertificate' => '/shared/http/LocalSslCertificate.php',
                'phario\\phive\\macosenvironment' => '/shared/environment/MacOsEnvironment.php',
                'phario\\phive\\nogpgbinaryfoundexception' => '/shared/exceptions/NoGPGBinaryFoundException.php',
                'phario\\phive\\notfoundexception' => '/shared/exceptions/NotFoundException.php',
                'phario\\phive\\phar' => '/shared/phar/Phar.php',
                'phario\\phive\\pharactivator' => '/shared/file/PharActivator.php',
                'phario\\phive\\pharactivatorfactory' => '/shared/file/PharActivatorFactory.php',
                'phario\\phive\\pharactivatorlocator' => '/shared/file/PharActivatorLocator.php',
                'phario\\phive\\pharalias' => '/shared/phar/PharAlias.php',
                'phario\\phive\\phardownloader' => '/services/phar/PharDownloader.php',
                'phario\\phive\\pharexception' => '/shared/exceptions/PharException.php',
                'phario\\phive\\pharidentifier' => '/shared/phar/PharIdentifier.php',
                'phario\\phive\\pharinstaller' => '/services/phar/PharInstaller.php',
                'phario\\phive\\pharioaliasresolver' => '/services/resolver/PharIoAliasResolver.php',
                'phario\\phive\\phariorepository' => '/shared/repository/PharIoRepository.php',
                'phario\\phive\\pharregistry' => '/shared/PharRegistry.php',
                'phario\\phive\\pharregistryexception' => '/shared/exceptions/PharRegistryException.php',
                'phario\\phive\\pharservice' => '/services/phar/PharService.php',
                'phario\\phive\\pharurl' => '/shared/phar/PharUrl.php',
                'phario\\phive\\phivecontext' => '/PhiveContext.php',
                'phario\\phive\\phiveversion' => '/shared/version/PhiveVersion.php',
                'phario\\phive\\phivexmlconfig' => '/shared/config/PhiveXmlConfig.php',
                'phario\\phive\\phivexmlconfigfilelocator' => '/shared/config/PhiveXmlConfigFileLocator.php',
                'phario\\phive\\publickey' => '/services/key/PublicKey.php',
                'phario\\phive\\purgecommand' => '/commands/purge/PurgeCommand.php',
                'phario\\phive\\purgecontext' => '/commands/purge/PurgeContext.php',
                'phario\\phive\\release' => '/shared/phar/Release.php',
                'phario\\phive\\releasecollection' => '/shared/phar/ReleaseCollection.php',
                'phario\\phive\\releaseexception' => '/shared/exceptions/ReleaseException.php',
                'phario\\phive\\remotefirstresolvingstrategy' => '/services/resolver/strategy/RemoteFirstResolvingStrategy.php',
                'phario\\phive\\remotesourceslistfileloader' => '/shared/sources/RemoteSourcesListFileLoader.php',
                'phario\\phive\\removecommand' => '/commands/remove/RemoveCommand.php',
                'phario\\phive\\removecommandconfig' => '/commands/remove/RemoveCommandConfig.php',
                'phario\\phive\\removecontext' => '/commands/remove/RemoveContext.php',
                'phario\\phive\\requestedphar' => '/shared/phar/RequestedPhar.php',
                'phario\\phive\\requestedpharresolver' => '/services/resolver/RequestedPharResolver.php',
                'phario\\phive\\requestedpharresolverfactory' => '/services/resolver/RequestedPharResolverFactory.php',
                'phario\\phive\\requestedpharresolverservice' => '/services/resolver/RequestedPharResolverService.php',
                'phario\\phive\\requestedpharresolverservicebuilder' => '/services/resolver/RequestedPharResolverServiceBuilder.php',
                'phario\\phive\\resetcommand' => '/commands/reset/ResetCommand.php',
                'phario\\phive\\resetcommandconfig' => '/commands/reset/ResetCommandConfig.php',
                'phario\\phive\\resetcontext' => '/commands/reset/ResetContext.php',
                'phario\\phive\\resolveexception' => '/shared/exceptions/ResolveException.php',
                'phario\\phive\\resolvingstrategy' => '/services/resolver/strategy/ResolvingStrategy.php',
                'phario\\phive\\retryinghttpclient' => '/shared/http/RetryingHttpClient.php',
                'phario\\phive\\selfupdatecommand' => '/commands/selfupdate/SelfupdateCommand.php',
                'phario\\phive\\sha1hash' => '/shared/hash/sha/Sha1Hash.php',
                'phario\\phive\\sha256hash' => '/shared/hash/sha/Sha256Hash.php',
                'phario\\phive\\sha384hash' => '/shared/hash/sha/Sha384Hash.php',
                'phario\\phive\\sha512hash' => '/shared/hash/sha/Sha512Hash.php',
                'phario\\phive\\signatureverifier' => '/services/signature/SignatureVerifier.php',
                'phario\\phive\\skelcommand' => '/commands/skel/SkelCommand.php',
                'phario\\phive\\skelcommandconfig' => '/commands/skel/SkelCommandConfig.php',
                'phario\\phive\\skelcontext' => '/commands/skel/SkelContext.php',
                'phario\\phive\\source' => '/shared/sources/Source.php',
                'phario\\phive\\sourcerepository' => '/shared/repository/SourceRepository.php',
                'phario\\phive\\sourceslist' => '/shared/sources/SourcesList.php',
                'phario\\phive\\sourceslistexception' => '/shared/exceptions/SourcesListException.php',
                'phario\\phive\\sourceslistfileloader' => '/shared/sources/SourcesListFileLoader.php',
                'phario\\phive\\staticphiveversion' => '/shared/version/StaticPhiveVersion.php',
                'phario\\phive\\statuscommand' => '/commands/status/StatusCommand.php',
                'phario\\phive\\symlinkpharactivator' => '/shared/file/SymlinkPharActivator.php',
                'phario\\phive\\targetdirectorylocator' => '/shared/TargetDirectoryLocator.php',
                'phario\\phive\\unixoidenvironment' => '/shared/environment/UnixoidEnvironment.php',
                'phario\\phive\\unsupportedversionconstraintexception' => '/shared/exceptions/UnsupportedVersionConstraintException.php',
                'phario\\phive\\updatecommand' => '/commands/update/UpdateCommand.php',
                'phario\\phive\\updatecommandconfig' => '/commands/update/UpdateCommandConfig.php',
                'phario\\phive\\updatecontext' => '/commands/update/UpdateContext.php',
                'phario\\phive\\updaterepositorylistcommand' => '/commands/update-repository-list/UpdateRepositoryListCommand.php',
                'phario\\phive\\url' => '/shared/Url.php',
                'phario\\phive\\urlrepository' => '/shared/repository/UrlRepository.php',
                'phario\\phive\\verificationfailedexception' => '/shared/exceptions/VerificationFailedException.php',
                'phario\\phive\\verificationresult' => '/services/signature/VerificationResult.php',
                'phario\\phive\\versioncommand' => '/commands/version/VersionCommand.php',
                'phario\\phive\\windowsenvironment' => '/shared/environment/WindowsEnvironment.php',
                'phario\\phive\\xmlfile' => '/shared/XmlFile.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
