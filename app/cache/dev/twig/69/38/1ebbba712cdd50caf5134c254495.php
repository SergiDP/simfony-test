<?php

/* AcmeDemoBundle:Welcome:list.html.twig */
class __TwigTemplate_69381ebbba712cdd50caf5134c254495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Symfony!</title>
    </head>
    <body>
        <h1>title</h1>

        <ul id=\"navigation\">
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 11
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nombre"), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "        </ul>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }
}
