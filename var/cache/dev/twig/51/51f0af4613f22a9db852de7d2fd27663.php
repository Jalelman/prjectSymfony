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

/* @EasyAdmin/symfony-form-themes/README.txt */
class __TwigTemplate_0af5e3dba1e3831485c37196d37d962f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/symfony-form-themes/README.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/symfony-form-themes/README.txt"));

        // line 1
        yield "This is a copy of Symfony 5.4 form themes available in
https://github.com/symfony/symfony/blob/5.4/src/Symfony/Bridge/Twig/Resources/views/Form

Copyright (c) Fabien Potencier
License: https://github.com/symfony/symfony/blob/5.4/src/Symfony/Bridge/Twig/LICENSE

We need to copy these files instead of relying on the templates available via the
Symfony Twig Bridge to ensure that all applications building backends with EasyAdmin
use the same version of the templates, even those still using Symfony 4.4.
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/symfony-form-themes/README.txt";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("This is a copy of Symfony 5.4 form themes available in
https://github.com/symfony/symfony/blob/5.4/src/Symfony/Bridge/Twig/Resources/views/Form

Copyright (c) Fabien Potencier
License: https://github.com/symfony/symfony/blob/5.4/src/Symfony/Bridge/Twig/LICENSE

We need to copy these files instead of relying on the templates available via the
Symfony Twig Bridge to ensure that all applications building backends with EasyAdmin
use the same version of the templates, even those still using Symfony 4.4.
", "@EasyAdmin/symfony-form-themes/README.txt", "C:\\laragon\\www\\ecommerce-symfony\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\symfony-form-themes\\README.txt");
    }
}
