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
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.2.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/patrickelevage/js/lightbox.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 8
        $this->env->loadTemplate("::css.html.twig")->display($context);
        // line 9
        echo "\t\t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<div id=\"document\">
\t\t\t<div id=\"header\">
\t\t\t\t<div id=\"banner\">
\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_accueil"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/patrickelevage/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Elevage Les Vigilants\" title=\"Elevage Les Vigilants\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"nav\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_accueil"), "html", null, true);
        echo "\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("race" => 1, "chiot" => 0)), "html", null, true);
        echo "\">Bergers du Caucase</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("race" => 1, "chiot" => 0)), "html", null, true);
        echo "\">Mes Chiens</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("race" => 1, "chiot" => 1)), "html", null, true);
        echo "\">Chiots</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_concour_chiens", array("race" => 1)), "html", null, true);
        echo "\">Concours</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("race" => 2, "chiot" => 0)), "html", null, true);
        echo "\">Bergers d'Asie Centrale</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("race" => 2, "chiot" => 0)), "html", null, true);
        echo "\">Mes Chiens</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("race" => 2, "chiot" => 1)), "html", null, true);
        echo "\">Chiots</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_concour_chiens", array("race" => 2)), "html", null, true);
        echo "\">Concours</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_contact"), "html", null, true);
        echo "\">Contactez nous</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div id=\"breadcrumb\">
\t\t\t\t";
        // line 43
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            echo "\t\t\t\t\t";
            $this->env->loadTemplate("PatrickUtilisateurBundle::connexion.html.twig")->display($context);
            // line 45
            echo "\t\t\t\t";
        }
        // line 46
        echo "\t\t\t</div>
\t\t\t<div id=\"container\">
\t\t\t\t<div id=\"calque_marron\">
\t\t\t\t\t";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"footer\"></div>
\t\t</div>

\t\t<script type=\"text/javascript\" src=\"";
        // line 55
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

    // line 49
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
