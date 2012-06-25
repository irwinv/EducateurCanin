<?php

/* ::css.html.twig */
class __TwigTemplate_1f6fafd6a694e11d20bbe3ac199b591b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/patrickelevage/css/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/patrickelevage/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/patrickelevage/css/lightbox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<!--[if IE]>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/patrickelevage/css/style-ie.css"), "html", null, true);
        echo "\" media=\"screen\">
<![endif]-->
";
    }

    public function getTemplateName()
    {
        return "::css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
