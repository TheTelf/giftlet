<?php

/* giftletBundle::layout.html.twig */
class __TwigTemplate_800b0be4a4f877055c954785d4efcc9911242661c004ec92a4cbb0774e143e7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/giftlet/images/favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<div id=\"header\">
    <b>gift</b>let
</div>

<div id=\"content\">
    ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "</div>

<div id=\"footer\">
    This is the footer
</div>

</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "            giftlet :: generosity, distributed.
        ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/giftlet/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "    ";
    }

    public function getTemplateName()
    {
        return "giftletBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 13,  77 => 11,  74 => 10,  53 => 24,  37 => 13,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 25,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 11,  29 => 5,  87 => 14,  72 => 16,  55 => 26,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 15,  44 => 12,  35 => 10,  31 => 8,  43 => 7,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 24,  69 => 6,  66 => 5,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 15,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}