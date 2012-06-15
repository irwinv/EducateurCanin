<?php

/* PatrickElevageBundle:Chiens:show.html.twig */
class __TwigTemplate_23764dac576817c5acccb8377ef0af8e extends Twig_Template
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
        echo "\t<p>";
        echo twig_escape_filter($this->env, $this->getContext($context, "msg"), "html", null, true);
        echo "</p>
\t<ul>
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "chiens"));
        foreach ($context['_seq'] as $context["_key"] => $context["chien"]) {
            // line 7
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "sexe"), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chien'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "PatrickElevageBundle:Chiens:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
