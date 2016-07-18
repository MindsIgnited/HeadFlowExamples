<?php
namespace hf\actions;


/**
 * Description of ContactFormAction
 *
 * @author navid
 * @Action(actionPath="ContactFormAction_")
 * @Results({@Result(name="display",value="contact-form.html"),@Result(name="submit",value="response.html")})
 * 
 */
class ContactFormAction {

    /**
     * @var IResourceManager
     */
    private $resourceManager;

    /**
     * The configured template render engine.
     * @var EngineInterface
     */
    private $renderEngine;

    /** Used by templates **/
    private $postURL;

    private $baseURL;

    private $captchaURL;

    private $messageSendError;

    /** Comes from request **/

    private $session;

    private $name;

    private $email;

    private $phone;
    
    private $subject;

    private $message;


    /**
     *
     * @param \slinks\extensions\onecms\core\templating\IResourceManager $resourceManager
     * @Inject
     */
    function __construct(\slinks\extensions\onecms\core\templating\IResourceManager $resourceManager) {
        $this->resourceManager = $resourceManager;
    }

    /**
     * @Action(actionPath='ContactFormAction_display')
     */
    public function display() {
        $this->baseURL = 'components/com_hfcontact/hf/views/';
        $jsPath = $this->resourceManager->getBaseURL().$this->baseURL.'js/';
        $cssPath = $this->resourceManager->getBaseURL().$this->baseURL.'css/';

        $this->resourceManager->addStyleSheet($cssPath.'/hfcontact.css');
        $this->resourceManager->addStyleSheet($cssPath.'/custom-theme/jquery-ui-1.8.10.custom.css');

        $this->resourceManager->addScript($jsPath.'jquery-1.4.4.min.js');
        $this->resourceManager->addScript($jsPath.'jquery-ui-1.8.10.custom.min.js');
        $this->resourceManager->addScript($jsPath.'jquery.validate.js');
        $this->resourceManager->addScript($jsPath.'jquery.form.js');
        $this->resourceManager->addScript($jsPath.'jquery.clearfield.js');
        $this->resourceManager->addScript($jsPath.'hfcontact.js');

        $this->postURL = $this->resourceManager->getBaseURL() .'index2.php?option=com_hfcontact&task=ContactFormAction_submit';

        $this->captchaURL = $this->resourceManager->getBaseURL().'index2.php?option=com_hfcontact&task=CaptchaAction_getCaptcha&format=raw';

        return 'display';
    }



    /**
     * @Action(actionPath='ContactFormAction_submit')
     */
    public function submit(){

        $params = &\JComponentHelper::getParams( 'com_hfcontact' );

        // Let the render engine create the mail body
        $email = $this->renderEngine->render('email.html', array('name'=>$this->name,'email'=>$this->email,'phone'=>$this->phone,'subject'=>$this->subject,'message'=>$this->message));
        /*
        $mailer =&\JFactory::getMailer();
        $mailer->setSender($params->get('from_email'));
        $mailer->addRecipient($params->get('to_email'));

        $mailer->setSubject('Contact Request: ('.$this->subject.')');
        $mailer->setBody($email);
        $mailer->isHTML(true);

        $send =& $mailer->Send();
        */

        $headers = "From: {$params->get('from_email')}" . "\r\n" .
                   "Reply-To: {$params->get('from_email')}" . "\r\n" .
                   'X-Mailer: PHP/' . phpversion().
                   'MIME-Version: 1.0' . "\r\n".
                   'Content-type: text/html; charset=iso-8859-1' . "\r\n";


        $send = mail($params->get('to_email'), $this->subject, $email, $headers);

        if ( $send !== true ) {
            //echo 'Error sending email: ' . $send->message;
            $this->messageSendError  = true;
        } else {
            $this->messageSendError  = false;
        }

        return 'submit';
    }

    /**
     * Sets the configured render engine
     * @param EngineInterface $renderEngine
     * TODO: remove hard coded constants
     * Also we are not using constructor injection since this one is named and the constructor has type injection
     * @Inject('slinks.template.engine')
     */
    public function setRenderEngine($renderEngine){
        $this->renderEngine = $renderEngine;
    }
    
    /********** Getters Setters *************/

    public function getPostURL() {
        return $this->postURL;
    }
    
    public function getBaseURL() {
        return $this->baseURL;
    }

    public function getCaptchaURL() {
        return $this->captchaURL;
    }

    public function setSession($session) {
        $this->session = $session;
    }

    public function getMessageSendError() {
        return $this->messageSendError;
    }
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $message;
    }


}
