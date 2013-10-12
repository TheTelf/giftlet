<?php

/* giftletBundle:Gift:show.html.twig */
class __TwigTemplate_2ed88e39e66f177fa4a70a43fe917d2b5d89cda5731352e25335bbafccde127e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("giftletBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "giftletBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Gift</h1>

        <table class=\"record_properties\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Cost</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cost"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Createddate</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createddate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>

            <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("gift");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gift_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
                Edit
            </a>
        </li>
        <li>";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "giftletBundle:Gift:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  52 => 12,  90 => 30,  58 => 19,  84 => 27,  77 => 11,  74 => 10,  53 => 24,  37 => 13,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 36,  71 => 22,  67 => 21,  63 => 20,  59 => 14,  47 => 9,  38 => 6,  94 => 25,  89 => 20,  85 => 25,  79 => 18,  75 => 23,  68 => 14,  56 => 16,  50 => 11,  29 => 3,  87 => 14,  72 => 16,  55 => 26,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 36,  78 => 21,  46 => 7,  27 => 4,  40 => 15,  44 => 12,  35 => 5,  31 => 8,  43 => 7,  41 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 24,  69 => 6,  66 => 5,  62 => 23,  49 => 12,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 41,  106 => 33,  103 => 32,  99 => 31,  95 => 40,  92 => 21,  86 => 28,  82 => 22,  80 => 31,  73 => 19,  64 => 17,  60 => 13,  57 => 15,  54 => 18,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
