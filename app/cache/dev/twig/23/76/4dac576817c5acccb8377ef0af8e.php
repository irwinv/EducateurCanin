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
\t<div id=\"liste_des_chiens\">
\t\t<div id=\"bouet_ul\">
\t\t\t<ul>
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "chiens"));
        foreach ($context['_seq'] as $context["_key"] => $context["chien"]) {
            // line 9
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "chien"), "sexe") == "M")) {
                // line 10
                echo "\t\t\t\t<li>
\t\t\t\t\t<div class=\"bouet\">
\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t<img src=\"/Elevage/web/uploads/thumbs/";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "thumb"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<strong>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t<p>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "nom"), "html", null, true);
                echo " </p>
\t\t\t\t\t\t\t<p>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "sexe"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t";
                // line 19
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t<div class=\"btn_modif\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_modifier", array("id" => $this->getAttribute($this->getContext($context, "chien"), "idc"))), "html", null, true);
                    echo "\">Modifier</a></div>
\t\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 26
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chien'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "\t\t\t</ul>
\t\t\t<ul>
\t\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "chiens"));
        foreach ($context['_seq'] as $context["_key"] => $context["chien"]) {
            // line 30
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "chien"), "sexe") == "F")) {
                // line 31
                echo "\t\t\t\t<li>
\t\t\t\t\t<div class=\"bouet\">
\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t<img src=\"/Elevage/web/uploads/thumbs/";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "thumb"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<strong>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t<p>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "nom"), "html", null, true);
                echo " </p>
\t\t\t\t\t\t\t<p>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "sexe"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t";
                // line 40
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t<div class=\"btn_modif\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_modifier", array("id" => $this->getAttribute($this->getContext($context, "chien"), "idc"))), "html", null, true);
                    echo "\">Modifier</a></div>
\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 47
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chien'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "\t\t\t</ul>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t</div>
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
