<?php

/* MyAppFilmothequeBundle:Acteur:editer.html.twig */
class __TwigTemplate_b878c55ce8854d51315474cc5243e8a2629233ddfe595932b8c59a99477d7030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "MyAppFilmothequeBundle:Acteur:ajouter";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Acteur:ajouter page</h1>
";
        // line 7
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 8
            echo "<p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
";
        }
        // line 10
        echo "<form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\"/>
</form>
<p><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("myapp_acteur_lister");
        echo "\">Retour a la liste des acteurs</a></p>
";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Acteur:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  54 => 11,  49 => 10,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
