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
        return array (  94 => 25,  91 => 24,  87 => 14,  77 => 11,  74 => 10,  69 => 6,  66 => 5,  55 => 26,  53 => 24,  40 => 15,  37 => 13,  35 => 10,  31 => 8,  23 => 1,  109 => 41,  102 => 36,  90 => 30,  84 => 13,  75 => 23,  71 => 22,  67 => 21,  61 => 20,  58 => 19,  54 => 18,  39 => 5,  32 => 4,  29 => 5,);
    }
}
