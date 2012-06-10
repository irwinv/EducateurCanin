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
        echo "\t<h1>Elevage Les Vigilants SARTROUVILLE</h1>
\t<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_ajout"), "html", null, true);
        echo " \">Ajouter un chien</a>
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
