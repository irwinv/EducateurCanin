<?php

/* PatrickElevageBundle:Default:index.html.twig */
class __TwigTemplate_bb0c6b0b91e8d15d8065e3f8fc0ce708 extends Twig_Template
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
        echo "\t<div id=\"accueil\">
\t\t<div id=\"accueil_gauche\">
\t\t\t<strong>Bienvenue à l'Elevage <br /> Les Vigilants SARTROUVILLE</strong>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget ligula sed turpis pretium vehicula. Praesent porttitor, turpis id lacinia molestie, lacus odio lacinia turpis, nec tempor ante elit ac elit. Morbi semper massa sit amet nulla ornare a sagittis velit faucibus. Phasellus vel est dolor. Mauris vestibulum risus quis magna dapibus eget tempus ligula malesuada. Nam mollis volutpat varius. Fusce et lorem neque.</p>

\t\t\t<p>Aliquam dictum, ante in accumsan pulvinar, orci lorem condimentum dui, vitae cursus nulla est in purus. Etiam viverra felis in quam ultrices vitae dignissim elit suscipit. Suspendisse consequat fringilla libero, sed aliquet lorem mattis in. Aliquam erat volutpat. Nam vitae sem leo. Nullam viverra leo id mi gravida consectetur. Nulla facilisi.</p>

\t\t\t<p>Nunc eu turpis felis. Fusce neque tortor, interdum a tempus nec, facilisis et nisl. Fusce dignissim tincidunt vehicula. Nulla nec ligula nec lectus malesuada aliquet. Nam eu elementum arcu. Nullam sagittis posuere tellus, quis mollis velit dictum at. Morbi consectetur aliquet lacus, at tristique magna blandit vel. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Praesent id leo mauris. Vestibulum porttitor lorem eget nisi laoreet dictum sed ut tellus. Quisque mattis erat quis sem iaculis scelerisque. Nunc molestie enim non lorem lacinia at ultrices mi ullamcorper. Sed non sapien porta dolor placerat tempus sed fermentum est. Aliquam sed tortor nec lectus tempor euismod.</p>
\t\t</div>
\t\t<div id=\"accueil_droite\">
\t\t\t<img src=\"/Elevage/web/bundles/patrickelevage/images/bg_accueil.jpg\" />
\t\t</div>
\t</div>
\t<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "PatrickElevageBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
