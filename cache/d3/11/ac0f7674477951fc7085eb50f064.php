<?php

/* layout.twig */
class __TwigTemplate_d311ac0f7674477951fc7085eb50f064 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>City Arms Balance Checker</title>
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" />
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Ian Jenkins\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/css/main.css\" rel=\"stylesheet\">

        <link rel=\"apple-touch-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/img/apple-touch-icon-iphone.png\" />
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/img/apple-touch-icon-ipad.png\" />
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/img/apple-touch-icon-iphone4.png\" />
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/img/apple-touch-icon-ipad3.png\" />

        <script type=\"text/javascript\">
            var base = \"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "\";
        </script>
    </head>

    <body>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "
        <a href=\"https://github.com/jenkoian/city-arms-balance-checker\"><img style=\"position: absolute; top: 0; right: 0; border: 0;\" src=\"https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png\" alt=\"Fork me on GitHub\"></a>
        <script src=\"http://code.jquery.com/jquery-1.7.2.min.js\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/js/main.js\"></script>
    </body>
</html>";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  68 => 28,  63 => 25,  61 => 24,  53 => 19,  47 => 16,  43 => 15,  39 => 14,  35 => 13,  30 => 11,  18 => 1,);
    }
}
