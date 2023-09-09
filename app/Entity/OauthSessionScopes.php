<?php
namespace Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * OauthSessionScopes
 *
 * @ORM\Table(name="oauth_session_scopes", indexes={@ORM\Index(name="session_id", columns={"session_id"}), @ORM\Index(name="scope", columns={"scope"})})
 * @ORM\Entity
 */
class OauthSessionScopes
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
     * @var \OauthSessions
     *
     * @ORM\ManyToOne(targetEntity="OauthSessions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="id")
     * })
     */
    private $session;

    /**
     * @var \OauthScopes
     *
     * @ORM\ManyToOne(targetEntity="OauthScopes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="scope", referencedColumnName="id")
     * })
     */
    private $scope;


}
