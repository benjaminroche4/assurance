<?php

namespace App\Factory;

use App\Entity\Contact;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Contact>
 */
final class ContactFactory extends PersistentProxyObjectFactory
{
    private const CONTACT_TYPE = [
        'professionnel', 'particulier',
    ];

    private const SUBJECT = [
        'Demande de devis', 'Demande de renseignements', 'Demande de partenariat', 'Autre',
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
        return Contact::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'contactType' => self::faker()->randomElement(self::CONTACT_TYPE),
            'fullName' => self::faker()->firstName().' '.self::faker()->lastName(),
            'company' => self::faker()->company(),
            'email' => self::faker()->email(),
            'phoneNumber' => self::faker()->phoneNumber(),
            'subject' => self::faker()->randomElement(self::SUBJECT),
            'message' => self::faker()->text(500),
            'createdAt' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Contact $contact): void {})
        ;
    }
}
