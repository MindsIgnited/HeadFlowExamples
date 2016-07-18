<?php

/* menu.twig */
class __TwigTemplate_e080858c34a0fd76f568dda28ef18082 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo " 

";
        // line 4
        echo "
";
        // line 21
        echo "
<div class=\"hfMenu\">
  <div class=\"hfMenuWrapper\">
    <ul>
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context['action']) ? $context['action'] : null), "menu", array(), "any"), "menuNodes", array(), "any"));
        foreach ($context['_seq'] as $context['_key'] => $context['node']) {
            echo "\t\t\t
            <li class=\"hfMenuItem";
            // line 26
            echo ($this->getAttribute((isset($context['node']) ? $context['node'] : null), "active", array(), "any")) ? (" hfactive") : ("");
            echo "\">
                    <a class=\"hfMenuLink\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['node']) ? $context['node'] : null), "url", array(), "any"), "html");
            echo "\">";
            echo $this->getAttribute((isset($context['node']) ? $context['node'] : null), "name", array(), "any");
            echo "</a>
                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this, "renderChildren", array((isset($context['node']) ? $context['node'] : null), ), "method"), "html");
            echo "
            </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "    </ul>        
  </div>
</div>";
    }

    // line 5
    public function getrenderChildren($node = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "node" => $node,
        ));

        ob_start();
        // line 6
        echo "    ";
        if ($this->getAttribute((isset($context['node']) ? $context['node'] : null), "hasChildren", array(), "any")) {
            // line 7
            echo "    \t<div class=\"hfSubMenu\">
              <div class=\"hfSubMenuWrapper\">
                    <ul>
                    ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['node']) ? $context['node'] : null), "children", array(), "any"));
            foreach ($context['_seq'] as $context['_key'] => $context['child']) {
                // line 11
                echo "                            <li class=\"hfMenuItem";
                echo ($this->getAttribute((isset($context['node']) ? $context['node'] : null), "active", array(), "any")) ? (" hfactive") : ("");
                echo "\">
                                    <a class=\"hfMenuLink\" hr ef=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['child']) ? $context['child'] : null), "url", array(), "any"), "html");
                echo "\">";
                echo $this->getAttribute((isset($context['child']) ? $context['child'] : null), "name", array(), "any");
                echo "}</a>
                                    ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this, "renderChildren", array((isset($context['child']) ? $context['child'] : null), ), "method"), "html");
                echo "
                            </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 16
            echo "                    </ul>
            </div>
        </div>
    ";
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }
}
