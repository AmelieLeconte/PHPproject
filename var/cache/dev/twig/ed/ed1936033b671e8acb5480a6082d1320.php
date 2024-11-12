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

/* @BootstrapMenu/dropdown.html.twig */
class __TwigTemplate_9bea1f564bbd39d8a332f6caf50bf1af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/dropdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/dropdown.html.twig"));

        // line 1
        $___internal_parse_5_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            $context["data_attribute_name"] = "data-bs-toggle";
            // line 3
            yield "
  ";
            // line 4
            if (((isset($context["bootstrap_version"]) || array_key_exists("bootstrap_version", $context) ? $context["bootstrap_version"] : (function () { throw new RuntimeError('Variable "bootstrap_version" does not exist.', 4, $this->source); })()) == 4)) {
                // line 5
                yield "    ";
                $context["data_attribute_name"] = "data-toggle";
                // line 6
                yield "  ";
            }
            // line 7
            yield "
  ";
            // line 8
            $context["is_active"] = ((isset($context["dropdown_active_style"]) || array_key_exists("dropdown_active_style", $context) ? $context["dropdown_active_style"] : (function () { throw new RuntimeError('Variable "dropdown_active_style" does not exist.', 8, $this->source); })()) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", ["_route"], "method", false, false, false, 8), Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 8, $this->source); })()), "items", [], "any", false, false, false, 8), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "route", [], "any", true, true, false, 8)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "route", [], "any", false, false, false, 8)) : (null)); })));
            // line 9
            yield "
  <li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle";
            // line 11
            if ((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 11, $this->source); })())) {
                yield " active";
            }
            yield "\"";
            if ((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 11, $this->source); })())) {
                yield " aria-current=\"page\"";
            }
            yield " href=\"#\" role=\"button\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_attribute_name"]) || array_key_exists("data_attribute_name", $context) ? $context["data_attribute_name"] : (function () { throw new RuntimeError('Variable "data_attribute_name" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 12, $this->source); })()), "label", [], "any", false, false, false, 12), "html", null, true);
            // line 13
            yield "</a>
    <div class=\"dropdown-menu\">
      ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["menu_item"], "items", [], "any", false, false, false, 15));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
                // line 16
                yield "        ";
                $context["menu_item"] = Twig\Extension\CoreExtension::merge($context["menu_item"], ["index" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 16)]);
                // line 17
                yield "        ";
                yield from                 $this->loadTemplate("@BootstrapMenu/dropdown_item.html.twig", "@BootstrapMenu/dropdown.html.twig", 17)->unwrap()->yield(CoreExtension::merge($context, ["menu_item" => $context["menu_item"], "dropdown_item_active_style" => (isset($context["dropdown_item_active_style"]) || array_key_exists("dropdown_item_active_style", $context) ? $context["dropdown_item_active_style"] : (function () { throw new RuntimeError('Variable "dropdown_item_active_style" does not exist.', 17, $this->source); })())]));
                // line 18
                yield "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "    </div>
  </li>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_5_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@BootstrapMenu/dropdown.html.twig";
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
        return array (  133 => 1,  127 => 19,  113 => 18,  110 => 17,  107 => 16,  90 => 15,  86 => 13,  84 => 12,  73 => 11,  69 => 9,  67 => 8,  64 => 7,  61 => 6,  58 => 5,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% apply spaceless %}
  {% set data_attribute_name = 'data-bs-toggle' %}

  {% if bootstrap_version == 4 %}
    {% set data_attribute_name = 'data-toggle' %}
  {% endif %}

  {% set is_active = dropdown_active_style and app.request.attributes.get('_route') in menu_item.items|map(item => item.route is defined ? item.route : null) %}

  <li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle{% if is_active %} active{% endif %}\"{% if is_active %} aria-current=\"page\"{% endif %} href=\"#\" role=\"button\" {{ data_attribute_name }}=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      {{- menu_item.label -}}
    </a>
    <div class=\"dropdown-menu\">
      {% for menu_item in menu_item.items %}
        {% set menu_item = menu_item|merge({ 'index': loop.index0 }) %}
        {% include '@BootstrapMenu/dropdown_item.html.twig' with { menu_item, dropdown_item_active_style } %}
      {% endfor %}
    </div>
  </li>
{% endapply %}
", "@BootstrapMenu/dropdown.html.twig", "/home/amelique/Documents/TSP/CSC4101/Projet/MerchCoin/vendor/camurphy/bootstrap-menu-bundle/Resources/views/dropdown.html.twig");
    }
}
