<?php

namespace headflow\actions;

use slinks\extensions\onecms\cms\ICmsMenuService;
use \slinks\extensions\onecms\core\templating\IResourceManager;

/**
 * 
 * @author Navid Mitchell
 * 
 * @Results({@Result(name="success",value="menu.twig")})
 */
class MainAction {

    private $menuService = null;
    private $resourceManager = null;
    private $menu;
    private $menuId;

    /**
     * 
     * @param ICmsMenuService $menuService
     * @Inject
     */
    function __construct(ICmsMenuService $menuService,  IResourceManager $resourceManager) {
        $this->menuService = $menuService;
        $this->resourceManager = $resourceManager;
    }

    /**
     * @Action(actionPath="HfMenu_render")
     */
    public function render() {

        $this->menu = $this->menuService->getMenu($this->menuId);
        
        // FIXME Be smarter :)
        $base =  $this->resourceManager->getBaseURL() . 'modules/mod_hfmenu/headflow/views';
        
        $this->resourceManager->addScript($base .'/js/jquery-1.6.1.min.js');
        $this->resourceManager->addScript($base .'/js/HeadFlowSlideMenu.js');
        $this->resourceManager->addStyleSheet($base.'/css/HeadFlowSlideMenu.css');
        
        return 'success';
    }

    public function getMenu() {
        return $this->menu;
    }

    public function getMenuId() {
        return $this->menuId;
    }

    public function setMenuId($menuId) {
        $this->menuId = $menuId;
    }

}