<?php

/* MyAppFilmothequeBundle:Acteur:lister.html.twig */
class __TwigTemplate_73395b12f6732a208766496b284204a309cd891c256ababc6fa70981c5decb2d extends Twig_Template
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
        echo "MyAppFilmothequeBundle:Acteur:lister";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Acteur:lister page</h1>
<table>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acteurs"]) ? $context["acteurs"] : $this->getContext($context, "acteurs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 9
            echo "<tr>
\t<td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "nom"), "html", null, true);
            echo "</td>
\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "prenom"), "html", null, true);
            echo "</td>
\t<td>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "dateNaissance"), "d/m/Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "sexe"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_modifier", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t<td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_supprimer", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">Supprimer</a></td>
\t</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "\t<tr><td>Aucun acteur n'a été trouvé.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>
<p><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("myapp_acteur_ajouter");
        echo "\">Ajouter un acteur</a><p>
\t
";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Acteur:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  85 => 20,  78 => 18,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  47 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
