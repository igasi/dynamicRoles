<?php

namespace AppBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\UserEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use AppBundle\UserDependentRole;


/**
 * Listener responsible to change the redirection at the end of the password resetting
 */
class DynamicRolesByRegcodeListener implements EventSubscriberInterface
{

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::SECURITY_IMPLICIT_LOGIN => 'setDynamicRoleByCode',
        );
    }

    public function setDynamicRoleByCode(UserEvent $event)
    {
        $user = $event->getUser();

        var_dump($user);

        $customRole = new UserDependentRole($user);

        $user->addRole($customRole->getRole());

    }
}