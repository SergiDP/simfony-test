<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_3247366ff88e90244722532860d736d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  40 => 6,  140 => 39,  97 => 45,  86 => 39,  77 => 27,  49 => 10,  23 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 37,  65 => 23,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 5,  103 => 34,  67 => 19,  61 => 22,  47 => 9,  105 => 24,  93 => 20,  76 => 22,  72 => 14,  68 => 24,  27 => 4,  91 => 20,  84 => 28,  94 => 44,  88 => 41,  79 => 23,  59 => 13,  21 => 2,  44 => 12,  31 => 3,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 30,  118 => 29,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 11,  26 => 11,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 8,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 33,  120 => 46,  115 => 28,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 28,  74 => 16,  66 => 15,  55 => 15,  52 => 10,  50 => 10,  43 => 7,  41 => 7,  37 => 5,  35 => 5,  32 => 4,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 40,  138 => 51,  136 => 50,  133 => 31,  130 => 30,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 47,  98 => 22,  95 => 34,  92 => 43,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 12,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 3,);
    }
}
