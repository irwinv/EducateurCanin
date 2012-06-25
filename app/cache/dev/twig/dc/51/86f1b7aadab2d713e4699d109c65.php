<?php

/* PatrickElevageBundle:Concours:editer.html.twig */
class __TwigTemplate_dc5186f1b7aadab2d713e4699d109c65 extends Twig_Template
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
        echo " method=\"POST\" enctype=\"multipart/form-data\">
\t\t<p>";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "msg"), "html", null, true);
        echo "</p>
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t\t<p>AJouter une image</p>
\t\t<input type=\"file\" name=\"img\" /><br />
\t\t<input type=\"submit\" value=\"Enregistrer\" />
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
\t</form>
";
    }

    public function getTemplateName()
    {
        return "PatrickElevageBundle:Concours:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
