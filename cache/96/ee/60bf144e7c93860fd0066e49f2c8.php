<?php

/* wtf.twig */
class __TwigTemplate_96ee60bf144e7c93860fd0066e49f2c8 extends Twig_Template
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
        echo "    <section id=\"main\" class=\"wtf\">

        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/img/logo.jpg\" alt=\"City Arms\" />

        <p>The city arms is the finest drinking establishment in all of Cardiff. What's super about it (apart from the fine choice of ales)
            is the fact they offer a loyalty card scheme (think nectar card) which offer you credit to buy (even more!) beer the more you
            spend there. It is genuinely a brilliant thing going to the pub after work on a Friday and being able to have a 'free' beer
            using all the credit you stacked up from the odd pint here and there.</p>

        <p>This app basically scrapes your loyalty card statement for your overall balance and presents it in a nice easy to read, mobile friendly format.
            Your personal URL gets stored in localstorage so you only have to dig it out and submit it once.</p>

        <p>Here's what you need to do...</p>

        <ul>
            <li>Login to your city arms card here: <a target=\"_blank\" href=\"https://wwws-uk1.givex.com/Merchant_pages/12607/\">https://wwws-uk1.givex.com/Merchant_pages/12607/</a></li>
            <li>Click on 'View transaction history'</li>
            <li>Copy the url from the popup/tab that opens</li>
            <li>Paste the url into this app and click submit</li>
            <li>If on your mobile, add the page to home screen for instant balance checking goodness</li>
        </ul>
    </section>

    <footer><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/\">&laquo; back</a></footer>
";
    }

    public function getTemplateName()
    {
        return "wtf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 26,  33 => 5,  29 => 3,  26 => 2,);
    }
}
