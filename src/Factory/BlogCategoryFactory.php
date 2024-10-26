<?php

namespace App\Factory;

use App\Entity\BlogCategory;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<BlogCategory>
 */
final class BlogCategoryFactory extends PersistentProxyObjectFactory
{
    private const FINANCE_COMPTABILITE_THEMATIQUES = [
        'Comptabilité Générale', 'Audit Financier', 'Gestion de Trésorerie', 'Contrôle de Gestion',
        'Fiscalité des Entreprises', 'Comptabilité Analytique', 'Gestion des Risques Financiers', 'Planification Budgétaire',
        'Reporting Financier', 'Analyse Financière', 'Normes IFRS', 'Fusion et Acquisition',
        'Gestion d\'Actifs', 'Comptabilité Bancaire', 'Finance d\'Entreprise', 'Gestion de la Paie',
        'Gestion des Investissements', 'Marchés Financiers', 'Stratégie Financière', 'Optimisation Fiscale',
    ];

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return BlogCategory::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'name' => self::faker()->randomElement(self::FINANCE_COMPTABILITE_THEMATIQUES),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(BlogCategory $blogCategory): void {})
        ;
    }
}
