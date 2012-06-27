<?php

/* PatrickElevageBundle:Default:index.html.twig */
class __TwigTemplate_bb0c6b0b91e8d15d8065e3f8fc0ce708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"accueil\">
\t\t<div id=\"accueil_gauche\">
\t\t\t<strong>Bienvenue à l'Elevage <br /> Les Vigilants SARTROUVILLE</strong>
\t\t\t\t<p>";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->getContext($context, "presentation"), "html", null, true));
        echo "</p>
\t\t\t\t";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "\t\t\t\t\t<div class=\"btn_modif\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_modifier_presentation", array("id" => $this->getContext($context, "id"))), "html", null, true);
            echo "\">Modifier texte de présentation</a></div>
\t\t\t\t";
        }
        // line 11
        echo "\t\t</div>
\t<div id=\"accueil_droite\">
\t\t\t<img src=\"/bundles/patrickelevage/images/bg_accueil.jpg\" />
\t\t</div>
\t</div>
\t<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "PatrickElevageBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
