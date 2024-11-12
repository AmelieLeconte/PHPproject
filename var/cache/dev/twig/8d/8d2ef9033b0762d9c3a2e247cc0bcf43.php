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

/* @BootstrapMenu/link.html.twig */
class __TwigTemplate_f6ec91c1f7daee00fbed436b02beccba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/link.html.twig"));

        // line 1
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["menu_item"] ?? null), "label", [], "any", true, true, false, 2) && (CoreExtension::getAttribute($this->env, $this->source, ($context["menu_item"] ?? null), "route", [], "any", true, true, false, 2) || CoreExtension::getAttribute($this->env, $this->source, ($context["menu_item"] ?? null), "url", [], "any", true, true, false, 2)))) {
                // line 3
                yield "    ";
                $context["is_active"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", ["_route"], "method", false, false, false, 3) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 3, $this->source); })()), "route", [], "any", false, false, false, 3));
                // line 4
                yield "    <li class=\"nav-item\">
      <a class=\"nav-link";
                // line 5
                if ((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 5, $this->source); })())) {
                    yield " active";
                }
                yield "\"";
                if ((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 5, $this->source); })())) {
                    yield " aria-current=\"page\"";
                }
                yield " ";
                yield from                 $this->loadTemplate("@BootstrapMenu/href.html.twig", "@BootstrapMenu/link.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["menu_item" => (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 5, $this->source); })())]));
                yield ">";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 6, $this->source); })()), "label", [], "any", false, false, false, 6), "html", null, true);
                // line 7
                yield "</a>
    </li>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_0_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@BootstrapMenu/link.html.twig";
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
        return array (  79 => 1,  72 => 7,  70 => 6,  59 => 5,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% apply spaceless %}
  {% if menu_item.label is defined and (menu_item.route is defined or menu_item.url is defined) %}
    {% set is_active = app.request.attributes.get('_route') == menu_item.route %}
    <li class=\"nav-item\">
      <a class=\"nav-link{% if is_active %} active{% endif %}\"{% if is_active %} aria-current=\"page\"{% endif %} {% include '@BootstrapMenu/href.html.twig' with { menu_item } %}>
        {{- menu_item.label -}}
      </a>
    </li>
  {% endif %}
{% endapply %}
", "@BootstrapMenu/link.html.twig", "/home/amelique/Documents/TSP/CSC4101/Projet/MerchCoin/vendor/camurphy/bootstrap-menu-bundle/Resources/views/link.html.twig");
    }
}
