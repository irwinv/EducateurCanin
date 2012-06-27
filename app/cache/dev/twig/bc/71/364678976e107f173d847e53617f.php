<?php

/* PatrickElevageBundle:Concours:show.html.twig */
class __TwigTemplate_bc71364678976e107f173d847e53617f extends Twig_Template
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
\t<div id=\"liste_des_chiens\">
\t\t<div id=\"bouet_ul\">
\t\t\t<ul>
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "concours"));
        foreach ($context['_seq'] as $context["_key"] => $context["concour"]) {
            // line 9
            echo "\t\t\t\t<li>
\t\t\t\t\t<div class=\"bouet\">
\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t<a href=\"/uploads/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "concour"), "img"), "html", null, true);
            echo "\" rel=\"lightbox\">
\t\t\t\t\t\t\t\t<img src=\"/uploads/thumbs/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "concour"), "thumb"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "concour"), "titre"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "concour"), "titre"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<strong>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "concour"), "titre"), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t";
            // line 19
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 20
                echo "\t\t\t\t\t\t\t\t<div class=\"btn_modif_concours\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_concour_modifier", array("id" => $this->getAttribute($this->getContext($context, "concour"), "idc"))), "html", null, true);
                echo "\">Modifier</a></div>
\t\t\t\t\t\t\t\t<div class=\"btn_modif_concours\"><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_concour_supprimer", array("id" => $this->getAttribute($this->getContext($context, "concour"), "idc"))), "html", null, true);
                echo "\">Supprimer</a></div>
\t\t\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concour'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "\t\t\t</ul>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PatrickElevageBundle:Concours:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
