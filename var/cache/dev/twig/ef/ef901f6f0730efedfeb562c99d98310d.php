<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @BootstrapMenu/dropdown_item.html.twig */
class __TwigTemplate_9179f4449268dae1d0ac54c8e452e10d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/dropdown_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/dropdown_item.html.twig"));

        // line 1
        $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 2, $this->source); })()), "is_divider", [], "any", false, false, false, 2)) {
                // line 3
                yield "    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 3, $this->source); })()), "index", [], "any", false, false, false, 3) > 0)) {
                    // line 4
                    yield "      <div class=\"dropdown-divider\"></div>
    ";
                }
                // line 6
                yield "
    ";
                // line 7
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["menu_item"] ?? null), "label", [], "any", true, true, false, 7)) {
                    // line 8
                    yield "      <h6 class=\"dropdown-header\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 8, $this->source); })()), "label", [], "any", false, false, false, 8), "html", null, true);
                    yield "</h6>
    ";
                }
                // line 10
                yield "  ";
            } else {
                // line 11
                yield "    ";
                $context["is_active"] = (((isset($context["dropdown_item_active_style"]) || array_key_exists("dropdown_item_active_style", $context) ? $context["dropdown_item_active_style"] : (function () { throw new RuntimeError('Variable "dropdown_item_active_style" does not exist.', 11, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["menu_item"] ?? null), "route", [], "any", true, true, false, 11)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "attributes", [], "any", false, false, false, 11), "get", ["_route"], "method", false, false, false, 11) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 11, $this->source); })()), "route", [], "any", false, false, false, 11)));
                // line 12
                yield "    <a class=\"dropdown-item";
                if ((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 12, $this->source); })())) {
                    yield " active";
                }
                yield "\"";
                if ((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 12, $this->source); })())) {
                    yield " aria-current=\"page\"";
                }
                yield " ";
                yield from                 $this->loadTemplate("@BootstrapMenu/href.html.twig", "@BootstrapMenu/dropdown_item.html.twig", 12)->unwrap()->yield(CoreExtension::merge($context, ["menu_item" => (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 12, $this->source); })())]));
                yield ">";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 13, $this->source); })()), "label", [], "any", false, false, false, 13), "html", null, true);
                // line 14
                yield "</a>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_2_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@BootstrapMenu/dropdown_item.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  97 => 1,  91 => 14,  89 => 13,  77 => 12,  74 => 11,  71 => 10,  65 => 8,  63 => 7,  60 => 6,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% apply spaceless %}
  {% if menu_item.is_divider %}
    {% if menu_item.index > 0 %}
      <div class=\"dropdown-divider\"></div>
    {% endif %}

    {% if menu_item.label is defined %}
      <h6 class=\"dropdown-header\">{{ menu_item.label }}</h6>
    {% endif %}
  {% else %}
    {% set is_active = dropdown_item_active_style and  menu_item.route is defined and app.request.attributes.get('_route') == menu_item.route %}
    <a class=\"dropdown-item{% if is_active %} active{% endif %}\"{% if is_active %} aria-current=\"page\"{% endif %} {% include '@BootstrapMenu/href.html.twig' with { menu_item } %}>
      {{- menu_item.label -}}
    </a>
  {% endif %}
{% endapply %}
", "@BootstrapMenu/dropdown_item.html.twig", "/home/amelique/Documents/TSP/CSC4101/Projet/MerchCoin/vendor/camurphy/bootstrap-menu-bundle/Resources/views/dropdown_item.html.twig");
    }
}
