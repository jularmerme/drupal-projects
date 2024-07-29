<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/simplesmart/templates/page.html.twig */
class __TwigTemplate_68c8735d8e557f5a0a2fd0973dafb991 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "<div class=\"layout-container\">
  <header role=\"banner\">
    ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
  </header>

  ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "simplesmartmenu", [], "any", false, false, true, 29)) {
            // line 30
            echo "  <div id=\"simplesmartmenu\" class=\"content\">
    ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "simplesmartmenu", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 34
        echo "
  ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "

  ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "

  ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 43
        echo "
    <div class=\"layout-content\">
      ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
    </div>
    ";
        // line 47
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 47)) {
            // line 48
            echo "    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
    </aside>
    ";
        }
        // line 51
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 51)) {
            // line 52
            echo "    <aside class=\"layout-sidebar-second\" role=\"complementary\">
      ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
    </aside>
    ";
        }
        // line 56
        echo "  </main>

  ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 58)) {
            // line 59
            echo "  <footer role=\"contentinfo\">
    ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
  </footer>
  ";
        }
        // line 63
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/simplesmart/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 63,  121 => 60,  118 => 59,  116 => 58,  112 => 56,  106 => 53,  103 => 52,  100 => 51,  94 => 49,  91 => 48,  88 => 47,  83 => 45,  79 => 43,  73 => 39,  68 => 37,  63 => 35,  60 => 34,  54 => 31,  51 => 30,  49 => 29,  43 => 26,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("{# /** * @file * Theme override to display a single page. * * The doctype, html,
head and body tags are not in this template. Instead they * can be found in the
html.html.twig template in this directory. * * Available variables: * * General
utility variables: * - base_path: The base URL path of the Drupal installation.
Will usually be * \"/\" unless you have installed Drupal in a sub-directory. * -
is_front: A flag indicating if the current page is the front page. * -
logged_in: A flag indicating if the user is registered and signed in. * -
is_admin: A flag indicating if the user has permission to access *
administration pages. * * Site identity: * - front_page: The URL of the front
page. Use this instead of base_path when * linking to the front page. This
includes the language domain or prefix. * * Page content (in order of occurrence
in the default page.html.twig): * - node: Fully loaded node, if there is an
automatically-loaded node * associated with the page and the node ID is the
second argument in the * page's path (e.g. node/12345 and node/12345/revisions,
but not * comment/reply/12345). * * Regions: * - page.header: Items for the
header region. * - page.primary_menu: Items for the primary menu region. * -
page.secondary_menu: Items for the secondary menu region. * - page.highlighted:
Items for the highlighted content region. * - page.help: Dynamic help text,
mostly for admin pages. * - page.content: The main content of the current page.
* - page.sidebar_first: Items for the first sidebar. * - page.sidebar_second:
Items for the second sidebar. * - page.footer: Items for the footer region. * -
page.breadcrumb: Items for the breadcrumb region. * * @see
template_preprocess_page() * @see html.html.twig */ #}
<div class=\"layout-container\">
  <header role=\"banner\">
    {{ page.header }}
  </header>

  {% if page.simplesmartmenu %}
  <div id=\"simplesmartmenu\" class=\"content\">
    {{ page.simplesmartmenu }}
  </div>
  {% endif %}

  {{ page.breadcrumb }}

  {{ page.highlighted }}

  {{ page.help }}

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    <div class=\"layout-content\">
      {{ page.content }}
    </div>
    {# /.layout-content #} {% if page.sidebar_first %}
    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      {{ page.sidebar_first }}
    </aside>
    {% endif %} {% if page.sidebar_second %}
    <aside class=\"layout-sidebar-second\" role=\"complementary\">
      {{ page.sidebar_second }}
    </aside>
    {% endif %}
  </main>

  {% if page.footer %}
  <footer role=\"contentinfo\">
    {{ page.footer }}
  </footer>
  {% endif %}
</div>
{# /.layout-container #}
", "themes/custom/simplesmart/templates/page.html.twig", "/var/www/html/web/themes/custom/simplesmart/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 29);
        static $filters = array("escape" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
