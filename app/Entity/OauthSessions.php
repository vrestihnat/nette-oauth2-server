<?php
namespace Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * OauthSessions
 *
 * @ORM\Table(name="oauth_sessions", indexes={@ORM\Index(name="client_id", columns={"client_id"})})
 * @ORM\Entity
 */
class OauthSessions
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
     * @ORM\Column(name="owner_type", type="string", length=255, nullable=false)
     */
    private $ownerType;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_id", type="string", length=255, nullable=false)
     */
    private $ownerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="client_redirect_uri", type="string", length=255, nullable=true)
     */
    private $clientRedirectUri;

    /**
     * @var \OauthClients
     *
     * @ORM\ManyToOne(targetEntity="OauthClients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;


}
