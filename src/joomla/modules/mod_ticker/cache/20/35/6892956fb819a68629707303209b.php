<?php

/* ticker.twig */
class __TwigTemplate_20356892956fb819a68629707303209b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "

<div id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context['tickerId']) ? $context['tickerId'] : null), "html");
        echo "\" class=\"flip-counter\"></div>

";
        // line 6
        echo "<script type=\"text/javascript\" > 
    var HeadflowCounter = null;
    window.addEvent('domready', function() {
        // for some reason this is executed more than once on the home page 
        // so we guard against that. This also has the affect of only allowing 1 ticker per page.
        if(HeadflowCounter == null){
            HeadflowCounter = new flipCounter(\"";
        // line 12
        echo (isset($context['tickerId']) ? $context['tickerId'] : null);
        echo "\", {value:";
        echo (isset($context['startValue']) ? $context['startValue'] : null);
        echo ", inc: 1, auto:false,pace:500 } );
            HeadflowCounter.incrementTo(";
        // line 13
        echo (isset($context['endValue']) ? $context['endValue'] : null);
        echo "); 
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "ticker.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
