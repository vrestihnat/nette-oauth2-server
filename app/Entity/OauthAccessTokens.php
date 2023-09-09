<?php
namespace Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAccessTokens
 *
 * @ORM\Table(name="oauth_access_tokens", uniqueConstraints={@ORM\UniqueConstraint(name="access_token", columns={"access_token"})}, indexes={@ORM\Index(name="session_id", columns={"session_id"})})
 * @ORM\Entity
 */
class OauthAccessTokens
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="access_token", type="string", length=255, nullable=false)
     */
    private $accessToken;

    /**
     * @var int
     *
     * @ORM\Column(name="expire_time", type="integer", nullable=false)
     */
    private $expireTime;

    /**
     * @var \OauthSessions
     *
     * @ORM\ManyToOne(targetEntity="OauthSessions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="id")
     * })
     */
    private $session;


}
