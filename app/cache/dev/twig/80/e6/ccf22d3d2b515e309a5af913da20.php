<?php

/* PatrickElevageBundle:Chiens:ajout.html.twig */
class __TwigTemplate_80e6ccf22d3d2b515e309a5af913da20 extends Twig_Template
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
        echo "\t<form action=\"#\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t\t<input type=\"submit\" value=\"Enregistrer\" />
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
\t</form>
";
    }

    public function getTemplateName()
    {
        return "PatrickElevageBundle:Chiens:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
