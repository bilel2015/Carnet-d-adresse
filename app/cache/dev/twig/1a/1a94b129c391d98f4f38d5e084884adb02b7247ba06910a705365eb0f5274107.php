<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_5460f64f8273cfbb2cb9809aa95617811fb91b5a8126f709c5509685e17b2453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "


<!DOCTYPE html>
<html >
  <head>
    <meta charset=\"UTF-8\">
    <title>Flat HTML5/CSS3 Login Form</title>
    
    
    
    
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style_2.css"), "html", null, true);
        echo "\">

    
    
    
  </head>

  <body>

    <div class=\"login-page\">
        ";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo " 
  
</div>
    <script src='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"), "html", null, true);
        echo "'></script>

        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>

    
    
    
  </body>
</html>
";
    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 24
        echo "            ";
    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  71 => 23,  59 => 29,  54 => 27,  49 => 24,  47 => 23,  34 => 13,  20 => 1,);
    }
}
/* */
/* */
/* */
/* <!DOCTYPE html>*/
/* <html >*/
/*   <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Flat HTML5/CSS3 Login Form</title>*/
/*     */
/*     */
/*     */
/*     */
/*         <link rel="stylesheet" href="{{asset("css/style_2.css")}}">*/
/* */
/*     */
/*     */
/*     */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <div class="login-page">*/
/*         {% block fos_user_content %}*/
/*             {% endblock fos_user_content %} */
/*   */
/* </div>*/
/*     <script src='{{asset("http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js")}}'></script>*/
/* */
/*         <script src="{{asset("js/index.js")}}"></script>*/
/* */
/*     */
/*     */
/*     */
/*   </body>*/
/* </html>*/
/* */
