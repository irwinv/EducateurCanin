<?php

/* PatrickUtilisateurBundle::connexion.html.twig */
class __TwigTemplate_5fcfb671b44dbe950743372a974e0851 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
";
        // line 2
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 3
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mon Profil", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "</a> |
    <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Déconnexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
";
        }
        // line 6
        echo "</div>

";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 9
            echo "<div class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "flash"), "html", null, true);
            echo "\">
    ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "key"), array(), "FOSUserBundle"), "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "PatrickUtilisateurBundle::connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
