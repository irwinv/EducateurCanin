<?php

/* PatrickElevageBundle:Chiens:show.html.twig */
class __TwigTemplate_23764dac576817c5acccb8377ef0af8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 12
    public function block_title($context, array $blocks = array())
    {
        // line 13
        echo "
\t\t\t\t\t\t";
        // line 14
        $context["race"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "race"), "method");
        // line 15
        echo "\t\t\t\t\t\t";
        $context["chiot"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "chiot"), "method");
        // line 16
        echo "\t\t\t\t\t\t";
        $context["sexe"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "sexe"), "method");
        // line 17
        echo "
\t\t\t\t\t\t";
        // line 18
        if (($this->getContext($context, "race") == 1)) {
            // line 19
            echo "\t\t\t\t\t\t\t";
            if (($this->getContext($context, "chiot") == 1)) {
                // line 20
                echo "\t\t\t\t\t\t\t\t";
                $context["titre"] = "Chiens adults Bergers du Caucase mâles";
                // line 21
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t\t\t\t";
                $context["titre"] = "Chiots Bergers du Caucase males";
                // line 23
                echo "\t\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t";
        } else {
            // line 25
            echo "\t\t\t\t\t\t\t";
            if (($this->getContext($context, "chiot") == 1)) {
                // line 26
                echo "\t\t\t\t\t\t\t\t";
                $context["titre"] = "Chiens adults Bergers d'Asie Centrale males";
                // line 27
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t\t\t\t\t";
                $context["titre"] = "Chiots Bergers du Caucase males";
                // line 29
                echo "\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t";
        }
        // line 31
        echo "
\t\t\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, $this->getContext($context, "titre"), "html", null, true);
        echo "
\t\t\t\t\t";
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
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["chien"]) {
            // line 9
            echo "
\t\t\t\t";
            // line 10
            if (($this->getAttribute($this->getContext($context, "chien"), "sexe") == "M")) {
                // line 11
                echo "\t\t\t\t<li>
\t\t\t\t\t";
                // line 12
                $this->displayBlock('title', $context, $blocks);
                // line 34
                echo "\t\t\t\t\t<div class=\"bouet\">
\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t<a href=\"/uploads/";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "img"), "html", null, true);
                echo "\" rel=\"lightbox\">
\t\t\t\t\t\t\t\t<img src=\"/uploads/thumbs/";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "thumb"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<strong>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "race"), "method"), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t<p>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "nom"), "html", null, true);
                echo " </p>
\t\t\t\t\t\t\t<p><img src=\"/bundles/patrickelevage/images/icon/male.png\" /></p>
\t\t\t\t\t\t\t";
                // line 44
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t<div class=\"btn_modif\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_modifier", array("id" => $this->getAttribute($this->getContext($context, "chien"), "idc"))), "html", null, true);
                    echo "\">Modifier</a></div>
\t\t\t\t\t\t\t\t<div class=\"btn_modif\"><a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_supprimer", array("id" => $this->getAttribute($this->getContext($context, "chien"), "idc"))), "html", null, true);
                    echo "\">Supprimer</a></div>
\t\t\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 52
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chien'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "\t\t\t</ul>
\t\t\t<ul>
\t\t\t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "chiens"));
        foreach ($context['_seq'] as $context["_key"] => $context["chien"]) {
            // line 56
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "chien"), "sexe") == "F")) {
                // line 57
                echo "\t\t\t\t<li>
\t\t\t\t\t<div class=\"bouet\">
\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t<a href=\"/uploads/";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "img"), "html", null, true);
                echo "\" rel=\"lightbox\">
\t\t\t\t\t\t\t\t<img src=\"/uploads/thumbs/";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "thumb"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<strong>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "titre"), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t<p>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chien"), "nom"), "html", null, true);
                echo " </p>
\t\t\t\t\t\t\t<p><img src=\"/bundles/patrickelevage/images/icon/female.png\" /></p>
\t\t\t\t\t\t\t";
                // line 68
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t<div class=\"btn_modif\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_modifier", array("id" => $this->getAttribute($this->getContext($context, "chien"), "idc"))), "html", null, true);
                    echo "\">Modifier</a></div>
\t\t\t\t\t\t\t\t<div class=\"btn_modif\"><a href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_supprimer", array("id" => $this->getAttribute($this->getContext($context, "chien"), "idc"))), "html", null, true);
                    echo "\">Supprimer</a></div>
\t\t\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 76
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chien'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 77
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
