<?php

/* index.twig */
class __TwigTemplate_be541e762ae711a8a3c0f988188aa0e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <section id=\"main\">
        <form id=\"url-form\" action=\"\" method=\"get\">
            <input type=\"text\" name=\"url\" id=\"url\" value=\"\" placeholder=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultUrl"), "html", null, true);
        echo "\" />
            <button id=\"show-button\">Show Balance</button>
        </form>
        <h1 id=\"balance\"></h1>
    </section>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 3,  26 => 2,);
    }
}
