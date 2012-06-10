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
        ";
        // line 6
        $this->env->loadTemplate("::css.html.twig")->display($context);
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<div id=\"document\">
\t\t\t<div id=\"header\">
\t\t\t\t<div id=\"menu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>ACCEUIL</li>
\t\t\t\t\t\t<li>BERGERS DE COCAIN</li>
\t\t\t\t\t\t<li>BERGERS DE NOUNOU</li>
\t\t\t\t\t\t<li>CONTACT</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "\t\t</div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Elevage Les Vigilants - Sartrouville";
    }

    // line 21
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
