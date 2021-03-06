<?php

namespace Oro\Bundle\UserBundle\EventListener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

use Pim\Bundle\UserBundle\Entity\UserInterface;
use Oro\Bundle\UserBundle\Entity\UserManager;

class LoginSubscriber
{
    protected $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    public function onLogin(InteractiveLoginEvent $event)
    {
        $user = $event->getAuthenticationToken()->getUser();

        if ($user instanceof UserInterface) {
            $user->setLastLogin(new \DateTime('now', new \DateTimeZone('UTC')))
                 ->setLoginCount($user->getLoginCount() + 1);

            $this->userManager->updateUser($user);
        }
    }
}
