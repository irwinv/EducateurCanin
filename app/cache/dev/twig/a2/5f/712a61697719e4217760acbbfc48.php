<?php

/* PatrickElevageBundle:Default:contact.html.twig */
class __TwigTemplate_a25f712a61697719e4217760acbbfc48 extends Twig_Template
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
        echo "<div id=\"contact_infos\">
\t<p>Votre contact : M. Patrick JUILLA</p>

\t<p>Chemin du bas de la plaine<br />
\t\t78500 SARTROUVILLE<br />
\t\tTél :  06 13 44 31 78<br />
\t\tMail : contact@elevage-des-vigilants.fr
\t</p>

\t<iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.fr/maps/ms?msa=0&amp;msid=214558712767081316328.0004c32534791a6252be4&amp;ie=UTF8&amp;ll=48.924656,2.159264&amp;spn=0,0&amp;t=h&amp;output=embed\"></iframe><br /><small>Afficher <a href=\"https://maps.google.fr/maps/ms?msa=0&amp;msid=214558712767081316328.0004c32534791a6252be4&amp;ie=UTF8&amp;ll=48.924656,2.159264&amp;spn=0,0&amp;t=h&amp;source=embed\" style=\"color:#0000FF;text-align:left\">Elevage des vigilants</a> sur une carte plus grande</small>
</div>
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "PatrickElevageBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
