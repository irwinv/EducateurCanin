<?php

/* ::base.html.twig */
class __TwigTemplate_19dabab6799097dadf77f235b61dfe88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js\"></script>
        ";
        // line 7
        $this->env->loadTemplate("::css.html.twig")->display($context);
        // line 8
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<div id=\"document\">
\t\t\t<div id=\"header\">
\t\t\t\t<div id=\"banner\">
\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_accueil"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/patrickelevage/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Elevage Les Vigilants\" title=\"Elevage Les Vigilants\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"nav\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_accueil"), "html", null, true);
        echo "\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("id" => 1, "chiot" => 0)), "html", null, true);
        echo "\">Bergers du Caucase</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("id" => 1, "chiot" => 0)), "html", null, true);
        echo "\">Mes Chiens</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("id" => 1, "chiot" => 1)), "html", null, true);
        echo "\">Chiots</a></li>
\t\t\t\t\t\t\t<li><a href=\"#marketing\">Concours</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("id" => 2, "chiot" => 0)), "html", null, true);
        echo "\">Bergers d'Asie Centrale</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("id" => 2, "chiot" => 0)), "html", null, true);
        echo "\">Mes Chiens</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("id" => 2, "chiot" => 1)), "html", null, true);
        echo "\">Chiots</a></li>
\t\t\t\t\t\t\t<li><a href=\"#marketing\">Concours</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#contact\">Contactez nous</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div id=\"container\">
\t\t\t\t<div id=\"calque_marron\">
\t\t\t\t\t";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/patrickelevage/js/menu.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">
\t\t\$(function(){
\t\t\t\$(\"#menu\").juizDropDownMenu({
\t\t\t\t'showEffect' : 'fade',
\t\t\t\t'hideEffect' : 'slide'
\t\t\t});
\t\t});
\t\t</script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Elevage Les Vigilants - Sartrouville 78500";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
