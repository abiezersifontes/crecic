<?php

/* default/layout/page_header.tpl */
class __TwigTemplate_eb68115a4dfbc6cf7b90644d6fe7756f980729ca7d4632c95cc74a7fbd2adf50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'topbar' => array($this, 'block_topbar'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"navigation\" class=\"notification-panel\">
    ";
        // line 2
        echo (isset($context["help_content"]) ? $context["help_content"] : null);
        echo "
    ";
        // line 3
        echo (isset($context["bug_notification"]) ? $context["bug_notification"] : null);
        echo "
</div>
";
        // line 5
        $this->displayBlock('topbar', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        if ( !(null === (isset($context["header_extra_content"]) ? $context["header_extra_content"] : null))) {
            // line 10
            echo "    ";
            echo (isset($context["header_extra_content"]) ? $context["header_extra_content"] : null);
            echo "
";
        }
        // line 12
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-3\">
                <div class=\"logo\">
                    ";
        // line 17
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "
                </div>
            </div>
            <div class=\"col-xs-12 col-md-9\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 23
        if ( !(null === (isset($context["plugin_header_left"]) ? $context["plugin_header_left"] : null))) {
            // line 24
            echo "                            <div id=\"plugin_header_left\">
                                ";
            // line 25
            echo (isset($context["plugin_header_left"]) ? $context["plugin_header_left"] : null);
            echo "
                            </div>
                        ";
        }
        // line 28
        echo "                    </div>
                    <div class=\"col-sm-4\">
                        ";
        // line 30
        if ( !(null === (isset($context["plugin_header_center"]) ? $context["plugin_header_center"] : null))) {
            // line 31
            echo "                            <div id=\"plugin_header_center\">
                                ";
            // line 32
            echo (isset($context["plugin_header_center"]) ? $context["plugin_header_center"] : null);
            echo "
                            </div>
                        ";
        }
        // line 35
        echo "                    </div>
                    <div class=\"col-sm-4\">
                        ";
        // line 37
        if ( !(null === (isset($context["plugin_header_right"]) ? $context["plugin_header_right"] : null))) {
            // line 38
            echo "                            <div id=\"plugin_header_right\">
                                ";
            // line 39
            echo (isset($context["plugin_header_right"]) ? $context["plugin_header_right"] : null);
            echo "
                            </div>
                        ";
        }
        // line 42
        echo "                        <div class=\"section-notifications\">
                            ";
        // line 43
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array()) == 1)) {
            // line 44
            echo "                            <ul id=\"notifications\" class=\"nav nav-pills pull-right\">
                            </ul>
                            ";
        }
        // line 47
        echo "                        </div>
                        ";
        // line 48
        echo (isset($context["accessibility"]) ? $context["accessibility"] : null);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        // line 56
        $this->displayBlock('menu', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->loadTemplate(Template::findTemplateFilePath("layout/course_navigation.tpl"), "default/layout/page_header.tpl", 60)->display($context);
    }

    // line 5
    public function block_topbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate(Template::findTemplateFilePath("layout/topbar.tpl"), "default/layout/page_header.tpl", 6)->display($context);
    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->loadTemplate(Template::findTemplateFilePath("layout/menu.tpl"), "default/layout/page_header.tpl", 57)->display($context);
    }

    public function getTemplateName()
    {
        return "default/layout/page_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 57,  144 => 56,  139 => 6,  136 => 5,  132 => 60,  129 => 59,  127 => 56,  116 => 48,  113 => 47,  108 => 44,  106 => 43,  103 => 42,  97 => 39,  94 => 38,  92 => 37,  88 => 35,  82 => 32,  79 => 31,  77 => 30,  73 => 28,  67 => 25,  64 => 24,  62 => 23,  53 => 17,  46 => 12,  40 => 10,  38 => 9,  35 => 8,  33 => 5,  28 => 3,  24 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page_header.tpl", "C:\\xampp\\htdocs\\chamilo\\main\\template\\default\\layout\\page_header.tpl");
    }
}
