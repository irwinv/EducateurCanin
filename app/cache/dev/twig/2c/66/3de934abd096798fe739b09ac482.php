<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_2c663de934abd096798fe739b09ac482 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fos_user_user_show\">
\t<p>Résumé des informations de connexion</p>
\t<p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</p>
\t<p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mail", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
        echo "</p></br />
\t<ul>
\t\t<li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_ajouter"), "html", null, true);
        echo " \">Ajouter un chien</a></li>
\t\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_concour_ajouter"), "html", null, true);
        echo " \">Ajouter un concour</a></li>
\t\t<li>Voir et modifier les :</li>
\t\t<li><strong>Bergers de Caucases : </strong></li>
\t\t<li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("race" => 1, "chiot" => 0)), "html", null, true);
        echo "\">Mes Chiens</a></li>
\t\t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("race" => 1, "chiot" => 1)), "html", null, true);
        echo "\">Chiots</a></li>
\t\t<li><strong>Bergers d'Asie Centrale : </strong></li>
\t\t<li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("race" => 2, "chiot" => 0)), "html", null, true);
        echo "\">Mes Chiens</a></li>
\t\t<li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elevage_chiens", array("race" => 2, "chiot" => 1)), "html", null, true);
        echo "\">Chiots</a></li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
