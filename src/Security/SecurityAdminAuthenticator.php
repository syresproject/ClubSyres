<?php

namespace App\Security;

use App\Entity\Survey;
use App\Entity\User;
use App\Form\SurveyType;
use App\Services\SurveyService;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\String_;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Guard\PasswordAuthenticatedInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class SecurityAdminAuthenticator extends AbstractFormLoginAuthenticator implements PasswordAuthenticatedInterface
{
    use TargetPathTrait;

    private $entityManager;
    private $urlGenerator;
    private $csrfTokenManager;
    private $passwordEncoder;
    private $userSurvey;

    public function __construct(EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator,
                                CsrfTokenManagerInterface $csrfTokenManager, UserPasswordEncoderInterface $passwordEncoder,
                                Security $userSurvey
    )
    {
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
        $this->csrfTokenManager = $csrfTokenManager;
        $this->passwordEncoder = $passwordEncoder;
        $this->userSurvey = $userSurvey;
    }

    public function supports(Request $request)
    {
        //il ne rentre pas oui ca le problem
        //dump('admin');
        return 'app_admin_login' === $request->attributes->get('_route')
            && $request->isMethod('POST');
    }

    public function getCredentials(Request $request)
    {
        $credentials = [
            'email' => $request->request->get('email'),
            'password' => $request->request->get('password'),
            'csrf_token' => $request->request->get('_csrf_token')
        ];
        //dd($request);
        $request->getSession()->set(
            Security::LAST_USERNAME,
            $credentials['email']
        );

        //dump($credentials);
        return $credentials;
    }


    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $token = new CsrfToken('authenticate', $credentials['csrf_token']);
        if (!$this->csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException();
        }

        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $credentials['email']]);

        //dump($user);
        if (!$user) {
            throw new CustomUserMessageAuthenticationException('Les information admin sont incorrect !');
        }

        return $user;
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        return $this->passwordEncoder->isPasswordValid($user, $credentials['password']);
    }


    public function getPassword($credentials): ?string
    {
        // TODO: Implement getPassword() method.
        //il return
        return $credentials['password']; // c'est bon
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        return parent::onAuthenticationFailure($request, $exception); // TODO: Change the autogenerated stub
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {

        return new RedirectResponse($request->request->get('_target_path'));

        // dans uen if sinon si le mot de pas est incorrect et qu'on clique sur le boutton submit ça va affice une erreur .
        //$id = $this->userSurvey->getUser()->getPanelisteGroups();

        /*
        $enabled = $this->userSurvey->getUser()->getEnabled();
        if (!$enabled) {
            // fail authentication with a custom error
            return new RedirectResponse($this->urlGenerator->generate('app_login', ["enabled" => "Votre compte est desactivé !"]));
        }
        */

        /*
        if ($user->hasRole('ROLE_ADMIN')) {
            return new RedirectResponse($this->urlGenerator->generate('admin_survey_tests_index'));
        }
        */

    }

    protected function getLoginUrl()
    {
        return $this->urlGenerator->generate('app_admin_login');
    }

}
