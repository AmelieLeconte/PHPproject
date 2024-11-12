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

/* @BootstrapMenu/href.html.twig */
class __TwigTemplate_d95106d5fb3f93111610f1066353f502 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/href.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/href.html.twig"));

        // line 1
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  href=\"";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["menu_item"] ?? null), "route", [], "any", true, true, false, 2)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 2, $this->source); })()), "route", [], "any", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 2, $this->source); })()), "route_parameters", [], "any", false, false, false, 2)), "html", null, true);
            } elseif (CoreExtension::getAttribute($this->env, $this->source, ($context["menu_item"] ?? null), "url", [], "any", true, true, false, 2)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 2, $this->source); })()), "url", [], "any", false, false, false, 2), "html", null, true);
            } else {
                yield "#";
            }
            yield "\"
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_1_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@BootstrapMenu/href.html.twig";
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
        return array (  63 => 1,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% apply spaceless %}
  href=\"{% if menu_item.route is defined %}{{ path(menu_item.route, menu_item.route_parameters) }}{% elseif menu_item.url is defined %}{{ menu_item.url }}{% else %}#{% endif %}\"
{% endapply %}
", "@BootstrapMenu/href.html.twig", "/home/amelique/Documents/TSP/CSC4101/Projet/MerchCoin/vendor/camurphy/bootstrap-menu-bundle/Resources/views/href.html.twig");
    }
}
