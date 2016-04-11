<?php

/* ContactBundle:Contact:index.html.twig */
class __TwigTemplate_b9e2bcff62472db004797ef55446225b0fb10af5b00d54702f8c36c796c40fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ContactBundle::layout.html.twig", "ContactBundle:Contact:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ContactBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Mes Contacts </h1>

    <table style=\"records_list\">
        <thead>
            <tr>
              
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Pays</th>
                <th>Ville</th>
                <th>Phone</th>
                <th>Gérer</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["entity"], "nom", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</a></td>
              
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pays", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "phone", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Afficher</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\">
                Ajouter un nouveau Contact
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 46,  104 => 41,  92 => 35,  86 => 32,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  56 => 22,  53 => 21,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "ContactBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <h1>Mes Contacts </h1>*/
/* */
/*     <table style="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*               */
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Adresse</th>*/
/*                 <th>Pays</th>*/
/*                 <th>Ville</th>*/
/*                 <th>Phone</th>*/
/*                 <th>Gérer</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('contact_show', { 'id': entity.nom }) }}">{{ entity.nom }}</a></td>*/
/*               */
/*                 <td>{{ entity.prenom }}</td>*/
/*                 <td>{{ entity.adresse }}</td>*/
/*                 <td>{{ entity.pays }}</td>*/
/*                 <td>{{ entity.ville }}</td>*/
/*                 <td>{{ entity.phone }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('contact_show', { 'id': entity.id }) }}">Afficher</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('contact_edit', { 'id': entity.id }) }}">Modifier</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_new') }}">*/
/*                 Ajouter un nouveau Contact*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
