<?php

/* ContactBundle::layout.html.twig */
class __TwigTemplate_5fd227d27327efda1087a5d1b4c3f3267057ff8c6e60e53f87d46a72b8c9c8a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    
<head>
<title>Carnet d'adresse</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
</head>
    <head></head>
    
    <body>

    <div id=\"container\">
  <div id=\"banner\">
    <h1>Ton Carnet d'adresse</h1>
    <p class=\"slogan\">Toujours Joiniable...</p>
  </div>
  <div id=\"navbar\">
    <ul>
      <li><a href=href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\">Mon Profile</a></li>
      <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://all-free-download.com/free-website-templates/"), "html", null, true);
        echo "\">Link two</a></li>
      <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://all-free-download.com/free-website-templates/"), "html", null, true);
        echo "\">Link three</a></li>
      <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://all-free-download.com/free-website-templates/"), "html", null, true);
        echo "\">Link four</a></li>
      <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://all-free-download.com/free-website-templates/"), "html", null, true);
        echo "\">Link five</a></li>
    </ul>
  </div>
  <div class=\"clear\">&nbsp;</div>
  <div id=\"sidebar\">
    <h2>Sub Menu</h2>
    <ul>
      <li><a href=http://all-free-download.com/free-website-templates/\">\"Home</a></li>
      <li><a href=http://all-free-download.com/free-website-templates/\">\"Products</a></li>
      <li><a href=http://all-free-download.com/free-website-templates/\" class=\"selected\">\"What we do</a></li>
      <li><a href=http://all-free-download.com/free-website-templates/\">Contact us</a></li>
      <li><a href=\"http://all-free-download.com/free-website-templates/\">Privacy Policy</a></li>
      <li><a href=\"http://all-free-download.com/free-website-templates/\">Links</a></li>
    </ul>
    <h2>Archives</h2>
    <ul>
      <li><a href=\"http://all-free-download.com/free-website-templates/\">January</a></li>
      <li><a href=\"http://all-free-download.com/free-website-templates/\">February</a></li>
      <li><a href=\"http://all-free-download.com/free-website-templates/\">March</a></li>
      <li><a href=\"http://all-free-download.com/free-website-templates/\">April</a></li>
    </ul>
    <p></div>
      ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "   
  <div class=\"clear\">&nbsp;</div>
  <div id=\"footer\"> <a href=\"http://all-free-download.com/free-website-templates/\">Homepage</a> | <a href=\"http://all-free-download.com/free-website-templates/\">contact</a> | <a href=\"http://validator.w3.org/check?uri=referer\">html</a> | <a href=\"http://jigsaw.w3.org/css-validator\">css</a> | &copy; 2007 Anyone | Design by <a href=\"http://www.mitchinson.net\"> www.mitchinson.net</a> | This work is licensed under a <a rel=\"license\" target=\"_blank\" href=\"http://creativecommons.org/licenses/by/3.0/\">Creative Commons Attribution 3.0 License</a> </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>    
 
</body>
</html>
";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ContactBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 45,  86 => 46,  84 => 45,  59 => 23,  55 => 22,  51 => 21,  47 => 20,  43 => 19,  27 => 6,  20 => 1,);
    }
}
/* <html>*/
/*     */
/* <head>*/
/* <title>Carnet d'adresse</title>*/
/* <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />*/
/* <link rel="stylesheet" href="{{asset('css/style.css')}}">*/
/* </head>*/
/*     <head></head>*/
/*     */
/*     <body>*/
/* */
/*     <div id="container">*/
/*   <div id="banner">*/
/*     <h1>Ton Carnet d'adresse</h1>*/
/*     <p class="slogan">Toujours Joiniable...</p>*/
/*   </div>*/
/*   <div id="navbar">*/
/*     <ul>*/
/*       <li><a href=href="{{ path('contact_new') }}">Mon Profile</a></li>*/
/*       <li><a href="{{asset("http://all-free-download.com/free-website-templates/")}}">Link two</a></li>*/
/*       <li><a href="{{asset("http://all-free-download.com/free-website-templates/")}}">Link three</a></li>*/
/*       <li><a href="{{asset("http://all-free-download.com/free-website-templates/")}}">Link four</a></li>*/
/*       <li><a href="{{asset("http://all-free-download.com/free-website-templates/")}}">Link five</a></li>*/
/*     </ul>*/
/*   </div>*/
/*   <div class="clear">&nbsp;</div>*/
/*   <div id="sidebar">*/
/*     <h2>Sub Menu</h2>*/
/*     <ul>*/
/*       <li><a href=http://all-free-download.com/free-website-templates/">"Home</a></li>*/
/*       <li><a href=http://all-free-download.com/free-website-templates/">"Products</a></li>*/
/*       <li><a href=http://all-free-download.com/free-website-templates/" class="selected">"What we do</a></li>*/
/*       <li><a href=http://all-free-download.com/free-website-templates/">Contact us</a></li>*/
/*       <li><a href="http://all-free-download.com/free-website-templates/">Privacy Policy</a></li>*/
/*       <li><a href="http://all-free-download.com/free-website-templates/">Links</a></li>*/
/*     </ul>*/
/*     <h2>Archives</h2>*/
/*     <ul>*/
/*       <li><a href="http://all-free-download.com/free-website-templates/">January</a></li>*/
/*       <li><a href="http://all-free-download.com/free-website-templates/">February</a></li>*/
/*       <li><a href="http://all-free-download.com/free-website-templates/">March</a></li>*/
/*       <li><a href="http://all-free-download.com/free-website-templates/">April</a></li>*/
/*     </ul>*/
/*     <p></div>*/
/*       {% block body -%}{%endblock%}*/
/*    */
/*   <div class="clear">&nbsp;</div>*/
/*   <div id="footer"> <a href="http://all-free-download.com/free-website-templates/">Homepage</a> | <a href="http://all-free-download.com/free-website-templates/">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> | <a href="http://jigsaw.w3.org/css-validator">css</a> | &copy; 2007 Anyone | Design by <a href="http://www.mitchinson.net"> www.mitchinson.net</a> | This work is licensed under a <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a> </div>*/
/* </div>*/
/* <div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>    */
/*  */
/* </body>*/
/* </html>*/
/* */
