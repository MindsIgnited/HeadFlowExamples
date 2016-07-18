<?php
use slinks\core\DependencyInjection\ContainerInterface;
use slinks\core\DependencyInjection\Container;
use slinks\core\DependencyInjection\Reference;
use slinks\core\DependencyInjection\Parameter;
use slinks\core\DependencyInjection\ParameterBag\FrozenParameterBag;
class SlinksContainer_e8bc43bbe166ab77e7fc87dad3d8fe04 extends Container {
    public function __construct() {
        parent::__construct(new FrozenParameterBag($this->getDefaultParameters())); }
    protected function getHeadflow_Actions_MainactionService() {
        return $this->services['headflow.actions.mainaction'] = new \headflow\actions\MainAction($this->get('slinks.extensions.onecms.cms.joomla.joomlamenuservice'), new \slinks\extensions\onecms\cms\joomla\JoomlaResourceManager()); }
    protected function getSlinks_Action_ConfigurationService() {
        return $this->services['slinks.action.configuration'] = new \slinks\extensions\action\core\impl\Configuration($this); }
    protected function getSlinksactionmanagerService() {
        return $this->services['slinksactionmanager'] = new \slinks\extensions\action\core\impl\SlinksActionManager($this->get('slinks.action.configuration')); }
    protected function getSlinks_Extensions_Onecms_Cms_Joomla_JoomlamenuserviceService() {
        return $this->services['slinks.extensions.onecms.cms.joomla.joomlamenuservice'] = new \slinks\extensions\onecms\cms\joomla\JoomlaMenuService(); }
    protected function getSlinks_Action_Interceptor_ActioninvokingService() {
        return $this->services['slinks.action.interceptor.actioninvoking'] = new \slinks\extensions\action\interceptor\ActionInvokingInterceptor(); }
    protected function getSlinks_Action_Interceptor_ParameterService() {
        return $this->services['slinks.action.interceptor.parameter'] = new \slinks\extensions\action\interceptor\ParameterInjectingInterceptor(); }
    protected function getSlinks_Action_Interceptor_ActionasparameterService() {
        return $this->services['slinks.action.interceptor.actionasparameter'] = new \slinks\extensions\action\interceptor\ActionInjectingInterceptor(); }
    protected function getSlinks_Action_Interceptor_ResultinvokingService() {
        return $this->services['slinks.action.interceptor.resultinvoking'] = new \slinks\extensions\action\interceptor\ResultInvokingInterceptor($this->get('slinks.action.configuration')); }
    protected function getSlinks_Action_Interceptor_RestfullService() {
        return $this->services['slinks.action.interceptor.restfull'] = new \slinks\extensions\action\interceptor\RestfullInterceptor(); }
    protected function getSlinks_Action_Result_EchoService() {
        return $this->services['slinks.action.result.echo'] = new \slinks\extensions\action\result\EchoResult(); }
    protected function getSlinks_Action_Result_ViewService() {
        $this->services['slinks.action.result.view'] = $instance = new \slinks\extensions\action\result\ViewRenderingResult();
        $instance->setRenderEngine($this->get('slinks.template.engine'));
        return $instance; }
    protected function getSlinks_Action_Result_NothingService() {
        return $this->services['slinks.action.result.nothing'] = new \slinks\extensions\action\result\DoNothingResult(); }
    protected function getSlinks_Action_Result_RawService() {
        return $this->services['slinks.action.result.raw'] = new \slinks\extensions\action\result\RawResult(); }
    protected function getSlinks_Template_EngineService() {
        $this->services['slinks.template.engine'] = $instance = new \slinks\core\Templating\DelegatingEngine();
        $instance->addEngine(new \slinks\extensions\twig\TwigEngine('twig', '/home/navid/www/htdocs/ecommerce/HeadflowConcept/src/joomla/modules/mod_hfmenu/headflow/views', array('debug' => false, 'cache' => '/home/navid/www/htdocs/ecommerce/HeadflowConcept/src/joomla/modules/mod_hfmenu/cache/twig'), new \slinks\core\Templating\TemplateNameParser()));
        return $instance; }
    protected function getDefaultParameters() {
        return array(
            'root.dir' => '/home/navid/www/htdocs/ecommerce/HeadflowConcept/src/joomla/modules/mod_hfmenu',
            'slinks.container.id' => 'default',
            'slinks.cache.dir' => '/home/navid/www/htdocs/ecommerce/HeadflowConcept/src/joomla/modules/mod_hfmenu/cache',
            'slinks.debug.enabled' => false,
            'slinks.config.root.dir' => '/home/navid/www/htdocs/ecommerce/HeadflowConcept/src/joomla/modules/mod_hfmenu',
            'slinks.action.config.action.mappings' => array(
                'HfMenu_render' => new slinks\extensions\action\mapping\ActionMapping('HfMenu_render','headflow.actions.MainAction','render',array('success'=>new slinks\extensions\action\mapping\ResultMapping('success','','menu.twig')) ,null),
            ),
            'twig.name.parser.class' => 'slinks\\core\\Templating\\TemplateNameParser',
            'twig.engine.class' => 'slinks\\extensions\\twig\\TwigEngine',
            'twig.template.suffix' => 'twig',
            'twig.options' => array(
                'debug' => false,
                'cache' => '/home/navid/www/htdocs/ecommerce/HeadflowConcept/src/joomla/modules/mod_hfmenu/cache/twig',
            ),
            'twig.template.dirs' => '/home/navid/www/htdocs/ecommerce/HeadflowConcept/src/joomla/modules/mod_hfmenu/headflow/views',
            'slinks.action.config.interceptor.stacks' => array(
                'default' => new slinks\extensions\action\interceptor\InterceptorStack('default', $this, array('slinks.action.interceptor.parameter', 'slinks.action.interceptor.actionInvoking', 'slinks.action.interceptor.actionAsParameter', 'slinks.action.interceptor.resultInvoking')),
                'actionOnly' => new slinks\extensions\action\interceptor\InterceptorStack('actionOnly', $this, array('slinks.action.interceptor.parameter', 'slinks.action.interceptor.actionInvoking')),
                'restfull' => new slinks\extensions\action\interceptor\InterceptorStack('restfull', $this, array('slinks.action.interceptor.parameter', 'slinks.action.interceptor.actionInvoking', 'slinks.action.interceptor.restfull')),
            ),
            'slinks.action.config.result.configs' => array(
                'echo' => new slinks\extensions\action\result\ResultConfig('echo','slinks.action.result.echo'),
                'view' => new slinks\extensions\action\result\ResultConfig('view','slinks.action.result.view'),
                'nothing' => new slinks\extensions\action\result\ResultConfig('nothing','slinks.action.result.nothing'),
                'raw' => new slinks\extensions\action\result\ResultConfig('raw','slinks.action.result.raw'),
            ),
            'slinks.action.config.default.result' => 'view',
            'slinks.action.config.default.interceptor.stack' => 'default',
        ); } }
