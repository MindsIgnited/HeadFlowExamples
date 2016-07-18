<?php

namespace hf\actions;

/**
 * Description of CaptchaAction
 *
 * @author navid
 * FIXME: we have to have at least 1 annotation at the class level for any annotated class.
 * @Argument('%root.dir%')
 */
class CaptchaAction {

    private $rootDir;

    /**
     *
     * @param string $rootDir
     */
    function __construct($rootDir) {
        $this->rootDir = $rootDir;
    }

    /**
     * @Action(actionPath='CaptchaAction_getCaptcha',interceptorStack='actionOnly')
     */
    public function getCaptcha() {

        $captchaDir = $this->rootDir.\DIRECTORY_SEPARATOR.'dependencies'.\DIRECTORY_SEPARATOR.'cool-php-captcha-0.3'.\DIRECTORY_SEPARATOR;
        require_once $captchaDir.'captcha.php';

        $captcha = new \SimpleCaptcha();

        $captcha->colors = array(
            array(27, 78, 181) // blue
        );
        $captcha->resourcesPath = $captchaDir.\DIRECTORY_SEPARATOR.'resources';
        // Image generation
        $captcha->CreateImage();

        // TODO: Refactor into slinks
        $doc =&\JFactory::getDocument();
        $doc->setMimeEncoding('image/jpeg');
        return null;
    }

    /**
     * @Action(actionPath='CaptchaAction_validate',interceptorStack='actionOnly')
     */
    public function validate() {
        $ret = 'false';
        if (!empty($_REQUEST['captcha'])) {

            if (empty($_SESSION['captcha']) === false && trim(strtolower($_REQUEST['captcha'])) == $_SESSION['captcha']) {
                $ret = 'true';
                unset($_SESSION['captcha']);
            }
        }
        return $ret;
    }

}
