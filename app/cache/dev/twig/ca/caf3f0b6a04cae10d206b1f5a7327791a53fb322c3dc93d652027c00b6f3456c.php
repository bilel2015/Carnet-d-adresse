<?php

/* ContactBundle:Contact:show.html.twig */
class __TwigTemplate_34aee68d976aa201124c2727669d17bda4ab0354dc2fe2675e7c6d0cb82b1fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ContactBundle::layout.html.twig", "ContactBundle:Contact:show.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
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

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 3
        echo "    <link reel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
    ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Contact</h1>
    

    <table style=\"records_list\">
        <tbody>
        <ul>
            
            <tr>
                <th>Nom:</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr></tr>
            <tr>
                <th>Prenom:</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr></tr>
            <tr>
                <th>Adresse:</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr></tr>
            <tr>
                <th>Pays:</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pays", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr></tr>
            <tr>
                <th>Ville:</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr></tr>
            <tr>
                <th>Phone:</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone", array()), "html", null, true);
        echo "</td>
            </tr>
              
        </tbody>
      
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">
            Retourner à la liste
        </a>
    </li>
    <li>
        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Modifier
        </a>
    </li>
    <li>";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 58,  113 => 54,  105 => 49,  93 => 40,  85 => 35,  77 => 30,  69 => 25,  61 => 20,  53 => 15,  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "ContactBundle::layout.html.twig" %}*/
/* {% block stylesheet %}*/
/*     <link reel="stylesheet" href="{{asset('css/style.css')}}"/>*/
/*     {%endblock%}*/
/* {% block body -%}*/
/*     <h1>Contact</h1>*/
/*     */
/* */
/*     <table style="records_list">*/
/*         <tbody>*/
/*         <ul>*/
/*             */
/*             <tr>*/
/*                 <th>Nom:</th>*/
/*                 <td>{{ entity.nom }}</td>*/
/*             </tr>*/
/*             <tr></tr>*/
/*             <tr>*/
/*                 <th>Prenom:</th>*/
/*                 <td>{{ entity.prenom }}</td>*/
/*             </tr>*/
/*             <tr></tr>*/
/*             <tr>*/
/*                 <th>Adresse:</th>*/
/*                 <td>{{ entity.adresse }}</td>*/
/*             </tr>*/
/*             <tr></tr>*/
/*             <tr>*/
/*                 <th>Pays:</th>*/
/*                 <td>{{ entity.pays }}</td>*/
/*             </tr>*/
/*             <tr></tr>*/
/*             <tr>*/
/*                 <th>Ville:</th>*/
/*                 <td>{{ entity.ville }}</td>*/
/*             </tr>*/
/*             <tr></tr>*/
/*             <tr>*/
/*                 <th>Phone:</th>*/
/*                 <td>{{ entity.phone }}</td>*/
/*             </tr>*/
/*               */
/*         </tbody>*/
/*       */
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('contact') }}">*/
/*             Retourner à la liste*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('contact_edit', { 'id': entity.id }) }}">*/
/*             Modifier*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
